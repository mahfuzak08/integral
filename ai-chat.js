
// ======================
// AI Chat Configuration  
// ======================

// Note: For production use, replace this with your actual Gemini API key
// For security, the API key should be stored on a backend server
const GEMINI_API_KEY = "YOUR_GEMINI_API_KEY_HERE";
const GEMINI_API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent";

// Chat state
let chatMessages = [];
let isChatOpen = false;
let isTyping = false;

// ======================
// Chat UI Functions
// ======================

function toggleChat() {
    isChatOpen = !isChatOpen;
    const chatButton = document.getElementById("chat-button");
    const chatWindow = document.getElementById("chat-window");
    
    if (isChatOpen) {
        chatButton.style.display = "none";
        chatWindow.style.display = "flex";
        
        // Initialize with welcome message if first time
        if (chatMessages.length === 0) {
            addMessage("bot", "Hello! I am your Integral Solutions assistant. How can I help you with our engineering or contracting services today?");
        }
    } else {
        chatButton.style.display = "flex";
        chatWindow.style.display = "none";
    }
}

function addMessage(role, text) {
    chatMessages.push({ role, text });
    renderMessages();
}

function renderMessages() {
    const messagesContainer = document.getElementById("chat-messages");
    messagesContainer.innerHTML = chatMessages.map(msg => {
        const isUser = msg.role === "user";
        return `
            <div class="chat-message ${isUser ? "user" : "bot"}">
                <div class="chat-bubble ${isUser ? "user" : "bot"}">
                    ${msg.text}
                </div>
            </div>
        `;
    }).join("");
    
    // Scroll to bottom
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function showTypingIndicator() {
    const messagesContainer = document.getElementById("chat-messages");
    const typingDiv = document.createElement("div");
    typingDiv.id = "typing-indicator";
    typingDiv.className = "chat-message bot";
    typingDiv.innerHTML = `
        <div class="chat-bubble bot">
            <div class="typing-indicator">
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            </div>
        </div>
    `;
    messagesContainer.appendChild(typingDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function hideTypingIndicator() {
    const typingIndicator = document.getElementById("typing-indicator");
    if (typingIndicator) {
        typingIndicator.remove();
    }
}

// ======================
// Message Handling
// ======================

async function sendMessage() {
    const input = document.getElementById("chat-input");
    const message = input.value.trim();
    
    if (!message || isTyping) return;
    
    // Add user message
    addMessage("user", message);
    input.value = "";
    
    // Show typing indicator
    isTyping = true;
    showTypingIndicator();
    
    // Get AI response
    try {
        const response = await getAIResponse(message);
        hideTypingIndicator();
        addMessage("bot", response);
    } catch (error) {
        hideTypingIndicator();
        addMessage("bot", "I apologize, but I am having trouble connecting right now. Please try again or contact us directly at +880 1796 589534 or info@integralsolutions.com.bd");
        console.error("AI Response Error:", error);
    } finally {
        isTyping = false;
    }
}

function handleChatKeyPress(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
}

// ======================
// AI Response Generation
// ======================

async function getAIResponse(userMessage) {
    // Check if API key is configured
    if (GEMINI_API_KEY === "YOUR_GEMINI_API_KEY_HERE") {
        return getFallbackResponse(userMessage);
    }
    
    try {
        const response = await fetch(`${GEMINI_API_URL}?key=${GEMINI_API_KEY}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                contents: [{
                    parts: [{
                        text: buildPrompt(userMessage)
                    }]
                }],
                generationConfig: {
                    temperature: 0.7,
                    topK: 40,
                    topP: 0.95,
                    maxOutputTokens: 1024,
                }
            })
        });
        
        if (!response.ok) {
            throw new Error("API request failed");
        }
        
        const data = await response.json();
        return data.candidates[0].content.parts[0].text;
    } catch (error) {
        console.error("Gemini API Error:", error);
        return getFallbackResponse(userMessage);
    }
}

function buildPrompt(userMessage) {
    return `You are a helpful customer service assistant for Integral Solutions, a multidisciplinary engineering and contracting company in Bangladesh.

Company Information:
${COMPANY_CONTEXT}

User: ${userMessage}

Instructions:
- Provide helpful, accurate information about Integral Solutions services, products, and company
- Be professional, friendly, and concise
- If asked about services not offered, politely redirect to what the company does offer
- Encourage users to contact the company for quotes or detailed consultations
- Keep responses under 150 words
`;
}

// ======================
// Fallback Responses
// ======================

function getFallbackResponse(userMessage) {
    const lowerMessage = userMessage.toLowerCase();
    
    // Services inquiries
    if (lowerMessage.includes("service") || lowerMessage.includes("what do you do")) {
        return "We provide four main services: Engineering Services (electrical, mechanical, civil systems), Consultation (feasibility studies, project planning), Import & Supply (CCTV, IT solutions, electrical equipment), and First Class Contracting (turnkey EPC projects). Would you like to know more about any specific service?";
    }
    
    // Products inquiries
    if (lowerMessage.includes("product") || lowerMessage.includes("equipment")) {
        return "We import and supply CCTV surveillance systems, IT solutions, electrical equipment (LV/MV), switchgear, substations, generators, pumps, frequency inverters, and more. Contact us at +880 1796 589534 for specific product inquiries.";
    }
    
    // Contact inquiries
    if (lowerMessage.includes("contact") || lowerMessage.includes("phone") || lowerMessage.includes("email") || lowerMessage.includes("address")) {
        return "You can reach us at:\n 374/1, West Rampura, Dhaka-1219, Bangladesh\n +880 1796 589534 or +880 1979 99 6767\n info@integralsolutions.com.bd\n\nBusiness Hours: Sunday-Thursday 9AM-6PM, Saturday 10AM-4PM";
    }
    
    // Quote/pricing
    if (lowerMessage.includes("quote") || lowerMessage.includes("price") || lowerMessage.includes("cost")) {
        return "For project quotes and pricing, please contact us directly at +880 1796 589534 or email info@integralsolutions.com.bd with your project details. We provide customized solutions based on your specific requirements.";
    }
    
    // About company
    if (lowerMessage.includes("about") || lowerMessage.includes("who are you")) {
        return "Integral Solutions is a multidisciplinary engineering and contracting company providing turnkey solutions to public and private sector clients across Bangladesh. We combine engineering excellence, technical consultancy, global sourcing, and first-class contracting services.";
    }
    
    // Default response
    return "Thank you for your question! We specialize in engineering services, consultation, import & supply, and contracting. For detailed information, please call us at +880 1796 589534 or visit our website. How else can I assist you?";
}

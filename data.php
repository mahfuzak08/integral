<?php
$slides = [
    [
        "video" => "upload/1.mp4",
        "image" => "",
        "title" => "Engineering <span class=\"text-blue-500\">Excellence</span>",
        "subtitle" => "Providing turnkey solutions for industrial, commercial, and utility projects across Bangladesh."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=1920",
        "title" => "Smart <span class=\"text-blue-500\">Consultancy</span>",
        "subtitle" => "Expert feasibility studies and project planning to ensure your infrastructure is sound and compliant."
    ],
    [
        "image" => "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1920",
        "title" => "Global <span class=\"text-blue-500\">Sourcing</span>",
        "subtitle" => "High-quality import and supply of electrical, mechanical, and IT infrastructure equipment."
    ]
];
$snippet = true; // Set to false to hide the additional content in the about section
$services = [
    [
        "id" => "engineering",
        "title" => "Engineering Services",
        "description" => "Comprehensive design, installation, and maintenance of electrical, mechanical, and civil systems.",
        "icon" => "Zap",
        "items" => [
            "Power systems and switchgear",
            "Energy management solutions",
            "Industrial automation",
            "Power plant materials",
            "Pumps & Generators"
        ]
    ],
    [
        "id" => "consultancy",
        "title" => "Consultation",
        "description" => "Expert consultancy to ensure projects are technically sound, viable, and industry-compliant.",
        "icon" => "Globe",
        "items" => [
            "Feasibility studies",
            "Project planning & risk management",
            "Equipment specification",
            "IT & Infrastructure advisory"
        ]
    ],
    [
        "id" => "supply",
        "title" => "Import & Supply",
        "description" => "Specializing in sourcing and supplying high-quality industrial products and utilities.",
        "icon" => "Cpu",
        "items" => [
            "CCTV Surveillance systems",
            "IT & Network solutions",
            "Electrical equipment (LV/MV)",
            "Frequency inverters"
        ]
    ],
    [
        "id" => "contracting",
        "title" => "First Class Contracting",
        "description" => "Turnkey solutions handling every phase from project conception to final execution.",
        "icon" => "HardHat",
        "items" => [
            "EPC Projects",
            "Installation & Commissioning",
            "Integration services",
            "Long-term maintenance"
        ]
    ]
];
$products = [
    "Low Voltage Items",
    "Medium Voltage Items",
    "Switch Gear",
    "Sub-Station",
    "Energy Management",
    "Power Plant Material",
    "Dosing Pump",
    "Electrical Motor",
    "Water Pumps",
    "Sludge Dewatering Pump",
    "Submersible Pump",
    "Diesel Driven Pump",
    "Generator",
    "Generator Spare Parts",
    "Generator Servicing",
    "Frequency Inverter",
    "Material Handling Conveyor",
    "CCTV Surveillance",
    "IT Solutions"
];

// Product details with images and categories
$productDetails = [
    'Low Voltage Items' => [
        'image' => 'https://superiorelectricbd.com/wp-content/uploads/2019/06/Low-Voltage-Switchgear.png?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Complete low voltage electrical equipment',
        'category' => 'Electrical'
    ],
    'Medium Voltage Items' => [
        'image' => 'https://www.csemag.com/wp-content/uploads/2025/03/CSE2309_MAG_MEDIUM_03_slider.png?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'High-quality medium voltage components',
        'category' => 'Electrical'
    ],
    'Switch Gear' => [
        'image' => 'https://tyronpowerservices.com/wp-content/uploads/2022/04/Switchgear.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Industrial switchgear and control panels',
        'category' => 'Electrical'
    ],
    'Sub-Station' => [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/Melbourne_Terminal_Station.JPG?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Substation equipment and transformers',
        'category' => 'Electrical'
    ],
    'Energy Management' => [
        'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Smart energy management systems',
        'category' => 'Electrical'
    ],
    'Power Plant Material' => [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Kraftwerk_Niederau%C3%9Fem_2006.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Complete power plant materials and equipment',
        'category' => 'Electrical'
    ],
    'Electrical Motor' => [
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Industrial electric motors and drives',
        'category' => 'Electrical'
    ],
    'Water Pumps' => [
        'image' => 'https://angroupcn.com/wp-content/uploads/2023/12/end-suction-sea-water-pump.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'High-performance water pumping systems',
        'category' => 'Mechanical'
    ],
    'Sludge Dewatering Pump' => [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgiu2xfzlp8JZSyAju7lLxVBnUFUVaw8Gocg&s?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Specialized sludge dewatering solutions',
        'category' => 'Mechanical'
    ],
    'Submersible Pump' => [
        'image' => 'https://i5.walmartimages.com/seo/110v-Submersible-Deep-Well-Water-Pump-Large-Stainless-Steel-Well-Pump-370w-0-5HP_9bfcd32e-a25f-4621-8039-2b22fb746d3f.6f658c1c963a8182f881c65fcc18d926.jpeg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Reliable submersible pump systems',
        'category' => 'Mechanical'
    ],
    'Dosing Pump' => [
        'image' => 'https://images.unsplash.com/photo-1581092335397-9583eb92d232?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Precision chemical dosing pumps',
        'category' => 'Mechanical'
    ],
    'Diesel Driven Pump' => [
        'image' => 'https://www.119pump.com/d/pic/news/zjbetter-xa-diesel-pump1.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Heavy-duty diesel-driven pump sets',
        'category' => 'Mechanical'
    ],
    'Generator' => [
        'image' => 'https://tiimg.tistatic.com/fp/1/004/617/ship-generators-785.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Industrial and commercial generators',
        'category' => 'Electrical'
    ],
    'Generator Spare Parts' => [
        'image' => 'https://thumbs.dreamstime.com/b/lots-auto-parts-15210467.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Genuine generator parts and accessories',
        'category' => 'Electrical'
    ],
    'Generator Servicing' => [
        'image' => 'https://static.vecteezy.com/system/resources/thumbnails/075/720/923/small/technician-industrial-equipment-repair-2023-free-photo.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Professional generator maintenance services',
        'category' => 'Electrical'
    ],
    'Frequency Inverter' => [
        'image' => 'https://www.veikong.com/photo/pl150618342-vfd500_variable_frequency_inverter_with_gprs_function_and_motor_self_learning_features.jpg?s=612x612&w=0&k=20&c=FZf-5aC-gRcrIrHOrgkNu9o-hiC0okUFQqRXKpaSk1M=?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Variable frequency drives and inverters',
        'category' => 'Electrical'
    ],
    'Material Handling Conveyor' => [
        'image' => 'https://dhakayellowpages.com/uploads/category/165253.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Automated material handling systems',
        'category' => 'Mechanical'
    ],
    'CCTV Surveillance' => [
        'image' => 'https://img.freepik.com/premium-photo/security-camera-urban-video_109643-54.jpg?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Advanced surveillance systems for security monitoring',
        'category' => 'IT/Security'
    ],
    'IT Solutions' => [
        'image' => 'https://img.freepik.com/free-vector/illustration-social-media-concept_53876-18377.jpg?semt=ais_hybrid&w=740&q=80?auto=format&fit=crop&q=80&w=1200', 
        'desc' => 'Enterprise IT infrastructure and network solutions',
        'category' => 'IT/Security'
    ]
];

$company_details = [
    'name' => 'Integral Solutions',
    'address' => '374/1, West Rampura (Ground Floor)',
    'city' => 'Dhaka-1219, Bangladesh',
    'phone' => ['+880 1796 589534', '+880 1918 060 422'],
    'email' => 'info@integralsolutionsbd.com',
    'website' => 'https://www.integralsolutionsbd.com',
    'query_email' => 'tariqul@integralsolutionsbd.com',
    'gmail' => 'integral.solutionsbd@gmail.com',
    'business_hours' => [
        'Saturday' => '10:00 AM - 4:00 PM',
        'Sunday - Thursday' => '9:00 AM - 6:00 PM',
        'Friday' => 'Closed'
    ]
];
$company_context = "
    Integral Solutions is a leading multidisciplinary engineering and contracting company based in Dhaka, Bangladesh.

    Core Business Areas:
    1. Engineering Services - Design, installation, and maintenance of electrical, mechanical, and civil systems including power systems, switchgear, energy management, industrial automation, and power plant materials.

    2. Consultation Services - Technical consultancy for feasibility studies, project planning, risk management, equipment specification, and IT/infrastructure advisory.

    3. Import & Supply - Global sourcing and supply of high-quality products including CCTV surveillance systems, IT solutions, electrical equipment (LV/MV), and frequency inverters.

    4. First Class Contracting - Turnkey EPC projects from conception to completion including installation, commissioning, integration, and maintenance services.

    Products & Equipment:
    We import and supply a wide range of products including CCTV surveillance systems, IT solutions, low/medium voltage items, switchgear, substations, energy management systems, power plant materials, electrical motors, various types of pumps (water, sludge dewatering, submersible, dosing, diesel-driven), generators and spare parts, generator servicing, frequency inverters, and material handling conveyors.

    Mission: To deliver high-quality, cost-efficient, and sustainable engineering solutions tailored to our clients' needs.

    Vision: To be the most trusted name in multidisciplinary engineering across Bangladesh.

    Contact Information:
    - Address: 374/1, West Rampura (Ground Floor), Dhaka-1219, Bangladesh
    - Phone: +880 1796 589534, +880 1979 99 6767
    - Email: info@integralsolutionsbd.com

    Business Hours:
    - Sunday - Thursday: 9:00 AM - 6:00 PM
    - Friday: Closed
    - Saturday: 10:00 AM - 4:00 PM";
$displayServices = $snippet ? array_slice($services, 0, 4) : $services;
$displayProducts = $snippet ? array_slice($products, 0, 12) : $products;
function getServiceIcon($iconName) {
    $icons = [
        'Zap' => "<svg class='w-7 h-7' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 10V3L4 14h7v7l9-11h-7z'></path></svg>",
        'Globe' => "<svg class='w-7 h-7' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'></path></svg>",
        'Cpu' => "<svg class='w-7 h-7' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'></path></svg>",
        'HardHat' => "<svg class='w-7 h-7' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'></path></svg>"
    ];
    return $icons[$iconName] ?? $icons['Zap'];
}

function getProductIcon($productName) {
    $icons = [
        'CCTV' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'></path></svg>",
        'IT' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'></path></svg>",
        'Low Voltage' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 10V3L4 14h7v7l9-11h-7z'></path></svg>",
        'Medium Voltage' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 10V3L4 14h7v7l9-11h-7z'></path></svg>",
        'Switch Gear' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4'></path></svg>",
        'Sub-Station' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'></path></svg>",
        'Energy' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'></path></svg>",
        'Power Plant' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z'></path></svg>",
        'Motor' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'></path><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'></path></svg>",
        'Pump' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12'></path></svg>",
        'Generator' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'></path></svg>",
        'Spare Parts' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4'></path></svg>",
        'Servicing' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'></path><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'></path></svg>",
        'Frequency Inverter' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'></path></svg>",
        'Conveyor' => "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4'></path></svg>"
    ];
    
    foreach ($icons as $key => $icon) {
        if (stripos($productName, $key) !== false) {
            return $icon;
        }
    }
    
    return "<svg class='w-6 h-6' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'></path></svg>";
}
?>
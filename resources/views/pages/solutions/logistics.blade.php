@extends('layouts.app')

@section('title', 'Integrated Logistics & Documentation – Al Zaha')

@section('content')
    @include('sections.solution-detail', [
        'current' => 'solutions.logistics',
        'hero' => [
            'eyebrow' => 'Integrated Logistics & Documentation',
            'title' => 'Navigate customs and compliance <span class="accent accent-light">without delays.</span>',
            'intro' => "Al Zaha's Integrated Logistics & Documentation service handles all customs clearance, regulatory compliance, and import documentation for shipments entering the UAE, ensuring your cargo clears smoothly and reaches you on schedule.",
            'image' => asset('images/hero/logistics.jpg'),
        ],
        'how' => [
            'title' => 'How integrated <span class="accent">logistics works.</span>',
            'text' => 'We manage the entire customs clearance process, from document preparation to final cargo release. Our expertise in UAE import regulations and relationships with customs authorities ensure compliance and expedited processing.',
            'items' => [
                'Complete customs documentation preparation and submission',
                'Commercial invoices, packing lists, and certificates of origin',
                'Import permits, regulatory approvals, and product certifications',
                'Duty calculation, payment processing, and customs liaison',
                'Container release and port coordination at Dubai and regional ports',
                'Real-time status updates and proactive issue resolution',
            ],
            'image' => asset('images/home/documentation.jpg'),
            'imageAlt' => 'Documentation process',
        ],
        'audience' => [
            ['icon' => 'building', 'title' => 'Construction Firms', 'description' => 'Navigate complex import regulations for building materials, equipment, and specialty products.'],
            ['icon' => 'hotel', 'title' => 'Hospitality Groups', 'description' => 'Manage customs clearance for imported furnishings, equipment, and food & beverage products.'],
            ['icon' => 'bag', 'title' => 'Retail Businesses', 'description' => 'Process high-volume inventory shipments with speed and regulatory compliance.'],
            ['icon' => 'factory', 'title' => 'Industrial Companies', 'description' => 'Handle specialized permits and certifications for machinery and industrial components.'],
        ],
        'advantages' => [
            'title' => 'Why clear customs through <span class="accent">Al Zaha.</span>',
            'subtitle' => 'Based in Dubai with deep knowledge of UAE customs procedures, we navigate regulations efficiently to keep your cargo moving.',
            'items' => [
                ['icon' => 'file-check', 'title' => 'Regulatory Expertise', 'description' => 'Our team stays current with UAE customs regulations, documentation requirements, and compliance protocols to prevent costly delays.'],
                ['icon' => 'clock', 'title' => 'Fast-Track Processing', 'description' => 'Established relationships with customs authorities and efficient documentation systems minimize clearance times.'],
                ['icon' => 'users', 'title' => 'Dedicated Support', 'description' => 'Your assigned coordinator manages all documentation, communication, and issue resolution throughout the clearance process.'],
            ],
        ],
        'cta' => [
            'title' => 'Get a <span class="accent accent-light">clearance quote.</span>',
            'text' => "Share your shipment details and we'll provide a comprehensive quote including customs clearance, documentation, and delivery coordination.",
        ],
    ])
@endsection

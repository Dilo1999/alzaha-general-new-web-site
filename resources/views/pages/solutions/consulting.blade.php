@extends('layouts.app')

@section('title', 'Destination Delivery Support – Al Zaha')

@section('content')
    @include('sections.solution-detail', [
        'current' => 'solutions.consulting',
        'hero' => [
            'eyebrow' => 'Destination Delivery Support',
            'title' => 'Complete your supply chain <span class="accent accent-light">to your doorstep.</span>',
            'intro' => "Al Zaha's Destination Delivery Support service manages the final mile from customs clearance to your site, coordinating local transport, scheduling deliveries around your operations, and ensuring your cargo arrives when and where you need it across the UAE and GCC.",
            'image' => asset('images/hero/supply-chain.jpg'),
        ],
        'how' => [
            'title' => 'How destination <span class="accent">delivery works.</span>',
            'text' => 'Once your cargo clears customs, we coordinate the final leg to your specified location. From warehouse storage to site delivery, we manage transport, scheduling, and any special handling requirements to ensure seamless completion of your supply chain.',
            'items' => [
                'Port-to-site transport coordination with vetted local carriers',
                'Delivery scheduling aligned with your project timelines and site readiness',
                'Site access coordination and delivery documentation management',
                "Temporary warehousing and storage when immediate delivery isn't feasible",
                'Multi-location delivery coordination for regional projects',
                'Real-time tracking and delivery confirmation with proof of receipt',
            ],
            'image' => asset('images/content/Destination.jpg'),
            'imageAlt' => 'Delivery operations',
        ],
        'audience' => [
            ['icon' => 'building', 'title' => 'Construction Sites', 'description' => 'Coordinate final delivery of materials and equipment to active construction locations with site access management.'],
            ['icon' => 'hotel', 'title' => 'Resort Properties', 'description' => 'Manage last-mile delivery of furniture, fixtures, and equipment to hospitality venues with installation scheduling.'],
            ['icon' => 'bag', 'title' => 'Retail Locations', 'description' => 'Execute synchronized multi-location deliveries for retail openings and inventory restocking.'],
            ['icon' => 'factory', 'title' => 'Industrial Facilities', 'description' => 'Handle specialized equipment delivery with rigging, placement, and safety coordination.'],
        ],
        'advantages' => [
            'title' => 'Why complete delivery with <span class="accent">Al Zaha.</span>',
            'subtitle' => 'Operating throughout the UAE and GCC, we provide the local knowledge and coordination capabilities to execute final-mile delivery reliably.',
            'items' => [
                ['icon' => 'map-pin', 'title' => 'Local Expertise', 'description' => 'Deep knowledge of UAE delivery routes, site access requirements, and regional logistics infrastructure ensures smooth final-mile execution.'],
                ['icon' => 'calendar', 'title' => 'Flexible Scheduling', 'description' => 'We adapt to your project timeline, coordinating deliveries around construction schedules, business operations, and site readiness.'],
                ['icon' => 'target', 'title' => 'End-to-End Accountability', 'description' => 'From port release to your doorstep, one coordinator manages the entire delivery process with real-time updates and issue resolution.'],
            ],
        ],
        'cta' => [
            'title' => 'Plan your <span class="accent accent-light">final mile.</span>',
            'text' => "Provide your delivery requirements and destination details, and we'll prepare a comprehensive quote for final-mile coordination.",
        ],
    ])
@endsection

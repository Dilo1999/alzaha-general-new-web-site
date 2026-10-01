@extends('layouts.app')

@section('title', 'Strategic Sourcing – Al Zaha')

@section('content')
    @include('sections.solution-detail', [
        'current' => 'solutions.sourcing',
        'hero' => [
            'eyebrow' => 'Strategic Sourcing & Procurement',
            'title' => 'Reduce costs, secure supply, <span class="accent accent-light">scale confidently.</span>',
            'intro' => "Al Zaha's Strategic Sourcing & Procurement service connects Dubai-based businesses with verified global suppliers through a single coordination point, delivering competitive pricing, quality assurance, and streamlined vendor management for construction, hospitality, retail, and industrial projects.",
            'image' => asset('images/hero/sourcing.jpg'),
        ],
        'how' => [
            'title' => 'How strategic <span class="accent">sourcing works.</span>',
            'text' => 'We act as your procurement partner, managing supplier relationships, negotiating terms, and consolidating orders across multiple vendors. From initial sourcing to delivery coordination, we handle the complexity so you can focus on your core operations.',
            'items' => [
                'Supplier identification and qualification from our verified global network',
                'Competitive price negotiation leveraging volume purchasing power',
                'Quality control and compliance verification before shipment',
                'Multi-vendor order consolidation for efficiency and cost savings',
                'Single point of contact for all procurement communication',
                'Transparent pricing with no hidden fees or markups',
            ],
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200',
            'imageAlt' => 'Supplier network',
        ],
        'audience' => [
            ['icon' => 'building', 'title' => 'Construction', 'description' => 'Large-scale material procurement for commercial and residential developments.'],
            ['icon' => 'hotel', 'title' => 'Resorts & Hospitality', 'description' => 'FF&E sourcing and specialty equipment for premium hospitality projects.'],
            ['icon' => 'bag', 'title' => 'Retail', 'description' => 'Multi-location inventory sourcing and vendor consolidation for retail chains.'],
            ['icon' => 'factory', 'title' => 'Industrial', 'description' => 'Heavy equipment, machinery, and specialized components for industrial operations.'],
        ],
        'advantages' => [
            'title' => 'Why source through <span class="accent">Al Zaha.</span>',
            'subtitle' => "Dubai's strategic location and our established supplier relationships give you access to global markets with local expertise and support.",
            'items' => [
                ['icon' => 'dollar', 'title' => 'Volume Leverage', 'description' => "Access Al Zaha's combined purchasing power to secure better pricing than individual negotiations."],
                ['icon' => 'shield-check', 'title' => 'Pre-Verified Suppliers', 'description' => 'Work with suppliers already vetted for quality, compliance, and reliability—eliminating due diligence overhead.'],
                ['icon' => 'users', 'title' => 'One Point of Contact', 'description' => 'Coordinate multiple vendors through a single channel, reducing communication complexity and procurement overhead.'],
            ],
        ],
        'cta' => [
            'title' => 'Request a <span class="accent accent-light">procurement quote.</span>',
            'text' => "Share your sourcing requirements and we'll provide a detailed proposal with pricing, timelines, and supplier options.",
        ],
    ])
@endsection

@extends('layouts.app')

@section('title', 'Freight & Shipment Management – Al Zaha')

@section('content')
    @include('sections.solution-detail', [
        'current' => 'solutions.supply-chain',
        'hero' => [
            'eyebrow' => 'Freight & Shipment Management',
            'title' => 'Move cargo seamlessly <span class="accent accent-light">across borders.</span>',
            'intro' => "Al Zaha's Freight & Shipment Management service provides end-to-end coordination for international cargo movement through Dubai, combining air, sea, and land transport with customs expertise to deliver your goods on time and on budget across the GCC and MENA region.",
            'image' => asset('images/hero/logistics.jpg'),
        ],
        'how' => [
            'title' => 'How freight <span class="accent">management works.</span>',
            'text' => "We coordinate every step of your cargo's journey from factory to destination. By consolidating shipments, optimizing routes, and managing carrier relationships, we reduce costs while maintaining schedule integrity and cargo security.",
            'items' => [
                'Multi-modal transport planning (air, sea, land) based on urgency and budget',
                'Shipment consolidation to maximize container utilization and reduce freight costs',
                'Carrier negotiation and booking with vetted logistics partners',
                'Real-time shipment tracking and proactive status updates',
                'Insurance coordination and cargo protection management',
                'Delivery scheduling aligned with project timelines and site readiness',
            ],
            'image' => asset('images/content/Freight.jpg'),
            'imageAlt' => 'Freight operations',
        ],
        'audience' => [
            ['icon' => 'building', 'title' => 'Construction Projects', 'description' => 'Coordinate materials from multiple global suppliers to construction sites across the GCC.'],
            ['icon' => 'hotel', 'title' => 'Resort Developments', 'description' => 'Manage complex FF&E shipments from international manufacturers to hospitality projects.'],
            ['icon' => 'bag', 'title' => 'Retail Operations', 'description' => 'Orchestrate multi-location inventory shipments with synchronized delivery timelines.'],
            ['icon' => 'factory', 'title' => 'Industrial Facilities', 'description' => 'Handle heavy equipment and specialized machinery transport with precision timing.'],
        ],
        'advantages' => [
            'title' => 'Why ship through <span class="accent">Al Zaha.</span>',
            'subtitle' => "Operating from Dubai, one of the world's busiest logistics hubs, we deliver the infrastructure, expertise, and carrier relationships to move your cargo efficiently.",
            'items' => [
                ['icon' => 'map-pin', 'title' => 'Dubai Hub Advantage', 'description' => "Leverage Dubai's world-class logistics infrastructure and connectivity to streamline freight routes and reduce transit times."],
                ['icon' => 'eye', 'title' => 'Real-Time Visibility', 'description' => 'Track every shipment with live updates and proactive issue resolution through our centralized coordination system.'],
                ['icon' => 'shield-check', 'title' => 'Risk Mitigation', 'description' => 'Insurance coordination, backup routing options, and compliance management protect your cargo and timeline.'],
            ],
        ],
        'cta' => [
            'title' => 'Request a <span class="accent accent-light">freight quote.</span>',
            'text' => "Tell us about your shipment requirements and we'll provide freight options, transit times, and competitive pricing.",
        ],
    ])
@endsection

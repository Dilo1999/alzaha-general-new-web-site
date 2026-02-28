<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use Illuminate\Database\Seeder;

class PageSeoSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'route_name' => 'home',
                'page_label' => 'Home',
                'meta_title' => 'Premium Sourcing & Supply Chain Solutions',
                'meta_description' => 'Dubai-based sourcing and supply chain solutions. End-to-end logistics, consulting, and procurement for resorts, construction, retail, and industrial sectors.',
            ],
            [
                'route_name' => 'solutions',
                'page_label' => 'Solutions',
                'meta_title' => 'Solutions – Sourcing, Supply Chain & Logistics',
                'meta_description' => 'Explore our supply chain solutions: sourcing, logistics, consulting, and procurement. Structured control for your business.',
            ],
            [
                'route_name' => 'solutions.sourcing',
                'page_label' => 'Solutions: Sourcing',
                'meta_title' => 'Sourcing – Global Procurement Solutions',
                'meta_description' => 'Premium global sourcing and procurement. Direct manufacturer relationships, quality assurance, and consolidated shipments from Dubai.',
            ],
            [
                'route_name' => 'solutions.supply-chain',
                'page_label' => 'Solutions: Supply Chain',
                'meta_title' => 'Supply Chain – Integrated Logistics',
                'meta_description' => 'Structured supply chain management. End-to-end coordination, documentation, and delivery for complex procurement projects.',
            ],
            [
                'route_name' => 'solutions.logistics',
                'page_label' => 'Solutions: Logistics',
                'meta_title' => 'Logistics – Freight & Distribution',
                'meta_description' => 'Freight forwarding and logistics from Dubai. Air, sea, and land freight. Consolidated shipments and last-mile distribution.',
            ],
            [
                'route_name' => 'solutions.consulting',
                'page_label' => 'Solutions: Consulting',
                'meta_title' => 'Consulting – Supply Chain Advisory',
                'meta_description' => 'Supply chain and procurement consulting. Strategic advisory for sourcing, vendor selection, and process optimization.',
            ],
            [
                'route_name' => 'industries',
                'page_label' => 'Industries',
                'meta_title' => 'Industries We Serve',
                'meta_description' => 'Supply chain solutions for resorts, construction, retail, and industrial sectors. Tailored sourcing and logistics for your industry.',
            ],
            [
                'route_name' => 'how-it-works',
                'page_label' => 'How It Works',
                'meta_title' => 'How It Works',
                'meta_description' => 'Discover how Al Zaha delivers premium sourcing and supply chain solutions. From initial consultation to final delivery.',
            ],
            [
                'route_name' => 'blogs.index',
                'page_label' => 'Blog',
                'meta_title' => 'Blog – Insights on Sourcing & Supply Chain',
                'meta_description' => 'Read insights on sourcing, supply chain, logistics, and procurement from Al Zaha. Industry updates and best practices.',
            ],
            [
                'route_name' => 'quote',
                'page_label' => 'Get a Quote',
                'meta_title' => 'Get a Quote',
                'meta_description' => 'Request a quote for premium sourcing and supply chain solutions. Discuss your procurement needs with Al Zaha.',
            ],
            [
                'route_name' => 'contact',
                'page_label' => 'Contact',
                'meta_title' => 'Contact Us',
                'meta_description' => 'Contact Al Zaha General Trading for supply chain and sourcing consultations. Get in touch with our team in Dubai.',
            ],
            [
                'route_name' => 'about',
                'page_label' => 'About Us',
                'meta_title' => 'About Al Zaha',
                'meta_description' => 'Built on coordination. Learn how Al Zaha delivers premium sourcing and supply chain solutions from Dubai for global clients.',
            ],
        ];

        foreach ($pages as $page) {
            PageSeo::updateOrCreate(
                ['route_name' => $page['route_name']],
                array_merge($page, [
                    'og_title' => $page['meta_title'].' – Al Zaha General Trading',
                    'og_description' => $page['meta_description'],
                    'twitter_title' => $page['meta_title'].' – Al Zaha General Trading',
                    'twitter_description' => $page['meta_description'],
                ])
            );
        }
    }
}

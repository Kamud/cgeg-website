<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CGEG Division Data
    |--------------------------------------------------------------------------
    | All nine divisions with their metadata, descriptions, services,
    | and icon identifiers (Tabler Icons).
    */
    private function divisionsData(): array
    {
        return [
            'construction' => [
                'slug'        => 'construction',
                'name'        => 'CJ Global Construction',
                'tagline'     => 'Building the Infrastructure of Tomorrow',
                'icon'        => 'ti-building-skyscraper',
                'description' => 'Large-scale infrastructure and commercial development across Southern Africa and beyond. From residential estates to major civil engineering projects, CJ Global Construction delivers with precision, integrity, and scale.',
                'services'    => [
                    ['icon' => 'ti-building', 'title' => 'Commercial Development', 'desc' => 'Office parks, retail centres, and mixed-use developments.'],
                    ['icon' => 'ti-road', 'title' => 'Civil Infrastructure', 'desc' => 'Roads, bridges, and public infrastructure projects.'],
                    ['icon' => 'ti-home', 'title' => 'Residential Estates', 'desc' => 'Premium housing developments and estate builds.'],
                    ['icon' => 'ti-certificate', 'title' => 'Project Management', 'desc' => 'End-to-end construction management and consulting.'],
                ],
            ],
            'mining' => [
                'slug'        => 'mining',
                'name'        => 'CJ Global Mining',
                'tagline'     => 'Unlocking Africa\'s Natural Wealth',
                'icon'        => 'ti-pick',
                'description' => 'Strategic mineral extraction and mining operations across the African continent. CJ Global Mining operates with a commitment to environmental stewardship and community benefit.',
                'services'    => [
                    ['icon' => 'ti-diamond', 'title' => 'Mineral Extraction', 'desc' => 'Gold, chrome, coal, and precious mineral operations.'],
                    ['icon' => 'ti-search', 'title' => 'Exploration', 'desc' => 'Geological surveys and prospecting services.'],
                    ['icon' => 'ti-truck', 'title' => 'Mining Logistics', 'desc' => 'Ore transport and processing chain management.'],
                    ['icon' => 'ti-leaf', 'title' => 'Environmental Compliance', 'desc' => 'Sustainable mining and land rehabilitation.'],
                ],
            ],
            'logistics' => [
                'slug'        => 'logistics',
                'name'        => 'CJ Global Logistics',
                'tagline'     => 'Moving Africa, Connecting the World',
                'icon'        => 'ti-truck-delivery',
                'description' => 'End-to-end supply chain, freight, and logistics solutions operating across 32+ countries. From last-mile delivery to cross-border freight, CJ Global Logistics keeps commerce moving.',
                'services'    => [
                    ['icon' => 'ti-truck', 'title' => 'Road Freight', 'desc' => 'Cross-border and domestic trucking solutions.'],
                    ['icon' => 'ti-plane', 'title' => 'Air Freight', 'desc' => 'Time-critical cargo and express delivery.'],
                    ['icon' => 'ti-ship', 'title' => 'Sea Freight', 'desc' => 'Container shipping and port logistics.'],
                    ['icon' => 'ti-package', 'title' => 'Warehousing', 'desc' => 'Secure storage and inventory management.'],
                ],
            ],
            'properties' => [
                'slug'        => 'properties',
                'name'        => 'CJ Global Properties',
                'tagline'     => 'Premium Real Estate Across Three Continents',
                'icon'        => 'ti-building-community',
                'description' => 'A diverse portfolio of commercial, residential, and mixed-use properties spanning South Africa, Zimbabwe, the United Kingdom, and the United States. CJ Global Properties delivers premium real estate value.',
                'services'    => [
                    ['icon' => 'ti-building', 'title' => 'Commercial Properties', 'desc' => 'Office buildings, retail spaces, and commercial parks.'],
                    ['icon' => 'ti-home', 'title' => 'Residential Portfolio', 'desc' => 'Luxury homes, apartments, and residential complexes.'],
                    ['icon' => 'ti-chart-bar', 'title' => 'Property Investment', 'desc' => 'Strategic acquisition and portfolio management.'],
                    ['icon' => 'ti-key', 'title' => 'Property Management', 'desc' => 'Full-service management for residential and commercial assets.'],
                ],
            ],
            'mall' => [
                'slug'        => 'mall',
                'name'        => 'CJ Global Mall',
                'tagline'     => 'Redefining Retail in Africa',
                'icon'        => 'ti-shopping-bag',
                'description' => 'World-class retail and lifestyle destinations anchored by the landmark US$10–15M Sandton Hydon Park Mall development near Harare — a project set to create up to 5,000 jobs and transform the region.',
                'services'    => [
                    ['icon' => 'ti-shopping-cart', 'title' => 'Retail Leasing', 'desc' => 'Premium retail space for national and international brands.'],
                    ['icon' => 'ti-building', 'title' => 'Mall Development', 'desc' => 'End-to-end development of retail and lifestyle centres.'],
                    ['icon' => 'ti-users', 'title' => 'Mall Management', 'desc' => 'Operations, security, and tenant relations.'],
                    ['icon' => 'ti-star', 'title' => 'Anchor Tenants', 'desc' => 'Strategic anchor tenant acquisition and management.'],
                ],
            ],
            'hospitality' => [
                'slug'        => 'hospitality',
                'name'        => 'CJ Restaurants & Nightclubs',
                'tagline'     => 'Experiences Worth Celebrating',
                'icon'        => 'ti-glass-full',
                'description' => 'Premium dining, entertainment, and nightlife experiences across our operational footprint. CJ Restaurants & Nightclubs curates exceptional hospitality experiences with an African soul and global standard.',
                'services'    => [
                    ['icon' => 'ti-tools-kitchen-2', 'title' => 'Fine Dining', 'desc' => 'Premium restaurant experiences and curated menus.'],
                    ['icon' => 'ti-music', 'title' => 'Nightlife', 'desc' => 'Premium nightclub and entertainment venues.'],
                    ['icon' => 'ti-calendar-event', 'title' => 'Events', 'desc' => 'Private dining, corporate events, and bespoke functions.'],
                    ['icon' => 'ti-glass-full', 'title' => 'Bar & Lounge', 'desc' => 'Curated cocktail bars and premium lounge experiences.'],
                ],
            ],
            'wellness' => [
                'slug'        => 'wellness',
                'name'        => 'CJ Global Spas & Salons',
                'tagline'     => 'Wellness Elevated to an Art Form',
                'icon'        => 'ti-spa',
                'description' => 'Luxury spa and beauty experiences delivered across our hospitality and property assets. CJ Global Spas & Salons brings world-class wellness to Southern Africa, London, and beyond.',
                'services'    => [
                    ['icon' => 'ti-heart', 'title' => 'Spa Treatments', 'desc' => 'Signature massages, facials, and body treatments.'],
                    ['icon' => 'ti-sparkles', 'title' => 'Beauty Services', 'desc' => 'Hair, nail, and full beauty salon services.'],
                    ['icon' => 'ti-yoga', 'title' => 'Wellness Programmes', 'desc' => 'Holistic wellness, meditation, and lifestyle coaching.'],
                    ['icon' => 'ti-certificate', 'title' => 'Training Academy', 'desc' => 'Professional beauty and wellness training.'],
                ],
            ],
            'spirits' => [
                'slug'        => 'spirits',
                'name'        => 'CJ Vodka Premium Spirits',
                'tagline'     => 'Crafted for Those Who Demand the Best',
                'icon'        => 'ti-bottle',
                'description' => 'CJ Vodka is the newest chapter in the CGEG story — a premium spirits brand anchored by a landmark building acquisition in Chicago, bringing an African entrepreneurial spirit to the global luxury spirits market.',
                'services'    => [
                    ['icon' => 'ti-bottle', 'title' => 'CJ Vodka Range', 'desc' => 'Premium vodka expressions crafted to global standards.'],
                    ['icon' => 'ti-building-store', 'title' => 'Distribution', 'desc' => 'International distribution across key markets.'],
                    ['icon' => 'ti-users', 'title' => 'Brand Partnerships', 'desc' => 'Strategic brand and hospitality partnerships.'],
                    ['icon' => 'ti-star', 'title' => 'Luxury Positioning', 'desc' => 'Exclusive events, activations, and brand experiences.'],
                ],
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Page Controllers
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        $divisions = $this->divisionsData();
        return view('pages.home', compact('divisions'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function divisions()
    {
        $divisions = $this->divisionsData();
        return view('pages.divisions.index', compact('divisions'));
    }

    public function division(string $slug)
    {
        $divisions = $this->divisionsData();

        if (!isset($divisions[$slug])) {
            abort(404);
        }

        $division = $divisions[$slug];
        $otherDivisions = array_filter($divisions, fn($d) => $d['slug'] !== $slug);

        return view('pages.divisions.show', compact('division', 'otherDivisions'));
    }

    public function foundation()
    {
        return view('pages.foundation');
    }

    public function footprint()
    {
        return view('pages.footprint');
    }

    public function leadership()
    {
        $team = [
            'founder' => [
                'name'  => 'Prof. Sir Clemence Jaricha Muzenda',
                'title' => 'Founder & Chief Executive Officer',
                'bio'   => 'A visionary Zimbabwean-born entrepreneur and global business leader, Prof. Sir Clemence Jaricha Muzenda founded CJ Global Express Group Unlimited in 2012 with a mandate to build a diversified conglomerate that would drive economic transformation across Africa and beyond. Under his leadership, CGEG has grown from a single entity to a nine-division powerhouse operating in 32+ countries.',
                'image_slot' => 'founder-leadership',
            ],
            'directors' => [
                ['name' => 'Dr. Chris Grant',        'title' => 'Finance Director',           'image_slot' => 'dir-grant'],
                ['name' => 'Mr. L. Hadebe',           'title' => 'Director, Loss Control',     'image_slot' => 'dir-hadebe'],
                ['name' => 'Munodawafa Mutwara',      'title' => 'Director of Operations',     'image_slot' => 'dir-mutwara'],
                ['name' => 'Mr. Kris Cly',            'title' => 'General Manager',            'image_slot' => 'dir-cly'],
            ],
            'management' => [
                ['name' => 'Lorcadia Phiri',   'title' => 'PA to CEO'],
                ['name' => 'Novela Dube',      'title' => 'Secretary'],
                ['name' => 'Mr. D Nyathi',     'title' => 'HR Manager'],
                ['name' => 'Dr. E Kapongo',    'title' => 'Accountant'],
            ],
            'oversight' => [
                ['name' => 'Ms Vee Jaricha',    'title' => 'Oversight — All Divisions', 'image_slot' => 'oversight-vee'],
                ['name' => 'CJ Junior Jaricha', 'title' => 'Oversight — All Divisions', 'image_slot' => 'oversight-cj'],
            ],
        ];

        return view('pages.leadership', compact('team'));
    }

    public function projects()
    {
        $projects = [
            [
                'title'    => 'Sandton Hydon Park Mall',
                'location' => 'West of Harare, Zimbabwe',
                'value'    => 'US$10–15 Million',
                'partner'  => 'Delatfin Investment (Clemence Zingoni)',
                'impact'   => '2,000–5,000 Jobs',
                'status'   => 'In Development',
                'division' => 'CJ Global Mall',
                'desc'     => 'A landmark retail and lifestyle destination marking CGEG\'s return to Zimbabwe after 17 years. This US$10–15M development will create up to 5,000 jobs and establish a new commercial hub west of Harare.',
                'featured' => true,
                'image_slot' => 'project-sandton',
            ],
            [
                'title'    => 'London Commercial Property',
                'location' => 'London, United Kingdom',
                'value'    => 'Undisclosed',
                'partner'  => null,
                'impact'   => null,
                'status'   => 'Operational',
                'division' => 'CJ Global Properties',
                'desc'     => 'A premium commercial property in London housing operational hospitality and wellness services, anchoring CGEG\'s European presence.',
                'featured' => true,
                'image_slot' => 'project-london',
            ],
            [
                'title'    => 'Chicago Building Acquisition',
                'location' => 'Chicago, Illinois, USA',
                'value'    => 'Undisclosed',
                'partner'  => null,
                'impact'   => null,
                'status'   => 'Operational',
                'division' => 'CJ Vodka Premium Spirits',
                'desc'     => 'A strategic building acquisition in Chicago anchoring the CJ Vodka Premium Spirits division and establishing CGEG\'s North American operational base.',
                'featured' => true,
                'image_slot' => 'project-chicago',
            ],
        ];

        return view('pages.projects', compact('projects'));
    }

    public function contact()
    {
        $divisions = array_column($this->divisionsData(), 'name');
        return view('pages.contact', compact('divisions'));
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:30',
            'division'   => 'nullable|string|max:100',
            'message'    => 'required|string|min:10|max:2000',
            'honeypot'   => 'max:0', // spam protection
        ]);

        // Send email notification
        $to   = env('MAIL_TO_ADDRESS', 'enquiries@cjglobalexpressgroup.com');
        $body = "New enquiry from the CGEG website:\n\n"
              . "Name: {$validated['first_name']} {$validated['last_name']}\n"
              . "Email: {$validated['email']}\n"
              . "Phone: " . ($validated['phone'] ?? 'Not provided') . "\n"
              . "Division of Interest: " . ($validated['division'] ?? 'General') . "\n\n"
              . "Message:\n{$validated['message']}";

        mail($to, "CGEG Website Enquiry — {$validated['first_name']} {$validated['last_name']}", $body,
            "From: {$validated['email']}\r\nReply-To: {$validated['email']}");

        return back()->with('success', 'Thank you for your message. We will be in touch shortly.');
    }
}

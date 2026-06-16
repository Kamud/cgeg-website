<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CGEG Division Data
    |--------------------------------------------------------------------------
    */
    private function divisionsData(): array
    {
        return [
            'construction' => [
                'slug'        => 'construction',
                'name'        => 'CJ Global Construction',
                'tagline'     => 'Building the Infrastructure of Tomorrow',
                'icon'        => 'ti-building-skyscraper',
                'color_accent'=> null,
                'description' => 'Large-scale infrastructure and commercial development across Southern Africa and beyond. From residential estates to major civil engineering projects, CJ Global Construction delivers with precision, integrity, and scale.',
                'body'        => 'CJ Global Construction is the foundational pillar of the CGEG group. Operating across Southern Africa and beyond, we bring together engineering expertise, project management excellence, and a commitment to delivering infrastructure that lasts generations. Our portfolio spans government contracts, private sector developments, and public-private partnerships across the continent.',
                'stats'       => [
                    ['num' => '13+',    'label' => 'Years Operating'],
                    ['num' => '50+',    'label' => 'Projects Delivered'],
                    ['num' => 'CIDB',   'label' => 'Certified'],
                    ['num' => 'Level 1','label' => 'BBBEE Rated'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-map-pin',      'title' => 'Southern Africa Focus',    'desc' => 'Primary operations across South Africa, Zimbabwe, Botswana, and Zambia.'],
                    ['icon' => 'ti-certificate',  'title' => 'CIDB Certified',            'desc' => 'Registered with the Construction Industry Development Board.'],
                    ['icon' => 'ti-users',        'title' => 'Local Employment',          'desc' => 'Committed to creating local jobs and skills transfer on every project.'],
                ],
                'services'    => [
                    ['icon' => 'ti-building',       'title' => 'Commercial Development',  'desc' => 'Office parks, retail centres, and mixed-use commercial developments.'],
                    ['icon' => 'ti-road',           'title' => 'Civil Infrastructure',    'desc' => 'Roads, bridges, drainage, and public infrastructure projects.'],
                    ['icon' => 'ti-home',           'title' => 'Residential Estates',     'desc' => 'Premium housing developments, estates, and residential complexes.'],
                    ['icon' => 'ti-certificate',    'title' => 'Project Management',      'desc' => 'End-to-end construction management, scheduling, and consulting.'],
                ],
            ],

            'mining' => [
                'slug'        => 'mining',
                'name'        => 'CJ Global Mining',
                'tagline'     => 'Unlocking Africa\'s Natural Wealth',
                'icon'        => 'ti-pick',
                'color_accent'=> null,
                'description' => 'Strategic mineral extraction and mining operations across the African continent. CJ Global Mining operates with a commitment to environmental stewardship, community benefit, and sustainable resource development.',
                'body'        => 'Africa holds an estimated 30% of the world\'s mineral reserves — and CJ Global Mining is positioned at the heart of responsible extraction across the continent. Our operations combine modern mining technology with deep respect for the communities and ecosystems we operate within. We partner with governments, local communities, and global commodity markets to deliver value that is both commercially significant and ethically grounded.',
                'stats'       => [
                    ['num' => '32+',  'label' => 'Countries Footprint'],
                    ['num' => 'ISO',  'label' => 'Standards Aligned'],
                    ['num' => '100%', 'label' => 'COIDA Compliant'],
                    ['num' => 'ESG',  'label' => 'Committed'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-leaf',        'title' => 'Environmental Stewardship', 'desc' => 'All operations conducted with mandatory environmental impact assessments and rehabilitation plans.'],
                    ['icon' => 'ti-users',       'title' => 'Community Benefit',         'desc' => 'Local procurement, employment, and skills development embedded in every contract.'],
                    ['icon' => 'ti-shield-check','title' => 'Safety First',              'desc' => 'Zero-harm safety culture with COIDA compliance across all operational sites.'],
                ],
                'services'    => [
                    ['icon' => 'ti-diamond',   'title' => 'Mineral Extraction',      'desc' => 'Gold, chrome, coal, platinum, and precious mineral extraction operations.'],
                    ['icon' => 'ti-search',    'title' => 'Geological Exploration',  'desc' => 'Geological surveys, drilling, and prospecting services.'],
                    ['icon' => 'ti-truck',     'title' => 'Mining Logistics',        'desc' => 'Ore transport, processing chain management, and bulk handling.'],
                    ['icon' => 'ti-leaf',      'title' => 'Environmental Compliance','desc' => 'Sustainable mining practices and land rehabilitation programmes.'],
                ],
            ],

            'logistics' => [
                'slug'        => 'logistics',
                'name'        => 'CJ Global Logistics',
                'tagline'     => 'Moving Africa, Connecting the World',
                'icon'        => 'ti-truck-delivery',
                'color_accent'=> null,
                'description' => 'End-to-end supply chain, freight, and logistics solutions operating across 32+ countries. From last-mile delivery to cross-border freight, CJ Global Logistics keeps commerce moving.',
                'body'        => 'In a continent as vast and dynamic as Africa, logistics is the backbone of commerce. CJ Global Logistics provides reliable, efficient, and scalable supply chain solutions that connect businesses to their markets — whether across a city, a border, or an ocean. With a footprint spanning 32+ countries, we understand the terrain, the regulations, and the relationships that make African logistics work.',
                'stats'       => [
                    ['num' => '32+',  'label' => 'Countries Served'],
                    ['num' => '4',    'label' => 'Freight Modes'],
                    ['num' => '24/7', 'label' => 'Operations'],
                    ['num' => 'CSD',  'label' => 'Registered'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-world',       'title' => 'Pan-African Network',   'desc' => 'Established routes and partnerships across 32+ African countries and internationally.'],
                    ['icon' => 'ti-clock',       'title' => '24/7 Operations',       'desc' => 'Round-the-clock logistics management and cargo tracking capabilities.'],
                    ['icon' => 'ti-shield-check','title' => 'Customs Expertise',     'desc' => 'Deep knowledge of cross-border customs, documentation, and compliance requirements.'],
                ],
                'services'    => [
                    ['icon' => 'ti-truck',    'title' => 'Road Freight',    'desc' => 'Cross-border and domestic trucking across Southern and East Africa.'],
                    ['icon' => 'ti-plane',    'title' => 'Air Freight',     'desc' => 'Time-critical cargo, express courier, and perishable goods logistics.'],
                    ['icon' => 'ti-ship',     'title' => 'Sea Freight',     'desc' => 'Container shipping, breakbulk, and port logistics management.'],
                    ['icon' => 'ti-package',  'title' => 'Warehousing',     'desc' => 'Secure storage, inventory management, and fulfilment services.'],
                ],
            ],

            'properties' => [
                'slug'        => 'properties',
                'name'        => 'CJ Global Properties',
                'tagline'     => 'Premium Real Estate Across Three Continents',
                'icon'        => 'ti-building-community',
                'color_accent'=> null,
                'description' => 'A diverse portfolio of commercial, residential, and mixed-use properties spanning South Africa, Zimbabwe, the United Kingdom, and the United States. CJ Global Properties delivers premium real estate value across three continents.',
                'body'        => 'CJ Global Properties manages a growing portfolio of high-value real estate assets across Africa, Europe, and the Americas. From commercial office parks in South Africa to luxury residential developments in Zimbabwe, and operational property assets in London and Chicago — our portfolio reflects both the scale of CGEG\'s ambition and the diversification of its geographic reach. We acquire, develop, and manage properties that generate long-term value for the group and our partners.',
                'stats'       => [
                    ['num' => '3',       'label' => 'Continents'],
                    ['num' => '4+',      'label' => 'Countries'],
                    ['num' => '$200M+',  'label' => 'Portfolio Value'],
                    ['num' => 'ZA·ZW·UK·US', 'label' => 'Markets'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-world',      'title' => 'Multi-Continental',    'desc' => 'Active portfolio across South Africa, Zimbabwe, United Kingdom, and the United States.'],
                    ['icon' => 'ti-trending-up','title' => 'Capital Growth',        'desc' => 'Strategic acquisition of high-growth real estate across key African and international markets.'],
                    ['icon' => 'ti-key',        'title' => 'Full-Service Mgmt',    'desc' => 'End-to-end property management from acquisition to tenant relations and maintenance.'],
                ],
                'services'    => [
                    ['icon' => 'ti-building',    'title' => 'Commercial Properties','desc' => 'Office buildings, retail spaces, commercial parks, and mixed-use developments.'],
                    ['icon' => 'ti-home',        'title' => 'Residential Portfolio','desc' => 'Luxury homes, apartment complexes, and premium residential estates.'],
                    ['icon' => 'ti-chart-bar',   'title' => 'Property Investment',  'desc' => 'Strategic acquisition, valuation, and real estate portfolio management.'],
                    ['icon' => 'ti-key',         'title' => 'Property Management',  'desc' => 'Full-service management including leasing, maintenance, and tenant relations.'],
                ],
            ],

            'mall' => [
                'slug'        => 'mall',
                'name'        => 'CJ Global Mall',
                'tagline'     => 'Redefining Retail in Africa',
                'icon'        => 'ti-shopping-bag',
                'color_accent'=> null,
                'description' => 'World-class retail and lifestyle destinations anchored by the landmark US$10–15M Sandton Hydon Park Mall development near Harare — a project set to create up to 5,000 jobs and transform the region.',
                'body'        => 'CJ Global Mall is at the forefront of Africa\'s retail renaissance. As consumer markets across the continent grow rapidly, the need for premium, well-managed retail environments has never been greater. Our flagship development — the Sandton Hydon Park Mall west of Harare, Zimbabwe — is a statement of that conviction. Developed in partnership with Delatfin Investment, this US$10–15M project will anchor a new commercial hub and create between 2,000 and 5,000 direct and indirect jobs upon completion.',
                'stats'       => [
                    ['num' => 'US$10–15M', 'label' => 'Flagship Dev. Value'],
                    ['num' => '5,000',     'label' => 'Jobs Projected'],
                    ['num' => '2024',      'label' => 'Development Started'],
                    ['num' => 'ZW',        'label' => 'First Market'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-building-store','title' => 'Sandton Hydon Park', 'desc' => 'US$10–15M landmark mall development west of Harare, Zimbabwe, in partnership with Delatfin Investment.'],
                    ['icon' => 'ti-users',         'title' => '5,000 Jobs Impact',  'desc' => 'Projected 2,000–5,000 direct and indirect jobs created on completion.'],
                    ['icon' => 'ti-arrow-back',    'title' => 'Return to Zimbabwe', 'desc' => 'Marking CGEG\'s landmark return to Zimbabwe after nearly 17 years.'],
                ],
                'services'    => [
                    ['icon' => 'ti-shopping-cart','title' => 'Retail Leasing',   'desc' => 'Premium retail space for national and international brands.'],
                    ['icon' => 'ti-building',     'title' => 'Mall Development',  'desc' => 'End-to-end development of retail and lifestyle centres.'],
                    ['icon' => 'ti-users',        'title' => 'Mall Management',   'desc' => 'Operations, security, cleaning, and tenant relations.'],
                    ['icon' => 'ti-star',         'title' => 'Anchor Tenants',    'desc' => 'Strategic anchor tenant acquisition and long-term leasing.'],
                ],
            ],

            'hospitality' => [
                'slug'        => 'hospitality',
                'name'        => 'CJ Restaurants & Nightclubs',
                'tagline'     => 'Experiences Worth Celebrating',
                'icon'        => 'ti-glass-full',
                'color_accent'=> null,
                'description' => 'Premium dining, entertainment, and nightlife experiences across our operational footprint. CJ Restaurants & Nightclubs curates exceptional hospitality with an African soul and a global standard.',
                'body'        => 'Great hospitality is about more than food and music — it is about creating moments that stay with people. CJ Restaurants & Nightclubs brings together culinary excellence, sophisticated design, and an energetic atmosphere to deliver premium experiences across our operational locations. From intimate fine dining to high-energy entertainment venues, our hospitality division sets the benchmark for premium African lifestyle experiences.',
                'stats'       => [
                    ['num' => 'Multi',  'label' => 'Location Venues'],
                    ['num' => 'ZA·UK', 'label' => 'Active Markets'],
                    ['num' => '5★',    'label' => 'Service Standard'],
                    ['num' => 'B2C',   'label' => '& Corporate Events'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-tools-kitchen-2','title' => 'Culinary Excellence', 'desc' => 'Premium menus curated by experienced chefs drawing on African and international cuisine.'],
                    ['icon' => 'ti-music',          'title' => 'Nightlife & Events',  'desc' => 'High-energy entertainment venues with live performances, DJs, and bespoke event hosting.'],
                    ['icon' => 'ti-building',       'title' => 'London Operations',   'desc' => 'Active hospitality operations within our London commercial property asset.'],
                ],
                'services'    => [
                    ['icon' => 'ti-tools-kitchen-2','title' => 'Fine Dining',     'desc' => 'Premium restaurant experiences with curated menus and exceptional service.'],
                    ['icon' => 'ti-music',          'title' => 'Nightlife',        'desc' => 'Premium nightclub and entertainment venues for discerning clientele.'],
                    ['icon' => 'ti-calendar-event', 'title' => 'Private Events',   'desc' => 'Private dining, corporate events, and bespoke functions.'],
                    ['icon' => 'ti-glass-full',     'title' => 'Bar & Lounge',     'desc' => 'Curated cocktail bars and premium lounge experiences.'],
                ],
            ],

            'wellness' => [
                'slug'        => 'wellness',
                'name'        => 'CJ Global Spas & Salons',
                'tagline'     => 'Wellness Elevated to an Art Form',
                'icon'        => 'ti-spa',
                'color_accent'=> null,
                'description' => 'Luxury spa and beauty experiences delivered across our hospitality and property assets. CJ Global Spas & Salons brings world-class wellness to Southern Africa, London, and beyond.',
                'body'        => 'Wellness is no longer a luxury — it is an expectation. CJ Global Spas & Salons delivers transformative wellness and beauty experiences that go beyond the treatment room. Integrated within our property and hospitality assets, our wellness facilities offer a seamless blend of luxury, skill, and sanctuary. From signature spa treatments to full-service beauty salons and professional training academies, we set the standard for premium wellness across our operational footprint.',
                'stats'       => [
                    ['num' => 'Multi',  'label' => 'Locations'],
                    ['num' => 'ZA·UK', 'label' => 'Active Markets'],
                    ['num' => '5★',    'label' => 'Luxury Standard'],
                    ['num' => 'B2C',   'label' => '& Corporate Wellness'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-heart',    'title' => 'Signature Treatments', 'desc' => 'Bespoke spa journeys combining traditional African wellness practices with global techniques.'],
                    ['icon' => 'ti-sparkles', 'title' => 'Full Beauty Services', 'desc' => 'Comprehensive hair, nail, skin, and beauty services in premium salon environments.'],
                    ['icon' => 'ti-school',   'title' => 'Training Academy',     'desc' => 'Professional beauty and wellness training programmes producing skilled practitioners.'],
                ],
                'services'    => [
                    ['icon' => 'ti-heart',       'title' => 'Spa Treatments',       'desc' => 'Signature massages, facials, body wraps, and holistic treatments.'],
                    ['icon' => 'ti-sparkles',    'title' => 'Beauty Services',       'desc' => 'Hair, nail, skin, and full beauty salon services.'],
                    ['icon' => 'ti-yoga',        'title' => 'Wellness Programmes',   'desc' => 'Holistic wellness, meditation, nutrition, and lifestyle coaching.'],
                    ['icon' => 'ti-certificate', 'title' => 'Training Academy',      'desc' => 'Professional beauty and wellness practitioner training and certification.'],
                ],
            ],

            'spirits' => [
                'slug'        => 'spirits',
                'name'        => 'CJ Vodka Premium Spirits',
                'tagline'     => 'Crafted for Those Who Demand the Best',
                'icon'        => 'ti-bottle',
                'color_accent'=> 'spirits',
                'description' => 'CJ Vodka is the newest chapter in the CGEG story — a premium spirits brand anchored by a landmark building acquisition in Chicago, bringing an African entrepreneurial spirit to the global luxury spirits market.',
                'body'        => 'Born from the same boldness that built a pan-African conglomerate, CJ Vodka Premium Spirits enters the global luxury spirits arena with a clear mandate: to craft a product worthy of the world\'s most discerning palates, and to carry the CGEG story into every glass. Anchored by a landmark building acquisition in Chicago — a city synonymous with ambition and reinvention — CJ Vodka is positioned as a premium international spirits brand with deep African roots and global aspirations.',
                'stats'       => [
                    ['num' => '2024',    'label' => 'Brand Launched'],
                    ['num' => 'Chicago', 'label' => 'US Headquarters'],
                    ['num' => 'Premium', 'label' => 'Market Position'],
                    ['num' => 'Global',  'label' => 'Distribution Target'],
                ],
                'highlights'  => [
                    ['icon' => 'ti-building-store','title' => 'Chicago HQ',           'desc' => 'A landmark building acquisition in Chicago anchors the brand\'s North American base and global operations.'],
                    ['icon' => 'ti-globe',         'title' => 'Global Ambition',       'desc' => 'Targeting international distribution across Africa, Europe, and the Americas from launch.'],
                    ['icon' => 'ti-star',          'title' => 'Premium Positioning',   'desc' => 'Crafted to compete at the pinnacle of the global vodka and premium spirits category.'],
                ],
                'services'    => [
                    ['icon' => 'ti-bottle',         'title' => 'CJ Vodka Range',       'desc' => 'Premium vodka expressions crafted to international luxury standards.'],
                    ['icon' => 'ti-building-store', 'title' => 'Distribution',          'desc' => 'International distribution partnerships across key global markets.'],
                    ['icon' => 'ti-users',          'title' => 'Brand Partnerships',    'desc' => 'Strategic co-branding and hospitality partnerships with premium venues.'],
                    ['icon' => 'ti-star',           'title' => 'Brand Experiences',     'desc' => 'Exclusive events, activations, and immersive brand experiences globally.'],
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

        $division      = $divisions[$slug];
        $otherDivisions = array_filter($divisions, fn($d) => $d['slug'] !== $slug);

        // Spirits gets its own moody template
        if ($slug === 'spirits') {
            return view('pages.divisions.spirits', compact('division', 'otherDivisions'));
        }

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
                'name'       => 'Prof. Sir Clemence Jaricha Muzenda',
                'title'      => 'Founder & Chief Executive Officer',
                'bio'        => 'A visionary Zimbabwean-born entrepreneur and global business leader, Prof. Sir Clemence Jaricha Muzenda founded CJ Global Express Group Unlimited in 2012 with a mandate to build a diversified conglomerate that would drive economic transformation across Africa and beyond. Under his leadership, CGEG has grown from a single entity to a nine-division powerhouse operating in 32+ countries.',
                'image_slot' => 'founder-leadership',
            ],
            'directors' => [
                ['name' => 'Dr. Chris Grant',       'title' => 'Finance Director',        'image_slot' => 'dir-grant'],
                ['name' => 'Mr. L. Hadebe',          'title' => 'Director, Loss Control',  'image_slot' => 'dir-hadebe'],
                ['name' => 'Munodawafa Mutwara',     'title' => 'Director of Operations',  'image_slot' => 'dir-mutwara'],
                ['name' => 'Mr. Kris Cly',           'title' => 'General Manager',         'image_slot' => 'dir-cly'],
            ],
            'management' => [
                ['name' => 'Lorcadia Phiri', 'title' => 'PA to CEO'],
                ['name' => 'Novela Dube',    'title' => 'Secretary'],
                ['name' => 'Mr. D Nyathi',   'title' => 'HR Manager'],
                ['name' => 'Dr. E Kapongo',  'title' => 'Accountant'],
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
                'title'      => 'Sandton Hydon Park Mall',
                'location'   => 'West of Harare, Zimbabwe',
                'value'      => 'US$10–15 Million',
                'partner'    => 'Delatfin Investment (Clemence Zingoni)',
                'impact'     => '2,000–5,000 Jobs',
                'status'     => 'In Development',
                'division'   => 'CJ Global Mall',
                'desc'       => 'A landmark retail and lifestyle destination marking CGEG\'s return to Zimbabwe after 17 years. This US$10–15M development will create up to 5,000 jobs and establish a new commercial hub west of Harare.',
                'featured'   => true,
                'image_slot' => 'project-sandton',
            ],
            [
                'title'      => 'London Commercial Property',
                'location'   => 'London, United Kingdom',
                'value'      => 'Undisclosed',
                'partner'    => null,
                'impact'     => null,
                'status'     => 'Operational',
                'division'   => 'CJ Global Properties',
                'desc'       => 'A premium commercial property in London housing operational hospitality and wellness services, anchoring CGEG\'s European presence.',
                'featured'   => true,
                'image_slot' => 'project-london',
            ],
            [
                'title'      => 'Chicago Building Acquisition',
                'location'   => 'Chicago, Illinois, USA',
                'value'      => 'Undisclosed',
                'partner'    => null,
                'impact'     => null,
                'status'     => 'Operational',
                'division'   => 'CJ Vodka Premium Spirits',
                'desc'       => 'A strategic building acquisition in Chicago anchoring the CJ Vodka Premium Spirits division and establishing CGEG\'s North American operational base.',
                'featured'   => true,
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
            'honeypot'   => 'max:0',
        ]);

        $to   = env('MAIL_TO_ADDRESS', 'enquiries@cjglobalexpressgroup.com');
        $body = "New enquiry from the CGEG website:\n\n"
              . "Name: {$validated['first_name']} {$validated['last_name']}\n"
              . "Email: {$validated['email']}\n"
              . "Phone: " . ($validated['phone'] ?? 'Not provided') . "\n"
              . "Division: " . ($validated['division'] ?? 'General') . "\n\n"
              . "Message:\n{$validated['message']}";

        mail($to, "CGEG Website Enquiry — {$validated['first_name']} {$validated['last_name']}", $body,
            "From: {$validated['email']}\r\nReply-To: {$validated['email']}");

        return back()->with('success', 'Thank you for your message. We will be in touch shortly.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
/*
    |--------------------------------------------------------------------------
    | Leadership team — updated from 2026 Corporate Profile
    |--------------------------------------------------------------------------
    */
    private function teamData(): array
    {
        return [
            'founder' => [
                'name'       => 'Prof. Clemence Jaricha',
                'title'      => 'Founder & Chairman',
                'bio'        => 'A visionary Zimbabwean-born entrepreneur, academic, and global business leader, Prof. Clemence Jaricha founded CJ Global Express Group Unlimited in 1997 with a single logistics operation. Under his leadership, CGEG has grown into one of Africa\'s most dynamic multi-sector business empires, operating across 56 countries on six continents with nine distinct divisions.',
                'quote'      => 'We must build businesses that feed families, not just balance sheets.',
                'image'      => asset('images/pages/leadership/founder.jpg'),
            ],
            'directors' => [
                ['name' => 'Dr. Chris Grant',       'title' => 'Finance Director',           'image' => asset('images/pages/leadership/grant.jpg')],
                ['name' => 'Mr. M. Munodawafa',     'title' => 'Director of Operations',     'image' => asset('images/pages/leadership/munodawafa.jpg')],
                ['name' => 'Mr. L. Hadebe',          'title' => 'Director of Loss Control',   'image' => asset('images/pages/leadership/hadebe.jpg')],
                ['name' => 'Mr. Kris Cly',           'title' => 'General Manager',            'image' => asset('images/pages/leadership/cly.jpg')],
            ],
            'management' => [
                ['name' => 'Dr. E. Kapongo',   'title' => 'Group Accountant',              'image' => asset('images/pages/leadership/kapongo.jpg')],
                ['name' => 'Mr. D. Nyathi',    'title' => 'HR Manager',                    'image' => asset('images/pages/leadership/nyathi.jpg')],
                ['name' => 'Ms. C. Zulu',      'title' => 'Secretary',                     'image' => asset('images/pages/leadership/zulu.jpg')],
                ['name' => 'Ms. Lorcadia Phiri','title' => 'Personal Assistant to the CEO','image' => asset('images/pages/leadership/phiri.jpg')],
            ],
            'oversight' => [
                ['name' => 'Dr. Vee Jaricha',    'title' => 'Divisional Oversight — All Divisions', 'image' => asset('images/pages/leadership/vee-jaricha.jpg')],
                ['name' => 'Dr. C. Junior Jaricha','title' => 'Divisional Oversight — All Divisions','image' => asset('images/pages/leadership/cj-junior.jpg')],
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Division data — updated from 2026 Corporate Profile
    |--------------------------------------------------------------------------
    */
    private function divisionsData(): array
    {
        return [
            'construction' => [
                'slug'        => 'construction',
                'name'        => 'CJ Global Construction',
                'tagline'     => 'Building the Infrastructure of Tomorrow',
                'icon'        => 'fa-solid fa-building-columns',
                'color_accent'=> null,
                'description' => 'Commercial, residential, and infrastructure projects across Southern Africa and beyond. CIDB-registered with a portfolio spanning government and private sector builds.',
                'body'        => 'CJ Global Construction is the foundational pillar of the CGEG group. Flagship development: Sandton Hydon Park Mall, Harare — a two-floor mixed-use retail and commercial hub. Our operations combine engineering expertise, project management excellence, and a commitment to delivering infrastructure that lasts generations.',
                'stats'       => [
                    ['num' => '25+',    'label' => 'Years Operating'],
                    ['num' => '56',     'label' => 'Countries Footprint'],
                    ['num' => 'CIDB',   'label' => 'Certified'],
                    ['num' => 'Level 1','label' => 'BBBEE Rated'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-building-columns', 'title' => 'Sandton Hydon Park Mall', 'desc' => 'Flagship two-floor mixed-use retail, office, and fuel station development west of Harare — CGEG\'s landmark return to Zimbabwe after 17 years.'],
                    ['icon' => 'fa-solid fa-graduation-cap',  'title' => 'CIDB Registered',     'desc' => 'Certified with the Construction Industry Development Board across all relevant grading designations.'],
                    ['icon' => 'fa-solid fa-users',        'title' => '25,000+ Jobs Impact', 'desc' => 'Committed to creating local jobs and skills transfer — every project evaluated for its employment impact.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-building',    'title' => 'Commercial Development', 'desc' => 'Office parks, retail centres, and mixed-use commercial developments.'],
                    ['icon' => 'fa-solid fa-flag',        'title' => 'Civil Infrastructure',   'desc' => 'Roads, bridges, drainage, and public infrastructure projects.'],
                    ['icon' => 'fa-solid fa-house',        'title' => 'Residential Estates',    'desc' => 'Premium housing developments, estates, and residential complexes.'],
                    ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Project Management',     'desc' => 'End-to-end construction management, scheduling, and consulting.'],
                ],
                'hero_img'    => asset('images/divisions/construction/hero.jpg'),
                'overview_img'=> asset('images/divisions/construction/overview.jpg'),
                'services_img'=> asset('images/divisions/construction/services.jpg'),
                'action_imgs' => [asset('images/divisions/construction/action-1.jpg'), asset('images/divisions/construction/action-2.jpg'), asset('images/divisions/construction/action-3.jpg')],
            ],

            'mining' => [
                'slug'        => 'mining',
                'name'        => 'CJ Global Mining',
                'tagline'     => 'Unlocking Africa\'s Natural Wealth Responsibly',
                'icon'        => 'fa-solid fa-screwdriver-wrench',
                'color_accent'=> null,
                'description' => 'Mineral extraction and processing operations across Southern Africa. Positioned to support Africa\'s resource economies with responsible, compliant mining practices.',
                'body'        => 'Africa holds an estimated 30% of the world\'s mineral reserves — and CJ Global Mining is positioned at the heart of responsible extraction. Our operations combine modern mining technology with deep respect for the communities and ecosystems we operate within, delivering commercially significant and ethically grounded value.',
                'stats'       => [
                    ['num' => '56',   'label' => 'Country Footprint'],
                    ['num' => 'ESG',  'label' => 'Committed'],
                    ['num' => '100%', 'label' => 'COIDA Compliant'],
                    ['num' => 'ZA·ZW','label' => 'Primary Markets'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-leaf',        'title' => 'Responsible Mining',   'desc' => 'All operations with mandatory environmental impact assessments and comprehensive land rehabilitation plans.'],
                    ['icon' => 'fa-solid fa-users',       'title' => 'Community First',       'desc' => 'Local procurement, employment, and skills development embedded in every contract and operation.'],
                    ['icon' => 'fa-solid fa-shield-halved','title' => 'Safety Culture',        'desc' => 'Zero-harm safety philosophy with full COIDA compliance across all active mining sites.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-wand-magic-sparkles',  'title' => 'Mineral Extraction',      'desc' => 'Gold, chrome, coal, platinum, and precious mineral extraction operations.'],
                    ['icon' => 'fa-solid fa-magnifying-glass',   'title' => 'Geological Exploration',  'desc' => 'Geological surveys, drilling, and prospecting services.'],
                    ['icon' => 'fa-solid fa-truck',    'title' => 'Mining Logistics',         'desc' => 'Ore transport, processing chain management, and bulk handling.'],
                    ['icon' => 'fa-solid fa-leaf',     'title' => 'Rehabilitation',           'desc' => 'Sustainable mining practices and post-operation land rehabilitation.'],
                ],
                'hero_img'    => asset('images/divisions/mining/hero.jpg'),
                'overview_img'=> asset('images/divisions/mining/overview.jpg'),
                'services_img'=> asset('images/divisions/mining/services.jpg'),
                'action_imgs' => [asset('images/divisions/mining/action-1.jpg'), asset('images/divisions/mining/action-2.jpg'), asset('images/divisions/mining/action-3.jpg')],
            ],

            'logistics' => [
                'slug'        => 'logistics',
                'name'        => 'CGEG Unl. Logistics',
                'tagline'     => 'The Original Division. Moving 56 Countries.',
                'icon'        => 'fa-solid fa-truck',
                'color_accent'=> null,
                'description' => 'End-to-end supply chain, freight, and transport solutions operating across 56 countries. The original founding division and the backbone of the Group\'s continental reach.',
                'body'        => 'Logistics is where CGEG began in 1997. What started as a single logistics operation has grown into a continent-spanning supply chain network covering 56 countries. CJ Global Logistics understands the terrain, the regulations, and the relationships that make African logistics work — and we have 25+ years of proof.',
                'stats'       => [
                    ['num' => '56',   'label' => 'Countries Served'],
                    ['num' => '1997', 'label' => 'Founding Division'],
                    ['num' => '25+',  'label' => 'Years Experience'],
                    ['num' => '24/7', 'label' => 'Operations'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-globe',       'title' => 'Pan-African Network',  'desc' => 'Established routes and partnerships across all 56 CGEG operating countries.'],
                    ['icon' => 'fa-solid fa-clock',     'title' => 'The Founding Division','desc' => 'Started in 1997 — logistics is the backbone that made everything else possible.'],
                    ['icon' => 'fa-solid fa-shield-halved','title' => 'Customs Expertise',    'desc' => 'Deep knowledge of cross-border customs, documentation, and compliance requirements.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-truck',   'title' => 'Road Freight',  'desc' => 'Cross-border and domestic trucking across Southern and East Africa.'],
                    ['icon' => 'fa-solid fa-paper-plane',   'title' => 'Air Freight',   'desc' => 'Time-critical cargo, express courier, and perishable goods logistics.'],
                    ['icon' => 'fa-solid fa-truck',    'title' => 'Sea Freight',   'desc' => 'Container shipping, breakbulk, and port logistics management.'],
                    ['icon' => 'fa-solid fa-box-archive', 'title' => 'Warehousing',   'desc' => 'Secure storage, inventory management, and fulfilment services.'],
                ],
                'hero_img'    => asset('images/divisions/logistics/hero.jpg'),
                'overview_img'=> asset('images/divisions/logistics/overview.jpg'),
                'services_img'=> asset('images/divisions/logistics/services.jpg'),
                'action_imgs' => [asset('images/divisions/logistics/action-1.jpg'), asset('images/divisions/logistics/action-2.jpg'), asset('images/divisions/logistics/action-3.jpg')],
            ],

            'mall' => [
                'slug'        => 'mall',
                'name'        => 'CJ Global Mall',
                'tagline'     => 'Redefining Retail in Africa',
                'icon'        => 'fa-solid fa-bag-shopping',
                'color_accent'=> null,
                'description' => 'Retail mall development and management. The Sandton Hydon Park Mall (Harare) marks the Group\'s strategic re-entry into Zimbabwe — a two-floor mixed-use retail and commercial hub.',
                'body'        => 'CJ Global Mall is at the forefront of Africa\'s retail renaissance. Our flagship: the Sandton Hydon Park Mall, a landmark US$670M two-floor development west of Harare featuring retail, office space, and a fuel station — CGEG\'s first major investment in Zimbabwe in 17 years. Developed in partnership with Delatfin Investment and projected to create 2,000–5,000 jobs.',
                'stats'       => [
                    ['num' => 'US$670M', 'label' => 'Flagship Investment'],
                    ['num' => '5,000',   'label' => 'Jobs Projected'],
                    ['num' => '2-Floor', 'label' => 'Mixed-Use Hub'],
                    ['num' => '17yr',    'label' => 'Return to Zimbabwe'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-store','title' => 'Sandton Hydon Park',  'desc' => 'US$670M two-floor mixed-use mall with retail, office space, and fuel station — west of Harare City.'],
                    ['icon' => 'fa-solid fa-users',         'title' => '5,000 Jobs Impact',   'desc' => 'Projected 2,000–5,000 direct and indirect jobs created on completion.'],
                    ['icon' => 'fa-solid fa-flag',          'title' => 'Zimbabwe Re-Entry',   'desc' => 'CGEG\'s landmark return after 17 years — designed to inspire further foreign investment.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-cart-shopping','title' => 'Retail Leasing',  'desc' => 'Premium retail space for national and international brands.'],
                    ['icon' => 'fa-solid fa-building',     'title' => 'Mall Development', 'desc' => 'End-to-end development of retail and lifestyle centres.'],
                    ['icon' => 'fa-solid fa-users',        'title' => 'Mall Management',  'desc' => 'Operations, security, cleaning, and tenant relations.'],
                    ['icon' => 'fa-solid fa-store',  'title' => 'Mixed-Use Assets', 'desc' => 'Fuel station, office space, and commercial hub management.'],
                ],
                'hero_img'    => asset('images/divisions/mall/hero.jpg'),
                'overview_img'=> asset('images/divisions/mall/overview.jpg'),
                'services_img'=> asset('images/divisions/mall/services.jpg'),
                'action_imgs' => [asset('images/divisions/mall/action-1.jpg'), asset('images/divisions/mall/action-2.jpg'), asset('images/divisions/mall/action-3.jpg')],
            ],

            'hospitality' => [
                'slug'        => 'hospitality',
                'name'        => 'CJ Nightclubs & Restaurants',
                'tagline'     => 'African Excellence on the Global Stage',
                'icon'        => 'fa-solid fa-flask',
                'color_accent'=> null,
                'description' => 'Premium dining and entertainment venues in South Africa, Zimbabwe, and now London — a marquee presence in Europe\'s hospitality scene, reinforcing CGEG as a truly global African brand.',
                'body'        => 'CJ Nightclubs & Restaurants brings premium African hospitality to a global audience. Now operational in London alongside our wellness brand, CGEG becomes the first African conglomerate of this scale to establish hospitality and nightlife in London\'s premium market. From Southern Africa to Europe, our venues set the benchmark for excellence.',
                'stats'       => [
                    ['num' => 'ZA·ZW·UK','label' => 'Active Markets'],
                    ['num' => 'London',  'label' => '2025 Launch'],
                    ['num' => '1st',     'label' => 'African Brand in London'],
                    ['num' => '5★',      'label' => 'Service Standard'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-landmark','title' => 'London Launch (2025)', 'desc' => 'The first African conglomerate of this scale to establish premium hospitality and nightlife in London.'],
                    ['icon' => 'fa-solid fa-fire','title' => 'Premium Dining',    'desc' => 'Curated menus drawing on African and international culinary traditions in premium settings.'],
                    ['icon' => 'fa-solid fa-music',         'title' => 'Nightlife & Events',  'desc' => 'High-energy entertainment venues with live performances, DJs, and bespoke corporate events.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-fire','title' => 'Fine Dining',    'desc' => 'Premium restaurant experiences with curated menus and exceptional service.'],
                    ['icon' => 'fa-solid fa-music',          'title' => 'Nightlife',       'desc' => 'Premium nightclub and entertainment venues for discerning clientele.'],
                    ['icon' => 'fa-solid fa-calendar', 'title' => 'Private Events',  'desc' => 'Private dining, corporate events, and bespoke function hosting.'],
                    ['icon' => 'fa-solid fa-flask',     'title' => 'Bar & Lounge',    'desc' => 'Curated cocktail bars and premium lounge experiences.'],
                ],
                'hero_img'    => asset('images/divisions/hospitality/hero.jpg'),
                'overview_img'=> asset('images/divisions/hospitality/overview.jpg'),
                'services_img'=> asset('images/divisions/hospitality/services.jpg'),
                'action_imgs' => [asset('images/divisions/hospitality/action-1.jpg'), asset('images/divisions/hospitality/action-2.jpg'), asset('images/divisions/hospitality/action-3.jpg')],
            ],

            'wellness' => [
                'slug'        => 'wellness',
                'name'        => 'CJ Global Saloons & Spas',
                'tagline'     => 'Luxury Wellness. African Soul.',
                'icon'        => 'fa-solid fa-wand-magic-sparkles',
                'color_accent'=> null,
                'description' => 'Luxury wellness and beauty experiences. Now operational in London alongside the restaurant and nightclub brands, targeting the premium lifestyle segment.',
                'body'        => 'CJ Global Saloons & Spas delivers transformative wellness and beauty experiences integrated within our property and hospitality assets. Launched in London in 2025 as part of our European entry strategy, we bring premium African wellness to international markets — from signature spa treatments to full-service beauty salons.',
                'stats'       => [
                    ['num' => 'ZA·ZW·UK','label' => 'Active Markets'],
                    ['num' => 'London',  'label' => '2025 Operational'],
                    ['num' => 'Premium', 'label' => 'Lifestyle Segment'],
                    ['num' => '5★',      'label' => 'Service Standard'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-landmark','title' => 'London Operational',    'desc' => 'Active wellness and beauty services within our London property — part of the integrated hospitality offering.'],
                    ['icon' => 'fa-solid fa-heart',        'title' => 'Signature Treatments',  'desc' => 'Bespoke spa journeys combining traditional African wellness practices with global techniques.'],
                    ['icon' => 'fa-solid fa-graduation-cap',  'title' => 'Training Academy',      'desc' => 'Professional beauty and wellness training programmes producing qualified practitioners.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-heart',       'title' => 'Spa Treatments',      'desc' => 'Signature massages, facials, body wraps, and holistic wellness treatments.'],
                    ['icon' => 'fa-solid fa-wand-magic-sparkles',    'title' => 'Beauty Services',      'desc' => 'Hair, nail, skin, and full beauty salon services.'],
                    ['icon' => 'fa-solid fa-wand-magic-sparkles',        'title' => 'Wellness Programmes',  'desc' => 'Holistic wellness, meditation, nutrition, and lifestyle coaching.'],
                    ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Training Academy',     'desc' => 'Professional beauty and wellness practitioner training and certification.'],
                ],
                'hero_img'    => asset('images/divisions/wellness/hero.jpg'),
                'overview_img'=> asset('images/divisions/wellness/overview.jpg'),
                'services_img'=> asset('images/divisions/wellness/services.jpg'),
                'action_imgs' => [asset('images/divisions/wellness/action-1.jpg'), asset('images/divisions/wellness/action-2.jpg'), asset('images/divisions/wellness/action-3.jpg')],
            ],

            'properties' => [
                'slug'        => 'properties',
                'name'        => 'CJ Global Properties',
                'tagline'     => 'Real Estate Value Across Three Continents',
                'icon'        => 'fa-solid fa-building-columns',
                'color_accent'=> null,
                'description' => 'Commercial and residential real estate portfolio across Southern Africa. Supports the Group\'s infrastructure vision and provides long-term asset value.',
                'body'        => 'CJ Global Properties manages a growing portfolio of high-value real estate assets across Africa, Europe, and the Americas. From commercial developments in South Africa to a prime commercial property acquired in London in 2025 and a building in Chicago — our portfolio reflects CGEG\'s global ambition and commitment to long-term asset value.',
                'stats'       => [
                    ['num' => '3',       'label' => 'Continents'],
                    ['num' => 'ZA·UK·US','label' => 'Key Markets'],
                    ['num' => 'London',  'label' => 'Acquired 2025'],
                    ['num' => 'Chicago', 'label' => 'US Base'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-landmark','title' => 'London Property (2025)', 'desc' => 'Prime commercial property acquired in London — housing CJ Restaurants, Nightclubs, and Beauty Spa operations.'],
                    ['icon' => 'fa-solid fa-globe',        'title' => 'Multi-Continental',      'desc' => 'Active portfolio across South Africa, Zimbabwe, the United Kingdom, and the United States.'],
                    ['icon' => 'fa-solid fa-arrow-trend-up',  'title' => 'Long-Term Value',        'desc' => 'Strategic acquisition of high-growth real estate across key African and international markets.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-building',  'title' => 'Commercial Properties','desc' => 'Office buildings, retail spaces, commercial parks, and mixed-use developments.'],
                    ['icon' => 'fa-solid fa-house',      'title' => 'Residential Portfolio', 'desc' => 'Luxury homes, apartment complexes, and premium residential estates.'],
                    ['icon' => 'fa-solid fa-chart-bar', 'title' => 'Property Investment',   'desc' => 'Strategic acquisition, valuation, and real estate portfolio management.'],
                    ['icon' => 'fa-solid fa-key',       'title' => 'Property Management',   'desc' => 'Full-service management including leasing, maintenance, and tenant relations.'],
                ],
                'hero_img'    => asset('images/divisions/properties/hero.jpg'),
                'overview_img'=> asset('images/divisions/properties/overview.jpg'),
                'services_img'=> asset('images/divisions/properties/services.jpg'),
                'action_imgs' => [asset('images/divisions/properties/action-1.jpg'), asset('images/divisions/properties/action-2.jpg'), asset('images/divisions/properties/action-3.jpg')],
            ],

            'spirits' => [
                'slug'        => 'spirits',
                'name'        => 'CJ Vodka Premium Spirits',
                'tagline'     => 'Crafted for Those Who Demand the Best',
                'icon'        => 'fa-solid fa-flask',
                'color_accent'=> 'spirits',
                'description' => 'NEWEST DIVISION (2025). Manufacturing premium spirits for the US market, anchored in Chicago. Additional hubs planned in KwaZulu-Natal, Lesotho, and Zimbabwe.',
                'body'        => 'CJ Vodka Premium Spirits is CGEG\'s bold pivot into spirits manufacturing. The Chicago facility will produce premium vodka for the US market — one of the world\'s largest premium spirits consumer markets — with global distribution planned. Manufacturing hubs in KwaZulu-Natal and Lesotho will serve the African market, with negotiations underway for a Zimbabwe manufacturing hub.',
                'stats'       => [
                    ['num' => '2025',    'label' => 'Division Launched'],
                    ['num' => 'Chicago', 'label' => 'Manufacturing HQ'],
                    ['num' => 'KZN·LS',  'label' => 'African Hubs'],
                    ['num' => 'Global',  'label' => 'Distribution Target'],
                ],
                'highlights'  => [
                    ['icon' => 'fa-solid fa-building','title' => 'Chicago HQ',          'desc' => 'Building acquired in Chicago, Illinois — the Group\'s debut in manufacturing and the North American market.'],
                    ['icon' => 'fa-solid fa-globe',           'title' => 'Global Distribution', 'desc' => 'US market primary, with KwaZulu-Natal and Lesotho hubs serving Africa and Zimbabwe expansion in negotiation.'],
                    ['icon' => 'fa-solid fa-star',            'title' => 'Premium Positioning', 'desc' => 'Entering the US premium spirits market — one of the world\'s largest and most competitive consumer categories.'],
                ],
                'services'    => [
                    ['icon' => 'fa-solid fa-flask',         'title' => 'CJ Vodka Range',      'desc' => 'Premium vodka expressions crafted to international luxury standards for the US market.'],
                    ['icon' => 'fa-solid fa-store', 'title' => 'Distribution',         'desc' => 'International distribution partnerships across key global markets — US, Africa, and beyond.'],
                    ['icon' => 'fa-solid fa-users',          'title' => 'Brand Partnerships',   'desc' => 'Strategic co-branding and hospitality partnerships with premium venues worldwide.'],
                    ['icon' => 'fa-solid fa-star',           'title' => 'Brand Experiences',    'desc' => 'Exclusive events, activations, and immersive brand experiences globally.'],
                ],
                'hero_img'    => asset('images/divisions/spirits/hero.jpg'),
                "overview_img"=> asset('images/divisions/spirits/bottle.jpg'),
                "services_img"=> asset('images/divisions/spirits/services.jpg'),
                'action_imgs' => [asset('images/divisions/spirits/action-1.jpg'), asset('images/divisions/spirits/action-2.jpg'), asset('images/divisions/spirits/action-3.jpg')],
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
        $heroImg   = asset('images/pages/hero.jpg');
        $aboutImg  = asset('images/pages/about-story.jpg');
        return view('pages.home', compact('divisions', 'heroImg', 'aboutImg'));
    }

    public function about()
    {
        $team     = $this->teamData();
        $heroImg  = asset('images/pages/about-hero.jpg');
        $storyImg = asset('images/pages/about-story.jpg');
        return view('pages.about', compact('team', 'heroImg', 'storyImg'));
    }

    public function divisions()
    {
        $divisions = $this->divisionsData();
        return view('pages.divisions.index', compact('divisions'));
    }

    public function division(string $slug)
    {
        $divisions = $this->divisionsData();
        if (!isset($divisions[$slug])) abort(404);

        $division       = $divisions[$slug];
        $otherDivisions = array_filter($divisions, fn($d) => $d['slug'] !== $slug);

        // Each division now has its own hardcoded view (own layout, mood, and image slots)
        // rather than sharing the generic pages.divisions.show template.
        $hardcodedViews = [
            'construction' => 'pages.divisions.construction',
            'mining'       => 'pages.divisions.mining',
            'logistics'    => 'pages.divisions.logistics',
            'mall'         => 'pages.divisions.mall',
            'hospitality'  => 'pages.divisions.hospitality',
            'wellness'     => 'pages.divisions.wellness',
            'properties'   => 'pages.divisions.properties',
            'spirits'      => 'pages.divisions.spirits',
        ];

        if (isset($hardcodedViews[$slug])) {
            return view($hardcodedViews[$slug], compact('division', 'otherDivisions'));
        }

        return view('pages.divisions.show', compact('division', 'otherDivisions'));
    }

    public function foundation()
    {
        $heroImg = asset('images/pages/foundation-hero.jpg');
        $eduImg  = asset('images/pages/foundation-education.jpg');
        $healthImg = asset('images/pages/foundation-healthcare.jpg');
        return view('pages.foundation', compact('heroImg', 'eduImg', 'healthImg'));
    }

    public function foundationPartnerSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:150',
            'email'             => 'required|email|max:255',
            'phone'             => 'nullable|string|max:30',
            'organisation'      => 'nullable|string|max:150',
            'involvement_type'  => 'required|string|max:100',
            'message'           => 'required|string|min:10|max:2000',
            'honeypot'          => 'max:0',
        ]);

        try {
            \App\Models\FoundationPartner::create([
                'name'             => $validated['name'],
                'email'            => $validated['email'],
                'phone'            => $validated['phone'] ?? null,
                'organisation'     => $validated['organisation'] ?? null,
                'involvement_type' => $validated['involvement_type'],
                'message'          => $validated['message'],
            ]);
        } catch (\Throwable $e) {
            report($e);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Something went wrong on our end and your enquiry was not saved. Please try again, or email us directly at reception@cjglobalexpressgroup.com.',
                ], 500);
            }

            return back()->withInput()->with('foundation_error', 'Something went wrong on our end and your enquiry was not saved. Please try again, or email us directly at reception@cjglobalexpressgroup.com.');
        }

        $successMessage = 'Thank you for reaching out to the CJ Global Foundation. Our team will be in touch shortly.';

        if ($request->wantsJson()) {
            return response()->json(['message' => $successMessage]);
        }

        return back()->with('foundation_success', $successMessage);
    }

    public function footprint()
    {
        $offices = [
            ['flag'=>'🇿🇦','country'=>'South Africa','name'=>'KwaZulu-Natal (HQ)','address'=>'CJ Global Mall, Bukhanana Reserve, KwaZulu-Natal','phone'=>'+27 66 947 129','img'=>asset('images/pages/footprint/office-kzn.jpg')],
            ['flag'=>'🇿🇼','country'=>'Zimbabwe',    'name'=>'Bulawayo Office',    'address'=>'River Crescent Road, Kelvin West, Bulawayo','phone'=>'+263 77 270 1826','img'=>asset('images/pages/footprint/office-bulawayo.jpg')],
            ['flag'=>'🇬🇧','country'=>'United Kingdom','name'=>'London Operations','address'=>'Prime commercial property — hospitality & wellness','phone'=>null,'img'=>asset('images/pages/footprint/office-london.jpg')],
            ['flag'=>'🇺🇸','country'=>'United States','name'=>'Chicago Manufacturing','address'=>'CJ Vodka Premium Spirits — North American HQ','phone'=>null,'img'=>asset('images/pages/footprint/office-chicago.jpg')],
        ];
        return view('pages.footprint', compact('offices'));
    }

    public function leadership()
    {
        $team = $this->teamData();
        $heroImg = asset('images/pages/leadership-hero.jpg');
        return view('pages.leadership', compact('team', 'heroImg'));
    }

    public function projects()
    {
        $projects = [
            [
                'title'      => 'Sandton Hydon Park Mall',
                'location'   => 'West of Harare City, Zimbabwe',
                'value'      => 'US$670 Million',
                'partner'    => 'Delatfin Investment (Clemence Zingoni)',
                'impact'     => '2,000–5,000 Jobs',
                'status'     => 'In Development',
                'division'   => 'CJ Global Mall / Construction',
                'desc'       => 'A landmark two-floor mixed-use development featuring retail, office space, and a fuel station — CGEG\'s first major investment in Zimbabwe in 17 years. Designed to inspire foreign investor confidence and create up to 5,000 jobs.',
                'featured'   => true,
                'image'      => asset('images/pages/project-sandton.jpg'),
            ],
            [
                'title'      => 'London Market Entry',
                'location'   => 'London, United Kingdom',
                'value'      => 'Undisclosed',
                'partner'    => null,
                'impact'     => null,
                'status'     => 'Operational',
                'division'   => 'CJ Properties / Hospitality / Wellness',
                'desc'       => 'Prime commercial property acquired in London (2025). CJ Restaurants, Nightclubs, and Beauty Spa now operational — making CGEG the first African conglomerate of this scale in London\'s hospitality and wellness market.',
                'featured'   => true,
                'image'      => asset('images/pages/project-london.jpg'),
            ],
            [
                'title'      => 'CJ Vodka — Chicago Manufacturing',
                'location'   => 'Chicago, Illinois, USA',
                'value'      => 'Undisclosed',
                'partner'    => null,
                'impact'     => null,
                'status'     => 'Operational',
                'division'   => 'CJ Vodka Premium Spirits',
                'desc'       => 'Building acquired in Chicago for CJ Vodka Premium Spirits manufacturing — the Group\'s debut in manufacturing and the North American market. Additional hubs in KwaZulu-Natal and Lesotho will serve the African market.',
                'featured'   => true,
                'image'      => asset('images/pages/project-chicago.jpg'),
            ],
        ];
        return view('pages.projects', compact('projects'));
    }

    /*
    |--------------------------------------------------------------------------
    | News — hardcoded summaries of published third-party media coverage
    |--------------------------------------------------------------------------
    | Each entry summarises an external article in our own words and links
    | back to the original publisher. No content is reproduced verbatim.
    */
    private function newsData(): array
    {
        return [
            'cgeg-enters-europe-london' => [
                'title'       => 'CGEG Enters Europe With London Acquisition',
                'category'    => 'International Expansion',
                'date'        => '2026-05-06',
                'source'      => 'The Herald',
                'source_url'  => 'https://www.heraldonline.co.zw/cj-global-express-group-unlimited-eyes-europe/',
                'image'       => asset('images/pages/news/news-europe-expansion.jpg'),
                'excerpt'     => 'CGEG has acquired a prime commercial property in London, marking its first entry into the European market and a strategic push beyond logistics into hospitality and wellness.',
                'body'        => [
                    'CJ Global Express Group Unlimited has acquired a prime commercial property in London, marking its official entry into the European market. Group founder and chairman Prof. Clemence Jaricha described the move as part of a wider strategic shift to diversify beyond logistics into hospitality and wellness.',
                    'The London site is set to host CJ Restaurants & Nightclubs and a CJ Global Spa location, extending the Group\'s hospitality and wellness offering to a new continent. Prof. Jaricha framed the acquisition as more than geographic growth, describing it as part of building "a global African brand."',
                    'The holding company now oversees a portfolio spanning logistics, construction and property, hospitality and wellness, and retail — including CJ Global Mall and CJ Vodka Premium Spirits. The London deal places CGEG among a small group of African-owned multinationals establishing a front-line presence in Europe\'s hospitality and wellness sectors.',
                    'Alongside its commercial growth, the Group continues to invest in community development through the CJ Global Foundation, which supports philanthropy, humanitarian aid, and local development across Zimbabwe. Prof. Jaricha, recently nominated for the 2025 Zimbabwe Men of the Year Awards, has been a vocal advocate for job creation and value addition among young Zimbabwean entrepreneurs.',
                ],
            ],
            'sandton-hydon-park-mall' => [
                'title'       => 'US$800–900M Mall Set for Sandton Hydon Park, West of Harare',
                'category'    => 'Zimbabwe Return',
                'date'        => '2026-03-05',
                'source'      => 'The Herald',
                'source_url'  => 'https://www.herald.co.zw/sa-based-conglomerate-to-build-us15m-mall-in-harare/',
                'image'       => asset('images/pages/news/news-sandton-mall.jpg'),
                'excerpt'     => 'CGEG has announced plans to build a million dollar, two-storey mall at Sandton Hydon Park — the Group\'s first major Zimbabwe investment in 17 years, expected to create up to 5,000 jobs.',
                'body'        => [
                    'CJ Global Express Group Unlimited has announced plans to build a modern, two-storey mall at Sandton Hydon Park, west of Harare, in a project estimated at US$800 million. Founder Prof. Clemence Jaricha said the development will include retail shops, office space, and a service station, bringing a modern shopping experience to the local community.',
                    'The mall marks the Group\'s return to Zimbabwe after relocating its base to South Africa in 2008 amid difficult local economic conditions. "We are using this project as a way of reintegrating into the Zimbabwe economy, and we hope that this will influence other investors to follow suit," Prof. Jaricha said.',
                    'Construction is projected to create between 2,000 and 5,000 new jobs. The project will be carried out in partnership with Delatfin Investment Pty Ltd, a Zimbabwean company owned by businessman Clemence Zingoni, drawing on CGEG\'s prior experience delivering mall developments in Durban and Greenville, South Africa.',
                    'The development is widely seen as a signal of renewed diaspora investor confidence in Zimbabwe, with commentators noting that even modest levels of reinvestment by Zimbabweans abroad could meaningfully accelerate the country\'s economic development.',
                ],
            ],
            'rise-of-a-visionary-prof-jaricha' => [
                'title'       => "The Rise of a Visionary: Prof. Jaricha's Legacy",
                'category'    => 'Profile',
                'date'        => '2025-02-14',
                'source'      => 'Businessbeat 24',
                'source_url'  => 'https://businessbeat24.com/the-rise-of-a-visionary-prof-clemence-jaricha-and-the-legacy-of-cj-global-express-group-unlimited/',
                'image'       => asset('images/pages/news/news-legacy-feature.jpg'),
                'excerpt'     => 'A profile of founder Prof. Clemence Jaricha traces his journey from humble beginnings in Zimbabwe to building a diversified, 32-country business empire — and the philanthropy behind it.',
                'body'        => [
                    'A feature profile examines the career of Prof. Clemence Jaricha, the Zimbabwean-born founder and chairman of CJ Global Express Group Unlimited, describing his path from modest beginnings to leading a diversified business empire now present in over 32 countries.',
                    'The article traces the Group\'s growth across transport, construction, hospitality, real estate, beauty, and mining, framing Prof. Jaricha\'s approach as rooted in the belief that investment in core industries is key to Africa\'s economic transformation. It highlights flagship ventures including CJ Night Clubs and Restaurants, CJ Global Beauty Spa, CJ Global Construction, and CJ Global Mall.',
                    'Particular attention is given to CJ Global Construction\'s affordable housing work in South Africa\'s Mpumalanga Province, and to CJ Global Mall\'s Johannesburg flagship, described as home to more than 100 stores and a range of dining and entertainment options.',
                    'The profile also covers Prof. Jaricha\'s philanthropy through the CJ Global Foundation, which supports vulnerable children and grandparents across Southern Africa through initiatives including orphan life-insurance cover and school supply donations in Zimbabwe, Botswana, and Zambia — work he connects to his own experience growing up as an orphan.',
                ],
            ],
            'cj-vodka-chicago-launch' => [
                'title'       => 'CJ Vodka Premium Spirits Launches in Chicago',
                'category'    => 'US Expansion',
                'date'        => '2025-09-02',
                'source'      => 'Businessbeat 24',
                'source_url'  => 'https://businessbeat24.com/cj-global-expands-to-america-with-chicago-spirits-division/',
                'image'       => asset('images/pages/news/news-chicago-spirits.jpg'),
                'excerpt'     => 'CGEG has expanded into the United States with the launch of CJ Vodka Premium Spirits in Chicago, following a US$185 million building acquisition — the Group\'s eighth division.',
                'body'        => [
                    'CJ Global Express Group Unlimited has announced its expansion into the United States with the launch of CJ Vodka Premium Spirits in Chicago, following a US$185 million acquisition of a Chicago building — one of the highest-profile international investments by a Zimbabwean-owned private group in recent years.',
                    'Headquartered in Southern Africa, CGEG operates across 56 countries spanning construction, mining, logistics, real estate, retail, nightlife, beauty, and hospitality. The move into premium spirits represents both diversification and a deliberate step onto the global stage.',
                    'Prof. Jaricha said the Group\'s manufacturing base will remain firmly rooted in Africa, with hubs planned for KwaZulu-Natal, South Africa, and Lesotho, alongside the new Chicago facility. He also confirmed plans for further shopping mall developments in Zimbabwe and South Africa\'s Eastern Cape province.',
                    'The Vodka launch is described as the Group\'s eighth division and one of its most ambitious moves yet into a competitive US consumer market, underscoring a broader trend of African entrepreneurs building globally competitive brands rooted in African manufacturing.',
                ],
            ],
            'cgeg-eighth-division-manufacturing' => [
                'title'       => 'CGEG Opens Eighth Division, Eyes New Manufacturing Hub',
                'category'    => 'Group Growth',
                'date'        => '2025-09-01',
                'source'      => 'The Herald',
                'source_url'  => 'https://www.heraldonline.co.zw/cj-global-expands-global-footprint/',
                'image'       => asset('images/pages/news/news-eighth-division.jpg'),
                'excerpt'     => 'Prof. Jaricha has confirmed CGEG\'s eighth division, CJ Vodka Premium Spirit, alongside plans for new manufacturing hubs and mall developments in Zimbabwe.',
                'body'        => [
                    'Prof. Clemence Jaricha has confirmed the opening of an eighth division under CJ Global Express Group Unlimited, following the acquisition of a building in Chicago, United States, where the new unit will operate as CJ Vodka Premium Spirit, manufacturing spirits for the US market.',
                    'Beyond Chicago, Prof. Jaricha said the Group is setting up manufacturing hubs in KwaZulu-Natal, South Africa, and in Lesotho, with negotiations underway with the Zimbabwean government for an additional manufacturing site.',
                    'The development ties in with plans to expand further into Zimbabwe through new shopping mall developments along Mutare Road and in Masvingo, Prof. Jaricha\'s hometown. CGEG, present in 56 countries, already operates seven other divisions spanning malls, construction, beauty spas, transport, and nightlife and restaurants.',
                    'The announcement reinforces CGEG\'s pattern of pairing international diversification — most recently into premium spirits manufacturing — with continued reinvestment in its home market of Zimbabwe.',
                ],
            ],
            'cj-properties-kzn-south-coast-expansion' => [
                'title'       => 'CJ Properties Expands KwaZulu-Natal South Coast Portfolio',
                'category'    => 'Portfolio Expansion',
                'date'        => '2026-07-17',
                'source'      => null,
                'source_url'  => null,
                'image'       => asset('images/pages/news/news-kzn-coastal-portfolio.jpg'),
                'excerpt'     => 'CGEG has signed agreements to acquire a group of coastal and commercial properties along the KwaZulu-Natal South Coast, extending its property and hospitality footprint close to Group headquarters.',
                'body'        => [
                    'CJ Global Express Group Unlimited has signed agreements to acquire a group of properties along the KwaZulu-Natal South Coast, spanning both residential and commercial sites in the Port Shepstone area. The acquisitions, concluded through the Group\'s property and hospitality divisions, represent a combined purchase value of approximately R16.45 million.',
                    'The properties include a mix of coastal residential sites and a commercial site earmarked for CJ Night Clubs and Restaurants, continuing the Group\'s pattern of pairing property acquisition with hospitality expansion in markets close to its KwaZulu-Natal headquarters.',
                    'As is standard for property transactions of this nature, the agreements are subject to standard conveyancing and deposit conditions ahead of transfer. Further details will be shared as the transactions are finalised.',
                    'The expansion follows a period of rapid diversification for CGEG, which has recently entered the London and Chicago markets, and reflects continued investment in the Group\'s home region alongside its international growth.',
                ],
            ],
        ];
    }

    public function news()
    {
        $articles = $this->newsData();
        return view('pages.news.index', compact('articles'));
    }

    public function newsArticle(string $slug)
    {
        $articles = $this->newsData();
        abort_unless(isset($articles[$slug]), 404);

        $article = $articles[$slug];
        $related = collect($articles)
            ->except($slug)
            ->take(3);

        return view('pages.news.show', compact('article', 'related', 'slug'));
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

        $to   = env('MAIL_TO_ADDRESS', 'reception@cjglobalexpressgroup.com');
        $body = "New enquiry from CGEG website:\n\n"
              . "Name: {$validated['first_name']} {$validated['last_name']}\n"
              . "Email: {$validated['email']}\n"
              . "Phone: " . ($validated['phone'] ?? 'Not provided') . "\n"
              . "Division: " . ($validated['division'] ?? 'General') . "\n\n"
              . "Message:\n{$validated['message']}";

        mail($to, "CGEG Enquiry — {$validated['first_name']} {$validated['last_name']}", $body,
            "From: {$validated['email']}\r\nReply-To: {$validated['email']}");

        return back()->with('success', 'Thank you for your message. We will be in touch shortly.');
    }
}

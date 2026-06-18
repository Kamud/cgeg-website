<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Placeholder image helper
    | Uses picsum.photos (free, no attribution required, stable URLs)
    | Format: https://picsum.photos/seed/{seed}/W/H
    | Replace any src with the real client asset when ready.
    |--------------------------------------------------------------------------
    */
    public static function placeholderImg(string $seed, int $w, int $h): string
    {
        return "https://picsum.photos/seed/{$seed}/{}/{}";
    }

    private function img(string $seed, int $w, int $h): string
    {
        return "https://picsum.photos/seed/{$seed}/{$w}/{$h}";
    }

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
                'image'      => $this->img('founder-cj', 500, 600),
            ],
            'directors' => [
                ['name' => 'Dr. Chris Grant',       'title' => 'Finance Director',           'image' => $this->img('director-grant',   400, 400)],
                ['name' => 'Mr. M. Munodawafa',     'title' => 'Director of Operations',     'image' => $this->img('director-ops',     400, 400)],
                ['name' => 'Mr. L. Hadebe',          'title' => 'Director of Loss Control',   'image' => $this->img('director-hadebe',  400, 400)],
                ['name' => 'Mr. Kris Cly',           'title' => 'General Manager',            'image' => $this->img('director-cly',     400, 400)],
            ],
            'management' => [
                ['name' => 'Dr. E. Kapongo',   'title' => 'Group Accountant',              'image' => $this->img('mgmt-kapongo', 400, 400)],
                ['name' => 'Mr. D. Nyathi',    'title' => 'HR Manager',                    'image' => $this->img('mgmt-nyathi',  400, 400)],
                ['name' => 'Ms. C. Zulu',      'title' => 'Secretary',                     'image' => $this->img('mgmt-zulu',    400, 400)],
                ['name' => 'Ms. Lorcadia Phiri','title' => 'Personal Assistant to the CEO','image' => $this->img('mgmt-phiri',   400, 400)],
            ],
            'oversight' => [
                ['name' => 'Dr. Vee Jaricha',    'title' => 'Divisional Oversight — All Divisions', 'image' => $this->img('oversight-vee', 400, 400)],
                ['name' => 'Dr. C. Junior Jaricha','title' => 'Divisional Oversight — All Divisions','image' => $this->img('oversight-cj',  400, 400)],
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
                'icon'        => 'ti-building-skyscraper',
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
                    ['icon' => 'ti-building-skyscraper', 'title' => 'Sandton Hydon Park Mall', 'desc' => 'Flagship two-floor mixed-use retail, office, and fuel station development west of Harare — CGEG\'s landmark return to Zimbabwe after 17 years.'],
                    ['icon' => 'ti-certificate',  'title' => 'CIDB Registered',     'desc' => 'Certified with the Construction Industry Development Board across all relevant grading designations.'],
                    ['icon' => 'ti-users',        'title' => '25,000+ Jobs Impact', 'desc' => 'Committed to creating local jobs and skills transfer — every project evaluated for its employment impact.'],
                ],
                'services'    => [
                    ['icon' => 'ti-building',    'title' => 'Commercial Development', 'desc' => 'Office parks, retail centres, and mixed-use commercial developments.'],
                    ['icon' => 'ti-road',        'title' => 'Civil Infrastructure',   'desc' => 'Roads, bridges, drainage, and public infrastructure projects.'],
                    ['icon' => 'ti-home',        'title' => 'Residential Estates',    'desc' => 'Premium housing developments, estates, and residential complexes.'],
                    ['icon' => 'ti-certificate', 'title' => 'Project Management',     'desc' => 'End-to-end construction management, scheduling, and consulting.'],
                ],
                'hero_img'    => $this->img('construction-hero',    1920, 900),
                'overview_img'=> $this->img('construction-overview', 800, 700),
                'services_img'=> $this->img('construction-services', 600, 500),
                'action_imgs' => [$this->img('construction-a1',700,450), $this->img('construction-a2',700,450), $this->img('construction-a3',700,450)],
            ],

            'mining' => [
                'slug'        => 'mining',
                'name'        => 'CJ Global Mining',
                'tagline'     => 'Unlocking Africa\'s Natural Wealth Responsibly',
                'icon'        => 'ti-pick',
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
                    ['icon' => 'ti-leaf',        'title' => 'Responsible Mining',   'desc' => 'All operations with mandatory environmental impact assessments and comprehensive land rehabilitation plans.'],
                    ['icon' => 'ti-users',       'title' => 'Community First',       'desc' => 'Local procurement, employment, and skills development embedded in every contract and operation.'],
                    ['icon' => 'ti-shield-check','title' => 'Safety Culture',        'desc' => 'Zero-harm safety philosophy with full COIDA compliance across all active mining sites.'],
                ],
                'services'    => [
                    ['icon' => 'ti-diamond',  'title' => 'Mineral Extraction',      'desc' => 'Gold, chrome, coal, platinum, and precious mineral extraction operations.'],
                    ['icon' => 'ti-search',   'title' => 'Geological Exploration',  'desc' => 'Geological surveys, drilling, and prospecting services.'],
                    ['icon' => 'ti-truck',    'title' => 'Mining Logistics',         'desc' => 'Ore transport, processing chain management, and bulk handling.'],
                    ['icon' => 'ti-leaf',     'title' => 'Rehabilitation',           'desc' => 'Sustainable mining practices and post-operation land rehabilitation.'],
                ],
                'hero_img'    => $this->img('mining-hero',    1920, 900),
                'overview_img'=> $this->img('mining-overview', 800, 700),
                'services_img'=> $this->img('mining-services', 600, 500),
                'action_imgs' => [$this->img('mining-a1',700,450), $this->img('mining-a2',700,450), $this->img('mining-a3',700,450)],
            ],

            'logistics' => [
                'slug'        => 'logistics',
                'name'        => 'CGEG Unl. Logistics',
                'tagline'     => 'The Original Division. Moving 56 Countries.',
                'icon'        => 'ti-truck-delivery',
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
                    ['icon' => 'ti-world',       'title' => 'Pan-African Network',  'desc' => 'Established routes and partnerships across all 56 CGEG operating countries.'],
                    ['icon' => 'ti-history',     'title' => 'The Founding Division','desc' => 'Started in 1997 — logistics is the backbone that made everything else possible.'],
                    ['icon' => 'ti-shield-check','title' => 'Customs Expertise',    'desc' => 'Deep knowledge of cross-border customs, documentation, and compliance requirements.'],
                ],
                'services'    => [
                    ['icon' => 'ti-truck',   'title' => 'Road Freight',  'desc' => 'Cross-border and domestic trucking across Southern and East Africa.'],
                    ['icon' => 'ti-plane',   'title' => 'Air Freight',   'desc' => 'Time-critical cargo, express courier, and perishable goods logistics.'],
                    ['icon' => 'ti-ship',    'title' => 'Sea Freight',   'desc' => 'Container shipping, breakbulk, and port logistics management.'],
                    ['icon' => 'ti-package', 'title' => 'Warehousing',   'desc' => 'Secure storage, inventory management, and fulfilment services.'],
                ],
                'hero_img'    => $this->img('logistics-hero',    1920, 900),
                'overview_img'=> $this->img('logistics-overview', 800, 700),
                'services_img'=> $this->img('logistics-services', 600, 500),
                'action_imgs' => [$this->img('logistics-a1',700,450), $this->img('logistics-a2',700,450), $this->img('logistics-a3',700,450)],
            ],

            'mall' => [
                'slug'        => 'mall',
                'name'        => 'CJ Global Mall',
                'tagline'     => 'Redefining Retail in Africa',
                'icon'        => 'ti-shopping-bag',
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
                    ['icon' => 'ti-building-store','title' => 'Sandton Hydon Park',  'desc' => 'US$670M two-floor mixed-use mall with retail, office space, and fuel station — west of Harare City.'],
                    ['icon' => 'ti-users',         'title' => '5,000 Jobs Impact',   'desc' => 'Projected 2,000–5,000 direct and indirect jobs created on completion.'],
                    ['icon' => 'ti-flag',          'title' => 'Zimbabwe Re-Entry',   'desc' => 'CGEG\'s landmark return after 17 years — designed to inspire further foreign investment.'],
                ],
                'services'    => [
                    ['icon' => 'ti-shopping-cart','title' => 'Retail Leasing',  'desc' => 'Premium retail space for national and international brands.'],
                    ['icon' => 'ti-building',     'title' => 'Mall Development', 'desc' => 'End-to-end development of retail and lifestyle centres.'],
                    ['icon' => 'ti-users',        'title' => 'Mall Management',  'desc' => 'Operations, security, cleaning, and tenant relations.'],
                    ['icon' => 'ti-gas-station',  'title' => 'Mixed-Use Assets', 'desc' => 'Fuel station, office space, and commercial hub management.'],
                ],
                'hero_img'    => $this->img('mall-hero',    1920, 900),
                'overview_img'=> $this->img('mall-overview', 800, 700),
                'services_img'=> $this->img('mall-services', 600, 500),
                'action_imgs' => [$this->img('mall-a1',700,450), $this->img('mall-a2',700,450), $this->img('mall-a3',700,450)],
            ],

            'hospitality' => [
                'slug'        => 'hospitality',
                'name'        => 'CJ Nightclubs & Restaurants',
                'tagline'     => 'African Excellence on the Global Stage',
                'icon'        => 'ti-glass-full',
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
                    ['icon' => 'ti-building-arch','title' => 'London Launch (2025)', 'desc' => 'The first African conglomerate of this scale to establish premium hospitality and nightlife in London.'],
                    ['icon' => 'ti-tools-kitchen-2','title' => 'Premium Dining',    'desc' => 'Curated menus drawing on African and international culinary traditions in premium settings.'],
                    ['icon' => 'ti-music',         'title' => 'Nightlife & Events',  'desc' => 'High-energy entertainment venues with live performances, DJs, and bespoke corporate events.'],
                ],
                'services'    => [
                    ['icon' => 'ti-tools-kitchen-2','title' => 'Fine Dining',    'desc' => 'Premium restaurant experiences with curated menus and exceptional service.'],
                    ['icon' => 'ti-music',          'title' => 'Nightlife',       'desc' => 'Premium nightclub and entertainment venues for discerning clientele.'],
                    ['icon' => 'ti-calendar-event', 'title' => 'Private Events',  'desc' => 'Private dining, corporate events, and bespoke function hosting.'],
                    ['icon' => 'ti-glass-full',     'title' => 'Bar & Lounge',    'desc' => 'Curated cocktail bars and premium lounge experiences.'],
                ],
                'hero_img'    => $this->img('hospitality-hero',    1920, 900),
                'overview_img'=> $this->img('hospitality-overview', 800, 700),
                'services_img'=> $this->img('hospitality-services', 600, 500),
                'action_imgs' => [$this->img('hospitality-a1',700,450), $this->img('hospitality-a2',700,450), $this->img('hospitality-a3',700,450)],
            ],

            'wellness' => [
                'slug'        => 'wellness',
                'name'        => 'CJ Global Saloons & Spas',
                'tagline'     => 'Luxury Wellness. African Soul.',
                'icon'        => 'ti-spa',
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
                    ['icon' => 'ti-building-arch','title' => 'London Operational',    'desc' => 'Active wellness and beauty services within our London property — part of the integrated hospitality offering.'],
                    ['icon' => 'ti-heart',        'title' => 'Signature Treatments',  'desc' => 'Bespoke spa journeys combining traditional African wellness practices with global techniques.'],
                    ['icon' => 'ti-certificate',  'title' => 'Training Academy',      'desc' => 'Professional beauty and wellness training programmes producing qualified practitioners.'],
                ],
                'services'    => [
                    ['icon' => 'ti-heart',       'title' => 'Spa Treatments',      'desc' => 'Signature massages, facials, body wraps, and holistic wellness treatments.'],
                    ['icon' => 'ti-sparkles',    'title' => 'Beauty Services',      'desc' => 'Hair, nail, skin, and full beauty salon services.'],
                    ['icon' => 'ti-yoga',        'title' => 'Wellness Programmes',  'desc' => 'Holistic wellness, meditation, nutrition, and lifestyle coaching.'],
                    ['icon' => 'ti-certificate', 'title' => 'Training Academy',     'desc' => 'Professional beauty and wellness practitioner training and certification.'],
                ],
                'hero_img'    => $this->img('wellness-hero',    1920, 900),
                'overview_img'=> $this->img('wellness-overview', 800, 700),
                'services_img'=> $this->img('wellness-services', 600, 500),
                'action_imgs' => [$this->img('wellness-a1',700,450), $this->img('wellness-a2',700,450), $this->img('wellness-a3',700,450)],
            ],

            'properties' => [
                'slug'        => 'properties',
                'name'        => 'CJ Global Properties',
                'tagline'     => 'Real Estate Value Across Three Continents',
                'icon'        => 'ti-building-community',
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
                    ['icon' => 'ti-building-arch','title' => 'London Property (2025)', 'desc' => 'Prime commercial property acquired in London — housing CJ Restaurants, Nightclubs, and Beauty Spa operations.'],
                    ['icon' => 'ti-world',        'title' => 'Multi-Continental',      'desc' => 'Active portfolio across South Africa, Zimbabwe, the United Kingdom, and the United States.'],
                    ['icon' => 'ti-trending-up',  'title' => 'Long-Term Value',        'desc' => 'Strategic acquisition of high-growth real estate across key African and international markets.'],
                ],
                'services'    => [
                    ['icon' => 'ti-building',  'title' => 'Commercial Properties','desc' => 'Office buildings, retail spaces, commercial parks, and mixed-use developments.'],
                    ['icon' => 'ti-home',      'title' => 'Residential Portfolio', 'desc' => 'Luxury homes, apartment complexes, and premium residential estates.'],
                    ['icon' => 'ti-chart-bar', 'title' => 'Property Investment',   'desc' => 'Strategic acquisition, valuation, and real estate portfolio management.'],
                    ['icon' => 'ti-key',       'title' => 'Property Management',   'desc' => 'Full-service management including leasing, maintenance, and tenant relations.'],
                ],
                'hero_img'    => $this->img('properties-hero',    1920, 900),
                'overview_img'=> $this->img('properties-overview', 800, 700),
                'services_img'=> $this->img('properties-services', 600, 500),
                'action_imgs' => [$this->img('properties-a1',700,450), $this->img('properties-a2',700,450), $this->img('properties-a3',700,450)],
            ],

            'spirits' => [
                'slug'        => 'spirits',
                'name'        => 'CJ Vodka Premium Spirits',
                'tagline'     => 'Crafted for Those Who Demand the Best',
                'icon'        => 'ti-bottle',
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
                    ['icon' => 'ti-building-factory','title' => 'Chicago HQ',          'desc' => 'Building acquired in Chicago, Illinois — the Group\'s debut in manufacturing and the North American market.'],
                    ['icon' => 'ti-globe',           'title' => 'Global Distribution', 'desc' => 'US market primary, with KwaZulu-Natal and Lesotho hubs serving Africa and Zimbabwe expansion in negotiation.'],
                    ['icon' => 'ti-star',            'title' => 'Premium Positioning', 'desc' => 'Entering the US premium spirits market — one of the world\'s largest and most competitive consumer categories.'],
                ],
                'services'    => [
                    ['icon' => 'ti-bottle',         'title' => 'CJ Vodka Range',      'desc' => 'Premium vodka expressions crafted to international luxury standards for the US market.'],
                    ['icon' => 'ti-building-store', 'title' => 'Distribution',         'desc' => 'International distribution partnerships across key global markets — US, Africa, and beyond.'],
                    ['icon' => 'ti-users',          'title' => 'Brand Partnerships',   'desc' => 'Strategic co-branding and hospitality partnerships with premium venues worldwide.'],
                    ['icon' => 'ti-star',           'title' => 'Brand Experiences',    'desc' => 'Exclusive events, activations, and immersive brand experiences globally.'],
                ],
                'hero_img'    => $this->img('spirits-hero',    1920, 900),
                'overview_img'=> $this->img('spirits-bottle',   600, 900),
                'services_img'=> $this->img('spirits-bar',      600, 500),
                'action_imgs' => [$this->img('spirits-a1',700,450), $this->img('spirits-a2',700,450), $this->img('spirits-a3',700,450)],
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
        $heroImg   = $this->img('cgeg-hero', 1920, 1080);
        $aboutImg  = $this->img('cgeg-about', 800, 900);
        return view('pages.home', compact('divisions', 'heroImg', 'aboutImg'));
    }

    public function about()
    {
        $team     = $this->teamData();
        $heroImg  = $this->img('about-hero', 1920, 700);
        $storyImg = $this->img('about-story', 800, 700);
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

        if ($slug === 'spirits') {
            return view('pages.divisions.spirits', compact('division', 'otherDivisions'));
        }
        return view('pages.divisions.show', compact('division', 'otherDivisions'));
    }

    public function foundation()
    {
        $heroImg = $this->img('foundation-hero', 1920, 800);
        $eduImg  = $this->img('foundation-education', 800, 500);
        $healthImg = $this->img('foundation-healthcare', 800, 500);
        return view('pages.foundation', compact('heroImg', 'eduImg', 'healthImg'));
    }

    public function footprint()
    {
        $offices = [
            ['flag'=>'🇿🇦','country'=>'South Africa','name'=>'KwaZulu-Natal (HQ)','address'=>'CJ Global Mall, Bukhanana Reserve, KwaZulu-Natal','phone'=>'+27 66 947 129','img'=>$this->img('office-kzn',600,400)],
            ['flag'=>'🇿🇼','country'=>'Zimbabwe',    'name'=>'Bulawayo Office',    'address'=>'River Crescent Road, Kelvin West, Bulawayo','phone'=>'+263 77 270 1826','img'=>$this->img('office-bulawayo',600,400)],
            ['flag'=>'🇬🇧','country'=>'United Kingdom','name'=>'London Operations','address'=>'Prime commercial property — hospitality & wellness','phone'=>null,'img'=>$this->img('office-london',600,400)],
            ['flag'=>'🇺🇸','country'=>'United States','name'=>'Chicago Manufacturing','address'=>'CJ Vodka Premium Spirits — North American HQ','phone'=>null,'img'=>$this->img('office-chicago',600,400)],
        ];
        return view('pages.footprint', compact('offices'));
    }

    public function leadership()
    {
        $team = $this->teamData();
        $heroImg = $this->img('leadership-hero', 1920, 600);
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
                'image'      => $this->img('project-sandton', 1200, 700),
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
                'image'      => $this->img('project-london', 800, 500),
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
                'image'      => $this->img('project-chicago', 800, 500),
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

@extends('layouts.app')

@section('title', 'Global Footprint — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Global Express Group Unlimited operates across 32+ countries on six continents — from headquarters in South Africa to offices in Zimbabwe, London, and Chicago.')

@section('content')

<style>
.footprint-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.footprint-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 50% 40%, rgba(201,168,76,0.06) 0%, transparent 65%);
    pointer-events: none;
}

/* SVG World Map */
.map-container {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    padding: var(--space-4);
    position: relative;
    overflow: hidden;
}
.map-container svg {
    width: 100%;
    height: auto;
    display: block;
}

/* Region cards */
.region-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    transition: var(--ease-card);
}
.region-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px); }
.region-icon {
    width: 44px; height: 44px;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 22px;
    margin-bottom: var(--space-2);
}
.region-name {
    font-family: var(--font-display);
    font-size: 20px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.region-count {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: var(--space-2);
}
.region-countries {
    font-size: var(--text-small);
    color: var(--text-secondary);
    line-height: 1.7;
}

/* Office cards */
.office-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    overflow: hidden;
    transition: var(--ease-card);
}
.office-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px); }
.office-card-img { height: 180px; }
.office-card-body { padding: var(--space-3); }
.office-flag {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 6px;
}
.office-name {
    font-family: var(--font-display);
    font-size: 18px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-1);
}
.office-detail {
    display: flex; align-items: flex-start; gap: 8px;
    font-size: var(--text-small);
    color: var(--text-secondary);
    margin-bottom: 6px;
    line-height: 1.5;
}
.office-detail i { color: var(--gold-primary); font-size: 14px; margin-top: 1px; flex-shrink: 0; }

@media (max-width: 768px) {
    .map-container { padding: var(--space-2); }
}

@media (max-width: 768px) {
    .map-container { padding: var(--space-2) !important; }
    .footprint-hero h1 { font-size: clamp(28px, 9vw, 42px); }
}
@media (max-width: 600px) {
    .grid-3 { grid-template-columns: 1fr !important; }
}
</style>

{{-- ── HERO ── --}}
<section class="footprint-hero">
    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">International Presence</div>
        <h1 class="reveal reveal-delay-1">Present in<br><em class="italic-gold">32+ Countries</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            From our headquarters in KwaZulu-Natal to operations across Africa, Europe, and the Americas — CGEG's reach spans six continents and continues to grow.
        </p>
    </div>
</section>

{{-- ── STAT STRIP ── --}}
<div style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);border-bottom:1px solid var(--border-subtle);padding:var(--space-4) 0;">
    <div class="container">
        <div class="grid-4">
            <div class="card-stat reveal"><div class="stat-num">32+</div><div class="stat-label">Countries</div></div>
            <div class="card-stat reveal reveal-delay-1"><div class="stat-num">3</div><div class="stat-label">Continents</div></div>
            <div class="card-stat reveal reveal-delay-2"><div class="stat-num">5</div><div class="stat-label">Key Offices</div></div>
            <div class="card-stat reveal reveal-delay-3"><div class="stat-num">9</div><div class="stat-label">Divisions Operating</div></div>
        </div>
    </div>
</div>

{{-- ── WORLD MAP ── --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom:var(--space-4);">
            <div class="eyebrow reveal">Global Operations</div>
            <h2 class="reveal reveal-delay-1">Our <em class="italic-gold">Footprint</em></h2>
        </div>
        <div class="map-container reveal reveal-delay-1">
            {{-- Simplified SVG world map with active regions highlighted --}}
            <svg viewBox="0 0 1000 500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="World map showing CGEG operational countries highlighted in gold across Africa, Europe and North America">
                <defs>
                    <style>
                        .land { fill: #2A2520; stroke: #3A342E; stroke-width: 0.5; }
                        .active { fill: #C9A84C; opacity: 0.75; }
                        .active-mild { fill: #C9A84C; opacity: 0.4; }
                        .ocean { fill: #1C1814; }
                        .map-label { font-family: 'DM Sans', sans-serif; font-size: 9px; fill: #F5F0E8; letter-spacing: 0.05em; }
                    </style>
                </defs>
                <!-- Ocean background -->
                <rect width="1000" height="500" class="ocean"/>

                <!-- Africa (simplified) -->
                <path class="active" d="M460,160 L510,155 L540,170 L560,200 L565,240 L555,280 L540,320 L520,360 L500,390 L480,370 L465,340 L455,300 L450,260 L448,220 L450,190 Z"/>

                <!-- Southern Africa highlight -->
                <path class="active" d="M455,300 L540,320 L535,350 L520,370 L500,390 L480,370 L465,340 Z"/>

                <!-- Europe (simplified) -->
                <path class="land" d="M450,80 L520,75 L550,90 L545,110 L530,125 L510,130 L490,125 L465,120 L450,110 Z"/>
                <!-- UK highlight -->
                <path class="active" d="M455,78 L470,75 L475,88 L465,95 L455,90 Z"/>

                <!-- North America (simplified) -->
                <path class="land" d="M100,80 L250,75 L280,100 L290,140 L275,180 L240,200 L200,210 L160,200 L130,180 L110,150 L95,120 Z"/>
                <!-- US highlight (Chicago region) -->
                <path class="active-mild" d="M150,120 L220,115 L230,145 L215,165 L185,170 L160,160 L148,140 Z"/>
                <!-- Chicago dot -->
                <circle cx="185" cy="145" r="5" fill="#C9A84C" opacity="0.9"/>

                <!-- South America -->
                <path class="land" d="M200,220 L270,215 L290,260 L285,320 L265,370 L240,390 L220,380 L205,340 L200,290 L195,250 Z"/>

                <!-- Asia (simplified) -->
                <path class="land" d="M560,70 L750,65 L820,90 L830,130 L800,160 L750,175 L690,170 L640,155 L590,140 L565,120 L558,100 Z"/>

                <!-- Australia -->
                <path class="land" d="M730,300 L800,295 L830,320 L825,360 L800,380 L760,375 L735,355 L725,325 Z"/>

                <!-- HQ dot — KZN South Africa -->
                <circle cx="510" cy="345" r="7" fill="#C9A84C"/>
                <circle cx="510" cy="345" r="12" fill="none" stroke="#C9A84C" stroke-width="1.5" opacity="0.5"/>
                <text x="524" y="349" class="map-label">KZN HQ</text>

                <!-- Zimbabwe dot -->
                <circle cx="505" cy="310" r="5" fill="#C9A84C"/>
                <text x="512" y="314" class="map-label">Zimbabwe</text>

                <!-- London dot -->
                <circle cx="462" cy="82" r="5" fill="#C9A84C"/>
                <text x="469" y="86" class="map-label">London</text>

                <!-- Chicago dot label -->
                <text x="192" y="141" class="map-label">Chicago</text>

                <!-- Legend -->
                <rect x="20" y="450" width="12" height="12" fill="#C9A84C" opacity="0.75" rx="2"/>
                <text x="36" y="461" class="map-label">CGEG Active Region</text>
                <circle cx="26" cy="475" r="4" fill="#C9A84C"/>
                <text x="36" y="479" class="map-label">Key Office</text>
            </svg>
            <p style="text-align:center;font-size:10px;color:var(--text-muted);margin-top:var(--space-2);letter-spacing:0.05em;text-transform:uppercase;">Operational footprint across Africa, Europe and North America — 32+ countries</p>
        </div>
    </div>
</section>

{{-- ── REGIONAL BREAKDOWN ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">By Region</div>
            <h2 class="reveal reveal-delay-1">Regional <em class="italic-gold">Presence</em></h2>
        </div>
        <div class="grid-3">
            <div class="region-card reveal">
                <div class="region-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-map"/></svg></div>
                <div class="region-name">Africa</div>
                <div class="region-count">28+ Countries</div>
                <div class="region-countries">South Africa (HQ) · Zimbabwe · Botswana · Zambia · Lesotho · Mozambique · Namibia · Tanzania · Kenya and across the continent.</div>
            </div>
            <div class="region-card reveal reveal-delay-1">
                <div class="region-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-building-library"/></svg></div>
                <div class="region-name">Europe</div>
                <div class="region-count">2+ Countries</div>
                <div class="region-countries">United Kingdom (London commercial property with operational hospitality and wellness services) and expanding European presence.</div>
            </div>
            <div class="region-card reveal reveal-delay-2">
                <div class="region-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-globe-alt"/></svg></div>
                <div class="region-name">Americas</div>
                <div class="region-count">1+ Country</div>
                <div class="region-countries">United States (Chicago building acquisition anchoring the CJ Vodka Premium Spirits division and North American operations).</div>
            </div>
        </div>
    </div>
</section>

{{-- ── KEY OFFICES ── --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Key Offices</div>
            <h2 class="reveal reveal-delay-1">Where to <em class="italic-gold">Find Us</em></h2>
        </div>
        <div class="grid-3">
            <div class="office-card reveal">
                {{-- [IMAGE SLOT] office-kzn | 600×400px — KZN HQ exterior --}}
                <div class="office-card-img">
                    <img src="{{ asset('images/pages/footprint/office-kzn.jpg') }}" alt="KZN Headquarters, KwaZulu-Natal" style="width:100%;height:180px;object-fit:cover;">
                </div>
                <div class="office-card-body">
                    <div class="office-flag">🇿🇦 South Africa — Headquarters</div>
                    <div class="office-name">KwaZulu-Natal Office</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-map-pin"/></svg> Ntambanana, KwaZulu-Natal, South Africa</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-envelope"/></svg> enquiries@cjglobalexpressgroup.com</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-envelope"/></svg> sircj@cjglobalexpressgroup.co.za</div>
                </div>
            </div>

            <div class="office-card reveal reveal-delay-1">
                {{-- [IMAGE SLOT] office-zimbabwe | 600×400px — Bulawayo office --}}
                <div class="office-card-img">
                    <img src="{{ asset('images/pages/footprint/office-bulawayo.jpg') }}" alt="Bulawayo Office, Zimbabwe" style="width:100%;height:180px;object-fit:cover;">
                </div>
                <div class="office-card-body">
                    <div class="office-flag">🇿🇼 Zimbabwe</div>
                    <div class="office-name">Bulawayo Office</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-map-pin"/></svg> River Crescent Rd, Kelvin West, Bulawayo, Zimbabwe</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-envelope"/></svg> founder@cjglobalexpressgroup.com</div>
                </div>
            </div>

            <div class="office-card reveal reveal-delay-2">
                {{-- [IMAGE SLOT] office-london | 600×400px — London office --}}
                <div class="office-card-img">
                    <img src="{{ asset('images/pages/footprint/office-london.jpg') }}" alt="London Operations" style="width:100%;height:180px;object-fit:cover;">
                </div>
                <div class="office-card-body">
                    <div class="office-flag">🇬🇧 United Kingdom</div>
                    <div class="office-name">London Operations</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-map-pin"/></svg> London, United Kingdom</div>
                    <div class="office-detail"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-building-office"/></svg> Hospitality &amp; Wellness Operations</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="section" style="text-align:center;background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container" style="max-width:580px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Operating in Your <em class="italic-gold">Region?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            Whether you're looking to do business, partner, or invest — our teams are on the ground and ready to engage.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Get in Touch</a>
    </div>
</section>

@endsection

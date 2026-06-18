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
        <div class="map-container reveal reveal-delay-1" style="padding:0;overflow:hidden;">
            <img
                src="{{ asset('images/pages/footprint/world-map.jpg') }}"
                alt="CGEG global operational footprint — Africa, Europe and North America across 32+ countries"
                style="width:100%;height:auto;display:block;border-radius:var(--radius-card);"
            >
            <p style="text-align:center;font-size:10px;color:var(--text-muted);padding:var(--space-2) 0 var(--space-1);letter-spacing:0.05em;text-transform:uppercase;">Operational footprint across Africa, Europe and North America — 32+ countries</p>
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
                <div class="region-icon"><i class="fa-solid fa-map" aria-hidden="true"></i></div>
                <div class="region-name">Africa</div>
                <div class="region-count">28+ Countries</div>
                <div class="region-countries">South Africa (HQ) · Zimbabwe · Botswana · Zambia · Lesotho · Mozambique · Namibia · Tanzania · Kenya and across the continent.</div>
            </div>
            <div class="region-card reveal reveal-delay-1">
                <div class="region-icon"><i class="fa-solid fa-landmark" aria-hidden="true"></i></div>
                <div class="region-name">Europe</div>
                <div class="region-count">2+ Countries</div>
                <div class="region-countries">United Kingdom (London commercial property with operational hospitality and wellness services) and expanding European presence.</div>
            </div>
            <div class="region-card reveal reveal-delay-2">
                <div class="region-icon"><i class="fa-solid fa-globe" aria-hidden="true"></i></div>
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
                    <div class="office-detail"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Ntambanana, KwaZulu-Natal, South Africa</div>
                    <div class="office-detail"><i class="fa-solid fa-envelope" aria-hidden="true"></i> enquiries@cjglobalexpressgroup.com</div>
                    <div class="office-detail"><i class="fa-solid fa-envelope" aria-hidden="true"></i> sircj@cjglobalexpressgroup.co.za</div>
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
                    <div class="office-detail"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> River Crescent Rd, Kelvin West, Bulawayo, Zimbabwe</div>
                    <div class="office-detail"><i class="fa-solid fa-envelope" aria-hidden="true"></i> founder@cjglobalexpressgroup.com</div>
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
                    <div class="office-detail"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> London, United Kingdom</div>
                    <div class="office-detail"><i class="fa-solid fa-building" aria-hidden="true"></i> Hospitality &amp; Wellness Operations</div>
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

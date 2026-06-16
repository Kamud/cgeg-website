@extends('layouts.app')

@section('title', 'CJ Global Express Group Unlimited — Building Africa\'s Next Chapter')
@section('meta_description', 'A diversified global conglomerate operating across construction, mining, logistics, properties, hospitality, wellness and spirits in 32+ countries.')

@section('content')

{{-- =====================================================
     HERO
===================================================== --}}
<style>
.hero {
    min-height: 92vh;
    display: flex;
    align-items: center;
    position: relative;
    padding: var(--space-7) 0;
    overflow: hidden;
}
.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(201,168,76,0.06) 0%, transparent 65%);
    pointer-events: none;
}
.hero-content { position: relative; z-index: 2; max-width: 680px; }
.hero-title { font-size: var(--text-hero); margin-bottom: var(--space-2); }
.hero-subtitle {
    font-size: var(--text-body-lg);
    color: var(--text-secondary);
    line-height: 1.75;
    max-width: 500px;
    margin-bottom: var(--space-4);
}
.hero-ctas { display: flex; gap: var(--space-2); align-items: center; flex-wrap: wrap; }
.hero-scroll {
    position: absolute;
    bottom: var(--space-4);
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    color: var(--text-muted);
    font-size: var(--text-label);
    letter-spacing: 0.08em;
    animation: bounce 2s ease-in-out infinite;
}
@keyframes bounce {
    0%,100% { transform: translateX(-50%) translateY(0); }
    50%      { transform: translateX(-50%) translateY(6px); }
}

/* About band */
.about-band { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6); align-items: center; }
.about-band .about-text h2 { margin-bottom: var(--space-2); }
.about-band .about-text p { color: var(--text-secondary); margin-bottom: var(--space-2); }
.compliance-strip { display: flex; flex-wrap: wrap; gap: var(--space-1); margin-top: var(--space-3); }
.compliance-badge {
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.06em;
    padding: 4px 10px;
    border: 1px solid var(--gold-border);
    border-radius: 20px;
    color: var(--gold-primary);
    text-transform: uppercase;
}

/* Divisions grid */
.divisions-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-2); }

/* Founder band */
.founder-band {
    background: var(--surface-raised);
    border-top: 1px solid var(--border-subtle);
    border-bottom: 1px solid var(--border-subtle);
    padding: var(--space-7) 0;
    text-align: center;
}
.founder-band blockquote {
    font-family: var(--font-display);
    font-size: clamp(20px, 2.5vw, 28px);
    font-style: italic;
    color: var(--text-primary);
    max-width: 780px;
    margin: 0 auto var(--space-3);
    line-height: 1.5;
}
.founder-band cite {
    font-family: var(--font-body);
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.1em;
    font-style: normal;
    text-transform: uppercase;
}

/* Foundation CTA */
.foundation-band {
    position: relative;
    overflow: hidden;
    text-align: center;
    padding: var(--space-7) 0;
}
.foundation-band h2 { margin-bottom: var(--space-2); }
.foundation-band p { color: var(--text-secondary); max-width: 520px; margin: 0 auto var(--space-4); }

@media (max-width: 768px) {
    .hero { min-height: 100svh; }
    .about-band { grid-template-columns: 1fr; }
    .divisions-grid { grid-template-columns: 1fr; }
}
@media (max-width: 1024px) {
    .divisions-grid { grid-template-columns: repeat(2, 1fr); }
}
</style>

{{-- Hero --}}
<section class="hero">
    {{-- [IMAGE SLOT] hero-bg | Recommended: 1920×1080px, atmospheric African skyline or construction site --}}
    <div class="img-slot" style="position:absolute;inset:0;border-radius:0;min-height:unset;opacity:0.18;" data-slot="hero-bg" data-size="1920x1080">
        <i class="ti ti-photo"></i>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="eyebrow reveal">32+ Countries &middot; 9 Divisions &middot; Est. 2012</div>
            <h1 class="hero-title reveal reveal-delay-1">
                Building Africa's<br><em class="italic-gold">Next Chapter</em>
            </h1>
            <p class="hero-subtitle reveal reveal-delay-2">
                A diversified global conglomerate driving growth across construction, mining, logistics, properties, hospitality, wellness, and premium spirits.
            </p>
            <div class="hero-ctas reveal reveal-delay-3">
                <a href="{{ route('divisions') }}" class="btn btn-primary">Explore Divisions</a>
                <a href="{{ route('about') }}" class="btn btn-ghost">Our Story</a>
            </div>
        </div>
    </div>

    <div class="hero-scroll">
        <span>Scroll</span>
        <i class="ti ti-chevron-down"></i>
    </div>
</section>

{{-- Stat Strip --}}
<section class="section-sm" style="background: var(--surface-raised); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="grid-4">
            <div class="card-stat reveal"><div class="stat-num">32+</div><div class="stat-label">Countries</div></div>
            <div class="card-stat reveal reveal-delay-1"><div class="stat-num">$200M+</div><div class="stat-label">Capital Deployed</div></div>
            <div class="card-stat reveal reveal-delay-2"><div class="stat-num">9</div><div class="stat-label">Divisions</div></div>
            <div class="card-stat reveal reveal-delay-3"><div class="stat-num">5,000+</div><div class="stat-label">Jobs Created</div></div>
        </div>
    </div>
</section>

{{-- Who We Are --}}
<section class="section">
    <div class="container">
        <div class="about-band">
            <div class="about-text">
                <div class="eyebrow reveal">Who We Are</div>
                <h2 class="reveal reveal-delay-1">A Legacy Built on<br><em class="italic-gold">Integrity</em></h2>
                <p class="reveal reveal-delay-2">
                    Founded in 2012 by Prof. Sir Clemence Jaricha Muzenda, CJ Global Express Group Unlimited has grown from a single vision into a diversified powerhouse spanning nine industries and 32+ countries across Africa, Europe, and the Americas.
                </p>
                <p class="reveal reveal-delay-2">
                    Headquartered in KwaZulu-Natal, South Africa, with offices in Zimbabwe, the United Kingdom, and the United States, CGEG is committed to driving economic transformation, creating employment, and building lasting infrastructure across the continent.
                </p>
                <div class="compliance-strip reveal reveal-delay-3">
                    <span class="compliance-badge">BBBEE Level 1</span>
                    <span class="compliance-badge">COIDA Compliant</span>
                    <span class="compliance-badge">UIF Registered</span>
                    <span class="compliance-badge">CIDB Certified</span>
                    <span class="compliance-badge">CSD Registered</span>
                </div>
                <div style="margin-top: var(--space-3);">
                    <a href="{{ route('about') }}" class="btn btn-link">Read Our Full Story <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>

            {{-- [IMAGE SLOT] about-portrait | 800×900px — Prof. Sir Clemence or HQ exterior --}}
            <div class="img-slot reveal reveal-delay-1" style="min-height: 420px;" data-slot="about-portrait" data-size="800x900">
                <i class="ti ti-photo"></i>
                <span>About Image</span>
            </div>
        </div>
    </div>
</section>

{{-- Divisions --}}
<section class="section" style="background: var(--surface-raised); border-top: 1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom: var(--space-5);">
            <div class="eyebrow reveal">Our Divisions</div>
            <h2 class="reveal reveal-delay-1">Nine Pillars of <em class="italic-gold">Growth</em></h2>
        </div>
        <div class="divisions-grid">
            @foreach($divisions as $slug => $division)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal" style="--delay: {{ $loop->index * 60 }}ms; transition-delay: {{ $loop->index * 60 }}ms; text-decoration: none;">
                <div class="card-icon"><i class="{{ $division['icon'] }}"></i></div>
                <div class="card-title">{{ $division['name'] }}</div>
                <div class="card-desc">{{ Str::limit($division['description'], 90) }}</div>
                <div class="card-link">Explore <i class="ti ti-arrow-right"></i></div>
            </a>
            @endforeach
        </div>
        <div style="text-align:center; margin-top: var(--space-5);">
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All Divisions</a>
        </div>
    </div>
</section>

{{-- Founder's Quote --}}
<div class="founder-band">
    <div class="container">
        <div class="divider-gold" style="margin: 0 auto var(--space-3);"></div>
        <blockquote class="reveal">
            "Our ambition is not merely to build businesses — it is to build the future of a continent. Every project, every division, every partnership is a brick in that foundation."
        </blockquote>
        <cite class="reveal reveal-delay-1">Prof. Sir Clemence Jaricha Muzenda — Founder &amp; CEO</cite>
    </div>
</div>

{{-- Featured Projects --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom: var(--space-5);">
            <div class="eyebrow reveal">Featured Projects</div>
            <h2 class="reveal reveal-delay-1">Projects That Define <em class="italic-gold">a Continent</em></h2>
        </div>
        <div class="grid-3">
            <div class="card card-project reveal">
                {{-- [IMAGE SLOT] project-sandton | 800×500px — Sandton Hydon Park development render --}}
                <div class="img-slot project-img" data-slot="project-sandton" data-size="800x500">
                    <i class="ti ti-photo"></i>
                </div>
                <div class="project-division">CJ Global Mall</div>
                <div class="project-title">Sandton Hydon Park Mall</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;"></i> Harare, Zimbabwe</div>
                <span class="badge-status badge-development">In Development</span>
            </div>
            <div class="card card-project reveal reveal-delay-1">
                {{-- [IMAGE SLOT] project-london | 800×500px — London commercial property --}}
                <div class="img-slot project-img" data-slot="project-london" data-size="800x500">
                    <i class="ti ti-photo"></i>
                </div>
                <div class="project-division">CJ Global Properties</div>
                <div class="project-title">London Commercial Property</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;"></i> London, United Kingdom</div>
                <span class="badge-status badge-operational">Operational</span>
            </div>
            <div class="card card-project reveal reveal-delay-2">
                {{-- [IMAGE SLOT] project-chicago | 800×500px — Chicago building --}}
                <div class="img-slot project-img" data-slot="project-chicago" data-size="800x500">
                    <i class="ti ti-photo"></i>
                </div>
                <div class="project-division">CJ Vodka Premium Spirits</div>
                <div class="project-title">Chicago Building Acquisition</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;"></i> Chicago, Illinois, USA</div>
                <span class="badge-status badge-operational">Operational</span>
            </div>
        </div>
        <div style="text-align:center; margin-top: var(--space-5);">
            <a href="{{ route('projects') }}" class="btn btn-ghost">View All Projects</a>
        </div>
    </div>
</section>

{{-- Foundation CTA --}}
<div class="foundation-band" style="background: var(--surface-raised); border-top: 1px solid var(--border-subtle);">
    <div class="container">
        {{-- [IMAGE SLOT] foundation-band | 1920×600px — community/charity imagery --}}
        <div class="img-slot" style="position:absolute;inset:0;border-radius:0;min-height:unset;opacity:0.12;" data-slot="foundation-band" data-size="1920x600">
        </div>
        <div style="position:relative; z-index:2;">
            <div class="eyebrow reveal" style="justify-content:center;">CJ Global Foundation</div>
            <h2 class="reveal reveal-delay-1">Giving Back to the<br><em class="italic-gold">Communities We Serve</em></h2>
            <p class="reveal reveal-delay-2">
                Active across Zimbabwe, South Africa, Botswana, Zambia, and Lesotho — driving education and healthcare impact where it matters most.
            </p>
            <a href="{{ route('foundation') }}" class="btn btn-primary reveal reveal-delay-3">Learn About Our Foundation</a>
        </div>
    </div>
</div>

@endsection

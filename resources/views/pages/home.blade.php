@extends('layouts.app')
@section('title', 'CJ Global Express Group Unlimited — Building Africa. Serving the World.')
@section('meta_description', 'A diversified African conglomerate operating across 56 countries on six continents. Construction, mining, logistics, retail, hospitality, wellness, real estate and premium spirits.')

@section('content')
<style>
/* ── Hero ── */
.hero {
    min-height: 92vh; display: flex; align-items: center;
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #F5F1EB 0%, #EDE4D0 40%, #F5F1EB 100%);
}
.hero::before {
    content:''; position:absolute; inset:0;
    background: radial-gradient(ellipse at 65% 50%, rgba(201,168,76,0.12) 0%, transparent 60%);
    pointer-events:none;
}
.hero-content { position:relative; z-index:2; max-width:680px; }
.hero-title { font-size:var(--text-hero); margin-bottom:var(--space-2); line-height:1.05; }
.hero-subtitle { font-size:var(--text-body-lg); color:var(--text-secondary); line-height:1.75; max-width:500px; margin-bottom:var(--space-4); }
.hero-ctas { display:flex; gap:var(--space-2); align-items:center; flex-wrap:wrap; }
.hero-img-wrap {
    position:absolute; right:0; top:0; bottom:0; width:45%;
    overflow:hidden;
}
.hero-img-wrap img { width:100%; height:100%; object-fit:cover; opacity:0.85; }
.hero-img-wrap::before {
    content:''; position:absolute; inset:0; z-index:1;
    background: linear-gradient(to right, #F5F1EB 0%, transparent 40%);
}
.hero-scroll { position:absolute; bottom:var(--space-4); left:50%; transform:translateX(-50%); display:flex; flex-direction:column; align-items:center; gap:6px; color:var(--text-muted); font-size:var(--text-label); letter-spacing:0.08em; animation:bounce 2s ease-in-out infinite; }
@keyframes bounce { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(6px)} }

/* ── Stat strip ── */
.stat-strip { background:linear-gradient(135deg,#1C1814 0%,#2A2218 60%,#1C1814 100%); padding:var(--space-4) 0; }
.stat-strip .card-stat { background:rgba(255,255,255,0.05); box-shadow:none; border:1px solid rgba(201,168,76,0.15); }
.stat-strip .stat-num   { color:var(--gold-bright); }
.stat-strip .stat-label { color:rgba(245,240,232,0.6); }

/* ── About band ── */
.about-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-6); align-items:center; }
.about-text p { color:var(--text-secondary); margin-bottom:var(--space-2); line-height:1.8; }
.compliance-strip { display:flex; flex-wrap:wrap; gap:var(--space-1); margin-top:var(--space-3); }
.compliance-badge { font-size:10px; font-weight:500; letter-spacing:0.06em; padding:4px 10px; border:1px solid var(--gold-border); border-radius:20px; color:var(--gold-primary); text-transform:uppercase; background:var(--gold-light); }

/* ── Divisions ── */
.divisions-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:var(--space-2); }

/* ── Founder band (dark) ── */
.founder-band { background:var(--gradient-band); padding:var(--space-7) 0; text-align:center; }
.founder-band blockquote { font-family:var(--font-display); font-size:clamp(20px,2.5vw,28px); font-style:italic; color:var(--text-on-dark); max-width:780px; margin:0 auto var(--space-3); line-height:1.5; }
.founder-band cite { font-family:var(--font-body); font-size:var(--text-label); color:var(--gold-bright); letter-spacing:0.1em; font-style:normal; text-transform:uppercase; }

/* ── Foundation ── */
.foundation-cta { background:linear-gradient(135deg,#F5F1EB,#EDE4D0); border-top:1px solid var(--border-subtle); padding:var(--space-7) 0; text-align:center; }

@media(max-width:1024px){ .hero-img-wrap{width:35%;} }
@media(max-width:768px) { .hero-img-wrap{display:none;} .about-grid{grid-template-columns:1fr;} .divisions-grid{grid-template-columns:1fr;} }
@media(max-width:1024px){ .divisions-grid{grid-template-columns:repeat(2,1fr);} }
</style>

{{-- HERO --}}
<section class="hero">
    <div class="hero-img-wrap">
        <img src="{{ $heroImg }}" alt="CJ Global Express Group — Building Africa">
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="eyebrow reveal">56 Countries &middot; 9 Divisions &middot; Est. 1997</div>
            <h1 class="hero-title reveal reveal-delay-1">
                Building Africa.<br><em class="italic-gold">Serving the World.</em>
            </h1>
            <p class="hero-subtitle reveal reveal-delay-2">
                A diversified African conglomerate operating across 56 countries on six continents — driving growth through construction, mining, logistics, retail, hospitality, wellness, real estate, and premium spirits.
            </p>
            <div class="hero-ctas reveal reveal-delay-3">
                <a href="{{ route('divisions') }}" class="btn btn-primary">Explore Divisions</a>
                <a href="{{ route('about') }}" class="btn btn-ghost">Our Story</a>
            </div>
        </div>
    </div>
    <div class="hero-scroll"><span>Scroll</span><i class="ti ti-chevron-down"></i></div>
</section>

{{-- STAT STRIP (dark band) --}}
<div class="stat-strip">
    <div class="container">
        <div class="grid-4">
            <div class="card-stat reveal"><div class="stat-num">56</div><div class="stat-label">Countries</div></div>
            <div class="card-stat reveal reveal-delay-1"><div class="stat-num">$200M+</div><div class="stat-label">Capital Deployed</div></div>
            <div class="card-stat reveal reveal-delay-2"><div class="stat-num">9</div><div class="stat-label">Divisions</div></div>
            <div class="card-stat reveal reveal-delay-3"><div class="stat-num">25,000+</div><div class="stat-label">Jobs Created</div></div>
        </div>
    </div>
</div>

{{-- WHO WE ARE --}}
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <div class="eyebrow reveal">Who We Are</div>
                <h2 class="reveal reveal-delay-1">Africa's Most Dynamic<br><em class="italic-gold">Multi-Sector Empire</em></h2>
                <p class="reveal reveal-delay-2">Founded in 1997 by Prof. Clemence Jaricha, CJ Global Express Group Unlimited began as a single logistics operation. Today it stands as one of Africa's most dynamic multi-sector conglomerates — operating across 56 countries on six continents through nine distinct divisions.</p>
                <p class="reveal reveal-delay-2">Driven by the belief that African enterprise must set the global standard, CGEG creates sustainable economic value for communities, partners, and shareholders across the continent and beyond.</p>
                <div class="compliance-strip reveal reveal-delay-3">
                    <span class="compliance-badge">BBBEE Level 1</span>
                    <span class="compliance-badge">COIDA</span>
                    <span class="compliance-badge">UIF</span>
                    <span class="compliance-badge">CIDB</span>
                    <span class="compliance-badge">CSD Registered</span>
                </div>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('about') }}" class="btn btn-link">Read Our Full Story <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="reveal reveal-delay-1" style="border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised-lg);">
                <img src="{{ $aboutImg }}" alt="CJ Global Express Group" style="width:100%;height:420px;object-fit:cover;">
            </div>
        </div>
    </div>
</section>

{{-- DIVISIONS --}}
<section class="section" style="background:linear-gradient(135deg,#F5F1EB,#EDE8DF);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Our Divisions</div>
            <h2 class="reveal reveal-delay-1">Nine Pillars of <em class="italic-gold">Growth</em></h2>
        </div>
        <div class="divisions-grid">
            @foreach($divisions as $slug => $division)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal" style="transition-delay:{{ $loop->index * 60 }}ms;text-decoration:none;">
                <div class="card-icon"><i class="{{ $division['icon'] }}"></i></div>
                <div class="card-title">{{ $division['name'] }}</div>
                <div class="card-desc">{{ Str::limit($division['description'], 88) }}</div>
                <div class="card-link">Explore <i class="ti ti-arrow-right"></i></div>
            </a>
            @endforeach
        </div>
        <div style="text-align:center;margin-top:var(--space-5);">
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All Divisions</a>
        </div>
    </div>
</section>

{{-- FOUNDER QUOTE (dark band) --}}
<div class="founder-band">
    <div class="container">
        <div class="divider-gold reveal" style="margin:0 auto var(--space-3);background:var(--gold-bright);"></div>
        <blockquote class="reveal">"We must build businesses that feed families, not just balance sheets."</blockquote>
        <cite class="reveal reveal-delay-1">Prof. Clemence Jaricha — Founder &amp; Chairman, CJ Global Express Group Unlimited</cite>
    </div>
</div>

{{-- FEATURED PROJECTS --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Featured Projects</div>
            <h2 class="reveal reveal-delay-1">Projects That Define <em class="italic-gold">a Continent</em></h2>
        </div>
        <div class="grid-3">
            <div class="card card-project reveal">
                <div class="project-img" style="height:220px;border-radius:8px;overflow:hidden;">
                    <img src="https://picsum.photos/seed/project-sandton/800/500" alt="Sandton Hydon Park Mall" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="project-division" style="margin-top:var(--space-2);">CJ Global Mall</div>
                <div class="project-title">Sandton Hydon Park Mall</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;color:var(--gold-primary);"></i> Harare, Zimbabwe</div>
                <span class="badge-status badge-development">In Development · US$670M</span>
            </div>
            <div class="card card-project reveal reveal-delay-1">
                <div class="project-img" style="height:220px;border-radius:8px;overflow:hidden;">
                    <img src="https://picsum.photos/seed/project-london/800/500" alt="London Market Entry" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="project-division" style="margin-top:var(--space-2);">CJ Properties / Hospitality</div>
                <div class="project-title">London Market Entry</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;color:var(--gold-primary);"></i> London, United Kingdom</div>
                <span class="badge-status badge-operational">Operational · 2025</span>
            </div>
            <div class="card card-project reveal reveal-delay-2">
                <div class="project-img" style="height:220px;border-radius:8px;overflow:hidden;">
                    <img src="https://picsum.photos/seed/project-chicago/800/500" alt="Chicago Manufacturing" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="project-division" style="margin-top:var(--space-2);">CJ Vodka Premium Spirits</div>
                <div class="project-title">Chicago Manufacturing HQ</div>
                <div class="project-location"><i class="ti ti-map-pin" style="font-size:13px;color:var(--gold-primary);"></i> Chicago, Illinois, USA</div>
                <span class="badge-status badge-operational">Operational · 2025</span>
            </div>
        </div>
        <div style="text-align:center;margin-top:var(--space-5);">
            <a href="{{ route('projects') }}" class="btn btn-ghost">View All Projects</a>
        </div>
    </div>
</section>

{{-- FOUNDATION CTA --}}
<div class="foundation-cta">
    <div class="container" style="max-width:640px;">
        <div class="eyebrow reveal" style="justify-content:center;">CJ Global Foundation</div>
        <h2 class="reveal reveal-delay-1">Giving Back to the<br><em class="italic-gold">Communities We Serve</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-2">
            Active across Zimbabwe, South Africa, Botswana, Zambia, and Lesotho — driving education, healthcare, and youth entrepreneurship impact where it matters most.
        </p>
        <a href="{{ route('foundation') }}" class="btn btn-primary reveal reveal-delay-3">Learn About Our Foundation</a>
    </div>
</div>

@endsection
@push('styles')
<style>
@media (max-width: 768px) {
    .hero { min-height: 85svh; padding: var(--space-6) 0 var(--space-5); }
    .hero-title { font-size: clamp(32px, 10vw, 48px); }
    .hero-ctas { flex-direction: column; align-items: flex-start; }
    .hero-ctas .btn { width: 100%; justify-content: center; }
    .stat-strip .grid-4 { grid-template-columns: repeat(2, 1fr); gap: var(--space-2); }
    .about-grid { grid-template-columns: 1fr; gap: var(--space-4); }
    .divisions-grid { grid-template-columns: 1fr; gap: var(--space-2); }
    .founder-band blockquote { font-size: clamp(18px, 5vw, 22px); padding: 0 var(--space-2); }
}
@media (max-width: 480px) {
    .stat-strip .grid-4 { grid-template-columns: repeat(2, 1fr); }
    .hero-scroll { display: none; }
}
</style>
@endpush

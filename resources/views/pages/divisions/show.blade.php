@extends('layouts.app')

@section('title', $division['name'] . ' — CJ Global Express Group Unlimited')
@section('meta_description', $division['tagline'] . ' — ' . Str::limit($division['description'], 120))
@section('og_title', $division['name'] . ' | CJ Global Express Group')

@section('content')

<style>
/* ── Division Hero ── */
.div-hero {
    min-height: 70vh;
    display: flex;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
    padding-bottom: var(--space-6);
}
.div-hero-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
}
.div-hero-bg .img-slot {
    height: 100%;
    border-radius: 0;
    min-height: unset;
    opacity: 0.2;
}
.div-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, var(--surface-base) 10%, transparent 70%);
    z-index: 1;
}
.div-hero-content {
    position: relative;
    z-index: 2;
    width: 100%;
}
.div-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--gold-glow);
    border: 1px solid var(--gold-border);
    border-radius: 40px;
    padding: 6px 16px;
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: var(--space-2);
}
.div-hero h1 { font-size: var(--text-hero); margin-bottom: var(--space-1); }
.div-hero .tagline {
    font-size: clamp(16px, 2vw, 20px);
    color: var(--text-secondary);
    max-width: 560px;
    line-height: 1.6;
    margin-bottom: var(--space-4);
}

/* ── Stat Strip ── */
.div-stats {
    background: var(--surface-raised);
    border-top: 1px solid var(--border-subtle);
    border-bottom: 1px solid var(--border-subtle);
    padding: var(--space-4) 0;
}

/* ── About Section ── */
.div-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-6);
    align-items: center;
}
.div-about-text h2 { margin-bottom: var(--space-2); }
.div-about-text p {
    color: var(--text-secondary);
    line-height: 1.85;
    margin-bottom: var(--space-2);
}

/* ── Highlights ── */
.highlights-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-2);
}
.highlight-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    transition: var(--ease-card);
}
.highlight-card:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-2px);
}
.highlight-icon {
    width: 44px; height: 44px;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 22px;
    margin-bottom: var(--space-2);
}
.highlight-title {
    font-family: var(--font-display);
    font-size: 17px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 6px;
}
.highlight-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.65;
}

/* ── Services ── */
.services-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-2);
}
.service-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    display: flex;
    gap: var(--space-2);
    align-items: flex-start;
    transition: var(--ease-card);
}
.service-card:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-1px);
}
.service-icon {
    width: 42px; height: 42px; flex-shrink: 0;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 20px;
}
.service-title {
    font-family: var(--font-display);
    font-size: 17px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.service-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.6;
}

/* ── Other Divisions ── */
.other-divs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-2);
}

@media (max-width: 1024px) {
    .highlights-grid  { grid-template-columns: 1fr 1fr; }
    .other-divs-grid  { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .div-hero         { min-height: 60vh; }
    .div-about-grid   { grid-template-columns: 1fr; }
    .services-grid    { grid-template-columns: 1fr; }
    .highlights-grid  { grid-template-columns: 1fr; }
    .other-divs-grid  { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
    .other-divs-grid  { grid-template-columns: 1fr; }
}
</style>

{{-- ══════════════════════════════════════════════
     HERO
══════════════════════════════════════════════ --}}
<section class="div-hero">
    <div class="div-hero-bg">
        {{-- [IMAGE SLOT] {{ $division['slug'] }}-hero | 1920×900px — division-specific imagery --}}
        <div class="img-slot" data-slot="{{ $division['slug'] }}-hero" data-size="1920x900">
            <i class="{{ $division['icon'] }}" style="font-size:48px;opacity:0.3;"></i>
        </div>
    </div>
    <div class="div-hero-overlay"></div>

    <div class="container div-hero-content">
        <div class="div-hero-badge reveal">
            <i class="{{ $division['icon'] }}"></i>
            A CJ Global Division
        </div>
        <h1 class="reveal reveal-delay-1">{{ $division['name'] }}</h1>
        <p class="tagline reveal reveal-delay-2">{{ $division['tagline'] }}</p>
        <div style="display:flex;gap:var(--space-2);flex-wrap:wrap;" class="reveal reveal-delay-3">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">
                Work With Us <i class="ti ti-arrow-right"></i>
            </a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     STAT STRIP
══════════════════════════════════════════════ --}}
<div class="div-stats">
    <div class="container">
        <div class="grid-4">
            @foreach($division['stats'] as $i => $stat)
            <div class="card-stat reveal" style="transition-delay:{{ $i * 60 }}ms;">
                <div class="stat-num">{{ $stat['num'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     ABOUT THIS DIVISION
══════════════════════════════════════════════ --}}
<section class="section">
    <div class="container">
        <div class="div-about-grid">
            <div class="div-about-text">
                <div class="eyebrow reveal">About This Division</div>
                <h2 class="reveal reveal-delay-1">
                    What We <em class="italic-gold">Do</em>
                </h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">
                        Enquire Now
                    </a>
                </div>
            </div>

            {{-- [IMAGE SLOT] {{ $division['slug'] }}-overview | 800×700px — division operations imagery --}}
            <div class="reveal reveal-delay-1">
                <div class="img-slot" style="min-height:400px;"
                     data-slot="{{ $division['slug'] }}-overview" data-size="800x700">
                    <i class="{{ $division['icon'] }}" style="font-size:36px;"></i>
                    <span>{{ $division['name'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     KEY HIGHLIGHTS
══════════════════════════════════════════════ --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Why Choose Us</div>
            <h2 class="reveal reveal-delay-1">Key <em class="italic-gold">Highlights</em></h2>
        </div>
        <div class="highlights-grid">
            @foreach($division['highlights'] as $i => $highlight)
            <div class="highlight-card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div class="highlight-icon"><i class="{{ $highlight['icon'] }}"></i></div>
                <div class="highlight-title">{{ $highlight['title'] }}</div>
                <div class="highlight-desc">{{ $highlight['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     SERVICES & OFFERINGS
══════════════════════════════════════════════ --}}
<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:var(--space-6);align-items:start;">
            <div>
                <div class="eyebrow reveal">What We Deliver</div>
                <h2 class="reveal reveal-delay-1">Services &amp;<br><em class="italic-gold">Offerings</em></h2>
                <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.75;" class="reveal reveal-delay-2">
                    Every service we deliver is backed by decades of collective expertise, a commitment to quality, and the operational strength of the broader CGEG group.
                </p>
                {{-- [IMAGE SLOT] {{ $division['slug'] }}-services | 600×500px — services in action --}}
                <div class="img-slot reveal reveal-delay-3" style="min-height:260px;margin-top:var(--space-3);"
                     data-slot="{{ $division['slug'] }}-services" data-size="600x500">
                    <i class="ti ti-photo"></i>
                    <span>Services Image</span>
                </div>
            </div>
            <div class="services-grid">
                @foreach($division['services'] as $i => $service)
                <div class="service-card reveal" style="transition-delay:{{ $i * 70 }}ms;">
                    <div class="service-icon"><i class="{{ $service['icon'] }}"></i></div>
                    <div>
                        <div class="service-title">{{ $service['title'] }}</div>
                        <div class="service-desc">{{ $service['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     PROJECT IMAGE STRIP
══════════════════════════════════════════════ --}}
<section class="section-sm" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">In Action</div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-2);">
            {{-- [IMAGE SLOT] {{ $division['slug'] }}-action-1 | 700×450px --}}
            <div class="img-slot reveal" style="min-height:200px;"
                 data-slot="{{ $division['slug'] }}-action-1" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
            {{-- [IMAGE SLOT] {{ $division['slug'] }}-action-2 | 700×450px --}}
            <div class="img-slot reveal reveal-delay-1" style="min-height:200px;"
                 data-slot="{{ $division['slug'] }}-action-2" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
            {{-- [IMAGE SLOT] {{ $division['slug'] }}-action-3 | 700×450px --}}
            <div class="img-slot reveal reveal-delay-2" style="min-height:200px;"
                 data-slot="{{ $division['slug'] }}-action-3" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     CONTACT CTA
══════════════════════════════════════════════ --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:640px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to Work With <em class="italic-gold">Us?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);line-height:1.75;" class="reveal reveal-delay-1">
            Get in touch with our {{ $division['name'] }} team to discuss how we can support your goals — whether you're a client, partner, or investor.
        </p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">
                Get in Touch <i class="ti ti-arrow-right"></i>
            </a>
            <a href="{{ route('about') }}" class="btn btn-ghost">About CGEG</a>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     OTHER DIVISIONS
══════════════════════════════════════════════ --}}
@if(count($otherDivisions) > 0)
<section class="section-sm" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-3);">
            <div>
                <div class="eyebrow">Explore More</div>
                <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;margin-top:4px;">
                    Other <em class="italic-gold">Divisions</em>
                </h3>
            </div>
            <a href="{{ route('divisions') }}" class="btn btn-ghost" style="flex-shrink:0;">
                View All <i class="ti ti-arrow-right"></i>
            </a>
        </div>
        <div class="other-divs-grid">
            @foreach(array_slice($otherDivisions, 0, 4, true) as $slug => $other)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal"
               style="text-decoration:none;transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon"><i class="{{ $other['icon'] }}"></i></div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-desc" style="font-size:11px;">{{ Str::limit($other['tagline'], 55) }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">
                    Explore <i class="ti ti-arrow-right"></i>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@extends('layouts.app')

@section('title', 'CJ Vodka Premium Spirits — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Vodka Premium Spirits — crafted for those who demand the best. A bold new chapter in the CGEG story, anchored in Chicago and built for global luxury markets.')

@section('content')

<style>
/* ── Spirits Override — Darker, Moodier, Nightlife ── */
:root {
    --spirits-deep:   #100E0C;
    --spirits-raised: #181512;
    --spirits-gold:   #C9A84C;
    --spirits-silver: #A8A8A8;
}

.spirits-hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    background: var(--spirits-deep);
}
.spirits-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse at 60% 30%, rgba(201,168,76,0.08) 0%, transparent 55%),
        radial-gradient(ellipse at 20% 80%, rgba(201,168,76,0.04) 0%, transparent 45%);
    pointer-events: none;
    z-index: 1;
}
.spirits-hero-content {
    position: relative;
    z-index: 2;
    max-width: 680px;
}
.spirits-tagline-word {
    display: block;
    font-family: var(--font-display);
    font-size: clamp(48px, 7vw, 80px);
    font-weight: 700;
    line-height: 1;
    letter-spacing: -0.01em;
}
.spirits-tagline-word.gold { color: var(--spirits-gold); font-style: italic; }
.spirits-tagline-word.white { color: var(--text-primary); }
.spirits-hero p {
    font-size: clamp(15px, 1.8vw, 18px);
    color: var(--text-secondary);
    line-height: 1.75;
    max-width: 480px;
    margin: var(--space-3) 0 var(--space-4);
}
.spirits-line {
    width: 48px; height: 1px;
    background: var(--spirits-gold);
    margin-bottom: var(--space-2);
}
.spirits-eyebrow {
    font-size: var(--text-label);
    color: var(--spirits-gold);
    letter-spacing: 0.14em;
    text-transform: uppercase;
    margin-bottom: var(--space-2);
}

/* Stat strip */
.spirits-stats {
    background: var(--spirits-raised);
    border-top: 1px solid rgba(201,168,76,0.1);
    border-bottom: 1px solid rgba(201,168,76,0.1);
    padding: var(--space-4) 0;
}
.spirits-stat {
    background: var(--spirits-deep);
    border-radius: var(--radius-card);
    box-shadow: 5px 5px 14px rgba(0,0,0,0.7), -2px -2px 6px rgba(255,245,220,0.03);
    padding: 20px 18px;
    text-align: center;
}
.spirits-stat .stat-num {
    font-family: var(--font-display);
    font-size: 28px; font-weight: 600;
    color: var(--spirits-gold);
    line-height: 1; margin-bottom: 4px;
}
.spirits-stat .stat-label {
    font-size: var(--text-label);
    color: var(--text-muted);
    letter-spacing: 0.06em;
    text-transform: uppercase;
}

/* About */
.spirits-about {
    background: var(--spirits-deep);
    padding: var(--section-gap) 0;
}
.spirits-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-6);
    align-items: center;
}
.spirits-about p {
    color: var(--text-secondary);
    line-height: 1.85;
    margin-bottom: var(--space-2);
}

/* Highlight cards */
.spirits-highlight {
    background: var(--spirits-raised);
    border-radius: var(--radius-card);
    box-shadow: 5px 5px 14px rgba(0,0,0,0.6), -2px -2px 5px rgba(255,245,220,0.025);
    padding: var(--space-3);
    border-left: 2px solid var(--spirits-gold);
    transition: var(--ease-card);
}
.spirits-highlight:hover {
    box-shadow: 8px 8px 20px rgba(0,0,0,0.7), -3px -3px 8px rgba(255,245,220,0.03);
    transform: translateY(-2px);
}
.spirits-highlight-icon {
    color: var(--spirits-gold);
    font-size: 24px;
    margin-bottom: var(--space-1);
}
.spirits-highlight h4 {
    font-family: var(--font-display);
    font-size: 18px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.spirits-highlight p {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.65;
    margin: 0;
}

/* Services */
.spirits-services {
    background: var(--spirits-raised);
    border-top: 1px solid rgba(201,168,76,0.08);
    border-bottom: 1px solid rgba(201,168,76,0.08);
    padding: var(--section-gap) 0;
}
.spirits-service-card {
    background: var(--spirits-deep);
    border-radius: var(--radius-card);
    box-shadow: 5px 5px 14px rgba(0,0,0,0.6), -2px -2px 5px rgba(255,245,220,0.025);
    padding: var(--space-3);
    transition: var(--ease-card);
}
.spirits-service-card:hover {
    box-shadow: 8px 8px 20px rgba(0,0,0,0.7);
    transform: translateY(-2px);
}
.spirits-service-icon {
    width: 44px; height: 44px;
    background: rgba(201,168,76,0.08);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--spirits-gold); font-size: 22px;
    margin-bottom: var(--space-2);
}
.spirits-service-title {
    font-family: var(--font-display);
    font-size: 17px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.spirits-service-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Quote band */
.spirits-quote {
    background: var(--spirits-deep);
    padding: var(--space-8) 0;
    text-align: center;
    position: relative;
}
.spirits-quote::before {
    content: '"';
    position: absolute;
    top: 20px; left: 50%;
    transform: translateX(-50%);
    font-family: var(--font-display);
    font-size: 200px;
    color: rgba(201,168,76,0.04);
    line-height: 1;
    pointer-events: none;
}
.spirits-quote blockquote {
    font-family: var(--font-display);
    font-size: clamp(22px, 3vw, 36px);
    font-style: italic;
    color: var(--text-primary);
    max-width: 720px;
    margin: 0 auto var(--space-3);
    line-height: 1.4;
    position: relative;
    z-index: 1;
}
.spirits-quote blockquote em { color: var(--spirits-gold); }
.spirits-quote cite {
    font-family: var(--font-body);
    font-size: var(--text-label);
    color: var(--spirits-gold);
    letter-spacing: 0.1em;
    font-style: normal;
    text-transform: uppercase;
}

/* CTA */
.spirits-cta {
    background: var(--spirits-raised);
    border-top: 1px solid rgba(201,168,76,0.08);
    padding: var(--space-7) 0;
    text-align: center;
}
.spirits-cta h2 { margin-bottom: var(--space-2); }
.spirits-cta p {
    color: var(--text-secondary);
    max-width: 520px;
    margin: 0 auto var(--space-4);
    line-height: 1.75;
}

@media (max-width: 768px) {
    .spirits-about-grid { grid-template-columns: 1fr; }
    .spirits-hero { min-height: 85svh; }
}
</style>

{{-- ══════════════════════════════════════════════
     HERO
══════════════════════════════════════════════ --}}
<section class="spirits-hero">
    {{-- [IMAGE SLOT] spirits-hero | 1920×1080px — moody dark spirits/bar imagery or bottle product shot --}}
    <div style="position:absolute;inset:0;z-index:0;opacity:0.15;">
        <div class="img-slot" style="height:100%;border-radius:0;background:var(--spirits-deep);"
             data-slot="spirits-hero" data-size="1920x1080">
            <i class="ti ti-bottle" style="font-size:56px;opacity:0.3;"></i>
        </div>
    </div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="spirits-content">
            <div class="spirits-eyebrow reveal">CJ Vodka Premium Spirits &nbsp;·&nbsp; A CGEG Division</div>
            <div class="spirits-line reveal"></div>
            <span class="spirits-tagline-word white reveal">Crafted for</span>
            <span class="spirits-tagline-word gold reveal reveal-delay-1">Those Who</span>
            <span class="spirits-tagline-word white reveal reveal-delay-2">Demand the Best</span>
            <p class="reveal reveal-delay-3">
                Born from the same boldness that built a pan-African conglomerate. CJ Vodka is a premium spirits brand entering the global luxury market with an African entrepreneurial spirit and uncompromising standards.
            </p>
            <div style="display:flex;gap:var(--space-2);flex-wrap:wrap;" class="reveal reveal-delay-4">
                <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">
                    Partner With Us <i class="ti ti-arrow-right"></i>
                </a>
                <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     STAT STRIP
══════════════════════════════════════════════ --}}
<div class="spirits-stats">
    <div class="container">
        <div class="grid-4">
            @foreach($division['stats'] as $i => $stat)
            <div class="spirits-stat reveal" style="transition-delay:{{ $i * 60 }}ms;">
                <div class="stat-num">{{ $stat['num'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     ABOUT
══════════════════════════════════════════════ --}}
<section class="spirits-about">
    <div class="container">
        <div class="spirits-about-grid">
            <div>
                <div class="spirits-eyebrow reveal">The Brand</div>
                <h2 class="reveal reveal-delay-1">A New Chapter<br><em class="italic-gold">Begins</em></h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>

                <div style="display:flex;flex-direction:column;gap:var(--space-2);margin-top:var(--space-4);">
                    @foreach($division['highlights'] as $i => $h)
                    <div class="spirits-highlight reveal" style="transition-delay:{{ $i * 80 }}ms;">
                        <div class="spirits-highlight-icon"><i class="{{ $h['icon'] }}"></i></div>
                        <h4>{{ $h['title'] }}</h4>
                        <p>{{ $h['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- [IMAGE SLOT] spirits-bottle | 600×900px — CJ Vodka bottle product shot --}}
            <div class="reveal reveal-delay-1">
                <div class="img-slot" style="min-height:520px;background:var(--spirits-raised);
                     box-shadow:8px 8px 24px rgba(0,0,0,0.7),-3px -3px 8px rgba(255,245,220,0.03);"
                     data-slot="spirits-bottle" data-size="600x900">
                    <i class="ti ti-bottle" style="font-size:48px;"></i>
                    <span>CJ Vodka Product Shot</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     SERVICES
══════════════════════════════════════════════ --}}
<section class="spirits-services">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="spirits-eyebrow reveal">What We Offer</div>
            <h2 class="reveal reveal-delay-1">Services &amp; <em class="italic-gold">Offerings</em></h2>
        </div>
        <div class="grid-4">
            @foreach($division['services'] as $i => $service)
            <div class="spirits-service-card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div class="spirits-service-icon"><i class="{{ $service['icon'] }}"></i></div>
                <div class="spirits-service-title">{{ $service['title'] }}</div>
                <div class="spirits-service-desc">{{ $service['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════
     IMAGE STRIP
══════════════════════════════════════════════ --}}
<div style="background:var(--spirits-deep);padding:var(--space-5) 0;border-top:1px solid rgba(201,168,76,0.08);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-2);">
            {{-- [IMAGE SLOT] spirits-gallery-1 | 700×450px — venue/bar imagery --}}
            <div class="img-slot reveal" style="min-height:220px;background:var(--spirits-raised);
                 box-shadow:5px 5px 14px rgba(0,0,0,0.6);"
                 data-slot="spirits-gallery-1" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
            {{-- [IMAGE SLOT] spirits-gallery-2 | 700×450px --}}
            <div class="img-slot reveal reveal-delay-1" style="min-height:220px;background:var(--spirits-raised);
                 box-shadow:5px 5px 14px rgba(0,0,0,0.6);"
                 data-slot="spirits-gallery-2" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
            {{-- [IMAGE SLOT] spirits-gallery-3 | 700×450px --}}
            <div class="img-slot reveal reveal-delay-2" style="min-height:220px;background:var(--spirits-raised);
                 box-shadow:5px 5px 14px rgba(0,0,0,0.6);"
                 data-slot="spirits-gallery-3" data-size="700x450">
                <i class="ti ti-photo"></i>
            </div>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     QUOTE
══════════════════════════════════════════════ --}}
<div class="spirits-quote">
    <div class="container">
        <blockquote class="reveal">
            "We did not enter the spirits market to participate.<br>
            We entered to <em>set the standard</em>."
        </blockquote>
        <cite class="reveal reveal-delay-1">CJ Vodka Premium Spirits — Brand Manifesto</cite>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     CTA
══════════════════════════════════════════════ --}}
<div class="spirits-cta">
    <div class="container">
        <div class="spirits-line" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Partner With <em class="italic-gold">CJ Vodka</em></h2>
        <p class="reveal reveal-delay-1">
            Whether you're a distributor, venue, retailer, or brand partner — we're building a global network of premium partnerships. Let's talk.
        </p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">
                Get in Touch <i class="ti ti-arrow-right"></i>
            </a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════
     OTHER DIVISIONS
══════════════════════════════════════════════ --}}
@if(count($otherDivisions) > 0)
<section class="section-sm" style="background:var(--spirits-raised);border-top:1px solid rgba(201,168,76,0.08);">
    <div class="container">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-3);">
            <div>
                <div class="spirits-eyebrow">Explore More</div>
                <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;margin-top:4px;">
                    Other <em class="italic-gold">Divisions</em>
                </h3>
            </div>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All <i class="ti ti-arrow-right"></i></a>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-2);">
            @foreach(array_slice($otherDivisions, 0, 4, true) as $slug => $other)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal"
               style="text-decoration:none;background:var(--spirits-deep);transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon"><i class="{{ $other['icon'] }}"></i></div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-desc" style="font-size:11px;">{{ Str::limit($other['tagline'], 55) }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">Explore <i class="ti ti-arrow-right"></i></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@extends('layouts.app')

@section('title', 'CJ Global Construction — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Global Construction — CIDB-registered commercial, residential and infrastructure development across Southern Africa, home of the flagship Sandton Hydon Park Mall.')

@section('content')

@include('pages.divisions.partials.theme-light', [
    'accent'       => '#B8792E',
    'accentBright' => '#C9A84C',
    'accentGlow'   => 'rgba(184,121,46,0.1)',
    'accentBorder' => 'rgba(184,121,46,0.3)',
])

{{-- HERO --}}
<section class="dx-hero">
    <div class="dx-hero-img">
        {{-- [IMAGE SLOT] construction-hero | 1920×900px — active build site, cranes, or the Sandton Hydon Park Mall structure --}}
        <img src="{{ $division['hero_img'] }}" alt="CJ Global Construction">
    </div>
    <div class="dx-hero-overlay"></div>
    <div class="container dx-hero-content">
        <div class="dx-hero-badge reveal"><i class="{{ $division['icon'] }}" aria-hidden="true"></i> A CJ Global Division</div>
        <h1 class="reveal reveal-delay-1">Building the <span class="dx-em">Infrastructure</span> of Tomorrow</h1>
        <p class="dx-tagline reveal reveal-delay-2">CIDB-registered commercial, residential, and infrastructure builds across Southern Africa — anchored by the flagship Sandton Hydon Park Mall, CGEG's landmark return to Zimbabwe.</p>
        <div style="display:flex;gap:var(--space-2);flex-wrap:wrap;" class="reveal reveal-delay-3">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Work With Us <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
        </div>
    </div>
</section>

{{-- STATS --}}
<div class="dx-stats">
    <div class="container">
        <div class="grid-4">
            @foreach($division['stats'] as $i => $stat)
            <div class="dx-stat reveal" style="transition-delay:{{ $i * 60 }}ms;">
                <div class="stat-num">{{ $stat['num'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ABOUT --}}
<section class="section">
    <div class="container">
        <div class="dx-about-grid">
            <div>
                <div class="dx-eyebrow reveal">From the Ground Up</div>
                <h2 class="reveal reveal-delay-1">The Foundational <em class="italic-gold">Pillar</em></h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Enquire Now</a>
                </div>
            </div>
            {{-- [IMAGE SLOT] construction-feature | 700×950px — architectural render or structural detail shot --}}
            <div class="dx-feature-img reveal reveal-delay-1">
                <img src="{{ asset('images/divisions/construction/feature.jpg') }}" alt="CJ Global Construction — flagship development">
            </div>
        </div>
    </div>
</section>

{{-- HIGHLIGHTS --}}
<section class="section" style="background:linear-gradient(135deg,#F5F1EB,#EDE8DF);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="dx-eyebrow reveal">Why Choose Us</div>
            <h2 class="reveal reveal-delay-1">Key <em class="italic-gold">Highlights</em></h2>
        </div>
        <div class="dx-highlights">
            @foreach($division['highlights'] as $i => $h)
            <div class="dx-highlight reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div class="dx-highlight-icon"><i class="{{ $h['icon'] }}"></i></div>
                <h4>{{ $h['title'] }}</h4>
                <p>{{ $h['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="dx-services">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:var(--space-6);align-items:start;">
            <div>
                <div class="dx-eyebrow reveal">What We Deliver</div>
                <h2 class="reveal reveal-delay-1">Services &amp;<br><em class="italic-gold">Offerings</em></h2>
                <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.75;" class="reveal reveal-delay-2">From civil infrastructure to premium residential estates — every project managed end-to-end by our CIDB-registered team.</p>
                <div class="reveal reveal-delay-3" style="margin-top:var(--space-3);border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised);">
                    {{-- [IMAGE SLOT] construction-services | 700×450px — site management / blueprint review --}}
                    <img src="{{ $division['services_img'] }}" alt="CJ Global Construction services" style="width:100%;height:240px;object-fit:cover;">
                </div>
            </div>
            <div class="dx-service-grid">
                @foreach($division['services'] as $i => $s)
                <div class="dx-service-card reveal" style="transition-delay:{{ $i * 70 }}ms;">
                    <div class="dx-service-icon"><i class="{{ $s['icon'] }}"></i></div>
                    <div><div class="dx-service-title">{{ $s['title'] }}</div><div class="dx-service-desc">{{ $s['desc'] }}</div></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- GALLERY --}}
<div class="dx-gallery">
    <div class="container">
        <div class="dx-eyebrow reveal" style="margin-bottom:var(--space-2);">In Action</div>
        <div class="dx-gallery-grid">
            @foreach($division['action_imgs'] as $i => $img)
            {{-- [IMAGE SLOT] construction-action-{{ $i+1 }} | 700×450px — build progress / site team / completed structure --}}
            <img class="reveal" src="{{ $img }}" alt="CJ Global Construction in action" style="transition-delay:{{ $i * 70 }}ms;">
            @endforeach
        </div>
    </div>
</div>

{{-- QUOTE --}}
<div class="dx-quote">
    <div class="container">
        <blockquote class="reveal">"Every structure we raise is a promise kept to the communities we build in."</blockquote>
        <cite class="reveal reveal-delay-1">CJ Global Construction</cite>
    </div>
</div>

{{-- CTA --}}
<section class="dx-cta">
    <div class="container" style="max-width:640px;">
        <div class="dx-line" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to Build With <em class="italic-gold">Us?</em></h2>
        <p class="reveal reveal-delay-1">Get in touch with our Construction team to discuss your next commercial, residential, or infrastructure project.</p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Get in Touch <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a href="{{ route('about') }}" class="btn btn-ghost">About CGEG</a>
        </div>
    </div>
</section>

{{-- OTHER DIVISIONS --}}
@if(count($otherDivisions) > 0)
<section class="section-sm" style="background:linear-gradient(135deg,#F5F1EB,#EDE8DF);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-3);">
            <div>
                <div class="dx-eyebrow">Explore More</div>
                <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;margin-top:4px;">Other <em class="italic-gold">Divisions</em></h3>
            </div>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="dx-other-grid">
            @foreach(array_slice($otherDivisions,0,4,true) as $slug => $other)
            <a href="{{ route('division',$slug) }}" class="card card-division reveal" style="text-decoration:none;transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon"><i class="{{ $other['icon'] }}" aria-hidden="true"></i></div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-desc" style="font-size:11px;">{{ Str::limit($other['tagline'],55) }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

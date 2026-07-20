@extends('layouts.app')

@section('title', 'CJ Nightclubs & Restaurants — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Nightclubs & Restaurants — premium African hospitality and nightlife, now operating in South Africa, Zimbabwe, and London.')

@section('content')

@include('pages.divisions.partials.theme-dark', [
    'accent'     => '#C9748A',
    'accentSoft' => 'rgba(201,116,138,0.14)',
    'deep'       => '#120A0C',
    'raised'     => '#1C1013',
])

{{-- HERO --}}
<section class="dk-hero">
    <div style="position:absolute;inset:0;z-index:0;opacity:0.18;">
        {{-- [IMAGE SLOT] hospitality-hero | 1920×1080px — moody restaurant/nightclub interior --}}
        <img src="{{ $division['hero_img'] }}" alt="CJ Nightclubs & Restaurants" style="width:100%;height:100%;object-fit:cover;">
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="dk-hero-content">
            <div class="dk-eyebrow reveal">CJ Nightclubs &amp; Restaurants &nbsp;·&nbsp; A CGEG Division</div>
            <div class="dk-line reveal"></div>
            <span class="dk-tagline-word white reveal">African Excellence</span>
            <span class="dk-tagline-word accent reveal reveal-delay-1">On the</span>
            <span class="dk-tagline-word white reveal reveal-delay-2">Global Stage</span>
            <p class="reveal reveal-delay-3">Premium dining and entertainment venues across South Africa and Zimbabwe, now joined by a marquee presence in London — the first African conglomerate of this scale to enter Europe's premium hospitality scene.</p>
            <div style="display:flex;gap:var(--space-2);flex-wrap:wrap;" class="reveal reveal-delay-4">
                <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Work With Us <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<div class="dk-stats">
    <div class="container">
        <div class="grid-4">
            @foreach($division['stats'] as $i => $stat)
            <div class="dk-stat reveal" style="transition-delay:{{ $i * 60 }}ms;">
                <div class="stat-num">{{ $stat['num'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ABOUT --}}
<section class="dk-about">
    <div class="container">
        <div class="dk-about-grid">
            <div>
                <div class="dk-eyebrow reveal">The Experience</div>
                <h2 class="reveal reveal-delay-1 text-muted">A Global <em class="italic-gold">Stage</em></h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>
                <div style="display:flex;flex-direction:column;gap:var(--space-2);margin-top:var(--space-4);">
                    @foreach($division['highlights'] as $i => $h)
                    <div class="dk-highlight reveal" style="transition-delay:{{ $i * 80 }}ms;">
                        <div class="dk-highlight-icon"><i class="{{ $h['icon'] }}"></i></div>
                        <h4>{{ $h['title'] }}</h4>
                        <p>{{ $h['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- [IMAGE SLOT] hospitality-feature | 700×950px — signature dish, bar, or venue ambience shot --}}
            <div class="reveal reveal-delay-1">
                <img src="{{ asset('images/divisions/hospitality/feature.jpg') }}" alt="CJ Nightclubs & Restaurants" style="width:100%;height:520px;object-fit:cover;border-radius:var(--radius-card);">
            </div>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="dk-services">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="dk-eyebrow reveal">What We Offer</div>
            <h2 class="reveal reveal-delay-1 text-muted">Services &amp; <em class="italic-gold">Offerings</em></h2>
        </div>
        <div class="grid-4">
            @foreach($division['services'] as $i => $service)
            <div class="dk-service-card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div class="dk-service-icon"><i class="{{ $service['icon'] }}"></i></div>
                <div class="dk-service-title">{{ $service['title'] }}</div>
                <div class="dk-service-desc">{{ $service['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- GALLERY --}}
<div class="dk-gallery">
    <div class="container">
        <div class="dk-gallery-grid">
            @foreach($division['action_imgs'] as $i => $img)
            {{-- [IMAGE SLOT] hospitality-action-{{ $i+1 }} | 700×450px — plated dish / event / venue floor --}}
            <img class="reveal" src="{{ $img }}" alt="CJ Nightclubs & Restaurants" style="transition-delay:{{ $i * 70 }}ms;">
            @endforeach
        </div>
    </div>
</div>

{{-- QUOTE --}}
<div class="dk-quote">
    <div class="container">
        <blockquote class="reveal">"Hospitality is our love language — from Johannesburg to Harare to London."</blockquote>
        <cite class="reveal reveal-delay-1">CJ Nightclubs &amp; Restaurants</cite>
    </div>
</div>

{{-- CTA --}}
<div class="dk-cta">
    <div class="container">
        <div class="dk-line" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal text-muted">Partner With <em class="italic-gold">Us</em></h2>
        <p class="reveal reveal-delay-1">Venue operators, event partners, and brand collaborators — let's bring African hospitality to your audience.</p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Get in Touch <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
        </div>
    </div>
</div>

{{-- OTHER DIVISIONS --}}
@if(count($otherDivisions) > 0)
<section class="section-sm dk-other">
    <div class="container">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-3);">
            <div>
                <div class="dk-eyebrow">Explore More</div>
                <h3 class="text-muted" style="font-family:var(--font-display);font-size:22px;font-weight:600;margin-top:4px;">Other <em class="italic-gold">Divisions</em></h3>
            </div>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="grid-4">
            @foreach(array_slice($otherDivisions, 0, 4, true) as $slug => $other)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal"
               style="text-decoration:none;background:var(--dk-deep);transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon"><i class="{{ $other['icon'] }}" aria-hidden="true"></i></div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-desc" style="font-size:11px;">{{ Str::limit($other['tagline'], 55) }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">Explore <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

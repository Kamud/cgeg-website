@extends('layouts.app')

@section('title', 'CJ Global Mining — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Global Mining — responsible mineral extraction and processing operations across Southern Africa, built on ESG commitment and COIDA-compliant safety culture.')

@section('content')

@include('pages.divisions.partials.theme-dark', [
    'accent'     => '#C87D3D',
    'accentSoft' => 'rgba(200,125,61,0.1)',
    'deep'       => '#14100C',
    'raised'     => '#1D1712',
])

{{-- HERO --}}
<section class="dk-hero">
    <div style="position:absolute;inset:0;z-index:0;opacity:0.16;">
        {{-- [IMAGE SLOT] mining-hero | 1920×1080px — quarry, ore processing, or excavation site --}}
        <img src="{{ $division['hero_img'] }}" alt="CJ Global Mining" style="width:100%;height:100%;object-fit:cover;">
    </div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="dk-hero-content">
            <div class="dk-eyebrow reveal">CJ Global Mining &nbsp;·&nbsp; A CGEG Division</div>
            <div class="dk-line reveal"></div>
            <span class="dk-tagline-word white reveal">Unlocking</span>
            <span class="dk-tagline-word accent reveal reveal-delay-1">Africa's Wealth</span>
            <span class="dk-tagline-word white reveal reveal-delay-2">Responsibly</span>
            <p class="reveal reveal-delay-3">Modern extraction technology paired with a zero-harm safety culture and deep respect for the communities and ecosystems we operate within — delivering value that is both commercially significant and ethically grounded.</p>
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
                <div class="dk-eyebrow reveal">Beneath the Surface</div>
                <h2 class="reveal reveal-delay-1 text-muted">Responsible <em class="italic-gold">Extraction</em></h2>
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
            {{-- [IMAGE SLOT] mining-feature | 700×950px — geological survey / ore sample close-up --}}
            <div class="reveal reveal-delay-1">
                <img src="{{ asset('images/divisions/mining/feature.jpg') }}" alt="CJ Global Mining operations" style="width:100%;height:520px;object-fit:cover;border-radius:var(--radius-card);">
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
            {{-- [IMAGE SLOT] mining-action-{{ $i+1 }} | 700×450px — site operations / equipment / rehabilitation --}}
            <img class="reveal" src="{{ $img }}" alt="CJ Global Mining operations" style="transition-delay:{{ $i * 70 }}ms;">
            @endforeach
        </div>
    </div>
</div>

{{-- QUOTE --}}
<div class="dk-quote">
    <div class="container">
        <blockquote class="reveal">"What we take from the earth, we return to the community — in jobs, in skills, in trust."</blockquote>
        <cite class="reveal reveal-delay-1">CJ Global Mining</cite>
    </div>
</div>

{{-- CTA --}}
<div class="dk-cta">
    <div class="container">
        <div class="dk-line" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal text-muted">Partner With <em class="italic-gold">CJ Global Mining</em></h2>
        <p class="reveal reveal-delay-1">Whether you're an exploration partner, off-taker, or supplier — we're building responsible mining partnerships across the region.</p>
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

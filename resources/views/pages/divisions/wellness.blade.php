@extends('layouts.app')

@section('title', 'CJ Global Saloons & Spas — CJ Global Express Group Unlimited')
@section('meta_description', 'CJ Global Saloons & Spas — luxury wellness and beauty experiences with African soul, operational in South Africa, Zimbabwe, and London.')

@section('content')

@include('pages.divisions.partials.theme-light', [
    'accent'       => '#7C9473',
    'accentBright' => '#96AC8C',
    'accentGlow'   => 'rgba(124,148,115,0.12)',
    'accentBorder' => 'rgba(124,148,115,0.32)',
])

{{-- HERO --}}
<section class="dx-hero">
    <div class="dx-hero-img">
        {{-- [IMAGE SLOT] wellness-hero | 1920×900px — spa treatment room or salon interior --}}
        <img src="{{ $division['hero_img'] }}" alt="CJ Global Saloons & Spas">
    </div>
    <div class="dx-hero-overlay"></div>
    <div class="container dx-hero-content">
        <div class="dx-hero-badge reveal"><i class="{{ $division['icon'] }}" aria-hidden="true"></i> A CJ Global Division</div>
        <h1 class="reveal reveal-delay-1">Luxury Wellness. <span class="dx-em">African Soul.</span></h1>
        <p class="dx-tagline reveal reveal-delay-2">Transformative wellness and beauty experiences, now operational in London alongside our restaurant and nightclub brands — bringing premium African wellness to an international audience.</p>
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
                <div class="dx-eyebrow reveal">Wellness, Reimagined</div>
                <h2 class="reveal reveal-delay-1">Transformative <em class="italic-gold">Care</em></h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Enquire Now</a>
                </div>
            </div>
            {{-- [IMAGE SLOT] wellness-feature | 700×950px — spa treatment / salon chair close-up --}}
            <div class="dx-feature-img reveal reveal-delay-1">
                <img src="{{ asset('images/divisions/wellness/feature.jpg') }}" alt="CJ Global Saloons & Spas">
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
                <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.75;" class="reveal reveal-delay-2">From signature spa journeys to a professional training academy — bespoke wellness with global technique and African heart.</p>
                <div class="reveal reveal-delay-3" style="margin-top:var(--space-3);border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised);">
                    {{-- [IMAGE SLOT] wellness-services | 700×450px — treatment products / salon station --}}
                    <img src="{{ $division['services_img'] }}" alt="CJ Global Saloons & Spas services" style="width:100%;height:240px;object-fit:cover;">
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
            {{-- [IMAGE SLOT] wellness-action-{{ $i+1 }} | 700×450px — treatment in progress / trainee graduation / relaxation lounge --}}
            <img class="reveal" src="{{ $img }}" alt="CJ Global Saloons & Spas in action" style="transition-delay:{{ $i * 70 }}ms;">
            @endforeach
        </div>
    </div>
</div>

{{-- QUOTE --}}
<div class="dx-quote">
    <div class="container">
        <blockquote class="reveal">"True luxury is feeling at home in your own skin — wherever in the world you are."</blockquote>
        <cite class="reveal reveal-delay-1">CJ Global Saloons &amp; Spas</cite>
    </div>
</div>

{{-- CTA --}}
<section class="dx-cta">
    <div class="container" style="max-width:640px;">
        <div class="dx-line" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to <em class="italic-gold">Unwind?</em></h2>
        <p class="reveal reveal-delay-1">Get in touch with our Wellness team about treatments, partnerships, or training academy enrolment.</p>
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

@extends('layouts.app')
@section('title', $division['name'] . ' — CJ Global Express Group Unlimited')
@section('meta_description', $division['tagline'])

@section('content')

<section class="page-hero">
    {{-- [IMAGE SLOT] {{ $division['slug'] }}-hero | 1920×700px — division-specific imagery --}}
    <div class="img-slot" style="position:absolute;inset:0;border-radius:0;min-height:unset;opacity:0.15;"
         data-slot="{{ $division['slug'] }}-hero" data-size="1920x700">
    </div>
    <div class="container page-hero-content">
        <div class="eyebrow reveal">A CJ Global Division</div>
        <h1 class="reveal reveal-delay-1">{{ $division['name'] }}</h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            {{ $division['tagline'] }}
        </p>
    </div>
</section>

{{-- What We Do --}}
<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--space-6);align-items:center;">
            <div>
                <div class="eyebrow reveal">What We Do</div>
                <h2 class="reveal reveal-delay-1">{{ Str::words($division['name'], 3) }}</h2>
                <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.8;" class="reveal reveal-delay-2">
                    {{ $division['description'] }}
                </p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}?division={{ $division['slug'] }}" class="btn btn-primary">Work With Us</a>
                </div>
            </div>
            {{-- [IMAGE SLOT] {{ $division['slug'] }}-overview | 800×600px — division operations imagery --}}
            <div class="img-slot reveal reveal-delay-1" style="min-height:360px;"
                 data-slot="{{ $division['slug'] }}-overview" data-size="800x600">
                <i class="ti ti-photo"></i>
                <span>Division Image</span>
            </div>
        </div>
    </div>
</section>

{{-- Services --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Services &amp; Offerings</div>
            <h2 class="reveal reveal-delay-1">What We <em class="italic-gold">Deliver</em></h2>
        </div>
        <div class="grid-4">
            @foreach($division['services'] as $i => $service)
            <div class="card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div style="width:40px;height:40px;background:var(--gold-glow);border-radius:var(--radius-icon);display:flex;align-items:center;justify-content:center;color:var(--gold-primary);font-size:20px;margin-bottom:var(--space-2);">
                    <i class="{{ $service['icon'] }}"></i>
                </div>
                <div style="font-family:var(--font-display);font-size:17px;font-weight:600;color:var(--text-primary);margin-bottom:6px;">{{ $service['title'] }}</div>
                <div style="font-size:var(--text-small);color:var(--text-secondary);line-height:1.6;">{{ $service['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact CTA --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to Work With <em class="italic-gold">Us?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            Get in touch with our team to discuss how {{ $division['name'] }} can serve your needs.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Get in Touch</a>
    </div>
</section>

{{-- Other Divisions --}}
@if(count($otherDivisions) > 0)
<section class="section-sm" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-3);">
            <div class="eyebrow">Explore More</div>
            <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;">Other Divisions</h3>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-2);">
            @foreach(array_slice($otherDivisions, 0, 4) as $slug => $other)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal" style="text-decoration:none;transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon"><i class="{{ $other['icon'] }}"></i></div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">Learn More <i class="ti ti-arrow-right"></i></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

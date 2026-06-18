@extends('layouts.app')
@section('title', $division['name'] . ' — CJ Global Express Group Unlimited')
@section('meta_description', $division['tagline'] . '. ' . Str::limit($division['description'], 120))

@section('content')
<style>
.div-hero {
    min-height:70vh; display:flex; align-items:flex-end; position:relative; overflow:hidden; padding-bottom:var(--space-6);
    background: var(--gradient-hero);
}
.div-hero-img { position:absolute; inset:0; z-index:0; }
.div-hero-img img { width:100%; height:100%; object-fit:cover; opacity:0.25; }
.div-hero-overlay { position:absolute; inset:0; background:linear-gradient(to top,#F5F1EB 8%,rgba(245,241,235,0.3) 70%,transparent 100%); z-index:1; }
.div-hero-content { position:relative; z-index:2; width:100%; }
.div-hero-badge { display:inline-flex; align-items:center; gap:8px; background:var(--gold-glow); border:1px solid var(--gold-border); border-radius:40px; padding:6px 16px; font-size:var(--text-label); color:var(--gold-primary); letter-spacing:0.06em; text-transform:uppercase; margin-bottom:var(--space-2); }
.div-hero h1 { font-size:var(--text-hero); margin-bottom:var(--space-1); }
.div-hero .tagline { font-size:clamp(16px,2vw,20px); color:var(--text-secondary); max-width:560px; line-height:1.6; margin-bottom:var(--space-4); }

.div-stats { background:var(--gradient-band); padding:var(--space-4) 0; }
.div-stats .card-stat { background:rgba(255,255,255,0.05); box-shadow:none; border:1px solid rgba(201,168,76,0.15); }
.div-stats .stat-num   { color:var(--gold-bright); }
.div-stats .stat-label { color:rgba(245,240,232,0.6); }

.div-about-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-6); align-items:center; }
.div-about-text p { color:var(--text-secondary); line-height:1.85; margin-bottom:var(--space-2); }

.highlights-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:var(--space-2); }
.highlight-card { background:var(--gradient-card); border-radius:var(--radius-card); box-shadow:var(--shadow-raised); padding:var(--space-3); transition:var(--ease-card); }
.highlight-card:hover { box-shadow:var(--shadow-hover); transform:translateY(-2px); }
.highlight-icon { width:44px;height:44px; background:var(--gold-glow); border-radius:var(--radius-icon); display:flex;align-items:center;justify-content:center; color:var(--gold-primary);font-size:22px; margin-bottom:var(--space-2); box-shadow:2px 2px 6px rgba(180,160,120,0.2),-1px -1px 4px rgba(255,255,255,0.7); }
.highlight-title { font-family:var(--font-display); font-size:17px;font-weight:600; color:var(--text-primary); margin-bottom:6px; }
.highlight-desc  { font-size:var(--text-body); color:var(--text-secondary); line-height:1.65; }

.services-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:var(--space-2); }
.service-card { background:var(--gradient-card); border-radius:var(--radius-card); box-shadow:var(--shadow-raised); padding:var(--space-3); display:flex;gap:var(--space-2);align-items:flex-start; transition:var(--ease-card); }
.service-card:hover { box-shadow:var(--shadow-hover); transform:translateY(-1px); }
.service-icon { width:42px;height:42px;flex-shrink:0; background:var(--gold-glow); border-radius:var(--radius-icon); display:flex;align-items:center;justify-content:center; color:var(--gold-primary);font-size:20px; box-shadow:2px 2px 6px rgba(180,160,120,0.2),-1px -1px 4px rgba(255,255,255,0.7); }
.service-title { font-family:var(--font-display);font-size:17px;font-weight:600;color:var(--text-primary);margin-bottom:4px; }
.service-desc  { font-size:var(--text-body);color:var(--text-secondary);line-height:1.6; }

.other-divs-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:var(--space-2); }

@media(max-width:1024px){ .highlights-grid{grid-template-columns:1fr 1fr;} .other-divs-grid{grid-template-columns:repeat(2,1fr);} }
@media(max-width:768px) { .div-hero{min-height:60vh;} .div-about-grid{grid-template-columns:1fr;} .services-grid{grid-template-columns:1fr;} .highlights-grid{grid-template-columns:1fr;} }
@media(max-width:480px) { .other-divs-grid{grid-template-columns:1fr;} }

@media (max-width: 768px) {
    .div-hero { min-height: 65svh !important; }
    .div-hero h1 { font-size: clamp(28px, 9vw, 42px) !important; }
    .div-about-grid { grid-template-columns: 1fr !important; }
    .highlights-grid { grid-template-columns: 1fr !important; }
    .services-grid { grid-template-columns: 1fr !important; }
    .other-divs-grid { grid-template-columns: repeat(2, 1fr) !important; }
    div[style*="grid-template-columns:1fr 1.6fr"] { display: block !important; }
    div[style*="grid-template-columns:1fr 1.6fr"] > div { margin-bottom: var(--space-4); }
}
@media (max-width: 480px) {
    .other-divs-grid { grid-template-columns: 1fr !important; }
    div[style*="display:grid;grid-template-columns:repeat(3"] { grid-template-columns: 1fr 1fr !important; }
}
</style>

{{-- HERO --}}
<section class="div-hero">
    <div class="div-hero-img">
        <img src="{{ $division['hero_img'] }}" alt="{{ $division['name'] }}">
    </div>
    <div class="div-hero-overlay"></div>
    <div class="container div-hero-content">
        <div class="div-hero-badge reveal">@include('components.heroicon', ['name' => str_replace('hi-', '', $division['icon'])]) A CJ Global Division</div>
        <h1 class="reveal reveal-delay-1">{{ $division['name'] }}</h1>
        <p class="tagline reveal reveal-delay-2">{{ $division['tagline'] }}</p>
        <div style="display:flex;gap:var(--space-2);flex-wrap:wrap;" class="reveal reveal-delay-3">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Work With Us <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-arrow-right"/></svg></a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">All Divisions</a>
        </div>
    </div>
</section>

{{-- STATS --}}
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

{{-- ABOUT --}}
<section class="section">
    <div class="container">
        <div class="div-about-grid">
            <div>
                <div class="eyebrow reveal">About This Division</div>
                <h2 class="reveal reveal-delay-1">What We <em class="italic-gold">Do</em></h2>
                <p class="reveal reveal-delay-2">{{ $division['description'] }}</p>
                <p class="reveal reveal-delay-2">{{ $division['body'] }}</p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Enquire Now</a>
                </div>
            </div>
            <div class="reveal reveal-delay-1" style="border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised-lg);">
                <img src="{{ $division['overview_img'] }}" alt="{{ $division['name'] }}" style="width:100%;height:400px;object-fit:cover;">
            </div>
        </div>
    </div>
</section>

{{-- HIGHLIGHTS --}}
<section class="section" style="background:linear-gradient(135deg,#F5F1EB,#EDE8DF);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Why Choose Us</div>
            <h2 class="reveal reveal-delay-1">Key <em class="italic-gold">Highlights</em></h2>
        </div>
        <div class="highlights-grid">
            @foreach($division['highlights'] as $i => $h)
            <div class="highlight-card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                <div class="highlight-icon"><i class="{{ $h['icon'] }}"></i></div>
                <div class="highlight-title">{{ $h['title'] }}</div>
                <div class="highlight-desc">{{ $h['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1.6fr;gap:var(--space-6);align-items:start;">
            <div>
                <div class="eyebrow reveal">What We Deliver</div>
                <h2 class="reveal reveal-delay-1">Services &amp;<br><em class="italic-gold">Offerings</em></h2>
                <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.75;" class="reveal reveal-delay-2">Every service backed by decades of expertise and the full operational strength of the CGEG group.</p>
                <div class="reveal reveal-delay-3" style="margin-top:var(--space-3);border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised);">
                    <img src="{{ $division['services_img'] }}" alt="{{ $division['name'] }} services" style="width:100%;height:240px;object-fit:cover;">
                </div>
            </div>
            <div class="services-grid">
                @foreach($division['services'] as $i => $s)
                <div class="service-card reveal" style="transition-delay:{{ $i * 70 }}ms;">
                    <div class="service-icon"><i class="{{ $s['icon'] }}"></i></div>
                    <div><div class="service-title">{{ $s['title'] }}</div><div class="service-desc">{{ $s['desc'] }}</div></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ACTION STRIP --}}
<section class="section-sm" style="background:linear-gradient(135deg,#F5F1EB,#EDE8DF);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">In Action</div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-2);">
            @foreach($division['action_imgs'] as $i => $img)
            <div class="reveal" style="border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised);transition-delay:{{ $i * 70 }}ms;">
                <img src="{{ $img }}" alt="{{ $division['name'] }} operations" style="width:100%;height:200px;object-fit:cover;">
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:640px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to Work With <em class="italic-gold">Us?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);line-height:1.75;" class="reveal reveal-delay-1">Get in touch with our {{ $division['name'] }} team to discuss how we can support your goals.</p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}?division={{ urlencode($division['name']) }}" class="btn btn-primary">Get in Touch <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-arrow-right"/></svg></a>
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
                <div class="eyebrow">Explore More</div>
                <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;margin-top:4px;">Other <em class="italic-gold">Divisions</em></h3>
            </div>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">View All <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-arrow-right"/></svg></a>
        </div>
        <div class="other-divs-grid">
            @foreach(array_slice($otherDivisions,0,4,true) as $slug => $other)
            <a href="{{ route('division',$slug) }}" class="card card-division reveal" style="text-decoration:none;transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="card-icon">@include('components.heroicon', ['name' => str_replace('hi-', '', $other['icon'])])</div>
                <div class="card-title">{{ $other['name'] }}</div>
                <div class="card-desc" style="font-size:11px;">{{ Str::limit($other['tagline'],55) }}</div>
                <div class="card-link" style="margin-top:var(--space-1);">Explore <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-arrow-right"/></svg></div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

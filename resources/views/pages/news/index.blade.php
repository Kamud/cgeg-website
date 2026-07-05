@extends('layouts.app')

@section('title', 'News — CJ Global Express Group Unlimited')
@section('meta_description', 'The latest media coverage of CJ Global Express Group Unlimited — from European expansion to the Sandton Hydon Park mall and the launch of CJ Vodka Premium Spirits.')

@section('content')

<style>
.news-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.news-hero-bg {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    opacity: 0.16;
}
.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-3);
}
.news-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: var(--ease-card);
}
.news-card:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-3px);
}
.news-card-img { width: 100%; height: 200px; display: block; }
.news-card-body { padding: var(--space-3); display: flex; flex-direction: column; flex: 1; }
.news-card-meta {
    display: flex; align-items: center; justify-content: space-between;
    font-size: 11px; color: var(--text-muted);
    letter-spacing: 0.04em; text-transform: uppercase;
    margin-bottom: var(--space-1);
}
.news-card-category { color: var(--gold-primary); font-weight: 600; }
.news-card-title {
    font-family: var(--font-display); font-size: 19px; font-weight: 600;
    color: var(--text-primary); line-height: 1.3; margin-bottom: 8px;
}
.news-card-excerpt {
    font-size: var(--text-small); color: var(--text-secondary);
    line-height: 1.65; flex: 1; margin-bottom: var(--space-2);
}
.news-card-footer {
    display: flex; align-items: center; justify-content: space-between;
    padding-top: var(--space-2); border-top: 1px solid var(--border-subtle);
}
.news-card-source { font-size: 11px; color: var(--text-muted); }
.news-card-link {
    font-size: var(--text-label); color: var(--gold-primary);
    text-transform: uppercase; letter-spacing: 0.06em; font-weight: 600;
    display: inline-flex; align-items: center; gap: 6px;
}
.news-card-link i { transition: var(--ease-default); }
.news-card:hover .news-card-link i { transform: translateX(3px); }

/* Featured (first) article — larger */
.news-feature {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: var(--space-4);
    align-items: center;
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    overflow: hidden;
    position: relative;
}
.news-feature::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 2px;
    background: linear-gradient(90deg, var(--gold-primary), rgba(201,168,76,0.2), transparent);
}
.news-feature-img { width: 100%; height: 360px; }
.news-feature-body { padding: var(--space-4) var(--space-4) var(--space-4) 0; }
.news-feature-title {
    font-family: var(--font-display); font-size: clamp(24px, 3vw, 32px);
    font-weight: 600; color: var(--text-primary); line-height: 1.25; margin-bottom: var(--space-2);
}
.news-feature-excerpt { font-size: var(--text-body); color: var(--text-secondary); line-height: 1.75; margin-bottom: var(--space-3); }

@media (max-width: 1024px) {
    .news-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .news-feature { grid-template-columns: 1fr !important; }
    .news-feature-body { padding: var(--space-3) !important; }
    .news-feature-img { height: 260px !important; }
}
@media (max-width: 640px) {
    .news-grid { grid-template-columns: 1fr !important; }
}
</style>

{{-- ── HERO ── --}}
<section class="news-hero">
    {{-- [IMAGE SLOT] news-hero | 1920×700px --}}
    <img src="{{ asset('images/pages/news/news-hero.jpg') }}" alt="CGEG Newsroom" class="news-hero-bg">
    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">Newsroom</div>
        <h1 class="reveal reveal-delay-1">News &amp; <em class="italic-gold">Announcements</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            Media coverage of CJ Global Express Group Unlimited's expansion, investments, and leadership — summarised here, with links to the original reporting.
        </p>
    </div>
</section>

@php
    $articles = collect($articles);
    $featuredSlug = $articles->keys()->first();
    $featured = $articles->first();
    $rest = $articles->slice(1);
@endphp

{{-- ── FEATURED ARTICLE ── --}}
<section class="section" style="padding-top:30px;">
    <div class="container">
        <a href="{{ route('news.show', $featuredSlug) }}" class="news-feature reveal" style="text-decoration:none;">
            <img src="{{ $featured['image'] }}" alt="{{ $featured['title'] }}" class="news-feature-img">
            <div class="news-feature-body">
                <div class="news-card-meta" style="margin-bottom:var(--space-2);">
                    <span class="news-card-category">{{ $featured['category'] }}</span>
                    <span>{{ \Illuminate\Support\Carbon::parse($featured['date'])->format('d M Y') }}</span>
                </div>
                <div class="news-feature-title">{{ $featured['title'] }}</div>
                <p class="news-feature-excerpt">{{ $featured['excerpt'] }}</p>
                <span class="news-card-link">Read Summary <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
            </div>
        </a>
    </div>
</section>

{{-- ── NEWS GRID ── --}}
<section class="section" style="padding-top:0;">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">More Coverage</div>
        <div class="news-grid">
            @foreach($rest as $slug => $item)
            <a href="{{ route('news.show', $slug) }}" class="news-card reveal" style="transition-delay:{{ $loop->index * 60 }}ms;text-decoration:none;">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="news-card-img" style="object-fit:cover;">
                <div class="news-card-body">
                    <div class="news-card-meta">
                        <span class="news-card-category">{{ $item['category'] }}</span>
                        <span>{{ \Illuminate\Support\Carbon::parse($item['date'])->format('d M Y') }}</span>
                    </div>
                    <div class="news-card-title">{{ $item['title'] }}</div>
                    <p class="news-card-excerpt">{{ $item['excerpt'] }}</p>
                    <div class="news-card-footer">
                        <span class="news-card-source">{{ $item['source'] }}</span>
                        <span class="news-card-link">Read More <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="section" style="text-align:center;background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Have a Media Enquiry?</h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            For press and media enquiries about CJ Global Express Group Unlimited, get in touch with our team.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Contact Us</a>
    </div>
</section>

@endsection

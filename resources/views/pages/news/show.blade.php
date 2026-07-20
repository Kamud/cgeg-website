@extends('layouts.app')

@section('title', $article['title'] . ' — CJ Global Express Group Unlimited')
@section('meta_description', $article['excerpt'])

@section('content')

<style>
.article-hero {
    padding: var(--space-6) 0 var(--space-5);
}
.article-breadcrumb {
    font-size: var(--text-small); color: var(--text-muted);
    margin-bottom: var(--space-2);
}
.article-breadcrumb a { color: var(--text-muted); }
.article-breadcrumb a:hover { color: var(--gold-primary); }
.article-hero-img {
    width: 100%; height: 420px; object-fit: cover;
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    margin-top: var(--space-3);
}
.article-body {
    max-width: 720px;
    margin: 0 auto;
}
.article-body p {
    font-size: var(--text-body-lg);
    color: var(--text-secondary);
    line-height: 1.85;
    margin-bottom: var(--space-3);
}
.article-source-box {
    background: var(--surface-inset);
    box-shadow: var(--shadow-inset);
    border-radius: var(--radius-icon);
    padding: var(--space-3) var(--space-3);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: var(--space-2);
    flex-wrap: wrap;
    margin: var(--space-4) 0;
}
.article-source-label {
    font-size: 11px; color: var(--text-muted);
    letter-spacing: 0.06em; text-transform: uppercase; margin-bottom: 4px;
}
.article-source-name {
    font-family: var(--font-display); font-weight: 600; color: var(--text-primary); font-size: 16px;
}
.related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-3);
}
@media (max-width: 900px) {
    .article-hero-img { height: 280px; }
    .related-grid { grid-template-columns: 1fr; }
}
</style>

{{-- ── HERO ── --}}
<section class="article-hero">
    <div class="container" style="max-width:900px;">
        <div class="article-breadcrumb reveal">
            <a href="{{ route('news') }}">News</a> <i class="fa-solid fa-chevron-right" style="font-size:9px;margin:0 4px;" aria-hidden="true"></i> {{ $article['category'] }}
        </div>
        <div class="eyebrow reveal reveal-delay-1">{{ $article['category'] }}</div>
        <h1 class="reveal reveal-delay-2">{{ $article['title'] }}</h1>
        <p style="color:var(--text-muted);font-size:var(--text-small);margin-top:var(--space-1);" class="reveal reveal-delay-2">
            {{ \Illuminate\Support\Carbon::parse($article['date'])->format('d F Y') }}
            @if($article['source'] ?? null)
                &middot; Originally reported by {{ $article['source'] }}
            @else
                &middot; CGEG Newsroom
            @endif
        </p>
        {{-- [IMAGE SLOT] news article hero | 1200×700px --}}
        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="article-hero-img reveal reveal-delay-3">
    </div>
</section>

{{-- ── ARTICLE BODY ── --}}
<section class="section" style="padding-top:0;">
    <div class="container">
        <div class="article-body reveal">
            @foreach($article['body'] as $paragraph)
            <p>{{ $paragraph }}</p>
            @endforeach

            @if($article['source_url'] ?? null)
            <div class="article-source-box">
                <div>
                    <div class="article-source-label">Original Reporting</div>
                    <div class="article-source-name">{{ $article['source'] }}</div>
                </div>
                <a href="{{ $article['source_url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-ghost">
                    Read Full Article <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true" style="margin-left:6px;font-size:13px;"></i>
                </a>
            </div>

            <p style="font-size:var(--text-small);color:var(--text-muted);font-style:italic;">
                This is a summary of external media coverage, provided for informational purposes. For the complete, original report, please visit {{ $article['source'] }} using the link above.
            </p>
            @else
            <div class="article-source-box">
                <div>
                    <div class="article-source-label">Published By</div>
                    <div class="article-source-name">CJ Global Express Group Unlimited</div>
                </div>
            </div>

            <p style="font-size:var(--text-small);color:var(--text-muted);font-style:italic;">
                This is an official update from CJ Global Express Group Unlimited.
            </p>
            @endif
        </div>
    </div>
</section>

{{-- ── RELATED NEWS ── --}}
@if($related->count())
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">More News</div>
        <div class="related-grid">
            @foreach($related as $relSlug => $relItem)
            <a href="{{ route('news.show', $relSlug) }}" class="card reveal" style="text-decoration:none;display:flex;flex-direction:column;padding:0;overflow:hidden;transition-delay:{{ $loop->index * 60 }}ms;">
                <img src="{{ $relItem['image'] }}" alt="{{ $relItem['title'] }}" style="width:100%;height:160px;object-fit:cover;">
                <div style="padding:var(--space-3);">
                    <div style="font-size:10px;color:var(--gold-primary);text-transform:uppercase;letter-spacing:0.06em;font-weight:600;margin-bottom:6px;">{{ $relItem['category'] }}</div>
                    <div class="card-title" style="font-size:16px;">{{ $relItem['title'] }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ── CTA ── --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Stay Up to Date</h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            Follow CJ Global Express Group Unlimited's growth across construction, logistics, hospitality, and more.
        </p>
        <a href="{{ route('news') }}" class="btn btn-primary reveal reveal-delay-2">Back to Newsroom</a>
    </div>
</section>

@endsection

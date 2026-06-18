@extends('layouts.app')
@section('title', 'Our Divisions — CJ Global Express Group Unlimited')
@section('content')
<style>
@media (max-width: 768px) {
    div[style*='grid-template-columns:repeat(3,1fr)'] { display: grid !important; grid-template-columns: 1fr !important; }
}
@media (max-width: 1024px) {
    div[style*='grid-template-columns:repeat(3,1fr)'] { grid-template-columns: repeat(2,1fr) !important; }
}
</style>

<section class="page-hero">
    <div class="container">
        <div class="eyebrow reveal">CJ Global Express Group</div>
        <h1 class="reveal reveal-delay-1">Nine Pillars of <em class="italic-gold">Growth</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);" class="reveal reveal-delay-2">
            From construction to premium spirits, each CGEG division operates with the same mandate: excellence, integrity, and lasting impact.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-2);">
            @foreach($divisions as $slug => $division)
            <a href="{{ route('division', $slug) }}" class="card card-division reveal" style="transition-delay:{{ $loop->index * 60 }}ms; text-decoration:none;">
                <div class="card-icon"><i class="{{ $division['icon'] }}"></i></div>
                <div class="card-title">{{ $division['name'] }}</div>
                <div class="card-desc">{{ Str::limit($division['description'], 100) }}</div>
                <div class="card-link">Explore Division <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-arrow-right"/></svg></div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection

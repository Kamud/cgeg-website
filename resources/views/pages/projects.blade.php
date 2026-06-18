@extends('layouts.app')

@section('title', 'Projects — CJ Global Express Group Unlimited')
@section('meta_description', 'Landmark projects by CJ Global Express Group Unlimited — from the Sandton Hydon Park Mall development in Zimbabwe to operations in London and Chicago.')

@section('content')

<style>
.projects-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.projects-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(201,168,76,0.05) 0%, transparent 65%);
    pointer-events: none;
}

/* Featured project — full width */
.project-feature {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    overflow: hidden;
    position: relative;
}
.project-feature::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--gold-primary), rgba(201,168,76,0.2), transparent);
    z-index: 2;
}
.project-feature-img {
    width: 100%;
    height: 420px;
    position: relative;
}
.project-feature-body {
    padding: var(--space-4);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
    align-items: start;
}
.project-feature-title {
    font-family: var(--font-display);
    font-size: clamp(24px, 3vw, 36px);
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-1);
}
.project-feature-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.8;
    margin-top: var(--space-2);
}
.project-meta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-2);
}
.project-meta-item {
    background: var(--surface-inset);
    box-shadow: var(--shadow-inset);
    border-radius: 10px;
    padding: var(--space-2);
}
.project-meta-label {
    font-size: 10px;
    color: var(--text-muted);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.project-meta-value {
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
    line-height: 1.3;
}

/* Half-width featured pair */
.project-pair {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-3);
}
.project-half {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    overflow: hidden;
    transition: var(--ease-card);
}
.project-half:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-2px);
}
.project-half-img { width: 100%; height: 240px; }
.project-half-body { padding: var(--space-3); }
.project-division-tag {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 6px;
}
.project-half-title {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 6px;
}
.project-location-row {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: var(--text-small);
    color: var(--text-secondary);
    margin-bottom: var(--space-2);
}
.project-half-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.7;
}

@media (max-width: 1024px) {
    .project-feature-body { grid-template-columns: 1fr; }
    .project-meta-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .project-pair { grid-template-columns: 1fr; }
    .project-feature-img { height: 260px; }
}

@media (max-width: 768px) {
    .project-feature-body { grid-template-columns: 1fr !important; }
    .project-pair { grid-template-columns: 1fr !important; }
    .project-feature-img { height: 260px !important; }
    .project-meta-grid { grid-template-columns: 1fr 1fr !important; }
    .projects-hero h1 { font-size: clamp(28px, 9vw, 42px); }
}
</style>

{{-- ── HERO ── --}}
<section class="projects-hero">
    {{-- [IMAGE SLOT] projects-hero | 1920×700px — construction site or skyline --}}
    <img src="{{ asset('images/pages/projects-hero.jpg') }}" alt="CGEG Featured Projects" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0.15;">

    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">Our Work</div>
        <h1 class="reveal reveal-delay-1">Projects That Define<br><em class="italic-gold">a Continent</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            From landmark mall developments in Zimbabwe to commercial operations in London and Chicago — every CGEG project is a statement of scale, ambition, and impact.
        </p>
    </div>
</section>

{{-- ── FEATURED: SANDTON MALL ── --}}
<section class="section">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">Landmark Development</div>
        <div class="project-feature reveal reveal-delay-1">
            {{-- [IMAGE SLOT] project-sandton | 1200×700px — Sandton Hydon Park development render --}}
            <div class="project-feature-img">
                <img src="{{ asset('images/pages/project-sandton.jpg') }}" alt="Sandton Hydon Park Mall" style="width:100%;height:420px;object-fit:cover;">
            </div>
            <div class="project-feature-body">
                <div>
                    <div class="project-division-tag">CJ Global Mall</div>
                    <div class="project-feature-title">Sandton Hydon Park Mall</div>
                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:var(--space-1);">
                        <i class="fa-solid fa-location-dot" style="font-size:14px" aria-hidden="true"></i>
                        <span style="font-size:var(--text-small);color:var(--text-secondary);">West of Harare City, Zimbabwe</span>
                    </div>
                    <span class="badge-status badge-development">In Development</span>
                    <p class="project-feature-desc">
                        A landmark two-floor mixed-use development featuring retail, office space, and a fuel station — this project signals the Group's return to Zimbabwe and is intended to inspire other foreign investors to follow. As Prof. Sir Jaricha has stated, this development is as much about economic confidence as it is about commerce.
                    </p>
                    <p class="project-feature-desc" style="margin-top:var(--space-2);">
                        Developed in partnership with Delatfin Investment (Clemence Zingoni), Sandton Hydon Park will anchor a new economic hub west of Harare. When completed, it is projected to create between 2,000 and 5,000 direct and indirect jobs — a transformational impact for the region.
                    </p>
                    <div style="margin-top:var(--space-3);padding:var(--space-2) var(--space-3);border-left:2px solid var(--gold-primary);background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                        <p style="font-family:var(--font-display);font-style:italic;color:var(--text-primary);font-size:16px;line-height:1.5;margin:0;">First major investment in Zimbabwe in 17 years</p>
                    </div>
                </div>
                <div>
                    <div style="font-size:var(--text-label);color:var(--text-secondary);letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--space-2);">Project Details</div>
                    <div class="project-meta-grid">
                        <div class="project-meta-item">
                            <div class="project-meta-label">Investment</div>
                            <div class="project-meta-value">US$970 Million</div>
                        </div>
                        <div class="project-meta-item">
                            <div class="project-meta-label">Status</div>
                            <div class="project-meta-value">In Development</div>
                        </div>
                        <div class="project-meta-item">
                            <div class="project-meta-label">Jobs Impact</div>
                            <div class="project-meta-value">2,000–5,000</div>
                        </div>
                        <div class="project-meta-item">
                            <div class="project-meta-label">Partner</div>
                            <div class="project-meta-value">Delatfin Investment (Clemence Zingoni)</div>
                        </div>
                        <div class="project-meta-item">
                            <div class="project-meta-label">Division</div>
                            <div class="project-meta-value">CJ Global Mall</div>
                        </div>
                        <div class="project-meta-item">
                            <div class="project-meta-label">Location</div>
                            <div class="project-meta-value">West of Harare City, Zimbabwe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── LONDON + CHICAGO ── --}}
<section class="section" style="padding-top:0;">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">International Operations</div>
        <div class="project-pair">
            <div class="project-half reveal">
                {{-- [IMAGE SLOT] project-london | 800×500px — London commercial property --}}
                <div class="project-half-img">
                    <img src="{{ asset('images/pages/project-london.jpg') }}" alt="London Market Entry" style="width:100%;height:240px;object-fit:cover;">
                </div>
                <div class="project-half-body">
                    <div class="project-division-tag">CJ Restaurants &amp; Nightclubs · CJ Global Spas &amp; Salons</div>
                    <div class="project-half-title">London Market Entry</div>
                    <div class="project-location-row">
                        <i class="fa-solid fa-location-dot" style="font-size:13px" aria-hidden="true"></i>
                        London, United Kingdom
                    </div>
                    <span class="badge-status badge-operational" style="margin-bottom:var(--space-2);display:inline-block;">Operational</span>
                    <p class="project-half-desc">
                        The London acquisition is part of a deliberate strategy to diversify beyond logistics into premium hospitality and wellness. Prime commercial property acquired in London, housing operational CJ Restaurants &amp; Nightclubs and CJ Global Spas &amp; Salons — opening doors across European markets.
                    </p>
                    <div style="margin-top:var(--space-3);padding:var(--space-2) var(--space-3);border-left:2px solid var(--gold-primary);background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                        <p style="font-family:var(--font-display);font-style:italic;color:var(--text-primary);font-size:15px;line-height:1.5;margin:0;">First African conglomerate of this scale in London's hospitality market</p>
                    </div>
                    <div style="margin-top:var(--space-2);display:flex;gap:var(--space-1);flex-wrap:wrap;">
                        <span style="font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.06em;background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:6px;padding:4px 10px;">Hospitality &amp; Wellness</span>
                    </div>
                </div>
            </div>

            <div class="project-half reveal reveal-delay-1">
                {{-- [IMAGE SLOT] project-chicago | 800×500px — Chicago building --}}
                <div class="project-half-img">
                    <img src="{{ asset('images/pages/project-chicago.jpg') }}" alt="CJ Vodka Premium Spirits — Chicago" style="width:100%;height:240px;object-fit:cover;">
                </div>
                <div class="project-half-body">
                    <div class="project-division-tag">CJ Vodka Premium Spirits</div>
                    <div class="project-half-title">CJ Vodka Premium Spirits</div>
                    <div class="project-location-row">
                        <i class="fa-solid fa-location-dot" style="font-size:13px" aria-hidden="true"></i>
                        Chicago, Illinois, USA
                    </div>
                    <span class="badge-status badge-operational" style="margin-bottom:var(--space-2);display:inline-block;">Operational</span>
                    <p class="project-half-desc">
                        CGEG's newest and ninth division — a bold pivot into spirits manufacturing. The Chicago facility produces premium vodka for the US market, with manufacturing hubs in KwaZulu-Natal and Lesotho serving the African market. Negotiations are underway for a Zimbabwe manufacturing facility. Targeting the US premium spirits market, one of the world's largest.
                    </p>
                    <div style="margin-top:var(--space-3);padding:var(--space-2) var(--space-3);border-left:2px solid var(--gold-primary);background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                        <p style="font-family:var(--font-display);font-style:italic;color:var(--text-primary);font-size:15px;line-height:1.5;margin:0;">Group's debut in manufacturing and the North American market</p>
                    </div>
                    <div style="margin-top:var(--space-2);display:flex;gap:var(--space-1);flex-wrap:wrap;">
                        <span style="font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.06em;background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:6px;padding:4px 10px;">Premium Spirits</span>
                        <span style="font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.06em;background:var(--surface-inset);box-shadow:var(--shadow-inset);border-radius:6px;padding:4px 10px;">Manufacturing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="section" style="text-align:center;background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Interested in Partnering on a <em class="italic-gold">Project?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            CGEG is always open to strategic development partnerships, investment opportunities, and joint ventures across all nine divisions.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Start a Conversation</a>
    </div>
</section>

@endsection

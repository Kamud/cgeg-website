@extends('layouts.app')

@section('title', 'CJ Global Foundation — CJ Global Express Group Unlimited')
@section('meta_description', 'The CJ Global Foundation drives education and healthcare impact across Zimbabwe, South Africa, Botswana, Zambia, and Lesotho.')

@section('content')

<style>
.foundation-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.foundation-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 40% 60%, rgba(201,168,76,0.06) 0%, transparent 60%);
    pointer-events: none;
}

/* Focus area cards */
.focus-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-3);
}
.focus-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    overflow: hidden;
    transition: var(--ease-card);
}
.focus-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px); }
.focus-card-img { height: 240px; }
.focus-card-body { padding: var(--space-3); }
.focus-card-icon {
    width: 44px; height: 44px;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 22px;
    margin-bottom: var(--space-2);
}
.focus-card-title {
    font-family: var(--font-display);
    font-size: 22px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-1);
}
.focus-card-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.75;
}

/* Programme cards */
.programme-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    display: flex; gap: var(--space-2);
    align-items: flex-start;
    transition: var(--ease-card);
}
.programme-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-1px); }
.programme-icon {
    width: 42px; height: 42px; flex-shrink: 0;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 20px;
}
.programme-country {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.programme-name {
    font-family: var(--font-display);
    font-size: 17px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.programme-desc {
    font-size: var(--text-small);
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Countries strip */
.countries-strip {
    display: flex; flex-wrap: wrap; gap: var(--space-2); justify-content: center;
}
.country-pill {
    background: var(--surface-raised);
    box-shadow: var(--shadow-raised);
    border-radius: 40px;
    padding: 10px 20px;
    display: flex; align-items: center; gap: 8px;
    font-size: var(--text-body);
    color: var(--text-primary);
    transition: var(--ease-card);
}
.country-pill:hover { box-shadow: var(--shadow-hover); }
.country-pill i { color: var(--gold-primary); }

@media (max-width: 768px) {
    .focus-grid { grid-template-columns: 1fr; }
}

@media (max-width: 768px) {
    .focus-grid { grid-template-columns: 1fr !important; }
    .countries-strip { gap: var(--space-1) !important; }
    .foundation-hero h1 { font-size: clamp(28px, 9vw, 42px); }
}
</style>

{{-- ── HERO ── --}}
<section class="foundation-hero">
    {{-- [IMAGE SLOT] foundation-hero | 1920×800px — community, children, healthcare imagery --}}
    <img src="{{ asset('images/pages/foundation-hero.jpg') }}" alt="CJ Global Foundation community impact" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0.18;">

    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">CJ Global Foundation</div>
        <h1 class="reveal reveal-delay-1">Giving Back to the<br><em class="italic-gold">Communities We Serve</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            The CJ Global Foundation is the charitable arm of CGEG — dedicated to driving education and healthcare impact across Southern Africa where it matters most.
        </p>
    </div>
</section>

{{-- ── MISSION ── --}}
<div style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);border-bottom:1px solid var(--border-subtle);padding:var(--space-6) 0;text-align:center;">
    <div class="container" style="max-width:740px;">
        <div class="divider-gold reveal" style="margin:0 auto var(--space-3);"></div>
        <blockquote style="font-family:var(--font-display);font-size:clamp(18px,2.2vw,26px);font-style:italic;color:var(--text-primary);line-height:1.55;" class="reveal reveal-delay-1">
            "True growth is measured not only in revenues and markets, but in the number of lives transformed, communities uplifted, and futures made possible."
        </blockquote>
        <cite style="display:block;margin-top:var(--space-2);font-family:var(--font-body);font-size:var(--text-label);color:var(--gold-primary);letter-spacing:0.1em;font-style:normal;text-transform:uppercase;" class="reveal reveal-delay-2">
            CJ Global Foundation — Mission Statement
        </cite>
    </div>
</div>

{{-- ── IMPACT STATS ── --}}
<section class="section-sm">
    <div class="container">
        <div class="grid-4">
            <div class="card-stat reveal"><div class="stat-num">5</div><div class="stat-label">Countries Active</div></div>
            <div class="card-stat reveal reveal-delay-1"><div class="stat-num">2</div><div class="stat-label">Focus Areas</div></div>
            <div class="card-stat reveal reveal-delay-2"><div class="stat-num">6+</div><div class="stat-label">Active Programmes</div></div>
            <div class="card-stat reveal reveal-delay-3"><div class="stat-num">2012</div><div class="stat-label">Year Established</div></div>
        </div>
    </div>
</section>

{{-- ── FOCUS AREAS ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Focus Areas</div>
            <h2 class="reveal reveal-delay-1">Where We <em class="italic-gold">Invest</em></h2>
        </div>
        <div class="focus-grid">
            <div class="focus-card reveal">
                {{-- [IMAGE SLOT] foundation-education | 800×500px — education programme imagery --}}
                <div class="focus-card-img">
                    <img src="{{ asset('images/pages/foundation-education.jpg') }}" alt="Foundation Education Programme" style="width:100%;height:240px;object-fit:cover;">
                </div>
                <div class="focus-card-body">
                    <div class="focus-card-icon"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i></div>
                    <div class="focus-card-title">Education</div>
                    <p class="focus-card-desc">
                        Investing in schools, scholarships, and learning infrastructure across Southern Africa. The CJ Global Foundation believes that education is the single greatest equaliser — and the foundation of every nation's future.
                    </p>
                    <p class="focus-card-desc" style="margin-top:var(--space-1);">
                        Our education programmes span early childhood development, secondary school support, and bursary programmes for tertiary education — with active initiatives in Zimbabwe, South Africa, Zambia, and Lesotho.
                    </p>
                </div>
            </div>

            <div class="focus-card reveal reveal-delay-1">
                {{-- [IMAGE SLOT] foundation-healthcare | 800×500px — healthcare programme imagery --}}
                <div class="focus-card-img">
                    <img src="{{ asset('images/pages/foundation-healthcare.jpg') }}" alt="Foundation Healthcare Programme" style="width:100%;height:240px;object-fit:cover;">
                </div>
                <div class="focus-card-body">
                    <div class="focus-card-icon"><i class="fa-solid fa-heart" aria-hidden="true"></i></div>
                    <div class="focus-card-title">Healthcare</div>
                    <p class="focus-card-desc">
                        Supporting clinics, mobile health units, and community health education across underserved communities. From maternal health in Zimbabwe to primary care access in Botswana — the Foundation is committed to closing the healthcare gap.
                    </p>
                    <p class="focus-card-desc" style="margin-top:var(--space-1);">
                        Our healthcare initiatives include medical supply drives, health awareness campaigns, and partnerships with local health authorities to extend the reach of quality care.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── ACTIVE PROGRAMMES ── --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Active Programmes</div>
            <h2 class="reveal reveal-delay-1">Where We Are<br><em class="italic-gold">Making Impact</em></h2>
        </div>
        <div class="grid-3">
            <div class="programme-card reveal">
                <div class="programme-icon"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">Zimbabwe</div>
                    <div class="programme-name">School Infrastructure Support</div>
                    <div class="programme-desc">Rehabilitation of school buildings and supply of educational materials across rural Zimbabwe.</div>
                </div>
            </div>
            <div class="programme-card reveal reveal-delay-1">
                <div class="programme-icon"><i class="fa-solid fa-heart" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">South Africa</div>
                    <div class="programme-name">Community Health Clinics</div>
                    <div class="programme-desc">Supporting community health workers and clinic supply chains in KwaZulu-Natal townships.</div>
                </div>
            </div>
            <div class="programme-card reveal reveal-delay-2">
                <div class="programme-icon"><i class="fa-solid fa-book-open" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">Zambia</div>
                    <div class="programme-name">Bursary Programme</div>
                    <div class="programme-desc">Annual bursaries for deserving students pursuing tertiary education in Zambia.</div>
                </div>
            </div>
            <div class="programme-card reveal reveal-delay-1">
                <div class="programme-icon"><i class="fa-solid fa-heart" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">Botswana</div>
                    <div class="programme-name">Maternal Health Initiative</div>
                    <div class="programme-desc">Improving access to maternal and infant healthcare in underserved communities.</div>
                </div>
            </div>
            <div class="programme-card reveal reveal-delay-2">
                <div class="programme-icon"><i class="fa-solid fa-pencil" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">Lesotho</div>
                    <div class="programme-name">Early Childhood Development</div>
                    <div class="programme-desc">Funding ECD centres and training for early childhood educators across Lesotho.</div>
                </div>
            </div>
            <div class="programme-card reveal reveal-delay-3">
                <div class="programme-icon"><i class="fa-solid fa-users" aria-hidden="true"></i></div>
                <div>
                    <div class="programme-country">Pan-African</div>
                    <div class="programme-name">Youth Entrepreneurship</div>
                    <div class="programme-desc">Mentorship and seed funding for young entrepreneurs across the CGEG operating footprint.</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── COUNTRIES ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);text-align:center;">
    <div class="container">
        <div class="eyebrow reveal" style="justify-content:center;">Active In</div>
        <h2 class="reveal reveal-delay-1" style="margin-bottom:var(--space-4);">Five Countries, <em class="italic-gold">One Mission</em></h2>
        <div class="countries-strip">
            <div class="country-pill reveal"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Zimbabwe</div>
            <div class="country-pill reveal reveal-delay-1"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> South Africa</div>
            <div class="country-pill reveal reveal-delay-2"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Botswana</div>
            <div class="country-pill reveal reveal-delay-3"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Zambia</div>
            <div class="country-pill reveal reveal-delay-4"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Lesotho</div>
        </div>
    </div>
</section>

{{-- ── PARTNER CTA ── --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Partner With the <em class="italic-gold">Foundation</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            We welcome partnerships with NGOs, governments, corporates, and individuals who share our commitment to community upliftment across Southern Africa.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Get Involved</a>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'About Us — CJ Global Express Group Unlimited')
@section('meta_description', 'Founded in 1999 by Prof. Sir Clemence Jaricha Muzenda, CJ Global Express Group Unlimited is a diversified global conglomerate operating across 9 divisions in 32+ countries.')

@section('content')

<style>
/* ── Page Hero ── */
.about-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.about-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(201,168,76,0.05) 0%, transparent 60%);
    pointer-events: none;
}

/* ── Story Section ── */
.story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-6);
    align-items: start;
}
.story-text p {
    color: var(--text-secondary);
    margin-bottom: var(--space-2);
    line-height: 1.8;
}

/* ── Vision / Mission / Values ── */
.vmv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-3);
}
.vmv-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-4);
    transition: var(--ease-card);
}
.vmv-card:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-2px);
}
.vmv-icon {
    width: 48px;
    height: 48px;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gold-primary);
    font-size: 22px;
    margin-bottom: var(--space-2);
}
.vmv-card h3 {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-1);
}
.vmv-card p {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.7;
}
.values-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: var(--space-2);
}
.value-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: var(--text-body);
    color: var(--text-secondary);
}
.value-item::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--gold-primary);
    flex-shrink: 0;
}

/* ── Founder Section ── */
.founder-grid {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: var(--space-6);
    align-items: start;
}
.founder-img-wrap {
    position: relative;
}
.founder-img-wrap::after {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: calc(var(--radius-card) + 4px);
    border: 1px solid var(--gold-border);
    pointer-events: none;
}
.founder-bio h2 { margin-bottom: var(--space-1); }
.founder-title {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: var(--space-3);
    display: block;
}
.founder-bio p {
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: var(--space-2);
}

/* ── Founder Message Band ── */
.founder-message {
    background: var(--surface-raised);
    border-top: 1px solid var(--border-subtle);
    border-bottom: 1px solid var(--border-subtle);
    padding: var(--space-7) 0;
}
.founder-message blockquote {
    font-family: var(--font-display);
    font-size: clamp(18px, 2.2vw, 26px);
    font-style: italic;
    color: var(--text-primary);
    line-height: 1.55;
    padding-left: var(--space-4);
    border-left: 2px solid var(--gold-primary);
    max-width: 780px;
}
.founder-message cite {
    display: block;
    margin-top: var(--space-3);
    font-family: var(--font-body);
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.1em;
    font-style: normal;
    text-transform: uppercase;
    padding-left: var(--space-4);
}

/* ── Timeline (centred, alternating, fully responsive) ── */
.timeline-wrap {
    position: relative;
    padding: var(--space-2) 0;
}
.timeline-wrap::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 0;
    bottom: 0;
    width: 1px;
    background: linear-gradient(to bottom, var(--gold-primary), var(--gold-muted), transparent);
}
.timeline-item {
    position: relative;
    width: calc(50% - 36px);
    padding: var(--space-3);
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    margin-bottom: var(--space-4);
    transition: var(--ease-card);
}
.timeline-item:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-2px);
}
/* odd items on the left */
.timeline-item:nth-child(odd) {
    margin-left: 0;
    margin-right: auto;
}
/* even items on the right */
.timeline-item:nth-child(even) {
    margin-left: auto;
    margin-right: 0;
}
/* connector dot */
.timeline-item::after {
    content: '';
    position: absolute;
    top: calc(var(--space-3) + 6px);
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: var(--gold-primary);
    box-shadow: 0 0 0 3px var(--gold-glow);
}
.timeline-item:nth-child(odd)::after {
    right: calc(-36px - 5px);
}
.timeline-item:nth-child(even)::after {
    left: calc(-36px - 5px);
}
.timeline-year {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.1em;
    margin-bottom: 4px;
}
.timeline-event {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.timeline-desc {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.65;
}
/* ── Mobile: single column, spine on the left ── */
@media (max-width: 768px) {
    .timeline-wrap::before {
        left: 16px;
        transform: none;
    }
    .timeline-item,
    .timeline-item:nth-child(odd),
    .timeline-item:nth-child(even) {
        width: 100%;
        margin-left: 40px;
        margin-right: 0;
        box-sizing: border-box;
    }
    .timeline-item::after,
    .timeline-item:nth-child(odd)::after,
    .timeline-item:nth-child(even)::after {
        left: calc(-40px + 10px);
        right: auto;
    }
}

/* ── Compliance ── */
.compliance-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: var(--space-2);
}
.compliance-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3) var(--space-2);
    text-align: center;
}
.compliance-card i {
    font-size: 28px;
    color: var(--gold-primary);
    margin-bottom: var(--space-1);
    display: block;
}
.compliance-card .c-name {
    font-size: var(--text-label);
    color: var(--text-primary);
    font-weight: 500;
    letter-spacing: 0.06em;
    display: block;
    margin-bottom: 4px;
}
.compliance-card .c-desc {
    font-size: 10px;
    color: var(--text-muted);
    letter-spacing: 0.04em;
    text-transform: uppercase;
    line-height: 1.4;
}

@media (max-width: 1024px) {
    .compliance-grid { grid-template-columns: repeat(3, 1fr); }
    .vmv-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .story-grid,
    .founder-grid { grid-template-columns: 1fr; }
    .compliance-grid { grid-template-columns: repeat(2, 1fr); }
    .founder-message blockquote { font-size: clamp(16px, 5vw, 20px); }
    .about-hero { padding: var(--space-6) 0 var(--space-4); }
    .about-hero h1 { font-size: clamp(28px, 9vw, 42px); }
    .timeline-section-grid { grid-template-columns: 1fr !important; gap: var(--space-4) !important; }
}
@media (max-width: 480px) {
    .compliance-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

{{-- ── HERO ── --}}
<section class="about-hero">
    <img src="{{ asset('images/pages/about-hero.jpg') }}" alt="CJ Global Express Group headquarters" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0.15;">

    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">Established 1999</div>
        <h1 class="reveal reveal-delay-1">A Legacy Built on<br><em class="italic-gold">Integrity</em></h1>
        <p style="color:var(--text-secondary);max-width:580px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            From a bold vision in 1999 to a diversified global conglomerate spanning nine industries and 32+ countries — this is the story of CJ Global Express Group Unlimited.
        </p>
    </div>
</section>

{{-- ── WHO WE ARE ── --}}
<section class="section">
    <div class="container">
        <div class="story-grid">
            <div class="story-text">
                <div class="eyebrow reveal">Who We Are</div>
                <h2 class="reveal reveal-delay-1">More Than a<br><em class="italic-gold">Business</em></h2>
                <p class="reveal reveal-delay-2">
                    CJ Global Express Group Unlimited is a diversified multinational conglomerate headquartered in Ntambanana, KwaZulu-Natal, South Africa, with offices in Zimbabwe, the United Kingdom, and the United States.
                </p>
                <p class="reveal reveal-delay-2">
                    Founded in 1999 by Prof. Sir Clemence Jaricha Muzenda, CGEG has grown from a single entity into a nine-division powerhouse — spanning construction, mining, logistics, properties, retail, hospitality, wellness, and premium spirits.
                </p>
                <p class="reveal reveal-delay-2">
                    Our mandate has never changed: to drive economic transformation across Africa and the world, to create meaningful employment, and to build infrastructure that outlasts any single generation.
                </p>
            </div>

            {{-- [IMAGE SLOT] about-story | 800×700px — HQ exterior or operations --}}
            <div class="reveal reveal-delay-1" style="border-radius:var(--radius-card);overflow:hidden;box-shadow:var(--shadow-raised-lg);">
                <img src="{{ asset('images/pages/about-story.jpg') }}" alt="CJ Global Express Group" style="width:100%;height:380px;object-fit:cover;">
            </div>
        </div>
    </div>
</section>

{{-- ── VISION / MISSION / VALUES ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);text-align:center;">
            <div class="eyebrow reveal" style="justify-content:center;">Our Foundation</div>
            <h2 class="reveal reveal-delay-1">What Drives <em class="italic-gold">Everything We Do</em></h2>
        </div>
        <div class="vmv-grid">
            <div class="vmv-card reveal">
                <div class="vmv-icon"><i class="fa-solid fa-eye" aria-hidden="true"></i></div>
                <h3>Our Vision</h3>
                <p>To be the sector leader benchmarking quality, integrity, and innovation across every industry we operate in — from Africa to the world.</p>
            </div>
            <div class="vmv-card reveal reveal-delay-1">
                <div class="vmv-icon"><i class="fa-solid fa-crosshairs" aria-hidden="true"></i></div>
                <h3>Our Mission</h3>
                <p>To deliver exceptional value to our clients, communities, and stakeholders through diversified business excellence, strategic growth, and unwavering integrity.</p>
            </div>
            <div class="vmv-card reveal reveal-delay-2">
                <div class="vmv-icon"><i class="fa-solid fa-heart" aria-hidden="true"></i></div>
                <h3>Our Values</h3>
                <div class="values-list">
                    <div class="value-item">Innovation — embracing new ideas and approaches</div>
                    <div class="value-item">Excellence — delivering the highest standards in all we do</div>
                    <div class="value-item">Community — investing in the people and places we serve</div>
                    <div class="value-item">Integrity — transparent, ethical, and accountable always</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── FOUNDER BIOGRAPHY ── --}}
<section class="section">
    <div class="container">
        <div class="founder-grid">
            {{-- [IMAGE SLOT] founder-portrait | 700×900px — formal founder portrait --}}
            <div class="founder-img-wrap reveal">
                <img src="{{ asset('images/pages/about-founder.jpg') }}" alt="Prof. Clemence Jaricha — Founder & Chairman" style="width:100%;min-height:480px;height:480px;object-fit:cover;border-radius:var(--radius-card);">
            </div>

            <div class="founder-bio">
                <div class="eyebrow reveal">The Founder</div>
                <h2 class="reveal reveal-delay-1">Prof. Sir Clemence<br><em class="italic-gold">Jaricha Muzenda</em></h2>
                <span class="founder-title reveal reveal-delay-1">Founder &amp; Chief Executive Officer</span>
                <p class="reveal reveal-delay-2">
                    Born in Zimbabwe, Prof. Sir Clemence Jaricha Muzenda is a visionary entrepreneur, global business leader, and advocate for African economic empowerment. His journey from a young Zimbabwean with a dream to the founder of a pan-African conglomerate is a testament to the power of vision, perseverance, and integrity.
                </p>
                <p class="reveal reveal-delay-2">
                    In 1999, he founded CJ Global Express Group Unlimited with a clear mandate: to build a diversified business that would not only generate commercial value but drive meaningful transformation across the African continent. Under his leadership, CGEG has expanded to 32+ countries and grown from a single division to nine distinct business pillars.
                </p>
                <p class="reveal reveal-delay-2">
                    Prof. Sir Muzenda's philosophy centres on the belief that business is one of the most powerful tools for societal upliftment — and that African entrepreneurs must build at global scale. His landmark return to Zimbabwe through the Sandton Hydon Park Mall project, after nearly 17 years, stands as a symbol of that conviction.
                </p>
                <div style="margin-top:var(--space-3);" class="reveal reveal-delay-3">
                    <a href="{{ route('contact') }}" class="btn btn-ghost">Contact the Founder's Office</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── FOUNDER'S MESSAGE ── --}}
<div class="founder-message">
    <div class="container">
        <blockquote class="reveal">
            "Our ambition is not merely to build businesses — it is to build the future of a continent.
            Every project, every division, every partnership is a brick in that foundation.
            We do not build for today. We build for the generations that will inherit what we leave behind."
        </blockquote>
        <cite class="reveal reveal-delay-1">Prof. Sir Clemence Jaricha Muzenda — Founder &amp; CEO, CJ Global Express Group Unlimited</cite>
    </div>
</div>

{{-- ── TIMELINE ── --}}
<section class="section">
    <div class="container">
        <div style="text-align:center;margin-bottom:var(--space-5);">
            <div class="eyebrow reveal" style="justify-content:center;">Our Journey</div>
            <h2 class="reveal reveal-delay-1">25+ Years of<br><em class="italic-gold">Building</em></h2>
            <p style="color:var(--text-secondary);margin-top:var(--space-2);line-height:1.8;max-width:560px;margin-left:auto;margin-right:auto;" class="reveal reveal-delay-2">
                From a founding vision in 1999 to a nine-division conglomerate operating across 32+ countries — every milestone has been a step toward a larger purpose.
            </p>
        </div>
        <div class="timeline-wrap">
            <div class="timeline-item reveal">
                <div class="timeline-year">1999</div>
                <div class="timeline-event">Founded in Zimbabwe</div>
                <div class="timeline-desc">Prof. Sir Clemence Jaricha Muzenda establishes the foundations of what will become CJ Global Express Group Unlimited — beginning with a vision for pan-African economic transformation.</div>
            </div>
            <div class="timeline-item reveal reveal-delay-1">
                <div class="timeline-year">2012</div>
                <div class="timeline-event">Incorporated in South Africa</div>
                <div class="timeline-desc">CJ Global Express Group Unlimited formally registered (2012/344459/07). South African headquarters established in Ntambanana, KwaZulu-Natal, anchoring the group's continental operations.</div>
            </div>
            <div class="timeline-item reveal reveal-delay-2">
                <div class="timeline-year">2014 – 2016</div>
                <div class="timeline-event">Pan-African Expansion</div>
                <div class="timeline-desc">Logistics and construction divisions established. Footprint grows across Southern Africa into Botswana, Zambia, and Lesotho.</div>
            </div>
            <div class="timeline-item reveal reveal-delay-3">
                <div class="timeline-year">2018 – 2020</div>
                <div class="timeline-event">Global Footprint</div>
                <div class="timeline-desc">European operations anchored with a London commercial property acquisition. North American presence established in Chicago. 32+ countries reached.</div>
            </div>
            <div class="timeline-item reveal reveal-delay-4">
                <div class="timeline-year">2022 – 2023</div>
                <div class="timeline-event">Nine Divisions</div>
                <div class="timeline-desc">CGEG reaches nine distinct business divisions including the launch of CJ Vodka Premium Spirits — a bold entry into the global luxury spirits market.</div>
            </div>
            <div class="timeline-item reveal">
                <div class="timeline-year">2024 – 2025</div>
                <div class="timeline-event">Return to Zimbabwe</div>
                <div class="timeline-desc">Landmark Sandton Hydon Park Mall development (US$10–15M) announced in partnership with Delatfin Investment — projected to create up to 5,000 jobs and signal CGEG's powerful return home.</div>
            </div>
        </div>
    </div>
</section>

{{-- ── COMPLIANCE & CREDENTIALS ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Compliance &amp; Credentials</div>
            <h2 class="reveal reveal-delay-1">Certified. Compliant.<br><em class="italic-gold">Trusted.</em></h2>
        </div>
        <div class="compliance-grid">
            <div class="compliance-card reveal">
                <i class="fa-solid fa-trophy" aria-hidden="true"></i>
                <span class="c-name">BBBEE Level 1</span>
                <span class="c-desc">Broad-Based Black Economic Empowerment</span>
            </div>
            <div class="compliance-card reveal reveal-delay-1">
                <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                <span class="c-name">COIDA</span>
                <span class="c-desc">Compensation for Occupational Injuries</span>
            </div>
            <div class="compliance-card reveal reveal-delay-2">
                <i class="fa-solid fa-users" aria-hidden="true"></i>
                <span class="c-name">UIF Registered</span>
                <span class="c-desc">Unemployment Insurance Fund</span>
            </div>
            <div class="compliance-card reveal reveal-delay-3">
                <i class="fa-solid fa-building" aria-hidden="true"></i>
                <span class="c-name">CIDB Certified</span>
                <span class="c-desc">Construction Industry Development Board</span>
            </div>
            <div class="compliance-card reveal reveal-delay-4">
                <i class="fa-solid fa-file-circle-check" aria-hidden="true"></i>
                <span class="c-name">CSD Registered</span>
                <span class="c-desc">Central Supplier Database — South Africa</span>
            </div>
        </div>
        <p style="font-size:var(--text-small);color:var(--text-muted);margin-top:var(--space-3);">
            Registration No: 2012/344459/07 &nbsp;|&nbsp; Tax Reference: 9225224253
        </p>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:600px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Ready to Partner with <em class="italic-gold">CGEG?</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            Whether you're looking to invest, collaborate, or do business with one of our nine divisions — we'd love to hear from you.
        </p>
        <div style="display:flex;gap:var(--space-2);justify-content:center;flex-wrap:wrap;" class="reveal reveal-delay-2">
            <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch</a>
            <a href="{{ route('divisions') }}" class="btn btn-ghost">Explore Divisions</a>
        </div>
    </div>
</section>

@endsection

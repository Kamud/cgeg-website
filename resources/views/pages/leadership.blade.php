@extends('layouts.app')

@section('title', 'Leadership — CJ Global Express Group Unlimited')
@section('meta_description', 'Meet the leadership team driving CJ Global Express Group Unlimited — from the Founder & CEO to directors, management, and divisional oversight.')

@section('content')

<style>
.leadership-hero {
    padding: var(--space-7) 0 var(--space-6);
    position: relative;
    overflow: hidden;
}
.leadership-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 60% 40%, rgba(201,168,76,0.1) 0%, transparent 65%);
    pointer-events: none;
}

/* Founder feature card */
.founder-feature {
    display: grid;
    grid-template-columns: 340px 1fr;
    gap: var(--space-5);
    align-items: center;
    background: var(--gradient-hero);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    padding: var(--space-4);
    position: relative;
    overflow: hidden;
}
.founder-feature::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--gold-primary), transparent);
}
.founder-feature-img {
    border-radius: 10px;
    overflow: hidden;
    min-height: 320px;
}
.founder-feature-info .title-tag {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: var(--space-1);
    display: block;
}
.founder-feature-info h2 {
    font-size: clamp(22px, 2.5vw, 32px);
    margin-bottom: var(--space-2);
}
.founder-feature-info p {
    font-size: var(--text-body);
    color: var(--text-secondary);
    line-height: 1.8;
    margin-bottom: var(--space-2);
}
.founder-contacts {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-top: var(--space-3);
}
.founder-contacts a {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: var(--text-small);
    color: var(--text-secondary);
    transition: var(--ease-default);
}
.founder-contacts a:hover { color: var(--gold-primary); }
.founder-contacts i { color: var(--gold-primary); font-size: 15px; }

/* Director cards */
.directors-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-2);
}
.person-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    text-align: center;
    transition: var(--ease-card);
}
.person-card:hover {
    box-shadow: var(--shadow-hover);
    transform: translateY(-2px);
}
.person-avatar {
    width: 88px;
    height: 88px;
    border-radius: 50%;
    background: var(--surface-inset);
    box-shadow: var(--shadow-inset);
    margin: 0 auto var(--space-2);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}
.person-avatar .initials {
    font-family: var(--font-display);
    font-size: 24px;
    font-weight: 600;
    color: var(--gold-primary);
}
.person-avatar img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.person-name {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 4px;
}
.person-role {
    font-size: var(--text-small);
    color: var(--text-secondary);
    line-height: 1.5;
}

/* Management list */
.mgmt-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-2);
}
.mgmt-item {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-2) var(--space-3);
    display: flex;
    align-items: center;
    gap: var(--space-2);
    transition: var(--ease-card);
}
.mgmt-item:hover { box-shadow: var(--shadow-hover); transform: translateY(-1px); }
.mgmt-avatar-sm {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--surface-inset);
    box-shadow: var(--shadow-inset);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 600;
    color: var(--gold-primary);
}
.mgmt-name {
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
}
.mgmt-role {
    font-size: var(--text-small);
    color: var(--text-secondary);
}

/* Oversight */
.oversight-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-3);
    max-width: 700px;
    margin: 0 auto;
}
.oversight-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    padding: var(--space-4);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.oversight-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
}
.oversight-card .person-avatar { width: 100px; height: 100px; }
.oversight-card .person-avatar .initials { font-size: 28px; }
.oversight-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.08em;
    padding: 3px 12px;
    border: 1px solid var(--gold-border);
    border-radius: 20px;
    color: var(--gold-primary);
    text-transform: uppercase;
    margin-top: var(--space-1);
}

@media (max-width: 1024px) {
    .founder-feature { grid-template-columns: 1fr; }
    .directors-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .mgmt-grid { grid-template-columns: 1fr; }
    .oversight-grid { grid-template-columns: 1fr; max-width: 360px; }
    .directors-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
    .directors-grid { grid-template-columns: 1fr; }
}

@media (max-width: 768px) {
    .founder-feature { grid-template-columns: 1fr !important; }
    .directors-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .mgmt-grid { grid-template-columns: 1fr !important; }
    .oversight-grid { grid-template-columns: 1fr !important; max-width: 360px; }
}
@media (max-width: 480px) {
    .directors-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

{{-- ── HERO ── --}}
<section class="leadership-hero">
    <img src="{{ $heroImg }}" alt="CGEG Leadership" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0.15;">

    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">Our People</div>
        <h1 class="reveal reveal-delay-1">The People Behind<br><em class="italic-gold">the Vision</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            Every great organisation is built by exceptional people. Meet the team steering CJ Global Express Group Unlimited toward its next chapter.
        </p>
    </div>
</section>

{{-- ── FOUNDER (FEATURE) ── --}}
<section class="section">
    <div class="container">
        <div class="eyebrow reveal" style="margin-bottom:var(--space-3);">Founder &amp; Chief Executive</div>
        <div class="founder-feature reveal reveal-delay-1">
            {{-- [IMAGE SLOT] founder-leadership | 500×600px — formal founder portrait --}}
            <div class="founder-feature-img">
                <img src="{{ $team['founder']['image'] }}" alt="{{ $team['founder']['name'] }}" style="width:100%;height:320px;object-fit:cover;border-radius:10px;">
            </div>
            <div class="founder-feature-info">
                <span class="title-tag">Founder &amp; Chief Executive Officer</span>
                <h2>Prof. Sir Clemence<br><em class="italic-gold">Jaricha Muzenda</em></h2>
                <p>
                    A visionary Zimbabwean-born entrepreneur and global business leader who founded CGEG in 2012 with a mandate to build a diversified conglomerate that would drive economic transformation across Africa and beyond.
                </p>
                <p>
                    Under his leadership, CGEG has grown from a single entity to a nine-division powerhouse operating in 32+ countries across Africa, Europe, and the Americas.
                </p>
                <div class="founder-contacts">
                    <a href="mailto:founder@cjglobalexpressgroup.com">
                        <i class="fa-solid fa-envelope" aria-hidden="true"></i> founder@cjglobalexpressgroup.com
                    </a>
                    <a href="mailto:sircj@cjglobalexpressgroup.co.za">
                        <i class="fa-solid fa-envelope" aria-hidden="true"></i> sircj@cjglobalexpressgroup.co.za
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── DIRECTORS ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Board of Directors</div>
            <h2 class="reveal reveal-delay-1">Executive <em class="italic-gold">Leadership</em></h2>
        </div>
        <div class="directors-grid">
            @foreach($team['directors'] as $i => $director)
            <div class="person-card reveal" style="transition-delay:{{ $i * 80 }}ms;">
                {{-- [IMAGE SLOT] dir-{{ Str::slug($director['name']) }} | 400×400px — professional headshot --}}
                <div class="person-avatar">
                    <img src="{{ asset('images/pages/leadership/grant.jpg') }}" alt="Director" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                </div>
                <div class="person-name">{{ $director['name'] }}</div>
                <div class="person-role">{{ $director['title'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── MANAGEMENT TEAM ── --}}
<section class="section">
    <div class="container">
        <div style="margin-bottom:var(--space-5);">
            <div class="eyebrow reveal">Management</div>
            <h2 class="reveal reveal-delay-1">The Team Behind<br><em class="italic-gold">Operations</em></h2>
        </div>
        <div class="mgmt-grid">
            @foreach($team['management'] as $i => $member)
            <div class="mgmt-item reveal" style="transition-delay:{{ $i * 60 }}ms;">
                <div class="mgmt-avatar-sm" style="overflow:hidden;padding:0;"><img src="{{ asset('images/pages/leadership/kapongo.jpg') }}" alt="Team member" style="width:100%;height:100%;object-fit:cover;border-radius:50%;"></div>
                <div>
                    <div class="mgmt-name">{{ $member['name'] }}</div>
                    <div class="mgmt-role">{{ $member['title'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── OVERSIGHT ── --}}
<section class="section" style="background:var(--surface-raised);border-top:1px solid var(--border-subtle);">
    <div class="container" style="text-align:center;">
        <div class="eyebrow reveal" style="justify-content:center;">Divisional Oversight</div>
        <h2 class="reveal reveal-delay-1" style="margin-bottom:var(--space-5);">
            Oversight of <em class="italic-gold">All Divisions</em>
        </h2>
        <div class="oversight-grid">
            @foreach($team['oversight'] as $i => $member)
            <div class="oversight-card reveal" style="transition-delay:{{ $i * 100 }}ms;">
                {{-- [IMAGE SLOT] {{ $member['image_slot'] }} | 400×400px --}}
                <div class="person-avatar" style="margin-bottom:var(--space-2);">
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="person-name">{{ $member['name'] }}</div>
                <div class="person-role" style="margin-top:4px;">{{ $member['title'] }}</div>
                <span class="oversight-tag">All Divisions</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── JOIN THE TEAM CTA ── --}}
<section class="section" style="text-align:center;">
    <div class="container" style="max-width:580px;">
        <div class="divider-gold" style="margin:0 auto var(--space-3);"></div>
        <h2 class="reveal">Work With <em class="italic-gold">Our Team</em></h2>
        <p style="color:var(--text-secondary);margin:var(--space-2) 0 var(--space-4);" class="reveal reveal-delay-1">
            Have a project, partnership, or enquiry? Our leadership team is accessible and ready to engage.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal reveal-delay-2">Get in Touch</a>
    </div>
</section>

@endsection

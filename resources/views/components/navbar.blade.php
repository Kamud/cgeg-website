<style>
/* ══════════════════════════════
   NAVBAR — Responsive + Animated
══════════════════════════════ */
.navbar {
    position: sticky; top: 0; z-index: 100;
    background: rgba(253,250,245,0.94);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--border-subtle);
    box-shadow: var(--shadow-nav);
    height: 72px;
    transition: box-shadow 300ms ease, background 300ms ease;
}
.navbar.scrolled {
    background: rgba(253,250,245,0.98);
    box-shadow: 0 4px 24px rgba(180,160,120,0.22);
}
.navbar .container {
    display: flex; align-items: center;
    justify-content: space-between;
    height: 100%; width: 100%;
}

/* Logo */
.nav-logo {
    display: flex; align-items: center; gap: 10px;
    text-decoration: none; flex-shrink: 0;
}
.nav-logo-img {
    width: 44px; height: 44px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 2px 2px 8px rgba(140,110,47,0.25);
    transition: transform 300ms ease;
}
.nav-logo:hover .nav-logo-img { transform: rotate(6deg) scale(1.05); }
.nav-logo-text {
    font-family: var(--font-display);
    font-size: 20px; font-weight: 600;
    color: var(--text-primary); letter-spacing: 0.06em;
    line-height: 1;
}
.nav-logo-text span { color: var(--gold-primary); }
.nav-logo-sub {
    font-family: var(--font-body);
    font-size: 9px; letter-spacing: 0.12em;
    color: var(--text-muted); text-transform: uppercase;
    display: block; margin-top: 1px;
}

/* Desktop links */
.nav-links {
    display: flex; align-items: center;
    gap: clamp(16px, 2vw, 28px);
    list-style: none;
}
.nav-links a {
    font-size: var(--text-label);
    color: var(--text-secondary);
    text-transform: uppercase; letter-spacing: 0.05em;
    transition: color 200ms ease;
    position: relative; padding-bottom: 2px;
}
.nav-links a::after {
    content: ''; position: absolute;
    bottom: -2px; left: 0; right: 100%;
    height: 1px; background: var(--gold-primary);
    transition: right 250ms ease;
}
.nav-links a:hover, .nav-links a.active { color: var(--gold-primary); }
.nav-links a:hover::after, .nav-links a.active::after { right: 0; }

.nav-right { display: flex; align-items: center; gap: 12px; }
.nav-cta { flex-shrink: 0; }

/* Hamburger button */
.nav-hamburger {
    display: none;
    background: none; border: none;
    color: var(--text-primary); cursor: pointer;
    width: 40px; height: 40px;
    flex-direction: column; align-items: center; justify-content: center;
    gap: 5px; border-radius: 8px;
    transition: background 200ms ease;
    padding: 0;
}
.nav-hamburger:hover { background: var(--gold-glow); }
.nav-hamburger span {
    display: block; width: 22px; height: 2px;
    background: var(--text-primary); border-radius: 2px;
    transition: transform 300ms ease, opacity 300ms ease, width 300ms ease;
    transform-origin: center;
}
.nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-hamburger.open span:nth-child(2) { opacity: 0; width: 0; }
.nav-hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ══════════════════════════════
   MOBILE MENU OVERLAY
══════════════════════════════ */
.mobile-menu {
    position: fixed;
    top: 72px; left: 0; right: 0;
    bottom: 0; z-index: 99;
    background: rgba(253,250,245,0.98);
    backdrop-filter: blur(20px);
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: var(--space-1);
    padding: var(--space-4) var(--space-4) var(--space-6);
    transform: translateY(-100%);
    opacity: 0;
    pointer-events: none;
    transition: transform 400ms cubic-bezier(0.4,0,0.2,1), opacity 300ms ease;
    overflow-y: auto;
}
.mobile-menu.open {
    transform: translateY(0);
    opacity: 1;
    pointer-events: all;
}
.mobile-menu-item {
    width: 100%; max-width: 380px;
    opacity: 0; transform: translateX(-20px);
    transition: opacity 300ms ease, transform 300ms ease;
}
.mobile-menu.open .mobile-menu-item { opacity: 1; transform: translateX(0); }
.mobile-menu.open .mobile-menu-item:nth-child(1) { transition-delay: 60ms; }
.mobile-menu.open .mobile-menu-item:nth-child(2) { transition-delay: 110ms; }
.mobile-menu.open .mobile-menu-item:nth-child(3) { transition-delay: 160ms; }
.mobile-menu.open .mobile-menu-item:nth-child(4) { transition-delay: 210ms; }
.mobile-menu.open .mobile-menu-item:nth-child(5) { transition-delay: 260ms; }
.mobile-menu.open .mobile-menu-item:nth-child(6) { transition-delay: 310ms; }
.mobile-menu.open .mobile-menu-item:nth-child(7) { transition-delay: 360ms; }
.mobile-menu.open .mobile-menu-item:nth-child(8) { transition-delay: 410ms; }

.mobile-menu-link {
    display: flex; align-items: center; justify-content: space-between;
    padding: 16px 20px;
    font-family: var(--font-display); font-size: 22px; font-weight: 600;
    color: var(--text-primary); text-decoration: none;
    border-radius: var(--radius-card);
    border: 1px solid transparent;
    transition: all 200ms ease;
}
.mobile-menu-link:hover, .mobile-menu-link.active {
    background: var(--gold-glow);
    border-color: var(--gold-border);
    color: var(--gold-primary);
    padding-left: 26px;
}
.mobile-menu-link i { font-size: 18px; opacity: 0.5; }
.mobile-divider { width: 100%; max-width: 380px; height: 1px; background: var(--border-subtle); margin: 4px 0; }
.mobile-cta-wrap { width: 100%; max-width: 380px; margin-top: 8px; }
.mobile-cta-wrap .btn { width: 100%; justify-content: center; font-size: 14px; padding: 15px; }

/* Scroll lock */
body.menu-open { overflow: hidden; }

/* ══════════════════════════════
   RESPONSIVE BREAKPOINTS
══════════════════════════════ */
@media (max-width: 1024px) {
    .nav-logo-sub { display: none; }
}
@media (max-width: 900px) {
    .nav-links { display: none; }
    .nav-cta  { display: none; }
    .nav-hamburger { display: flex; }
}
@media (max-width: 480px) {
    .navbar { height: 64px; }
    .mobile-menu { top: 64px; }
    .nav-logo-img { width: 38px; height: 38px; }
    .nav-logo-text { font-size: 18px; }
}
</style>

<nav class="navbar" id="mainNav" role="navigation" aria-label="Main navigation">
    <div class="container">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="nav-logo" aria-label="CJ Global Express Group — Home">
            <img src="{{ asset('images/cgeg-logo.png') }}" alt="CGEG Logo" class="nav-logo-img">
            <div>
                <div class="nav-logo-text">CJ<span>.</span>GLOBAL</div>
                <span class="nav-logo-sub">Express Group Unlimited</span>
            </div>
        </a>

        {{-- Desktop Links --}}
        <ul class="nav-links" role="list">
            <li><a href="{{ route('about') }}"      class="{{ request()->routeIs('about')       ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('divisions') }}"  class="{{ request()->routeIs('divisions*')  ? 'active' : '' }}">Divisions</a></li>
            <li><a href="{{ route('projects') }}"   class="{{ request()->routeIs('projects')    ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('footprint') }}"  class="{{ request()->routeIs('footprint')   ? 'active' : '' }}">Footprint</a></li>
            <li><a href="{{ route('foundation') }}" class="{{ request()->routeIs('foundation')  ? 'active' : '' }}">Foundation</a></li>
            <li><a href="{{ route('leadership') }}" class="{{ request()->routeIs('leadership')  ? 'active' : '' }}">Leadership</a></li>
        </ul>

        <div class="nav-right">
            <a href="{{ route('contact') }}" class="btn btn-primary nav-cta">Get in Touch</a>
            <button class="nav-hamburger" id="hamburgerBtn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

{{-- Mobile Menu --}}
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Mobile navigation" aria-hidden="true">
    <div class="mobile-menu-item">
        <a href="{{ route('home') }}"       class="mobile-menu-link {{ request()->routeIs('home')        ? 'active' : '' }}">Home       <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('about') }}"      class="mobile-menu-link {{ request()->routeIs('about')       ? 'active' : '' }}">About      <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('divisions') }}"  class="mobile-menu-link {{ request()->routeIs('divisions*')  ? 'active' : '' }}">Divisions  <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('projects') }}"   class="mobile-menu-link {{ request()->routeIs('projects')    ? 'active' : '' }}">Projects   <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('footprint') }}"  class="mobile-menu-link {{ request()->routeIs('footprint')   ? 'active' : '' }}">Global Footprint <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('foundation') }}" class="mobile-menu-link {{ request()->routeIs('foundation')  ? 'active' : '' }}">Foundation <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-menu-item">
        <a href="{{ route('leadership') }}" class="mobile-menu-link {{ request()->routeIs('leadership')  ? 'active' : '' }}">Leadership <i class="ti ti-chevron-right"></i></a>
    </div>
    <div class="mobile-divider mobile-menu-item"></div>
    <div class="mobile-cta-wrap mobile-menu-item">
        <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch <i class="ti ti-arrow-right"></i></a>
    </div>
</div>

<script>
(function() {
    const nav       = document.getElementById('mainNav');
    const btn       = document.getElementById('hamburgerBtn');
    const menu      = document.getElementById('mobileMenu');

    // Scroll shadow
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });

    // Toggle menu
    function openMenu() {
        menu.classList.add('open');
        btn.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-hidden', 'false');
        document.body.classList.add('menu-open');
    }
    function closeMenu() {
        menu.classList.remove('open');
        btn.classList.remove('open');
        btn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('menu-open');
    }

    btn.addEventListener('click', () => menu.classList.contains('open') ? closeMenu() : openMenu());

    // Close on link click
    menu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

    // Close on outside click
    document.addEventListener('click', e => {
        if (menu.classList.contains('open') && !menu.contains(e.target) && !btn.contains(e.target)) closeMenu();
    });

    // Close on Escape
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
})();
</script>

<style>
.navbar {
    position: sticky; top: 0; z-index: 100;
    background: rgba(253,250,245,0.92);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    box-shadow: var(--shadow-nav);
    height: 72px; display: flex; align-items: center;
    border-bottom: 1px solid var(--border-subtle);
}
.navbar .container { display: flex; align-items: center; justify-content: space-between; width: 100%; }
.nav-logo { font-family: var(--font-display); font-size: 22px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.06em; text-decoration: none; }
.nav-logo span { color: var(--gold-primary); }
.nav-links { display: flex; align-items: center; gap: var(--space-4); list-style: none; }
.nav-links a { font-size: var(--text-label); color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.05em; transition: var(--ease-default); }
.nav-links a:hover, .nav-links a.active { color: var(--gold-primary); }
.nav-cta { margin-left: var(--space-2); }
.nav-hamburger { display: none; background: none; border: none; color: var(--text-primary); font-size: 24px; cursor: pointer; }
.mobile-menu {
    display: none; position: fixed; inset: 0; z-index: 200;
    background: var(--surface-base);
    flex-direction: column; align-items: center; justify-content: center; gap: var(--space-4);
}
.mobile-menu.open { display: flex; }
.mobile-menu a { font-family: var(--font-display); font-size: 28px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.04em; }
.mobile-menu a:hover { color: var(--gold-primary); }
.mobile-close { position: absolute; top: 24px; right: var(--container-pad); background: none; border: none; color: var(--text-secondary); font-size: 28px; cursor: pointer; }
@media (max-width: 768px) { .nav-links, .nav-cta { display: none; } .nav-hamburger { display: block; } }
</style>

<nav class="navbar" role="navigation" aria-label="Main navigation">
    <div class="container">
        <a href="{{ route('home') }}" class="nav-logo">CJ<span>.</span>GLOBAL</a>
        <ul class="nav-links">
            <li><a href="{{ route('about') }}"      class="{{ request()->routeIs('about')       ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('divisions') }}"  class="{{ request()->routeIs('divisions*')  ? 'active' : '' }}">Divisions</a></li>
            <li><a href="{{ route('projects') }}"   class="{{ request()->routeIs('projects')    ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('footprint') }}"  class="{{ request()->routeIs('footprint')   ? 'active' : '' }}">Global Footprint</a></li>
            <li><a href="{{ route('foundation') }}" class="{{ request()->routeIs('foundation')  ? 'active' : '' }}">Foundation</a></li>
            <li><a href="{{ route('leadership') }}" class="{{ request()->routeIs('leadership')  ? 'active' : '' }}">Leadership</a></li>
        </ul>
        <a href="{{ route('contact') }}" class="btn btn-primary nav-cta">Get in Touch</a>
        <button class="nav-hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false">
            <i class="ti ti-menu-2"></i>
        </button>
    </div>
</nav>

<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Mobile navigation">
    <button class="mobile-close" id="mobileClose" aria-label="Close menu"><i class="ti ti-x"></i></button>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('divisions') }}">Divisions</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('footprint') }}">Global Footprint</a>
    <a href="{{ route('foundation') }}">Foundation</a>
    <a href="{{ route('leadership') }}">Leadership</a>
    <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:8px;">Get in Touch</a>
</div>

<script>
    const hamburger = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileClose = document.getElementById('mobileClose');
    hamburger?.addEventListener('click', () => { mobileMenu.classList.add('open'); hamburger.setAttribute('aria-expanded','true'); document.body.style.overflow='hidden'; });
    mobileClose?.addEventListener('click', () => { mobileMenu.classList.remove('open'); hamburger.setAttribute('aria-expanded','false'); document.body.style.overflow=''; });
</script>

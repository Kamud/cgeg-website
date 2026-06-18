<style>
.footer { background:linear-gradient(135deg,#EDE8DF,#E8E2D8); border-top:1px solid var(--border-subtle); padding-top:var(--space-7); margin-top:var(--space-8); }
.footer-top { display:grid; grid-template-columns:1.5fr repeat(3,1fr); gap:var(--space-6); padding-bottom:var(--space-6); border-bottom:1px solid var(--border-subtle); }
.footer-brand .footer-logo { font-family:var(--font-display); font-size:22px; font-weight:600; color:var(--text-primary); letter-spacing:0.06em; display:block; margin-bottom:var(--space-2); }
.footer-brand .footer-logo span { color:var(--gold-primary); }
.footer-brand p { font-size:var(--text-small); color:var(--text-secondary); line-height:1.7; max-width:260px; }
.footer-col h4 { font-family:var(--font-body); font-size:var(--text-label); color:var(--text-primary); letter-spacing:0.08em; text-transform:uppercase; margin-bottom:var(--space-2); }
.footer-col ul { display:flex; flex-direction:column; gap:10px; }
.footer-col a { font-size:var(--text-small); color:var(--text-secondary); transition:var(--ease-default); }
.footer-col a:hover { color:var(--gold-primary); }
.footer-bottom { padding:var(--space-3) 0; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:var(--space-2); }
.footer-bottom p, .footer-bottom a { font-size:var(--text-label); color:var(--text-muted); letter-spacing:0.04em; }
.footer-bottom a:hover { color:var(--gold-primary); }
.footer-contact-item { display:flex; align-items:center; gap:8px; font-size:var(--text-small); color:var(--text-secondary); margin-bottom:8px; }
.footer-contact-item i { color:var(--gold-primary); font-size:15px; }
@media(max-width:1024px){ .footer-top{grid-template-columns:1fr 1fr;} }
@media(max-width:600px)  { .footer-top{grid-template-columns:1fr;} .footer-bottom{flex-direction:column;text-align:center;} }
</style>

<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">CJ<span>.</span>GLOBAL</a>
                <p>Building Africa. Serving the World. A diversified conglomerate operating across 56 countries on six continents through nine distinct divisions.</p>
                <div style="margin-top:var(--space-3);">
                    <div class="footer-contact-item"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-map-pin"/></svg><span>CJ Global Mall, Bukhanana Reserve, KwaZulu-Natal, South Africa</span></div>
                    <div class="footer-contact-item"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-phone"/></svg><a href="tel:+27669471290">+27 66 947 129</a></div>
                    <div class="footer-contact-item"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-phone"/></svg><a href="tel:+263772701826">+263 77 270 1826</a></div>
                    <div class="footer-contact-item"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="display:inline-block;vertical-align:middle;flex-shrink:0;" aria-hidden="true"><use href="#hi-envelope"/></svg><a href="mailto:reception@cjglobalexpressgroup.com">reception@cjglobalexpressgroup.com</a></div>
                </div>
            </div>
            <div class="footer-col">
                <h4>Divisions</h4>
                <ul>
                    <li><a href="{{ route('division','construction') }}">Construction</a></li>
                    <li><a href="{{ route('division','mining') }}">Mining</a></li>
                    <li><a href="{{ route('division','logistics') }}">Logistics</a></li>
                    <li><a href="{{ route('division','properties') }}">Properties</a></li>
                    <li><a href="{{ route('division','mall') }}">Mall</a></li>
                    <li><a href="{{ route('division','hospitality') }}">Restaurants &amp; Nightclubs</a></li>
                    <li><a href="{{ route('division','wellness') }}">Spas &amp; Salons</a></li>
                    <li><a href="{{ route('division','spirits') }}">CJ Vodka Spirits</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('leadership') }}">Leadership</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li><a href="{{ route('footprint') }}">Global Footprint</a></li>
                    <li><a href="{{ route('foundation') }}">CJ Global Foundation</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><a href="{{ route('contact') }}">Get in Touch</a></li>
                    <li><a href="mailto:reception@cjglobalexpressgroup.com">General Enquiries</a></li>
                    <li><a href="mailto:founder@cjglobalexpressgroup.com">Founder's Office</a></li>
                    <li><a href="https://www.cjglobalexpressgroup.com" target="_blank">www.cjglobalexpressgroup.com</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} CJ Global Express Group Unlimited. All rights reserved. Reg: 2012/344459/07</p>
            <a href="https://www.facebook.com/cyartzw" target="_blank" rel="noopener">Crafted by Wivae Technologies</a>
        </div>
    </div>
</footer>

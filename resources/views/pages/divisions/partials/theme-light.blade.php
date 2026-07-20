{{--
    Light division theme partial.
    Expects: $accent (hex), $accentGlow (rgba string), $accentBorder (rgba string), $accentBright (hex, optional)
    Defines scoped .dx-* classes so it never touches global --gold-primary etc.
    Included by each hardcoded division page — safe to include once per page.
--}}
<style>
:root {
    --dx-accent:        {{ $accent }};
    --dx-accent-bright: {{ $accentBright ?? $accent }};
    --dx-accent-glow:   {{ $accentGlow }};
    --dx-accent-border: {{ $accentBorder }};
}

.dx-hero {
    min-height: 70vh; display: flex; align-items: flex-end; position: relative; overflow: hidden;
    padding-bottom: var(--space-6);
    background: var(--gradient-hero);
}
.dx-hero-img { position: absolute; inset: 0; z-index: 0; }
.dx-hero-img img { width: 100%; height: 100%; object-fit: cover; opacity: 0.28; }
.dx-hero-overlay { position: absolute; inset: 0; background: linear-gradient(to top, #F5F1EB 8%, rgba(245,241,235,0.32) 70%, transparent 100%); z-index: 1; }
.dx-hero-content { position: relative; z-index: 2; width: 100%; }
.dx-hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--dx-accent-glow); border: 1px solid var(--dx-accent-border); border-radius: 40px; padding: 6px 16px; font-size: var(--text-label); color: var(--dx-accent); letter-spacing: 0.06em; text-transform: uppercase; margin-bottom: var(--space-2); }
.dx-hero h1 { font-size: var(--text-hero); margin-bottom: var(--space-1); }
.dx-hero .dx-tagline { font-size: clamp(16px,2vw,20px); color: var(--text-secondary); max-width: 580px; line-height: 1.6; margin-bottom: var(--space-4); }
.dx-em { font-style: italic; color: var(--dx-accent-bright); }

.dx-line { width: 48px; height: 1px; background: var(--dx-accent); margin-bottom: var(--space-2); }
.dx-eyebrow { display: flex; align-items: center; gap: var(--space-1); font-size: var(--text-label); color: var(--dx-accent); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: var(--space-2); }

.dx-stats { background: var(--gradient-band); padding: var(--space-4) 0; }
.dx-stat { background: rgba(255,255,255,0.05); border: 1px solid var(--dx-accent-border); border-radius: var(--radius-card); padding: 20px 18px; text-align: center; }
.dx-stat .stat-num { font-family: var(--font-display); font-size: 30px; font-weight: 600; color: var(--dx-accent-bright); line-height: 1; margin-bottom: 4px; }
.dx-stat .stat-label { font-size: var(--text-label); color: rgba(245,240,232,0.62); letter-spacing: 0.06em; text-transform: uppercase; }

.dx-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6); align-items: center; }
.dx-about-grid p { color: var(--text-secondary); line-height: 1.85; margin-bottom: var(--space-2); }
.dx-feature-img { border-radius: var(--radius-card); overflow: hidden; box-shadow: var(--shadow-raised-lg); }
.dx-feature-img img { width: 100%; height: 460px; object-fit: cover; display: block; }

.dx-highlights { display: grid; grid-template-columns: repeat(3,1fr); gap: var(--space-2); }
.dx-highlight { background: var(--gradient-card); border-radius: var(--radius-card); box-shadow: var(--shadow-raised); padding: var(--space-3); border-top: 2px solid var(--dx-accent); transition: var(--ease-card); }
.dx-highlight:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px); }
.dx-highlight-icon { width: 44px; height: 44px; background: var(--dx-accent-glow); border-radius: var(--radius-icon); display: flex; align-items: center; justify-content: center; color: var(--dx-accent); font-size: 22px; margin-bottom: var(--space-2); }
.dx-highlight h4 { font-family: var(--font-display); font-size: 17px; font-weight: 600; color: var(--text-primary); margin-bottom: 6px; }
.dx-highlight p { font-size: var(--text-body); color: var(--text-secondary); line-height: 1.65; margin: 0; }

.dx-services { background: linear-gradient(135deg,#F5F1EB,#EDE8DF); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle); padding: var(--section-gap) 0; }
.dx-service-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: var(--space-2); }
.dx-service-card { background: var(--gradient-card); border-radius: var(--radius-card); box-shadow: var(--shadow-raised); padding: var(--space-3); display: flex; gap: var(--space-2); align-items: flex-start; transition: var(--ease-card); }
.dx-service-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-1px); }
.dx-service-icon { width: 42px; height: 42px; flex-shrink: 0; background: var(--dx-accent-glow); border-radius: var(--radius-icon); display: flex; align-items: center; justify-content: center; color: var(--dx-accent); font-size: 20px; }
.dx-service-title { font-family: var(--font-display); font-size: 17px; font-weight: 600; color: var(--text-primary); margin-bottom: 4px; }
.dx-service-desc { font-size: var(--text-body); color: var(--text-secondary); line-height: 1.6; }

.dx-gallery { padding: var(--space-5) 0; background: var(--surface-base); }
.dx-gallery-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: var(--space-2); }
.dx-gallery-grid img { width: 100%; height: 210px; object-fit: cover; border-radius: var(--radius-card); box-shadow: var(--shadow-raised); }

.dx-quote { background: linear-gradient(135deg,#F5F1EB,#EDE8DF); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle); padding: var(--space-8) 0; text-align: center; position: relative; }
.dx-quote::before { content: '"'; position: absolute; top: 10px; left: 50%; transform: translateX(-50%); font-family: var(--font-display); font-size: 180px; color: var(--dx-accent-glow); line-height: 1; pointer-events: none; }
.dx-quote blockquote { position: relative; font-family: var(--font-display); font-size: clamp(22px,3vw,34px); font-style: italic; color: var(--text-primary); max-width: 720px; margin: 0 auto var(--space-3); line-height: 1.4; }
.dx-quote cite { position: relative; font-size: var(--text-label); color: var(--dx-accent); letter-spacing: 0.08em; text-transform: uppercase; font-style: normal; }

.dx-cta { padding: var(--space-7) 0; text-align: center; }

.dx-other-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: var(--space-2); }

@media(max-width:1024px){ .dx-highlights{grid-template-columns:1fr 1fr;} .dx-other-grid{grid-template-columns:repeat(2,1fr);} }
@media(max-width:768px) {
    .dx-hero { min-height: 65svh !important; }
    .dx-hero h1 { font-size: clamp(28px,9vw,42px) !important; }
    .dx-about-grid { grid-template-columns: 1fr !important; }
    .dx-service-grid { grid-template-columns: 1fr !important; }
    .dx-highlights { grid-template-columns: 1fr !important; }
    .dx-other-grid { grid-template-columns: repeat(2,1fr) !important; }
    .dx-gallery-grid { grid-template-columns: 1fr 1fr !important; }
}
@media(max-width:480px) {
    .dx-other-grid { grid-template-columns: 1fr !important; }
    .dx-gallery-grid { grid-template-columns: 1fr !important; }
}
</style>

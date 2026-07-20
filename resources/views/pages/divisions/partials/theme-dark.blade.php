{{--
    Dark division theme partial (moody, nightlife/underground mood).
    Expects: $accent (hex), $accentSoft (rgba string for glows/borders), $deep (hex bg), $raised (hex bg)
    Defines scoped .dk-* classes, mirrors the pattern spirits.blade.php established.
--}}
<style>
:root {
    --dk-deep:   {{ $deep }};
    --dk-raised: {{ $raised }};
    --dk-accent: {{ $accent }};
    --dk-soft:   {{ $accentSoft }};
}

.dk-hero { min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden; background: var(--dk-deep); }
.dk-hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse at 60% 30%, var(--dk-soft) 0%, transparent 55%), radial-gradient(ellipse at 20% 80%, var(--dk-soft) 0%, transparent 45%); pointer-events: none; z-index: 1; opacity: 0.6; }
.dk-hero-content { position: relative; z-index: 2; max-width: 680px; }
.dk-tagline-word { display: block; font-family: var(--font-display); font-size: clamp(48px,7vw,80px); font-weight: 700; line-height: 1; letter-spacing: -0.01em; }
.dk-tagline-word.accent { color: var(--dk-accent); font-style: italic; }
.dk-tagline-word.white { color: var(--text-primary); }
.dk-hero p { font-size: clamp(15px,1.8vw,18px); color: var(--text-secondary); line-height: 1.75; max-width: 480px; margin: var(--space-3) 0 var(--space-4); }
.dk-line { width: 48px; height: 1px; background: var(--dk-accent); margin-bottom: var(--space-2); }
.dk-eyebrow { font-size: var(--text-label); color: var(--dk-accent); letter-spacing: 0.14em; text-transform: uppercase; margin-bottom: var(--space-2); }

.dk-stats { background: var(--dk-raised); border-top: 1px solid var(--dk-soft); border-bottom: 1px solid var(--dk-soft); padding: var(--space-4) 0; }
.dk-stat { background: var(--dk-deep); border-radius: var(--radius-card); box-shadow: 5px 5px 14px rgba(0,0,0,0.7), -2px -2px 6px rgba(255,245,220,0.03); padding: 20px 18px; text-align: center; }
.dk-stat .stat-num { font-family: var(--font-display); font-size: 28px; font-weight: 600; color: var(--dk-accent); line-height: 1; margin-bottom: 4px; }
.dk-stat .stat-label { font-size: var(--text-label); color: var(--text-muted); letter-spacing: 0.06em; text-transform: uppercase; }

.dk-about { background: var(--dk-deep); padding: var(--section-gap) 0; }
.dk-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-6); align-items: center; }
.dk-about p { color: var(--text-secondary); line-height: 1.85; margin-bottom: var(--space-2); }

.dk-highlight { background: var(--dk-raised); border-radius: var(--radius-card); box-shadow: 5px 5px 14px rgba(0,0,0,0.6), -2px -2px 5px rgba(255,245,220,0.025); padding: var(--space-3); border-left: 2px solid var(--dk-accent); transition: var(--ease-card); }
.dk-highlight:hover { box-shadow: 8px 8px 20px rgba(0,0,0,0.7), -3px -3px 8px rgba(255,245,220,0.03); transform: translateY(-2px); }
.dk-highlight-icon { color: var(--dk-accent); font-size: 24px; margin-bottom: var(--space-1); }
.dk-highlight h4 { font-family: var(--font-display); font-size: 18px; font-weight: 600; color: var(--text-primary); margin-bottom: 4px; }
.dk-highlight p { font-size: var(--text-body); color: var(--text-secondary); line-height: 1.65; margin: 0; }

.dk-services { background: var(--dk-raised); border-top: 1px solid var(--dk-soft); border-bottom: 1px solid var(--dk-soft); padding: var(--section-gap) 0; }
.dk-service-card { background: var(--dk-deep); border-radius: var(--radius-card); box-shadow: 5px 5px 14px rgba(0,0,0,0.6), -2px -2px 5px rgba(255,245,220,0.025); padding: var(--space-3); transition: var(--ease-card); }
.dk-service-card:hover { box-shadow: 8px 8px 20px rgba(0,0,0,0.7); transform: translateY(-2px); }
.dk-service-icon { width: 44px; height: 44px; background: var(--dk-soft); border-radius: var(--radius-icon); display: flex; align-items: center; justify-content: center; color: var(--dk-accent); font-size: 22px; margin-bottom: var(--space-2); }
.dk-service-title { font-family: var(--font-display); font-size: 17px; font-weight: 600; color: var(--text-primary); margin-bottom: 4px; }
.dk-service-desc { font-size: var(--text-body); color: var(--text-secondary); line-height: 1.6; }

.dk-gallery { background: var(--dk-deep); padding: var(--space-5) 0; border-top: 1px solid var(--dk-soft); }
.dk-gallery-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: var(--space-2); }
.dk-gallery-grid img { width: 100%; height: 220px; object-fit: cover; border-radius: var(--radius-card); }

.dk-quote { background: var(--dk-deep); padding: var(--space-8) 0; text-align: center; position: relative; }
.dk-quote::before { content: '"'; position: absolute; top: 20px; left: 50%; transform: translateX(-50%); font-family: var(--font-display); font-size: 200px; color: var(--dk-soft); line-height: 1; pointer-events: none; }
.dk-quote blockquote { position: relative; font-family: var(--font-display); font-size: clamp(22px,3vw,36px); font-style: italic; color: var(--text-primary); max-width: 720px; margin: 0 auto var(--space-3); line-height: 1.4; }
.dk-quote cite { position: relative; font-size: var(--text-label); color: var(--dk-accent); letter-spacing: 0.08em; text-transform: uppercase; font-style: normal; }

.dk-cta { background: var(--dk-raised); border-top: 1px solid var(--dk-soft); padding: var(--space-7) 0; text-align: center; }
.dk-cta p { color: var(--text-secondary); max-width: 520px; margin: 0 auto var(--space-4); line-height: 1.75; }

.dk-other { background: var(--dk-raised); border-top: 1px solid var(--dk-soft); }

@media (max-width: 768px) {
    .dk-about-grid { grid-template-columns: 1fr !important; }
    .dk-hero { min-height: 80svh !important; }
    .dk-tagline-word { font-size: clamp(36px,10vw,56px) !important; }
    .grid-4 { grid-template-columns: repeat(2,1fr) !important; }
    .dk-gallery-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .dk-tagline-word { font-size: clamp(28px,10vw,44px) !important; }
    .dk-gallery-grid { grid-template-columns: 1fr !important; }
}
</style>

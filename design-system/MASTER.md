# CGEG Design System — MASTER
**CJ Global Express Group Unlimited**
Version 1.0 | Produced by Wivae Technologies
Stack: Laravel + Blade Templates

> This file is the single source of truth for all visual decisions across the CGEG website.
> Every Blade component, page layout, and CSS rule derives from the tokens defined here.
> Page-specific overrides live in `design-system/pages/[page].md` and take precedence over this file.

---

## 1. Design Language

**Style:** Dark Soft UI Evolution
**Mood:** Bold, continental, premium — a pan-African conglomerate that commands respect
**Reference:** uupm.cc/demo/real-estate (luxury Soft UI) adapted to dark base
**Principle:** Depth through shadow, not borders. Gold for moments, not wallpaper.

---

## 2. Color Tokens

```css
/* === SURFACES === */
--surface-base:     #1C1814;   /* Page background — warm espresso, never pure black */
--surface-raised:   #221E19;   /* Cards, navbar, elevated panels */
--surface-inset:    #141210;   /* Input fields, pressed wells, inset elements */
--surface-overlay:  #2A2520;   /* Modals, dropdown backgrounds */

/* === SHADOW SYSTEM (Soft UI — light source: top-left) === */
--shadow-raised:    5px 5px 14px rgba(0,0,0,0.55), -3px -3px 8px rgba(255,245,220,0.045);
--shadow-raised-lg: 8px 8px 20px rgba(0,0,0,0.6),  -4px -4px 12px rgba(255,245,220,0.05);
--shadow-inset:     inset 3px 3px 8px rgba(0,0,0,0.5), inset -2px -2px 5px rgba(255,245,220,0.04);
--shadow-hover:     10px 10px 24px rgba(0,0,0,0.65), -5px -5px 14px rgba(255,245,220,0.06);

/* === GOLD PALETTE === */
--gold-primary:   #C9A84C;   /* Primary accent — CTAs, active states, highlights */
--gold-muted:     #8C6E2F;   /* Subdued gold — secondary labels, dividers */
--gold-glow:      rgba(201,168,76,0.12);  /* Ambient gold — icon backgrounds, hover fills */
--gold-border:    rgba(201,168,76,0.25);  /* Gold border — cards on hover, active nav */

/* === TEXT === */
--text-primary:   #F5F0E8;   /* Main headings, important body copy — warm cream */
--text-secondary: #8C7E6A;   /* Subheadings, labels, captions — warm mid-tone */
--text-muted:     #5C5248;   /* Timestamps, tags, tertiary info */
--text-on-gold:   #1C1814;   /* Text placed directly on gold backgrounds */

/* === UTILITY === */
--border-subtle:  rgba(255,245,220,0.07);  /* Dividers, card separators */
--border-hover:   rgba(201,168,76,0.25);   /* Interactive border on hover */
--success:        #4CAF82;
--error:          #E05252;
```

---

## 3. Typography

### Font Stack
```css
/* Google Fonts import — place in app.blade.php <head> */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500&display=swap');

--font-display: 'Cormorant Garamond', Georgia, serif;   /* Headlines, hero text, division names */
--font-body:    'DM Sans', system-ui, sans-serif;        /* Body, UI, labels, navigation */
```

### Type Scale
```css
/* Display — Cormorant Garamond */
--text-hero:    clamp(40px, 5.5vw, 64px);   font-weight: 600; line-height: 1.05;
--text-h1:      clamp(32px, 4vw, 48px);     font-weight: 600; line-height: 1.1;
--text-h2:      clamp(24px, 3vw, 36px);     font-weight: 600; line-height: 1.15;
--text-h3:      20px;                        font-weight: 600; line-height: 1.2;

/* Body — DM Sans */
--text-body-lg: 16px;    font-weight: 400; line-height: 1.75;
--text-body:    14px;    font-weight: 400; line-height: 1.7;
--text-small:   12px;    font-weight: 400; line-height: 1.6;
--text-label:   11px;    font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase;
```

### Typographic Rules
- Headlines: always Cormorant Garamond. Never DM Sans for h1/h2.
- Italic gold accent on key headline words: `<em style="font-style:italic; color:var(--gold-primary)">word</em>`
- Labels and eyebrows: DM Sans, --text-label sizing, uppercase, letter-spacing 0.1em
- Body paragraphs: DM Sans, --text-body, color --text-secondary (not primary — reduces eye strain on dark)
- Never use font-weight 700+ on body copy. 500 is the max for UI labels.

---

## 4. Spacing & Layout

```css
/* Base unit: 8px */
--space-1:  8px;
--space-2:  16px;
--space-3:  24px;
--space-4:  32px;
--space-5:  48px;
--space-6:  64px;
--space-7:  96px;
--space-8:  128px;

/* Layout */
--container-max:  1280px;
--container-pad:  clamp(24px, 5vw, 80px);  /* Horizontal page padding */
--section-gap:    clamp(64px, 8vw, 120px); /* Vertical gap between page sections */
--card-radius:    14px;
--btn-radius:     6px;
--input-radius:   8px;
```

---

## 5. Component Specifications

### 5.1 Navbar
```
Position: sticky top-0, z-index: 100
Background: var(--surface-base)
Bottom border: 1px solid var(--border-subtle)
Box-shadow: 0 2px 20px rgba(0,0,0,0.4)
Height: 72px
Logo: Cormorant Garamond 22px — "CJ.GLOBAL" with gold period
Nav links: DM Sans --text-label, color --text-secondary, hover → --gold-primary (transition 200ms)
CTA button: Gold filled (see Button spec)
Mobile: Hamburger at <768px, full-screen overlay menu
```

### 5.2 Buttons
```
Primary (Gold Fill):
  background: var(--gold-primary)
  color: var(--text-on-gold)
  padding: 12px 28px
  border-radius: var(--btn-radius)
  font: DM Sans 13px 500, letter-spacing 0.04em
  hover: brightness(1.08), translateY(-1px)
  transition: all 200ms ease-out

Ghost (Outlined):
  background: transparent
  color: var(--text-primary)
  border: 1px solid rgba(245,240,232,0.2)
  Same padding/radius/font as primary
  hover: border-color → var(--gold-border), color → var(--gold-primary)

Text Link:
  color: var(--gold-primary)
  font: DM Sans --text-label uppercase
  No background, no border
  Arrow icon appended: → (ti-arrow-right)
```

### 5.3 Cards (Soft UI Raised)
```
background: var(--surface-raised)
border-radius: var(--card-radius)
box-shadow: var(--shadow-raised)
padding: 24px
hover:
  box-shadow: var(--shadow-hover)
  transform: translateY(-2px)
  transition: all 250ms ease-out

Icon container within card:
  width/height: 40px
  background: var(--gold-glow)
  border-radius: 10px
  color: var(--gold-primary)
  font-size: 20px (Tabler icons)
```

### 5.4 Stat Blocks
```
background: var(--surface-raised)
box-shadow: var(--shadow-raised)
border-radius: var(--card-radius)
padding: 20px 18px

Number: Cormorant Garamond, 32px, 600, color var(--gold-primary)
Label: DM Sans, --text-label, color var(--text-secondary)
```

### 5.5 Section Eyebrow
```
Pattern: [gold line 24px] [uppercase label]
font: DM Sans --text-label
color: var(--gold-primary)
margin-bottom: 12px

HTML: <div class="eyebrow"><span class="line"></span> 32+ Countries · 9 Divisions</div>
```

### 5.6 Dividers
```
Standard section divider:
  width: 40px; height: 1px; background: var(--gold-primary)
  Used above section labels — never full-width rules

Page divider (between major sections):
  border-top: 1px solid var(--border-subtle)
  margin: var(--section-gap) 0
```

### 5.7 Form Inputs
```
background: var(--surface-inset)
box-shadow: var(--shadow-inset)
border: 1px solid var(--border-subtle)
border-radius: var(--input-radius)
padding: 13px 16px
color: var(--text-primary)
font: DM Sans 14px
placeholder color: var(--text-muted)

focus:
  border-color: var(--gold-border)
  outline: none
  box-shadow: var(--shadow-inset), 0 0 0 3px rgba(201,168,76,0.1)
```

### 5.8 Footer
```
background: var(--surface-raised)
border-top: 1px solid var(--border-subtle)
padding-top: var(--space-7)

Logo: same as navbar
Tagline: italic Cormorant, --text-secondary
Column links: DM Sans --text-body, --text-secondary, hover → --gold-primary
Bottom strip: --text-muted, --text-small
Wivae credit: "Crafted by Wivae Technologies" → https://www.facebook.com/cyartzw
```

---

## 6. Motion & Animation

```
Principle: Elements settle, they don't jump.

Default transition: all 200ms ease-out
Card hover: 250ms ease-out
Page entrance (scroll-triggered): 400ms ease-out, translateY(20px) → translateY(0), opacity 0→1
Staggered children: 80ms delay per item
Hero headline: 600ms ease-out on load, 100ms delay after DOMContentLoaded

Reduced motion: @media (prefers-reduced-motion: reduce) — disable transforms, keep opacity fades only
```

---

## 7. Image Slots Protocol

Throughout the build, image slots are marked with a consistent comment and placeholder div:

```html
<!-- [IMAGE SLOT] hero-background | Recommended: 1920×1080px, dark atmospheric, African skyline or construction site -->
<div class="img-slot" data-slot="hero-background" data-size="1920x1080">
  <span>Hero Background</span>
</div>
```

Placeholder styling:
```css
.img-slot {
  background: var(--surface-raised);
  box-shadow: var(--shadow-inset);
  border-radius: var(--card-radius);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--text-muted);
  font: DM Sans 12px;
  letter-spacing: 0.05em;
  min-height: 200px;
}
```

---

## 8. Anti-Patterns (Never Do)

| Rule | Why |
|------|-----|
| Never use pure `#000000` as background | Kills the shadow system — use --surface-base (#1C1814) |
| Never use gold as a background fill for large areas | Gold is an accent, not a background |
| Never use harsh drop-shadows (`box-shadow: 0 4px 6px #000`) | Breaks Soft UI aesthetic — use paired light/dark shadows |
| Never use border-only cards (no shadow) | Looks generic corporate, not Soft UI |
| Never use font-weight 700+ for body text | Too heavy against dark backgrounds |
| Never mix Cormorant and DM Sans for the same size text | Creates visual conflict — one leads, one supports |
| Never use color borders as dividers | Use shadow-based depth or the gold rule (40px) only |
| Never use AI purple/blue gradients | Off-brand. Gold and cream only for accents |
| Never use all-caps on body paragraphs | Labels only (--text-label), never paragraphs |
| Never use placeholder icons in production | All icon slots use Tabler Icons SVG outline set |

---

## 9. Responsive Breakpoints

```css
--bp-mobile:  480px;   /* Single column, stacked nav */
--bp-tablet:  768px;   /* 2-column grids, hamburger menu */
--bp-desktop: 1024px;  /* Full layout unlocks */
--bp-wide:    1280px;  /* Max-width container applies */
```

Grid behaviour:
- Division cards: 3-col desktop → 2-col tablet → 1-col mobile
- Stat blocks: 4-col desktop → 2-col tablet → 2-col mobile
- Hero: full-width all breakpoints

---

## 10. Page Override Slots

The following pages deviate from this master and have their own override files:

| Page | Override File | Reason |
|------|--------------|--------|
| Foundation | `pages/foundation.md` | Warmer, more human tone — charity/CSR context |
| CJ Vodka / Spirits | `pages/spirits.md` | Darker, moodier — nightlife/premium spirits brand |
| Global Footprint | `pages/footprint.md` | Map-centric layout, different section rhythm |
| Contact | `pages/contact.md` | Form-heavy, needs inset shadow emphasis |

---

## 11. Laravel File Structure

```
resources/
  css/
    design-system.css     ← All CSS custom properties from this file (Section 2–6)
    components.css        ← Component styles (Section 5)
    app.css               ← @import both + page-specific additions

  views/
    layouts/
      app.blade.php       ← Master layout: <head> fonts, navbar, footer
    components/
      navbar.blade.php
      footer.blade.php
      card-division.blade.php
      card-stat.blade.php
      btn.blade.php
      section-eyebrow.blade.php
      img-slot.blade.php
    pages/
      home.blade.php
      about.blade.php
      divisions/
        index.blade.php
        [division].blade.php   ← shared template, data passed via controller
      foundation.blade.php
      footprint.blade.php
      leadership.blade.php
      projects.blade.php
      contact.blade.php

routes/
  web.php                 ← All 14 page routes defined here
```

---

*Design System v1.0 — Wivae Technologies for CJ Global Express Group Unlimited*
*Reference: Dark Soft UI Evolution | Cormorant Garamond + DM Sans | Black & Gold*

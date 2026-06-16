# CJ Global Express Group Unlimited — Corporate Website

**Client:** CJ Global Express Group Unlimited (CGEG)
**Agency:** Wivae Technologies
**Stack:** Laravel 12 + Blade Templates
**Design:** Dark Soft UI Evolution | Cormorant Garamond + DM Sans | Black & Gold

---

## Setup

```bash
# Clone
git clone https://github.com/Kamud/cgeg-website.git
cd cgeg-website

# Install dependencies
composer install

# Environment
cp .env.example .env
php artisan key:generate

# Run locally
php artisan serve
```

## Design System

All design tokens, shadow formulas, component specs, and anti-patterns are documented in:

```
design-system/MASTER.md
```

Read this file before modifying any CSS or Blade component.

## Structure

```
app/Http/Controllers/PageController.php   ← All page logic + division data
resources/
  css/
    design-system.css                     ← All CSS tokens & components
    app.css                               ← Entry stylesheet
  views/
    layouts/app.blade.php                 ← Master layout
    components/
      navbar.blade.php
      footer.blade.php
    pages/
      home.blade.php
      about.blade.php
      divisions/
        index.blade.php
        show.blade.php                    ← Single template for all 9 divisions
      foundation.blade.php
      footprint.blade.php
      leadership.blade.php
      projects.blade.php
      contact.blade.php
routes/web.php                            ← All routes
```

## Image Slots

All image placeholders are marked with:
```html
<!-- [IMAGE SLOT] slot-name | Dimensions | Description -->
<div class="img-slot" data-slot="slot-name" data-size="WxH">
```

Drop production images into `public/images/` and replace `.img-slot` divs with `<img>` tags.

## Pages

| Route | View | Status |
|-------|------|--------|
| `/` | home.blade.php | ✅ Built |
| `/about` | about.blade.php | 🔄 Stub |
| `/divisions` | divisions/index.blade.php | ✅ Built |
| `/divisions/{slug}` | divisions/show.blade.php | ✅ Built (all 9) |
| `/foundation` | foundation.blade.php | 🔄 Stub |
| `/global-footprint` | footprint.blade.php | 🔄 Stub |
| `/leadership` | leadership.blade.php | 🔄 Stub |
| `/projects` | projects.blade.php | 🔄 Stub |
| `/contact` | contact.blade.php | 🔄 Stub |

---

*Crafted by [Wivae Technologies](https://www.facebook.com/cyartzw)*

# CGEG Website — Page Build Summary
**CJ Global Express Group Unlimited**
Produced by Wivae Technologies | Laravel + Blade | Dark Soft UI Evolution

---

## Build Order

Pages are built in dependency order — shared components first, flagship pages second, inner pages third.

```
Phase 1 — Foundation
  └─ Shared components (navbar, footer, card-division, card-stat, btn, eyebrow, img-slot)
  └─ design-system.css + components.css

Phase 2 — Flagship
  └─ Home (sets the tone for everything)
  └─ Divisions Hub (template that all 9 division pages inherit from)

Phase 3 — About & People
  └─ About / Founder
  └─ Leadership

Phase 4 — Content Pages
  └─ Projects
  └─ Global Footprint
  └─ Foundation

Phase 5 — Utility
  └─ Contact
  └─ 9× Division individual pages (clone of Divisions template)
```

---

## Page 1 — Home (`/`)

**Purpose:** First impression. Flagship page. Must communicate scale, credibility, and vision in one scroll.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Hero** | Full-viewport. Headline: *"Building Africa's Next Chapter"*. Eyebrow: 32+ countries · 9 divisions. Primary + ghost CTA. Animated scroll indicator. | `hero-bg` 1920×1080 — atmospheric African skyline or construction site |
| 2 | **Stat Strip** | 4 raised stat cards: 32+ Countries / $200M+ Deployed / 9 Divisions / 5,000+ Jobs | None |
| 3 | **Who We Are** | 2-column: left text block (2 paragraphs about CGEG), right portrait or office image | `about-portrait` 800×900 — Prof. Sir Clemence or HQ exterior |
| 4 | **Divisions Preview Grid** | 9 division cards in 3×3 grid. Each card: icon + name + 1-line description + "Explore" link | None (icon-only cards) |
| 5 | **Founder's Quote Band** | Full-width dark band. Italic Cormorant pull-quote from Prof. Sir Clemence. Signature image. | `founder-sig` 200×80 — signature or monogram |
| 6 | **Featured Projects** | 3 horizontal project cards: Sandton Mall / London / Chicago. Each: image + title + location + status tag | `project-sandton`, `project-london`, `project-chicago` — 800×500 each |
| 7 | **Global Footprint Teaser** | World map SVG (static, showing active regions highlighted in gold). Stat: "32+ Countries across 6 continents" | None (SVG map inline) |
| 8 | **Foundation CTA Band** | Warm tone section. Foundation logo/name. Mission line. "Learn More" link. | `foundation-band` 1920×600 — community/charity imagery |
| 9 | **Footer** | Standard footer component | None |

**Dynamic needs:** None — all static content passed via blade variables from controller.

---

## Page 2 — About (`/about`)

**Purpose:** Tell the CGEG story. Founder biography. Vision, mission, values.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Page Hero** | Headline: *"A Legacy Built on Integrity"*. Eyebrow: Est. 2012. Subheading. No CTA. | `about-hero` 1920×700 — HQ building or boardroom |
| 2 | **Who We Are** | Rich text block. CGEG story from founding (2012) to present. BBBEE Level 1, 32+ countries, 9 divisions. Registration + compliance badge strip. | None |
| 3 | **Vision / Mission / Values** | 3-column cards: Vision / Mission / Core Values (Innovation, Excellence, Community). Each raised card, gold icon, Cormorant heading. | None |
| 4 | **Founder's Biography** | 2-column: Left — large portrait image. Right — full bio of Prof. Sir Clemence Jaricha. Title, credentials, philosophy. | `founder-portrait` 700×900 — formal portrait |
| 5 | **Founder's Message** | Full-width blockquote section. Extended quote in italic Cormorant. Gold left-border rule. | None |
| 6 | **Timeline (optional)** | Horizontal scroll timeline: 2012 founding → 2017 expansion → 2025 return to Zimbabwe / Sandton. | None |
| 7 | **Footer** | Standard | None |

---

## Page 3 — Divisions Hub (`/divisions`)

**Purpose:** Overview grid of all 9 divisions. Gateway page — every card links to individual division page.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Page Hero** | Headline: *"Nine Pillars of Growth"*. Short intro paragraph. | `divisions-hero` 1920×600 — collage or abstract build |
| 2 | **Division Grid** | 3×3 grid of raised division cards. Each: Tabler icon + Division name + 2-line description + "Explore Division" link. Cards animate in on scroll (staggered 80ms). | None |
| 3 | **Footer** | Standard | None |

**Note:** This page is a hub only — no deep content. Depth lives in individual division pages.

---

## Pages 4–12 — Individual Division Pages (`/divisions/[slug]`)

**One Blade template, 9 data sets.** The template is parameterised — a single controller passes division-specific content as variables.

**Divisions:**
1. `/divisions/construction` — CJ Global Construction
2. `/divisions/mining` — CJ Global Mining
3. `/divisions/logistics` — CJ Global Logistics
4. `/divisions/properties` — CJ Global Properties
5. `/divisions/mall` — CJ Global Mall
6. `/divisions/hospitality` — CJ Restaurants & Nightclubs
7. `/divisions/wellness` — CJ Global Spas & Salons
8. `/divisions/spirits` — CJ Vodka Premium Spirits *(page override: spirits.md)*
9. `/divisions/foundation` — redirects to `/foundation`

### Template Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Division Hero** | Division name (Cormorant, large). Parent brand: "A CJ Global Division". Tagline. Division-specific accent colour option (Spirits only). | `[division]-hero` 1920×700 |
| 2 | **What We Do** | 2-column: left text, right image. 3–4 paragraphs of division description and services offered. | `[division]-overview` 800×600 |
| 3 | **Services / Offerings** | 3-column icon-card grid. Each card: icon + service name + 1-line description. | None |
| 4 | **Key Projects / Highlights** | 2–3 featured items for this division. Horizontal cards with image slot, title, location, status. | `[division]-project-1`, `-project-2` 700×450 |
| 5 | **Division Contact CTA** | "Work with us" band. Primary button → /contact with division pre-selected. | None |
| 6 | **Other Divisions Strip** | Horizontal scroll of 4 other division cards (excluding current). Cross-navigation. | None |
| 7 | **Footer** | Standard | None |

---

## Page 13 — Foundation (`/foundation`)

**Purpose:** Showcase CGEG's CSR arm. Warmer, more human tone. Distinct from commercial pages.
**Design override:** `pages/foundation.md` — warmer gold tones, more photography-heavy.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Hero** | Headline: *"Giving Back to the Communities We Serve"*. Warmer, more emotive tone. | `foundation-hero` 1920×800 — community, children, healthcare |
| 2 | **Mission Statement** | Full-width centred text block. Large italic Cormorant mission statement. | None |
| 3 | **Impact Stats** | 4 stat cards: Countries (ZW/ZA/BW/ZM/LS) / People Reached / Programmes Running / Years Active | None |
| 4 | **Focus Areas** | 2-column: Education (left) / Healthcare (right). Each with description + image. | `foundation-education` 800×500, `foundation-healthcare` 800×500 |
| 5 | **Active Programmes** | 3 cards with programme name, country flag/name, brief description, status badge. | None |
| 6 | **Gallery Strip** | 5-image horizontal scroll gallery. Community photography. | `gallery-1` through `gallery-5` 600×400 each |
| 7 | **Get Involved CTA** | "Partner with the Foundation" — contact link. | None |
| 8 | **Footer** | Standard | None |

---

## Page 14 — Global Footprint (`/global-footprint`)

**Purpose:** Demonstrate CGEG's international scale visually. Map-centric page.
**Design override:** `pages/footprint.md`

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Hero** | Headline: *"Present in 32+ Countries"*. Eyebrow: 6 continents. | None |
| 2 | **Interactive SVG World Map** | Custom SVG world map. Active countries highlighted in gold. Hover tooltip: country name + CGEG presence type. | None (SVG inline) |
| 3 | **Regional Breakdown** | 3 raised cards: Africa / Europe / Americas. Each: country count + key offices. | None |
| 4 | **Key Offices** | Listed offices: KZN HQ / Bulawayo / London / Chicago / Harare (Sandton). Card per office: address, contact, flag. | `office-kzn`, `office-london`, `office-chicago` 600×400 |
| 5 | **Footer** | Standard | None |

---

## Page 15 — Leadership (`/leadership`)

**Purpose:** Present the full leadership team with professionalism and credibility.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Page Hero** | Headline: *"The People Behind the Vision"*. Short intro. | `leadership-hero` 1920×600 — boardroom or team |
| 2 | **Founder Card (Feature)** | Oversized featured card for Prof. Sir Clemence. Portrait + full title + brief bio + contact links. | `founder-leadership` 500×600 |
| 3 | **Directors Grid** | 4-col grid. Each: portrait + name + title + division. Cards: Dr. Chris Grant / Mr. L. Hadebe / Munodawafa Mutwara / Mr. Kris Cly. | `dir-[name]` 400×400 each — headshots |
| 4 | **Management Team** | 2-col list cards. Each: name + role. Lorcadia Phiri / Novela Dube / Mr. D Nyathi / Dr. E Kapongo. | `mgmt-[name]` 400×400 each (optional) |
| 5 | **Oversight** | 2-col feature cards: Ms Vee Jaricha + CJ Junior Jaricha — Oversight of All Divisions. | `oversight-vee`, `oversight-cj` 400×400 |
| 6 | **Footer** | Standard | None |

---

## Page 16 — Projects (`/projects`)

**Purpose:** Showcase landmark current and completed projects. Credibility and scale.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Page Hero** | Headline: *"Projects That Define a Continent"*. | `projects-hero` 1920×700 — construction or skyline |
| 2 | **Featured Project — Sandton Mall** | Full-width feature card. Project name, location, value (US$10–15M), partner (Delatfin Investment), job impact (2,000–5,000), status badge: In Development. | `sandton-feature` 1200×700 |
| 3 | **Featured Project — London** | Half-width feature. Commercial property + hospitality/wellness operations. | `london-project` 800×500 |
| 4 | **Featured Project — Chicago** | Half-width feature. Building acquisition anchoring spirits division. | `chicago-project` 800×500 |
| 5 | **Projects Grid** | All other projects. 3-col card grid. Each: image + title + location + division tag + status. | `project-[n]` 700×450 each |
| 6 | **Footer** | Standard | None |

---

## Page 17 — Contact (`/contact`)

**Purpose:** Primary lead and enquiry capture. Must feel trustworthy and frictionless.
**Design override:** `pages/contact.md` — inset shadows on form fields, cleaner layout.

### Sections

| # | Section | Key Elements | Image Slots |
|---|---------|-------------|-------------|
| 1 | **Page Hero** | Headline: *"Let's Build Something Together"*. Short welcome line. | None (text-only hero) |
| 2 | **Contact Info Strip** | 3 columns: KZN HQ address / enquiries@cjglobalexpressgroup.com / Bulawayo office. Each column: icon + label + value. | None |
| 3 | **Contact Form** | Name / Surname / Email / Phone / Division of interest (dropdown: all 9) / Message / Submit. Inset shadow fields. Gold focus states. Laravel form validation + success/error states. | None |
| 4 | **Direct Email Links** | 3 email cards: General enquiries / Founder / SA office. | None |
| 5 | **Offices Map Strip** | Static embedded map or SVG showing KZN + Bulawayo locations. | None |
| 6 | **Footer** | Standard | None |

**Backend requirements:**
- Laravel Mail via SMTP (configure in `.env`)
- Form fields: name, surname, email, phone, division, message
- Validation: required fields, email format
- Success: toast notification + email sent to enquiries@cjglobalexpressgroup.com
- Honeypot spam protection field

---

## Component Library Summary

Components built once in Phase 1 and reused across all pages:

| Component | Blade File | Used On |
|-----------|-----------|---------|
| Navbar | `components/navbar.blade.php` | All pages |
| Footer | `components/footer.blade.php` | All pages |
| Division Card | `components/card-division.blade.php` | Home, Divisions Hub, Division pages |
| Stat Block | `components/card-stat.blade.php` | Home, About, Foundation, Footprint |
| Button | `components/btn.blade.php` | All pages |
| Section Eyebrow | `components/eyebrow.blade.php` | All pages |
| Image Slot | `components/img-slot.blade.php` | All pages |
| Project Card | `components/card-project.blade.php` | Home, Projects |
| Person Card | `components/card-person.blade.php` | Leadership |
| Form Input | `components/form-input.blade.php` | Contact |

---

## Image Slot Inventory (Complete)

| Slot ID | Page | Dimensions | Description |
|---------|------|-----------|-------------|
| `hero-bg` | Home | 1920×1080 | Atmospheric African skyline or construction site |
| `about-portrait` | Home / About | 800×900 | Prof. Sir Clemence or HQ exterior |
| `founder-portrait` | About | 700×900 | Formal founder portrait |
| `founder-sig` | Home | 200×80 | Signature or monogram |
| `project-sandton` | Home / Projects | 1200×700 | Sandton Hydon Park development render |
| `project-london` | Home / Projects | 800×500 | London commercial property |
| `project-chicago` | Home / Projects | 800×500 | Chicago building |
| `foundation-band` | Home | 1920×600 | Community/charity imagery |
| `about-hero` | About | 1920×700 | HQ building or boardroom |
| `divisions-hero` | Divisions Hub | 1920×600 | Collage or abstract build |
| `[division]-hero` | Each division (×9) | 1920×700 | Division-specific |
| `[division]-overview` | Each division (×9) | 800×600 | Division operations imagery |
| `[division]-project-1/2` | Each division (×9) | 700×450 | Division project images |
| `foundation-hero` | Foundation | 1920×800 | Community, children, healthcare |
| `foundation-education` | Foundation | 800×500 | Education programme |
| `foundation-healthcare` | Foundation | 800×500 | Healthcare programme |
| `gallery-1` to `gallery-5` | Foundation | 600×400 | Community gallery |
| `office-kzn` | Footprint | 600×400 | KZN HQ exterior |
| `office-london` | Footprint | 600×400 | London office |
| `office-chicago` | Footprint | 600×400 | Chicago building |
| `leadership-hero` | Leadership | 1920×600 | Boardroom or team |
| `founder-leadership` | Leadership | 500×600 | Founder formal portrait |
| `dir-[name]` (×4) | Leadership | 400×400 | Director headshots |
| `mgmt-[name]` (×4) | Leadership | 400×400 | Management headshots |
| `oversight-vee` | Leadership | 400×400 | Ms Vee Jaricha |
| `oversight-cj` | Leadership | 400×400 | CJ Junior Jaricha |
| `projects-hero` | Projects | 1920×700 | Construction or skyline |
| `sandton-feature` | Projects | 1200×700 | Sandton development feature |

**Total image slots: ~55**
All are flagged in-build with `<!-- [IMAGE SLOT] -->` comments and visible placeholder divs.

---

## Route Summary (`routes/web.php`)

```php
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/divisions', [PageController::class, 'divisions']);
Route::get('/divisions/{slug}', [PageController::class, 'division']);
Route::get('/foundation', [PageController::class, 'foundation']);
Route::get('/global-footprint', [PageController::class, 'footprint']);
Route::get('/leadership', [PageController::class, 'leadership']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
```

---

*Page Build Summary v1.0 — Wivae Technologies*
*Total pages: 17 (Home + About + Divisions Hub + 9 Division pages + Foundation + Footprint + Leadership + Projects + Contact)*
*Total image slots: ~55 | Total routes: 10*

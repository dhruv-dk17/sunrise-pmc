# SunRise PMC — Master AI Agent Sitemap & Codebase Architecture Map
> **For AI Agents (Gemini, Claude, Antigravity, OpenAI, DeepSeek):**
> Read this single document first. It is the authoritative site map and codebase index for SunRise PMC.
> **DO NOT** scan the entire repository or perform expensive multi-file searches. Everything you need to understand routes, styles, build pipelines, design tokens, and company data is documented here.

---

## 1. Project Overview & Identity
- **Brand Name:** SunRise PMC (also written as SunRisePMC or Sunrise PMC)
- **Tagline:** Building Certainty. Delivering Excellence.
- **Core Specialization:** Premium Construction Project Management Consultancy (PMC), Turnkey Projects & Specialized Quantity Surveying (QS) Billing Audits.
- **Primary Market / Geo:** Surat, Gujarat, India (Local keywords: *PMC in Surat*, *Best PMC in Surat*, *PMC near me*, *Ugat Junction*, *Bhesan Road*).
- **Managing Director:** Arjun Sharma (18+ Years Engineering Experience, ₹1,500+ Cr managed portfolio, 20+ landmark developments).
- **Direct Phone:** `+91 95860 00933` | **Email:** `contact@sunrisepmc.in`
- **Corporate Address:** GL-2, Anand Avenue Commercial Complex (Building G & H), First Floor, Bhesan Road, Ugat Junction, Surat - 395005, Gujarat, India.
- **Coordinates:** `21.1983° N, 72.7844° E`
- **Tech Stack:**
  - Static Production: HTML5, CSS3 Custom Properties, Vanilla JavaScript (ES Module).
  - Motion Engine: GSAP 3.12+ (ScrollTrigger), Lenis 1.1+ Smooth Scroll.
  - Bundler: Vite 8.x (`npm run build` -> `dist/`).
  - WordPress Pipeline: `build_wp_theme.py` transforms `dist/` into `WordPress/sunrise-theme/` and creates `sunrise-theme.zip`.

---

## 2. Master File Directory & Role Registry

```
d:\sunrise\
├── AI_SITEMAP.md         # [THIS FILE] Authoritative AI agent codebase index & token saver
├── AGENTS.md             # Direct instructions for AI coding assistants
├── CLAUDE.md             # Project identity & coding constraints
├── PRD.md                # Product Requirements Document
├── TRD.md                # Technical Requirements Document
├── UIUX.md               # UI/UX Specifications
│
├── index.html            # Primary Homepage (Hero canvas, Trust stack, 8 verticals, 
│                         #   Turnkey & QS billing highlights, 3D project carousel,
│                         #   Scope estimator, Client marquee, 4-phase protocol, FAQ, Contact)
├── about.html            # About the Practice (Arjun Sharma, Fiduciary oath, Values, Team)
├── services.html         # Core Disciplines (8 Verticals + Turnkey + QS Billing Deep-Dives)
├── projects.html         # Full Landmark Portfolio (All 20 projects with sector filters)
├── contact.html          # Surat Executive Desk, Inquiry Form, Interactive Map & WhatsApp
│
├── style.css             # Unified Stylesheet (60:30:10 Architectural Obsidian-Gold Palette,
│                         #   Doodle illustrations, Responsive CSS Grid/Flex, Animations)
├── main.js               # Application Controller (GSAP ScrollTrigger, Lenis init,
│                         #   Interactive Canvas scrubber, 3D Carousel, Estimator, FAQ accordion)
│
├── sitemap.xml           # XML Sitemap for search engines & AI crawlers
├── robots.txt            # Search Engine & AI crawler directives (points to sitemap & llms.txt)
├── llms.txt              # Standard LLM discovery file for AI search engines
│
├── build_wp_theme.py     # Python script converting dist/ into WordPress standalone theme
├── package.json          # Vite scripts: "dev", "build", "preview"
├── vite.config.js        # Multi-page Vite configuration (builds all 5 HTML entrypoints)
│
├── public/               # Public assets bundled by Vite
│   ├── images/           # WebP/PNG project photos, logos, trust badges
│   ├── frames_webp/      # 30fps hero canvas frame sequence (001.webp - 300.webp)
│   └── doodles/          # Architectural PMC SVG vector doodles
│
└── WordPress/
    └── sunrise-theme/    # Auto-generated WordPress Theme (header.php, footer.php, style.css, functions.php)
```

---

## 3. Visual System & The 60 : 30 : 10 Color Ratio

The website strictly applies the **60:30:10 Design Rule** to eradicate empty sterile white screens and deliver an imposing, high-end architectural atmosphere:

| Role | Percentage | Token Name | Value | Purpose |
|---|---|---|---|---|
| **Dominant (Base Canvas)** | **60%** | `--bg-obsidian` / `--bg-dark` | `#0B0E14` & `#0E121A` | Deep architectural obsidian base with blueprint graph grid texture. Never a flat, blinding white void. |
| **Structural (Elevations & Cards)** | **30%** | `--surface-card` / `--surface-elevated` | `#151B26` & `#1C2433` | Elevated graphite panels, frosted glassmorphism (`backdrop-filter`), hairline borders (`rgba(201, 168, 76, 0.2)`). |
| **Accent (Interactive Energy)** | **10%** | `--accent-gold` / `--gold-radiant` | `#C9A84C` & `#E5B842` | Strictly for CTA buttons, live badges, active navigation links, stat highlights, and glowing SVG doodles. |

### Architectural Doodles Library
Inline & CSS background SVG doodles of construction & project management symbols:
1. **Tower Crane & High-rise wireframe** (`doodle-crane`): Symbol of active site orchestration.
2. **Drafting Compass & Triangle Ruler** (`doodle-drafting`): Symbol of precision design coordination.
3. **Safety Helmet & Level** (`doodle-safety`): Symbol of on-site zero-defect quality and EHS.
4. **Caliper & Measuring Tape** (`doodle-qs`): Symbol of QS work, BOQ formulation, and billing verification.
5. **Blueprint Foundation Grid** (`doodle-blueprint`): Subtle background watermark across major sections.

---

## 4. Key Services & High-Value SEO Keywords

Target Keywords seamlessly woven into headers, content, meta tags, and JSON-LD schema:
- **Primary Keywords:** `PMC in Surat`, `Best PMC in Surat`, `PMC near me`, `Sunrisepmc`, `Sunrise PMC`
- **Specialized Services:** `Turnkey projects`, `QS work for billings`, `Quantity Surveying Surat`, `Contractor bill audit`, `BOQ preparation`, `CPM scheduling Surat`
- **Location Hubs:** Surat, Ugat Junction, Bhesan Road, Adajan, Pal, Vesu, Hazira Industrial Belt, Katargam, Varachha, Dumas Road, Gujarat.

### The 10 Core Service Verticals (8 Core + 2 Flagship Highlights):
1. **Turnkey Project Management (Design to Handover)** *(NEW HIGH-DEMAND CAPABILITY)*: Single-window EPC management, contractor orchestration, material procurement oversight, and guaranteed delivery schedule.
2. **Specialized Quantity Surveying (QS) & Billing Audit** *(HIGH-DEMAND SEARCH)*: Item-rate BOQ formulation, Joint Measurement Sheets (JMS), contractor RA bill audits, forensic dispute resolution, and material reconciliation.
3. **Project Planning & Scheduling**: Critical Path Method (CPM) baseline scheduling and delay mitigation.
4. **Cost & Budget Management**: Pre-construction cost takeoffs, cash flow forecasting, and value engineering.
5. **Design Coordination & BIM**: Inter-disciplinary clash detection across structural, architectural, and MEP drawings.
6. **Construction & Site Management**: Full-time resident site engineers supervising trades and daily progress.
7. **Quality Assurance (QA/QC)**: Independent NABL laboratory testing, pour cards, and zero-defect snagging.
8. **Safety & Risk Management (EHS)**: Job Hazard Analysis (JHA), scaffolding audits, and statutory compliance.
9. **Annual Maintenance Contract (AMC)**: Post-occupancy structural and electromechanical facility health monitoring.
10. **Tender Formulation & Contractor Prequalification**: Transparent bidding, SLA drafting, and contract governance.

---

## 5. Landmark Portfolio Directory (All 20 Projects)

| # | Project Name | Sector | Scale / Specification | Location |
|---|---|---|---|---|
| 01 | **Hilton Garden Inn** | Hospitality | 220 Luxury Keys, 5-Star Standards | Surat, Gujarat |
| 02 | **Bharat City** | Residential | 2,400,000 Sq.Ft. Mega Township | Surat, Gujarat |
| 03 | **Vivanta Hotel** | Hospitality | Luxury Suites, Ballrooms & Fine Dining | Gujarat |
| 04 | **Charu Jewels** | Commercial | High-Security Flagship Commercial | Surat, Gujarat |
| 05 | **Bhawans Ultima** | Residential | Multi-Tower Premium Enclave | Surat, Gujarat |
| 06 | **Ankit Gems** | Commercial/Industrial | Heavy Industrial Diamond Manufacturing | Surat SEZ |
| 07 | **Apple Children Hospital** | Healthcare | Tertiary Pediatric Medical Center | Surat, Gujarat |
| 08 | **Mohit Diamond** | Commercial/Industrial | Precision Optical Cutting Facility | Surat, Gujarat |
| 09 | **White Wings Torrance** | Residential | Signature Curvilinear High-Rise | Surat, Gujarat |
| 10 | **Ginger Hotel** | Hospitality | 150 Keys Business Hotel | Surat, Gujarat |
| 11 | **Jainam House** | Residential | Bespoke Private Ultra-Luxury Residence | Surat, Gujarat |
| 12 | **Svasti Residence** | Residential | Contemporary Luxury Villa | Surat, Gujarat |
| 13 | **Mr. Dalmia House** | Residential | Exclusive High-End Residence | Surat, Gujarat |
| 14 | **Ashwin Diamond** | Commercial/Industrial | Diamond Processing Plant | Surat, Gujarat |
| 15 | **Treat Hotels & Resorts** | Hospitality | Luxury Vacation Resort | Gujarat |
| 16 | **Amrit Cement Club House**| Institutional | Corporate Recreational & Club Campus | Gujarat |
| 17 | **Vidyamandir Skill Centre**| Institutional | Vocational Training Campus | Gujarat |
| 18 | **Om Hospital** | Healthcare | Multi-Specialty Surgical Hospital | Surat, Gujarat |
| 19 | **Grand Marina Hospital** | Healthcare | Advanced Critical Care Hospital | Surat, Gujarat |
| 20 | **K7 International School** | Educational | Modern Academic Campus & Sports Hub | Surat, Gujarat |

---

## 6. How to Build & Deploy (For Future AI Agents)

1. **Local Development:**
   ```bash
   npm run dev
   ```
2. **Production Build:**
   ```bash
   npm run build
   ```
   *Vite compiles HTML, CSS, JS, and minifies assets into `dist/`.*
3. **Synchronize WordPress Theme:**
   ```bash
   python build_wp_theme.py
   ```
   *Reads `dist/`, replaces asset paths with `get_template_directory_uri()`, outputs ready-to-upload theme to `WordPress/sunrise-theme/` and creates `WordPress/sunrise-theme.zip`.*

---

## 7. Direct Instructions for Future AI Agents
- **Do not introduce heavy JS frameworks** (React, Vue, Svelte). Keep the site ultra-fast on Vanilla JS + GSAP + Lenis.
- **Do not revert to sterile white backgrounds**. Preserve the 60:30:10 architectural obsidian-slate-gold aesthetic.
- **Always update both HTML sources and run the WordPress build script** so both platforms stay 100% in sync.
- **Refer to this file** whenever questions arise regarding project scope, services, or typography.


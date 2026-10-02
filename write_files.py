#!/usr/bin/env python3
"""Write all SunRise PMC planning documents."""

TRD = """# SunRise PMC — Technical Requirements Document (TRD)
Version: 1.0 | Date: October 2026

---

## 1. Technology Stack

| Layer | Technology | Rationale |
|---|---|---|
| Framework | Vite + Vanilla JS | Fast build, no bloat, optimal for GSAP |
| Styling | Vanilla CSS + CSS Custom Properties | Full animation control |
| Animation | GSAP 3.12+ ScrollTrigger + SplitText | Industry gold standard |
| Smooth Scroll | Lenis v1.x | GSAP-compatible buttery scroll |
| Build | Vite 5.x | Fast HMR, optimal bundle splitting |
| Package Manager | npm | Standard |

---

## 2. Project Structure

```
d:/sunrise/
├── index.html            # Homepage
├── about.html
├── services.html
├── projects.html
├── careers.html
├── contact.html
├── assets/
│   ├── css/
│   │   ├── global.css    # Reset, tokens, typography
│   │   ├── components.css
│   │   └── layout.css
│   ├── js/
│   │   ├── main.js       # App entry, GSAP registration
│   │   ├── preloader.js
│   │   ├── navigation.js
│   │   ├── hero.js
│   │   ├── animations.js # ScrollTrigger animations
│   │   ├── counter.js    # Stat counter animation
│   │   ├── cursor.js     # Custom cursor
│   │   └── form.js       # Contact form
│   ├── images/
│   │   ├── hero/
│   │   ├── projects/
│   │   ├── team/
│   │   └── clients/
│   ├── videos/
│   │   ├── hero-bg.mp4
│   │   └── hero-bg-mobile.mp4
│   └── icons/
│       └── *.svg
├── data/
│   ├── services.js
│   ├── projects.js
│   └── faqs.js
├── PRD.md
├── UIUX.md
├── TRD.md
├── IMAGE_PROMPTS.md
└── CLAUDE.md
```

---

## 3. CDN / npm Dependencies

CDN (for prototyping):
- GSAP 3.12.2: cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js
- ScrollTrigger: cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js
- Lenis 1.0.29: cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.29/dist/lenis.min.js

npm (for production build):
```
npm install gsap @studio-freight/lenis
```

Fonts (Google Fonts):
- Playfair Display: wght 400, 500, 700; ital 400, 500
- Inter: wght 300, 400, 500, 600

---

## 4. CSS Design Tokens

```css
:root {
  /* Backgrounds */
  --color-bg-primary:    #0D0D0D;
  --color-bg-secondary:  #141414;
  --color-bg-card:       #1A1A1A;
  --color-bg-light:      #F5F1E8;

  /* Gold Brand Accent */
  --color-gold-primary:  #C9A84C;
  --color-gold-light:    #E8C97A;
  --color-gold-dark:     #8B6914;
  --color-gold-glow:     rgba(201, 168, 76, 0.15);

  /* Text */
  --color-text-primary:  #F5F1E8;
  --color-text-secondary:#A8A49A;
  --color-text-muted:    #5C584F;
  --color-text-on-light: #1A1915;

  /* Borders */
  --color-border:        rgba(255, 255, 255, 0.08);
  --color-border-gold:   rgba(201, 168, 76, 0.3);

  /* Typography */
  --font-display: 'Playfair Display', Georgia, serif;
  --font-body:    'Inter', system-ui, sans-serif;

  /* Layout */
  --container-max:     1440px;
  --container-padding: clamp(16px, 4vw, 80px);
  --section-padding:   clamp(80px, 10vw, 140px);

  /* Components */
  --radius-card: 16px;
  --radius-btn:  4px;

  /* Transitions */
  --transition-fast: 150ms ease;
  --transition-med:  300ms ease;
  --transition-slow: 600ms ease;
}
```

---

## 5. JavaScript Entry (main.js)

```js
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from '@studio-freight/lenis';

gsap.registerPlugin(ScrollTrigger);

// Lenis smooth scroll
const lenis = new Lenis({
  duration: 1.4,
  easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t))
});
lenis.on('scroll', ScrollTrigger.update);
gsap.ticker.add(time => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);
```

---

## 6. Key GSAP Animation Patterns

### Preloader sequence
```js
const tl = gsap.timeline();
tl.to('.preloader__logo', { opacity: 1, scale: 1, duration: 0.6, ease: 'power2.out' })
  .to('.preloader__bar-fill', { scaleX: 1, duration: 1.2, ease: 'power1.inOut' }, 0)
  .to('.preloader', { yPercent: -100, duration: 0.8, ease: 'power3.inOut' }, '+=0.2');
```

### Hero entrance
```js
const heroTl = gsap.timeline({ delay: 0.2 });
heroTl
  .from('.hero__label', { y: 30, opacity: 0, duration: 0.6 })
  .from('.hero__title .word', { y: 80, opacity: 0, stagger: 0.05, duration: 0.9, ease: 'power3.out' }, '-=0.3')
  .from('.hero__body', { y: 20, opacity: 0, duration: 0.6 }, '-=0.4')
  .from('.hero__ctas > *', { y: 20, opacity: 0, stagger: 0.1, duration: 0.5 }, '-=0.3');
```

### Section heading (ScrollTrigger)
```js
gsap.utils.toArray('.section__heading').forEach(el => {
  gsap.from(el, {
    scrollTrigger: { trigger: el, start: 'top 85%' },
    y: 60, opacity: 0, duration: 0.9, ease: 'power3.out'
  });
});
```

### Staggered card entrance
```js
gsap.from('.service-card', {
  scrollTrigger: { trigger: '.services-grid', start: 'top 70%' },
  y: 80, opacity: 0, stagger: 0.1, duration: 0.7, ease: 'power2.out'
});
```

### Parallax background
```js
gsap.to('.hero__bg', {
  scrollTrigger: { trigger: '.hero', scrub: 1.5 },
  y: 150
});
```

### Infinite client carousel
```js
gsap.to('.clients-track', {
  x: '-50%',
  duration: 25,
  ease: 'none',
  repeat: -1
});
```

### Stat counter (CountUp pattern)
```js
ScrollTrigger.create({
  trigger: '.stats',
  start: 'top 80%',
  once: true,
  onEnter: () => {
    document.querySelectorAll('.stat__number').forEach(el => {
      const target = parseInt(el.dataset.target);
      gsap.to({ val: 0 }, {
        val: target,
        duration: 2,
        ease: 'power2.out',
        onUpdate: function() { el.textContent = Math.round(this.targets()[0].val) + (el.dataset.suffix || ''); }
      });
    });
  }
});
```

---

## 7. Performance Targets

| Metric | Target | Strategy |
|---|---|---|
| LCP | < 2.5s | Preload hero image, optimize video poster |
| CLS | < 0.1 | Reserve space via aspect-ratio CSS |
| INP | < 100ms | Defer non-critical JS |
| PageSpeed Mobile | > 85 | Image optimization, lazy loading |
| PageSpeed Desktop | > 95 | CDN, caching |

---

## 8. Image Optimization

- Format: WebP primary, JPEG fallback
- Hero image: fetchpriority="high", preload link tag
- Non-hero: loading="lazy" decoding="async"
- Responsive: srcset with 3+ sizes
- Aspect-ratio CSS prevents CLS
- Max image size: hero 200KB, project cards 80KB each

---

## 9. Form Backend

Recommended: Formspree (no server needed for static site)
- Action: https://formspree.io/f/[FORM_ID]
- Method: POST
- Fields: name, phone, email, company, message
- Client-side validation before submit
- Honeypot field: name="_gotcha"
- Success/error states with GSAP animation

---

## 10. SEO Implementation

robots.txt:
  User-agent: *
  Allow: /
  Sitemap: https://sunrisepmc.in/sitemap.xml

JSON-LD (every page):
  @type: LocalBusiness
  name: SunRise PMC
  telephone: +91-95860-00933
  address: GL-2, Anand Avenue, Bhesan Road, Ugat Junction, Surat 395005
  url: https://sunrisepmc.in

Meta tags:
  - title (max 60 chars)
  - description (max 160 chars)
  - og:title, og:description, og:image (1200x630)
  - canonical URL on every page

---

## 11. Security

- HTTPS: redirect all HTTP to HTTPS
- CSP headers via server config or meta tag
- Honeypot: hidden input in form
- noopener noreferrer: all external links
- No API keys or secrets in client-side JS
- reCAPTCHA v3: add if spam becomes issue

---

## 12. Deployment

Platform: Vercel (recommended) or Netlify
Build command: vite build
Output: dist/
Domain: sunrisepmc.in via DNS CNAME to Vercel

Cache headers:
- HTML: no-cache
- CSS/JS/Images: max-age=31536000 (1 year, immutable)

---

## 13. Analytics

GA4 property: G-XXXXXXXXXX
Events to track:
- form_submit (contact form)
- phone_click (header phone number)
- whatsapp_click (WhatsApp float button)
- project_filter (portfolio category filter)
- scroll_depth (25/50/75/100%)
- cta_click (all CTA buttons with label)

---

## 14. Browser Support

| Browser | Min Version | Notes |
|---|---|---|
| Chrome | 90+ | Primary |
| Firefox | 88+ | Full support |
| Safari | 14+ | Test GSAP, backdrop-filter |
| Edge | 90+ | Chromium-based |
| iOS Safari | 14+ | Disable custom cursor |
| Android Chrome | 90+ | Disable custom cursor |

Touch detection:
```js
if (window.matchMedia('(hover: none)').matches) {
  document.body.classList.add('touch-device');
}
```

---

## 15. Accessibility

- WCAG 2.1 AA minimum
- Keyboard navigation: all interactive elements focusable
- Focus ring: 2px solid gold, 2px offset
- ARIA: labels on icon-only buttons, role="dialog" on mobile menu
- Screen reader: sr-only skip link
- prefers-reduced-motion: disable all GSAP animations
- Alt text: descriptive alt on all project/team images
- Color contrast: min 4.5:1 for body, 3:1 for large text
"""

IMAGE_PROMPTS = """# SunRise PMC — Image & Video Generation Prompts
Version: 1.0 | Date: October 2026
Tool: Gemini Imagen 3, Midjourney, DALL-E 3, Runway, NanoBanana

---

## IMPORTANT NOTES

- All images should be high-resolution (min 1920x1080 for hero, 1200x800 for cards)
- Color palette to use: Dark (#0D0D0D), Warm cream (#F5F1E8), Gold (#C9A84C)
- Style: Premium, editorial, luxury construction / architecture photography
- Avoid: Stock photo clichés, hard hats with thumbs up, generic office interiors

---

## 1. HERO SECTION

### Hero Background (Main - 1920x1080, 16:9)
Prompt:
"Cinematic aerial drone shot of a massive luxury high-rise construction project at golden hour. 
Glass and steel tower skeleton rising against a dramatic warm sunset sky. 
Construction cranes silhouetted against orange-gold clouds. 
Shot from above at 45-degree angle. 
Cinematic color grading, deep shadows, warm golden highlights. 
Editorial photography style. Ultra-realistic. 8K. 
Atmosphere: powerful, commanding, aspirational."

### Hero Background Mobile (1080x1920, 9:16)
Prompt:
"Portrait orientation. Vertical cinematic shot looking up at luxury construction tower 
under construction at dusk. Golden hour lighting. Deep blue sky with warm horizon. 
Steel structure geometric patterns. Architectural photography. 
Premium editorial style. Ultra-sharp. No people visible."

### Hero Video Prompt (for Runway / Pika / Kling):
"Drone fly-in shot approaching a luxury high-rise construction site at golden hour. 
Camera moves slowly forward and upward, revealing the scale of the building. 
Steel and glass structure. Warm sunset light, golden glow. 
Duration: 15-30 seconds, seamless loop. 
Cinematic, no camera shake. Premium real estate video aesthetic."

---

## 2. ABOUT SECTION

### About Section Background (1920x1080)
Prompt:
"Premium construction architectural blueprint close-up. 
Technical drawing with measurement lines on deep blue background. 
Ultra-sharp, architectural detail. 
Subtle gold/amber tones. Professional, expert aesthetic. 
Macro photography of blueprints with soft bokeh."

### Founder Portrait - Arjun Sharma (800x1000, Portrait)
Prompt:
"Professional executive portrait of a 45-50 year old Indian male architect/consultant. 
Navy blue or charcoal suit. Confident, authoritative expression. 
Clean minimal dark background. Studio lighting - soft key light, subtle rim light. 
Premium LinkedIn/corporate headshot quality. Sharp focus on face. 
Aspirational professional photography."

---

## 3. SERVICES SECTION

### Service Icons (8 SVG icons, gold line style, 64x64)
Design brief (NOT AI image - commission SVG or use icon library):
1. Planning icon: Gantt chart or calendar with checkmarks
2. Cost icon: Currency/rupee symbol with graph trending up
3. Design icon: Architect's compass/triangle
4. Site Management icon: Building blueprint with hard hat
5. Quality icon: Quality check mark / certificate badge
6. Safety icon: Shield with checkmark
7. AMC icon: Wrench with circular arrow
8. Billing icon: Invoice/receipt with magnifying glass

Alternative: Use Phosphor Icons or Heroicons as base, style in gold

### Services Section Background (1920x1080)
Prompt:
"Abstract architectural geometry. Dark background with subtle gold geometric lines 
forming building/structure patterns. Minimal, premium, luxury aesthetic. 
Like a luxury architecture firm's marketing material. 
No people, no text. Pure abstract architectural art."

---

## 4. PROJECTS PORTFOLIO

### Project Hero Card - Bharat City (1200x800)
Prompt:
"Luxury high-rise residential complex in India. Modern architecture, 
multiple towers with glass facades. Beautifully landscaped surroundings. 
Blue sky with clouds. Architecture photography, slightly elevated perspective. 
Premium real estate photography style."

### Project Hero Card - Hilton Garden Inn (1200x800)
Prompt:
"Modern luxury hotel exterior at dusk. Illuminated glass facade, 
warm interior lighting. Premium hotel architecture photography. 
Slightly elevated angle. Inviting, sophisticated atmosphere."

### Project Hero Card - Diamond/Gems Industry (1200x800, for Ankit Gems, Ashwin Diamond)
Prompt:
"Premium industrial facility - diamond manufacturing / gems processing plant. 
Modern clean industrial architecture. Well-lit interior. 
Professional corporate photography of a high-end manufacturing facility."

### Project Hero Card - Hospital (1200x800, for Om Hospital, Grand Marina)
Prompt:
"Modern hospital exterior. Clean white and blue architecture. 
Glass entrance. Premium healthcare facility. 
Architectural photography, daytime, clear sky."

### Project Hero Card - School (1200x800, for K7 International School)
Prompt:
"Modern international school building exterior. 
Contemporary educational architecture. Green landscape surroundings. 
Bright and inspiring. Architectural photography."

### Project Thumbnail Residential (800x600, for multiple residential)
Prompt:
"Luxury residential apartment complex in India. 
Contemporary design, stone and glass facade. 
Landscaped gardens in foreground. Professional real estate photography."

---

## 5. WHY CHOOSE US SECTION

### Section Background / Decorative (1920x600)
Prompt:
"Wide panoramic view of a city construction skyline at twilight. 
Multiple cranes and partially constructed buildings. 
Deep blue-purple sky with warm city lights below. 
Cinematic, aspirational, wide aspect ratio. 
Editorial photography."

---

## 6. CLIENTS SECTION

### Client Section Divider (1920x400)
Prompt:
"Abstract background for client logos section. 
Very dark (#0D0D0D), subtle texture, minimal gold geometric pattern. 
Premium consulting firm aesthetic. No text, no logos."

### Placeholder Client Logos
Note: Get actual logos from real clients. For placeholder:
Generate SVG wordmarks in the style of luxury Indian conglomerates.

---

## 7. CAREERS SECTION

### Careers Hero (1920x800)
Prompt:
"Team of young Indian construction engineers and architects reviewing plans together 
at a modern office. Collaborative, professional environment. 
Standing around a large table with blueprints and laptops. 
Diverse team, professional attire. Warm, aspirational workplace photography. 
Natural lighting, premium corporate office aesthetic."

---

## 8. CONTACT SECTION

### Contact Section Background (1920x1080)
Prompt:
"Aerial night view of Surat, India city skyline. 
Diamond district lights, Tapi river reflection. 
Warm golden city lights against deep blue night sky. 
Cinematic, premium cityscape photography."

---

## 9. LOADING / PRELOADER

### Preloader Logo Animation (SVG - not AI generated)
Design brief:
- SunRise PMC wordmark in Playfair Display font
- Golden sun icon (abstract, not literal - perhaps rising lines)
- Dark background (#0D0D0D)
- GSAP animates: fade in → scale from 0.8 to 1.0 → progress bar fills → page reveals

---

## 10. OG / SOCIAL SHARE

### OG Image (1200x630)
Prompt:
"Premium corporate branding image for SunRise PMC construction consultancy. 
Dark luxury background (#0D0D0D). Gold typography: SunRise PMC. 
Tagline: Building Certainty. Delivering Excellence. 
Minimal, sophisticated, construction industry. 
Professional corporate brand card style."

---

## 11. VIDEO CONTENT BRIEF

If you need to generate videos using Runway ML, Pika, or Kling AI:

### Video 1 - Hero Background Loop (15-30 sec)
"Cinematic drone footage of luxury construction site. 
Slow push forward over high-rise under construction. 
Golden hour, warm light. Camera pans up revealing building scale. 
Loop-ready. No text overlay needed."

### Video 2 - About Section Background (10-15 sec)
"Time-lapse of construction activity at a professional Indian construction site. 
Workers in hard hats, cranes moving, structure rising. 
Golden hour light. Speed: 4x normal. 
Cinematic color grade."

### Video 3 - Why Choose Section (10 sec loop)
"Abstract animated background. Golden geometric lines and nodes 
connecting in a network pattern. Dark background. 
Like a premium consulting firm animation. Loop-ready."

---

## GENERATION TIPS

For Gemini Imagen 3:
- Add "photorealistic, 8K, professional photography" to all prompts
- Add "no text, no watermarks" to all prompts
- Use aspect_ratio parameter: 16:9 for hero, 3:4 for portrait, 4:3 for cards

For Midjourney:
- Add: --ar 16:9 --style raw --q 2 --v 6
- Add: --no text, watermarks, logos, signs

For DALL-E 3:
- More verbose descriptions work better
- Add: "do not add any text or letters to the image"

For NanoBanana (PPT/slide generation):
- Use the specific prompt format from nanobanana-ppt-skills SKILL.md
- Generate image-heavy slides for portfolio showcase
"""

CLAUDE_MD = """# CLAUDE.md — SunRise PMC Website AI Context

This file tells AI coding assistants (Claude, Gemini, Antigravity) 
what this project is, what rules to follow, and what NOT to do.

---

## Project Identity

Name: SunRise PMC Website Rebuild
Type: Static luxury website (HTML/CSS/Vanilla JS)
Client: SunRise PMC - Construction Project Management Consultancy
Location: Surat, Gujarat, India
Contact: +91 95860 00933 | contact@sunrisepmc.in
Stack: Vite + Vanilla JS + GSAP + Lenis + Vanilla CSS

---

## Core Design Rules

1. DARK LUXURY aesthetic - primary background is #0D0D0D, not white
2. GOLD accent color is #C9A84C - use for CTAs, highlights, borders on hover
3. PLAYFAIR DISPLAY for all headings, editorial feel
4. INTER for all body text, UI elements
5. GSAP for ALL animations - no CSS keyframe animations for major elements
6. LENIS smooth scroll - do not use scroll-behavior: smooth in CSS
7. NO Tailwind CSS - use Vanilla CSS with CSS Custom Properties only
8. NO React, NO Vue - pure HTML/JS/CSS only

---

## MUST DO

- Import GSAP from CDN or npm (registered plugins: ScrollTrigger, SplitText)
- Initialize Lenis before ScrollTrigger, connect via gsap.ticker
- Use CSS Custom Properties (--color-gold-primary etc.) everywhere
- All images: WebP format, lazy loading, aspect-ratio CSS
- Hero video: autoplay muted loop playsinline
- Custom cursor: ring + dot, disabled on touch devices
- WhatsApp float button on all pages
- Contact form: Formspree action URL
- JSON-LD structured data on every page
- Responsive breakpoints: 375px, 640px, 768px, 1024px, 1280px, 1440px

---

## DO NOT DO

- Do NOT use Tailwind CSS
- Do NOT use React, Vue, Angular or any JS framework
- Do NOT use jQuery
- Do NOT use CSS animations for hero/section reveals (use GSAP)
- Do NOT hardcode colors - always use CSS Custom Properties
- Do NOT add stock photo clichés (thumbs up, handshakes)
- Do NOT use Bootstrap or any CSS framework
- Do NOT use default browser scroll behavior - always use Lenis
- Do NOT add more than one H1 per page
- Do NOT skip ARIA labels on interactive elements
- Do NOT commit API keys or Formspree IDs in public code

---

## Company Data (NEVER CHANGE WITHOUT CONFIRMATION)

Company: SunRise PMC
Founder: Arjun Sharma
Experience: 18+ years
Phone: +91 95860 00933
Email: contact@sunrisepmc.in
Address: GL-2, Anand Avenue Commercial Complex (Building G & H),
         First Floor, Bhesan Road, Ugat Junction, Surat - 395005, Gujarat

---

## Services (all 8 MUST appear on website)

1. Project Planning & Scheduling
2. Cost & Budget Management
3. Design Coordination
4. Construction & Site Management
5. Quality Management
6. Safety & Risk Management
7. Annual Maintenance Contract (AMC)
8. Billing & Commercial Audit

---

## Projects (all 20 MUST appear on projects page)

Residential: Bharat City, Bhawans Ultima, White Wings Torrance, 
             Jainam House, Svasti Residence, Mr. Dalmia House
Commercial/Industrial: Ankit Gems, Ashwin Diamond, Mohit Diamond, Charu Jewels
Hospitality: Hilton Garden Inn, Ginger Hotel, Vivanta Hotel, Treat Hotels & Resorts
Institutional: Amrit Cement Club House, Vidyamandir Skill Centre
Healthcare: Om Hospital, Grand Marina Hospital
Educational: K7 International School
Recreational: Blue Ski

---

## Animation Philosophy

- Preloader: GSAP logo reveal + progress bar (1.5-2s total)
- Hero: staggered entrance after preloader completes
- Sections: ScrollTrigger, start: 'top 80%', y:60 opacity:0 -> y:0 opacity:1
- Cards: stagger: 0.1, y:80 -> y:0
- Counters: count-up on scroll enter, once: true
- Portfolio: image scale on hover, overlay slide from bottom
- FAQ: height 0 -> auto, opacity 0 -> 1 with ease: power2.inOut
- Cursor: ring follows mouse (delayed), dot follows instantly
- Client logos: infinite horizontal gsap.to with repeat: -1, ease: none
- prefers-reduced-motion: disable ALL GSAP, opacity set to 1 immediately

---

## Reference Sites (for design inspiration)

1. https://sobha-privy-collection.com - Dark luxury editorial, video hero, parallax images
2. https://springs.estate - Wellness luxury, smooth scroll, image sliders, section rhythm

Key patterns to borrow:
- Sobha: Full-screen video hero, preloader, dark bg with minimal gold
- Springs: Smooth section transitions, content rhythm, image-text split layouts

---

## File Relationships

- PRD.md: Full product requirements, content, acceptance criteria
- UIUX.md: Design tokens, component specs, animation details
- TRD.md: Technical stack, code patterns, performance, deployment
- IMAGE_PROMPTS.md: AI prompts for hero/project/team images
- CLAUDE.md: THIS FILE - AI context and rules

---

## Key FAQs (exact content for website)

Q: What types of projects does SunRise PMC handle?
A: Residential, commercial, mixed-use and institutional construction projects.

Q: How does SunRise PMC prepare and monitor project schedules?
A: Master and detailed schedules using milestone and CPM-based planning; 
   progress checked against approved baseline with variance analysis and recovery planning.

Q: How does SunRise PMC help control project costs?
A: Detailed budgeting, continuous monitoring, bill verification, 
   variation management and transparent financial reporting.

Q: Does SunRise PMC provide on-site supervision?
A: Yes. Site supervision covers execution, quality, safety and contractor performance.

Q: How does SunRise PMC ensure project quality?
A: Quality assurance plans, inspections, audits and compliance checks 
   against approved drawings and specifications.

Q: Does SunRise PMC offer AMC and billing audit services?
A: Yes. AMC management and Billing & Commercial Audit are extended offerings.

---

## Git Rules

- Commit prefix: feat:, fix:, style:, perf:, docs:
- Never commit node_modules
- Never commit .env or API keys
- Branch: main (production), dev (development)

---

## Ponytail Mode: ACTIVE

This project uses ponytail principles:
- No unrequested abstractions
- Fewest files possible for given functionality
- Vanilla CSS over utility frameworks
- One script per concern (preloader.js, navigation.js, etc.)
- Mark deliberate simplifications with // ponytail: comment
"""

# Write files
files = {
    r'd:\\sunrise\\TRD.md': TRD,
    r'd:\\sunrise\\IMAGE_PROMPTS.md': IMAGE_PROMPTS,
    r'd:\\sunrise\\CLAUDE.md': CLAUDE_MD,
}

for path, content in files.items():
    with open(path, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f'Written: {path}')

print('All files written successfully!')

# SunRise PMC — UI/UX Design Specification
**Version:** 1.0
**Date:** October 2026
**Inspired by:** Sobha Privy Collection (sobha-privy-collection.com) + Springs Estate (springs.estate)
**Style:** Dark Luxury Editorial + Construction Authority

---

## 1. Design Philosophy

**Emotion:** Confidence, trust, precision, exclusivity.
**Tone:** Dark luxury editorial - the way a world-class consulting firm would present itself.
**Aesthetic:** Think McKinsey meets luxury real estate - dark backgrounds, editorial typography, immersive scroll storytelling.

### Design Pillars
1. **Cinematic First Impression** - Full-screen hero with video/animation that arrests attention
2. **Editorial Rhythm** - Content flows like a magazine spread, not a brochure
3. **Micro-Delight** - Every hover, scroll, and click rewards the user
4. **Authority Through Restraint** - Negative space, bold type, minimal but precise UI
5. **Tactile Scroll** - Smooth, weighted scroll that makes the page feel premium

---

## 2. Color System

### Primary Palette (Dark Luxury)

`css
:root {
  /* Base */
  --color-bg-primary:    #0D0D0D;   /* Near-black - main background */
  --color-bg-secondary:  #141414;   /* Slightly lighter dark */
  --color-bg-card:       #1A1A1A;   /* Card backgrounds */
  --color-bg-overlay:    #0D0D0DB3; /* 70% opacity overlay */

  /* Gold Accent (SunRise brand) */
  --color-gold-primary:  #C9A84C;   /* Warm gold - primary accent */
  --color-gold-light:    #E8C97A;   /* Light gold - highlights */
  --color-gold-dark:     #8B6914;   /* Dark gold - borders */
  --color-gold-glow:     rgba(201, 168, 76, 0.15); /* Gold glow */

  /* Text */
  --color-text-primary:  #F5F1E8;   /* Warm white - body text */
  --color-text-secondary:#A8A49A;   /* Warm gray - secondary */
  --color-text-muted:    #5C584F;   /* Muted - captions */
  --color-text-accent:   #C9A84C;   /* Gold text */

  /* Borders */
  --color-border:        rgba(255, 255, 255, 0.08);
  --color-border-gold:   rgba(201, 168, 76, 0.3);

  /* Semantic */
  --color-success:       #4CAF50;
  --color-error:         #EF5350;
}
`

### Secondary / Light Sections

`css
  /* Light sections (testimonials, about snapshot) */
  --color-bg-light:      #F5F1E8;   /* Warm cream */
  --color-text-on-light: #1A1915;   /* Near-black on cream */
`

### 60-30-10 Rule Application
- **60% Dark (#0D0D0D - #1A1A1A):** Page backgrounds, section fills
- **30% Warm Neutrals (#F5F1E8, #A8A49A):** Text, cards, accents
- **10% Gold (#C9A84C):** CTAs, highlights, hover states, active indicators

---

## 3. Typography System

### Font Stack

`css
/* Import in HTML head */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap');

:root {
  --font-display: 'Playfair Display', Georgia, serif;   /* Editorial headings */
  --font-body:    'Inter', system-ui, sans-serif;        /* Body, UI */
}
`

### Type Scale

| Role | Family | Size | Weight | Line Height | Letter Spacing |
|---|---|---|---|---|---|
| Hero Title | Playfair Display | clamp(56px, 8vw, 120px) | 400-500 | 1.0 | -0.02em |
| H1 | Playfair Display | clamp(40px, 5vw, 72px) | 500 | 1.05 | -0.01em |
| H2 | Playfair Display | clamp(28px, 3.5vw, 48px) | 400 | 1.1 | 0 |
| H3 | Inter | clamp(18px, 2vw, 24px) | 600 | 1.3 | 0.02em |
| Body Large | Inter | 18px | 300 | 1.7 | 0 |
| Body | Inter | 16px | 400 | 1.65 | 0 |
| Body Small | Inter | 14px | 400 | 1.6 | 0 |
| Label | Inter | 11px | 600 | 1.4 | 0.15em UPPERCASE |
| Caption | Inter | 12px | 400 | 1.5 | 0.05em |

### Typography Rules
- Hero text: Playfair Display, italic weight for emotional words
- Section labels: Inter UPPERCASE, 11px, letter-spacing 0.15em, gold color
- Stat numbers: Playfair Display, large, gold color
- Body copy: Inter, 300-400 weight for premium feel
- Never use Bold (700) on Playfair Display for headings - use 500 max

---

## 4. Spacing & Layout

### Grid System
`css
:root {
  --container-max:    1440px;
  --container-wide:  1280px;
  --container-narrow: 900px;
  --gutter:          clamp(16px, 4vw, 80px);
  --section-gap:     clamp(80px, 12vw, 160px);
  --card-gap:        24px;
}
`

### Section Rhythm
- Every section: min-height 80vh (desktop), padding clamp(80px, 10vw, 140px) 0
- Alternating dark/darker backgrounds for visual breathing
- Generous white space between elements

### Border Radius
- Cards: 16px (premium soft)
- Buttons: 4px (structured, not pill)
- Images: 0px or 8px (editorial)
- Modals: 24px

---

## 5. Component Specifications

### 5.1 Header / Navigation

`
Desktop:
[SUNRISE PMC logo] -------- [Home] [About] [Services] [Projects] [Careers] [Contact] [+91 95860 00933]

Mobile:
[SUNRISE PMC logo] ----------------------------------------- [Hamburger]
`

**Behavior:**
- Transparent on hero, transitions to dark blur (backdrop-filter: blur(20px)) on scroll
- Logo: SVG wordmark in gold
- Nav links: Inter 14px, 500 weight, gold on hover with underline slide animation
- Phone: Gold color, visible on desktop only
- Hamburger: 3-line with GSAP morph to X on open

**Mobile Menu:**
- Full-screen dark overlay (#0D0D0D at 98% opacity)
- Links appear with staggered GSAP slide-in-left
- Large font: Playfair Display 40px
- Gold accent line between links
- Phone + email at bottom

---

### 5.2 Preloader

`
Dark screen (#0D0D0D)
  ↓
SunRise PMC logo fades in (GSAP fade + scale from 0.9 to 1.0)
  ↓
Progress bar fills in gold (0% → 100%)
  ↓
Logo scales up and page fades in
`

**Duration:** 1.5-2s total
**GSAP code pattern:**
`js
const tl = gsap.timeline();
tl.to('.preloader__logo', { opacity: 1, scale: 1, duration: 0.6, ease: 'power2.out' })
  .to('.preloader__progress-bar', { scaleX: 1, duration: 1, ease: 'power1.inOut' }, 0)
  .to('.preloader', { yPercent: -100, duration: 0.8, ease: 'power3.inOut' });
`

---

### 5.3 Hero Section

**Layout:** Full viewport height, centered content, video background
**Background:** Looping construction drone footage video (muted, autoplay)
**Overlay:** Linear gradient: rgba(13,13,13,0.7) → rgba(13,13,13,0.3)

**Content hierarchy:**
`
[SMALL LABEL - "SURAT'S LEADING PMC"]
[HERO TITLE - 2-3 lines, Playfair Display]
  "Building Certainty."
  "Delivering Excellence."
[BODY TEXT - value prop, 18px Inter]
[CTA ROW]
  [Primary Button "Start Your Project →"]  [Secondary "Explore Our Work ↓"]
[SCROLL INDICATOR - animated bounce arrow]
`

**GSAP Entrance Animation (staggered):**
`js
const heroTl = gsap.timeline({ delay: 2 }); // after preloader
heroTl
  .from('.hero__label', { y: 30, opacity: 0, duration: 0.6 })
  .from('.hero__title .line', { y: 80, opacity: 0, stagger: 0.15, duration: 0.9, ease: 'power3.out' }, '-=0.3')
  .from('.hero__body', { y: 20, opacity: 0, duration: 0.6 }, '-=0.4')
  .from('.hero__ctas', { y: 20, opacity: 0, duration: 0.5 }, '-=0.3');
`

---

### 5.4 Stats Counter Section

**Layout:** 4 columns on desktop, 2x2 on tablet, 1-column on mobile
**Dark section with subtle gold rule top**

| Stat | Animated from | Style |
|---|---|---|
| 18+ Years Experience | 0 → 18 | Gold number + white label |
| 20+ Projects Delivered | 0 → 20 | Gold number + white label |
| 25L+ Sq. Ft. Managed | 0 → 25 | Gold number + white label |
| 100% Client Satisfaction | 0 → 100 | Gold number + white label |

**Counter animation:** ScrollTrigger triggers CountUp.js or custom GSAP counter

---

### 5.5 Service Cards

**Grid:** 2x4 on desktop, 2x4 on tablet, 1x8 on mobile
**Card style:**
`
┌─────────────────────────────┐
│  [Icon - gold SVG, 40px]    │
│                             │
│  Service Name               │
│  Playfair Display, 22px     │
│                             │
│  Short description          │
│  Inter 14px, muted          │
│                             │
│  [→ Learn More]  gold text  │
└─────────────────────────────┘
`

**Hover state:**
- Card border transitions from transparent to gold (0.3s)
- Subtle gold glow: box-shadow: 0 0 30px rgba(201,168,76,0.15)
- Icon scales to 1.1x
- GSAP from: transform: translateY(0) to: translateY(-4px)

---

### 5.6 Project Portfolio Grid

**Bento layout (asymmetric):**
`
Desktop (1440px):
┌──────────────────┬──────────┐
│  Bharat City     │ Hilton   │
│  [Large card]    │ Garden   │
│  2/3 width       │ Inn      │
│                  │ 1/3 w    │
├─────────┬────────┴──────────┤
│ Bhawans │  Ankit Gems       │
│ Ultima  │  [Wide card]      │
│ 1/3 w   │  2/3 width        │
└─────────┴───────────────────┘
`

**Card content:**
- Full-bleed image (cover)
- On hover: dark overlay slides in from bottom with project name, category, year

**Hover GSAP:**
`js
card.addEventListener('mouseenter', () => {
  gsap.to(overlay, { y: 0, duration: 0.4, ease: 'power2.out' });
  gsap.to(image, { scale: 1.05, duration: 0.6, ease: 'power2.out' });
});
`

---

### 5.7 Buttons

**Primary (Gold filled):**
`css
.btn-primary {
  background: var(--color-gold-primary);
  color: #0D0D0D;
  padding: 14px 32px;
  font: 600 14px/1 'Inter', sans-serif;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background 0.2s, transform 0.15s;
}
.btn-primary:hover {
  background: var(--color-gold-light);
  transform: translateY(-1px);
}
`

**Secondary (Outline gold):**
`css
.btn-secondary {
  background: transparent;
  color: var(--color-gold-primary);
  border: 1px solid var(--color-gold-primary);
  padding: 13px 31px;
  /* same font as primary */
}
.btn-secondary:hover {
  background: rgba(201, 168, 76, 0.08);
}
`

---

### 5.8 Custom Cursor

`js
const cursor = document.querySelector('.cursor');
const cursorDot = document.querySelector('.cursor-dot');

window.addEventListener('mousemove', (e) => {
  gsap.to(cursor, { x: e.clientX - 20, y: e.clientY - 20, duration: 0.3, ease: 'power2.out' });
  gsap.to(cursorDot, { x: e.clientX - 4, y: e.clientY - 4, duration: 0.1 });
});

// Expand on hover over links/buttons
document.querySelectorAll('a, button').forEach(el => {
  el.addEventListener('mouseenter', () => gsap.to(cursor, { scale: 2, duration: 0.2 }));
  el.addEventListener('mouseleave', () => gsap.to(cursor, { scale: 1, duration: 0.2 }));
});
`

**Cursor design:**
- Outer ring: 40px circle, border 1px solid gold, semi-transparent
- Inner dot: 8px solid gold circle
- Mix-blend-mode: difference (inverts on light sections)

---

### 5.9 FAQ Accordion

- Separator lines between questions (thin gold, 0.3 opacity)
- Question: Inter 18px, 500 weight, white
- Answer: Inter 15px, 300 weight, warm gray
- Icon: + morphs to - with GSAP rotation

**Animation:**
`js
gsap.to(answer, {
  height: isOpen ? 'auto' : 0,
  opacity: isOpen ? 1 : 0,
  duration: 0.4,
  ease: 'power2.inOut'
});
`

---

### 5.10 Contact Form

- Dark card background (#1A1A1A)
- Input fields: bottom-border only style (no box - feels premium)
- Gold focus underline animation (expands from center)
- Submit button: Primary gold button
- Success state: Gold checkmark + "We'll be in touch soon" message

---

## 6. Page-Specific Layouts

### 6.1 Homepage Flow
`
[Preloader]
  ↓
[Hero - Full screen - video bg]
  ↓ (scroll)
[About Snapshot - split layout: text left, image right]
  ↓
[Stats Counter - dark strip]
  ↓
[Services Grid - 2x4 cards on dark bg]
  ↓
[Why Choose - 3+3 differentiator grid on cream bg]
  ↓
[Full-screen Quote / Statement - cinematic dark section]
  "We don't just manage projects. We protect your investment."
  ↓
[Portfolio Preview - Bento grid]
  ↓
[Clients Carousel - dark bg]
  ↓
[FAQ - dark bg, accordion]
  ↓
[Contact Form - dark card on dark bg]
  ↓
[Footer - darkest bg]
`

### 6.2 Services Page Flow
`
[Hero - page title "Our Services" with construction bg]
  ↓
[Services - full detail, 2-column layout per service]
  ↓
[CTA strip - "Ready to start your project?"]
`

### 6.3 Projects Page Flow
`
[Hero - "Our Portfolio"]
  ↓
[Filter tabs: All / Residential / Commercial / Hospitality / Institutional]
  ↓
[Masonry/Grid layout of all 20 projects]
  ↓
[CTA - "Have a project? Let's talk."]
`

---

## 7. Animation Choreography (GSAP)

### ScrollTrigger Patterns

**Section heading reveal:**
`js
gsap.from('.section__heading', {
  scrollTrigger: { trigger: '.section__heading', start: 'top 80%' },
  y: 60,
  opacity: 0,
  duration: 0.9,
  ease: 'power3.out'
});
`

**Staggered card entrance:**
`js
gsap.from('.service-card', {
  scrollTrigger: { trigger: '.services-grid', start: 'top 70%' },
  y: 80,
  opacity: 0,
  stagger: 0.1,
  duration: 0.7,
  ease: 'power2.out'
});
`

**Parallax background:**
`js
gsap.to('.hero__bg', {
  scrollTrigger: { trigger: '.hero', scrub: 1 },
  y: 200
});
`

**Horizontal scroll (clients section):**
`js
gsap.to('.clients-track', {
  scrollTrigger: { trigger: '.clients', pin: true, scrub: 1, end: '+=1000' },
  x: -1200
});
`

### GSAP Plugins Required
- ScrollTrigger (core animations)
- SplitText (text character animations)
- ScrollSmoother or Lenis (smooth scroll)
- CustomEase (premium easing curves)

### npm/CDN
`html
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<!-- SplitText is GSAP Club plugin, use CDN with license or npm install gsap -->
`

---

## 8. Responsive Breakpoints

`css
/* Mobile first */
/* Base: 375px+ */
@media (min-width: 640px)  { /* sm: tablet portrait */ }
@media (min-width: 768px)  { /* md: tablet landscape */ }
@media (min-width: 1024px) { /* lg: small desktop */ }
@media (min-width: 1280px) { /* xl: desktop */ }
@media (min-width: 1536px) { /* 2xl: large screens */ }
`

**Mobile-specific behaviors:**
- Hamburger menu (no desktop nav)
- Touch-friendly tap targets (min 44px)
- Disable custom cursor on touch devices
- Reduce animation complexity (respect prefers-reduced-motion)
- Single column service cards
- Full-width project cards with horizontal scroll

---

## 9. Images & Visual Assets Required

### Hero Images/Videos
1. **hero-bg.mp4** - Drone footage of construction site in golden hour (3840x2160, <10MB)
2. **hero-bg-fallback.jpg** - Still frame from video (1920x1080)
3. **hero-bg-mobile.mp4** - Portrait version (1080x1920)

### Section Backgrounds
4. **about-bg.jpg** - Construction blueprint/plan close-up
5. **quote-bg.jpg** - Abstract architectural geometry (dark)
6. **careers-bg.jpg** - Professional team meeting on site

### Project Images (20 cards)
7-26. **project-[name].jpg** - One hero image per project (1200x800 each)

### Team
27. **founder-arjun-sharma.jpg** - Professional portrait (800x1000)

### Icons
28-35. **icon-service-[1-8].svg** - 8 service icons (minimal line style, gold)

### Client Logos
36-55. **client-logo-[name].svg** - Grayscale logos for clients

---

## 10. Micro-interactions Checklist

- [x] Button hover: translateY(-1px) + color shift
- [x] Nav link hover: underline slides in from left
- [x] Service card hover: border gold + lift
- [x] Project card hover: image scale + overlay reveal
- [x] FAQ toggle: + to - morph + content expand
- [x] Form input focus: gold bottom-border expand
- [x] Counter animation on scroll
- [x] Stat number pulse after count completes
- [x] Scroll-to-top button appearance after 500px scroll
- [x] WhatsApp button pulse animation
- [x] Custom cursor expand on interactive elements
- [x] Page transition fade/slide between routes
- [x] Logo shimmer/gold-pulse animation on preloader

---

## 11. Accessibility Notes

- All interactive elements keyboard-focusable
- ARIA labels on icons and buttons
- Focus ring visible (gold, 2px offset)
- Alt text on all images
- Color contrast ratio: min 4.5:1 for body text
- Prefers-reduced-motion: disable GSAP animations
- Screen reader skip-to-content link

# SunRise PMC — Technical Requirements Document (TRD)
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

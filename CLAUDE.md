# CLAUDE.md — SunRise PMC Website AI Context

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

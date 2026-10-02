import Lenis from 'lenis';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// 1. Lenis Smooth Scroll
let lenis = null;
if (!prefersReducedMotion) {
  lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
  });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));
  gsap.ticker.lagSmoothing(0);
}

// 2. Canvas Loop
const TOTAL_FRAMES = 300;
const frames = [];
let currentFrameIndex = 0;
let isPlaying = true;
let lastTimestamp = 0;
const FPS = 30;
const FRAME_INTERVAL = 1000 / FPS;

function pad(num, size) {
  let s = num + '';
  while (s.length < size) s = '0' + s;
  return s;
}

function initCanvasAnimation() {
  const canvas = document.getElementById('heroCanvas');
  const slider = document.getElementById('frameSlider');
  const counter = document.getElementById('frameCounter');
  const playBtn = document.getElementById('togglePlayBtn');
  const playIcon = document.getElementById('playIcon');

  if (!canvas) return;
  const ctx = canvas.getContext('2d');

  function resizeCanvas() {
    const dpr = window.devicePixelRatio || 1;
    canvas.width = canvas.parentElement.clientWidth * dpr;
    canvas.height = canvas.parentElement.clientHeight * dpr;
    renderCurrentFrame();
  }

  window.addEventListener('resize', resizeCanvas);

  for (let i = 1; i <= TOTAL_FRAMES; i++) {
    const img = new Image();
    img.src = '/frames_webp/ezgif-frame-' + pad(i, 3) + '.webp';
    frames.push(img);
  }

  frames[0].onload = () => { resizeCanvas(); };

  function renderFrame(index) {
    if (!frames[index] || !frames[index].complete) return;
    const img = frames[index];
    const cw = canvas.width;
    const ch = canvas.height;
    const imgRatio = img.naturalWidth / img.naturalHeight;
    const canvasRatio = cw / ch;
    let renderW, renderH, offsetX, offsetY;

    if (canvasRatio > imgRatio) {
      renderW = cw;
      renderH = cw / imgRatio;
      offsetX = 0;
      offsetY = (ch - renderH) / 2;
    } else {
      renderH = ch;
      renderW = ch * imgRatio;
      offsetX = (cw - renderW) / 2;
      offsetY = 0;
    }
    ctx.clearRect(0, 0, cw, ch);
    ctx.drawImage(img, offsetX, offsetY, renderW, renderH);

    if (slider) slider.value = index + 1;
    if (counter) counter.textContent = pad(index + 1, 3);
  }

  function renderCurrentFrame() { renderFrame(currentFrameIndex); }

  function animationLoop(timestamp) {
    if (!lastTimestamp) lastTimestamp = timestamp;
    const delta = timestamp - lastTimestamp;
    if (isPlaying && delta >= FRAME_INTERVAL) {
      currentFrameIndex = (currentFrameIndex + 1) % TOTAL_FRAMES;
      renderCurrentFrame();
      lastTimestamp = timestamp - (delta % FRAME_INTERVAL);
    }
    requestAnimationFrame(animationLoop);
  }
  requestAnimationFrame(animationLoop);

  if (slider) {
    slider.addEventListener('input', (e) => {
      isPlaying = false;
      currentFrameIndex = parseInt(e.target.value, 10) - 1;
      renderCurrentFrame();
    });
  }

  if (playBtn) {
    playBtn.addEventListener('click', () => {
      isPlaying = !isPlaying;
      if (playIcon) playIcon.textContent = isPlaying ? '\u23f8' : '\u25b6';
    });
  }

  ScrollTrigger.create({
    trigger: '#hero',
    start: 'top top',
    end: 'bottom top',
    scrub: 0.5,
    onUpdate: (self) => {
      if (!isPlaying) {
        const frameIndex = Math.min(
          TOTAL_FRAMES - 1,
          Math.floor(self.progress * (TOTAL_FRAMES - 1))
        );
        currentFrameIndex = frameIndex;
        renderCurrentFrame();
      }
    }
  });
}

// 3. Preloader + Hero Entrance
function initPreloader() {
  const preloader = document.getElementById('preloader');
  const bar = document.getElementById('preloaderBar');
  const counter = document.getElementById('preloaderCounter');

  if (!preloader) {
    initScrollAnimations();
    return;
  }

  if (prefersReducedMotion) {
    preloader.style.display = 'none';
    revealHero();
    return;
  }

  let progress = { val: 0 };
  gsap.to(progress, {
    val: 100,
    duration: 1.6,
    ease: 'power2.inOut',
    onUpdate: () => {
      const v = Math.floor(progress.val);
      if (bar) bar.style.width = v + '%';
      if (counter) counter.textContent = v + '%';
    },
    onComplete: () => {
      preloader.classList.add('fade-out');
      setTimeout(() => {
        preloader.remove();
        revealHero();
      }, 700);
    }
  });
}

function revealHero() {
  initScrollAnimations();

  const heroEl = document.getElementById('hero');
  if (!heroEl) return;

  if (prefersReducedMotion) {
    document.querySelectorAll('.hero-eyebrow, .hero-line, .hero-paragraph, .hero-actions, .hero-trust-stack').forEach(el => {
      el.classList.add('is-visible');
    });
    return;
  }

  const tl = gsap.timeline();

  tl.call(() => {
    const ey = document.getElementById('heroEyebrow');
    if (ey) ey.classList.add('is-visible');
  }, [], 0.1);

  tl.call(() => {
    const lines = document.querySelectorAll('.hero-line');
    lines.forEach((line, i) => {
      setTimeout(() => {
        line.classList.add('is-visible');
        line.style.transitionDelay = (i * 0.15) + 's';
      }, i * 150);
    });
  }, [], 0.4);

  tl.call(() => {
    const p = document.getElementById('heroPara');
    if (p) p.classList.add('is-visible');
  }, [], 1.1);

  tl.call(() => {
    const a = document.getElementById('heroActions');
    if (a) a.classList.add('is-visible');
  }, [], 1.4);

  tl.call(() => {
    const ts = document.getElementById('heroTrustStack');
    if (ts) ts.classList.add('is-visible');
  }, [], 0.8);

  tl.play();
}

// 4. Custom Luxury Cursor
function initCustomCursor() {
  const dot = document.getElementById('cursorDot');
  const ring = document.getElementById('cursorRing');
  if (!dot || !ring || window.matchMedia('(pointer: coarse)').matches) return;

  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let ringX = mouseX;
  let ringY = mouseY;

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    dot.style.opacity = '1';
    ring.style.opacity = '1';
    dot.style.transform = 'translate(' + mouseX + 'px, ' + mouseY + 'px)';
  });

  function renderCursor() {
    ringX += (mouseX - ringX) * 0.15;
    ringY += (mouseY - ringY) * 0.15;
    ring.style.transform = 'translate(' + ringX + 'px, ' + ringY + 'px)';
    requestAnimationFrame(renderCursor);
  }
  requestAnimationFrame(renderCursor);

  const clickables = document.querySelectorAll('a, button, input, select, textarea, .service-entry, .project-entry, .faq-trigger, .trust-card');
  clickables.forEach(el => {
    el.addEventListener('mouseenter', () => {
      ring.style.width = '56px';
      ring.style.height = '56px';
      ring.style.borderColor = 'rgba(158, 122, 42, 0.8)';
      ring.style.background = 'rgba(158, 122, 42, 0.06)';
    });
    el.addEventListener('mouseleave', () => {
      ring.style.width = '38px';
      ring.style.height = '38px';
      ring.style.borderColor = 'rgba(158, 122, 42, 0.4)';
      ring.style.background = 'transparent';
    });
  });
}

// 5. Header + Active Nav
function initHeader() {
  const header = document.getElementById('siteHeader');
  if (!header) return;

  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    let current = '';
    sections.forEach(sec => {
      const sectionTop = sec.offsetTop - 120;
      if (window.scrollY >= sectionTop) {
        current = sec.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active');
      }
    });
  }, { passive: true });
}

// 6. Advanced Scroll Animations (GSAP ScrollTrigger + IntersectionObserver)
function initScrollAnimations() {
  if (prefersReducedMotion) return;

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -60px 0px',
    threshold: 0.12
  };

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-revealed');
        revealObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.reveal-item, .protocol-card, .service-entry, .pillar-row, .faq-item, .founder-card-strip, .clip-reveal, .parallax-wrap, .split-line-wrap').forEach(el => {
    revealObserver.observe(el);
  });

  // Staggered reveal for section editorial titles
  document.querySelectorAll('.editorial-heading').forEach(heading => {
    ScrollTrigger.create({
      trigger: heading,
      start: 'top 88%',
      once: true,
      onEnter: () => {
        gsap.fromTo(heading,
          { y: 36, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.9, ease: 'power3.out' }
        );
      }
    });
  });

  // Numbers counter trigger
  const metricsStrip = document.querySelector('.hero-metrics-strip, .metrics-flex');
  if (metricsStrip) {
    ScrollTrigger.create({
      trigger: metricsStrip,
      start: 'top 85%',
      once: true,
      onEnter: () => animateCounters()
    });
  }

  // Smooth project gallery entrance
  const projectsGallery = document.querySelector('.projects-gallery');
  if (projectsGallery) {
    ScrollTrigger.create({
      trigger: projectsGallery,
      start: 'top 85%',
      once: true,
      onEnter: () => {
        const cards = projectsGallery.querySelectorAll('.project-entry');
        gsap.fromTo(cards,
          { y: 45, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.75, stagger: 0.08, ease: 'power2.out' }
        );
      }
    });
  }

  // Subtle image parallax
  const aboutImg = document.querySelector('.about-img');
  if (aboutImg && document.querySelector('.about-media-col')) {
    gsap.to(aboutImg, {
      yPercent: -10,
      ease: 'none',
      scrollTrigger: {
        trigger: '.about-media-col',
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1.2
      }
    });
  }

  // Smooth canvas parallax
  if (document.getElementById('hero')) {
    gsap.to('.hero-canvas-container', {
      yPercent: 18,
      ease: 'none',
      scrollTrigger: {
        trigger: '#hero',
        start: 'top top',
        end: 'bottom top',
        scrub: 0.8
      }
    });
  }
}

function animateCounters() {
  document.querySelectorAll('.count-up').forEach(c => {
    const target = +c.getAttribute('data-target');
    const obj = { val: 0 };
    gsap.to(obj, {
      val: target,
      duration: 2.2,
      ease: 'power3.out',
      onUpdate: () => {
        c.textContent = Math.floor(obj.val).toLocaleString('en-IN');
      },
      onComplete: () => {
        c.classList.add('count-pulse');
        setTimeout(() => c.classList.remove('count-pulse'), 400);
      }
    });
  });
}

// 7. Services Interactive Accordion
function initServicesInteractivity() {
  const entries = document.querySelectorAll('.service-entry');
  const badge = document.getElementById('previewBadge');
  const title = document.getElementById('previewTitle');
  const scope = document.getElementById('previewScope');
  const deliverables = document.getElementById('previewDeliverables');

  if (!entries.length || !badge) return;

  function updatePreview(entry) {
    entries.forEach(e => e.classList.remove('active'));
    entry.classList.add('active');

    const sNum = entry.getAttribute('data-service');
    const sTitle = entry.getAttribute('data-title');
    const sScope = entry.getAttribute('data-scope');
    const d1 = entry.getAttribute('data-d1');
    const d2 = entry.getAttribute('data-d2');
    const d3 = entry.getAttribute('data-d3');

    badge.textContent = 'DISCIPLINE 0' + sNum;
    title.textContent = sTitle;
    scope.textContent = sScope;
    deliverables.innerHTML = '<li>' + d1 + '</li><li>' + d2 + '</li><li>' + d3 + '</li>';

    gsap.fromTo('#servicePreviewPanel',
      { opacity: 0.7, y: 6, scale: 0.99 },
      { opacity: 1, y: 0, scale: 1, duration: 0.35, ease: 'power2.out' }
    );
  }

  entries.forEach(entry => {
    entry.addEventListener('click', () => updatePreview(entry));
    entry.addEventListener('mouseenter', () => updatePreview(entry));
  });
}

// 8. Projects Filter + Modal
function initProjects() {
  const tabs = document.querySelectorAll('.filter-tab');
  const entries = document.querySelectorAll('.project-entry');
  const modal = document.getElementById('projectModal');
  const scrim = document.getElementById('modalScrim');
  const close = document.getElementById('modalClose');
  const slot = document.getElementById('modalSlot');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const filter = tab.getAttribute('data-filter');

      const visible = [];
      entries.forEach(entry => {
        const cat = entry.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          entry.style.display = 'flex';
          visible.push(entry);
        } else {
          entry.style.display = 'none';
        }
      });

      gsap.fromTo(visible,
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.4, stagger: 0.05, ease: 'power2.out' }
      );

      if (lenis) lenis.resize();
      ScrollTrigger.refresh();
    });
  });

  function openModal(entry) {
    if (!modal || !slot) return;
    const title = entry.getAttribute('data-title') || '';
    const type = entry.getAttribute('data-type') || '';
    const scale = entry.getAttribute('data-scale') || '';
    const loc = entry.getAttribute('data-location') || '';
    const img = entry.getAttribute('data-img') || '';
    const desc = (entry.querySelector('.entry-desc') || {}).textContent || '';

    slot.innerHTML = [
      '<div style="height:300px;overflow:hidden;margin-bottom:28px;border-radius:4px;position:relative;">',
      '<img src="' + img + '" alt="' + title + '" style="width:100%;height:100%;object-fit:cover;transition:transform 0.6s ease;" onmouseover="this.style.transform=\'scale(1.04)\'" onmouseout="this.style.transform=\'scale(1)\'">',
      '<div style="position:absolute;inset:0;background:linear-gradient(to bottom,transparent 50%,rgba(0,0,0,0.35));pointer-events:none;"></div>',
      '<div style="position:absolute;bottom:16px;left:16px;font-size:0.6rem;letter-spacing:0.18em;color:#fff;font-weight:700;background:rgba(158,122,42,0.9);padding:4px 10px;border-radius:2px;">' + type + '</div>',
      '</div>',
      '<div style="font-size:0.68rem;letter-spacing:0.16em;color:var(--accent-gold);font-weight:700;margin-bottom:8px;">' + loc + '</div>',
      '<h3 style="font-family:var(--font-serif-roman);font-size:2rem;color:var(--text-primary);margin-bottom:14px;line-height:1.1;">' + title + '</h3>',
      '<p style="font-size:0.95rem;color:var(--text-secondary);line-height:1.8;margin-bottom:28px;">' + desc + '</p>',
      '<div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:30px;background:var(--bg-stone);padding:20px;border:1px solid var(--border-hairline);border-radius:4px;">',
      '<div><span style="font-size:0.62rem;color:var(--text-muted);letter-spacing:0.12em;display:block;margin-bottom:4px;text-transform:uppercase;">Engagement</span>',
      '<strong style="font-size:0.9rem;color:var(--text-primary);">Turnkey PMC &amp; Forensic Audit</strong></div>',
      '<div><span style="font-size:0.62rem;color:var(--text-muted);letter-spacing:0.12em;display:block;margin-bottom:4px;text-transform:uppercase;">Project Scale</span>',
      '<strong style="font-size:0.9rem;color:var(--accent-gold);">' + scale + '</strong></div>',
      '</div>',
      '<div style="display:flex;gap:14px;flex-wrap:wrap;">',
      '<a href="/contact.html" class="btn-editorial btn-accent" onclick="document.getElementById(\'modalClose\')?.click();"><span>Inquire Similar Project</span></a>',
      '<a href="https://wa.me/919586000933?text=Inquiring%20about%20' + encodeURIComponent(title) + '" target="_blank" class="btn-editorial btn-outline"><span>WhatsApp Consultation</span></a>',
      '</div>'
    ].join('');

    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    gsap.fromTo('.modal-dialog',
      { y: 40, opacity: 0, scale: 0.96 },
      { y: 0, opacity: 1, scale: 1, duration: 0.45, ease: 'power3.out' }
    );
  }

  function closeModal() {
    if (!modal) return;
    gsap.to('.modal-dialog', {
      y: 20, opacity: 0, scale: 0.97, duration: 0.3, ease: 'power2.in',
      onComplete: () => {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
    });
  }

  entries.forEach(entry => entry.addEventListener('click', () => openModal(entry)));
  if (scrim) scrim.addEventListener('click', closeModal);
  if (close) close.addEventListener('click', closeModal);
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal && modal.classList.contains('active')) closeModal();
  });
}

// 9. PMC Scope Estimator
function initCalculator() {
  const typo = document.getElementById('typologySelect');
  const slider = document.getElementById('areaSlider');
  const areaDisplay = document.getElementById('areaValueDisplay');
  const teamVal = document.getElementById('teamAllocVal');
  const timelineVal = document.getElementById('timelineVal');
  const savingsVal = document.getElementById('savingsVal');

  if (!slider || !areaDisplay) return;

  function calculate() {
    const area = parseInt(slider.value, 10);
    areaDisplay.textContent = area.toLocaleString('en-IN') + ' Sq.Ft.';

    let team = '3 - 4 Resident Engineers';
    let timeline = '18 - 22 Months';
    let savings = '\u20b980 Lakh - 1.2 Cr';

    if (area > 1000000) {
      team = '8 - 12 Resident Engineers (Multi-Tower)';
      timeline = '32 - 40 Months';
      savings = '\u20b93.5 - 5.0+ Cr';
    } else if (area > 500000) {
      team = '6 - 8 Resident Engineers';
      timeline = '26 - 32 Months';
      savings = '\u20b92.2 - 3.2 Cr';
    } else if (area > 200000) {
      team = '4 - 6 Resident Engineers';
      timeline = '22 - 28 Months';
      savings = '\u20b91.5 - 2.2 Cr';
    }

    function animateVal(el, val) {
      gsap.to(el, { opacity: 0, y: -6, duration: 0.15, onComplete: () => {
        el.textContent = val;
        gsap.to(el, { opacity: 1, y: 0, duration: 0.25 });
      }});
    }

    if (teamVal) animateVal(teamVal, team);
    if (timelineVal) animateVal(timelineVal, timeline);
    if (savingsVal) animateVal(savingsVal, savings);
  }

  slider.addEventListener('input', calculate);
  if (typo) typo.addEventListener('change', calculate);
}

// 10. FAQ Accordion
function initFaq() {
  const items = document.querySelectorAll('.faq-item');
  items.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');
    if (!trigger) return;
    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');
      items.forEach(i => {
        i.classList.remove('active');
        const t = i.querySelector('.faq-trigger');
        if (t) t.setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('active');
        trigger.setAttribute('aria-expanded', 'true');
      }
      if (lenis) lenis.resize();
    });
  });
}

// 11. Mobile Drawer
function initMobileMenu() {
  const toggle = document.getElementById('mobileToggle');
  const drawer = document.getElementById('mobileDrawer');
  const close = document.getElementById('mobileClose');
  const bg = document.getElementById('mobileDrawerBg');
  const items = document.querySelectorAll('.mobile-nav-item');

  if (!toggle || !drawer) return;

  function openDrawer() {
    drawer.classList.add('open');
    drawer.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    drawer.classList.remove('open');
    drawer.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  toggle.addEventListener('click', openDrawer);
  if (close) close.addEventListener('click', closeDrawer);
  if (bg) bg.addEventListener('click', closeDrawer);
  items.forEach(i => i.addEventListener('click', closeDrawer));
}

// 12. Form Submission
function initForm() {
  const form = document.getElementById('projectInquiryForm');
  const feedback = document.getElementById('formFeedback');
  const btn = document.getElementById('submitBtn');

  if (!form || !feedback) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (btn) {
      btn.disabled = true;
      btn.innerHTML = '<span>Transmitting Dossier...</span>';
    }

    try {
      const resp = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { 'Accept': 'application/json' }
      });

      if (resp.ok) {
        feedback.className = 'form-feedback success';
        feedback.textContent = 'Dossier received. An executive director will review and connect with you within 24 hours.';
        form.reset();
      } else {
        throw new Error();
      }
    } catch {
      feedback.className = 'form-feedback error';
      feedback.textContent = 'Inquiry logged. For priority booking, call +91 95860 00933 or WhatsApp us.';
    } finally {
      if (btn) {
        btn.disabled = false;
        btn.innerHTML = '<span>Submit Strategic Dossier</span>';
      }
    }
  });
}

// 13. Dynamic Year
function initYear() {
  const y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();
}

// 14. Trust Card 3D Tilt
function initTrustCardTilt() {
  const cards = document.querySelectorAll('.trust-card');
  cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = 'perspective(600px) rotateY(' + (x * 8) + 'deg) rotateX(' + (-y * 8) + 'deg) translateX(-4px) scale(1.02)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}

// Bootstrap
document.addEventListener('DOMContentLoaded', () => {
  initPreloader();
  initCanvasAnimation();
  initCustomCursor();
  initHeader();
  initServicesInteractivity();
  initProjects();
  initCalculator();
  initFaq();
  initMobileMenu();
  initForm();
  initYear();
  initTrustCardTilt();
});

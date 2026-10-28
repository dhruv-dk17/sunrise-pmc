<?php
/**
 * Template Name: About Us Template
 */

get_header();
?>



  <!-- Mobile Drawer -->
  <div class="mobile-drawer" id="mobileDrawer" aria-hidden="true">
    <div class="mobile-drawer-bg" id="mobileDrawerBg"></div>
    <div class="mobile-drawer-panel">
      <div class="mobile-drawer-top">
        <span class="mobile-logo-text">SUNRISE PMC</span>
        <button class="mobile-close" id="mobileClose">&times;</button>
      </div>
      <ul class="mobile-nav-list">
        <li><a href="<?php echo esc_url(home_url("/")); ?>" class="mobile-nav-item"><span>00</span> Home</a></li>
        <li><a href="<?php echo esc_url(home_url("/about/")); ?>" class="mobile-nav-item"><span>01</span> About the Practice</a></li>
        <li><a href="<?php echo esc_url(home_url("/services/")); ?>" class="mobile-nav-item"><span>02</span> Core Disciplines (8)</a></li>
        <li><a href="<?php echo esc_url(home_url("/projects/")); ?>" class="mobile-nav-item"><span>03</span> Landmark Portfolio</a></li>
        <li><a href="<?php echo esc_url(home_url("/contact/")); ?>" class="mobile-nav-item"><span>04</span> Contact &amp; Surat Desk</a></li>
      </ul>
      <div class="mobile-contact-bar">
        <div class="mobile-contact-label">DIRECT PMC HOTLINE</div>
        <a href="tel:+919586000933" class="mobile-phone">+91 95860 00933</a>
        <div class="mobile-address">GL-2, Anand Avenue Commercial Complex, Ugat Junction, Surat</div>
      </div>
    </div>
  </div>

  <main style="padding-top: 86px;">

    <!-- Creative Editorial Hero Banner with Blueprint Grids -->
    <section class="about-hero-creative" style="background: radial-gradient(ellipse at 80% 20%, #1a1e24 0%, #0d0f12 70%); color: #FFF; padding: clamp(70px, 9vh, 110px) 0; position: relative; overflow: hidden; border-bottom: 1px solid rgba(255,255,255,0.08);">
      <div class="container" style="position: relative; z-index: 2;">
        
        <div class="section-label">
          <span class="label-number" style="color: #D4AF37;">01</span>
          <span class="label-text" style="color: rgba(255,255,255,0.65);">ESTABLISHED 2008 &bull; SURAT, GUJARAT</span>
        </div>

        <h1 class="editorial-heading" style="color: #FFFFFF; font-size: clamp(2.4rem, 4.8vw, 4.4rem); line-height: 1.1; margin-bottom: 24px; max-width: 900px;">
          Where Engineering Discipline Meets <span class="gold-italic">Fiduciary Protection.</span>
        </h1>

        <p style="font-size: clamp(1rem, 1.3vw, 1.18rem); color: rgba(255,255,255,0.8); max-width: 740px; line-height: 1.85; margin-bottom: 32px;">
          SunRise PMC functions as the client's vigilant, unyielding representative on-site. We bridge the critical divide between ambitious architectural blueprints and commercial site reality.
        </p>

        <div style="display: flex; gap: 16px; flex-wrap: wrap; align-items: center;">
          <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="btn-editorial btn-accent">
            <span>Consult With Directors</span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url(home_url("/projects/")); ?>" class="btn-editorial btn-outline" style="background: rgba(255,255,255,0.06); color: #FFF; border-color: rgba(255,255,255,0.2);">
            <span>Explore Portfolio</span>
          </a>
        </div>

      </div>

      <!-- Architectural subtle geometric motif -->
      <div style="position: absolute; right: -20px; bottom: -40px; font-size: clamp(8rem, 18vw, 18rem); font-family: var(--font-serif-roman); color: rgba(255,255,255,0.02); pointer-events: none; line-height: 1; user-select: none;">
        SURAT
      </div>
    </section>

    <!-- Key Metrics Ribbon with GSAP Live Counters -->
    <section class="hero-metrics-strip" style="background: #FFFFFF; border-bottom: 1px solid var(--border-hairline); padding: 40px 0;">
      <div class="container metrics-flex">
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="250">0</span><span class="gold-plus">+</span></div>
          <div class="metric-desc">Projects Handled Across Gujarat</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="20">0</span><span class="gold-plus">+</span></div>
          <div class="metric-desc">Resident PMC Engineers &amp; Leads</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="18">0</span><span class="gold-plus">+</span></div>
          <div class="metric-desc">Years of Engineering Leadership</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="100">0</span><span class="gold-plus">%</span></div>
          <div class="metric-desc">Independent Pour &amp; Quality Sign-offs</div>
        </div>
      </div>
    </section>

    <!-- About Narrative + Uncropped Photography Showcase -->
    <section class="about-section" style="padding: clamp(60px, 8vw, 100px) 0;">
      <div class="container">
        <div class="about-editorial-layout">
          
          <!-- Left: Uncropped framed image with coordinates caption -->
          <div class="about-media-col reveal-item">
            <div class="media-aspect-frame" style="border-radius: 8px; border: 1px solid var(--border-hairline); padding: 12px; background: #FFFFFF; box-shadow: 0 16px 40px rgba(0,0,0,0.06);">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/SunRise-PMC-3-1-CQOhqJb-.png" alt="SunRise PMC Architectural Supervision" class="about-img" style="width: 100%; height: auto; object-fit: contain; border-radius: 4px; display: block;" loading="lazy">
              <div class="media-coordinates" style="margin-top: 12px; background: var(--bg-stone); border-radius: 4px; padding: 10px 16px; display: flex; align-items: center; justify-content: center; gap: 10px; font-size: 0.68rem; letter-spacing: 0.12em; color: var(--text-secondary); border: 1px solid var(--border-hairline);">
                <span>LAT 21&deg;10'12&quot; N</span>
                <span class="coord-dot" style="color: var(--accent-gold);">&bull;</span>
                <span>LON 72&deg;49'44&quot; E</span>
                <span class="coord-dot" style="color: var(--accent-gold);">&bull;</span>
                <span class="coord-loc" style="font-weight: 700; color: var(--text-primary);">SURAT HEADQUARTERS</span>
              </div>
            </div>
            
            <div class="founder-card-strip" style="margin-top: 24px; background: #FFFFFF; border: 1px solid var(--border-hairline); border-left: 3px solid var(--accent-gold); border-radius: 6px; padding: 24px; box-shadow: 0 8px 24px rgba(0,0,0,0.03);">
              <div class="founder-identity">
                <span class="founder-title" style="font-size: 0.65rem; letter-spacing: 0.18em; color: var(--accent-gold); font-weight: 700;">MANAGING DIRECTOR</span>
                <h3 class="founder-name" style="font-family: var(--font-serif-roman); font-size: 1.45rem; margin: 4px 0 8px; color: var(--text-primary);">Arjun Sharma</h3>
                <p class="founder-creds" style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.6;">18+ Years Directing Mega Infrastructure, Luxury High-Rises &amp; 5-Star Hospitality</p>
              </div>
              <div class="founder-fiduciary" style="margin-top: 16px; padding-top: 14px; border-top: 1px solid var(--border-hairline);">
                <span class="fiduciary-label" style="font-size: 0.62rem; letter-spacing: 0.15em; color: var(--text-muted); font-weight: 700;">DIRECTOR FIDUCIARY OATH</span>
                <p class="fiduciary-text" style="font-family: var(--font-serif-editorial); font-size: 1.05rem; font-style: italic; color: var(--text-primary); margin-top: 4px; line-height: 1.6;">
                  &ldquo;We protect the developer's capital on-site with mathematical rigor, contractual independence, and zero compromise on safety.&rdquo;
                </p>
              </div>
            </div>
          </div>

          <!-- Right: Strategic Narrative & Mission -->
          <div class="about-narrative-col reveal-item">
            <div class="section-label">
              <span class="label-number">02</span>
              <span class="label-text">THE PHILOSOPHY</span>
            </div>

            <h2 class="editorial-heading">
              Dedicated Client Representative on Every <span class="gold-italic">Job Site.</span>
            </h2>

            <p class="narrative-lead" style="font-size: 1.1rem; line-height: 1.8; color: var(--text-primary); margin-bottom: 20px;">
              Construction projects rarely falter on design vision; they falter in the unmonitored operational gaps between general contractors, subcontractor claims, and compromised site tolerances.
            </p>

            <p class="narrative-body" style="font-size: 0.95rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 32px;">
              At SunRise PMC, we operate with a singular allegiance: to the developer and asset owner. Based in Surat, Gujarat, our site engineering cadre enforces strict bill checking against Joint Measurement Sheets (JMS), master Critical Path Method (CPM) milestones, and rigorous laboratory batch testing.
            </p>

            <div class="pillars-open-layout">
              <div class="pillar-row" style="display: flex; gap: 20px; padding: 20px 0; border-top: 1px solid var(--border-hairline);">
                <div class="pillar-index" style="font-family: var(--font-serif-roman); font-size: 1rem; color: var(--accent-gold); font-weight: 700;">01</div>
                <div class="pillar-details">
                  <h4 class="pillar-title" style="font-family: var(--font-serif-roman); font-size: 1.15rem; color: var(--text-primary); margin-bottom: 6px;">Our Fiduciary Mission</h4>
                  <p class="pillar-copy" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">To be Western India's most trusted Project Management Consultancy, renowned for contractual clarity, uncompromising safety governance, and measurable capital preservation.</p>
                </div>
              </div>

              <div class="pillar-row" style="display: flex; gap: 20px; padding: 20px 0; border-top: 1px solid var(--border-hairline);">
                <div class="pillar-index" style="font-family: var(--font-serif-roman); font-size: 1rem; color: var(--accent-gold); font-weight: 700;">02</div>
                <div class="pillar-details">
                  <h4 class="pillar-title" style="font-family: var(--font-serif-roman); font-size: 1.15rem; color: var(--text-primary); margin-bottom: 6px;">Engineering Precision</h4>
                  <p class="pillar-copy" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">Every concrete pour, structural weld, and MEP riser passes mandatory checklists before sign-off. We deploy independent third-party lab testing for cement, rebar, and aggregate batches.</p>
                </div>
              </div>

              <div class="pillar-row" style="display: flex; gap: 20px; padding: 20px 0; border-top: 1px solid var(--border-hairline); border-bottom: 1px solid var(--border-hairline);">
                <div class="pillar-index" style="font-family: var(--font-serif-roman); font-size: 1rem; color: var(--accent-gold); font-weight: 700;">03</div>
                <div class="pillar-details">
                  <h4 class="pillar-title" style="font-family: var(--font-serif-roman); font-size: 1.15rem; color: var(--text-primary); margin-bottom: 6px;">Contractual &amp; Billing Independence</h4>
                  <p class="pillar-copy" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">Elimination of inflated contractor variation claims through item-rate BOQ reconciliation, forensic measurement verification, and strict penalty enforcement for unsanctioned delays.</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Creative Fiduciary Pillars (Bespoke SVG Luxury Line Icons - Zero Emojis) -->
    <section style="background: #FAFAF7; padding: clamp(70px, 9vw, 110px) 0; border-top: 1px solid var(--border-hairline); border-bottom: 1px solid var(--border-hairline);">
      <div class="container">
        
        <div class="section-intro text-center reveal-item">
          <div class="section-label center-label">
            <span class="label-number">03</span>
            <span class="label-text">THE FIDUCIARY ADVANTAGE</span>
          </div>
          <h2 class="editorial-heading">Built on Four Uncompromising Standards</h2>
          <p class="intro-subhead">
            Every SunRise PMC engagement is underpinned by independent governance, mathematical scheduling, and deep regional authority mastery.
          </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 24px; margin-top: 48px;">
          
          <!-- Pillar 1: Fiduciary Scale -->
          <div class="trust-card reveal-item" style="flex-direction: column; align-items: flex-start; padding: 32px 28px; background: #FFFFFF; border-radius: 8px; border: 1px solid rgba(0,0,0,0.08); box-shadow: 0 8px 30px rgba(0,0,0,0.03);">
            <div class="trust-icon" style="width: 48px; height: 48px; margin-bottom: 16px; background: rgba(158,122,42,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(158,122,42,0.2);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9E7A2A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3v18M3 7l9-4 9 4M6 10l-3 7h6l-3-7zm12 0l-3 7h6l-3-7zM2 21h20"/>
              </svg>
            </div>
            <h3 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin-bottom: 10px; color: var(--text-primary);">Sole Client Representation</h3>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
              We never take contractor kickbacks or broker fees. We act exclusively as the asset owner's fiduciary proxy on-site, safeguarding your capital without conflict of interest.
            </p>
          </div>

          <!-- Pillar 2: CPM Chronometer -->
          <div class="trust-card reveal-item" style="flex-direction: column; align-items: flex-start; padding: 32px 28px; background: #FFFFFF; border-radius: 8px; border: 1px solid rgba(0,0,0,0.08); box-shadow: 0 8px 30px rgba(0,0,0,0.03);">
            <div class="trust-icon" style="width: 48px; height: 48px; margin-bottom: 16px; background: rgba(158,122,42,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(158,122,42,0.2);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9E7A2A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="13" r="8"/>
                <path d="M12 9v4l2.5 2.5M10 2h4M12 2v3"/>
              </svg>
            </div>
            <h3 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin-bottom: 10px; color: var(--text-primary);">CPM Schedule Rigor</h3>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
              Master scheduling with Critical Path Method (CPM) and 3-week rolling look-ahead tracking ensures milestone slips are caught weeks before they impact handovers.
            </p>
          </div>

          <!-- Pillar 3: Fiduciary Shield -->
          <div class="trust-card reveal-item" style="flex-direction: column; align-items: flex-start; padding: 32px 28px; background: #FFFFFF; border-radius: 8px; border: 1px solid rgba(0,0,0,0.08); box-shadow: 0 8px 30px rgba(0,0,0,0.03);">
            <div class="trust-icon" style="width: 48px; height: 48px; margin-bottom: 16px; background: rgba(158,122,42,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(158,122,42,0.2);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9E7A2A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <path d="M9 12l2 2 4-4"/>
              </svg>
            </div>
            <h3 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin-bottom: 10px; color: var(--text-primary);">Forensic Bill Checking</h3>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
              Every contractor Running Account (RA) bill is physically verified against Joint Measurement Sheets before certification. Unapproved escalations are strictly disallowed.
            </p>
          </div>

          <!-- Pillar 4: Regional Authority Compass -->
          <div class="trust-card reveal-item" style="flex-direction: column; align-items: flex-start; padding: 32px 28px; background: #FFFFFF; border-radius: 8px; border: 1px solid rgba(0,0,0,0.08); box-shadow: 0 8px 30px rgba(0,0,0,0.03);">
            <div class="trust-icon" style="width: 48px; height: 48px; margin-bottom: 16px; background: rgba(158,122,42,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(158,122,42,0.2);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9E7A2A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9"/>
                <polygon points="12 3 15 9 21 12 15 15 12 21 9 15 3 12 9 9 12 3" fill="#9E7A2A" stroke="none"/>
              </svg>
            </div>
            <h3 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin-bottom: 10px; color: var(--text-primary);">Surat &amp; Gujarat Mastery</h3>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.7;">
              Deep familiarity with regional soil conditions, local contractor practices, SMC / SUDA building bylaws, and fire/statutory approvals speeds up project delivery.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Creative 18-Year Evolution Timeline (Storytelling) -->
    <section style="background: #FFFFFF; padding: clamp(70px, 9vw, 110px) 0;">
      <div class="container">
        
        <div class="section-intro text-center reveal-item">
          <div class="section-label center-label">
            <span class="label-number">04</span>
            <span class="label-text">18-YEAR CHRONOLOGY</span>
          </div>
          <h2 class="editorial-heading">The Evolution of SunRise PMC</h2>
          <p class="intro-subhead">
            A milestone journey from boutique site oversight to directing Western India's most prestigious commercial, diamond, and luxury residential landmarks.
          </p>
        </div>

        <div style="max-width: 960px; margin: 48px auto 0; position: relative;">
          <!-- Timeline spine -->
          <div style="position: absolute; top: 0; bottom: 0; left: clamp(16px, 4vw, 24px); width: 2px; background: linear-gradient(to bottom, var(--accent-gold), rgba(158,122,42,0.1));"></div>

          <!-- Event 1 -->
          <div class="reveal-item" style="display: flex; gap: clamp(20px, 4vw, 36px); margin-bottom: 40px; position: relative;">
            <div style="width: clamp(34px, 5vw, 50px); height: clamp(34px, 5vw, 50px); border-radius: 50%; background: #0D0F12; border: 2px solid var(--accent-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2;">
              <span style="font-size: 0.7rem; font-weight: 700; color: #D4AF37;">'08</span>
            </div>
            <div style="background: var(--bg-stone); border: 1px solid var(--border-hairline); border-radius: 6px; padding: 24px; flex: 1;">
              <span style="font-size: 0.68rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700;">2008 &bull; INCEPTION IN SURAT</span>
              <h4 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin: 6px 0 8px; color: var(--text-primary);">Founding the Independent Practice</h4>
              <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">
                SunRise PMC was founded with a singular conviction: to introduce structured engineering governance and honest fiduciary oversight to Surat's burgeoning real estate market.
              </p>
            </div>
          </div>

          <!-- Event 2 -->
          <div class="reveal-item" style="display: flex; gap: clamp(20px, 4vw, 36px); margin-bottom: 40px; position: relative;">
            <div style="width: clamp(34px, 5vw, 50px); height: clamp(34px, 5vw, 50px); border-radius: 50%; background: #0D0F12; border: 2px solid var(--accent-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2;">
              <span style="font-size: 0.7rem; font-weight: 700; color: #D4AF37;">'14</span>
            </div>
            <div style="background: var(--bg-stone); border: 1px solid var(--border-hairline); border-radius: 6px; padding: 24px; flex: 1;">
              <span style="font-size: 0.68rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700;">2014 &bull; INDUSTRIAL &amp; SEZ EXPANSION</span>
              <h4 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin: 6px 0 8px; color: var(--text-primary);">Diamond Processing &amp; High-Tech Complexes</h4>
              <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">
                Appointed for turnkey PMC across Surat's iconic diamond industrial complexes, including Ankit Gems, Ashwin Diamond, Charu Jewels, and Mohit Diamond, delivering vibration-damped cleanroom construction.
              </p>
            </div>
          </div>

          <!-- Event 3 -->
          <div class="reveal-item" style="display: flex; gap: clamp(20px, 4vw, 36px); margin-bottom: 40px; position: relative;">
            <div style="width: clamp(34px, 5vw, 50px); height: clamp(34px, 5vw, 50px); border-radius: 50%; background: #0D0F12; border: 2px solid var(--accent-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2;">
              <span style="font-size: 0.7rem; font-weight: 700; color: #D4AF37;">'19</span>
            </div>
            <div style="background: var(--bg-stone); border: 1px solid var(--border-hairline); border-radius: 6px; padding: 24px; flex: 1;">
              <span style="font-size: 0.68rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700;">2019 &bull; LUXURY HOSPITALITY LEADERSHIP</span>
              <h4 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin: 6px 0 8px; color: var(--text-primary);">5-Star Hotels &amp; Destination Resorts</h4>
              <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">
                Orchestrated the construction and commissioning of Hilton Garden Inn Surat (220 Keys), Vivanta Hotel, and Treat Hotels &amp; Resorts, meeting stringent global hospitality brand standards.
              </p>
            </div>
          </div>

          <!-- Event 4 -->
          <div class="reveal-item" style="display: flex; gap: clamp(20px, 4vw, 36px); margin-bottom: 40px; position: relative;">
            <div style="width: clamp(34px, 5vw, 50px); height: clamp(34px, 5vw, 50px); border-radius: 50%; background: #0D0F12; border: 2px solid var(--accent-gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2;">
              <span style="font-size: 0.7rem; font-weight: 700; color: #D4AF37;">'23</span>
            </div>
            <div style="background: var(--bg-stone); border: 1px solid var(--border-hairline); border-radius: 6px; padding: 24px; flex: 1;">
              <span style="font-size: 0.68rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700;">2023 &bull; TOWNSHIP &amp; HEALTHCARE BENCHMARKS</span>
              <h4 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin: 6px 0 8px; color: var(--text-primary);">Bharat City (2.4M Sq.Ft.) &amp; Specialized Hospitals</h4>
              <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">
                Overseeing multi-tower residential enclaves such as Bharat City, Bhawans Ultima, White Wings Torrance, alongside Om Hospital and Grand Marina Hospital.
              </p>
            </div>
          </div>

          <!-- Event 5 -->
          <div class="reveal-item" style="display: flex; gap: clamp(20px, 4vw, 36px); position: relative;">
            <div style="width: clamp(34px, 5vw, 50px); height: clamp(34px, 5vw, 50px); border-radius: 50%; background: var(--accent-gold); border: 2px solid #FFF; display: flex; align-items: center; justify-content: center; flex-shrink: 0; z-index: 2; box-shadow: 0 0 16px rgba(158,122,42,0.6);">
              <span style="font-size: 0.7rem; font-weight: 700; color: #FFF;">'26</span>
            </div>
            <div style="background: #FFFFFF; border: 1px solid var(--accent-gold); border-radius: 6px; padding: 24px; flex: 1; box-shadow: 0 10px 30px rgba(158,122,42,0.08);">
              <span style="font-size: 0.68rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700;">2026 &bull; DIGITAL SITE GOVERNANCE &amp; BEYOND</span>
              <h4 style="font-family: var(--font-serif-roman); font-size: 1.25rem; margin: 6px 0 8px; color: var(--text-primary);">&yen;1,500+ Cr Active Portfolio &amp; Forensic Audits</h4>
              <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.65;">
                Deploying digital QA/QC audits, clash detection, and forensic billing verification across Western India with 20+ landmark developments actively supervised.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Executive Call to Action Banner -->
    <section style="background: #0D0F12; color: #FFF; padding: clamp(70px, 8vw, 100px) 0; text-align: center; position: relative;">
      <div class="container reveal-item">
        <div class="section-label center-label">
          <span class="label-number" style="color: #D4AF37;">05</span>
          <span class="label-text" style="color: rgba(255,255,255,0.6);">ENGAGEMENT</span>
        </div>
        <h2 class="editorial-heading" style="color: #FFF; font-size: clamp(2.2rem, 4vw, 3.4rem); margin-bottom: 16px;">
          Let's Build Certainty on Your Next Project.
        </h2>
        <p style="color: rgba(255,255,255,0.75); max-width: 620px; margin: 0 auto 36px; line-height: 1.8; font-size: 1.05rem;">
          Schedule an executive constructability consultation or request a confidential site audit with our directors.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
          <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="btn-editorial btn-accent">Request Consultation</a>
          <a href="<?php echo esc_url(home_url("/projects/")); ?>" class="btn-editorial btn-outline" style="color:#FFF; border-color: rgba(255,255,255,0.3); background: rgba(255,255,255,0.06);">Explore Portfolio</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Editorial Minimalist Footer -->
  

<?php
get_footer();

<?php
/**
 * Template Name: Front Page Template
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
        <li><a href="#calculator" class="mobile-nav-item"><span>04</span> Scope Estimator</a></li>
        <li><a href="<?php echo esc_url(home_url("/contact/")); ?>" class="mobile-nav-item"><span>05</span> Contact & Surat Desk</a></li>
      </ul>
      <div class="mobile-contact-bar">
        <div class="mobile-contact-label">DIRECT PMC HOTLINE</div>
        <a href="tel:+919586000933" class="mobile-phone">+91 95860 00933</a>
        <div class="mobile-address">GL-2, Anand Avenue Commercial Complex, Ugat Junction, Surat</div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- 1. HERO SECTION WITH INTERACTIVE CANVAS -->
    <section id="hero" class="hero-section">
      <!-- Full-bleed interactive 30fps Canvas background -->
      <div class="hero-canvas-container" id="canvasContainer">
        <canvas id="heroCanvas" class="hero-canvas"></canvas>
        <div class="hero-canvas-scrim"></div>
      </div>

      <!-- Hidden canvas controls (functional but not visible) -->
      <input type="range" id="frameSlider" min="1" max="300" value="1" aria-label="Interactive timeline scrubber" style="display:none">
      <button id="togglePlayBtn" aria-label="Toggle playback" style="display:none"><span id="playIcon">⏸</span></button>
      <span id="canvasModeLabel" style="display:none">LIVE CINEMATIC LOOP</span>
      <span id="frameCounter" style="display:none">001</span>

      <div class="hero-inner container">
        <div class="hero-editorial-block">
          
          <div class="hero-eyebrow" id="heroEyebrow">
            <span class="eyebrow-line"></span>
            <span class="eyebrow-text">FIDUCIARY GOVERNANCE • SURAT & WESTERN INDIA</span>
          </div>

          <h1 class="hero-title" id="heroTitle">
            <span class="hero-line" data-line="1">Building</span>
            <span class="hero-line hero-line-accent" data-line="2">Certainty.</span>
            <span class="hero-line hero-line-serif" data-line="3">Delivering <em>Excellence.</em></span>
          </h1>

          <p class="hero-paragraph" id="heroPara">
            A specialized project management consultancy harmonizing architectural ambition with uncompromising commercial discipline. We oversee every square foot from groundbreaking to lifelong facility performance.
          </p>

          <div class="hero-actions" id="heroActions">
            <a href="#projects" class="btn-editorial btn-accent">
              <span>Explore Portfolio</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#calculator" class="btn-editorial btn-outline">
              <span>Calculate Scope</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
            </a>
          </div>

        </div>

        <!-- Right: Floating Trust Cards -->
        <div class="hero-trust-stack" id="heroTrustStack">
          <div class="trust-card trust-card-1">
            <div class="trust-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21h18M4 18h16M4 10l8-6 8 6M6 10v8M10 10v8M14 10v8M18 10v8"/>
              </svg>
            </div>
            <div class="trust-content">
              <div class="trust-num">20+</div>
              <div class="trust-label">Landmark Projects<br>Delivered</div>
            </div>
          </div>
          <div class="trust-card trust-card-2">
            <div class="trust-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21h18L3 3v18z"/>
                <path d="M7 17l2-2M11 17l2-2M15 17l2-2M7 13l2-2"/>
              </svg>
            </div>
            <div class="trust-content">
              <div class="trust-num">₹1,500+ Cr</div>
              <div class="trust-label">Managed Capital<br>Portfolio</div>
            </div>
          </div>
          <div class="trust-card trust-card-3">
            <div class="trust-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21h18M6 21V5l14-2v4L9 9v12M9 5h11M14 4v3"/>
              </svg>
            </div>
            <div class="trust-content">
              <div class="trust-num">18+ Yrs</div>
              <div class="trust-label">Engineering<br>Leadership</div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Floating Architectural Metrics Banner -->
    <div class="hero-metrics-strip" id="heroMetrics">
      <div class="container metrics-flex">
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="18">0</span><span class="gold-plus">+</span></div>
          <div class="metric-desc">Years Engineering Leadership</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="20">0</span><span class="gold-plus">+</span></div>
          <div class="metric-desc">Landmark Projects Delivered</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num">₹<span class="count-up" data-target="1500">0</span><span class="gold-plus">+</span> Cr</div>
          <div class="metric-desc">Managed Capital Portfolio</div>
        </div>
        <div class="metric-sep"></div>
        <div class="metric-block">
          <div class="metric-num"><span class="count-up" data-target="100">0</span><span class="gold-plus">%</span></div>
          <div class="metric-desc">Safety & Quality Audits Certified</div>
        </div>
      </div>
    </div>

    <!-- STORY BAR: The narrative bridge between hero and about -->
    <div class="story-marquee-bar">
      <div class="story-marquee-inner">
        <span>FORENSIC BUDGET CONTROL</span>
        <span class="story-dot">◆</span>
        <span>CPM SCHEDULING RIGOR</span>
        <span class="story-dot">◆</span>
        <span>ZERO-DEFECT QUALITY</span>
        <span class="story-dot">◆</span>
        <span>RESIDENT SITE ENGINEERS</span>
        <span class="story-dot">◆</span>
        <span>FIDUCIARY PROTECTION</span>
        <span class="story-dot">◆</span>
        <span>18+ YEARS EXCELLENCE</span>
        <span class="story-dot">◆</span>
        <span>FORENSIC BUDGET CONTROL</span>
        <span class="story-dot">◆</span>
        <span>CPM SCHEDULING RIGOR</span>
        <span class="story-dot">◆</span>
        <span>ZERO-DEFECT QUALITY</span>
        <span class="story-dot">◆</span>
        <span>RESIDENT SITE ENGINEERS</span>
        <span class="story-dot">◆</span>
        <span>FIDUCIARY PROTECTION</span>
        <span class="story-dot">◆</span>
        <span>18+ YEARS EXCELLENCE</span>
        <span class="story-dot">◆</span>
      </div>
    </div>

    <!-- 2. THE PRACTICE (ABOUT & PHILOSOPHY) -->
    <section id="about" class="about-section">
      <div class="container">
        
        <div class="about-editorial-layout">
          
          <!-- Left Column: Architectural Photo with coordinates -->
          <div class="about-media-col reveal-item">
            <div class="media-aspect-frame">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/SunRise-PMC-3-1-CQOhqJb-.png" alt="SunRise PMC Architectural Supervision" class="about-img" loading="lazy">
              <div class="media-coordinates">
                <span>LAT 21°10'12" N</span>
                <span class="coord-dot">•</span>
                <span>LON 72°49'44" E</span>
                <span class="coord-dot">•</span>
                <span class="coord-loc">SURAT, GUJARAT</span>
              </div>
            </div>
            
            <div class="founder-card-strip">
              <div class="founder-identity">
                <span class="founder-title">FOUNDER & MANAGING DIRECTOR</span>
                <h3 class="founder-name">Arjun Sharma</h3>
                <p class="founder-creds">18+ Years Directing Mega Infrastructure, Luxury High-Rises & Hospitality</p>
              </div>
              <div class="founder-fiduciary">
                <span class="fiduciary-label">FIDUCIARY OATH</span>
                <p class="fiduciary-text">“We protect the client's capital on-site with mathematical rigor and absolute independence.”</p>
              </div>
            </div>
          </div>

          <!-- Right Column: Editorial Text & 3 Pillars -->
          <div class="about-narrative-col reveal-item">
            <div class="section-label">
              <span class="label-number">01</span>
              <span class="label-text">THE DISCIPLINE</span>
            </div>

            <h2 class="editorial-heading">
              Where Engineering Discipline Meets <span class="gold-italic">Fiduciary Protection.</span>
            </h2>

            <p class="narrative-lead">
              Construction projects rarely falter on architectural blueprints; they falter in the unmonitored gaps between contractors, budget creep, and compromised site tolerances.
            </p>

            <p class="narrative-body">
              At SunRise PMC, we function as the owner’s unyielding advocate on the job site. Operating from Surat, Gujarat, our seasoned directors and resident site engineers introduce structural clarity, forensic bill checking, and CPM scheduling to Western India’s most prestigious developments.
            </p>

            <div class="pillars-open-layout">
              <div class="pillar-row">
                <div class="pillar-index">01.1</div>
                <div class="pillar-details">
                  <h4 class="pillar-title">Forensic Budget Control</h4>
                  <p class="pillar-copy">Pre-construction item-rate BOQ analysis, continuous cost-value reconciliation, and elimination of unapproved contractor claims.</p>
                </div>
              </div>

              <div class="pillar-row">
                <div class="pillar-index">01.2</div>
                <div class="pillar-details">
                  <h4 class="pillar-title">Critical Path Method (CPM) Rigor</h4>
                  <p class="pillar-copy">Milestone-level sequencing and variance modeling that identifies schedule drag weeks before it can impact the project baseline.</p>
                </div>
              </div>

              <div class="pillar-row">
                <div class="pillar-index">01.3</div>
                <div class="pillar-details">
                  <h4 class="pillar-title">Zero-Defect Quality Assurance</h4>
                  <p class="pillar-copy">Independent third-party lab testing of rebar, cement, concrete batches, and multi-tier structural pour sign-offs.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- 3. SERVICES (INTERACTIVE ARCHITECTURAL ACCORDION WITH LIVE PREVIEW) -->
    <section id="services" class="services-section">
      <div class="container">
        
        <div class="section-intro text-center reveal-item">
          <div class="section-label center-label">
            <span class="label-number">02</span>
            <span class="label-text">CORE DISCIPLINES</span>
          </div>
          <h2 class="editorial-heading">Eight Specialized Verticals. Complete Governance.</h2>
          <p class="intro-subhead">
            Select or hover over any discipline to inspect our on-site governance scope, deliverables, and methodology.
          </p>
        </div>

        <div class="services-interactive-stage reveal-item">
          
          <!-- Left: Disciplines Accordion List -->
          <div class="services-list" id="servicesList">
            
            <!-- 1. Planning -->
            <div class="service-entry active" data-service="1" data-title="Project Planning & Scheduling" data-img="./public/images/design-management.png" data-scope="Master scheduling using Critical Path Method (CPM), baseline freeze, milestone decomposition, and continuous look-ahead tracking." data-d1="Master Baseline CPM Scheduling" data-d2="Weekly Micro-Progress Variance Models" data-d3="Proactive Delay Recovery Action Plans">
              <div class="entry-header">
                <span class="entry-num">01</span>
                <h3 class="entry-name">Project Planning & Scheduling</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Master CPM scheduling, milestone freeze, and early delay warnings.</p>
            </div>

            <!-- 2. Cost Management -->
            <div class="service-entry" data-service="2" data-title="Cost & Budget Management" data-img="./public/images/cost-management.png" data-scope="Detailed quantity surveying, initial BOQ rate formulation, cash flow forecasts, value engineering, and variance reconciliation." data-d1="Comprehensive BOQ & Rate Analysis" data-d2="Value Engineering Recommendations" data-d3="Real-Time Cost Value Reconciliations (CVR)">
              <div class="entry-header">
                <span class="entry-num">02</span>
                <h3 class="entry-name">Cost & Budget Management</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Detailed budgeting, value engineering, and cash flow governance.</p>
            </div>

            <!-- 3. Design Coordination -->
            <div class="service-entry" data-service="3" data-title="Design Coordination & BIM" data-img="./public/images/design-management.png" data-scope="Inter-disciplinary clash detection across architectural, structural, MEP, and façade drawings to prevent costly on-site demolition." data-d1="Multi-Discipline Clash Detection" data-d2="RFI Formal Resolution Tracking" data-d3="Good-For-Construction (GFC) Certification">
              <div class="entry-header">
                <span class="entry-num">03</span>
                <h3 class="entry-name">Design Coordination</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Harmonizing architectural, structural, and MEP engineering packages.</p>
            </div>

            <!-- 4. Construction & Site Management -->
            <div class="service-entry" data-service="4" data-title="Construction & Site Management" data-img="./public/images/Frame-16.png" data-scope="Full-time resident site engineers driving contractor orchestration, daily progress logs, and strict material inventory control." data-d1="Full-Time Resident Site Engineers" data-d2="Contractor Sequencing & Labor Monitoring" data-d3="Material Wastage & Batch Inventory Audits">
              <div class="entry-header">
                <span class="entry-num">04</span>
                <h3 class="entry-name">Construction & Site Management</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">On-site resident engineering teams enforcing daily execution benchmarks.</p>
            </div>

            <!-- 5. Quality Management -->
            <div class="service-entry" data-service="5" data-title="Quality Management (QA/QC)" data-img="./public/images/quality.png" data-scope="Project Quality Assurance Manuals (PQAP), third-party lab testing of raw materials, and multi-tier stage pour inspections." data-d1="Mandatory Material Lab Certifications" data-d2="Stage-wise Pour & Formwork Checklists" data-d3="Zero-Defect Snagging Registers">
              <div class="entry-header">
                <span class="entry-num">05</span>
                <h3 class="entry-name">Quality Management (QA/QC)</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Rigorous laboratory testing, tolerances audit, and pour certifications.</p>
            </div>

            <!-- 6. Safety & Risk -->
            <div class="service-entry" data-service="6" data-title="Safety & Risk Management (EHS)" data-img="./public/images/safety.png" data-scope="Zero-tolerance Environment, Health & Safety (EHS) policies, periodic hazard identification, and live vulnerability matrices." data-d1="Site-Wide EHS Rulebooks & Drills" data-d2="Hazard Identification & Risk Mitigation (HIRA)" data-d3="Daily Safety Toolbox Briefings">
              <div class="entry-header">
                <span class="entry-num">06</span>
                <h3 class="entry-name">Safety & Risk Management</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Zero-harm site governance, hazard mitigation, and safety compliance.</p>
            </div>

            <!-- 7. AMC Management -->
            <div class="service-entry" data-service="7" data-title="Annual Maintenance Contract (AMC)" data-img="./public/images/amc-2.png" data-scope="Post-handover lifecycle management, electromechanical maintenance contracts, preventive servicing schedules, and asset longevity." data-d1="Electromechanical Facility Audits" data-d2="Vendor SLA Enforcement & Renewals" data-d3="Preventive Maintenance Calendar Setup">
              <div class="entry-header">
                <span class="entry-num">07</span>
                <h3 class="entry-name">Annual Maintenance Contract (AMC)</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Post-occupancy MEP audits, preventive maintenance, and asset durability.</p>
            </div>

            <!-- 8. Commercial & Billing Audit -->
            <div class="service-entry" data-service="8" data-title="Billing & Commercial Audit" data-img="./public/images/cost-management.png" data-scope="Independent contractor bill verification, Joint Measurement Sheets (JMS), reconciliation against physical work, and final settlements." data-d1="Interim RA Bill Joint Measurement Audits" data-d2="Variation & Extra-Item Negotiations" data-d3="Forensic Final Account Closures">
              <div class="entry-header">
                <span class="entry-num">08</span>
                <h3 class="entry-name">Billing & Commercial Audit</h3>
                <span class="entry-arrow">↗</span>
              </div>
              <p class="entry-brief">Forensic bill verification, joint measurements, and final claims clearance.</p>
            </div>

          </div>

          <!-- Right: Dynamic Service Spotlight Dossier -->
          <div class="service-preview-panel" id="servicePreviewPanel">
            <div class="preview-panel-inner">
              <div class="preview-badge" id="previewBadge">DISCIPLINE 01</div>
              <h3 class="preview-title" id="previewTitle">Project Planning & Scheduling</h3>
              <p class="preview-scope" id="previewScope">
                Master scheduling using Critical Path Method (CPM), baseline freeze, milestone decomposition, and continuous look-ahead tracking.
              </p>
              
              <div class="preview-deliverables-title">CORE DELIVERABLES</div>
              <ul class="preview-deliverables-list" id="previewDeliverables">
                <li>Master Baseline CPM Scheduling</li>
                <li>Weekly Micro-Progress Variance Models</li>
                <li>Proactive Delay Recovery Action Plans</li>
              </ul>

              <div class="preview-action-row">
                <a href="#contact" class="btn-editorial btn-accent">Request Scope Proposal</a>
                <a href="https://wa.me/919586000933?text=Inquiring%20about%20Service%20Scope" target="_blank" class="btn-editorial btn-outline">WhatsApp Director</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

        <!-- 4. PROJECTS PORTFOLIO (3D AWARDS-WINNING LANDMARKS CAROUSEL) -->
    <section id="projects" class="projects-section projects-carousel-section" data-lenis-prevent>
      <div class="container">
        
        <div class="portfolio-header reveal-item">
          <div>
            <div class="section-label">
              <span class="label-number">03</span>
              <span class="label-text">LANDMARK RECORD</span>
            </div>
            <h2 class="editorial-heading">Completed &amp; Active Landmark Portfolio.</h2>
            <p class="intro-subhead" style="margin-left: 0; text-align: left;">
              Residential high-rises, commercial and diamond processing complexes, 5-star hospitality, and specialized healthcare institutions across Western India.
            </p>
          </div>

          <!-- Sector Filter Tabs -->
          <div class="portfolio-filters" role="tablist">
            <button class="filter-tab active" data-filter="all">All Landmarks</button>
            <button class="filter-tab" data-filter="hospitality">Hospitality</button>
            <button class="filter-tab" data-filter="residential">Residential</button>
            <button class="filter-tab" data-filter="commercial">Commercial &amp; Gems</button>
            <button class="filter-tab" data-filter="institutional">Healthcare</button>
          </div>
        </div>

        <!-- 3D Award-Winning Stage -->
        <div class="carousel-3d-wrapper" id="carousel3DWrapper">
          <div class="carousel-3d-stage" id="carousel3DStage">
            <div class="carousel-3d-track" id="carousel3DTrack">

              <!-- 1. Hilton Garden Inn -->
              <div class="carousel-card-3d project-entry" data-index="0" data-category="hospitality" data-title="Hilton Garden Inn" data-type="5-Star Hospitality" data-scale="220 Luxury Keys" data-location="Surat, Gujarat" data-img="./public/images/hilton-garden-inn.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hilton-garden-inn-CSYm6uYZ.png" alt="Hilton Garden Inn" loading="eager">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">5-STAR HOSPITALITY</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">220 Luxury Keys</span>
                  </div>
                  <h3 class="card-3d-title">Hilton Garden Inn</h3>
                  <p class="card-3d-desc entry-desc">International brand standard compliance, acoustic isolation, and intricate MEP execution.</p>
                </div>
              </div>

              <!-- 2. Bharat City -->
              <div class="carousel-card-3d project-entry" data-index="1" data-category="residential" data-title="Bharat City" data-type="Residential Township" data-scale="2,400,000 Sq.Ft." data-location="Surat, Gujarat" data-img="./public/images/Frame-15.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-15-DuquAy3n.png" alt="Bharat City" loading="eager">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">RESIDENTIAL TOWNSHIP</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">2,400,000 Sq.Ft.</span>
                  </div>
                  <h3 class="card-3d-title">Bharat City</h3>
                  <p class="card-3d-desc entry-desc">Mega residential high-rise township with extensive social infrastructure and podium engineering.</p>
                </div>
              </div>

              <!-- 3. Vivanta Hotel -->
              <div class="carousel-card-3d project-entry" data-index="2" data-category="hospitality" data-title="Vivanta Hotel" data-type="Luxury Hotel" data-scale="Premium Keys &amp; Suites" data-location="Gujarat" data-img="./public/images/vivantahotel.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vivantahotel-C4y0-sb6.png" alt="Vivanta Hotel" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">LUXURY HOSPITALITY</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">GUJARAT</span>
                    <span class="card-3d-scale">Premium Suites</span>
                  </div>
                  <h3 class="card-3d-title">Vivanta Hotel</h3>
                  <p class="card-3d-desc entry-desc">High-specification finishing, acoustic testing, and fast-track structural commissioning.</p>
                </div>
              </div>

              <!-- 4. Charu Jewels -->
              <div class="carousel-card-3d project-entry" data-index="3" data-category="commercial" data-title="Charu Jewels" data-type="Luxury Commercial Landmark" data-scale="Bespoke Commercial" data-location="Surat" data-img="./public/images/Frame-47-1-1.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-47-1-1-DZYVyxY4.png" alt="Charu Jewels" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">LUXURY COMMERCIAL</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">Flagship Commercial</span>
                  </div>
                  <h3 class="card-3d-title">Charu Jewels</h3>
                  <p class="card-3d-desc entry-desc">Architectural glass façade, reinforced security vaulting, and precision MEP integration.</p>
                </div>
              </div>

              <!-- 5. Bhawans Ultima -->
              <div class="carousel-card-3d project-entry" data-index="4" data-category="residential" data-title="Bhawans Ultima" data-type="Premium High-Rise Enclave" data-scale="Multi-Tower Complex" data-location="Surat" data-img="./public/images/Frame-16.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-16-5VywjR-Q.png" alt="Bhawans Ultima" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">HIGH-RISE TOWERS</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">Multi-Tower Complex</span>
                  </div>
                  <h3 class="card-3d-title">Bhawans Ultima</h3>
                  <p class="card-3d-desc entry-desc">Multi-tower residential enclave delivering turnkey PMC from deep piling to homeowner handover.</p>
                </div>
              </div>

              <!-- 6. Ankit Gems Hub -->
              <div class="carousel-card-3d project-entry" data-index="5" data-category="commercial" data-title="Ankit Gems" data-type="Diamond Manufacturing Complex" data-scale="Specialized Industrial Hub" data-location="Surat SEZ" data-img="./public/images/Frame-20.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-20-BmiOIiuX.png" alt="Ankit Gems" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">DIAMOND &amp; INDUSTRIAL</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT SEZ</span>
                    <span class="card-3d-scale">Specialized Industrial</span>
                  </div>
                  <h3 class="card-3d-title">Ankit Gems Hub</h3>
                  <p class="card-3d-desc entry-desc">Heavy vibration-damped industrial slabs and high-security cleanroom facilities.</p>
                </div>
              </div>

              <!-- 7. Apple Children Hospital -->
              <div class="carousel-card-3d project-entry" data-index="6" data-category="institutional" data-title="Apple Children Hospital" data-type="Specialized Healthcare" data-scale="Tertiary Pediatric Facility" data-location="Surat" data-img="./public/images/apple-children-hospital.png">
                <div class="card-3d-media">
                  <img src="./public/images/apple-children-hospital.png" alt="Apple Children Hospital" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">HEALTHCARE FACILITY</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">Pediatric Care Center</span>
                  </div>
                  <h3 class="card-3d-title">Apple Children Hospital</h3>
                  <p class="card-3d-desc entry-desc">Specialized medical gas distribution, negative-pressure isolation wards, and uninterruptible power.</p>
                </div>
              </div>

              <!-- 8. Mohit Diamond -->
              <div class="carousel-card-3d project-entry" data-index="7" data-category="commercial" data-title="Mohit Diamond" data-type="Industrial Diamond Facility" data-scale="Industrial Facility" data-location="Surat" data-img="./public/images/Frame-46.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-46-WnR6efRJ.png" alt="Mohit Diamond" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">INDUSTRIAL FACILITY</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">High-Tech Processing</span>
                  </div>
                  <h3 class="card-3d-title">Mohit Diamond</h3>
                  <p class="card-3d-desc entry-desc">Precision optical cutting facility with customized cleanroom airflow and vibration mitigation.</p>
                </div>
              </div>

              <!-- 9. White Wings Torrance -->
              <div class="carousel-card-3d project-entry" data-index="8" data-category="residential" data-title="White Wings Torrance" data-type="Signature Luxury Towers" data-scale="Gated High-Rise" data-location="Surat" data-img="./public/images/Frame-18.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-18-DzJijzYY.png" alt="White Wings Torrance" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">LUXURY RESIDENTIAL</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">Signature Enclave</span>
                  </div>
                  <h3 class="card-3d-title">White Wings Torrance</h3>
                  <p class="card-3d-desc entry-desc">Curvilinear balconies, advanced formwork shuttering, and high-velocity wind load resistance.</p>
                </div>
              </div>

              <!-- 10. Ginger Hotel -->
              <div class="carousel-card-3d project-entry" data-index="9" data-category="hospitality" data-title="Ginger Hotel" data-type="Business Hospitality" data-scale="150 Keys" data-location="Surat, Gujarat" data-img="./public/images/Ginger-hotel.png">
                <div class="card-3d-media">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Ginger-hotel-BxGIpSzh.png" alt="Ginger Hotel" loading="lazy">
                  <div class="card-3d-gradient"></div>
                  <div class="card-3d-badge">BUSINESS HOSPITALITY</div>
                  <div class="card-3d-action-pill"><span>VIEW DOSSIER</span> &#8599;</div>
                </div>
                <div class="card-3d-body">
                  <div class="card-3d-meta">
                    <span class="card-3d-loc">SURAT, GUJARAT</span>
                    <span class="card-3d-scale">150 Keys</span>
                  </div>
                  <h3 class="card-3d-title">Ginger Hotel</h3>
                  <p class="card-3d-desc entry-desc">Standardized hospitality delivery with optimized structural and MEP lifecycle costs.</p>
                </div>
              </div>

            </div>
          </div>

          <!-- Carousel Controls -->
          <div class="carousel-3d-controls">
            <button class="carousel-btn prev-btn" id="carouselPrevBtn" aria-label="Previous Landmark Project">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </button>
            
            <div class="carousel-progress-wrap">
              <div class="carousel-counter">
                <span class="current-index" id="carouselCurrentNum">01</span>
                <span class="counter-sep">/</span>
                <span class="total-index" id="carouselTotalNum">10</span>
              </div>
              <div class="carousel-progress-track">
                <div class="carousel-progress-bar" id="carouselProgressBar"></div>
              </div>
            </div>

            <button class="carousel-btn next-btn" id="carouselNextBtn" aria-label="Next Landmark Project">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>

          <!-- Archive Callout Banner -->
          <div class="carousel-archive-callout">
            <div class="callout-text">
              <span>Verified Architectural Track Record</span>
              <strong>Seeking comprehensive project dossiers and engineering details?</strong>
            </div>
            <a href="<?php echo esc_url(home_url("/projects/")); ?>" class="btn-editorial btn-accent">
              <span>Explore Full Portfolio Archive</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!-- 5. INTERACTIVE PMC SCOPE ESTIMATOR & CALCULATOR -->
    <section id="calculator" class="calculator-section">
      <div class="container">
        
        <div class="calculator-card reveal-item">
          <div class="calc-header">
            <div class="section-label">
              <span class="label-number">04</span>
              <span class="label-text">INTERACTIVE ESTIMATOR</span>
            </div>
            <h2 class="editorial-heading">Estimate PMC Governance Scope</h2>
            <p class="calc-intro">
              Adjust your project typology and estimated built-up area to preview recommended on-site engineering team allocation and estimated cost protection.
            </p>
          </div>

          <div class="calc-body-grid">
            
            <div class="calc-inputs">
              <div class="calc-input-group">
                <label for="typologySelect" class="calc-label">1. PROJECT TYPOLOGY</label>
                <select id="typologySelect" class="calc-select">
                  <option value="residential">Residential High-Rise / Township</option>
                  <option value="commercial">Commercial / Diamond & Industrial Hub</option>
                  <option value="hospitality">Luxury Hotel & Resort</option>
                  <option value="healthcare">Healthcare & Hospital Facility</option>
                  <option value="institutional">Educational / Institutional Campus</option>
                </select>
              </div>

              <div class="calc-input-group">
                <div class="slider-header">
                  <label for="areaSlider" class="calc-label">2. ESTIMATED BUILT-UP AREA</label>
                  <span class="slider-value-display" id="areaValueDisplay">250,000 Sq.Ft.</span>
                </div>
                <input type="range" id="areaSlider" min="50000" max="2000000" step="25000" value="250000" class="calc-slider">
                <div class="slider-range-labels">
                  <span>50K Sq.Ft.</span>
                  <span>1 Million Sq.Ft.</span>
                  <span>2M+ Sq.Ft.</span>
                </div>
              </div>
            </div>

            <div class="calc-results-panel">
              <div class="result-tile">
                <span class="tile-label">RECOMMENDED SITE TEAM</span>
                <span class="tile-val" id="teamAllocVal">4 - 6 Resident Engineers</span>
                <span class="tile-sub">1 Project Lead, 2 Site QC, 1 Billing Auditor</span>
              </div>
              <div class="result-tile">
                <span class="tile-label">PROJECT TIMELINE ESTIMATE</span>
                <span class="tile-val" id="timelineVal">24 - 28 Months</span>
                <span class="tile-sub">Milestone Baseline via CPM Scheduling</span>
              </div>
              <div class="result-tile highlight-tile">
                <span class="tile-label">ESTIMATED VALUE ENG. SAVINGS</span>
                <span class="tile-val" id="savingsVal">₹1.8 - 2.5 Cr</span>
                <span class="tile-sub">Achieved through bill forensic audits & rate optimization</span>
              </div>

              <a href="#contact" class="btn-editorial btn-accent btn-full">
                <span>Request Custom Project Audit</span>
              </a>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- 6. DISTINGUISHED PARTNERS & CLIENTS -->
    <section id="clients" class="clients-section">
      <div class="container text-center">
        
        <div class="section-label center-label reveal-item">
          <span class="label-number">05</span>
          <span class="label-text">PROVEN TRUST</span>
        </div>
        <h2 class="editorial-heading reveal-item">Institutions, Developers & Conglomerates.</h2>
        <p class="intro-subhead reveal-item">
          Entrusted with capital management by India's most demanding developers and organizations.
        </p>

        <!-- Seamless Marquee -->
        <div class="marquee-strip reveal-item">
          <div class="marquee-track" id="marqueeTrack">
            <!-- Set 1 -->
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hilton-garden-inn-CSYm6uYZ.png" alt="Hilton"></div>
            <div class="marquee-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUoAAAB0CAMAAADU8IteAAAAYFBMVEVHcEwfDBkfDRkeDBkfDRkfDRl5Dj0fCxofDhkfDRgfDRkfDRkfDBkfDBgfDRkgDRceDRntDG/tDG7tC27tC20fDRgeDRgfDRntDG7tC23tDG7uDG/uDG7tDG4fDRntDG7p0gsAAAAAHnRSTlMAkeSy0nEKLyBh88NSP4MTolDY8Ww4S0SfM4gesMTK6CCRAAAKTUlEQVR42uyb25KkrBaEEQVB8HCjdcf7P+YebOkMe7VmBdO9Y/4I86Ki2kEOH6xFKlPq0Q9q0qmocepWW0hZelIfil061Hm1yy2pSJv3Gg5RneWmMOT726iu5ZYhfSjM7zSyqV3oHtOkvmhcuiGlQTe9utTc4m6mzK4tfUfXWquK+jIzTjGtuZgAblIWp7R+TqNVN5pzlxt1KKR3taiTLCYBtUnZY/TmLZTayvFsChrfRtmjW5BPCepuWAJLq86SU9OrQ4NemrP0R0PNWcvQqZNagfl7xaPjbw3eny/sGr9p1fDUktLwlZUbDjyvLYhOX41uYShdWaLBysWR1cjF/O0ET6PP7G9Sj067VkW0YFFeoMRK1YrIagxBZIzCqqcokZo4SrcqhrIo2ou4dRoQvpHhs5s1D+j1BUr0TkydDGWZBVzaNcylueUWpS6J2XOUEEd5kXXCZwz7W0ZZs6JpZ2Yo0TDPu62M+V0T/nJ3KLu17OOvX0XZnYYZbnPhwgKl5IFFMZQIh17dafwGgD3IOBEFFyjVdqAc+l9EOZ73kihGLJBc5wBU0TOUWRPJFyDxRf7LjY3okqjAFxvrfg9l+yWL6FvXEFD6rkxQBKXIeJAsY24CCY6BzMUE4/RLKB3WGamS+yGMKxKU53xhiBOy6qyX6ETGRVCWxlKwv4SyQfYjiYf7ITghxVByP4Ss2LBAUnsqHAlK28Kq/yxKmcABd/gLPzRjmRGUyBexxglp+2WbZ8nWZhwCSD1KTsa95YcceTYhKLkfAiISSEBOUKq52EtTj5I7IdF2rR+ycEIUJfdDL+GExGQiuiaCEo+bKf48yg0JXDi5Oj/kAYagJH4IGFggYXuidayF5ViLkjshGVXcD3EnxFHO0g+JXMM2PhTl0xFh1X8AJV9hvt4PrYgegpL4IeyAvHkQ4yvbwKpXoeROiDsQSIMLcUIUJfwQcUI8KMZSP2HcSKtej5LvxtM7fqglzyYEJfFDGB0PJKQlhlJa9XqUPIGDCJ0B5oQ4SgRsIE6IGAikJYrShoRxV6AkkUqaZ3lBOiGOkvuhDXfQaYQf4mOZYdWrUZIETvyQfA1hqRPiKBEbdU5IblK8GgerXoGSuBoSW9RD4a6gCEryPrnCCYkb6Iz0sOoVKIkTIomHvZrBWo4cJUl/FU5IQGNXx2Iv1wqUZATEh5DnTXRaK4aSz6l8Q8UDCY+ZDKW06vUoeQLnfsjDD8l9n6Pkfog7IZKWCEpY9bkCJU/gkgt/N8edEEe5wQ9B+toJBXOhFl1iKGHV7V+j1AdKcyEtenB55Ae8i6pAic2EOaGUuBqCUlj11taiRLLg2rgfok6Io0SEEABTYkKXOEpY9VqUyE9cLX1t6YUTqkFp4YfEwZc087G/1AtpiaKEVZ8qUMoE3l9ruq17hS3B9hkZSvr8JI5j2SMm5SYvSavuK1FyJ8T9EJb1izshjhLHNdVOSPohjhJWfatAyZyQ2JG5HwIMQ1Hy56d6JwQ/xFFKq16HkjshTgeZy+HZZOYoyZgCtvSFBBI/ouQosftqV4OSn2aTmMWiRe0O2YCi5M9PHmXJ0QVJSxQlrPpUhZIncCyVjb62XEuAur9B6WGY93kJ/ECNP6ZxlLDqqQ4lT+BIPHRZ6l7ZBoMkKNmyXGblOhQlrzVpWuIoVVuNkidw4rqlL9ND/pgJyrK3sh1Af9tnwwMJaLQlKIVVr0XZIoGzxCOWpfRlOMGj4TuxMkWLtC34B6LpXMxqeH9I/KqBhOn8/ds9gxuZuvtic3OMcGjuOjub4t+mu2JrwK97rioYoiWzv+3zG8ZTpd1dPOCHRYO/qP1VArDtFdQ36VC3EpCzob94sv3mfSQVvfyntvsGx+j9JpvbPESSZe8PzSrL+UOOZNjod4lsjlpQb5EXlzkC9ejRo0ePHj169OjRo0ePHj169OjRo0ePHj36v2mOTmX1Ue2y0ZjNfhwNFFmlxpi1KqXGURU5P5H3/2uMscf3P9rvtpsxKyr5/P6KceuP7mSV8i9jXuqfV5/8caCvsqJuvQ86d3xtmiak5c+nVWtqpz/KuEOnDpmh8VPXn9C1XWfw55yCabTeSbkUchU+f+2CMe2isqah8aYLbieWFtMM+3ffNI0e/nyYfDbdGbO06l/XGeWWdhBTOgCZ5I6z8bIWgXLd77SzgvrBq3lyWLa5iO0GWxoqVeQLbm92yJxt0PlKzM26IZRiWu1a9Efxf11nlPoYhg4cpZGH2k2hAJTHxJxQpgYFpqMXU0Gp2vQFpV7Uf0JAuRM7onNKjqOU/yG2vUDpziiHUgzLP2igHP7XrtltJwoDATiBNCCgYBItv877v+VmaNIxuOfosRdr1/kulEICnq8zk9jOVqXS4jdAKlc7p9gW1txVWVbVtjFBVu2tSo0hnqiUsdGAtMlL+53gklQG3/VZ/AKKS90h6kLBiHXwY6MyQ0glssfmy1IQnznm6anbkUrZNHXefj2oyjxlaGhRjfCojMITVX40jZKaVFIT9y9oAfBVao/kpDJk+p2o9Oidum5Rktm580a6gyaV+UFVLYV/pJAVWhf1RqU8ZEoIUhko/XApXp1Ngu8fT/AwQIrA2c8pK6WrNknw00XSg4hSXdqrJaaLCb6jYXWWNOu9/BJOKmNeI/LOskOomiqgFt6E6pJaibrKW5U4cn9VnJWKy47KNglOv6gXJ1EZa5eucvGoyjxR6cXtUpWY5X9XWeK1jgoKqsSXw99V7sWLk6o8VRJN5lW5Vfl5o7JpVyFnagaXmLdVVt5shppEZdvgi6ppR1Vmtb7aVxaJSo3zdK3Eq5OqFCelDjKrC5GqLC4q93ysVa325Ot3TJlX/hSFZaaqXVlXhzJRqTsc1V6y3CP9Ua1kl9WtQHZZfuiqrhVBJV7OmkRlrjqZ1S9fKoUuQv9jEd2ez/Sp20KLcBkp1wkreHRqPnXaG7nX+HZqtzffJ7cQ5fUz/F3a9GlFkX6k9rMpBMMwDMMwDMMwDMMwDMMwDMMw/z+DQ46TCEzODSKi12Pi6K45isjU9/EHmuom8VZMANYYA7BEaQtYLQIOUh2LRQDAIr0IaGMBNi41nnkrjgAajc5gg8sBYIw6bDhKMdBvbzIsMLNKCIH17cJbDbE42ukhlbMRDqxmlUEbWBHDMqia7CjuqYzBO3lzrDKWRYhh1QNM67vV91TG/F5PskqKysBkYV6j04mHVM7ma75mlTd+RoAhGLqjkhanwatjlYjDtYbkwOKvHO+ppPz2WOjfXuXo6XEvRDjvYVnEQypj9PZg317l7DEA9pjYAhjuqKT8jnca3l2lQAYTTJBhcV8l5TcqhZFVIoOFORHhHlQ5W/eFAcMq45ecVMRjKrX9BmBglcgI8ERUYn7TnJFVIj2YZ1TONGsBwyrDqvFEgmugWQ5gYJVCz2CnJ6LSAdmbrjN8ekeVR89owJCTB1VSflOGv7NK88Xs0j9GGHOrkvSNNG4UhDMGI5t27MzPcFOMUOaHLLZ3bgHLQfljptEAmP6f/b/xD4CFu/FarqfvAAAAAElFTkSuQmCC" alt="Vivanta"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ginger-D0WCzC4j.png" alt="Ginger"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ongc-Duno_EZ6.png" alt="ONGC"></div>
            <div class="marquee-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADyCAMAAABTYShiAAAAPFBMVEVHcEz0chXybxPycRUNiNTwbBENiNPzcBUOh9INhtHzcRT0cRX0cBb0cRXzcRQNiNMMh9MMiNP0chYOiNNgLjESAAAAEnRSTlMAwyxCrBbNnGclW92E9G/oQJEsEBC6AAAJNklEQVR42u3d6XqbvBYFYA0IgSZAvv97PfUH9jYacZ86x9LO6p8mdfLkZaHNUNshv/nNb340nGANNwRrKFo692jpFC2de7R0ipbOPVo6RUtnHi2doqUzj5Yu0dKZR0uXO90RdGEebevSY22debStS4+1debRti491taZR0uXaOnCoqVLj5UuLFq69FjpwqKlS4+VLixauvRY6cKipRuPlS4sWrrxzdPXaf270tunj7fbbdym+e3Sm6evtyPL8E79wrZPH28vWcZtvVp68/T1FuUKX9j26eMtkfu6n+dy6c3T15R8IH8y3JYhW7+w7dOHZOmwTTKz3/jm6aXSIeMQ8IVtn54sfb2v9BskPvQ53zy9WHqch13oDujDUi0dMkLp7dPvyGkbA2CtdKL7oO/tT8PyTukd0aH+HbiVS++Nvte/XSm9S/qeKUWfnqX3TIfFD1mg9L7psPjj0hHQj8U/LHHpdfpMusg8DUu+dIh6nRbLMHXCf0T5S62PcM+nm+gCXSUPEePWR/3KX2p9jC/7mq9fl+iqckHYdJS/1PqYOw9eh2YXvy7SVa50uCBsdvErX4yr3vppd/Frf6X1uVD6keYOfcpX6IXSp8w2GSfSQnSNXi89ThN05at0uOwrlw5ZSAuhVXpw3h8At35L9ypx1YujdK8yV72tl879u3TI3HvpOTos/m5LB3qWv25jl6XX6PGhbyMNhPt/RofZvzRxFUPfptezNnEGz/01eoehaOnco6UnStcSBT1RumUOBT1ROicKA50l78JxDPS4dEkIEQjocemU3GP7p0ela0Hu0d3TWTzcj03SPV3mgLJ3Osv+x5rpnS7j4X5EdU5n0XB/hndOl9Fwf4b1TWfxcIf0TZclm+6ZzopPCaQ902ViuENkx3SWGu4Q0zFdpoY7xPVLFzY13CGqX7qssFi39Op7LIlu6TIz3CG2U/pr6fTa04p6+Q0gMjfcIbTP1oXNDXeI7LN1eaFM02XrL6UbkovqsnWTH+4Q3mPrUDotParH1k1puEM6bF1YGO6l6P5aNxd7pN3RhYXhXozsjm5guJdjeqMLC8O9HNcb3cBwr4R3RhcWhnslrDO6uX6QFp3RLQz3amxXdAfDvR7aE13oO0IThHQHw/1CTE90DcP9QlxHdPfeFZjqiK5huF8J74fuYLhfiuiHrr2ngrwR2wvdwXC/GN0LXaeHu5BSGiVIIrQTuvNeFY7ekpEoshO69qa4oK0jYUwfdOVl7bwlsqssfW7i9XtHdGa400KxPEOfltttaeLFuvcoDfKszgaPYWn61tALlf9Ec5Kmc8YYdzR9qzJNb+qVykSp2gNs6r6VTtHX25E21rsitTCbqJ22TxekHpVY7TJFn9va4a9Exgc4k6KTqa0xdyEs/p8Jd6bDiG/p4Ha5dhEuAqBD5jZemH89PLqJw77jRFZ+PnehlvccThHRp58NnF78UKB7G9KX249m/v/RNV46xUuXX0EvzKbneILQ4BPa75FBtKfwJXsojDliQvpQyvj6y2T+SebKiUh80cVkeCnycJFTOPVei4DJCUQF9ELm8ztQDSv5UARXyikuUnS+O2mNrjR8ZYbOr9LX4RZm/ASeSe2PaBnSGYUFm6QD/AjL08VF+nZLZZj/GRlKtT6MjJReF+niSZdpejBc2ctp7H9/wLXmht94f/Tx8IxmXpN/SCJir7lAFxaKKtBhZ7YFuk60Pu6u7XQlt0xr9F6j410whVf367TBmyvnDhljjGfa1+gwm2SRDkculadTaD1FB/kcr/lxJhF93hZYDHk6fMOo0f2QRLUFeqIqWqTDNzN5uqy2vsJvzAEcyE/0eQtsQI/tBAICCT8Gd9QCPdiVbZEOWJqnm1rr8/L8O+BBfqJv0SAAepwp8YQQRk4RigL9XLuIPpN8Ep3O012t9Q0aOuEfcqDPY2gr00cSkqhIDf0z3YVNMQ/0eHcu0Hml9XlfuNOfrNM6A34mAX1dIluWHt/25PknAZmdzs9SFh3Ijo/ZaRPZPJ0V6EfplfdGn07/Or5SX+jB+XBENy8/mGCMifCmq7TstH+z6LBwbAktAFZsXZTp8y2VYU3Ql2GCMQi2JZxpsDlWAqH7RGJO6mOVUsPJM4LuCphqO9BZ/8xjS0iAFcccsXk6lF46j5uiDp+Lfs3QxyTdcKn9KdqJ13UpX+j2rnOnxz+N6uVkTRboNE8vz+c8nax/Rbc+jj5dXSv4gamT1J/z8vQ5aN39HR0MqWx5Ohlg61TpQIsDU188TMLnAruHFs/zPlGgmxJ9G8flTzK95+kT/PtFusuB7DG21G5i1AfR+kGHbUgJt9XLF+JKdMi8TvBb0gCboa+H/Dqd+Wy0gN1zB3mrpH2Mg+BsTtiXx2lRoqsCPc60BLWn6fNTfo0O00vTxwk8RILpEN0JbL+fQYAOIFgsJTqv0rOH8S1LJ7v8HTr3ljr4GZij4fW0O9w08w47wcdaKkKKdHGZDoeueusTeZdO1DHPRHz5LsG0j+8inVnY14t0Yiv0OENxrUPq9DjqlcYfSxbmAZjSdIDSOl3n6WX7QK7TxxodTtpUPIjsSSCLdCDJKp2+T58XsFbpB3N+SY6ubCizUCCYTJEO80vV6LJOn8MMcPCq09OJ6WI3WBENIhOYeIkOJssqdFOlj/mTuTp9uExXuXtPVkSmCl1oGAsFusrT6/I6farR4xIoO0NVwlSiA4qW6TxPr8vrdLLU6PHas9RxrszOtDxlKtLhk6ZIZ1l6Xj6R6/SpSoc4m7l8iU0VurD5m9GQLD0nX1ZSp0O2Kh3C5MltJYuPf3tAIemeYCvSPeL1g/C76ZA+jP/lXu02xhnOyHXck6WTeRvGIPmvYEYfbC05+XDog/4t0TDXPxz5bXS4o/jpmG+jEwNXLZ+N+zo60TCePxr1fXQOb6zz0bDvowfvuPGxiC+kEw1nbZ+M/UI6l3s4+Wj0F9J/KBQvXeKlG7x0hZfO8dIFXjpBTNd3uiAYQ/G2LvG2bvC27vDSOd4dnuFtXeBtnVi8dPpLRxiDl+7w0hVeOsdLF3jpxOKla7x0ipcu8dINXrrCS+d46QwvnSCma7x0ipcu8dINXrrDS1d46QwvXeClE4uXrvHSKV66xEs3eOkKL53jpQu8dIKY/pvf/Fz+BwX2eAJ7ja60AAAAAElFTkSuQmCC" alt="ISRO"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/iit-madras-DeeOyXom.png" alt="IIT Madras"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/bharat-Bhc7x8uM.png" alt="Bharat City"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ankit-gems-2-BZDph0nt.png" alt="Ankit Gems"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/aswin-B-hbd3kd.png" alt="Ashwin Diamond"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/charu-scaled-mmuFVNSs.png" alt="Charu Jewels"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/jainam-IAAMk-V1.png" alt="Jainam"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vidyamandir-BwgSzU6J.png" alt="Vidyamandir"></div>

            <!-- Set 2 (for infinite loop) -->
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hilton-garden-inn-CSYm6uYZ.png" alt="Hilton"></div>
            <div class="marquee-item"><img src="data:image/png;base64,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" alt="Vivanta"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ginger-D0WCzC4j.png" alt="Ginger"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ongc-Duno_EZ6.png" alt="ONGC"></div>
            <div class="marquee-item"><img src="data:image/png;base64,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" alt="ISRO"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/iit-madras-DeeOyXom.png" alt="IIT Madras"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/bharat-Bhc7x8uM.png" alt="Bharat City"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ankit-gems-2-BZDph0nt.png" alt="Ankit Gems"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/aswin-B-hbd3kd.png" alt="Ashwin Diamond"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/charu-scaled-mmuFVNSs.png" alt="Charu Jewels"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/jainam-IAAMk-V1.png" alt="Jainam"></div>
            <div class="marquee-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vidyamandir-BwgSzU6J.png" alt="Vidyamandir"></div>
          </div>
        </div>

      </div>
    </section>

    <!-- 7. METHODOLOGY (4-PHASE DELIVERY PROTOCOL) -->
    <section id="methodology" class="methodology-section">
      <div class="container">
        
        <div class="section-intro text-center reveal-item">
          <div class="section-label center-label">
            <span class="label-number">06</span>
            <span class="label-text">THE ROADMAP</span>
          </div>
          <h2 class="editorial-heading">The SunRise 4-Phase Delivery Protocol.</h2>
          <p class="intro-subhead">
            A battle-tested methodology designed to preempt delays before ground is broken and certify perfection at handover.
          </p>
        </div>

        <div class="protocol-timeline reveal-item">
          
          <div class="protocol-card">
            <span class="protocol-step">PHASE 01</span>
            <h3 class="protocol-title">Inception & Feasibility</h3>
            <p class="protocol-desc">Comprehensive site review, budget parameterization, constructability check, and statutory timeline freeze.</p>
            <div class="protocol-deliverable">Output: Master Baseline Model & Risk Register</div>
          </div>

          <div class="protocol-card">
            <span class="protocol-step">PHASE 02</span>
            <h3 class="protocol-title">Tender & Pre-Construction</h3>
            <p class="protocol-desc">Inter-disciplinary clash detection across drawings, itemized BOQs, contractor prequalification, and contracts.</p>
            <div class="protocol-deliverable">Output: Zero-Clash GFC & Approved Contractor SLAs</div>
          </div>

          <div class="protocol-card">
            <span class="protocol-step">PHASE 03</span>
            <h3 class="protocol-title">Active Site Supervision</h3>
            <p class="protocol-desc">Resident engineers on-site conducting batch tests, joint measurements for contractor bills, and safety enforcement.</p>
            <div class="protocol-deliverable">Output: Weekly CVR Dashboards & Certified Pour Logs</div>
          </div>

          <div class="protocol-card">
            <span class="protocol-step">PHASE 04</span>
            <h3 class="protocol-title">Handover, Snagging & AMC</h3>
            <p class="protocol-desc">Defect snag clearance, final account closures, as-built documentation verification, and AMC facility onboarding.</p>
            <div class="protocol-deliverable">Output: Zero-Defect Handover & Facility Maintenance</div>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. FREQUENTLY ASKED QUESTIONS (MINIMALIST ACCORDION) -->
    <section id="faq" class="faq-section">
      <div class="container">
        
        <div class="faq-layout">
          <div class="faq-intro-col reveal-item">
            <div class="section-label">
              <span class="label-number">07</span>
              <span class="label-text">TRANSPARENCY</span>
            </div>
            <h2 class="editorial-heading">Frequently Addressed Inquiries.</h2>
            <p class="narrative-body">
              Everything developers and institutions need to understand about our fiduciary scope, site teams, and billing audits.
            </p>
            <div class="faq-contact-cta">
              <span>Have a specific project question?</span>
              <a href="tel:+919586000933" class="gold-link">Speak directly with Director &rarr;</a>
            </div>
          </div>

          <div class="faq-accordion-col reveal-item">
            
            <!-- FAQ 1 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">01</span>
                  <span class="faq-question-text">What types of projects does SunRise PMC handle?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>We manage diverse construction portfolios including residential townships, multi-tower high-rises, commercial and diamond processing complexes, 5-star hotels, healthcare hospitals, and institutional educational campuses across Western India.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">02</span>
                  <span class="faq-question-text">How does SunRise PMC prepare and monitor project schedules?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>We prepare master and micro schedules using Critical Path Method (CPM) and milestone-based planning. Progress is continuously checked against an approved baseline with regular variance analysis, look-ahead schedules, and proactive recovery planning to prevent project creep.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">03</span>
                  <span class="faq-question-text">How does SunRise PMC help control project costs and prevent overruns?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>We institute rigorous budgeting right from quantity takeoffs, enforce transparent rate analysis, conduct joint measurement audits before contractor bill certification, manage variations with contract rigor, and provide monthly cost-value reconciliations to executive leadership.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">04</span>
                  <span class="faq-question-text">Does SunRise PMC provide dedicated on-site supervision?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>Yes. We deploy full-time, experienced resident site engineers and quality inspectors. On-site supervision covers physical execution oversight, drawing adherence, safety protocol enforcement, contractor labor monitoring, and daily progress reporting.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">05</span>
                  <span class="faq-question-text">How does SunRise PMC ensure project quality?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>We enforce a strict Project Quality Assurance Plan (PQAP). This includes mandatory third-party lab testing of raw materials (cement, rebar, aggregates), stage-wise pour checklists, finishing tolerances inspections, and comprehensive zero-defect snagging audits before handover.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-item">
              <button class="faq-trigger" aria-expanded="false">
                <div class="faq-trigger-left">
                  <span class="faq-badge">06</span>
                  <span class="faq-question-text">Does SunRise PMC offer AMC and independent billing audit services?</span>
                </div>
                <span class="trigger-icon-wrap" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-content">
                <div class="faq-answer-inner">
                  <p>Yes. In addition to turnkey PMC, we provide specialized stand-alone services including Annual Maintenance Contract (AMC) supervision for active facilities and Forensic Billing & Commercial Audits for developers seeking independent verification of contractor claims.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- 9. CONTACT & STRATEGIC DOSSIER -->
    <section id="contact" class="contact-section">
      <div class="container">
        
        <div class="contact-editorial-grid">
          
          <div class="contact-details-side reveal-item">
            <div class="section-label">
              <span class="label-number">08</span>
              <span class="label-text">ENGAGEMENT</span>
            </div>
            <h2 class="editorial-heading">Initiate a Strategic Project Audit.</h2>
            <p class="narrative-lead">
              Whether you are acquiring land, finalizing architectural tenders, or require an independent audit of an ongoing build, our directors provide confidential constructability reviews.
            </p>

            <div class="contact-info-list">
              <div class="info-item">
                <span class="info-label">EXECUTIVE PHONE</span>
                <a href="tel:+919586000933" class="info-val">+91 95860 00933</a>
              </div>
              <div class="info-item">
                <span class="info-label">OFFICIAL INQUIRIES</span>
                <a href="mailto:contact@sunrisepmc.in" class="info-val">contact@sunrisepmc.in</a>
              </div>
              <div class="info-item">
                <span class="info-label">CORPORATE OFFICE</span>
                <address class="info-val not-italic">
                  GL-2, Anand Avenue Commercial Complex (Building G & H), First Floor, Bhesan Road, Ugat Junction, Surat - 395005, Gujarat, India
                </address>
              </div>
            </div>

            <div class="contact-whatsapp-action">
              <a href="https://wa.me/919586000933?text=Hello%20SunRise%20PMC%2C%20I%20would%20like%20to%20discuss%20project%20management%20services." target="_blank" rel="noopener noreferrer" class="btn-editorial btn-whatsapp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Direct WhatsApp Consultation</span>
              </a>
            </div>
          </div>

          <div class="contact-form-side reveal-item">
            <form id="projectInquiryForm" class="editorial-form" action="https://formspree.io/f/xbjvkzrw" method="POST">
              <div class="form-title">Consultation Parameters</div>
              <p class="form-subtitle">Submit preliminary parameters for constructability and billing feasibility.</p>

              <div class="form-field">
                <label for="fullName">FULL NAME & ORGANIZATION *</label>
                <input type="text" id="fullName" name="name" required placeholder="e.g. Vikram Patel, Sobha Real Estate">
              </div>

              <div class="form-row">
                <div class="form-field">
                  <label for="email">CORPORATE EMAIL *</label>
                  <input type="email" id="email" name="email" required placeholder="vikram@company.com">
                </div>
                <div class="form-field">
                  <label for="phone">DIRECT PHONE *</label>
                  <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210">
                </div>
              </div>

              <div class="form-row">
                <div class="form-field">
                  <label for="projectTypology">DEVELOPMENT TYPOLOGY *</label>
                  <select id="projectTypology" name="projectType" required>
                    <option value="" disabled selected>Select Typology</option>
                    <option value="Residential High-Rise">Residential High-Rise Enclave</option>
                    <option value="Commercial / Diamond Hub">Commercial / Diamond Processing Hub</option>
                    <option value="Hospitality / Resort">Luxury Hotel / Resort</option>
                    <option value="Healthcare / Hospital">Healthcare / Multi-Specialty Hospital</option>
                    <option value="Institutional / Education">Educational / Institutional Campus</option>
                    <option value="Billing Audit / AMC">Independent Billing Audit / AMC</option>
                  </select>
                </div>
                <div class="form-field">
                  <label for="builtArea">EST. BUILT-UP AREA (SQ.FT.)</label>
                  <input type="text" id="builtArea" name="area" placeholder="e.g. 350,000 Sq.Ft.">
                </div>
              </div>

              <div class="form-field">
                <label for="scopeDetails">PROJECT CONTEXT & CHALLENGES *</label>
                <textarea id="scopeDetails" name="message" rows="4" required placeholder="Please outline site location, present stage (land acquisition / design / ongoing construction), and specific timeline or budget objectives..."></textarea>
              </div>

              <button type="submit" class="btn-editorial btn-accent btn-full" id="submitBtn">
                <span>Submit Strategic Dossier</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
              </button>

              <div id="formFeedback" class="form-feedback" aria-live="polite"></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  <!-- Editorial Minimalist Footer -->
  

<?php
get_footer();

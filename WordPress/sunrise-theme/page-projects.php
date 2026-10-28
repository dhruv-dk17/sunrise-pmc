<?php
/**
 * Template Name: Projects Template
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
        <li><a href="<?php echo esc_url(home_url("/")); ?>" class="mobile-nav-item">Home</a></li>
        <li><a href="<?php echo esc_url(home_url("/about/")); ?>" class="mobile-nav-item">About</a></li>
        <li><a href="<?php echo esc_url(home_url("/services/")); ?>" class="mobile-nav-item">Services</a></li>
        <li><a href="<?php echo esc_url(home_url("/projects/")); ?>" class="mobile-nav-item">Projects</a></li>
        <li><a href="<?php echo esc_url(home_url("/contact/")); ?>" class="mobile-nav-item">Contact</a></li>
      </ul>
      <div class="mobile-contact-bar">
        <div class="mobile-contact-label">DIRECT PMC HOTLINE</div>
        <a href="tel:+919586000933" class="mobile-phone">+91 95860 00933</a>
        <div class="mobile-address">GL-2, Anand Avenue Commercial Complex, Ugat Junction, Surat</div>
      </div>
    </div>
  </div>

  <main style="padding-top: 100px;">
    <!-- Page Hero Banner -->
    <section style="background: #0D0F12; color: #FFF; padding: 90px 0 70px; border-bottom: 1px solid rgba(255,255,255,0.08); position: relative; overflow: hidden;">
      <div class="container" style="position: relative; z-index: 2;">
        <div class="section-label">
          <span class="label-number" style="color: #D4AF37;">03</span>
          <span class="label-text" style="color: rgba(255,255,255,0.6);">PROJECT PORTFOLIO</span>
        </div>
        <h1 class="editorial-heading" style="color: #FFFFFF; font-size: clamp(2.5rem, 5vw, 4.2rem); margin-bottom: 20px;">
          Completed & Active <span class="gold-italic">Landmarks</span>
        </h1>
        <p style="font-size: 1.15rem; color: rgba(255,255,255,0.8); max-width: 760px; line-height: 1.8;">
          SunRise PMC has successfully supported projects across different scales and sectors, ensuring strong control over time, cost, quality, and safety throughout the project lifecycle.
        </p>
      </div>
      <div style="position: absolute; right: -20px; bottom: -40px; font-size: clamp(6rem, 16vw, 16rem); font-family: var(--font-serif-roman); color: rgba(255,255,255,0.02); pointer-events: none; line-height: 1; user-select: none;">
        PORTFOLIO
      </div>
    </section>

    <!-- Portfolio Gallery with Real Images -->
    <section class="projects-section" style="padding: 70px 0 100px; background: #FAFAF7;">
      <div class="container">
        
        <!-- Filter Tabs -->
        <div class="portfolio-filters" role="tablist" style="margin-bottom: 48px; justify-content: flex-start;">
          <button class="filter-tab active" data-filter="all">All Projects</button>
          <button class="filter-tab" data-filter="residential">Residential</button>
          <button class="filter-tab" data-filter="commercial">Commercial & Diamond</button>
          <button class="filter-tab" data-filter="hospitality">Hospitality</button>
          <button class="filter-tab" data-filter="institutional">Institutional & Healthcare</button>
        </div>

        <!-- 20 Authentic Projects Grid -->
        <div class="projects-gallery" id="projectsGallery">

          <!-- 1. Bharat City -->
          <div class="project-entry" data-category="residential" data-title="Bharat City" data-type="Residential Township" data-scale="2,400,000 Sq.Ft." data-location="Surat, Gujarat" data-img="./public/images/Frame-15.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-15-DuquAy3n.png" alt="Bharat City" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Bharat City</h3>
              <p class="entry-desc">Mega residential high-rise township with extensive social infrastructure and podium engineering.</p>
            </div>
          </div>

          <!-- 2. Bhawans Ultima -->
          <div class="project-entry" data-category="residential" data-title="Bhawans Ultima" data-type="Premium High-Rise Enclave" data-scale="Multi-Tower Complex" data-location="Surat" data-img="./public/images/Frame-16.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-16-5VywjR-Q.png" alt="Bhawans Ultima" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Bhawans Ultima</h3>
              <p class="entry-desc">Multi-tower residential enclave delivering turnkey PMC from deep piling to homeowner handover.</p>
            </div>
          </div>

          <!-- 3. White Wings Torrance -->
          <div class="project-entry" data-category="residential" data-title="White Wings Torrance" data-type="Signature Luxury Towers" data-scale="Gated High-Rise" data-location="Surat" data-img="./public/images/Frame-18.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-18-DzJijzYY.png" alt="White Wings Torrance" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">White Wings Torrance</h3>
              <p class="entry-desc">Signature luxury towers with infinity amenities and complex cantilevered architectural formwork.</p>
            </div>
          </div>

          <!-- 4. Jainam House -->
          <div class="project-entry" data-category="residential" data-title="Jainam House" data-type="Private Luxury Residence" data-scale="Bespoke Estate" data-location="Surat" data-img="./public/images/Frame-19.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-19-CBkZ-Fag.png" alt="Jainam House" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Jainam House</h3>
              <p class="entry-desc">Ultra-luxury private villa featuring bespoke imported stone, automation, and landscape courtyards.</p>
            </div>
          </div>

          <!-- 5. Ankit Gems -->
          <div class="project-entry" data-category="commercial" data-title="Ankit Gems" data-type="Diamond Manufacturing Complex" data-scale="Specialized Industrial Hub" data-location="Surat SEZ" data-img="./public/images/Frame-20.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-20-BmiOIiuX.png" alt="Ankit Gems" loading="lazy">
              <div class="entry-tag">COMMERCIAL & GEMS</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT SEZ</div>
              <h3 class="entry-heading">Ankit Gems Hub</h3>
              <p class="entry-desc">Heavy vibration-damped industrial slabs and high-security cleanroom facilities.</p>
            </div>
          </div>

          <!-- 6. Ashwin Diamond -->
          <div class="project-entry" data-category="commercial" data-title="Ashwin Diamond" data-type="Commercial Diamond Facility" data-scale="High-Tech Facility" data-location="Surat" data-img="./public/images/Frame-45.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-45-cA0fgE6B.png" alt="Ashwin Diamond" loading="lazy">
              <div class="entry-tag">COMMERCIAL & GEMS</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Ashwin Diamond</h3>
              <p class="entry-desc">State-of-the-art diamond processing center with high HVAC load management and glazed façade.</p>
            </div>
          </div>

          <!-- 7. Mohit Diamond -->
          <div class="project-entry" data-category="commercial" data-title="Mohit Diamond" data-type="Industrial Diamond Facility" data-scale="Industrial Facility" data-location="Surat" data-img="./public/images/Frame-46.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-46-WnR6efRJ.png" alt="Mohit Diamond" loading="lazy">
              <div class="entry-tag">COMMERCIAL & GEMS</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT</div>
              <h3 class="entry-heading">Mohit Diamond</h3>
              <p class="entry-desc">Industrial processing infrastructure completed with zero recorded safety incidents.</p>
            </div>
          </div>

          <!-- 8. Charu Jewels -->
          <div class="project-entry" data-category="commercial" data-title="Charu Jewels" data-type="Luxury Commercial Landmark" data-scale="Bespoke Commercial" data-location="Surat" data-img="./public/images/Frame-47-1-1.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Frame-47-1-1-DZYVyxY4.png" alt="Charu Jewels" loading="lazy">
              <div class="entry-tag">COMMERCIAL & GEMS</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Charu Jewels</h3>
              <p class="entry-desc">Architectural glass façade, reinforced security vaulting, and precision MEP integration.</p>
            </div>
          </div>

          <!-- 9. Hilton Garden Inn -->
          <div class="project-entry" data-category="hospitality" data-title="Hilton Garden Inn" data-type="5-Star Hospitality" data-scale="220 Luxury Keys" data-location="Surat, Gujarat" data-img="./public/images/hilton-garden-inn.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hilton-garden-inn-CSYm6uYZ.png" alt="Hilton Garden Inn" loading="lazy">
              <div class="entry-tag">HOSPITALITY</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Hilton Garden Inn</h3>
              <p class="entry-desc">International brand standard compliance, acoustic isolation, and intricate MEP execution.</p>
            </div>
          </div>

          <!-- 10. Ginger Hotel -->
          <div class="project-entry" data-category="hospitality" data-title="Ginger Hotel" data-type="Business Hospitality" data-scale="150 Keys" data-location="Surat, Gujarat" data-img="./public/images/Ginger-hotel.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Ginger-hotel-BxGIpSzh.png" alt="Ginger Hotel" loading="lazy">
              <div class="entry-tag">HOSPITALITY</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT</div>
              <h3 class="entry-heading">Ginger Hotel</h3>
              <p class="entry-desc">Standardized hospitality delivery with optimized structural and MEP lifecycle costs.</p>
            </div>
          </div>

          <!-- 11. Vivanta Hotel -->
          <div class="project-entry" data-category="hospitality" data-title="Vivanta Hotel" data-type="Luxury Hotel" data-scale="Premium Keys & Suites" data-location="Gujarat" data-img="./public/images/vivantahotel.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vivantahotel-C4y0-sb6.png" alt="Vivanta Hotel" loading="lazy">
              <div class="entry-tag">HOSPITALITY</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">GUJARAT</div>
              <h3 class="entry-heading">Vivanta Hotel</h3>
              <p class="entry-desc">High-specification finishing, acoustic testing, and fast-track structural commissioning.</p>
            </div>
          </div>

          <!-- 12. Treat Hotels & Resorts -->
          <div class="project-entry" data-category="hospitality" data-title="Treat Hotels & Resorts" data-type="Luxury Destination Resort" data-scale="18-Acre Development" data-location="Western Region" data-img="./public/images/treat-resort.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/treat-resort-0lm8fQFe.png" alt="Treat Hotels & Resorts" loading="lazy">
              <div class="entry-tag">HOSPITALITY</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">WESTERN REGION</div>
              <h3 class="entry-heading">Treat Hotels & Resorts</h3>
              <p class="entry-desc">Integrated hospitality estate featuring luxury villas, banquet facilities, and extensive recreational zones.</p>
            </div>
          </div>

          <!-- 13. Amrit Cement Club House -->
          <div class="project-entry" data-category="institutional" data-title="Amrit Cement Club House" data-type="Corporate Recreational Facility" data-scale="Large Span Trusses" data-location="Township" data-img="./public/images/amrit-cement.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/amrit-cement-XiiE_0ts.png" alt="Amrit Cement Club House" loading="lazy">
              <div class="entry-tag">INSTITUTIONAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">INDUSTRIAL TOWNSHIP</div>
              <h3 class="entry-heading">Amrit Cement Club House</h3>
              <p class="entry-desc">Large-span structural steel framing, indoor sports courts, and acoustic entertainment halls.</p>
            </div>
          </div>

          <!-- 14. Blue Ski -->
          <div class="project-entry" data-category="institutional" data-title="Blue Ski" data-type="Recreational Facility" data-scale="Specialized Venue" data-location="Gujarat" data-img="./public/images/blue-sky.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/blue-sky-BxyunsSK.png" alt="Blue Ski" loading="lazy">
              <div class="entry-tag">INSTITUTIONAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">GUJARAT</div>
              <h3 class="entry-heading">Blue Ski</h3>
              <p class="entry-desc">Climate-controlled recreational facility with specialized thermal envelope insulation and structural spans.</p>
            </div>
          </div>

          <!-- 15. Vidyamandir Skill Centre -->
          <div class="project-entry" data-category="institutional" data-title="Vidyamandir Skill Centre" data-type="Educational Campus" data-scale="Campus Infrastructure" data-location="Gujarat" data-img="./public/images/vidyamandir-skill-center.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/vidyamandir-skill-center-MEnoAiE-.png" alt="Vidyamandir Skill Centre" loading="lazy">
              <div class="entry-tag">INSTITUTIONAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">PALANPUR / SURAT</div>
              <h3 class="entry-heading">Vidyamandir Skill Centre</h3>
              <p class="entry-desc">Expansive acoustic auditorium halls, workshops, and sustainable campus execution.</p>
            </div>
          </div>

          <!-- 16. Om Hospital -->
          <div class="project-entry" data-category="institutional" data-title="Om Hospital" data-type="Multi-Specialty Hospital" data-scale="120 Beds" data-location="Surat" data-img="./public/images/om-hospitall.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/om-hospitall-DcsrpZcJ.png" alt="Om Hospital" loading="lazy">
              <div class="entry-tag">HEALTHCARE</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Om Hospital</h3>
              <p class="entry-desc">Medical gas piping networks, laminar airflow operation theatres, and uninterrupted power grids.</p>
            </div>
          </div>

          <!-- 17. Grand Marina Hospital -->
          <div class="project-entry" data-category="institutional" data-title="Grand Marina Hospital" data-type="Tertiary Care Hospital" data-scale="200 Beds" data-location="Gujarat" data-img="./public/images/grand-marina-hospital.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/grand-marina-hospital-CQjmW02d.png" alt="Grand Marina Hospital" loading="lazy">
              <div class="entry-tag">HEALTHCARE</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">GUJARAT</div>
              <h3 class="entry-heading">Grand Marina Hospital</h3>
              <p class="entry-desc">Advanced seismic dampers, radiology lead shielding, and intensive care air handling units.</p>
            </div>
          </div>

          <!-- 18. K7 International School -->
          <div class="project-entry" data-category="institutional" data-title="K7 International School" data-type="Educational Campus" data-scale="K-12 Campus" data-location="Surat" data-img="./public/images/k7-school.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/k7-school-HI2LE3bx.png" alt="K7 International School" loading="lazy">
              <div class="entry-tag">INSTITUTIONAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">K7 International School</h3>
              <p class="entry-desc">Modern educational architecture with child-safe material protocols, sports pavilions, and smart labs.</p>
            </div>
          </div>

          <!-- 19. Svasti Residence -->
          <div class="project-entry" data-category="residential" data-title="Svasti Residence" data-type="Contemporary Private Villa" data-scale="Luxury Residence" data-location="Surat" data-img="./public/images/svasti.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svasti-DH1W8z1Z.png" alt="Svasti Residence" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">SURAT, GUJARAT</div>
              <h3 class="entry-heading">Svasti Residence</h3>
              <p class="entry-desc">Exposed architectural concrete, cantilevered steel frames, and minimalist water reflection planes.</p>
            </div>
          </div>

          <!-- 20. Mr. Dalmia House -->
          <div class="project-entry" data-category="residential" data-title="Mr. Dalmia House" data-type="Private Luxury Mansion" data-scale="Private Estate" data-location="Gujarat" data-img="./public/images/dalmia.png">
            <div class="entry-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dalmia-Hbs45U4f.png" alt="Mr. Dalmia House" loading="lazy">
              <div class="entry-tag">RESIDENTIAL</div>
              <div class="entry-hover-action"><span>VIEW DOSSIER</span> ↗</div>
            </div>
            <div class="entry-info">
              <div class="entry-loc">GUJARAT</div>
              <h3 class="entry-heading">Mr. Dalmia House</h3>
              <p class="entry-desc">Exclusive estate mansion with specialized climate envelopes and precision Italian joinery.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Modal for Project Details -->
    <div id="projectModal" class="project-modal" data-lenis-prevent aria-hidden="true" role="dialog">
      <div class="modal-scrim" id="modalScrim"></div>
      <div class="modal-dialog" data-lenis-prevent>
        <button class="modal-close" id="modalClose" aria-label="Close dialog">&times;</button>
        <div class="modal-content-slot" id="modalSlot" data-lenis-prevent></div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  

<?php
get_footer();

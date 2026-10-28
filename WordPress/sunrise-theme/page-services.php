<?php
/**
 * Template Name: Services Template
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
          <span class="label-number" style="color: #D4AF37;">02</span>
          <span class="label-text" style="color: rgba(255,255,255,0.6);">CORE DISCIPLINES</span>
        </div>
        <h1 class="editorial-heading" style="color: #FFFFFF; font-size: clamp(2.5rem, 5vw, 4.2rem); margin-bottom: 20px;">
          Our Core Project Management & <span class="gold-italic">Consultancy Services</span>
        </h1>
        <p style="font-size: 1.15rem; color: rgba(255,255,255,0.8); max-width: 760px; line-height: 1.8;">
          SunRise PMC provides professional project management services with a strong focus on planning, coordination, execution control, and client representation throughout the construction lifecycle.
        </p>
      </div>
      <div style="position: absolute; right: -20px; bottom: -40px; font-size: clamp(6rem, 16vw, 16rem); font-family: var(--font-serif-roman); color: rgba(255,255,255,0.02); pointer-events: none; line-height: 1; user-select: none;">
        SERVICES
      </div>
    </section>

    <!-- Services Grid (Authentic 8 Services from SunRise PMC) -->
    <section style="padding: 90px 0; background: #FFFFFF;">
      <div class="container">
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">

          <!-- Service 1 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image-2-BVCU3VHI.png" alt="Project Planning & Scheduling" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">01</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Project Planning & Scheduling</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Master scheduling using Critical Path Method (CPM), milestone tracking, resource allocation, and continuous look-ahead monitoring to prevent project schedule delays.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Master Baseline CPM Scheduling</li>
                <li>Micro-Progress Variance Tracking</li>
                <li>Delay Mitigation & Recovery Plans</li>
              </ul>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/cost-management-C7k_YDnX.png" alt="Cost Management & Budget Control" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">02</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Cost Management & Budget Control</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Detailed item-rate BOQ formulation, cash-flow forecasting, value engineering, and commercial control to eliminate unapproved budget escalations.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Comprehensive BOQ & Rate Analysis</li>
                <li>Cost-Value Reconciliation (CVR)</li>
                <li>Contractor Variation Scrutiny</li>
              </ul>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image-4-1-21l8wlKP.png" alt="Construction & Site Management" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">03</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Construction & Site Management</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Full-time resident site engineers supervising trade contractors, monitoring daily work logs, coordinating material logistics, and ensuring drawing compliance.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Resident Site Engineering Supervision</li>
                <li>Daily Progress & Manpower Tracking</li>
                <li>Inter-agency Trade Synchronization</li>
              </ul>
            </div>
          </div>

          <!-- Service 4 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/quality-Cmn2ZSHz.png" alt="Quality Management" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">04</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Quality Management</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Independent quality assurance plans (QAP), mandatory batch cube testing, rebar elongation checks, pour card authorizations, and systematic snagging.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>NABL Accredited Lab Testing Sign-offs</li>
                <li>Pre-Pour & Post-Pour Checklists</li>
                <li>Zero-Defect Snagging Before Handover</li>
              </ul>
            </div>
          </div>

          <!-- Service 5 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/design-management-DffrCBxQ.png" alt="Design & Coordination Management" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">05</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Design & Coordination Management</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Harmonizing architectural drawings, structural engineering designs, and MEP services to resolve spatial clashes prior to on-site concrete execution.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Architectural & Structural Clash Detection</li>
                <li>Good-For-Construction (GFC) Verification</li>
                <li>Request for Information (RFI) Fast-Tracking</li>
              </ul>
            </div>
          </div>

          <!-- Service 6 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/safety-Mx7pBVUK.png" alt="Safety & Risk Management" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">06</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Safety & Risk Management</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Comprehensive Health, Safety & Environment (HSE) protocols, scaffolding certifications, personal protective equipment (PPE) enforcement, and zero-accident audits.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Job Hazard Analysis (JHA) & Toolbox Talks</li>
                <li>Rigid Scaffolding & Edge Protection Checks</li>
                <li>Statutory Safety Compliance Records</li>
              </ul>
            </div>
          </div>

          <!-- Service 7 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/amc-2-R0D7hDID.png" alt="Annual Maintenance Contract (AMC)" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">07</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Annual Maintenance Contract (AMC)</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Post-occupancy building health inspections, preventive maintenance planning, MEP equipment uptime oversight, and building asset durability management.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>MEP & Structural Health Monitoring</li>
                <li>Vendor SLA & Maintenance Supervision</li>
                <li>Long-Term Lifecycle Cost Preservation</li>
              </ul>
            </div>
          </div>

          <!-- Service 8 -->
          <div class="project-entry" style="border: 1px solid var(--border-hairline); border-radius: 6px; overflow: hidden; background: #FFF; display: flex; flex-direction: column;">
            <div style="height: 220px; overflow: hidden; position: relative;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image-8-1-DgSzLzGv.png" alt="Billing & Commercial Audit" style="width: 100%; height: 100%; object-fit: cover;">
              <span style="position: absolute; top: 16px; left: 16px; background: rgba(13,15,18,0.85); color: #D4AF37; font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 2px;">08</span>
            </div>
            <div style="padding: 28px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
              <div>
                <h3 style="font-family: var(--font-serif-roman); font-size: 1.4rem; margin-bottom: 12px; color: var(--text-primary);">Billing & Commercial Audit</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px;">
                  Independent contractor bill verification, Joint Measurement Sheets (JMS), item-rate audit against physical execution, and final account forensic settlements.
                </p>
              </div>
              <ul style="font-size: 0.82rem; color: var(--text-muted); list-style: disc; padding-left: 20px; line-height: 1.8;">
                <li>Interim RA Bill Joint Measurements</li>
                <li>Extra-Item & Variation Dispute Clearance</li>
                <li>Final Account Forensic Audit</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Consultation CTA -->
    <section style="background: #0D0F12; color: #FFF; padding: 80px 0; text-align: center;">
      <div class="container">
        <h2 class="editorial-heading" style="color: #FFF; font-size: clamp(2.2rem, 4vw, 3.2rem); margin-bottom: 16px;">
          Need a Custom Project Governance Scope?
        </h2>
        <p style="color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 36px; line-height: 1.8;">
          Connect directly with our engineering directors to draft a project management proposal tailored to your development scale.
        </p>
        <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="btn-editorial btn-accent">Request Scope Proposal</a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  

<?php
get_footer();

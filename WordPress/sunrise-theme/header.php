<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="SunRise PMC is Western India's premier construction project management consultancy. Delivering 20+ landmark residential, commercial, hospitality and healthcare developments with 18+ years of engineering and fiduciary excellence.">
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/cropped-favicon-32x32-BuygBU8a.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/cropped-favicon-192x192-DixKEApM.png">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/cropped-favicon-180x180-B1rq083I.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class("page-home"); ?>>

  <!-- Minimalist Custom Luxury Cursor -->
  <div class="cursor-dot" id="cursorDot" aria-hidden="true"></div>
  <div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>

  <!-- Luxury Minimal Preloader -->
  <div id="preloader" class="preloader">
    <div class="preloader-inner">
      <div class="preloader-monogram">
        <svg viewBox="0 0 80 80" class="preloader-svg" fill="none">
          <circle cx="40" cy="40" r="36" stroke="#E2DFD8" stroke-width="1.5" />
          <circle cx="40" cy="40" r="36" stroke="#9E7A2A" stroke-width="1.5" stroke-dasharray="226" stroke-dashoffset="226" id="preloaderCircle" />
          <path d="M40 22V30M40 50V58M22 40H30M50 40H58" stroke="#9E7A2A" stroke-width="1.5" stroke-linecap="round"/>
          <circle cx="40" cy="40" r="4" fill="#9E7A2A" />
        </svg>
      </div>
      <div class="preloader-brand">SUNRISE PMC</div>
      <div class="preloader-subtitle">BUILDING CERTAINTY • DELIVERING EXCELLENCE</div>
      <div class="preloader-progress-track">
        <div class="preloader-progress-fill" id="preloaderBar"></div>
      </div>
      <div class="preloader-percentage" id="preloaderCounter">0%</div>
    </div>
  </div>

  <!-- Editorial Top Navigation Header -->
  <header class="site-header" id="siteHeader">
    <div class="header-container">
      <a href="#hero" class="brand-link" aria-label="SunRise PMC Home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/SunRise-Logo-1-300x212-xARNgl63.png" alt="SunRise PMC Brand Logo" class="brand-logo" width="200" height="141">
        
      </a>

      <nav class="desktop-nav" aria-label="Main Navigation">
        <ul class="nav-menu">
          <li><a href="<?php echo esc_url(home_url("/")); ?>" class="nav-link active">Home</a></li>
          <li><a href="<?php echo esc_url(home_url("/about/")); ?>" class="nav-link">About</a></li>
          <li><a href="<?php echo esc_url(home_url("/services/")); ?>" class="nav-link">Services</a></li>
          <li><a href="<?php echo esc_url(home_url("/projects/")); ?>" class="nav-link">Projects</a></li>
          <li><a href="#calculator" class="nav-link">Estimator</a></li>
          <li><a href="<?php echo esc_url(home_url("/contact/")); ?>" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="<?php echo esc_url(home_url("/contact/")); ?>" class="btn-editorial btn-accent">
          <span>Inquire Project</span>
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
        </a>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

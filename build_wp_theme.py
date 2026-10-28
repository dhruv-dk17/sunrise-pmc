import os
import re
import shutil
import zipfile

# 1. Paths
BASE_DIR = r'd:\sunrise'
DIST_DIR = os.path.join(BASE_DIR, 'dist')
WP_DIR = os.path.join(BASE_DIR, 'WordPress')
THEME_DIR = os.path.join(WP_DIR, 'sunrise-theme')

# Clear and recreate theme dir
if os.path.exists(THEME_DIR):
    shutil.rmtree(THEME_DIR)
os.makedirs(THEME_DIR, exist_ok=True)

# 2. Copy dist assets and static folders into theme
print("Copying assets...")
shutil.copytree(os.path.join(DIST_DIR, 'assets'), os.path.join(THEME_DIR, 'assets'))

# Copy public subfolders if present in dist
for folder in ['images', 'frames', 'frames_webp', 'videos']:
    src = os.path.join(DIST_DIR, folder)
    if os.path.exists(src):
        shutil.copytree(src, os.path.join(THEME_DIR, folder))

# Also copy public/images if dist didn't have all
if os.path.exists(os.path.join(BASE_DIR, 'public', 'images')) and not os.path.exists(os.path.join(THEME_DIR, 'images')):
    shutil.copytree(os.path.join(BASE_DIR, 'public', 'images'), os.path.join(THEME_DIR, 'images'))

# Find the built CSS and JS filenames
css_files = [f for f in os.listdir(os.path.join(THEME_DIR, 'assets')) if f.startswith('main-') and f.endswith('.css')]
js_files = [f for f in os.listdir(os.path.join(THEME_DIR, 'assets')) if f.startswith('main-') and f.endswith('.js')]

css_name = css_files[0] if css_files else 'main.css'
js_name = js_files[0] if js_files else 'main.js'

print(f"Detected CSS: {css_name}")
print(f"Detected JS: {js_name}")

# 3. Create style.css (Required WordPress theme header)
style_css = """/*
Theme Name: SunRise PMC
Theme URI: https://sunrisepmc.in
Author: SunRise PMC / Arjun Sharma
Author URI: https://sunrisepmc.in
Description: Western India's premier construction project management consultancy. Delivering 20+ landmark developments with fiduciary and engineering excellence.
Version: 1.0.0
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
License: Proprietary
Text Domain: sunrise-pmc
*/

/* Custom styles are bundled into assets/""" + css_name + """ */
"""

with open(os.path.join(THEME_DIR, 'style.css'), 'w', encoding='utf-8') as f:
    f.write(style_css)

# 4. Create functions.php
functions_php = f"""<?php
/**
 * SunRise PMC Theme Functions
 */

if (!defined('ABSPATH')) exit;

function sunrise_pmc_theme_setup() {{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}}
add_action('after_setup_theme', 'sunrise_pmc_theme_setup');

function sunrise_pmc_enqueue_scripts() {{
    // Google Fonts
    wp_enqueue_style(
        'sunrise-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Compiled Theme Stylesheet
    wp_enqueue_style(
        'sunrise-main-style',
        get_template_directory_uri() . '/assets/{css_name}',
        array(),
        '1.0.0'
    );

    // CDN Libraries: GSAP & ScrollTrigger
    wp_enqueue_script(
        'sunrise-gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'sunrise-gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('sunrise-gsap'),
        '3.12.5',
        true
    );

    // Lenis Smooth Scroll
    wp_enqueue_script(
        'sunrise-lenis',
        'https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js',
        array(),
        '1.1.14',
        true
    );

    // Main Compiled Theme Script (ES Module)
    wp_enqueue_script(
        'sunrise-main-script',
        get_template_directory_uri() . '/assets/{js_name}',
        array('sunrise-gsap', 'sunrise-gsap-scrolltrigger', 'sunrise-lenis'),
        '1.0.0',
        true
    );
}}
add_action('wp_enqueue_scripts', 'sunrise_pmc_enqueue_scripts');

// Allow type="module" for the bundled script
function sunrise_add_module_type_attribute($tag, $handle, $src) {{
    if ('sunrise-main-script' === $handle) {{
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }}
    return $tag;
}}
add_filter('script_loader_tag', 'sunrise_add_module_type_attribute', 10, 3);
"""

with open(os.path.join(THEME_DIR, 'functions.php'), 'w', encoding='utf-8') as f:
    f.write(functions_php)

# Helper function to convert paths to WordPress theme URI
def replace_asset_paths(html_content):
    # Fix paths pointing to /assets/ or ./assets/ or assets/
    html_content = re.sub(r'src=["\'](?:/|\./)?assets/([^"\']+)["\']', r'src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?assets/([^"\']+)["\']', r'href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/\1"', html_content)
    html_content = re.sub(r'data-img=["\'](?:/|\./)?assets/([^"\']+)["\']', r'data-img="<?php echo esc_url(get_template_directory_uri()); ?>/assets/\1"', html_content)

    # Fix paths pointing to /images/ or ./images/ or images/
    html_content = re.sub(r'src=["\'](?:/|\./)?images/([^"\']+)["\']', r'src="<?php echo esc_url(get_template_directory_uri()); ?>/images/\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?images/([^"\']+)["\']', r'href="<?php echo esc_url(get_template_directory_uri()); ?>/images/\1"', html_content)
    html_content = re.sub(r'data-img=["\'](?:/|\./)?images/([^"\']+)["\']', r'data-img="<?php echo esc_url(get_template_directory_uri()); ?>/images/\1"', html_content)

    # Fix navigation links to WordPress URLs
    html_content = re.sub(r'href=["\'](?:/|\./)?index\.html(#.*?)?["\']', r'href="<?php echo esc_url(home_url("/")); ?>\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?about\.html(#.*?)?["\']', r'href="<?php echo esc_url(home_url("/about/")); ?>\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?services\.html(#.*?)?["\']', r'href="<?php echo esc_url(home_url("/services/")); ?>\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?projects\.html(#.*?)?["\']', r'href="<?php echo esc_url(home_url("/projects/")); ?>\1"', html_content)
    html_content = re.sub(r'href=["\'](?:/|\./)?contact\.html(#.*?)?["\']', r'href="<?php echo esc_url(home_url("/contact/")); ?>\1"', html_content)

    return html_content

# 5. Extract Header & Footer from index.html
with open(os.path.join(DIST_DIR, 'index.html'), 'r', encoding='utf-8') as f:
    index_raw = f.read()

header_match = re.search(r'(<body[^>]*>.*?<header[^>]*id="siteHeader".*?</header>)', index_raw, re.DOTALL)
footer_match = re.search(r'(<footer[^>]*class="site-footer".*?)(?=<!-- Vite entry script -->|</body>)', index_raw, re.DOTALL)

# Create header.php
header_php = f"""<!DOCTYPE html>
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
"""

if header_match:
    header_body = header_match.group(1)
    # Remove <body ...> so body_class() can be used
    body_tag_match = re.search(r'<body[^>]*class="([^"]*)"[^>]*>', header_body)
    extra_classes = body_tag_match.group(1) if body_tag_match else 'light-luxury-theme'
    header_body = re.sub(r'<body[^>]*>', f'<body <?php body_class("{extra_classes}"); ?>>', header_body, count=1)
    header_body = replace_asset_paths(header_body)
    header_php += header_body + "\n"

with open(os.path.join(THEME_DIR, 'header.php'), 'w', encoding='utf-8') as f:
    f.write(header_php)

# Create footer.php
footer_php = ""
if footer_match:
    footer_body = footer_match.group(1)
    footer_body = replace_asset_paths(footer_body)
    footer_php += footer_body

footer_php += """
    <?php wp_footer(); ?>
</body>
</html>
"""

with open(os.path.join(THEME_DIR, 'footer.php'), 'w', encoding='utf-8') as f:
    f.write(footer_php)

# 6. Create Page Templates
pages = {
    'front-page.php': ('index.html', 'Front Page Template'),
    'page-about.php': ('about.html', 'About Us Template'),
    'page-services.php': ('services.html', 'Services Template'),
    'page-projects.php': ('projects.html', 'Projects Template'),
    'page-contact.php': ('contact.html', 'Contact Template')
}

for php_file, (html_file, template_name) in pages.items():
    html_path = os.path.join(DIST_DIR, html_file)
    with open(html_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Extract content between header and footer
    # Find end of </header>
    header_end = content.find('</header>')
    if header_end != -1:
        content_after_header = content[header_end + len('</header>'):]
    else:
        content_after_header = content

    # Find start of <footer
    footer_start = content_after_header.find('<footer')
    if footer_start != -1:
        main_body = content_after_header[:footer_start]
    else:
        main_body = content_after_header

    main_body = replace_asset_paths(main_body)

    template_code = f"""<?php
/**
 * Template Name: {template_name}
 */

get_header();
?>

{main_body}

<?php
get_footer();
"""
    with open(os.path.join(THEME_DIR, php_file), 'w', encoding='utf-8') as f:
        f.write(template_code)

# Also create index.php as fallback
shutil.copyfile(os.path.join(THEME_DIR, 'front-page.php'), os.path.join(THEME_DIR, 'index.php'))

# 7. Create ZIP package
zip_path = os.path.join(WP_DIR, 'sunrise-theme.zip')
if os.path.exists(zip_path):
    os.remove(zip_path)

with zipfile.ZipFile(zip_path, 'w', zipfile.ZIP_DEFLATED) as zipf:
    for root, dirs, files in os.walk(THEME_DIR):
        for file in files:
            full_path = os.path.join(root, file)
            rel_path = os.path.relpath(full_path, WP_DIR)
            zipf.write(full_path, rel_path)

print(f"Theme successfully created in: {THEME_DIR}")
print(f"ZIP package created: {zip_path}")
print(f"ZIP size: {os.path.getsize(zip_path)} bytes")

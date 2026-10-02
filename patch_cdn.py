import os

CDN_SCRIPTS = """  <!-- CDN: GSAP + ScrollTrigger + Lenis for GitHub Pages compatibility -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js"></script>"""

html_files = [f for f in os.listdir('.') if f.endswith('.html') and not f.startswith('dist')]

for fname in html_files:
    with open(fname, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove old CDN block if already present (idempotent)
    if 'cdnjs.cloudflare.com/ajax/libs/gsap' in content:
        print(f'{fname}: CDN already present, skipping')
        continue

    # Insert CDN scripts before </head>
    content = content.replace('</head>', CDN_SCRIPTS + '\n</head>', 1)

    # Change <script type="module" src="./main.js"> to regular script
    # (bare imports removed, so module type not needed)
    content = content.replace(
        '<script type="module" src="./main.js"></script>',
        '<script src="./main.js"></script>'
    )

    with open(fname, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f'{fname}: patched')

print('Done')

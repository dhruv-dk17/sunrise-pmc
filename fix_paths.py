import os, re

for f in os.listdir('.'):
    if f.endswith('.html') or f.endswith('.js') or f.endswith('.css'):
        with open(f, 'r', encoding='utf-8') as file:
            content = file.read()
        
        # Replace absolute paths starting with /
        content = re.sub(r'href="/(?!/)', 'href="./', content)
        content = re.sub(r'src="/(?!/)', 'src="./', content)
        content = re.sub(r'data-img="/(?!/)', 'data-img="./', content)
        content = re.sub(r"url\('/", "url('./", content)
        content = re.sub(r'url\("/', 'url("./', content)
        
        with open(f, 'w', encoding='utf-8') as file:
            file.write(content)
print("Paths fixed")

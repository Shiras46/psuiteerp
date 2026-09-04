import os

filepath = r'd:\project\psuite\resources\views\pages\home.blade.php'

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Add parallax: true to Swiper JS config
if 'parallax: true' not in content:
    content = content.replace("loop: true,", "loop: true,\n            parallax: true,")

# 2. Add data-swiper-parallax to slides and inject background div
# Find travel slide
if 'data-swiper-parallax' not in content:
    content = content.replace(
        '<div class="travel-premium-hero">', 
        '<div class="travel-premium-hero">\n                <div class="travel-bg" data-swiper-parallax="-20%"></div>'
    )
    
    content = content.replace(
        '<div class="travel-hero-content">',
        '<div class="travel-hero-content" data-swiper-parallax="-10%">'
    )
    
    # Find workshop slide
    content = content.replace(
        '<div class="workshop-premium-hero">', 
        '<div class="workshop-premium-hero">\n                <div class="workshop-bg" data-swiper-parallax="-20%"></div>'
    )
    
    content = content.replace(
        '<div class="workshop-hero-content">',
        '<div class="workshop-hero-content" data-swiper-parallax="-10%">'
    )

# 3. Change buttons from .btn-home-primary to .btn-home-light
content = content.replace('class="btn-home-primary">Explore Module</a>', 'class="btn-home-light">Explore Module</a>')

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
    
print("Successfully applied Swiper parallax and light buttons")

import os

filepath = r'd:\project\psuite\resources\css\app.css'

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Add base logo class
logo_base_css = """
.header-logo-img {
    height: 90px;
    width: auto;
    max-width: 350px;
    display: block;
    filter: drop-shadow(0 4px 6px rgba(0,0,0,0.05));
    transition: all 0.3s ease;
}

.site-header.header-scrolled .header-logo-img {
    height: 70px; /* Slightly smaller when scrolled */
}
"""
if '.header-logo-img {' not in content:
    content = content.replace('.logo a {', logo_base_css + '\n.logo a {')

# Update transparent header filter target
content = content.replace('.site-header.transparent-header .logo img {', '.site-header.transparent-header .header-logo-img {')
content = content.replace('.site-header.transparent-header.header-scrolled .logo img {', '.site-header.transparent-header.header-scrolled .header-logo-img {')

# Add mobile overrides
mobile_override = """
    .site-header .header-logo-img {
        height: 40px !important;
        max-width: 200px;
        filter: brightness(0) invert(1) !important;
    }
"""

if '.site-header .header-logo-img {' not in content:
    content = content.replace('.site-header .logo a {', mobile_override + '\n    .site-header .logo a {')

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)

print("Updated app.css with logo responsive styles.")

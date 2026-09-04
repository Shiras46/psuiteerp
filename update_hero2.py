import os
import re

base_path = r'd:\project\psuite\resources\views\pages\solutions\custom'
files = [
    'customer-relationship-management.blade.php',
    'human-resource-management.blade.php',
    'travel-tourism.blade.php',
    'workshop-management.blade.php',
    'car-rental.blade.php',
    'finance-accounting.blade.php',
    'inventory-management.blade.php'
]

for filename in files:
    filepath = os.path.join(base_path, filename)
    if not os.path.exists(filepath):
        continue
        
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Add header_class section
    if "@section('header_class" not in content:
        content = content.replace("@section('content')", "@section('header_class', 'transparent-header')\n\n@section('content')")

    # 2. Update CSS for premium hero
    # Replace min-height: 90vh with 100vh
    content = re.sub(r'min-height:\s*90vh;', 'min-height: 100vh;', content)
    # Remove margin-top: -100px
    content = re.sub(r'margin-top:\s*-100px;\s*', '', content)
    
    # 3. Update pill tag to be elegant outline
    content = re.sub(r'border:\s*1px solid rgba\(255, 255, 255, 0.25\);', 'border: 1px solid rgba(255, 255, 255, 0.4);', content)
    content = re.sub(r'background:\s*rgba\(255, 255, 255, 0.05\);', 'background: transparent;', content)
    content = re.sub(r'font-size:\s*0.85rem;', 'font-size: 0.75rem;', content)
    
    # 4. For Travel Tourism, update background image to beach
    if filename == 'travel-tourism.blade.php':
        content = content.replace('travel_hero_scene_1781975418591.png', 'travel_beach_hero.png')
        
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"Updated {filename}")

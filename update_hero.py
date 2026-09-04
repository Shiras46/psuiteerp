import os
import re

files_map = {
    'customer-relationship-management.blade.php': 'images/customer-relationship-management/crm_hero_scene.png',
    'human-resource-management.blade.php': 'images/human-resource-management/hrms_hero_scene.png',
    'travel-tourism.blade.php': 'images/travel-tourism/travel_hero_scene_1781975418591.png',
    'workshop-management.blade.php': 'images/workshop/workshop_hero_scene_1781973387945.png',
    'car-rental.blade.php': 'images/car-rental/car_fleet_hero_scene_1781974955447.png',
    'finance-accounting.blade.php': 'images/finance-accounting/finance_hero_scene.png',
    'inventory-management.blade.php': 'images/inventory-management/inv_hero_scene_1781979504045.png'
}

base_path = r'd:\project\psuite\resources\views\pages\solutions\custom'

for filename, scene_img in files_map.items():
    filepath = os.path.join(base_path, filename)
    if not os.path.exists(filepath):
        print(f'File not found: {filepath}')
        continue
    
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # 1. Replace background image
    content = re.sub(r'url\(\'\{\{\s*asset\(\"images/hero_graphic\.png\"\)\s*\}\}\'\)', f"url('{{{{ asset(\"{scene_img}\") }}}}')", content)
    
    # 2. Update font size for h1 from 5rem to 4rem (to match the smaller, elegant size in Image 2)
    content = re.sub(r'font-size:\s*5rem;', 'font-size: 4rem;', content)
    
    # 3. Add text-align: left to hero-content (just to ensure it matches the layout of image 2)
    content = re.sub(r'(\.[a-z]+-hero-content\s*\{[^}]*?max-width:\s*800px;[^}]*?)(\})', r'\1    text-align: left;\n\2', content)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f'Updated {filename}')

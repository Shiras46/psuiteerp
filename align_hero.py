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

    # Add margin-left: 0 !important and text-align: left !important to h1
    if "margin-left: 0 !important" not in content:
        content = re.sub(r'(\.[a-z]+-hero-content h1\s*\{)', r'\1\n        margin-left: 0 !important;\n        text-align: left !important;', content)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"Updated {filename}")

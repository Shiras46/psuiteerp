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

    # Add background-attachment: fixed; to the premium hero section
    if "background-attachment: fixed;" not in content:
        content = re.sub(r'(background-position:\s*center;)', r'\1\n        background-attachment: fixed;', content)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"Updated {filename}")

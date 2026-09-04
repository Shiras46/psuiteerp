import re

file_path = r"d:\PSUITEWEB\PSUITEWEB\resources\views\pages\partials\home\industry_solutions.blade.php"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Add CSS for mobile levels if not there
css_to_add = """
    @media (min-width: 769px) {
        .show-on-mobile {
            display: none !important;
        }
    }
    @media (max-width: 768px) {
        .show-on-mobile {
            display: inline-block !important; 
        }
    }
</style>"""
if ".show-on-mobile" not in content:
    content = content.replace("</style>", css_to_add)

# Find all occurrences of hs-tag-container block and replace
pattern = r'(<div class="hs-tag-container">\s*)(<span class="hs-tag">INDUSTRY SOLUTION</span>)'

def replacer(match):
    global count
    count += 1
    level_text = f"LEVEL 0{count}"
    new_span = f'<span class="hs-tag-level show-on-mobile" style="background-color: var(--solution-accent, var(--card-accent)); color: #fff; margin-right: 8px;">{level_text}</span>\n                            '
    return match.group(1) + new_span + match.group(2)

count = 0
content = re.sub(pattern, replacer, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print(f"Replaced {count} instances.")

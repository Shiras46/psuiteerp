import re
import os

blade_path = r'd:\project\psuite\resources\views\pages\home.blade.php'
partials_dir = r'd:\project\psuite\resources\views\pages\partials\home'

with open(blade_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Split the file by <!-- SECTION
sections = re.split(r'(?=<!-- SECTION)', content)

# Sections:
# 0: header up to @section('content')
# 1...N: the actual sections
# Last section has @endsection and scripts.

top_content = sections[0]
middle_sections = sections[1:-1]
last_section_split = re.split(r'(?=@endsection)', sections[-1])
middle_sections.append(last_section_split[0])
bottom_content = last_section_split[1]

section_map = {
    '01': 'hero',
    '01B': 'trust_metrics',
    '02': 'industry_solutions',
    '04': 'bi',
    '05': 'why',
    '06': 'tech',
    '07': 'success_stories',
    '08': 'trust_marquee',
    '09': 'cta'
}

partials = {}

for s in middle_sections:
    match = re.search(r'<!-- SECTION ([\w]+):', s)
    if match:
        key = match.group(1)
        name = section_map.get(key, f'section_{key}')
        partials[name] = s.strip()

for name, s_content in partials.items():
    with open(os.path.join(partials_dir, f'{name}.blade.php'), 'w', encoding='utf-8') as f:
        f.write(s_content)

print(f"Extracted partials: {list(partials.keys())}")

# Now build the new home.blade.php
new_home = top_content + """
@include('pages.partials.home.hero')

@include('pages.partials.home.trust_marquee')

@include('pages.partials.home.trust_metrics')

@include('pages.partials.home.erp_modules')

@include('pages.partials.home.bi')

@include('pages.partials.home.industry_solutions')

@include('pages.partials.home.why')

@include('pages.partials.home.tech')

@include('pages.partials.home.case_studies')

@include('pages.partials.home.testimonials')

@include('pages.partials.home.cta')

""" + bottom_content

with open(blade_path, 'w', encoding='utf-8') as f:
    f.write(new_home)

print("Updated home.blade.php")

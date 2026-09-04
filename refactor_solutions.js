const fs = require('fs');
const path = require('path');

const customDir = path.join(__dirname, 'resources', 'views', 'pages', 'solutions', 'custom');

const files = [
    { name: 'car-rental.blade.php', prefix: 'cr' },
    { name: 'customer-relationship-management.blade.php', prefix: 'crm' },
    { name: 'finance-accounting.blade.php', prefix: 'fin' },
    { name: 'human-resource-management.blade.php', prefix: 'hrm' },
    { name: 'inventory-management.blade.php', prefix: 'inv' },
    { name: 'travel-tourism.blade.php', prefix: 'tt' },
    { name: 'workshop-management.blade.php', prefix: 'wm' },
];

files.forEach(f => {
    const filePath = path.join(customDir, f.name);
    if (!fs.existsSync(filePath)) return;
    
    let content = fs.readFileSync(filePath, 'utf8');
    
    // Extract variables
    const varRegex = new RegExp(`--${f.prefix}-([a-zA-Z-]+)\\s*:\\s*([^;]+);`, 'g');
    let variables = [];
    let match;
    while ((match = varRegex.exec(content)) !== null) {
        variables.push(`--sol-${match[1]}: ${match[2]}`);
    }
    const styleString = variables.join('; ');
    
    // Remove style block
    content = content.replace(/<style>[\s\S]*?<\/style>/, '');
    
    // Replace prefix
    const classRegex = new RegExp(`\\b${f.prefix}-`, 'g');
    content = content.replace(classRegex, 'sol-');
    
    // Replace variable usage
    const varUsageRegex = new RegExp(`var\\(--${f.prefix}-`, 'g');
    content = content.replace(varUsageRegex, `var(--sol-`);
    
    // Wrap @section('content') with style
    content = content.replace(/@section\('content'\)/, `@section('content')\n\n<div class="solution-wrapper" style="${styleString}">`);
    
    // Add closing div before @endsection
    content = content.replace(/@endsection/, `</div>\n\n@endsection`);
    
    fs.writeFileSync(filePath, content, 'utf8');
    console.log(`Refactored ${f.name}`);
});

const fs = require('fs');
const file = 'd:/PSUITEWEB/PSUITEWEB/resources/views/pages/partials/home/industry_solutions.blade.php';
let content = fs.readFileSync(file, 'utf8');

// Replace tag container
let count = 0;
content = content.replace(/(<div class="hs-tag-container">\s*)(<span class="hs-tag">INDUSTRY SOLUTION<\/span>)/g, (match, p1, p2) => {
    count++;
    let levelText = 'LEVEL 0' + count;
    let newSpan = '<span class="hs-tag-level" style="background-color: var(--solution-accent, var(--card-accent)); color: #fff; margin-right: 8px;">' + levelText + '</span>\n                            ';
    return p1 + newSpan + p2;
});

fs.writeFileSync(file, content);
console.log('Replaced ' + count + ' instances.');

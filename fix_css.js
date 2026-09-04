const fs = require('fs');
const path = require('path');

const cssDir = path.join(__dirname, 'resources', 'css');
const files = [
    'travel-solution.css',
    'fleet-solution.css',
    'hr-solution.css',
    'inventory-solution.css',
    'finance-solution.css',
    'crm-solution.css',
    'workshop-solution.css'
];

const targetPattern = /\/\* =========================================\r?\n   7\. HORIZONTAL MACBOOK SHOWCASE\r?\n========================================= \*\/\r?\n\.sol-macbook-track {[\s\S]*?\.sol-macbook-frame img {[^}]*}/;

const replacement = `/* =========================================
   7. HORIZONTAL MACBOOK SHOWCASE
========================================= */
.sol-macbook-track {
    background: var(--sol-bg-white);
    padding: 5rem 0;
    overflow: hidden;
}

.sol-macbook-header {
    text-align: center;
    margin-bottom: 3rem;
}

.sol-scroll-wrapper {
    display: flex;
    width: 800vw; /* Accommodate more panels */
    align-items: center;
}

.sol-mockup-panel {
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 5vw;
}

.sol-mockup-panel h3 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--sol-text-heading);
    margin-bottom: 1.5rem;
}

.sol-macbook-frame {
    position: relative;
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
}

.sol-macbook-frame img {
    max-width: 100%;
    max-height: 60vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    display: inline-block;
}`;

files.forEach(file => {
    const filePath = path.join(cssDir, file);
    if (fs.existsSync(filePath)) {
        let content = fs.readFileSync(filePath, 'utf8');
        if (targetPattern.test(content)) {
            content = content.replace(targetPattern, replacement);
            fs.writeFileSync(filePath, content, 'utf8');
            console.log(`Updated ${file}`);
        } else {
            console.log(`Pattern not found in ${file}`);
        }
    } else {
        console.log(`${file} does not exist`);
    }
});

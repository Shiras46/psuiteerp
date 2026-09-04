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

const replacementObj = {
    standard: `.sol-macbook-track {
    background: var(--sol-bg-white);
    padding: 6rem 0;
    overflow: hidden;
}

.sol-macbook-header {
    text-align: center;
    margin-bottom: 3rem;
}

.sol-scroll-wrapper {
    display: flex;
    width: max-content;
    align-items: center;
    gap: 6rem; /* Controlled gap between images */
    padding: 0 5vw; /* Start and end padding */
}

.sol-mockup-panel {
    width: 80vw;
    max-width: 1000px;
    flex-shrink: 0;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.sol-mockup-panel h3 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--sol-text-heading);
    margin-bottom: 1.5rem;
    text-align: center;
}

.sol-macbook-frame {
    position: relative;
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.sol-macbook-frame img {
    max-width: 100%;
    max-height: 65vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}`,
    inventory: `.inv-macbook-track {
    background: var(--inv-bg-white);
    padding: 6rem 0;
    overflow: hidden;
}

.inv-macbook-header {
    text-align: center;
    margin-bottom: 3rem;
}

.inv-scroll-wrapper {
    display: flex;
    width: max-content;
    align-items: center;
    gap: 6rem; /* Controlled gap between images */
    padding: 0 5vw; /* Start and end padding */
}

.inv-mockup-panel {
    width: 80vw;
    max-width: 1000px;
    flex-shrink: 0;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.inv-mockup-panel h3 {
    font-size: 2rem;
    font-weight: 800;
    color: var(--inv-text-heading);
    margin-bottom: 1.5rem;
    text-align: center;
}

.inv-macbook-frame {
    position: relative;
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.inv-macbook-frame img {
    max-width: 100%;
    max-height: 65vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}`
};

files.forEach(file => {
    const filePath = path.join(cssDir, file);
    if (fs.existsSync(filePath)) {
        let content = fs.readFileSync(filePath, 'utf8');
        
        const isInv = file === 'inventory-solution.css';
        const prefix = isInv ? 'inv' : 'sol';
        
        const regex = new RegExp(`\\.${prefix}-macbook-track \\{[\\s\\S]*?\\.${prefix}-macbook-frame img \\{[^}]*\\}`);
        
        if (regex.test(content)) {
            content = content.replace(regex, isInv ? replacementObj.inventory : replacementObj.standard);
            fs.writeFileSync(filePath, content, 'utf8');
            console.log(`Updated ${file}`);
        } else {
            console.log(`Pattern not found in ${file}`);
        }
    } else {
        console.log(`${file} does not exist`);
    }
});

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
    width: max-content; /* Dynamic width based on children */
    align-items: center;
}

.sol-mockup-panel {
    width: 100vw;
    flex-shrink: 0; /* Prevent shrinking */
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5vw;
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
    max-width: 1000px;
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
    width: max-content; /* Dynamic width based on children */
    align-items: center;
}

.inv-mockup-panel {
    width: 100vw;
    flex-shrink: 0; /* Prevent shrinking */
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5vw;
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
    max-width: 1000px;
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
        
        // Match from track to frame img block
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

const fs = require('fs');
const path = require('path');

const cssDir = path.join(__dirname, 'resources', 'css');
const file = 'inventory-solution.css';
const filePath = path.join(cssDir, file);

const targetPattern = /\.inv-macbook-track {[\s\S]*?\.inv-macbook-frame img {[^}]*}/;

const replacement = `.inv-macbook-track {
    background: var(--inv-bg-white);
    padding: 5rem 0;
    overflow: hidden;
}

.inv-macbook-header {
    text-align: center;
    margin-bottom: 3rem;
}

.inv-scroll-wrapper {
    display: flex;
    width: 800vw; /* Accommodate more panels */
    align-items: center;
}

.inv-mockup-panel {
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 5vw;
}

.inv-mockup-panel h3 {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--inv-text-heading);
    margin-bottom: 1.5rem;
}

.inv-macbook-frame {
    position: relative;
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
}

.inv-macbook-frame img {
    max-width: 100%;
    max-height: 60vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    display: inline-block;
}`;

if (fs.existsSync(filePath)) {
    let content = fs.readFileSync(filePath, 'utf8');
    if (targetPattern.test(content)) {
        content = content.replace(targetPattern, replacement);
        fs.writeFileSync(filePath, content, 'utf8');
        console.log(`Updated ${file}`);
    } else {
        console.log(`Pattern not found in ${file}`);
    }
}

const fs = require('fs');
const path = 'd:/project/psuite/resources/views/pages/solutions/custom';
const files = fs.readdirSync(path).filter(f => f.endsWith('.blade.php'));

files.forEach(f => {
    let fileP = path + '/' + f;
    let content = fs.readFileSync(fileP, 'utf8');
    
    let p = 'ws';
    if(f.includes('car-rental')) p = 'cr';
    else if(f.includes('travel-tourism')) p = 'travel';
    else if(f.includes('inventory-management')) p = 'inv';
    else if(f.includes('human-resource-management')) p = 'hr';
    else if(f.includes('finance-accounting')) p = 'fin';
    else if(f.includes('customer-relationship')) p = 'crm';

    // We will use string split and replace to avoid complex regex escaping
    let oldCode = `const showcase = document.querySelector('.${p}-showcase');
        const track = document.querySelector('.${p}-gallery-track');
        if(track && showcase) {
            gsap.to(track, {
                x: () => -(track.scrollWidth - window.innerWidth + 40),
                ease: "none",
                scrollTrigger: {
                    trigger: showcase,
                    start: 'center center',
                    end: () => "+=" + track.scrollWidth,
                    pin: true,
                    scrub: 1,
                    invalidateOnRefresh: true
                }
            });
        }`;

    let newCode = `const showcase = document.querySelector('.${p}-showcase');
        const track = document.querySelector('.${p}-gallery-track');
        const items = document.querySelectorAll('.${p}-gallery-item');
        if(track && showcase && items.length > 0) {
            let scrollWidth = track.scrollWidth - window.innerWidth + 80;
            gsap.to(track, {
                x: () => -scrollWidth,
                ease: "none",
                scrollTrigger: {
                    trigger: showcase,
                    start: 'center center',
                    end: () => "+=" + scrollWidth,
                    pin: true,
                    scrub: 1,
                    invalidateOnRefresh: true
                }
            });
        }`;

    if (content.includes(oldCode)) {
        content = content.replace(oldCode, newCode);
        fs.writeFileSync(fileP, content);
        console.log('Horizontal Scroll Updated ' + f);
    } else {
        console.log('Old code not found in ' + f);
    }
});

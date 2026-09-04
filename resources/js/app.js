import './bootstrap';

// Use global gsap and ScrollTrigger provided by CDN to ensure Lenis updates work
const gsap = window.gsap;
const ScrollTrigger = window.ScrollTrigger;

document.addEventListener("DOMContentLoaded", () => {

const cards = gsap.utils.toArray(".solution-card");

if (!cards.length) return;

const totalCards = cards.length;

cards.forEach((card, index) => {

    gsap.set(card, {
        y: index * 35,
        scale: 1 - index * 0.04,
        rotationX: 0,
        zIndex: totalCards - index,
        transformOrigin: "center bottom"
    });

});

ScrollTrigger.create({

    trigger: ".sticky-cards",

    start: "top top",

    end: `+=${totalCards * window.innerHeight * 2.5}`,

    pin: true,

    scrub: 1,

    invalidateOnRefresh: true,

    onUpdate: (self) => {

        const progress = self.progress;
        const active = Math.floor(progress * totalCards);

        cards.forEach((card, index) => {

            if (index < active) {

                gsap.to(card, {
                    y: -120,
                    rotationX: 15,
                    scale: 0.92,
                    duration: 0.2,
                    overwrite: true
                });

            } else {

                const offset = index - active;

                gsap.to(card, {
                    y: offset * 35,
                    scale: 1 - offset * 0.04,
                    rotationX: 0,
                    duration: 0.2,
                    overwrite: true
                });

            }

        });

    }

});
});

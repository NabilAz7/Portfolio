// =============================================
// MENU BURGER
// =============================================
const burger = document.getElementById('navBurger');
const navLinks = document.querySelector('.nav-links');

if (burger) {
    burger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
        });
    });
}


// =============================================
// SCROLL REVEAL
// =============================================
const revealElements = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.15 });

revealElements.forEach(el => revealObserver.observe(el));


// =============================================
// NAV ACTIVE AU SCROLL
// =============================================
const sections = document.querySelectorAll('section[id]');
const navItems = document.querySelectorAll('.nav-links a');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });
    navItems.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});


// =============================================
// TYPEWRITER
// =============================================
const words = ['Développeur', 'Créateur', 'Passionné'];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
const typeEl = document.getElementById('typewriter');

function type() {
    if (!typeEl) return;

    const currentWord = words[wordIndex];

    if (!isDeleting) {
        typeEl.textContent = currentWord.slice(0, ++charIndex);
        if (charIndex === currentWord.length) {
            isDeleting = true;
            setTimeout(type, 1800);
            return;
        }
    } else {
        typeEl.textContent = currentWord.slice(0, --charIndex);
        if (charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }
    }

    setTimeout(type, isDeleting ? 60 : 110);
}

type();


// =============================================
// COMPTEURS ANIMÉS
// =============================================
const counters = document.querySelectorAll('.stat-num[data-target]');

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.getAttribute('data-target'));
            const duration = 1500;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current = Math.min(current + step, target);
                el.textContent = Math.round(current) + '+';
                if (current >= target) clearInterval(timer);
            }, 16);

            counterObserver.unobserve(el);
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => counterObserver.observe(counter));

// =============================================
// PARTICULES FLOTTANTES — ACTIVATION AU SCROLL
// =============================================
const particleContainer = document.createElement('div');
particleContainer.style.cssText = `
    position: fixed;
    inset: 0;
    pointer-events: none;
    z-index: 0;
    overflow: hidden;
`;
document.body.appendChild(particleContainer);

const nbParticles = 30;

for (let i = 0; i < nbParticles; i++) {
    const particle = document.createElement('div');
    particle.classList.add('particle');

    particle.style.left = Math.random() * 100 + '%';
    particle.style.animationDuration = (6 + Math.random() * 10) + 's';
    particle.style.animationDelay = (Math.random() * 6) + 's';

    const size = 2 + Math.random() * 2;
    particle.style.width = size + 'px';
    particle.style.height = size + 'px';
    particle.style.opacity = Math.random() * 0.4 + 0.1;

    // Désactivation de l'animation au départ
    particle.style.animationPlayState = 'paused';

    particleContainer.appendChild(particle);
}

// Activation au premier scroll
let particlesStarted = false;

window.addEventListener('scroll', () => {
    if (!particlesStarted && window.scrollY > 0) {
        particlesStarted = true;

        document.querySelectorAll('.particle').forEach(p => {
            p.style.animationPlayState = 'running';
        });
    }
});
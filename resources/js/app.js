import "./bootstrap";

// Mobile Navigation Toggle
const navToggle = document.getElementById("navToggle");
const navLinks = document.getElementById("navLinks");

navToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

// Close mobile menu when clicking a link
navLinks.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});

// Navbar scroll effect
const nav = document.getElementById("nav");
window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

// Form submission handler
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Thanks for reaching out! I'll get back to you soon.");
    this.reset();
});

// ============================================
// ADVANCED ANIMATIONS (NEW)
// ============================================

// 1. Staggered Scroll Animations (Intersection Observer)
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            // Optional: Unobserve setelah muncul agar animasi tidak berulang terus
            // observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Berikan delay bertingkat pada item di dalam grid agar muncul berurutan
const grids = document.querySelectorAll('.skills-grid, .projects-grid, .timeline');
grids.forEach(grid => {
    const items = grid.querySelectorAll('.skill-category, .project-card, .timeline-item');
    items.forEach((item, index) => {
        item.classList.add('animate-on-scroll');
        // Tambahkan class delay-1, delay-2, atau delay-3 berulang
        const delayClass = `delay-${(index % 3) + 1}`;
        item.classList.add(delayClass);
        observer.observe(item);
    });
});

// Observasi elemen lain yang ingin dianimasikan
document.querySelectorAll('.about-content, .contact-info, .contact-form-wrapper').forEach((el) => {
    el.classList.add("animate-on-scroll");
    observer.observe(el);
});

// 2. Parallax Scroll Effect pada Dekorasi
const parallaxElements = document.querySelectorAll('.parallax');

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    
    // Gunakan requestAnimationFrame untuk performa animasi scroll yang smooth
    requestAnimationFrame(() => {
        parallaxElements.forEach(el => {
            const speed = el.getAttribute('data-speed');
            // Geser posisi Y elemen berdasarkan kecepatan scroll
            const yPos = -(scrollY * speed);
            el.style.transform = `translateY(${yPos}px)`;
        });
    });
});
// Observe elements for animation
document
    .querySelectorAll(".skill-category, .project-card, .timeline-item")
    .forEach((el) => {
        el.classList.add("animate-on-scroll");
        observer.observe(el);
    });

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
const grids = document.querySelectorAll(
    ".skills-grid, .projects-grid, .timeline"
);
grids.forEach((grid) => {
    const items = grid.querySelectorAll(
        ".skill-category, .project-card, .timeline-item"
    );
    items.forEach((item, index) => {
        item.classList.add("animate-on-scroll");
        // Tambahkan class delay-1, delay-2, atau delay-3 berulang
        const delayClass = `delay-${(index % 3) + 1}`;
        item.classList.add(delayClass);
        observer.observe(item);
    });
});

// Observasi elemen lain yang ingin dianimasikan
document
    .querySelectorAll(".about-content, .contact-info, .contact-form-wrapper")
    .forEach((el) => {
        el.classList.add("animate-on-scroll");
        observer.observe(el);
    });

window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    // Gunakan requestAnimationFrame untuk performa animasi scroll yang smooth
    requestAnimationFrame(() => {
        parallaxElements.forEach((el) => {
            const speed = el.getAttribute("data-speed");
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

// ============================================
// AUTO-GENERATE & MAGNETIC REPEL PARTICLES
// ============================================
const sections = document.querySelectorAll("section, .footer");
const colors = ["violet", "lime", "dark", "white", "orange", "yellow"];
const activeParticles = []; // Menyimpan partikel untuk dilacak kursor

sections.forEach((sec) => {
    // Buat 4-7 partikel acak per section
    const particleCount = Math.floor(Math.random() * 4) + 4;

    for (let i = 0; i < particleCount; i++) {
        // 1. Buat Wrapper (Untuk animasi melayang)
        let wrapper = document.createElement("div");
        wrapper.className = "partikel-wrapper float-random";

        wrapper.style.top = `${Math.floor(Math.random() * 80 + 10)}%`;
        wrapper.style.left = `${Math.floor(Math.random() * 80 + 10)}%`;

        let size = Math.floor(Math.random() * 40 + 30);
        wrapper.style.width = `${size}px`;
        wrapper.style.height = `${size}px`;
        wrapper.style.animationDelay = `${(Math.random() * 2).toFixed(2)}s`;

        // 2. Buat Partikel (Untuk reaksi menjauh)
        let p = document.createElement("div");
        let randomColor = colors[Math.floor(Math.random() * colors.length)];
        p.className = `deco deco-partikel ${randomColor}`;

        // Masukkan partikel ke wrapper, wrapper ke section
        wrapper.appendChild(p);
        sec.appendChild(wrapper);

        // Simpan referensi ke partikel dalam untuk dianimasikan oleh kursor
        activeParticles.push(p);
    }
});

// LOGIKA KURSOR "REPEL" (MENJAUH)
document.addEventListener("mousemove", (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const repelRadius = 120; // Jarak sensor kursor ke partikel (pixel)

    activeParticles.forEach((p) => {
        // Ambil posisi akurat partikel di layar saat ini
        const rect = p.getBoundingClientRect();
        const partX = rect.left + rect.width / 2;
        const partY = rect.top + rect.height / 2;

        // Hitung jarak antara kursor dan partikel
        const distX = mouseX - partX;
        const distY = mouseY - partY;
        const distance = Math.sqrt(distX * distX + distY * distY);

        if (distance < repelRadius) {
            // Semakin dekat kursor, semakin kuat dorongannya
            const force = (repelRadius - distance) / repelRadius;
            const maxPush = 60; // Maksimal partikel terlempar 60px

            // Arah tolakan (negatif = menjauh dari kursor)
            const pushX = -(distX / distance) * force * maxPush;
            const pushY = -(distY / distance) * force * maxPush;

            p.style.transform = `translate(${pushX}px, ${pushY}px) scale(1.15) rotate(15deg)`;
            // Menambahkan bayangan hitam saat tertekan kursor
            p.style.filter = `drop-shadow(6px 6px 0px #1C1A16)`;
        } else {
            // Kembali ke bentuk dan posisi semula secara perlahan
            p.style.transform = `translate(0px, 0px) scale(1) rotate(0deg)`;
            p.style.filter = `drop-shadow(0px 0px 0px transparent)`;
        }
    });
});

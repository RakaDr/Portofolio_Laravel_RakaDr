<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKA | Cyber Security Student & Coding Instructor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@700;800&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- ============================================
         NAVIGATION
         ============================================ -->
    <nav class="nav" id="nav">
        <a href="#" class="nav-logo">RAKA.</a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="btn nav-cta">Let's Talk</a>
        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- ============================================
         HERO SECTION
         ============================================ -->
    <section class="hero" id="home">
        <!-- Decorations -->
        <div class="deco deco-c hero-deco-1 spin-slow parallax" data-speed="0.1"></div>
        <div class="deco deco-plus hero-deco-2 float parallax" data-speed="-0.15"></div>
        <div class="deco deco-circle hero-deco-3 float parallax" data-speed="0.05"></div>
        <div class="deco deco-arc-yellow hero-deco-4 spin-slow parallax" data-speed="-0.1"></div>
        <div class="deco deco-circle deco-circle-purple hero-deco-5 parallax" data-speed="0.2"></div>

        <div class="hero-container">
            <div class="hero-content">
                <p class="hero-greeting mono">Hello, I'm Raka</p>
                <h1 class="hero-title">
                    <span>Cyber</span>
                    <span>Security</span>
                    <span>Student</span>
                </h1>
                <p class="hero-subtitle">
                    Informatics Engineering student specializing in Cyber Security, Ethical Hacking,
                    and passionate about teaching programming & AI to the next generation of developers.
                </p>
                <div class="hero-cta">
                    <a href="#projects" class="btn">View My Work</a>
                    <a href="#contact" class="btn btn-dark">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <div class="hero-image-bg"></div>
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=800&fit=crop&crop=face"
                    alt="Raka - Cyber Security Student" class="hero-image">
            </div>
        </div>
    </section>
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <span class="mono">OPEN TO WORK</span> <span class="star">✦</span>
            <span class="mono">CYBER SECURITY ENTHUSIAST</span> <span class="star">✦</span>
            <span class="mono">AVAILABLE FOR FREELANCE</span> <span class="star">✦</span>
            <span class="mono">CREATIVE CODER</span> <span class="star">✦</span>
            <span class="mono">OPEN TO WORK</span> <span class="star">✦</span>
            <span class="mono">CYBER SECURITY ENTHUSIAST</span> <span class="star">✦</span>
            <span class="mono">AVAILABLE FOR FREELANCE</span> <span class="star">✦</span>
            <span class="mono">CREATIVE CODER</span> <span class="star">✦</span>
        </div>
    </div>
    <!-- ============================================
         ABOUT SECTION
         ============================================ -->
    <section class="about" id="about">
        <div class="about-container">
            <div class="about-image-wrapper">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&h=600&fit=crop"
                    alt="Working on laptop" class="about-image">
            </div>
            <div class="about-content">
                <p class="section-label mono">About Me</p>
                <h2 class="about-title">My Journey</h2>
                <p class="about-text">
                    I'm currently pursuing my degree in Informatics Engineering with a strong focus on
                    <strong>Cyber Security</strong> and <strong>Ethical Hacking</strong>. My passion lies in
                    understanding how systems work and how to protect them from potential threats.
                </p>
                <p class="about-text">
                    Beyond security, I'm a dedicated <strong>Coding & AI Instructor</strong>. I believe that
                    teaching is the best way to learn deeper — every explanation sharpens my own understanding
                    and helps others grow their technical skills.
                </p>
                <a href="#contact" class="btn">Let's Connect</a>
            </div>
        </div>
    </section>

    <!-- ============================================
         SKILLS SECTION
         ============================================ -->
    <section class="skills" id="skills">
        <div class="skills-header">
            <p class="section-label mono">My Expertise</p>
            <h2>Skills & Tools</h2>
        </div>

        <div class="skills-grid">
            <!-- Programming -->
            <div class="skill-category">
                <div class="skill-icon">💻</div>
                <h3 class="skill-title">Programming</h3>
                <ul class="skill-list">
                    <li>Python</li>
                    <li>Java</li>
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                </ul>
                <div class="skill-tags">
                    <span class="skill-tag">OOP</span>
                    <span class="skill-tag">DSA</span>
                </div>
            </div>

            <!-- Security -->
            <div class="skill-category">
                <div class="skill-icon">🔒</div>
                <h3 class="skill-title">Security</h3>
                <ul class="skill-list">
                    <li>Penetration Testing</li>
                    <li>Ethical Hacking</li>
                    <li>Vulnerability Assessment</li>
                    <li>Network Security</li>
                </ul>
                <div class="skill-tags">
                    <span class="skill-tag">Kali Linux</span>
                    <span class="skill-tag">Metasploit</span>
                </div>
            </div>

            <!-- Tools & Other -->
            <div class="skill-category">
                <div class="skill-icon">🛠️</div>
                <h3 class="skill-title">Tools & Other</h3>
                <ul class="skill-list">
                    <li>DevOps Basics</li>
                    <li>Git & GitHub</li>
                    <li>UI/UX Design</li>
                    <li>Cloud Fundamentals</li>
                </ul>
                <div class="skill-tags">
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">Figma</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         EXPERIENCE SECTION
         ============================================ -->
    <section class="experience" id="experience">
        <div class="experience-container">
            <div class="experience-header">
                <p class="section-label mono">Experience</p>
                <h2>Where I've Worked</h2>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <p class="timeline-date mono">2023 — Present</p>
                    <h3 class="timeline-title">Teaching Instructor</h3>
                    <p class="timeline-company">Coding & AI Training</p>
                </div>

                <div class="timeline-item">
                    <p class="timeline-date mono">2022 — 2023</p>
                    <h3 class="timeline-title">Freelance Web Developer</h3>
                    <p class="timeline-company">Self-Employed</p>
                </div>

                <div class="timeline-item">
                    <p class="timeline-date mono">2021 — 2022</p>
                    <h3 class="timeline-title">IT Support Assistant</h3>
                    <p class="timeline-company">University IT Department</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         PROJECTS SECTION
         ============================================ -->
    <section class="projects" id="projects">
        <div class="projects-header">
            <p class="section-label mono">Projects</p>
            <h2>Featured Work</h2>
        </div>

        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1667372393119-c8f473882e8e?w=600&h=400&fit=crop"
                    alt="AmbatuOps Project" class="project-image">
                <div class="project-content">
                    <p class="project-number mono">01 / DevOps</p>
                    <h3 class="project-title">AmbatuOps</h3>
                    <p class="project-desc">
                        A comprehensive DevOps group project implementing CI/CD pipelines,
                        containerization with Docker, and cloud deployment strategies.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">Docker</span>
                        <span class="project-tag">CI/CD</span>
                        <span class="project-tag">AWS</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=400&fit=crop"
                    alt="Java JSP Web App" class="project-image">
                <div class="project-content">
                    <p class="project-number mono">02 / Web App</p>
                    <h3 class="project-title">Java JSP CRUD App</h3>
                    <p class="project-desc">
                        Full-featured web application built with Java JSP, implementing
                        complete CRUD operations with MySQL database integration.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">Java</span>
                        <span class="project-tag">JSP</span>
                        <span class="project-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=600&h=400&fit=crop"
                    alt="Security Tools" class="project-image">
                <div class="project-content">
                    <p class="project-number mono">03 / Security</p>
                    <h3 class="project-title">Python Security Tools</h3>
                    <p class="project-desc">
                        Collection of Python automation scripts for security testing,
                        including port scanners, vulnerability checkers, and log analyzers.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">Python</span>
                        <span class="project-tag">Security</span>
                        <span class="project-tag">Automation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CONTACT SECTION
         ============================================ -->
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="contact-info">
                <p class="section-label mono">Contact</p>
                <h2 class="contact-title">Let's Build Together</h2>
                <p class="contact-text">
                    Whether you're looking for a collaborator on a project, need help with
                    security testing, or want to learn coding — I'd love to hear from you!
                </p>
                <ul class="contact-links">
                    <li>
                        <a href="mailto:randikaraka19@gmail.com">
                            <span>📧</span> randikaraka19@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/raka-dwi-randika-a856b433a/" target="_blank">
                            <span>💼</span> LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/RakaDr" target="_blank">
                            <span>🐙</span> GitHub
                        </a>
                    </li>
                </ul>
            </div>

            <div class="contact-form-wrapper">
                <form id="contactForm">
                    <div class="form-group">
                        <label class="form-label mono">Name</label>
                        <input type="text" class="form-input" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mono">Email</label>
                        <input type="email" class="form-input" placeholder="your@email.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mono">Message</label>
                        <textarea class="form-textarea" placeholder="Tell me about your project..." required></textarea>
                    </div>
                    <button type="submit" class="form-submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <div class="footer-logo">RAKA.</div>
                <p class="footer-tagline">
                    Cyber security student. Coding instructor. Always learning.
                </p>
            </div>

            <div class="footer-links">
                <div class="footer-column">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Social</h4>
                    <ul>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copyright">© 2026 Raka. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ============================================
         JAVASCRIPT
         ============================================ -->

</body>

</html>
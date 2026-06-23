    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta
            name="description"content="Portofolio Pandu Adi Kusuma - Data Entry, Administrative Support, Software Engineering">
        <title>Pandu-Portofolio</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

        <style>
            :root {
                --bg-primary: #f8fafc;
                --bg-secondary: #f1f5f9;
                --bg-card: #ffffff;
                --text-primary: #0f172a;
                --text-secondary: #475569;
                --text-muted: #64748b;
                --border-color: rgba(0, 0, 0, 0.08);
                --card-bg: rgba(0, 0, 0, 0.04);
                --timeline-bg: rgba(0, 0, 0, 0.04);
            }

            body {
                margin: 0;
                background: var(--bg-primary);
                color: var(--text-primary);
                transition: background 0.3s ease, color 0.3s ease;
            }

            body.dark-mode {
                --bg-primary: #0f172a;
                --bg-secondary: #111827;
                --bg-card: #1e293b;
                --text-primary: #f8fafc;
                --text-secondary: #cbd5e1;
                --text-muted: #94a3b8;
                --border-color: rgba(255, 255, 255, 0.1);
                --card-bg: rgba(255, 255, 255, 0.06);
                --timeline-bg: rgba(255, 255, 255, 0.06);
            }


            body.dark-mode section {
                background: #0f172a !important;
            }

            body.dark-mode .card,
            body.dark-mode .portfolio-card {
                background: #1e293b;
                color: white;
            }

            body.dark-mode .text-muted {
                color: #cbd5e1 !important;
            }

            body.dark-mode footer {
                background: #020617 !important;
            }

            body.dark-mode .skill-pill {
                background: #1e293b;
                color: white;
                border-color: #334155;
            }

            html {
                scroll-behavior: smooth;
            }

            section {
                scroll-margin-top: 90px;
            }

            .card {
                transition: .3s;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, .15) !important;
            }

            .hero-section {
                min-height: 100vh;
                display: flex;
                align-items: center;
                background:
                    radial-gradient(circle at top right, #3b82f6 0%, transparent 30%),
                    radial-gradient(circle at bottom left, #2563eb 0%, transparent 30%),
                    linear-gradient(135deg, #0f172a, #111827, #1e293b);
                overflow: hidden;
                position: relative;
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .hero-title {
                color: #fff;
                font-weight: 800;
            }

            .hero-subtitle {
                color: #60a5fa;
            }

            .hero-text {
                color: #cbd5e1;
                max-width: 600px;
            }

            .profile-image {
                width: 450px;
                height: 450px;
                object-fit: cover;
                border-radius: 50%;
                border: 8px solid rgba(255, 255, 255, .15);
                box-shadow: 0 25px 80px rgba(0, 0, 0, .5);
            }

            @media (max-width: 768px) {
                .about-image {
                    margin-top: 20px;
                    height: 320px;
                }
            }

            /* Fix tombol tema di mobile */
            @media (max-width: 991px) {
                #themeToggle {
                    position: static !important;
                    margin-top: 10px;
                }
            }

            .hero-badge {
                display: inline-block;
                padding: 10px 20px;
                border-radius: 50px;
                background: rgba(255, 255, 255, .1);
                backdrop-filter: blur(10px);
                color: #fff;
                margin-bottom: 20px;
            }

            .stat-box {
                background: rgba(255, 255, 255, .08);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, .1);
                border-radius: 16px;
                padding: 15px;
                text-align: center;
                color: white;
            }

            .floating-wa {
                position: fixed;
                right: 25px;
                bottom: 25px;
                width: 60px;
                height: 60px;
                background: #25D366;
                color: white;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 30px;
                text-decoration: none;
                z-index: 9999;
                box-shadow: 0 10px 30px rgba(0, 0, 0, .3);
            }

            .floating-wa:hover {
                color: white;
                transform: scale(1.1);
            }

            .navbar {
                transition: all .3s ease;
                background: transparent;
                padding: 20px 0;
                font-size: 18px;
            }

            .navbar.scrolled {
                background: rgba(15, 23, 42, .75);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
                padding: 12px 0;
            }

            body:not(.dark-mode) .navbar.scrolled {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(15px);
            }

            body:not(.dark-mode) .navbar.scrolled .nav-link,
            body:not(.dark-mode) .navbar.scrolled .navbar-brand {
                color: #0f172a !important;
            }

            body:not(.dark-mode) #themeToggle {
                border-color: #0f172a;
                color: #0f172a;
            }

            .nav-link {
                position: relative;
                color: white;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -5px;
                width: 0;
                height: 2px;
                background: #3b82f6;
                transition: .3s;
            }

            .nav-link:hover::after {
                width: 100%;
            }

            .nav-link.active {
                color: #60a5fa !important;
            }

            .nav-link.active::after {
                width: 100%;
            }

            .portfolio-card {
                background: #1e293b;
                border: 1px solid rgba(255, 255, 255, .1);
                border-radius: 16px;
                overflow: hidden;
                transition: .3s;
            }

            .portfolio-card h4 {
                color: white;
            }

            .portfolio-card .text-muted {
                color: #94a3b8 !important;
            }

            .portfolio-card:hover {
                transform: translateY(-12px);
                box-shadow: 0 25px 60px rgba(0, 0, 0, .3);
            }

            .portfolio-image {
                width: 100%;
                height: 240px;
                object-fit: cover;
                transition: .4s;
            }

            .portfolio-card:hover .portfolio-image {
                transform: scale(1.05);
            }

            /* skills */
            #skills,
            .skills-section {
                background: var(--bg-primary);
            }

            .skills-section .text-center h2 {
                color: var(--text-primary);
            }

            .skills-section .text-center p {
                color: var(--text-muted);
            }

            .skills-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
                justify-content: center;
                padding: 10px 20px;
            }

            .skills-grid span {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 14px 28px;
                border-radius: 50px;
                background: rgba(255, 255, 255, .08);
                border: 1px solid rgba(255, 255, 255, .1);
                color: white;
                font-weight: 600;
                backdrop-filter: blur(10px);
            }

            .skills-grid span i {
                color: #60a5fa;
            }

            .skill-pill i {
                color: #60a5fa;
            }

            .skill-pill:hover {
                transform: translateY(-6px);
                border-color: #2563eb;
                box-shadow: 0 15px 30px rgba(37, 99, 235, .15);
            }

            .skill-card {
                background: var(--card-bg);
                border: 1px solid var(--border-color);
                border-radius: 16px;
                text-align: center;
                padding: 20px 12px;
                cursor: default;
                transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
            }

            .skill-card:hover {
                transform: translateY(-8px);
                background: rgba(59, 130, 246, 0.12);
                border-color: rgba(59, 130, 246, 0.4);
                box-shadow: 0 16px 40px rgba(37, 99, 235, 0.2);
            }

            .skill-card:hover .skill-icon {
                color: #60a5fa;
                transform: scale(1.15);
            }

            .skill-card:hover .skill-label {
                color: #fff;
            }

            .skill-icon {
                color: var(--text-muted);
            }

            .skill-label {
                color: var(--text-secondary);
            }

            .skill-icon {
                font-size: 32px;
                color: #94a3b8;
                display: block;
                margin-bottom: 10px;
                transition: color 0.25s ease, transform 0.25s ease;
            }

            /* about */
            #about {
                background: var(--bg-secondary);
                color: var(--text-primary);
            }

            #about h2,
            #about h3,
            #about h5 {
                color: var(--text-primary);
            }

            #about p {
                color: var(--text-muted);
            }

            #about .text-muted {
                color: #94a3b8 !important;
            }

            #skills {
                background: #0f172a;
            }

            .about-image {
                width: 100%;
                max-width: 420px;
                height: 480px;
                object-fit: cover;
                margin-top: 100px;
                border-radius: 12px;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            }

            .timeline {
                margin-top: 30px;
            }

            .timeline-item {
                background: var(--timeline-bg);
                border: 1px solid var(--border-color);
                border-radius: 20px;
                padding: 25px;
                margin-bottom: 20px;
                transition: .3s;
            }

            .timeline-item p {
                color: var(--text-muted);
                margin-bottom: 0;
            }

            .dark-section {
                background: #111827;
                color: white;
            }

            .timeline-icon {
                width: 42px;
                height: 42px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: #2563eb;
                color: white;
                margin-right: 12px;
                flex-shrink: 0;
            }

            .timeline-item {
                transition: .3s;
            }

            .timeline-item:hover {
                transform: translateX(10px);
            }

            /* service */
            .service-card {
                background: var(--card-bg);
                border: 1px solid var(--border-color);
                border-radius: 30px;
                padding: 35px;
                height: 100%;
                transition: .4s;
                position: relative;
                overflow: hidden;
            }

            .service-card:hover {
                transform: translateY(-10px);
                border-color: rgba(59, 130, 246, .5);
                box-shadow: 0 25px 50px rgba(37, 99, 235, .2);
            }

            .service-card::before {
                content: '';
                position: absolute;
                top: -50px;
                right: -50px;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background: rgba(59, 130, 246, .15);
            }

            .service-icon {
                width: 70px;
                height: 70px;
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 28px;
                background: linear-gradient(135deg, #2563eb, #7c3aed);
                color: white;
                margin-bottom: 25px;
            }

            .services-section h2 {
                color: var(--text-primary);
            }

            .services-section .section-subtitle {
                color: var(--text-muted);
            }

            .service-card h4 {
                color: var(--text-primary);
            }

            .service-card p {
                color: var(--text-muted);
                line-height: 1.8;
            }

            .services-section h2 {
                color: #fff;
            }

            .services-section .section-subtitle {
                color: #94a3b8;
            }

            .section-title {
                position: relative;
                display: inline-block;
            }

            .section-title::after {
                content: '';
                width: 70px;
                height: 4px;
                background: #2563eb;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                bottom: -12px;
                border-radius: 10px;
            }

            .services-section {
                background: var(--bg-secondary);
            }

            /* portfolio */
            #portfolio {
                background: var(--bg-primary) !important;
            }

            #portfolio h2 {
                color: var(--text-primary);
            }

            #portfolio .text-muted {
                color: var(--text-muted) !important;
            }

            .portfolio-card {
                background: var(--bg-card);
                border: 1px solid var(--border-color);
                border-radius: 16px;
                overflow: hidden;
                transition: .3s;
            }

            .portfolio-card h4 {
                color: var(--text-primary);
            }

            .portfolio-card .text-muted {
                color: var(--text-muted) !important;
            }

            footer {
                background: #020617;
                border-top: 1px solid rgba(255, 255, 255, .08);
            }

            footer .nav-link {
                color: #cbd5e1;
                text-decoration: none;
            }

            footer .nav-link:hover {
                color: #60a5fa;
            }

            /* BATAS DUNIA AKHIRAT */

            /* Skills - light mode fix */
            body:not(.dark-mode) .skill-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            }

            body:not(.dark-mode) .skill-icon {
                color: #3b82f6;
            }

            body:not(.dark-mode) .skill-label {
                color: #334155;
            }

            body:not(.dark-mode) .skill-card:hover {
                background: #eff6ff;
                border-color: #93c5fd;
                box-shadow: 0 8px 24px rgba(59, 130, 246, 0.15);
            }

            body:not(.dark-mode) .skill-card:hover .skill-icon {
                color: #2563eb;
            }

            body:not(.dark-mode) .skill-card:hover .skill-label {
                color: #1e40af;
            }

            /* Skills section background - light mode */
            body:not(.dark-mode) #skills,
            body:not(.dark-mode) .skills-section {
                background: #f1f5f9;
            }

            body:not(.dark-mode) .skills-section .text-center h2 {
                color: #0f172a;
            }

            body:not(.dark-mode) .skills-section .text-center p {
                color: #64748b;
            }

            /* Service card - light mode fix */
            body:not(.dark-mode) .service-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            }

            body:not(.dark-mode) .service-card h4 {
                color: #0f172a;
            }

            body:not(.dark-mode) .service-card p {
                color: #64748b;
            }

            body:not(.dark-mode) .service-card:hover {
                border-color: #93c5fd;
                box-shadow: 0 20px 40px rgba(59, 130, 246, 0.12);
            }

            body:not(.dark-mode) .service-card::before {
                background: rgba(59, 130, 246, 0.06);
            }

            body:not(.dark-mode) .services-section h2 {
                color: #0f172a;
            }

            body:not(.dark-mode) .services-section .section-subtitle {
                color: #64748b;
            }
        </style>
    </head>

    <body>
        {{-- navbar --}}
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container position-relative">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                    </ul>

                    <button id="themeToggle" class="btn btn-outline-light position-absolute end-0 me-3">
                        <i class="bi bi-moon-fill"></i>
                    </button>
                </div>

            </div>
        </nav>

        @yield('content')

        {{-- footer --}}
        <footer id="footer" class="text-white pt-5">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <h3 class="fw-bold">Pandu Adi Kusuma</h3>

                        <p class="text-light mt-3">
                            -
                        </p>
                    </div>

                    <div class="col-lg-2">
                        <h5 class="fw-semibold mb-3">Navigation</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="nav-link" href="#home">Home</a></li>
                            <li class="mb-2"><a class="nav-link" href="#about">About</a></li>
                            <li class="mb-2"><a class="nav-link" href="#skills">Skills</a></li>
                            <li class="mb-2"><a class="nav-link" href="#services">Services</a></li>
                            <li class="mb-2"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="fw-semibold mb-3">Contact</h5>

                        <p class="mb-2 text-light">
                            <i class="bi bi-envelope-fill me-2"></i> pandu@gmail.com
                        </p>

                        <p class="mb-2 text-light">
                            <i class="bi bi-telephone-fill me-2"></i> +62 882 1117 6836
                        </p>

                        <p class="text-light">
                            <i class="bi bi-geo-alt-fill me-2"></i> Bekasi, Jawa Barat
                        </p>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="fw-semibold mb-3">Let's Work Together</h5>

                        <p class="text-light">
                            -
                        </p>

                        <a href="https://wa.me/6288211176836?text=Halo%20Pandu" target="_blank" class="btn btn-success">
                            <i class="bi bi-whatsapp"></i>
                            Chat WhatsApp
                        </a>
                    </div>

                </div>

                <hr class="border-secondary my-4">

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-4">

                    <p class="mb-2 mb-md-0 text-light">
                        © 2026 Pandu Adi Kusuma. All Rights Reserved.
                    </p>

                    <div>
                        <a href="https://www.linkedin.com/in/panduadikusuma" class="text-light me-3" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="mailto:emailkamu@gmail.com" class="text-light">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>

                </div>

            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

        {{-- wa ngambang --}}
        <a href="https://wa.me/6288211176836?text=Halo%20Pandu" target="_blank" class="floating-wa">
            <i class="bi bi-whatsapp"></i>
        </a>

        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>

        <script>
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        </script>

        {{-- navbar --}}
        <script>
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => link.classList.remove('active'));
                        const activeLink = document.querySelector(
                            `.navbar-nav .nav-link[href="#${entry.target.id}"]`);
                        if (activeLink) activeLink.classList.add('active');
                    }
                });
            }, {
                threshold: 0.2
            });

            sections.forEach(section => observer.observe(section));
        </script>

        <script>
            const toggleBtn = document.getElementById('themeToggle');

            function updateIcon() {
                if (document.body.classList.contains('dark-mode')) {
                    toggleBtn.innerHTML = '<i class="bi bi-sun-fill"></i>';
                } else {
                    toggleBtn.innerHTML = '<i class="bi bi-moon-fill"></i>';
                }
            }

            toggleBtn.addEventListener('click', () => {
                document.body.classList.toggle('dark-mode');
                const isDark = document.body.classList.contains('dark-mode');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
                updateIcon();
            });

            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
            }
            updateIcon();
        </script>

    </body>

    </html>

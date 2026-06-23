    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pandu-Portofolio</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

        <style>
            body {
                margin: 0;
                transition: all .3s ease;
            }

            body.dark-mode {
                background: #0f172a;
                color: white;
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
            }

            .navbar.scrolled {
                background: rgba(15, 23, 42, .75);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
                padding: 12px 0;
            }

            .nav-link {
                position: relative;
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

            .portfolio-card {
                background: rgba(255, 255, 255, .08);
                backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, .1);
            }

            .portfolio-card h4 {
                color: white;
            }

            .portfolio-card .text-muted {
                color: #94a3b8 !important;
            }

            .portfolio-card:hover {
                transform: translateY(-12px);
                box-shadow: 0 25px 60px rgba(0, 0, 0, .15);
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

            /* skilss */
            .skills-section {
                background: #0f172a;
                overflow: hidden;
            }

            .marquee {
                overflow: hidden;
                white-space: nowrap;
                margin: 25px 0;
            }

            .marquee-content {
                display: inline-flex;
                gap: 20px;
                animation: scrollLeft 25s linear infinite;
            }

            .reverse .marquee-content {
                animation: scrollRight 25s linear infinite;
            }

            .marquee-content span {
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

            .marquee-content i {
                color: #60a5fa;
            }

            @keyframes scrollLeft {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            @keyframes scrollRight {
                from {
                    transform: translateX(-50%);
                }

                to {
                    transform: translateX(0);
                }
            }

            .skill-pill i {
                color: #60a5fa;
            }

            .skill-pill:hover {
                transform: translateY(-6px);
                border-color: #2563eb;
                box-shadow: 0 15px 30px rgba(37, 99, 235, .15);
            }

            /* about */
            #skills {
                background: #0f172a;
            }

            .about-image {
                width: 280px;
                height: 280px;
                object-fit: cover;
                border-radius: 50%;
                border: 8px solid #fff;
                box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
            }

            .timeline {
                margin-top: 30px;
            }

            .timeline-item {
                background: rgba(255, 255, 255, .06);
                backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, .1);
                border-radius: 20px;
                padding: 25px;
                margin-bottom: 20px;
            }

            .dark-section {
                background: #111827;
                color: white;
            }

            /* .timeline-item::before {
                content: '';
                width: 14px;
                height: 14px;
                background: #2563eb;
                border-radius: 50%;
                position: absolute;
                left: -9px;
                top: 5px;
            } */

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
            }

            .timeline-item {
                transition: .3s;
            }

            .timeline-item:hover {
                transform: translateX(10px);
            }

            /* service */
            .service-card {
                background: rgba(255, 255, 255, .08);
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, .15);
                border-radius: 30px;
                padding: 35px;
                height: 100%;
                transition: .4s;
                overflow: hidden;
                position: relative;
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

                background: linear-gradient(135deg,
                        #2563eb,
                        #7c3aed);

                color: white;
                margin-bottom: 25px;
            }

            .service-card h4 {
                font-size: 1.4rem;
                font-weight: 700;
                margin-bottom: 15px;
                color: #fff;
            }

            .service-card p {
                color: #94a3b8;
                line-height: 1.8;
            }

            .services-section h2 {
                color: #fff;
            }

            .services-section p {
                color: #94a3b8;
            }

            .service-desc {
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
                background: #111827;
            }

            footer {
                background: #020617;
                border-top: 1px solid rgba(255, 255, 255, .08);
            }
        </style>
    </head>

    <body>
        
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark  fixed-top">
            <div class="container">

                <a class="navbar-brand fw-bold" href="#">
                    Portofolio
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
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

                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>

                        <button id="themeToggle" class="btn btn-outline-light ms-3">
                            <i class="bi bi-moon-fill"></i>
                        </button>
                    </ul>
                </div>

            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>

        
        <footer id="footer" class="bg-dark text-white pt-5">

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
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#" class="text-decoration-none text-light">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#about" class="text-decoration-none text-light">
                                    About
                                </a>
                            </li>

                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#skills" class="text-decoration-none text-light">
                                    Skills
                                </a>
                            </li>

                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#services" class="text-decoration-none text-light">
                                    Services
                                </a>
                            </li>

                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                            </li>

                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#footer">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="fw-semibold mb-3">Contact</h5>

                        <p class="mb-2">
                            # emailkamu@gmail.com
                        </p>

                        <p class="mb-2">
                            # +62 xxx xxxx xxxx
                        </p>

                        <p>
                            # Tangerang, Banten
                        </p>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="fw-semibold mb-3">Let's Work Together</h5>

                        <p class="text-light">
                            Siap membantu kebutuhan data entry,
                            administrasi digital, dan pengolahan dokumen Anda.
                        </p>

                        <a href="https://wa.me/6288211176836?text=Halo%20Pandu" target="_blank" class="btn btn-success">

                            <i class="bi bi-whatsapp"></i>
                            Chat WhatsApp

                        </a>
                    </div>

                </div>

                <hr class="border-secondary my-4">

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-4">

                    <p class="mb-2 mb-md-0">
                        © 2026 Pandu Adi Kusuma. All Rights Reserved.
                    </p>

                    <div>
                        <a href="www.linkedin.com/in/panduadikusuma" class="text-light me-3">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="text-light">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>

                </div>

            </div>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

        
        <a href="https://wa.me/6288211176836?text=Halo%20Pandu" target="_blank" class="floating-wa">

            <i class="bi bi-whatsapp"></i>

        </a>
    </body>

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
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

    <script>
        const toggleBtn = document.getElementById('themeToggle');

        toggleBtn.addEventListener('click', () => {

            document.body.classList.toggle('dark-mode');

            if (document.body.classList.contains('dark-mode')) {
                toggleBtn.innerHTML =
                    document.body.classList.contains('dark-mode') ?
                    '<i class="bi bi-sun-fill"></i>' :
                    '<i class="bi bi-moon-fill"></i>';
            } else {
                toggleBtn.innerHTML =
                    document.body.classList.contains('light-mode') ?
                    '<i class="bi bi-sun-fill"></i>' :
                    '<i class="bi bi-moon-fill"></i>';
            }

        });

        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            toggleBtn.innerHTML =
                document.body.classList.contains('dark-mode') ?
                '<i class="bi bi-sun-fill"></i>' :
                '<i class="bi bi-moon-fill"></i>';
        }
    </script>

    </html>
<?php /**PATH C:\xampp-new\htdocs\company-profile\resources\views/layouts/app.blade.php ENDPATH**/ ?>
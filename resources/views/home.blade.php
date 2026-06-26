@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center" style="min-height:100vh;">
                <div class="col-lg-6 hero-content" data-aos="fade-right">

                    <div class="hero-badge mb-4">
                        Available For Freelance Work
                    </div>

                    <h1 class="display-2 fw-bold hero-title">
                        Pandu Adi Kusuma
                    </h1>

                    <h3 class="hero-subtitle mb-4">
                         I'm a <span id="typed-text"></span>
                    </h3>

                    <p class="lead hero-text">
                        Passionate about data, administration, and technology.
                        Experienced in data entry, administrative support, and web development.
                        Ready to deliver accurate, efficient, and professional solutions
                        to help your business grow and run smoothly.
                    </p>

                    <div class="mt-4">
                        
                        {{-- target="_blank" --}}
                        <a href="" class="btn btn-success btn-lg me-2">
                            <i class="bi bi-whatsapp"></i>
                            Contact Me
                        </a>
                        
                        {{-- Download --}}
                        <a href="" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-download"></i>
                            Download Cv
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="zoom-in">
                    <img src="/images/ui2.jpg" class="profile-image" alt="Pandu Adi Kusuma" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- about me --}}
    <section id="about" class="py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold" data-aos="fade-down">
                    About Me
                </h2>

                <p data-aos="fade-down" data-aos-delay="100" style="color:#94a3b8;">
                    My journey and experiences
                </p>
            </div>

            <div class="row align-items-center">

                <div class="col-lg-5 text-center mb-4" data-aos="fade-right">
                    <img src="/images/makaraui2.jpg" class="about-image" alt="Pandu" loading="lazy">
                </div>

                <div class="col-lg-7" data-aos="fade-left">

                    <h3 class="fw-bold mb-4">
                        Pandu Adi Kusuma
                    </h3>

                    <p style="color:#94a3b8;">
                        I am a graduate of Taruna Bangsa Vocational School, majoring in Software Engineering, with an
                        interest in administration, data processing, and technology.
                    </p>

                    <div class="timeline">

                        <div class="timeline-item">
                            <h5 class="d-flex align-items-center">
                                <span class="timeline-icon">
                                    <i class="bi bi-mortarboard-fill"></i>
                                </span>
                                Education
                            </h5>
                            <p>Taruna Bangsa Vocational High School Software Engineering Department</p>
                        </div>

                        <div class="timeline-item">
                            <h5 class="d-flex align-items-center">
                                <span class="timeline-icon">
                                    <i class="bi bi-briefcase-fill"></i>
                                </span>
                                Professional Experience
                            </h5>
                            <p>Experienced as a Data Entry Intern at the Jakarta Regional Office of the Ministry of
                                Religious Affairs, supporting data management and administration with a high level of
                                accuracy.</p>
                        </div>

                        <div class="timeline-item">
                            <h5 class="d-flex align-items-center">
                                <span class="timeline-icon">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </span>
                                Administrative Support
                            </h5>
                            <p>Experienced in using Excel, Word, and Google Workspace in administration, data processing,
                                and technology.</p>
                        </div>

                        <div class="timeline-item">
                            <h5 class="d-flex align-items-center">
                                <span class="timeline-icon">
                                    <i class="bi bi-robot"></i>
                                </span>
                                AI-Powered Productivity
                            </h5>
                            <p>Using AI tools for research, documentation, increasing work productivity, and also to assist
                                with data processing, information analysis, and the automation of administrative tasks.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- skills --}}
    <section id="skills" class="skills-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Skills & Tools</h2>
                <p>Technologies and tools I work with</p>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-file-earmark-code skill-icon"></i>
                        <div class="skill-label">Laravel</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-filetype-php skill-icon"></i>
                        <div class="skill-label">PHP</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-filetype-html skill-icon"></i>
                        <div class="skill-label">HTML</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-filetype-css skill-icon"></i>
                        <div class="skill-label">CSS</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-database-fill skill-icon"></i>
                        <div class="skill-label">MySQL</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-file-earmark-spreadsheet-fill skill-icon"
                            data-aos="fade-up"data-aos-delay="100"></i>
                        <div class="skill-label">Excel</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="700">
                        <i class="bi bi-table skill-icon"></i>
                        <div class="skill-label">Google Sheets</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="800">
                        <i class="bi bi-file-earmark-word-fill skill-icon"></i>
                        <div class="skill-label">Word</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="900">
                        <i class="bi bi-robot skill-icon"></i>
                        <div class="skill-label">AI Tools</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="1000">
                        <i class="bi bi-briefcase-fill skill-icon"></i>
                        <div class="skill-label">Administration</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="1100">
                        <i class="bi bi-people skill-icon"></i>
                        <div class="skill-label">Team Work</div>
                    </div>
                </div>
                <div class="col">
                    <div class="skill-card" data-aos="fade-up" data-aos-delay="1200">
                        <i class="bi bi-zoom-in  skill-icon"></i>
                        <div class="skill-label">High Accuracy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- services --}}
    <section id="services" class="services-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold section-title">What I Can Help You With</h2>
                <p class="section-subtitle mt-4">
                    Professional services designed to support your business,
                    administrative, and data management needs.
                </p>
            </div>

            <div class="row g-4">
                {{-- Sec 1 --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-database-fill"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-table"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>
                {{-- sec 2 --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-table"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-database-fill"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <h4>-</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                            reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                            molestias. Saepe magnam distinctio qui deleniti.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- portfolio --}}
    <section id="portfolio" class="py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">Portfolio</h2>
                <p style="color:#94a3b8;">
                    Some projects and experiences that I have worked on
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <img src="/images/ipb2.jpg" class="portfolio-image" alt="Project">
                        <div class="p-4">
                            <h4>-</h4>
                            <p class="text-muted">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum maxime nesciunt architecto
                                reprehenderit quasi! In repellat dolores dolorem eum nobis doloribus cupiditate possimus non
                                molestias. Saepe magnam distinctio qui deleniti.
                            </p>
                            <div class="mb-3">
                                <span class="badge bg-success">Tools</span>
                                <span class="badge bg-secondary">Skills</span>
                            </div>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection

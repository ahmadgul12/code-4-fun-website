<!doctype html>
<html lang="en">

<?php $pageTitle = "Home — Code4Fun"; ?>
<?php include __DIR__ . '/components/head.php'; ?>

<body>
    <!-- Navbar -->
    <?php include 'components/nav.php'; ?>
    <section class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide"
                        style="background-image: url('./assets/img/class/net/html-slider-wordpress.jpg');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="hero-content" data-aos="fade-up">
                                <h1 class="display-5 fw-bold">Code4Fun — UNHCR</h1>
                                <p class="lead">Learn Web Development & Mobile App Development, build real software
                                    projects.</p>
                                <a href="projects.php" class="btn btn-primary btn-lg me-2">See Student Projects</a>
                                <a href="about.php" class="btn btn-outline-light btn-lg">About the Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide"
                        style="background-image: url('/assets/img/class/net/coding10.webp');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="hero-content text-end" data-aos="fade-left">
                                <h1 class="display-5 fw-bold">Develop Websites & Mobile Apps</h1>
                                <p class="lead">From HTML/CSS/JavaScript to backend and mobile deployment — get
                                    hands-on.</p>
                                <a href="about.php" class="btn btn-light btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide"
                        style="background-image: url('./assets/img/class/net/shutterstock_634574354.jpg');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="hero-content" data-aos="fade-right">
                                <h1 class="display-5 fw-bold">Supported by UNHCR & Implemented by CHA</h1>
                                <p class="lead">Empowering youth through code in partnership with humanitarian
                                    organisations.</p>
                                <a href="donors.php" class="btn btn-outline-light btn-lg">Our Partners</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold">What you will learn</h2>
                    <p class="text-muted">In Code4Fun, students learn web development (HTML, CSS, JavaScript, backend)
                        and mobile app development (Flutter, deployment) and deliver real projects.</p>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa-solid fa-check text-primary me-2"></i> Responsive Web Design & JavaScript
                            Interactivity</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i> Backend Basics & Database Integration
                        </li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i> Mobile App Development: Flutter &
                            Deployment</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i> Build Portfolio-Ready Projects for
                            Employers / Donors</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                        <img src="assets/img/class/home_page.jpg" alt="students coding" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-0">Our Partner Organisations</h3>
                <a href="donors.php" class="link-primary">View all partners →</a>
            </div>
            <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center gx-4">
                            <div class="col text-center"><img src="assets/img/donors/unhcr-logo.png" alt="UNHCR Logo"
                                    class="donor-logo"></div>
                            <div class="col text-center"><img src="assets/img/donors/cha-logo.png" alt="CHA Logo"
                                    class="donor-logo"></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon small"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon small"></span>
                </button>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-0">Featured Student Projects</h3>
                <a href="projects.php" class="link-primary">Browse all projects →</a>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-sm project-card h-100 overflow-hidden"
                        style="transition: all 0.4s ease;">
                        <div class="project-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=1600&auto=format&fit=crop"
                                class="card-img-top" alt="Store Management System"
                                style="object-fit: cover; height: 200px; transition: transform 0.5s ease;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold text-primary mb-2">Store Management System</h5>
                            <p class="card-text text-muted small mb-3">
                                A web-based system built to simplify inventory and sales management for small
                                businesses.
                                <br><strong>By:</strong> Mohammad kabir
                            </p>
                            <a href="projects.php#project-1"
                                class="btn btn-outline-primary btn-sm mt-auto rounded-pill px-3">
                                <i class="bi bi-box-arrow-up-right me-1"></i> View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-sm project-card h-100 overflow-hidden"
                        style="transition: all 0.4s ease;">
                        <div class="project-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=1600&auto=format&fit=crop"
                                class="card-img-top" alt="Store Management System"
                                style="object-fit: cover; height: 200px; transition: transform 0.5s ease;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold text-primary mb-2">Pharmacy system</h5>
                            <p class="card-text text-muted small mb-3">
                                A full web application to manage Drugs, borrowers and generate reports.
                                <br><strong>By:</strong> Mohammad Rahim
                            </p>
                            <a href="projects.php#project-9"
                                class="btn btn-outline-primary btn-sm mt-auto rounded-pill px-3">
                                <i class="bi bi-box-arrow-up-right me-1"></i> View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-sm project-card h-100 overflow-hidden"
                        style="transition: all 0.4s ease;">
                        <div class="project-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=1600&auto=format&fit=crop"
                                class="card-img-top" alt="Store Management System"
                                style="object-fit: cover; height: 200px; transition: transform 0.5s ease;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold text-primary mb-2">Patient management system</h5>
                            <p class="card-text text-muted small mb-3">
                                A system designed for small clinics to manage patient records.
                                <br><strong>By:</strong> Zulmai
                            </p>
                            <a href="projects.php#project-6"
                                class="btn btn-outline-primary btn-sm mt-auto rounded-pill px-3">
                                <i class="bi bi-box-arrow-up-right me-1"></i> View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="success-story" class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Student Success Stories</h2>
                <p class="text-muted fs-5">Empowering students through technology — real impact from Code4Fun graduates.</p>
            </div>

            <!-- Carousel for Success Stories -->
            <div id="successStoriesCarousel" class="carousel slide" data-bs-ride="carousel">
                

                <div class="carousel-inner">
                    <!-- Story 1: Mohammad Kabir -->
                    <div class="carousel-item active">
                        <div class="row align-items-center g-4 px-3 px-md-5">
                            <div class="col-md-5" data-aos="fade-right">
                                <div class="rounded-4 overflow-hidden shadow">
                                    <img src="assets/img/students/mohammad-kabir-success-story.png"
                                        alt="Mohammad Kabir Success Story"
                                        class="img-fluid w-100"
                                        style="height: 400px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7" data-aos="fade-left">
                                <h3 class="fw-bold text-primary mb-3">Mohammad Kabir — From Struggle to Skilled Web Developer</h3>
                                <p class="text-muted fs-6 mb-4">
                                    Mohammad Kabir, a student from Kharwaryan village, Qalat (Zabul), once faced unemployment and hardship
                                    while supporting his large family. After joining the <strong>UNHCR-CHA Code-4-Fun</strong> program, he learned
                                    professional web technologies including <em>HTML, CSS, JavaScript, Bootstrap, and PHP</em>.
                                    Today, Kabir feels confident in his abilities and plans to start his own business or work as a
                                    <strong>freelance / remote web developer</strong> to support his family independently.
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">HTML & CSS</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">JavaScript</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">Bootstrap</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">PHP</span>
                                </div>
                                <div class="mt-4">
                                    <a href="assets/stories/mohammad-kabir-success-story.pdf"
                                        class="btn btn-primary btn-lg rounded-pill px-4"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf me-2"></i> Read Full Story
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center g-4 px-3 px-md-5">
                            <div class="col-md-5" data-aos="fade-right">
                                <div class="rounded-4 overflow-hidden shadow">
                                    <img src="assets/img/students/asma-success-story.png"
                                        alt="Asma Tourab Success Story"
                                        class="img-fluid w-100"
                                        style="height: 400px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7" data-aos="fade-left">
                                <h3 class="fw-bold text-primary mb-3">Asma (Tourab) — From Challenges to Digital Empowerment</h3>
                                <p class="text-muted fs-6 mb-4">
                                    Asma (Tourab), a 20-year-old from Qalat, Zabul, faced many challenges when educational opportunities for women became limited.
                                    Determined to support her family and continue learning, she joined the
                                    <strong>UNHCR-CHA Code-4-Fun</strong> program — a professional IT training that taught her
                                    <em>HTML, CSS, JavaScript, Bootstrap, and PHP</em>.
                                    The program helped her gain valuable technical skills and confidence to start her own projects
                                    and dream of a sustainable career in technology.
                                    Today, Asma is committed to sharing her knowledge and inspiring other young women to pursue education and independence.
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">HTML</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">CSS</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">JavaScript</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">Bootstrap 5</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">PHP</span>
                                </div>
                                <div class="mt-4">
                                    <a href="assets/stories/asma-tourab-success-story.pdf"
                                        class="btn btn-primary btn-lg rounded-pill px-4"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf me-2"></i> Read Full Story
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row align-items-center g-4 px-3 px-md-5">
                            <div class="col-md-5" data-aos="fade-right">
                                <div class="rounded-4 overflow-hidden shadow">
                                    <img src="assets/img/students/zia-success-story.jpg"
                                        alt="Mahmood Zia Success Story"
                                        class="img-fluid w-100"
                                        style="height: 400px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7" data-aos="fade-left">
                                <h3 class="fw-bold text-primary mb-3">Mahmood Zia — From Refugee Challenges to Digital Opportunities</h3>
                                <p class="text-muted fs-6 mb-4">
                                    Mahmood Zia, 18, and his family returned to Afghanistan after living as refugees in Pakistan for many years.
                                    Facing poverty and uncertainty, Mahmood’s dream of education seemed distant until he joined the
                                    <strong>CHA-UNHCR Code-4-Fun</strong> program in Qalat, Zabul.
                                    The program teaches professional skills like web development and JavaScript, giving students tools to succeed.
                                    Mahmood is now learning to build websites and hopes to work as a freelancer, creating a better life for himself
                                    and contributing to his community. His family is deeply grateful for the opportunity and support from UNHCR.
                                </p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">Web Development</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">JavaScript</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">HTML</span>
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2">CSS</span>
                                </div>
                                <div class="mt-4">
                                    <a href="assets/stories/mahmood-zia-success-story.pdf"
                                        class="btn btn-primary btn-lg rounded-pill px-4"
                                        target="_blank">
                                        <i class="bi bi-file-earmark-pdf me-2"></i> Read Full Story
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#successStoriesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#successStoriesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Story Counter -->
            <div class="text-center mt-4">
                <p class="text-muted mb-0">
                    <i class="bi bi-people-fill text-primary me-2"></i>
                    <strong>3 Success Stories</strong> from our Code4Fun graduates
                </p>
            </div>
        </div>
    </section>

    <section class="py-5 text-center text-white" style="background: linear-gradient(135deg, #0d6efd 0%, #0056b3 100%);">
        <div class="container" data-aos="zoom-in">
            <h3 class="mb-3 fw-bold">Want to Support or Join?</h3>
            <p class="mb-4 lead">Help mentor students, sponsor equipment, or join our next course batch. Your
                contribution makes a difference!</p>
            <a href="contact.php" class="btn btn-light btn-lg px-4 me-2 shadow-sm" style="transition: transform 0.3s;">
                Contact Us
            </a>
            <a href="projects.php" class="btn btn-outline-light btn-lg px-4 shadow-sm"
                style="transition: transform 0.3s;">
                View Projects
            </a>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <?php include __DIR__ . '/components/scripts.php'; ?>
</body>

</html>
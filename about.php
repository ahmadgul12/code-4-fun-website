<!doctype html>
<html lang="en">

<?php $pageTitle = "About — Code4Fun"; ?>
<?php include __DIR__ . '/components/head.php'; ?>


<body>

    <!-- Navbar -->
    <?php include 'components/nav.php'; ?>

    <!-- About -->
    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <h1 class="fw-bold mb-3 text-center">About Code4Fun</h1>
            <p class="lead text-muted text-center mx-auto" style="max-width: 900px;">
                Code4Fun is a free IT training program teaching web development and mobile app development,
                supported by <strong>UNHCR</strong> and implemented by <strong>CHA</strong>.
                Participants learn by building real-world projects and presenting their work to donors and employers.
            </p>

            <div class="row align-items-center g-4 mt-4">
                <div class="col-lg-6">
                    <h5 class="fw-semibold">Course Structure</h5>
                    <ol class="text-muted">
                        <li>Web Development: HTML, CSS, JavaScript, Responsive Design, Bootstrap</li>
                        <li>Backend & Database: PHP/ MySQL / Laraval</li>
                        <li>Mobile App Development: Flutter & Deployment</li>
                        <li>Student Project Work & Showcase</li>
                    </ol>

                    <h5 class="fw-semibold mt-4">Why this course?</h5>
                    <p class="text-muted">
                        We live in a digital world. By learning to code websites and mobile apps,
                        students gain practical skills for jobs, freelancing, or further studies —
                        becoming creators and innovators of the digital future.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="rounded shadow-sm overflow-hidden">
                        <img src="./assets/img/class/IMG-20251023-WA0005.jpg"
                            alt="Students coding" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Student Introduction Video -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold text-center mb-4">Meet Our Students</h2>
            <p class="text-muted text-center mb-5" style="max-width: 800px; margin: 0 auto;">
                Watch as each student introduces themselves and shares a little about their journey in the
                <strong>Code4Fun</strong> program.
            </p>

            <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                <video controls poster="./assets/img/class/IMG-20251023-WA0005.jpg">
                    <source src="./assets/videos/students-intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <!-- Who We Are -->
    <section class="py-5 bg-light">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold text-center mb-5">Who We Are</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 text-center" data-aos="zoom-in">
                    <div class="card border-0 shadow-sm py-4 px-3 h-100 team-card" style="transition: all 0.3s ease;">
                        <img src="assets/img/team/trainer.jpg" class="rounded-circle mx-auto mb-3 shadow-sm"
                            alt="AhmadGul" width="130" height="130"
                            style="object-fit: cover; border: 3px solid #0d6efd;">
                        <h5 class="fw-semibold text-primary mb-1">AhmadGul Ahmadi</h5>
                        <p class="text-muted small mb-1">Trainer — Web & Mobile Development</p>
                        <p class="small text-secondary mb-0">
                            Lead trainer at <strong>Code4Fun</strong>, passionate about teaching youth
                            web and mobile app development to build real-world digital skills.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-sm py-4 px-3 h-100 team-card" style="transition: all 0.3s ease;">
                        <img src="assets/img/team/Nahzatmal.jpg" class="rounded-circle mx-auto mb-3 shadow-sm"
                            alt="Project Monitor" width="130" height="130"
                            style="object-fit: cover; border: 3px solid #0d6efd;">
                        <h5 class="fw-semibold text-primary mb-1">Zabihullah Nahzatmal</h5>
                        <p class="text-muted small mb-1">Provincial Focal Point</p>
                        <p class="small text-secondary mb-0">
                            Supports learners in hands-on sessions, assists in project evaluations,
                            and ensures quality progress across training activities.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Vision & Partnerships -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <h5 class="fw-semibold">Our Vision</h5>
                    <p class="text-muted">
                        A world where youth can create, innovate, and build digital solutions — no matter their
                        background.
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-semibold">Implementation & Partnership</h5>
                    <p class="text-muted">
                        This programme is implemented by <strong>CHA (Coordination of Humanitarian Assistance)</strong>,
                        a national NGO in Afghanistan founded in 1987.
                    </p>
                    <div class="text-center my-3">
                        <img src="assets/img/donors/cha-logo.png" alt="CHA Logo" style="max-height:120px;">
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="row align-items-center g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <h5 class="fw-semibold">Our Supporter</h5>
                    <p class="text-muted">
                        Supported by <strong>UNHCR</strong>, the UN Refugee Agency — leading global action to protect
                        people forced to flee conflict and persecution.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="text-center">
                        <img src="assets/img/donors/unhcr-logo.png" alt="UNHCR Logo" style="max-height:120px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <?php include __DIR__ . '/components/scripts.php'; ?>
</body>

</html>
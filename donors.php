<!doctype html>
<html lang="en">

<?php $pageTitle = "Partners — Code4Fun"; ?>
<?php include __DIR__ . '/components/head.php'; ?>


<body>

    <!-- Navbar -->
    <?php include 'components/nav.php'; ?>

    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h1 class="fw-bold">Our Partner Organisations</h1>
                <p class="text-muted">We gratefully thank the following organisations for supporting Code4Fun.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/donors/unhcr-logo.png" class="card-img-top p-4" alt="UNHCR Logo">
                        <div class="card-body">
                            <h5 class="card-title">UNHCR – The UN Refugee Agency</h5>
                            <p class="card-text text-muted small">A global organisation protecting people forced to flee
                                conflict or persecution. :contentReference[oaicite:7]{index=7}</p>
                            <a href="https://www.unhcr.org" class="btn btn-sm btn-outline-primary" target="_blank">Visit
                                Website</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/donors/cha-logo.png" class="card-img-top p-4" alt="CHA Logo">
                        <div class="card-body">
                            <h5 class="card-title">CHA (Coordination of Humanitarian Assistance)</h5>
                            <p class="card-text text-muted small">A large national NGO in Afghanistan founded in 1987,
                                working across education, health, development and humanitarian assistance.
                                :contentReference[oaicite:8]{index=8}</p>
                            <a href="https://www.cha-net.org" class="btn btn-sm btn-outline-primary"
                                target="_blank">Visit Website</a>
                        </div>
                    </div>
                </div>

                <!-- Add more partner cards if needed -->
            </div>

            <div class="mt-5 text-center small text-muted">
                Interested in becoming a partner? <a href="contact.php" class="link-primary">Contact us</a>.
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

   <!-- Scripts -->
     <?php include __DIR__ . '/components/scripts.php'; ?>
</body>

</html>
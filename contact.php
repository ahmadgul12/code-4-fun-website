<!doctype html>
<html lang="en">

<?php $pageTitle = "Contact — Code4Fun"; ?>
<?php include __DIR__ . '/components/head.php'; ?>


<body>

    <!-- Navbar -->
    <?php include 'components/nav.php'; ?>

    <section class="py-5">
        <div class="container" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">Get in Touch</h1>
                    <p class="text-muted">For information about the course, partnerships, mentoring or sponsorship —
                        drop us a message and we’ll respond as soon as possible.</p>
                    <form id="contactForm" class="mt-4 needs-validation" novalidate
      action="https://formspree.io/f/xzzkzngd" method="POST">
    
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <div class="invalid-feedback">Please enter your name.</div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">Please enter a valid email.</div>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        <div class="invalid-feedback">Please write a message.</div>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
    <div id="formStatus" class="mt-3 small text-success" style="display:none;">
        Thank you! Your message has been sent.
    </div>
</form>

                </div>
                <div class="col-lg-6">
                    <h5 class="fw-semibold">Contact Details</h5>
                    <p class="small text-muted mb-4">
                        Email: info@south-code4fun.com<br>
                        Phone: +93 70326790<br>
                        Address: Mirwis Mena, Zabul-Qalat, Afghanistan
                    </p>
                    <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3379.7774121329576!2d66.893923!3d32.102301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzLCsDA2JzA4LjMiTiA2NsKwNTMnMzguMSJF!5e0!3m2!1sen!2s!4v1761552664014!5m2!1sen!2s"
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
     <?php include __DIR__ . '/components/scripts.php'; ?>
     
    <script>
        AOS.init({ once: true, duration: 700 });
        (function () {
            'use strict';
            const form = document.getElementById('contactForm');
            form.addEventListener('submit', function (e) {
                if (!form.checkValidity()) {
                    e.preventDefault(); e.stopPropagation();
                } else {
                    e.preventDefault();
                    document.getElementById('formStatus').style.display = 'block';
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
    <script>
(function () {
    'use strict';
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!form.checkValidity()) {
            e.stopPropagation();
            form.classList.add('was-validated'); // show errors if invalid
        } else {
            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: { 'Accept': 'application/json' }
            }).then(response => {
                if (response.ok) {
                    // show success message
                    document.getElementById('formStatus').style.display = 'block';
                    form.reset();
                    // remove validation styles after reset
                    form.classList.remove('was-validated');
                } else {
                    alert('Oops! Something went wrong. Try again later.');
                }
            }).catch(error => {
                alert('Oops! Something went wrong. Try again later.');
                console.error(error);
            });
        }
    }, false);
})();
</script>

</body>

</html>
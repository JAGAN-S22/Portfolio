<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 

$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if (!empty($name) && !empty($email) && !empty($message)) {
        $success = true;
    }
}
?>

<main class="main-content py-5 mt-5">
    <div class="container py-4">
        <div class="text-center mb-5 animate-on-scroll">
            <h2 class="display-5 fw-bold mb-2">Get In <span class="text-gradient">Touch</span></h2>
            <p class="text-muted">Feel free to reach out for collaborations or opportunities</p>
        </div>

        <div class="row g-5 justify-content-center">
            <div class="col-lg-5 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100">
                    <h3 class="h4 fw-bold mb-4 text-primary">Contact Information</h3>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Email</small>
                                <a href="mailto:<?php echo EMAIL_ADDRESS; ?>" class="text-decoration-none text-light fw-medium"><?php echo EMAIL_ADDRESS; ?></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                                <i class="fab fa-github"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">GitHub</small>
                                <a href="<?php echo GITHUB_URL; ?>" target="_blank" class="text-decoration-none text-light fw-medium">jagan-s22</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary p-3 rounded-circle me-3">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">LinkedIn</small>
                                <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" class="text-decoration-none text-light fw-medium">jaganmohanlingam</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4">
                    <h3 class="h4 fw-bold mb-4 text-primary">Send Me a Message</h3>
                    <?php if ($success): ?>
                        <div class="alert alert-success rounded-3 mb-4" role="alert">
                            Thank you! Your message has been sent successfully.
                        </div>
                    <?php endif; ?>
                    <form action="contact.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control rounded-pill px-3 py-2 bg-transparent text-light border-secondary" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control rounded-pill px-3 py-2 bg-transparent text-light border-secondary" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control rounded-4 p-3 bg-transparent text-light border-secondary" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-3 fw-semibold shadow-sm">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
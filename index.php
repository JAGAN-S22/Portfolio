<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section min-vh-100 d-flex align-items-center position-relative overflow-hidden pt-5">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7 text-center text-lg-start animate-on-scroll">
                    <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-4 fw-semibold">
                        <i class="fas fa-sparkles me-2"></i>Welcome to my Portfolio
                    </div>
                    <h1 class="display-4 fw-extrabold mb-3 tracking-tight">
                        Hi, I'm <span class="text-gradient"><?php echo DEVELOPER_NAME; ?></span>
                    </h1>
                    <h2 class="h3 text-muted mb-4">
                        I am a <span class="typed-text fw-bold text-primary"></span><span class="cursor">|</span>
                    </h2>
                    <p class="lead text-muted mb-5 mx-auto mx-lg-0 col-lg-10">
                        Passionate and curious Computer Science student committed to continuous learning, problem-solving, and building innovative software solutions.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 mb-5">
                        <a href="downloads/Resume.pdf" class="btn btn-primary btn-lg px-4 py-3 rounded-pill shadow-sm d-flex align-items-center gap-2" download>
                            <i class="fas fa-download"></i> Download Resume
                        </a>
                        <a href="<?php echo GITHUB_URL; ?>" target="_blank" class="btn btn-outline-secondary btn-lg px-4 py-3 rounded-pill d-flex align-items-center gap-2">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                        <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" class="btn btn-outline-secondary btn-lg px-4 py-3 rounded-pill d-flex align-items-center gap-2">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-5 animate-on-scroll">
                    <div class="developer-card p-4 rounded-4 shadow-lg glass-card position-relative">
                        <div class="card-glow"></div>
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="avatar-placeholder rounded-circle bg-primary bg-opacity-25 text-primary d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 60px; height: 60px;">
                                JM
                            </div>
                            <div>
                                <h4 class="mb-0 fw-bold"><?php echo DEVELOPER_NAME; ?></h4>
                                <p class="text-muted small mb-0"><?php echo DEVELOPER_TITLE; ?></p>
                            </div>
                        </div>
                        <div class="code-snippet bg-dark text-light p-3 rounded-3 font-monospace small mb-4 overflow-hidden border border-secondary border-opacity-25">
                            <span class="text-danger">const</span> <span class="text-info">developer</span> = &#123;<br>
                            &nbsp;&nbsp;name: <span class="text-success">"Jagan Mohan"</span>,<br>
                            &nbsp;&nbsp;focus: <span class="text-success">"AI & Software Engineering"</span>,<br>
                            &nbsp;&nbsp;cgpa: <span class="text-warning"><?php echo CGPA; ?></span>,<br>
                            &nbsp;&nbsp;status: <span class="text-success">"Ready to Innovate"</span><br>
                            &#125;;
                        </div>
                        <div class="row text-center g-2">
                            <div class="col-4">
                                <div class="p-3 rounded-3 bg-secondary bg-opacity-10">
                                    <h3 class="fw-bold text-primary mb-0 counter" data-target="8.84">0</h3>
                                    <small class="text-muted">CGPA</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 rounded-3 bg-secondary bg-opacity-10">
                                    <h3 class="fw-bold text-primary mb-0 counter" data-target="3">0</h3>
                                    <small class="text-muted">Core Projects</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 rounded-3 bg-secondary bg-opacity-10">
                                    <h3 class="fw-bold text-primary mb-0 counter" data-target="4">0</h3>
                                    <small class="text-muted">Languages</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<main class="main-content py-5 mt-5">
    <div class="container py-4">
        <div class="text-center mb-5 animate-on-scroll">
            <h2 class="display-5 fw-bold mb-2">Featured <span class="text-gradient">Projects</span></h2>
            <p class="text-muted">Innovative software and systems developed to solve real-world problems</p>
        </div>

        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-4 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between project-card">
                    <div>
                        <div class="mb-3 text-primary fs-2">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Automated Light Detection System</h3>
                        <p class="text-muted mb-4">
                            Developed an automated lighting system that detects ambient light intensity and controls lights automatically to improve energy efficiency.
                        </p>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">IoT</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Hardware Sensors</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Automation</span>
                        </div>
                        <a href="<?php echo GITHUB_URL; ?>" target="_blank" class="btn btn-outline-primary w-100 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-4 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between project-card">
                    <div>
                        <div class="mb-3 text-primary fs-2">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Algae Bloom Detection System</h3>
                        <p class="text-muted mb-4">
                            Designed a system for early detection and monitoring of algae blooms using environmental data to support timely decision-making.
                        </p>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Python</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Data Analysis</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Environmental Tech</span>
                        </div>
                        <a href="<?php echo GITHUB_URL; ?>" target="_blank" class="btn btn-outline-primary w-100 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-4 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between project-card">
                    <div>
                        <div class="mb-3 text-primary fs-2">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-3">Remote Patient Monitoring System</h3>
                        <p class="text-muted mb-4">
                            Built a system to remotely monitor patients' vital signs, enabling real-time health tracking and improved healthcare accessibility.
                        </p>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Java</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">Spring Boot</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded">REST APIs</span>
                        </div>
                        <a href="<?php echo GITHUB_URL; ?>" target="_blank" class="btn btn-outline-primary w-100 rounded-pill d-flex align-items-center justify-content-center gap-2">
                            <i class="fab fa-github"></i> View on GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
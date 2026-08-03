<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<main class="main-content py-5 mt-5">
    <div class="container py-4">
        <div class="text-center mb-5 animate-on-scroll">
            <h2 class="display-5 fw-bold mb-2">About <span class="text-gradient">Me</span></h2>
            <p class="text-muted">Get to know more about my background, education, and passions</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-6 animate-on-scroll">
                <div class="card h-100 border-0 shadow-sm glass-card p-4 rounded-4">
                    <h3 class="h4 fw-bold mb-3 text-primary"><i class="fas fa-user-graduate me-2"></i>Professional Introduction</h3>
                    <p class="text-muted lh-lg">
                        Passionate and curious Computer Science student committed to continuous learning, problem-solving, and building innovative software solutions. Eager to contribute technical skills while growing as a software engineer.
                    </p>
                    <h4 class="h5 fw-bold mt-4 mb-3 text-primary"><i class="fas fa-bullseye me-2"></i>Career Objective</h4>
                    <p class="text-muted lh-lg">
                        Motivated and detail-oriented Integrated M.Tech Computer Science student at VIT-AP University with a strong foundation in programming, data structures, databases, and software development. Passionate about building scalable software solutions and continuously learning new technologies.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 animate-on-scroll">
                <div class="card h-100 border-0 shadow-sm glass-card p-4 rounded-4">
                    <h3 class="h4 fw-bold mb-3 text-primary"><i class="fas fa-graduation-cap me-2"></i>Education</h3>
                    <div class="mb-4">
                        <h5 class="fw-bold mb-1"><?php echo UNIVERSITY; ?></h5>
                        <p class="text-primary fw-medium mb-1"><?php echo DEGREE; ?></p>
                        <p class="text-muted small mb-2"><i class="far fa-calendar-alt me-2"></i>Sept 2023 to Present</p>
                        <p class="text-muted small">Maintained a strong academic record with a CGPA of <strong><?php echo CGPA; ?></strong> reflecting consistency, dedication, and a solid understanding of core Computer Science concepts.</p>
                    </div>

                    <h3 class="h4 fw-bold mb-3 text-primary"><i class="fas fa-id-card me-2"></i>Personal Details</h3>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-2"><strong class="text-light">Nationality:</strong> Indian</li>
                        <li class="mb-2"><strong class="text-light">Date of Birth:</strong> 25-02-2006</li>
                        <li class="mb-2"><strong class="text-light">Location:</strong> <?php echo LOCATION; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100">
                    <h3 class="h4 fw-bold mb-3 text-primary"><i class="fas fa-language me-2"></i>Languages Known</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">Telugu (Native)</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">English (Professional)</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">Tamil (Professional)</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">Hindi (Professional)</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm glass-card p-4 rounded-4 h-100">
                    <h3 class="h4 fw-bold mb-3 text-primary"><i class="fas fa-heart me-2"></i>Hobbies & Interests</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary bg-opacity-10 text-light px-3 py-2 rounded-pill">Playing outdoor sports</span>
                        <span class="badge bg-secondary bg-opacity-10 text-light px-3 py-2 rounded-pill">Exploring new places</span>
                        <span class="badge bg-secondary bg-opacity-10 text-light px-3 py-2 rounded-pill">Learning new technologies</span>
                        <span class="badge bg-secondary bg-opacity-10 text-light px-3 py-2 rounded-pill">Discovering new ideas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
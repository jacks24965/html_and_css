
<?php include('header.php'); ?>

<style>
    /* =====================================================
       PORTFOLIO PAGE ONLY
       ===================================================== */

    .portfolio-page {
        background-color: #f4f7fb;
        color: #212529;
        min-height: 100vh;
        overflow-x: hidden;
    }

    /* ================= HERO ================= */

    .portfolio-page .portfolio-hero {
        min-height: 480px;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #0d6efd, #212529);
        color: #ffffff;
        padding: 70px 0;
    }

    .portfolio-page .portfolio-hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    .portfolio-page .portfolio-hero p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.85);
    }

    .portfolio-page .portfolio-hero .badge {
        font-size: 0.9rem;
        font-weight: 500;
        border-radius: 50px;
        padding: 10px 18px;
    }

    .portfolio-page .portfolio-hero .btn {
        border-radius: 8px;
        padding: 12px 24px;
        font-weight: 500;
    }

    /* ================= HERO IMAGE ================= */

    .portfolio-page .hero-image {
        width: 100%;
        height: 360px;
        object-fit: cover;
        display: block;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }

    /* ================= GENERAL ================= */

    .portfolio-page .section-title {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #212529;
    }

    .portfolio-page .section-subtitle {
        color: #6c757d;
        font-size: 1rem;
        margin-bottom: 40px;
    }

    /* ================= SKILL BOX ================= */

    .portfolio-page .skill-box {
        background-color: #ffffff;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        height: 100%;
        border: 1px solid #e9ecef;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease,
                    box-shadow 0.3s ease;
    }

    .portfolio-page .skill-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
    }

    .portfolio-page .skill-box h4 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .portfolio-page .skill-box h5 {
        font-size: 1.15rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .portfolio-page .skill-box p {
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* ================= PROJECTS ================= */

    .portfolio-page .projects-section {
        background-color: #ffffff;
    }

    .portfolio-page .project-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        background-color: #ffffff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease,
                    box-shadow 0.3s ease;
        height: 100%;
    }

    .portfolio-page .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .portfolio-page .project-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    .portfolio-page .project-card .card-body {
        padding: 25px;
    }

    .portfolio-page .project-card .card-title {
        font-size: 1.35rem;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .portfolio-page .project-card .card-text {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .portfolio-page .project-card .badge {
        margin-right: 4px;
        margin-bottom: 5px;
        padding: 7px 10px;
        font-weight: 500;
        border-radius: 5px;
    }

    .portfolio-page .project-card .btn {
        border-radius: 7px;
        padding: 9px 18px;
        font-weight: 500;
    }

    /* ================= TECHNICAL SKILLS ================= */

    .portfolio-page .technical-skills {
        background-color: #f4f7fb;
    }

    /* ================= CTA ================= */

    .portfolio-page .cta-section {
        background: linear-gradient(135deg, #212529, #343a40);
        color: #ffffff;
        border-radius: 25px;
        padding: 60px 30px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
    }

    .portfolio-page .cta-section h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .portfolio-page .cta-section p {
        color: rgba(255, 255, 255, 0.75);
        font-size: 1rem;
    }

    .portfolio-page .cta-section .btn {
        border-radius: 8px;
        padding: 12px 28px;
        font-weight: 600;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 991.98px) {

        .portfolio-page .portfolio-hero {
            padding: 60px 0;
        }

        .portfolio-page .portfolio-hero h1 {
            font-size: 3rem;
        }

        .portfolio-page .hero-image {
            margin-top: 35px;
            height: 320px;
        }
    }

    @media (max-width: 767.98px) {

        .portfolio-page .portfolio-hero {
            padding: 50px 0;
            text-align: center;
        }

        .portfolio-page .portfolio-hero h1 {
            font-size: 2.4rem;
        }

        .portfolio-page .portfolio-hero p {
            font-size: 1rem;
        }

        .portfolio-page .hero-image {
            height: 280px;
            margin-top: 30px;
        }

        .portfolio-page .section-title {
            font-size: 1.9rem;
        }

        .portfolio-page .cta-section {
            padding: 45px 20px;
            border-radius: 18px;
        }

        .portfolio-page .cta-section h2 {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 575.98px) {

        .portfolio-page .portfolio-hero h1 {
            font-size: 2rem;
        }

        .portfolio-page .hero-image {
            height: 230px;
            border-radius: 15px;
        }

        .portfolio-page .project-card img {
            height: 200px;
        }

        .portfolio-page .skill-box {
            padding: 25px 18px;
        }

        .portfolio-page .cta-section .btn {
            width: 100%;
        }
    }
</style>


<div class="portfolio-page">

    <!-- ================= HERO ================= -->

    <section class="portfolio-hero">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <span class="badge bg-light text-dark px-3 py-2 mb-3">
                        My Portfolio
                    </span>

                    <h1>
                        Creative Web Developer
                    </h1>

                    <p class="mt-3 mb-4">
                        Welcome to my portfolio. Here you can explore my
                        web development projects, technical skills,
                        and creative work.
                    </p>

                    <a href="#projects"
                       class="btn btn-light btn-lg me-2">
                        View Projects
                    </a>

                    <a href="contact.php"
                       class="btn btn-outline-light btn-lg">
                        Contact Me
                    </a>

                </div>

                <div class="col-lg-6">

                    <img
                        src="https://static.vecteezy.com/system/resources/thumbnails/036/783/097/small_2x/ai-generated-high-performance-desktop-computer-mockup-ai-generated-photo.jpg"
                        alt="Desktop computer"
                        class="hero-image"
                    >

                </div>

            </div>

        </div>
    </section>


    <!-- ================= ABOUT ================= -->

    <section class="py-5">
        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    About My Work
                </h2>

                <p class="section-subtitle">
                    A collection of projects and skills I have developed.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="skill-box">

                        <h4>
                            Web Development
                        </h4>

                        <p class="text-muted">
                            Building responsive and user-friendly websites
                            using HTML, CSS, Bootstrap, PHP and JavaScript.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="skill-box">

                        <h4>
                            Database
                        </h4>

                        <p class="text-muted">
                            Developing database-driven applications using
                            PHP and MySQL.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="skill-box">

                        <h4>
                            Responsive Design
                        </h4>

                        <p class="text-muted">
                            Creating websites that work smoothly on
                            computers, tablets and mobile devices.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- ================= PROJECTS ================= -->

    <section id="projects"
             class="projects-section py-5">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    My Projects
                </h2>

                <p class="section-subtitle">
                    Some examples of my recent work.
                </p>

            </div>


            <div class="row g-4">

                <!-- PROJECT 1 -->

                <div class="col-md-6 col-lg-4">

                    <div class="card project-card">

                        <img
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80"
                            class="card-img-top"
                            alt="Web development project"
                        >

                        <div class="card-body">

                            <h4 class="card-title">
                                Web Development
                            </h4>

                            <p class="card-text text-muted">
                                A modern responsive website developed
                                using HTML, CSS, Bootstrap and PHP.
                            </p>

                            <span class="badge bg-primary">
                                HTML
                            </span>

                            <span class="badge bg-dark">
                                PHP
                            </span>

                            <span class="badge bg-info text-dark">
                                Bootstrap
                            </span>

                            <div class="mt-3">

                                <a href="#"
                                   class="btn btn-primary">
                                    View Project
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- PROJECT 2 -->

                <div class="col-md-6 col-lg-4">

                    <div class="card project-card">

                        <img
                            src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80"
                            class="card-img-top"
                            alt="Technology project"
                        >

                        <div class="card-body">

                            <h4 class="card-title">
                                Technology Project
                            </h4>

                            <p class="card-text text-muted">
                                A technology-focused project demonstrating
                                programming and database integration.
                            </p>

                            <span class="badge bg-success">
                                MySQL
                            </span>

                            <span class="badge bg-danger">
                                PHP
                            </span>

                            <span class="badge bg-primary">
                                JavaScript
                            </span>

                            <div class="mt-3">

                                <a href="#"
                                   class="btn btn-primary">
                                    View Project
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- PROJECT 3 -->

                <div class="col-md-6 col-lg-4">

                    <div class="card project-card">

                        <img
                            src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80"
                            class="card-img-top"
                            alt="Coding project"
                        >

                        <div class="card-body">

                            <h4 class="card-title">
                                Coding Project
                            </h4>

                            <p class="card-text text-muted">
                                A clean and functional application designed
                                with modern development techniques.
                            </p>

                            <span class="badge bg-warning text-dark">
                                UI/UX
                            </span>

                            <span class="badge bg-secondary">
                                JavaScript
                            </span>

                            <span class="badge bg-dark">
                                CSS
                            </span>

                            <div class="mt-3">

                                <a href="#"
                                   class="btn btn-primary">
                                    View Project
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= TECHNICAL SKILLS ================= -->

    <section class="technical-skills py-5">

        <div class="container">

            <div class="text-center">

                <h2 class="section-title">
                    Technical Skills
                </h2>

                <p class="section-subtitle">
                    Technologies I work with.
                </p>

            </div>


            <div class="row g-4">

                <div class="col-6 col-md-3">

                    <div class="skill-box">

                        <h5>
                            HTML5
                        </h5>

                        <p class="text-muted">
                            Web Structure
                        </p>

                    </div>

                </div>


                <div class="col-6 col-md-3">

                    <div class="skill-box">

                        <h5>
                            CSS3
                        </h5>

                        <p class="text-muted">
                            Web Styling
                        </p>

                    </div>

                </div>


                <div class="col-6 col-md-3">

                    <div class="skill-box">

                        <h5>
                            Bootstrap
                        </h5>

                        <p class="text-muted">
                            Responsive Design
                        </p>

                    </div>

                </div>


                <div class="col-6 col-md-3">

                    <div class="skill-box">

                        <h5>
                            PHP
                        </h5>

                        <p class="text-muted">
                            Backend Development
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->

    <section class="py-5">

        <div class="container">

            <div class="cta-section text-center">

                <h2>
                    Have a Project in Mind?
                </h2>

                <p class="mt-3 mb-4">
                    Let's work together and build something amazing.
                </p>

                <a href="contact.php"
                   class="btn btn-light btn-lg px-4">
                    Get In Touch
                </a>

            </div>

        </div>

    </section>

</div>


<?php include('footer.php'); ?>


<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnito Technologies | Innovative School Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --magnito-red: #E31E24;
            --magnito-black: #0a0a0a;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --text-gray: #b0b0b0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--magnito-black);
            color: white;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        .hero-section {
            padding: 160px 0 100px;
            background: radial-gradient(circle at top right, rgba(227, 30, 36, 0.15), transparent),
                        radial-gradient(circle at bottom left, rgba(227, 30, 36, 0.1), transparent);
        }

        .navbar {
            background: rgba(10, 10, 10, 0.95);
            border-bottom: 1px solid rgba(227, 30, 36, 0.2);
            backdrop-filter: blur(10px);
        }

        .logo-img { height: 50px; }

        .btn-magnito {
            background-color: var(--magnito-red);
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 5px;
            border: none;
            transition: 0.3s;
        }

        .btn-magnito:hover {
            background-color: #ff2e35;
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(227, 30, 36, 0.4);
        }

        /* Glass Cards */
        .glass-card {
            background: var(--glass-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            padding: 30px;
            border-radius: 20px;
            height: 100%;
            transition: 0.4s;
        }

        .glass-card:hover {
            border-color: var(--magnito-red);
            background: rgba(227, 30, 36, 0.05);
            transform: translateY(-10px);
        }

        /* ERP Highlight Section */
        .erp-section {
            position: relative;
            padding: 80px 0;
            background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 50px;
        }

        .section-title span { color: var(--magnito-red); }

        .service-icon {
            font-size: 2.5rem;
            color: var(--magnito-red);
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 60px 0 30px;
            background-color: #050505;
        }

        .contact-info i {
            color: var(--magnito-red);
            width: 30px;
        }

        .stat-badge {
            background: rgba(227, 30, 36, 0.1);
            border: 1px solid var(--magnito-red);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            color: var(--magnito-red);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/rectrangle white -red.svg') }}" alt="Magnito Technologies" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="/school-erp">School ERP</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">IT Services</a></li>
                    {{-- <li class="nav-item"><a class="ms-lg-3" href="/web/enquiry-form"><button class="btn-magnito btn-sm">Connect Now</button></a></li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center">
        <div class="container">
            <span class="stat-badge mb-3 d-inline-block">Transforming Education</span>
            <h1 class="display-3 fw-bold mb-4">Innovative Solutions for <br><span>Modern Schools</span></h1>
            <p class="lead text-gray mx-auto mb-5" style="max-width: 700px;">
                 Magnito Technologies Pvt Ltd is dedicated to transforming the education ecosystem through intelligent products and customized platforms that empower institutions.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#erp" class="btn-magnito text-decoration-none">Explore ERP</a>
                <a href="#services" class="btn btn-outline-light px-4 py-2">View Services</a>
            </div>
        </div>
    </section>

    <section id="erp" class="erp-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Smart <span>School ERP</span> Solutions</h2>
                    <p class="text-gray mb-4">
                         Our integrated modules simplify student management, admissions, examinations, and payroll, fostering seamless coordination between teachers, parents, and admins.
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="glass-card py-3 text-center">
                                <i class="fas fa-user-graduate mb-2 text-danger"></i>
                                <h6 class="mb-0">Student Management</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="glass-card py-3 text-center">
                                <i class="fas fa-receipt mb-2 text-danger"></i>
                                <h6 class="mb-0">Payroll System</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="glass-card py-3 text-center">
                                <i class="fas fa-door-open mb-2 text-danger"></i>
                                <h6 class="mb-0">Admission Mgmt</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="glass-card py-3 text-center">
                                <i class="fas fa-calendar-alt mb-2 text-danger"></i>
                                <h6 class="mb-0">Timetable Mgmt</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                                    </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Comprehensive <span>IT Services</span></h2>
                <p class="text-gray">Professional digital solutions to enhance your online presence.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-code"></i></div>
                        <h4>Website Development</h4>
                        <p class="text-gray small">Custom websites tailored to your needs, focusing on UX, functionality, and responsiveness.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-tools"></i></div>
                        <h4>Website Maintenance</h4>
                        <p class="text-gray small">Ensuring your platform remains secure, updated, and high-performing at all times.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-cloud"></i></div>
                        <h4>SaaS & Cloud</h4>
                        <p class="text-gray small">Scalable cloud integration and secure software solutions for growing businesses.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-bullhorn"></i></div>
                        <h4>Digital Marketing</h4>
                        <p class="text-gray small">Strategies designed to elevate brand visibility and drive conversions through analytics.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-server"></i></div>
                        <h4>Web Hosting</h4>
                        <p class="text-gray small">Reliable hosting ensuring fast loading times and robust security for your digital assets.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card">
                        <div class="service-icon"><i class="fas fa-search"></i></div>
                        <h4>SEO Solutions</h4>
                        <p class="text-gray small">Optimizing your web presence to rank higher and reach your target audience organically.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container text-center py-5">
            <i class="fas fa-quote-left fa-3x text-danger mb-4 opacity-50"></i>
            <h3 class="fst-italic mb-4">"Magnito Technologies has revolutionized our school's efficiency."</h3>
            <p class="fw-bold text-danger">- UC KIDS SCHOOL (DWARKA) </p>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/rectrangle white -red.svg') }}" alt="Logo" class="logo-img mb-4">
                    <p class="text-gray"> We believe in long-term partnerships and future-ready solutions that evolve with the landscape.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-4 fw-bold">Contact Info</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-envelope"></i>  info@magnitotechnologies.com</p>
                        <p><i class="fas fa-phone"></i> +91 7982209735</p>
                        {{-- <p><i class="fab fa-linkedin"></i> Magnito-technologies-private-limited</p> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <h5 class="mb-4 fw-bold">Quick Links</h5>
                    <ul class="list-unstyled text-gray">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-gray">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-gray">Terms of Service</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-gray">Request Demo</a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="text-center mt-5 pt-4 border-top border-secondary">
                <p class="text-muted small" style="color:white !important;">&copy; 2026 Magnito Technologies. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
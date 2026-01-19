@extends('layouts.main')
@section('title')
    About Us
@endsection

@section('content')
    <style>
        /* Custom Design Tokens */
        :root {
            --primary-gradient: linear-gradient(135deg, #0d6efd 0%, #003da5 100%);
            --soft-bg: #f8faff;
        }

        .bg-primary-gradient {
            background: var(--primary-gradient);
        }

        .text-gradient {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero Refinement */
        .hero-wrap {
            min-height: 600px;
            display: flex;
            align-items: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            overflow: hidden;
        }

        /* MD Section Overlap */
        .md-img-wrapper {
            position: relative;
            padding: 20px;
        }

        .md-img-wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 80%;
            height: 80%;
            background: var(--primary-gradient);
            border-radius: 2rem;
            z-index: 0;
        }

        .md-img {
            position: relative;
            z-index: 1;
            border-radius: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        /* Floating Stats */
        .stats-card {
            margin-top: -60px;
            z-index: 10;
            position: relative;
            border-radius: 2rem;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }

        /* Cards & Interactions */
        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1.25rem;
        }
    </style>

    <section class="hero-wrap position-relative text-white"
        style="background: linear-gradient(rgba(24, 22, 22, 0.5), rgba(0,0,0,0.5)), url('{{ asset('data/14.jpeg') }}') top/cover no-repeat;">
    </section>

    <div class="container">
        <div class="stats-card shadow-lg p-4 p-md-5 border-0">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3 border-end">
                    <h2 class="fw-bold text-gradient mb-0">5+</h2>
                    <small class="text-uppercase fw-semibold text-muted">Years Experience</small>
                </div>
                <div class="col-6 col-md-3 border-md-end">
                    <h2 class="fw-bold text-gradient mb-0">50+</h2>
                    <small class="text-uppercase fw-semibold text-muted">Graduates</small>
                </div>
                <div class="col-6 col-md-3 border-end">
                    <h2 class="fw-bold text-gradient mb-0">5+</h2>
                    <small class="text-uppercase fw-semibold text-muted">Expert Trainers</small>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold text-gradient mb-0">100%</h2>
                    <small class="text-uppercase fw-semibold text-muted">Career Support</small>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h6 class="text-primary fw-bold text-uppercase letter-spacing-2">
                        About Us
                    </h6>
                    <h2 class="fw-bold display-5 mb-4">
                        Acquire Hospitality Training
                    </h2>
                    <p class="text-muted fs-5 mb-4">
                        Acquire Hospitality Training is a professional hospitality education provider dedicated to preparing
                        skilled
                        professionals for the international hospitality, hotel, and tourism industries. Our programs combine
                        strong
                        academic foundations with hands-on practical training to ensure career readiness.
                    </p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box bg-primary-soft text-primary me-3">
                            <i class="bi bi-globe2 fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Global Curriculum</h6>
                            <small class="text-muted">International standards designed for worldwide recognition.</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box bg-primary-soft text-primary me-3">
                            <i class="bi bi-award fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Certified Excellence</h6>
                            <small class="text-muted">Accredited programs that support your global career journey.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('data/2.jpeg') }}" class="img-fluid rounded-5 shadow-lg" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light rounded-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 hover-lift h-100 p-4 rounded-5 shadow-sm">
                        <div class="icon-box bg-dark text-white mb-4">
                            <i class="bi bi-eye fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Our Vision</h4>
                        <p class="text-muted">To be a globally recognized hospitality training institute producing
                            world-class professionals through innovation.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-primary text-white h-100 p-4 rounded-5 shadow-lg shadow-primary">
                        <div class="icon-box bg-white text-primary mb-4">
                            <i class="bi bi-rocket-takeoff fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Our Mission</h4>
                        <p class="opacity-75">To deliver industry-oriented education that builds competence, confidence, and
                            long-term career success.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 hover-lift h-100 p-4 rounded-5 shadow-sm">
                        <div class="icon-box bg-dark text-white mb-4">
                            <i class="bi bi-shield-check fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Our Values</h4>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-2"><i class="bi bi-patch-check text-primary me-2"></i> Excellence</li>
                            <li class="mb-2"><i class="bi bi-patch-check text-primary me-2"></i> Integrity</li>
                            <li><i class="bi bi-patch-check text-primary me-2"></i> Innovation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="md-img-wrapper">
                        <img src="https://acquireoverseasygn.com/data/company/md.jpeg" class="img-fluid md-img"
                            alt="MD">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary fw-bold text-uppercase mb-3">Leadership Message</h6>
                    <h2 class="fw-bold mb-4 italic">“Hospitality is not just a profession, it is a passion for service.”
                    </h2>
                    <p class="text-muted fs-5">
                        Our vision is to provide industry-driven education supported by experienced trainers, modern
                        infrastructure, and strong placement guidance. Every student's success is our personal mission.
                    </p>
                    <div class="mt-4">
                        <h5 class="fw-bold mb-0 text-dark">Daw Wai Me Htun </h5>
                        <p class="text-primary fw-semibold">Managing Director</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-5 px-3">
        <div class="container bg-primary-gradient rounded-5 p-5 text-center text-white shadow-lg">
            <h2 class="display-5 fw-bold mb-3">Ready to transform your future?</h2>
            <p class="lead mb-4 opacity-75">Enrollment for the 2026 session is now open. Seats are limited.</p>
            <a href="{{ route('contact') }}"
                class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary shadow">
                Contact Us Today
            </a>
        </div>
    </section>
@endsection

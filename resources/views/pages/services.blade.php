@extends('layouts.main')

@section('title', 'Our Services ')

@section('content')

    <!-- HERO -->
    <section class="position-relative d-flex align-items-center text-white service-hero">
        <div class="hero-bg"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <span class="text-gold text-uppercase small fw-semibold ls-2">
                        Our Expertise
                    </span>
                    <h1 class="display-4 fw-bold mt-3 mb-4">
                        Professional Hospitality Services
                    </h1>
                    <p class="lead opacity-75">
                        Acquire Hospitality delivers industry-driven training, workforce development,
                        and career pathways designed to meet international hospitality standards.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICES -->
    <section class="py-5 bg-white">
        <div class="container py-4">

            <div class="row mb-5">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">
                        What We Do
                    </h2>
                    <p class="text-muted fs-5">
                        Our services are built around practical education, employer partnerships,
                        and measurable outcomes for individuals and organizations.
                    </p>
                </div>
            </div>

            <div class="row g-5">

                <div class="col-lg-6">
                    <div class="service-block">
                        <h5 class="fw-bold mb-2">
                            Internships & Career Placement
                        </h5>
                        <p class="text-muted">
                            We maintain strong relationships with hotel groups, resorts, and international
                            recruitment partners. Students and graduates benefit from structured internships,
                            interview preparation, and ongoing career support.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-block">
                        <h5 class="fw-bold mb-2">
                            Corporate & Professional Training
                        </h5>
                        <p class="text-muted">
                            Tailored training programs for hospitality businesses, focusing on service excellence,
                            operational standards, and workforce readiness.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-block">
                        <h5 class="fw-bold mb-2">
                            Workforce Development & Social Impact
                        </h5>
                        <p class="text-muted">
                            Through partnerships with NGOs and community organizations, we deliver
                            skills training for youth and underserved communities, creating sustainable
                            employment pathways.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-block">
                        <h5 class="fw-bold mb-2">
                            Practical Industry Experience
                        </h5>
                        <p class="text-muted">
                            Students gain real-world exposure through part-time employment, site visits,
                            study tours, and supervised industry placements.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INDUSTRY & IMPACT -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <img src="{{ asset('data/5.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Hospitality Training">
                </div>

                <div class="col-lg-6">
                    <span class="text-gold text-uppercase small fw-semibold ls-2">
                        Industry Engagement
                    </span>
                    <h3 class="fw-bold mt-3 mb-4">
                        Connecting Education With Industry
                    </h3>
                    <p class="text-muted">
                        Our work extends beyond classrooms. We collaborate with hotel operators,
                        international recruiters, and development organizations to ensure our programs
                        remain relevant, inclusive, and aligned with market demand.
                    </p>
                    <p class="text-muted mb-0">
                        These partnerships enable graduates to transition confidently into professional
                        roles both locally and internationally.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-white border-top">
        <div class="container text-center">
            <h4 class="fw-bold mb-3">
                Partner With Acquire Hospitality
            </h4>
            <p class="text-muted mb-4">
                Whether you are a student, employer, or development partner,
                we welcome the opportunity to collaborate.
            </p>
            <a href="{{ url('/contact') }}" class="btn btn-dark px-4">
                Contact Us
            </a>
        </div>
    </section>

    <style>
        :root {
            --gold: #c5a059;
            --dark: #0f172a;
        }

        .text-gold {
            color: var(--gold);
        }

        .service-hero {
            min-height: 55vh;
            background-color: var(--dark);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(rgba(15, 23, 42, .7), rgba(15, 23, 42, .7)),
                url('{{ asset('data/13.jpeg') }}') top / cover no-repeat;
        }

        .service-block {
            padding-left: 1.5rem;
            border-left: 3px solid var(--gold);
        }

        .ls-2 {
            letter-spacing: 2px;
        }
    </style>

@endsection

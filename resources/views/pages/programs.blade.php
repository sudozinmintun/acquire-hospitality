@extends('layouts.main')

@section('title')
    Training Programs
@endsection

@section('content')
    <section id="programs" class="py-5 bg-white position-relative">
        <div class="position-absolute start-0 top-0 p-5 opacity-05 d-none d-lg-block">
            <h1 class="display-1 fw-bold vertical-text">ACQUIRE</h1>
        </div>

        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-gold text-uppercase fw-bold ls-3 mb-2">Our Curriculum</h6>
                <h2 class="display-5 fw-bold mb-3">Training Programs</h2>
                <div class="mx-auto bg-gold mb-4" style="width: 60px; height: 3px;"></div>
                <p class="text-muted col-lg-6 mx-auto">Master the art of 5-star service through our specialized modules,
                    designed in collaboration with global industry leaders.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="program-card">
                        <div class="program-content p-4 shadow-sm h-100 border border-light">
                            <div class="program-icon mb-4">
                                <i class="bi bi-door-open text-gold display-6"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Hotel Operations</h4>
                            <p class="text-muted small mb-0">Front office mastery, luxury housekeeping standards,
                                reservations management, and the science of guest experience.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="program-card active">
                        <div class="program-content p-4 shadow-sm h-100 border border-light">
                            <div class="program-icon mb-4">
                                <i class="bi bi-cup-hot text-gold display-6"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Food & Beverage Service</h4>
                            <p class="text-muted small mb-0">From Michelin-standard table settings to hygiene excellence and
                                the intricate etiquette of fine dining service.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="program-card">
                        <div class="program-content p-4 shadow-sm h-100 border border-light">
                            <div class="program-icon mb-4">
                                <i class="bi bi-stars text-gold display-6"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Customer Excellence</h4>
                            <p class="text-muted small mb-0">Professional communication techniques, emotional intelligence,
                                and advanced complaint resolution strategies.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="program-card">
                        <div class="program-content p-4 shadow-sm h-100 border border-light">
                            <div class="program-icon mb-4">
                                <i class="bi bi-people text-gold display-6"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Hospitality Leadership</h4>
                            <p class="text-muted small mb-0">Transitioning from staff to supervisor. Focusing on team
                                management, operational KPIs, and leadership ethics.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="program-card">
                        <div class="program-content p-4 shadow-sm h-100 border border-light">
                            <div class="program-icon mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#c5a059"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V1h-.5A1.5 1.5 0 0 0 3 2.5V15H1.5zM4 2h8v13H4V2z" />
                                </svg>
                            </div>
                            <h4 class="fw-bold mb-3">Bar & Beverage</h4>
                            <p class="text-muted small mb-0">Mixology fundamentals, wine knowledge, bar operational flow,
                                and responsible alcohol service protocols.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="program-card bg-dark-card">
                        <div class="program-content p-4 shadow-sm h-100">
                            <div class="program-icon mb-4">
                                <i class="bi bi-briefcase text-gold display-6"></i>
                            </div>
                            <h4 class="fw-bold text-white mb-3">Career Readiness</h4>
                            <p class="text-light-muted small mb-0">Resume building for the luxury sector, interview
                                coaching, and direct industry placement preparation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --gold: #c5a059;
            --navy: #0f172a;
        }

        .text-gold {
            color: var(--gold);
        }

        .bg-gold {
            background-color: var(--gold);
        }

        .ls-3 {
            letter-spacing: 3px;
        }

        .ls-1 {
            letter-spacing: 1px;
        }

        .opacity-05 {
            opacity: 0.05;
        }

        /* Program Card Styling */
        .program-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            cursor: pointer;
            background: #fff;
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .program-content {
            background: #fff;
            transition: all 0.4s ease;
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-card:hover .program-content {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08) !important;
            border-color: var(--gold) !important;
        }

        /* Dark Card Variant */
        .bg-dark-card {
            background-color: var(--navy);
        }

        .bg-dark-card .program-content {
            background-color: var(--navy);
            border: none !important;
        }

        .text-light-muted {
            color: #a0aec0;
        }

        /* Icon Animation */
        .program-icon i {
            transition: transform 0.4s ease;
            display: inline-block;
        }

        .program-card:hover .program-icon i {
            transform: scale(1.1) rotate(-5deg);
        }

        /* Background Vertical Text */
        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            font-size: 150px;
            color: var(--navy);
            user-select: none;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .vertical-text {
                display: none;
            }
        }
    </style>
@endsection

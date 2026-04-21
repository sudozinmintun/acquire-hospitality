@extends('layouts.main')
@section('title')
    Welcome
@endsection
@section('content')
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mt-2">
                        Our Business Group
                    </h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">
                        Whether you are seeking world-class training or international career opportunities, we provide the
                        pathway to success.
                    </p>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">
                    <div class="pillar-card h-100 p-5 position-relative overflow-hidden shadow-sm">
                        <div class="pillar-content position-relative z-2">
                            <div class="icon-circle mb-4">
                                <i class="bi bi-mortarboard fs-2 text-gold"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Acquire <br>Hospitality Training</h3>
                            <p class="text-muted mb-4">
                                Professional development and industry-certified courses designed for the modern hotel and
                                tourism sector.
                            </p>
                            <ul class="list-unstyled mb-5 text-muted small">
                                <li class="mb-2"><i class="bi bi-check2 text-gold me-2"></i> Industry-Focused Curriculum
                                </li>
                                <li class="mb-2"><i class="bi bi-check2 text-gold me-2"></i> Expert International Faculty
                                </li>
                                <li><i class="bi bi-check2 text-gold me-2"></i> Practical Hands-on Learning</li>
                            </ul>
                            <a href="{{ route('about') }}" class="btn btn-dark rounded-0 px-4 py-2 w-100 w-sm-auto">
                                Learn More About Hospitality Training
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <span class="pillar-number">01</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pillar-card h-100 p-5 position-relative overflow-hidden shadow-sm text-white" style="background-color: #357774">
                        <div class="pillar-content position-relative z-2">
                            <div class="icon-circle mb-4 bg-white bg-opacity-10 border border-white border-opacity-25">
                                <i class="bi bi-airplane-engines fs-2 text-gold"></i>
                            </div>
                            <h3 class="fw-bold mb-3 text-white">Acquire <br>Overseas Employment Agency</h3>
                            <p class="text-white-50 mb-4">
                                A licensed recruitment partner connecting skilled talent with employers across the global
                                hospitality landscape.
                            </p>
                            <ul class="list-unstyled mb-5 text-white-50 small">
                                <li class="mb-2"><i class="bi bi-check2 text-gold me-2"></i> International Job Placement
                                </li>
                                <li class="mb-2"><i class="bi bi-check2 text-gold me-2"></i> Visa & Documentation Support
                                </li>
                                <li><i class="bi bi-check2 text-gold me-2"></i> Licensed Recruitment Partners</li>
                            </ul>
                            <a href="https://acquireoverseasygn.com/"
                                class="btn btn-gold rounded-0 px-4 py-2 w-100 w-sm-auto text-dark fw-bold">
                                Visit Agency Website
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <span class="pillar-number text-white opacity-5">02</span>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="pillar-card h-100 p-5 position-relative overflow-hidden shadow-sm border-0" style="background: #f8f9fa;">
                        <div class="pillar-content position-relative z-2">
                            <div class="row align-items-center mb-5">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-circle me-3">
                                            <i class="bi bi-globe-asia-australia fs-2 text-gold"></i>
                                        </div>
                                        <h3 class="fw-bold m-0">Acquire Travel & Tourism</h3>
                                    </div>
                                    <p class="text-muted lead mb-0">
                                        Your global gateway. Providing end-to-end travel solutions from seamless flight logistics to luxury stays and expert visa consultancy.
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end mt-4 mt-md-0">
                                    <a href="{{ route('contact') }}" class="btn btn-dark rounded-0 px-5 py-3 shadow-sm">
                                        Contract Now
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                
                            <hr class="opacity-10 mb-5">
                
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-airplane text-gold fs-4 me-2"></i>
                                            <h4 class="h5 fw-bold mb-0">Flight Tickets</h4>
                                        </div>
                                        <p class="small text-muted">
                                            Premium booking for domestic and international routes including 
                                            <strong>Bangkok, Singapore, Japan, and Dubai</strong> with exclusive competitive rates.
                                        </p>
                                    </div>
                                </div>
                
                                <div class="col-md-4">
                                    <div class="service-item border-start-md ps-md-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-building-check text-gold fs-4 me-2"></i>
                                            <h4 class="h5 fw-bold mb-0">Hotel Booking</h4>
                                        </div>
                                        <p class="small text-muted">
                                            Worldwide reservations at handpicked accommodations. We ensure trusted stays and 
                                            corporate rates for every budget.
                                        </p>
                                    </div>
                                </div>
                
                                <div class="col-md-4">
                                    <div class="service-item border-start-md ps-md-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-passport text-gold fs-4 me-2"></i>
                                            <h4 class="h5 fw-bold mb-0">Visa Services</h4>
                                        </div>
                                        <p class="small text-muted">
                                            Fast and reliable processing for tourist and work visas. Expert guidance on 
                                            documentation for hassle-free global entry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <span class="pillar-number" style="font-size: 12rem; opacity: 0.03; position: absolute; right: -20px; bottom: -40px; font-weight: 900;">03</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .py-6 {
            padding: 6rem 0;
        }

        .text-gold {
            color: #c5a059;
        }

        .btn-gold {
            background-color: #c5a059;
            border: none;
        }

        .tracking-widest {
            letter-spacing: 0.2rem;
        }

        .pillar-card {
            border: 1px solid #f1f1f1;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: 1;
        }

        .pillar-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1) !important;
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fcfcfc;
            border-radius: 50%;
            border: 1px solid #eee;
        }

        .pillar-number {
            position: absolute;
            bottom: -20px;
            right: 20px;
            font-size: 10rem;
            font-weight: 900;
            color: rgba(0, 0, 0, 0.03);
            z-index: 0;
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }

        .z-2 {
            z-index: 2;
        }

        /* Fix for mobile button width */
        @media (min-width: 576px) {
            .w-sm-auto {
                width: auto !important;
            }
        }
    </style>

    {{-- about  --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h6 class="text-primary fw-bold text-uppercase">Welcome to Acquire</h6>
                    <h2 class="fw-bold display-6 mb-4">Professional Hospitality Training Institute</h2>

                    <p class="text-muted" style="font-size: 16px;">
                        Acquire Hospitality Training is dedicated to developing skilled professionals for the international
                        hospitality and tourism industries. We combine academic excellence with hands-on training to prepare
                        students for real-world success.
                    </p>

                    <ul class="list-unstyled mt-3">
                        <li class="mb-2">✔ Industry Experienced Trainers</li>
                        <li class="mb-2">✔ International Curriculum</li>
                        <li class="mb-2">✔ Career Placement Support</li>
                    </ul>

                    <a href="{{ route('about') }}" class="btn btn-outline-primary mt-3">Learn More About Us</a>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('data/2.jpeg') }}" class="img-fluid rounded-5 shadow-lg" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Video  --}}
    <section class="bg-white pt-4">
        <div class="container">
            <div class="row" style="height: 400px;">
                <div class="col-lg-4">
                    <video controls class="w-100 h-50 object-fit-cover">
                        <source src="{{ asset('data/video/video1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="col-lg-4">
                    <video controls class="w-100 h-50 object-fit-cover">
                        <source src="{{ asset('data/video/video2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="col-lg-4">
                    <video controls class="w-100 h-50 object-fit-cover">
                        <source src="{{ asset('data/video/video3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>


    {{-- OUR PROGRAMS  --}}
    <section class="py-3" style="background-color: rgba(243, 239, 239, 0.918)">
        <div class="container py-lg-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <span class="badge rounded-pill bg-primary-soft text-primary px-3 py-2 mb-3">OUR PROGRAMS</span>
                    <h2 class="display-6 fw-bold">Professional Training Programs</h2>
                    <p class="text-muted">Master the art of hospitality with our specialized industry-curated courses.</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="program-card h-100 p-4 p-xl-5 text-center">
                        <div class="icon-box-wrapper mb-4" >
                            <div class="icon-box-shape bg-primary text-white">
                                <i class="bi bi-buildings fs-2"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Hotel Operations</h4>
                        <p class="text-muted mb-4 leading-relaxed">
                            Comprehensive training in front office, housekeeping, and hotel management systems.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="program-card h-100 p-4 p-xl-5 text-center active" >
                        <div class="icon-box-wrapper mb-4">
                            <div class="icon-box-shape bg-primary text-white" style="background-color: #357774;">
                                <i class="bi bi-cup-hot fs-2"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Food & Beverage</h4>
                        <p class="text-muted mb-4 leading-relaxed">
                            Professional service techniques for fine dining, bars, and international hotel restaurants.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="program-card h-100 p-4 p-xl-5 text-center">
                        <div class="icon-box-wrapper mb-4">
                            <div class="icon-box-shape bg-primary text-white">
                                <i class="bi bi-people fs-2"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Customer Excellence</h4>
                        <p class="text-muted mb-4 leading-relaxed">
                            Master communication, service quality, and luxury guest experience expertise.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <center>
                        <a href="{{ route('programs') }}" class="btn btn-outline-primary mt-3">
                            View All Programs <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Styling for the section and cards */
        .py-6 {
            padding: 5rem 0;
        }

        .program-card {
            background: #ffffff;
            border: 1px solid #f1f1f1;
            border-radius: 2rem;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .program-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
            border-color: transparent;
        }

        /* Icon Box Shape */
        .icon-box-wrapper {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .icon-box-shape {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 24px;
            background: var(--primary-gradient, #357774) !important;
            transform: rotate(-5deg);
            transition: all 0.4s ease;
        }

        .program-card:hover .icon-box-shape {
            transform: rotate(0deg) scale(1.1);
            border-radius: 50%;
        }

        /* Link and Typography */
        .btn-link-custom {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            text-uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-link-custom i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .program-card:hover .btn-link-custom i {
            transform: translateX(8px);
        }

        .bg-primary-soft {
            background-color: rgba(13, 110, 253, 0.1);
        }

        .leading-relaxed {
            line-height: 1.7;
        }
    </style>

    {{-- why  --}}
    <section class="py-6 position-relative overflow-hidden">
        <div class="position-absolute top-0 end-0 translate-middle-y opacity-10 d-none d-lg-block"
            style="margin-right: -5%; z-index: -1;">
            <i class="bi bi-award" style="font-size: 20rem; color: #357774;"></i>
        </div>

        <div class="container py-lg-4">
            <div class="row align-items-end mb-5">
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase tracking-widest small">
                        The Acquire Advantage
                    </span>
                    <h2 class="display-5 fw-bold mt-2">
                        Excellence in Hospitality Education
                    </h2>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <p class="text-muted border-start border-primary border-4 ps-4 py-2">
                        We don't just teach hospitality; we cultivate the leaders of tomorrow through a blend of heritage
                        and modern innovation.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card shadow-sm h-100 p-4 border-0 rounded-0 bg-white">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-person-badge fs-1" style="color: #357774"></i>
                        </div>
                        <h5 class="fw-bold">Expert <br>Trainers</h5>
                        <hr class="w-25 border-primary border-2 opacity-100 my-3">
                        <p class="text-muted small mb-0">Learn directly from seasoned hospitality professionals with
                            international experience.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card shadow-sm h-100 p-4 border-0 rounded-0 bg-dark text-white translate-y-lg-3">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-globe-americas text-warning fs-1" ></i>
                        </div>
                        <h5 class="fw-bold">Global <br>Standards</h5>
                        <hr class="w-25 border-warning border-2 opacity-100 my-3">
                        <p class="text-white-50 small mb-0">Our curriculum follows international benchmarks, ensuring your
                            certification is recognized worldwide.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card shadow-sm h-100 p-4 border-0 rounded-0 bg-white">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-building-check fs-1" style="color: #357774"></i>
                        </div>
                        <h5 class="fw-bold">Modern <br>Facilities</h5>
                        <hr class="w-25 border-primary border-2 opacity-100 my-3">
                        <p class="text-muted small mb-0">Train in high-tech simulation labs that mirror the world's most
                            luxurious hotel environments.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card shadow-sm h-100 p-4 border-0 rounded-0 bg-white translate-y-lg-3">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-briefcase fs-1" style="color: #357774"></i>
                        </div>
                        <h5 class="fw-bold">Career <br>Support</h5>
                        <hr class="w-25 border-primary border-2 opacity-100 my-3">
                        <p class="text-muted small mb-0">Benefit from our global alumni network and dedicated placement
                            team
                            to jumpstart your career.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .py-6 {
            padding: 6rem 0;
        }

        .tracking-widest {
            letter-spacing: 0.2rem;
        }

        .feature-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 4px solid transparent !important;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-bottom: 4px solid var(--bs-primary) !important;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .1) !important;
        }

        /* Staggered visual effect for larger screens */
        @media (min-width: 992px) {
            .translate-y-lg-3 {
                transform: translateY(30px);
            }

            .translate-y-lg-3:hover {
                transform: translateY(20px);
            }
        }

        .feature-icon i {
            line-height: 1;
            display: block;
        }
    </style>

    {{-- Service  --}}
    <section class="py-6 bg-light">
        <div class="container">
            <div class="row align-items-end mb-5">
                <div class="col-lg-7">
                    <span class="text-gold text-uppercase small fw-bold tracking-widest">Expertise</span>
                    <h2 class="display-5 fw-bold mt-2">Professional Hospitality Services</h2>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a href="{{ route('services') }}" class="btn btn-outline-dark rounded-0 px-4 py-2">
                        View All Services <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm transition-hover overflow-hidden">
                        <div class="card-body p-4">
                            <div class="service-icon-sm mb-4">
                                <i class="bi bi-briefcase text-gold fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Internships & Placement</h5>
                            <p class="text-muted small mb-0">Structured interview prep and placement with global hotel
                                groups.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm transition-hover overflow-hidden">
                        <div class="card-body p-4">
                            <div class="service-icon-sm mb-4">
                                <i class="bi bi-mortarboard text-gold fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Corporate Training</h5>
                            <p class="text-muted small mb-0">Tailored programs for hospitality businesses focusing on
                                excellence.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm transition-hover overflow-hidden">
                        <div class="card-body p-4">
                            <div class="service-icon-sm mb-4">
                                <i class="bi bi-globe text-gold fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Workforce Development</h5>
                            <p class="text-muted small mb-0">Creating sustainable employment pathways for underserved
                                communities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm transition-hover overflow-hidden">
                        <div class="card-body p-4">
                            <div class="service-icon-sm mb-4">
                                <i class="bi bi-stars text-gold fs-2"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Practical Experience</h5>
                            <p class="text-muted small mb-0">Real-world exposure through site visits and supervised
                                placements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Add these to your main CSS file or a style block */
        .py-6 {
            padding: 6rem 0;
        }

        .text-gold {
            color: #c5a059;
        }

        .tracking-widest {
            letter-spacing: 0.15rem;
        }

        .service-icon-sm {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(197, 160, 89, 0.1);
            /* Light Gold background */
            border-radius: 8px;
        }

        .transition-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .transition-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1) !important;
        }

        /* Small line effect on hover */
        .card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: #c5a059;
            transition: width 0.3s ease;
        }

        .card:hover::after {
            width: 100%;
        }
    </style>


    {{-- Gallery  --}}
    <style>
        /* Gallery Cards */
        .gallery-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            background-color: #fff;
        }

        .gallery-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        .gallery-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 260px;
        }

        .gallery-img-wrapper img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform 0.4s ease;
            background-size: top;
        }

        .gallery-card:hover img {
            transform: scale(1.08);
        }

        .gallery-card .card-body {
            padding: 1.5rem;
        }

        .gallery-card .card-title {
            font-size: 1.1rem;
        }
    </style>

    <section class="py-5 bg-white">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold text-uppercase">Our Training Gallery</h2>
                <p class="text-muted mt-2">
                    A glimpse into our professional hospitality training programs and activities
                </p>
            </div>

            <div class="row g-4">
                @foreach ($galleries as $gallery)
                    @php
                        $images = explode(',', $gallery->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-6">
                            <div class="card gallery-card h-100 shadow-sm border-0">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ $image }}" class="card-img-top"
                                        alt="Hospitality Training Session">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold">{{ $gallery->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    {{-- call to action  --}}
    <section class="py-6 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), 
                url('{{ asset('data/11.jpeg') }}') center/cover no-repeat fixed;">
        </div>

        <div class="container position-relative z-2 py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="cta-box p-4 p-md-5 text-center border border-secondary border-opacity-25 rounded-5 shadow-2xl"
                        style="backdrop-filter: blur(10px); background: rgba(255,255,255, 0.03);">

                        <span class="text-gold text-uppercase small fw-bold tracking-widest mb-3 d-block">Ready to
                            Transform?</span>

                        <h2 class="display-4 fw-bold text-white mb-4">
                            Begin Your <span class="text-gold">Hospitality Career</span> Today
                        </h2>

                        <p class="text-white-50 fs-5 mb-5 mx-auto" style="max-width: 600px;">
                            Enrollment is open for 2026. Join a program focused on real skills and international placement.
                        </p>

                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="{{ route('contact') }}"
                                class="btn btn-gold btn-lg px-5 py-3 rounded-pill fw-bold shadow-lg">
                                APPLY NOW
                            </a>
                            <a href="{{ route('programs') }}"
                                class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">
                                EXPLORE PROGRAMS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .py-6 {
            padding: 6rem 0;
        }

        .text-gold {
            color: #c5a059;
        }

        .z-2 {
            z-index: 2;
        }

        .tracking-widest {
            letter-spacing: 0.2rem;
        }

        /* Custom Gold Button */
        .btn-gold {
            background-color: #c5a059;
            color: #fff;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background-color: #b38f4d;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3);
        }

        /* Outline Button Hover */
        .btn-outline-light:hover {
            background-color: white;
            color: #0f172a;
            transform: translateY(-3px);
        }

        /* Glass effect Box Shadow */
        .shadow-2xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        /* Subtle animation for the text-gold span */
        .tracking-widest {
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection

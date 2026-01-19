<style>
    .top-bar {
        background-color: var(--primary);
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
        font-family: 'Inter', sans-serif;
        border-bottom: 1px solid rgba(212, 175, 55, 0.3);
    }

    .top-bar a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: 0.3s;
    }

    .top-bar a:hover {
        color: var(--accent);
    }

    .contact-item i {
        color: var(--accent);
    }

    .social-links a i {
        font-size: 0.9rem;
    }

    .sticky-top {
        top: 0;
    }
</style>

<div class="top-bar py-2 d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex gap-4">
                    <div class="contact-item">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <a href="mailto:acquirecompanylimited@gmail.com">
                            acquirecompanylimited@gmail.com
                        </a>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <a href="tel:+959 968 266 438 ">
                            +959 968 266 438
                        </a>
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <span>Yangon, Myanmar</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="social-links">
                    <a href="#" class="ms-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="ms-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="ms-3"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex flex-column align-items-center fw-bold" href="{{ route('home') }}">
            <img src="https://acquireoverseasygn.com/data/logo.png" alt="Logo" width="50" height="50"
                class="mb-1">
            <span style="font-size: 0.8rem; line-height: 1;">
                Acquire Co.,Ltd
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('programs') }}">
                        Programs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('question_answer') }}">
                        Question & Answers
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">
                        Gallery
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-dark rounded-0 px-4">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

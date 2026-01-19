<footer class="main-footer bg-dark text-white pt-6 border-top border-white border-opacity-10">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-3">
                <div class="footer-logo fw-bold mb-4 fs-4 tracking-widest text-white">
                    Acquire Hospitality
                </div>
                <p class="text-white-50 mb-4 me-lg-5">
                    A professional hospitality training institute delivering world-class education and global career
                    opportunities.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <h6 class="text-uppercase small fw-bold mb-4 tracking-widest text-gold">
                    Links
                </h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2">
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('about') }}">
                            About
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('programs') }}">
                            Programs
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('services') }}">
                            Services
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('question_answer') }}">
                            Question & Answers
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('gallery') }}">
                            Gallery
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('contact') }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3">
                <h6 class="text-uppercase small fw-bold mb-4 tracking-widest text-gold">
                    Our Business Group
                </h6>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="#">About Us</a></li>
                    <li class="mb-2"><a href="#">Success Stories</a></li>
                    <li class="mb-2"><a href="#">Latest News</a></li>
                    <li><a href="#">Contact Support</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-3">
                <h6 class="text-uppercase small fw-bold mb-4 tracking-widest text-gold">
                    Contact Us
                </h6>
                <div class="small text-white-50">
                    <i class="bi bi-geo-alt text-gold me-2"></i>
                    No.(9B/18th-216), Ayeyar Chan Thar Condo, Ayeyarwun Street, 61 Ward, Dagon Seikken
                    T,S Yangon.
                </div>

                <div class="small text-white-50 pt-3">
                    <i class="bi bi-phone text-gold me-2"></i>
                    +959 968 266 438
                </div>

                <div class="small text-white-50 pt-3">
                    <i class="bi bi-phone text-gold me-2"></i>
                    +6014 56385 438
                </div>
            </div>
        </div>
    </div>

    <div class="border-top border-white border-opacity-10 py-4 mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <small class="text-white-50 opacity-75">
                        © 2026 Acquire Company Limited. All rights reserved.
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .pt-6 {
        padding-top: 6rem;
    }

    .text-gold {
        color: #c5a059 !important;
    }

    .btn-gold {
        background-color: #c5a059;
        color: #000;
        border: none;
    }

    .btn-gold:hover {
        background-color: #b38f4d;
        color: #fff;
    }

    /* Social Links Styling */
    .social-link {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: #c5a059;
        border-color: #c5a059;
        color: #000;
        transform: translateY(-3px);
    }

    /* Footer Navigation Styling */
    .footer-links a {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none;
        transition: color 0.3s ease;
        font-size: 0.95rem;
    }

    .footer-links a:hover {
        color: #c5a059;
    }

    /* Form Tweaks */
    .newsletter-form .form-control:focus {
        border-color: #c5a059;
    }
</style>

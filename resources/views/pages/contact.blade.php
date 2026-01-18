@extends('layouts.main')
@section('title')
    Contact Us
@endsection
@section('content')
    <section class="banner-soft-full">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12" data-aos="fade-right">
                    <div class="banner-content-box p-5">
                        <span class="badge-premium mb-3">
                            <i class="bi bi-globe me-2"></i>
                            Acquire Hospitality
                        </span>
                        <h1 class="display-3 fw-bold mb-3">Get In <span class="text-accent">Touch</span></h1>
                        <p class="lead text-muted mb-4">
                            We are here to help you with any questions about our hospitality training and consulting
                            services. Send us a message and our team will get back to you shortly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .banner-soft-full {
            width: 100%;
            min-height: 500px;
            position: relative;
            background: linear-gradient(90deg, #f8fafc 30%, rgba(248, 250, 252, 0.7) 100%),
                url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
        }

        .banner-content-box {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 0 100px 0 100px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        }

        .badge-premium {
            display: inline-block;
            padding: 8px 20px;
            background: var(--primary);
            color: var(--accent);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 50px;
        }

        .text-accent {
            color: var(--accent) !important;
        }

        .quick-stat span {
            font-size: 1.2rem;
            color: var(--primary);
        }

        /* Adjusting your original contact card to sit nicely below this */
        .contact-card {
            margin-top: -50px;
            /* Slight overlap for professional depth */
            z-index: 5;
        }

        @media (max-width: 991px) {
            .banner-soft-full {
                text-align: center;
                padding: 80px 0;
            }

            .banner-content-box {
                border-radius: 30px;
            }
        }
    </style>


    <section class="container mb-5">
        <div class="contact-card">
            <div class="row g-0">
                <div class="col-lg-7 form-section">
                    <h3 class="mb-4">Send us a Message</h3>
                    <form action="{{ route('store_contact') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label class="small fw-bold text-uppercase mb-2">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. John Doe"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <label class="small fw-bold text-uppercase mb-2">Email Address</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="e.g. john@company.com" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="small fw-bold text-uppercase mb-2">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+1 (555) 000-0000">
                            </div>

                            <div class="col-md-6">
                                <label class="small fw-bold text-uppercase mb-2">Subject</label>
                                <select name="subject" class="form-select form-control" required>
                                    <option disabled selected>Choose a Subject</option>
                                    <option>Corporate Training Inquiry</option>
                                    <option>Individual Certification</option>
                                    <option>Partnership Proposal</option>
                                    <option>General Support</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4 mt-3">
                            <label class="small fw-bold text-uppercase mb-2">How can we help?</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-send">
                            Send Inquiry
                        </button>
                    </form>
                </div>

                <div class="col-lg-5 info-sidebar d-flex flex-column">
                    <h3 class="text-white mb-5">Contact Information</h3>

                    <div class="d-flex mb-4">
                        <div class="contact-icon-box me-3">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-1">Our Center</h6>
                            <p class="small opacity-75">
                                No.(9B/18th-216), Ayeyar Chan Thar Condo, <br> Ayeyarwun Street, 61 Ward, <br> Dagon Seikken
                                T,S Yangon.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="contact-icon-box me-3">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-1">Training Hours</h6>
                            <p class="small opacity-75">Mon - Fri: 09:00 - 05:00<br>Sat - Sun: By Appointment</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="contact-icon-box me-3">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <h6 class="text-white mb-1">
                                Contact Numbers
                            </h6>
                            <p class="small opacity-75">
                                +959 968 266 438
                                <br>
                                +6014 56385 438
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 pt-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11444.385012410263!2d96.24095971347224!3d16.821128583710436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c18d3734f97257%3A0xff92b80dc9b2ddd4!2sAcquire%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1768723589201!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <style>
        .contact-header {
            background: linear-gradient(rgba(10, 17, 40, 0.8), rgba(10, 17, 40, 0.8)),
                url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            text-align: center;
        }

        .contact-card {
            background: white;
            border: none;
            border-radius: 0;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-top: -60px;
            position: relative;
            z-index: 10;
        }

        .info-sidebar {
            background: var(--primary);
            color: white;
            padding: 50px;
        }

        .form-section {
            padding: 50px;
        }

        .form-control {
            border-radius: 0;
            border: 1px solid #e2e8f0;
            padding: 12px 15px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: none;
        }

        .contact-icon-box {
            width: 50px;
            height: 50px;
            background: rgba(212, 175, 55, 0.1);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .btn-send {
            background: var(--accent);
            color: white;
            border: 2px solid var(--accent);
            border-radius: 0;
            padding: 12px 40px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .btn-send:hover {
            background: transparent;
            color: var(--accent);
        }

        .map-placeholder {
            width: 100%;
            height: 250px;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
@endsection

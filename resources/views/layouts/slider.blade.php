<header id="home" class="position-relative overflow-hidden vh-100">

    <div id="heroSlider" class="carousel slide carousel-fade vh-100" data-bs-ride="carousel" data-bs-interval="6000">

        <div class="carousel-indicators mb-4">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <div class="slider-image" style="background-image: url({{ asset('data/3.jpeg') }});"></div>
            </div>
            <div class="carousel-item h-100">
                <div class="slider-image" style="background-image: url({{ asset('data/11.jpeg') }});"></div>
            </div>
            <div class="carousel-item h-100">
                <div class="slider-image" style="background-image: url({{ asset('data/14.jpeg') }});"></div>
            </div>
        </div>

        <button class="carousel-control-prev z-3" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <div class="nav-circle">
                <i class="bi bi-chevron-left"></i>
            </div>
        </button>

        <button class="carousel-control-next z-3" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <div class="nav-circle">
                <i class="bi bi-chevron-right"></i>
            </div>
        </button>
    </div>
</header>

<style>
    /* 1. Clean Background Image */
    .slider-image {
        height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        /* Increased transition time for a more premium feel */
        transition: transform 12s linear;
    }

    /* 2. Cinematic Zoom (Works better without text) */
    .carousel-item.active .slider-image {
        transform: scale(1.1);
    }

    /* 3. Glassmorphism Nav Buttons - Adjusted for better visibility on bright images */
    .nav-circle {
        width: 60px;
        height: 60px;
        background: rgba(0, 0, 0, 0.2);
        /* Darker glass to stand out against bright photos */
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .nav-circle:hover {
        background: var(--accent, #ffc107);
        color: #000;
        border-color: var(--accent, #ffc107);
        transform: scale(1.1);
    }

    /* 4. Smooth Fade */
    .carousel-fade .carousel-item {
        transition-duration: 2s;
    }

    /* 5. Custom Indicators */
    .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        /* Circular indicators look cleaner for image-only sliders */
        margin: 0 6px;
        background-color: white;
        border: 2px solid rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators .active {
        background-color: var(--accent, #ffc107);
        transform: scale(1.2);
    }

    .z-3 {
        z-index: 3;
    }

    @media (max-width: 768px) {
        .nav-circle {
            width: 45px;
            height: 45px;
            font-size: 1.2rem;
        }
    }
</style>

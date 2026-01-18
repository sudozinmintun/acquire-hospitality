@extends('layouts.main')

@section('title')
    Gallery | Acquire Hospitality
@endsection

@section('content')
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

    <section class="py-5 bg-light">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="card gallery-card h-100 shadow-sm border-0">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ $image }}" class="card-img-top" alt="Hospitality Training Session">
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
@endsection

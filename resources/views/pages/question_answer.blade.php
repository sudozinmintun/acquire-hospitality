@extends('layouts.main')
@section('title')
    Question & Answer
@endsection

@section('content')
    <section id="faq" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h6 class="text-uppercase text-warning fw-bold ls-2 mb-3">Questions & Answers</h6>
                    <h2 class="display-4 fw-bold mb-4">Common Inquiries</h2>
                    <p class="text-muted mb-4">
                        Everything you need to know about the Acquire Hospitality Training Center and
                        our elite certification programs.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-premium px-4 py-3">
                        Ask a Specific Question
                    </a>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <div class="accordion accordion-flush custom-faq" id="faqAccordion">

                        @forelse($question_answers as $index => $item)
                            <div class="accordion-item mb-3 border shadow-sm">
                                <h2 class="accordion-header" id="heading{{ $item->id }}">
                                    <button class="accordion-button collapsed fw-bold py-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}"
                                        aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $item->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading{{ $item->id }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted lh-lg">
                                        {!! $item->answer !!}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <p class="text-muted">No frequently asked questions available at this time.</p>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Modernized FAQ Styling */
        .custom-faq .accordion-item {
            border-radius: 8px !important;
            /* Rounded corners for modern look */
            border: 1px solid #f0f0f0 !important;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .custom-faq .accordion-item:hover {
            border-color: #c5a059 !important;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05) !important;
        }

        .custom-faq .accordion-button {
            font-size: 1.1rem;
            color: #2d3436;
        }

        .custom-faq .accordion-button:not(.collapsed) {
            background-color: #fcf9f2;
            /* Light gold tint when open */
            color: #c5a059;
            box-shadow: none;
        }

        .custom-faq .accordion-button:focus {
            box-shadow: none;
        }

        /* Custom Arrow Icon */
        .custom-faq .accordion-button::after {
            transition: transform 0.3s ease;
        }

        .ls-2 {
            letter-spacing: 2px;
        }

        .btn-premium {
            background-color: #c5a059;
            color: white;
            border-radius: 0;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .btn-premium:hover {
            background-color: #0f172a;
            color: white;
        }
    </style>
@endsection

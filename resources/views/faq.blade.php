@extends('layouts.master')

@section('content')
    <style>
        .faq-heading h1 {
            color: #2D6D95;
            font-family: "JA-Hand-Reg";
            font-size: 68px;
            text-align: center;
        }

        .question-answer {
            margin-top: 4rem;
        }

        .accordion-button::after {
            background-image: url('public/assets/images/1x/arrow-down.png');
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url('public/assets/images/1x/arrow.png');
            transform: rotate(-180deg);
        }

        .background-img {
            height: 100%;
            background-size: cover;
            width: 100%;
            padding: 5rem 0 6rem 0;
            margin-bottom: 2rem;
        }

        .accordion-item,
        .accordion-button {
            background: transparent;
        }

        .accordion-button {
            color: #1A1A1A;
            font-family: "Raleway-Roman-Reg";
            font-size: 1.2rem;
            outline: none;

        }

        .accordion-button:not(.collapsed) {
            color: #1A1A1A;
            background: transparent;
        }

        .question-answer {
            padding: 2rem;
            background: linear-gradient(45deg, #ffffffcf, transparent);
            border-radius: 30px;
            border: 1px solid white;
            backdrop-filter: blur(5px);
            margin: 1rem auto 0 auto;
        }

        .accordion-body {
            font-family: "Poppins-Light";
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        body {
            background-color: #F2F2F2;
        }

        /* hadi css start */

        .faq-second-headind {
            color: #2D6D95;
            font-family: "JA-Hand-Reg";
            font-size: 46px;
            margin-top: 1rem;
        }
        .for-heading-width{
            width: 90%;
            margin: 3rem auto 0 auto;
        }

        /* hadi css end */
    </style>
    <section>
        <div class="banner3">
            <div class="container position-relative d-flex justify-content-center">
                <div class="position-absolute banner3-img">
                    <img src="{{ asset('assets/images/banner3-img.svg') }}">
                </div>
                <div class="position-absolute banner3-text wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <span class="h-1">
                        FAQs
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="background-img " style="background-image: url({{ asset('assets/images/bg1.png') }}">
        <div class="container">
            <div class="faq-heading">
                <h1>Frequently Asked Questions</h1>
            </div>
            <?php
            $count = 0;
            ?>
            @foreach ($faqs as $key => $faq)
                @if(count($faq->get_type_name) > 0)
                    <div class="for-heading-width">
                        <h1 class="faq-second-headind"> {{ $faq->section_type }} </h1>
                    <div class="question-answer">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach ($faq->get_type_name as $faq_type)
                                @if($faq_type->status == 1)
                                    {{-- {{$faq_type->question}} --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne{{ $count }}" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                {{ $faq_type->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{ $count }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{ $faq_type->answer }}</div>
                                        </div>
                                    </div>
                                    @php
                                        $count++;
                                    @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                  </div>
                @endif
            @endforeach
        </div>
    </div>

    @include('common.accepted_therapy_border')
@endsection


{{-- <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne{{ $key }}" aria-expanded="false"
            aria-controls="flush-collapseOne">
            {{ $faq->question }}
        </button>
    </h2>
    <div id="flush-collapseOne{{ $key }}" class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">{{ $faq->answer }}</div>
    </div>
</div> --}}

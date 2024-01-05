@extends('layouts.master')
@section('content')
    <style>
        .cardsBordersClass {
            border: 12px solid #f8d2b3;
        }

        .closeButton {
            background-color: #6ED6D3;
    font-family: "Solway-Bold";
    color: #2D6D95;
    border-radius: 13px;
    border: none;
    padding: 8px 12px;
    margin-bottom: 20px;
        }
    </style>
    <!-- ================================== BANNER2 =============================== -->
    <section>
        <div class="banner3">
            <div class="container position-relative d-flex justify-content-center">
                <div class="position-absolute banner3-img">
                    <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
                </div>
                <div class="position-absolute banner3-text">
                    <span class="h-1">
                        Cards
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================== Minimalistic Cards =============================== -->
    <section class="pt-5 pb-5 shadow-sm">
        <div class="container min-cards form4 ">
            <div class="row pt-5">
                <div class="col-12">
                    <h3 class="text-capitalize text-center mb-4">Minimalistic Cards</h3>
                    <a style="text-decoration: none;" class="d-flex justify-content-end" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <button class="closeButton">Close Your Session</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
            <!-- First Row of Cards -->
            <div id="myDIV" class="row">
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card1" class="radio-btn" id="d1" onclick="get_id(1)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card1" name="buss-cards" value="1" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Acceptance
                                    </h1>
                                    <p class="p-1">
                                        to accept others and circumstances as they are
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card2" class="radio-btn" id="d2" onclick="get_id(2)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card2" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Accountability
                                    </h1>
                                    <p class="p-1">
                                        to be willing to accept responsibility or to account for
my actions
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card3" class="radio-btn" id="d3" onclick="get_id(3)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card3" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Achievement
                                    </h1>
                                    <p class="p-1">
                                        to have important accomplishments
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card4" class="radio-btn" id="d4" onclick="get_id(4)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card4" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Adaptability
                                    </h1>
                                    <p class="p-1">
                                        to remain flexible and able to adjust to new
conditions
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card5" class="radio-btn" id="d5" onclick="get_id(5)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card5" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Adventure
                                    </h1>
                                    <p class="p-1">
                                        to seek out and/or participate in exciting events
that involve uncertainty
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card6" class="radio-btn" id="d6" onclick="get_id(6)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card6" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Advocacy
                                    </h1>
                                    <p class="p-1">
                                        the act or process of supporting a cause
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card7" class="radio-btn" id="d7" onclick="get_id(7)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card7" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Aggression
                                    </h1>
                                    <p class="p-1">
                                        to be forceful, demanding, or readiness to
confront in pursuit of something
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card8" class="radio-btn" id="d8" onclick="get_id(8)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card8" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Altruism
                                    </h1>
                                    <p class="p-1">
                                        to act to promote someone else's welfare even at
the expense of ourselves
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card9" class="radio-btn" id="d9" onclick="get_id(9)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card9" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Ambition
                                    </h1>
                                    <p class="p-1">
                                        a strong desire to do or to achieve something
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card10" class="radio-btn" id="d10" onclick="get_id(10)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card10" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Appreciation
                                    </h1>
                                    <p class="p-1">
                                        to be recognized with admiration, approval, or
gratitude </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card11" class="radio-btn" id="d11" onclick="get_id(11)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card11" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Approval
                                    </h1>
                                    <p class="p-1">
                                        to be accepted as I am; to be confirmed or
validated
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card12" class="radio-btn" id="d12" onclick="get_id(12)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card12" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Art
                                    </h1>
                                    <p class="p-1">
                                        to appreciate or express myself in art
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card13" class="radio-btn" id="d13" onclick="get_id(13)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card13" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Assertiveness
                                    </h1>
                                    <p class="p-1">
                                        to confidently communicate ideas and needs
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card14" class="radio-btn" id="d14" onclick="get_id(14)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card14" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Attractiveness
                                    </h1>
                                    <p class="p-1">
                                        to be physically attractive
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card15" class="radio-btn" id="d15" onclick="get_id(15)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card15" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Authenticity
                                    </h1>
                                    <p class="p-1">
                                        to be true to one's own personality, spirit, or
character
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card16" class="radio-btn" id="d16" onclick="get_id(16)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card16" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Authority
                                    </h1>
                                    <p class="p-1">
                                        power to influence or command thought, opinion,
or behavior
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card17" class="radio-btn" id="d17" onclick="get_id(17)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card17" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Autonomy
                                    </h1>
                                    <p class="p-1">
                                        the quality or state of being self-governing; selfdirecting freedom
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card18" class="radio-btn" id="d18" onclick="get_id(18)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card18" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Balance
                                    </h1>
                                    <p class="p-1">
                                        expanding your time and energy according to
what is most important to you
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card19" class="radio-btn" id="d19" onclick="get_id(19)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card19" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Beauty
                                    </h1>
                                    <p class="p-1">
                                        to appreciate beauty around me
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card20" class="radio-btn" id="d20" onclick="get_id(20)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card20" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Being Present
                                    </h1>
                                    <p class="p-1">
                                        to be attentive to the current moment, free from
distractions
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card21" class="radio-btn" id="d21" onclick="get_id(21)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card21" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Belonging

                                    </h1>
                                    <p class="p-1">
                                        to have a sense of belonging, being part of; a
close or intimate relationship
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card22" class="radio-btn" id="d22" onclick="get_id(22)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card22" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Boldness
                                    </h1>
                                    <p class="p-1">
                                        to willingly to take risks and act innovatively;
confidence or courage
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card23" class="radio-btn" id="d23" onclick="get_id(23)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card23" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Boundaries
                                    </h1>
                                    <p class="p-1">
                                        a limit that is set on what you will accept
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card24" class="radio-btn" id="d24" onclick="get_id(24)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card24" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Bravery
                                    </h1>
                                    <p class="p-1">
                                        the quality that allows someone to do things that
are frightening
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card25" class="radio-btn" id="d25" onclick="get_id(25)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card25" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Career
                                    </h1>
                                    <p class="p-1">
                                        an occupation undertaken for a significant period
of a person's life and with opportunities for
progress
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card23" class="radio-btn" id="d26" onclick="get_id(26)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card23" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Caring
                                    </h1>
                                    <p class="p-1">
                                        feeling or showing concern for or kindness to
others
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card24" class="radio-btn" id="d27" onclick="get_id(27)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card24" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Charity

                                    </h1>
                                    <p class="p-1">
                                        generosity and helpfulness especially toward the
needy or suffering
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card28" class="radio-btn" id="d28" onclick="get_id(28)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card28" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Choice
                                    </h1>
                                    <p class="p-1">
                                        the power, right, or opportunity to choose
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card29" class="radio-btn" id="d29" onclick="get_id(29)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card29" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Church
                                    </h1>
                                    <p class="p-1">
                                        a body or organization of religious believers
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card30" class="radio-btn" id="d30" onclick="get_id(30)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card30" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Citizenship
                                    </h1>
                                    <p class="p-1">
                                        the position or status of being a citizen of a
particular state or country
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card31" class="radio-btn" id="d31" onclick="get_id(31)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card31" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Cleanliness
                                    </h1>
                                    <p class="p-1">
                                        the quality or state of being clean </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card32" class="radio-btn" id="d32" onclick="get_id(32)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card32" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Closeness </h1>
                                    <p class="p-1">
                                        the quality of affection or intimacy in a
relationship
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card33" class="radio-btn" id="d33" onclick="get_id(33)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card33" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Commitment
                                    </h1>
                                    <p class="p-1">
                                        being obligated or dedicated to a cause, activity
or person emotionally impelled
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card34" class="radio-btn" id="d34" onclick="get_id(34)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card34" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Common Sense
                                    </h1>
                                    <p class="p-1">
                                        sound judgment in practical matters
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card35" class="radio-btn" id="d35" onclick="get_id(35)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card35" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Communication
                                    </h1>
                                    <p class="p-1">
                                        the exchange of meaning and information
between individuals through a system of symbols,
words, and behavior
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card36" class="radio-btn" id="d36" onclick="get_id(36)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card36" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Community
                                    </h1>
                                    <p class="p-1">
                                        a group of people that have a particular
characteristic in common
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card37" class="radio-btn" id="d37" onclick="get_id(37)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card37" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Companionship
                                    </h1>
                                    <p class="p-1">
                                        spending time with someone or having someone
to spend time with you
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card38" class="radio-btn" id="d38" onclick="get_id(38)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card38" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Compassion
                                    </h1>
                                    <p class="p-1">
                                        concern for the sufferings or misfortunes of
others
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card39" class="radio-btn" id="d39" onclick="get_id(39)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card39" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Competence

                                    </h1>
                                    <p class="p-1">
                                        having sufficient knowledge and ability to do
something efficiently

                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card40" class="radio-btn" id="d40" onclick="get_id(40)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card40" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Compromise
                                    </h1>
                                    <p class="p-1">
                                        the act or practice of each side giving up
something in order to reach an agreement
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card41" class="radio-btn" id="d41" onclick="get_id(41)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card41" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Confidence
                                    </h1>
                                    <p class="p-1">
                                        to be certain of and appreciative of abilities or
qualities
                                    </p>

                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card42" class="radio-btn" id="d42" onclick="get_id(42)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card42" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Consistency
                                    </h1>
                                    <p class="p-1">
                                        the fact of always behaving or occurring in the
way expected
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card43" class="radio-btn" id="d43" onclick="get_id(43)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card43" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Contribution
                                    </h1>
                                    <p class="p-1">
                                        the giving or supplying of something that plays a
significant part in making something happen
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card44" class="radio-btn" id="d44" onclick="get_id(44)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card44" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Control
                                    </h1>
                                    <p class="p-1">
                                        exerting influence over one's environment or the
actions or behaviors of another person
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card45" class="radio-btn" id="d45" onclick="get_id(45)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card45" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Cooperation
                                    </h1>
                                    <p class="p-1">
                                        placing importance on working together to
achieve results; go along with a role
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card46" class="radio-btn" id="d46" onclick="get_id(46)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card46" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Courage
                                    </h1>
                                    <p class="p-1">
                                        mental or moral strength to venture, persevere,
and withstand danger, fear, or difficulty
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card47" class="radio-btn" id="d47" onclick="get_id(47)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card47" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Creativity
                                    </h1>
                                    <p class="p-1">
                                        placing importance on imagination, inspiration,
and inventiveness
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card48" class="radio-btn" id="d48" onclick="get_id(48)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card48" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Curiosity
                                    </h1>
                                    <p class="p-1">
                                        being interested, inquisitive; open to exploration
and discovery
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card49" class="radio-btn" id="d49" onclick="get_id(49)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card49" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Decisiveness
                                    </h1>
                                    <p class="p-1">
                                        the ability to make decisions firmly, clearly,
conclusively, and in a timely manner
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card50" class="radio-btn" id="d50" onclick="get_id(50)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card50" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Diet
                                    </h1>
                                    <p class="p-1">
                                        the customary amount and kind of food and drink
taken by a person from day to day
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card51" class="radio-btn" id="d51" onclick="get_id(51)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card51" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Discipline
                                    </h1>
                                    <p class="p-1">
                                        training that corrects, molds, or perfects the
mental faculties or moral character
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card52" class="radio-btn" id="d52" onclick="get_id(52)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card52" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Diversity
                                    </h1>
                                    <p class="p-1">
                                        appreciation of and respect for individual
differences
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card53" class="radio-btn" id="d53" onclick="get_id(53)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card53" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Education
                                    </h1>
                                    <p class="p-1">
                                        the experience of learning new things
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card54" class="radio-btn" id="d54" onclick="get_id(54)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card54" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Emotional Safety

                                    </h1>
                                    <p class="p-1">
                                        the ability to express emotion freely without
consequences
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



              
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card55" class="radio-btn" id="d55" onclick="get_id(55)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card55" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Empathy
                                    </h1>
                                    <p class="p-1">
                                        the capacity to understand or feel what another
person is experiencing from within their frame of
reference
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card56" class="radio-btn" id="d56" onclick="get_id(56)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card56" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Employment
                                    </h1>
                                    <p class="p-1">
                                        work completed to make ends meet
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card57" class="radio-btn" id="d57" onclick="get_id(57)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card57" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Empowerment
                                    </h1>
                                    <p class="p-1">
                                        the process of becoming stronger and more
confident, especially in controlling one's life and
claiming one's rights
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!--Twentyth Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card58" class="radio-btn" id="d58" onclick="get_id(58)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card58" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Environmentalism
                                    </h1>
                                    <p class="p-1">
                                        concern about and action aimed at protecting the
environment
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card59" class="radio-btn" id="d59" onclick="get_id(59)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card59" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Equality
                                    </h1>
                                    <p class="p-1">
                                        the state of being equal, especially in status,
rights, and opportunities
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card60" class="radio-btn" id="d60" onclick="get_id(60)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card60" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Exercise

                                    </h1>
                                    <p class="p-1">
                                        activity requiring physical effort, carried out to
sustain or improve health and fitness
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 21th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card61" class="radio-btn" id="d61" onclick="get_id(61)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card61" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Expertise
                                    </h1>
                                    <p class="p-1">
                                        expert skill or knowledge in a particular field
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card62" class="radio-btn" id="d62" onclick="get_id(62)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card62" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Exploration
                                    </h1>
                                    <p class="p-1">
                                        the action of traveling in or through an unfamiliar
area in order to learn about it
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card63" class="radio-btn" id="d63" onclick="get_id(63)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card63" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Faith
                                    </h1>
                                    <p class="p-1">
                                        complete trust or confidence in someone or
something
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 22th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card64" class="radio-btn" id="d64" onclick="get_id(64)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card64" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Faithfulness
                                    </h1>
                                    <p class="p-1">
                                        lasting loyalty and trustworthiness in
relationships
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card65" class="radio-btn" id="d65" onclick="get_id(65)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card65" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Family
                                    </h1>
                                    <p class="p-1">
                                        a group of persons united by the ties of marriage,
blood, or adoption interacting with each other in
their respective social positions
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card66" class="radio-btn" id="d66" onclick="get_id(66)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card66" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Fellowship
                                    </h1>
                                    <p class="p-1">
                                        a feeling of belonging with others, as a result of
sharing common attitudes, interests, and goals
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 23th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card67" class="radio-btn" id="d67" onclick="get_id(67)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card67" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Financial Stability

                                    </h1>
                                    <p class="p-1">
                                        building a financial system that can function in
good times and bad
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card68" class="radio-btn" id="d68" onclick="get_id(68)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card68" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Fitness
                                    </h1>
                                    <p class="p-1">
                                        one's ability to execute daily activities with
optimal performance, endurance, and strength
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card69" class="radio-btn" id="d69" onclick="get_id(69)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card69" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Forgiveness
                                    </h1>
                                    <p class="p-1">
                                        the release of resentment or anger
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 24th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card70" class="radio-btn" id="d70" onclick="get_id(70)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card70" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Freedom
                                    </h1>
                                    <p class="p-1">
                                        to be free from undue restrictions and limitations;
without obligation
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card71" class="radio-btn" id="d71" onclick="get_id(71)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card71" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Friendship
                                    </h1>
                                    <p class="p-1">
                                        a state of mutual affection, trust, and support
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card72" class="radio-btn" id="d72" onclick="get_id(72)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card72" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Genuineness
                                    </h1>
                                    <p class="p-1">
                                        to act in a manner that is sincere and honest
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 25th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card73" class="radio-btn" id="d73" onclick="get_id(73)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card73" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        God'sWill


                                    </h1>
                                    <p class="p-1">
                                        making efforts to live in a way that is in
accordance with God's plan
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card74" class="radio-btn" id="d74" onclick="get_id(74)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card74" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Grace
                                    </h1>
                                    <p class="p-1">
                                        to demonstrate compassion and self-compassion
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card75" class="radio-btn" id="d75" onclick="get_id(75)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card75" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Gratitude
                                    </h1>
                                    <p class="p-1">
                                        the quality of being thankful; readiness to show
appreciation for and to return kindness
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 26th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card76" class="radio-btn" id="d76" onclick="get_id(76)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card76" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Growth
                                    </h1>
                                    <p class="p-1">
                                        continual development to reach full potential
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card77" class="radio-btn" id="d77" onclick="get_id(77)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card77" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Happiness
                                    </h1>
                                    <p class="p-1">
                                        a state of well-being and contentment
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card78" class="radio-btn" id="d78" onclick="get_id(78)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card78" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Health
                                    </h1>
                                    <p class="p-1">
                                        the condition of being sound in body, mind, or
spirit
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 27th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card79" class="radio-btn" id="d79" onclick="get_id(79)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card79" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Helpfulness
                                    </h1>
                                    <p class="p-1">
                                        the quality of giving or being ready to give help
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card80" class="radio-btn" id="d80" onclick="get_id(80)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card80" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Hobbies
                                    </h1>
                                    <p class="p-1">
                                        an activity outside of one's regular occupation
that is engaged in primarily for pleasure
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card81" class="radio-btn" id="d81" onclick="get_id(81)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card81" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Honesty
                                    </h1>
                                    <p class="p-1">
                                        telling the truth, not engaging in deception, being
forthright and candid
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 28th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card82" class="radio-btn" id="d82" onclick="get_id(82)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card82" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Hope
                                    </h1>
                                    <p class="p-1">
                                        to cherish a desire with anticipation; to want
something to happen or be true
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card83" class="radio-btn" id="d83" onclick="get_id(83)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card83" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Humility
                                    </h1>
                                    <p class="p-1">
                                        freedom from pride or arrogance
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card84" class="radio-btn" id="d84" onclick="get_id(84)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card84" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Humor
                                    </h1>
                                    <p class="p-1">
                                        tendency of experiences to provoke laughter and
provide amusement
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 29th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card85" class="radio-btn" id="d85" onclick="get_id(85)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card85" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Identity
                                    </h1>
                                    <p class="p-1">
                                        the individual characteristics by which a thing or
person is recognized or known
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card86" class="radio-btn" id="d86" onclick="get_id(86)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card86" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Imagination
                                    </h1>
                                    <p class="p-1">
                                        the ability of the mind to be creative or
resourceful
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card87" class="radio-btn" id="d87" onclick="get_id(87)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card87" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Inclusion
                                    </h1>
                                    <p class="p-1">
                                        to be included in the activities and relationships
around me
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 30th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card88" class="radio-btn" id="d88" onclick="get_id(88)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card88" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Independence </h1>
                                    <p class="p-1">
                                        the state of being free of the control of some
other person or entity
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card89" class="radio-btn" id="d89" onclick="get_id(89)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card89" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Influence
                                    </h1>
                                    <p class="p-1">
                                        the capacity to have an effect on the character,
development, or behavior of someone or
something, or the effect itself
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card90" class="radio-btn" id="d90" onclick="get_id(90)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card90" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Inner Peace </h1>
                                    <p class="p-1">
                                        deliberate state of psychological or spiritual calm
despite the potential presence of stressors
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 30th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card91" class="radio-btn" id="d91" onclick="get_id(91)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card91" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Insightfulness
                                    </h1>
                                    <p class="p-1">
                                        having or showing a very clear understanding of
something
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card92" class="radio-btn" id="d92" onclick="get_id(92)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card92" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Integrity
                                    </h1>
                                    <p class="p-1">
                                        to live my daily life in a way that is consistent
with my values
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card93" class="radio-btn" id="d93" onclick="get_id(93)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card93" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Intelligence
                                    </h1>
                                    <p class="p-1">
                                        the capacity for learning, reasoning,
understanding, and similar forms of mental
activity
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 31th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card94" class="radio-btn" id="d94" onclick="get_id(94)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card94" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Intimacy
                                    </h1>
                                    <p class="p-1">
                                        a closeness between people who feel safe and
secure with each other
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card95" class="radio-btn" id="d95" onclick="get_id(95)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card95" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Joy
                                    </h1>
                                    <p class="p-1">
                                        the emotion of great delight or happiness caused
by something exceptionally good or satisfying
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card96" class="radio-btn" id="d96" onclick="get_id(96)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card96" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Justice
                                    </h1>
                                    <p class="p-1">
                                        the idea that people are to be treated
impartially, fairly, properly, and reasonable </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                {{-- </div> --}}
                <!-- 32th Row of Cards -->
                {{-- <div class="row"> --}}
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card97" class="radio-btn" id="d97" onclick="get_id(97)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card97" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Kindness
                                    </h1>
                                    <p class="p-1">
                                        being considerate, helpful, or caring to myself or
others
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card98" class="radio-btn" id="d98" onclick="get_id(98)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card98" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card1.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Knowledge
                                    </h1>
                                    <p class="p-1">
                                        acts, information, and skills acquired by a person
through experience or education; the practical
understanding of a subject
                                    </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card99" class="radio-btn" id="d99" onclick="get_id(99)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card99" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Leadership
                                    </h1>
                                    <p class="p-1">
                                        the ability of an individual or a group of
individuals to influence and guide others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card100" class="radio-btn" id="d100" onclick="get_id(100)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card100" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Leisure
                                    </h1>
                                    <p class="p-1">
                                        time when you are not working, where you can
enjoy things that you like to do </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card101" class="radio-btn" id="d101" onclick="get_id(101)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card101" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Love
                                    </h1>
                                    <p class="p-1">
                                        to be loved by those close to me and/or to give
love to others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card102" class="radio-btn" id="d102" onclick="get_id(102)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card102" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Loyalty
                                    </h1>
                                    <p class="p-1">
                                        a strong feeling of support or allegiance </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card103" class="radio-btn" id="d103" onclick="get_id(103)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card103" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Marriage
                                    </h1>
                                    <p class="p-1">
                                        a relationship in which two people have pledged
themselves to each other </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card104" class="radio-btn" id="d104" onclick="get_id(104)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card104" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Meaning
                                    </h1>
                                    <p class="p-1">
                                        to understand the purpose and significance of
something </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card105" class="radio-btn" id="d105" onclick="get_id(105)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card105" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Meditation
                                    </h1>
                                    <p class="p-1">
                                        the act or process of spending time in quiet
thought: the act or process of meditating </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card106" class="radio-btn" id="d106" onclick="get_id(106)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card106" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Mindfulness
                                    </h1>
                                    <p class="p-1">
                                        focusing one's awareness on the present moment,
while calmly acknowledging and accepting one's
feelings </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>





                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card107" class="radio-btn" id="d107" onclick="get_id(107)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card107" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Moderation
                                    </h1>
                                    <p class="p-1">
                                        the quality of being moderate; restraint;
avoidance of extremes or excesses </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card108" class="radio-btn" id="d108" onclick="get_id(108)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card108" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Money
                                    </h1>
                                    <p class="p-1">
                                        the idea that money creates success, happiness,
or security </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card109" class="radio-btn" id="d109" onclick="get_id(109)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card109" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Monogamy
                                    </h1>
                                    <p class="p-1">
                                        the state or practice of having only one sexual
partner during a period of time </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card110" class="radio-btn" id="d110" onclick="get_id(110)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card110" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Multitasking
                                    </h1>
                                    <p class="p-1">
                                        the ability to do several things at the same time </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card111" class="radio-btn" id="d111" onclick="get_id(111)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card111" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Music
                                    </h1>
                                    <p class="p-1">
                                        to experience emotional connection through music </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card112" class="radio-btn" id="d112" onclick="get_id(112)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card112" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Nature
                                    </h1>
                                    <p class="p-1">
                                        the physical world and everything in it (such as
plants, animals, mountains, oceans, stars, etc.)
that is not made by people </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card113" class="radio-btn" id="d113" onclick="get_id(113)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card113" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Openness
                                    </h1>
                                    <p class="p-1">
                                        revealing myself, letting people know my
thoughts and feelings; to be open to new things </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card114" class="radio-btn" id="d114" onclick="get_id(114)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card114" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Optimism
                                    </h1>
                                    <p class="p-1">
                                        hopefulness and confidence about the future or
the successful outcome of something </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card115" class="radio-btn" id="d115" onclick="get_id(115)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card115" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Organization
                                    </h1>
                                    <p class="p-1">
                                        act of taking an efficient and orderly approach to
tasks </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card116" class="radio-btn" id="d116" onclick="get_id(116)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card116" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Originality
                                    </h1>
                                    <p class="p-1">
                                        the ability to think, uniquely, independently, and
creatively </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card117" class="radio-btn" id="d117" onclick="get_id(117)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card117" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Passion
                                    </h1>
                                    <p class="p-1">
                                        to have deep or strong feelings about ideas,
activities, or people </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card118" class="radio-btn" id="d118" onclick="get_id(118)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card118" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Patriotism
                                    </h1>
                                    <p class="p-1">
                                        the feeling of love, devotion, and sense of
attachment to one's country </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card119" class="radio-btn" id="d119" onclick="get_id(119)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card119" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Perfection
                                    </h1>
                                    <p class="p-1">
                                        the condition, state, or quality of being, or
appearing to be, free from all flaws or defects </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card120" class="radio-btn" id="d120" onclick="get_id(120)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card120" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Pets
                                    </h1>
                                    <p class="p-1">
                                        an animal kept for companionship or pleasure </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card121" class="radio-btn" id="d121" onclick="get_id(121)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card121" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Playfulness
                                    </h1>
                                    <p class="p-1">
                                        imagination, spontaneity; the ability to have fun
and experience amusement </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card122" class="radio-btn" id="d122" onclick="get_id(122)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card122" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Pleasure
                                    </h1>
                                    <p class="p-1">
                                        a state of gratification; source of delight or joy </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card123" class="radio-btn" id="d123" onclick="get_id(123)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card123" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Politics
                                    </h1>
                                    <p class="p-1">
                                        activities that relate to influencing the actions
and policies of a government </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card124" class="radio-btn" id="d124" onclick="get_id(124)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card124" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Popularity
                                    </h1>
                                    <p class="p-1">
                                        the state of being liked, enjoyed, or accepted by
a large number of people </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card125" class="radio-btn" id="d125" onclick="get_id(125)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card125" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Positivity
                                    </h1>
                                    <p class="p-1">
                                        the practice of being or tendency to be positive
or optimistic in attitude </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card126" class="radio-btn" id="d126" onclick="get_id(126)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card126" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Possessions
                                    </h1>
                                    <p class="p-1">
                                        the state of having, owning, or controlling
something </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card127" class="radio-btn" id="d127" onclick="get_id(127)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card127" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Power
                                    </h1>
                                    <p class="p-1">
                                        the capacity or ability to direct or influence the
behavior of others or the course of events </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card128" class="radio-btn" id="d128" onclick="get_id(128)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card128" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Praise
                                    </h1>
                                    <p class="p-1">
                                        the expression of approval or admiration for
someone or something; express warm approval or
admiration of </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card129" class="radio-btn" id="d129" onclick="get_id(129)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card129" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Prayer
                                    </h1>
                                    <p class="p-1">
                                        the act or practice of praying </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card130" class="radio-btn" id="d130" onclick="get_id(130)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card130" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Predictability
                                    </h1>
                                    <p class="p-1">
                                        the likelihood, or certainty, that an event is going
to occur as expected </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card131" class="radio-btn" id="d131" onclick="get_id(131)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card131" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Pride
                                    </h1>
                                    <p class="p-1">
                                        confidence and self-respect by an individual or
group </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card132" class="radio-btn" id="d132" onclick="get_id(132)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card132" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Productivity
                                    </h1>
                                    <p class="p-1">
                                        how efficiently a person generates, creates,
enhances, or completes a task </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card133" class="radio-btn" id="d133" onclick="get_id(133)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card133" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Professionalism
                                    </h1>
                                    <p class="p-1">
                                        the conduct, aims, or qualities that characterize
or mark a profession or a professional person </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card134" class="radio-btn" id="d134" onclick="get_id(134)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card134" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Prosperity
                                    </h1>
                                    <p class="p-1">
                                        a successful, flourishing, or thriving condition </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card135" class="radio-btn" id="d135" onclick="get_id(135)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card135" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Protection
                                    </h1>
                                    <p class="p-1">
                                        the action of protecting, or the state of being
protected </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card136" class="radio-btn" id="d136" onclick="get_id(136)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card136" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Provide
                                    </h1>
                                    <p class="p-1">
                                        to provide for and take care of others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card137" class="radio-btn" id="d137" onclick="get_id(137)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card137" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Purpose
                                    </h1>
                                    <p class="p-1">
                                        to have meaning and direction in my life; the
reason for which something is done or created or
for which something exists </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card138" class="radio-btn" id="d138" onclick="get_id(138)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card138" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Quality Time

                                    </h1>
                                    <p class="p-1">
                                        to spend time with those that are important to me</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card139" class="radio-btn" id="d139" onclick="get_id(139)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card139" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Reason
                                    </h1>
                                    <p class="p-1">
                                        o think, understand, and form judgments by a
process of logic </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card140" class="radio-btn" id="d140" onclick="get_id(140)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card140" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Recognition
                                    </h1>
                                    <p class="p-1">
                                        acknowledgement and/or validation from others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card141" class="radio-btn" id="d141" onclick="get_id(141)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card141" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Recovery
                                    </h1>
                                    <p class="p-1">
                                        a return to a normal state of health, mind, or
strength </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card142" class="radio-btn" id="d142" onclick="get_id(142)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card142" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Reliability
                                    </h1>
                                    <p class="p-1">
                                        the quality of being trustworthy, dependable, or
consistent </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card143" class="radio-btn" id="d143" onclick="get_id(143)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card143" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Religion
                                    </h1>
                                    <p class="p-1">
                                        a specific system of belief or worship </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card144" class="radio-btn" id="d144" onclick="get_id(144)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card144" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Reputation
                                    </h1>
                                    <p class="p-1">
                                        the beliefs or opinions that are generally held
about someone or something </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card145" class="radio-btn" id="d145" onclick="get_id(145)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card145" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Respect
                                    </h1>
                                    <p class="p-1">
                                        a feeling of deep admiration for someone or
something elicited by their abilities, qualities, or
achievements </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card146" class="radio-btn" id="d146" onclick="get_id(146)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card146" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Responsibility
                                    </h1>
                                    <p class="p-1">
                                        obligations, duties, decision making, or control </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card147" class="radio-btn" id="d147" onclick="get_id(147)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card147" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Restraint
                                    </h1>
                                    <p class="p-1">
                                        a control over the expression of one's emotions or
thoughts </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card148" class="radio-btn" id="d148" onclick="get_id(148)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card148" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Romance
                                    </h1>
                                    <p class="p-1">
                                        a feeling of excitement and mystery associated
with love </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card149" class="radio-btn" id="d149" onclick="get_id(149)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card149" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Routine
                                    </h1>
                                    <p class="p-1">
                                        predictable pattern of behaviors or activities
that are typically done everyday </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card150" class="radio-btn" id="d150" onclick="get_id(150)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card150" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Safety
                                    </h1>
                                    <p class="p-1">
                                        the condition of being safe from undergoing or
causing hurt, injury, or loss </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card151" class="radio-btn" id="d151" onclick="get_id(151)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card151" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Security
                                    </h1>
                                    <p class="p-1">
                                        feeling of being protected or safeguarded from
danger; a sense of comfort </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card152" class="radio-btn" id="d152" onclick="get_id(152)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card152" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Acceptance

                                    </h1>
                                    <p class="p-1">
                                        acceptance of all of one's attributes, positive and
negative </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card153" class="radio-btn" id="d153" onclick="get_id(153)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card153" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Actualization
                                    </h1>
                                    <p class="p-1">
                                        the realization or fulfillment of one's talents and
potential </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card154" class="radio-btn" id="d154" onclick="get_id(154)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card154" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Awareness

                                    </h1>
                                    <p class="p-1">
                                        conscious knowledge of one's own character,
feelings, motives, and desires </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card155" class="radio-btn" id="d155" onclick="get_id(155)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card155" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Care
                                    </h1>
                                    <p class="p-1">
                                        the practice of taking an active role in protecting
one's own well-being and happiness </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card156" class="radio-btn" id="d156" onclick="get_id(156)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card156" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Control
                                    </h1>
                                    <p class="p-1">
                                        control or restraint of oneself or one's actions,
feelings, or words </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card157" class="radio-btn" id="d157" onclick="get_id(157)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card157" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Esteem
                                    </h1>
                                    <p class="p-1">
                                        confidence in one's own worth or abilities;
self-respect </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card158" class="radio-btn" id="d158" onclick="get_id(158)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card158" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Knowledge
                                    </h1>
                                    <p class="p-1">
                                        to have a deep and honest understanding of
myself, motives, or character </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card159" class="radio-btn" id="d159" onclick="get_id(159)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card159" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Reflection
                                    </h1>
                                    <p class="p-1">
                                        meditation or serious thought about one's
character, actions, and motives </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>




                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card160" class="radio-btn" id="d160" onclick="get_id(160)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card160" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self-Reliance
                                    </h1>
                                    <p class="p-1">
                                        reliance on one's own powers and resources
rather than those of others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card161" class="radio-btn" id="d161" onclick="get_id(161)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card161" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Self Determination

                                    </h1>
                                    <p class="p-1">
                                        the process by which a person controls their own life</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card162" class="radio-btn" id="d162" onclick="get_id(162)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card162" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Selflessness
                                    </h1>
                                    <p class="p-1">
                                        lack of preoccupation with one's own interests;
attentiveness to the interests of others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card163" class="radio-btn" id="d163" onclick="get_id(163)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card163" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Service
                                    </h1>
                                    <p class="p-1">
                                        to be helpful and of service to others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card164" class="radio-btn" id="d164" onclick="get_id(164)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card164" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        SexualExpression
                                    </h1>
                                    <p class="p-1">
                                        a complex process through which we reveal our
sexual selves </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card165" class="radio-btn" id="d165" onclick="get_id(165)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card165" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Sexuality
                                    </h1>
                                    <p class="p-1">
                                        to have an active and satisfying sex lives </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card166" class="radio-btn" id="d166" onclick="get_id(166)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card166" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Simplicity
                                    </h1>
                                    <p class="p-1">
                                        the state of being simple or uncomplicated</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card167" class="radio-btn" id="d167" onclick="get_id(167)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card167" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Sobriety
                                    </h1>
                                    <p class="p-1">
                                        to be abstinent or free of intoxicating or moodaltering substances </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card168" class="radio-btn" id="d168" onclick="get_id(168)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card168" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Social Justice

                                    </h1>
                                    <p class="p-1">
                                        fair treatment of all people in a society, including
respect for the rights of minorities and
distribution of resources </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card169" class="radio-btn" id="d169" onclick="get_id(169)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card169" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Solitude
                                    </h1>
                                    <p class="p-1">
                                        the state of being alone by choice, especially
when it is peaceful and pleasant </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card170" class="radio-btn" id="d170" onclick="get_id(170)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card170" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Spirituality
                                    </h1>
                                    <p class="p-1">
                                        seeking a meaningful connection with something
bigger than yourself </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card171" class="radio-btn" id="d171" onclick="get_id(171)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card171" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Spontaneity
                                    </h1>
                                    <p class="p-1">
                                        a way of behaving in which one does what feels
natural and good, without planning </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card172" class="radio-btn" id="d172" onclick="get_id(172)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card172" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Stability
                                    </h1>
                                    <p class="p-1">
                                        to have a life that stays fairly consistent </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card173" class="radio-btn" id="d173" onclick="get_id(173)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card173" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Status
                                    </h1>
                                    <p class="p-1">
                                        placing importance on the rank or position of
something </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card174" class="radio-btn" id="d174" onclick="get_id(174)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card174" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Strength
                                    </h1>
                                    <p class="p-1">
                                        the quality or state of being strong: capacity for
exertion or endurance </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card175" class="radio-btn" id="d175" onclick="get_id(175)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card175" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Success
                                    </h1>
                                    <p class="p-1">
                                        to achieve a favorable or desired outcome </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card176" class="radio-btn" id="d176" onclick="get_id(176)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card176" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Superiority
                                    </h1>
                                    <p class="p-1">
                                        to be superior to others in a particular task or
area of life </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card177" class="radio-btn" id="d177" onclick="get_id(177)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card177" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Support
                                    </h1>
                                    <p class="p-1">
                                        to have encouraging people who I can ask for
                                        help </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card178" class="radio-btn" id="d178" onclick="get_id(178)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card178" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Supportive
                                    </h1>
                                    <p class="p-1">
                                        being helpful, encouraging, and available to
                                        myself or others</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card179" class="radio-btn" id="d179" onclick="get_id(179)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card179" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Thoughtfulness
                                    </h1>
                                    <p class="p-1">
                                        intentional consideration for the needs of others </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="card180" class="radio-btn" id="d180" onclick="get_id(180)">
                        {{-- <input type="radio" hidden class="radio_btn" id="card180" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Tolerance
                                    </h1>
                                    <p class="p-1">
                                        to accept and respect those who differ from me </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>

                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard181" class="radio-btn" id="d181" onclick="get_id(181)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard181" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Touch
                                    </h1>
                                    <p class="p-1">
                                        to have intentional, meaningful touch; hugs,
kisses, cuddling, etc </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard182" class="radio-btn" id="d182" onclick="get_id(182)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard182" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Tradition
                                    </h1>
                                    <p class="p-1">
                                        to follow expected patterns of the past</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard183" class="radio-btn" id="d183" onclick="get_id(183)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard183" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Trust
                                    </h1>
                                    <p class="p-1">
                                        willing to believe in the honesty, sincerity,
reliability, or competence of another</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard184" class="radio-btn" id="d184" onclick="get_id(184)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard184" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Usefulness
                                    </h1>
                                    <p class="p-1">
                                        to be used for a practical purpose or in several
ways</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard185" class="radio-btn" id="d185" onclick="get_id(185)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard185" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Validation
                                    </h1>
                                    <p class="p-1">
                                        recognition or affirmation that a person or their
feelings or opinions are valid or worthwhile</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard186" class="radio-btn" id="d186" onclick="get_id(186)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard186" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Vanity
                                    </h1>
                                    <p class="p-1">
                                        excessive pride in or admiration of one's own
appearance or achievements </p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard187" class="radio-btn" id="d187" onclick="get_id(187)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard187" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Virtue
                                    </h1>
                                    <p class="p-1">
                                        moral principles that govern a person's behavior
or the conducting of an activity</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard188" class="radio-btn" id="d188" onclick="get_id(188)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard188" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Vulnerability
                                    </h1>
                                    <p class="p-1">
                                        uncertainty, risk, and emotional exposure</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>



                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard189" class="radio-btn" id="d189" onclick="get_id(189)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard189" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Wealth
                                    </h1>
                                    <p class="p-1">
                                        richness in terms of assets or money</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>


                <!-- d-flex align-items-stretch-->
                <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                    <label for="cardcard190" class="radio-btn" id="d190" onclick="get_id(190)">
                        {{-- <input type="radio" hidden class="radio_btn" id="cardcard190" name="buss-cards" /> --}}
                        <div class="card text-center">
                            <div class="min-card-img position-relative">
                                <img src="{{ asset('assets/images/bussiness-card2.png') }}" class="card-img-top"
                                    alt="Card Image">
                                <div class="min-card-text position-absolute">
                                    <h1 class="h-1 text-capitalize">
                                        Work
                                    </h1>
                                    <p class="p-1">
                                        fulfillment of task to reach a desired outcome</p>
                                </div>
                                <div class="corner-logo position-absolute">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                
            </div>
        </div>
    </section>
    <div id="get_user_reply_id">{{ substr(Auth()->user()->email,-11,-10) == 1 ? Auth()->id() + 1 : Auth()->id() - 1 }}</div>
@endsection

@push('scripts')



    <script>
        var reciever_id_for_reply = parseInt($("#get_user_reply_id").text());
        function get_id(id){
            
            let btns = document.querySelectorAll('.radio-btn');

            for (var i = 1; i <= btns.length; i++) {
                if($("#d"+i).hasClass('cardsBordersClass')){
                    $("#d"+i).removeClass('cardsBordersClass')
                }
            }

            $("#d"+id).addClass('cardsBordersClass');

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    // active friend id
                url:  '{{ env('APP_URL') }}private-message/'+reciever_id_for_reply,
                type: 'POST',
                data: {message: id},
                success: function(data) {
                    
                    
                }

            }); 
            
        }
        
    </script>

<script src="https://js.pusher.com/4.1/pusher.min.js"></script>


<script>


var pusher = new Pusher('3a2235d60f0cad0b80d9', {
    cluster: 'ap2'
});
var channel = pusher.subscribe('notify-channel');
channel.bind('App\\Events\\Notify', function(data) {
    
    if(data.message=='{{ Auth::id() }}'){
        toastr.success($("#d"+data.card_id).find("h1").text()+' Card Selected');
        let btns = document.querySelectorAll('.radio-btn');
        for (var i = 1; i <= btns.length; i++) {
            if($("#d"+i).hasClass('cardsBordersClass')){
                    $("#d"+i).removeClass('cardsBordersClass')
                }
        }

        $("#d"+data.card_id).addClass('cardsBordersClass');

    }
});
</script>
@endpush

@extends('layouts.app')

@section('title')
    Travuix
@endsection

@section('content')
    
    <!-- Header -->
    <header class="text-center">
        <div class="container">
            <h1>
                Explore The Beautiful World
                <br>
                As Easy One Click
            </h1>
            <p class="mt-3">
                You will see Beautiful
                <br>
                moment you never see before
            </p>

            <a href="#" class="btn btn-get-started px-4 mt-4">
                Get started
            </a>
        </div>
    </header>

    <main>

        <!-- Section Stats -->
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>


        <!-- Section Popular -->
        <section class="section-popular" id="populate">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Destination Popular</h2>
                        <p>Something that you never try <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content">
            <div class="container">
                <div class="row section-popular-travel justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/assets/images/popular-1.jpg');">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                DERATAN, BALI
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{      route('detail')    }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/assets/images/popular-2.jpg');">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                BROMO, MALANG
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{      route('detail')    }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/assets/images/popular-3.jpg');">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                NUSA PENIDA
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{      route('detail')    }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/assets/images/popular-4.jpg');">
                            <div class="travel-country">
                                MIDDLE WEST
                            </div>
                            <div class="travel-location">
                                DUBAI
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{      route('detail')    }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Networks -->
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br> more than just a trip
                        </p>
                    </div>

                    <div class="col-md-8 text-center">
                        <img src="frontend/assets/images/img_networks.png" alt="" class="img-networks">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonials -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="tesstimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/testimonial-1.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Anggga Risky</h3>
                                <p class="testimonial">
                                    "It was glorious and I could not stop to say wohoo for every single moment
                                    Dankeeeee"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/testimonial-2.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/assets/testimonial-3.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves
                                    was shaking harder — I was
                                    scared too “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
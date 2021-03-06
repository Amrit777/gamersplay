@extends('layouts.app')

@section('styles')
    <style>
        main {
            padding-bottom: 0 !important;
        }

    </style>

@endsection


@section('content')
    <style>
        .slick-slide {
            padding: 25px !important;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <img src="/imgs/Gaming.png" alt="" class="mw-80">
                <h1>Welcome to GamersPlay</h1>
                <p>Your premier destination for finding gamer friends to play with!</p>
                <br>
                {{-- <a href="/services" class="btn button-primary">Get started</a> --}}
                <a href="#" class="btn button-primary">Get started</a>
                <a href="#learnMore" class="btn button-outline-primary">Learn more</a>
            </div>

        </div>
        <br>
        <br>
        <div class="flex-collapse frontpage-hero-box">
            <div style="margin:0 10px;"><img src="/imgs/icons/game.svg" alt="" style="height:30px; margin-right:15px;">
                <span style="font-weight:bold;">Ready to find</span> your gamer buddy?
            </div>
            <div style="margin:0 10px;">
                <div class="frontpage-hero-box-cta">Easy</div>
            </div>
        </div>

    </div>

    <div style="height:70px;">
    </div>

    <div style="display:flex; justify-content:center;">
        <img src="/imgs/arrow-02.png" class="frontpage-arrow-down">
    </div>
    <div style="height:70px;">
    </div>

    @if (isset($popular) && count($popular) > 0)
        {{-- <div style="background:#581C87; color:white; padding:10px 0;">
            <br>
            <h4 style="text-align:center;">GamersPlay members are offering hundreds of lifestyle and gaming services</h4>
            <div class="autoplay-container" style="display:flex; justify-content:center;">
                <div class="autoplay mobile-width"
                    style="text-align: center; justify-content:center; margin-top:50px; max-width:60vw;">
                    @foreach ($popular as $category)
                        <a href="/services?category={{ $category->id }}&menu={{ $category->menu_id }}"
                            style="color:white; display:flex; justify-content:center; ">
                            <div style="width:100%; max-width:33vw;">
                                <img src="{{ $category->image_1 }}">
                                <h6>{{ $category->name }}</h6>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div> --}}
        <div class="section carousel-section">
            <br>
            <h4 class="text-center">GamersPlay members are offering hundreds of lifestyle and gaming services</h4>
            <div class="justify-content-center d-flex">
                <div class="carousel text-center justify-content-center mt-5">
                    @foreach ($popular as $category)
                        <a href="/services?category={{ $category->id }}&menu={{ $category->menu_id }}"
                            class=" slider-link d-flex justify-content-center">
                            <div class="w-100 ">
                                <img src="{{ $category->image_1 }}" class="slider-img">
                                <h6>{{ $category->name }}</h6>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <svg id="visual" class="mobile-svg-home-section" viewBox="0 0 1300 50" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path
                d="M0 10L72.2 12.5C144.3 15 288.7 20 433.2 24.7C577.7 29.3 722.3 33.7 866.8 31.3C1011.3 29 1155.7 20 1227.8 15.5L1300 11L1300 0L1227.8 0C1155.7 0 1011.3 0 866.8 0C722.3 0 577.7 0 433.2 0C288.7 0 144.3 0 72.2 0L0 0Z"
                fill="#581C87" stroke-linecap="round" stroke-linejoin="miter"></path>
        </svg>
    @else
        <div style="height:150px; overflow:hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#581C87" fill-opacity="1"
                    d="M0,224L120,213.3C240,203,480,181,720,181.3C960,181,1200,203,1320,213.3L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
                </path>
            </svg>
        </div>

    @endif


    <div style="display:flex; justify-content:center;">
        <img src="/imgs/arrow-02.png" class="frontpage-arrow-down">
    </div>

    <br id="learnMore">
    <br>
    <h2 style="text-align:center; font-weight:500 !important; margin:50px 0;">How GamersPlay works</h2>

    <div class="container">


        <div class="row">
            <div class="col-md-4">
                <div style="text-align:center">
                    <img src="{{ asset('imgs/findservices.png') }}" class="mw-80">
                    <h4 style="text-align:center;">Find</h4>
                    <p>Browse our extensive list of gamers!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="text-align:center">
                    <img src="{{ asset('imgs/3d/match.png') }}" class="mw-80">
                    <h4 style="text-align:center;">Match</h4>
                    <p>Found your gamer buddy? It's a match!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="text-align:center">
                    <img src="{{ asset('imgs/gamepad.png') }}" class="mw-80">
                    <h4 style="text-align:center;">Order</h4>
                    <p>Ready, player two?</p>
                </div>
            </div>


        </div>
        <div style="height:100px;"></div>
    </div>
    <div style="display:flex; justify-content:center;">
        <img src="/imgs/arrow-02.png" class="frontpage-arrow-down">
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="frontpage-discord-box">
                <img src="/imgs/discord-logo.svg" style="height:31px;">

                <div style=" height:100%; display:flex; justify-content:space-between; align-items:center;"
                    class="flex-collapse">
                    <div>
                        <h3 style="color:white; margin-top:35px;">Join our Discord server community</h3>
                        <p style="color:white;">Join us for news, updates and latest giveaways.</p>
                    </div>

                    <div style="padding:10px 25px;">
                        <a href="https://discord.gg/vQ6eAYb8kZ" class="btn btn-discord">Join Discord Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div style="height:70px;"></div>

    <script>
        document.documentElement.style.scrollBehavior = "smooth";
    </script>

@endsection


@section('footer')
    @include('partials.footer')
@endsection

@if (isset($popular) && count($popular) > 0)
    @push('scripts')
        <script>
            $('.carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                pauseOnHover: true,
                infinite: true,
                autoplaySpeed: 1500,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }

                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,

                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
    @endpush
@endif

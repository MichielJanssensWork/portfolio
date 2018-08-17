@extends('app')

@section('title', 'home')

@section('content')

    <div class="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-10 offset-1 text-center mg-b20">
                    <h2 class="text-uppercase">About Michiel J.</h2>
                    <h4 class="text-notice">Scan me!</h4>
                </div>

                <div class="col-10 offset-1 col-md-6 offset-md-3 position-relative">
                    <div class="anatomy-block transition gray-bg">
                        <img src="{{ asset('img/anatomy-back.svg') }}" alt="anatomy-back-missing" class="back-anatomy">
                        <img src="{{ asset('img/anatomy-front.svg') }}" alt="anatomy-front-missing" class="front-anatomy d-none d-md-block">
                    </div>

                    <div class="parallelogram-block">
                        <div class="parallelogram-shape-1 transition-fast"></div>
                        <div class="parallelogram-shape-2 transition-fast"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4 offset-4 col-md-2 offset-md-1 order-1 order-md-2 about-img-circle pd-t20">
                    <img src="{{ asset('img/heart.svg') }}" alt="heart-missing" class="gray-bg">
                </div>

                <div class="col-12 col-md-6 order-2 order-md-1 d-flex align-items-center about-text pd-t20">
                    <span class="d-none d-md-block"></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam commodi ducimus error explicabo hic incidunt ipsum laborum molestiae natus, perspiciatis, placeat porro quibusdam repellat, repellendus saepe sit sunt velit.</p>
                </div>
            </div>

        </div>
    </div>

@endsection

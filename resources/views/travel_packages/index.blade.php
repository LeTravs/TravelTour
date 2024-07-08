@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <section class="islands swiper-slide">
                <img src="{{ asset('http://www.cherryshome.com/wp-content/uploads/2016/08/tours-bohol.jpg') }}" alt="" class="islands__bg" />

                <div class="islands__container container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Explore</h2>
                        <h1 class="islands__title">Package Travel</h1>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center">All</span>
        <h2 class="section__title" style="text-align: center">
            Package Travel
        </h2>

        <div class="popular__all">
            @foreach($travel_packages as $travel_package)
                <article class="popular__card">
                    <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                        @if($travel_package->galleries->isNotEmpty() && isset($travel_package->galleries->first()->images))
                            @php
                                $images = json_decode($travel_package->galleries->first()->images);
                            @endphp
                            @if(!empty($images))
                                <img
                                    src="{{ $images[0] }}"
                                    alt=""
                                    class="popular__img"
                                />
                            @else
                                <img
                                    src="{{ asset('images/default.jpg') }}"
                                    alt=""
                                    class="popular__img"
                                />
                            @endif
                        @else
                            <img
                                src="{{ asset('images/default.jpg') }}"
                                alt=""
                                class="popular__img"
                            />
                        @endif
                        <div class="popular__data">
                            <h2 class="popular__price"><span>₱</span>{{ number_format($travel_package->price, 2) }}</h2>
                            <h3 class="popular__title">{{ $travel_package->type }}</h3>
                            <p class="popular__description">{{ $travel_package->description }}</p>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection

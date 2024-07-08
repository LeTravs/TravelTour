@extends('layouts.frontend')

@section('content')
<section>
    <div class="swiper-container">
        <div>
            <section class="islands">
                <img
                    src="{{ asset('https://www.southshoretours.ph/wp-content/uploads/2018/05/3D2N-Cebu-South-Bohol-Countryside-Tour.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                From Chocolate Hills to Coastlines
                            </h2>
                            <h1 class="islands__title">
                                DRIVE BOHOL
                            </h1>
                            <p class="islands__description">
                                It's the perfect moment to journey through Bohol,
                                where time stands still and <br />
                                every view is a masterpiece.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<section
    class="logos"
    style="margin-top: 9rem; padding-bottom: 3rem"
>
</section>

<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center">Best Choice</span>
        <h2 class="section__title" style="text-align: center">Popular Places</h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
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
                                <h2 class="popular__price">
                                    <span>₱ </span>{{ number_format($travel_package->price, 2) }}
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->type }}
                                </h3>
                                <p class="popular__description">{{ $travel_package->description }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

@endsection

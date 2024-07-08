@extends('layouts.frontend')

@section('content')
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img
                src="{{ asset('https://st4.depositphotos.com/2903611/29109/i/450/depositphotos_291091084-stock-photo-businessman-showing-contact-icons-virtual.jpg') }}"
                alt=""
                class="islands__bg"
              />
              <div class="bg__overlay">
                <div class="islands__container container">
                  <div class="islands__data">
                    <h2 class="islands__subtitle">Need Travel</h2>
                    <h1 class="islands__title">Contact Us</h1>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGnWXTPECvYY4x8RF9OQOiY92ijdFmJU4YYw&s') }}" alt="" />
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">Need Help</span>
              <h2 class="section__title">Don't hesitate to contact us</h2>
              <p class="contact__description">
                Is there a problem finding places for yout next trip? Need a
                guide in first trip or need a consultation about traveling? just
                contact us.
              </p>
            </div>

            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Call</h3>
                    <p class="contact__card-description">09094371616</p>
                  </div>
                </div>

                <button class="button contact__card-button">Call Now</button>
              </div>
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Gmail</h3>
                    <p class="contact__card-description">cgtravel@gmail.com</p>
                  </div>
                </div>

                <button class="button contact__card-button">Email  Now</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
@endsection
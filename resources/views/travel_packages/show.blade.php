@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
     <div class="swiper-container gallery-top">
       <div class="swiper-wrapper">
       @foreach($travel_package->galleries as $gallery)
         @php
             $images = json_decode($gallery->images);
         @endphp
         @foreach($images as $image)
           <section class="islands swiper-slide">
             <img src="{{ $image }}" alt="" class="islands__bg" />

             <div class="islands__container container">
               <div class="islands__data">
                 <h2 class="islands__subtitle">Explore</h2>
                 <h1 class="islands__title">{{ $gallery->name }}</h1>
               </div>
             </div>
           </section>
         @endforeach
       @endforeach
       </div>
     </div>

     <!--========== CONTROLS ==========-->
     <div class="controls gallery-thumbs">
       <div class="controls__container swiper-wrapper">
        @foreach($travel_package->galleries as $gallery)
         @php
             $images = json_decode($gallery->images);
         @endphp
         @foreach($images as $image)
           <img
             src="{{ $image }}"
             alt=""
             class="controls__img swiper-slide"
           />
         @endforeach
        @endforeach
       </div>
     </div>
   </section>

   <section class="blog section" id="blog">
     <div class="blog__container container">
         <div class="blog__detail">
         </div>
         <div class="package-travel">
           <h3>Booking Now</h3>
           <div class="card booking-form-container">
             @if(session('message'))
               <div class="alert">
                 {{ session('message') }}
               </div>
             @endif

             @auth
             <form action="{{ route('booking.store') }}" method="post" class="booking-form">
               @csrf 
               <input type="hidden" name="travel_package_id" value="{{ $travel_package->id }}">
               <div>
                 <label for="name">Name:</label>
                 <input type="text" id="name" name="name" required>
               </div>
               <div>
                 <label for="email">Email:</label>
                 <input type="email" id="email" name="email" required>
               </div>
               <div>
                 <label for="phone">Phone:</label>
                 <input type="text" id="phone" name="phone" required>
               </div>
               <div>
                 <label for="package">Travel Package:</label>
                 <select id="package" name="package" required>
                   <option value="" disabled selected>Select a Package</option>
                   <option value="3D2N COUNTRYSIDE + PANGLAO + ISLAND HOPPING">3D2N COUNTRYSIDE + PANGLAO + ISLAND HOPPING</option>
                   <option value="3D2N COUNTRYSIDE + ISLAND HOPPING">3D2N COUNTRYSIDE + ISLAND HOPPING</option>
                   <option value="3D2N COUNTRYSIDE + PANGLAO">3D2N COUNTRYSIDE + PANGLAO</option>
                 </select>
               </div>
               <div>
                 <label for="pax">Number of Pax:</label>
                 <select id="pax" name="pax" required>
                   <option value="" disabled selected>Select number of pax</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                   <option value="5">5</option>
                 </select>
               </div>
               <div>
                 <label for="car">Select a Car:</label>
                 <div class="car-options">
                   <label>
                     <input type="radio" name="car" value="Sedan" required>
                     <img src="https://imgd.aeplcdn.com/600x337/n/cw/ec/121943/verna-exterior-right-front-three-quarter-101.jpeg?isig=0&q=80" alt="Sedan">
                   </label>
                   <label>
                     <input type="radio" name="car" value="SUV" required>
                     <img src="https://imgd-ct.aeplcdn.com/370x231/n/cw/ec/47051/compass-exterior-right-front-three-quarter-74.jpeg?isig=0&q=80" alt="SUV">
                   </label>
                   <label>
                     <input type="radio" name="car" value="Van" required>
                     <img src="https://www.cartoq.com/wp-content/uploads/2021/02/Toyota-Hiace_3.jpg" alt="Van">
                   </label>
                 </div>
               </div>
               <div>
                 <label for="payment">Payment Method:</label>
                 <div class="payment-methods">
                   <label>
                     <input type="radio" name="payment" value="PayMaya" required>
                     <img src="https://www.bworldonline.com/wp-content/uploads/2021/09/Paymaya-logo.jpg" alt="PayMaya">
                   </label>
                   <label>
                     <input type="radio" name="payment" value="GCash" required>
                     <img src="https://media.philstar.com/photos/2023/08/16/lead_2023-08-16_16-52-51.jpg" alt="GCash">
                   </label>
                 </div>
               </div>
               <div class="price-display" id="price-display"></div>
               <button type="submit">Submit Booking</button>
             </form>
             @endauth

             @guest
             <p>Please <a href="{{ route('login') }}">log in</a> to book a travel package.</p>
             @endguest
           </div>
         </div>
     </div>
   </section>

   <section class="section" id="popular">
     <div class="container">
       <span class="section__subtitle" style="text-align: center">Package Travel</span>
       <h2 class="section__title" style="text-align: center">The Best Tour For You</h2>

       <div class="popular__all">
         @foreach($travel_packages as $travel_package)
         @php
             $images = json_decode($travel_package->galleries->first()->images);
         @endphp
         @if(!empty($images))
         <article class="popular__card">
           <a href="{{ route('travel_package.show', $travel_package->slug) }}">
             <img
               src="{{ $images[0] }}"
               alt=""
               class="popular__img"
             />
             <div class="popular__data">
               <h2 class="popular__price"><span>$</span>{{ number_format($travel_package->price,2) }}</h2>
               <h3 class="popular__title">{{ $travel_package->type }}</h3>
               <p class="popular__description">{{ $travel_package->description }}</p>
             </div>
           </a>
         </article>
         @endif
         @endforeach
       </div>
     </div>
   </section>

 @if(session()->has('message'))
   <div id="alert" class="alert">
     {{ session()->get('message') }}
     <i class='bx bx-x alert-close' id="close"></i>
   </div>
 @endif
@endsection

@push('style-alt')
<style>
  .alert {
    position:absolute;
    top: 120px;
    left:0;
    right:0;
    background-color: var(--second-color);
    color: white;
    padding: 1rem;
    width: 70%;
    z-index: 99;
    margin: auto;
    border-radius: .25rem;
    text-align: center;
  }

  .alert-close {
    font-size: 1.5rem;
    color: #090909;
    position: absolute;
    top: .25rem;
    right: .5rem;
    cursor: pointer;
  }
  blockquote {
    border-left: 8px solid #b4b4b4;
    padding-left: 1rem;
  }
  .blog__detail ul li {
    list-style: initial;
  }

  .booking-form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    background: linear-gradient(145deg, #ffffff, #e6e6e6);
    box-shadow: 20px 20px 60px #d9d9d9, -20px -20px 60px #ffffff;
    border-radius: 10px;
    padding: 20px;
    max-width: 600px;
    margin: auto;
  }

  .booking-form {
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .booking-form div {
    margin-bottom: 15px;
  }

  .booking-form label {
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  .booking-form input,
  .booking-form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .booking-form button {
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
  }

  .booking-form button:hover {
    background-color: #0056b3;
  }

  .car-options img {
    width: 100px;
    height: auto;
    margin-right: 10px;
    cursor: pointer;
  }

  .car-options input[type="radio"] {
    display: none;
  }

  .car-options label {
    display: inline-block;
    margin-right: 10px;
  }

  .car-options input[type="radio"]:checked + img {
    border: 2px solid #007BFF;
  }

  .payment-methods img {
    width: 100px;
    height: auto;
    margin-right: 10px;
    cursor: pointer;
  }

  .payment-methods input[type="radio"] {
    display: none;
  }

  .payment-methods label {
    display: inline-block;
    margin-right: 10px;
  }

  .payment-methods input[type="radio"]:checked + img {
    border: 2px solid #007BFF;
  }

  .price-display {
    font-size: 1.2rem;
    color: #333;
    margin-top: 10px;
  }
</style>
@endpush

@push('script-alt')
<script>
      let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 0,
      });

      let galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        loop: true,

        thumbs: {
          swiper: galleryThumbs,
        },
      });

      const close = document.getElementById('close');
      const alert = document.getElementById('alert');
      if(close) {
        close.addEventListener('click', function() {
          alert.style.display = 'none';
        })
      }

      document.addEventListener('DOMContentLoaded', function() {
          const packageSelect = document.getElementById('package');
          const paxSelect = document.getElementById('pax');
          const priceDisplay = document.getElementById('price-display');

          function updatePrice() {
              const selectedPackage = packageSelect.value;
              const pax = parseInt(paxSelect.value, 10);
              let price = 0;

              if (selectedPackage === '3D2N COUNTRYSIDE + PANGLAO + ISLAND HOPPING') {
                  if (pax === 2) price = 7869;
                  else if (pax === 3) price = 6336;
                  else if (pax === 4) price = 5470;
                  else if (pax === 5) price = 5370;
              } else if (selectedPackage === '3D2N COUNTRYSIDE + ISLAND HOPPING') {
                  if (pax === 2) price = 6969;
                  else if (pax === 3) price = 5686;
                  else if (pax === 4) price = 4945;
                  else if (pax === 5) price = 4820;
              } else if (selectedPackage === '3D2N COUNTRYSIDE + PANGLAO') {
                  if (pax === 2) price = 6139;
                  else if (pax === 3) price = 4989;
                  else if (pax === 4) price = 4315;
                  else if (pax === 5) price = 4230;
              }

              priceDisplay.textContent = price ? `PHP ${price.toLocaleString('en-US', { minimumFractionDigits: 2 })}` : '';
          }

          packageSelect.addEventListener('change', updatePrice);
          paxSelect.addEventListener('change', updatePrice);
      });
</script>
@endpush

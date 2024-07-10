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
        <div class="contact__content">
            <div class="contact__data">
                <span class="section__subtitle">Need Help</span>
                <h2 class="section__title">Don't hesitate to contact us</h2>
                <p class="contact__description">
                    Is there a problem finding places for your next trip? Need a
                    guide on your first trip or need a consultation about traveling? Just
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
                    <button class="button contact__card-button" onclick="window.location.href='tel:09094371616'">Call Now</button>
                </div>
                <div class="contact__card-box">
                    <div class="contact__card-info">
                        <i class="bx bxs-message-rounded-dots"></i>
                        <div>
                            <h3 class="contact__card-title">Gmail</h3>
                            <p class="contact__card-description">cgtravel@gmail.com</p>
                        </div>
                    </div>
                    <button class="button contact__card-button" onclick="window.location.href='mailto:cgtravel@gmail.com'">Email Now</button>
                </div>
                <div class="contact__card-box">
                    <div class="contact__card-info">
                        <i class="bx bxs-map"></i>
                        <div>
                            <h3 class="contact__card-title">Address</h3>
                            <p class="contact__card-description">123 Travel Street, Bohol, Philippines</p>
                        </div>
                    </div>
                    <button class="button contact__card-button" onclick="window.location.href='https://www.google.com/maps/place/Purok+3/@9.8858187,123.5552649,10z/data=!4m10!1m2!2m1!1sPurok+3+Danao,+Panglao,+Bohol!3m6!1s0x33abadd2a5703d81:0xa1d51e57f70a6c5f!8m2!3d9.5939881!4d123.790912!15sCh1QdXJvayAzIERhbmFvLCBQYW5nbGFvLCBCb2hvbJIBGGhvbGlkYXlfYXBhcnRtZW50X3JlbnRhbOABAA!16s%2Fg%2F11l30p8wg8?entry=ttu'">Get Directions</button>
                </div>
            </div>
        </div>

        <div class="contact__form">
            <h3 class="contact__form-title">Contact Form</h3>
            <form action="#" method="POST" class="form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="button form-button">Send Message</button>
            </form>
        </div>
    </div>
</section>

<style>
    .contact__form {
        background: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
    }

    .contact__form-title {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: var(--title-color);
        text-align: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--text-color);
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        font-size: 1rem;
        color: var(--text-color);
        background-color: var(--body-color);
    }

    .form-control:focus {
        border-color: var(--first-color);
        outline: none;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .button {
        display: inline-block;
        background: linear-gradient(101deg, #3858d6, #2948c7);
        color: #fff;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        transition: var(--transition-time);
        margin-top: 1rem;
    }

    .button:hover {
        background: linear-gradient(101deg, #2948c7, #3858d6);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-button {
        width: 100%;
    }
</style>
@endsection

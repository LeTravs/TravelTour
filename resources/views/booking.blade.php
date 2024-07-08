<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }


        .nav__logo {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
        }

        .section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-top: auto; /* Ensure the section moves to the bottom */
        }

        .section h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .alert {
            padding: 15px;
            background-color: #4caf50;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .booking-form {
            display: flex;
            flex-direction: column;
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

        .footer__logo-img {
        border-radius: 50%; /* Makes the image circular */
        width: 100px; /* Adjust size as needed */
        height: 100px; /* Adjust size as needed */
        border: 2px solid #fff; /* Optional: Add a border around the image */
        }


        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        .footer__logo {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .footer__description {
            margin: 10px 0 0;
        }

        .price-display {
            font-size: 1.2rem;
            color: #333;
            margin-top: 10px;
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
    </style>
</head>
<body>
    <main class="main">
        <section class="section container">
            <h2>Book Your Travel Package</h2>

            @if(session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('booking.store') }}" method="POST" class="booking-form">
                @csrf
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
        </section>
    </main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="{{ route('homepage') }}" class="footer__logo">
                    <img class="footer__logo-img" src="https://scontent-mnl1-1.xx.fbcdn.net/v/t39.30808-6/324273097_1357177511717748_6929218420213167988_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEis4n8CXhfRMuEG6cVA5b4h7tyfekpGi2Hu3J96SkaLSdcrJDL0Le5pMtEwGc9RhqQbB3Cx01TjL-BFAD4N23a&_nc_ohc=eK4WskWqjnwQ7kNvgHkrHku&_nc_ht=scontent-mnl1-1.xx&oh=00_AYClabZBeDt4o7NZzhDqM20XCOL2tgqwSyZTxgsBm8nm1g&oe=668C5B9F" alt="C&G TRAVEL">
                </a>
                        
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
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
</body>
</html>
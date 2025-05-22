<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Relief - Donation Page</title>
    <style>
        /* General Body and Font Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a; /* Dark background, almost black */
            color: #f0f0f0; /* Light text for contrast */
            line-height: 1.6;
        }

        /* Header Styles */
        header {
            background-color: #0d0d0d; /* Even darker header */
            color: #00bcd4; /* A bright, contrasting accent color (teal/cyan) */
            padding: 20px 0;
            text-align: center;
            border-bottom: 3px solid #00bcd4;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 2px;
        }

        header h2 {
            margin: 5px 0 0;
            font-size: 1.2em;
            color: #cccccc;
        }

        /* Main Content Area */
        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Section Styling */
        section {
            background-color: #2c2c2c; /* Slightly lighter dark for sections */
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        section h3 {
            color: #00bcd4;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.8em;
            border-bottom: 2px solid rgba(0, 188, 212, 0.3);
            padding-bottom: 10px;
        }

        /* Donation Introduction Section */
        #donation-intro p {
            text-align: center;
            font-size: 1.1em;
            color: #dddddd;
        }

        /* Form Container */
        .form-container {
            background-color: #1a1a1a; /* Darker background for the form itself */
            padding: 30px;
            border-radius: 8px;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .form-container h3 {
            color: #00bcd4;
            text-align: center;
            margin-bottom: 25px;
        }

        /* Fieldset and Legend Styles */
        fieldset {
            border: 1px solid #444;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 25px;
            background-color: #252525;
        }

        legend {
            color: #00bcd4;
            font-weight: bold;
            padding: 0 10px;
            background-color: #252525;
            border-radius: 3px;
        }

        /* Form Group Styles */
        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #cccccc;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="number"],
        .form-group input[type="date"],
        .form-group select,
        .form-group textarea {
            width: calc(100% - 20px); /* Account for padding */
            padding: 12px 10px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #333;
            color: #f0f0f0;
            font-size: 1em;
            box-sizing: border-box; /* Include padding in the element's total width and height */
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="email"]:focus,
        .form-group input[type="tel"]:focus,
        .form-group input[type="number"]:focus,
        .form-group input[type="date"]:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }

        /* Placeholder color */
        input::placeholder, textarea::placeholder {
            color: #888;
        }

        /* Radio Button Group */
        .radio-group {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }

        .radio-group input[type="radio"] {
            display: none; /* Hide default radio button */
        }

        .radio-group label {
            background-color: #333;
            color: #f0f0f0;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            border: 1px solid #555;
            font-weight: normal; /* Override default label font-weight */
        }

        .radio-group input[type="radio"]:checked + label {
            background-color: #00bcd4;
            color: #0d0d0d; /* Dark text on bright background */
            border-color: #00bcd4;
            font-weight: bold;
        }

        .radio-group label:hover {
            background-color: #444;
        }

        /* Hidden fields for different donation types */
        .donation-fields.hidden {
            display: none;
        }

        /* Checkbox Styling */
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
            width: 20px;
            height: 20px;
            accent-color: #00bcd4; /* For better visibility of checkbox */
        }

        .checkbox-group label {
            font-weight: normal;
            color: #cccccc;
            cursor: pointer;
        }

        /* Submit Button */
        .submit-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #00bcd4;
            color: #0d0d0d; /* Dark text on bright button */
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 30px;
        }

        .submit-button:hover {
            background-color: #0099ac; /* Slightly darker on hover */
            transform: translateY(-2px);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        /* Footer Styles */
        footer {
            background-color: #0d0d0d;
            color: #cccccc;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            border-top: 3px solid #00bcd4;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }

        /* Responsive Design (Basic) */
        @media (max-width: 768px) {
            main {
                margin: 10px auto;
                padding: 15px;
            }

            header h1 {
                font-size: 2em;
            }

            header h2 {
                font-size: 1em;
            }

            .form-container, section {
                padding: 20px;
            }

            .form-group input, .form-group select, .form-group textarea {
                width: 100%; /* Full width on smaller screens */
            }

            .radio-group {
                flex-direction: column;
                align-items: flex-start;
            }

            .radio-group label {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Disaster Management System</h1>
        <h2>Empowering Aid, Fostering Recovery</h2>
    </header>

    <main>
        <section id="donation-intro">
            <h3>Support Our Efforts: Make a Difference Today</h3>
            <p>Your generous contributions are vital in providing immediate relief and long-term recovery for communities affected by disasters. Every donation, big or small, helps us reach those in need.</p>
        </section>

        <section id="donation-form-section">
            <div class="form-container">
                <h3>Make Your Donation</h3>
                <form id="donation-form" action="#" method="POST"> <fieldset class="sender-details">
                        <legend>Your Details (Sender)</legend>
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="sender_name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="sender_email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number (Optional):</label>
                            <input type="tel" id="phone" name="sender_phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address (Optional):</label>
                            <textarea id="address" name="sender_address" rows="3"></textarea>
                        </div>
                    </fieldset>

                    <fieldset class="donation-type">
                        <legend>Donation Type</legend>
                        <div class="radio-group">
                            <input type="radio" id="money" name="donation_type" value="money" checked>
                            <label for="money">Money</label>

                            <input type="radio" id="goods" name="donation_type" value="goods">
                            <label for="goods">Goods</label>

                            <input type="radio" id="food" name="donation_type" value="food">
                            <label for="food">Food</label>

                            <input type="radio" id="water" name="donation_type" value="water">
                            <label for="water">Water</label>
                        </div>
                    </fieldset>

                    <fieldset id="money-fields" class="donation-fields">
                        <legend>Money Donation Details</legend>
                        <div class="form-group">
                            <label for="amount">Amount ($):</label>
                            <input type="number" id="amount" name="donation_amount" min="1" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="currency">Currency:</label>
                            <select id="currency" name="donation_currency">
                                <option value="USD">USD - United States Dollar</option>
                                <option value="INR">INR - Indian Rupee</option>
                                <option value="EUR">EUR - Euro</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Payment Method:</label>
                            <select id="payment_method" name="payment_method">
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                </select>
                        </div>
                    </fieldset>

                    <fieldset id="goods-fields" class="donation-fields hidden">
                        <legend>Goods Donation Details</legend>
                        <div class="form-group">
                            <label for="goods_type">Type of Goods:</label>
                            <input type="text" id="goods_type" name="goods_type" placeholder="e.g., Clothes, Blankets, Medical Supplies">
                        </div>
                        <div class="form-group">
                            <label for="goods_quantity">Quantity/Description:</label>
                            <textarea id="goods_quantity" name="goods_quantity" rows="3" placeholder="e.g., 5 boxes of winter clothes, Assorted medical supplies"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dropoff_pickup">Preferred Drop-off/Pickup:</label>
                            <select id="dropoff_pickup" name="dropoff_pickup">
                                <option value="">Select Option</option>
                                <option value="dropoff">I will drop off</option>
                                <option value="pickup">I need pickup (Location details below)</option>
                            </select>
                        </div>
                        <div class="form-group hidden" id="pickup-address-group">
                            <label for="pickup_address">Pickup Address:</label>
                            <textarea id="pickup_address" name="pickup_address" rows="3"></textarea>
                        </div>
                    </fieldset>

                    <fieldset id="food-fields" class="donation-fields hidden">
                        <legend>Food Donation Details</legend>
                        <div class="form-group">
                            <label for="food_type">Type of Food:</label>
                            <input type="text" id="food_type" name="food_type" placeholder="e.g., Non-perishable items, Canned goods, Rice">
                        </div>
                        <div class="form-group">
                            <label for="food_quantity">Quantity/Description:</label>
                            <textarea id="food_quantity" name="food_quantity" rows="3" placeholder="e.g., 10 kg rice, 20 cans of beans"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="food_expiry">Expiry Date (if applicable):</label>
                            <input type="date" id="food_expiry" name="food_expiry">
                        </div>
                    </fieldset>

                    <fieldset id="water-fields" class="donation-fields hidden">
                        <legend>Water Donation Details</legend>
                        <div class="form-group">
                            <label for="water_type">Type of Water:</label>
                            <input type="text" id="water_type" name="water_type" placeholder="e.g., Bottled water, Water purifiers">
                        </div>
                        <div class="form-group">
                            <label for="water_quantity">Quantity/Description:</label>
                            <textarea id="water_quantity" name="water_quantity" rows="3" placeholder="e.g., 50 bottles (1L each), 2 water purification tablets"></textarea>
                        </div>
                    </fieldset>

                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="anonymous" name="anonymous_donation">
                        <label for="anonymous">Donate Anonymously (Sender details won't be displayed)</label>
                    </div>

                    <div class="form-group">
                        <label for="message">Message (Optional):</label>
                        <textarea id="message" name="donor_message" rows="4" placeholder="Add any specific instructions or a message of support."></textarea>
                    </div>

                    <button type="submit" class="submit-button">Donate Now</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Disaster Management System. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const donationTypeRadios = document.querySelectorAll('input[name="donation_type"]');
            const donationFields = document.querySelectorAll('.donation-fields');
            const pickupAddressGroup = document.getElementById('pickup-address-group');
            const dropoffPickupSelect = document.getElementById('dropoff_pickup');

            // Function to show/hide donation fields based on selected type
            function toggleDonationFields() {
                const selectedType = document.querySelector('input[name="donation_type"]:checked').value;

                donationFields.forEach(field => {
                    field.classList.add('hidden'); // Hide all fields first
                });

                const targetFieldId = selectedType + '-fields';
                const targetField = document.getElementById(targetFieldId);
                if (targetField) {
                    targetField.classList.remove('hidden'); // Show the relevant field
                }
            }

            // Function to show/hide pickup address based on goods donation option
            function togglePickupAddress() {
                if (dropoffPickupSelect.value === 'pickup') {
                    pickupAddressGroup.classList.remove('hidden');
                } else {
                    pickupAddressGroup.classList.add('hidden');
                }
            }

            // Add event listeners to donation type radios
            donationTypeRadios.forEach(radio => {
                radio.addEventListener('change', toggleDonationFields);
            });

            // Add event listener to goods drop-off/pickup select
            if (dropoffPickupSelect) {
                dropoffPickupSelect.addEventListener('change', togglePickupAddress);
            }

            // Initial call to set the correct fields on page load
            toggleDonationFields();
            togglePickupAddress(); // Also check pickup address on load
        });
    </script>
</body>
</html>
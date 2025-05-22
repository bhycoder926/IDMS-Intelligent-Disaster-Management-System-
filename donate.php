<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Volunteers - Disaster Relief</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e44d26; /* A vibrant orange-red */
            --secondary-color: #333;
            --accent-color: #6a0dad; /* A deep purple */
            --background-dark: #2c3e50; /* Dark blue-grey */
            --background-light: #f8f8f8; /* Light grey */
            --text-light: #ecf0f1; /* Off-white */
            --text-dark: #34495e; /* Dark blue-grey for text */
            --card-background: #ffffff;
            --border-color: #ddd;
            --shadow-light: rgba(0, 0, 0, 0.1);
            --shadow-medium: rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--background-dark);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* Navigation Bar */
        nav {
            background-color: var(--secondary-color);
            padding: 15px 20px;
            box-shadow: 0 2px 5px var(--shadow-medium);
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap; /* Allows items to wrap on smaller screens */
        }

        nav ul li {
            margin-right: 25px;
        }

        nav ul li a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        h1 {
            color: var(--primary-color);
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-top: 40px;
        }

        h2 {
            color: var(--accent-color);
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            margin-bottom: 30px;
        }

        form {
            box-sizing: border-box;
            max-width: 550px;
            margin: 30px auto;
            background-color: var(--card-background);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px var(--shadow-medium);
            border-top: 5px solid var(--primary-color);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-dark);
        }

        input, select {
            width: calc(100% - 20px); /* Account for padding */
            padding: 12px 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            font-size: 16px;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        input:focus, select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(228, 77, 38, 0.2);
            outline: none;
        }

        button {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
            display: block; /* Make button full width of its container */
            width: 100%;
        }

        button:hover {
            background-color: #c93a1d; /* Slightly darker primary color */
            transform: translateY(-2px);
        }

        .volunteer-container {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
            padding: 40px 20px;
        }

        .card {
            background: var(--card-background);
            border-radius: 12px;
            box-shadow: 0 6px 12px var(--shadow-light);
            width: 300px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-bottom: 4px solid var(--accent-color);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px var(--shadow-medium);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block; /* Remove extra space below image */
            border-bottom: 1px solid var(--border-color);
        }

        .card-body {
            padding: 20px;
        }

        .card-body h3 {
            margin: 10px 0 8px;
            font-size: 22px;
            color: var(--primary-color);
            font-family: 'Montserrat', sans-serif;
        }

        .card-body p {
            margin: 6px 0;
            font-size: 15px;
            color: var(--text-dark);
        }

        .card-body p strong {
            color: var(--accent-color);
        }

        .section-heading {
            color: var(--text-light); /* Changed to fit dark background */
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-top: 60px;
            margin-bottom: 30px;
            font-size: 36px;
            padding-bottom: 10px;
            position: relative;
        }

        .section-heading::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* Contact Section */
        .contact-support {
            background-color: var(--secondary-color);
            color: var(--text-light);
            text-align: center;
            padding: 50px 20px;
            margin-top: 60px;
            box-shadow: 0 -2px 8px var(--shadow-medium);
            border-top: 5px solid var(--primary-color);
        }

        .contact-support h2 {
            color: var(--primary-color); /* Adjusted for dark background */
            margin-bottom: 20px;
            font-size: 30px;
        }

        .contact-support p {
            margin: 10px 0;
            font-size: 17px;
        }

        .contact-support p a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .contact-support p a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                justify-content: center;
            }

            nav ul li {
                margin: 0 15px 10px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            form {
                margin: 20px 15px;
                padding: 20px;
            }

            input, select, button {
                font-size: 15px;
                padding: 10px;
            }

            .volunteer-container {
                padding: 20px 10px;
                gap: 15px;
            }

            .card {
                width: 90%; /* Make cards almost full width on small screens */
                max-width: 320px;
            }

            .section-heading {
                font-size: 30px;
            }

            .contact-support {
                padding: 30px 15px;
            }

            .contact-support h2 {
                font-size: 26px;
            }

            .contact-support p {
                font-size: 15px;
            }
        }

        @media (max-width: 480px) {
            nav ul li {
                margin: 0 10px 10px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 18px;
            }

            .section-heading {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <ul>
          <li><a href="#Live updates">Live Updates</a></li>
          <li><a href="#form">Services</a></li>
            <li><a href="#volunteers">Crew members</a></li>
            <li><a href="Resources">Resources</a></li>
             <li><a href="Login">Login</a></li>
            <li><a href="Register">Register</a></li>
        </ul>
    </nav>

    <h1><br>Ready to Make a Difference?</h1>
    <h2>Join Our Team of Warriors!</h2>

    <form id="form" action="submit-form.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="first_name" required aria-label="First Name">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="last_name" required aria-label="Last Name">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required aria-label="Email Address">

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" maxlength="10" placeholder="e.g., 9876543210" aria-label="Phone Number (10 digits)">

        <label for="location">Your Location (City/Region)</label>
        <input type="text" id="location" name="location" required aria-label="Your Location">

        <label for="role">Preferred Volunteer Role</label>
        <select id="role" name="role" required aria-label="Preferred Volunteer Role">
            <option value="">-- Select a Role --</option>
            <option value="Medical Volunteer">Medical Volunteer</option>
            <option value="Field Officer">Field Officer</option>
            <option value="Support Staff">Support Staff</option>
            <option value="Logistics Coordinator">Logistics Coordinator</option>
            <option value="Technical Support">Technical Support</option>
        </select>

        <button type="submit">Submit Your Application</button>
    </form>

    <h1 class="section-heading" id="volunteers">Meet Our Dedicated Volunteers</h1>

    <div class="volunteer-container">
        <div class="card">
            <img src="c:\Users\Admin\Downloads\dbms\riya.jpg" alt="Riya Sharma - Medical Volunteer">
            <div class="card-body">
                <h3>Riya Sharma</h3>
                <p><strong>Role:</strong> Medical Volunteer</p>
                <p><strong>Location:</strong> Delhi</p>
                <p><strong>Contact:</strong> riya.sharma@example.com</p>
            </div>
        </div>

        <div class="card">
            <img src="c:\Users\Admin\Downloads\dbms\arjun.jpg" alt="Arjun Mehta - Field Officer">
            <div class="card-body">
                <h3>Arjun Mehta</h3>
                <p><strong>Role:</strong> Field Officer</p>
                <p><strong>Location:</strong> Mumbai</p>
                <p><strong>Contact:</strong> +91 98765 43210</p>
            </div>
        </div>

        

        
    </div>

    <div class="contact-support" id="contact">
        <h2>Need Assistance? Contact Our Support Team</h2>
        <p>Email: <a href="mailto:chinmayeevj2006@gmail.com">chinmayeevj2006@gmail.com</a></p>
        <p>Phone: <a href="tel:+916360285653">+91 63602 85653</a></p>
        <p>Address: 101 Relief Center Lane, Bengaluru, Karnataka, India</p>
        <p>We are here to help you 24/7.</p>
    </div>

</body>
</html>
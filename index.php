<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Appointment System</title>
    <link rel="icon" href="/imgs/logo.webp">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header" id="header">
        <a class="logo">
            <img src="/imgs/logo.webp">
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul class="dropdown">
                        <li><a href="#">General Appointment</a></li>
                        <li><a href="#">Cardiologist Appointment</a></li>
                        <li><a href="#">Dental Appointment</a></li>
                        <li><a href="#">Counselor Appointment</a></li>
                        <li><a href="#">NICU Appointment</a></li>
                        <li><a href="#">Eye Check-up</a></li>
                    </ul>
                </li>
                <li><a href="login.php">Register</a></li>
                <li><a href="#" id="contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
        <div id="homePage" class="home-details">
            <h1>Sasa Doctor Appointment System</h1>
            <p>Book your appointment with a doctor easily.</p>
            <a href="appointment.html" class="btn">Book an Appointment</a>
        </div>
    </section>
    
    <div class="container-c" id="contactForm" style="display: none;">
        <span class="close" id="closeMe">&times;</span>
        <form action="">
            <h2 class="title">Contact Us</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="4" cols="10"></textarea>
            <input type="button" id="submitBtn" class="btn" value="Submit">
        </form>
    </div>

    <section class="container">
            <h2 class="title">Our Services</h2>
            <div class="cards">
                <div class="service">
                    <img src="/imgs/Gdoc.jpeg">
                    <h3>General Appointment</h3>
                    <p>Book an appointment with a general doctor who will listen to your health issues and provide the necessary assistance</p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
                <div class="service">
                    <img src="/imgs/dent.webp">
                    <h3>Dental Appointment</h3>
                    <p>Book an appointment with one of our best dentists available and experience the best medical service.<br>
                       We value your smile and happiness.
                    </p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
                <div class="service">
                    <img src="/imgs/cardio.png">
                    <h3>Cardiologist Appointment</h3>
                    <p>We provide comprehensive cardiac care and personalized treatment plans.</p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
                <div class="service">
                    <img src="/imgs/eye.jpg">
                    <h3>Eye Check-up Appointment</h3>
                    <p>We offer comprehensive eye exams and personalized care to maintain your eye health.</p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
                <div class="service">
                    <img src="/imgs/cnslt.jpeg">
                    <h3>Counselor Appointment</h3>
                    <p>
                        Book an appointment with our counselor and get the best advice on how to handel your mental health issues.
                    </p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
                <div class="service">
                    <img src="/imgs/nicu.jpeg">
                    <h3>NICU Appointment</h3>
                    <p>
                        Book an appointment with our NICU specialist and get the best advice on how to handel your child's heath issues.
                    </p>
                    <a href="appointment.html" class="btn">Book Now</a>
                </div>
            </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="col-1">
                <h3 class="f-title">About us</h3>
                <p>
                    Sasa Doctor is a platform that allows you to book an appointment with a doctor easily.<br> 
                    We provide a wide range of services to cater for all your health needs.
                </p>
            </div>
            <div class="col-2">
                <h3 class="f-title">Our Values</h3>
                <ul>
                    <li>Integrity</li>
                    <li>Customer Satisfaction</li>
                    <li>Honesty</li>
                </ul>
            </div>
        </div>
    </footer>

    <footer class="date">
        <script><p> &copy; document.write(new Date().getFullYear()) </p> </script>
    </footer>
     

    <script>
        var retVal = confirm("Welcome to Sasa Doctor! Click Ok to proceed with your booking, or cancel to view more.");
        if (retVal == true){
            alert("You will be redirected to the booking page");
            window.location.href = "appointment.html";
        }else{
            alert("Thank you for visiting our page");
        };
    </script>
    <script src="script.js"></script>
</body>
</html>
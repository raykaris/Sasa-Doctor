function bookAppointment(event) {
    event.preventDefault();
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let date = document.getElementById("date").value;
    let doctor = document.getElementById("doctor").value;

    if (!name || !email || !phone || !date || !doctor) {
        alert("All fields are required!");
        return;
    }

    let appointmentDetails = { name, email, phone, date, doctor };
    localStorage.setItem("appointment", JSON.stringify(appointmentDetails));

    window.location.href = "payment.html";
};

function processPayment() {
    let paymentOption = document.getElementById("payment").value;
    let paymentDetails = "";

    if (paymentOption === "M-Pesa") {
        paymentDetails = prompt("Enter your M-Pesa phone number:");
        if (!paymentDetails) {
            alert("M-Pesa phone number is required!");
            return;
        }
    } else if (paymentOption === "Credit Card") {
        paymentDetails = prompt("Enter your Credit Card number:");
        if (!paymentDetails) {
            alert("Credit Card number is required!");
            return;
        }
    } else if (paymentOption === "Debit Card") {
        paymentDetails = prompt("Enter your Debit Card number:");
        if (!paymentDetails) {
            alert("Debit Card number is required!");
            return;
        }
    } else {
        alert("Please select a payment option.");
        return;
    }

    document.getElementById("paymentStatus").innerText = `Payment Successful! Your appointment is confirmed. Payment Details: ${paymentDetails}`;
    setTimeout(() => window.location.href = "notifications.html", 2000);
};

function displayNotifications() {
    let appointment = JSON.parse(localStorage.getItem("appointment"));
    let content = document.getElementById("notificationContent");
    if (appointment) {
        let today = new Date().toISOString().split("T")[0];
        let message = `<p><strong>Appointment Confirmation:</strong><br>
            Dear ${appointment.name}, your appointment with ${appointment.doctor} is on ${appointment.date}.
        </p>`;
        if (appointment.date === today) {
            message += `<p style="color:red;"><strong>Reminder:</strong> Your appointment is today.</p>`;
        }
        content.innerHTML = message;
    } else {
        content.innerHTML = "<p>No upcoming appointments.</p>";
    };
    setTimeout(() => window.location.href = "feedback.html", 2000);
};

function submitFeedback(event) {
    event.preventDefault();
    let patientName = document.getElementById("patientName").value;
    let rating = document.getElementById("rating").value;
    let comments = document.getElementById("comments").value;

    if (!patientName || !rating) {
        alert("Please provide your name and rating.");
        return;
    }

    let feedback = { patientName, rating, comments };
    let feedbackList = JSON.parse(localStorage.getItem("feedbacks")) || [];
    feedbackList.push(feedback);
    localStorage.setItem("feedbacks", JSON.stringify(feedbackList));

    alert("Thank you for your feedback!");
    displayFeedback();
};

function displayFeedback() {
    let feedbackList = JSON.parse(localStorage.getItem("feedbacks")) || [];
    let feedbackContainer = document.getElementById("feedbackList");
    feedbackContainer.innerHTML = "";
    feedbackList.forEach(feedback => {
        let li = document.createElement("li");
        li.innerHTML = `<strong>${feedback.patientName}</strong> (Rating: ${feedback.rating}/5) - ${feedback.comments}`;
        feedbackContainer.appendChild(li);
    });
    setTimeout(() => window.location.href = "index.html", 3000);
};

var showContact = document.getElementById('contact');

showContact.onclick = function() {
    contactForm.style.display = "block";
};

closeMe.onclick = function() {
    contactForm.style.display = "none";
};

submitBtn.onclick = function() {
    alert("Thank you for contacting us.");
};

var showServices = document.getElementById("service");

showServices.onclick = function() {
    alert("Services: \n1. General Consultation \n2. Cardiological Appointment \n3. Eye Care \n4. Mental Health \n5. NICU Appointment \n6. Dental Appointment");
};

var loginContainer = document.getElementById('loginForm');
var signupContainer = document.getElementById('signupForm');
var loadLogin = document.getElementById('open');

var loginBtn = document.getElementById('loginBtn');
var showSignupBtn = document.getElementById('showSignupBtn');
var showLoginBtn = document.getElementById('showLoginBtn');

var loginCloseBtn = document.getElementsByClassName("closeBtn");
var signupCloseBtn = document.getElementsByClassName("closeBtn");

showSignupBtn.onclick = function() {
    signupContainer.style.display = "block";
    loginContainer.style.display = "none";
};

showLoginBtn.onclick = function() {
    loginContainer.style.display = "block";
    signupContainer.style.display = "none";
};

loginCloseBtn.onclick = function() {
    loginContainer.style.display = "none";
};

signupCloseBtn.onclick = function() {
    signupContainer.style.display = "none";
};

loadLogin.onclick = function() {
    loginContainer.style.display = "block";
};

window.onclick = function(event) {
    if (event.target == loginContainer) {
        loginContainer.style.display = "none";
    } else if (event.target == signupContainer) {
        signupContainer.style.display = "none";
    }
};

document.getElementById('loginForm').onsubmit = function(e) {
    e.preventDefault();
    alert('logged in successfully');
    loginContainer.style.display = "none";
};

document.getElementById('signupForm').onsubmit = function(e) {
    e.preventDefault();
    alert('Signed up successfully');
    signupContainer.style.display = "none";
};


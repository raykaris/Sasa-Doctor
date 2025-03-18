<?php 
session_start();
include 'connect.php'; 


if (isset($_SESSION['signIn'])) {
    header("Location: appointment.html");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $loginConn->prepare("SELECT Id FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Id'] = $row['Id'];

        if (isset($_GET['redirect']) && $_GET['redirect'] == 'appointmentForm') {
            header("Location: appointment.html");
            exit();
        } else {
            header("Location: index.html");
            exit();
        }
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container-l" id="loginForm" style="display: none;">
        <div class="content-l">
            <span class="closeBtn">&times;</span>
            <form id="loginForm" method="post" action="register.php">
                <h2>Login</h2>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email" required> <br>
                <label for="Password">Password:</label>
                <input type="password" id="Password" name="password" required>
                <button type="submit" class="btn-l">Login</button>
            </form>
            <div class="down">
                <p>Don't have an account?</p>
                <button id="showSignupBtn">Signup</button>
            </div>
        </div>
    </div>

    <div class="container-l" id="signupForm" style="display: none;">
        <div class="content-l">
            <span class="closeBtn">&times;</span>
            <form id="signupForm" method="post" action="register.php">
                <h2>Signup</h2>
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="fName" placeholder="First Name" required> <br>
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required> <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email" required> <br>
                <label for="Password">Password:</label>
                <input type="password" id="Password" name="password" required>
                <button type="submit" class="btn-l">Signup</button>
            </form>
            <div class="down">
                <p>Already have an account?</p>
                <button id="showLoginBtn">Login</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
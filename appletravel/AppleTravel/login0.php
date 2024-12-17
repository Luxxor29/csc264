<?php
include('server.php');
include('connect_to_db.php');
 

$errors = array();

// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Capture values from the HTML form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the entered password using md5 (same as during registration)
    $hashed_password = md5($password);

    // Query to check if the user exists in the database
    $user_query = "SELECT * FROM user WHERE email = '$email' AND password = '$hashed_password'";
    $user_result = mysqli_query($conn, $user_query);

    // If user exists, start a session and redirect to user menu
    if (mysqli_num_rows($user_result) > 0) {
        
        $user_row = mysqli_fetch_assoc($user_result);
        $user_id = $user_row['id'];
        $_SESSION['username'] = $email;
        $_SESSION['user_id'] = $user_id;

        header("Location: booking.php");
        exit;
    } else {
        // Handle invalid login attempt
        $_SESSION['error'] = "Invalid email or password!";
        header("Location: Login0.php"); // Redirect back to the registration page
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body 
        {
         

  margin: 0;
  padding: 0;
  background: url(pagepic/bg.jpg);
  background-size: cover;
  font-family: sans-serif;
}

.container
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 700px;
  height: 420px;
  border-radius: 5px;
  border: 10px solid rgba(255,255,255,.2);
  box-shadow: 10px 10px 10px rgba(0,0,0,.5);
}
.imgBx
{
  width: 350px;
  height: 420px;
  overflow: hidden;
  float: left;
}
.imgBx img
{
  width: 100%;
}
.loginBox
{
  float: right;
  width: 350px;
  height: 420px;
  box-sizing: border-box;
  padding: 80px 40px;
  background: rgba(255,255,255,.8);
}
h3
{
  margin: 50;
  padding: 0;
  color: #262626;
}
.loginBox input
{
  width: 100%;
  margin-bottom: 20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
  border: none;
  border-bottom: 2px solid #262626;
  outline: none;
  height: 40px;
  color: #262626;
  background: transparent;
  font-size: 16px;
  padding-left: 20px;
  box-sizing: border-box;
}
::placeholder
{
  color: rgba(0,0,0,.5);
}
.inputBox
{
  position: relative;
}
.inputBox span
{
  position: absolute;
  top: 10px;
  color: #262626;
}
.loginBox input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  font-size: 16px;
  background: #ed292a;
  color: #fff;
  border-radius: 20px;
  cursor: pointer; 
}
.loginBox a
{
  color: #262626;
  font-size: 14px;
  font-weight: bold;
}
header {
    padding: 90px 30px 40px 50px; /* top right bottom left */
}

    </style>
</head>
<body>
    <header><h1 align="center">WELCOME TO APPLE VACATION</h1></header>
    <div class="container">
      <div class="imgBx">
        <img src="pagepic/travel.jpg">
      </div>
    <div class="loginBox">

        <h2>Login</h2>

        <form method="POST" action="login0.php">
            <?php include('errors.php'); ?>

            <div class="form-group">
                
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <input type="submit" name="Submit" value="Login">
            </div>

            <div class="form-group">
                <a href="registration.php">Havent created Account Yet?</a>
               
            </div>
        </form>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<script>alert('{$_SESSION['error']}');</script>";
            unset($_SESSION['error']);  // Clear the session variable after showing the alert
        }
        ?>
    </div>
</body>
</html>


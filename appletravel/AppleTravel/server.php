<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'appletravel');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // Check if email already exists
  $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Check if username already exists
  $username_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $username_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // If there are no errors, register the user
  if (count($errors) == 0) {
    $password = md5($password_1); // encrypt password using md5

    $query = "INSERT INTO user (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Account created Successfully";
    echo "<script>
        alert('Account Created Successfully !');
        window.location.href = 'login0.php'; // Redirect after the popup
        </script>";
  }
}
?>
<?php
include 'connectToDB.php';

$id = $_POST['id'];
$name = $_POST['name'];
$password= $_POST['password'];
$email = $_POST['email'];
$notel = $_POST['notel'];

$query = "UPDATE userdata SET 
          name = '$name',
          password = '$password',
          email = '$email',
          notel = $notel
          WHERE id = $id";

if (mysqli_query($conn, $query)) {
    echo "Record updated successfully! <a href='view.php'>View Students</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
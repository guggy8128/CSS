<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // process form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // validate form data
  // ...
  
  // save form data to database
  // ...
  
  // redirect to success page
  header('Location: success.php');
  exit;
}
?>

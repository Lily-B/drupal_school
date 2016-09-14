<?php
require_once 'inc/session.php';
require_once 'inc/Database.php';
require_once 'inc/functions.php';

if (isset($_POST['signUp'])) {
  // Process the form.
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $week_pass = $_POST['pass'];
  // Move to function:
  $pass = crypt($week_pass, $week_pass);

  // Check if user with this email already exists in db.
  try {
    $db = Database::connect();
    $db->query('SELECT * FROM users WHERE email = :email');
    $db->bind(':email', $email);
    $db->resultset();
    $row_count = $db->rowCount();
    if ($row_count > 0) {
      $_SESSION["message"] = "User with this email already exists";
      redirect_to('Sign_up_form.php');
    }
  }
  catch (PDOException $e) {
    $_SESSION["message"] = 'DB error occurred.';
    redirect_to('Sign_up_form.php');
  }

  // If this email is unique, add user to db.
  try {
    $db->query('INSERT INTO users (firstName, lastName, email, pass) VALUES (:fname, :lname, :email, :pass)');
    $db->bind(':fname', $firstName);
    $db->bind(':lname', $lastName);
    $db->bind(':email', $email);
    $db->bind(':pass', $pass);
    $db->execute();
    $_SESSION["message"] = "Success!";
    redirect_to('Sign_up_form.php');
  }
  catch (PDOException $e) {
    $_SESSION["message"] = 'DB error occurred.';
    redirect_to('Sign_up_form.php');
  }
}
else {
  $_SESSION["message"] = "Hi from get request!";
  redirect_to('Sign_up_form.php');
}

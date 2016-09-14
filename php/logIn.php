<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.09.16
 * Time: 17:16
 */
require_once '../inc/session.php';
require_once '../inc/Database.php';
require_once '../inc/functions.php';



if (isset($_POST['logIn'])) {
  // Process the form.
  $email = $_POST['email'];
  $week_pass = $_POST['pass'];
  // It's better to move this in function:
  $pass = crypt($week_pass, $week_pass);
  // !!!Here must be some input validation.

  // Check if user with this email and pass already exists in db.
  try {
    $db = Database::connect();
    $db->query('SELECT * FROM users WHERE email = :email AND pass = :pass');
    $db->bind(':email', $email);
    $db->bind(':pass', $pass);
    $row = $db->single();
    $row_count = $db->rowCount();
    if ($row_count > 0) {
      $username = $row['firstName'];
      $_SESSION['user_name'] = $username;
      $_SESSION['message'] = $username . ", you are logged in";
      redirect_to('../index.php');
    }
    else {
      $_SESSION['message'] = "Please check your e-mail and password.";
      redirect_to('../Log_in_form.php');
    }
  }
  catch (PDOException $e) {
    $_SESSION["message"] = 'DB error occurred.';
    redirect_to('../Log_in_form.php');
  }

  // If this email is unique, add user to db.
  $db->query('INSERT INTO users (firstName, lastName, email, pass) VALUES (:fname, :lname, :email, :pass)');
  $db->bind(':fname', $firstName);
  $db->bind(':lname', $lastName);
  $db->bind(':email', $email);
  $db->bind(':pass', $pass);
  $db->execute();
  $_SESSION["message"] = "Success!";
  redirect_to('../index.php');
}
elseif (logged_in()) {
  redirect_to('../index.php');
}
else {
  $_SESSION["message"] = "Hi from get request!";
  redirect_to('../index.php');
}
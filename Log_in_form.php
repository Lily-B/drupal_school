<?php require_once 'inc/session.php'; ?>
<?php require_once 'inc/functions.php'; ?>
<?php if (logged_in()) {
  redirect_to('index.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/formstyle.css">
  <script
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <!--<script src="js/formValidation.js"></script>-->
</head>
<body>

<form id="logIn" onsubmit="return is_valid_form()" name="LogIn"
      action="php/logIn.php" method="post" novalidate>
  <a href="Sign_up_form.php" class="grey">Sign Up</a><a href="#" class="green">Log In</a>
  <h1>Log In</h1>
  <?php require_once 'inc/session.php'; ?>
  <?php echo session_message(); ?>
  <div class="empty"></div>
  <input type="email" name="email" id="email" placeholder="Email Address">
  <input type="password" name="pass" id="pass" placeholder="Password">

  <input type="submit" name="logIn" value="GET STARTED">


</form>

</body>
</html>

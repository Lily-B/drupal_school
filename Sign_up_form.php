<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up for free</title>
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/formstyle.css">
  <script
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <!--<script src="js/formValidation.js"></script>-->
</head>
<body>

<form id="signUp" onsubmit="return is_valid_form()" name="signUpForm"
      action="php/signUp.php" method="post" novalidate>
  <a href="#" class="green">Sign Up</a><a href="Log_in_form.php" class="grey">Log In</a>
  <h1>Sign Up for Free</h1>
  <?php require_once 'inc/session.php'; ?>
  <?php echo session_message(); ?>
  <input type="text" name="firstName" id="firstName" placeholder="First Name">
  <input type="text" name="lastName" id="lastName" placeholder="Last Name">
  <input type="email" name="email" id="email" placeholder="Email Address">
  <input type="password" name="pass" id="pass" placeholder="Set A Password">

  <input type="submit" name="signUp" value="GET STARTED">


</form>

</body>
</html>

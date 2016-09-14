<?php require_once 'inc/session.php'; ?>
<?php require_once 'inc/functions.php'; ?>
<?php if (!logged_in()) {
  redirect_to('Log_in_form.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Drupal School</title>
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/formstyle.css">
  <script
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<header>

  <a id="logOutLink" href="php/logOut.php" class="green">Log Out</a>
  <h1> Hello <?php echo $_SESSION['user_name']; ?>! </h1>
</header>



</body>
</html>
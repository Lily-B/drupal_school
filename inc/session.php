<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.09.16
 * Time: 16:59
 */
session_start();
function session_message() {
  if (isset($_SESSION["message"])) {
    $message = "<div class=\"message\" >";
    $message .= htmlentities($_SESSION["message"]);
    $message .= "</div>";
    $_SESSION["message"] = NULL;
    return $message;
  }
  else {
    return NULL;
  }
}
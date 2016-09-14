<?php

// Redirect to new location

function redirect_to($newLocation) {
  header("Location: " . $newLocation);
  exit;
}

/**
 * Checks if the user is logged in.
 * @return bool
 */
function logged_in() {
  if (isset($_SESSION['user_name'])) {
    return TRUE;
  }
  return FALSE;
}

/**
 * Sets $_SESSION['user_name'] to null.
 */
function log_out() {
  if (isset($_SESSION['user_name'])) {
    $_SESSION['message'] = "Good-bye, " . $_SESSION['user_name'];
    $_SESSION['user_name'] = NULL;
  }
  $_SESSION['message'] = "You are not logged in";
}
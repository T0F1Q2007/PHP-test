<?php
session_start();
if (!isset($_SESSION['login_count'])) {
  $_SESSION['login_count'] = 0;
}
if (isset($_POST['login'])) {
  // Check if username and password are correct
  if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
    $_SESSION['login_count']++;
  }
}
if (isset($_POST['logout'])) {
  $_SESSION['login_count']--;
}
?>

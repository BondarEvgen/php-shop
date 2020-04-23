<?php

// print_r($_POST['password']);

session_start();

$secretWord = 'admin';

if($_POST['password'] == $secretWord) {
  $_SESSION["login"] = "on";
  header("location: admin.php");
} else {
  header("location: login.php");
};
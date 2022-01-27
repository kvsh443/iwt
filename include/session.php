<?php

session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['role'])) {
  header("location: ../ilogin.html");
  exit;
}

?>
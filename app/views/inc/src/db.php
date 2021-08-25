<?php
  define("DB_SERVER", "localhost"); //define konstanta
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_NAME", "formax");

  $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
  if($mysqli->connect_error) { // daromas patikrinimas ,jei kazkas negerai stabdomas kodo vykdymas
      echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
      echo 'Klaida: ' . $mysqli->connect_error . '\n';
      exit();
  }

  //idedame i insert laukelius informacija
  mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, subject, phone_number, message) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[subject]', '$_POST[phone_number]', '$_POST[message]')");
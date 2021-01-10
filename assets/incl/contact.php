<?php

  include 'assets/incl/init.php';

  $status = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(empty($name) || empty($email) || empty($message)) {
      $status = "Alle felter skal udfyldes";
    } else {
      if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
          $status = "Indsæt et gyldigt navn";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "Indæt en gyldig email";
      } else {

        $sql = "INSERT INTO contactinfo (name, email, message) VALUES (:name, :email, :message)";

        $stmt = $db->prepare($sql);

        $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

        $status = "Tak for din besked! Vi vil besvare dig hurtigst muligt.";
        $name = "";
        $email = "";
        $message = "";
      }
    }
  }

 ?>

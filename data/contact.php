<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../config/confe.php";

try {
    $formName = $_POST['name'];
    $formEmail = $_POST['email'];
    $formMessage = $_POST['message'];

    $q = "INSERT INTO contacts (`name`, `email`, `message`) 
          VALUES (:name, :email, :message)";

    $pre = $pdo->prepare($q);

    $pre->bindParam(":name", $formName);
    $pre->bindParam(":email", $formEmail);
    $pre->bindParam(":message", $formMessage);

    $pre->execute();
    header("Location: ../index.php");
    exit();
} catch (Exception $e) {
    error_log("Error in contact.php: " . $e->getMessage());
}


?>
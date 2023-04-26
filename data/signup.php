<?php

require_once "../config/confe.php";

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$sql = "INSERT INTO user(email,password) VALUES(:email,:password)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("email", $_POST['email']);
$passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
$pre->bindParam("password", $passwordHash);
//On execute la requête
$pre->execute();
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

header("Location ../index.php");
?>
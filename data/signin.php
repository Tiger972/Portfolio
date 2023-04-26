<?php
session_start();
require "../config/confe.php";

$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe
$sql = "SELECT * FROM user WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifier si le mot de passe est correct
if ($user && password_verify($password, $user['password'])) {
    // L'utilisateur est connecté
    $_SESSION['user_id'] = $user['id'];

    // Vérifier si l'utilisateur est administrateur
    if ($user['admin'] == 1) {
        // Rediriger vers la page d'administration
        header("Location: ../admin.php");
        exit;
    } else {
        // Rediriger vers une autre page pour les utilisateurs non-admin
        header("Location: ../index.php");
        exit;
    }
} else {
    // Les informations d'identification sont incorrectes
    $_SESSION['error'] = "Nom d'utilisateur ou mot de passe incorrect.";
    header("Location: ../index.php");
    exit;
}
?>

<?php require "config/conf.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/inscription.css">

</head>
<body>
<?php
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<form action ="data/signin.php" method="post">
    <h2>LOGIN</h2>
    <label>User Name</label>
    <input type="text" name="email" placeholder="User Name">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<form action ="data/signup.php" method="post">
    <h2>Inscription</h2>
    <label>User Name</label>
    <input type="text" name="email" placeholder="User Name">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Inscrire</button>
</form>


</body>
</html>
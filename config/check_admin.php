<?php
if ($_SESSION['user']['admin'] == 1) {
    header ("Location ../index.php");
    exit();
}
?>
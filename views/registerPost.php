<?php
include "../entities/user.php";
include "../core/userC.php";

if (isset($_POST['user-name']) and isset($_POST['user-email']) and isset($_POST['user-password'])) {
    $user = new user($_POST['user-name'], $_POST['user-email'], $_POST['user-password']);

    $userC = new userC();
    $userC->register($user);
    header('Location:  login.php');
} else {
    echo "verifier les champs";
}

<?php
session_start();

include "../entities/user.php";
include "../core/userC.php";

if (isset($_POST['user-name']) and isset($_POST['user-password'])) {

    $userC = new userC();
    $user = $userC->login($_POST['user-name'], $_POST['user-password']);



    if ($user != null) {
        $_SESSION["connectedUsername"] = $_POST['user-name'];
        $_SESSION["connectedUserId"] = $user->getId();

        if ($user->role == "client")
            header('Location:  afficherReclamation.php');
        else
            header('Location:  ../admin/home.php');

    } else {
        header('Location:  login.php');
    }
} else {
    echo "verifier les champs";
}

<?php

session_start();
$_SESSION["connectedUsername"] = null;
$_SESSION["connectedUserId"] = null;

header('Location:  login.php');

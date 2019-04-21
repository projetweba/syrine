<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <?php
    include('css.php');
    ?>
</head>

<body>

    <?php
    if (isset($_SESSION["connectedUsername"]))
        var_dump($_SESSION["connectedUsername"]);
    if (isset($_SESSION["connectedUserId"]))
        var_dump($_SESSION["connectedUserId"]);

    if (isset($_SESSION["connectedUsername"]))
        header('Location:  afficherReclamation.php');

    include('header.php');
    ?>

    <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Login / Register</h2>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li class="active">Login / Register</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="login-register-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="loginPost.php" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>







                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="registerPost.php">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    include('footer.php');
    ?>
</body>

<!-- Mirrored from demo.devitems.com/marten-v1/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 22:00:32 GMT -->

</html>
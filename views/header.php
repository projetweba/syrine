<header class="header-area">
    <div class="header-top theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="welcome-area">
                        <p>welcome !</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="account-curr-lang-wrap f-right">
                        <ul>
                            <li class="top-hover"><a href="#">DT Dinar (TU)</a>

                            </li>
                            <li><a href="#"><img alt="flag" src="assets/img/icon-img/en.jpg"> English </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                    <div class="logo pt-39">
                        <a href="index.html"><img alt="" src="assets/img/logo/logo-2.png" style="width: 200px; height: 70px"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="index.html">HOME</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="index.html">home version 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">home version 2</a>
                                        </li>
                                    </ul>
                                </li>


                                <li><a href="blog-leftsidebar.html">Reclamation</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="ajouterReclamation.php">Ajouter reclamation</a>
                                        </li>
                                        <li>
                                            <a href="afficherReclamation.php">Mes reclamation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="veterinaire.php">Veterinaire</a></li>
                                <li><a href="contact.html">contact us</a></li>
                                <?php
                                if (isset($_SESSION["connectedUsername"])) {
                                    ?>
                                    <li><a href="logout.php">Logout</a></li>
                                <?php
                            } else {
                                ?>

                                <?php  } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                    <div class="search-login-cart-wrapper">
                        <div class="header-search same-style">
                            <button class="search-toggle">
                                <i class="icon-magnifier s-open"></i>
                                <i class="ti-close s-close"></i>
                            </button>
                            <div class="search-content">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button>
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                        </div>


                        <?php if (isset($_SESSION["connectedUsername"])) {
                            ?>
                            <div class="header-login same-style">
                                <a href="profile.php"><i style="font-size: 15px"><?php if (isset($_SESSION["connectedUsername"])) echo $_SESSION["connectedUsername"] ?></i></a>
                            </div>

                        <?php
                    } else {
                        ?>
                            <div class="header-login same-style">
                                <a href="login.php"><i class="icon-user icons"></i></a>
                            </div>
                        <?php

                    }


                    ?>






                        <div class="header-cart same-style">

                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">home version 1</a></li>
                                        <li><a href="index-2.html">home version 2</a></li>
                                    </ul>
                                </li>




                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
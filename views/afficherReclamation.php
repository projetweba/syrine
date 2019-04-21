<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/marten-v1/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 22:00:32 GMT -->

<head>
    <?php
    include('css.php');
    ?>
</head>

<body>



    <?php
    include('header.php');
    ?>

    <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Mes Reclamations</h2>

            </div>
        </div>
    </div>



    <?PHP
    include '../core/reclamationC.php';
    $reclamation1C = new reclamationC();
    $listeReclamations = $reclamation1C->afficherMesReclamation($_SESSION['connectedUserId']);

    ?>


    <div class="shop-area pt-100 pb-100 gray-bg">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">

                    <?PHP
                    foreach ($listeReclamations as $row) {
                        ?>

                        <div class="grid-list-product-wrapper">
                            <div class="product-view product-list">
                                <div class="row">


                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">

                                            <div class="product-list-content">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h4>
                                                            <?PHP echo $row['subject']; ?>
                                                        </h4>

                                                        <p>
                                                            <?PHP echo $row['message']; ?>
                                                        </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="product-list-action">
                                                            <div class="product-list-action-left">
                                                                <form method="POST" action="supprimerReclamation.php">
                                                                    <input type="submit" name="supprimer" value="supprimer">
                                                                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                                </form>
                                                            </div>

                                                        </div>

                                                        <div class="product-list-action">
                                                            <div class="product-list-action-left">
                                                                <a href="modifierreclamation.php?id=<?PHP echo $row['id']; ?>">
                                                                    Modifier</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            
                        </div>

                    <?PHP
                }
                ?>
                </div>

                <div class="col-lg-3">
                    <div class="shop-sidebar">
                        <div class="shop-widget">
                            <h4 class="shop-sidebar-title">Search Products</h4>
                            <div class="shop-search mt-25 mb-50">
                                <form class="shop-search-form">
                                    <input type="text" placeholder="Find a product">
                                    <button type="submit">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
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
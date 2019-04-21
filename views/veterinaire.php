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
                <h2>Trouver un veterinaire</h2>
                <ul>
                    <li><a href="#">home</a></li>
                    <li class="active">Nos veterinaires</li>
                </ul>
            </div>
        </div>
    </div>




    <?PHP
    include "../core/veterinaireC.php";
    $veterinaire1C = new veterinaireC();

    if (isset($_GET['page']))
        $listeveterinaires = $veterinaire1C->paginateVeterinaire($_GET['page'] - 1);
    else
        $listeveterinaires = $veterinaire1C->paginateVeterinaire(0);
    $nums = $veterinaire1C->getCountVeterinaires();

    ?>

    <div class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-8">
                    <div class="row">

                        <?PHP
                        foreach ($listeveterinaires as $row) {
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="blog-wrapper mb-30 gray-bg">
                                    <div class="blog-img hover-effect">
                                        <a href="blog-details.html"><img alt="" src=" <?PHP echo $row['image']; ?>" style="height: 300px"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <ul>
                                                <li>Location: <span>
                                                        <?PHP echo $row['city']; ?></span></li>
                                                <li>
                                                    <?PHP echo $row['adresse']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4><a href="blog-details.html">
                                                <?PHP echo $row['nom']; ?>
                                                <?PHP echo $row['prenom']; ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        <?PHP
                    }
                    ?>

                    </div>

                    <?php
                    $numberPages = (round($nums / 6));


                    $openedPage = 0;
                    for ($i = 0; $i < $numberPages; $i++) {
                        if (isset($_GET['page'])) {
                            if (($i + 1) == $_GET['page'])
                                $openedPage = $i;
                        }
                    }

                    $isFirstPage = false;
                    $isLastPage = false;
                    if ($openedPage == 0) $isFirstPage = true;
                    if ($openedPage + 1 == $numberPages) $isLastPage = true;
                    ?>

                    <div class="pagination-style text-center mt-10">
                        <ul>

                            <?php
                            if ($isFirstPage) {
                                ?>

                            <?php
                        } else {
                            ?>
                                <li>
                                    <a href="veterinaire.php?page=<?php echo $openedPage ?>"><i class="icon-arrow-left"></i></a>
                                </li>
                            <?php
                        }
                        ?>

                            <?php



                            for ($i = 0; $i < $numberPages; $i++) {
                                ?>
                                <li>
                                    <a <?php if ($i == $openedPage) echo ('class="active"') ?> href="veterinaire.php?page=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a>
                                </li>
                            <?php
                        }
                        ?>

                            <?php
                            if ($isLastPage) {
                                ?>
                            <?php
                        } else {
                            ?>
                                <li>
                                    <a href="veterinaire.php?page=<?php echo $openedPage+2 ?>"><i class="icon-arrow-right"></i></a>
                                </li>
                            <?php
                        }
                        ?>


                        </ul>
                    </div>
                </div>

























                <div class="col-lg-3 col-md-4">
                    <div class="shop-sidebar blog-mrg">
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
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Food Category </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="#">Canned Food</a></li>
                                    <li><a href="#">Dry Food</a></li>
                                    <li><a href="#">Food Pouches</a></li>
                                    <li><a href="#">Food Toppers</a></li>
                                    <li><a href="#">Fresh Food</a></li>
                                    <li><a href="#">Frozen Food</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Top Brands </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="#">Authority</a></li>
                                    <li><a href="#">AvoDerm Natural</a></li>
                                    <li><a href="#">Bil-Jac</a></li>
                                    <li><a href="#">Blue Buffalo</a></li>
                                    <li><a href="#">Castor & Pollux</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Tags </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="#">Food </a></li>
                                    <li><a href="#">Fish </a></li>
                                    <li><a href="#">Dog </a></li>
                                    <li><a href="#">Cat </a></li>
                                    <li><a href="#">Pet </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Health Consideration </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="#">Bone Development <span>18</span></a></li>
                                    <li><a href="#">Digestive Care <span>22</span></a></li>
                                    <li><a href="#">General Health <span>19</span></a></li>
                                    <li><a href="#">Hip & Joint <span>41</span></a></li>
                                    <li><a href="#">Immune System <span>22</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Nutritional Option </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="#">Grain Free <span>18</span></a></li>
                                    <li><a href="#">Natural <span>22</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">Recent Post</h4>
                            <div class="recent-post-wrapper mt-25">
                                <div class="single-recent-post mb-20">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-s1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">My Dog, Aren</a></h4>
                                        <span>April 19, 2018 </span>
                                    </div>
                                </div>
                                <div class="single-recent-post mb-20">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-s2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">My Dog, Tomy</a></h4>
                                        <span>April 19, 2018 </span>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/blog-s3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">My Dog, Suju</a></h4>
                                        <span>April 19, 2018 </span>
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


</html>
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

    if (isset($_GET['city']))
        $listeveterinaires = $veterinaire1C->getVeterinaireByCity($_GET['city']);

    $nums = $veterinaire1C->getCountVeterinaires();

    ?>

    <div class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-8">
                    <div class="row" id="veterinaire_container">

                        <?PHP
                        foreach ($listeveterinaires as $row) {
                            ?>
                            <div class="col-lg-6 col-md-12" id="veterinaire_content">
                                <div class="blog-wrapper mb-30 gray-bg">
                                    <div class="blog-img hover-effect">
                                        <a href="#" onclick="displayModal(
                                                                                '<?PHP echo $row[1]; ?>',
                                                                                '<?PHP echo $row[2]; ?>',
                                                                                '<?PHP echo $row[3]; ?>',
                                                                                '<?PHP echo $row[5]; ?>',
                                                                                '<?PHP echo $row[6]; ?>',
                                                                                '<?PHP echo $row[4]; ?>',
                                                                                '<?PHP echo $row[8]; ?>',
                                                                                '<?PHP echo $row[9]; ?>'
                                                                                )"><img alt="" src=" <?PHP echo $row['image']; ?>" style="height: 300px"></a>
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
                                    <a href="veterinaire.php?page=<?php echo $openedPage + 2 ?>"><i class="icon-arrow-right"></i></a>
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
                                    <input type="text" placeholder="Find a product" id="search_input_vet">
                                    <button type="submit">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                        </div>


                        <div class="shop-widget mt-50">
                            <h4 class="shop-sidebar-title">City </h4>
                            <div class="shop-list-style mt-20">
                                <ul>
                                    <li><a href="veterinaire.php?city=Ariana">Ariana </a></li>
                                    <li><a href="veterinaire.php?city=Béja">Béja </a></li>
                                    <li><a href="veterinaire.php?city=Ben Arous">Ben Arous </a></li>
                                    <li><a href="veterinaire.php?city=Bizerte">Bizerte </a></li>
                                    <li><a href="veterinaire.php?city=Monastir">Monastir </a></li>
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



    <!-- Button trigger modal -->
    <button type="button" id="btn_modal" class="btn btn-primary" style="display: none" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details veterinaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <img id="img_modal" src="#" style="width:100%; height: 300px" />
                        </div>
                        <div class="col-6">
                            <h2 id="name_modal">new shop collection our shop</h2>
                            <blockquote class="importent-title">
                                <h5 id="address_modal">city - address</h5>
                            </blockquote>
                            <p id="desc_modal">desc</p>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="veterinaireMap.php?lat=" id="btn_map_modal" class="btn btn-info">voir sur map</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>


    <script>
        function displayModal(nom, prenom, urlImage, city, address, desc, lat, lng) {
            $('#name_modal').html(nom + " " + prenom);
            $('#address_modal').html(city + " - " + address);
            $('#desc_modal').html(desc);
            $('#img_modal').attr("src", urlImage);
            $('#btn_map_modal').attr("href", "veterinaireMap.php?lat=" + lat + "&lng=" + lng);
            $('#btn_modal').click();
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#search_input_vet").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#veterinaire_container #veterinaire_content").filter(function() {

                    var isMatch = $(this).text().toLowerCase().indexOf(value) > -1;
                    //alert(isMatch);
                    $(this).toggle(isMatch)
                });
            });
        });
    </script>
</body>


</html>
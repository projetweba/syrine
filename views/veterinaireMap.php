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
                    map here
                    <div id="mapContainer" style="width: 100%; height: 100%; background-color: red"></div>
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




    <?php
    include('footer.php');
    ?>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script>
        var platform = new H.service.Platform({
            'app_id': 'bcamRVXUI7ITm4Lm15LS',
            'app_code': 'EfC_ugZwM-9qwdtXwfrytg'
        });

        // Obtain the default map types from the platform object:
        var defaultLayers = platform.createDefaultLayers();

        // Instantiate (and display) a map object:
        var map = new H.Map(
            document.getElementById('mapContainer'),
            defaultLayers.normal.map, {
                zoom: 10
            });

        // Enable the event system on the map instance:
        var mapEvents = new H.mapevents.MapEvents(map);

        // Instantiate the default behavior, providing the mapEvents object: 
        var behavior = new H.mapevents.Behavior(mapEvents);

        var ui = H.ui.UI.createDefault(map, defaultLayers);

        var veterinairaLat = '<?php echo $_GET["lat"] ?>';
        var veterinairaLng = '<?php echo $_GET["lng"] ?>';

        // Create an icon, an object holding the latitude and longitude, and a marker:
        var icon = new H.map.Icon("../image/marker.png"),
            coords = {
                lat: veterinairaLat,
                lng: veterinairaLng
            },
            marker = new H.map.Marker(coords, {
                icon: icon
            });
        marker.setData("<h5 style='color: white'>mhamed hattab</h5> </br> <a class='btn btn-primary' href='#'>20334324</a>");

        // Add the marker to the map and center the map at the location of the marker:
        map.addObject(marker);
        map.setCenter(coords);



        marker.addEventListener('tap', function(evt) {
            // event target is the marker itself, group is a parent event target
            // for all objects that it contains
            //alert(evt.target.getData());
            var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
                // read custom data
                content: evt.target.getData()
            });
            var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
                // read custom data
                content: evt.target.getData()
            });
            // show info bubble
            ui.addBubble(bubble);
        }, false);




        function addInfoBubble(map) {
            var group = new H.map.Group();

            map.addObject(group);

            // add 'tap' event listener, that opens info bubble, to the group
            group.addEventListener('tap', function(evt) {
                // event target is the marker itself, group is a parent event target
                // for all objects that it contains
                var bubble = new H.ui.InfoBubble(evt.target.getPosition(), {
                    // read custom data
                    content: evt.target.getData()
                });
                // show info bubble
                ui.addBubble(bubble);
            }, false);

            addMarkerToGroup(group, {
                    lat: 53.439,
                    lng: -2.221
                },
                '<div><a href=\'http://www.mcfc.co.uk\' >Manchester City</a>' +
                '</div><div >City of Manchester Stadium<br>Capacity: 48,000</div>');

            addMarkerToGroup(group, {
                    lat: 53.430,
                    lng: -2.961
                },
                '<div ><a href=\'http://www.liverpoolfc.tv\' >Liverpool</a>' +
                '</div><div >Anfield<br>Capacity: 45,362</div>');

        }
    </script>

</body>


</html>
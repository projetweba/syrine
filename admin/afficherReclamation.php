<!DOCTYPE html>
<html>

<!-- Mirrored from preview.uideck.com/items/inspire-pro/light/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 11:34:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inspire - Admin and Dashboard Template</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>


    <?PHP
    include "../core/reclamationC.php";
    $reclamation1C = new reclamationC();
    if (isset($_GET['search_key'])) {
        $listereclamations = $reclamation1C->rechercheReclamation($_GET['search_key']);
    } else {
        $listereclamations = $reclamation1C->afficherReclamation();
    }



    ?>

    <div class="app header-default side-nav-light">
        <div class="layout">

            <div class="header navbar">
                <div class="header-container">

                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="lni-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="search-box">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <i class="lni-search"></i>
                        </li>
                        <li class="massages dropdown dropdown-animated scale-left">
                            <span class="counter">3</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-envelope"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <div class="dropdown-item align-self-center">
                                        <h5><span class="badge badge-primary float-right">745</span>Messages</h5>
                                    </div>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Amanda Robertson
                                                    </span>
                                                    <span class="sub-title">Dummy text of the printing and typesetting industry.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Danny Donovan
                                                    </span>
                                                    <span class="sub-title">It is a long established fact that a reader will</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <img src="assets/img/users/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        Frank Handrics
                                                    </span>
                                                    <span class="sub-title">You have 87 unread messages</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
                                        <a href="#" class="text-gray">View All</a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="lni-alarm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg">
                                <li>
                                    <h5 class="n-title text-center">
                                        <i class="lni-alarm"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="lni-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        5 new messages
                                                    </span>
                                                    <span class="sub-title">4 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        4 new comments
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="lni-users"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        3 Friend Requests
                                                    </span>
                                                    <span class="sub-title">a day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="media-hover">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-purple">
                                                        <i class="lni-comments-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        2 new messages
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="check-all text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications</a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item avatar-info">
                                            <div class="media-img">
                                                <img src="assets/img/avatar/avatar.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Tomas Murray</span>
                                                <span class="sub-title">UI/UX Desinger</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="lni-cog"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-envelope"></i>
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-primary pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-lock"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu">

                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle">
                                <span class="icon-holder">
                                    <i class="lni-bubble"></i>
                                </span>
                                <span class="title">Reclamtion</span>
                                <span class="arrow">
                                    <i class="lni-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="afficherReclamation.php">Afficher Reclamation</a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-holder">
                                    <i class="lni-files"></i>
                                </span>
                                <span class="title">Veterinaires</span>
                                <span class="arrow">
                                    <i class="lni-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu sub-down">
                                <li>
                                    <a href="ajouterVeterinaire.html">Ajouter Veterinaire</a>
                                </li>
                                <li>
                                    <a href="afficherVeterinaire.php">Afficher Veterinaire</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="page-container">

                <div class="main-content">
                    <div class="container-fluid">

                        <div class="breadcrumb-wrapper row">
                            <div class="col-12 col-lg-3 col-md-6">
                                <h4 class="page-title">HELLO ADMIN</h4>
                            </div>

                        </div>

                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Reclamations</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-end">
                                            <div class="col-4" style="margin: 10px">
                                                <form method="get" action="afficherReclamation.php">
                                                    <input type="text" name="search_key" placeholder="chercher..." />
                                                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                                                </form>
                                            </div>
                                        </div>
                                        <div class="table-responsive">

                                            <table id="" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>CLIENTS NAME</th>
                                                        <th>EMAIL</th>
                                                        <th>SUBJECT</th>
                                                        <th>MESSAGE</th>
                                                        <th>STATUS</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <?PHP
                                                foreach ($listereclamations as $row) {
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?PHP echo $row['id']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['fullNameC']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['email']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['subject']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP echo $row['message']; ?>
                                                            </td>
                                                            <td>
                                                                <?PHP
                                                                if ($row['statut'] == 0) {
                                                                    echo '<span class="badge badge-warning">en attente</span>';
                                                                } else {
                                                                    echo '<span class="badge badge-success">traiter</span>';
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?PHP
                                                                if ($row['statut'] == 0) {
                                                                    echo '<button class="btn btn-primary"  data-toggle="modal" data-target="#senMailModal'.$row[0].'"> Traiter</button>';
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>



                                                    <!-- Modal -->
                                                    <div class="modal fade" id="senMailModal<?php echo $row[0] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Traiter la reclamation</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form method="post" action="traiterReclamation.php">
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Email body</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="mail_body" rows="3"></textarea>
                                                                        </div>
                                                                        <input type="hidden" value="<?php echo $row[2] ?>" name="mail_to" />
                                                                        <input type="hidden" value="<?php echo $row[0] ?>" name="id_reclamation" />

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <input type="submit" class="btn btn-primary" value="Send mail" />
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->



                                                <?PHP
                                            }
                                            ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <footer class="content-footer">
                        <div class="footer">
                            <div class="copyright">
                                <span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
                                <span class="go-right">
                                    <a href="#" class="text-gray">Term &amp; Conditions</a>
                                    <a href="#" class="text-gray">Privacy &amp; Policy</a>
                                </span>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
        </div>

        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>



        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>

        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <script src="assets/js/datatables.init.js"></script>

</body>


<!-- Mirrored from preview.uideck.com/items/inspire-pro/light/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 11:35:02 GMT -->

</html>
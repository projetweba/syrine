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
    include('header.php');
    ?>

    <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Our Location</h4>
                            <p>45 rue des fruits chotrana 3
                                La Soukra</p>
                            <p><a href="#">
                                    zanimo.tn@gmail.com
                                </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Contact us Anytime</h4>
                            <p>Phone: 70 946 553</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-info-wrapper text-center mb-30">
                        <div class="contact-info-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Write Some Words</h4>
                            <p><a href="#">
                                    zanimo.tn@gmail.com
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title">Vous avey une reclamation ?</h4>
                        <div class="contact-message">
                            <form id="contact-form" method="POST" action="ajouterReclamationPost.php" onsubmit="return verifForm(this)">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="fullNameC" id="exampleInputName1" placeholder="Full Name" type="text" onblur="verifname(this)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email Address" id="exampleInputEmail" type="email" onblur="validateEmail(this)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="subject" placeholder="Subject" id="exampleInputName2" type="text" onblur="verifname(this)">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <select name="type" id="select_type">
                                                <option value="0">A propos service</option>
                                                <option value="1">A propos un produit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 hidden" id="product_container">
                                        <div class="contact-form-style mb-20">
                                            <select name="product_id">
                                                <option value="1">produit 1</option>
                                                <option value="2">Produit 2</option>
                                                <option value="3">Produit 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" id="exampleTextarea1" placeholder="Message" onblur="verifname(this)"></textarea>







                                            <button class="submit btn-style" type="submit" name="ajouter" value="ajouter">SEND RECLAMATION </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php
    include('footer.php');
    ?>
    <script src="assets/js/controle_desaisie.js"></script>

    <script>
        $('#product_container').hide();

        $('#select_type').on('change', function(e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;

            if (valueSelected == 1) {
                $('#product_container').show();
            } else {
                $('#product_container').hide();
            }
        });
    </script>


</body>

<!-- Mirrored from demo.devitems.com/marten-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 22:01:32 GMT -->

</html>
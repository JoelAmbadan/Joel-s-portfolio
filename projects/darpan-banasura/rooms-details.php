<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Darpan Banasura</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg style="display:none" class="progress-circle svg-content" width="100%" height="100%"
            viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <?php include 'header.php';?>
    <!-- Slider -->

    <!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/2.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/5.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/20.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/21.jpg"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">LUXURY VILLA</div>
                    <div class="section-title">Room 1</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting.</p>
                    <p class="mb-30">Remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                    <div class="row">
                        
                        <div class="col-md-12">
                            <h6>Special check-in instructions</h6>
                            <p>Remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Pets</h6>
                            <p>Pets not allowed</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Children and extra beds</h6>
                            <p>Remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"> <a href="contact.php"><span>Check Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Property Rules</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-hand-point-right"></span> </div>
                            <div class="page-list-text">
                                <p>Check-in from: 01:30 PM</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-hand-point-right"></span> </div>
                            <div class="page-list-text">
                                <p>Check-out until: 11:30 AM</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-hand-point-right"></span> </div>
                            <div class="page-list-text">
                                <p>Guests with fever are not allowed</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-hand-point-right"></span> </div>
                            <div class="page-list-text">
                                <p>PAN Card is not accepted as ID proof(s)</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="fa-solid fa-hand-point-right"></span> </div>
                            <div class="page-list-text">
                                <p>Pets are not allowed.</p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <?php include 'footer.php';?>
    <!-- jQuery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://kit.fontawesome.com/bdb81317ec.js" crossorigin="anonymous"></script>


</body>


</html>
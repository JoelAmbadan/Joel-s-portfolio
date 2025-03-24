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

    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
        data-background="img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding no-pad-bo">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Luxury Villa At Wayanad</h3>
                    <p>Enjoy our gracefully designed rooms, which offer a unique combination of luxury and comfort. The
                        villa has all modern amenities to make your stay relaxing and comfortable. </p>
                    <div class="reservations-2">
                        <div class="reservations mb-30">
                            <div class="icon"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p>Reservation</p> <a href="tel:+911234567890">+91 1234567890</a> <br>
                                <a href="tel:+911234567890">+91 1234567890</a>
                            </div>
                        </div>
                        <div class="reservations mb-30">
                            <div class="icon"><span class="flaticon-envelope"></span></div>
                            <div class="text">
                                <p>Email Info</p> <a href="mailto:darpanbanasura@gmail.com">darpanbanasura@gmail.com</a>
                                <a href="mailto:info@darpanbanasura.com">info@darpanbanasura.com</a>
                            </div>
                        </div>
                        <div class="reservations">
                            <div class="icon"><span class="flaticon-location-pin"></span></div>
                            <div class="text">
                                <p>Darpan · Demo Rode, Demo Church, near Demo, <br>
                            Demo, Demo 673575
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form action="mailfinal.php" method="get" class="" >
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your
                                    message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                    required></textarea>
                            </div>
                            <div class="col-md-12 butn-dark">
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->

        </div>

        <div class="">
            <div class="mar-bot animate-box" data-animate-effect="fadeInUp">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281446.110165313!2d72.11133576875643!3d20.758015446403867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1683220829997!5m2!1sen!2sin"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <title>Hanoch Automations PVT-LTD</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="css/responsive.css" rel="stylesheet">
    <!--<link href="css/color.css" rel="stylesheet">-->

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <?php include 'header.php';?>
        <!--End Main Header -->

        <section class="page-title top-head" style="background-image:url(images/background/19.jpg)">
            <div class="auto-container">

                <h1>Career</h1>
            </div>
        </section>
        <!--End Page Title-->


        <section class="blog-page-section">
            <div class="auto-container">

                <div class="row clearfix">

                    <!--News Block Two-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="contact-us.php"><img src="images/career/assembler.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="contact-us.php">Assembler / Fabricator</a>
                                </h3>
                                <div class="title">Post Info</div>
                                <div class="post-date">By Fernando, On 13th August 2022</div>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has industry's since the 1500s.</div>
                                <a href="contact-us.php" class="read-more">Apply Now<span
                                        class="icon flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!--News Block Two-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="contact-us.php"><img src="images/career/check.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="contact-us.php">Quality Control Inspector</a>
                                </h3>
                                <div class="title">Post Info</div>
                                <div class="post-date">By Fernando, On 19th August 2022</div>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has industry's since the 1500s.</div>
                                <a href="contact-us.php" class="read-more">Apply Now<span
                                        class="icon flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!--News Block Two-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="contact-us.php"><img src="images/career/manager.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="contact-us.php">Manager</a>
                                </h3>
                                <div class="title">Post Info</div>
                                <div class="post-date">By Fernando, On 13th August 2022</div>
                                <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has industry's since the 1500s.</div>
                                <a href="contact-us.php" class="read-more">Apply Now<span
                                        class="icon flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>




        <?php include 'footer.php';?>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <!-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span>
    </div> -->

    <script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }
    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");

        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }
    </script>

    <script src="js/jquery.js"></script>
    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/knob.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/bdb81317ec.js" crossorigin="anonymous"></script>

</body>



</html>
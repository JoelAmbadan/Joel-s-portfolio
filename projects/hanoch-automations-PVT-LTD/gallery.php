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

        <section class="page-title top-head" style="background-image:url(images/background/18.jpg)">
            <div class="auto-container">

                <h1>Gallery</h1>
            </div>
        </section>
        <!--End Page Title-->


        <div class="container">
            <div class="gallery-2">
                <!-- Images used to open the lightbox -->

                <div class="row gallery">
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/1.jpg"
                            onclick="openModal();currentSlide(1)" class="hover-shadow img-fluid">
                    </div>
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/2.jpg"
                            onclick="openModal();currentSlide(2)" class="hover-shadow img-fluid">
                    </div>
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/3.jpg"
                            onclick="openModal();currentSlide(3)" class="hover-shadow img-fluid">
                    </div>
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/4.jpg"
                            onclick="openModal();currentSlide(4)" class="hover-shadow img-fluid">
                    </div>
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/5.jpg"
                            onclick="openModal();currentSlide(5)" class="hover-shadow img-fluid">
                    </div>
                    <div class="col-md-4 no-pa">
                        <img src="images/gallery/6.jpg"
                            onclick="openModal();currentSlide(6)" class="hover-shadow img-fluid">
                    </div>
                </div>

                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content modal-content-2">

                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="images/gallery/1.1.jpg" class="img-fluid">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="images/gallery/2.1.jpg" class="img-fluid">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="images/gallery/3.1.jpg" class="img-fluid">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="images/gallery/4.1.jpg" class="img-fluid">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="images/gallery/5.1.jpg" class="img-fluid">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="images/gallery/6.1.jpg" class="img-fluid">
                        </div>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                </div>
            </div>
        </div>




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
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
	<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
	<meta name="author" content="Themexriver">
        <title>Consulting - Business, Finance and Professional Services HTML 5 Template</title>
        <!-- fav icon -->
        <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- animated-css -->
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="assets/css/revolution/layers.css">
        <link rel="stylesheet" href="assets/css/revolution/navigation.css">
        <link rel="stylesheet" href="assets/css/revolution/settings.css">
        <!-- offcanvas-menu-css -->
        <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>
            *{
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body class="homePageOne">
        <!-- start preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->


        <header class="header-section">
            <div class="topper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="header-left-bar">
                                    <ul class="contact-wrapper">
                                        <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> contact@elcoms.com</a></li>
                                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +212 66 89 95 289</li>
                                    </ul>
                                </div> <!-- header-left-bar -->
                            </div>

                            <div class="col-md-4">
                                <div class="header-right-bar text-right">
                                    <div class="language">
                                        
                                    </div>

                                    <div class="social-icon pull-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> <!-- header-right-bar -->
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- topper -->
            
            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href=""><img width="100" src="{{ asset("assets/images/logo/logo-removebg-preview.png") }}" alt="image"></a>
                        </div>

                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown"><a href="#">Home </a>
                                    
                                </li>

                                <li><a href="">About</a></li>

                                <li class="dropdown"><a href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">All Services</a></li>
                                        <li><a href="service-">Service-One</a></li>
                                        <li><a href="service-">Service-Two</a></li>
                                        <li><a href="service-">Service-Three</a></li>
                                        <li><a href="service-">Service-Four</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Projects </a>
                                    
                                </li>
                                <li><a href="#about-Company">Contact</a></li>

                                <li>
                                    <div class="search-view">
                                        <span class="open-bar"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></span>

                                        <div id="search-bar">
                                            <span class="close-bar pull-right"><i class="fa fa-times" aria-hidden="true"></i></span>

                                            <form class="form-bar">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="search">
                                                </div>
                                            </form>
                                        </div> <!-- search-bar -->
                                    </div> <!-- search-view -->
                                </li>

                                
                            </ul>
                        </div>
                    </div>
                </div> 
            </nav>
        </header> <!-- header-section -->



       @yield('content')


        <footer class="footer-section">
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wrapper">
                                <img src="{{ asset("assets/images/logo/logo-removebg-preview.png") }}" alt="">

                                <ul class="location">
                                    <li style="display: flex;"><i class="fa fa-home" aria-hidden="true"></i> 
                                        <div class="content">
                                            RESIDENCE FATIMA ZAHRA 5 N°2,RUE DARAA,AGDAL,RABAT-MAROC
                                        </div>
                                    </li>

                                    <li><i class="fa fa-phone" aria-hidden="true"></i> 
                                        <div class="content">
                                        +212 66 89 95 289
                                        </div>
                                    </li>

                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                        <div class="content">
                                            Working Hours: <br> Mon-Fri (9 am - 8 pm)
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- footer-wrapper -->
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wrapper">
                                <h3>About</h3>

                                <p>ELCOMS is a company specializing in Owner's Representative Services, Scheduling, Coordination and Control (OPC), Construction Management (MOE) and Project Management. We support owners and construction companies in managing and optimizing their projects with a strategic and operational approach.</p>


                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul> 
                            </div> <!-- footer-wrapper -->
                        </div>

                        
                    </div>
                </div>
            </div> <!-- footer-container -->


            <div class="copy-right text-center">
                <div class="container">
                    <p>2017 &copy; All Rights Reserved by <a href="#">ElCOMS</a></p>
                </div>
            </div> <!-- copy-right -->
        </footer> <!-- footer-section -->

       

        <!-- Off-Canvas View Only -->
        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

        <div id="offcanvas-menu" class="visible-xs visible-sm">
            
            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

            <ul class="menu-wrapper">
                <li>
                    <a class="active dropmenu" href="#">Home</a>
                        <!-- end of dropdown -->
                </li><!-- end of li -->

                <li><a href="">About</a></li><!-- end of li -->
                

                <li>
                    <a class="dropmenu" href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="">All Services</a></li>
                        <li><a href="service-">Service-One</a></li>
                        <li><a href="service-">Service-Two</a></li>
                        <li><a href="service-">Service-Three</a></li>
                        <li><a href="service-">Service-Four</a></li>
                  </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li>
                    <a class="dropmenu" href="#">Projects</a>
                    <!-- end of dropdown -->
                </li><!-- end of li -->

                <!-- end of li -->

                <li><a href="#about-Company">Contact</a></li><!-- end of li -->
            </ul> <!-- menu-wrapper -->      
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->


        <script src="assets/js/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/portfolio.js"></script>
        <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/language.js"></script>

        <!-- Revolution Slider -->
        <script src="assets/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/revolution/jquery.themepunch.tools.min.js"></script>

        <!-- Revolution Extensions -->
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/revolution/extensions/revolution.extension.video.min.js"></script>

        <script src="assets/js/script.js"></script>
    </body>

<!-- Mirrored from html.themexriver.com/consulting/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 May 2025 09:46:19 GMT -->
</html>
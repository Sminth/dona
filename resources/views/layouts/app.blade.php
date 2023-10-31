<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui-1.9.2.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-menu.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">


    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    @yield('extra-css')



    <title>Dona - Accueil</title>

</head>

<body lass="body-wrapper">

    <div class="page-wrapper">

        <header class="main-header header-style-one header-s-two">
            <div class="header-top">
                <div class="header-container-box">
                    <div class="wrapper-box">
                        <div class="left-column">
                            <ul class="contact-info box-s-two">
                                <li><a href="mailto:hotline@gmail.com"><i
                                            class="far fa-envelope"><span>Email:</span></i>virtus225one@gmail.com</a></li>
                                <li class="crl-1">|</li>
                            </ul>
                        </div>
                        <div class="right-column box-s-two">
                            <div class="text">Entreprise caritative à but non lucratif</div>
                            <ul>
                                <li><a href="tel:09806764956"><span>Contacter nous : </span> +225 (07) 88364403</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="header-container-box">
                    <div class="inner-container">
                        <div class="left-column">
                            <div class="logo">
                                <a href="index.html">
                                    <h1 style="color: white;">DONA</h1>
                                </a>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png"
                                        alt=""></div>

                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li ><a href="/">Accueil </a>

                                            </li>

                                            <li><a href="/causes">Nos Causes</a>

                                            </li>
                                            <li class="#"><a href="#">Parrainer un enfant</a>

                                            </li>
                                            <li><a href="/contact">Nous Contactez</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


                        <div class="right-column">

                            <div class="menu-bar sidemenu-nav-toggler"><img src="assets/images/icons/icon-menu.png"
                                    alt=""></div>
                            <a href="donate.html" class="primary_btn style-seven">Faire une Dona<i
                                    class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky-header">
                <div class="header-upper">
                    <div class="header-container-box">
                        <div class="inner-container">
                            <div class="left-column">
                                <div class="logo">
                                    <a href="index.html">
                                        <h1 style="color: white;">DONA</h1>
                                    </a>
                                </div>
                                <div class="nav-outer">
                                    <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png"
                                            alt=""></div>

                                    <nav class="main-menu navbar-expand-md navbar-light">
                                    </nav>

                                </div>
                            </div>


                            <div class="right-column">

                                <div class="menu-bar sidemenu-nav-toggler"><img
                                        src="assets/images/icons/icon-menu.png" alt=""></div>
                                <a href="donate.html" class="primary_btn style-seven">Faire une Dona<i
                                        class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><i class="icon far fa-times"></i></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index.html">
                            <h1 style="color: white;">DONA</h1>
                        </a>
                            </div>
                    <div class="menu-outer"></div>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay"></div>
        </header>

        <section class="header-widget-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="content-wrapper">
                    <div class="header-widget-sidebar-close"><span class="far fa-times"></span></div>
                    <div class="about-widget widget">
                        <div class="logo"><a href="index.html">
                            <h1 style="color: white;">DONA</h1>
                        </a></div>
                        <div class="text">Nous avons créé une plateforme révolutionnaire pour garantir la transparence et la confiance dans les dons en ligne. Soutenez des causes vérifiées avec DONA.</div>
                    </div>
                    <div class="footer-widget-item recent-news-widget widget">
                        <h4>Flux Instagram</h4>
                        <div class="footer-widget-news">
                            <ul>
                                <li>
                                    <div class="img-box">
                                        <img src="assets/images/resource/footer-1.jpg" alt="">
                                    </div>
                                    <div class="text-box">
                                        <p><span class="far fa-calendar-alt"></span>24 janvier 2023</p>
                                        <h6><a href="blog-details.html">Rejoignez-nous dans notre mission pour une philanthropie transparente.</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-box">
                                        <img src="assets/images/resource/footer-2.jpg" alt="">
                                    </div>
                                    <div class="text-box">
                                        <p><span class="far fa-calendar-alt"></span>24 janvier 2023</p>
                                        <h6><a href="blog-details.html">Découvrez les histoires de ceux que nous avons aidés grâce à vos dons.</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget contact-widget">
                        <div class="footer-widget-item">
                            <div class="title">
                                <h2>À propos de nous</h2>
                            </div>
                            <div class="our-info">
                                <div class="text">
                                    <p>Notre mission est de renforcer la confiance dans les dons en ligne en garantissant transparence et traçabilité. Avec DONA, chaque don fait une différence tangible.</p>
                                </div>
                            </div>
                            <div class="icon-list">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                        <div class="text-location">123 rue de la Bienfaisance, Paris - 75000</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-envelope"></i></div>
                                        <div class="text"><a href="email:support@dona.com">support@dona.com</a></div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-phone"></i></div>
                                        <div class="text"><a href="tel:+012(345)6789">+33 (0)1 23 45 67 89</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @yield('content')



        <footer class="main-footer">
            {{-- <div class="main-footer-top">
                <div class="theme_container">
                    <div class="widgets-section">
                        <div class="row clearfix">

                            <!--Start Footer Widget Item-->
                            <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="footer-widget-item">
                                    <div class="title">
                                        <h2>About Us</h2>
                                    </div>

                                    <div class="our-info">
                                        <div class="text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusanum
                                                doloremue laudantiue totame</p>
                                        </div>
                                    </div>

                                    <div class="icon-list">
                                        <ul>
                                            <li>
                                                <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                                <div class="text-location">4486 Richards Avenue, Modesto CA - 95354
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="far fa-envelope"></i></div>
                                                <div class="text"><a
                                                        href="mailto:hotline@gmail.com">hotline@gmail.com</a> </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="far fa-phone"></i></div>
                                                <div class="text"><a href="tel:+012(345)6789">+012 (345) 6789</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--End Footer Widget Item-->

                            <!-- Start Footer Widget Item -->
                            <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="footer-widget">
                                    <div class="title">
                                        <h2>Causes</h2>
                                    </div>
                                    <div class="icon-list">
                                        <ul>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Education</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Ecosystems</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Medical</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Foods</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Shelter</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Water</a></li>
                                            <li><a href="donation-details.html"><i
                                                        class="far fa-arrow-right"></i>Donations</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Footer Widget Item-->


                            <!--Start Footer Widget Item-->
                            <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="footer-widget-item mar-t50 s-two">
                                    <div class="title">
                                        <h2>Recent News</h2>
                                    </div>

                                    <div class="footer-widget-news">
                                        <ul>
                                            <li>
                                                <div class="img-box">
                                                    <a href="blog-details.html"><img
                                                            src="assets/images/resource/footer-1.jpg"
                                                            alt="" /></a>
                                                </div>

                                                <div class="text-box">
                                                    <p><span class="far fa-calendar-alt"></span><a
                                                            href="blog-details.html">24th January 2022</a></p>
                                                    <h6><a href="blog-details.html">We can build anything ni <br>hill
                                                            ground or building.</a></h6>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="img-box">
                                                    <img src="assets/images/resource/footer-2.jpg" alt="" />
                                                </div>

                                                <div class="text-box">
                                                    <p><span class="far fa-calendar-alt"></span><a
                                                            href="blog-details.html">24th January 2022</a></p>
                                                    <h6><a href="blog-details.html">We can build anything ni <br>hill
                                                            ground or building.</a></h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--End Footer Widget Item-->


                            <!--Start Footer Widget Item-->
                            <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="footer-widget-item-2 mar-l13">
                                    <div class="title">
                                        <h2>Newsletter</h2>
                                    </div>

                                    <div class="footer-widget-newsletter">
                                        <p>Subscribe our newsletter to get our <br> latest updates & news.</p>
                                        <div class="subscribe-box">
                                            <form class="subscribe-form" action="#">
                                                <div class="input-box">
                                                    <input type="email" name="email" placeholder="Enter Email">
                                                    <button type="submit"><span
                                                            class="far fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="social-link">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>

                                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>

                                                <li><a href="#"><i class="fab fa-youtube"></i></a>
                                                </li>

                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--End Footer Widget Item-->

                        </div>
                    </div>
                </div>
            </div> --}}


            <!--Start Main Footer Bottom -->
            <div class="main-footer-bottom">
                <div class="theme_container">
                    <div class="main-footer-bottom-inner">
                        <ul>
                            <li><a href="#">Politique de confidentialité</a></li>
                            {{-- <li><a href="#">Privacy & Policy</a></li> --}}

                        </ul>
                        <div class="text">
                            <p>Copyright © 2023 Dona. Tout droits Reservé.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Footer Bottom -->
        </footer>

    </div>


    <a href="# " class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s ">
        <i class="fas fa-angle-up "></i>
    </a>



    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/knob.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>



    @yield('extra-js')

</body>

</html>

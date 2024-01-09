<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/css/bootstrap.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-animate.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui-1.9.2.custom.min.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.min.css') }}" id="app-style" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-menu.css') }}" id="app-style" rel="stylesheet">


    <link href="{{ asset('assets/css/style.css') }}" id="app-style" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" id="app-style" rel="stylesheet">

    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css') }}" id="app-style" rel="stylesheet">

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
                                            class="far fa-envelope"><span>Email:</span></i>virtus225one@gmail.com</a>
                                </li>
                                <li class="crl-1">|</li>
                            </ul>
                        </div>
                        <div class="right-column box-s-two">
                            <div class="text">Entreprise caritative à but non lucratif</div>
                            <ul>
                                <li><a href="tel:09806764956"><span>Contactez nous : </span> +225 (07) 88364403</a></li>
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
                                <a href="/">
                                    <img style="width: 100px;height:90px" src="{{ asset('assets/images/lgo.png') }}"
                                        alt="">
                                    {{-- <h1 style="color: white;">DONA</h1> --}}
                                </a>
                            </div>
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img
                                        src="{{ asset('assets/images/icons/icon-bar.png') }}" alt=""></div>

                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation">
                                            <li><a href="/">Accueil </a>

                                            </li>

                                            <li><a href="/causes">Nos Causes</a>

                                            </li>
                                            <li class="#"><a href="/cartographie">Cartographie des causes</a>

                                            </li>
                                            {{-- <li><a href="/contact">Nous Contactez</a></li> --}}
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


                        <div class="right-column">

                            {{-- <div class="menu-bar sidemenu-nav-toggler"><img src="assets/images/icons/icon-menu.png"
                                    alt=""></div> --}}
                            <a href="/causes" class="primary_btn style-seven donate_button">Faire une Dona<i
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
                                    <a href="/">
                                        <img style="width: 100px;height:90px"
                                            src="{{ asset('assets/images/logo.png') }}" alt="">
                                        {{-- <h1 style="color: white;">DONA</h1> --}}
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

                                {{-- <div class="menu-bar sidemenu-nav-toggler"><img
                                        src="assets/images/icons/icon-menu.png" alt=""></div> --}}
                                <a href="/causes" class="primary_btn style-seven">Faire une Dona<i
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
                        <a href="">
                            <h1 style="color: white;">DONA</h1>
                        </a>
                    </div>
                    <div class="menu-outer"></div>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay"></div>
        </header>

        <section class="header-widget-sidebar close-sidebar" style="z-index: 9999999999999999999999999999">
            <div class="wrapper-box" style="z-index: 9999999999999999999999999999">
                <div class="content-wrapper" style="z-index: 9999999999999999999999999999">
                    <div class="header-widget-sidebar-close"><span class="far fa-times"></span></div>
                    <div class="about-widget widget">
                        <div class="logo" style="text-align: center;align-items:center">
                            <img style="height: 100px" id="donorgimg" src="{{ asset('assets/images/logo.png') }}" />
                            <h6 style="color: white;margin-top:5px" id="donorg">Dona</h6>
                        </div>
                        <div class="text" id="dontitre" style="text-align: center;font-size:18px"> --- </div>
                    </div>
                    <div class="footer-widget-item recent-news-widget widget">
                        <div class="counter-block-three-single style-seven">
                            <h4 class="title">Collecté<span style="color: white" id="doncollecte"> -- </span> f</h4>
                            <div class="bar">
                                <div class="count-text clr3"> <span id="donpercenttext">--</span> % </div>
                                <div class="bar-inner bg4 count-bar" id="donpercent" data-percent="0"> </div>
                            </div>
                            <ul>
                                <li>Objectif<span class="crl4" id="donobj"> -- </span> f</li>
                                {{-- <li>Collecté<span class="crl2"> {{$cause->collecte??0}} f</span></li> --}}
                                <li>Reste<span class="crl3" id="donreste"> -- </span> f</li>
                            </ul>
                        </div>
                        <div class="project-o" style="margin-top:15px">
                            <ul class="donation-ant" style="margin-top:15px">
                                <li class="price-value donation-form-one-price-value" style=""
                                    onclick="insertMontant(10000)" data-dollars='1000'>10 000 f</li>
                                    <li class="price-value donation-form-one-price-value"
                                    onclick="insertMontant(50000)" data-dollars='1000'>50 000 f</li>
                                    <li class="price-value donation-form-one-price-value"
                                    onclick="insertMontant(100000)" data-dollars='1000'>100 000 f</li>
                            </ul>
                        </div>


                        <form action="{{ route('paye') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form" style="position: relative;width:100%;margin-top: 20px">
                                <input name="montant" class="input" placeholder="Entrez votre montant"
                                    id="montant" required type="number">
                                <span class="input-border"></span>
                            </div>
                            <div class="form" style="position: relative;width:100%;margin-top: 20px">
                                <input name="numero" class="input" placeholder="Entrez votre numero (ex: 0574386145)"
                                    id="montant" required type="tel" pattern="[0-9]{10}" required="Veuillez rentrer un numero a 10 chiffres svp">
                                <span class="input-border"></span>
                            </div>
                            <div class="checkbox-wrapper" style="margin-top: 20px;margin-bottom: 20px">
                                <input id="terms-checkbox-37" name="informe" type="checkbox"
                                    style="background: white">
                                <label onclick="document.getElementById('informe').style.display=='none'?document.getElementById('informe').style.display='block':document.getElementById('informe').style.display='none'" class="terms-label" for="terms-checkbox-37">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200"
                                        class="checkbox-svg">
                                        <mask fill="white" id="path-1-inside-1_476_5-37">
                                            <rect height="200" width="200"></rect>
                                        </mask>
                                        <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40"
                                            class="checkbox-box" height="200" width="200"></rect>
                                        <path stroke-width="15" d="M52 111.018L76.9867 136L149 64"
                                            class="checkbox-tick"></path>
                                    </svg>
                                    <span
                                        class="label-text">être informer des impacts de mon don</span>
                                </label>
                            </div>



                            <div id="informe" style="display: none">
                                <input class="id" name="id" id="id" type="hidden">

                                <div class="form" style="position: relative;width:100%">
                                    <input class="input" name="email" placeholder="Entrez votre mail" type="email">
                                    <span class="input-border"></span>
                                </div>
                                <div class="form" style="position: relative;width:100%">
                                    <input class="input" name="nom" placeholder="Entrez votre nom (optionnel)" type="text">
                                    <span class="input-border"></span>
                                </div>
                            </div>
                            <center>
                                <div class="from-button"><button class="primary_btn-one donate_button">Faire une
                                        dona<i class="far fa-heart"></i></button></div>
                            </center>
                        </form>

                        {{-- <h4>Flux Instagram</h4>
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
                        </div> --}}
                    </div>
                    {{-- <div class="widget contact-widget">
                        <div class="footer-widget-item">
                            <div class="title">
                                <p>Besoin d'aide? nous contacter</p>
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
                                        <div class="text-location">Cocody Deux plateau, Rue k104</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-envelope"></i></div>
                                        <div class="text"><a href="email:support@dona.com">support@dona.com</a></div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-phone"></i></div>
                                        <div class="text"><a href="tel:+012(345)6789">+225 07 88 36 4403</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>


        @yield('content')



        <footer class="main-footer">

            <!-- start footer conter section -->
            <div class="section-footer-countr-section">
                <div class="theme_container">
                    <img style="width: 100px;height:90px" src="{{ asset('assets/images/logo.png') }}"
                        alt=""> changer une vie
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-counter-block">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5000000">0</span><span
                                        class="plus"> f+</span>
                                    <span class="crl3">
                                        Levé pour un don</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="donation-form-one-form-wrap s-two">
                                <ul class="donation-form-one-form-wrap-ul donate_form_amount_wrap">
                                    <li class="donation-form-one-price-value" data-dollars='1000'>100 000 F</li>
                                    <li class="donation-form-one-price-value" data-dollars='500'>50 000 F</li>
                                    <li class="donation-form-one-price-value" data-dollars='100'>30 000 F</li>
                                    <li class="donation-form-one-price-value" data-dollars='25'>15 000 F</li>
                                    {{-- <li class="donation-form-one-price-value" data-dollars='25'>Autre</li> --}}

                                    <li class="other-input"></li>
                                </ul>
                                <div class="donation-form-one-submit-btn"><button
                                        class="primary_btn-one donate_button" type="submit">Dona<i
                                            class="far fa-heart"></i></button></div>
                            </div>
                            {{-- <div class="donate-fomr-popup donate-form-s-one">
                        <div class="donate-fomr-popup-outer">
                            <div class="donate-fomr-popup-inner">
                                <div class="donate-fomr-popup-close"><i class="fas fa-times"></i></div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Informations Personnelles</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form id="formulaire-donation">
                                            <div class="form-group">
                                                <input id="nom_complet" name="nom_complet" type="text" placeholder="Nom complet" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="email" name="email" type="email" placeholder="Email (Facultatif)" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="rester_anonyme" name="rester_anonyme">
                                                <label for="rester_anonyme">Rester Anonyme</label>
                                            </div>
                                            <div class="form-group">
                                                <input id="numero_momo" name="numero_momo" type="text" placeholder="Numéro Mobile Money" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="montant_don" name="montant_don" type="number" placeholder="Montant du don" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="suivre_actions" name="suivre_actions">
                                                <label for="suivre_actions">Suivre les actions relatives à ce don</label>
                                            </div>
                                            <button type="button" onclick="
                                              var form = document.getElementById('formulaire-donation');
                                              var nomComplet = form.nom_complet.value;
                                              var email = form.email.value;
                                              var resterAnonyme = form.rester_anonyme.checked;
                                              var numeroMomo = form.numero_momo.value;
                                              var montantDon = form.montant_don.value;

                                              if (!resterAnonyme && (!nomComplet || !email)) {
                                                alert('Veuillez entrer le nom complet et l\'email ou choisir de rester anonyme.');
                                                return;
                                              }

                                              if (!numeroMomo || !montantDon) {
                                                alert('Veuillez entrer le numéro Mobile Money et le montant du don.');
                                                return;
                                              }

                                              alert('Paiement en cours de traitement...');  // Remplacer par votre propre logique
                                            ">Soumettre</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
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
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Education</a></li>
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Ecosystems</a></li>
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Medical</a></li>
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Foods</a></li>
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Shelter</a></li>
                                            <li><a href="#"><i
                                                        class="far fa-arrow-right"></i>Water</a></li>
                                            <li><a href="#"><i
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


    <a href="# " id="topp" class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s ">
        <i class="fas fa-angle-up "></i>
    </a>

    <script>
        function show(cause) {
            console.log(111, cause)
            // document.getElementById('topp').display='none'

            document.getElementById('id').value = cause['id']
            document.getElementById('donorgimg').src = window.location.origin + '/storage/' + cause['organisations']['logo']
            document.getElementById('donorg').innerText = cause['organisations']['nom']
            document.getElementById('dontitre').innerText = cause['libelle']
            document.getElementById('doncollecte').innerText = parseInt(cause['collecte'] ?? 0)
            document.getElementById('donobj').innerText = parseInt(cause['objectif'] ?? 0)
            document.getElementById('donreste').innerText = parseInt(cause['objectif'] ?? 0) - parseInt(cause['collecte'] ??
                0)
            document.getElementById('donpercenttext').innerText = Number.parseFloat((parseInt(cause['collecte'] ?? 0) / parseInt(cause[
                'objectif'] ?? 0)) * 100).toFixed(0);
            document.getElementById('donpercent').setAttribute("data-percent", (parseInt(cause['collecte'] ?? 0) / parseInt(
                cause['objectif'] ?? 0)) * 100 + "%")

        }

        function insertMontant(mtn) {
            document.getElementById('montant').value = mtn

        }
    </script>
    <style>
        .form {
            --width-of-input: 200px;
            --border-height: 1px;
            --border-before-color: rgba(221, 221, 221, 0.39);
            --border-after-color: #FF7200;
            --input-hovered-color: #4985e01f;
            position: relative;
            width: var(--width-of-input);
        }

        /* styling of Input */
        .input {
            color: #fff;
            font-size: 0.9rem;
            background-color: transparent;
            width: 100%;
            box-sizing: border-box;
            padding-inline: 0.5em;
            padding-block: 0.7em;
            border: none;
            border-bottom: var(--border-height) solid var(--border-before-color);
        }

        /* styling of animated border */
        .input-border {
            position: absolute;
            background: var(--border-after-color);
            width: 0%;
            height: 2px;
            bottom: 0;
            left: 0;
            transition: 0.3s;
        }

        /* Hover on Input */
        input:hover {
            background: var(--input-hovered-color);
        }

        input:focus {
            outline: none;
        }

        /* here is code of animated border */
        input:focus~.input-border {
            width: 100%;
        }

        /* === if you want to do animated border on typing === */
        /* remove input:focus code and uncomment below code */
        /* input:valid ~ .input-border{
  width: 100%;
} */




        .checkbox-wrapper input[type="checkbox"] {
            display: none;
        }

        .checkbox-wrapper .terms-label {
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .checkbox-wrapper .terms-label .label-text {
            margin-left: 10px;
        }

        .checkbox-wrapper .checkbox-svg {
            width: 20px;
            height: 20px;
        }

        .checkbox-wrapper .checkbox-box {
            fill: #fff;
            stroke: #FF7200;
            stroke-dasharray: 800;
            stroke-dashoffset: 800;
            transition: stroke-dashoffset 0.6s ease-in;
        }

        .checkbox-wrapper .checkbox-tick {
            stroke: #FF7200;
            stroke-dasharray: 172;
            stroke-dashoffset: 172;
            transition: stroke-dashoffset 0.6s ease-in;
        }

        .checkbox-wrapper input[type="checkbox"]:checked+.terms-label .checkbox-box,
        .checkbox-wrapper input[type="checkbox"]:checked+.terms-label .checkbox-tick {
            stroke-dashoffset: 0;
        }
    </style>

    {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
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

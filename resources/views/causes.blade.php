@extends('layouts.app')

@section('content')
<section class="header-widget-sidebar close-sidebar">
    <div class="wrapper-box">
        <div class="content-wrapper">
            <div class="header-widget-sidebar-close"><span class="far fa-times"></span></div>
            <div class="about-widget widget">
                <div class="logo"><img src="assets/images/logo-light.png" alt=""></div>
                <div class="text"></div>
            </div>
            <div class="footer-widget-item recent-news-widget widget">
                <h4>Instagram </h4>
                <div class="footer-widget-news">
                    <ul>
                        <li>
                            <div class="img-box">
                                <img src="assets/images/resource/footer-1.jpg" alt="">
                            </div>

                            <div class="text-box">
                                <p><span class="far fa-calendar-alt"></span>24th January
                                    2021</p>
                                <h6><a href="blog-details.html">We can build anything ni <br>hill ground or
                                        building.</a></h6>
                            </div>
                        </li>

                        <li>
                            <div class="img-box">
                                <img src="assets/images/resource/footer-2.jpg" alt="">
                            </div>

                            <div class="text-box">
                                <p><span class="far fa-calendar-alt"></span>24th January
                                    2021</p>
                                <h6><a href="blog-details.html">We can build anything ni <br>hill ground or
                                        building.</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget contact-widget">
                <div class="footer-widget-item">
                    <div class="title">
                        <h2>About Us</h2>
                    </div>
                    <div class="our-info">
                        <div class="text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusanum doloremue laudantiue totame</p>
                        </div>
                    </div>
                    <div class="icon-list">
                        <ul>
                            <li>
                                <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                <div class="text-location">4486 Richards Avenue, Modesto CA - 95354</div>
                            </li>
                            <li>
                                <div class="icon"><i class="far fa-envelope"></i></div>
                                <div class="text"><a href="email:hotline@gmail.com">hotline@gmail.com</a> </div>
                            </li>
                            <li>
                                <div class="icon"><i class="far fa-phone"></i></div>
                                <div class="text"><a href="tel:+012(345)6789">+012 (345) 6789</a> </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main serrch -->
<div id="header-main-search" class="header-main-search">
    <div class="close-search primary_btn"><i class="far fa-times"></i></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Type & Enter" required >
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Start Breadcrumb Section One-->
<section class="page-title" style="background-image: url(assets/images/resource/bg-page-title.jpg);">
    <div class="theme_container">
        <div class="content-box">
            <div class="shape"><img src="assets/images/resource/star-icon-2.png" alt=""></div>
            <div class="shape-two"><img src="assets/images/resource/page-title-1.png" alt=""></div>
            <div class="shape-three"><img src="assets/images/resource/icon-3.png" alt=""></div>
            <div class="content-wrapper">
                <div class="title">
                    <h1>Dona</h1>
                </div>
                <ul class="bread-crumb">
                    <li><a href="index.html">acceuil</a></li>
                    <li>Dona</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Section One-->

<!-- donation section -->
<section class="donation-section">
    <div class="theme_container">
        <div class="title-box text-center">
            <div class="sub-title mb-20"><span class="title-sep-left"><img src="assets/images/resource/icon-4.png" alt=""></span>Causes populaires<span class="title-sep-right"><img src="assets/images/resource/icon-4.png" alt=""></span></div>
            <h2 class="sec-title">Comment aider les gens <br> pur la bonne cause </h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                        <img src="assets/images/resource/charity.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#f74f22" data-bgColor="none" data-width="75" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="75" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Education</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Aidez à Nourrir les Enfants de l'Orphelinat de Bouake</h4>
                        <ul>
                            <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-4.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#65c9bb" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Medicale</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Urgence Médicale : Sauvez des Vies en Fournissant des Soins de Santé Essentiels aux Communautés Vulnérables.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">Donation<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-3.jpg" alt="">

                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffac00" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Logement</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Ensemble, Construisons des Maisons et de l'Espoir pour les Sans-Abris : Soutenez notre Projet de Logement.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">Donation<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#e400ff" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Famine</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Luttons Contre la Faim et la Malnutrition : Donnez une Chance à chaque Enfant de Grandir en Bonne Santé.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">Donation<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-2.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#0006ff" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Eau potable</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Fournissez de l'Eau Potable aux Communautés Désertiques : L'accès à l'Eau est un Droit Fondamental.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-3.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#f74f22" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Electrification</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Soutenez notre Projet d'Électrification Rurale : L'Énergie pour le Développement Durable</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-4.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#f74f22" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Medicale</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Offrez de l'Espoir aux Personnes Atteintes de Maladies Graves : Contribuez à la Recherche Médicale.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">Faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-3.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#ffac00" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Education</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Éduquez une Génération d'Enfants Défavorisés : Soutenez l'Éducation pour un Avenir Meilleur.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                    <img src="assets/images/resource/charity-3.jpg" alt="">
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#65c9bb" data-bgColor="none" data-width="76" data-height="75" data-linecap="normal" value="75">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="76" data-speed="2000"></span><span
                                        class="count-Parsent">%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Refugie</h4>
                                <div class="text">Objectif<span class="crl4"> 500.000 f</span></div>

                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>Aidez les Réfugiés à Retrouver un Toit et une Vie Normale : Participez à notre Campagne de Réinstallation.</h4>
                        <ul>
                        <li>Objectif<span>500.000 f</span></li>
                            <li>collecte<span class="crl2">500.000 f</span></li>
                            <li>reste<span class="crl3"> 500.000 f</span></li>
                        </ul>
                        <a href="#" class="primary_btn s-two donate_button">faire un dona<i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner section -->
<section class="partner style-seven">
    <div class="theme_container">
        <div class="five-item-carousel owl-theme owl-carousel">

            <!--Start Brand block Two-->
            <div class="brand-block-two">
                <a href="#"><img src="assets/images/resource/cta-6.png" alt="Awesome Image"></a>
                <div class="overlay-box">
                    <a href="#"><img src="assets/images/resource/cta.png" alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Brand block Two-->
            <!--Start Brand block Two-->
            <div class="brand-block-two">
                <a href="#"><img src="assets/images/resource/cta-7.png" alt="Awesome Image"></a>
                <div class="overlay-box">
                    <a href="#"><img src="assets/images/resource/cta-2.png" alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Brand block Two-->
            <!--Start Brand block Two-->
            <div class="brand-block-two">
                <a href="#"><img src="assets/images/resource/cta-8.png" alt="Awesome Image"></a>
                <div class="overlay-box">
                    <a href="#"><img src="assets/images/resource/cta-3.png" alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Brand block Two-->
            <!--Start Brand block Two-->
            <div class="brand-block-two">
                <a href="#"><img src="assets/images/resource/cta-9.png" alt="Awesome Image"></a>
                <div class="overlay-box">
                    <a href="#"><img src="assets/images/resource/cta-4.png" alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Brand block Two-->
            <!--Start Brand block Two-->
            <div class="brand-block-two">
                <a href="#"><img src="assets/images/resource/cta-10.png" alt="Awesome Image"></a>
                <div class="overlay-box">
                    <a href="#"><img src="assets/images/resource/cta-5.png" alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Brand block Two-->
        </div>
    </div>
</section>


<!-- start footer conter section -->
<div class="section-footer-counter-section">
    <div class="theme_container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-counter-block">
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="3000" data-stop="25360">0</span><span class="plus">+</span>
                        <span class="crl3">DON</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="donation-form-one-form-wrap s-two">
                    <ul class="donation-form-one-form-wrap-ul donate_form_amount_wrap">
                        <li class="donation-form-one-price-value" data-dollars='1000'>1000fr</li>
                        <li class="donation-form-one-price-value" data-dollars='500'>1000fr</li>
                        <li class="donation-form-one-price-value" data-dollars='100'>5001000fr</li>
                        <li class="donation-form-one-price-value" data-dollars='25'>251000fr</li>
                        <li class="other-input"></li>
                    </ul>
                    <div class="donation-form-one-submit-btn"><button class="primary_btn-one donate_button" type="submit">Donation<i class="far fa-heart"></i></button></div>
                </div>
                <div class="donate-fomr-popup donate-form-s-one">
                    <div class="donate-fomr-popup-outer">
                        <div class="donate-fomr-popup-inner">
                            <div class="donate-fomr-popup-close"><i class="fas fa-times"></i></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Donating Amount</h3>
                                </div>
                                <div class="donate-price-wrap">$<span class="donate-price"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Personal Information</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="bodyTest">
                                                <form class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- first name input-->
                                                            <div class="form-group">
                                                                <div class="">
                                                                    <input id="first-name" name="firstname" type="text" autocomplete="first-name" placeholder="name" class="form-control">
                                                                    <p class="help-block"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class=" ">
                                                                    <input id="address-line1" name="address" type="text" autocomplete="address" placeholder="address" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- last name input-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="control-group">
                                                                <div class="">
                                                                    <input id="city" name="city" type="text" autocomplete="address-level2" placeholder="city" class="form-control">
                                                                    <p class="help-block"></p>
                                                                </div>
                                                            </div>
                                                            <!-- region input-->
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="control-group">
                                                                <div class="">
                                                                    <input id="postal-code" name="postal-code" type="text" autocomplete="postal-code" placeholder="zip or postal code" class="form-control">
                                                                    <p class="help-block"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Payment Details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" id="payment-form">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required="" autofocus="" data-stripe="number">
                                                        <span class="input-group-block">
                                                            <i class="fa fa-credit-card"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="expMonth" placeholder="MM" required="" data-stripe="exp_month">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="expYear" placeholder="YY" required="" data-stripe="exp_year">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="cvCode" placeholder="CV" required="" data-stripe="cvc">
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="primary_btn" type="submit">Donate Now <i class="far fa-heart"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row" style="display:none;">
                                                    <div class="col-xs-12">
                                                        <p class="payment-errors"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

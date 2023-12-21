@extends('layouts.app')

@section('content')
<style>
    .buttonc {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 22px 20px 25px;
  box-shadow: rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  background-color: #e8e8e8;
  border-color: #ffe2e2;
  border-style: solid;
  border-width: 9px;
  border-radius: 35px;
  font-size: 25px;
  font-weight: 900;
  color: rgb(134, 124, 124);
  font-family: monospace;
  transition: transform 400ms cubic-bezier(.68,-0.55,.27,2.5),
  border-color 400ms ease-in-out,
  background-color 400ms ease-in-out;
  word-spacing: -2px;
}

@keyframes movingBorders {
  0% {
    border-color: #fce4e4;
  }

  50% {
    border-color: #ffd8d8;
  }

  90% {
    border-color: #fce4e4;
  }
}

.buttonc:hover {
  background-color: #eee;
  transform: scale(105%);
  animation: movingBorders 3s infinite;
}

.buttonc svg {
  fill: rgb(255, 110, 110);
  margin-left: 13px;
}

@keyframes beatingHeart {
  0% {
    transform: scale(1);
  }

  15% {
    transform: scale(1.15);
  }

  30% {
    transform: scale(1);
  }

  45% {
    transform: scale(1.15);
  }

  60% {
    transform: scale(1);
  }
}

.buttonc:hover svg {
  transform: scale(105%);
  border-color: #ffd8d8;
  animation: beatingHeart 1.2s infinite;
}
</style>
    <!--Start Banner Section One -->
    <section class="banner-section-one banner_style_one">
        <div class="banner-section-one-carousel owl-carousel owl-theme">

            <div class="banner-block-one">

                <div class="banner-image-shape"><img src="" alt=""></div>
                <div class="image-layer" style="background-image:url(assets/images/noe.jpg);background-position:center;background-size:contain;background-repeat:no-repeat">
                </div>

                <div class="theme_container">
                    <div class="content-box">
                        <div class="inner-box">
                            <h6 class="banner-slider-sub-title mb-30"><span class="title-sep-left"><img
                                        src="assets/images/resource/icon-11.png" alt=""></span>Bienvenue sur Dona
                            </h6>
                            <h2 class="banner-slider-title mb-30">Faites <br> parler votre <br>Coeur</h2>
                            <div class="banner-slde-btn">
                                <button class="buttonc donate_button">
                                    Faire une Dona
                                    <svg height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0H24V24H0z" fill="none"></path><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path></svg>
                                  </button>

                                {{-- <a href="donate.html" class="primary_btn style-seven">Faire une
                                    Don<i class="far fa-heart"></i></a> --}}
                                </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="banner-block-one">
                <div class="image-layer" style="background-image:url(assets/images/rentre.jpg);background-position:center;background-size:contain;background-repeat:no-repeat">
                </div>
                <div class="theme_container">
                    <div class="content-box">
                        <div class="inner-box">
                            <h6 class="banner-slider-sub-title mb-30"><span class="title-sep-left"><img
                                        src="assets/images/resource/icon-11.png" alt=""></span>Bienvenue sur Dona
                            </h6>

                            <h2 class="banner-slideritle mb-30" style="color: white">Offrez un nouveau départ <br>
                                Faites briller l'avenir  <br>d'un enfant</h2>
                            <div class="banner-slider-btn">

                                <a href="#" class="primary_btn style-seven donate_button">Faire une Dona<i
                                        class="far fa-heart"></i></a>

                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section One -->

    <section class="cta">
        <div class="bg" style="background-image: url(assets/images/background/map.png);"></div>
        <div class="theme_container">

            <div class="cta-text text-center mb-40"><span>Des petits</span> Dons <span>pour</span> de Grand
                <span>Impact</span></div>
            <div class="text text-center mb-35">contribuer facilement à des causes qui vous tiennent à cœur</div>
            <div class="inner-box">
                <div class="link-btn"><a href="causes" class="primary_btn-one">Voir toutes les causes<i
                            class="far fa-heart"></i></a></div>

                <div class="contact-info">
                    <div class="icon"><i class="flaticon-phone"></i></div>
                    <div class="contact-number">
                        <div class="number">Contact <br><a href="tel:+012(345)6789"><span>+225 07 88 36 4403</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!--  Causes Section -->
            <section class="causes">
                <div class="theme_container">
                    <div class="title-box">
                        <div class="sub-title mb-20"><span class="title-sep-left"><img src="assets/images/resource/icon-4.png"
                                    alt=""></span>Causes Populaires</div>
                        <h2 class="sec-title mb-56">Faites un simple Don <br> et impacter une vie</h2>
                        <div class="cause-carousel-nav-btn carousel-nav-btn-s-1 owl-nav-s-1">
                            <a href="#" class="carousel-nav-btn-s-1-prev carousel-nav-btn-s-1-prev1"><i
                                    class="fa fa-angle-left"></i></a>
                            <a href="#" class="carousel-nav-btn-s-1-next carousel-nav-btn-s-1-next1"><i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="causes-item-carousel owl-carousel owl-theme">
                        <div class="column">
                            <div class="causes-block">
                                <div class="image">
                                    <img src="assets/images/resource/charity.jpg" alt="">
                                    <div class="progress-wrap">
                                        <div class="progress-box">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#f74f22"
                                                        data-bgColor="none" data-width="75" data-height="75"
                                                        data-linecap="normal" value="83">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="83"
                                                            data-speed="2000"></span><span class="count-Parsent">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4>Education</h4>
                                            <div class="text">Collecté<span class="crl4"> 500.000 f</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4>Donner pour l'éducation des enfants defavorisés de donakro pour un avenir meilleur</h4>
                                    <ul>
                                        <li>Objectif<span>500.000 f</span></li>
                                        <li>Collecté<span class="crl2">500.000 f</span></li>
                                        <li>Reste<span class="crl3"> 500.000 <fieldset></fieldset></span></li>
                                    </ul>
                                    <a href="#" class="primary_btn s-two donate_button">Dona<i
                                            class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="causes-block">
                                <div class="image">
                                    <img src="assets/images/resource/charity-2.jpg" alt="">
                                    <div class="progress-wrap">
                                        <div class="progress-box">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#65c9bb"
                                                        data-bgColor="none" data-width="75" data-height="75"
                                                        data-linecap="normal" value="76">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="76"
                                                            data-speed="2000"></span><span class="count-Parsent">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4>Alimentation</h4>
                                            <div class="text">Collecté<span class="crl5">1.500.000 f</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4>Aidez à Nourrir les Enfants de l'Orphelinat de Bouake</h4>
                                    <ul>
                                        <li>Objectif<span>2.000.000 f</span></li>
                                        <li>Collecté<span class="crl2">1.500.000 f</span></li>
                                        <li>Reste<span class="crl3"> 500.000 f</span></li>
                                    </ul>
                                    <a href="#" class="primary_btn s-two donate_button">Dona<i
                                            class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="causes-block">
                                <div class="image">
                                    <img src="assets/images/resource/charity-3.jpg" alt="">
                                    <div class="progress-wrap">
                                        <div class="progress-box">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#ffac00"
                                                        data-bgColor="none" data-width="75" data-height="75"
                                                        data-linecap="normal" value="83">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="83"
                                                            data-speed="2000"></span><span class="count-Parsent">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4>Eau Potable</h4>
                                            <div class="text">Collecte<span class="crl6"> 1.500.000 f</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4>Soutenez l'Accès à l'Eau Potable dans les Régions du nord</h4>
                                    <ul>
                                        <li>Objectif<span>2.000.000 f</span></li>
                                        <li>Collecté<span class="crl2">1.500.000 f</span></li>
                                        <li>Reste<span class="crl3"> 500.000 f</span></li>
                                    </ul>
                                    <a href="#" class="primary_btn s-two donate_button">Dona<i
                                            class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="causes-block">
                                <div class="image">
                                    <img src="assets/images/resource/charity-4.jpg" alt="">
                                    <div class="progress-wrap">
                                        <div class="progress-box">
                                            <div class="inner-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#f74f22"
                                                        data-bgColor="none" data-width="75" data-height="75"
                                                        data-linecap="normal" value="75">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="75"
                                                            data-speed="2000"></span><span class="count-Parsent">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4>Education</h4>
                                            <div class="text">Raised<span class="crl7"> $256</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4>Raise Hand To The Poor Children Education For Better Future</h4>
                                    <ul>
                                        <li>Goal<span>$34562</span></li>
                                        <li>Raise<span class="crl2">$562</span></li>
                                        <li>To Go<span class="crl3"> $864</span></li>
                                    </ul>
                                    <a href="#" class="primary_btn s-two donate_button">Donation<i
                                            class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                <center>
                    <a href="/public/causes" class="primary_btn s-two donate_button">Voir toutes les causes<i
                        class="far fa-heart"></i></a>
                </center>
                </div>
            </section>


               <!-- donar section -->
    <section class="donar">
        <div class="theme_container">
            <div class="logo"><img src="assets/images/resource/icon-5.png" alt=""></div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="donar-block">
                        <div class="sub-title mb-20 s-two"><span class="title-sep-left"><img
                                    src="assets/images/resource/icon-6.png" alt=""></span>Parainer un enfant</div>
                        <h2 class="sec-title s-two mb-30">Faites briller l'avenir d'un enfant</h2>
                        <div class="bottom">
                            {{-- <form class="about-section-two-form">
                                <div class="about-section-two-input-box">
                                    <input type="email" placeholder="Votre Email" name="email">
                                </div>
                            </form> --}}
                        </div>
                        <div class="project-form s-two">
                            <ul class="donation-amount">
                                <li class="donation-form-one-price-value" data-dollars='1000'>100 000 F</li>
                                <li class="donation-form-one-price-value" data-dollars='500'>50 000 F</li>
                                <li class="donation-form-one-price-value" data-dollars='100'>30 000 F</li>
                                <li class="donation-form-one-price-value" data-dollars='25'>15 000 F</li>
                                <li class="other-input"></li>
                            </ul>
                            <div class="from-button"><button class="primary_btn-one donate_button">Faire une dona<i
                                        class="far fa-heart"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="image" style="height: 100%"><img src="assets/images/enf.jpg" style="height:100%" alt=""></div>

                </div>
            </div>
        </div>
    </section>


    <!-- section about -->
    <section class="about">
        <div class="top-title text-center">
            {{-- <div class="wow slideInUp animated" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="count-outer count-box">
                    <span class="plus">+</span><span class="count-text" data-speed="3000" data-stop="100">0</span>
                    <span>Partenaires de confiance</span>
                </div>
            </div> --}}
        </div>
        <div class="logo"><img src="assets/images/resource/icon-3.png" alt=""></div>
        <div class="theme_container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="block-one">
                        <div class="image"><img src="assets/images/resource/about.jpg" alt=""></div>
                        <div class="image-two"><img src="assets/images/resource/icon.png" alt=""></div>
                        <div class="image-three"><img src="assets/images/resource/icon-2.png" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="block-two">
                        <div class="sub-title mb-20">
                            <span class="title-sep-left"><img src="assets/images/resource/icon-4.png"
                                    alt=""></span>Apropos de nous
                        </div>


                        <h3 class="sec-tite mb-20">Donner pour Faire la Différence<br> Avec Dona votre Générosité a un
                            Impact </h3>
                        <div class="text">Dona est une plateforme de dons en ligne qui vise à révolutionner la
                            philanthropie en offrant un processus de don transparent et sécurisé. Grâce à notre intégration
                            avec MTN Mobile Money, nous garantissons des transactions fiables tout en vous permettant de
                            suivre en temps réel l'impact de votre générosité. </div>
                        <div class="icon-list">
                            <ul>
                                <li><i class="fas fa-check"></i>Dons pour l'Éducation</li>
                                <li><i class="fas fa-check"></i>Dons pour l'Alimentation </li>
                                <li><i class="fas fa-check"></i>Dons p soins Médicaux</li>
                                <li><i class="fas fa-check"></i>Et pour bien d'autres...</li>
                            </ul>
                        </div>
                        <div class="inner-box">
                            <div class="link-btn">
                                <a href="/public/causes" class="primary_btn">Voir les causes<i class="far fa-heart"></i></a>
                            </div>
                            <div class="contact-info">
                                <div class="icon"><i class="flaticon-phone"></i></div>
                                <div class="contact-number">
                                    <div class="number">Contact <br> <a href="tel:+0123456789"><span>+225 (07)
                                                88364403</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- features section -->
    {{-- <section class="features pt-0">
        <div class="bg" style="background-image:url(assets/images/background/child.jpg);"></div>
        <div class="theme_container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="features-block">
                        <div class="icon-box"><i class="flaticon-fruit"></i></div>
                        <div class="content">
                            <h4>Pure Food & Water</h4>
                            <div class="text">Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</div>
                            <a href="about.html" class="button">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-block">
                        <div class="icon-box s-two"><i class="flaticon-medicine"></i></div>
                        <div class="content">
                            <h4>Health & Medicine</h4>
                            <div class="text">Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</div>
                            <a href="about.html" class="button">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-block">
                        <div class="icon-box style-three"><i class="flaticon-education"></i></div>
                        <div class="content">
                            <h4>Child Education</h4>
                            <div class="text">Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</div>
                            <a href="about.html" class="button">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-block">
                        <div class="icon-box style-four"><i class="flaticon-house"></i></div>
                        <div class="content">
                            <h4>Charity For Live</h4>
                            <div class="text">Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</div>
                            <a href="about.html" class="button">Read More<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    <!-- gallery section -->
    <section class="gallery">
        <div class="theme_container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="gallery-block">
                        <div class="image"><img src="assets/images/resource/Child.jpg" alt=""></div>
                        {{-- <div class="inner-box">
                            <h4><a href="our-mission.html">Happy Child Group</a></h4>
                            <div class="text">Carity Fund</div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 flex-box-one">
                    <div class="gallery-block">
                        <div class="image"><img src="assets/images/noel1.jpg" alt=""></div>
                        {{-- <div class="inner-box">
                            <h4><a href="our-mission.html">Happy Child Group</a></h4>
                            <div class="text">Carity Fund</div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="gallery-block">
                        <div class="image"><img src="assets/images/noel2.jpg" alt=""></div>
                        {{-- <div class="inner-box">
                            <h4><a href="our-mission.html">Happy Child Group</a></h4>
                            <div class="text">Carity Fund</div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="gallery-block">
                        <div class="image"><img src="assets/images/noel3.jpg" alt=""></div>
                        {{-- <div class="inner-box">
                            <h4><a href="our-mission.html">Happy Child Group</a></h4>
                            <div class="text">Carity Fund</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner section -->
    {{-- <section class="partner">
        <div class="bg" style="background-image: url(assets/images/background/cta.jpg);"></div>
        <div class="theme_container">
            <div class="five-item-carousel owl-theme owl-carousel">

                <div class="image"><img src="assets/images/resource/cta.png" alt=""></div>
                <div class="image"><img src="assets/images/resource/cta-2.png" alt=""></div>
                <div class="image"><img src="assets/images/resource/cta-3.png" alt=""></div>
                <div class="image"><img src="assets/images/resource/cta-4.png" alt=""></div>
                <div class="image"><img src="assets/images/resource/cta-5.png" alt=""></div>

            </div>
        </div>
    </section> --}}

    <!-- testimonial section -->
    <section class="testimonial">
        <div class="theme_container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="inner-container">
                        <div class="sub-title mb-20"><span class="title-sep-left"><img
                                    src="assets/images/resource/icon-4.png" alt=""></span>
                                    Nos témoignages</div>
                        <h2 class="sec-title text-light">Ce que les gens disent
                             <br> de nous</h2>
                        <div class="testimonial-area">
                            <div class="one-item-carousel owl-theme owl-carousel owl-dot-s-1">
                                <div class="testimonial-block">
                                    <div class="icon"><i class="flaticon-quote"></i></div>
                                    <div class="text">J'ai découvert un site de dons lorsque j'ai cherché un moyen de venir en aide à des familles dans le besoin. J'ai été impressionné par la simplicité du processus. J'ai pu choisir des campagnes auxquelles je voulais contribuer, faire un don en ligne, et voir comment mon argent était utilisé pour aider des personnes dans le besoin. C'était gratifiant de savoir que mon soutien faisait une réelle différence dans la vie des autres. Je continuerai à utiliser ce site pour donner et aider autant que possible.</div>
                                    <div class="author-info">
                                        <div class="author-thumb"><img src="assets/images/resource/test.png"
                                                alt=""></div>
                                        <div class="author-content">
                                            <div class="name">ATTITSO JEOL</div>
                                            <div class="designation">CEO d'univers 10</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="testimonial-block">
                                    <div class="icon"><i class="flaticon-quote"></i></div>
                                    <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium dolorem laudantiums totam aperiam eaqupsa inventore </div>
                                    <div class="author-info">
                                        <div class="author-thumb"><img src="assets/images/resource/test.png"
                                                alt=""></div>
                                        <div class="author-content">
                                            <div class="name">Steven M. Robinson</div>
                                            <div class="designation">Business Manager</div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 image-column" style="background-image: url(assets/images/resource/Child.jpg);">
                    <div class="image"><img src="assets/images/resource/Child.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- funfact section -->
    <section class="funfact">
        <div class="theme_container">
            <div class="row">
                <!--Start Counter block One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-block-one">
                        <div class="count-outer count-box">
                            <div class="icon"><i class="flaticon-charity"></i></div>
                            <span class="count-text" data-speed="3000" data-stop="10">0</span><span
                                class="plus">+</span>
                            <div class="text">
                                <p>Projet terminé</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Counter block One-->
                <!--Start Counter block One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-block-one">
                        <div class="count-outer count-box">
                            <div class="icon"><i class="flaticon-volunteer"></i></div>
                            <span class="count-text" data-speed="3000" data-stop="20">0</span><span
                                class="plus">+</span>
                            <div class="text">
                                <p>Bénévole</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Counter block One-->
                <!--Start Counter block One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-block-one">
                        <div class="count-outer count-box">
                            <div class="icon"><i class="flaticon-debit-card"></i></div>
                            <span class="count-text" data-speed="3000" data-stop="5">0</span><span
                                class="plus">+</span>
                            <div class="text">
                                <p>Partenaires</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Counter block One-->
                <!--Start Counter block One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-block-one">
                        <div class="count-outer count-box">
                            <div class="icon"><i class="flaticon-solidarity"></i></div>
                            <span class="count-text" data-speed="3000" data-stop="5000000">0</span><span
                                class="plus"> F+</span>
                            <div class="text">
                                <p>Levé de don</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Counter block One-->
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
                            <span class="count-text" data-speed="3000" data-stop="5000000">0</span><span
                                class="plus"> F+</span>
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
                        <div class="donation-form-one-submit-btn"><button class="primary_btn-one donate_button"
                                type="submit">Donation<i class="far fa-heart"></i></button></div>
                    </div>
                    <div class="donate-fomr-popup donate-form-s-one">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

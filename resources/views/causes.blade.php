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

<!-- donation section -->
<section class="donation-section">
    <div class="theme_container">
        <div class="title-box text-center">
            <div class="sub-title mb-20"><span class="title-sep-left"><img src="assets/images/resource/icon-4.png" alt=""></span>Causes populaires<span class="title-sep-right"><img src="assets/images/resource/icon-4.png" alt=""></span></div>
            <h2 class="sec-title">Un geste <br> et changer une vie </h2>
        </div>
        <div class="row">
            @foreach ($causes as $cause)
            <div class="col-lg-4">
                <div class="causes-block s-two">
                    <div class="image">
                        <a href="/causes/{{$cause->id}}">
                            <img style="height: 300px" src="storage/{{$cause->photo}}" alt="">
                        </a>
                        <div class="progress-wrap">
                            <div class="progress-box">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#f74f22"
                                            data-bgColor="none" data-width="75" data-height="75"
                                            data-linecap="normal" value="{{(intVal($cause->collecte)/intVal($cause->objectif)*100)}}">
                                        <div class="inner-text count-box"><span class="count-text" data-stop="{{round((intVal($cause->collecte)/intVal($cause->objectif)*100),0)}}"
                                                data-speed="2000"></span><span class="count-Parsent">%</span></div>
                                    </div>
                                </div>

                            </div>
                            <div class="content">
                                <h4>{{$cause->categories->libelle}}</h4>

                                <div class="text">Objectif<span class="crl4"> {{number_format(intVal($cause->objectif), 0, ' ', ' ')}} f</span></div>
                            </div>
                        </div>
                        <strong style="color: black" >{{$cause->organisations->nom}}</strong>
                    </div>
                    <div class="lower-content">
                        <a href="/causes/{{$cause->id}}"> <h4>{{$cause->libelle}}</h4></a>
                         <ul>
                             <li>Objectif<span>{{number_format($cause->objectif, 0, ' ', ' ')}} f</span></li>
                             <li>Collecté<span class="crl2">{{number_format($cause->collecte??0, 0, ' ', ' ')}} f</span></li>
                             <li>Reste<span class="crl3"> {{number_format(intVal($cause->objectif)-intVal($cause->collecte), 0, ' ', ' ')}} f <fieldset></fieldset></span></li>
                         </ul>
                         <center><a style="cursor: pointer" onclick="show({{$cause}})"  class="primary_btn s-two  menu-bar sidemenu-nav-toggler">Dona<i
                             class="far fa-heart"></i></a></center>
                     </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

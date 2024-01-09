@extends('layouts.app')

@section('content')
    <!-- Donation Detalis Section -->
    <section class="donation-detalis-section">
        <div class="theme_container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="donation-detalis-block">
                        <h5>{{ $cause->libelle }}</h5>
                        <div class="image"><img src="{{ asset("storage/$cause->photo") }}" style="height: 300px"
                                alt=""></div>
                        <div class="text">{!! $cause->description !!}</div>
                        <!-- counter block start -->
                        <div class="counter-block-three-single style-seven">
                            <h4 class="title">Collecté<span>{{number_format(intVal($cause->collecte), 0, ' ', ' ')}} f</span></h4>
                            <div class="bar">
                                <div class="count-text clr3">{{round((intVal($cause->collecte)/intVal($cause->objectif)*100),0)}}%
                                </div>
                                <div class="bar-inner bg4 count-bar"
                                    data-percent="{{ (intVal($cause->collecte) / intVal($cause->objectif)) * 100 }}%"> </div>
                            </div>
                            <ul>
                                <li>Objectif<span class="crl4"> {{number_format(intVal($cause->objectif), 0, ' ', ' ')}} f</span></li>
                                <li>Collecté<span class="crl2">{{number_format(intVal($cause->collecte), 0, ' ', ' ')}} f</span></li>
                                <li>Reste<span class="crl3"> {{ number_format(intVal($cause->objectif) - intVal($cause->collecte), 0, ' ', ' ') }}
                                        f</span></li>
                            </ul>
                        </div>
                        <center>
                            <a style="cursor: pointer;margin-bottom:50px" id="dona" onclick="show({{ $cause }})"
                                class="primary_btn s-two menu-bar sidemenu-nav-toggler" style="margin-top: 50px">Faire un
                                Don<i class="far fa-heart"></i></a>
                        </center>
                        <center style="display: fle;alt:enter; margin-bottom:180px">
                            <div >
                                <div class="card" id="qrimg" style="position: relative">
                                    <div class="card__img">
                                        <img src="{{ asset("storage/$cause->photo") }}" alt="">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%"><rect fill="#ffffff" width="540" height="450"></rect><defs><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="0" y1="0" y2="100%" gradientTransform="rotate(222,648,379)"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#FC726E"></stop></linearGradient><pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250" x="0" y="0" viewBox="0 0 1080 900"><g fill-opacity="0.5"><polygon fill="#444" points="90 150 0 300 180 300"></polygon><polygon points="90 150 180 0 0 0"></polygon><polygon fill="#AAA" points="270 150 360 0 180 0"></polygon><polygon fill="#DDD" points="450 150 360 300 540 300"></polygon><polygon fill="#999" points="450 150 540 0 360 0"></polygon><polygon points="630 150 540 300 720 300"></polygon><polygon fill="#DDD" points="630 150 720 0 540 0"></polygon><polygon fill="#444" points="810 150 720 300 900 300"></polygon><polygon fill="#FFF" points="810 150 900 0 720 0"></polygon><polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon><polygon fill="#444" points="990 150 1080 0 900 0"></polygon><polygon fill="#DDD" points="90 450 0 600 180 600"></polygon><polygon points="90 450 180 300 0 300"></polygon><polygon fill="#666" points="270 450 180 600 360 600"></polygon><polygon fill="#AAA" points="270 450 360 300 180 300"></polygon><polygon fill="#DDD" points="450 450 360 600 540 600"></polygon><polygon fill="#999" points="450 450 540 300 360 300"></polygon><polygon fill="#999" points="630 450 540 600 720 600"></polygon><polygon fill="#FFF" points="630 450 720 300 540 300"></polygon><polygon points="810 450 720 600 900 600"></polygon><polygon fill="#DDD" points="810 450 900 300 720 300"></polygon><polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon><polygon fill="#444" points="990 450 1080 300 900 300"></polygon><polygon fill="#222" points="90 750 0 900 180 900"></polygon><polygon points="270 750 180 900 360 900"></polygon><polygon fill="#DDD" points="270 750 360 600 180 600"></polygon><polygon points="450 750 540 600 360 600"></polygon><polygon points="630 750 540 900 720 900"></polygon><polygon fill="#444" points="630 750 720 600 540 600"></polygon><polygon fill="#AAA" points="810 750 720 900 900 900"></polygon><polygon fill="#666" points="810 750 900 600 720 600"></polygon><polygon fill="#999" points="990 750 900 900 1080 900"></polygon><polygon fill="#999" points="180 0 90 150 270 150"></polygon><polygon fill="#444" points="360 0 270 150 450 150"></polygon><polygon fill="#FFF" points="540 0 450 150 630 150"></polygon><polygon points="900 0 810 150 990 150"></polygon><polygon fill="#222" points="0 300 -90 450 90 450"></polygon><polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon><polygon fill="#FFF" points="180 300 90 450 270 450"></polygon><polygon fill="#666" points="180 300 270 150 90 150"></polygon><polygon fill="#222" points="360 300 270 450 450 450"></polygon><polygon fill="#FFF" points="360 300 450 150 270 150"></polygon><polygon fill="#444" points="540 300 450 450 630 450"></polygon><polygon fill="#222" points="540 300 630 150 450 150"></polygon><polygon fill="#AAA" points="720 300 630 450 810 450"></polygon><polygon fill="#666" points="720 300 810 150 630 150"></polygon><polygon fill="#FFF" points="900 300 810 450 990 450"></polygon><polygon fill="#999" points="900 300 990 150 810 150"></polygon><polygon points="0 600 -90 750 90 750"></polygon><polygon fill="#666" points="0 600 90 450 -90 450"></polygon><polygon fill="#AAA" points="180 600 90 750 270 750"></polygon><polygon fill="#444" points="180 600 270 450 90 450"></polygon><polygon fill="#444" points="360 600 270 750 450 750"></polygon><polygon fill="#999" points="360 600 450 450 270 450"></polygon><polygon fill="#666" points="540 600 630 450 450 450"></polygon><polygon fill="#222" points="720 600 630 750 810 750"></polygon><polygon fill="#FFF" points="900 600 810 750 990 750"></polygon><polygon fill="#222" points="900 600 990 450 810 450"></polygon><polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon><polygon fill="#444" points="180 900 270 750 90 750"></polygon><polygon fill="#FFF" points="360 900 450 750 270 750"></polygon><polygon fill="#AAA" points="540 900 630 750 450 750"></polygon><polygon fill="#FFF" points="720 900 810 750 630 750"></polygon><polygon fill="#222" points="900 900 990 750 810 750"></polygon><polygon fill="#222" points="1080 300 990 450 1170 450"></polygon><polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon><polygon points="1080 600 990 750 1170 750"></polygon><polygon fill="#666" points="1080 600 1170 450 990 450"></polygon><polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon></g></pattern></defs><rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect><rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect></svg> --}}
                                    </div>
                                    <div class="card__avatar" id="qrcode">
                                        {{-- <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><circle cx="64" cy="64" fill="#ff8475" r="60"></circle><circle cx="64" cy="64" fill="#f85565" opacity=".4" r="48"></circle><path d="m64 14a32 32 0 0 1 32 32v41a6 6 0 0 1 -6 6h-52a6 6 0 0 1 -6-6v-41a32 32 0 0 1 32-32z" fill="#7f3838"></path><path d="m62.73 22h2.54a23.73 23.73 0 0 1 23.73 23.73v42.82a4.45 4.45 0 0 1 -4.45 4.45h-41.1a4.45 4.45 0 0 1 -4.45-4.45v-42.82a23.73 23.73 0 0 1 23.73-23.73z" fill="#393c54" opacity=".4"></path><circle cx="89" cy="65" fill="#fbc0aa" r="7"></circle><path d="m64 124a59.67 59.67 0 0 0 34.69-11.06l-3.32-9.3a10 10 0 0 0 -9.37-6.64h-43.95a10 10 0 0 0 -9.42 6.64l-3.32 9.3a59.67 59.67 0 0 0 34.69 11.06z" fill="#4bc190"></path><path d="m45 110 5.55 2.92-2.55 8.92a60.14 60.14 0 0 0 9 1.74v-27.08l-12.38 10.25a2 2 0 0 0 .38 3.25z" fill="#356cb6" opacity=".3"></path><path d="m71 96.5v27.09a60.14 60.14 0 0 0 9-1.74l-2.54-8.93 5.54-2.92a2 2 0 0 0 .41-3.25z" fill="#356cb6" opacity=".3"></path><path d="m57 123.68a58.54 58.54 0 0 0 14 0v-25.68h-14z" fill="#fff"></path><path d="m64 88.75v9.75" fill="none" stroke="#fbc0aa" stroke-linecap="round" stroke-linejoin="round" stroke-width="14"></path><circle cx="39" cy="65" fill="#fbc0aa" r="7"></circle><path d="m64 91a25 25 0 0 1 -25-25v-16.48a25 25 0 1 1 50 0v16.48a25 25 0 0 1 -25 25z" fill="#ffd8c9"></path><path d="m91.49 51.12v-4.72c0-14.95-11.71-27.61-26.66-28a27.51 27.51 0 0 0 -28.32 27.42v5.33a2 2 0 0 0 2 2h6.81a8 8 0 0 0 6.5-3.33l4.94-6.88a18.45 18.45 0 0 1 1.37 1.63 22.84 22.84 0 0 0 17.87 8.58h13.45a2 2 0 0 0 2.04-2.03z" fill="#bc5b57"></path><path d="m62.76 36.94c4.24 8.74 10.71 10.21 16.09 10.21h5" style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1"></path><path d="m71 35c2.52 5.22 6.39 6.09 9.6 6.09h3" style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1"></path><circle cx="76" cy="62.28" fill="#515570" r="3"></circle><circle cx="52" cy="62.28" fill="#515570" r="3"></circle><ellipse cx="50.42" cy="69.67" fill="#f85565" opacity=".1" rx="4.58" ry="2.98"></ellipse><ellipse cx="77.58" cy="69.67" fill="#f85565" opacity=".1" rx="4.58" ry="2.98"></ellipse><g fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="m64 67v4" stroke="#fbc0aa" stroke-width="4"></path><path d="m55 56h-9.25" opacity=".2" stroke="#515570" stroke-width="2"></path><path d="m82 56h-9.25" opacity=".2" stroke="#515570" stroke-width="2"></path></g><path d="m64 84c5 0 7-3 7-3h-14s2 3 7 3z" fill="#f85565" opacity=".4"></path><path d="m65.07 78.93-.55.55a.73.73 0 0 1 -1 0l-.55-.55c-1.14-1.14-2.93-.93-4.27.47l-1.7 1.6h14l-1.66-1.6c-1.34-1.4-3.13-1.61-4.27-.47z" fill="#f85565"></path></svg> --}}
                                    </div>
                                    <div ><button class="card__titl">{{ $cause->libelle }}</button></div>
                                    {{-- <div class="card__subtitle">{{ $cause->organisations->nom }}</div> --}}
                                    <div class="card__wrapper">
                                        <button class="card__btn">scanner et faites parler votre coeur</button>
                                        {{-- <button class="card__btn card__btn-solid">Button</button> --}}

                                    </div>
                                    <img style="width: 100px;height:90px;position: absolute;top:50%; transform : translateY(-50%);z-index:1111111111111" src="{{ asset('assets/images/logo.png') }}"/>




                                </div>


                            </div>

                            <div class="buttons" style="margin-top:20px">
                                <button class="main-button">
                                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 5.125a3.125 3.125 0 1 1 .754 2.035l-8.397 3.9a3.124 3.124 0 0 1 0 1.88l8.397 3.9a3.125 3.125 0 1 1-.61 1.095l-8.397-3.9a3.125 3.125 0 1 1 0-4.07l8.397-3.9a3.125 3.125 0 0 1-.144-.94Z">
                                        </path>
                                    </svg>
                                </button>


                                <button class="messenger-button button"
                                    style="transition-delay: 0.3s, 0s, 0.3s; transition-property: translate, background, box-shadow;">
                                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 11.7C2 6.126 6.366 2 12 2s10 4.126 10 9.7c0 5.574-4.366 9.7-10 9.7-1.012 0-1.982-.134-2.895-.384a.799.799 0 0 0-.534.038l-1.985.877a.8.8 0 0 1-1.122-.707l-.055-1.779a.799.799 0 0 0-.269-.57C3.195 17.135 2 14.615 2 11.7Zm6.932-1.824-2.937 4.66c-.281.448.268.952.689.633l3.156-2.395a.6.6 0 0 1 .723-.003l2.336 1.753a1.501 1.501 0 0 0 2.169-.4l2.937-4.66c.283-.448-.267-.952-.689-.633l-3.156 2.395a.6.6 0 0 1-.723.003l-2.336-1.754a1.5 1.5 0 0 0-2.169.4v.001Z">
                                        </path>
                                    </svg>
                                </button>

                                <button class="instagram-button button"
                                    style="transition-delay: 0.5s, 0s, 0.5s; transition-property: translate, background, box-shadow;">
                                    <svg width="30" height="30" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12,2C6.477,2,2,6.477,2,12s4.477,10,10,10s10-4.477,10-10S17.523,2,12,2z M17.215,7.713l-2.359,11.105   c-0.143,0.66-0.528,0.815-1.07,0.5l-3.301-2.365l-1.594,1.527c-0.189,0.186-0.349,0.349-0.705,0.349l0.246-3.467l5.553-5.006   c0.246-0.221-0.055-0.343-0.373-0.123l-6.859,4.742l-2.971-0.928c-0.66-0.207-0.674-0.656,0.147-0.963l12.189-4.57   C17.672,6.908,17.58,7.292,17.215,7.713z" />
                                    </svg>

                                </button>

                                <button class="whatsapp-button button"
                                    style="transition-delay: 0.7s, 0s, 0.7s; transition-property: translate, background, box-shadow;">
                                    {{-- <a href="whatsapp://send?text=https://humoropedia.com/wp-content/uploads/2014/08/monkey-awesome-photo.jpg"> --}}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        height="30" width="30">
                                        <path
                                            d="M19.001 4.908A9.817 9.817 0 0 0 11.992 2C6.534 2 2.085 6.448 2.08 11.908c0 1.748.458 3.45 1.321 4.956L2 22l5.255-1.377a9.916 9.916 0 0 0 4.737 1.206h.005c5.46 0 9.908-4.448 9.913-9.913A9.872 9.872 0 0 0 19 4.908h.001ZM11.992 20.15A8.216 8.216 0 0 1 7.797 19l-.3-.18-3.117.818.833-3.041-.196-.314a8.2 8.2 0 0 1-1.258-4.381c0-4.533 3.696-8.23 8.239-8.23a8.2 8.2 0 0 1 5.825 2.413 8.196 8.196 0 0 1 2.41 5.825c-.006 4.55-3.702 8.24-8.24 8.24Zm4.52-6.167c-.247-.124-1.463-.723-1.692-.808-.228-.08-.394-.123-.556.124-.166.246-.641.808-.784.969-.143.166-.29.185-.537.062-.247-.125-1.045-.385-1.99-1.23-.738-.657-1.232-1.47-1.38-1.716-.142-.247-.013-.38.11-.504.11-.11.247-.29.37-.432.126-.143.167-.248.248-.413.082-.167.043-.31-.018-.433-.063-.124-.557-1.345-.765-1.838-.2-.486-.404-.419-.557-.425-.142-.009-.309-.009-.475-.009a.911.911 0 0 0-.661.31c-.228.247-.864.845-.864 2.067 0 1.22.888 2.395 1.013 2.56.122.167 1.742 2.666 4.229 3.74.587.257 1.05.408 1.41.523.595.19 1.13.162 1.558.1.475-.072 1.464-.6 1.673-1.178.205-.58.205-1.075.142-1.18-.061-.104-.227-.165-.475-.29Z">
                                        </path>
                                    </svg>
                                    {{-- </a> --}}
                                </button>

                                <button id="download" class="twitter-button button"
                                    style="transition-delay: 0.3s, 0s, 0.3s; transition-property: translate, background, box-shadow;">
                                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M11,7 L11,13 L8,13 L12,17 L16,13 L13,13 L13,7 L11,7 Z">
                                        </path>
                                    </svg>

                                </button>

                            </div>

                        </center>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Start Sidebar block -->
                    <div class="blog-stander-four text-center">
                        <div class="image"><img src="{{ asset('storage/' . $cause->organisations->logo) }}"
                                style="height: 200px" alt=""></div>
                        <h4>{{ $cause->organisations->nom }}</h4>
                        {{-- <div class="designation">CEO & Founder</div> --}}
                        <div class="text"
                            style="max-height: 100px;height: 90px;backgrouned; overflow: hidden;text-overflow: ellipsis;">
                            {!! $cause->organisations->description !!}</div>
                        <div class="blog-button">
                            <div class="card2">
                                <a href="{{ $cause->organisations->lien_insta }}" class="socialContainer containerOne">
                                    <svg class="socialSvg instagramSvg" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="{{ $cause->organisations->lien_facebook }}" class="socialContainer containerTwo">
                                    <svg class="socialSvg facebookSvg" viewBox="0 0 16 16">
                                        <path
                                            d="M15.117,0H.883A.883.883,0,0,0,0,.883V15.117A.883.883,0,0,0,.883,16h7.662V9.797H6.781V7.594h1.764V5.91c0-1.75,1.067-2.703,2.625-2.703a14.84,14.84,0,0,1,1.586.081v1.844H11.6c-1.256,0-1.5.595-1.5,1.469v1.938h2.531l-.328,2.2H10.1V16h5.031a.883.883,0,0,0,.883-.883V.883A.883.883,0,0,0,15.117,0Z">
                                        </path>
                                    </svg>
                                </a>


                                <a href="whatsapp://22588364403" class="socialContainer containerFour">
                                    <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                                        </path>
                                    </svg>
                                </a>
                            </div>


                            {{-- <a href="contact.html" class="primary_btn">Contact <i class="far fa-arrow-right"></i></a> --}}

                        </div>
                    </div>
                    <!-- End Sidebar block -->
                    <!-- Start Sidebar block -->
                    <div class="event-details-block-two s-two">
                        <h4>Categorie <img src="{{ asset('assets/images/resource/icon-4.png') }}" alt=""></h4>
                        <div class="icon-list">
                            <ul>
                                @foreach (App\Models\categories::get() as $cate)
                                    <li><a href="/causes?categorie={{$cate->id}}"><i
                                                class="fas fa-arrow-right"></i>{{ $cate->libelle }}<span>{{ $cate->getCausesEnCoursCount() }}</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar block -->
                    <!-- Start Sidebar block -->
                    {{-- <div class="event-details-block-two">
                        <h4>Gallery & Photo <img src="assets/images/resource/icon-4.png" alt=""></h4>
                        <div class="inner-box">
                            <div class="wrapper-box">
                                <div class="image">
                                    <img src="assets/images/resource/Event_Details_small.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/resource/Event_Details_small.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fab fa-instagram"></span></a></div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/resource/Event_Details_small-2.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/resource/Event_Details_small-2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fab fa-instagram"></span></a></div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/resource/Event_Details_small-3.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/resource/Event_Details_small-3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fab fa-instagram"></span></a></div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/resource/Event_Details_small-4.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/resource/Event_Details_small-4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fab fa-instagram"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Sidebar block -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="{{ asset('assets/js/qrcode.js') }}"></script>
    <script>
        var qrOptions = {
            text: window.location.href + "?ext=1",
            width: 110,
            height: 110,
            colorDark: "#000000", // Couleur des points du QR code
            colorLight: "#ffffff", // Couleur de fond du QR code, ici transparent
            correctLevel: QRCode.CorrectLevel.H, // Niveau de correction d'erreur
            logo: "path-to-your-logo.svg", // Chemin vers le logo central
            logoWidth: undefined, // Largeur du logo si nécessaire
            logoHeight: undefined, // Hauteur du logo si nécessaire
            logoBackgroundColor: '#ffffff', // Couleur de fond derrière le logo si nécessaire
            logoBackgroundTransparent: true, // Fond transparent pour le logo
            // ... Autres options pour personnaliser la forme des points et le texte ...
        };
        var qrCode = new QRCode(document.getElementById("qrcode"), qrOptions);

        $('#download').on('click', function() {
            html2canvas(document.querySelector("#qrimg")).then(canvas => {
                // Créer un élément d'ancre pour le téléchargement
                var link = document.createElement('a');
                link.download = 'affiche.png';
                link.href = canvas.toDataURL();
                link.click();
                link.delete;
            });
        });
    </script>
    <style>
        .card {
            --main-color: #000;
            --submain-color: #78858F;
            --bg-color: #fff;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            position: relative;
            width: 300px;
            height: 416px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
            background: var(--bg-color);
        }

        .card__img {
            height: 192px;
            width: 100%;
        }

        .card__img svg {
            height: 100%;
            border-radius: 20px 20px 0 0;
        }

        .card__avatar {
            position: absolute;
            width: 130px;
            height: 120px;
            background: white;
            /* border-radius: 100%; */
            display: flex;
            justify-content: center;
            align-items: center;
            top: calc(50% - 57px);
        }

        .card__avatar svg {
            width: 100px;
            height: 100px;
        }

        .card__titl {
            z-index: 11111111111;
            margin-top: 100px;
            font-weight: bold;
            font-size: 18px;
            color: #000;
            text-align: center;
            background: white
        }

        .card__subtitle {
            margin-top: 8px;
            font-weight: 400;
            font-size: 15px;
            color: #FF7200;
        }

        .card__btn {
            margin-top: 10px;
            /* width: 76px; */
            border-radius: 40px;
            padding: 0 5px;
            height: 31px;
            border: 2px solid #FF7200;
            border-radius: 4px;
            font-weight: 700;
            font-size: 11px;
            color: var(--main-color);
            background: var(--bg-color);
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .card__btn-solid {
            background: var(--main-color);
            color: var(--bg-color);
        }

        .card__btn:hover {
            background: var(--main-color);
            color: var(--bg-color);
        }

        .card__btn-solid:hover {
            background: var(--bg-color);
            color: var(--main-color);
        }



        /* Cool share button made by: csozi | Website: english.csozi.hu*/

        .buttons {
            position: relative;
            display: grid;
            place-items: center;
            height: fit-content;
            width: fit-content;
            transition: 0.3s;
            border-radius: 50%;
        }

        .buttons:hover {
            padding: 60px;
        }

        .buttons:hover .button {
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .main-button {
            position: relative;
            display: grid;
            place-items: center;
            padding: 10px;
            border: none;
            background: #e8e8e8;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
            border-radius: 50%;
            transition: 0.2s;
            z-index: 100;
        }

        .button {
            position: absolute;
            display: grid;
            place-items: center;
            padding: 10px;
            border: none;
            background: #e8e8e8;
            box-shadow: 5px 5px 12px rgba(202, 202, 202, 0), -5px -5px 12px rgba(255, 255, 255, 0);
            transition: 0.3s;
            border-radius: 50%;
        }

        .discord-button:hover {
            background: #5865F2;
        }

        .buttons:hover .discord-button {
            translate: 70px 0px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .twitter-button:hover {
            background: #1CA1F1;
        }

        .buttons:hover .twitter-button {
            translate: 47px -47px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .reddit-button:hover {
            background: #FF4500;
        }

        .buttons:hover .reddit-button {
            translate: 0px -70px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .messenger-button:hover {
            background: #0093FF;
        }

        .buttons:hover .messenger-button {
            translate: -47px -47px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .pinterest-button:hover {
            background: #F0002A;
        }

        .buttons:hover .pinterest-button {
            translate: -70px 0px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .instagram-button:hover {
            background: #F914AF;
        }

        .buttons:hover .instagram-button {
            translate: -47px 47px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .snapchat-button:hover {
            background: #FFFC00;
        }

        .buttons:hover .snapchat-button {
            translate: 0px 70px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }

        .whatsapp-button:hover {
            background: #25D366;
        }

        .buttons:hover .whatsapp-button {
            translate: 47px 47px;
            box-shadow: 5px 5px 12px #cacaca, -5px -5px 12px #ffffff;
        }







        .card2 {
            width: fit-content;
            height: fit-content;
            background-color: rgb(238, 238, 238);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px 25px;
            gap: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.055);
        }

        /* for all social containers*/
        .socialContainer {
            width: 52px;
            height: 52px;
            background-color: rgb(44, 44, 44);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition-duration: .3s;
        }

        /* instagram*/
        .containerOne:hover {
            background-color: #d62976;
            transition-duration: .3s;
        }

        /* twitter*/
        .containerTwo:hover {
            background-color: #00acee;
            transition-duration: .3s;
        }

        /* linkdin*/
        .containerThree:hover {
            background-color: #0072b1;
            transition-duration: .3s;
        }

        /* Whatsapp*/
        .containerFour:hover {
            background-color: #128C7E;
            transition-duration: .3s;
        }

        .socialContainer:active {
            transform: scale(0.9);
            transition-duration: .3s;
        }

        .socialSvg {
            width: 17px;
        }

        .socialSvg path {
            fill: rgb(255, 255, 255);
        }

        .socialContainer:hover .socialSvg {
            animation: slide-in-top 0.3s both;
        }

        @keyframes slide-in-top {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
@endsection

@section('extra-js')
    <script>
        // Exemple de message à partager
        let title = encodeURIComponent("Soutenez notre cause :  {{ $cause->libelle }}");
        let message = encodeURIComponent("Aidez-nous à atteindre notre objectif de {{number_format(intVal($cause->objectif), 0, ' ', ' ')}} f. Chaque contribution compte !");
        let shareUrl = encodeURIComponent(window.location.href);

        // Bouton WhatsApp
        $('.whatsapp-button').on('click', function() {
            window.open(`https://wa.me/?text=${title}%20\n\n${message}%20${shareUrl}`, '_blank');
        });

        // Bouton Facebook
        $('.messenger-button').on('click', function() {
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${shareUrl}`, '_blank');
        });

        // Bouton Twitter
        $('.instagram-button').on('click', function() {
            window.open(`https://telegram.me/share/url?url=${shareUrl}&text=${title}%20${message}`, '_blank');
        });
        var causeData = @json($cause);

        document.addEventListener("DOMContentLoaded", function() {
            // Fonction pour obtenir la valeur d'un paramètre d'URL par son nom
            function getQueryParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            // Vérifie si le paramètre 'ext' existe et est égal à '1'
            if (getQueryParam('ext') === '1') {
                show(causeData);
                document.getElementById('dona').click();
            }
        });

    </script>
@endsection

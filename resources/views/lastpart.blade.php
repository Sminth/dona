@extends('layouts.app')

@section('content')
    <!-- donation section -->
    <section class="donation-section">
        <div class="theme_container">

            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel">

                        <div class="row" width="300" height="233">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6" align="center">
                                <!-- test -->
                                <div class="bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->


                                    <form name="xyz" method="post" action="{{ route('paye') }}">
                                        {{ csrf_field() }}
                                        <div>
                                            <div>
                                                @if ($ion6 == 'PENDING')
                                                <div>
                                                    <div class="loader">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                    {{-- <img src="https://onecall.ci/fr/smspro/assets/img/loader.gif" alt="Trulli" width="300" height="233"> --}}
                                                    <h3><label style="color: #1d7db4;">En cours ... </label></h3>
                                                    <label style="color:red;">Pour confirmer le paiement Mtn Money,
                                                        merci de taper #133#, choisir l'option 1, l'option 1 puis
                                                        l'option 1. Puis entrez votre code secret et validez. </label>


                                                </div>
                                                @elseif($ion6 == 'SUCCESSFUL')
                                                    <div><img src=" https://icons.veryicon.com/png/o/miscellaneous/cloud-call-center/success-24.png" alt="Trulli" width="200" height="200">

                                                   <h4>Paiement Effectué avec succès</h4>
                                                   <p>Votre geste apporteras bien plus de bonheur que vous ne pourrez l'imaginer</p>

                                                <a style="cursor: pointer;" href="/causes" class="primary_btn s-two menu-bar sidem mt-3" style="mpx">voir d'autres causes<i
                                                    class="far fa-heart"></i></a>
                                               </div>

                                                @elseif($ion6 == 'FAILED')
                                                    <div>
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Crystal_Clear_action_button_cancel.svg/768px-Crystal_Clear_action_button_cancel.svg.png"
                                                            alt="Trulli" width="150" height="200">
                                                        <h4>Payement Echoué </h4>
                                                        <p>une erreur est survenue veuillez reprendre la procédure Svp </p>
                                                        <a href="/causes" class="btn btn-warning mt-3">
                                                            retour
                                                        </a>
                                                    </div>
                                                @else
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Crystal_Clear_action_button_cancel.svg/768px-Crystal_Clear_action_button_cancel.svg.png"
                                                        alt="Trulli" width="150" height="200">
                                                    <h4><?php echo "<a href='#'>Payement Echoué veuillez cliquez ici pour reprendre la procédure Svp </a>"; ?> </h4>
                                                @endif
                                                <div>

                                                    <input type="hidden" value="{{ $transactionId }}" name="transactionId">
                                                    <input type="hidden" name="status" value="{{ $ion6 }}" />
                                                    <input type="hidden" name="objet" value="{{ $objet }}" />
                                                    <input type="hidden" name="numero" value="{{ $numero }}" />
                                                    <input type="hidden" name="prix" value="{{ $prix }}" />
                                                    <input type="hidden" name="nom" value="{{ $nom }}" />
                                                    <input type="hidden" name="mtn" value="{{ $mtn }}" />


                                                </div>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //    var wait=setTimeout("document.xyz.submit();",30000 );
                                        </script>
                                    </form> <!-- Modal testo -->
                                </div>


                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3"></div>


                        </div>
                    </div> <br>
                    <div class="col-lg-3"></div>
                    <br>
                </div>
            </div>


            <script type="text/javascript">
                function preventBack() {
                    window.history.forward();
                }

                setTimeout("preventBack()", 0);

                window.onunload = function() {
                    null
                };
            </script>



            <style>
                .loader {
                    display: inline-block;
                    position: relative;
                    width: 80px;
                    height: 80px;
                }

                .loader div {
                    position: absolute;
                    top: 33px;
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    background: #FF7200;
                    animation-timing-function: cubic-bezier(0, 1, 1, 0);
                }

                .loader div:nth-child(1) {
                    left: 8px;
                    animation: flip1 0.6s infinite;
                }

                .loader div:nth-child(2) {
                    left: 8px;
                    animation: flip2 0.6s infinite;
                }

                .loader div:nth-child(3) {
                    left: 32px;
                    animation: flip2 0.6s infinite;
                }

                .loader div:nth-child(4) {
                    left: 56px;
                    animation: flip3 0.6s infinite;
                }

                @keyframes flip1 {
                    0% {
                        transform: scale(0);
                    }

                    100% {
                        transform: scale(1);
                    }
                }

                @keyframes flip3 {
                    0% {
                        transform: scale(1);
                    }

                    100% {
                        transform: scale(0);
                    }
                }

                @keyframes flip2 {
                    0% {
                        transform: translate(0, 0);
                    }

                    100% {
                        transform: translate(24px, 0);
                    }
                }
            </style>

        </div>
    </section>
@endsection

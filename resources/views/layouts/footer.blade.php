<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>À propos de nous</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-3">
                <h6>Liens utiles</h6>
                <ul class="footer-links">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('about')}}">À propos</a></li>
                    <li><a href="{{route('createLogin')}}">Se connecter</a></li>
                    {{-- <li><a href="#">Contact</a></li> --}}
                </ul>
            </div>

            <div class="col-md-3">
                <h6>Contactez-nous</h6>
                <ul class="footer-contact">
                    <li>123 Rue principale, Paris, France</li>
                    <li>Email : info@monsite.com</li>
                    <li>Tel : +33 1 23 45 67 89</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="text-center">© 2023 Akilyum. Tous droits réservés.</p>
        </div>
    </div>
</footer>


<style>
    .site-footer {
        position: relative;
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
}
.site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
}
.site-footer hr.small {
    margin: 20px 0
}
.site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
}
.site-footer a {
    color: #737373;
}
.site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
}
.footer-links {
    list-style: none;
    padding-left: 0;
    line-height: 1.8;
}
.footer-links li {
    display: block;
}
.footer-contact {
    list-style: none;
    padding-left: 0;
    line-height: 1.3;
}
.footer-contact li {
    line-height: 2;
}
.site-footer .footer-bottom {
    border-top: 1px solid #666;
    padding-top: 20px;
    color: #fff;
}

</style>

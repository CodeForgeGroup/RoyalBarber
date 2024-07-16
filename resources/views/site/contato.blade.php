@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')

    <style>
       ====================*/

#mu-contact {
  background-color: #f8f8f8;
  display: inline;
  float: left;
  padding: 100px 0;
  width: 100%;
}

.mu-contact-area {
  display: inline;
  float: left;
  width: 100%;
}

.mu-contact-content {
  display: inline;
  float: left;
  margin-top: 30px;
  width: 100%;
}

.mu-contact-left {
  display: inline;
  float: left;
  font-family: "Open Sans", sans-serif;
  width: 100%;
}

.mu-contact-left .form-group {
  margin-bottom: 25px;
}

.mu-contact-left .form-group label {
  font-size: 16px;
  margin-bottom: 8px;
  letter-spacing: 0.5px;
}

.mu-contact-form input[type="text"],
.mu-contact-form input[type="email"] {
  color: #000;
  border-radius: 0;
  height: 40px;
}

.mu-contact-form input[type="text"]:focus,
.mu-contact-form input[type="email"]:focus {
  box-shadow: none;
  background-color: transparent;
  color: #dd6d26;
  border: solid 2px #dd6d26
}

.mu-contact-form textarea {
  color: #000;
  border-radius: 0;
  padding: 10px;
}

.mu-contact-form textarea:focus {
  background-color: transparent;
  box-shadow: none;
  color: #dd6d26;
  border: solid 2px #dd6d26

}

.mu-contact-right {
  display: inline;
  float: left;
  padding: 0 30px;
  width: 100%;
}

.mu-contact-right .mu-contact-widget {
  display: inline;
  float: left;
  margin-bottom: 25px;
  width: 100%;
}

.mu-contact-right .mu-contact-widget h3 {
  margin-top: 0px;
  padding-bottom: 10px;
  display: inline-block;
}

.mu-contact-right .mu-contact-widget > p {
  letter-spacing: 0.5px;
  line-height: 26px;
}

.mu-contact-right .mu-contact-widget address {
  margin-top: 20px;
}

.mu-contact-right .mu-contact-widget address p {
  letter-spacing: 0.5px;
}

.mu-contact-right .mu-contact-widget address p i {
  margin-right: 10px;
  width: 20px;
  text-align: center;
}

.mu-contact-right .mu-contact-widget address p span {
  display: inline-block;
  margin-right: 20px;
  min-width: 130px;
}

#form-messages {
  margin-bottom: 10px;
    background-color: #fff;
}

.success {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #468847;
  background-color: #dff0d8;
  border: 1px solid #d6e9c6;
  -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
        border-radius: 4px;
}

.error {
  padding: 1em;
  margin-bottom: 0.75rem;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #b94a48;
  background-color: #f2dede;
  border: 1px solid rgba(185, 74, 72, 0.3);
  -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
        border-radius: 4px;
}


.mu-send-btn {
  background-color: transparent;
  border: 2px solid #dd6d26;
  color: #dd6d26;
  border-radius: 15px;
  display: inline-block;
  font-size: 16px;
  padding: 10px 18px;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.mu-send-btn:hover,
.mu-send-btn:focus {
    cursor: pointer;
  color: gainsboro;
  background-color: #dd6d26;
  border: 2px solid gainsboro;

}


input:focus{
background-color: transparent;
}


@media (max-width: 1199px) {

.mu-main-navbar .mu-main-nav li a {
  padding-left: 10px;
  padding-right: 10px;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content {
  position: absolute;
  left: 5%;
  top: 15%;
  right: 5%;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-small-title {
  font-size: 80px;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-title {
  font-size: 55px;
  line-height: 70px;
}

.mu-reservation-content {
  padding: 0;
}

.mu-testimonial-slider li .mu-testimonial-single {
  padding: 0 50px;
}

.mu-chef-nav .slick-list li .mu-single-chef .mu-single-chef-social {
  padding: 23px 5px;
}

.mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
padding-top: 26%;
}


}


@media (max-width: 991px) {


.mu-main-navbar .mu-main-nav li a {
  padding-left: 5px;
  padding-right: 5px;
  font-size: 14px;
}

.mu-top-slider-content .mu-reservation-btn {
  display: none;
}

.mu-about-us-left,
.mu-reservation-form {
  text-align: center;
}

.mu-reservation-right {
  margin-top: 60px;
}

#mu-contact .mu-contact-area .mu-contact-content .mu-contact-right {
  margin-top: 50px;
  padding: 0;
}

#mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
  padding-top: 22%;
}

#mu-client-testimonial .mu-client-testimonial-area .mu-testimonial-content .mu-testimonial-slider li .mu-testimonial-single {
  padding: 0 60px;
}

#mu-client-testimonial .mu-client-testimonial-area .mu-testimonial-content .mu-testimonial-slider li .mu-testimonial-single .mu-testimonial-info p::before {
  top: 40%;
}


}


@media (max-width: 767px) {

#mu-header {
  padding: 0 15px;
}

.navbar-default .navbar-toggle {
  border-radius: 0px;
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #fff;
}

.mu-main-navbar .mu-main-nav {
  background-color: #fff;
  text-align: center;
}

.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
  background-color: #fff;
}

#mu-counter .mu-counter-overlay .mu-counter-area .mu-counter-nav li {
  margin-top: 10px;
  margin-bottom: 10px;
  border-right: none;
}

}


@media (max-width: 640px) {

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #fff;
}

#mu-slider .mu-slider-area .mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-title {
  font-size: 50px;
  line-height: 75px;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content {
  top: 18%;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-restaurant-menu li a {
  font-size: 16px;
  margin: 0 5px;
}

#mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
  padding-top: 18%;
}

#mu-client-testimonial .mu-client-testimonial-area .mu-testimonial-content .mu-testimonial-slider li .mu-testimonial-single {
  padding: 0;
}

.mu-testimonial-slider li .mu-testimonial-single .mu-testimonial-info p {
  font-size: 16px;
  line-height: 30px;
}

#mu-chef .mu-chef-area .mu-chef-content .mu-chef-nav .slick-list li .mu-single-chef .mu-single-chef-social a {
  margin: 0 3px;
  padding: 3px 0;
  width: 30px;
}

.mu-top-slider .slick-dots {
  display: none !important;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-small-title {
  font-size: 45px;
  line-height: 35px;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content p {
  font-size: 14px;
  margin-bottom: 0;
  margin-top: 0px;
  padding: 0 5px;
}

#mu-slider .mu-slider-area .mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-title {
  font-size: 30px;
  line-height: 50px;
}

}


@media (max-width: 480px) {

.mu-top-slider .mu-top-slider-single .mu-top-slider-content {
 top: 20%;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content p {
  display: none;
}

.mu-reservation-content p {
  padding: 0;
}


.mu-title {
  margin-bottom: 0;
}

#mu-client-testimonial .mu-client-testimonial-area .mu-testimonial-content .mu-testimonial-slider li .mu-testimonial-single {
  padding: 0;
}

#mu-subscription .mu-subscription-area .mu-subscription-form input[type="text"] {
  width: 100%;
  margin-bottom: 20px;
}

#mu-subscription .mu-subscription-area {
  padding: 0;
  text-align: center;
}

#mu-subscription .mu-subscription-area .mu-subscription-form .mu-readmore-btn {
  width: auto;
}

#mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery {
  width: 100%;
}

 #mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
  padding-top: 30%;
}

#mu-map {
  height: 350px;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-restaurant-menu li {
  margin-bottom: 10px;
}


}

@media (max-width: 360px) {

#mu-slider .mu-slider-area .mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-title {
  font-size: 22px;
  line-height: 30px;
}

.mu-top-slider .mu-top-slider-single .mu-top-slider-content .mu-slider-small-title {
  font-size: 30px;
  line-height: 25px;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-restaurant-menu li {
  margin-bottom: 12px;
}

#mu-about-us {
  padding: 100px 0 50px;
}

#mu-restaurant-menu {
  padding-bottom: 0px;
}

#mu-reservation .mu-reservation-area .mu-reservation-content {
  padding: 0;
}

.mu-opening-hour h2 {
  font-size: 42px;
  padding-bottom: 10px;
}

.mu-title h2 {
  font-size: 28px;
}

#mu-client-testimonial .mu-client-testimonial-area .mu-testimonial-content .mu-testimonial-slider li .mu-testimonial-single .mu-testimonial-info p {
  font-size: 16px;
  line-height: 24px;
}

#mu-contact .mu-contact-area .mu-contact-content .mu-contact-right {
  text-align: center;
}

#mu-contact .mu-contact-area .mu-contact-content .mu-contact-right .mu-contact-widget address {
  text-align: left;
}

#mu-contact {
  padding: 100px 0 50px;
}

#mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
  padding-top: 27%;
}

#mu-footer .mu-footer-area .mu-footer-social a {
  font-size: 18px;
}

.mu-menu-item-nav li {
  text-align: center;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-tab-content-area .mu-menu-item-nav li .media .media-left {
  height: auto;
  width: 100%;
  margin-right: 0;
  float: left;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-tab-content-area .mu-menu-item-nav li .media .media-left a{
  display: inline-block;
  margin-bottom: 10px;
}

#mu-restaurant-menu .mu-restaurant-menu-area .mu-restaurant-menu-content .mu-tab-content-area .mu-menu-item-nav li .media .media-left a img {
  display: inline-block;
}

#mu-map {
  height: 250px;
}

.mu-contact-form .mu-send-btn {
  width: 100%;
}

}


@media (max-width: 320px) {

#mu-gallery .mu-gallery-area .mu-gallery-content .mu-gallery-body .mu-single-gallery .mu-single-gallery-item .mu-single-gallery-info {
  padding-top: 25.5%;
}


}

    </style>


    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/bg-contato.jpeg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-4">Contate-nos</h1>
                        <p class="lead">Estamos aqui para ajudar! Entre em contato conosco para obter mais informações
                            sobre nossos serviços!</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- END section -->

    <section class="quick-info element-animate" data-animate-effect="fadeInLeft">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bgcolor">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-ios-telephone"></span></div>
                                <div class="media-body">
                                    <h5>11 951694143</h5>
                                    <p>Nos ligue 24/7, responderemos o mais rápido possível</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-location"></span></div>
                                <div class="media-body">
                                    <h5>Avenida Marechal Tito, 1500</h5>
                                    <p>São Paulo, São Paulo <br> CEP 08010-090 - Brasil</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media">
                                <div class="mr-3 icon-wrap"><span class="icon ion-android-time"></span></div>
                                <div class="media-body">
                                    <h5>Diariamente: 8h - 22h</h5>
                                    <p>Segunda a Sábado <br> Domingo: Fechado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
 <!-- Start Contact section -->
 <section id="mu-contact" style="margin-top: 30px; margin-bottom:30px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle" style="color: gainsboro">Entre em</span>
              <h1 style="color: white">Contato</h1>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="{{route('envio.email')}}" class="mu-contact-form">
                        @csrf
                      <div class="form-group">
                        <label for="name">Seu nome</label>
                        <input type="text" class="form-control" id="name" name="nomeContato" placeholder="Nome" style="color: gainsboro" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Seu email</label>
                        <input type="email" class="form-control" id="email" name="emailContato" placeholder="Email" style="color: gainsboro" required>
                      </div>
                      <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" class="form-control" id="subject" name="assuntoContato" placeholder="Assunto" style="color: gainsboro" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" name="mensContato"  cols="30" rows="10" placeholder="Escreva sua mensagem" style="color: gainsboro" required></textarea>
                      </div>
                      <button type="submit" class="mu-send-btn">Envie a mensagem</button>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3 style="color:white;">Nossas informações</h3>
                      <p style="color: gainsboro">Entre em contato conosco, tire duvidas, converse e venha conhecer a melhor barbearia da região. Realize seu sonho aumente sua autoestima!</p>
                      <address>
                        <p style="color:white;"><i class="fa fa-phone"></i> (11) 99999 9999</p>
                        <p style="color:white;"><i class="fa fa-envelope-o"></i>royalbarber@markups.io</p>
                        <p style="color:white;"><i class="fa fa-map-marker"></i>Avenida Marechal Tito, 1500</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3 style="color:white;">Horário de funcionamento</h3>
                      <address>
                        <p style="color: gainsboro"><span>Segunda - Sexta</span> 10:00 até as 20:00</p>
                        <p style="color: gainsboro"><span>Sábado</span> 11:00 até as 21:00</p>
                        <p style="color: gainsboro"><span>Domingo</span> 12:00 até as 19:00</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->


@endsection

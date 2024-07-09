@extends('layout.layout')

@section('title', 'Sobre')

@section('conteudo')


    <style>

/********** Template CSS **********/

.back-to-top {
    position: fixed;
    display: none;
    right: 30px;
    bottom: 30px;
    z-index: 99;
}

.fw-medium {
    font-weight: 500;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    transition: .5s;
    font-weight: 500;
    margin-right: 10px;
}

.btn-primary,
.btn-outline-primary:hover {
    color: var(--bs-light);
}

.btn-secondary,
.btn-outline-secondary:hover {
    color: var(--bs-dark);
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    font-weight: normal;
}

.icon-box-primary,
.icon-box-light {
    position: relative;
    padding: 0 0 10px 10px;
    z-index: 1;
}

.icon-box-primary i,
.icon-box-light i {
    font-size: 60px;
    line-height: 0;
}

.icon-box-primary::before,
.icon-box-light::before {
    position: absolute;
    content: "";
    width: 35px;
    height: 35px;
    left: 0;
    bottom: 0;
    border-radius: 35px;
    transition: .5s;
    z-index: -1;
}

.icon-box-primary::before {
    background: var(--bs-primary);
}

.icon-box-light::before {
    background: var(--bs-light);
}


/*** Navbar ***/
.sticky-top {
    top: -100px;
    transition: .5s;
}

.navbar .navbar-nav .nav-link {
    margin-right: 35px;
    padding: 20px 0;
    color: var(--bs-dark);
    font-size: 18px;
    font-weight: 500;
    outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
    color: var(--bs-primary);
}

.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    vertical-align: middle;
    margin-left: 8px;
}

@media (max-width: 991.98px) {
    .navbar .navbar-nav .nav-link  {
        margin-right: 0;
        padding: 10px 0;
    }

    .navbar .navbar-nav {
        margin-top: 15px;
        border-top: 1px solid #EEEEEE;
    }
}

@media (min-width: 992px) {
    .sticky-top {
        margin-top: -34px;
    }

    .navbar {
        height: 68px;
    }

    .navbar .nav-item .dropdown-menu {
        display: block;
        border: none;
        margin-top: 0;
        top: 150%;
        opacity: 0;
        visibility: hidden;
        transition: .5s;
    }

    .navbar .nav-item:hover .dropdown-menu {
        top: 100%;
        visibility: visible;
        transition: .5s;
        opacity: 1;
    }
}


/*** Header ***/
@media (min-width: 992px) {
    .header-carousel,
    .page-header {
        margin-top: -34px;
    }
}

.carousel-caption {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    background: rgba(3, 27, 78, .3);
    z-index: 1;
}

.carousel-control-prev,
.carousel-control-next {
    width: 15%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 3.5rem;
    background-color: var(--bs-primary);
    border: 15px solid var(--bs-primary);
}

@media (max-width: 767.98px) {
    #header-carousel .carousel-item {
        position: relative;
        min-height: 450px;
    }

    #header-carousel .carousel-item img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

.page-header {
    background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(../img/testimonial.jpg) center center no-repeat;
    background-size: cover;
}

.page-header .breadcrumb-item+.breadcrumb-item::before {
    color: var(--bs-white);
}

.page-header .breadcrumb-item,
.page-header .breadcrumb-item a {
    font-size: 18px;
    color: var(--bs-white);
}


/*** Features ***/
.feature {
    background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(../img/feature.jpg) left center no-repeat;
    background-size: cover;
}

.feature-row {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
}

.feature-item {
    border-color: rgba(0, 0, 0, .03) !important;
}

.experience .progress {
    height: 5px;
}

.experience .progress .progress-bar {
    width: 0px;
    transition: 3s;
}

.experience .nav-pills .nav-link {
    color: var(--dark);
}

.experience .nav-pills .nav-link.active {
    color: #FFFFFF;
}

.experience .tab-content hr {
    width: 30px;
}


/*** About ***/
.about-fact {
    width: 220px;
    height: 220px;
    box-shadow: 0 0 30px rgba(0, 0, 0, .1);
}

@media (min-width: 576px) {
    .about-fact.mt-n130 {
        margin-top: -130px;
    }
}

.btn-play {
    position: relative;
    display: block;
    box-sizing: content-box;
    width: 36px;
    height: 46px;
    border-radius: 100%;
    border: none;
    outline: none !important;
    padding: 18px 20px 20px 28px;
    background: var(--bs-primary);
}

.btn-play:before {
    content: "";
    position: absolute;
    z-index: 0;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 90px;
    height: 90px;
    background: var(--bs-primary);
    border-radius: 100%;
    animation: pulse-border 1500ms ease-out infinite;
}

.btn-play:after {
    content: "";
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 90px;
    height: 90px;
    background: var(--bs-primary);
    border-radius: 100%;
    transition: all 200ms;
}

.btn-play span {
    display: block;
    position: relative;
    z-index: 3;
    width: 0;
    height: 0;
    left: 3px;
    border-left: 30px solid #FFFFFF;
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent;
}

@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(2);
        opacity: 0;
    }
}

.modal-video .modal-dialog {
    position: relative;
    max-width: 800px;
    margin: 60px auto 0 auto;
}

.modal-video .modal-body {
    position: relative;
    padding: 0px;
}

.modal-video .close {
    position: absolute;
    width: 30px;
    height: 30px;
    right: 0px;
    top: -30px;
    z-index: 999;
    font-size: 30px;
    font-weight: normal;
    color: #FFFFFF;
    background: #000000;
    opacity: 1;
}


/*** Service ***/
.container-service {
    position: relative;
}

.container-service::before {
    position: absolute;
    content: '';
    background: var(--bs-light);
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    clip-path: polygon(0 0, 100% 0, 100% 30%, 0 70%);
    z-index: -1;
}

.service-item {
    position: relative;
    height: 100%;
    padding: 45px 30px;
    background: var(--bs-white);
    box-shadow: 0 0 45px rgba(0, 0, 0, .05);
}

.service-item::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 0;
    left: 0;
    bottom: 0;
    transition: .5s;
    background: var(--bs-primary);
}

.service-item:hover::before {
    height: 100%;
    top: 0;
}

.service-item * {
    position: relative;
    transition: .5s;
    z-index: 1;
}

.service-item:hover h5,
.service-item:hover p {
    color: var(--bs-white);
}

.service-item:hover .icon-box-primary::before {
    background: var(--bs-dark);
}

.service-item:hover .icon-box-primary i {
    color: var(--bs-white) !important;
}


/*** Team ***/
.container-team {
    position: relative;
}

.container-team::before {
    position: absolute;
    content: '';
    background: var(--bs-light);
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    clip-path: polygon(0 70%, 100% 30%, 100% 100%, 0% 100%);
    z-index: -1;
}

.team-item {
    background: var(--bs-white);
    box-shadow: 0 0 45px rgba(0, 0, 0, .05);
}

.team-item .team-social {
    position: absolute;
    width: 0;
    height: 100%;
    top: 0;
    right: 0;
    transition: .5s;
    background: var(--bs-primary);
    display: flex;
    align-items: center;
    justify-content: center;
}

.team-item:hover .team-social {
    width: 100%;
    left: 0;
}

.team-item .team-social .btn {
    opacity: 0;
    transition: .5s;
}

.team-item:hover .team-social .btn {
    opacity: 1;
}


/*** Testimonial ***/
.testimonial {
    background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(../img/testimonial.jpg) left center no-repeat;
    background-size: cover;
}

.testimonial-item img {
    width: 60px !important;
    height: 60px !important;
    border-radius: 60px;
}

.testimonial-carousel .owl-nav {
    position: absolute;
    top: 0;
    right: 0;
    display: flex;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    margin-left: 15px;
    color: var(--bs-primary);
    font-size: 30px;
    line-height: 0;
    transition: .5s;
}

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    color: var(--bs-dark);
}


/*** Contact ***/
@media (min-width: 992px) {
    .contact-info::after {
        position: absolute;
        content: "";
        width: 0px;
        height: 100%;
        top: 0;
        left: 50%;
        border-left: 1px dashed rgba(255, 255, 255, .2);
    }
}

@media (max-width: 991.98px) {
    .contact-info::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 0px;
        top: 50%;
        left: 0;
        border-top: 1px dashed rgba(255, 255, 255, .2);
    }
}


/*** Footer ***/
.footer {
    background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(../img/footer.png) center center no-repeat;
    background-size: contain;
}

@media (min-width: 992px) {
    .footer::after {
        position: absolute;
        content: "";
        width: 0px;
        height: 100%;
        top: 0;
        left: 50%;
        border-left: 1px dashed rgba(255, 255, 255, .2);
    }
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: rgba(255, 255, 255, .5);
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: rgba(255, 255, 255, .5);
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    color: var(--bs-primary);
    letter-spacing: 1px;
    box-shadow: none;
}

.copyright {
    border-top: 1px dashed rgba(255, 255, 255, .2);
}

.copyright a {
    color: var(--bs-white);
}

.copyright a:hover {
    color: var(--bs-primary);
}

        .about-g {
            margin-top: 40px;
            max-width: 900px
        }

        .about-g p {
            background-color: #ff6d26;
            padding: 10px 20px;
            color: white;
        }

        .about-g img {
            max-width: 500px;
            max-height: 800px;
            border-radius: 15px;
        }
    </style>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
                        <h1 class="mb-4">Sobre Nós</h1>
                        <p class="lead">Tradição e estilo se encontram na Royal Barber: onde cada corte é uma obra-prima.
                        </p>
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


    <section class="d-flex justify-content-center">
        <div class="d-flex container-fluid about-g">
            <div class="align-content-center">
                <p class="container">Há mais de três décadas, um jovem visionário de nome Edward Morgenstern teve um sonho:
                    criar um espaço onde
                    os homens pudessem não apenas cuidar de sua aparência, mas também encontrar camaradagem, conforto e
                    confiança. Esse sonho se tornou realidade em 1989, quando Edward abriu as portas da Royal Barber pela
                    primeira vez.<br>Localizada em um modesto espaço no centro da cidade, a Royal Barber rapidamente ganhou
                    reputação como o
                    local onde os cavalheiros mais exigentes encontravam serviços de qualidade inigualável. Com seu olhar
                    afiado
                    para cortes clássicos e seu compromisso inabalável com a excelência, Edward atraiu uma clientela fiel
                    que
                    vinha de todas as partes em busca de sua expertise.</p>
            </div>

            <div class="align-content-center">

                <img src="{{ asset('images/barbearia.png') }}" alt="">

            </div>
        </div>
    </section>

       <!-- Team Start -->
       <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="{{ asset('images/funcionario1.jpeg') }}" alt="" style="border-radius: 15px"   >
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">John Martin</h1>
                    <p class="mb-1">Dono & Fundador</p>
                    <p class="mb-5">Guarulhos, SP, Brasil</p>
                    <h3 class="mb-3">Detalhes</h3>
                    <p class="mb-4">Nascido para cortar cabelos, traz consigo anos de experiência e paixão pela arte da barbearia.
                        Seu compromisso com a excelência garante que cada cliente saia da cadeira com um visual impecável e
                        renovado.</p>
                    <p class="mb-4">Quando não está transformando penteados, ele gosta de passar seu tempo livre explorando novas
                        técnicas de corte e estilos, sempre buscando inovação e perfeição.</p>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('images/funcionario2.jpeg') }}" alt="" style="border-radius: 15px">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Alex Robin</h5>
                            <span>Barbeiro</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('images/funcionario2.jpeg') }}" alt="" style="border-radius: 15px">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Andrew Bon</h5>
                            <span>Barbeiro</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('images/funcionario3.jpeg') }}" alt="" style="border-radius: 15px">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Martin Tompson</h5>
                            <span>Barbeiro</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('images/funcionario3.jpeg') }}" alt="" style="border-radius: 15px">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Clarabelle Samber</h5>
                            <span>Barbeiro</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-white shadow-sm').css('top', '-1px');
        } else {
            $('.sticky-top').removeClass('bg-white shadow-sm').css('top', '-100px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Experience
    $('.experience').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ]
    });

})(jQuery);


    </script>

@endsection

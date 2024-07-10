@extends('layout.layout')

@section('title','Cortes')

@section('conteudo')



<style>

    .service .nav .nav-link {
        background: var(--light);
        transition: .5s;
    }

    .service .nav .nav-link.active {
        background: var(--primary);
    }

    .service .nav .nav-link.active h4 {
        color: #FFFFFF !important;
    }


    </style>




    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
              <h1 class="mb-4">Cortes de cabelo</h1>
              <p class="lead">Descubra os Cortes de Cabelo Masculinos Mais Estilosos da Temporada na Nossa Barbearia!</p>
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


    <!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Cortes //</h6>
            <h1 class="mb-5">Explore Nossos Serviços</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button" style="cursor: pointer">
                        <h4 class="m-0">Corte Clássico</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button" style="cursor: pointer">
                        <h4 class="m-0">Corte Moderno</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button" style="cursor: pointer">
                        <h4 class="m-0">Corte Degradê</h4>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button" style="cursor: pointer">
                        <h4 class="m-0">Corte Militar</h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="images/cortes/social.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Corte Clássico</h3>
                                <p class="mb-4">O corte clássico nunca sai de moda. Simples, elegante e sempre na tendência. Perfeito para homens que buscam um visual tradicional com um toque moderno.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Elegante</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Tradicional</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Visual Limpo</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3"  style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="images/cortes/mullet.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Corte Moderno</h3>
                                <p class="mb-4">Para aqueles que gostam de inovar, o corte moderno oferece diversas possibilidades de estilo. Atualize seu visual com as tendências mais recentes e técnicas avançadas.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Estilo Atual</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Visual Inovador</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Técnicas Avançadas</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="images/cortes/americano.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Corte Degradê</h3>
                                <p class="mb-4">O corte degradê, também conhecido como fade, é perfeito para quem busca um visual sofisticado e versátil. Ideal para diferentes comprimentos de cabelo e estilos pessoais.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Sofisticado</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Versátil</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Estilo Personalizado</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="images/cortes/militar.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Corte Militar</h3>
                                <p class="mb-4">O corte militar é prático, limpo e mantém um visual sempre organizado. Perfeito para homens que preferem um estilo mais simples e fácil de manter.</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Prático</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Limpo</p>
                                <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Fácil de Manter</p>
                                <a href="" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->






    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Adiciona um evento de clique para os botões das abas
            $('.nav-link').click(function() {
                // Remove a classe 'active' de todos os botões
                $('.nav-link').removeClass('active');

                // Adiciona a classe 'active' apenas ao botão clicado
                $(this).addClass('active');

                // Obtém o alvo da aba a ser mostrada
                var target = $(this).attr('data-bs-target');

                // Esconde todas as abas
                $('.tab-pane').removeClass('show active');

                // Mostra a aba correspondente ao botão clicado
                $(target).addClass('show active');
            });
        });
        </script>





@endsection

@extends('layout.layout')

@section('title','Coloração')

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


     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(../images/coloracao/coloracao.png);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
              <h1 class="mb-4">Coloração</h1>
              <p class="lead">Renove o seu visual com os serviços de coloração de cabelo e barba da nossa barbearia! </p>
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

    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Coloração //</h6>
                <h1 class="mb-5">Explore Nossos Serviços</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h4 class="m-0">Coloração Completa de Cabelo</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h4 class="m-0">Coloração de Barba</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h4 class="m-0">Mechas e Luzes</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h4 class="m-0">Correção de Cor</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../images/coloracao/azul.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Coloração Completa de Cabelo</h3>
                                    <p class="mb-4">Transforme seu visual com uma coloração completa de cabelo. Oferecemos uma ampla gama de cores para atender seu estilo e preferência, utilizando produtos de alta qualidade que garantem um resultado duradouro e vibrante.</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Ampla Gama de Cores</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Produtos de Alta Qualidade</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Resultados Duradouros</p>
                                    <a href="{{route('login')}}" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../images/coloracao/coloracao.png" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Coloração de Barba</h3>
                                    <p class="mb-4">Realce seu estilo com uma coloração de barba que complementa sua aparência. Seja para cobrir fios brancos ou para adicionar um toque de cor, nossos especialistas garantem um resultado natural e harmonioso.</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Resultado Natural</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Cobertura de Fios Brancos</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Especialistas em Coloração</p>
                                    <a href="{{route('login')}}" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../images/coloracao/nevou.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Mechas e Luzes</h3>
                                    <p class="mb-4">Adicione dimensão e brilho ao seu cabelo com mechas e luzes. Nossos especialistas utilizam técnicas modernas para criar um efeito natural e luminoso, realçando a beleza dos seus fios.</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Efeito Natural</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Técnicas Modernas</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Realce da Beleza dos Fios</p>
                                    <a href="{{route('login')}}" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="../images/coloracao/coloracao.png" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Correção de Cor</h3>
                                    <p class="mb-4">Se você não está satisfeito com a cor atual do seu cabelo ou barba, oferecemos serviços de correção de cor para alcançar o tom desejado. Nossa equipe está preparada para corrigir imperfeições e garantir um resultado impecável.</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Correção de Imperfeições</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Técnicas Avançadas</p>
                                    <p><i class="fa fa-check text-success me-3" style="margin-right: 10px"></i>Resultado Impecável</p>
                                    <a href="{{route('login')}}" class="btn btn-primary py-3 px-5 mt-3" style="border-radius: 15px">Agende<i class="fa fa-arrow-right ms-3" style="margin-left: 10px"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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


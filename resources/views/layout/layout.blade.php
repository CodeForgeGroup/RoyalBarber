<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Royal Barber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('fonts/flaticon/font/flaticon.css') }}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/logo-royalbarberBRANCO-borda.png') }}" type="image/x-icon">
  </head>
  <body>

    <style>
        /*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid #FFFFFF;
    border-radius: 35px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

.site-footer {
    position: relative; /* Adicione position: relative para que ::before seja relativo a .site-footer */
    background-image: url(../images/Gif.webp);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;/* Define a cor do texto para branco, para contraste com o fundo escuro */
}

.site-footer::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Escurece a imagem de fundo com 50% de opacidade */
}
    </style>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Royal Barber</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ url ('/') }}">Página Inicial</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ url ('/sobre') }}">Sobre</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{ url ('/cortes') }}">Corte de Cabelo Masculino</a>
                    <a class="dropdown-item" href="{{ url ('/servicos/barba') }}">Corte de Barba</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/tratamento')  }}">Tratamentos</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/coloracao')  }}">Coloração de Barba e Cabelo</a>
                    <a class="dropdown-item" href="{{  url ('/servicos/cuidados')  }}">Produtos de Cuidados Masculinos</a>
                  </div>

                </li>


                <li class="nav-item">
                  <a class="nav-link" href="{{ url ('/contato') }}">Contato</a>
                </li>
              </ul>


            <div class="box-btn-login">
                <a href="{{ url('/login') }}" class="btn btn-black btn-login">Login</a>
            </div>

            </div>
          </div>
        </nav>
      </header>

    <!-- END header -->




    <main>
        @yield('conteudo')
    </main>



    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn site-footer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Nos conheça</h4>
                    <a class="btn btn-link" href="{{ url('/') }}">Início</a>
                    <a class="btn btn-link" href="{{ url('/sobre') }}">Sobre</a>
                    <a class="btn btn-link" href="{{ url('cortes') }}">Serviços</a>
                    <a class="btn btn-link" href="{{ url('/contato') }}">Contato</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Constate-nos</h4>
                    <p class="mb-2">Avenida Marechal Tito, 1500 - São Paulo, Brasil</p>
                    <p class="mb-2">(11)95169-04143</p>
                    <p class="mb-2">codeforgegroup@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Expediente</h4>
                    <h5 class="text-light fw-normal">Segunda - Sexta</h5>
                    <p>10:00 - 20:00</p>
                    <h5 class="text-light fw-normal">Sábados</h5>
                    <p>11:00 - 21:00</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">RoyalBarber</a>, Todos os direitos reservados.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Desenvolvido por <a class="border-bottom" href="https://htmlcodex.com">CodeForge</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Cadastre-se</a>
                            <a href="">App</a>
                            <a href="">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

      <script src="{{ asset ('js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset ('js/jquery-migrate-3.0.0.js') }}"></script>
      <script src="{{ asset ('js/popper.min.js') }}"></script>
      <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset ('js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

      <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset ('js/magnific-popup-options.js') }}"></script>

      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init({
                publicKey: "ErsNaJMuiwFOJ3Ynq",
            });
        })();
    </script>

      <script src="{{ asset ('js/main.js') }}"></script>
    </body>
  </html>


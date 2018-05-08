<html>
    <head>
        <title>Beer House:  @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Custom fonts for this template -->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="{{asset('css/template.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

    </head>
    <body class="bg-light">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

                <a class="navbar-brand js-scroll-trigger" href="{{ url("")}}">Beer House</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse js-scroll-trigger" id="navbarResponsive">

                    <div class="input-group mb-3 div-search">
                        <input type="text" class="form-control" placeholder="Buscar ...." aria-label="Buscar ...." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <div class="dropdown ldropdown js-scroll-trigger">
                                <button class="btn btnNavbar">
                                    <a class="nav-link js-scroll-trigger" href="#"><img src="img\profile.png" alt="Perfil" title="Perfil"/></i></a>
                                </button>
                                <div class="dropdown-content ldropdown-content">
                                    <a href="login.html">Entrar</a>
                                    <a href="{{ url("register")}}">Registre-se</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="cart.html"><img src="img\beer.png" alt="Cerveja"  data-toggle="tooltip" data-placement="top" title="Meu carrinho"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Drink Experience!</div>
                </div>
            </div>
        </header>

        <!-- container -->
            <div class="container">
                @yield('content')

                      </div>
                      <!-- /.container -->

                      <!--Footer-->
                      <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

                          <!--Footer Links-->
                          <div class="container text-center text-md-left">
                              <div class="row">

                                  <!--First column-->
                                  <div class="col-md-4">
                                      <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Sobre</h5>
                                      <p>Nós é pika e o resto é buraco</p>


                                  </div>
                                  <!--/.First column-->

                                  <hr class="clearfix w-100 d-md-none">

                                  <!--Second column-->
                                  <div class="col-md-4 mx-auto">
                                      <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Receba nossas novidades</h5>
                                      <ul class="list-unstyled">
                                          <li>
                                              <div class="col-md-10">
                                                  <input class="form-control" id="email" name="email" type="email" placeholder="cadastre seu email" required="required"><br>
                                                  <a class="btn btn-primary btn-block btn-enviar-email" href="#">Enviar</a>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                                  <!--/.Second column-->

                                  <hr class="clearfix w-100 d-md-none">

                                  <!--Third column-->
                                  <div class="col-md-2 mx-auto">
                                      <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Selos de Segurança</h5>
                                      <ul class="list-unstyled">
                                          <li>
                                              <img src="img\selos.png" alt="Selos de Segurança">
                                          </li>
                                      </ul>
                                  </div>
                                  <!--/.Third column-->

                                  <hr class="clearfix w-100 d-md-none">

                                  <!--Fourth column-->
                                  <div class="col-md-2 mx-auto">
                                      <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Formas de Pagamento</h5>
                                      <ul class="list-unstyled">
                                          <li>
                                              <img src="img\formas-pagamento.png" alt="Formas de Pagamento">
                                          </li>
                                      </ul>
                                  </div>
                                  <!--/.Fourth column-->
                              </div>
                          </div>
                          <!--/.Footer Links-->

                          <hr>

                          <!--Social buttons-->
                          <div class="text-center">
                              <ul class="list-unstyled list-inline">
                                  <li class="list-inline-item">
                                      <a class="btn-floating btn-sm btn-fb mx-1" href="https://www.google.com/" target="_blank">
                                          <img src="img\facebook.png" alt="Facebook">
                                      </a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a class="btn-floating btn-sm btn-tw mx-1" href="https://www.google.com/" target="_blank">
                                          <img src="img\twitter.png" alt="Twitter">
                                      </a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a class="btn-floating btn-sm btn-gplus mx-1" href="https://www.google.com/" target="_blank">
                                          <img src="img\instagram.png" alt="Instagram">
                                      </a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a class="btn-floating btn-sm btn-li mx-1" href="https://www.google.com/" target="_blank">
                                          <img src="img\pinterest.png" alt="Pinterest">
                                      </a>
                                  </li>
                              </ul>
                          </div>
                          <!--/.Social buttons-->

                          <!--Copyright-->
                          <div class="footer-copyright py-3 text-center">
                              © 2018 Copyright:
                              <a href="#"> T3L </a>
                          </div>
                          <!--/.Copyright-->

                      </footer>
                      <!--/.Footer-->



                      <!-- JavaScript -->
                      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
                      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
                      <!-- Custom scripts for this template -->
                      <script src="{{asset('js/agency.js')}}"></script>
                      <script src="{{asset('js/script.js')}}"></script>

                  </body>
              </html>

<!DOCTYPE html>
<!--
    @author: Lucas Lacerda
-->
<html>
    <?php
    include("style-template.php");
    ?>

    <body class="bg-light">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

                <a class="navbar-brand js-scroll-trigger" href="index.php">Beer House</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <div class="input-group mb-3 div-search">
                        <input type="text" class="form-control" placeholder="Buscar ...." aria-label="Buscar ...." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <div class="dropdown ldropdown">
                                <button class="btn btnNavbar">
                                    <a class="nav-link js-scroll-trigger" href="#"><img src="img\profile.png" alt="Perfil" title="Perfil"/></i></a>
                                </button>
                                <div class="dropdown-content ldropdown-content">
                                    <a href="login.html">Entrar</a>
                                    <a href="register.html">Registre-se</a>
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






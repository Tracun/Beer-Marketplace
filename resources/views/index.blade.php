@extends("template")

@section('title', "Drink experience!")

@section('content')


<div class="row">

    <div class="col-lg-3">


        <div class="col-sm-3 div-logo">
            <img class="img-responsive logo-index text-md-left" src="img/Beer_House_Logo.png"/>
        </div>

        <!--                    <h1 class="my-4">Beer House</h1>-->


<!--  categoria será uma tabela -->
        <div class="list-group categoria">
            <div class="card-header">Estilos</div>
            <a href="#" class="list-group-item categoria-item">Lager</a>
            <a href="#" class="list-group-item categoria-item">Pilsen</a>
            <a href="#" class="list-group-item categoria-item">Pale Ale</a>
            <a href="#" class="list-group-item categoria-item">Strong Ale</a>
            <a href="#" class="list-group-item categoria-item">Amber Ale</a>
            <a href="#" class="list-group-item categoria-item">Porter</a>
            <a href="#" class="list-group-item categoria-item">Dubbel</a>
            <a href="#" class="list-group-item categoria-item">Weissbier</a>
            <a href="#" class="list-group-item categoria-item">Bock</a>

        </div>
        <br> <hr> <br>
        <div class="list-group categoria">
            <div class="card-header">Sabores</div>
            <a href="#" class="list-group-item categoria-item">Adocicada</a>
            <a href="#" class="list-group-item categoria-item">Amarga</a>
            <a href="#" class="list-group-item categoria-item">Forte</a>
            <a href="#" class="list-group-item categoria-item">Frutada</a>
            <a href="#" class="list-group-item categoria-item">Suave</a>

        </div>


        <br> <hr> <br>
        <div class="list-group categoria">
            <div class="card-header">+ Filtros</div>
            <div class="list-group-item ">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="origem" id="Nacional" value="nacional">
                    <label class="form-check-label" for="Nacional">Nacional</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="origem" id="Importada" value="importada">
                    <label class="form-check-label" for="Importada">Importada</label>
                </div>

                <br> <hr>
                <div class="form-group">
                    <input class="form-control" type="text" name="fabricante" id="fabricante" placeholder="Fabricante">
                </div>

            </div>

        </div>
    </div>

    <!-- /.col-lg-3 -->

    <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid img-carousel" src="img/1.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid img-carousel" src="img/2.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid img-carousel" src="img/3.jpg" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <figure>
                                <div>
                                    <img src="img/franziskaner.jpg"/>
                                </div>
                                <a href='product-page.html'>
                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="img/colorado_indica.jpg"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="img/young.jpg"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>


                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="http://edelweissrestaurant.com.br/wp-content/uploads/2017/03/cerveja-dom-haus-dom-pedro-helles-600ml.png"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="https://i0.wp.com/brejada.com/wp-content/uploads/2014/11/Brotas-Beer-Bock.jpg" />
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="https://i.pinimg.com/736x/9c/82/6b/9c826b14b9108c5859bd3c437c59e37e--pilsen-brewing.jpg"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="img/franziskaner.jpg"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="demo-3">
                    <ul>
                        <li>
                            <a href='product-page.html'>
                                <figure>
                                    <div>
                                        <img src="img/colorado_indica.jpg"/>
                                    </div>

                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Comprar</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="demo-3">
                    <ul>
                        <li>

                            <figure>

                                <div>
                                    <img src="https://i0.wp.com/brejada.com/wp-content/uploads/2014/11/Brotas-Beer-Bock.jpg" />
                                </div>

                                <a href='product-page.html'>
                                    <figcaption>
                                        <h2>"Nome da Breja" <br>R$ 20,99 </h2>
                                        <p> Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.</p>
                                        <br>
                                        <button class="btn btn-primary btn-block" value="Comprar">Comprar</button>
                                        <br>
                                        <button class="btn btn-primary btn-block">Add. Carrinho</button>
                                    </figcaption>
                                </a>
                            </figure>

                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

</div>
<!-- /.row -->
@endsection

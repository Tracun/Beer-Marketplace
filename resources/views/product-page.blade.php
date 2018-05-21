<!--
@author: Lucas Lacerda
-->
@extends("templates.template")


@section('content')

            <div class="row">

                <!-- /.col-lg-3 -->

                <div class="col-lg-5 bg-ligth">

                    <div class="card mt-2 img-product-page text-center">
                        <img class="card-img-top img-fluid" src="{{ asset('storage/ProductImage')}}/{{$product->img}}" alt="">
                        <h4 class="card-title text-center"> <br>{{$product->maker}} - {{$product->name}}</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <h3>{{$product->name}} - {{$product->ml}}ml</h3>
                        <h4>R${{$product->price}}</h4>
                        <p class="card-text">
                          {{$product->introduction}}
                        </p>

                        <p class="card-text">
                          Vendido por: {{$vendor->nome_fantasia}}
                        </p>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        4.0 stars
                        <hr>
                        <div class="row">
                            <div class="col-sm-4"><a href="#">Consultar frete </a></div>
                            <div class="col-sm-4"> </div>
                            <div class="col-sm-4"> <a href="cart.html" class="btn btn-primary btn-block">Comprar</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br> <br>
            <div class="col-lg-12">
                <div class="card card-outline-secondary card mt-2">
                    <div class="card-header">
                        Sobre
                    </div>
                    <div class="card-body">
                        <p>Fabricante: {{$product->maker}}</p>
                        <p>ABV: {{$product->ABV}}%</p>
                        <p>IBU: {{$product->IBU}} </p>
                        <p>Tipo: {{$category->name}}</p>
                        <p>Nacionalidade: {{$nationality->country}}</p>
                        <p>Ingredientes: {{$product->ingredients}}</p>

                        </br>
                        <p class="descricao"><h5>Descrição:</br></h5> {{$product->descr}} </p>
                        <small class="text-muted"></small>
                    </div>
                </div>
                <hr>
                <div class="card card-outline-secondary card mt-2">
                    <div class="card-header">
                        Quem já provou
                    </div>
                    <div class="card-body">
                        <p> Copo furadis é disculpa de bebadis, arcu quam euismod magna. </p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Suco de cevadiss deixa as pessoas mais interessantis</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Leave a Review</a>
                    </div>
                </div>
                <!-- /.card -->
            </div>

@endsection

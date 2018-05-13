@extends("templates.template")

@section('title', "Drink experience!")

@section('content')


<div class="row">

  <div class="col-lg-3">


    <div class="col-sm-3 div-logo">
      <img class="img-responsive logo-index text-md-left" src="img/Beer_House_Logo.png" />
    </div>

    <!--                    <h1 class="my-4">Beer House</h1>-->


    <!--  categoria será uma tabela -->
    <div class="list-group categoria">
      <div class="card-header">Estilos</div>
      @foreach ($categories as $category)
      <a href="/index/categoria/{{$category->id}}" class="list-group-item categoria-item">{{ $category->name }}</a> @endforeach



    </div>
    <br>
    <hr> <br>
    <div class="list-group categoria">
      <div class="card-header">Nacionalidade</div>
      @foreach ($countries as $country)
      <a href="/index/origem/{{$country->id}}" class="list-group-item categoria-item">{{$country->country}}</a> @endforeach

    </div>


    <br>
    <hr> <br>
    <div class="list-group categoria">
      <div class="card-header">+ Filtros</div>
      <div class="list-group-item ">
        <br>
        <div class="form-group">
          <input class="form-control" type="text" name="fabricante" id="fabricante" placeholder="Fabricante">
        </div>
        <hr>
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

      @foreach($products as $product)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="demo-3">
          <ul>
            <li>
              <figure>
                <div>
                  <img src="{{ asset('storage/ProductImage')}}/{{$product->img}}" />
                </div>
                <a href='product-page/{{$product->id}}'>
                  <figcaption>
                    <h2>{{$product->name}}</h2><h3>R$ {{$product->price}} </h3>
                    <!-- <p> {{$product->descr}}</p> -->
                    <br>
                    <a class="btn btn-primary btn-block">Comprar</a>
                    <a class="btn btn-primary btn-block">Add. Carrinho</a>
                  </figcaption>
                </a>
              </figure>
            </li>
          </ul>
        </div>
      </div>
      @endforeach


    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->
@endsection

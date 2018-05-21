@extends("templates.template")

@section('title', "Cadastro de Produtos")

@section('content')
<div class="col-md-2"></div>

<div class="card card-register mx-auto mt-5 col-md-8">
  @if(Session::has('msg_sucess'))
    <div class="alert alert-sucess"> <img src="img/sucess.png" height="50" width="50" title="Sucesso!">
       {{Session::get('msg_sucess')}}
    </div>
  @endif

  @if(Request::is('*/edit'))
    {!! Form::model($product, ['method' => 'PATCH', 'url' => 'register-product/$product->id'])!!}
    <div class="card-header">Edite seu produto
    </div>
  @else
    <div class="card-header">Cadastre seu produto
    </div>
  @endif




  <div class="card-body">

    <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <label for="image">Imagem: *</label>
            <br>
            {!! Form::file('img', null, ['class' => 'form-control', 'required', 'maxlength' => 50])!!}
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="maker">Fabricante: *</label>
              {!! Form::text('maker', null, ['class' => 'form-control', 'required', 'autofocus', 'maxlength' => 50])!!}
          </div>
          <div class="col-md-6">
            <label for="name">Nome: *</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-3">
            <label for="ml">ml: *</label>
            {!! Form::number('ml', null, ['class' => 'form-control', 'required'])!!}
          </div>
          <div class="col-md-3">
            <label for="price">Preço: *</label>
            {!! Form::text('price', null, ['class' => 'form-control', 'required'])!!}

          </div>
          <div class="col-md-3">
            <label for="ibu">IBU: *</label>
            {!! Form::number('IBU', null, ['class' => 'form-control', 'required'])!!}

          </div>
          <div class="col-md-3">
            <label for="abv">ABV: % *</label>
            {!! Form::number('ABV', null, ['class' => 'form-control', 'required'])!!}
          </div>
        </div>

      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="Categoria">Categoria: *</label>
            {!! Form::select('category', $categories, null, ['class' => 'form-control', 'required'])!!}
          </div>
          <div class="col-md-6">
            <label for="Nacionalidade">Nacionalidade: *</label>
            {!! Form::select('nationality', $countries, null, ['class' => 'form-control', 'required'])!!}

          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="form-row">
          <div class="col-md-10">
            <label for="ingredients">Ingredientes: *</label>
            {!! Form::text('ingredients', null, ['class' => 'form-control', 'required', 'maxlength' => 140 ])!!}
          </div>
          <div class="col-md-2">
            <label for="stock">Estoque: *</label>
            {!! Form::number('stock', null, ['class' => 'form-control', 'required'])!!}
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <label for="introduction">Apresentação:</label>
            {!! Form::textarea('introduction', null, ['class' => 'form-control', 'rows' => '2', 'maxlength' => 199 ] ) !!}
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <label for="Descrição">Descrição: *</label>
            {!! Form::textarea('descr', null, ['class' => 'form-control', 'required', 'rows' => '2', 'maxlength' => 600 ] ) !!}
          </div>
        </div>
      </div>

      {!! Form::submit('Finalizar cadastro', ['class' => 'btn btn-primary btn-block'])!!}

      <div class="text-center">
        <a class="d-block small mt-3" href="{{ route('list') }}">Lista de produtos</a>
      </div>

    </form>
  </div>
</div>

<div class="col-md-2"></div>
@endsection

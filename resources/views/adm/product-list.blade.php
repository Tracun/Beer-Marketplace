@extends("templates.template")

@section('title', "Produtos cadastrados")

@section('content')

<div class="col-md-2"></div>

<div class="col-md-10 mx-auto mt-5">

@if(Session::has('msg_sucess'))
  <div class="alert alert-sucess"> <img src="img/sucess.png" height="50" width="50" title="Sucesso!">
     {{Session::get('msg_sucess')}}
  </div>
@endif

<div class="card-header">
   <div class="row">
   <div class="col-11">Lista de produtos cadastrado</div>
      <a class="btn btn-primary" href="register-product">
         <i class="fas fa-plus"></i>
    </a>
</div>
</div>

    <div class="panel-body">
      <table class="table">
        <th>ID</th>
        <th>Produto</th>
        <th>Nome</th>
        <th>Quant. estoque</th>
        <th>Ações</th>
        @foreach($products as $product)

        <tr>
          <td>{{$product->id}} </td>
          <td>
            <img class="card-img-top img-fluid" src="{{ asset('storage/ProductImage')}}/{{$product->img}}" style="width:50px; height:50px;">
          </td>
          <td>{{$product->name}} </td>
          <td>{{$product->stock}} </td>
          <td>
            <a class="btn btn-warning" href="register-product/{{$product->id}}/edit"> Editar </a>
            <a class="btn btn-danger" href="product-list/{{$product->id}}/delete"> Excluir </a>

          </td>
        </tr>
        @endforeach

      </table>

    </div>
</div>
    <div class="col-md-2"></div>

    @endsection

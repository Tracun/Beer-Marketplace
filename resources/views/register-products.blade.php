@extends("templates.template")

@section('title', "Cadastro de Produtos")

@section('content')

<div class="container">

            <form method="post" action="{{url('products')}}">
              {{csrf_field()}}
                <div class="form-group">

                    <br><br>
                    <label for="Nome">Nome: *</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus>

                    <label for="Preço">Preço: *</label>
                    <input type="text" class="form-control" id="price" name="price" required>

                    <label for="Descrição">Descrição: *</label>
                    <input type="text" class="form-control" id="desc" name="desc" required>

                    <label for="Categoria">Categoria: *</label>
                    <select class="form-control" id="category" name="category" required>
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>

                    <label for="Nacionalidade">Nacionalidade: *</label>
                    <select class="form-control" id="nationality" name="nationality" required>
                        @foreach ($countries as $country)
                          <option value="{{$country->id}}">{{$country->country}}</option>
                        @endforeach
                    </select>

                    <label for="IBU">IBU: *</label>
                    <input type="number" class="form-control" id="ibu" name="ibu" required>

                    <label for="IBU">ABV: *</label>
                    <input type="number" class="form-control" id="abv" name="abv" required>

                    <br>
                    <label for="Selecionar imagem do Produto:">Selecionar imagem do Produto: *</label>
                    <br>
                    <input type="text" class="form-control" id="imageProduct" name="imageProduct" required>

                    <br><br>
                    <input class="btn btn-primary btnCad" type="submit" value="Cadastrar">
                  </div>

            </form>

          </div>
@endsection

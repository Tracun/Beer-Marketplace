@extends("templates.template")

@section('title', "Cadastro de Produtos")

@section('content')
<div class="col-md-2"></div>

  <div class="card card-register mx-auto mt-5 col-md-8">
      <div class="card-header">Cadastre seu produto
      </div>

      <div class="card-body">

            <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
              {{csrf_field()}}


              <div class="form-group">
                    <div class="form-row">
                         <div class="col-md-12">
                           <label for="image">Imagem: *</label>
                           <br>
                           <input type="file" class="form-control" id="image" name="image" required>
                         </div>
                       </div>
                     </div>

              <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                          <label for="maker">Fabricante: *</label>
                          <input type="text" class="form-control" id="maker" name="maker" required autofocus>
                        </div>
                        <div class="col-md-6">
                          <label for="name">Nome: *</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                          <div class="form-row">
                        <div class="col-md-3">
                          <label for="ml">ml: *</label>
                          <input type="number" class="form-control" id="ml" name="ml" required>
                        </div>
                        <div class="col-md-3">
                          <label for="price">Preço: *</label>
                          <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="col-md-3">
                            <label for="ibu">IBU: *</label>
                            <input type="number" class="form-control" id="ibu" name="ibu" required>
                          </div>
                          <div class="col-md-3">
                            <label for="abv">ABV: % *</label>
                            <input type="number" class="form-control" id="abv" name="abv" required>
                          </div>
                      </div>

                    </div>

              <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="Categoria">Categoria: *</label>
                            <select class="form-control" id="category" name="category" required>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="Nacionalidade">Nacionalidade: *</label>
                            <select class="form-control" id="nationality" name="nationality" required>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->country}}</option>
                            @endforeach
                            </select>
                        </div>
                      </div>
                    </div>


                      <div class="form-group">
                            <div class="form-row">
                                  <div class="col-md-10">
                                      <label for="ingredients">Ingredientes: *</label>
                                      <input type="text" class="form-control" id="ingredients" name="ingredients" maxlenth="100" required>
                                    </div>
                                    <div class="col-md-2">
                                      <label for="stock">Estoque: *</label>
                                      <input type="number" class="form-control" id="stock" name="stock" required>
                                    </div>
                                  </div>
                              </div>

              <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                              <label for="Descrição">Descrição: *</label>
                              <textarea type="text" class="form-control" id="desc" name="desc" required></textarea>
                        </div>
                      </div>
                    </div>

              <input type="submit"  data-popup-open="popup-1" value="Finalizar cadastro" class="btn btn-primary btn-block">

                  <div class="text-center">
                      <a class="d-block small mt-3" href="#">Voltar ao Dashboard</a>
                  </div>

            </form>
          </div>
        </div>

        <div class="col-md-2"></div>
@endsection

@extends("templates.template")

@section('title', "Cadastro de vendedor")

@section('content')
<div class="col-md-2"></div>

@if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

    <div class="card card-register mx-auto mt-5 col-md-8">
        <div class="card-header">Faça seu cadastro
        </div>

        <div class="card-body">
          <form action="{{url('register-vendors')}}" method="post" onsubmit="return funcValidaVendor(this);">
            {{csrf_field()}}

              <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="first_name" class="required">Nome do responsavel: <em>*</em></label>
                        <input class="form-control" id="nome_responsavel" name="nome_responsavel" type="text" aria-describedby="nameHelp" required="required" maxlength="50">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="required">Razão social: <em>*</em></label>
                        <input class="form-control" id="razao_social"  name="razao_social" type="text" aria-describedby="nameHelp" required="required" maxlength="50">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                      <label for="email" class="required">Nome fantasia:  <em>*</em></label>
                      <input class="form-control" id="nome_fantasia" name="nome_fantasia" type="text" aria-describedby="nameHelp" required="required" maxlength="50">
                  </div>
                    <div class="col-md-6">
                        <label for="email" class="required">Nome de usuario:  <em>*</em></label>
                        <input class="form-control" id="user_login" name="user_login" type="text" aria-describedby="nameHelp" required="required" maxlength="15">
                    </div>
                      </div>
                    </div>

            <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                      <label for="email" class="required">E-mail:  <em>*</em></label>
                      <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="lucas@seuemail.com.br" required="required">
                  </div>
                </div>
              </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="password" class="required">Senha <em>*</em></label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Senha" required="required" maxlength="8" onblur="validarSenha()">
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_password" class="required">Confirmar senha <em>*</em></label>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Confirme sua senha" required="required" maxlength="8" onblur="return validarSenha()">
                        <p id="validarSenha"></P>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="CNPJ">CNPJ <em>*</em></label>
                        <input class="form-control" id="cnpj" name="cnpj" type="text" placeholder="12.345.678/0001-09" onblur="return validarCNPJ()" onkeyup="" onkeypress="return onlyNum(event)" maxlength="14" required="required">
                        <p id="validarCNPJ"></P>
                    </div>
                    <div class="col-md-6">
                        <label for="cep" class="required">CEP<em>*</em></label>
                        <input class="form-control" id="cep" name="cep" type="text"  placeholder="04046-500" required="required" onkeypress="return onlyNum(event)" onblur="pesquisacep(this.value);" maxlength="9">
                    </div>
                  </div>
                </div>

            <div class="form-group" >
                <div class="form-row">

                    <div class="col-md-7">
                        <label for="endereco" class="required">Endereço<em>*</em></label>
                        <input class="form-control" id="endereco" name="endereco" type="text"  placeholder="" required="required" maxlength="50">
                    </div>
                    <div class="col-md-5">
                        <label for="numEndereco" class="required">Numero<em>*</em></label>
                        <input class="form-control" id="numEndereco" name="numEndereco" type="text"  placeholder="" required="required">
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="bairro" class="required">Bairo<em>*</em></label>
                        <input class="form-control" id="bairro" name="bairro" type="text"  placeholder="" required="required" maxlength="20">
                    </div>
                    <div class="col-md-3">
                        <label for="cidade" class="required">Cidade<em>*</em></label>
                        <input class="form-control" id="cidade" name="cidade" type="text"  placeholder="" required="required" maxlength="20">
                    </div>
                    <div class="col-md-2">
                        <label for="uf" class="required">UF<em>*</em></label>
                        <input class="form-control" id="uf" name="uf" type="text"  placeholder="" required="required" maxlength="2">
                    </div>

                    <div class="col-md-3">
                        <label for="phone" class="required">Telefone <em>*</em></label>
                        <input class="form-control" id="phone" name="phone" type="text" placeholder="(11) 1243-14589" onkeyup="FormatTel(this, event)" onkeypress="return onlyNum(event)" maxlength="14">
                    </div>
                  </div>
                </div>

            <input type="submit"  data-popup-open="popup-1" value="Finalizar cadastro" class="btn btn-primary btn-block">

            <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Realizar login</a>
                <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
            </div>

          </form>
        </div>
      </div>

<div class="col-md-2"></div>

@endsection

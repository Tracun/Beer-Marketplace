@extends("templates.template")

@section('title', "Cadastro")

@section('content')
<div class="col-md-2"></div>

    <div class="card card-register mx-auto mt-5 col-md-8">
      @if(Session::has('msg_sucess'))
        <div class="alert alert-sucess"> <img src="img/sucess.png" height="50" width="50" title="Sucesso!">
           {{Session::get('msg_sucess')}}
        </div>
      @endif
        <div class="card-header">Faça seu cadastro
        </div>

        <div class="card-body">
          <form action="{{url('register-consumer')}}" method="post" onsubmit="return funcValidaConsumer(this);">
            {{csrf_field()}}

              <div class="form-group">
                <div class="form-row">
                    <div class="col-md-5">
                        <label for="first_name" class="required">Nome <em>*</em></label>
                        <input class="form-control" id="first_name" name="first_name" type="text" aria-describedby="nameHelp" placeholder="Rogerinho" required="required" maxlength="50">
                    </div>
                    <div class="col-md-7">
                        <label for="last_name" class="required">Sobrenome <em>*</em></label>
                        <input class="form-control" id="last_name"  name="last_name" type="text" aria-describedby="nameHelp" placeholder="do Ingá" required="required" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="email" class="required">Email <em>*</em></label>
                        <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="lucas@seuemail.com.br" required="required"onblur="validarEmail()">
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_email" class="required">Confirmar email <em>*</em></label>
                        <input class="form-control" id="confirm_email" name="confirm_email" type="email" aria-describedby="emailHelp" placeholder="lucas@seuemail.com.br" required="required" onblur="validarEmail()">
                        <p id="validarEmail"></P>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="password" class="required">Senha <em>*</em></label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Senha" onblur="return validarSenha()" maxlength="8">
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_password" class="required">Confirmar senha <em>*</em></label>
                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="Confirme sua senha" onblur="return validarSenha();" maxlength="8">
                        <p id="validarSenha"></P>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="cpf">CPF <em>*</em></label>
                        <input class="form-control" id="cpf" name="cpf" type="text" placeholder="123.456.789-11" onblur="return validarCPF()" onkeypress="return onlyNum(event)" maxlength="11" required="required">
                        <p id="validarCPF"></P>
                    </div>

                    <div class="dropdown col-md-4">
                        <label for="gender" class="required">Sexo <em>*</em></label>

                        <select class="form-control" id="gender" name="gender">
                            <option>Feminimo</option>
                            <option>Masculino</option>
                            <option>Não informar</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="date_born" class="required">Data de nascimento <em>*</em></label>
                        <input class="form-control" id="date_born"  name="date_born" type="date" maxlength="10" placeholder="DD/MM/AAAA" required="required">
                    </div>
                </div>
            </div>


            <div class="form-group" >
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="cep" class="required">CEP<em>*</em></label>
                        <input class="form-control" id="cep" name="cep" type="text"  placeholder="04046-500" required="required" onkeypress="return onlyNum(event)" onblur="pesquisacep(this.value);">
                    </div>
                    <div class="col-md-7">
                        <label for="endereco" class="required">Endereço<em>*</em></label>
                        <input class="form-control" id="endereco" name="endereco" type="text"  placeholder="" required="required" maxlength="50">
                    </div>
                    <div class="col-md-2">
                        <label for="numEndereco" class="required">Numero<em>*</em></label>
                        <input class="form-control" id="numEndereco" name="numEndereco" type="text"  placeholder="" required="required">
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-2">
                        <label for="bairro" class="required">Bairo<em>*</em></label>
                        <input class="form-control" id="bairro" name="bairro" type="text"  placeholder="" required="required" maxlength="20">
                    </div>
                    <div class="col-md-2">
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

                    <div class="col-md-3">
                        <label for="mobile">Celular</label>
                        <input class="form-control" id="mobile" name="mobile" type="text" placeholder="(11) 1243-14589" onkeyup="FormatTel(this, event)" onkeypress="return onlyNum(event)" maxlength="14">
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

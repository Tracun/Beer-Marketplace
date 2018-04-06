<?php
include("top-menu.php");
?>

<div class="container" >
    <div class="col-md-2"></div>
    <form action="" method="post">
        <div class="card card-register mx-auto mt-5 col-md-8">
            <div class="card-header">Faça seu cadastro
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4 left">
                        <label for="user" class="form-check-label">Tipo de cadastro <em>*</em></label>
                    </div>
                    <div class="col-md-4 left">
                        <input class="required" type="radio" id="tipoPessoa" name="tipoPessoa" value="fisica" checked>
                        <label class="required" for="inlineRadio1">Fisica</label>
                    </div>
                    <div class="col-md-4 left">
                        <input  class="required" type="radio" id="tipoPessoa" name="tipoPessoa" value="juridica">
                        <label class="required" for="inlineRadio1">Juridica</label>
                    </div>
                </div>

                <!--
                COLOCAR VALIDAÇÕES E ALTERAR O FORM A PARTIR DO CAMPO SELECIONADO, SE FOR PESSOA FISICA, UTILIZAR OS DADOS ABAIXO
                SE FOR PESSOA JURIDICA (VENDEDOR) ALTERAR PARA OBTER INFORMAÇÕES DE CNPJ, E OBTER INFORMAÇÕES SOBRE CERVEJAS QUE IRÁ VENDER
                OU ALGO ASSIM ...
                -->

                <hr>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-5">
                            <label for="user" class="required">Nome <em>*</em></label>
                            <input class="form-control" id="InputName" type="text" aria-describedby="nameHelp" placeholder="Rogerinho" required="required">
                        </div>
                        <div class="col-md-7">
                            <label for="user" class="required">Sobrenome <em>*</em></label>
                            <input class="form-control" id="InputLastName" type="text" aria-describedby="nameHelp" placeholder="do Ingá" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="user" class="required">Email <em>*</em></label>
                            <input class="form-control" id="InputEmail1" type="email" aria-describedby="emailHelp" placeholder="lucas@seuemail.com.br" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="user" class="required">Confirmar email <em>*</em></label>
                            <input class="form-control" id="InputEmail1" type="email" aria-describedby="emailHelp" placeholder="lucas@seuemail.com.br" required="required">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="user" class="required">Senha <em>*</em></label>
                            <input class="form-control" id="InputPassword1" type="password" placeholder="Senha">
                        </div>
                        <div class="col-md-6">
                            <label for="user" class="required">Confirmar senha <em>*</em></label>
                            <input class="form-control" id="ConfirmPassword" type="password" placeholder="Confirme sua senha">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="exampleConfirmPassword">CPF <em>*</em></label>
                            <input class="form-control" id="InputCPF" type="text" placeholder="123.456.789-11" onkeyup="FormatCPF(this, event)" onkeypress="return onlyNum(event)" maxlength="15">
                        </div>

                        <div class="dropdown col-md-4">
                            <label for="user" class="required">Sexo <em>*</em></label>

                            <select class="form-control" id="InputSex">
                                <option>Feminimo</option>
                                <option>Masculino</option>
                                <option>Não informar</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="user" class="required">Data de nascimento <em>*</em></label>
                            <input class="form-control" id="InputNasc" type="text" maxlength="10" placeholder="DD/MM/AAAA">
                        </div>
                    </div>
                </div>


                <div class="form-group" >
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="User" class="required">CEP<em>*</em></label>
                            <input class="form-control" id="cep" name="cep" type="text"  placeholder="04046-500" required="required" onkeypress="return onlyNum(event)" onblur="pesquisacep(this.value);">
                        </div>
                        <div class="col-md-7">
                            <label for="User" class="required">Endereço<em>*</em></label>
                            <input class="form-control" id="endereco" name="endereco" type="text"  placeholder="" required="required">
                        </div>
                        <div class="col-md-2">
                            <label for="User" class="required">Numero<em>*</em></label>
                            <input class="form-control" id="numEndereco" name="numEndereco" type="text"  placeholder="" required="required">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-2">
                            <label for="User" class="required">Bairo<em>*</em></label>
                            <input class="form-control" id="bairro" name="bairro" type="text"  placeholder="" required="required">
                        </div>
                        <div class="col-md-2">
                            <label for="User" class="required">Cidade<em>*</em></label>
                            <input class="form-control" id="cidade" name="cidade" type="text"  placeholder="" required="required">
                        </div>
                        <div class="col-md-2">
                            <label for="User" class="required">UF<em>*</em></label>
                            <input class="form-control" id="uf" name="uf" type="text"  placeholder="" required="required">
                        </div>

                        <div class="col-md-3">
                            <label for="user" class="required">Telefone <em>*</em></label>
                            <input class="form-control" id="InputPhone" type="text" placeholder="(11) 1243-14589" onkeyup="FormatTel(this, event)" onkeypress="return onlyNum(event)" maxlength="14">
                        </div>

                        <div class="col-md-3">
                            <label for="user">Celular</label>
                            <input class="form-control" id="InputCellPhone" type="text" placeholder="(11) 1243-14589" onkeyup="FormatTel(this, event)" onkeypress="return onlyNum(event)" maxlength="14">
                        </div>
                    </div>
                </div>


                <input type="submit"  data-popup-open="popup-1" value="Finalizar cadastro" class="btn btn-primary btn-block">

                <div class="text-center">
                    <a class="d-block small mt-3" href="login.html">Realizar login</a>
                    <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
                </div>


            </div>
        </div>
    </form>
    <div class="col-md-2"></div>
</div>

<?php
include("footer.php");
?>
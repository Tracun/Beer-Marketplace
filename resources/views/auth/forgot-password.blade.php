@extends("templates.template")

@section('title', "Esqueci minha senha")

@section('content')


      <div class="col-md-3">

            </div>


            <div class="card card-register mx-auto mt-5 col-md-6">
                <div class="card-header">Recuperar senha</div>
                <div class="card-body">
                    <form method="get" action=".">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="User" class="required">E-mail<em>*</em></label>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="e-mail cadastrado" required="required">
                                </div>
                            </div>
                        </div>

                        <input type="submit" data-popup-open="popup-1"  value="Enviar" class="btn btn-primary btn-block lbtn">

                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="login">Acabei de lembrar a senha</a>
                        <a class="d-block small" href="register">Ainda não tenho cadastro</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3"></div>

@endsection

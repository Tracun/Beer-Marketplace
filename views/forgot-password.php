
<?php
include("top-menu.php");
?>

<!-- Forgot password page -->
<div class="container">
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
                <a class="d-block small mt-3" href="login.html">Acabei de lembrar a senha</a>
                <a class="d-block small" href="register.html">Ainda não tenho cadastro</a>
            </div>

        </div>
    </div>


    <div class="col-md-3"></div>
</div>
<!-- End fotgot-password page -->

<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <img src="https://goo.gl/fNfvk5" height="100" width="100" title="Sucesso!">
        <p><h2>Foi enviado um e-mail com instruções para alteração de senha</h2></p>
        <p>Para retornar a página principal. <a data-popup-close="popup-1" href="index.html">Clique aqui.</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="index.html">x</a>
    </div>
</div>


<?php
include("footer.php");
?>
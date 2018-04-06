<?php
include("top-menu.php");
?>


<link href="style/checkout.css" rel="stylesheet">


<!-- Page checkout payment -->
<div class="row lrow">
    <div class="col-75">
        <div class="container lcontainer">
            <form action="">

                <div class="row lrow">
                    <div class="col-50">
                        <h3>Endereço de cobrança</h3>
                        <label class="llabel" for="fname"><img src="img\user.png" alt="User"> Nome Completo</label>
                        <input class="linput" type="text" id="fname" name="firstname" placeholder="Mussum Ipsum">
                        <label class="llabel" for="email"><img src="img\email.png" alt="Email"> Email</label>
                        <input class="linput" type="text" id="email" name="email" placeholder="mussum@ipsum.com">
                        <label class="llabel" for="adr"><img src="img\street.png" alt="Endereço">Endereço</label>
                        <input class="linput" type="text" id="adr" name="address" placeholder="Rua do Mussum, 123">
                        <label class="llabel" for="city"><img src="img\city.png" alt="Cidade"> Cidade</label>
                        <input class="linput" type="text" id="city" name="city" placeholder="São Paulo">

                        <div class="row lrow lrowInf">
                            <div class="col-50">
                                <label class="llabel" for="state">Estado</label>
                                <input class="linput" type="text" id="state" name="state" placeholder="SP">
                            </div>
                            <div class="col-50">
                                <label class="llabel" for="zip">CEP</label>
                                <input class="linput" type="text" id="zip" name="zip" placeholder="00000-000">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Pagamento</h3>
                        <label for="fname">Aceitamos estes cartões</label>
                        <div class="icon-container">
                            <img src="img\visa.png" alt="Visa">
                            <img src="img\mastercard.png" alt="Mastercard">
                            <img src="img\amex.png" alt="Amex">
                            <img src="img\discover.png" alt="Discover">
                        </div>
                        <label class="llabel" for="cname">Nome no cartão</label>
                        <input class="linput" type="text" id="cname" name="cardname" placeholder="Mussum Ipsum">
                        <label class="llabel" for="ccnum">Numero do cartão</label>
                        <input class="linput" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label class="llabel" for="expmonth">Mês</label>
                        <input class="linput" type="text" id="expmonth" name="expmonth" placeholder="Abril">

                        <div class="row lrow lrowInf">
                            <div class="col-50">
                                <label class="llabel" for="expyear">Ano</label>
                                <input class="linput" type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label class="llabel" for="cvv">CCV</label>
                                <input class="linput" type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="labelBtn">
                    <label>
                        <input class="linput" type="checkbox" checked="checked" name="sameadr"> Endereço de entrega é o mesmo de cobrança
                    </label>
                    <input type="submit" data-popup-open="popup-1" value="Finalizar Pagamento" class="btn btn-primary btn-block lbtn">

                </div>
            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container lcontainer">
            <h4 class="title-cart">Carrinho
                <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i>
                    <b>2</b>
                </span>
            </h4>
            <p><a href="#">Cerveja 1</a> <span class="price">R$ 20,00</span></p>
            <p><a href="#">Cerveja 2</a> <span class="price">R$ 20,00</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>R$ 40,00</b></span></p>
        </div>
    </div>
</div>

<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <img src="https://goo.gl/fNfvk5" height="100" width="100" title="Sucesso!">
        <p><h2>Operação realizada com sucesso!</h2></p>
        <p>Para retornar a página principal. <a data-popup-close="popup-1" href="index.html">Clique aqui.</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="index.html">x</a>
    </div>
</div>

<!-- end ckeckout page -->

<?php
include("footer.php");
?>


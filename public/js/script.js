/*
 @author: Lucas Lacerda
 @author: Lucas Alves

 */

function FormatTel(campo, teclapres) {
    var tecla = teclapres.keyCode;
    var vr = new String(campo.value);
    vr = vr.replace("(", "");
    vr = vr.replace(")", "");
    vr = vr.replace("-", "");
    tam = vr.length + 1;
    if (tecla != 14)
    {
        if (tam == 1)
            campo.value = '(' + vr.substr(0, 1);
        if (tam == 2)
            campo.value = '(' + vr.substr(0, 1) + vr.substr(1, 2) + ')';
        if (tam == 3)
            campo.value = '(' + vr.substr(0, 1) + vr.substr(1, 2) + ')' + ' ' +
                    vr.substr(2, 11);
    }
}


function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value = " ";
            document.getElementById('bairro').value = " ";
            document.getElementById('cidade').value = " ";
            document.getElementById('uf').value = " ";


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=cep_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}
;

function cep_callback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('endereco').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
    } else {
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    document.getElementById('ibge').value = ("");
}

function onlyNum(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58))
        return true;
    else {
        if (tecla == 8 || tecla == 0)
            return true;
        else
            return false;
    }
}

function validarSenha(){
        primeiraSenha = document.getElementById('password').value;
        segundaSenha = document.getElementById('confirm_password').value;
        if (primeiraSenha != segundaSenha){
             document.getElementById("validarSenha").innerHTML = "Por favor certifique-se que suas senhas coincidem.";
             return false;
        }
        document.getElementById("validarSenha").innerHTML = "";
        return true;
 }

 function validarEmail(){
         primeiroEmail = document.getElementById('email').value;
         segundoEmail = document.getElementById('confirm_email').value;
         if (primeiroEmail != segundoEmail){
              document.getElementById("validarEmail").innerHTML = "Por favor certifique-se que seus emails coincidem.";
              return false;
         }
         document.getElementById("validarEmail").innerHTML = "";
         return true;
  }

// Função que verifica o CNPJ
  function validarCNPJ() {
      pegaCnpj = document.getElementById('cnpj').value;

      cnpj = pegaCnpj.replace(/[^\d]+/g,'');

      if (cnpj.length != 14) {
          document.getElementById('validarCNPJ').innerHTML = "Digite seu CNPJ completo";
          return false;
        }


      // Elimina CNPJs invalidos conhecidos
      if (cnpj == "00000000000000" ||
          cnpj == "11111111111111" ||
          cnpj == "22222222222222" ||
          cnpj == "33333333333333" ||
          cnpj == "44444444444444" ||
          cnpj == "55555555555555" ||
          cnpj == "66666666666666" ||
          cnpj == "77777777777777" ||
          cnpj == "88888888888888" ||
          cnpj == "99999999999999") {
          document.getElementById('validarCNPJ').innerHTML = "CNPJ invalido";
          return false;
        }

      // Valida DVs
      tamanho = cnpj.length - 2
      numeros = cnpj.substring(0,tamanho);
      digitos = cnpj.substring(tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
              pos = 9;
      }

      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0)) {
          document.getElementById('validarCNPJ').innerHTML = "CNPJ invalido";
          return false;
        }

      tamanho = tamanho + 1;
      numeros = cnpj.substring(0,tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
              pos = 9;
      }

      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1)) {
        document.getElementById('validarCNPJ').innerHTML = "CNPJ invalido";
            return false;
          }
      document.getElementById("validarCNPJ").innerHTML = "";
      return true;
  }

// Função que verifica o CPF
  function validarCPF(cpf) {
      pegaCpf = document.getElementById('cpf').value;

      cpf = pegaCpf.replace(/[^\d]+/g,'');

      if (cpf.length != 11) {
          document.getElementById('validarCPF').innerHTML = "Digite seu CPF completo";
          return false;
        }

      // Elimina CPFs invalidos conhecidos
      if (cpf == "00000000000" ||
          cpf == "11111111111" ||
          cpf == "22222222222" ||
          cpf == "33333333333" ||
          cpf == "44444444444" ||
          cpf == "55555555555" ||
          cpf == "66666666666" ||
          cpf == "77777777777" ||
          cpf == "88888888888" ||
          cpf == "99999999999") {
          document.getElementById('validarCPF').innerHTML = "CPF invalido";
              return false;
            }

      // Valida 1o digito
      add = 0;
      for (i=0; i < 9; i ++)
          add += parseInt(cpf.charAt(i)) * (10 - i);
          rev = 11 - (add % 11);
          if (rev == 10 || rev == 11)
              rev = 0;
          if (rev != parseInt(cpf.charAt(9))) {
            document.getElementById('validarCPF').innerHTML = "CPF invalido";
              return false;
            }

      // Valida 2o digito
      add = 0;
      for (i = 0; i < 10; i ++)
          add += parseInt(cpf.charAt(i)) * (11 - i);
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11)
          rev = 0;
      if (rev != parseInt(cpf.charAt(10))) {
        document.getElementById('validarCPF').innerHTML = "CPF invalido";

          return false;
        }
      document.getElementById("validarCPF").innerHTML = "";
      return true;
  }

// Função usada para o "onsubmit" do form "register-vendors"
  function funcValidaVendor(){
    if (!validarCNPJ() || !validarSenha()) {
      return false;
    }
    return true;
  }
// Função usada para o "onsubmit" do form "register-consumer"
  function funcValidaConsumer(){
    if (!validarCPF() || !validarSenha() || !validarEmail()) {
      return false;
    }
    return true;
  }

/* 
@author: Lucas Lacerda 
@author:  ... 

*/


// FUNÇÕES DE MASCARA PAARA CPF, CNPJ, TELEFONE E CEP. SERÃO MELHORADAS PARA A SEGUNDA ENTREGA 
// SERÁ INCLUSO FUNÇÕES DE VALIDAÇÃO AOS MESMOS. 

function FormatCPF(campo, teclapress) {
   
}


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
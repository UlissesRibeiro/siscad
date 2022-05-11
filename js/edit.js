function desabilitarNome(valor){
    var status = document.getElementById("nome_usuario").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("nome_usuario").disabled = true;
    }else{
        document.getElementById("nome_usuario").disabled = false
    }

}

function desabilitarSobrNome(valor){
    var status = document.getElementById("sobrenome_usuario").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("sobrenome_usuario").disabled = true;
    }else{
        document.getElementById("sobrenome_usuario").disabled = false
    }

}

function desabilitarCpf(valor){
    var status = document.getElementById("cpf_usuario").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("cpf_usuario").disabled = true;
    }else{
        document.getElementById("cpf_usuario").disabled = false
    }

}

function desabilitarTel(valor){
    var status = document.getElementById("telefone_usuario").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("telefone_usuario").disabled = true;
    }else{
        document.getElementById("telefone_usuario").disabled = false
    }

}

function desabilitarEmail(valor){
    var status = document.getElementById("email_usuario").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("email_usuario").disabled = true;
    }else{
        document.getElementById("email_usuario").disabled = false
    }

}
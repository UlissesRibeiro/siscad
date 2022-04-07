//habilitar formulario de cadastro
function cadastraEquipamento(){
    var checkbox = document.getElementById("sim");
    var form = document.getElementById("formulario");

    if(checkbox.checked == true){
        form.style.display = "block";
    }
    else{
        form.style.display = "none";
    }
}

//habilitar equipamento a ser cadastrado
function desabilitarMaquina(valor){
    var status = document.getElementById("maquina").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("maquina").disabled = true;
    }else{
        document.getElementById("maquina").disabled = false
    }

}

function desabilitarMonitor(valor){
    var status = document.getElementById("monitor").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("monitor").disabled = true;
    }else{
        document.getElementById("monitor").disabled = false
    }

}

function desabilitarMouse(valor){
    var status = document.getElementById("mouse").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("mouse").disabled = true;
    }else{
        document.getElementById("mouse").disabled = false
    }

}

function desabilitarTeclado(valor){
    var status = document.getElementById("teclado").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("teclado").disabled = true;
    }else{
        document.getElementById("teclado").disabled = false
    }

}

function desabilitarEstabilizador(valor){
    var status = document.getElementById("estabilizador").disabled;

    if(valor == 'sim' && !status){
        document.getElementById("estabilizador").disabled = true;
    }else{
        document.getElementById("estabilizador").disabled = false
    }

}
<?php
error_reporting(0);
ini_set("display_errors", 0 );
require_once 'conn.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de cadastro de funcionários e seus respectivos equipamentos!">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

    <title>Sistema de Cadastro - v.0.1</title>
    <script src="js/functions.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container d-flex justify-content-center" style="padding-top: 20px;">
    <form id="formCad" class="row g-3" action="cadastra.php" method="post">
        <h1></h1>
        <!-- Dados do usuario -->
        <div class="form-floating mb-3 col-md-6">
        <input class="form-control" type="text" name="nome_usuario" id="nome_usuario" placeholder="nome" minlength="2" maxlength="15" required>
        <label for="nome_usuario">* Nome</label>    
        </div>

        <div class="form-floating mb-3 col-md-6">
        <input class="form-control" type="text" name="sobrenome_usuario" id="sobrenome_usuario" placeholder="sobrenome" minlength="2" maxlength="45" required>
        <label for="sobrenome_usuario">* Sobrenome</label>    
        </div>

        <div class="form-floating mb-3 col-md-6">
        <input class="form-control" type="text" name="cpf_usuario" id="cpf_usuario" placeholder="apenas números" minlength="11" maxlength="11" required>
        <label for="cpf_usuario"><i class="bi bi-credit-card-2-front-fill">* CPF</i></label>
        </div>

        <div class="form-floating mb-3 col-md-6">
        <input class="form-control" type="email" name="email_usuario" id="email_usuario" placeholder="email@mail.com" required>
        <label for="email_usuario"><i class="bi bi-envelope-fill">* E-mail</i></label>
        </div>

        <div class="form-floating mb-3 col-md-6">
        <input class="form-control" type="tel" name="telefone_usuario" id="telefone_usuario" placeholder="ddd+telefone" minlength="11" maxlength="11" required>
        <label for="telefone_usuario"><i class="bi bi-telephone-fill">* Telefone</i></label>
        </div>
        <br><br>
        <div id="perfil">
            
        <label for="perfil">* Perfil de trabalho : </label>
        <input type="radio" name="perfil_trabalho" id="hibrido" value="hibrido" required>
        <label style="text-transform: capitalize;" for="hibrido">hibrido</label>

        <input type="radio" name="perfil_trabalho" id="presencial" value="presencial" required>
        <label style="text-transform: capitalize;" for="presencial">presencial</label>

        <input type="radio" name="perfil_trabalho" id="home-office" value="home-office" required>
        <label style="text-transform: capitalize;" for="home-office">home-office</label>

        </div>
        
        <?php

        ?>
        <!-- chamada para função de habilitar cadastro de equipamentos -->
        <p>* Deseja cadastrar equipamentos?
            <label for="">Sim</label> <input type="radio" name="showDiv" id="sim" required>
            <label for="">Não</label> <input type="radio" name="showDiv" id="nao" required>
            <br><span style="font-style:italic;color:red;font-size:14px;">*Campos obrigatórios</span>

            <!-- Formulario de equipamentos -->
            <div id="formulario" class="row" style="display: none;">
                <p>Quais equipamentos deseja cadastrar ?</p>
                <span style="font-size:14px;">Se seleciando algum equipamento, é obrigatório a inserção do mesmo!</span><br>
                <div class="col-md-6">
                <input type="checkbox" name="habilitaMaquina" id="habilitaMaquina"  onclick="desabilitarMaquina('sim')">
                <label for="maquina">Maquina : </label>
                <input class="form-control" type="text" name="maquina" id="maquina" required disabled="" minlength="6" maxlength="6">
                </div>

                <div class="col-md-6">
                <input type="checkbox" name="habilitaMonitor" id="habilitaMonitor"  onclick="desabilitarMonitor('sim')">
                <label for="monitor">Monitor : </label>
                <input class="form-control" type="text" name="monitor" id="monitor" required disabled="" minlength="6" maxlength="6">
                </div>

                <div class="col-md-6">
                <input type="checkbox" name="habilitaMouse" id="habilitaMouse"  onclick="desabilitarMouse('sim')">
                <label for="mouse">Mouse : </label>
                <input class="form-control" type="text" name="mouse" id="mouse" required disabled="" minlength="6" maxlength="6">
                </div>

                <div class="col-md-6">
                <input type="checkbox" name="habilitaTeclado" id="habilitaTeclado"  onclick="desabilitarTeclado('sim')">
                <label for="mouse">Teclado : </label>
                <input class="form-control" type="text" name="teclado" id="teclado" required disabled="" minlength="6" maxlength="6">
                </div>

                <div class="col-md-6">
                <input type="checkbox" name="habilitaEstab" id="habilitaEstab"  onclick="desabilitarEstabilizador('sim')">
                <label for="mouse">Estabilizador : </label>
                <input class="form-control" type="text" name="estabilizador" id="estabilizador" required disabled="" minlength="6" maxlength="6">
                </div>

</div>

<script>
$(function(){
    $("input[name='showDiv']").click(function(){
        if($("#sim").is(":checked")){
            $("#formulario").show();
        }else{
            $("#formulario").hide();
        }
    });
});
</script>
            <div class="btn-group" role="group">
                <button id="btnLimpar" type="reset" class="btn"><i class="bi bi-x-circle-fill"> Limpar</i></button>
                <button id="btnEnviar" type="submit" class="btn"><i class="bi bi-check-circle-fill"> Enviar</i></button>
            </div>
    </form>
</div>

</body>
</html>


<?php

include_once 'conn.php';
include_once 'cfg/nav.php';

$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$instrucaoSQL ="SELECT * From funcionarios where id='$id'";
$resultSet = $conn->query($instrucaoSQL);

?>

<html>
        <head>
        <title>Formulário HTML - Cadastro de Clientes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
    </head>
<body>
<div class="container d-flex justify-content-center" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class=" card" style="width:auto;" >
                            <div class="card-header">
                                <h3 style="text-align:center;">Funcionário(s)</h3>
                            </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nome
                                        <th scope="col">Sobrenome
                                        <th scope="col">CPF
                                        <th scope="col">Telefone
                                        <th scope="col">E-mail
<!--<th scope="col">Patrimonios-->
                                        
                                    </tr>
                                </thead>
                            <tbody>
                                
<?php
    while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
        
           
?>
                            <tr>
                                <form action="salva.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br>

                                <td style="text-transform:capitalize;">
                                <!--<input type="checkbox" name="desbNome" id="desbNome" onclick="desabilitarNome('sim')">-->
                                <input style="width:100px;" type="text" id="nome_usuario" name="nome_usuario" value="<?php echo $row['nome_usuario']; ?>"
                                    minlength="2" maxlength="15" required>
                                </td>


                                <td style="text-transform:capitalize;">
                                <!--<input type="checkbox" name="desbNome" id="desbNome" onclick="desabilitarSobrNome('sim')">-->
                                <input style="width:100px;" type="text" id="sobrenome_usuario" name="sobrenome_usuario" value="<?php echo $row['sobrenome_usuario']; ?>"
                                    minlength="2" maxlength="25" required ></td>


                                <td>
                                <!--<input type="checkbox" name="desbNome" id="desbNome" onclick="desabilitarCpf('sim')">-->
                                    <input style="width:110px;" type="text" id="cpf_usuario" name="cpf_usuario" value="<?php echo $row['cpf_usuario']; ?>"
                                    minlength="11" maxlength="11" required  ></td>

                                <td>
                                <!--<input type="checkbox" name="desbNome" id="desbNome" onclick="desabilitarTel('sim')">-->
                                    <input style="width:110px;" type="text" id="telefone_usuario" name="telefone_usuario" value="<?php echo $row['telefone_usuario'].' '; ?>"
                                    minlength="11" maxlength="11" required>
                                    <a href="https://wa.me/<?php echo $row['telefone_usuario'].' '; ?>"><i class="bi bi-whatsapp" style="color:green;"> </i></a>
                                </td>
                                
                                <td style="text-transform:lowercase;">
                               <!-- <input type="checkbox" name="desbNome" id="desbNome" onclick="desabilitarEmail('sim')">-->
                                <input type="text" style="width:190px;" id="email_usuario" name="email_usuario" value="<?php echo $row['email_usuario']; ?>" required></td>
                                <!--<td style="display:flex;justify-content:center;"><button class="btn" type="submit" id="myBtn"
                                onclick="mostrarEquips()">
                                    <i class="bi bi-eye-fill"></i></button></td>-->
                                    <td><button class="btn" style="background-color:blue;color:white;" type="submit">salvar</button></td>
                                </form>
                            </tr>
<?php
endwhile;
?>

</tbody>
</table>


</div>

<script>

//alert("Ao alterar algum dado, lembre-se de salvar a alteração!");

function mostrarEquips(){
    document.getElementById('equips').style.display ='block';
    
}
function ocultarEquips(){
    document.getElementById('equips').style.display ='none';
}
</script>
                        </div>
                    </div>
                </div>
                <div class="btn btn-sm">
                    <a class="btn" style="background-color:aqua;color:black;border-color:black;" type="button" href="index.php">
                    <i class="bi bi-house-fill"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/edit.js"></script>
</body>
    </html>
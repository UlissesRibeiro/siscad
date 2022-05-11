<?php

include_once 'conn.php';
include_once 'cfg/nav.php';

$nome=$_POST['nome_usuario'];

$instrucaoSQL ="SELECT * From funcionarios where nome_usuario='$nome'";
 //"SELECT 'ulisses', maquina,monitor from funcionarios f inner join equipamento e on f.id =e.id";


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
                                        <th scope="col">Editar
                                        <th scope="col">Deletar
                                        <th scope="col">Patrimonios
                                        
                                    </tr>
                                </thead>
                            <tbody>
                                
<?php
    while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
        
           
?>
                            <tr>
                                
                                <td style="text-transform:capitalize;"><?php echo $row['nome_usuario']; ?></td>
                                

                                <td style="text-transform:capitalize;"><?php echo $row['sobrenome_usuario']; ?></td>
                                <td><?php echo $row['cpf_usuario']; ?></td>
                                <td><?php echo $row['telefone_usuario'].' '; ?><a href="https://wa.me/<?php echo $row['telefone_usuario'].' '; ?>"><i class="bi bi-whatsapp" style="color:green;"> </i></a> </td>
                                <!--<td><?php //echo $row['telefone_usuario'].' '; ?></td>-->
                                <td style="text-transform:lowercase;"><?php echo $row['email_usuario']; ?></td>
                                <td><a  name="id" href="edita.php?id=<?php echo $row['id']; ?>" class="btn"><i class="bi bi-pencil-fill"></i></a></td>
                                <td><button class="btn"><i class="bi bi-x-circle-fill"></i></button>
                                <td style="display:flex;justify-content:center;"><button class="btn" type="submit" id="myBtn"
                                onclick="mostrarEquips()">
                                    <i class="bi bi-eye-fill"></i></button></td>
                                
                            </tr>
<?php
endwhile;
?>

</tbody>
</table>

<!------------------------------------->
<?php 

$nome=$_POST['nome_usuario'];
$equipamentos = "SELECT id ,maquina,monitor,mouse,teclado,estabilizador
FROM funcionarios INNER JOIN equipamento using (id) WHERE nome_usuario = '$nome' ";
$BuscaEquip = $conn->query($equipamentos);

?>

<div id="equips" style="display:none;" class="container  justify-content-center">

<table class="table">
    <thead class="">
        <tr>
            <th scope="col">Maquina
            <th scope="col">Monitor
            <th scope="col">Mouse
            <th scope="col">Teclado
            <th scope="col">Estabilizador
            <th scope="col">Editar
        </tr>
    </thead>
<tbody >

<?php
 while ($row = $BuscaEquip->fetch(PDO::FETCH_ASSOC)):
?>
    <tr >
        <td ><?php echo $row['maquina']; ?></td>

        
        <td ><?php echo $row['monitor']; ?></td>

        <td ><?php echo $row['mouse']; ?></td>

        <td ><?php echo $row['teclado']; ?></td>

        <td ><?php echo $row['estabilizador']; ?></td>
        <td><button class="btn" type="submit"><i class="bi bi-pencil-fill"></i></button></td>
        <td><button class="btn" onclick="ocultarEquips()"><i class="bi bi-eye-slash-fill"></i></button></td>

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
    
</body>
    </html>
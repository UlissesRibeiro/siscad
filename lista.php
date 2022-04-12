<?php

include_once 'conn.php';
include_once 'cfg/nav.php';

$nome=$_POST['nome_usuario'];

$instrucaoSQL = "Select * From funcionarios where nome_usuario='$nome'";
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
                                <h3 style="text-align:center;">Listagem de Funcionários</h3>
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
                                <td><button class="btn" type="submit"><i class="bi bi-pencil-fill"></i></button></td>
                                
                            </tr>
<?php
endwhile;
?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn btn-sm">
                    <a class="btn" style="background-color:aqua;color:black;border-color:black;" type="button" href="index.php"><i class="bi bi-house-fill"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
    </html>
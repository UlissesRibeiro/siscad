<?php

include_once 'conn.php';

$instrucaoSQL = "Select * From funcionarios";
$resultSet = $conn->query($instrucaoSQL);
?>

<html>
        <head>
        <title>Formulário HTML - Cadastro de Clientes</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    </head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card"  >
                            <div class="card-header">
                                <h3>Listagem de Funcionários</h3>
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
                                        
                                    </tr>
                                </thead>
                            <tbody>
<?php
    while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
?>
                            <tr>
                                
                                <td><?php echo $row['nome_usuario']; ?></td>
                                <td><?php echo $row['sobrenome_usuario']; ?></td>
                                <td><?php echo $row['cpf_usuario']; ?></td>
                                <td><?php echo $row['telefone_usuario']; ?></td>
                                <td><?php echo $row['email_usuario']; ?></td>
                                
                            </tr>
<?php
endwhile;
?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
    </html>
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
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                                        <th scope="col">Editar
                                        
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
            </div>
        </div>
    </div>
    </div>
</body>
    </html>
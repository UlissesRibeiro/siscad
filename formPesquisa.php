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


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Sistema de Cadastro - v.0.1</title>
    <script src="js/functions.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container d-flex justify-content-center" style="padding-top: 20px;">
            <form id="formCad" class="container row g-3 " action="lista_usuarios.php" method="post">
            <div class="form-floating mb-3 col-md-12">
                <input class="form-control" type="text" name="nome_usuario" id="nome_usuario" placeholder="nome" minlength="1" maxlength="15" required>
                <label for="nome_usuario">Nome</label> 
            </div>
                <div class="btn-group" role="group">
                    <button id="btnLimpar" type="reset" class="btn"><i class="bi bi-x-circle-fill"> Limpar</i></button>
                    <button id="btnEnviar" type="submit" class="btn"><i class="bi bi-search"> Pesquisar</i></button>
                </div>

                <?php
                
                $nome=$_POST['nome_usuario'];

                $instrucaoSQL = "Select * From funcionarios where nome_usuario='$nome'";
                $resultSet = $conn->query($instrucaoSQL);?>

       
        

<?php
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)):
?>

<?php
endwhile;
?>


        
    </form>
</div>
    </div>
    </div>
</body>
</html>


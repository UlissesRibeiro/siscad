<?php

require_once 'conn.php';

        $nome=$_POST['nome_usuario'];
        $sobrenome=$_POST['sobrenome_usuario'];
        $cpf=$_POST['cpf_usuario'];
        $telefone=$_POST['telefone_usuario'];
        $email=$_POST['email_usuario'];

        $stmt = $conn->prepare("INSERT INTO funcionarios (nome_usuario,sobrenome_usuario,cpf_usuario,telefone_usuario,email_usuario)
                            VALUES(?,?,?,?,?)");

        $resultSet = $stmt->execute([$_POST['nome_usuario'],$_POST['sobrenome_usuario'],$_POST['cpf_usuario'],
        $_POST['telefone_usuario'], $_POST['email_usuario']]);
                            
        if($resultSet){
            echo "Os dados foram inseridos com sucesso.";
            }else{
            echo "Ocorreu um erro e não foi possível inserir os dados.";
            }
            //Destruindo o objecto statement e fechando a conexão
            $stmt = null;
            $conn = null;


?>
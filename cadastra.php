<?php

require_once 'conn.php';
require_once 'cfg/nav.php';

        $nome=$_POST['nome_usuario'];
        $sobrenome=$_POST['sobrenome_usuario'];
        $cpf=$_POST['cpf_usuario'];
        $telefone=$_POST['telefone_usuario'];
        $email=$_POST['email_usuario'];
        $perfil=$_POST['perfil_trabalho'];
        //bloco para verificar se o cpf já está cadastrado
        $stmt = $conn->prepare("SELECT * from funcionarios where cpf_usuario = $cpf");
        $stmt->execute();
        $count = $stmt->rowcount();
        //se cadastrado retorna a mensagem, com base na verificação da query
        if($count > 0){
            echo "<h4 style='text-align:center;'>CPF já cadastrado em nossa base de dados!</h4>";
            echo "<h5 style='text-align:center;'><a href='index.php' class='btn'
                    style='background-color:aqua;color:black;border-color:black;'><i class='bi bi-house-fill'></i> Voltar</a></h5>";
        }
        //se não, avança no cadastro
        else{
            $stmt = $conn->prepare("INSERT INTO funcionarios (nome_usuario,sobrenome_usuario,cpf_usuario,telefone_usuario,email_usuario,perfil_trabalho)
                            VALUES(?,?,?,?,?,?)");

            $resultSet = $stmt->execute([$_POST['nome_usuario'],$_POST['sobrenome_usuario'],$_POST['cpf_usuario'],
            $_POST['telefone_usuario'], $_POST['email_usuario'],$_POST['perfil_trabalho']]);
            
            if($resultSet){
               
                echo "Os dados foram inseridos com sucesso";
                }else{
                echo "<h4 style='text-align:center;'>Ocorreu um erro e não foi possível inserir os dados.</h4>";
                }
                //Destruindo o objecto statement e fechando a conexão
                $stmt = null;
                $conn = null;

        }




        

?>
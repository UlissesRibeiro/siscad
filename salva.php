<?php

include_once 'conn.php';

$id=$_POST['id'];
$nome=$_POST['nome_usuario'];
$sobrenome=$_POST['sobrenome_usuario'];
$cpf=$_POST['cpf_usuario'];
$telefone=$_POST['telefone_usuario'];
$email=$_POST['email_usuario'];


$stmt = $conn->prepare("UPDATE funcionarios SET nome_usuario='$nome',sobrenome_usuario='$sobrenome',
cpf_usuario='$cpf',telefone_usuario='$telefone',email_usuario='$email' WHERE id='$id'");

$resultSet = $stmt->execute([$_POST['nome_usuario'],$_POST['sobrenome_usuario'],$_POST['cpf_usuario'],
$_POST['telefone_usuario'],$_POST['email_usuario']]);
            
            if($resultSet){
               
                echo "<h5 style='text-align:center;'>Os dados foram inseridos com sucesso.</h5>";
                echo "<a class='btn' href='index.php'>Voltar</a>";
                }else{
                echo "<h4 style='text-align:center;'>Ocorreu um erro e não foi possível inserir os dados.</h4>";
                }

                $stmt = null;
                $conn = null;

                ?>
<?php

/***CONEXÃO COM O BD ***/
//Constantes para armazenamento das variáveis de conexão.
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'siscad');
define('USER', 'root');
define('PASSWORD', 'ragnarok0');

try {
    $conn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
    //echo "Connected successfully";
    }
    catch (PDOException $e) {
        //echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' . $e->getMessage();
    }
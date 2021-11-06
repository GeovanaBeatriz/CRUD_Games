<?php

$servidor = 'localhost'; 
$usuario = 'root'; 
$senha = '';
$banco = 'CRUD_GamerVision'; 

// Conectar com o Banco de Dados
        $link = mysqli_connect($servidor, $usuario, $senha, $banco);
        if ($link->connect_errno) {
            echo "Falha ao conectar-se com o banco de daods: (".$link->connect_errno.") ".$link->connect_error;
        } 

?>
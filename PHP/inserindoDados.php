<meta charset="utf-8">

<?php
$nome = $_POST["nome_jogos"];
$genero = $_POST["genero_jogo"];
$criador= $_POST["criador_jogo"];
$preco = $_POST["preco_jogo"];
$descricao = $_POST["descricao_jogo"];


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'CRUD_GamerVision';

$link = mysqli_connect($servidor, $usuario, $senha, $banco);
if ($link->connect_errno) {
echo "Falha ao conectar-se com o banco de daods: (".$link->connect_errno.") ".$link->connect_error;
}

$cadastro = "INSERT INTO tbl_jogos(";
$cadastro = $cadastro."Jogo_Nome, ";
$cadastro = $cadastro."Jogo_Genero, ";
$cadastro = $cadastro."Criador, ";
$cadastro = $cadastro."Preco, ";
$cadastro = $cadastro."Jogo_Descricao) ";
$cadastro = $cadastro."VALUES (";
$cadastro = $cadastro."'$nome', ";
$cadastro = $cadastro."'$genero', ";
$cadastro = $cadastro."'$criador', ";
$cadastro = $cadastro."'$preco', ";
$cadastro = $cadastro."'$descricao')";

$link->query($cadastro) or die($link->error); // Encerra a conexão

mysqli_close($link);
header("index.php");
// Abaixo está a tabela em que será inserido os dados referentes ao Banco de Dados
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jogos</title>

<style>
body{
background: no-repeat linear-gradient(135deg,#020024 10%, #080871 40% , #060674 70%, #2778ac);
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
text-decoration: none;
}
table{
border: 1px solid linear;
background-color: white;
width: 90%;
margin-left: 5%;
border-collapse: collapse;
margin-bottom: 50px;
}

.edit, .delete{
transition: background-color .4s ease;
cursor: pointer;
font-weight: 600;
font-family: sans-serif;
}
.edit:hover{
background-color: green;
color: white;
}
.delete:hover{
background-color: red;
color: white;
}
.button{
display: block;
width: 100%;
text-align: center;
text-decoration: none;
color: white;
font-weight: bold;
}
a{
text-decoration: none;
color: white;
    
}
</style>
</head>
<body>
<a href="index.php">Retornar para página inicial</a>
</body>
</html>

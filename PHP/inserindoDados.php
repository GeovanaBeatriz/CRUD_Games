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
   echo "<script>alert('Banco de Dados atualizado com sucesso!');</script>";

   // Abaixo está a tabela em que será inserido os dados referentes ao Banco de Dados
  ?>

  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="estilo.css">
      <title>Jogos</title>
  </head>
  <body>
      
  </body>
  </html>
<meta charset="utf-8">
   <?php   
    $id = $_POST["ID"]; 
    $nome = $_POST['nome_jogos'];
    $genero = $_POST["genero_jogo"];
    $criador= $_POST["criador_jogo"];
    $preco = $_POST["preco_jogo"];
    $descricao = $_POST["descricao_jogo"];

   $servidor = 'localhost';
   $usuario = 'root';
   $senha = '';
   $banco = 'CRUD_GamerVision';
   $link = mysqli_connect($servidor, $usuario, $senha, $banco);
   if (!$link) {
   echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   exit;
   }  
         
         //query SQL   
         $alterar = "UPDATE tbl_jogos SET Jogo_Nome='$nome', Jogo_Genero='$genero', Criador='$criador', Preco='$preco', Jogo_Descricao='$descricao' ";   
         $alterar = $alterar."WHERE id='$id'";   
         $link->query($alterar) or die($link->error);   
         
         // Encerra a conexão   
         mysqli_close($link);   
       
         ?>  

<!DOCTYPE html><html lang="pt-br">   
           <head>      
            <meta charset="utf-8">  
            <link rel="stylesheet" type="text/css" href="../estilo.css">     
            <title>Alterado</title> 
            <style>

            h1{
                text-align: center;
                color: white;
            }

            .container{
                display: flex;
                align-content: center;
                flex-direction: column;
                justify-content: center;
            }
                
            .link_modificado{
                text-decoration: none;
                text-align: center;
                border: white 1px solid;
                border-radius: 5px;
                color: white;
                padding: 20px;
                width: 50%;
                margin-left: 25%;
              
            }
            </style>   
        </head>    
        <body>  
            <div class="container"> 
            <h1>Jogo atualizado!</h1> 
            <a href="cadastro.php" class="link_modificado">Página principal</a>
        </div>
</body>
<html>

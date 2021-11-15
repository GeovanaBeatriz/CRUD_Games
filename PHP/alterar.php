<meta charset="utf-8">

<?php    // Conectar com o Banco de Dados  
 $link = mysqli_connect('localhost', 'root', '', 'CRUD_GamerVision');    
 if (!$link) {      
      echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;  
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;      
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;       
      exit;    
      }    
      $id = $_GET["ID"];   
      //query SQL   
      $sql = "SELECT * FROM tbl_jogos WHERE id = $id";    
      $rs = mysqli_query($link, $sql);   
      $dado = mysqli_fetch_assoc($rs);?>  
      
      <!DOCTYPE html><html lang="pt-br">   
           <head>      
            <meta charset="utf-8">  
            <link rel="stylesheet" type="text/css" href="../estilo.css">     
            <title>Alterar</title>    
        </head>    
        <body>      
            <h2>Alteração de dados do Contato</h2>  
            <div class="formulario alterar">    
            <form  method="post" action="http://localhost/CRUD/PHP/modificando.php">                    
                <p><b>ID : <input type="number" name="ID" readonly="readonly" class="item" value="<?php echo $dado["ID"]; ?>"></p>
                <p><b>Nome : <input type="text" name="nome_jogos" class="item" value="<?php echo $dado["Jogo_Nome"]; ?>"></p>
                <p><b>Gênero : <input type="text" name="genero_jogo"  class="item"value="<?php echo $dado["Jogo_Genero"]; ?>"></p>
                <p>Sobrenome : <input type="text" name="criador_jogo" class="item" value="<?php echo $dado["Criador"]; ?>"></p>
                <p>Preço : <input type="number" name="preco_jogo" class="item" value="<?php echo $dado["Preco"]; ?>"></p></b> 
                <textarea cols="40" rows="10" style=" resize: none" placeholder="Descrição"  name="descricao_jogo" ><?php echo $dado["Jogo_Descricao"]; ?></textarea></p>
              <button value="submit" class="button" class="alterar">Alterar</button>
            </div>    
            </form>       
         
        </body> 
        </html> 
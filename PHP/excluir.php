
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            font-family: cursive, sans-serif;
            background: no-repeat linear-gradient(135deg,#020024 10%, #080871 40% , #060674 70%, #2778ac);
            width: 100%;
            height: 100%;
            background-attachment: fixed;
            position: fixed;
        }
        p{
            font-size: 40px;
            font-weight: 800;
            color: white;
        }
        input[type="text"]{
            display: none;
        }
        form{
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            width: 300px;
            
        }
        #a_style, input[type="submit"]{
            padding: 10px 40px;
            font-family: cursive, sans-serif;
            border: none;
            width: 40%;
            text-align: center;
            display: flex;
            justify-content: center;
            text-decoration: none;
            color: blue;
            font-size: 20px;
            font-weight: bold;
            background-color: white;
            color: blue;
            transition: background-color .3s ease;
            cursor: pointer;
            border-radius: 5px;
        }
        #a_style:hover, input[type="submit"]:hover{
            background-color: #080871;
            color: white;
        }
    </style>
</head>
<body>
    <p>O que você deseja fazer?</p>
    <form action="cadastro.php" method="post">
    <input type="text" name="nome_jogos">
        <input type="text" name="genero_jogo">
        <input type="text" name="criador_jogo">
        <input type="text" name="preco_jogo">
        <input type="text" name="descricao_jogo">
        <a id="a_style" href="cadastro.php">Cadastrar</a>
        <a id="a_style" href="index.php">Voltar</a>
    </form>
</body>
</html>
<?php
    $id = $_GET['ID'];
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'CRUD_GamerVision';
    
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
    if ($link->connect_errno) {
    echo "Falha ao conectar-se com o banco de dados: (".$link->connect_errno.") ".$link->connect_error;
    }

    $sql = "DELETE FROM tbl_jogos WHERE ID='$id'";
    $query = $link->prepare($sql);
    $query->execute();
    /*$d = mysqli_query($link, $sql);
    mysqli_close($link);*/
?>
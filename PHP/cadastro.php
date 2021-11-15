<?php
include_once"conexaoBd.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <title> Gamer Vision - Cadastro </title>
</head>
<body>
        <main>
            <h2>Sistema de jogos</h2>
        <div class="formulario">
            <form action="http://localhost/CRUD/PHP/inserindoDados.php" method="POST">
            <label>Cadastre seus jogos</label>

            <div class="field">
            <input type="text" name="nome_jogos" placeholder="Nome" class="item" required>
            </div>

            <div class="field">
            <input type="text" name="genero_jogo" placeholder="Gênero" class="item" required>
            </div>

            <div class="field">
            <input type="text" name="criador_jogo" placeholder="Criador" class="item" required>
            </div>

            <div class="field">
            <input type="number" name="preco_jogo" placeholder="Preço" class="item" required>
            </div>
    
            <div class="field">
            <textarea name="descricao_jogo" cols="40" rows="10" style=" resize: none" placeholder="Descrição" required ></textarea>
            </div>


            <button value="submit" class="button">Cadastrar</button>
            <button type="reset" value="Limpar" class="button">Limpar</button>
            </form>
            </div>
            </main>

            <footer>
                <p>Copyright &copy; GamerVision.com</p>
            </footer>
    
    </div>
</body>
</html>
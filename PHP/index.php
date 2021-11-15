<meta charset="utf-8">

<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'CRUD_GamerVision';

$link = mysqli_connect($servidor, $usuario, $senha, $banco);
if ($link->connect_errno) {
echo "Falha ao conectar-se com o banco de daods: (".$link->connect_errno.") ".$link->connect_error;
}
mysqli_close($link);

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
    margin-top: 2%;
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
color: black;
    
}

#a{

    text-decoration: none;
    color: white;
    border-radius: 5px;
    border: white 1px solid;
    padding: 10px;
    transition: all 1000ms ease-in-out;
    
    }
#a:hover{
    background: white;
    color: #020024;
}

    .content{
        display: flex;
        justify-content: center;
    }

    footer p{
        color:white;
        display: flex;
        justify-content: center;
        margin-top: 37%;
        font-size: 12px;
    }
</style>
</head>
<body>
<div class="content">
<a id="a"href="cadastro.php">Cadastrar</a>
</div>
<table border="1px" style="text-align:center" width="100%">
<thead>

<tr>
<td width="200" align="center"><h4>Nome</h4></td>
<td width="150" align="center"><h4>Gênero</h4></td>
<td width="150" align="center"><h4>Criador</h4></td>
<td width="150" align="center"><h4>Preço</h4></td>
<td width="150" align="center"><h4>Descrição</h4></td>
<td colspan="2" width="150" align="center"><h4>Modificações</h4></td>
</tr>
</thead>
<?php
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

$sql = "SELECT * FROM tbl_jogos";
$rs = mysqli_query($link, $sql);
?>
<?php
foreach($rs as $dado){

?>
      <tr>
        <td align="center"><?php echo $dado['Jogo_Nome']?></td>
        <td align="center"><?php echo $dado['Jogo_Genero']?></td>
        <td align="center"><?php echo $dado['Criador']?></td>
        <td align="center">R$<?php echo $dado['Preco']?></td>
        <td align="center"><?php echo $dado['Jogo_Descricao']?></td>
        <td align="center" class="edit"><a><?php echo "<a href='alterar.php?ID=".$dado['ID']."'>Alterar</a>"?></a></td>
        <td align="center" class="delete"><a><?php echo "<a href='excluir.php?ID=".$dado['ID']."'>Excluir</a>"?></a></td>
        </tr>

        <?php }  ?>

<?php
mysqli_close($link);
?>

</tbody>
</table>
<footer>
                <p>Copyright &copy; GamerVision.com</p>
            </footer>
</body>
</html>

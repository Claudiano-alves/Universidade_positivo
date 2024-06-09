<?php
include_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <header>
        <nav>
            <ul>
                <a href="./index.php"><li>Listar</li></a>
                <a href="./cadastrar.php"><li>Cadastrar</li></a>
                <a href="./excluir.php"><li>Excluir</li></a>
                <a href="./editar.php"><li>Editar</li></a>
            </ul>
        </nav>
    </header>
    <!-------------------------------------------------------------->
    <h1>Editar</h1>
    <?php 
    $queryUsuario = "SELECT idUsuario, nomeUsuario, sobrenomeUsuario, email FROM teste.usuario";
    $result = $pdo->prepare($queryUsuario);
    $result->execute();

    if(!empty($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $queryUsuarioConsultaUpdate = "SELECT * FROM teste.usuario WHERE idUsuario=$id"; 

        $resultConsultaUpdate = $pdo->prepare($queryUsuarioConsultaUpdate);
        $resultConsultaUpdate->execute();
        $rowTableEditar = $resultConsultaUpdate->fetch(PDO::FETCH_ASSOC);
    ?>
        
    <form name="AtualizarUsuario" method="GET" action="">
        <label>ID:</label>
        <input type="text" name="id" value="<?php echo $rowTableEditar['idUsuario']?>"><br><br>
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php echo $rowTableEditar['nomeUsuario']?>"><br><br>

        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?php echo $rowTableEditar['sobrenomeUsuario']?>"><br><br>

        <label>E-mail:</label>
        <input type="email" name="email" id="email" placeholder="E-mail" value="<?php echo $rowTableEditar['email']?>"><br><br>

        <input type="submit" value="Atualizar" name="AtualizarUsu"><br><br>
    </form>

    <?php 

    $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        if(!empty($dados['AtualizarUsu']))
        {
            $sqlUpdate = "UPDATE teste.usuario
                          SET nomeUsuario = '". $dados['nome'] ."',
                          sobrenomeUsuario = '". $dados['sobrenome'] ."', 
                          email = '". $dados['email'] ."'
                          WHERE idUsuario=$id"; 
            $resultAtualizar = $pdo->prepare($sqlUpdate);
            $resultAtualizar->execute();
            header("Refresh:1");
            echo date('H:i:s Y-m-d');
            
            
        }
    ?>


    <?php   
    }

    if(($result) AND ($result->rowCount() != 0))
    {
        ?>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>E-mail</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while ($rowTable = $result->fetch(PDO::FETCH_ASSOC)) 
                    {
                        //var_dump($rowTable);
                        extract($rowTable);
                        ?>
                    
                        <tr>
                            <td align="left"><?php echo $idUsuario?></td>
                            <td align="left"><?php echo $nomeUsuario?></td>
                            <td align="left"><?php echo $sobrenomeUsuario?></td>
                            <td align="left"><?php echo $email?></td>
                            <td align="center">
                                <a class="btn btn-sm btn-danger" href="editar.php?id=<?php echo $idUsuario?>">Editar</a>
                            </td>

                        </tr>
                    <?php }?>
                </tbody>
            </table> 
        <?php
    }
    else
    {
        echo "<p style='color: red;'>Erro: Usuário não encontrado!</><br>";
    }

    
    ?>
<!--------------------------------------------------------------------->
</body>
</html>
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
    <!--1 - ADICIONADO CONTEÚDO TAG HEADER NAS PÁGS CADASTRAR E INDEX-->
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
    <h1>Excluir</h1>
    <?php 
        $queryUsuario = "SELECT idUsuario, nomeUsuario, sobrenomeUsuario, email FROM teste.usuario";
        $result = $pdo->prepare($queryUsuario);
        $result->execute();

        if(!empty($_REQUEST['id']))
        {
            $id = $_REQUEST['id'];
            $queryUsuarioConsultaDelete = "SELECT * FROM teste.usuario
                                    WHERE idUsuario=$id"; 
            $resultConsultaDelete = $pdo->prepare($queryUsuarioConsultaDelete);
            $resultConsultaDelete->execute();


            if($resultConsultaDelete->rowCount() > 0)
            {
                $sqlDelete = "DELETE FROM teste.usuario
                            WHERE idUsuario=$id"; 
                $resultDeletar = $pdo->prepare($sqlDelete);
                $resultDeletar->execute();
                header("Refresh:1");
                echo date('H:i:s Y-m-d');
            }
            
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
                            <th>Excluir</th>
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
                            <a class="btn btn-sm btn-danger" href="excluir.php?id=<?php echo $idUsuario?>">Excluir</a>
                                </td>

                            </tr>
                        <?php }?>
                    </tbody>
                </table> 
            <?php
        }
        else
        {
            echo "<p style='color: red;'>Não existem registros a serem excluídos.</><br>";
        }
    ?>
<!--------------------------------------------------------------------->
</body>
</html>
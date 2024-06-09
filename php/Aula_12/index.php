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
    <h1>Listar</h1>
    <?php 

        $queryUsuario = "SELECT idUsuario, nomeUsuario, sobrenomeUsuario, email FROM teste.usuario";
        $result = $pdo->prepare($queryUsuario);
        $result->execute();
        //var_dump($result);

    //4 - IMPLEMENTADA TABELA COM DADOS TRAZIDOS DO BD
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        //Os dados são armazenados na variável result.
                        //fetchAll(PDO::FETCH_ASSOC), o fetch basicamente busca as informações, mas não cria a associação entre nome da coluna e valor associado, para isso precisamos do PDO::FETCH_ASSOC. O uso do fetchAll é por que vamos retornar mais que uma informação.
                        while ($rowTable = $result->fetch(PDO::FETCH_ASSOC)) 
                        {
                            extract($rowTable);//Utilizado para a forma mais otimizada
                            /*
                                A função extract() faz conversão de array para variável. Ou seja, ele converte chaves de array em nomes de variáveis ​​e valores de array em valor de variável. Em outras palavras, podemos dizer que a função extract() importa variáveis ​​de um array para a tabela de símbolos 
                            */
                            ?>
                        
                            <tr><!--Primeira forma - Menos otimizada-->
                                <!--<td align="left"><?php echo $rowTable['idUsuario']?></td>
                                <td align="left"><?php echo $rowTable['nomeUsuario']?></td>
                                <td align="left"><?php echo $rowTable['sobrenomeUsuario']?></td>
                                <td align="left"><?php echo $rowTable['email']?></td>-->

                                <!--Segunda forma - Mais otimizada-->
                                <td align="left"><?php echo $idUsuario?></td>
                                <td align="left"><?php echo $nomeUsuario?></td>
                                <td align="left"><?php echo $sobrenomeUsuario?></td>
                                <td align="left"><?php echo $email?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table> 
            <?php
        }
        else
        {
            echo "<p style='color: red;'>Não existem registros a serem listados.</><br>";
        }

    
    ?>
<!--------------------------------------------------------------------->
</body>
</html>
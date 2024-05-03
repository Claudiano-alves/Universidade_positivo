<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Calculadora - Claudiano</title>
</head>
<body>

    <main>
        <form action="" method="POST">
        <div class="botoes">
            <input type="text" placeholder="Insira o 1º número" name="number01">
            <input type="text" placeholder="Insira o 2º número" name="number02">
        </div>
            <div class="operacao">
                <?php
                    if(isset($_POST['soma'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) + floatval($_POST['number02']);
                            echo number_format($_resultado, 2);
                        }
                    }
                    if(isset($_POST['subtracao'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<pstyle='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) - floatval($_POST['number02']);
                            echo number_format($_resultado, 2);
                        }
                    }
                    if(isset($_POST['divisao'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } elseif($_POST['number02'] === '0'){
                            echo "<p style='color:red;'>Não é possível realizar divisão por zero!</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) / floatval($_POST['number02']);
                            echo number_format($_resultado, 2);
                        }
                    }
                    if(isset($_POST['multiplicacao'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) * floatval($_POST['number02']);
                            echo number_format($_resultado, 2);
                        }
                    }
                    if(isset($_POST['exponenciacao'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) ** floatval($_POST['number02']);
                            echo number_format($_resultado, 2);
                        }
                    }
                    if(isset($_POST['raizQuadrada'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $_resultado = floatval($_POST['number01']) + floatval($_POST['number02']);
                            echo sqrt(number_format($_resultado, 2));
                        }
                    }
                    if(isset($_POST['fatorial'])){
                        if(empty($_POST['number01']) || empty($_POST['number02'])){
                            echo "<p style='color:red;'>É preciso inserir os números para realizar a operação</p>";
                        } else{
                            $fatorial = 1;
                            $_resultado = intval($_POST['number01']) + intval($_POST['number02']);
                            if($_resultado < 0){
                                echo "<p style='color:red;'>O número precisar ser positivo para se calcular o fatorial</p>";
                            } else{
                                for($i = 1; $i <= $_resultado; $i++){
                                    $fatorial *= $i;
                                }
                                echo number_format($fatorial, 2);
                            }
                        }
                    }
                ?>
            </div>
            <br>
            <div class="botoes">
                <button type="submit" name="soma">&plus;</button>
                <button type="submit" name="subtracao">&minus;</button>
                <button type="submit" name="divisao">&divide;</button>
                <br>
            </div>
            <div class="botoes">
                <button type="submit" name="multiplicacao">&times;</button>
                <button type="submit" name="exponenciacao">EXP</button>
                <button type="submit" name="raizQuadrada">&radic;<span>&nbsp;</span><sup>x</button>
            </div>
            <div class="botoes">
                <button type="submit" name="fatorial">!fatorial</button>
            </div>
        </form>

    </main>
    <footer>
        <p>Rodapé da página</p>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>

<body>
    <!-- Exercício 1 -->
    <?php
        $a = 2;
        $b = 4;
        $c = 6;
        $m = (($c + $b) / 2) ** (--$c);
        $t = --$c ** ($b + $a);
        $x = --$c + $b;
        $y = $b++ + $a;
        $z = $a - $b--;
        echo "Valor de \$a: $a <br>";
        echo "Valor de \$b: $b <br>";
        echo "Valor de \$c: $c <br>";
        echo "Valor de \$m: $m <br>";
        echo "Valor de \$t: $t <br>";
        echo "Valor de \$x: $x <br>";
        echo "Valor de \$y: $y <br>";
        echo "Valor de \$z: $z <br>";
        $a = (double)$a;
        $b = (double)$b;
        $c = (string)$c;
        echo "<br>Após a conversão:<br>";
        echo "Valor de \$a (convertido para double): $a <br>";
        echo "Valor de \$b (convertido para double): $b <br>";
        echo "Valor de \$c (convertido para string): $c <br>";
        ?>
    <!-- Exercício 2 -->
    <!-- Desenvolva um código onde seja informado o raio de um círculo, e em seguida exiba na tela o raio, e o cálculo 
    do perímetro e da área do círculo. Exiba os tipos de dados referente ao raio ao perímetro e a área do círculo 
    em tela -->
    <?php
        $raio = readline("Digite o valor do raio do círculo: ");
        $raio = (float) $raio;
        $perimetro = 2 * M_PI * $raio;
        $area = M_PI * pow($raio, 2);
        
        echo "Raio do círculo: $raio (Tipo de dado: " . gettype($raio) . ") <br>";
        echo "Perímetro do círculo: $perimetro (Tipo de dado: " . gettype($perimetro) . ") <br>";
        echo "Área do círculo: $area (Tipo de dado: " . gettype($area) . ") <br>";
 
 ?>
    <!-- Exercício 3
 Desenvolva um código onde seja informado o valor de duas variáveis e na sequência seja apresentado na tela 
 de maneira clara para o usuário as seguintes informações: 
    • Informe os dois números, de maneira clara para o usuário, em tela; 
    • A soma entre os valores; 
    • A subtração entre os valores; 
    • A multiplicação entre os valores; 
    • A divisão entre os valores; 
    • O módulo do sinal do número após realizar a subtração entre os números informados; 
    • O resto da divisão entre os dois números informado;
    • A exponenciação entre os valores; 
    • A média entre os valores; 
    • A raiz quadrada da soma dos valores. 
 -->
    <?php
        $numero1 = readline("Digite o primeiro número: ");
        $numero2 = readline("Digite o segundo número: ");
        $numero1 = (float) $numero1;
        $numero2 = (float) $numero2;
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        $modulo = abs($numero1 - $numero2);
        $restoDivisao = $numero1 % $numero2;
        $exponenciacao = $numero1 ** $numero2;
        $media = ($numero1 + $numero2) / 2;
        $raizQuadradaSoma = sqrt($numero1 + $numero2);
        
        echo "Números informados: $numero1 e $numero2 <br>";
        echo "Soma: $soma <br>";
        echo "Subtração: $subtracao <br>";
        echo "Multiplicação: $multiplicacao <br>";
        echo "Divisão: $divisao <br>";
        echo "Módulo do sinal da subtração: $modulo <br>";
        echo "Resto da divisão: $restoDivisao <br>";
        echo "Exponenciação: $exponenciacao <br>";
        echo "Média: $media <br>";
        echo "Raiz quadrada da soma: $raizQuadradaSoma <br>";
    ?>
    <!-- Exercício 4
    Desenvolva um código onde se faça a implementação da equação abaixo. Apresente tal resultado para o 
    usuário. Considere o valor da variável X igual a 3. -->
    <?php
    $x = 3;
    $numerador = 2 * $x**2 - 3 * $x**($x + 1);
    $denominador = 2 * $x + sqrt($x + 1) / 4;
    $z = 2 * $x / (sqrt(4 * $x + 2) ** $x);
    echo "O resultado da expressão é: " . ($numerador / $denominador) + $z;
 ?>
    <!-- Exercício 5
 Desenvolva um código que leia três números inteiros e positivos (A, B, C) e calcule a seguinte expressão, informando o resultado em 
tela. -->
    <?php
        function quadrado($numero) {
            return $numero * $numero;
        }
        function calcularD($a, $b, $c) {
            $r = quadrado($a + $b);
            $s = quadrado($b + $c);
            $d = ($r + $s) / 2;
            
            return $d;
        }
        $a = readline("Digite o valor de A: ");
        $b = readline("Digite o valor de B: ");
        $c = readline("Digite o valor de C: ");
        if (!ctype_digit($a) || !ctype_digit($b) || !ctype_digit($c) || $a < 0 || $b < 0 || $c < 0) {
            echo "Por favor, insira números inteiros e positivos.";
        exit();
        }
        
        $a = intval($a);
        $b = intval($b);
        $c = intval($c);
        
        $resultado = calcularD($a, $b, $c);
        echo "O resultado da expressão é: $resultado";
    ?>
</body>

</html
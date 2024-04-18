<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de funções</title>
</head>
<body>
    <?php 
    /*
        minhaPrimeiraFuncao();
        function minhaPrimeiraFuncao()
        {
            echo "Minha primeira função";
        }

        echo "<br><br>";

        function minhaFuncao()
        {
            return "Usando o return pela primeira vez";
            echo "Minha segunda função";
        }

        echo minhaFuncao();

        echo "<br><br>";

        $var = minhaOutraFuncao();
        function minhaOutraFuncao()
        {
            return "Usando o return pela segunda vez";
            echo "Minha terceira função";
        }
        echo $var;

        echo "<br><br>";

        function exponenciacao($num01, $num02)
        {
            //$total = $num01**$num02;
            $total = pow($num01,$num02);
            return $total;
        }

        echo "O resultado da operação de exponenciação é " . exponenciacao(5,3);

        echo "<br><br>";
        

        function referencia(&$num_01)
        {
            $num_01*= 5;
            return $num_01;
        }

        $num_01 = 4;
        referencia($num_01);
        echo $num_01;
        

        function passagem_padrao($num_01 = 14)
        {
            return $num_01;
        }

        echo passagem_padrao();

        echo "<br><br>";
        

        function dividir($num_01, $num_02)
        {
            $operacao = ($num_01/$num_02);
            echo "O resultado da divisão é " . $operacao;
        }

        dividir(4,3);

        echo "<br><br>";

        divisao(4,3);
        function divisao($num_01, $num_02)
        {
            $operacao_01 = ($num_01/$num_02);
            return $operacao_01;
            
        }
        echo "O resultado da divisão é " . divisao(9,3);
        */

        /*
        is_bool - Verifica se a variável é um booleano;
        is_int;
        is_numeric - Informa se uma variável é um número ou uma string;
        is_string;
        is_array;
        is_float;
        is_object;
        
        //Crie uma função que faça a conversão de uma variável de string para float.
        // - Primeiro informe o tipo da variável antes de ser convertida;
        // - Em um segundo momento informe o tipo da variável após ser convertida;

        function convertToFloat($var)
        {
            if(is_float($var))
            {
                return $var;
            }
            else
            {
                return (float)$var;
            }
        }
        $var="7";
        echo "<br> Variável ainda não foi convertida: ";
        echo gettype($var);
        $var = convertToFloat($var);
        echo "<br> Foi convertido para Float: ";
        echo gettype($var);
        */

        /*
        Crie um sistema que calcule o valor dos descontos mensais de um funcionário de uma academia
        - Salário <= R$ 2.000,00 - Desconto igual a 12,5% do salário bruto;
        - Salário  > R$ 2.000,00 e salário <= R$ 3.500,00 - Desconto igual a 22,5% do salário bruto mais uma contribuição para a previdência social de R$ 50,00;
        - Salário > R$ 3.500,00 - Desconto igual a 27,5% do salário bruto mais uma contribuição para a previdência social de R$ 75,00;

        Devem ser exibidas os descontos no salário de 3 funcionários diferentes
        
        function carcularDescontos($salario, $previdencia)
        {
            if($salario <= 2000)
            {
                return ($salario*0.125);
            }
            elseif($salario > 2000 and $salario <= 3500)
            {
                return ($salario*0.225 + $previdencia);
            }
            elseif($salario > 3500)
            {
                return ($salario*0.275 + $previdencia);
            }
        }

        $funci01Nome = "José da Silva";
        $funci01Descontos = carcularDescontos(1955, 0);
        
        $funci02Nome = "Lívia Midori";
        $funci02Descontos = carcularDescontos(2100, 50);

        $funci03Nome = "Alberto Fonseca";
        $funci03Descontos = carcularDescontos(5500, 75);

        echo "O valor do salário desconto na folha salarial do funcionário $funci01Nome é R$ " . number_format($funci01Descontos,2,",",".") . "<br>";

        echo "O valor do desconto na folha salarial do funcionário $funci02Nome é R$ " . number_format($funci02Descontos,2,",",".") . "<br>";

        echo "O valor do desconto na folha salarial do funcionário $funci03Nome é R$ " . number_format($funci03Descontos,2,",",".") . "<br>";
*/
        echo "<br><br>";

        /*
        Crie uma função que apresente ao usuário se as variáveis informadas são iguais ou idênticas, além de mostrar o tipo da variável. Utilize o operador ternário.
        */

        include("./pagina.php");
        echo "<hr>";
        require_once("./pagina.php");
        echo "<hr>";

        function identidade($x, $y, $r)
        {
            $r = ($x == $y)?"SIM":"NÃO";
            echo "As variáveis A e B são iguais? $r. O tipo da primeira variável informada é " . gettype($x) . "<br>";

            $r = ($x === $y)?"SIM":"NÃO";
            echo "As variáveis A e B são idênticas? $r. O tipo da segunda variável informada é " . gettype($y) . "<br>";
        }

        $var01 = 3;
        $var02 = "3";
        $resultado = "";
        $varFuncao = identidade($var01, $var02, $var01);

        echo "$varFuncao <br>";
        echo "$varFuncao <br>";


    ?>
</body>
</html>
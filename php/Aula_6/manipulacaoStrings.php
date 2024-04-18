<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
    /*
        $nome = 'PHP';
        echo 'Minha linguagem favorita é o $nome';

        echo "<br>";

        $nome = 'PHP';
        echo 'Minha linguagem favorita é o ' . $nome;

        echo "<br>";

        $nome01 = "PHP";
        echo "Minha linguagem favorita é o $nome";

        echo "<br><br>";

        //$teste = 'PHP\u{1F4148} <br>';
        $teste = "PHP\u{1F418}";
        echo $teste;
    */
        //\u É chamado de sequência de escape em PHP. É utilizada da versão 7 em diante para exibição de caracteres especiais Unicode.

        /*
        $name="Acelino";
        $sname="Freitas";
        //echo "$name "Popó" $sname <br>";
        echo '$name "Popó" $sname <br>';
        echo "$name \"Popó\" $sname <br><br>";

        echo "<br><br>";

        //Sintaxe Heredoc
        $nome02 = 'Node';
        echo <<< TESTE
            Linguagem $nome02 é muito utilizada. <br>
        TESTE;

        echo "<br><br>";

        //Sintaxe Nowdoc
        $nome03 = 'JavaScript';
        echo <<< "ABC"
        Linguagem $nome03 é muito utilizada. <br>
        ABC;
        */
//----------MANIPULAÇÃO DE STRINGS------        
    /*
    $nome01Manipula = 'linguagem javascript';
    $nome02Manipula = 'linguagem python';
    $nome03Manipula = 'LINGUAGEM PHP';

    echo "O número de caracteres da minha string é " . strlen($nome01Manipula);

    echo "<br>";

    //Converter o primeiro caracter de cada palavra da string para maiúsculo.
    echo "Os caracteres iniciais das palavras " . ucwords($nome02Manipula) . " foram convertidos para maiúsculo";

    echo "<br>";

    //Converter o primeiro caracter da string para maiúsculo
    echo "A primeira letra de uma das palavras foi convertida para maiúscula " . ucfirst($nome01Manipula);

    echo "<br>";

    //Converte a string para minúscula
    //Útil quando se trabalha com e-mails
    echo "A string " . strtolower($nome03Manipula) . " foi convertida para minúscula";

    echo "<br>";

    //Converte a string para maiúscula
    echo "A string " . strtoupper($nome02Manipula) . " foi convertida para minúscula";

    echo "<br><br>";

    //str_replace(find, replace, string, count)
    echo str_replace('linguagem', 'Aprendendo', $nome01Manipula);

    echo "<br>";

    //substr_replace(string, replacement, start, length)
    echo substr_replace($nome01Manipula, 'Eu gosto da ', 0, 0);

    echo "<br>";

    echo substr_replace($nome01Manipula, 'Node', 10, 10);

    echo "<br>";

    //substr(string, start, length)
    echo "A função substr só retorna parte da string LINGUAGEM PHP, que é somente " . substr($nome03Manipula, 10, 3);

    echo "<br>";
    */

    //ARRAYS
    /*
    $primeiroArray = array(1, 2, 3, 4, 5);
    var_dump($primeiroArray);

    echo "<br>";

    $segundoArray = [1, 2, 3, 4, 5];
    var_dump($segundoArray);

    echo "<br>";

    $array = array(
        "chave01" => "Primeiro valor",
        "chave02" => "Segundo valor",
    );

    echo $array["chave01"];
    echo "<br>";
    echo $array["chave02"];

    echo "<br><br>";

    foreach($array as $key => $valor)
    {
        echo $valor . "<br>";
    }
    */
    /*
    $array01 = array(
        "nome" => "Vagner",
        "sobreNome" => "Tanaka",
        "idade" => "33",
        "ddd" => "43",
        "telefone" => "99026622",
    );

    foreach($array01 as $key => $valor)
    {
        echo "$key = $valor <br>" ;
    }

    echo "<br><br>";

    $array02 = array(
        "cliente01" =>
            array(
                "nome" => "Bernardo",
                "sobreNome" => "Telles",
                "ddd" => "42",
                "telefone" => "98070255",
            ),
            "cliente02" =>
                array(
                    "nome" => "Pedro",
                    "sobreNome" => "Parreira",
                    "ddd" => "12",
                    "telefone" => "98742013",
                )
            );

            echo "O nome do primeiro cliente é " . $array02["cliente01"]["nome"];
            echo "<br>";
            echo "O ddd do segundo cliente é " . $array02["cliente02"]["ddd"];

            echo "<br><br>";

            foreach($array02 as $novo_array){
                foreach($novo_array as $key01 => $dados01){
                    echo "$key01 = $dados01 <br>";
                }
                echo "<hr>";
            }

            echo "<br><br>";
            */
            //A função array_merge mescla o conteúdo de dois ou mais arrays.

            $first = array("hello", "world");
            $second = array("exit", "here");
            $merged = array_merge($first, $second);
            //echo $merged;
            print_r($merged);
            
            echo "<br>";

            foreach($merged as $valorr){
                echo $valorr . " ";
            }

            echo "<br><br>";

            //A função array_sum soma os valores  em um array
            $numeros = array(98,76,56,80);
            $total = array_sum($numeros);
            echo $total;

            echo "<br><br>";

            //A função array_diff identifica valores de um array que não estão presentes em outros. Esta função compara os valores de dois (ou mais) arrays e retorna um array que contém as entradas do array 1 que não estão presentes nos demais arrays.

            $var01 = array("bill", "claire", "ella", "simon", "judy");
            $var02 = array("jack", "claire", "toni");
            $diferenca = array_diff($var01, $var02);
            print_r($diferenca);





    ?>
</body>
</html>
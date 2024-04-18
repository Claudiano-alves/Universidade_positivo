<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle - Parte 2</title>
</head>
<body>

    <?php

    // Pedir ao usuário para digitar 5 números
    $numeros = [];
    for ($i = 0; $i < 5; $i++) {
        $numero = readline("Digite o número " . ($i + 1) . ": ");
        $numeros[] = $numero;
    }

    // Encontrar o maior número usando o loop foreach
    $maior = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    echo "O maior número digitado é: $maior\n";

    // Encontrar o maior número usando o loop for
    $maior = $numeros[0];
    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maior) {
            $maior = $numeros[$i];
        }
    }
    echo "O maior número digitado é: $maior\n";

    ?>
    <?php

    // Definindo os registros
    $carros = [
        ["nome" => "Mustang", "fabricante" => "Ford", "cor" => "Vermelho", "ano" => 2022],
        ["nome" => "Argo", "fabricante" => "Fiat", "cor" => "Branco", "ano" => 2023],
        ["nome" => "Onix", "fabricante" => "GM", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Corolla", "fabricante" => "Toyota", "cor" => "Preto", "ano" => 2020],
        ["nome" => "Versa", "fabricante" => "Nissan", "cor" => "Cinza", "ano" => 2018],
        ["nome" => "HB20", "fabricante" => "Hyundai", "cor" => "Marrom", "ano" => 2023],
        ["nome" => "Prius", "fabricante" => "Toyota", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Endeavor", "fabricante" => "Mitsubishi", "cor" => "Azul", "ano" => 2019],
        ["nome" => "Lamborghini Revuelto", "fabricante" => "Lamborghini", "cor" => "Amarelo", "ano" => 2024],
        ["nome" => "Impreza", "fabricante" => "Subaru", "cor" => "Azul", "ano" => 2019]
    ];

    // Listar todos os registros
    echo "Todos os registros:\n";
    foreach ($carros as $carro) {
        echo "{$carro['nome']}, {$carro['fabricante']}, {$carro['cor']}, {$carro['ano']}\n";
    }

    // Filtrar carros fabricados antes de 2023
    echo "\nCarros fabricados antes de 2023:\n";
    foreach ($carros as $carro) {
        if ($carro['ano'] < 2023) {
            echo "{$carro['nome']}, {$carro['fabricante']}, {$carro['cor']}, {$carro['ano']}\n";
        }
    }

    ?>
    <?php

    $texto = "&u gosto d& estudar a linguag&m PHP &m finais de semana";
    $textoCorrigido = str_replace(["&u", "d&", "&m"], ["eu", "de", "da"], $texto);
    echo "Texto corrigido: $textoCorrigido\n";

    ?>
    <?php

    $string = "ARARA";
    $stringSemRepetidos = implode(array_unique(str_split($string)));
    echo "String sem caracteres repetidos: $stringSemRepetidos\n";

    ?>

</body>
</html>
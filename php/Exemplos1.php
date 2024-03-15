<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /*
    $idade = 90;
        $peso = 90;

        if ($idade < 18 and $peso < 50){
            echo "Risco médio";
        } elseif ($idade < 18 and ($peso >= 60 and $peso <= 90)){
            echo "Sem risco";
        } elseif($idade < 18 and ($peso > 90 and $peso <= 120)){
            echo "Risco alto!";
        } elseif ($idade < 18 and $peso > 120){
            echo "Risco extremamente alto!";
        } elseif ($idade >= 18 and $idade <= 50 and ($peso < 60)){
            echo "Risco médio";
        } elseif($idade >= 18 and ($peso <= 50 and $peso > 100 and ($peso <= 140))){
            echo "Risco alto!";
        } elseif($idade >= 18 and ($peso <= 50 and $peso > 140)){
            echo "Risco extremamente alto!";
        }*/
        
    ?>
    <?php
        $idade = 23;

        echo match(true){

            ($idade < 5) => "Não pertence a nenhuma categoria",
            ($idade >= 5 and $idade < 8) => "Categoria: infantil",
            ($idade >= 8 and $idade < 12) => "Categoria: juvenil",
            ($idade >= 12 and $idade < 17) => "Categoria adolescente",
            ($idade >= 17 and $idade < 40) => "Categoria: adulto",
            ($idade >= 40 and $idade < 60) => "Categoria: Sênior",
            default => "Aguardando...",
        }
    ?>
</body>

</html>
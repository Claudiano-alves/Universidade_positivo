<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo retângulo</title>
</head>

<body>

    <?php 
        $altura = $_GET['altura'];
        $largura = $_GET['largura'];
        
        if(!empty($_GET['altura']) || !empty($_GET['largura'])){

            $area = $altura*$largura;
            $perimetro = 2*$altura+2*$largura;

            echo "<p>Perímetro $perimetro</p>";
            echo "<p>Área $area</p>";
        }
        else {
            echo "Informe os dados corretamente";
        }
        
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>

</html>
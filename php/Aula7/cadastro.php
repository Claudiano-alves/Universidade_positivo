<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Usuário cadastrado</h1>
        <main>
            <?php
                $nome = $_GET['nome'];
                $sobrenome = $_GET['sobrenome'];
                
                if(!empty($_GET['nome']) || !empty($_GET['sobrenome'])){
                    echo "<p>Bem vindo ao site $nome $sobrenome</p>";
                }
                else {
                    echo "Informe nome e sobrenome";
                }
            ?>
        </main>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </header>
</body>

</html>
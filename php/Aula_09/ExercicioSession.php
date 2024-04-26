<?php 
    session_start();
    $_SESSION['usuario'] = 'Professor';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>

    <?php 

    
        $_SESSION['nome'];
        $_SESSION['sobrenome'];
        $_SESSION['estadoCivil'];
        $_SESSION['formacaoAc'];

        
        echo "<br><a href='SessionBD.php'>Acessar BD</a>"
    ?>
    <form action="Session.php?valor=enviado" method="POST">
        <input type="text" name="nome" placeholder="Insira seu nome">
        <input type="text" name="sobrenome" placeholder="Insira seu sobre nome">
        <label for="" name="estadoCivil">Estado civíl: </label>
        <select id="escolha">
            <option value="">Solteiro</option>
            <option value="">Casado</option>
        </select>
        <input type="text" name="formacaoAc" placeholder="Insira sua formação acadêmica">

        <input type="submit" value="Enviar">
    </form>

</body>

</html>
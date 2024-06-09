<?php
include_once('./conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
</head>

<body>
  <!--ADICIONADO CONTEÚDO TAG HEADER NAS PÁGS CADASTRAR E INDEX-->
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
  <h1>Cadastrar</h1>

  <?php
  //Recebe os dados do formulário
  $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);


//Verifica se o usuário clicou no botão de submissão do formulário
  if (!empty($dados['cadastrarUsu'])) {


    $empty_input = false;
    $dados = array_map('trim', $dados);
    if (in_array("", $dados)) {
      $empty_input = true;
      echo "<p style='color: red;'>Existem campos em branco!</><br>";
    }
    elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL))
    {
      $empty_input = true;
      echo "<p style='color: red;'>E-mail informado não é válido!</><br>";
    }

    if ($empty_input == false) 
    {
      $queryUsu = "INSERT INTO teste.usuario (nomeUsuario, sobrenomeUsuario, email) VALUES('" . $dados['nome'] . "', '" . $dados['sobrenome'] . "', '" . $dados['email'] . "')";

      $cadUsuario = $pdo->prepare($queryUsu);
      $cadUsuario->execute();

        if ($cadUsuario->rowCount()) 
        {
          echo "<p style='color: green;'>Usuário cadastrado com sucesso!</p><br>";
          unset($dados); //destrói o conteúdo do array dados.
          //header("Location:cadastrar.php");
        } 

    }
    else 
    {
      echo "<p style='color: red;'>Erro: Usuário não cadastrado!</><br>";
    }
  }

  ?>

  <form name="cadastrarUsuario" method="GET" action="">
    <label>Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php if(isset($dados['nome'])){echo $dados['nome'];}?>"><br><br>

    <label>Sobrenome:</label>
    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?php if(isset($dados['sobrenome'])){echo $dados['sobrenome'];}?>"><br><br>

    <label>E-mail:</label>
    <input type="email" name="email" id="email" placeholder="E-mail" value="<?php if(isset($dados['email'])){echo $dados['email'];}?>"><br><br>

    <input type="submit" value="cadastar" name="cadastrarUsu">
  </form>

</body>

</html>

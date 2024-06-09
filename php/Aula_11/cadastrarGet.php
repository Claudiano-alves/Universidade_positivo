<?php 
include_once('./conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cadastrar</title>
</head>

<script>
    function mascaraCPF() 
    {
        var cpf = document.getElementById('cpf');
        if(cpf.value.length == 3 || cpf.value.length == 7)
        {
          cpf.value += ".";
        }
        else if(cpf.value.length == 11)
        {
          cpf.value += "-";
        }
    }
</script>

<body>
  <h1>Cadastrar</h1>

  <?php 

    if(empty($_GET['nome']))
    {
      echo "Informe o nome do usuário <br>";
    }
    else{
      $nome = $_GET['nome'];
    }

    if(empty($_GET['estadoCivil']))
    {
      echo "Informe o estado civil do usuário <br>";
    }
    else{
      $estadoCivil = $_GET['estadoCivil'];
    }

    if(empty($_GET['cpf']))
    {
      echo "Informe o CPF do usuário <br>";
    }
    else{
      $cpf = $_GET['cpf'];
    }

    if(empty($_GET['profissao']))
    {
      echo "Informe a profissão do usuário <br>";
    }
    else{
      $profissao = $_GET['profissao'];
    }
    
    if(!empty($_REQUEST['cadastrarUsu']))
    {
      $dadosCpf = str_replace(".", "", $cpf);
      $cpf = str_replace("-", "", $dadosCpf);


      $queryUsu = "INSERT INTO teste.tab_usuario (nomeUsu, estadoCivil, cpf, profissao) VALUES('" . $nome . "', '" . $estadoCivil . "', '" . $cpf . "', '" . $profissao . "')";

      $cadUsuario = $pdo->prepare($queryUsu);
      $cadUsuario->execute();
    }

    if(!empty($_REQUEST['cadastrarUsu']))
    {
      echo "<p style='color: green;'>Usuário cadastrado com sucesso!</p><br>";
    }
    else
    {
      echo "<p style='color: red;'>Erro: Usuário não cadastrado!</><br>";
    }
  ?>

  <form name="cadastrarUsuario" method="GET" action="">
    <label>Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome completo"><br><br>

    <label for="estadoCivil">Estado Civil:</label>
    <select name="estadoCivil" id="estadoCivil">
      <option value="opcao">Escolha uma opção</option>
      <option value="Casado">Casado</option>
      <option value="Solteiro">Solteiro</option>
      <option value="Não Informar">Não informar</option>
    </select><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" id="cpf" placeholder="Informe seu CPF" maxlength="14" onkeyup="mascaraCPF()"><br><br>

    <label>Profissão:</label>
    <input type="text" name="profissao" id="profissao" placeholder="Informe sua profissão"><br><br>

    <input type="submit" value="cadastar" name="cadastrarUsu">
  </form>

</body>
</html>


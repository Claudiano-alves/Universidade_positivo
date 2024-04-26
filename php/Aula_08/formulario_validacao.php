<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Validação</title>
</head>
<script>
    function mascara(valor)
    {
        var valorAlterado = valor.value;
        valorAlterado = valorAlterado.replace(/\D/g, ""); // Remove todos os não dígitos
        valorAlterado = valorAlterado.replace(/(\d+)(\d{2})$/, "$1,$2"); // Adiciona a parte de centavos
        valorAlterado = valorAlterado.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."); // Adiciona pontos a cada três dígitos
        valorAlterado = "R$" + valorAlterado;
        valor.value = valorAlterado;
    }
</script>
<body>
    <h2>Formulário de Vendas</h2>

    <?php 
        if(isset($_POST['enviarMsg']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $conteudo = $_POST['conteudo'];
            $precoCusto = $_POST['valorCusto'];
            $precoVenda = $_POST['valorVenda'];

            if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['conteudo']) || empty($_POST['valorCusto']) || empty($_POST['valorVenda']))
            {
                echo "<p style='color:red;'>Erro! Necessário preencher todos os campos</p>";
            }

            if($precoVenda < $precoCusto)
            {
                echo "O preço de venda precisa ser maior do que o preço de custo";
            }

            /*
                A função filter_var() seleciona uma variável de um tipo especificado.
                A "palavra" reservada FILTER_VALIDATE_EMAIL valida o endereço de e-mail informado
            */
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                echo "<p style='color:red;'>Erro! Formato do e-mail informado não é válido.</p>";
            }

            if(($precoVenda > $precoCusto) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                echo "<p style='color:green;'>Dados enviados com sucesso!</p>";
            }

        }
    ?>

    <form action="" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

        <label>E-mail: </label>
        <input type="text" name="email" placeholder="Digite seu e-mail"><br><br>

        <label>Assunto: </label>
        <input type="text" name="assunto" placeholder="Assunto da mensagem"><br><br>

        <!--onkeyup - Esse evento executa a função toda vez que o usuário soltar a tecla digitada.
        
        Nesse contexto, a palavra chave this faz referência ao elemento HTML que está acionando o evento.
        -->

        <label>Valor Custo: </label>
        <input name="valorCusto" placeholder="Informe o valor" onkeyup="mascara(this)"><br><br>

        <label>Valor Venda: </label>
        <input name="valorVenda" placeholder="Informe o valor" onkeyup="mascara(this)"><br><br>

        <label>Conteúdo: </label>
        <textarea name="conteudo" rows="3" cols="30" placeholder="Conteúdo da mensagem"></textarea><br><br>

        <input type="submit" name="enviarMsg" value="Enviar">
    </form>
</body>
</html>
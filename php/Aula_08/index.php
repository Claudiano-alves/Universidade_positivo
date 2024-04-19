<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<script>
function mascara(valor) {
    var valorAlterado = valor.value;
    valorAlterado = valorAlterado.replace(/\D/g, "");
    valorAlterado = valorAlterado.replace(/(\d+)(\d{2})$/, "$1, $2");
    valorAlterado = valorAlterado.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    valorAlterado = "R$" + valorAlterado;
    valor.value = valorAlterado;
}
</script>

<body>

    <?php 
        if(isset($_POST['Enviar'])){
            if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['conteudo']) || empty($_POST['valorCusto']) || empty($_POST['valorVenda'])){

                echo "<p style='color:red;'>Erro! Preencha todos os campos"
            }

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo "<p style='color:red;'>Erro! E-mail informado não é válido"
            }

            if($precoVenda < $precoCusto){
                echo "<p style='color:red;'>Valor de venda menor que o valor de custo"
            }
            if($precoVenda > $precoCusto) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL){
                echo "<p style='color:red;'>Dados enviados com sucesso"
            }
        }
    ?>

    <main>
        <form action="" method="POST">
            <div class="retangulo">Formulário</div>
            <div class="input">
                <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
                <input type="text" name="email" id="email" placeholder="Insira seu email">
                <textarea type="text" name="assunto" id="assunto" placeholder="Insira um assunto"></textarea>
                <input type="text" name="valorCusto" id="valorCusto" placeholder="Insira o valor de custo">
                <input type="text" name="valorVenda" id="valorVenda" placeholder="Insira o valor de venda">
                <input type="text" name="conteudo" id="conteudo" placeholder="Insira o conteúdo">

                <input type="submit" value="Enviar">
                <button type="resert" value="Limpar">
            </div>
        </form>
    </main>
</body>

</html>
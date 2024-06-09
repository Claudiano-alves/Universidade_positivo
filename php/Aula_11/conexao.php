<?php 
/*
//Tratamento de erros, caso ocorra algum erro dispara uma exceção - setAttribute
//Usar bloco Try-catch
//Primeiro fazer a conexão sem o try e depois adicionar

//PRIMEIRA IMPLEMENTAÇÃO

try{
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'fukuda');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    para podermos acessar o banco de dados, existem 2 principais modos de criar e executar as nossas SQL’s utilizando o PDO, o primeiro deles é o exec, para utilizar o exec vamos utilizar a seguinte sintaxe, $pdo->exec( ) para facilitar o entendimento, vamos pensar que a partir do momento que a nossa variável recebeu a conexão com o banco de dados ela passou a ter funções dentro dela, que poderão ser acessadas utilizando o símbolo -> é importante ressaltar que por ser um símbolo não pode ser atribuído separado.

    
    //$pdo->exec("INSERT INTO teste.tab_usuario (nomeUsu, estadoCivil, cpf, profissao) VALUES ('José da Silva', 'Casado', 03322578911, 'Engenheiro')");
    

}
catch(PDOException $erro)
{
    echo "ERRO => " . $erro->getMessage();
}
*/


//SEGUNDA IMPLEMENTAÇÃO

/*
Apesar do código acima funcionar perfeitamente para cadastrar um cliente em nosso banco de dados ele deixa o nosso código exposto ao SQLInjection por exemplo, não cabe a esta matéria ensinar a respeito do SqlInjection, porém o próprio PDO consegue se defender deste tipo de script mal intencionado, para fazer isso, podemos utilizar uma outra “função” do PDO que é o prepare( ) em seguida de um execute( ), o prepare serve justamente para verificar se a query recebida está no padrão esperado, caso tenha algo fora do padrão o prepare se encarrega de limpar a query para ser executada sem riscos ao nosso sistema.
*/


try{
    $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'fukuda');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*
    $sql = $pdo->prepare("INSERT INTO teste.tab_usuario (nomeUsu, estadoCivil, cpf, profissao) VALUES ('Fernando Nunes', 'solteiro', 87866671877, 'Analista de Sistemas')");
    $sql->execute();
    */
}
catch(PDOException $erro)
{
    echo "ERRO => " . $erro->getMessage();
}


?>
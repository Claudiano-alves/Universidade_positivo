Ex 1:
<?php
// Função para verificar se um número é primo
function verificarPrimo($numero) {
 if ($numero <= 1) {
 return false;
 }
 // Verifica se o número é divisível por algum número além de 1 e ele mesmo
 for ($i = 2; $i <= sqrt($numero); $i++) {
 if ($numero % $i == 0) {
 return false;
 }
 }
 return true;
}
// Captura do número digitado pelo usuário
$numero = readline("Digite um número inteiro positivo: ");
// Verifica se o número é primo
if (verificarPrimo($numero)) {
 echo "$numero é um número primo.\n";
} else {
 echo "$numero não é um número primo.\n";
}
// Exibindo os múltiplos do número
echo "Múltiplos de $numero: ";
$totalMultiplos = 0;
for ($i = 1; $i <= $numero; $i++) {
 if ($numero % $i == 0) {
 echo "$i ";
 $totalMultiplos++;
 }
}
echo "\nTotal de múltiplos: $totalMultiplos\n";
?>
Ex 2:
<?php
// Tabuada do 7
echo "Tabuada do 7:\n";
for ($i = 1; $i <= 10; $i++) {
 echo "7 x $i = " . (7 * $i) . "\n";
}
// Tabuada do 9
echo "\nTabuada do 9:\n";
for ($i = 1; $i <= 10; $i++) {
 echo "9 x $i = " . (9 * $i) . "\n";
}
?>
Ex 3:
<?php
// Definindo as variáveis para contar as idades
$maioresDeIdade = 0;
$menoresDeIdade = 0;
// Loop para capturar as idades
for ($i = 1; $i <= 15; $i++) {
 $idade = intval(readline("Digite a idade da pessoa $i: "));
 
 // Verificando se a idade é maior ou igual a 18
 if ($idade >= 18) {
 $maioresDeIdade++;
 } else {
 $menoresDeIdade++;
 }
}
// Exibindo o resultado
echo "Pessoas maiores de idade: $maioresDeIdade\n";
echo "Pessoas menores de idade: $menoresDeIdade\n";
?>
Ex 4:
<?php
// Usando while
echo "Usando while:\n";
$i = 1;
while ($i <= 10) {
 echo "Multiplicação de $i:\n";
 for ($j = 1; $j <= 10; $j++) {
 echo "$i x $j = " . ($i * $j) . "\n";
 }
 echo "\n";
 $i++;
}
// Usando do-while
echo "\nUsando do-while:\n";
$i = 1;
do {
 echo "Multiplicação de $i:\n";
 for ($j = 1; $j <= 10; $j++) {
 echo "$i x $j = " . ($i * $j) . "\n";
 }
 echo "\n";
 $i++;
} while ($i <= 10);
// Usando for
echo "\nUsando for:\n";
for ($i = 1; $i <= 10; $i++) {
 echo "Multiplicação de $i:\n";
 for ($j = 1; $j <= 10; $j++) {
 echo "$i x $j = " . ($i * $j) . "\n";
 }
 echo "\n";
}
// Usando foreach
echo "\nUsando foreach:\n";
$numeros = range(1, 10);
foreach ($numeros as $i) {
 echo "Multiplicação de $i:\n";
 for ($j = 1; $j <= 10; $j++) {
 echo "$i x $j = " . ($i * $j) . "\n";
 }
 echo "\n";
}
?>
Ex 5:
<?php
// Solicitar os dois números ao usuário
$base = readline("Digite o primeiro número (base): ");
$expoente = readline("Digite o segundo número (expoente): ");
// Usando a função de exponenciação disponível na linguagem PHP
$resultadoPHP = pow($base, $expoente);
echo "Usando função de exponenciação: $base elevado a $expoente é igual a $resultadoPHP\n";
// Usando estrutura de repetição FOR para calcular a exponenciação
$resultadoFor = 1;
for ($i = 1; $i <= $expoente; $i++) {
 $resultadoFor *= $base;
}
echo "Usando estrutura de repetição FOR: $base elevado a $expoente é igual a $resultadoFor\n";
// Usando estrutura de repetição WHILE para calcular a exponenciação
$resultadoWhile = 1;
$i = 1;
while ($i <= $expoente) {
 $resultadoWhile *= $base;
 $i++;
}
echo "Usando estrutura de repetição WHILE: $base elevado a $expoente é igual a $resultadoWhile\n";
// Usando estrutura de repetição DO-WHILE para calcular a exponenciação
$resultadoDoWhile = 1;
$i = 1;
do {
 $resultadoDoWhile *= $base;
 $i++;
} while ($i <= $expoente);
echo "Usando estrutura de repetição DO-WHILE: $base elevado a $expoente é igual a $resultadoDoWhile\n";
?>
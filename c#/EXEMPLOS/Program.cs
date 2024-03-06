// See https://aka.ms/new-console-template for more information

//Se a igual b bool isVerdadeiro recebe true, se nao false
//bool isVerdadeiro = a == b ? true : false;

Console.WriteLine("Digite a altura do retângulo: ");
int altura = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("Digite a largura do retângulo: ");
int largura = Convert.ToInt32(Console.ReadLine());

int area = altura * largura;
Console.WriteLine($"A área: {area}");
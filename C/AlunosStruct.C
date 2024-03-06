#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/*Escreva um programa que receba o nome e idade de 5 jogadores, e calcule o
com maior idade, menor e media*/
struct Jogador{
	char nome[100];
	float idade;
};

int main(int argc, char *argv[]) {
	
	struct Jogador Pele[5];
	char nomemaior[100], nomemenor[100];
	int cont;
	float maior = 0, menor = 1000, media = 0;
	
	for(cont = 0; cont < 5; cont++)
	{
		printf("Qual o nome do jogador %d\n",cont+1);
		scanf(" %[^\n]s", &Pele[cont].nome);
		printf("Qual a idade do jogador %d\n",cont+1);
		scanf("%f",&Pele[cont].idade);
		
		if(Pele[cont].idade > maior)
		{
			maior = Pele[cont].idade;
			strcpy(nomemaior,Pele[cont].nome);
		}
		
		if(Pele[cont].idade < menor)
		{
			menor = Pele[cont].idade;
			strcpy(nomemenor,Pele[cont].nome);
		}
		media = media + Pele[cont].idade/5;
	}
	
	printf("O mais velho jogador eh %s com %.0f anos\n", nomemaior, maior);
	printf("O mais novo jogador eh %s com %.0f anos\n", nomemenor, menor);
	printf("A media e %.2f anos\n", media);
	
	return 0;
}
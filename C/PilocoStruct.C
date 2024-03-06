#include <stdio.h>
#include <stdlib.h>

/* Escreva um programa que tenha uma struct Piloto, que receba o nome, a
posição no grid de largada, a posição final da corrida, e calcule se ele ganhou ou
perdeu posições. */
struct Piloto{
	char nome[30];
	int largada;
	int final;
	int posicoesdiferenca;
};

int main(int argc, char *argv[]) {
	
	struct Piloto Motoristas[10];
	int cont = 0;
	
	for (cont = 0; cont < 10; cont++)
	{
		printf("Qual o nome do piloto %d\n", cont+1);
		scanf(" %[^\n]s",&Motoristas[cont].nome);
		printf("Qual a posicao de largada\n");
		scanf("%d",&Motoristas[cont].largada);
		printf("Qual a posicao final\n");
		scanf("%d",&Motoristas[cont].final);
		Motoristas[cont].posicoesdiferenca = Motoristas[cont].largada - Motoristas[cont].final;
	}
	
	for (cont = 0; cont < 3; cont++)
	{
		if(Motoristas[cont].posicoesdiferenca < 0) printf("O piloto %s perdeu %d posicoes\n",Motoristas[cont].nome,Motoristas[cont].posicoesdiferenca);	
		else if(Motoristas[cont].posicoesdiferenca > 0) printf("O piloto %s ganhou %d posicoes\n",Motoristas[cont].nome,Motoristas[cont].posicoesdiferenca);
		else printf("O piloto %s manteve na mesma posicao\n",Motoristas[cont].nome);
	}
}

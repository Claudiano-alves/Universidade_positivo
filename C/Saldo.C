#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/*Escreva um programa que receba os gols a favor e contra de 5 times e calcule o
saldo de gol de cada um*/

void CalculoSaldo(int g[][2], int *s)
{
	int cont = 0;
	while(cont < 5)
	{
		printf("Insira o valor de gols feitos\n");
		scanf("%d",&g[cont][0]);
		printf("Insira o valor de gols tomados\n");
		scanf("%d",&g[cont][1]);
		s[cont] = g[cont][0] - g[cont][1];		
		cont++;
	}
}

int main(int argc, char *argv[]) {
	
	int gols[5][2];
	int saldo[5];
	int cont;
	
	CalculoSaldo(gols,saldo);
	for(cont = 0; cont < 5; cont++)
	{
		printf("Saldo de gols de %d é %d\n", cont+1, saldo[cont]);
	}
	return 0;
}
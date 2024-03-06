#include <stdio.h>
#include <stdlib.h>

/* Escreva um programa que a partir da matriz 4 x 4 abaixo, identifique o maior
valor e o menor, além da posição de cada um na tabela.
40 20 31 14
20  0 12 24
72  8 47 30
24 44 65  4
*/

int main(int argc, char *argv[]) {
	
	int matriz[4][4] = {{40,20,31,14},{20,0,12,24},{72,8,47,30},{24,44,65,4}}; 
	int cont1, cont2, maior = -1, menor = 1000, posicao[4];
	
	for(cont1 = 0; cont1 < 4; cont1++)
	{
		for(cont2 = 0; cont2 < 4; cont2++) 
		{
			if(matriz[cont1][cont2] > maior) 
			{
				maior = matriz[cont1][cont2]; 
				posicao[0] = cont1; 
				posicao[1] = cont2; 
			}
			if(matriz[cont1][cont2] < menor) 
 			{
				menor = matriz[cont1][cont2]; 
				posicao[2] = cont1; 
				posicao[3] = cont2;
			}
			
		}
	}
	
	printf("O maior valor é %d na posicao (%d, %d) e o menor valor é %d na posicao (%d, %d)",maior, posicao[0], posicao[1],menor,posicao[2], posicao[3] );
	
	return 0;
}
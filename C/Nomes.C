#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/* Escreva um programa que escreva o nome de 5 pessoas e descubra qual tem o
nome maislongo */

int main(int argc, char *argv[]) {
	
	char nome[5][100];
	char maiornome[100];
	int maior = 0, cont;
	
	for(cont = 0; cont < 5; cont++) 
	{
		printf("Escreva o nome %d:\n", cont+1);
		scanf(" %[^\n]s", &nome[cont]); 
		if(strlen(nome[cont]) > maior) 
		{
			strcpy(maiornome,nome[cont]); 
			maior = strlen(nome[cont]) ; 
		}
	} 
	
	printf("O maior nome e %s com %d caracteres\n", maiornome, maior);
	
	return 0;
}
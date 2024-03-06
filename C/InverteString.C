#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/*Escreva um programa com uma função chamada "InverteString" e inverta a
string original na função main*/

void InverteString(char s[])
{
	char invertida[100];
	strcpy(invertida,s);
	//printf("%s %d\n", invertida, strlen(invertida));
	int cont;
	for(cont = 0; cont < strlen(invertida); cont++)
	{
		s[cont] = invertida[strlen(invertida)- 1 -cont];
	}
}

int main(int argc, char *argv[]) {
	
	char frase[100];
	
	printf("Por favor, insira uma string\n");
	scanf(" %[^\n]s", &frase);
	
	InverteString(frase);
	printf("O valor da string eh %s", frase);
	
	return 0;
}
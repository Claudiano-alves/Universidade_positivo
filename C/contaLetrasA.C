#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	char teste[10];
	int cont, soma = 0;
	
	printf("Insira uma palavra\n");
	scanf("%s",&teste);
	
	for(cont = 0; cont < 20; cont++)
	{
		//printf("%c\n",teste[cont]);
		if(teste[cont] == 'a' || teste[cont] == 'A') soma++;
	}
	
	printf("%d", soma);
	
	return 0;
}
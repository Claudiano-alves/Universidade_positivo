#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	
	char str1[20]; 
	char str2[20]; 
	
	printf("Escreva a primeira string\n");
	scanf("%s", &str1);
	
	printf("Escreva a segunda string\n");
	scanf("%s", &str2);
	
	if(strcmp(str1,str2) == 0) printf("Strings iguais\n");
	else
	{
		printf("Strings Diferentes\n"); 
		strcpy(str1,str2);
		printf("O valor de str1 eh %s e valor de str2 é %s apos atualizacao",str1,str2);
	}
	
	return 0;
}
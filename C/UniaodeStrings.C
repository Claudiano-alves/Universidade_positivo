#include <stdio.h>
#include <string.h>
/* Implemente um programa denominado combinador, que
recebe duas strings e deve combiná-las, alternando as letras de cada string,
começando com a primeira letra da primeira string, seguido pela primeira letra
da segunda string, em seguida pela segunda letra da primeira string, e assim
sucessivamente. As letras restantes da cadeia mais longa devem ser adicionadas
ao fim da string resultante e retornada.*/

int main()
{
    char string1[100];
    char string2[100];	    
	int cont1 = 0, cont2 = 0, maior, menor;
    
    
    printf("Insira a primeira string\n"); 
    scanf(" %s", &string1);
    
    printf("Insira a segunda string\n");
    scanf(" %s", &string2);
    
    if(strlen(string1) >= strlen(string2)) 
    {
        maior = strlen(string1);
        menor = strlen(string2);
    }
    else 
    {
        maior = strlen(string2);
        menor = strlen(string1);
    }
    
    printf(" \n");
    char stringfinal[maior + menor + 1];
    
    for(cont1 = 0; cont1 < maior; cont1++)
    {
        if(cont1 < menor)
        {
            stringfinal[cont2] = string1[cont1]; 
            stringfinal[cont2 + 1] = string2[cont1];
            cont2 += 2;
        }
        else
        {
             if(strlen(string1) >= strlen(string2)) stringfinal[cont2] = string1[cont1];
             else stringfinal[cont2] = string2[cont1];
             cont2++;
        }
    }
    
    printf("%s", stringfinal);
}

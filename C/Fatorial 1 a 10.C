#include <stdio.h>
#include <stdlib.h>

/* Escreva um programa com uma função que calcule o fatorial dos números de 1 a
10. */
void Fatorial(int*);

int main(int argc, char *argv[]) {
	
	int resultado[10], cont;
	Fatorial(resultado);
	
	for(cont = 0; cont < 10; cont++)
	{
		printf("O fatorial de %d é %d\n", cont+1, resultado[cont]);
	}
}

void Fatorial (int res[])
{
	int cont = 1, cont2;
	for(cont = 0; cont < 10; cont++)
	{
		res[cont] = 1;
		cont2 = cont + 1;
		while(cont2 >= 1)
		{
			res[cont] = res[cont] * cont2;
			cont2--;
		}
	}
}
#include <stdio.h>
#include <stdlib.h>

/* Escreva um programa possua uma struct chamada DataNascimento, e calcule
qual a idade da pessoa em anos, meses e dias a partir da data de hoje
(10/11/2023) */
struct DataNascimento{
	int dia;
	int mes;
	int ano;
};

int main(int argc, char *argv[]) {
	
	int diahoje = 10, meshoje = 11, anohoje = 2023;
	int diadif, mesdif, anodif;
	struct DataNascimento Usuario;
		
	printf("Qual o dia de nascimento?\n");
	scanf("%d",&Usuario.dia);
	printf("Qual o mes de nascimento?\n");
	scanf("%d",&Usuario.mes);
	printf("Qual o ano de nascimento?\n");
	scanf("%d",&Usuario.ano);
	
	anodif = anohoje - Usuario.ano;
	if(Usuario.mes > meshoje)
	{
		anodif--;
		mesdif = 12  + meshoje - Usuario.mes;
		if(Usuario.dia > diahoje) 
		{
			mesdif--;
			diadif = 30 + diahoje - Usuario.dia;
		}
		else
		{
			diadif = diahoje - Usuario.dia;
		}
	}
	else if(Usuario.mes < meshoje)
	{
		mesdif = meshoje - Usuario.mes;
		if(Usuario.dia > diahoje) 
		{
			mesdif--;
			diadif = 30 + diahoje - Usuario.dia;
		}
		else
		{
			diadif = diahoje - Usuario.dia;
		}
	}
	else
	{
		mesdif = 0;
		if(Usuario.dia > diahoje) 
		{
			anodif--;
			mesdif = 11;
			diadif = 30 + diahoje - Usuario.dia;
		}
		else
		{
			diadif = diahoje - Usuario.dia;
		}
	}
	printf(" A diferenca e de %d anos, %d meses, e %d dias", anodif, mesdif, diadif);
}

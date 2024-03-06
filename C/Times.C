#include <stdio.h>
#include <stdlib.h>
#include <time.h>

/* No atual modelo de Copa do mundo, na primeira fase, 4 times jogam entre si,
totalizando 6 partidas. Considerando o total de 6 jogos do grupo, crie um
programa que pergunte o resultado de cada jogo, e a classificação final,
considerando como critério de desempate:
• Pontos conquistados,sendo 3 pela vitória e 1 pelo empate.
• Saldo de Gol.
• Gols marcados.
• Dica: Não perguntar o resultado,mas quantosgols cada equipe marcou em cada jogo
 */

int main(int argc, char *argv[]) {
	
	char Times[4][100] = {"Alemannha","Brasil","Marrocos","Japao"}; // Criação dos times
	int cont1, cont2, n = 0, golspartida1, golspartida2; // 
	/* cont1 = Variável para auxiliar no controle de for
		cont2 = variável para controle de for
		n = variável que auxiliará para criação das 6 partidas
		golspartida1 = gols na partida do primeiro time
		golspartida2 = gols na partida do segundo time*/
	int criterios[4][3] = {{0,-2000,0},{0,-2000,0},{0,-2000,0},{0,-2000,0}}; // matriz pra critérios da clasificação, sendo o primeiro pontos, segundo saldo e quarto gols marcados
	int classificacao[4]; // Vetor para classificação final
	int pontos[4] = {0,0,0,0}; // pontos de cada time no campeonato
	int golsmarcados[4] = {0,0,0,0}; // gols marcados por cada time
	int golslevados[4]	= {0,0,0,0}; // gols levados por cada time
	int saldo[4]; // saldo de gols de cada time 
	
	for(cont1 = n ; cont1 < 3 ; cont1++) // For para controle do primeiro time. n inciado em zero auxiliará limitar a 6 jogos
	{
		for(cont2 = n+1 ; cont2 < 4 ; cont2++) // For para controle do segundo time time. n inciado em zero auxiliará limitar a 6 jogos
		{
			printf("Jogo entre %s x %s\n",Times[cont1],Times[cont2]);
			printf("Insira a quantidade de gols de %s\n", Times[cont1]);
			scanf("%d", &golspartida1);
			
			printf("Insira a quantidade de gols de %s\n", Times[cont2]);
			scanf("%d", &golspartida2);
			
			golsmarcados[cont1] = golsmarcados[cont1] +  golspartida1; // incrementa os gols marcados do primeiro time
			golsmarcados[cont2] = golsmarcados[cont2] +  golspartida2; // incrementa os gols marcados do segundo time
			golslevados[cont1] = golslevados[cont1] +  golspartida2;// incrementa os gols levados do primeiro time
			golslevados[cont2] = golslevados[cont2] +  golspartida1;// incrementa os gols levados do segundo time
			
			if(golspartida1 > golspartida2) pontos[cont1] = pontos[cont1] + 3; // identifica quantos pontos ganhou cada time. neste caso, vitoria do primeiro
			else if(golspartida1 < golspartida2) pontos[cont2] = pontos[cont2] + 3; // Vitoria do segundo
			else // empate
			{
				pontos[cont1] = pontos[cont1] + 1;
				pontos[cont2] = pontos[cont2] + 1;
			}
			saldo[cont1] = golsmarcados[cont1] - golslevados[cont1];
			saldo[cont2] = golsmarcados[cont2] - golslevados[cont2];
		}
		n++;
	}
	
	for(cont1 = 0; cont1 < 4; cont1++) // For usado para classificar cada time. Cont1 reaproveitado
	/* Para classificação, em cada if foi verificado inicialmente os pontos. Se maior que a posição, ja assume a posição
		Usando o ou (||), caso tenha os mesmos pontos, verifica-se o saldo
		Caso mesmos pontos e saldo, verifica-se gols marcados
		Inicialmente vemos da primeira posição. Se mmelhor que o primeiro, empurra todos os demais para baixo
		por isso, todos os criterios dos demais colocados e classificações são atualizados.
		No Caso do segundo, o primeiro não é atualizado, mas o segundo e os demais sim. 
		e assim por diante*/
	{
		if((pontos[cont1] > criterios[0][0]) || ((pontos[cont1] == criterios[0][0]) && (saldo[cont1] > criterios[0][1])) || ((pontos[cont1] == criterios[0][0]) && (saldo[cont1] == criterios[0][1]) && (golsmarcados[cont1] > criterios[0][2])))
		{
			criterios[3][0] = criterios[2][0];
			criterios[3][1] = criterios[2][1];
			criterios[3][2] = criterios[2][2];
			classificacao[3] = classificacao[2];
			criterios[2][0] = criterios[1][0];
			criterios[2][1] = criterios[1][1];
			criterios[2][2] = criterios[1][2];
			classificacao[2] = classificacao[1];
			criterios[1][0] = criterios[0][0];
			criterios[1][1] = criterios[0][1];
			criterios[1][2] = criterios[0][2];
			classificacao[1] = classificacao[0];
			criterios[0][0] = pontos[cont1];
			criterios[0][1] = saldo[cont1];
			criterios[0][2] = golsmarcados[cont1];
			classificacao[0] = cont1;
		}
		else 
		{
			if((pontos[cont1] > criterios[1][0]) || ((pontos[cont1] == criterios[1][0]) && (saldo[cont1] > criterios[1][1])) || ((pontos[cont1] == criterios[1][0]) && (saldo[cont1] == criterios[1][1]) && (golsmarcados[cont1] > criterios[1][2])))
			{
				criterios[3][0] = criterios[2][0];
				criterios[3][1] = criterios[2][1];
				criterios[3][2] = criterios[2][2];
				classificacao[3] = classificacao[2];
				criterios[2][0] = criterios[1][0];
				criterios[2][1] = criterios[1][1];
				criterios[2][2] = criterios[1][2];
				classificacao[2] = classificacao[1];
				criterios[1][0] = pontos[cont1];
				criterios[1][1] = saldo[cont1];
				criterios[1][2] = golsmarcados[cont1];
				classificacao[1] = cont1;
			}
			else 
			{
				if((pontos[cont1] > criterios[2][0]) || ((pontos[cont1] == criterios[2][0]) && (saldo[cont1] > criterios[2][1])) || ((pontos[cont1] == criterios[2][0]) && (saldo[cont1] == criterios[2][1]) && (golsmarcados[cont1] > criterios[2][2])))
				{
					criterios[3][0] = criterios[2][0];
					criterios[3][1] = criterios[2][1];
					criterios[3][2] = criterios[2][2];
					classificacao[3] = classificacao[2];
					criterios[2][0] = pontos[cont1];
					criterios[2][1] = saldo[cont1];
					criterios[2][2] = golsmarcados[cont1];
					classificacao[2] = cont1;
				}
				else
				{
					criterios[3][0] = pontos[cont1];
					criterios[3][1] = saldo[cont1];
					criterios[3][2] = golsmarcados[cont1];
					classificacao[3] = cont1;
				
				}
			}
		}
	}
	printf("Classificacao Final\n");
	printf("Posicao\tTime\t        Pontos\tSaldo\tGols Marcados\tGols Levados\n");
	for(cont1 = 0; cont1 < 4; cont1++)
	{
		printf("%d\t%10s\t%d\t%d\t%d\t%10d\n", cont1+1, Times[classificacao[cont1]],pontos[classificacao[cont1]],saldo[classificacao[cont1]], golsmarcados[classificacao[cont1]], golslevados[classificacao[cont1]]);
	}
	return 0;
}
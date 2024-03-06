#include <stdio.h>

/*Quatro supermercados concorrentes vendem 5 produtos diferentes pelo mesmo
preço, porém em quantidade diferentes, conforme a tabela abaixo: Calcule
1. O mercado com maior faturamento
2. O mercado com menor faturamento
3. O total de faturamento na venda de cada produto na soma de todos os mercados.
*/
int main()
{
    int quantidade[4][5] = {{1000,1000,1000,1000,1000},
							{10,2000,5000,1500,0},
							{45,1000,200,20000,40},
							{5000,20000,50,100,500}};						
	int precos[5] = {5,4,20,1,8}; 
	int faturamentomercado[4] = {0,0,0,0}; 
	int faturamentoproduto[5] = {0,0,0,0,0}; 
	int cont1, cont2, maiorfaturamentomercado = 0, menorfaturamentomercado = 1000000000, idMaiorFuturamento, idMenorFaturamento;
	
	for(cont1 = 0; cont1 < 4; cont1++)
	{
		for(cont2 = 0; cont2 < 5; cont2++)
		{
			faturamentomercado[cont1] = faturamentomercado[cont1] + quantidade[cont1][cont2]*precos[cont2];	 
			faturamentoproduto[cont2] = faturamentoproduto[cont2] + quantidade[cont1][cont2]*precos[cont2];	
		}
		if(faturamentomercado[cont1] > maiorfaturamentomercado)
		{
			maiorfaturamentomercado = faturamentomercado[cont1]; 
			idMaiorFuturamento = cont1 + 1;
		}
		if(faturamentomercado[cont1] < menorfaturamentomercado)
		{
			menorfaturamentomercado = faturamentomercado[cont1];
			idMenorFaturamento = cont1 + 1;
		}
	}
	
	printf(" O Mercado com maior faturamento é %d com R$%d,00\n",idMaiorFuturamento,maiorfaturamentomercado);
	printf(" O Mercado com menor faturamento é %d com R$%d,00\n",idMenorFaturamento,menorfaturamentomercado);
	for(cont2 = 0;cont2 < 5;cont2++)
	{
		printf("O produto %d teve faturamento de R$%d,00\n",cont2+1,faturamentoproduto[cont2]);
	}
	
    return 0;
}

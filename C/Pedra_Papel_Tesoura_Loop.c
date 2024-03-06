#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    int computador, jogador;
    
    
	printf("\nBem vindo ao jogo PEDRA, PAPEL, TESOURA!");
	while(1){
        srand(time(NULL));
    	computador = rand() %3 + 1;
    	
        printf("\n\nEscolha entre: \n");
        printf("1 - Pedra;\n");
        printf("2 - Papel;\n");
        printf("3 - Tesoura.\n");
        printf("0 - Para sair do jogo.\n");
        scanf(" %d", &jogador);
        
	        if(jogador == 0) break;
    		if(jogador >= 1 && jogador <= 3) 
    		{
    			switch(computador)
    			{
    				case 1:
    					if(jogador == 1){
    						printf("Voce jogou Pedra, assim como o meu bot, esse jogo empatou!");
    					} else if (jogador == 2) {
    						printf("Voce jogou Papel, meu bot jogou Pedra, infelizmente voce venceu!");
    					} else printf("Voce jogou Tesoura, meu bot jogou Pedra, voce perdeu!");
    					break;
    				case 2:
    					if(jogador == 2){
    						printf("Voce jogou Papel, assim como o meu bot, esse jogo empatou!");
    					} else if (jogador == 1) {
    						printf("Voce jogou Pedra, meu bot jogou Papel, voce perdeu!");
    					} else printf("Voce jogou Tesoura, meu bot jogou Papel, infelizmente voce venceu!");
    					break;
    				case 3:
    					if(jogador == 3){
    						printf("Voce jogou Tesoura, assim como o meu bot, esse jogo empatou!");
    					} else if (jogador == 2) {
    						printf("Voce jogou Papel, meu bot jogou Tesoura, voce perdeu!");
    					} else printf("Voce jogou Pedra, meu bot jogou Tesoura, infelizmente voce venceu!");
    					break;
    				default:
    					printf("O sistema bugou!");
    			}
    				
    		} else printf("Voce digitou um valdor inválido!");
	} printf("Voce saiu do jogo!");
        
}
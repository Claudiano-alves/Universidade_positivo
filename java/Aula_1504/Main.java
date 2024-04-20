package Aula_1504;

import java.util.ArrayList;
import java.util.List;

public class Main {

    public static void tabuleiro(int posX, int posY, List<Jogador> jogadores) {

        System.out.print("Pos  ");
        for (int t = 0; t < posX; t++) {
            System.out.print(t + "    ");
        }
        System.out.print(" x");
        System.out.println();
        for (int i = 0; i < posX; i++) {
            System.out.print(" " + i + " ");
            for (int j = 0; j < posY; j++) {
                if (i == jogadores.getPosX() && j == jogadores.getPosY()) {
                    System.out.print("[ X ]");
                } else {
                    System.out.print("[ . ]");
                }
            }
            System.out.println();
        }
        System.out.println();
        System.out.print(" y");
    }

    public static void main(String[] args) {
        Tabuleiro tabuleiro = new Tabuleiro();
        List<Jogador> jogador = new ArrayList<Jogador>();

        jogador.add(new Jogador(0, 1, 'X');

        tabuleiro(10, 10, jogador);

    }

}

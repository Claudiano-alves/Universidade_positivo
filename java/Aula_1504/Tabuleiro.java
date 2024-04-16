package Aula_1504;

public class Tabuleiro {

    static public void tabuleiro(int posX, int posY) {
        Jogador jogador = new Jogador();

        System.out.print("Pos  ");
        for (int t = 0; t < posX; t++) {
            System.out.print(t + "    ");
        }
        System.out.print(" x");
        System.out.println();
        for (int i = 0; i < posX; i++) {
            System.out.print(" " + i + " ");
            for (int j = 0; j < posY; j++) {
                if (i == jogador.getPosX() && j == jogador.getPosY()) {
                    System.out.print("[ X ]");
                    break;
                }
                System.out.print("[ . ]");
            }
            System.out.println();
        }
        System.out.println();
        System.out.print(" y");
    }

}
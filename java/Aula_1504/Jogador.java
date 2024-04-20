package Aula_1504;

public class Jogador {
    private int posX;
    private int posY;
    private String desenho;

    Jogador(int posX, int posY, String desenho) {
        this.posX = posX;
        this.posY = posX;
        this.desenho = desenho;
    }

    public void getPosX(int posX) {
        this.posX = posX;
    }

    public void getPosY(int posY) {
        this.posY = posY;
    }

    public static void marcarPos(int posX, int posY) {

    }
}

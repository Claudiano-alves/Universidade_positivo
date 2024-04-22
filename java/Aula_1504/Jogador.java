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

    public int getPosX() {
        return posX;
    }

    public int getPosY() {
        return posY;
    }

    public String desenho() {
        return desenho;
    }

    public static void marcarPos(int posX, int posY) {

    }
}

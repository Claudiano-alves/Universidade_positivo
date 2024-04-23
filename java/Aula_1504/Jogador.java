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

    public void setPosX(int posX) {
        this.posX = posX;
    }

    public void setPosY(int posY) {
        this.posY = posY;
    }

    public void setDesenho(String desenho) {
        this.desenho = desenho;
    }

    public int getPosX() {
        return posX;
    }

    public int getPosY() {
        return posY;
    }

    public String getDesenho() {
        return desenho;
    }

    public static void marcarPos(int posX, int posY) {

    }
}

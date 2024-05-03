package Aula_29_04_classHer;

public class Veiculos {
    private String modelo;
    private int ano;
    private String cor;
    private boolean ligado;

    Veiculos(String modelo, int ano, String cor, boolean ligado) {
        this.modelo = modelo;
        this.ano = ano;
        this.cor = cor;
        this.ligado = false;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public int getAno() {
        return ano;
    }

    public void setAno(int ano) {
        this.ano = ano;
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public void ligar(boolean ligado) {
        this.ligado = true;
    }

    public void desligar(boolean ligado) {
        this.ligado = false;
    }

    public void acelerar(int velocidade) {
        if (velocidade == 0) {
            velocidade += 1;
        } else {
            System.out.println("Valocidade no máximo");
        }
    }

    public void frear(int velocidade) {

        if (velocidade > 0) {
            velocidade -= 1;
        } else {
            System.out.println("Carro parado!");
        }
    }

    public void virar(String direcao, int escolha) {

        switch (escolha) {
            case 1:
                System.out.println("Carro virou para a esquerda!");
                direcao = "Volante virando a esquerda";
                break;
            case 2:
                System.out.println("Carro virou para a esquerda!");
                direcao = "Volante virando a Direita";
                break;
            case 3:
                System.out.println("Carro reposicionado para frente!");
                direcao = "Direção reta";
                break;
            default:
                break;
        }

    }

}

package Aula_29_04_classHer;

public class Submarino extends VeiculoAquatico {
    private Float profundidadeMaxima;

    Submarino(String modelo, int ano, String cor, boolean ligado, Float comprimento, Float profundidadeMaxima) {
        super(modelo, ano, cor, ligado, comprimento);
        this.profundidadeMaxima = profundidadeMaxima;
    }

    public void mergulhar() {

    }

    public void emergir() {

    }
}

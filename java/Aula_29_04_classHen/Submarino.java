package Aula_29_04_classHen;

public class Submarino extends VeiculoAquatico {
    private Float profundidadeMaxima;

    Submarino(String modelo, int ano, String cor, boolean ligado, Float profundidadeMaxima) {
        super(modelo, ano, cor, ligado);
        this.profundidadeMaxima = profundidadeMaxima;
    }

    public void mergulhar(){
        
    }

    public void emergir(){
        
    }
}

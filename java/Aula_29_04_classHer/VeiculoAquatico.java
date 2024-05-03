package Aula_29_04_classHer;

public class VeiculoAquatico extends Veiculos {
    private Float comprimento;

    VeiculoAquatico(String modelo, int ano, String cor, boolean ligado, Float comprimento) {
        super(modelo, ano, cor, ligado);
        this.comprimento = comprimento;
    }
}

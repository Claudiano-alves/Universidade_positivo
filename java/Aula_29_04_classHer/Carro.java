package Aula_29_04_classHer;

public class Carro extends Veiculos {
    Carro(String modelo, int ano, String cor, boolean ligado) {
        super(modelo, ano, cor, ligado);
    }

    private int numeroPorta;
    private String tipoTransmissao;
    private float capPortaMalas;

}

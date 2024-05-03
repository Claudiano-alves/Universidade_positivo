package Aula_29_04_classHer;

public class VeiculoTerrestre extends Veiculos {
    private int numeroRodas;

    VeiculoTerrestre(String modelo, int ano, String cor, boolean ligado, int numeroRodas) {
        super(modelo, ano, cor, ligado);
        this.numeroRodas = numeroRodas;
    }
}

package Aula_29_04_classHen;

public class VeiculoAereo extends Veiculos {
    private int numeroMotores;

    VeiculoAereo(String modelo, int ano, String cor, boolean ligado, int numeroMotores){
        super(modelo, ano, cor, ligado);
        this.numeroMotores = numeroMotores;
    }
}

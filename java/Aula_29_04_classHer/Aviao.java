package Aula_29_04_classHer;

public class Aviao extends VeiculoAereo {
    private Float envergaduraAsa;
    private String tipoCombustivel;

    Aviao(String modelo, int ano, String cor, boolean ligado, int numeroMotores, Float envergaduraAsa,
            String tipoCombutivel) {
        super(modelo, ano, cor, ligado, numeroMotores);
        this.envergaduraAsa = envergaduraAsa;
        this.tipoCombustivel = tipoCombustivel;
    }

    public void decolar() {

    }

    public void pousar() {

    }
}

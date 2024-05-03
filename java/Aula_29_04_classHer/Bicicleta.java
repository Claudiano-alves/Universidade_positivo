package Aula_29_04_classHer;

public class Bicicleta extends Veiculos {

    private int numeroMarchas;
    private String tipoFreio;
    private String estiloQuadro;

    Bicicleta(String modelo, int ano, String cor, boolean ligado) {
        super(modelo, ano, cor, ligado);
    }

    public int getNumetoMarchas() {
        return numeroMarchas;
    }

    public void setNumeroMarchas(int numeroMarchas) {
        this.numeroMarchas = numeroMarchas;
    }

    public String getTipoFreio() {
        return tipoFreio;
    }

    public void setTipoFreio(String tipoFrieo) {
        this.tipoFreio = tipoFreio;
    }

    public String getEstiloQuadro() {
        return estiloQuadro;
    }

    public void setEstiloQuadro(String estiloQuadro) {
        this.estiloQuadro = estiloQuadro;
    }

    public void pedelar(int velocidade) {
        if (velocidade == 0) {
            velocidade += 1;
        } else {
            System.out.println("Valocidade no máximo. Suas pedaladas serão em vão!");
        }
    }

    public void parar(int velocidade) {

        if (velocidade > 0) {
            velocidade -= 1;
        } else {
            System.out.println("Bicicleta parada!");
        }
    }
}

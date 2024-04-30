package Aula_29_04_classHen;

public class Onibus extends Veiculos {
    private int capPassageiros;
    private int portasAcesso;
    private int numeroParadas;
    
    Onibus(String modelo, int ano, String cor, boolean ligado) {
        super(modelo, ano, cor, ligado);
    }


    public int getcapPassageiros() {
        return capPassageiros;
    }

    public void setcapPassageiros(int capPassageiros) {
        this.capPassageiros = capPassageiros;
    }

    public int getPortasAcessos() {
        return portasAcesso;
    }

    public void setPortasAcessos(int portasAcesso) {
        this.portasAcesso = portasAcesso;
    }

    public int getRotasItinerario() {
        return portasAcesso;
    }

    public void setRotasItinerario(int portasAcesso) {
        this.portasAcesso = portasAcesso;
    }
}

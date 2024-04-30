package Aula_29_04_classHen;

public class Helicoptero extends VeiculoAereo {
    private int numeroHelices;
    private Float capCarga;

    Helicoptero(String modelo, int ano, String cor, boolean ligado, int numeroMotores, int numeroHelices,
            Float capCarga) {
        super(modelo, ano, cor, ligado, numeroMotores);
        this.numeroHelices = numeroHelices;
        this.capCarga = capCarga;
    }

    public void pairar(){
        
    }

    public void resgatarPessoas(){

    }
}

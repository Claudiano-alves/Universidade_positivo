package Aula_1204;

public class Cachorro extends Animal {
    private String raca;
    private String porte;

    public void buscarOsso() {
        System.out.println("au.. au.. Cade osso.. cade.. ruff ruff..");
    }

    @Override
    public String toString() {
        return "Cachorro - [nome=" + this.getNome()
                + "] - [sexo=" + this.getSexo()
                + "] - [idade=" + this.getIdade()
                + "] - [raca=" + this.getRaca()
                + "] - [porte=" + this.getPorte() + "]";
    }

}

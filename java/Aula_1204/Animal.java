package Aula_1204;

public class Animal {

    private String nome;
    private String sex;
    private int idade;

    public void envelhecer() {
        // this.idade += 1;
        this.setIdade(this.getIdade() + 1);
    }

    public void emitirSom() {
        System.out.println("O animal está fazendo barulho...");
    }

    @Override
    public String toString() {
        return "Animal - [nome=" + this.getNome()
                + "] - [sexo=" + this.getSexo()
                + "] - [idade=" + this.getIdade() + "]";
    }
}

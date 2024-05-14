public abstract class Funcionarios implements Trabalhavel {
    private String nome;
    private int matricula;

    Funcionarios(String nome, int matricula) {
        this.nome = nome;
        this.matricula = matricula;
    }

    abstract void calcularSalario();
}
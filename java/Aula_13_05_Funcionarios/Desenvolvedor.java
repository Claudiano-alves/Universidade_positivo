public abstract class Desenvolvedor extends Funcionarios {
    private String linguagem;

    Desenvolvedor(String nome, int matricula, String linguagem) {
        super(nome, matricula);
        this.linguagem = linguagem;
    }
}

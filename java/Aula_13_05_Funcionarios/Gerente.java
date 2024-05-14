public abstract class Gerente extends Funcionarios {
    private Float bonusAnual;
    private String equipeSobGerencia;

    Gerente(String nome, int matricula, Float bonusAnual, String equipeSobGerencia) {
        super(nome, matricula);
        this.bonusAnual = bonusAnual;
        this.equipeSobGerencia = equipeSobGerencia;
    }
}

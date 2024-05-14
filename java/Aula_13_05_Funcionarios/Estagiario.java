public abstract class Estagiario extends Funcionarios {

    private int horasTrabalhadas;
    private String supervidor;

    Estagiario(String nome, int matricula, int horasTrabalhadas, String supervisor) {
        super(nome, matricula);
        this.horasTrabalhadas = horasTrabalhadas;
        this.supervidor = supervidor;
    }

}

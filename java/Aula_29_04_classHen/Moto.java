package Aula_29_04_classHen;

public class Moto extends Veiculos {
    Moto(String modelo, int ano, String cor, boolean ligado) {
        super(modelo, ano, cor, ligado);
    }

    private int cilindradas;
    private String tipoCombustivel;
    private String tipoFreio;
}

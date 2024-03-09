import java.util.Scanner;
import java.util.Arrays;
import java.util.List;

public class Ex15aula02 {
    // Exercício 02

    static int lernumeros(String texto) {
        Scanner leitor = new Scanner(System.in);

        System.out.print(texto);
        int num = Integer.parseInt(leitor.nextLine());

        return num;
    }

    public static void main(String[] args) throws Exception {

        float[] numeros = new float[5];

        System.out.println("Digite cinco numeros");
        lernumeros(numeros);

        numeros[0] = System.out.println("Digite o numero (1): ");

        for (int i = 0; i < numeros.length; i++) {

            float num;
            do {
                System.out.println("Digite o numero (" + (i + 1) + ")");
            } while (num <= numeros[i - 1]);
        }
    }
}

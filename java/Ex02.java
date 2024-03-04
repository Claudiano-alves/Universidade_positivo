import java.util.Scanner;

public class Ex02 {
    // Exercício 2

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Escreva o 1º número: ");
        int num1 = leitor.nextInt();
        System.out.println("Escreva o 2ª número: ");
        int num2 = leitor.nextInt();

        if (num1 > num2) {
            System.out.println("O maior número: " + num1);
        }
        if (num1 == num2) {
            System.out.println("Os números são iguais!");
        } else if (num2 > num1) {
            System.out.println("O maior número: " + num2);
        }
        System.out.println("Soma: " + (num1 + num2));
    }
}

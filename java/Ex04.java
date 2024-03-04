import java.util.Scanner;

public class Ex04 {
    // Exercício 3

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Escreva o 1º número: ");
        int a = leitor.nextInt();
        System.out.println("Escreva o 2ª número: ");
        int b = leitor.nextInt();

        System.out.println("A soma eh: " + (a + b));
        System.out.println("A subtração eh: " + (a - b));
        System.out.println("A divisão eh: " + (a / b));
        System.out.println("A multiplicação eh: " + (a * b));
    }
}

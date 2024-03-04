import java.util.Scanner;

public class Ex01 {
    // Exercício 1

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Escreva um número: ");
        int num = leitor.nextInt();

        if (num <= 10) {
            System.out.println("Número menor ou igual a 10!");

        } else
            System.out.println("Número maior do que 10!");

    }
}

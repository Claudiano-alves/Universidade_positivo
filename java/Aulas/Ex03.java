package Aulas;

import java.util.Scanner;

public class Ex03 {
    // Exercício 3

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Escreva o 1º número: ");
        int a = leitor.nextInt();
        System.out.println("Escreva o 2ª número: ");
        int b = leitor.nextInt();

        if (a > b) {
            System.out.println("O maior número eh: " + a);
        }
        if (a == b) {
            System.out.println("Números inválidos!");
        } else if (b > a) {
            System.out.println("O maior número eh: " + b);
        }
    }
}

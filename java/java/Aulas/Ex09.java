package Aulas;

import java.util.Scanner;

public class Ex09 {
    // Exercício 5

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite o 1º número: ");
        int a = leitor.nextInt();
        System.out.println("Digite o 2ª número: ");
        int b = leitor.nextInt();

        if (a == b) {
            System.out.println("Você digitou números iguais!");
        } else {
            System.out.println("Você digitou números diferentes!");
            if (a > b) {
                System.out.println("Você digitou números diferentes, sendo " + a + " o maior número!");
            } else
                System.out.println("Você digitou números diferentes, sendo " + b + " o maior número!");
        }

    }
}

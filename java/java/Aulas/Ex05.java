package Aulas;

import java.util.Scanner;

public class Ex05 {
    // Exercício 5

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Escreva o 1º número: ");
        int a = leitor.nextInt();
        System.out.println("Escreva o 2ª número: ");
        int b = leitor.nextInt();

        System.out.println("Valor da variável A eh: " + a + " Valor da variável B eh: " + b);
        System.out.println("Valor da variável  A eh: " + b + " Valor da variável  B eh: " + a);

    }
}

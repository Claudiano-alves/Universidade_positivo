package Aulas;

import java.util.Scanner;

public class Ex08 {
    // Exercício 8

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite um número maior ou igual a 50: ");
        int intervalo = leitor.nextInt();

        if (intervalo >= 50) {
            System.out.println("Número maior ou igual a 50!");
        } else if (intervalo < 50)
            System.out.println("Número menor do que 50!");

    }
}

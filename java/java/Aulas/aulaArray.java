package Aulas;

import java.util.Scanner;

public class aulaArray {
    // Exercício 5

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);

        int[] numeros = new int[5];
        int soma = 0;

        System.out.println("Digite cinco numeros");

        for (int i = 0; i < 5; i++) {
            System.out.printf("Número (" + i + "): ");
            numeros[i] = Integer.parseInt(leitor.nextLine());
        }
        System.out.printf("NO ARRAY: ");
        for (int i = 0; i < 5; i++) {
            System.out.print(numeros[i]);
            System.out.print(" - ");
            soma += numeros[i];
        }
        float media = soma / 5;
        System.out.printf("Média: " + media);
    }
}

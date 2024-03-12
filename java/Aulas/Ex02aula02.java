package Aulas;

import java.util.Scanner;
import java.util.Arrays;
import java.util.List;

public class Ex02aula02 {
    // Exercício 02

    static int lernumeros(String texto) {
        Scanner leitor = new Scanner(System.in);

        System.out.print(texto);
        int num = Integer.parseInt(leitor.nextLine());

        return num;
    }

    static int somar(int a, int b, boolean mostrar) {
        int soma = a + b;

        if (mostrar) {
            System.out.println("A soma de" + a + " + " + b + " é " + soma);
        }

        return soma;
    }

    static int somar(int[] numeros, boolean mostrar) {
        int soma = 0;
        for (int i = 0; i < numeros.length; i++) {
            soma += numeros[i];
        }

        System.out.println("A soma do array " + Arrays.toString(numeros) + " é " + soma);
        return soma;
    }

    public static void main(String[] args) throws Exception {

        int[] numeros = new int[5];

        System.out.println("Digite numeros");

        for (int i = 0; i < numeros.length; i++) {
            numeros[i] = lernumeros("Digite o numero " + (i + 1) + ": ");
        }
        somar(numeros, true);
    }
}

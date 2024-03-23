package Aulas;

import java.util.Scanner;

public class Ex07 {
    // Exercício 7

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite um número dentro de um intervalo de 100 a 200: ");
        int intervalo = leitor.nextInt();

        if (intervalo < 100 || intervalo > 200) {
            System.out.println("Número " + intervalo + " está fora dentro do intervalo!");
        } else
            System.out.println("Número " + intervalo + " está dentro do intervalo!");

    }
}

package Aulas;

import java.util.Scanner;

public class Ex06 {
    // Exercício 6

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite uma temperatura em graus Celsius: ");
        int Celsius = leitor.nextInt();

        int fahrenheit = (9 * Celsius + 160) / 5;

        System.out.println("A temperatura em fahrenheit eh: " + fahrenheit + " ºF");

    }
}

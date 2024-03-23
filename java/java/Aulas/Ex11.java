package Aulas;

import java.util.Scanner;

public class Ex11 {
    // Exercício 5

    public static void main(String[] args) throws Exception {

        Scanner leitor = new Scanner(System.in);
        System.out.println("Digite o 1º número: ");
        int a = leitor.nextInt();
        System.out.println("Digite o 2º número: ");
        int b = leitor.nextInt();
        System.out.println("Digite o 3º número: ");
        int c = leitor.nextInt();

        if (a < b && a < c) {
            System.out.print(a + " , ");
            if (b < c) {
                System.out.print(b + " , " + c);
            }
            if (c < b) {
                System.out.print(c + " , " + b);
            }
        }
        if (b > a && b > c) {
            System.out.print(b + " , ");
            if (a > c) {
                System.out.print(a + " , " + c);
            }
            if (c > b) {
                System.out.print(c + " , " + b);
            }
        }
        if (c > a && c > b) {
            System.out.print(c + " , ");
            if (a > b) {
                System.out.print(b + " , " + a);
            }
            if (b > a) {
                System.out.print(a + " , " + b);
            }
        }
    }
}

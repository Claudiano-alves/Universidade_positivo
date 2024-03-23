package ExCalculadora;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner leitor = new Scanner(System.in);

        System.out.println("Insira o operador do cálculo: ");
        System.out.println("1 - Soma: ");
        System.out.println("2 - Subtração: ");
        System.out.println("3 - Divisão: ");
        System.out.println("4 - Multiplicação:");
        System.out.println("0 - Para sair!");
        int operador = Integer.parseInt(leitor.nextLine());
        System.out.print("--Insira o 1º número: ");
        Float num1 = Float.parseFloat(leitor.nextLine());
        System.out.print("--Insira o 2º número: ");
        Float num2 = Float.parseFloat(leitor.nextLine());

        switch (operador) {
            case 1:
                System.out.print("--Operação de soma: ");
                System.out.print(calculadora.adicao(num1, num2));
                break;
            case 2:
                System.out.print("--Operação de subtração:");
                System.out.print("Subtraindo " + num1 + "e " + num2 + calculadora.subtracao(num1, num2));
                break;
            case 3:
                System.out.print("--Operação de Multiplicação:");
                System.out.print(calculadora.multiplicacao(num1, num2));
                break;
            case 4:
                System.out.print("--Operação de divisão:");
                System.out.print(calculadora.divisao(num1, num2));
                break;
            default:
                System.out.print("O sistema bugou!");
        }

    }
}
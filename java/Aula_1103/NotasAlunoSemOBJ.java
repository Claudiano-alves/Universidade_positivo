package Aula_1103;

import java.util.Scanner;
import java.util.Arrays;
import java.util.List;

public class NotasAlunoSemOBJ {

    public void Aprovacao(int[] c) {
        int i = 0;
        do {
            int d = c[i];
            if (c[i] >= 6) {
                System.out.println("Aprovado: (x) Sim () Não!");
                System.out.println("Nota final: " + c[i]);

            } else {
                System.out.println("Aprovado: () Sim (x) Não!");
                System.out.println("Nota final: " + c[i]);
            }
        } while (i < 5);
    }

    public static void main(String[] args) {

        int[] matricula = new int[5];
        int[] notas1 = new int[5];
        int[] notas2 = new int[5];
        int[] notasFinais = new int[5];
        String[] nomesAlunos = new String[5];
        int i;
        Scanner leitor = new Scanner(System.in);

        for (i = 0; i < matricula.length; i++) {
            System.out.print("Insira a matrícula do " + (i + 1) + "º Aluno: ");
            matricula[i] = Integer.parseInt(leitor.nextLine());
        }
        for (i = 0; i < nomesAlunos.length; i++) {
            System.out.print("Insira o nome do " + (i + 1) + "º Aluno: ");
            nomesAlunos[i] = leitor.nextLine();
        }
        do {
            for (i = 0; i < notas1.length; i++) {
                System.out.print("Insira a 1º nota do " + (i + 1) + "º Aluno: ");
                notas1[i] = Integer.parseInt(leitor.nextLine());
            }
            for (i = 0; i < notas2.length; i++) {
                System.out.print("Insira a 2º nota do " + (i + 1) + "º Aluno: ");
                notas2[i] = Integer.parseInt(leitor.nextLine());
            }
            notasFinais[i] = (notas1[i] + notas2[i]) / 2;
            Aprovacao(notasFinais[i]);
        } while (i < 5);

    }

}
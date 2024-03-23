package ExAluno;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void Main(String[] args) {

        // AlunosOBJ aluno2 = new AlunosOBJ("1234556", "Ricardo", 3.2f, 9.6f);
        // aluno1.calcularMedia();
        // aluno2.calcularMedia();

        // AlunosOBJ aluno2 = new AlunosOBJ();
        // novoAluno.matricula = "José";
        // // turma.add(aluno1);
        // // turma.add(aluno2);

        // novoAluno.setNota1();
        // System.out.print(novoAluno.getNota1());
        AlunosOBJ novoAluno = new AlunosOBJ();

        Scanner leitor = new Scanner(System.in);

        List<AlunosOBJ> turma = new ArrayList<AlunosOBJ>();
        System.out.print("Insira a quantidade de Alunos que deseja inserir: ");
        int quantAlunos = Integer.parseInt(leitor.nextLine());

        for (int i = 0; i < quantAlunos; i++) {
            System.out.print("Defina uma matrícula do " + (i + 1) + "º Aluno: ");
            novoAluno.matricula = leitor.nextLine();
            System.out.print("Insira o nome do " + (i + 1) + "º Aluno: ");
            novoAluno.nome = leitor.nextLine();
            System.out.print("Quantas você irá inserir: ");
            int quantNotas = Integer.parseInt(leitor.nextLine());
            for (int j = 0; j < quantNotas; j++) {
                System.out.print("Insira a " + (j + 1) + "º Aluno: ");
                float notaDigitada = Float.parseFloat(leitor.nextLine());
                novoAluno.notas.add(notaDigitada);
            }
        }
        turma.add(novoAluno);
    }
}

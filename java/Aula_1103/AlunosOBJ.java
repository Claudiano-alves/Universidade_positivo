package Aula_1103;

import java.util.Scanner;
import java.util.Arrays;
import java.util.ArrayList;
import java.util.List;

public class AlunosOBJ {
    String matricula;
    String nome;
    float nota1;
    float nota2;
    float media;
    Boolean aprovado;

    AlunosOBJ(String mat, String nom, Float nots1, Float nots2) {
        matricula = mat;
        nome = nom;
        nota1 = nots1;
        nota2 = nots2;
    }

    void calcularMedia() {
        media = (nota1 + nota2) / 2;
        System.out.println("Média do aluno: " + nome);
        System.out.println("--Nota 1: " + nota1);
        System.out.println("--Nota 2: " + nota2);
        System.out.println("--Média final: " + media);
    }

    public static void main(String[] args) {

        List<AlunosOBJ> turma = new ArrayList<AlunosOBJ>();
        AlunosOBJ aluno1 = new AlunosOBJ("123455", "José", 3.2f, 9.6f);
        AlunosOBJ aluno2 = new AlunosOBJ("1234556", "Ricardo", 3.2f, 9.6f);
        aluno1.calcularMedia();
        aluno2.calcularMedia();

        turma.add(aluno1);
        turma.add(aluno2);

    }
}

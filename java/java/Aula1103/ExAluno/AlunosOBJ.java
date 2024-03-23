package ExAluno;

import java.util.Scanner;
import java.util.Arrays;
import java.util.ArrayList;
import java.util.List;

public class AlunosOBJ {
    String matricula;
    String nome;
    List<Float> notas = new ArrayList<Float>();

    float media;
    Boolean aprovado;

    // public void setNota1(float novaNota) {
    // nota1 = novaNota; // + criterios
    // }

    // public float getNota1() {
    // return nota1;
    // }

    AlunosOBJ() {
        System.out.print("Criando novo Aluno!");
    }

    // public void setNota1(float novaNota) {
    // nota1 = novaNota;
    // }

    // public float getNota1() {
    // return nota1;
    // }

    void calcularMedia() {

        float somaNota = 0;

        for (int i = 0; i < notas.size(); i++) {
            somaNota += notas.get(i);
        }
        media = somaNota / notas.size();
    }

    void mostras() {
        System.out.println("-- Nome: " + nome);
        System.out.println("Número Matrícula: " + matricula);
        System.out.println("-- Notas ");

        for (int i = 0; i < notas.size(); i++) {
            System.out.println("----Nota (" + (i + 1) + "): " + notas.get(i));
        }
        calcularMedia();
        System.out.print("--Media: " + media);
        if (media >= 6) {
            System.out.print("--Status: (x) Aprovado () Reprovado");
        } else {
            System.out.print("--Status: () Aprovado (x) Reprovado");
        }
    }
}

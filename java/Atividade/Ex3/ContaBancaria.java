package Atividade.Ex3;

import java.util.Scanner;
import java.util.ArrayList;
import java.util.List;

public class ContaBancaria {
    int numeroConta;
    String nomeTitular;
    int saldo;

    ContaBancaria(int numeroConta, String nomeTitular, int saldo) {
        this.numeroConta = numeroConta;
        this.nomeTitular = nomeTitular;
        this.saldo = saldo;
    }

    void depositar() {

    }

    void sacar() {

    }

    void saldo() {

    }

    public static void main(String[] args) {

        Scanner leitor = new Scanner(System.in);
        List<ContaBancaria> banco = new ArrayList<ContaBancaria>();

        System.out.print("Insira a quantidade de contas que deseja criar");
        int quantContas = Integer.parseInt(leitor.nextLine());

        for (int i = 0; i < quantContas; i++) {
            System.out.print("Digite um numero de conta: ");
            int numeroConta = Integer.parseInt(leitor.nextLine());
            System.out.print("Digite o nome do titular: ");
            String nomeTitular = leitor.nextLine();
            System.out.print("Deposite um valor: ");
            int saldo = Integer.parseInt(leitor.nextLine());

            ContaBancaria novaContaBancaria = new ContaBancaria(numeroConta, nomeTitular, saldo);
            banco.add(novaContaBancaria);
        }
    }
}

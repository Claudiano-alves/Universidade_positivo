import java.util.List;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner leitor = new Scanner(System.in);
        List<Funcionarios> funcionarios = new ArrayList<Funcionarios>();

        while (true) {
            System.out.println("--Menu Funcionários--");
            System.out.println("[1] Adionar funcionário");
            System.out.println("[2] Remover funcionário");
            System.out.println("[3] Listar funcionários");
            System.out.println("[4] Sair");
            int opcao = Integer.parseInt(leitor.nextLine());
            switch (opcao) {
                case 1:
                    System.out.print("Insira nome: ");
                    String nome = leitor.nextLine();
                    System.out.print("Insira uma matricula: ");
                    int matricula = Integer.parseInt(leitor.nextLine());
                    Funcionarios funcionario = new Funcionarios(nome, matricula);
                    funcionarios.add(funcionario);
                    System.out.print("Insira o cargo: ");
                    System.out.print("[1] Gerente");
                    System.out.print("[2] Desenvolvedor");
                    System.out.print("[3] Estagiáirio");
                    int cargo = Integer.parseInt(leitor.nextLine());
                    System.out.print("Insira o Salário: ");
                    int salario = Integer.parseInt(leitor.nextLine());

                
        }

        
}

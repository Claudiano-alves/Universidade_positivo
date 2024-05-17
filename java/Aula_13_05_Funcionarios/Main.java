import java.util.List;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner leitor = new Scanner(System.in);
        List<Funcionarios> funcionarios = new ArrayList<Funcionarios>();
        List<Gerente> gerentes = new ArrayList<Gerente>();
        List<Desenvolvedor> desenvolvedores = new ArrayList<Desenvolvedor>();
        List<Estagiario> estagiarios = new ArrayList<Estagiario>();

        while (true) {
            System.out.println("--Menu Funcionários--");
            System.out.println("[1] - Adicionar funcionário");
            System.out.println("[2] - Remover funcionário");
            System.out.println("[3] - Listar funcionários");
            System.out.println("[0] - Sair");
            int opcao = Integer.parseInt(leitor.nextLine());
            if(opcao == 1){
                System.out.println("Insira o cargo: ");
                System.out.println("[1] - Gerente");
                System.out.println("[2] - Desenvolvedor");
                System.out.println("[3] - Estagiáirio");
                System.out.println("[0] - Sair");
                int opcao_ = Integer.parseInt(leitor.nextLine());
                switch (opcao_) { 
                    case 1:
                        System.out.print("Insira nome: ");
                        String nome = leitor.nextLine();
                        System.out.print("Insira uma matricula: ");
                        int matricula = Integer.parseInt(leitor.nextLine());
                        funcionarios.add(new Gerente(nome, matricula));
                        funcionarios.add(funcionario);
                        int cargo = Integer.parseInt(leitor.nextLine());
                        System.out.print("Insira equipe sob gerência: ");
                            System.out.println("[1] - Área de finanças");
                            System.out.println("[2] - RH");
                            System.out.println("[3] - Controladoria");
                            System.out.println("[4] - Suprimentos");
                            System.out.println("[0] - Sair");
                            int opcao_1 = Integer.parseInt(leitor.nextLine());
                            switch (opcao_1) {
                                case 1:
                                    System.out.println("Insira o salário acordado: ");
                                    int salarioDefinido = Integer.parseInt(leitor.nextLine());
                                    int bonusAnual = calcularSalario(salarioDefinido);
                                    String equipeSobGerencia = "Área de finanças";
                                    Gerente gerente = new Gerente(nome, matricula, bonusAnual, equipeSobGerencia)
                                    gerentes.add(gerente);
                                    break;
                            
                                default:
                                    break;
                            }
                            System.out.print("Insira o Salário: ");
                        int salario = Integer.parseInt(leitor.nextLine());
    
                    
                }

            }

        }
}

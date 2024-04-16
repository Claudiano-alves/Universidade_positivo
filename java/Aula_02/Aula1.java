import java.util.Scanner;

public class Aula1 {

    

    public static void main(String[] args) throws Exception {
    
        /* int numero = 50;
        float real = 10.5f;
        String frase = "minha frase legal";
        boolean noite = true;

        System.out.println("Ola Mundo - " + numero); 
        */

        System.out.print("Ola, qual é seu nome? "); 
        Scanner leitor = new Scanner(System.in);
        
        String nome = leitor.nextLine();
        System.out.println("Seja bem vindo " + nome + "!!!");        

        System.out.print("Em que ano vc nasceu? ");
        int ano = Integer.parseInt(leitor.nextLine());
        

        int idade = 2024 - ano;
        System.out.println("Legal, então vc deve ter " + idade + " anos.");


        /*System.out.print("Dia: ");
        String dia = leitor.nextLine();
        
        System.out.print("Mes: ");
        String mes = leitor.nextLine();
        
        System.out.print("Ano: ");
        String ano2 = leitor.nextLine();*/

        
        System.out.print("Que dia vc nasceu? (dd/mm/aaaa): ");
        String resposta = leitor.nextLine();


        String dia = resposta.substring(0, 2);
        String mes = resposta.substring(3, 5);
        String ano2 = resposta.substring(6, 10);

        System.out.println("Então vc nasceu no dia " + dia + " mes " + mes + " e ano " + ano2 + " certo??");

    }

}

import java.util.Scanner;

class IntroJava {


    public static void main(String[] args){
        
        System.out.print("Qual é o seu nome? ");

        Scanner leitor = new Scanner(System.in);
        String nome = leitor.nextLine();

        System.out.println("Bem vindo " + nome + "!");

        // Pergunta o ano
        System.out.print("Em que ano vc nasceu? ");

       
        /* Qual seu nome?
         * - resposta
         * 
         * Bem vindo __
         * Em que ano vc nasceu?
         * - resposta
         * conta
         * Que legal, então vc deve ter X anos... isso?
         */


    }


}
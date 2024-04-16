import java.util.Scanner;

public class Aula2 {
    public static void main(String[] args) {
        /* Faça um Programa que verifique se uma 
            letra digitada é "F" ou "M". 
            Conforme a letra escrever: 
            F - Feminino, M - Masculino, Sexo Inválido.

            Voce escolheu M - Masculino 
            Voce escolheu F - Feminino
            Sexo Inválido
        */

        System.out.print("Digite F ou M: ");
        Scanner leitor = new Scanner(System.in);
        String sexo = leitor.nextLine();

        /*
        if(sexo.equals("M")){
            System.out.println("Voce escolheu M - Masculino");
        } else if(sexo.equals("F")) {
            System.out.println("Voce escolheu F - Feminino");
        } else {
            System.out.println("Sexo Inválido");
        }
        */

        switch (sexo) {
            case "M":
            System.out.println("Voce escolheu M - Masculino");
                break;

            case "F":
            System.out.println("Voce escolheu F - Feminino");
                break;
        
            default:
                System.out.println("Sexo Inválido");
                break;
        }

    }
}
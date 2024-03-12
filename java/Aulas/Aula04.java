package Aulas;

import java.util.Scanner;
import java.util.Arrays;
import java.util.List;

public class Aula04 {
    // Exercício 5

    public static void main(String[] args) throws Exception {

        Object[] array = new Object[5];
        array[0] = 10;
        array[1] = "String";
        array[2] = true;
        array[3] = 32.1f;
        array[4] = 32.1f;

        System.out.println(array[2]);
        System.out.println(Array.toString(array));

        List<Integer> lista = new ArrayList<Integer>();
        System.out.println(lista.toString());

        lista.add(30);
        lista.add(450);
        lista.add(22);
        System.out.println(lista.toString());

        lista.remove(1);
    }
}

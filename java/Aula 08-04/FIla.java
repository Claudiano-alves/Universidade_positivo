import java.util.ArrayDeque;
import java.util.Deque;

public class Fila {

    public static void main(String[] args) {

        Deque<Integer> fila = new ArrayDeque<Integer>();

        /*
         * fila.addLast(0);
         * fila.addLast(3);
         * fila.addLast(6);
         * fila.addLast(9);
         * fila.addLast(10);
         * 
         * 
         * int a = fila.pollFirst();
         * System.out.println(a);
         * 
         * int b = fila.peekFirst();
         * System.out.println(b);
         * 
         * fila.removeFirst();
         * fila.offerLast(2);
         * 
         * System.out.println(fila);
         */

        fila.addFirst(10);
        fila.addFirst(20);
        fila.addFirst(30);

        int a = fila.peekFirst();
        System.out.println(a);
        System.out.println(fila);

        int b = fila.removeFirst();
        System.out.println(b);
        System.out.println(fila);

    }

}

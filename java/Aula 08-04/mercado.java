import java.util.LinkedList;
import java.util.Queue;

public class mercado {
    public static void main(String[] args) {
        // Criando uma fila de clientes
        Queue<String> filaDoBanco = new LinkedList<>();

        // Adicionando clientes à fila
        filaDoBanco.offer("João");
        filaDoBanco.offer("Maria");
        filaDoBanco.offer("Pedro");
        filaDoBanco.offer("Ana");

        // Exibindo a fila atual
        System.out.println("Fila do banco: " + filaDoBanco);

        // Verificando quem é o próximo cliente a ser atendido
        String proximoCliente = filaDoBanco.peek();
        System.out.println("Próximo cliente: " + proximoCliente);

        // Removendo o próximo cliente da fila
        String clienteAtendido = filaDoBanco.poll();
        System.out.println("Cliente atendido: " + clienteAtendido);

        // Exibindo a fila atualizada
        System.out.println("Fila do banco após atendimento: " + filaDoBanco);
    }
}

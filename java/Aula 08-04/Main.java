import java.util.ArrayList;
import java.util.List;
import java.util.Collections;

public class Main {

    public static void main(String[] args) {

        List<Musica> musicas = new ArrayList<>();

        musicas.add(new Musica("hahah", "jjjj", 1999));

        System.out.println(musicas);
        for (int i = 0; i < musicas.size(); i++) {
            System.out.println(musicas.get(i).getTitulo());
        }

    }
}

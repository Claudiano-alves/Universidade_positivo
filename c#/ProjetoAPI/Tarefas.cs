public class Tarefas
{
    public int Id { get; set; }
    public string? nome { get; set; }
    public bool Concluida { get; set; }

    public Tarefas(string nome, bool Concluida)
    {
        this.nome = nome;
        this.Concluida = Concluida;
    }
}
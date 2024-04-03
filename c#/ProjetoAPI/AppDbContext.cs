using Microsoft.EntityFrameworkCore;

class AppDbContext : DbContext
{
    public AppDbContext(AppDbContextOptions<AppDbContext> options)
        : base(options) { }

    //Classes que geram tabelas no banco de dados
    public DbSet<Tarefa> Tarefas => Set<Tarefas>();
    public DbSet<Livro> Livros => Set<Livro>();
    public DbSet<Pessoa> Pessoas => Set<Pessoa>();

}
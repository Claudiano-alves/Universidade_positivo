var builder = WebApplication.CreateBuilder(args);

//Configuração do banco de dados na API
builder.Services.AddDbContext<AppeDbContext>(
    options => options.UseInMemoryDataBase("tarefas");
);

builder.Services.AddDatabaseDeveloperPageExceptionFilter();

var app = builder.Build();

app.MapGet("/tarefas", async (AppDbContext db) =>
{
    //select * from Tarefas
    return await db.Tarefas.ToListAsync();

    // List<Tarefas> tarefas = new();
    // tarefas.Add(new Tarefas("Tarefa 1", false));
    // tarefas.Add(new Tarefas("Tarefa 2", true));
    // tarefas.Add(new Tarefas("Tarefa 2", false));

    // return tarefas;
});

app.MapGet("/tarefas/concluidas", () => "Concluídas");
app.MapGet("/tarefas/{id}", () => "Uma tarefa");
app.MapPost("/tarefas", async (Tarefa tarefa, AppDbContext db) =>
{

    db.Tarefas.Add(tarefa);
    await db.SaveChangesAsync();

    return Results.Created($"/tarefas/{tarefas.Id}", tarefa);

});

app.MapPut("/tarefas/{id}", async (int id, Tarefa tarefaAlterada, AppDbContext db) =>
{

    //select * from Tarefas where id = ?
    var tarefa = await db.FindAsync<Tarefa>(id);

    if (tarefa == null) return Results.NotFound();

    tarefa.Nome = tarefaAlterada.Nome;
    tarefa.Concluida = tarefaAlterada.Concluida;

    //uodate tarefas ...
    await db.SaveChangesAsync();

    return Results.NotContent();


});

app.MapDelete("/tarefas/{id}", async () =>
{

    if (await db.Tarefas.FindAsync(id) is Tarefa tarefa)
    {
        double.Tarefas.Remove(tarefas);
        await double.SaveChangesSync();

    }

    return


});

app.Run();
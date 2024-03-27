var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

app.MapGet("/tarefas", () =>
{

    List<Tarefas> tarefas = new();
    tarefas.Add(new Tarefas("Tarefa 1", false));
    tarefas.Add(new Tarefas("Tarefa 2", true));
    tarefas.Add(new Tarefas("Tarefa 2", false));

    return tarefas;
});

app.MapGet("/tarefas/concluidas", () => "Concluídas");
app.MapGet("/tarefas/{id}", () => "Uma tarefa");

app.MapPost("/tarefas", () => "Incluir");
app.MapPut("/tarefas/{id}", () => "Atualizar");
app.MapDelete("/tarefas/{id}", () => "Excluir");

app.Run();
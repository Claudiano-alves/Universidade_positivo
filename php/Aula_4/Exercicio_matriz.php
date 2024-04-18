
<?php
    $registros = [
        ["nomePessoa" => "João", "idade" => "41", "peso" => "78", "altura" => "1.77"],
        ["nomePessoa" => "André", "idade" => "29", "peso" => "65", "altura" => "1.85"],
        ["nomePessoa" => "Larissa", "idade" => "32", "peso" => "52", "altura" => "1.52"],
        ["nomePessoa" => "Cinthia", "idade" => "18", "peso" => "62", "altura" => "1.68"]
    ];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Tabela de Registros</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Altura</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
                <tr>
                    <td><?php echo $registro["nomePessoa"]; ?></td>
                    <td><?php echo $registro["idade"]; ?></td>
                    <td><?php echo $registro["peso"]; ?></td>
                    <td><?php echo $registro["altura"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
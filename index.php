<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>

<body>
    <h1>Cadastre o aparelho eletrônico</h1>

    <form action="cadastro.php" method="post">
        <label for="nome">Nome do aparelho: </label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="consumo">Consumo máximo de watts: </label>
        <input type="number" name="consumo" id="consumo" required>
        <br>
        <label for="horas">Horas que o aparelho fica ligado por dia: </label>
        <input type="number" name="horas" id="horas" required>
        <br>
        <label for="dias">Dias que o aparelho fica ligado por mês: </label>
        <input type="number" name="dias" id="dias" required>
        <br>
        <label for="valor">Valor do killowatt por hora: </label>
        <input type="number" name="valor" id="valor" required step=".01">
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>
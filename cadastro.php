<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['nome']))
            $erros[] = "<h3>preencher o campo nome</h3>";
        if (empty($_POST['consumo']))
            $erros[] = "<h3>preencher o campo de consumo</h3>";
        if (empty($_POST['horas']))
            $erros[] = "<h3>preencher o campo de horas</h3>";
        if (empty($_POST['dias']))
            $erros[] = "<h3>preencher o campo de dias</h3>";
        if (empty($_POST['valor']))
            $erros[] = "<h3>preencher o campo de valor</h3>";

        if (!isset($erros)) {
            $nome = $_POST['nome'];
            $consumo = $_POST['consumo'];
            $horas = $_POST['horas'];
            $dias = $_POST['dias'];
            $valor = $_POST['valor'];

            echo "<h1>As informações passadas foram: </h1>";
            echo "<p>Nome: " . $nome . "</p>";
            echo "<p>Consumo: " . $consumo . "</p>";
            echo "<p>Horas: " . $horas . "</p>";
            echo "<p>Dias: " . $dias . "</p>";
            echo "<p>Valor: " . $valor . "</p>";

            echo "<h2>Calculos de consumo do aparelho</h2>";
            $consumo_diario = ($consumo / 1000) * $horas;
            echo "<p>Consumo diario: " . $consumo_diario . " Watts</p>";

            $consumo_mensal = $consumo_diario * $dias;
            echo "<p>Consumo mensal: " . $consumo_mensal . " Watts</p>";

            $consumo_aparelho = $consumo_mensal * $valor;
            echo "<p>Consumo do aparelho: " . $consumo_aparelho . "R$</p>";

            if ($consumo_aparelho < 5)
                echo "<h2>Seu aparelho se encaixa na categoria de consumo baixo</h2>";
            else if ($consumo_aparelho > 5 && $consumo_aparelho < 10)
                echo "<h2>Seu aparelho se encaixa na categoria de consumo moderado</h2>";
            else
                echo "<h2>Seu aparelho se encaixa na categoria de consumo elevada</h2>";
        } else {
            echo "<h2>Por favor preencher todos os campos do formulário</h2>";

            foreach ($erros as $erroFatal) {
                echo $erroFatal;
            }
        }
    } else {
        echo "Favor preencher o formulário";
    }

    ?>

    <a href="index.php">Voltar para página inicial</a>

</body>

</html>
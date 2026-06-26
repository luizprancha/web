<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página 3 - Resultado IMC</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Página 3</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST'
        || !isset($_POST['nome'])
        || !isset($_POST['email'])
        || !isset($_POST['peso'])
        || !isset($_POST['altura'])) {
        echo '<p>Dados incompletos. Volte para a página anterior.</p>';
        exit;
    }

    $nome = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $peso = (float) str_replace(',', '.', $_POST['peso']);
    $altura = (float) str_replace(',', '.', $_POST['altura']);

    if ($altura <= 0) {
        echo '<p>Altura inválida. Use um valor maior que zero.</p>';
        exit;
    }

    $imc = $peso / ($altura * $altura);
    $imcFormatado = number_format($imc, 2, ',', '.');
    ?>

    <p>Nome: <?php echo $nome; ?><br>
    E-mail: <?php echo $email; ?><br>
    Peso: <?php echo $peso; ?> kg<br>
    Altura: <?php echo $altura; ?> m</p>

    <h2>Resultado do IMC</h2>
    <p>IMC: <?php echo $imcFormatado; ?></p>
</body>
</html>

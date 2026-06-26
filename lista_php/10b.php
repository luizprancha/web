<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página 2 - Peso e Altura</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Página 2</h1>

    <?php
    if (!isset($_GET['nome']) || !isset($_GET['email'])) {
        echo '<p>Dados de nome e e-mail não foram enviados. Volte para a página 1.</p>';
        exit;
    }

    $nome = htmlspecialchars($_GET['nome'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8');
    ?>

    <p>Nome: <?php echo $nome; ?><br>
    E-mail: <?php echo $email; ?></p>

    <form method="POST" action="10c.php">
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <br><br>

        <label for="altura">Altura (m):</label><br>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br><br>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>

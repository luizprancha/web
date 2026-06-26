<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crie um site em PHP onde o usuário informe dois números para definir um intervalo e salve eles na sessao do php -->
     <form action="11.php" method="get">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    session_start();
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $_SESSION['num1'] = $_GET['num1'];
        $_SESSION['num2'] = $_GET['num2'];
        echo "<p>Intervalo salvo na sessão: {$_SESSION['num1']} a {$_SESSION['num2']}</p>";
    }
    ?>
    

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Página 1</h1>

    <form method="GET" action="10b.php">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <button type="submit">Próximo</button>

    </form>

</body>
</html>
<?php
//exibe dados gravados na sessao    
session_start();
 if (isset($_SESSION['num1']) && isset($_SESSION['num2'])) {
    $num1 = $_SESSION['num1'];
    $num2 = $_SESSION['num2'];
    echo "<p>Intervalo salvo na sessão: $num1 a $num2</p>";
 }
 ?>

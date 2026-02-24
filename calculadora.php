<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <?php echo "FUNCIONA PHP"; ?>
</head>
<body style="font-family: Arial; padding: 50px;">
    
    <h1>🧮 Calculadora Simple</h1>
    
    <!-- FORMULARIO -->
    <form method="POST">
        <p>
            Número 1: <input type="number" name="numero1" style="padding: 10px;">
            + 
            Número 2: <input type="number" name="numero2" style="padding: 10px;">
            <input type="submit" value="=" style="padding: 10px 20px; background: #FF9800; color: white; border: none; font-size: 20px;">
        </p>
    </form>
    
    <!-- PHP AQUÍ -->
<?php
if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resultado = $numero1 + $numero2;
    echo "<h2>Resultado: $numero1 + $numero2 = $resultado</h2>";
}
?>

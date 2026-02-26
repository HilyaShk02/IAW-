<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Media del Alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 80%;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 25px;
            background: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        p.result {
            font-size: 18px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Calcula la media de Hilya</h1>

    <!-- Formulario -->
    <form method="POST">
        <input type="number" step="0.1" name="nota1" placeholder="Nota ejercicio 1" required><br>
        <input type="number" step="0.1" name="nota2" placeholder="Nota ejercicio 2" required><br>
        <input type="number" step="0.1" name="nota3" placeholder="Nota ejercicio 3" required><br>
        <input type="submit" value="Calcular media">
    </form>

    <!-- PHP -->
    <?php
    if(isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'])){
        $nombre = "Hilya"; // Nombre fijo
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $nota3 = floatval($_POST['nota3']);

        // Calcula la media
        $media = ($nota1 + $nota2 + $nota3)/3;
        $media = round($media, 2);

        // Evaluar y mostrar mensaje
        if($media < 5){
            $mensaje = "Lo siento, $nombre, estás suspendido.";
        } elseif($media >= 5 && $media < 6){
            $mensaje = "Bien, $nombre, estás aprobado.";
        } elseif($media >= 6 && $media < 7){
            $mensaje = "Perfecto, $nombre, tienes un bien.";
        } elseif($media >= 7 && $media < 9){
            $mensaje = "Fenomenal, $nombre, tienes un notable.";
        } elseif($media >= 9 && $media <= 10){
            $mensaje = "Enhorabuena, $nombre, sobresaliente.";
        } else {
            $mensaje = "Nota inválida.";
        }

        echo "<p class='result'>Media: $media<br>$mensaje</p>";
    }
    ?>
</div>

</body>
</html>

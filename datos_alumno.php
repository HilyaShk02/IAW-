<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Alumno</title>
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
        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Datos del Alumno</h1>
    <?php
        // Declarar variables
        $nombre = "Ana";      // Pon tu nombre aquí
        $ciclo = "ASIR";      // Nombre del ciclo
        $curso = "2º";        // Curso

        // Mostrar la frase
        echo "<p>Me llamo <strong>$nombre</strong>, estudio <strong>$ciclo</strong> y estoy en <strong>$curso</strong> curso.</p>";
    ?>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Caracteres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        textarea {
            width: 90%;
            height: 80px;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            resize: none;
        }
        input[type="submit"] {
            padding: 10px 25px;
            background: #009688;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        p.result {
            font-size: 16px;
            color: #555;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Contador de Caracteres</h1>

    <!-- Formulario -->
    <form method="POST">
        <textarea name="texto" placeholder="Escribe aquí..." required></textarea><br>
        <input type="submit" value="Contar caracteres">
    </form>

    <!-- PHP -->
    <?php
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
        $longitud = strlen($texto); // Cuenta caracteres
        echo "<p class='result'>El texto tiene <strong>$longitud</strong> caracteres.</p>";
    }
    ?>
</div>

</body>
</html>
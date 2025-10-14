<?php
// Variables
$nombre = "David";
$edad = 22;
$ciudad = "Granada";
$fecha = date("Y-m-d");
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Primera Página PHP</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Pantalla completa */
        }
        .contenedor {
            background: #1e3a8a; /* Azul oscuro */
            color: #ffffff;
            padding: 100px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            text-align: center;
            width: 400px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .info {
            margin: 10px 0;
            font-size: 20px;
        }
        .fecha {
            margin-top: 15px;
            font-size: 20px;
            font-style: italic;
            color: #dbeafe;
        hr {
            margin: 15px 0;
            border: 0;
            height: 1px;
            background: #93c5fd;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Mi primera página PHP</h1>
    <div class="info">👤 Mi nombre es <strong><?php echo $nombre; ?></strong></div>
    <div class="info">🎂 Tengo <strong><?php echo $edad; ?> años</strong></div>
    <div class="info">📍 Soy de <strong><?php echo $ciudad; ?></strong></div>
    <hr>
    <div class="fecha">⏰ Ahora mismo la hora es: <strong><?php echo $hora; ?></strong></div>
    <div class="fecha">📅 La fecha de hoy es: <strong><?php echo $fecha; ?></strong></div>
</div>
</body>
</html>

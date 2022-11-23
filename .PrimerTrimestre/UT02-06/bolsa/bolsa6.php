<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    <style>
    </style>
</head>

<body>
    <?php
    include 'funciones_bolsa.php';

    $file_name = 'ibex35.txt';
    $file = fopen($file_name, 'r');

    functMinMax($file);

    ?>
</body>

</html>
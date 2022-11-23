<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    <style type="text/css">

    </style>
</head>

<body>
    <?php
    require __DIR__ . '/funciones_bolsa.php';

    $file_name = 'ibex35.txt';
    $file = fopen($file_name, 'r');

    showFile($file_name);
    ?>
</body>

</html>
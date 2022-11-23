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
    <h2>Consulta operaciones bolsa</h2>
    <form name="form" method="post" action="bolsa5.php">
        <legend>Valores</legend>
        <select name="valores">
            <option value="Vol.">Total volumen</option>
            <option value="Capit.">Total capitalización</option>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Clear">
    </form>

    <?php
    include 'funciones_bolsa.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST['valores'];
        $file_name = 'ibex35.txt';
        $file = fopen($file_name, 'r');

        $res = total($file, $data);
        echo $res;
    }
    ?>
</body>

</html>
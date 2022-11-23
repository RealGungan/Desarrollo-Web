<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    </script>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $file_name = "alumnos1.txt";
    $file = fopen($file_name, "r");
    $count = 0;

    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Fecha Nacimiento</th><th>Localidad</th>";

    while (($line = fgets($file)) !== false) {
        echo "<tr>";
        echo "<td>" . substr($line, 0, 40) . "</td>";
        echo "<td>" . substr($line, 40, 40) . "</td>";
        echo "<td>" . substr($line, 80, 21) . "</td>";
        echo "<td>" . substr($line, 101, 11) . "</td>";
        echo "<td>" . substr($line, 112, 26) . "</td>";
        echo "</tr>";
    }
    fclose($file);
    echo "</table>";
    ?>
</body>

</html>
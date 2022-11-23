<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    </script>
    <style>
    </style>
</head>

<body>
    <?php
    $file_name = "alumnos2.txt";

    $file = fopen($file_name, file_exists($file_name) ? "a" : "w");

    fwrite($file, getData());
    fclose($file);

    function getData()
    {
        $data = "";
        $data = $_POST['name'] . "##";
        $data .= $_POST['last1'] . "##";
        $data .= $_POST['last2'] . "##";
        $data .= $_POST['date'] . "##";
        $data .= $_POST['loc'] . "\n";

        return $data;
    }
    ?>
</body>

</html>
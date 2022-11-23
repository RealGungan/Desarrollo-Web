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
    $file_name = "alumnos1.txt";

    $file = fopen($file_name, file_exists($file_name) ? "a" : "w");

    fwrite($file, getData());
    fclose($file);

    function getData()
    {
        $data = "";
        $data = str_pad($_POST['name'], 40);
        $data .= str_pad($_POST['last1'], 40);
        $data .= str_pad($_POST['last2'], 21);
        $data .= str_pad($_POST['date'], 11);
        $data .= str_pad($_POST['loc'], 26) . "\n";

        return $data;
    }
    ?>
</body>

</html>
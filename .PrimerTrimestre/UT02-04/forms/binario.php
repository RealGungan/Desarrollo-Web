<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    <link href=".css" rel="stylesheet" type="text/css" />
    <script src="" type="text/javascript">

    </script>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>CONVERSOR BINARIO</h1>
    <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Número Decimal: <input type="text" name="dec">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Clear">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dec = $_POST['dec'];
        if (!empty($dec)) {
            dec_to_bin($dec);
        }
    }

    function dec_to_bin($dec)
    {
        //variable para almacenar el valor decimal y luego darle la vuelta
        $valor_decimal = "";

        //si el número es 0, el resultado es 0
        if ($dec == 0) {
            $valor_decimal = "0";
        } else {
            //mientras el resultado de la division sea mayor que cero,
            //el bucle seguirá funcionando
            while ($dec / 2 > 0) {
                //almacenamos el resto de la división en la variable
                $valor_decimal .= (int)($dec % 2);
                //dividimos el número por dos
                $dec = $dec / 2;
                //el resultado de la división lo convertimos en entero
                $dec = (int)($dec);
            }
        }

        //imprimimos el resultado dado la vuelta
        echo "<br>Número decimal: " . "<textarea rows=\"1\">" . strrev($valor_decimal) . "</textarea>";
    }
    ?>
</body>

</html>
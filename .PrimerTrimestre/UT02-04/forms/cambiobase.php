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
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body><?php
        $operation = $_POST['operation'];

        $dec = get_data($_POST['dec']);

        echo "<h1> CONVERSOR NUMÉRICO </h1>";

        switch ($operation) {
            case 'bin':
                echo "<table>";
                bin($dec);
                echo "</table>";
                break;
            case 'oct':
                echo "<table>";
                oct($dec);
                echo "</table>";
                break;
            case 'hex':
                echo "<table>";
                hex($dec);
                echo "</table>";
                break;
            case 'all':
                echo "<table>";
                all($dec);
                echo "</table>";
                break;
        }

        function bin($dec)
        {
            $valor_decimal = "";

            if ($dec == 0) {
                $valor_decimal = "0";
            } else {
                while ($dec / 2 > 0) {
                    $valor_decimal .= (int)($dec % 2);
                    $dec = $dec / 2;
                    $dec = (int)($dec);
                }
            }

            echo "<tr><td> Binario </td><td> " . strrev($valor_decimal) . "</td></tr>";
        }

        function oct($dec)
        {
            $base = "8";
            $valor_base = "";
            $valor_decimal = "";

            if ($base == 0) {
                printf("No se puede dividir por cero");
            } elseif ($dec == 0) {
                $valor_decimal = "0";
            } else {
                while ($dec / $base > 0) {
                    $valor_base .= (int)($dec % $base);
                    $dec = $dec / $base;
                    $dec = (int)($dec);
                }
            }

            if ($valor_decimal != 0) {
                echo "<tr><td> Octal </td><td> " . strrev($valor_base) . "</td></tr>";
            }
        }

        function hex($dec)
        {
            $base = "16";
            $valor_hex = "";
            $hex = "ABCDEF";
            $hex_pos = "";

            if ($dec == 0) {
                $valor_hex = "0";
            } else {
                while ($dec / $base > 0) {
                    if (fmod($dec, $base) >= 10) {
                        $hex_pos = substr(fmod($dec, $base), 1, fmod($dec, $base) - 1);
                        $valor_hex .= substr($hex, $hex_pos, 1);
                    } else {
                        $valor_hex .= fmod($dec, $base);
                    }

                    $dec = $dec / $base;
                    $dec = (int)($dec);
                }
            }

            if ($valor_hex != 0) {
                echo "<tr><td> Hexadecimal </td><td> " . strrev($valor_hex) . "</td></tr>";
            }
        }

        function all($dec)
        {
            bin($dec);
            oct($dec);
            hex($dec);
        }

        function get_data($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
</body>

</html>
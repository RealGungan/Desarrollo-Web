<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<style>
    body {
        text-align: center;
    }
</style>

<BODY>
    <?php
    $operation = $_GET['operation'];

    $val1 = get_data($_GET['val1']);
    $val2 = get_data($_GET['val2']);

    echo "<h1> Calculadora </h1>";

    switch ($operation) {
        case 'sum':
            echo
            "Resultado de la operación " . $val1 . " + " . $val2 . " = " . sum($val1, $val2);
            break;
        case 'res':
            echo
            "Resultado de la operación " . $val1 . " - " . $val2 . " = " . res($val1, $val2);
            break;
        case 'mul':
            echo
            "Resultado de la operación " . $val1 . " * " . $val2 . " = " . mul($val1, $val2);
            break;
        case 'div':
            echo
            "Resultado de la operación " . $val1 . " / " . $val2 . " = " . div($val1, $val2);
            break;
    }

    function sum($val1, $val2)
    {
        return $val1 + $val2;
    }
    function res($val1, $val2)
    {
        return $val1 - $val2;
    }
    function mul($val1, $val2)
    {
        return $val1 * $val2;
    }
    function div($val1, $val2)
    {
        return $val1 / $val2;
    }

    function get_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</BODY>

</HTML>
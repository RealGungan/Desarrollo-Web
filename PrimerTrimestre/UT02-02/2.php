<HTML>

<HEAD>
    <TITLE> EJ2B – Conversor Decimal a base n </TITLE>
</HEAD>

<BODY>
    <?php
    $num = "48";
    $base = "8";
    //variable para almacenar el valor del cambio de base
    $valor_base = "";

    //mientras la división del número por la base sea mayor que cero
    //el bucle seguirá funcionando
    while ($num / $base > 0) {
        //almacenamos el resto de la división en la variable
        $valor_base .= (int)($num % $base);
        //dividimos el número por la base
        $num = $num / $base;
        //el resultado de la división lo convertimos en entero
        $num = (int)($num);
    }

    //imprimimos el resultado dado la vuelta
    printf(strrev($valor_base));
    ?>
</BODY>

</HTML>
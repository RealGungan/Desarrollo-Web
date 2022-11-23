<HTML>

<HEAD>
    <TITLE> EJ1B – Conversor decimal a binario</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "168";
    //variable para almacenar el valor decimal y luego darle la vuelta
    $valor_decimal = "";

    //si el número es 0, el resultado es 0
    if ($num == 0) {
        $valor_decimal = "0";
    } else {
        //mientras el resultado de la division sea mayor que cero,
        //el bucle seguirá funcionando
        while ($num / 2 > 0) {
            //almacenamos el resto de la división en la variable
            $valor_decimal .= (int)($num % 2);
            //dividimos el número por dos
            $num = $num / 2;
            //el resultado de la división lo convertimos en entero
            $num = (int)($num);
        }
    }

    //imprimimos el resultado dado la vuelta
    printf(strrev($valor_decimal));
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ3B – Conversor Decimal a base 16</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "12132123";
    $base = "16";
    //variable para almacenar el valor del número en hexadecimal
    $valor_hex = "";
    //variable para almacenar los distintos valores hexadecimales
    $hex = "ABCDEF";
    //variable para saber qué posición coger en la variable "valor_hex"
    $hex_pos = "";

    //si el número es 0, el resultado es 0
    if ($num == 0) {
        $valor_decimal = "0";
    } else {
        //mientras la división del número por la base sea mayor que cero
        //el bucle seguirá funcionando
        while ($num / $base > 0) {
            //si el resto de la división es mayor o igual que 10 se añadirá
            //la letra correspondiente de la variable "hex".
            //Si por el contrario es menor que 10, se almecenará el resto directamente
            if (fmod($num, $base) >= 10) {
                //hayamos la posición que vamos a utilizar en la variable "hex
                $hex_pos = substr(fmod($num, $base), 1, fmod($num, $base) - 1);
                //cogemos el valor correspondiente usando la variable "hex_pos"
                $valor_hex .= substr($hex, $hex_pos, 1);
            } else {
                //se almacena el resto
                $valor_hex .= fmod($num, $base);
            }

            //dividimos el número por la base
            $num = $num / $base;
            //el resultado de la división lo convertimos en entero
            $num = (int)($num);
        }
    }

    //imprimimos el resultado dado la vuelta
    if ($valor_decimal != 0) {
        printf(strrev($valor_hex));
    }
    ?>
</BODY>

</HTML>
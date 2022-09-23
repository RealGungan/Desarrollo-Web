<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $ip = "192.18.16.204";

    //variable para almacenar el número
    $number = "";
    //variable para almacenar la ip ya transformada
    $ip_bin = "";

    //bucle para recorrer la ip
    for ($i = 0; $i < strlen($ip); $i++) {
        //si la posición de la ip es distinta a un punto, 
        //almacena esa posición en la variable "number" 
        if ($ip[$i] != ".") {
            $number .= $ip[$i];
            //si por el contrario es un punto, transforma el número almacenado
            //en binario y lo añade a la variable "ip_bin"
        } else {
            $number_bin = decbin($number);
            $number_bin = str_pad($number_bin, 8, "0", STR_PAD_LEFT);
            $ip_bin .= $number_bin . ".";
            $number = "";
        }
    }

    //como no podemos detectar un punto para transformar el útlimo
    //número, hay que transoformalo fuera del "for" e imprimir el resultado
    $number_bin = decbin($number);
    $number_bin = str_pad($number_bin, 8, "0", STR_PAD_LEFT);
    $ip_bin .= $number_bin;
    printf($ip_bin);
    ?>
</BODY>

</HTML>
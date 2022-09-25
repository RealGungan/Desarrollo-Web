<HTML>

<HEAD>
    <TITLE> EJ4B – Tabla Multiplicar</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "8";
    //creamos una variable para llevar la cuenta de las multiplicaciones
    $cont = 1;
    //creamos una variable para almacenar el resultado
    $res = "";

    //creamos la etiqueta "table" dándole estilo
    printf("<table style=\"border:1px solid black; border-collapse: collapse;\">");

    //mientras el contador sea menor o igual que diez, el bucle seguirá funcionando
    while ($cont <= 10) {
        //creamos las etiquetas "tr" y "td" dándole estilo al "td"
        printf("<tr><td style=\"border:1px solid black; width: 4rem\">");
        //imprimimos la variable "num" seguido se una "x" y el valor del contador
        printf($num . " x " . $cont);
        //creamos la etiqueta "td" dándole estilo
        printf("<td style=\"border:1px solid black; width: 4rem\">");
        //imprimimos el resultado de la multiplicación de la variable "num" por el contador
        printf($num * $cont);
        //cerramos la etiqueta "td"
        printf("</td>");
        //cerramos las etiquetas "tr" y "td"
        printf("</tr></td>");
        //aumentamos el contador
        $cont++;
    }

    //cerramos la etiqueta "table"
    printf("</table>");
    ?>
</BODY>

</HTML>
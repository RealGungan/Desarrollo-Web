<HTML>

<HEAD>
    <TITLE> EJ4B – Tabla Multiplicar</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "8";
    $cont = 1;
    $res = "";

    printf("<table style=\"border:1px solid black; border-collapse: collapse;\">");

    while ($cont <= 10) {
        printf("<tr><td style=\"border:1px solid black; width: 4rem\">");
        printf($num . " x " . $cont);
        printf("<td style=\"border:1px solid black; width: 4rem\">");
        printf($num * $cont);
        printf("</td>");
        printf("</tr></td>");
        $cont++;
    }

    printf("</table>");
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr = [];

    //crear tabla
    printf("<table style=\"border:1px solid black; border-collapse: collapse;\">");
    printf("<tr>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Indice</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Binario</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Octal</th></tr>");


    for ($i = 0; $i < 20; $i++) {
        printf("<tr style=\"border:1px solid black; border-collapse: collapse; width: 4rem;\"><td> " . $i . "</td>");
        printf("<td style=\"border:1px solid black;\"> " . $arr[$i] = decbin($i) . "</td>");
        printf("<td style=\"border:1px solid black;\"> " . decoct($i) . "</td></tr>");
    }

    ?>
</BODY>

</HTML>
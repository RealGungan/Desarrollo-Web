<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr = [];
    $count = 0;
    $sum = 0;

    //crear tabla
    printf("<table style=\"border:1px solid black; border-collapse: collapse;\">");
    printf("<tr>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Indice</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Valor</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Suma</th></tr>");

    //bucle para detectar los impares y después sumarlos e imprimirlos
    for ($i = 1; $count < 20; $i++) {
        if ($i % 2 == 1) {
            $arr[$count] = $i;
            printf("<tr style=\"border:1px solid black; border-collapse: collapse; width: 4rem;\"><td> " . $count . "</td>");
            printf("<td style=\"border:1px solid black;\"> " . $arr[$count] . "</td>");
            $sum = $sum + $arr[$count];
            printf("<td style=\"border:1px solid black;\"> " . $sum . "</td></tr>");
            $count++;
        }
    }

    printf("</table>");
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td {
            border: 1px solid;
        }
    </style>
</HEAD>

<BODY>
    <?php
    $arr = [];
    $max = 3;
    $count = 0;


    for ($i = 0; $i < $max; $i++) {
        $arr_rows = [];
        printf("<tr>");
        for ($j = 0; $j < $max; $j++) {
            $count += 2;
            printf("<td>" . $count . "</td>");
            $arr_rows[] = $count;
            printf("<td>" . $count . "</td>");
        }
        printf("</tr>");
        $arr[] = $arr_rows;
    }

    printf("</table>");
    ?>
</BODY>

</HTML>
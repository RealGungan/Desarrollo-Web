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
    $arr_2d = [];
    $max = 3;
    $count = 0;
    $arr_sum_rows = array(0, 0, 0);
    $arr_sum_cols = array(0, 0, 0);

    printf("<table>");

    for ($i = 0; $i < $max; $i++) {
        $arr_rows = [];
        for ($j = 0; $j < $max; $j++) {
            $count += 2;
            $arr_rows[] = $count;
            $arr_sum_rows[$i] += $arr_rows[$j];
        }
        printf("<tr><td>" . $arr_sum_rows[$i] . "</td></tr>");
        $arr_2d[] = $arr_rows;
    }

    printf("</table>");
    printf("<table>");

    printf("<tr>");
    for ($i = 0; $i < $max; $i++) {
        for ($j = 0; $j < $max; $j++) {
            $arr_sum_cols[$i] += $arr_2d[$j][$i];
        }
        printf("<td>" . $arr_sum_cols[$i] . "</td>");
    }
    printf("</tr>");

    printf("</table>");
    ?>
</BODY>

</HTML>
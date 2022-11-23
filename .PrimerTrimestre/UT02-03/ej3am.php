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
    $x = 3;
    $y = 5;
    $count = 0;

    for ($i = 0; $i < $x; $i++) {
        $arr_rows = [];
        for ($j = 0; $j < $y; $j++) {
            $count += 2;
            $arr_rows[] = $count;
            printf("(" . $i . "," . $j . ") = " . $count . "<br>");
        }
        $arr_2d[] = $arr_rows;
    }

    printf("<br>");

    for ($i = 0; $i < $y; $i++) {
        for ($j = 0; $j < $x; $j++) {
            printf("(" . $j . "," . $i . ") = " . $arr_2d[$j][$i] . "<br>");
        }
    }
    ?>
</BODY>

</HTML>
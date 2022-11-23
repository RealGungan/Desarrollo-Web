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
    $max = 0;
    $arr_max[] = array(0, 0);

    for ($i = 0; $i < $x; $i++) {
        $arr_rows = [];
        for ($j = 0; $j < $y; $j++) {
            $count += 2;
            $arr_rows[] = $count;
            if ($count > $max) {
                $max = $count;
                $arr_max[0] = $i;
                $arr_max[1] = $j;
            }
        }
        $arr_2d[] = $arr_rows;
    }


    printf("(" . $arr_max[0] . "," . $arr_max[1] . ") = " . $max . "<br>");
    ?>
</BODY>

</HTML>
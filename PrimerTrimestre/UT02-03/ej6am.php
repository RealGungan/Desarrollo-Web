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
    $y = 3;
    $random = 0;
    $arr_max = [];
    $max = 0;
    $arr_average = array(0, 0, 0);;

    for ($i = 0; $i < $x; $i++) {
        $arr = [];
        $max = 0;
        for ($j = 0; $j < $y; $j++) {
            $random = rand(0, 100);
            $arr[] = $random;
            if ($random > $max) {
                $max = $random;
                $arr_max[$i] = $random;
            }
            $arr_average[$i] += $random;
        }
        $arr_2d[] = $arr;
        $arr_average[$i] = $arr_average[$i] / 3;
    }
    print_r($arr_2d);

    printf("<br><br> Máximos filas: ");
    print_r($arr_max);

    printf("<br><br> Media filas: ");
    print_r($arr_average);
    ?>
</BODY>

</HTML>
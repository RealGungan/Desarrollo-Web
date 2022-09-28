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
    $x = 5;
    $y = 3;

    for ($i = 0; $i < $x; $i++) {
        $arr = [];
        for ($j = 0; $j < $y; $j++) {
            $arr[] = $i + $j;
        }
        $arr_2d[] = $arr;
    }

    print_r($arr_2d);
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr = ["Daniel" => 8, "Paula" => 2, "Luis" => 6, "Javi" => 5, "Alba" => 10];

    foreach ($arr as $position => $value) {
        printf("Nombre: " . $position . "  Edad: " . $value);
        printf("<br>");
    }

    printf("<br>");
    printf(array_search(max($arr), $arr));


    printf("<br>");
    printf("<br>");
    printf(array_search(min($arr), $arr));


    printf("<br>");
    printf("<br>");
    printf(array_sum($arr) / count($arr));
    ?>
</BODY>

</HTML>
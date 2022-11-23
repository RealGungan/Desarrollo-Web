<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr = ["Daniel" => 17, "Paula" => 18, "Luis" => 16, "Javi" => 19, "Alba" => 22];

    foreach ($arr as $position => $value) {
        printf("Nombre: " . $position . "  Edad: " . $value);
        printf("<br>");
    }

    printf("<br>");
    printf(next($arr));

    printf("<br>");
    printf("<br>");
    printf(next($arr));

    printf("<br>");
    printf("<br>");
    printf(end($arr));

    asort($arr);
    printf("<br>");
    printf("<br>");
    foreach ($arr as $position => $value) {
        printf("Nombre: " . $position . "  Edad: " . $value);
        printf("<br>");
    }

    ?>
</BODY>

</HTML>
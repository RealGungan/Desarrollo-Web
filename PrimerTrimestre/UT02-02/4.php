<HTML>

<HEAD>
    <TITLE> EJ4B – Tabla Multiplicar</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "8";
    $cont = 1;

    while ($cont <= 10) {
        printf($num . " x " . $cont . " = " . ($num * $cont) . "</br>");
        $cont++;
    }
    ?>
</BODY>

</HTML>
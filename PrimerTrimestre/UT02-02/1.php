<HTML>

<HEAD>
    <TITLE> EJ1B – Conversor decimal a binario</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "127";
    $valor_decimal = "";

    while ($num / 2 != 1 && $num > 0) {
        $num = $num / 2;
        $num = (int)$num;
        $valor_decimal .= $num % 2;
    }

    printf("1" . strrev($valor_decimal));

    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ1B – Conversor decimal a binario</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "168";
    $valor_decimal = "";

    while ($num / 2 > 0) {
        $valor_decimal .= (int)($num % 2);
        $num = $num / 2;
        $num = (int)($num);
    }

    printf(strrev($valor_decimal));
    ?>
</BODY>

</HTML>
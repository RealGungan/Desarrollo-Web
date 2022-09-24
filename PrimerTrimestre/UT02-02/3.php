<HTML>

<HEAD>
    <TITLE> EJ3B – Conversor Decimal a base 16</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "222";
    $base = "16";
    $valor_hex = "";
    $hex = "ABCDEF";

    while ($num / $base > 0) {
        $num = $num / $base;
        $num = (int)$num;
        if ($valor_hex >= 10 || $num >= 10) {
            $valor_hex = (int)substr($valor_hex, 1) - 1;
            $valor_hex = substr($hex, $valor_hex, 1);
        } else {
            $valor_hex .= (int)($num % $base);
        }
    }

    printf(strrev($valor_hex));
    ?>
</BODY>

</HTML>
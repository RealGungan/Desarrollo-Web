<HTML>

<HEAD>
    <TITLE> EJ3B – Conversor Decimal a base 16</TITLE>
</HEAD>

<BODY>
    <?php
    $num = "12132123";
    $base = "16";
    $valor_hex = "";
    $hex_pos = "";
    $hex = "ABCDEF";

    while ($num / $base > 0) {
        if (fmod($num, $base) > 10) {
            $hex_pos = substr(fmod($num, $base), 1, fmod($num, $base) - 1);
            $valor_hex .= substr($hex, $hex_pos, 1);
        } else {
            $valor_hex .= fmod($num, $base);
        }
        $num = $num / $base;
        $num = (int)($num);
    }

    printf(strrev($valor_hex));
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ2B – Conversor Decimal a base n </TITLE>
</HEAD>

<BODY>
    <?php
    $num = "48";
    $base = "8";
    $valor_base = "";


    while ($num / $base > 0) {
        $valor_base .= (int)($num % $base);
        $num = $num / $base;
        $num = (int)($num);
    }


    printf(strrev($valor_base));
    ?>
</BODY>

</HTML>
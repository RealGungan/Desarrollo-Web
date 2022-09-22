<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $ip = "192.18.16.204";
    $number = "";
    $ip_bin = "";

    for ($i = 0; $i < strlen($ip); $i++) {
        if ($ip[$i] != ".") {
            $number .= $ip[$i];
        } else {
            $number_bin = decbin($number);
            $number_bin = str_pad($number_bin, 8, "0", STR_PAD_LEFT);
            $ip_bin .= $number_bin . ".";
            $number = "";
        }
    }

    $number_bin = decbin($number);
    $number_bin = str_pad($number_bin, 8, "0", STR_PAD_LEFT);
    $ip_bin .= $number_bin;
    echo ($ip_bin);
    ?>
</BODY>

</HTML>
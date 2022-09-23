<HTML>

<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $ip = "192.18.16.204/16";

    $mascara = substr($ip, strpos($ip, "/") + 1);

    $num = $ip;
    $ip1_bin = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip2 = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip3 = substr($ip, 0, strpos($ip, '.'));
    $ip = substr($ip, strpos($ip, '.') + 1);
    $ip4 = substr($ip, 0);



    ?>
</BODY>

</HTML>
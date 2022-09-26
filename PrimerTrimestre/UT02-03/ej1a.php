<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr = [];
    $count = 0;

    printf("<table style=\"border:1px solid black; border-collapse: collapse;\">");
    printf("<tr>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Indice</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Valor</th>");
    printf("<th style=\"border:1px solid black; border-collapse: collapse; width: 4rem\">Suma</th>");

    for ($i = 3; $count <= 20; $i++) {
        if ($i % 2 == 1) {
            $count++;
            $arr[$count] = $i;
        }
    }

    print_r($arr[3]);

    ?>
</BODY>

</HTML>
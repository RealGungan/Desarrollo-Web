<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td {
            border: 1px solid;
            border-collapse: collapse;
            font-size: 3rem;
            padding: 1rem;

            text-align: center;
        }

        div {
            width: fit-content;
            display: flex;
            padding: 1rem
        }
    </style>
</HEAD>

<BODY>
    <?php
    printf("<div>");
    $matriz1[] = createArray();
    $matriz2[] = createArray();
    printf("</div>");

    sumArrs($matriz1, $matriz2);

    function createArray()
    {
        $arr_2d = [];

        printf("<div>");
        printf("<table>");

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 3; $j++) {
                $rand = rand(1, 10);
                $arr_rows[] = $rand;
                printf("<td>" . $rand . "</td>");
            }
            printf("</tr>");
            $arr_2d[] = $arr_rows;
        }

        printf("</table>");
        printf("</div>");

        return $arr_2d;
    }

    function sumArrs($matriz1, $matriz2)
    {
        printf("<div>");
        printf("<table>");

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 3; $j++) {
                printf("<td>" . $matriz1[$i][$j] + $matriz2[$i][$j] . "</td>");
            }
            printf("</tr>");
            $arr_2d[] = $arr_rows;
        }

        printf("</table>");
        printf("</div>");
    }
    ?>
</BODY>

</HTML>
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
    $matriz = createArray();
    printf("</div>");

    transposeArray($matriz);

    //función para generar arrays
    function createArray()
    {
        $arr_2d = [];

        printf("<div>");
        printf("<table>");

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 4; $j++) {
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

    //función para hacerla traspuesta
    function transposeArray($matriz)
    {
        printf("<div>");
        printf("<table>");

        for ($i = 0; $i < count($matriz) + 1; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < count($matriz); $j++) {
                printf("<td>" . $matriz[$j][$i] . "</td>");
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
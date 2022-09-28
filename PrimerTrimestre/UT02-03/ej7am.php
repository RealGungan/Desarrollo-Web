<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</HEAD>

<BODY>
    <?php
    $arr_names = ["Daniel", "Paula", "Luis", "Javi", "Alba", "Naruto", "Katy", "Carlos", "Jesús", "Nazareth"];
    $arr_subjects = ["Biología", "Lengua", "Matemáticas", "Física"];
    $arr_2d = [];
    $x = 10;
    $y = 5;

    $arr_2d = buildArray($x, $y, $arr_names);

    printArrayTable($x, $y, $arr_subjects, $arr_2d);

    highestMark($arr_2d, $arr_subjects);

    lowestMark($arr_2d, $arr_subjects);

    studentLowest($arr_2d, $arr_names, $arr_subjects);

    studentHighest($arr_2d, $arr_names, $arr_subjects);

    //función para crear el array
    function buildArray($x, $y, $arr_names)
    {
        for ($i = 0; $i < $x; $i++) {
            $arr_rows = [];
            for ($j = 0; $j < $y; $j++) {
                if ($j == 0) $arr_rows[] = $arr_names[$i];
                else $arr_rows[] = rand(0, 10);
            }
            $arr_2d[] = $arr_rows;
        }

        return $arr_2d;
    }

    //función para imprimir en tabla
    function printArrayTable($x, $y, $arr_subjects, $arr_2d)
    {
        printf("<table>");

        printf("<tr><th> Nombres </th>");
        for ($i = 0; $i < count($arr_subjects); $i++) {
            printf("<th>" . $arr_subjects[$i] . "</th>");
        }
        printf("</tr>");

        for ($i = 0; $i < $x; $i++) {
            printf("</tr>");
            for ($j = 0; $j < $y; $j++) {
                printf("<td>" . $arr_2d[$i][$j] . "</td>");
            }
            printf("</tr>");
        }

        printf("</table>");
    }

    //función mayor nota en una asignatura
    function highestMark($arr_2d, $arr_subjects)
    {
        $subject = 4;
        $highest = 0;
        $nombre = "";

        for ($i = 0; $i < count($arr_2d); $i++) {
            if ($arr_2d[$i][$subject] > $highest) {
                $highest = $arr_2d[$i][$subject];
                $nombre = $arr_2d[$i][0];
            }
        }
        printf("<br>El alumno con menor nota en " . $arr_subjects[$subject - 1] . " es "
            . $nombre . " con un " . $highest);
    }

    //función menor nota en una asignatura
    function lowestMark($arr_2d, $arr_subjects)
    {
        $subject = 4;
        $lowest = $arr_2d[0][$subject];
        $nombre = "";

        for ($i = 0; $i < count($arr_2d); $i++) {
            if ($arr_2d[$i][$subject] <= $lowest) {
                $lowest = $arr_2d[$i][$subject];
                $nombre = $arr_2d[$i][0];
            }
        }
        printf("<br><br>El alumno con mayor nota en " . $arr_subjects[$subject - 1] . " es "
            . $nombre . " con un " . $lowest);
    }

    //funcnión menor nota alumno en una asignatura
    function studentLowest($arr_2d, $arr_names, $arr_subjects)
    {
        $student = 4;
        $lowest = $arr_2d[$student][0];
        $nombre = "";

        for ($i = 0; $i <= count($arr_subjects); $i++) {
            if ($arr_2d[$student][$i] < $lowest) {
                $lowest = $arr_2d[$student][$i];
                $nombre = $arr_subjects[$i - 1];
            }
        }

        printf("<br><br>La nota más baja de " . $arr_names[$student] . " es un "
            . $lowest . " en " . $nombre);
    }

    //funcnión mayor nota alumno en una asignatura
    function studentHighest($arr_2d, $arr_names, $arr_subjects)
    {
        $student = 5;
        $highest = 0;
        $nombre = "";

        for ($i = 0; $i <= count($arr_subjects); $i++) {
            if ($arr_2d[$student][$i] > $highest && $i != 0) {
                $highest = $arr_2d[$student][$i];
                $nombre = $arr_subjects[$i - 1];
            }
        }

        printf("<br><br>La nota más alta de " . $arr_names[$student] . " es un "
            . $highest . " en " . $nombre);
    }

    //funcnión mayor nota alumno en una asignatura
    function studentHighest($arr_2d, $arr_names, $arr_subjects)
    {
        $student = 5;
        $highest = 0;
        $nombre = "";

        for ($i = 0; $i <= count($arr_subjects); $i++) {
            if ($arr_2d[$student][$i] > $highest && $i != 0) {
                $highest = $arr_2d[$student][$i];
                $nombre = $arr_subjects[$i - 1];
            }
        }

        printf("<br><br>La nota más alta de " . $arr_names[$student] . " es un "
            . $highest . " en " . $nombre);
    }
    ?>
</BODY>

</HTML>
<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr_1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
    $arr_2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
    $arr_3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];

    printf("Array sin función <br>");
    $arr_sin = [];
    foreach ($arrays as  $key => $array) {
        foreach ($array as $finalArray) {
            $arr_sin[] = $finalArray;
        }
    }
    print_r($arr_sin);
    printf("<br><br>");

    printf("Array función merge <br>");
    $arr_merge = array_merge($arr_1, $arr_2, $arr_3);
    print_r($arr_merge);
    printf("<br><br>");

    printf("Array función push <br>");
    $arr_push = array_push($arr_1, $arr_2, $arr_3);
    print_r($arr_push);

    function array_merge
    ?>
</BODY>

</HTML>
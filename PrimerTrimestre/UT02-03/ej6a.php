<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>
</HEAD>

<BODY>
    <?php
    $arr_1 = ["Bases Datos", "Entornos Desarrollo", "Programación"];
    $arr_2 = ["Sistemas Informáticos", "FOL", "Mecanizado"];
    $arr_3 = ["Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Inglés"];


    $arr_merge = array_merge($arr_1, $arr_2, $arr_3);
    unset($arr_merge[array_search("Mecanizado", $arr_merge)]);

    print_r($arr_merge);

    ?>
</BODY>

</HTML>
<?php

function generatePlayers($name, $dados)
{
    $array_res = [];
    $count = 0;
    while ($dados != $count) {
        $array_res[$name][] = rand(1, 6);
        $count++;
    }
    return $array_res;
}

function printResTable($array)
{
    foreach (array_keys($array) as $name) {
        echo "<table><tr><td>" . $name . "</td>";
        foreach ($array[$name] as $res) {
            echo "<td>" . "<img src= \"images/$res.png\"" . ">" . "</td>";
        }
    }
    echo "</tr></table><br>";
}

function printRes($array)
{
    foreach (array_keys($array) as $name) {
        if (count(array_unique($array[$name])) === 1) {
            $winners[] = $name;
            echo $name . " = 100<br>";
        } else {
            echo $name . " = " . array_sum($array[$name]) . "<br>";
        }
    }
}

function winner($array)
{
    $winners = [];
    $max = 0;

    foreach (array_keys($array) as $name) {
        if (count(array_unique($array[$name])) === 1) {
            $winners[] = $name;
            echo "<br>" . $name . " ha sacado todo " . $array[$name][0] . "<br>";
        }
        if (array_sum($array[$name]) > $max) {
            $max = array_sum($array[$name]);
        }
    }

    if (empty($winners)) {
        foreach (array_keys($array) as $name) {
            if (array_sum($array[$name]) == $max) {
                $winners[] = $name;
            }
        }

        for ($i = 0; $i < count($winners); $i++) {
            echo "<br>GANADOR : " . $winners[$i];
        }
    }
}

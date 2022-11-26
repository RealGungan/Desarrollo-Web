<?php

// función para crear jugdores. Puede haber un número infinito
function createPlayer()
{
    $players = [];

    $postdata = file_get_contents("php://input");

    foreach ($_POST as $key => $value) {
        if ($value != '' && $key != 'apuesta' && $key != 'submit' && $key != 'numcartas') $players[$value] = [];
    }

    return $players;
}

// función para repartir cuatro cartas a cada jugador
function handCards($players)
{
    // variable para saber cuántas cartas hemos puesto que salgan
    $ncards = $_POST['numcartas'];

    // variable para movernos a través del array de cartas
    $pointer = 0;
    // crear el array con las cartas llamando a la función fillCards
    $cards = fillCards();

    // a cada jugador se le reparten cuatro cartas
    foreach (array_keys($players) as $player) {
        for ($i = 0; $i < $ncards; $i++) {
            $players[$player][] = $cards[$pointer];
            $pointer++;
        }
    }

    return $players;
}

// función que recoge todas las imágenes de la carpeta 'images' y las almacena en un array
function fillCards()
{
    $cards = [];
    $files = scandir('images');

    for ($i = 2; $i < 42; $i++) {
        $cards[] = $files[$i];
    }

    // se mezcla el array para que al repartir sea aleatorio
    shuffle($cards);

    return $cards;
}

// función para imprimir las cartas que tiene cada jugador
function printCards($players)
{
    echo '<table>';
    foreach ($players as $player => $card) {
        echo '<tr><td>' . $player . ' ';
        for ($i = 0; $i < count($card); $i++) {
            echo '<img src="images/' . $card[$i] . '", width=50;/>';
        }
        echo '</td></tr>';
    }
    echo '</table>';
}

// función para calcular puntuación
function countCards($players)
{
    // variable para saber cuántas cartas hemos puesto que salgan
    $ncards = $_POST['numcartas'];

    $res = [];
    // array para detectar si la carta es una figura
    $figures = ['C', 'R', 'S'];

    foreach ($players as $player => $cards) {
        $punt = 0;

        for ($i = 0; $i < $ncards; $i++) {
            if (in_array($cards[$i][0], $figures)) {
                $punt += .5;
            } else {
                $punt += intval($cards[$i][0]);
            }
        }

        $res[$player] = $punt;
    }

    return $res;
}

// función para imprimir los resultados
function printRes($res)
{
    foreach ($res as $player => $punt) {
        echo '<br>Jugador ' . $player . ' ha obtenido ' . $punt . ' puntos';
    }
}

// función para obtener ganadores
function getWinner($res)
{
    $win = [];
    $bote = $_POST['apuesta'];
    echo '<br>';

    foreach ($res as $player => $punt) {
        if ($punt == 7.5) {
            $win[] = $player;
            // si hay ganadore se llama a la función que los imprime
            printWinner($player, $bote);
            giveMoney($res, $win);
        }
    }

    return $win;
}

// función para obtener el más cercano a 7.5 si no hay ganadores
function getHigger($res)
{
    $max = 0;

    $bote = $_POST['apuesta'];

    // obtener el máximo
    foreach ($res as $player => $punt) {
        if ($punt < 7.5 && $punt > $max) {
            $max = $punt;
        }
    }

    // almacenar aquellos con max
    foreach ($res as $player => $punt) {
        if ($punt == $max) {
            $higher[$player] = $punt;
        }
    }

    foreach ($res as $player => $punt) {
        if ($punt == $max) {
            $higher_money[] = $player;
        }
    }

    if (!empty($higher)) {
        foreach ($higher as $player => $punt) {
            $money = $bote * .5 / count($higher);
            printHigher($player, $punt, $money);
        }

        echo '<br> money: ' . $money;
        giveHigher($res, $higher_money, $money);
    }
}

// función para imprimir ganadores
function printWinner($player, $bote)
{
    echo '<br>GANADOR ' . $player . ' con 7.5 puntos y ha ganado ' . $bote;
}

// función para imprimir al jugador más cercano a 7.5
function printHigher($player, $punt, $bote)
{
    echo '<br>GANADOR ' . $player . ' con ' . $punt . ' puntos y ha ganado ' . $bote;
}

// función para repartir dinero si hay 7.5
function giveMoney($res, $win)
{
    $bote = $_POST['apuesta'];

    getFile($res, $win, $bote);
}

// función para repartir dinero si no hay 7.5
function giveHigher($res, $higher, $money)
{
    $bote = $_POST['apuesta'];

    // si ganadores no está vacío, se almacenan los resultados en el .txt
    if ($higher != []) {
        getFile($res, $higher, $bote);
        // sino, se almacenan los resultados en el .txt y se imprime el bote
    } else {
        echo '<br><br>BOTE: ' . $bote;
        getFile($res, $higher, $bote);
    }
}

// función para almacenar cada ronda en un .txt
function getFile($res, $win, $bote)
{
    // crear .txt en la carpeta contenedora del .php
    $file_name = getcwd() . '\apuestas.txt';

    $file = fopen($file_name, 'w') or die('No se puede abrir el archivo');

    print_r($win);
    foreach ($res as $player => $punt) {
        // si el jugador correspondiente está en el array de ganadores, se le imprime junto con el bote
        if (in_array($player, $win)) {
            $text = $player . '***' . $punt . '***' . $bote . "\n";
            // sino, se imprime el jugador con 0 en el bote
        } else {
            $text = $player . '***' . $punt . '***0' . "\n";
        }

        fwrite($file, $text);
    }

    fclose($file);
}

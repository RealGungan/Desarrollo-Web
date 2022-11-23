<?php
function showFile($file)
{
    $file_name = $file;
    $file = fopen($file_name, "r");

    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }

    fclose($file);
}

function showIndividualValues($file, $value)
{
    $file_name = $file;
    $bursatil = $value;
    $file = fopen($file_name, "r");

    while (($line = fgets($file)) !== false) {
        if (str_contains($line, $bursatil) || str_contains($line, "Valor")) {
            echo $line . "<br>";
        }
    }

    fclose($file);
}

function showValues($file, $value)
{
    $file_name = $file;
    $file = fopen($file_name, "r");
    $bursatil = $value;

    while (($line = fgets($file)) !== false) {
        if (str_contains($line, $value) || str_contains($line, "Valor")) {
            $file_array = getValues($file, $bursatil);
            echo "El valor Cotización de " . $bursatil . " es " . $file_array['Ultimo'] . "<br>";
            echo "Cotización máxima de " . $bursatil . " es " . $file_array['MAx.'] . "<br>";
            echo "Cotización mínima de " . $bursatil . " es " . $file_array['MIn.'];
        }
    }
}

function showSpecificValue($file, $value, $show)
{
    $file_name = $file;
    $file = fopen($file_name, "r");
    while (($line = fgets($file)) !== false) {
    }
}

function total($file, $value)
{
    $res = 0;
    if ($value == 'Vol.') {
        while (($line = fgets($file)) !== false) {
            if (str_contains($line, $value) || str_contains($line, "Valor")) {
                $file_array = getValues($file, $value);
                $res += intval($file_array[$value]);
            }
        }
    } else {
        echo $value;
        while (($line = fgets($file)) !== false) {
            if (str_contains($line, $value) || str_contains($line, "Valor")) {
                $file_array = getValues($file, $value);
                $res += intval($file_array[$value]);
            }
        }
    }

    return $res;
}

function functMinMax($file)
{
    $file_array = getAllValues($file);

    printMaxValues("El valor más grande de Cotización es ", $file_array, 'MAx.');
    printMinValues("<br>El valor más bajo de Cotización es ", $file_array, 'MIn.');

    printMaxValues("<br><br>El valor más grande de Volumen es ", $file_array, 'Vol.');
    printMinValues("<br>El valor más bajo de Volumen es ", $file_array, 'Vol.');

    printMaxValues("<br><br>El valor más grande de Capitalización es ", $file_array, 'Capit.');
    printMinValues("<br>El valor más bajo de Capitalización es ", $file_array, 'Capit.');
}

function printMinValues($string, $array, $value)
{
    echo $string . min($array[$value]) . " y le corresponde a " . $array['Valor'][array_search(min($array[$value]), $array[$value])];;
}

function printMaxValues($string, $array, $value)
{
    echo $string . max($array[$value]) . " y le corresponde a " . $array['Valor'][array_search(max($array[$value]), $array[$value])];;
}

function getAllValues($file)
{
    $bursatil_values = [];

    while (($line = fgets($file)) !== false) {
        if (!str_contains($line, 'Valor')) {
            $bursatil_values['Valor'][] = (str_replace(",", ".", trim(substr($line, 0, 23))));
            $bursatil_values['Ultimo'][] = (str_replace(",", ".", trim(substr($line, 23, 9))));
            $bursatil_values['Var. %'][] = (str_replace(",", ".", trim(substr($line, 32, 8))));
            $bursatil_values['Var.'][] = (str_replace(",", ".", trim(substr($line, 40, 8))));
            $bursatil_values['Ac.% año'][] = (str_replace(",", ".", trim(substr($line, 48, 12))));
            $bursatil_values['MAx.'][] = (str_replace(",", ".", trim(substr($line, 60, 9))));
            $bursatil_values['MIn.'][] = (str_replace(",", ".", trim(substr($line, 69, 9))));
            $bursatil_values['Vol.'][] = (str_replace(".", "", trim(substr($line, 78, 13))));
            $bursatil_values['Capit.'][] = (str_replace(".", "", trim(substr($line, 91, 9))));
        }
    }

    return $bursatil_values;
}

function getValues($file, $value)
{
    $bursatil_values = [];
    $forbidden = ["Valor", "Ultimo", "Var. %", "Ac.% año", "MAx.", "MIn.", "Vol.", "Capit."];

    if (!in_array($value, $forbidden)) {
        while (($line = fgets($file)) !== false) {
            if (str_contains($line, $value) || str_contains($line, "Valor")) {
                $bursatil_values['Valor'] = trim(substr($line, 0, 23));
                $bursatil_values['Ultimo'] = trim(substr($line, 23, 9));
                $bursatil_values['Var. %'] = trim(substr($line, 32, 8));
                $bursatil_values['Var.'] = trim(substr($line, 40, 8));
                $bursatil_values['Ac.% año'] = trim(substr($line, 48, 12));
                $bursatil_values['MAx.'] = trim(substr($line, 60, 9));
                $bursatil_values['MIn.'] = trim(substr($line, 69, 9));
                $bursatil_values['Vol.'] = trim(substr($line, 78, 13));
                $bursatil_values['Capit.'] = trim(substr($line, 91, 9));
                $bursatil_values['Hora'] = trim(substr($line, 100));
            }
        }
    } else {
        $bursatil_values['Valor'] = 0;
        $bursatil_values['Ultimo'] = 0;
        $bursatil_values['Var. %'] = 0;
        $bursatil_values['Var.'] = 0;
        $bursatil_values['Ac.% año'] = 0;
        $bursatil_values['MAx.'] = 0;
        $bursatil_values['MIn.'] = 0;
        $bursatil_values['Vol.'] = 0;
        $bursatil_values['Capit.'] = 0;
        while (($line = fgets($file)) !== false) {
            $bursatil_values['Valor'] += intval(trim(substr($line, 0, 23)));
            $bursatil_values['Ultimo'] += intval(trim(substr($line, 23, 9)));
            $bursatil_values['Var. %'] += intval(trim(substr($line, 32, 8)));
            $bursatil_values['Var.'] += intval(trim(substr($line, 40, 8)));
            $bursatil_values['Ac.% año'] += intval(trim(substr($line, 48, 12)));
            $bursatil_values['MAx.'] += intval(trim(substr($line, 60, 9)));
            $bursatil_values['MIn.'] += intval(trim(substr($line, 69, 9)));
            $bursatil_values['Vol.'] += intval(str_replace(".", "", trim(substr($line, 78, 13))));
            $bursatil_values['Capit.'] += intval((substr($line, 91, 9)));
        }
    }

    return $bursatil_values;
}

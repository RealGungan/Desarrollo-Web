<?php
require __DIR__ . '/funciones_bolsa.php';

$data = $_POST['bursatil'];
$file_name = 'ibex35.txt';
$file = fopen($file_name, 'r');

showIndividualValues($file_name, $data);

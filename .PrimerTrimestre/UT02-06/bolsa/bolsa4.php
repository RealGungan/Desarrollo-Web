<!doctype html>
<html lang="es">

<head>
    <title> </title>
    <meta charset="utf-8" />
    <meta name="author" content="tu nombre" />
    <style>
    </style>
</head>

<body>
    <h2>Consulta operaciones bolsa</h2>
    <form name="form" method="post" action="bolsa4.php">
        <legend>Valores</legend>
        <select name="valores">
            <option value="ACCIONA">ACCIONA</option>
            <option value="ACERINOX">ACERINOX</option>
            <option value="ACS">ACS</option>
            <option value="AENA">AENA</option>
            <option value="AMADEUS IT GROUP">AMADEUS IT GROUP</option>
            <option value="ARCELORMITTAL">ARCELORMITTAL</option>
            <option value="BANCO SABADELL">BANCO SABADELL</option>
            <option value="BANKINTER">BANKINTER</option>
            <option value="BBVA">BBVA</option>
            <option value="CAIXA BANK">CAIXA BANK</option>
            <option value="CELLNEX TELECOM">CELLNEX TELECOM</option>
            <option value="CIE. AUTOMOTIVE">CIE. AUTOMOTIVE</option>
            <option value="COLONIAL">COLONIAL</option>
            <option value="DIA">DIA</option>
            <option value="ENAGAS">ENAGAS</option>
            <option value="ENDESA">ENDESA</option>
            <option value="FERROVIAL">FERROVIAL</option>
            <option value="GRIFOLS">GRIFOLS</option>
            <option value="IAG">IAG</option>
            <option value="IBERDROL">IBERDROL</option>
            <option value="INDITEX">INDITEX</option>
            <option value="INDRA">INDRA</option>
            <option value="MAPFRE">MAPFRE</option>
            <option value="MEDIASET">MEDIASET</option>
            <option value="MELIA HOTELS">MELIA HOTELS</option>
            <option value="MERLIN PROP.">MERLIN PROP.</option>
            <option value="NATURGY">NATURGY</option>
            <option value="RED ELECTRICA">RED ELECTRICA</option>
            <option value="REPSOL">REPSOL</option>
            <option value="SANTANDER">SANTANDER</option>
            <option value="SIEMENS GAMESA">SIEMENS GAMESA</option>
            <option value="TECNICAS REUNIDAS">TECNICAS REUNIDAS</option>
            <option value="TELEFONICA">TELEFONICA</option>
            <option value="VISCOFAN">VISCOFAN</option>
        </select>
        <legend>Mostrar</legend>
        <select name="show">
            <option value="Ultimo">Ultimo valor</option>
            <option value="Var. %">Variacion %</option>
            <option value="Var.">Variacion</option>
            <option value="Ac.% año">Ac%Anual</option>
            <option value="MAx.">Máximo</option>
            <option value="MIn.">Mínimo</option>
            <option value="Vol.">Volumen</option>
            <option value="Capit.">Capitalización</option>
        </select>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Clear">
    </form>

    <?php
    include 'funciones_bolsa.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST['valores'];
        $show = $_POST['show'];
        $file_name = 'ibex35.txt';
        $file = fopen($file_name, 'r');

        showSpecificValue($file_name, $data, $show);
    }
    ?>
</body>

</html>
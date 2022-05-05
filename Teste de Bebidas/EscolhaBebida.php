<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre uma bebida</title>
</head>
<body>
    <h2></h2>
    <select>
        <option value="0">===SELECT===</option>
        <option value="1">Refrigerante</option>
        <option value="2">Suco</option>
        <option value="3">Vinho</option>
    </select>
   <!-- <form method="post">
        <input type="text" name="CadVinho" id="CadVinho"/>
        <input type="text" name="cadRefrigerante" id="CadRefrigerante"/>
        <input type="text" name="CadSuco" id="CadSuco"/>
        <input type="submit" name="Registro" id="Registro"/>
    </form>-->
</body>
</html>
<?php
require_once 'Vinho.php';
require_once 'Suco.php';
require_once 'Refrigerante.php';

$vinho1 = new Vinho();
$refrigerante1 = new Refrigerante();
$suco1 = new Suco();

$vinho1->setNome('Alabar Tinto');
$vinho1->setSafra(1900);
echo"<br><br>Vinho<br>"
echo"Nome do Vinho".$vinho1->getNome()."<br>";
echo"A Safra dele é".$vinho1->getSafra()."<br>";

$suco1->setNome('Tang');
$suco1->setSabor('Uva');
echo"<br><br>Suco<br>"
echo"Nome da Marca do Suco".$suco1->getNome()."<br>";
echo"A Sabor dele é".$suco1->getSabor()."<br>";

$refrigerante1->setNome('Coca-Cola');
$refrigerante1->setRetornavel();
echo"<br><br>Refrigerante<br>"
echo"Nome do Refri".$refrigerante1->getNome()."<br>";
echo"È retornavel".$refrigerante1->getRetornavel()."<br>";
?>
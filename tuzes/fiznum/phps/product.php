<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

/*A mátrix beolvasása, elemzése és kettős indexű tömbbe vétele.*/
$target = "../fiznum/";
$target = $target . "table.dat" ;
if(move_uploaded_file($_FILES['prm']['tmp_name'], $target)) {echo "A ". basename( $_FILES['prm']['name']). " file sikeresen feltöltve.<br />";}
	else {echo "A ". basename( $_FILES['prm']['name']). " file feltöltése során hiba lépett fel. Küld el a polo88hu@gmail.com e-mail címre!<br />";}
	//Feltöltötte a mátrixot

$prm_file = "table.dat";
$prm_pre_lines_spaces = fread(fopen($prm_file,'r'),filesize($prm_file));
$prm_pre_spaces = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $prm_pre_lines_spaces);
$prm_pre = preg_replace("/  */", " ", $prm_pre_spaces);

$elements = count(preg_split("/[ \n]/", $prm_pre));
echo "$elements elemű a mátrix.<br />";

$rows = count(preg_split("/[\n]/", $prm_pre));
echo "$rows sorú a mátrix.<br />";

$column = (count(preg_split("/[ ]/", $prm_pre))-1)/$rows+1;
echo "$column oszlopú a mátrix.<br />";

$prm_array = preg_split("/[ \n]/",$prm_pre);
$c=0;
for ($i=0; $i < $rows; $i++)
	{for ($k=0; $k < $column; $k++)
		{$prm[$i][$k] = $prm_array[$c]; $c++;
		}
	;}
	//A mátrix felvéve
echo "A mátrix:<br />";
for ($i=0; $i < $rows; $i++)
	{for ($k=0; $k < $column; $k++)
		{echo $prm[$i][$k] . " ";
		} echo "<br />"
	;}
	//Mátrix kiírva
	
echo "<br />";
/*A vektor beolvasása, elemzése, tömbbe vétele. Ellenőrzi, hogy a mátrixsszal összeszorozható-e.*/
$target = "../fiznum/";
$target = $target . "vector1.dat" ;
if(move_uploaded_file($_FILES['prv']['tmp_name'], $target)) {echo "A ". basename( $_FILES['prv']['name']). " file sikeresen feltöltve.<br />";}
	else {echo "A ". basename( $_FILES['prv']['name']). " file feltöltése során hiba lépett fel. Küld el a polo88hu@gmail.com e-mail címre!<br />";}
	//Vektort feltöltötte.
$prv_file = "vector1.dat";
$prv_pre_lines = fread(fopen($prv_file,'r'),filesize($prv_file));
$prv_pre = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $prv_pre_lines);
$prv = split("\n",$prv_pre);
$rowsv = (count(preg_split("/[\n]/", $prv_pre)));
echo "$rowsv elemű a vektor.<br />";
	//Vektor felvéve.
for ($i=0; $i < $rowsv; $i++)
		{echo $prv[$i] . "<br />";}
	//Vektor kiírva.


if ($rowsv != $column) echo "Ez a mátrix nem szorozható össze ezzel a vektorral, mert nem ugyan annyi oszlopa van a mátrixnak, mint ahány sora a vektornak.<br />" ;else echo "Ki tudom számolni a mátrix és a vektor szorzatát. Az eredmény:<br /><strong>";
	//Összeszorozhatóság leellenőrizve.

/*Szorzás elvégzése.*/
require("product_algoritmus.php");
$product = matrixvektor($prm,$rows,$column,$prv);
	//Szorzás elvégezve
for ($i=0; $i < $rows; $i++)
{echo $product[$i]. "<br />";}
echo "</strong>";
	//Eredmény kiírva.
?>
</body>
</html>

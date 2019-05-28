<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$time_start = microtime();

/*A mátrix beolvasása, elemzése és kettős indexű tömbbe vétele.*/
$target = "../fiznum/";
$target = $target . "table2.dat" ;
if(move_uploaded_file($_FILES['linm']['tmp_name'], $target)) {echo "A ". basename( $_FILES['linm']['name']). " file sikeresen feltöltve.<br />";}
	else {echo "A ". basename( $_FILES['linm']['name']). " file feltöltése során hiba lépett fel. Küld el a polo88hu@gmail.com e-mail címre!<br />";exit();}
	//Feltöltötte a mátrixot

$linm_file = "table2.dat";
$linm_pre_lines_spaces = file_get_contents($linm_file);
$linm_pre_spaces = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $linm_pre_lines_spaces);
$linm_pre = preg_replace("/  */", " ", $linm_pre_spaces);

$elements = count(preg_split("/[ \n]/", $linm_pre));
echo "$elements elemű a mátrix.<br />";

$rows = count(preg_split("/[\n]/", $linm_pre));
echo "$rows sorú a mátrix.<br />";

$column = (count(preg_split("/[ ]/", $linm_pre))-1)/$rows+1;
echo "$column oszlopú a mátrix. ";

if ($rows == $column) {echo "És ezt pont így szeretjük, hogy a mátrix legyen négyzetes.";}
	else {echo "Ez így nem jó, négyzetes mátrixot tudok csak kezelni.";exit();}

$linm_array = preg_split("/[ \n]/",$linm_pre);
$c=0;
for ($i=0; $i < $rows; $i++)
	{for ($k=0; $k < $column; $k++)
		{$linm[$i][$k] = $linm_array[$c]; $c++;
		}
	;}
	//A mátrix felvéve
echo "A mátrix:<br />";
for ($i=0; $i < $rows; $i++)
	{for ($k=0; $k < $column; $k++)
		{echo $linm[$i][$k] . " ";
		} echo "<br />"
	;}
	//Mátrix kiírva

$target = "../fiznum/";
$target = $target . "vector1.dat" ;
if(move_uploaded_file($_FILES['linv']['tmp_name'], $target)) {echo "A ". basename( $_FILES['linv']['name']). " file sikeresen feltöltve.<br />";}
	else {echo "A ". basename( $_FILES['linv']['name']). " file feltöltése során hiba lépett fel. Küld el a polo88hu@gmail.com e-mail címre!<br />";exit();}

$linv_file = "vector1.dat";
$linv_pre_lines = file_get_contents($linv_file);
$linv_pre = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $linv_pre_lines);

$linv = split("\n",fread(fopen($linv_file,'r'),filesize($linv_file)));
$rowsv = (count(preg_split("/[\n]/", $linv_pre)));
echo "$rowsv elemű a vektor.<br />";
for ($i=0; $i < $rowsv; $i++)
		{echo $linv[$i] . "<br />";}
if ($rowsv != $rows || $rowsv != $column) {echo "Ez nem egy <em>n</em> ismeretlenes, <em>n</em> együtthatós lineáris egyenletrendszer, pedig sajnos csak olyat tudok megoldani.";exit();} else echo "Ez egy $rows ismeretlenes, $rows egyenletből álló egyenletrendszer. Ennek lehet megoldása. Ha van, akkor a következő az: <br />";

require("phps/product_algoritmus.php");
require("phps/gauss_algoritmus.php");
list($megoldas,$in) = linmegold($linm,$rows,$linv);

for ($i=0; $i < $column; $i++)
{echo $megoldas[$i] . "<br />";}

echo "Az inverz:<br />";
for ($i=0; $i < $rows; $i++)
	{for ($k=0; $k < $rows; $k++)
		{echo $in[$i][$k] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		} echo "<br />"
	;}
	
$time_end = microtime();
$time = $time_end - $time_start;
echo "<br /> Futási idő $time s volt.";
?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   list($usec, $sec) = explode(' ', microtime());
   $script_start = (float) $sec + (float) $usec;

/*A mátrix beolvasása, elemzése és kettős indexű tömbbe vétele.*/
$target = "../fiznum/";
$target = $target . "small.dat" ;
if(move_uploaded_file($_FILES['data']['tmp_name'], $target)) {echo "A ". basename( $_FILES['data']['name']). " file sikeresen feltöltve.<br />";}
	else {echo "A ". basename( $_FILES['data']['name']). " file feltöltése során hiba lépett fel. Küld el a polo88hu@gmail.com e-mail címre!<br />";exit();}
	//Feltöltötte a mátrixot

$data_file = "small.dat";
$data_pre_lines_spaces = file_get_contents($data_file);
$data_pre_spaces = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $data_pre_lines_spaces);
$data_pre = preg_replace("/  */", " ", $data_pre_spaces);

$elements = count(preg_split("/[ \n]/", $data_pre));
echo "$elements elemű a mátrix.<br />";

$rows = count(preg_split("/[\n]/", $data_pre));
echo "$rows sorú a mátrix.<br />";
$meddig = $_POST['meddig'];
if ($meddig != 0 && $meddig < $rows) echo "Csak az első $meddig sort veszem figyelembe.";
	elseif ($meddig ==0) echo "Az összes adatot figyelembe veszem.";
	elseif ($meddig > $rows) echo "Több sort kéne figyelembe vennem, mint ahány van. Csak annyit veszek figyelembe, mint ahány van.";


$column = (count(preg_split("/[ ]/", $data_pre))-1)/$rows+1;
$utolsof = $column - 2;
$fuggoindex = $column - 1;
echo "<br />$column oszlopú a mátrix. Ebből konvenciónk szerint az első " . $fuggetlen . " a függő változót, utolsó előtti a független változókat tartalmazza, az utolsó pedig a hibát.<br />";

if ( $meddig != 0 && $meddig < $rows ) {$rows = $meddig;} 
$data_array = preg_split("/[ \n]/",$data_pre);
$c=0;
for ($i=0; $i < $rows; $i++)
	{for ($k=1; $k <= $column; $k++)
		{$data[$i][$k] = $data_array[$c]; $c++;
		}
	$data[$i][0] = '1';
	;}
	//A mátrix felvéve
$rend = $_POST['hanyad'];
if ($rend ==1) echo " Elsőfokú polinomot fogok illeeszteni.<br />"; else echo " Másodfokú polinomot fogok illeszteni.<br />";
echo "Az adatok (legfeljebb az első 10):<br />";
for ($i=0; $i < min($rows,10); $i++)
	{for ($k=1; $k <= $column; $k++)
		{echo $data[$i][$k] . " ";
		} echo "<br />"
	;} if ($rows > 100) echo "... és így tovább";
	//Mátrix kiírva

$fuggoindex = $column - 1;
if ($rend ==1) {
	require("elsod_algoritmus.php");
	list($param,$value,$alfa,$beta) = elsoill($data,$column,$rows);
	echo "Az együtthatók rendre: konstans, x1, x2, ... , xn:<br /><strong>";
	for ($i=0; $i <= $utolsof; $i++) {
		echo $param[$i] . "<br />";}
	echo "</strong>";
	echo "A mért független változók és az illesztett fügvény értékei rendre:<br />";
	for ($i=0; $i < $rows; $i++) {
		echo $data[$i][$fuggoindex] . " " . $value[$i] . "<br />";
		}
	
	
	
	

	}
	else {
	
	
	
	
	
	
	require("masod_algoritmus.php");
	list($param,$value,$alfa,$beta) = masodill($data,$column,$rows);
	};



list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);
echo "<br /> Futási idő $elapsed_time s volt.";
?>
</body>
</html>

<?php
function masodill($data,$column,$rows) {
	$utolsof = $column - 2; //column értéke annyi, ahány oszlop van, 0-ik sorban 1-esek vannak felvéve már a fit.php-ben
	$fuggoindex = $column - 1;
	$nofparam = 1 + 2*$utolsof  + $utolsof * ($utolsof-1) / 2;
	for ($i=0; $i < $rows; $i++) {
		$c=0;
		for ($k = 0; $k <= $utolsof; $k++) {
			for ($j = $k; $j <= $utolsof;$j++) {
				$X[$i][$c] = $data[$i][$k] * $data[$i][$j]; //X meghatározva
				$c++; //paraméterszámláló, a végén 5 változó esetén 21 lesz
				}
			}
		}
	for ($k=0; $k < $nofparam; $k++){
		for ($j=0; $j < $nofparam; $j++) {
			$osszeg = 0;
			for ($i=0; $i < $rows; $i++) {
				$osszeg = $osszeg + ( $X[$i][$k] * ($X[$i][$j]) ) / (pow($data[$i][$column],2));
				}
			$alfa[$k][$j] = $osszeg;
			} //alfa mátrix kiszámítása
		
		$osszeg = 0;
		for ($i=0; $i < $rows; $i++) {
			$osszeg = $osszeg + ( $data[$i][$fuggoindex] * $X[$i][$k] ) / pow($data[$i][$column],2);
			}
		$beta[$k] = $osszeg;
		} //béta vektor kiszámolva
	
	echo "<br /> $column Az <strong>α</strong> mátrix:<br />";
	for ($i=0; $i < $nofparam; $i++)
		{for ($k=0; $k < $nofparam; $k++)
			{echo $alfa[$i][$k] . " ";
			} echo "<br />"
		;}
	echo "A <strong>β</strong> vektor:<br />";
	for ($i=0; $i < $nofparam; $i++) {
		echo $beta[$i] . "<br />";
		}
	echo "<br />";
	require("product_algoritmus.php");
	require("gauss_algoritmus.php");
	list($param,$in) = linmegold($alfa,$nofparam,$beta);
	for ($i=0; $i < $rows; $i++) {
		$osszeg = 0;
		for ($k=0; $k < $nofparam; $k++) {
			$osszeg = $osszeg + $param[$k] * $X[$i][$k];
			}
		$value[$i] = $osszeg;
		}
	return(array($param,$value,$alfa,$beta));
	}
	
?>
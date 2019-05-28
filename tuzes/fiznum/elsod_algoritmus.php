<?php
function elsoill($data,$column,$rows) {
	$utolsof = $column - 2;
	$fuggoindex = $column - 1;
	for ($k=0; $k <= $utolsof; $k++){
		for ($j=0; $j <= $utolsof; $j++) {
			$osszeg = 0;
			for ($i=0; $i < $rows; $i++) {
				(float)$osszeg = (float)$osszeg + ( (float)$data[$i][$k] * ((float)$data[$i][$j]) ) / (pow((float)$data[$i][$column],2));
				}
			(float)$alfa[$k][$j] = (float)$osszeg;
			}
		
		$osszeg = 0;
		for ($i=0; $i < $rows; $i++) {
			(float)$osszeg = (float)$osszeg + ( (float)$data[$i][$fuggoindex] * (float)$data[$i][$k] ) / pow((float)$data[$i][$column],2);
			}
		(float)$beta[$k] = (float)$osszeg;
		}
	require("gauss_algoritmus.php");
	
	echo "<br />Az <strong>α</strong> mátrix:<br />";
	for ($i=0; $i <= $utolsof; $i++)
		{for ($k=0; $k <= $utolsof; $k++)
			{echo $alfa[$i][$k] . " ";
			} echo "<br />"
		;}
	echo "A <strong>β</strong> vektor:<br />";
	for ($i=0; $i <= $utolsof; $i++) {
		echo $beta[$i] . "<br />";
		}
	require("product_algoritmus.php");
	list($param,$in) = linmegold($alfa,$fuggoindex,$beta);
	for ($i=0; $i < $rows; $i++) {
		$osszeg = 0;
		for ($k=1; $k <= $utolsof; $k++) {
			$osszeg = $osszeg + $param[$k] * $data[$i][$k];
			}
		$value[$i] = $osszeg + $param[0];
		}
	return(array($param,$value,$alfa,$beta));
	}
	
?>
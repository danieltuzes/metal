<?php
bcscale(64);
function elsoill($data,$column,$rows) {
	$utolsof = $column - 2;
	$fuggoindex = $column - 1;
	for ($k=0; $k <= $utolsof; $k++){
		for ($j=0; $j <= $utolsof; $j++) {
			$osszeg = 0;
			for ($i=0; $i < $rows; $i++) {
				/*$osszeg = $osszeg + ( $data[$i][$k] * $data[$i][$j] ) / ($data[$i][$column]^2);*/
				echo "az összeg: $osszeg <br />" . ' $data[$i][$k] = ' . $data[$i][$k] . ' $data[$i][$j]=' . $data[$i][$j] . ' $data[$i][$column]=' .$data[$i][$column] . ' bcpow($data[$i][$column],2) =' . bcpow($data[$i][$column],2) ;
				$osszeg = bcadd($osszeg,bcdiv(bcmul($data[$i][$k],$data[$i][$j]),bcpow($data[$i][$column],2)));
				}
			$alfa[$k][$j] = $osszeg;
			}
		
		$osszeg = 0;
		for ($i=0; $i < $rows; $i++) {
			$osszeg = $osszeg + ( $data[$i][$fuggoindex] * $data[$i][$k] ) / ($data[$i][$column])^2;
			}
		$beta[$k] = $osszeg;
		}
	require("gauss_algoritmus.php");
	
	echo "<br />Az <strong>α</strong> mátrix:<br />";
	for ($i=0; $i <= $utolsof; $i++)
		{for ($k=0; $k <= $utolsof; $k++)
			{echo $alfa[$i][$k] . " ";
			} echo "<br />"
		;}
	
	echo "A <strong>β</strong> vektor:<br />"; echo bcadd(1,2);
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
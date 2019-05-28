<?php
function matrixvektor($matrix,$rows,$column,$vektor) {
	for ($i=0; $i< $rows; $i++) {
		$cell = 0;
		for ($k=0; $k < $column; $k++) {
		$cell = $cell + $matrix[$i][$k] * $vektor[$k];}
		$product[$i]=$cell;
		}
	return($product);
	}
function matrixmatrix($matrix1,$matrix2,$rows) {
	for ($i=0; $i < $rows;$i++) {
		for ($k=0; $k < $rows; $k++) {
			$osszeg = 0;
			for ($j=0; $j<$rows; $j++) {
				$osszeg = $osszeg + $matrix1[$i][$j] * $matrix2[$j][$k];
				}
			$product[$i][$k] = $osszeg;
			}
		}
	return($product);
}
function transponate($matrix,$rows) {
	for ($i=0; $i < $rows; $i++) {
		for ($k=0; $k <$rows; $k++)	{
			$uj[$k][$i] = $matrix[$i][$k];
			}
		}
	return($uj);
}
?>
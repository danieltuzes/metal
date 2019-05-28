<?php
function max2D(&$array)
{
    $maxval = 0;
    $maxkey = 0;
    $maxrow = 0;
    foreach($array as $rowkey => &$row)
    {
        $rowabs = vabs($row);
        $max = max($rowabs);
        if ($maxval < $max)
        {
            $maxrow = $rowkey;
            $maxkey = array_search($max, $rowabs);
            $maxval = $max;
        }
        
    }
    
    return array($maxrow, $maxkey);
}
//2D maxkeresés

function linmegold($linm,$rows,$linv)
{
    
    global $am;
    $am = $linm;
    
    for ($i=0; $i<$rows; $i++)
    {
        for ($k=0; $k<$rows; $k++)
        {
            if ($i==$k) $tbm[$i][$i] = 1; else $tbm[$i][$k] = 0;
        }
        
    }
    //visszatranszfer mátrix def
	$in = $tbm;
    
    function absItem(&$item, $key)
    {
        $item = abs($item);
    }
    //array_walkkal nagyon tuti
    
    function vabs($array)
    {
        array_walk($array, "absItem");
        return $array;
    }
    //vektor abszolút értéke
    
    function oszlopcsere($am,$in,$rows,$o1,$o2,$tbm)
    {
        echo $o1  . "+1. oszlop felcserelendo az " . $o2 . "+1. oszloppal<br>";
        for ($i=0; $i < $rows; $i++)
        {
            (float)$temp = (float)$am[$i][$o1];
			$temi = $in[$i][$o1];
            (float)$am[$i][$o1] = (float)$am[$i][$o2];
			$in[$i][$o1] = $in[$i][$o2];
            $am[$i][$o2] = $temp;
			$in[$i][$o2] = $temi;
            $temp = $tbm[$i][$o1];
            $tbm[$i][$o1] = $tbm[$i][$o2];
            $tbm[$i][$o2] = $temp;
        }
        
        return(array($am,$tbm,$in));
    }
    //oszlopcsere, a vissztranszfer mátrixot a megfelelo alakra hozza
    
    function sorcsere($am,$in,$rows,$s1,$s2,$linv)
    {
        echo $s1 . "+1. sor felcserelendo az " . $s2 . "+1. sorral<br>";
        for ($i=0; $i<$rows; $i++)
        {
            (float)$temp = (float)$am[$s1][$i];
			$temi = $in[$s1][$i];
            (float)$am[$s1][$i] = (float)$am[$s2][$i];
			$in[$s1][$i] = $in[$s2][$i];
            (float)$am[$s2][$i] = (float)$temp;
            $in[$s2][$i] = $temi;
        }
        
        (float)$temp = (float)$linv[$s1];
        (float)$linv[$s1] = (float)$linv[$s2];
        (float)$linv[$s2] = (float)$temp;
        return(array($am,$linv,$in));
    }
    //sorcsere, az egyenlet jobb oldalát is rendre felcserélgeti
    
    for ($i=0; $i< $rows; $i++)
    {
        (float)$sormax = (float)max(vabs($am[$i],$rows));
        for ($k=0; $k< $rows; $k++)
        {
            (float)$am[$i][$k] = (float)$am[$i][$k] / (float)$sormax;
            $in[$i][$k] = $in[$i][$k] / $sormax;			
        }
        
        (float)$linv[$i] = (float)$linv[$i] / (float)$sormax;
    }
    //Mátrix normálva, minden sor osztva van a sor legnagyobb abszolut értéku elemével
    
    echo "<hr>a normalt matrix: <br>";
    for ($i=0; $i < $rows; $i++)
    
    {for ($k=0; $k < $rows; $k++)
        
        {echo $am[$i][$k] . " ";
        }
        echo "<br>"
    ;}
    echo "<hr>a normalt inverz: <br>";
    for ($i=0; $i < $rows; $i++)
    {for ($k=0; $k < $rows; $k++)
        
        {echo $in[$i][$k] . " ";
        }
        echo "<br>"
    ;}
    
    
    $jam = $am; //a mátrix pivot elemétol jobbra alatta levo mátrix
    
    for ($i=0; $i<$rows; $i++)
    {
        echo "<hr>";
        $ics = $i + 1; //gyakran használt
        list($sor,$oszlop) = max2D($jam); //hol a legnagyobb abszolút érték&#369; hely
        echo "<hr>" . $sor+1 .". sor es " . $oszlop + 1 . ". az oszlop cellajaban van az elso legnagyobb abszolut erteku cella.<br>";
        echo "<strong>a matrix:</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $am[$I][$k] . " ";
            }
            echo "<br>"
        ;}
		echo "<strong>az inverz:</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $in[$I][$k] . " ";
            }
            echo "<br>"
        ;}
        
        
        echo "<strong>A vektor: </strong>"; print_r($linv); echo "<br>";
        
        if ($sor != 0)
        {
            list($am,$linv,$in) = sorcsere($am,$in,$rows,$i,$sor + $i,$linv);
        }
        
        if ($oszlop != 0)
        {
            list($am,$tbm,$in) = oszlopcsere($am,$in,$rows,$i,$oszlop+$i,$tbm);
        }
        
        echo "<strong>a rendberakott matrix, legnagyobb elem a pivotban</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $am[$I][$k] . " ";
            }
            echo "<br>"
        ;}
		echo "<strong>a rendberakott inverz</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $in[$I][$k] . " ";
            }
            echo "<br>"
        ;}        
        
        echo "<strong>A vektor: </strong>"; print_r($linv); echo "<br>";
        (float)$amii = (float)$am[$i][$i];
        (float)$linv[$i] = (float)$linv[$i] / (float)$am[$i][$i];
        for ($k=$rows-1; $k >= 0; $k--)
        {	echo "ezzel oszt be" . (float)$amii;
            $in[$i][$k] = $in[$i][$k] / (float)$amii;
            (float)$am[$i][$k] = (float)$am[$i][$k] / (float)$amii;
        }
        //a sort végigosztja a pivot elemmel, nem elcseszve
        echo "<strong>vegigosztva a matrix</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $am[$I][$k] . " ";
            }
            echo "<br>"
        ;}
		echo "<strong>vegigosztva az inverz</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $in[$I][$k] . " ";
            }
            echo "<br>"
        ;}

        
        for ($j=0; $j < $rows; $j++)
        {
            if ($j != $i)
            {	$amji = $am[$j][$i];
                (float)$linv[$j] = (float)$linv[$j] - (float)$am[$j][$i] * (float)$linv[$i];
                for ($k=$rows-1; $k >= 0; $k--)
                {
                    $in[$j][$k] = $in[$j][$k] -  $amji * $in[$i][$k];
                    (float)$am[$j][$k] = (float)$am[$j][$k] -  (float)$amji * (float)$am[$i][$k];
                }
                
            }
            
        }
        //minden további sorból annyiszor vonja le a pivot elem sorát, ahány a pivot elem oszlápnak aktuális értéke az adott sorban, nem elcseszve
        
        echo "<strong>az adott oszlopban mar csak 1db szam van, az egyes:</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $am[$I][$k] . " ";
            }
            echo "<br>"
        ;}
		echo "<strong>az inverzbol is kivonva ugyanannyit:</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $in[$I][$k] . " ";
            }
            echo "<br>"
        ;}
		        
        echo "<strong>A vektor: </strong>"; print_r($linv); echo "<br>";
        
        unset($jam);
        for ($c1=0; $c1<$rows-$ics; $c1++)
        {
            for ($c2=0; $c2<$rows-$ics; $c2++)
            {
                $jam[$c1][$c2] = $am[$c1+$ics][$c2+$ics];
            }
            
        }
        //Jobb alsó mátrix kiemelése
        
        echo "<strong>a jobb also matrix, ahol a maximumot keressuk majd:</strong> <br>";
        for ($I=0; $I < $rows - $ics; $I++)
        
        {for ($k=0; $k < $rows -$ics; $k++)
            
            {echo $jam[$I][$k] . " ";
            }
            echo "<br>"
        ;}
        
    }
    
    
    echo "<hr>";
    $linv = matrixvektor($tbm,$rows,$rows,$linv);
	
    echo "<strong>visszcsinalo</strong> <br>";
        for ($I=0; $I < $rows; $I++)
        
        {for ($k=0; $k < $rows; $k++)
            
            {echo $tbm[$I][$k] . " ";
            }
            echo "<br>"
        ;}
	$in = matrixmatrix(matrixmatrix($tbm,$in,$rows),transponate($tbm,$rows),$rows);
	echo "<hr>a total inverz: <br>";
    for ($i=0; $i < $rows; $i++)
    {for ($k=0; $k < $rows; $k++)
        
        {echo $in[$i][$k] . " ";
        }
        echo "<br>"
    ;}
	echo "<br /> mert ha osszeszorozzuk az eredeti matrixszal, kapjuk, hogy <br /><small> ";
	$identitas = matrixmatrix($in,$linm,$rows);
    for ($i=0; $i < $rows; $i++)
    {for ($k=0; $k < $rows; $k++)
        {echo $identitas[$i][$k] . "&nbsp;&nbsp;&nbsp;";
        }
        echo "<br>"
    ;} echo "</small>, ami jo kozelitessel az egysegmatrixnak kell lennie<br />";
	
    echo "<strong>A vektor: </strong>"; print_r($linv); echo "<br>";
return(array($linv,$in));}

?>
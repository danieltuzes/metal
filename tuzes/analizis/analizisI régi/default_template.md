$if(titleblock)$
$titleblock$
definicio: [def]
      tetel: [tetel]
      bizonyitas: [bizonyitas]
      allitas: [allitas]
      megjegyzes: [megj]
      pelda: [pelda]
      
$endif$
$for(header-includes)$
$header-includes$

$endfor$
$for(include-before)$
$include-before$

$endfor$
$if(toc)$
$toc$

$endif$
$body$
$for(include-after)$

$include-after$
$endfor$

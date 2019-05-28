# le kell cserélni a ' határjelölőket " határjelölőkre
Keres:	class='([a-zA-Z0-9_]+)'
Csere:	class="\1"


# lecserélni a <span class="matekszoveg">a</span> típusú dolgokat matekos jelölésre, azaz <math><mi>a</mi></math> szerűre
Keres:	<span class="matekszoveg">(.)</span>
Csere:	<math><mi>\1</mi></math>

# le kell cserélni azokat is, ahol több tagúak

# Meg kell még nézni, hogy van-e elrontott formázású rész, azaz 
Keres:	<span class="matekszoveg">(.*)</span>

És lecserélni értelmesen.


# le kell cserélni a definíció, tétel (állítás) és bizonyítás, továbbá példa és megjegyzés span stílusát p stílusra, és sortörést kell alkalmazni
Keres:	<p>\s*<span class="def">Definíció(:?)</span>(:?)
Csere:	<div class="def">Definíció\1\2<br />

Keres:	<p>\s*<span class="tetel">Tétel(:?)</span>(:?)
Csere:	<div class="tetel">Tétel\1\2<br />

Keres:	<p>\s*<span class="allitas">Állítás(:?)</span>(:?)
Csere:	<div class="allitas">Állítás\1<br />

Keres:	<br />\s*<span class="bizonyitas">Bizonyítás(:?)</span>(:?)
Csere:	</p>\n<div class="bizonyitas">Bizonyítás\1\2<br />

Keres:	<p>\s*<span class="bizonyitas">Bizonyítás(:?)</span>(:?)
Csere:	<div class="bizonyitas">Bizonyítás\1\2<br />

Keres:	<br />\s*<span class="pelda">(Példák|Példa)(:?)</span>(:?)
Csere:	</p>\n<div class="pelda">Példák\1\2\3<br />

Keres:	<p>\s*<span class="pelda">(Példák|Példa)(:?)</span>(:?)
Csere:	</p>\n<div class="pelda">Példa\1\2\3<br />

# kettőspontot a sortörés elé kell tenni
Keres:	(\w+)<br />: 
Csere:	\1:<br />

# Def, tétel, biz, áll, megj, példa után kezdődő szövegek nagy betűvel kezdődnek, akkor is, ha új sorban kezdődnek
Keres:	<div class="(def|pelda|tetel|allitas|bizonyitas|megj)">(Definíció|Tétel|Bizonyítás|Példa|Példák|Állítás|Megjegyzés):(<br />|<br>)\s*([a-z])
Csere:	<div class="\1">\2:<br />\n\U\4

# a <br /> után a kódban is legyen sortörés
Keres:	<br />[ ]*(?!$)
Csere:	<br />\n

# cirádás I betűk cseréje
Keres:	<mtext>\s*&#x2130;\s*</mtext>
Csere:	<mi>&Iscr;</mi>

# jobbrafuranyíl
Keres:	<mtext>&#x21A3;</mtext>
Csere:	<mo>↣</mo>

# a math-ok körüli sortöréseket kiszedni
Keres:	[\s]*<math>(.*?)</math>[\s]*
Csere: 	 <math>\1</math> 

# a math-okat követő szóközt kiszedni, ha rá egy pont, vessző, zárójel bezár vagy kötőjel következik
Keres:	<math>(.*?)</math> ([,\.\-\)])
Csere:	<math>\1</math>\2

# a math-okat megelőző szóközt kiszedni, ha előtte egy zárójel nyit volt
Keres:	( <math>(.*?)</math>
Csere:	(<math>\1</math>

# az n-ary uniót le kell cserélni a valódira
Keres:	∪|&#x222A; de csak azokat, ahol indexelt unió van!
Csere:	⋃

# az n-ary metszetet le kell cserélni a valódira
Keres:	∩|&#x2229; de csak azokat, ahol indexelt metszet van!
Csere:	⋂


######################################################################################################
######################################################################################################
###########	visszafelé 	##################################
######################################################################################################
######################################################################################################

Keres:	\\begin\{(pelda|definicio|allitas|megjegyes|tetel|bizonyitas)\}
Csere:	<div class="\1">

Keres:	<p>&lt;div class=&quot;(pelda|def|definicio|allitas|megjegyes|tetel|bizonyitas)&quot;&gt;</p>
Csere:	<div class="\1">

Keres:	<div class="definicio">
Csere:	<div class="def">

Keres:	<p>&lt;/div&gt;</p>
Csere:	</div>

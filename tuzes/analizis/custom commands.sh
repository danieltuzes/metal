# le kell cserélni a ' határjelölõket " határjelölõkre
Keres:	class='([a-zA-Z0-9_]+)'
Csere:	class="\1"


# lecserélni a <span class="matekszoveg">a</span> típusú dolgokat matekos jelölésre, azaz <math><mi>a</mi></math> szerûre
Keres:	<span class="matekszoveg">(.)</span>
Csere:	<math><mi>\1</mi></math>

Meg kell még nézni, hogy van-e elrontott formázású rész, azaz 
Keres:	<span class="matekszoveg">(.*)</span>

És lecserélni értelmesen.


# le kell cserélni a definíció, tétel (állítás) és bizonyítás, továbbá példa és megjegyzés span stílusát p stílusra, és sortörést kell alkalmazni
Keres:	<p>\s*<span class="def">Definíció(:?)</span>(:?)
Csere:	<p class="def">Definíció\1\2<br />

Keres:	<p>\s*<span class="tetel">Tétel(:?)</span>(:?)
Csere:	<p class="tetel">Tétel\1\2<br />

Keres:	<p>\s*<span class="allitas">Állítás(:?)</span>(:?)
Csere:	<p class="allitas">Állítás\1\2<br />

Keres:	<br />\s*<span class="bizonyitas">Bizonyítás(:?)</span>(:?)
Csere:	</p>\n<p class="bizonyitas">Bizonyítás\1\2<br />

Keres:	<p>\s*<span class="bizonyitas">Bizonyítás(:?)</span>(:?)
Csere:	</p>\n<p class="bizonyitas">Bizonyítás\1\2<br />

Keres:	<br />\s*<span class="pelda">Példák(:?)</span>(:?)
Csere:	</p>\n<p class="pelda">Példák\1\2<br />

Keres:	<p>Megjegyzés:
Csere:	<p class="megj">Megjegyzés:<br />

# kettõspontont a sortörés elé kell tenni
Keres:	(\w+)<br />: 
Csere:	\1:<br />

# A megjegyzések új bekezdésbe kerülnek és stílust kapnak
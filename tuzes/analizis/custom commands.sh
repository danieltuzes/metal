# le kell cser�lni a ' hat�rjel�l�ket " hat�rjel�l�kre
Keres:	class='([a-zA-Z0-9_]+)'
Csere:	class="\1"


# lecser�lni a <span class="matekszoveg">a</span> t�pus� dolgokat matekos jel�l�sre, azaz <math><mi>a</mi></math> szer�re
Keres:	<span class="matekszoveg">(.)</span>
Csere:	<math><mi>\1</mi></math>

Meg kell m�g n�zni, hogy van-e elrontott form�z�s� r�sz, azaz 
Keres:	<span class="matekszoveg">(.*)</span>

�s lecser�lni �rtelmesen.


# le kell cser�lni a defin�ci�, t�tel (�ll�t�s) �s bizony�t�s, tov�bb� p�lda �s megjegyz�s span st�lus�t p st�lusra, �s sort�r�st kell alkalmazni
Keres:	<p>\s*<span class="def">Defin�ci�(:?)</span>(:?)
Csere:	<p class="def">Defin�ci�\1\2<br />

Keres:	<p>\s*<span class="tetel">T�tel(:?)</span>(:?)
Csere:	<p class="tetel">T�tel\1\2<br />

Keres:	<p>\s*<span class="allitas">�ll�t�s(:?)</span>(:?)
Csere:	<p class="allitas">�ll�t�s\1\2<br />

Keres:	<br />\s*<span class="bizonyitas">Bizony�t�s(:?)</span>(:?)
Csere:	</p>\n<p class="bizonyitas">Bizony�t�s\1\2<br />

Keres:	<p>\s*<span class="bizonyitas">Bizony�t�s(:?)</span>(:?)
Csere:	</p>\n<p class="bizonyitas">Bizony�t�s\1\2<br />

Keres:	<br />\s*<span class="pelda">P�ld�k(:?)</span>(:?)
Csere:	</p>\n<p class="pelda">P�ld�k\1\2<br />

Keres:	<p>Megjegyz�s:
Csere:	<p class="megj">Megjegyz�s:<br />

# kett�spontont a sort�r�s el� kell tenni
Keres:	(\w+)<br />: 
Csere:	\1:<br />

# A megjegyz�sek �j bekezd�sbe ker�lnek �s st�lust kapnak
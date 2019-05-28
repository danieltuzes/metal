---
author:
- Simon László
- Tüzes Dániel
- Izsák Ferenc

latex-environment:
  definicio: [def]
  tetel: [tetel]
  bizonyitas: [bizonyitas]
  allitas: [allitas]
  megjegyzes: [megj]
  pelda: [pelda]
  ajanlofig: [ajanlofig]
  ajanlo: [ajanlo]
  
title: Analízis I
---

Ajánlott irodalom:

1.  [Komornik Vilmos: Valós analízis
    előadások](http://www.typotex.hu/index.php?page=konyvek&book_id=240)
2.  [W. Rudin: Principles of Mathematical Analysis, McGraw-Hill, 1976.
    (angol
    nyelvű)](https://notendur.hi.is/vae11/%C3%9Eekking/principles_of_mathematical_analysis_walter_rudin.pdf)
3.  [Mezei István, Faragó István, Simon Péter: Bevezetés az
    analízisbe](http://www.cs.elte.hu/%7Esimonp/jegyzet1.pdf)

Ez a jegyzet **nem** szakirodalom és nem garantált, hogy az órai anyagot
teljesen lefedi, az előadásokra bejárni ajánlott. Az eredeti jegyzet
Simon László előadásai alapján Tüzes Dániel készítette, és lektorálta
2009-ben Simon László, majd frissítette 2016-2017-ben Izsák Ferenc.

Ha a jegyzetben helyesírási, tartalmi, vagy formai hibát találsz, kérlek
jelezd az előadónak vagy a <tuzesdaniel@gmail.com> e-mail címen! Ha a
jegyzet nem jelenik meg helyesen, olvasd el az
[útmutatót](http://fizweb.extra.hu/index.php?dir=kalkulus,analizis/analizisI/&file=utmutato.html),
vagy egyszerűen használd a [Firefox legújabb
böngészőjét!](http://www.mozilla.com/en-US/firefox/all.html)

A jegyzet korábbi, nem következetes jelölésétől eltérően a következőkben
törekszünk arra, hogy egy függvényt $\left. f:X\rightarrow Y \right.$
alakban adunk meg, akkor az azt jelenti, hogy az értelmezési tartománya
$X$, nem pedig annak csak egy része. Ez utóbbira használjuk majd az
$\left. f:X\rightarrowtail Y \right.$ jelölést.

Metrikus tér
============

A korábban (középiskolában) tanultakból általánosítunk.
${\mathbb{R}}^{n}$-ben éltünk eddig, ahol vektor alatt ezt értettük:
$\mathbf{v} = \left( {v_{1},v_{2}...v_{n}} \right)$ ahol
$v_{j} \in {\mathbb{R}}$ és $\mathbf{v} \in {\mathbb{R}}^{n}$. Ezen
vektorfogalmat fogjuk általánosítani úgy, hogy a már korábban tanult
vektorok némely tulajdonságait kiválasztjuk, s egy halmaz ($\mathbb{V}$)
elemeit ($a$, $b$ és $c$) akkor fogjuk vektoroknak nevezni, ha az alább
kiválaszott - és korábban (középiskolában) már tanult - tulajdonságokat
(a műveletekkel) teljesítik.

-   összeadás +\
    ${\mathbb{R}}^{n}$-ben azt mondtuk, hogy
    $$\mathbf{v} + \mathbf{u} = \left( {v_{1},v_{2}...v_{n}} \right) + \left( {u_{1},u_{2}...u_{n}} \right) = \left( {v_{1} + u_{1},v_{2} + u_{2}...v_{n} + u_{n}} \right)$$
    Ezek tulajdonságaiból az alábbiakat általánosítjuk:
    1.  $a + \left( {b + c} \right) = \left( {a + b} \right) + c$
        (asszociativitás)
    2.  $\exists!0 \in {\mathbb{V}}:a + 0 = 0 + a = a$ (egység, semleges
        elem létezése)
    3.  $\forall a \in {\mathbb{V}}\exists!( - a) \in {\mathbb{V}}:a + ( - a) = 0$
        (inverz elem létezése)
    4.  $a + b = b + a$ (kommutativitás)

    Az első három tulajdonsággal rendelkező struktúrát csoportnak, a
    negyedikkel is rendelkezőt Abel-csoportnak vagy kommutatív
    csoportnak nevezzük.
-   Skalárral való szorzás ·\
    Legyen $\lambda,\beta \in {\mathbb{R}}$! ${\mathbb{R}}^{n}$-ben azt
    mondtuk, hogy
    $\lambda\mathbf{v} = \lambda\left( {v_{1},v_{2}...v_{n}} \right) = \left( {\lambda v_{1},\lambda v_{2}...\lambda v_{n}} \right)$,
    ezek tulajdonságaiból az alábbiakat általánosítjuk:
    1.  $\lambda\left( {a + b} \right) = \lambda a + \lambda b,\left( {\lambda + \mu} \right)a = \lambda a + \mu a$
        (disztributivitás)
    2.  $\lambda\left( {\beta a} \right) = \left( {\lambda\beta} \right)a$
    3.  $1a = a$

<div class="def">

Definíció:\
Ha egy halmazon értelmezve van az összeadás és a skalárral való szorzás
a fentiek szerint, akkor azt vektortérnek (avagy lineáris térnek)
nevezzük.

</div>

Ismert művelet volt ${\mathbb{R}}^{n}$-ben a skaláris szorzás, ezt
értettük alatta:
${\mathbf{v},\mathbf{u}} = {\sum\limits_{j = 1}^{n}{v_{j}u_{j}}}$. Erre
érvényesek az alábbi tulajdonságok:

-   ${a,b + c} = {a,b} + {a,c}$
-   ${a,b} = {b,a}$
-   $\lambda{a,b} = {\lambda a,b}$
-   ${a,a} \geq 0$ és $\left. {a,a} = 0\Leftrightarrow a = 0 \right.$

<div class="def">

Definíció:\
Legyen $X$ vektortér, amelynek elemei között értelmezve van a skaláris
szorzat (két elem skaláris szorzata egy $\mathbb{R}$-beli szám) a fenti
tulajdonságokkal. Ekkor $X$-t valós euklideszi (eukleidészi) térnek
nevezzük.

</div>

<div class="pelda">

P**élda**\
A $\left\lbrack 0,1 \right\rbrack$ intervallumon értelmezett folytonos
függvények összessége (röviden $C\left\lbrack 0,1 \right\rbrack$ ) a
szokásos összeadással, számmal való szorzással, ha a skaláris szorzat
definíciója: ${f,g}: = {\int_{0}^{1}{f \cdot g}}$.

</div>

<div class="def">

Definíció:\
Legyen $X$ valós euklideszi tér! Ekkor egy $a \in X$ elem normáját így
határozhatjuk meg: $\left\| a \parallel \right.: = \sqrt{a,a}$

</div>

A norma tulajdonságai:

1.  $\left\| a \parallel \right. \geq 0$ és
    $\left. \left\| a \parallel \right. = 0\Leftrightarrow a = 0 \right.$
2.  $\left\| {\lambda a} \parallel \right. = \left| \lambda \right| \cdot \left\| a \parallel \right.$
3.  $\left\| {a + b} \parallel \right. \leq \left\| a \parallel \right. + \left\| b \parallel \right.$
    (háromszög egyenlőtlenség), mert
    ${a + b,a + b} = {a,a} + {b,a} + {a,b} + {b,b} =$
    $= \left\| a \parallel \right.^{2} + \left\| b \parallel \right.^{2} + 2{a,b} \leq \left\| a \parallel \right.^{2} + \left\| b \parallel \right.^{2} + 2\left\| a \parallel \right. \cdot \left\| b \parallel \right. = \left( {\left\| a \parallel \right. + \left\| b \parallel \right.} \right)^{2}$.
    Itt felhasználtuk az ún Cauchy-Schwarz-egyenlőtlenséget, mely
    szerint:

<div id="cauchy-schwarz" class="tetel">

Tétel (Cauchy-Schwarz egyenlőtlenség, CS):\
Legyen $X$ valós euklideszi tér! Ekkor $\forall a,b \in X$ esetén
$\left| {a,b} \right| \leq \left\| a \parallel \right. \cdot \left\| b \parallel \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$0 \leq {a + \lambda b,a + \lambda b} = {a,a} + {\lambda b,a} + {a,\lambda b} + {\lambda b,\lambda b} = {a,a} + 2\lambda{a,b} + \lambda^{2}{b,b}$,
ez teljesül minden $\lambda$ értékre, így
$4{a,b}^{2} - 4{a,a}{b,b} \leq 0$, vagyis
$$\left. \left\langle {a,b} \right\rangle^{2} \leq \left\langle {a,a} \right\rangle\left\langle {b,b} \right\rangle\Rightarrow\left| \left\langle {a,b} \right\rangle \right| \leq \sqrt{\left\langle {a,a} \right\rangle}\sqrt{\left\langle {b,b} \right\rangle} = \left\| a \right\| \cdot \left\| b \right\|. \right.$$
■

</div>

<div class="def">

Definíció:\
Legyen $X$ vektortér, amelyen értelmezve van egy norma a fenti
tulajdonságokkal, ekkor $X$-t normált térnek nevezzük.

</div>

<div class="pelda">

Példa:\
$X = C\left\lbrack 0,1 \right\rbrack$, a függvény normája pedig
$\left\| f \parallel \right.: = \sup\left| f \right|$.

</div>

Egy normált térben mindig értelmezhető az elemek $\rho$ távolsága,
$\rho\left( {a,b} \right): = \left\| {a - b} \parallel \right.$. A
távolság (metrika) tulajdonságai:

1.  $\rho\left( {a,b} \right) \geq 0$ és
    $\left. \rho\left( {a,b} \right) = 0\Leftrightarrow a = b \right.$
2.  $\rho\left( {a,b} \right) = \rho\left( {b,a} \right)$
3.  $\rho\left( {a,c} \right) \leq \rho\left( {a,b} \right) + \rho\left( {b,c} \right)$
    (háromszög egyenlőtlenség)

<div class="def">

Definíció:\
Legyen $X$ valamilyen halmaz és tfh értelmezve van
$\left. \rho:X \times X\rightarrow{\mathbb{R}} \right.$ függvény
(metrika, távolság) a fenti tulajdonságokkal! Ekkor $X$-t metrikus
térnek nevezzük.

</div>

Topológiai alapfogalmak a metrikus térben
-----------------------------------------

<div class="def">

Definíció:\
Legyen $X$ metrikus tér! Egy $a \in X$ pont $r$ sugarú környezete azon
pontok összessége, amelyek $a$-tól $r$-nél kisebb távolságra vannak:
${B_{r}\left( a \right): = \left\{ {x \in X:\rho\left( {x,a} \right) < r} \right\}}.$

</div>

### Pont és halmaz viszonya

Legyen $a \in X,M \subset X$!

<div class="def">

Definíció:\
Azt mondjuk, hogy az $a$ pont az $M$ halmaznak belső pontja, ha létezik
$a$-nak olyan $r$ sugarú környezete, hogy
$B_{r}\left( a \right) \subset M$. Jele:
${a \in {int}\left( M \right)}.$

</div>

<div class="def">

Definíció:\
Az $a$ pont az $M$ halmaznak külső pontja, ha létezik $a$-nak olyan $r$
sugarú környezete, hogy $B_{r}\left( a \right) \cap M = \varnothing$.
Jele: ${a \in {ext}\left( M \right)}.$

</div>

<div class="def">

Definíció:\
Az $a$ pont $M$-nek határpontja, ha $a$ minden $r$ sugarú környezete
esetén $B_{r}\left( a \right) \cap M \neq \varnothing$ és
$B_{r}\left( a \right) \cap M^{C} \neq \varnothing$. Jele:
${a \in \partial\left( M \right) = {front}\left( M \right)}.$

</div>

<div class="allitas">

Állítás:\
$\partial\left( M \right),{ext}\left( M \right),{int}\left( M \right)$
halmazok diszjunktak, uniójuk kiadja $X$-et.

</div>

<div class="def">

Definíció:\
Egy $a \in X$ pontot az $M$ halmaz torlódási pontjának nevezünk, ha az
$a$ pont minden környezetében van $M$-beli, de $a$-tól különböző pont,
formailag: $a$ torlódási pont, ha
$\left\{ {B_{r}\left( a \right)\backslash\left\{ a \right\}} \right\} \cap M \neq \varnothing$.
Az $M$ halmaz torlódási pontjainak halmazát $M$ '-vel jelöljük.

</div>

<div class="megj">

Megjegyzés:\
Ha az $a$ pont $M$-nek torlódási pontja, akkor $a$-nak minden környezete
végtelen sok pontot tartalmaz az $M$ halmazból.

</div>

<div class="def">

Definíció:\
Az $M$ halmaz belső és határpontjainak összességét az $M$ halmaz
lezárásának nevezzük, $\overline{M} = {int}M \cup \partial M$.

</div>

<div class="pelda">

Példák:

-   $\left. X = {\mathbb{R}},M = \left( 0,1 \right)\Rightarrow M' = \left\lbrack 0,1 \right\rbrack \right.$,
    $\partial M = \left\{ 0,1 \right\},{int}M = \left( 0,1 \right),\overline{M} = \left\lbrack 0,1 \right\rbrack$
-   $\left. X = {\mathbb{R}},M = {\mathbb{Z}}\Rightarrow M' = \varnothing \right.$
    ,
    $\partial M = {\mathbb{Z}},{int}M = \varnothing,\overline{M} = {\mathbb{Z}}$
-   $\left. X = {\mathbb{R}},M = \left\lbrack 0,1 \right\rbrack\Rightarrow M' = \left\lbrack 0,1 \right\rbrack \right.$
    ,
    $\partial M = \left\{ 0,1 \right\},{int}M = \left( 0,1 \right),\overline{M} = \left\lbrack 0,1 \right\rbrack$

</div>

### Nyílt és zárt halmazok

<div class="def">

Definíció:\
Egy $M \subset X$ halmazt nyíltnak nevezünk, ha $\forall x \in M$ esetén
$$\left. x \in {int}\left( M \right)\Leftrightarrow M \subset {int}\left( M \right)\Leftrightarrow M \cap \partial M = \varnothing. \right.$$

</div>

<div class="def">

Definíció:\
Egy $M$ halmazt zártnak nevezünk, ha tartalmazza az összes határpontját
$\left. \Leftrightarrow\partial M \subset M \right.$.

</div>

<div class="pelda">

Példák:\
Legyen $X: = {\mathbb{R}}$ , ekkor:

-   $M = \left\lbrack 0,1 \right\rbrack$ zárt halmaz
-   $M = \left( 0,1 \right)$ nyílt halmaz
-   $M = \left( 0,1 \right\rbrack$ se nem nyílt, se nem zárt halmaz
-   $M = {\mathbb{Z}}$ zárt halmaz

</div>

<div class="allitas">

Állítás:\
Egy $M \subset X$ halmaz zárt
$\left. \Leftrightarrow M = \overline{M}\Leftrightarrow M' \subset M \right.$.

</div>

<div class="tetel">

Tétel:\
Tetszőleges $M$ halmaz esetén ${int}\left( M \right)$ és
${ext}\left( M \right)$ nyílt halmaz.

</div>

<div class="bizonyitas">

Bizonyítás\
(${int}\left( M \right)$ nyílt halmaz): legyen $a \in {int}M$. Azt
kellene megmutatni, hogy $\exists B_{r}\left( a \right) \subset {int}M$.
$\left. a \in {int}\left( M \right)\Rightarrow\exists B_{R}\left( a \right) \subset M \right.$.
Legyen $r: = R/2$, ekkor
$B_{r}\left( a \right) \subset {int}\left( M \right)$, ugyanis ha
$b \in B_{r}\left( a \right)$, akkor a háromszög egyenlőtlenség miatt
$\left. B_{r}\left( b \right) \subset B_{R}\left( a \right) \subset M,b \in {int}\left( M \right)\Rightarrow B_{r}\left( a \right) \subset {int}\left( M \right) \right.$
.■

</div>

<div class="allitas">

Állítás:\
$\partial M,\overline{M},M'$ zárt halmazok.

</div>

<div class="tetel">

Tétel:\
Ha $M \subset X$ nyílt, akkor $M^{C} = X\text{\textbackslash}M$ zárt
halmaz.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tfh $M$ nyílt halmaz, ekkor $\partial M \cap M = \varnothing$,
$\partial M = \partial\left( M^{c} \right)$, ezért
$$\left. \partial M^{C} \cap M = \varnothing\Rightarrow\partial M^{C} \subset M^{C} \right.,$$
vagyis $M^{C}$ zárt. ■

</div>

<div class="tetel">

Tétel:\
Akárhány nyílt halmaz uniója nyílt halmaz, és véges sok nyílt halmaz
metszete is nyílt.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyenek $M_{\gamma \in I}$ nyílt halmazok ($I$ indexhalmaz)! Belátjuk,
hogy $M: = {\underset{\gamma \in I}{\cup}M_{\gamma}}$ nyílt. Legyen
$\left. a \in M\Rightarrow\exists\gamma:a \in M_{\gamma} \right.$. Mivel
$M_{\gamma}$ nyílt, ezért
$$\left. \exists B_{r}\left( a \right) \subset M_{\gamma}\Rightarrow B_{r}\left( a \right) \subset M \right..$$\
Legyenek $M_{j \in I}$ nyílt halmazok ($I$ indexhalmaz)! Belátjuk, hogy
$M: = {\underset{j = 1}{\overset{p}{\cap}}M_{j}}$ nyílt halmaz. Legyen
$\left. a \in M\Rightarrow a \in M_{j},\forall j = 1,2...p \right.$.
Mivel $M_{j}$ nyílt, ezért
$\exists r_{j}:B_{r_{j}}\left( a \right) \subset M_{j}$. Legyen
$\left. r = \min\left\{ {r_{1},r_{2},..,r_{p}} \right\}\Rightarrow B_{r}\left( a \right) \subset {\underset{j = 1}{\overset{p}{\cap}}M_{j}} \right.$
. ■

</div>

<div class="tetel">

Tétel:\
Akárhány zárt halmaz metszete zárt halmaz, és véges sok zárt halmaz
uniója is zárt.

</div>

<div class="bizonyitas">

Bizonyítás:\
(Belátjuk, hogy metszetük zárt.) Tfh $M_{\gamma}$ zárt! Ekkor
$M_{\gamma}^{C}$ nyílt halmaz. Ezért
$${\bigcap\limits_{\gamma \in I}M_{\gamma}} = \left( {\underset{\gamma \in I}{\cup}M_{\gamma}^{C}} \right)^{C}$$
zárt. Az unió esete hasonlóan bizonyítható. ■\

</div>

<div class="megj">

Megjegyzés: végtelen sok nyílt halmaz metszete általában nem nyílt, az
alaphalmaz és az üres halmaz nyílt és zárt egyszerre.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

***[xkcd](https://xkcd.com/)***, sometimes styled ***XKCD***,[\[‡
1\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-aboutxkcd-3) is a
[webcomic](https://en.wikipedia.org/wiki/Webcomic "Webcomic") created by
[Randall
Munroe](https://en.wikipedia.org/wiki/Randall_Munroe "Randall Munroe").
The comic's [tagline](https://en.wikipedia.org/wiki/Tagline "Tagline")
describes it as "A webcomic of romance, sarcasm, math, and
language".[\[‡
2\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-4)[\[3\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-Boston.com-5)
Munroe states on the comic's website that the name of the comic is not
an [acronym](https://en.wikipedia.org/wiki/Acronym "Acronym") but "just
a word with no phonetic pronunciation".

The subject matter of the comic varies from statements on life and love
to
[mathematical](https://en.wikipedia.org/wiki/Mathematical_joke "Mathematical joke")
and [scientific](https://en.wikipedia.org/wiki/Science "Science")
[in-jokes](https://en.wikipedia.org/wiki/In-joke "In-joke"). Some strips
feature simple humor or
[pop-culture](https://en.wikipedia.org/wiki/Pop-culture "Pop-culture")
references. Although it has a cast of [stick
figures](https://en.wikipedia.org/wiki/Stick_figures "Stick figures"),[\[4\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-Guzman-6)[\[5\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-7)
the comic occasionally features landscapes and intricate mathematical
patterns such as
[fractals](https://en.wikipedia.org/wiki/Fractal "Fractal"), graphs and
[charts](https://en.wikipedia.org/wiki/Chart "Chart").[\[6\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-8)
New comics are added three times a week, on Mondays, Wednesdays, and
Fridays,[\[‡
1\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-aboutxkcd-3)[\[7\]](https://en.wikipedia.org/wiki/Xkcd#cite_note-redhat-9)
although on some occasions they have been added every weekday.

</div>

Sorozatok határértéke a metrikus térben
---------------------------------------

<div class="def">

Definíció:\
Egy $\left. f:{\mathbb{N}}\rightarrow X \right.$ ($X$ metrikus tér)
függvényt $X$-beli sorozatnak nevezünk. Jelölés: a sorozat $k$-adik
tagja $a_{k}: = f\left( k \right)$-nek, a sorozat
$\left( a_{k} \right)_{k \in {\mathbb{N}}}: = f$
$\left( a_{k} \right) = f$.

</div>

<div class="def">

Definíció:\
Azt mondjuk, hogy az $\left( a_{k} \right)$ sorozat határértéke
(limesze) $a \in X$, ha az $a$ pont tetszőleges $\varepsilon$ sugarú
környezetéhez létezik olyan $k_{0} \in {\mathbb{N}}$ küszöbszám, hogy
$k > k_{0},k \in {\mathbb{N}}$ esetén
$a_{k} \in B_{\varepsilon}\left( a \right)$. Másképp:
$\left. \forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\rho\left( {a_{k},a} \right) < \varepsilon \right.$,
ezt így jelöljük:
${\lim\left( a_{k} \right) \equiv \underset{k\rightarrow\infty}{\lim}a_{k} = a}.$

</div>

### A limesz tulajdonságai

1.  Ha $a_{k} = a$ (minden $k$-ra), akkor $\lim\left( a_{k} \right) = a$
2.  Tfh $\lim\left( a_{k} \right) = a$, akkor $\left( a_{k} \right)$
    minden részsorozatának határértéke létezik és értékük $a$.\
    Részsorozat: $\left( a_{k} \right)$ véges vagy végtelen sok elemét
    elhagyom úgy, hogy még mindig végtelen sok maradjon, és a sorrenden
    nem változtatok. Másképpen: $\left( a_{k} \right)$ részsorozata
    $\left( a_{g_{k}} \right)$, ahol
    $\left. g:{\mathbb{N}}\rightarrow{\mathbb{N}} \right.$ szigorúan
    monoton növő.

    <div class="bizonyitas">

    Bizonyítás:\
    $\left. \lim\left( a_{k} \right): = a\Rightarrow\forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\rho\left( {a_{k},a} \right) < \varepsilon \right.$.
    Mivel $\left. g_{k} \geq k\Rightarrow k > k_{0} \right.$-ra
    $\rho\left( {a_{g_{k}},a} \right) < \varepsilon$, hisz ekkor
    $g_{k} > k_{0}$.

    </div>

3.  A határérték egyértelmű.

    <div class="bizonyitas">

    Bizonyítás:\
    Tfh $\left( a_{k} \right)$ határértékei $a$ és $b$ ($X$ elemei).
    Belátandó, hogy $a = b$ . Ekkor egyrészt:
    $$\left. \forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\rho\left( {a_{k},a} \right) < \varepsilon \right.,$$
    másrészt
    $\forall\varepsilon > 0\exists k_{1}:k > k_{1},\rho\left( {a_{k},b} \right) < \varepsilon$
    $\left. \Rightarrow k > \max\left\{ {k_{0},k_{1}} \right\} \right.$
    esetén
    $\rho\left( {a_{k},a} \right) < \varepsilon,\rho\left( {a_{k},b} \right) < \varepsilon$,
    így a háromszög egyenlőtlenség alapján
    $\left. \rho\left( {a,b} \right) \leq \rho\left( {a,a_{k}} \right) + \rho\left( {a_{k},b} \right) < 2\varepsilon,\forall\varepsilon > 0\Rightarrow\rho\left( {a,b} \right) = 0\Leftrightarrow a = b \right.$

    </div>

4.  Ha
    $\left. \lim\left( a_{k} \right) = a\Rightarrow\left( a_{k} \right) \right.$
    minden átrendezésének a határértéke szintén $a$\
    Egy $\left( a_{k} \right)$ átrendezése: veszek egy
    $\left. g:{\mathbb{N}}\rightarrow{\mathbb{N}} \right.$ bijekciót, az
    átrendezett sorozat: $\left( a_{g_{k}} \right)$.
5.  Sorozatok összefésülése:\
    $\left( a_{k} \right),\left( b_{k} \right)$ $X$-beli sorozatok
    összefésülése olyan $\left( c_{k} \right)$ $X$-beli sorozat, melynek
    elemei $a_{1},b_{1},a_{2},b_{2}...$. Ha
    $\left. \lim\left( a_{k} \right) = a = \lim\left( b_{k} \right)\Rightarrow\lim\left( c_{k} \right) = a \right.$
6.  Ha egy sorozatnak létezik a limesze, akkor korlátos is. (Korlátos:
    létezik olyan $n$ dimenziós gömb, mely tartalmazza a sorozat összes
    elemét.)

    <div class="bizonyitas">

    Bizonyítás:\
    $\left. \lim\left( a_{k} \right) = a\Rightarrow\varepsilon = 1\exists k_{0}:k > k_{0}\Rightarrow\rho\left( {a_{k},a} \right) < 1 \right.$,
    így
    $$r: = \max\left\{ {\rho\left( {a,a_{1}} \right),\rho\left( {a,a_{2}} \right),...,\rho\left( {a,a_{k_{0}}} \right)} \right\}$$
    esetén $a_{k} \in B_{r + 1}\left( a \right)\forall k$.

    </div>

### A limesz műveleti tulajdonságai normált terekben

A következőkben $X$ mindig egy normált teret jelöl,
$\left( a_{k} \right)$ , illetve $\left( b_{k} \right)$ pedig egy-egy
$X$-beli sorozatot.

A bizonyítások során az egész félévben külön hivatkozás nélkül
használjuk azt a tényt, hogy ha egy $x_{n} \subset X$ sorozatra
$\lim\left\| x_{n} \right\| \leq 0$ , akkor
$\left. x_{n}\rightarrow 0 \right.$ .

#### Összeadás

<div class="tetel">

Tétel:\
Ha
$\left. \lim\left( a_{k} \right) = a,\lim\left( b_{k} \right) = b\Rightarrow\lim\left( {a_{k} + b_{k}} \right) = a + b \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
mivel $\lim\left( a_{k} \right) = a$, ezért
$\left. \forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\rho\left( {a,a_{k}} \right) = \left\| {a_{k} - a} \parallel \right. < \varepsilon \right.$
és mivel $\lim\left( b_{k} \right) = b$, ezért
$\left. \forall\varepsilon > 0\exists k_{1}:k > k_{1}\Rightarrow\rho\left( {b,b_{k}} \right) = \left\| {b_{k} - b} \parallel \right. < \varepsilon \right.,$
így $$\begin{array}{l}
{\rho\left( {a_{k} + b_{k},a + b} \right) = \left\| {\left( {a_{k} + b_{k}} \right) - \left( {a + b} \right)} \right\| =} \\
{\left\| {\left( {a_{k} - a} \right) + \left( {b_{k} - b} \right)} \right\| \leq \left\| {a_{k} - a} \right\| + \left\| {b_{k} - b} \right\| < 2\varepsilon,} \\
\end{array}$$ ha $k > \max\left\{ {k_{0},k_{1}} \right\}$ . ■

</div>

#### Szorzás

<div class="allitas">

Állítás:\
Legyen $X$ normált tér! Ha $\lim\left( \lambda_{k} \right) = 0$ és
$\left( a_{k} \right)$ korlátos,
$\left. \Rightarrow\lim\left( {\lambda_{k}a_{k}} \right) = 0 \right..$

</div>

<div class="tetel">

Tétel:\
Tfh $\lim\left( a_{k} \right) = a$ és
$\lim\left( \lambda_{k} \right) = \lambda$ (
$\lambda_{k} \in {\mathbb{R}}$ ). Ekkor
$\lim\left( {\lambda_{k}a_{k}} \right) = \lambda a$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Mivel $\lim\left( a_{k} \right) = a$ ezért
$\left. \forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\left\| {a_{k} - a} \parallel \right. < \varepsilon \right.$.
Mivel $\lim\left( \lambda_{k} \right) = k$ ezért
$\left. \forall\varepsilon > 0\exists k_{1}:k > k_{1}\Rightarrow\left| {\lambda_{k} - \lambda} \right| < \varepsilon \right.$.
Tehát $k > \max\left\{ {k_{0},k_{1}} \right\}$ esetén
$\left\| {\lambda_{k}a_{k} - \lambda a} \parallel \right. = \left\| {\left( {\lambda_{k}a_{k} - \lambda a_{k}} \right) + \left( {\lambda a_{k} - \lambda a} \right)} \parallel \right. \leq \left\| {\lambda_{k}a_{k} - \lambda a_{k}} \parallel \right. + \left\| {\lambda a_{k} - \lambda a} \parallel \right. =$
$= \left\| {\left( {\lambda_{k} - \lambda} \right)a_{k}} \parallel \right. + \left\| {\lambda\left( {a_{k} - a} \right)} \parallel \right. = \underset{< \varepsilon}{\underbrace{\left| {\lambda_{k} - \lambda} \right|}}\left\| a_{k} \parallel \right. + \underset{\text{rögz.}}{\underbrace{\left| \lambda \right|}}\underset{< \varepsilon}{\underbrace{\left\| {a_{k} - a} \parallel \right.}}$.
Mivel $\left( a_{k} \right)$ korlátos,
$\exists M > 0:\left\| a_{k} \parallel \right. < M\forall k \in {\mathbb{N}}$-re,
tehát $k > \max\left\{ {k_{0},k_{1}} \right\}$ esetén
$\left\| {\lambda_{k}a_{k} - \lambda a} \parallel \right. < \varepsilon M + \left| \lambda \right|\varepsilon = \left( {M + \left| \lambda \right|} \right)\varepsilon$
. ■

</div>

#### Osztás

<div class="tetel">

Tétel:\
Legyen $\left( a_{k} \right)$ egy valós vagy komplex sorozat. Ha
$\left. a = \lim\left( a_{k} \right) \neq 0\Rightarrow\lim\left( \frac{1}{a_{k}} \right) = \frac{1}{a} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Mivel
$\left. \lim\left( a_{k} \right) = a\Rightarrow\forall\varepsilon > 0\exists k_{0}:k > k_{0}\Rightarrow\left| {a_{k} - a} \right| < \varepsilon \right.$,
így
$$\left. \exists k_{1}:k > k_{1}\Rightarrow\left| {a_{k} - a} \right| < \varepsilon\left| a \right|^{2}/2 \right..$$
Legyen $\varepsilon: = \frac{\left| a \right|}{2}$, ekkor
$\left. \exists k_{2}:k > k_{2}\Rightarrow\left| a_{k} \right| > \frac{\left| a \right|}{2} \right.$.
Legyen $k > \max\left\{ {k_{1},k_{2}} \right\}$, ekkor
$${\left| {\frac{1}{a_{k}} - \frac{1}{a}} \right| = \frac{\left| {a - a_{k}} \right|}{\left| {a_{k}a} \right|} < \frac{\varepsilon\left| a \right|^{2}/2}{\left| a_{k} \right|\left| a \right|} = \frac{\varepsilon\left| a \right|/2}{\left| a \right|/2} = \varepsilon}.$$
■

</div>

### Zárt halmazok jellemzése sorozatokkal

Emlékeztető: $X$ metrikus térben egy $M$ halmazt zártnak neveztünk, ha
$$\left. \partial M \subset M\Leftrightarrow\overline{M} \subset M\Leftrightarrow\overline{M} = M \right.,$$
ahol $\overline{M} = {int}\left( M \right) \cup \partial M$ , továbbá
$\left. a \in \overline{M}\Leftrightarrow \right.$ ha $a$ bármely
környezete tartalmaz $M$ beli pontot is. Ezek szerint $M$ zárt halmaz
pontosan akkor, ha minden olyan pont, amelynek bármely környezetében van
$M$ beli pont, az $M$-hez tartozik.

<div class="tetel">

Tétel:\
Egy $M \subset X$ halmaz zárt pontosan akkor, ha tetszőleges konvergens
sorozatot nézve, melynek tagjai $a_{k} \in M$
$\lim\left( a_{k} \right) \in M$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Az előbbiek szerint $M$ halmaz zárt pontosan akkor, ha minden olyan
pont, amelynek bármely környezetében van $M$ beli pont, az $M$-hez
tartozik.\
$\Rightarrow$ irányban: tfh $M$ zárt! Ha $a_{k} \in M$ és
$\lim\left( a_{k} \right) = a$, akkor $a \in M$, mert a minden
környezetében van $M$ beli pont is (nevezetesen $a_{k}$ ).\
$\Leftarrow$ irányban: fordítva is igaz, ha $a$ minden környezete
tartalmaz $M$ beli pontot, akkor
$\exists\left( a_{k} \right) \in M:\lim\left( a_{k} \right) = a$. Vagyis
minden olyan pont ($a$), amelynek minden környezetében van $M$-beli pont
(az $a_{k}$-k), az $M$-nek eleme, és a fentiek szerint ebből következik,
hogy $M$ zárt. ■

</div>

#### Korlátos és zárt halmazok, illetve sorozatkompakt halmazok {#korlátos-és-zárt-halmazok-illetve-sorozatkompakt-halmazok .big}

<div class="tetel">

Tétel (Bolzano-Weierstrass-féle kiválasztási tétel ${\mathbb{R}}^{n}$
-ben) :\
Legyen $\left( a_{k} \right)$ korlátos sorozat ${\mathbb{R}}^{n}$-ben!
Ekkor $\left( a_{k} \right)$ sorozatnak létezik konvergens részsorozata.

</div>

<div class="bizonyitas">

Bizonyítás:\
Először $n = 1$ esetre, ekkor $\left( {a_{k} \in {\mathbb{R}}} \right)$
korlátos
$\left. \Rightarrow\exists\left\lbrack {c,d} \right\rbrack a_{k},\forall k \right.$.
Felezzük $\left\lbrack {c,d} \right\rbrack$ intervallumot! Ekkor a két
zárt fél intervallum közül legalább az egyik végtelen sok tagot
tartalmaz a sorozatból. Ez legyen
$\left\lbrack {c_{1},d_{1}} \right\rbrack$. Ezt megint felezzük, melyek
közül legalább az egyik végtelen sok tagot tartalmaz a sorozatból, ez
legyen $\left\lbrack {c_{2},d_{2}} \right\rbrack$ …Így $a_{k}$-ból
kiválasztható egy $a_{k_{l}}$ részsorozat úgy, hogy
$a_{k_{l}} \in \left\lbrack {c_{l},d_{l}} \right\rbrack$. Belátjuk, hogy
$a_{k_{l}}$ részsorozat konvergens.\
$\left\lbrack {c,d} \right\rbrack \supset \left\lbrack {c_{1},d_{1}} \right\rbrack \supset \left\lbrack {c_{2},d_{2}} \right\rbrack \supset ... \supset \left\lbrack {c_{l},d_{l}} \right\rbrack$,
$\underset{l\rightarrow\infty}{\lim}\left| {c_{l} - d_{l}} \right| = \underset{l\rightarrow\infty}{\lim}\frac{c - d}{2^{l}} = 0$.
Tudjuk, hogy $\left\{ {c_{l}:l \in {\mathbb{N}}} \right\}$ felülről
korlátos
$\left. \Rightarrow\exists\sup\left\{ {c_{l}:l \in {\mathbb{N}}} \right\} \right.$
és azt is, hogy $\left\{ {d_{l}:l \in {\mathbb{N}}} \right\}$ alulról
korlátos
$\left. \Rightarrow\exists\inf\left\{ {d_{l}:l \in {\mathbb{N}}} \right\} \right.$.
Mivel
$$\left. \underset{l\rightarrow\infty}{\lim}\left| {c_{l} - d_{l}} \right| = 0\Rightarrow\sup\left\{ {c_{l}:l \in {\mathbb{N}}} \right\} = \inf\left\{ {d_{l}:l \in {\mathbb{N}}} \right\}: = \alpha \right.,$$
továbbá
$\left. a_{k_{l}} \in \left\lbrack {c_{l},d_{l}} \right\rbrack\Rightarrow\lim\left( a_{k_{l}} \right) = \alpha \right.$
(„rendőr-elv”).\
$n = 2$ esetre, ekkor
$a_{k} = \left( {a_{k}^{(1)},a_{k}^{(2)}} \right)$. Mivel $a_{k}$
korlátos sorozat ${\mathbb{R}}^{2}$-ben, így $a_{k}^{(1)},a_{k}^{(2)}$
korlátos sorozatok $\mathbb{R}$-ben. Az előzőek szerint az előbbiből
kiválasztható ebből egy konvergens részsorozat,
$\left( a_{k_{l}}^{(1)} \right)_{l \in {\mathbb{N}}}$. Tekintsük az
$a_{k}^{(2)}$ ugyanilyen indexű elemekből álló
$\left( a_{k_{l}}^{(2)} \right)$ részsorozatát (mely korlátos
$\mathbb{R}$-ben). Az előzőek szerint ennek létezik konvergens
részsorozata, $\left( a_{k_{l_{m}}}^{(2)} \right)_{m \in {\mathbb{N}}}$.
$\left( a_{k_{l}}^{(1)} \right)_{l \in {\mathbb{N}}}$ konvergens, így
$\left( a_{k_{l_{m}}}^{(1)} \right)_{m \in {\mathbb{N}}}$ is az, így
$\left( a_{k_{l_{m}}} \right): = \left( {a_{k_{l_{m}}}^{(1)},a_{k_{l_{m}}}^{(2)}} \right)$
részsorozat konvergens.\
$n = 3$ esetén hasonló módon, mint $n = 1$-ről váltottunk $n = 2$ -re,
itt is igazolható (tkp teljes indukció). ■

</div>

<div class="megj">

Megjegyzés:\
Hasonló jellegű állítások általában nem igazak tetszőleges normált
terekben, csak véges dimenzióban!

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Filmkocka a videóból](tomandjerry.jpg){width="365"
height="269"}](https://www.youtube.com/watch?v=e8o6rt6o4LA)

</div>

Ne feledjétek, ebből a tárgyól vizsga lesz! Ha hétről hétre tanulsz, és
a kérdéseket időben felteszed a tanárnak, sokkal könnyebb felkészülni a
vizsgára.

</div>

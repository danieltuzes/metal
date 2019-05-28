---
author:
- Izsák Ferenc
- Tarcsay Zsigmond
- Tüzes Dániel

latex-environment:
  definicio: [def]
  def_extra: [def_extra]
  tetel: [tetel]
  tetel_extra: [tetel_extra]
  bizonyitas: [bizonyitas]
  biz_extra: [biz_extra]
  allitas: [allitas]
  all_extra: [all_extra]
  megjegyzes: [megj]
  megj_extra: [megj_extra]
  pelda: [pelda]
  ajanlofig: [ajanlofig]
  ajanlo: [ajanlo]
  
title: Analízis III
subtitle: Előadásjegyzet fizikusoknak matematikusoktól
institute: ELTE
---

 

Előadó e-mail címe: simonl a ludens.elte.hu-nál

Ez a jegyzet **nem** szakirodalom s nem garantált, hogy az órai anyagot
teljesen lefedi, az előadásokra bejárni ajánlott.

Ha a jegyzetben helyesírási, tartalmi vagy formai hibát találsz, kérlek
jelezd az előadónak!

Differenciálegyenletek
======================

Mi a differenciálegyenlet?

Pl

1.  $\ddot x\left( t \right) = - {\omega ^2}x\left( t \right)$
2.  $\ddot x\left( t \right) = F\left( t \right)/m$
3.  $\partial_{t}u = \Delta u$
4.  $\overset{}{x}\left( t \right) = x\left( {t - 1} \right)$

Ezeket lehet rendszerezni: ODE (ordenary differential equation, azaz
közönséges differenciál-egyenlet, 1-es és 2-es), PDE (partial
differential equation, 3-as), FDE (functional differential equation,
4-es).

Most az ODE-val foglalkozunk. Mi a közönséges differenciál-egyenlet?

<div class="def">

Definíció:\
Legyen $\left. F:{\mathbb{R}}^{n + 2}\rightarrow{\mathbb{R}} \right.$,
$n$-edrendű közönséges differenciálegyenlet: $\forall t$-re
$0 = F\left( {t,x\left( t \right),\dot x\left( t \right),\ddot x\left( t \right),...,{x^{\left( n \right)}}\left( t \right)} \right)$.

</div>

<div class="megj">

Megjegyzés:\
Egy ilyen $n$-edrendű egyenlet átírató elsőrendű rendszerré. Pl:
$\ddot x\left( t \right) = - {\omega ^2}x\left( t \right)$ egyenletet
átírjuk: $y_{1}\left( t \right) = x\left( t \right)$,
$y_{2}\left( t \right) = \overset{}{x}\left( t \right)$. Ekkor $y$-ra az
alábbi elsőrendű, kétismeretlenes rendszer áll fenn: $$\begin{array}{l}
{y_{1}\left( t \right) = y_{2}\left( t \right)} \\
{y_{2}\left( t \right) = - \omega^{2} \cdot y_{1}{\left( t \right).}} \\
\end{array}$$ Általánosan $n$-ed rendűnél: $y_{1} = x$,
$y_{2} = \overset{}{x}$, ... , $y_{n} = x^{({n - 1})}$. Ekkor
$\left( {y_{1},...,y_{n}} \right)$-re elsőrendű rendszert kapunk.

</div>

<div class="def">

Definíció:\
Legyen
$\left. f:{\mathbb{R}} \times {\mathbb{R}}^{n}\rightarrow{\mathbb{R}}^{n} \right.$,
$\overset{}{x}\left( t \right) = f\left( {t,x\left( t \right)} \right)$
elsőrendű (explicit) közönséges differenciálegyenlet-rendszer.
Ismeretlen az $\left. x:{\mathbb{R}}\rightarrow{\mathbb{R}}^{n} \right.$
függvény. Koordinátánként kiírva:\
$\begin{array}{l}
{{\overset{}{x}}_{1}\left( t \right) = f_{1}\left( {t,x_{1}\left( t \right),x_{2}\left( t \right),...,x_{n}\left( t \right)} \right)} \\
{{\overset{}{x}}_{2}\left( t \right) = f_{2}\left( {t,x_{1}\left( t \right),x_{2}\left( t \right),...,x_{n}\left( t \right)} \right)} \\
 \vdots \\
{{\overset{}{x}}_{n}\left( t \right) = f_{n}\left( {t,x_{1}\left( t \right),x_{2}\left( t \right),...,x_{n}\left( t \right)} \right)} \\
\end{array}$

</div>

Mivel foglalkozik a közönséges differenciálelmélet?

1.  Mi a megoldás? Azaz számítsuk ki a megoldást. (Ezt már tanultuk.)
    Vannak:
    a.  képlettel megoldhatók
    b.  képlettel nem megoldhatók (de numerikusan közelíthetők)
2.  Megoldás létezésének, egyértelműségének keresése, függése a
    paraméterektől
3.  Milyen a megoldás? Pl periodikus-e, korlátos-e... A megoldást
    szeretnénk jellemezni annak kiszámítása nélkül. Pl
    $\overset{}{x} = x$ és $x\left( 0 \right) > 0$. Ekkor egyből látjuk,
    hogy $x$ szigmon nő, akkor is, amikor még nem tudtuk, hogy konkrétan
    mi a megoldás.

Közönséges differenciálegyenlet megoldásának létezése és egyértelműsége
-----------------------------------------------------------------------

<div class="pelda">

Példák:

-   $\overset{}{x}\left( t \right) = x\left( t \right)$ , ennek egy jó
    megoldása $x\left( t \right) = c \cdot e^{t}$ , $c \in {\mathbb{R}}$
    , azaz végtelen sok megoldás van. Legyen kezdeti feltétel:
    $x\left( 0 \right) = a \in {\mathbb{R}}$ adott. Ekkor már csak 1
    megoldás van az ilyen fajtákból:
    $\left. c \cdot e^{0} = a\Rightarrow c = a \right.$ , vagyis a
    megoldás $x\left( t \right) = a \cdot e^{t}$. De más fajtából
    lehetne még megoldás? Nem, ugyanis: $$\begin{array}{l}
    {\overset{}{x}\left( t \right) = x\left( t \right)} \\
    {\overset{}{x}\left( t \right) \cdot e^{- t} - x\left( t \right)e^{- t} = 0} \\
    \left. \left( {x\left( t \right) \cdot e^{- t}} \right)^{\prime} = 0\Rightarrow x\left( t \right) \cdot e^{- t} = c. \right. \\
    \end{array}$$ Az implikáció csak akkor igaz, ha $D\left( x \right)$
    (azaz a differenciáloperátor) egy intervallumon van értelmezve.
    Tehát
    $\left. \exists k \in {\mathbb{R}}:x\left( t \right)e^{- t} = k\Leftrightarrow x\left( t \right) = k \cdot e^{t} \right.$.
    A megoldás egyértelmű, mert bármilyen kezdőfeltételt adok meg, lesz
    pontosan 1 megoldás.
-   $\overset{}{x}\left( t \right) = \sqrt{\left| {x\left( t \right)} \right|}$.
    Mi a megoldás $x > 0$ -ra?
    $$\left. \frac{\overset{}{x}\left( t \right)}{\sqrt{x\left( t \right)}} = 1\Rightarrow 2\sqrt{x\left( t \right)} = t + c\Rightarrow x\left( t \right) = \left( \frac{t + c}{2} \right)^{2} \right.$$
    Hamis gyökök a parabolák \"bal oldalai\". $x < 0$ esetén a megoldás
    \"lefelé fordított parabolák bal oldalai\", hamis megoldás a
    parabolák \"jobb oldalai\". $x = 0$ esetén mindkét fajta megoldás
    jó. Így adott kezdeti feltétel mellett végtelen sok megoldás
    létezik. Ha $x\left( t_{0} \right) = a$ a kezdeti feltétel, akkor
    $a > 0$ esetén a megoldás csak lokálisan egyértelmű, de globálisan
    nem.

</div>

### Mitől lesz a megoldás egyértelmű?

<div class="tetel">

Tétel:\
Ha
$\overset{}{x}\left( t \right) = f\left( {t,x\left( t \right)} \right)$
közönséges diffegyenletben az $f$ függvény az $x$ változóban teljesíti a
lokális Lipschitz feltételt, akkor a megoldás egyértelmű. Vagyis ha
minden pont egy alkalmas környezetéhez
$\exists L \in {\mathbb{R}}^{+}:\left| {f\left( {t,p} \right) - f\left( {t,q} \right)} \right| \leq L \cdot \left| {p - q} \right|$,
akkor a megoldás egyértelmű.

</div>

<div class="pelda">

Példa:\
$g\left( x \right) = 5x$, vagy $g\left( x \right) = x^{2}$ teljesítik a
lokális Lipschitz feltételt, de a
$g\left( x \right) = \sqrt{\left| x \right|}$ már nem. Ez utóbbi 0-ban
nem lok. Lip, csak 1-ben pl.

</div>

**Észrevétel**: ha a derivált létezik, és korlátos minden pont
környezetében, akkor lok. Lip.

<div class="tetel">

Gronwall lemma (egyszerű eset):\
(Az előző tétel bizonyítása ezen a lemmán alapszik.) Legyen
$\left. u:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
diffható, melyhez
$\exists k \in {\mathbb{R}}^{+}:\overset{}{u}\left( t \right) \leq k \cdot u\left( t \right)\,\forall t \in \left\lbrack {a,b} \right\rbrack$.
Ekkor
$u\left( t \right) \leq u\left( a \right) \cdot e^{k{({t - a})}}\,\forall t \in \left\lbrack {a,b} \right\rbrack$.

</div>

<div class="bizonyitas">

Bizonyítás (lemmáé):\
Beszorzunk $e^{- kt}$-vel:\
$\begin{array}{l}
{\overset{}{u}\left( t \right) \cdot e^{- kt} - k \cdot u\left( t \right) \cdot e^{- kt} \leq 0} \\
{\left( {u\left( t \right)e^{- kt}} \right)^{\prime} \leq 0} \\
{u\left( t \right)e^{- kt} \leq u\left( a \right)e^{- ka}} \\
{u\left( t \right) \leq u\left( a \right)e^{k{({t - a})}}} \\
\end{array}$

</div>

<div class="bizonyitas">

Tétel bizonyítása:\
legyen $x$ és $y$ két megoldás, amelyekhez
$\exists\tau \in {\mathbb{R}}:x\left( \tau \right) = y\left( \tau \right)$.
Belátjuk, hogy $x\left( t \right) = y\left( t \right)\,\forall t$.
Bizonyítás $n = 1$ esetre:
$u\left( t \right) = \left( {x\left( t \right) - y\left( t \right)} \right)^{2}$,
$\overset{}{u}\left( t \right) = 2\left( {x\left( t \right) - y\left( t \right)} \right) \cdot \left( {\overset{}{x}\left( t \right) - \overset{}{y}\left( t \right)} \right) = 2\left( {x\left( t \right) - y\left( t \right)} \right)\left( {f\left( {t,x\left( t \right)} \right) - f\left( {t,y\left( t \right)} \right)} \right)$.
$\overset{}{u}\left( t \right) \leq \left| {\overset{}{u}\left( t \right)} \right| = 2\left| {x\left( t \right) - y\left( t \right)} \right| \cdot \left| {f\left( {t,x\left( t \right)} \right) - f\left( {t,y\left( t \right)} \right)} \right| \leq 2\left| {x\left( t \right) - y\left( t \right)} \right| \cdot L \cdot \left| {x\left( t \right) - y\left( t \right)} \right| = 2L \cdot u\left( t \right)$
Gronwall alkalmazása:
$u\left( t \right) \leq u\left( a \right) \cdot e^{2L{({t - a})}}$,
$\left. u\left( \tau \right) = 0\Rightarrow u\left( t \right) = \left( {x\left( t \right) - y\left( t \right)} \right)^{2} \leq 0\Rightarrow x\left( t \right) = y\left( t \right)\,\forall t \geq \tau \right.$.
Hasonlóan igaz a $t \leq \tau$-ra is.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

A Hilbert tér geometriája, Fourier sorfejtés
============================================

Kiegésztés: fogalmaink használatához be kell vezetni a komplex
Euklideszi tér fogalmát.\
Komplex vektortér: a definíció analóg a valós vektortér definíciójával,
kivéve: komplex számmal való szorzás is értelmezve van, a műveleti
tulajdonságok ugyanazok.

Komplex Euklideszi tér: komplex vektortér (az alaptest a komplex számok
halmaza, $\mathbb{C}$), plusz 2 elem skalárszorzata is értelmezve van,
értéke komplex szám. A műveleti tulajdonságok analógok, eltérés:
$\left\langle {x,y} \right\rangle = \overline{\left\langle {y,x} \right\rangle}$
(a felülhúzás a komplex konjugálás), ekkor amúgy
$\left\langle {\lambda x,y} \right\rangle = \lambda\left\langle {x,y} \right\rangle$
és
$\left\langle {x,\lambda y} \right\rangle = \overline{\lambda}\left\langle {x,y} \right\rangle$.
(Vegyük észre, hogy a komplex vektortereken értelmezett skaláris szorzás
kétféleképp definiálható. Itt - és a matematikában általában - a
skaláris szorzás az első változójában lineáris és a másodikban konjugált
lineáris. Fizikában fordítva, azaz az első változójában lineáris, a
másodikban konjugált
lineáris:$\left\langle {\lambda x,y} \right\rangle = \overline{\lambda}\left\langle {x,y} \right\rangle$,
illetve
$\left\langle {x,\lambda y} \right\rangle = \lambda\left\langle {x,y} \right\rangle$.)

<div class="megj">

Példák (és megjegyzések) komplex euklideszi térre:

-   ${\mathbb{C}}^{n}$ esetén
    $x = \left( {x_{1},x_{2},...,x_{n}} \right)$,
    $x_{j} \in {\mathbb{C}}$, akkor
    $\lambda x = \left( {\lambda x_{1},\lambda x_{2},...,\lambda x_{n}} \right)$,
    $\left\langle {x,y} \right\rangle = {\sum\limits_{j = 1}^{n}{x_{j}\overline{y_{j}}}}$
-   $L^{2}\left( M \right)$ tér (komplex esetben), ha
    $M \subset {\mathbb{R}}^{n}$ mérhető halmaz: legyen
    $\left. f:M\rightarrow{\mathbb{C}} \right.$,
    $f = f_{1} + i \cdot f_{2}$. Legyen továbbá $f_{1}$, $f_{2}$ valós
    függvények. $f$ mérhetősége azt jelenti, hogy $f_{1},f_{2}$ mérhető
    $\left. \Rightarrow{\int_{M}f}: = {\int_{M}f_{1}} + i{\int_{M}f_{2}} \right.$.
    $\left. f:M\rightarrow{\mathbb{C}} \right.$ integrálható
    $\left. \Leftrightarrow\left| f \right| \right.$ integrálható,
    $\left. \left| f \right|:M\rightarrow{\mathbb{R}} \right.$ mérhető.
    Ekkor jelölje $L^{2}\left( M \right)$ az olyan
    $\left. f:M\rightarrow{\mathbb{C}} \right.$ mérhető függvények
    összességét, amelyekre $\left| f \right|^{2}$ integrálható. Könnyen
    belátható, hogy $L^{2}\left( M \right)$ komplex vektortér. Vezessük
    be ebben a következő skalárszorzatot:
    $\left\langle {f,g} \right\rangle: = {\int_{M}{f\overline{g}}}$. Így
    egy Euklideszi teret kapunk. Sőt, a tér teljes, vagyis
    $L^{2}\left( M \right)$ Hilbert tér.
-   Komplex $l^{2}$ tér,
    $x: = \left( {x_{1},x_{2},...,x_{j},...} \right)$,
    $x_{j} \in {\mathbb{C}}$, $l^{2}$ komplex euklideszi tér, ebben a
    skaláris szorzás
    $\left\langle {x,y} \right\rangle = {\sum\limits_{j = 1}^{\infty}{x_{j}\overline{y_{j}}}}$.
    Bizonyítható, hogy teljes is.

</div>

Ortogonális kiegészítő altér
----------------------------

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér (vagy akár Banach is). Egy $Y \subset X$ halmazt
altérnek nevezzük, ha az összeadás és számmal való szorzás nem vezet ki
belőle és zárt részhalmaz (a konvergencia nem vezet ki).

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, s két eleme $x$ és $y$. Ezek merőlegesek, vagyis
$x\bot y$, ha $\left\langle {x,y} \right\rangle = 0$.

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, $Y \subset X$ altér. Azt mondjuk, hogy az
$x \in X$ elem $Y$ ortogonális, ha $\forall y \in Y$-ra
$\left\langle {x,y} \right\rangle = 0$.

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, $Y \subset X$ altér. Az $Y$ altér ortogonális
kiegészítő altérét, $Y^{\bot}$-t így értelmezzük:
$Y^{\bot}: = \left\{ {x \in X:x\bot Y} \right\}$.

</div>

<div class="allitas">

Állítás:\
$Y^{\bot} \subset X$ is altér.

</div>

<div class="bizonyitas">

Bizonyítás:\
Az összeadás és számmal való szorzás nem vezet ki belőle, ugyanis tfh
$y_{1},y_{2} \in Y^{\bot}$, $x \in Y$ tetszőleges. Ekkor
$\left\langle {\lambda_{1}y_{1} + \lambda_{2}y_{2},x} \right\rangle = \lambda_{1}\left\langle {y_{1},x} \right\rangle + \lambda_{2}\left\langle {y_{2},x} \right\rangle = 0$.
$Y^{\bot}$ zárt halmaz, ugyanis legyen $y_{j} \in Y^{\bot}$,
$\lim\left( y_{j} \right) = y \in X$. Tudjuk, hogy
$\left\langle {y_{j},x} \right\rangle = 0\,\forall x \in Y$.
$\left. y_{j}\rightarrow y\Rightarrow\left\langle {y_{j},x} \right\rangle\rightarrow\left\langle {y,x} \right\rangle \right.$
minden rögzített $x$-re, ugyanis a skalárszorzat a tényezőktől
folytonosan függ, tehát $\left\langle {y,x} \right\rangle = 0$,
$\forall x \in X$-re, vagyis $y \in Y^{\bot}$.

</div>

<div class="megj">

Megjegyzés:\
Komplex Cauchy-Schwarz egyenlőtlenség, azaz
$\left| \left\langle {x,y} \right\rangle \right| \leq \left\| x \right\| \cdot \left\| y \right\|$
bizonyítása:\
$\begin{array}{l}
{0 \leq \left\langle {x + \lambda y,x + \lambda y} \right\rangle = \left\langle {x,x} \right\rangle + \lambda\left\langle {y,x} \right\rangle + \overline{\lambda}\left\langle {x,y} \right\rangle + \lambda\overline{\lambda}\left\langle {y,y} \right\rangle} \\
{0 \leq \left\langle {x,x} \right\rangle + \lambda\left\langle {y,x} \right\rangle + \overline{\lambda}\left\lbrack {\left\langle {x,y} \right\rangle + \lambda\left\langle {y,y} \right\rangle} \right\rbrack} \\
\end{array}$\
A $\lambda \in {\mathbb{C}}$ számot válasszuk meg úgy, hogy
$\overline{\lambda}$ együtthatója 0 legyen. Ez teljesül, ha
$\lambda = - \frac{\left\langle {x,y} \right\rangle}{\left\langle {y,y} \right\rangle}$
($y = 0$ triviális eset, így feltesszük, hogy $y \neq 0$),
behelyettesítve:
$\left. 0 \leq \left\langle {x,x} \right\rangle - \frac{\left\langle {x,y} \right\rangle}{\left\langle {y,y} \right\rangle}\left\langle {y,x} \right\rangle = \left\langle {x,x} \right\rangle - \frac{\left| \left\langle {x,y} \right\rangle \right|^{2}}{\left\langle {y,y} \right\rangle}\Rightarrow\left| \left\langle {x,y} \right\rangle \right|^{2} \leq \left\langle {x,x} \right\rangle\left\langle {y,y} \right\rangle \right.$.

</div>

<div class="tetel">

Riesz-féle felbontási tétel:\
Legyen $X$ Hilbert tér, $Y$ egy altere, $Y^{\bot}$ az $Y$-nak
ortogonális kiegészítő altere! Ekkor $\forall x \in X$ elemre
$x = y + z$, ahol $y \in Y$, $z \in Y^{\bot}$ és a felbontás egyértelmű.

</div>

<div class="allitas">

Lemma (paralelogramma egyenlőség):\
Legyen $X$ egy Hilbert tér. Ekkor $\forall a,b \in X$ esetén
$\left\| {a + b} \right\|^{2} + \left\| {a - b} \right\|^{2} = 2\left\| a \right\|^{2} + 2\left\| b \right\|^{2}$.

</div>

<div class="bizonyitas">

Bizonyítás (lemmáé):\
$\left\| {a + b} \right\|^{2} + \left\| {a - b} \right\|^{2} = \left\langle {a + b,a + b} \right\rangle + \left\langle {a - b,a - b} \right\rangle =$
$= \left\| a \right\|^{2} + \left\| b \right\|^{2} + \left\langle {a,b} \right\rangle + \left\langle {b,a} \right\rangle + \left\| a \right\|^{2} + \left\| b \right\|^{2} - \left\langle {a,b} \right\rangle - \left\langle {b,a} \right\rangle = 2\left\| a \right\|^{2} + 2\left\| b \right\|^{2}$.

</div>

<div class="bizonyitas">

Bizonyítás (tételé):\
Legyen
$d: = \inf\left\{ {\left\| {x - y} \right\|:y \in Y} \right\} \geq 0$
($d$ véges). Belátjuk, hogy
$$\exists y_{0} \in Y:\left\| {x - y_{0}} \right\| = d.$$ Az infinimum
definíciója miatt
$$\exists y_{j} \in Y:d^{2} \leq \left\| {x - y_{j}} \right\|^{2} < d^{2} + 1/j\quad j \in {\mathbb{N}}.$$Tekintsük
az $\left( y_{j} \right)$ sorozatot!\
Állítás: $\left( y_{j} \right)$ Cauchy sorozat. Ehhez felhasználjuk a
paralelogramma egyenlőséget $a: = x - y_{j}$ , $b: = x - y_{k}$
választással.
$$\left\| {\left( {x - y_{j}} \right) + \left( {x - y_{k}} \right)} \right\|^{2} + \left\| {\left( {x - y_{j}} \right) + \left( {x - y_{k}} \right)} \right\|^{2} = 2\left\| {x - y_{j}} \right\|^{2} + 2\left\| {x - y_{k}} \right\|^{2}$$
$$\begin{aligned}
  {\left\| {{y_k} - {y_j}} \right\|^2} =  & 2{\left\| {x - {y_j}} \right\|^2} + 2{\left\| {x - {y_k}} \right\|^2} - \underbrace {{{\left\| {2x - \left( {{y_j} + {y_k}} \right)} \right\|}^2}}_{4{{\left\| {x - \frac{{{y_j} + {y_k}}}{2}} \right\|}^2}} \\ 
   \leqslant  & 2\left( {{d^2} + 1/j} \right) + 2\left( {{d^2} + 1/k} \right) - 4{d^2} \\ 
   =  & \frac{2}{j} + \frac{2}{k} < \varepsilon , \text{ ha } j,k \geqslant {j_0}. \\ 
\end{aligned} $$ Mivel $X$ tér teljes
$\left. \Rightarrow\exists y_{0} \in X:\lim\limits_{j\rightarrow\infty}\left\| {y_{j} - y_{0}} \right\| = 0 \right.$.
Mivel $Y$ altér zár halmaz
$\left. \Rightarrow y_{0} = \lim\left( y_{j} \right) \in Y \right.$.

Másrészt (mint ahogy már írtuk)
$d = \inf\left\{ {\left\| {x - y} \right\|:y \in Y} \right\}$ ,
$d^{2} \leq \left\| {x - y_{j}} \right\|^{2} < d^{2} + \frac{1}{j}$,
továbbá
$$\lim \left( {{y_j}} \right) = {y_0}\; \Rightarrow \;\lim \left\| {x - {y_j}} \right\| = \left\| {x - {y_0}} \right\|\; \Rightarrow \;{\left\| {x - {y_0}} \right\|^2} = {d^2}.$$
Legyen $z_{0} = x - y_{0}$. Be kellene még látni, hogy $z_{0}\bot Y$ ,
vagyis $x = y_{0} + z_{0}$ , ahol $y_{0} \in Y,z_{0} \in Y^{\bot}$.

Legyen $y \in Y$ ! Mivel $d$ a fenti infinimum, ezért tetszőleges
$\lambda \in {\mathbb{K}}$ esetén
$d^{2} = \left\| {x - y_{0}} \right\|^{2} \leq \left\| {x - y_{0} - \lambda y} \right\|^{2} =$
$= \left\| {z_{0} - \lambda y} \right\|^{2} = \left\langle {z_{0} - \lambda y,z_{0} - \lambda y} \right\rangle = \left\| z_{0} \right\|^{2} - \lambda\left\langle {y,z_{0}} \right\rangle - \overline{\lambda}\left\lbrack {\left\langle {z_{0},y} \right\rangle - \lambda\left\| y \right\|^{2}} \right\rbrack$.
Most $\lambda$ -t megint úgy választjuk, hogy $\overline{\lambda}$
együtthatója 0 legyen, vagyis legyen
$\lambda = \frac{\left\langle {z_{0},y} \right\rangle}{\left\| y \right\|^{2}}$
(megint feltehetjük, hogy $y \neq 0$ ). Tehát
$d^{2} \leq d^{2} - \lambda\left\langle {y,z_{0}} \right\rangle = d^{2} - \frac{\left\langle {z_{0},y} \right\rangle}{\left\| y \right\|^{2}}\left\langle {y,z_{0}} \right\rangle = d^{2} - \frac{\left| \left\langle {z_{0},y} \right\rangle \right|^{2}}{\left\| y \right\|^{2}}$
,
$\left. 0 \leq - \frac{\left| \left\langle {z_{0},y} \right\rangle \right|^{2}}{\left\| y \right\|^{2}}\Rightarrow\left| \left\langle {z_{0},y} \right\rangle \right|^{2} = 0\Rightarrow\left\langle {z_{0},y} \right\rangle = 0 \right.$.
Tehát $z_{0} \in Y^{\bot}$, vagyis valóban lehetséges ilyen felbontás.\
Indirekt bizonyítjuk, hogy a felbontás egyértelmű. Tfh két alakban is
felírható $x$ : $x = y_{0} + z_{0} = y_{1} + z_{1}$, ahol
$y_{1},y_{2} \in Y$ és $z_{1},z_{2} \in Y^{\bot}$.
$Y \ni \left( {y_{0} - y_{1}} \right): = a = \left( {z_{1} - z_{0}} \right) \in Y^{\bot}$.

$\left. \left\langle {y_{0} - y_{1},z_{1} - z_{0}} \right\rangle = \left\| a \right\|^{2} = 0\Rightarrow y_{0} - y_{1} = z_{0} - z_{1} = 0\Rightarrow y_{0} = y_{1},z_{0} = z_{1} \right.$

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

### Ortogonális rendszerek

<div class="def">

Definíció:\
Egy $X$ vektortérben az $M$ halmaz elemei lineárisan függetlenek, ha
bármely véges sok lineárisan független.

</div>

<div class="def">

Definíció:\
Legyen $X$ normált tér! $X$ dimenziója az olyan lineárisan független
elemek maximális száma, amelyek véges lineárkombinációi mindenütt sűrűn
vannak $X$-ben (egy $A \subset X$ sűrű $X$-ben, ha $\overline{A} = X$,
ahol a halmaz felülvonása a lezárást jelenti, ez amúgy ekvivalens azzal,
hogy $\forall x \in X$-nek minden környezetében van $A$-beli elem).
Másképp fogalmazva: jelöljük
$\mathcal{L}\left( {x_{1},x_{2},...} \right)$-val azt a lineáris teret,
amely az $x_{1},x_{2},...$ elemek véges lineárkombinációjaként előáll.
(Az előálló lineáris tér egyértelmű, de egy teret több ilyen
vektorrendszer is előállíthat.) Ekkor $X$ tér dimenziója az olyan
lineárisan független elemek maximális száma, melyekre
$\overline{\mathcal{L}\left( {x_{1},x_{2},...} \right)} = X$. A $D$
dimenziószám egyértelmű, $0 \leq D \leq \infty$.

</div>

<div class="def">

Definíció:\
Egy $X$ normált teret szeparábilisnak nevezünk, ha benne megadható
megszámlálhatóan sok (azaz véges vagy megszámlálhatóan végtelen sok)
lineárisan független elem, amelyek véges lineárkombinációi sűrűn vannak
$X$-ben.

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert-tér! Azt mondjuk, hogy az $x_{1},x_{2},...,x_{k},...$
elemek ortogonális rendszert alkotnak, ha $\forall x_{j},x_{k} \neq 0$
esetén $\left\langle {x_{j},x_{k}} \right\rangle = \begin{cases}
0 & {j \neq k} \\
{\text{nem}0} & {j = k} \\
\end{cases}$. A rendszer ortonormált, ha $\forall x \in X$ esetén
$\left\| x \right\| = 1$.

</div>

**Kérdés**: ha az $X$ Hilbert-térben $y_{1},y_{2},...,y_{k},...$
lineárisan függetlenek, akkor lehet-e ezekből ortonormált rendszert
konstruálni, és ha igen, hogyan? Válasz: lehet, az ún. Schmidt-féle
ortogonalizációs eljárással.

<div class="tetel">

Tétel:\
Az $y_{1},y_{2},...,y_{k},...$ lineárisan független elemekhez az
$x_{1},x_{2},...,x_{k},...$ elemek megkonstruálhatók úgy, hogy az
utóbbiak ortonormált rendszert alkossanak, mégpedig úgy, hogy
$\forall k$-ra
$\mathcal{L}\left( {x_{1},x_{2},...,x_{k}} \right) = \mathcal{L}\left( {y_{1},y_{2},...,y_{k}} \right)$.

</div>

<div class="bizonyitas">

Bizonyítás:

1.  Legyen $x_{1} = \frac{y_{1}}{\left\| y_{1} \right\|}$, ekkor
    $\left\| x_{1} \right\| = 1$. $y_{1} \neq 0$ , mert
    $y_{1},y_{2},...$ lineárisan függetlenek.
2.  $z_{2}: = y_{2} - \lambda_{1}x_{1}$, ahol
    $\lambda_{1} \in {\mathbb{R}}$. Ezt hogy válasszuk meg, hogy
    $z_{2}\bot x_{1}$ teljesüljön?
    $\left. 0 = \left\langle {z_{2},x_{1}} \right\rangle = \left\langle {y_{2} - \lambda_{1}x_{1},x_{1}} \right\rangle = \left\langle {y_{2},x_{1}} \right\rangle - \lambda_{1}\underset{= 1}{\underset{\}\ }{\left\langle {x_{1},x_{1}} \right\rangle}}\Rightarrow\lambda_{1} = \left\langle {y_{2},x_{1}} \right\rangle \right.$.
    Ekkor $z_{2} \neq 0$, mert $y_{1},y_{2}$ lineárisan függetlenek.
    $x_{2}: = \frac{z_{2}}{\left\| z_{2} \right\|}$, ekkor
    $\left\| x_{2} \right\| = 1$ és
    $\left\langle {x_{1},x_{2}} \right\rangle = 0$.
3.  $z_{3}: = y_{3} - \mu_{1}x_{1} - \mu_{2}x_{2}$, ahol
    $\mu_{1},\mu_{2} \in {\mathbb{R}}$. Ezeket hogy válasszuk meg, hogy
    $z_{3}\bot x_{1},x_{2}$ teljesüljenek? $$\begin{array}{l}
    \left. 0 = \left\langle {y_{3} - \mu_{1}x_{1} - \mu_{2}x_{2},x_{1}} \right\rangle = \left\langle {y_{3},x_{1}} \right\rangle - \mu_{1} - 0\Leftrightarrow\mu_{1} = \left\langle {y_{3},x_{1}} \right\rangle \right. \\
    \left. 0 = \left\langle {y_{3} - \mu_{1}x_{1} - \mu_{2}x_{2},x_{2}} \right\rangle = \left\langle {y_{3},x_{2}} \right\rangle - 0 - \mu_{2}\Leftrightarrow\mu_{2} = \left\langle {y_{3},x_{2}} \right\rangle \right. \\
    \end{array}$$ $z_{3} \neq 0$ $y_{1},y_{2},y_{3}$ lineáris
    függetlensége miatt, ezért
    $x_{3}: = \frac{z_{3}}{\left\| z_{3} \right\|}$ jó választás, így
    $\left\| x_{3} \right\| = 1$ és $x_{3}\bot x_{1},x_{2}$.

Nem nehéz belátni, hogy az eljárás folytatható $\forall k$-ra és
$\mathcal{L}\left( {y_{1},y_{2},...,y_{k}} \right) = \mathcal{L}\left( {x_{1},x_{2},...,x_{k}} \right)$.

</div>

### Ortogonális sorok, Fourier-sorok

A továbbiakban legyen $X$ szeparábilis Hilbert-tér, véges vagy végtelen
dimenziós! Tudjuk, hogy ekkor $X$-ben megadható
$x_{1},x_{2},...,x_{k},...$ ortonormált rendszer. Egy
$\sum\limits_{k}{c_{k}x_{k}}$ alakú sort (összeget) -- ahol
$c_{k} \in {\mathbb{K}}$ -- ortogonális sornak nevezünk.

<div class="tetel">

Tételek:

1.  Egy $\sum\limits_{k}{c_{k}x_{k}}$ sor konvergens
    $\left. \Leftrightarrow{\sum\limits_{k}{\left| c_{k} \right|^{2} < \infty}} \right.$
2.  Ha $x = {\sum\limits_{k}{c_{k}x_{k}}}$, akkor
    $c_{l} = \left\langle {x,x_{l}} \right\rangle$
3.  $\left\| x \right\|^{2} = {\sum\limits_{k}\left| c_{k} \right|^{2}}$
    (végtelen dimenziós Pitagorasz tétel).

</div>

<div class="bizonyitas">

Bizonyítás:

1.  Véges dimenzióban triviális, így tegyük fel, hogy végtelen sok elemű
    az ortonormált rendszer! Legyen
    $s_{j}: = {\sum\limits_{k = 1}^{j}{c_{k}x_{k}}}$! A sor
    konvergenciája azt jelenti, hogy $\left( s_{j} \right)$ sorozat
    konvergens $\left. \Leftrightarrow\left( s_{j} \right) \right.$
    Cauchy sorozat. $$\begin{aligned}
      {\left\| {{s_j} - {s_l}} \right\|^2} &  = \left\langle {{s_j} - {s_l},{s_j} - {s_l}} \right\rangle  \\ 
       &  = \left\langle {\mathop \sum \limits_{k = l + 1}^j {c_k}{x_k},\mathop \sum \limits_{k = l + 1}^j {c_k}{x_k}} \right\rangle  \\ 
       &  = \mathop \sum \limits_{k = l + 1}^j {c_k}{{\bar c}_k}\underbrace {\left\langle {{x_k},{x_k}} \right\rangle }_{ = 1} = \mathop \sum \limits_{k = l + 1}^j {\left| {{c_k}} \right|^2} \\ 
    \end{aligned} $$ Ez a
    $\sum\limits_{k = 1}^{\infty}\left| c_{k} \right|^{2}$ sor egy
    „szelete". Tehát $\left( s_{j} \right)$ $X$-beli sorozatra teljesül
    a Cauchy-kritérium
    $\left. \Leftrightarrow{\sum\limits_{k = 1}^{\infty}\left| c_{k} \right|^{2}} \right.$
    sorra teljesül a Cauchy-kritérium
    $\left. \Leftrightarrow\left( s_{j} \right) \right.$ $X$-beli
    sorozat konvergens
    $\left. \Leftrightarrow{\sum\limits_{k = 1}^{\infty}\left| c_{k} \right|^{2}} \right.$
    sor konvergens.
2.  Tfh $x = {\sum\limits_{k}{c_{k}x_{k}}}$, $x_{l}$-lel szorozzuk
    skalárisan (jobbról) az egyenlőséget (ezt megtehetjük, hisz nem
    nehéz belátni, hogy egy konvergens sor tagonként szorozható
    skalárisan),
    $\left\langle {x,x_{l}} \right\rangle = \left\langle {\sum\limits_{k}{c_{k}x_{k},x_{l}}} \right\rangle = {\sum\limits_{k}{c_{k}\left\langle {x_{k},x_{l}} \right\rangle = c_{l}}}$
3.  ${\left\| x \right\|^2} = \left\langle {x,x} \right\rangle = \left\langle {\mathop \sum \limits_k {c_k}{x_k},x} \right\rangle = \mathop \sum \limits_k {c_k}\underbrace {\left\langle {{x_k},x} \right\rangle }_{{{\bar c}_k}} = \mathop \sum \limits_k {\left| {{c_k}} \right|^2}$

</div>

<div class="def">

Definíció:\
Legyen $x_{1},x_{2},...,x_{k}$ ortonormált rendszer, $x \in X$ adott
elem! Értelmezzük az $x$ elem $k$-adik Fourier-együtthatóját:
$c_{k}: = \left\langle {x,x_{k}} \right\rangle$. Az így adódó
$\sum\limits_{k}{c_{k}x_{k}}$ „sort" az $x$ elem Fourier-sorának
nevezzük.

</div>

**Kérdés**: egy $x$ elem Fourier-sora konvergens-e? Ha igen, mi az
összege?

<div class="tetel">

Tétel:\
Egy $x \in X$ elem Fourier sora mindig konvergens, ugyanis teljesül az
ún. Bessel-egyenlőtlenség:
${\sum\limits_{k}\left| c_{k} \right|^{2}} \leq \left\| x \right\|^{2}$.
A sor összege pontosan akkor $x$, ha teljesül az ún Parseval egyenlőség,
azaz
${\sum\limits_{k}\left| c_{k} \right|^{2}} = \left\| x \right\|^{2}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$s_{j}: = {\sum\limits_{k = 1}^{j}{c_{k}x_{k}}}$, ekkor
$$\begin{array}{l}
{0 \leq \left\| {x - s_{j}} \right\|^{2} = \left\langle {x - s_{j},x - s_{j}} \right\rangle} \\
{= \left\| x \right\|^{2} - \left\langle {s_{j},x} \right\rangle - \left\langle {x,s_{j}} \right\rangle + \left\| s_{j} \right\|^{2}} \\
{= \left\| x \right\|^{2} - \left\langle {\sum\limits_{k = 1}^{j}c_{k}x_{k},x} \right\rangle - \left\langle {x,\sum\limits_{k = 1}^{j}c_{k}x_{k}} \right\rangle + \left\langle {\sum\limits_{k = 1}^{j}c_{k}x_{k},\sum\limits_{k = 1}^{j}c_{k}x_{k}} \right\rangle} \\
{= \left\| x \right\|^{2} - \sum\limits_{k = 1}^{j}c_{k}{\overline{c}}_{k} - \sum\limits_{k = 1}^{j}{\overline{c}}_{k}c_{k} + \sum\limits_{k = 1}^{j}c_{k}{\overline{c}}_{k}} \\
\left. {}{} = \left\| x \right\|^{2} - \sum\limits_{k = 1}^{j}\left| c_{k} \right|^{2}\Leftrightarrow\sum\limits_{k = 1}^{j}\left| c_{k} \right|^{2} \leq \left\| x \right\|^{2}\Rightarrow\sum\limits_{k = 1}^{\infty}\left| c_{k} \right|^{2} \leq \left\| x \right\|^{2}, \right. \\
\end{array}$$másrészt a fentiek szerint
$\left\| {x - s_{j}} \right\|^{2} = \left\| x \right\|^{2} - {\sum\limits_{k = 1}^{j}\left| c_{k} \right|^{2}}$.
Ebből láthatjuk, hogy
$\left. s_{j}\rightarrow x\Leftrightarrow\left\| x \right\|^{2} - {\sum\limits_{k}\left| c_{k} \right|^{2}} = 0 \right.$,
vagyis a sor összege pontosan akkor $x$, ha
$\left\| x \right\|^{2} - {\sum\limits_{k}\left| c_{k} \right|^{2}} = 0$.

</div>

<div class="tetel">

Tétel:\
Legyen $x_{1},x_{2},...,x_{k},...$ ortonormált rendszer. Ekkor egy
$x \in X$ elem Fourier-sorának összege az $x$ elemnek az
$X_{0}: = \overline{\mathcal{L}\left( {x_{1},x_{2},...,x_{k},...} \right)} \subset X$
alterén vett merőleges vetülete.

</div>

<div class="bizonyitas">

Bizonyítás:\
Jelölje $x^{*}: = {\sum\limits_{k}{c_{k}x_{k}}}$, ahol
$c_{k}: = \left\langle {x,x_{k}} \right\rangle$. Azt kellene belátni,
hogy $x^{*} \in X_{0}$ és $\left( {x - x^{*}} \right)\bot X_{0}$.
$x^{*} \in X_{0}$, ugyanis
${\sum\limits_{k = 1}^{j}{c_{k}x_{k}}} \in \mathcal{L}\left( {x_{1},x_{2},...,x_{j}} \right)$,
így ${\sum\limits_{k}{c_{k}x_{k}}} \in X_{0}$.
$\left( {x - x^{*}} \right)\bot X_{0}$ ugyanis először legyen
$y \in \mathcal{L}\left( {x_{1},x_{2},...,x_{l}} \right)$ tetszőleges!
Belátjuk, hogy $\left\langle {x - x^{*},y} \right\rangle = 0$.
$y = {\sum\limits_{j = 1}^{l}{d_{j}x_{j}}}$, $$\begin{aligned}
  \left\langle {x - {x^*},y} \right\rangle  &  = \left\langle {x,y} \right\rangle  - \left\langle {{x^ * },y} \right\rangle  \\ 
   &  = \left\langle {x,\mathop \sum \limits_{j = 1}^l {d_j}{x_j}} \right\rangle  - \left\langle {\mathop \sum \limits_k {c_k}{x_k},\mathop \sum \limits_{j = 1}^l {d_j}{x_j}} \right\rangle  \\ 
   &  = \mathop \sum \limits_{j = 1}^l {{\bar d}_j}\underbrace {\left\langle {x,{x_j}} \right\rangle }_{{c_j}} - \mathop \sum \limits_{j = 1}^l {{\bar d}_j}\underbrace {\left\langle {\mathop \sum \limits_k {c_k}{x_k},{x_j}} \right\rangle }_{{c_j}} = 0 .\\ 
\end{aligned} $$ Most legyen
$y \in X_{0} = \overline{\mathcal{L}\left( {x_{1},x_{2},...} \right)}$,
szeretnénk, ha ekkor $\left\langle {x - x^{*},y} \right\rangle = 0$ is
igaz lenne. Ehhez vegyünk egy $\left( y_{\nu} \right)$,
$\mathcal{L}\left( {x_{1},x_{2},...} \right)$-beli konvergens sorozatot,
melyre $\left. y_{\nu}\rightarrow y \right.$. Ekkor
$\left\langle {x - x^{*},y_{\nu}} \right\rangle = 0$. Így, mivel
$\left. y_{\nu}\rightarrow y \right.$,
$\left\langle {x - x^{*},y} \right\rangle = 0$, ugyanis
$$\begin{aligned}
  \left| {\left\langle {x - {x^ * },y} \right\rangle } \right| &  = \left| {\left\langle {x - {x^ * },y} \right\rangle  - \left\langle {x - {x^ * },{y_\nu }} \right\rangle } \right| \\ 
   &  = \left| {\left\langle {x - {x^ * },y - {y_\nu }} \right\rangle } \right| \\ 
   &  \leqslant \left\| {x - {x^ * }} \right\| \cdot \underbrace {\left\| {y - {y_\nu }} \right\|}_{ \to 0} \to 0. \\ 
\end{aligned} $$

</div>

<div class="def">

Definíció:\
Az $x_{1},x_{2},...$ ortonormált rendszert zártnak nevezzük, ha
$\overline{\mathcal{L}\left( {x_{1},x_{2},...} \right)} = X$.

</div>

Következmény: ha az $x_{1},x_{2},...$ ortonormált rendszer zárt, akkor
$\forall x \in X$ elem Fourier-sorának összege $x$.

<div class="def">

Definíció:\
Egy $x_{1},x_{2},...$ ortonormált rendszert teljesnek nevezzük, ha
$\left. x\bot x_{k}\,\forall k\Rightarrow x = 0 \right.$.

</div>

<div class="tetel">

Tétel (bizonyítás nélkül):\
Egy $x_{1},x_{2},...$ ortonormált rendszer teljes $\Leftrightarrow$
zárt.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="pelda">

Példák zárt (teljes) ortonormált rendszerekre.

Észrevétel: ha egy $y_{1},y_{2},...,y_{k},...$ lineárisan független
rendszer olyan, hogy
$\overline{\mathcal{L}\left( {y_{1},y_{2},...} \right)} = X$
($ha\ pl.\ X$ Hilbert-tér, akkor már a lineárisan független rendszer is
zárt, ha kifeszíti a teljes teret, mert a Hilbert-tér zárt), akkor ebből
a Schmidt ortogonalizálási eljárással zárt (teljes) ortonormált
rendszert kapunk.

1.  $X: = L^{2}\left( {a,b} \right)$ , ahol $\left( {a,b} \right)$ véges
    intervallum.
    <div class="tetel">

    Tétel:\
    Ebben az
    $\left. t\mapsto 1,t\mapsto t,t\mapsto t^{2},...,t\mapsto t^{k},... \right.$
    lineárisan független függvények zárt rendszert alkotnak.

    </div>

    <div class="bizonyitas">

    Bizonyítás (vázlat):\
    Egyrészt a függvényrendszer lineárisan független:
    $$\left. {\sum\limits_{j = 0}^{k}{a_{j}t^{j}}} = 0\Leftrightarrow a_{j} = 0. \right.$$(Egy
    valós $k$ -ad fokú polinomnak legfeljebb $k$ db gyöke lehet
    $k \geq 1$.) Az, hogy a rendszer zárt, következik a Weierstrass
    approximációs tételéből. Eszerint tetszőleges
    $\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
    folytonos függvényhez $\exists P_{k}$ polinom sorozat, amely
    egyenletesen tart $f$ -hez. Legyen
    $\left. g:\left( {a,b} \right)\rightarrow{\mathbb{R}},g \in L^{2}\left( {a,b} \right) \right.$.
    A Lebesgue integrál felépítéséből kiolvasható, hogy
    $\left. g:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
    folytonos függvények sűrűn vannak $L^{2}\left( {a,b} \right)$ -n. A
    $g$ folytonos függvényt Weierstrass approximációs tétele szerint
    tetszőleges előírt pontossággal meg lehet közelíteni polinomokkal, a
    szuprémum normában $\Rightarrow$ ezek közelítik $g$ -t $L^{2}$
    normában is.

    </div>

2.  Komplex trigonometrikus rendszer $X: = L^{2}\left( {0,2\pi} \right)$
    ,
    $\phi_{k}\left( t \right): = e^{ikt},t \in \left( {0,2\pi} \right),k \in {\mathbb{Z}}$.
    <div class="tetel">

    Tétel:\
    A fenti függvények egy zárt ortogonális rendszert alkotnak (biz.
    nélkül). Belátjuk, hogy
    $\left( \phi_{k} \right)_{k \in {\mathbb{Z}}}$ ortogonális.
    ${\int\limits_{0}^{2\pi}{\phi_{k}\left( t \right)\overline{\phi_{l}\left( t \right)}dt}} = {\int\limits_{0}^{2\pi}{e^{ikt}e^{- ilt}dt}} = {\int\limits_{0}^{2\pi}e^{i{({k - l})}t}} = \left\lbrack \frac{e^{i{({k - l})}t}}{i\left( {k - l} \right)} \right\rbrack_{t = 0}^{2\pi} = 0$
    ha $k \neq l$. $\psi_{k}: = \frac{1}{\sqrt{2\pi}}\phi_{k}$ már
    ortonormált rendszer.

    </div>

3.  Valós trigonometrikus rendszerek.\
    Legyen az $X$ alaphalmaz a valós $L^{2}\left( {0,2\pi} \right)$.
    $e^{ikt} = \cos\left( {kt} \right) + i\sin\left( {kt} \right)$ ,
    $\cos\left( {kt} \right) = \frac{e^{ikt} + e^{- ikt}}{2}$ ,
    $\sin\left( {kt} \right) = \frac{e^{ikt} - e^{- ikt}}{2i}$. Egyszerű
    számolással adódik, hogy
    $1,\cos t,\sin t,\cos\left( {2t} \right),\sin\left( {2t} \right),...,\cos\left( {kt} \right),\sin\left( {kt} \right),...$
    függvények páronként merőlegesek. Tehát ezek ortogonális rendszert
    alkotnak a valós $L^{2}\left( {0,2\pi} \right)$ -ben. Abból, hogy a
    komplex trigonometrikus rendszer zárt $\Rightarrow$ a fenti rendszer
    valós ortogonális zárt rendszer. A fentiekből következik, hogy egy
    tetszőleges $f \in L^{2}\left( {0,2\pi} \right)$ függvénynek akár a
    komplex, akár a valós trigonometrikus rendszer szerint Fourier sora
    előállítja a függvényt $L^{2}$ normában.
4.  Az
    $1,\cos t,\cos\left( {2t} \right),...,\cos\left( {kt} \right),...$
    függvényrendszer zárt és ortogonális a $L^{2}\left( {0,\pi} \right)$
    -ben. A szinuszos ugyanígy.

</div>

Lineáris és korlátos operátorok
-------------------------------

<div class="allitas">

Állítás:\
Legyen $X$ , $Y$ normált terek! Korábban bizonyítottuk, hogy
$\left. A:X\rightarrow Y \right.$ lineráis operátor folytonos
$\Leftrightarrow$ $A$ korlátos.

</div>

<div class="def">

Definíció:\
Egy $\left. A:X\rightarrow Y \right.$ lineáris operátort korlátosnak
nevezzük, ha
$\exists c \geq 0:\left\| {Ax} \right\|_{Y} \leq c\left\| x \right\|_{X}\,\forall x \in X$.

</div>

<div class="tetel">

Tétel:\
Legyen $X$ normált tér, $Y$ teljes normált tér (Banach tér),
$\left. A:M\rightarrow Y \right.$ korlátos lineáris operátor, ahol
$M \subset X$ lineáris altér, de nem kell zártnak lennie. Ekkor az $A$
-nak egyértelműen létezik korlátos lineáris kiterjesztése az
$\overline{M}$ -ra ($M$ lezárására). Más szóval:
$\left. \exists!\widetilde{A}:\overline{M}\rightarrow Y \right.$
korlátos lineáris operátor, amelyre
$\widetilde{A}x = Ax\quad\forall x \in M$. Spec eset, mikor
$\overline{M} = X$.

</div>

<div class="bizonyitas">

Bizonyítás (vázlatos):\
Legyen $x \in \overline{M}$. Ehhez
$\exists x_{k} \in M:\lim\left( x_{k} \right) = x$. Tekintsük az
$\left( {Ax_{k}} \right)_{k \in {\mathbb{N}}}$ sorozatot $Y$ -ban!
Belátjuk, hogy ez Cauchy sorozat.
$\left\| {Ax_{k} - Ax_{l}} \right\|_{Y} = \left\| {A\left( {x_{k} - x_{l}} \right)} \right\|_{Y} \leq c \cdot \left\| {x_{k} - x_{l}} \right\|{}_{X}$.
Legyen $\varepsilon > 0$ , $\exists k_{0}:\forall k,l > k_{0}$ esetén
$\left. \left\| {x_{k} - x_{l}} \right\| < \varepsilon\Rightarrow\left\| {Ax_{k} - Ax_{l}} \right\| \leq c \cdot \varepsilon \right.$.
$Y$ teljes
$\left. \Rightarrow\exists y \in Y:\lim\left( {Ax_{k}} \right) = y \right.$.
$y$ csak $x$ -től függ, nem függ $\left( x_{k} \right)$ -tól és
egyértelmű. $\widetilde{A}\left( x \right): = y$ , $\widetilde{A}$
lineáris, korlátos (és folytonos).

</div>

<div class="tetel">

Tétel (Hahn-Banach-tétel):\
Legyen $X$ Banach tér, $X_{0} \subset X$ valódi (zárt lineáris) altér,
$\left. f:X_{0}\rightarrow{\mathbb{K}} \right.$ korlátos lineáris
funkcionál (azaz számértékű operátor). Ekkor
$\left. \exists\widetilde{f}:X\rightarrow{\mathbb{K}} \right.$ korlátos
lineáris kiterjesztés, és
$\left\| \widetilde{f} \right\| = \left\| f \right\|$.

</div>

### Korlátos lineáris funkcionálok, duális tér (Hilbert tér esetén)

**Észrevétel**: legyen $X$ Hilbert tér, $y \in X$ tetszőleges rögzített
elem. Értelmezzük az
$\left. f:X\rightarrow{\mathbb{K}},f\left( x \right): = \left\langle {x,y} \right\rangle \right.$
funkcionált.

<div class="allitas">

Állítás:\
Ekkor $f$ korlátos lineáris funkcionál. $f$ linearitása triviális, és
korlátos is, ugyanis
$\left| {f\left( x \right)} \right| = \left| \left\langle {x,y} \right\rangle \right| \leq \left\| x \right\| \cdot \left\| y \right\|$.

</div>

<div class="tetel">

Tétel (Riesz-tétel):\
Legyen $X$ Hilbert tér (valós vagy komplex), $f$ egy korlátos lineáris
funkcionál $X$ -en. Ekkor létezik egyetlen $y \in X$ , hogy
$f\left( x \right) = \left\langle {x,y} \right\rangle\,\forall x \in X$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Jelölje $X_{0}: = \left\{ {x \in X:f\left( x \right) = 0} \right\}$ -vel
$f$ magterét. $X_{0}$ altér $X$ -ben, azaz az algebrai műveletek nem
vezetnek ki $X_{0}$ -ból, és zárt részhalmaz $X$ -ben. Utóbbi azért
igaz, mivel $f$ folytonos, azaz ha $x_{k} \in X_{0}$ ,
$\left. \left( x_{k} \right)\rightarrow x\Rightarrow x \in X_{0} \right.$.
$\left. f\left( x_{k} \right)\rightarrow f\left( x \right)\Rightarrow f\left( x \right) = 0 \right.$,
mivel jelen esetben $f\left( x_{k} \right) = 0$.

1.  Ha $X_{0} = X$ , $f\left( x \right) = 0\,\forall x \in X$ ,
    triviális eset. Ekkor legyen $y = 0$.
2.  $X_{0}$ valódi altér $\Rightarrow$ (Riesz-féle felbontási tétel
    szerint) $\exists x_{1} \neq 0:x_{1} \in X_{0}^{\bot}$. Legyen
    $x \in X$ tetszőleges, és tekintsük az
    $X \ni y_{1}: = f\left( x \right)x_{1} - f\left( x_{1} \right)x$
    elemet. Ekkor
    $$\left. f\left( y_{1} \right) = f\left( x \right)f\left( x_{1} \right) - f\left( x_{1} \right)f\left( x \right) = 0\Rightarrow y_{1} \in X_{0}\Rightarrow\left\langle {y_{1},x_{1}} \right\rangle = 0. \right.$$
    Más szóval
    $$0 = \left\langle {y_{1},x_{1}} \right\rangle = \left\langle {f\left( x \right)x_{1} - f\left( x_{1} \right)x,x_{1}} \right\rangle = f\left( x \right)\left\| x_{1} \right\|^{2} - f\left( x_{1} \right)\left\langle {x,x_{1}} \right\rangle.$$
    Átrendezve kapjuk, hogy
    $\left. f\left( x \right) = \frac{f\left( x_{1} \right)\left\langle {x,x_{1}} \right\rangle}{\left\| x_{1} \right\|^{2}} = \left\langle {x,\frac{\overline{f\left( x_{1} \right)}x_{1}}{\left\| x_{1} \right\|^{2}}} \right\rangle\Rightarrow\exists y \right.$
    , nevezetesen
    $y = \frac{\overline{f\left( x_{1} \right)}}{\left\| x_{1} \right\|^{2}}x_{1}$.
3.  $y$ egyértelmű. Tfh
    $$\left. \left\langle {x,y} \right\rangle = \left\langle {x,y^{*}} \right\rangle\,\forall x \in X\Rightarrow\left\langle {x,y - y^{*}} \right\rangle = 0\forall x \in X\Rightarrow y - y^{*} = 0\Rightarrow y = y^{*}. \right.$$

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

#### Korlátos lineáris funkcionálok

Legyen $X$ Hilbert tér $y \in X$ egy rögzített eleme,
$f\left( x \right): = \left\langle {x,y} \right\rangle$. Ekkor a CS-ből
következik: $\left\| f \right\| \leq \left\| y \right\|$.

<div class="megj">

Megjegyzés:\
$\left\| f \right\| = \left\| y \right\|$ , ugyanis egyrészt
$\left. \left| {f\left( x \right)} \right| = \left| \left\langle {x,y} \right\rangle \right| \leq \left\| x \right\| \cdot \left\| y \right\|\Rightarrow\left\| f \right\| \leq \left\| y \right\| \right.$.
Másrészt
$\left\| f \right\| = \sup\left\{ {\left| {f\left( x \right)} \right|:\left\| x \right\| = 1} \right\}$.
Válasszuk $x: = \frac{y}{\left\| y \right\|}$ ($y \neq 0$ , máskülönben
triviális), ekkor $\left\| x \right\| = 1$ ,
$\left| {f\left( x \right)} \right| = \left| \left\langle {\frac{y}{\left\| y \right\|},y} \right\rangle \right| = \left\| y \right\|$.
Tehát $\left\| f \right\| = \left\| y \right\|$.

</div>

Spec eset: $X: = L^{2}\left( M \right)$ , $M \subset {\mathbb{R}}^{n}$
mérhető halmaz. Ekkor egy tetszőleges $f$ korlátos lineáris funkcionál
ilyen alakú:
$f\left( \phi \right): = \left\langle {\phi,\psi} \right\rangle = {\int_{M}{\phi\overline{\psi}}}$
, ahol $\psi \in L^{2}\left( M \right)$ rögzített.
$\psi_{0}: = \overline{\psi} \in L^{2}\left( M \right)$ jelöléssel
$f\left( \phi \right) = {\int_{M}{\phi\psi_{0}}},\forall\phi \in L^{2}\left( M \right)$.

**Korlátos lineáris funkcionálok** $L^{p}\left( M \right)$ **-en, ahol**
$1 < p < \infty$ (azaz $L^{\infty}\left( M \right)$ teret nem
tárgyaljuk)

Legyen $\psi \in L^{q}\left( M \right)$ tetszőleges rögzített,
$\frac{1}{p} + \frac{1}{q} = 1$! Értelmezzük az $f$ funkcionált:
$f\left( \phi \right): = {\int_{M}{\phi\psi}}$, ahol
$\phi \in L^{p}\left( M \right)$.

<div class="allitas">

Állítás:\
$f$ korlátos lineáris funkcionál $L^{p}\left( M \right)$-en.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tudjuk, hogy
$\left. \phi \in L^{p}\left( M \right),\psi \in L^{q}\left( M \right)\Rightarrow\phi\psi \in L^{1}\left( M \right) \right.$,
tehát a funkcionál értelmezve van az egész $L^{p}\left( M \right)$-n,
nyilván lineáris. A Hölder egyenlőtlenség szerint
$\left. \left| {\int_{M}{\phi\psi}} \right| \leq \left\| \phi \right\|_{L^{p}{(M)}} \cdot \left\| \psi \right\|_{L^{q}{(M)}}\Rightarrow\left\| f \right\| \leq \left\| \psi \right\|_{L^{q}{(M)}} \right.$,
vagyis korlátos is és normája $\leq \left\| \psi \right\|_{L^{q}{(M)}}$

</div>

<div class="tetel">

Tétel:\
$\left\| f \right\| = \left\| \psi \right\|_{L^{q}{(M)}}$.

</div>

<div class="tetel">

Tétel:\
Legyen $1 < p < \infty$. Ekkor tetszőleges
$\left. f:L^{p}\left( M \right)\rightarrow{\mathbb{K}} \right.$ korlátos
lineáris funkcionálhoz
$\exists!\psi \in L^{q}\left( M \right):f\left( \phi \right) = {\int_{M}{\psi\phi}}$.

</div>

#### Duális (konjugált) tér

<div class="def">

Definíció:\
Legyen $X$ normált tér! Az $X$-en értelmezett korlátos lineáris
funkcionálok terét $X$ duálisának nevezzük és $X'$-vel jelöljük (van,
ahol \*-gal jelölik).

</div>

<div class="megj">

Megjegyzés:\
$X' = L\left( {X,{\mathbb{K}}} \right)$. Tudjuk, hogy
$X' = L\left( {X,{\mathbb{K}}} \right)$ normált tér (norma az operátor
normája), $X'$ tér teljes, mivel $\mathbb{K}$ alaptest teljes, így $X'$
Banach tér.

</div>

Értelmezzük az előbbieket ezen fogalom rögzítésével!

$X$ Hilbert tér. Tudjuk, hogy
$\forall f \in X'\exists y \in X:f\left( x \right) = \left\langle {x,y} \right\rangle$,
$\left\| f \right\| = \left\| y \right\|$. Fordítva, $y \in X$ esetén
$f\left( x \right): = \left\langle {x,y} \right\rangle,x \in X$! Tehát
ha $X$ Hilbert tér, bijekció létesíthető $X'$ és $X$ között. Jelöljük:
$\Phi\left( y \right): = f$,
$f\left( x \right): = \left\langle {x,y} \right\rangle$.
$\left. \Phi:X\rightarrow X' \right.$ bijekció. Ennek tulajdonságai:

-   $\Phi\left( {y_{1} + y_{2}} \right) = \Phi\left( y_{1} \right) + \Phi\left( y_{2} \right)$.
    $f_{1}\left( x \right) = \left\langle {x,y_{1}} \right\rangle$,
    $f_{2}\left( x \right) = \left\langle {x,y_{2}} \right\rangle$.
    $\left( {f_{1} + f_{2}} \right)\left( x \right) = f_{1}\left( x \right) + f_{2}\left( x \right) = \left\langle {x,y_{1}} \right\rangle + \left\langle {x,y_{2}} \right\rangle = \left\langle {x,y_{1} + y_{2}} \right\rangle$,
    vagyis $\left. f_{1} + f_{2}\leftrightarrow y_{1} + y_{2} \right.$.
-   $\lambda \in {\mathbb{K}}$ esetén
    $\Phi\left( {\lambda y} \right) = \overline{\lambda}\Phi\left( y \right)$.
    $$\left. f\left( x \right) = \left\langle {x,y} \right\rangle\Rightarrow\left\langle {x,\lambda y} \right\rangle = \overline{\lambda}\left\langle {x,y} \right\rangle = \overline{\lambda}f\left( x \right) = \left( {\overline{\lambda}f} \right)x, \right.$$vagyis
    $\left. \lambda y\leftrightarrow\overline{\lambda}f \right.$, tehát
    $\Phi$ konjugált lineáris.

$X = L^{p}\left( M \right)$ esete, mikor $1 \leq p \leq \infty$ és
$\frac{1}{p} + \frac{1}{q} = 1$.

Tudjuk, hogy tetszőleges $\psi \in L^{q}\left( M \right)$ esetén
$f\left( \phi \right): = {\int_{M}{\phi\psi}}$, $\phi \in X$ mellett
$f \in \left( {L^{p}\left( M \right)} \right)'$,
$\left\| f \right\| = \left\| \psi \right\|$. Továbbá
$\left( {L^{p}\left( M \right)} \right)'$ minden eleme ilyen alakú
$p < \infty$ esetén.

$\left. L^{q}\left( M \right) \ni \psi\leftrightarrow f \in \left( {L^{p}\left( M \right)} \right)' \right.$.
Könnyen belátható, hogy az eddigiek alapján $\Phi$ bijekció, sőt, $\Phi$
lineáris. $L^{p}\left( M \right)$ izomorf és izometrikus (normatartó)
$L^{q}\left( M \right)$-vel, ha $p < \infty$.

#### $X''$ tér, más szóval biduális, reflexív tér

<div class="def">

Definíció:\
Legyen $X$ normált tér. Ekkor definíció szerint
$X": = \left( {X'} \right)'$.

</div>

<div class="allitas">

Állítás:\
Ha $X$ Hilbert tér, akkor $X''$ izomorf, izometrikus az $X$ térrel.

</div>

<div class="def">

Definíció:\
Legyen $X$ Banach tér! Ha $X''$ izomorf és izometrikus $X$-szel, akkor
$X''$-t reflexívnek nevezzük.

</div>

<div class="allitas">

Állítás:\
Legyen $X = L^{p}\left( M \right)$, ahol $1 < p < \infty$! Ekkor
$L^{p}\left( M \right)$ reflexív.

</div>

Vizsgáljuk $X''$-t általános esetben, mikor $X$ Banach tér! Tekintsük
egy tetszőleges, rögzített $x \in X$ elemet, ehhez rendeljük hozzá a
következő, $F_{x} \in X"$ elemet!
$F_{x}\left( f \right): = f\left( x \right)$, $\forall f \in X'$. Ekkor
$F_{X}$ jól definiált funkcionál $X'$-n, nyilván lineáris, korlátos is.
$\left| {F_{x}\left( f \right)} \right| = \left| {f\left( x \right)} \right| \leq \left\| f \right\| \cdot \left\| x \right\|_{X}$,
$\forall f \in X'$.
$\left. \Rightarrow\left\| F_{x} \right\| \leq \left\| x \right\| \right.$.

<div class="allitas">

Állítás:\
$\left\| F_{x} \right\| = \left\| x \right\|$.

</div>

<div class="bizonyitas">

Bizonyítás:\
(Definíció szerint
$\left\| F_{x} \right\| = \sup\limits_{f \in X'}\left\{ {\left| {F_{x}\left( f \right)} \right| = \left| {f\left( x \right)} \right|:\left\| f \right\| = 1} \right\}$.)
Azt kellene belátni, hogy $\exists f \in X':\left\| f \right\| = 1$,
melyre igaz, hogy
$\left| {F_{x}\left( f \right)} \right| = \left\| x \right\|$ bármely
rögzített $x$ esetén. Tekintsük a következő $f_{0}$ funkcionált $X$
következő, 1 dimenziós alterén:
$X_{0}: = \left\{ {\lambda x:\lambda \in {\mathbb{K}}} \right\}$, ahol
$x \in X$ rögzített. Legyen
$f_{0}\left( {\lambda x} \right): = \lambda\left\| x \right\|$. $f_{0}$
korlátos is,
$\left. \left| {f_{0}\left( {\lambda x} \right)} \right| = \left| \lambda \right|\left\| x \right\| = \left\| {\lambda x} \right\| \cdot 1\Rightarrow\left\| f_{0} \right\| = 1 \right.$.
A Hahn-Banach tétel szerint az $X_{0}$ altéren definiált $f_{0}$
korlátos lineáris funkcionál kiterjeszthető a korlátosság és linearitás
megtartásával az egész $X$ térre úgy, hogy
$\left\| f \right\| = \left\| f_{0} \right\|$ (ezt persze nem
bizonyítottuk). Jelölje ezt $f$! $f \in X'$,
$\left\| f \right\| = \left\| f_{0} \right\| = 1$. Erre
$\left| {F_{x}\left( f \right)} \right| = \left| {f\left( x \right)} \right| = \left| {f\left( {1 \cdot x} \right)} \right| = f_{0}\left( {1 \cdot x} \right) = 1 \cdot \left\| x \right\| = \left\| x \right\|$.

</div>

Általános esetben $X''$ egy részhalmaza izomorf és izometrikus $X$-szel.
$X''$-nek lehetnek más elemei is (ha nem reflexív).

### Gyenge konvergencia

<div class="def">

Definíció:\
Legyenek $X$, $Y$ normált terek, és tfh
$A_{j} \in L\left( {X,Y} \right),j \in {\mathbb{N}}$ ($A_{j}$ korlátos
lineáris operátor $X$-n). Azt mondjuk, hogy ez az $A_{j}$ sorozat
gyengén konvergál az $A$ operátorhoz, ha $\forall x \in X$ elemre
$\left. \left( {A_{j}x} \right)_{j \in {\mathbb{N}}}\rightarrow Ax \right.$
(pontonkénti konvergencia). ($Y$-beli norma szerinti konvergencia).

</div>

<div class="allitas">

Állítás:\
Ha $\lim\left\| {A_{j} - A} \right\| = 0$, azaz
$\left. \left( A_{j} \right)\rightarrow A \right.$ az
$L\left( {X,Y} \right)$ norma szerint, akkor
$\left. \left( A_{j} \right)\rightarrow A \right.$ gyengén, de fordítva
nem mindig igaz.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tfh $\lim\left\| {A_{j} - A} \right\| = 0$. Ekkor
$${\left\| {{A_j}x - Ax} \right\|_Y} = \left\| {\left( {{A_j} - A} \right)x} \right\| \leqslant \underbrace {\left\| {{A_j} - A} \right\|}_{ \to 0} \cdot \left\| x \right\| \to 0 .$$

</div>

Speciális eset: $Y = {\mathbb{K}}$, $L\left( {X,Y} \right) = X'$.
$\left. \left( f_{j} \right)\rightarrow f \right.$ gyengén $X'$-ben, ha
bármely rögzített $x \in X$ esetén
$\left. \left( {f_{j}\left( x \right)} \right)\rightarrow f\left( x \right) \right.$.

<div class="pelda">

Példa:\
$X'$-beli gyengén konvergens sorozatra, amely norma szerint nem
konvergens. Legyen $X$ szeparábilis, végtelen dimenziós Hilbert tér!
Legyen ebben egy $y_{1},y_{2},...,y_{j},...$ ortonormált, teljes
rendszer!
$f_{j}\left( x \right): = \left\langle {x,y_{j}} \right\rangle$. Ekkor
$\left\langle {x,y_{j}} \right\rangle$ az $x \in X$ elem $j$-edik
Fourier-egyeütthatója $y_{j}$ ortonormált rendszer szerint,
$c_{j}: = \left\langle {x,y_{j}} \right\rangle$. Tudjuk, hogy
$\left. {\sum\limits_{j = 1}^{\infty}\left| c_{j} \right|^{2}} < \infty\Rightarrow\lim\left( c_{j} \right) = 0 \right.$,
azaz $\lim\limits_{j\rightarrow\infty}f_{j}\left( x \right) = 0$,
$\forall x \in X$. Más szóval $\left( f_{j} \right)$ $X$'-beli sorozat
gyengén tart $f = 0$ funkcionálhoz. Másrészt
$\left\| f_{j} \right\| = \left\| y_{j} \right\|_{X} = 1$, így
$\left( f_{j} \right)$ nem tart a norma szerint az $f = 0$
funkcionálhoz. (Bebizonyítható, hogy véges dimenzióban a gyenge
konvergencia egybeesik a norma szerinti konvergencia fogalmával.)

</div>

<div class="tetel">

Tétel:\
Tfh $A_{j} \in L\left( {X,Y} \right)$, ahol $X$, $Y$ Banach terek,
$\left. \left( A_{j} \right)\rightarrow A \right.$ gyengén. Ekkor
$\left( \left\| A_{j} \right\| \right)_{j \in {\mathbb{N}}}$ korlátos.
Ez a tétel következik az alábbi tételből.

</div>

<div class="tetel">

Egyenletes korlátosság tétele (Banach-Steinhaus-tétel, bizonyítás
nélkül):\
Legyenek $X$, $Y$ Banach terek, $A_{j} \in L\left( {X,Y} \right)$. Ha az
$A_{j}$ operátor sorozat pontonként korlátos, azaz ha $\forall x \in X$
esetén
$\left. \sup\limits_{j \in {\mathbb{N}}}\left\{ \left\| {A_{j}x} \right\| \right\} < \infty\Rightarrow\left( \left\| A_{j} \right\| \right) \right.$
korlátos.

</div>

<div class="megj">

Megjegyzés (gyenge kompaktsági kritérium):\
Tekintsük a $X' = L\left( {X,{\mathbb{K}}} \right)$ speciális esetet az
egyszerűség kedvéért. Ha $f_{j} \in X'$ korlátos sorozatot alkot ($X$
most Banach tér), akkor $\left( f_{j} \right)$-ból kiválasztható egy
gyengén konvergens részsorozat.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

### Gyenge konvergencia $X$-ben

<div class="def">

Definíció:\
Legyen $X$ normált tér! Azt mondjuk, hogy egy
$\left( x_{j} \right)_{j \in {\mathbb{N}}}$ $X$-beli sorozat gyengén
konvergál egy $x \in X$ ponthoz, ha $\forall f \in X'$ funkcionálra
$\left. \left( {f\left( x_{j} \right)} \right)_{j \in {\mathbb{N}}}\rightarrow f\left( x \right) \right.$.

</div>

<div class="megj">

Megjegyzés:\
Ha $X$ reflexív Banach-tér, akkor minden korlátos $X$-beli sorozatnak
létezik gyengén konvergens részsorozata. Ugyanis ekkor
$X = X'' = \left( {X'} \right)'$.

</div>

#### Inverz operátor

Emlékeztető: egy függvénynek létezik inverze, ha injektív. Tudjuk
továbbá, hogy egy $\left. A:X\rightarrow Y \right.$ lineáris operátornak
létezik inverze (azaz injektív) $\Leftrightarrow$ a magtér csak a 0-ból
áll, azaz $\left. Ax = 0_{Y}\Leftrightarrow x = 0_{X} \right.$. Továbbá,
ha $A^{- 1}$ létezik, akkor $A^{- 1}$ lineáris operátor. Egy $A$
operátor folytonos $x_{0}$-ban, ha
$\left. \forall\varepsilon > 0\exists\rho > 0:\left\| {x - x_{0}} \right\|_{X} < \rho\Rightarrow\left\| {Ax - Ax_{0}} \right\|_{Y} < \varepsilon \right.$.

**Kérdés**: ha $X$, $Y$ normált terek, $\left. A:X\rightarrow Y \right.$
lineáris és injektív $\overset{?}{\Rightarrow}A^{- 1}$ korlátos is?
Általában nem, akkor sem, ha $A$ korlátos.

<div class="tetel">

Nyílt leképezések tétele (bizonyítás nélkül):\
Legyenek $X$, $Y$ Banach terek, $\left. A:X\rightarrow Y \right.$
korlátos lineáris operátor és $R_{A} = Y$, vagyis ráképezés. Ekkor $A$
operátor $X$ minden nyílt halmazát $Y$ nyílt halmazába képezi. Ebből
következik:

</div>

<div class="tetel">

Tétel (Banach-tétel):\
Legyenek $X$, $Y$ Banach terek, $\left. A:X\rightarrow Y \right.$
korlátos és lineáris, $R_{A} = Y$ és $A$ injektív! Ekkor $A^{- 1}$
korlátos (azaz folytonos).

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen tetszőleges $y_{0} \in Y = R_{A} = D_{A^{- 1}}$.
$x_{0}: = A^{- 1}y_{0}$. Belátjuk, hogy az $A^{- 1}$ folytonos
$y_{0}$-ban. Tekintsük $x_{0} = A^{- 1}y_{0}$ egy tetszőleges
$B_{r}\left( x_{0} \right)$ nyílt környezetét! Ennek képe is nyílt az
$Y$-ban az előbbi tétel szerint. Mivel
$y_{0} \in A\left( {B_{r}\left( x_{0} \right)} \right)$, ami nyílt,
ezért $y_{0}$-nak van olyan környezete, melyre
$B_{\rho}\left( y_{0} \right) \subset A\left( {B_{r}\left( x_{0} \right)} \right)$.
Ez azt jelenti, hogy ha
$\left. y \in B_{\rho}\left( y_{0} \right)\Rightarrow A^{- 1}y \in B_{r}\left( x_{0} \right) \right.$.
Eszerint $A^{- 1}$ folytonos $y_{0}$-ban.

</div>

#### Zárt gráf (grafikon) tétel

<div class="def">

Definíció:\
Legyenek $X$, $Y$ normált terek, $\left. A:M\rightarrow Y \right.$
lineáris operátor, $M \subset X$. Ekkor $A$ operátor gráfja, grafikonja
az alábbi halmaz:
$G_{A}: = \left\{ {\left( {x,Ax} \right):x \in M = D_{A}} \right\}$.

</div>

<div class="def">

Definíció:\
Egy $\left. A:M\rightarrow Y \right.$ lineáris operátort zártnak
nevezünk, ha a $G_{A} \subset X \times Y$ zárt halmaz $X \times Y$-ban.
$X \times Y = \left\{ {\left( {x,y} \right):x \in X,y \in Y} \right\}$.

</div>

<div class="megj">

Megjegyzés:\
A szorzattéren értelmezett műveletek:

-   $\left( {x_{1},y_{1}} \right) + \left( {x_{2},y_{2}} \right) = \left( {x_{1} + x_{2},y_{1} + y_{2}} \right)$
-   $\lambda\left( {x,y} \right) = \left( {\lambda x,\lambda y} \right)$
-   $\left\| \left( {x,y} \right) \right\|_{X \times Y}: = \sqrt{\left\| x \right\|^{2} + \left\| y \right\|^{2}}$,
    $X \times Y$ normált tér tehát.

</div>

Legyenek $X$, $Y$ normált terek, $\left. A:M\rightarrow Y \right.$
lineáris operátor, $D_{A} = M \subset X$. $A$ zárt $\Leftrightarrow$ ha
minden $\left( x_{j} \right)_{j \in {\mathbb{N}}}$ $M$-beli sorozatra,
melyre $\lim\left( x_{j} \right) = x \in X$ és
$\exists\lim\left( {Ax_{j}} \right) = y \in Y$, akkor $x \in M$ és
$y = Ax$. Ezért ha $A$ folytonos, akkor zárt is.

<div class="pelda">

Példa:\
Példa zárt, lineáris, de nem folytonos (nem korlátos) operátorra:
$X: = C\left\lbrack 0,1 \right\rbrack$,
$M = D_{A} = C^{1}\left\lbrack 0,1 \right\rbrack$,
$A\phi: = \phi^{\prime}$, vagyis a differenciáloperátor.
$\left. \left( \phi_{j} \right)\rightarrow\phi \right.$ egyenletesen
($C\left\lbrack 0,1 \right\rbrack$-beli konvergencia) és
$\left. \left( {\phi^{\prime}}_{j} \right)\rightarrow\psi \right.$
egyenletesen $\left. \Rightarrow\psi = \phi^{\prime} \right.$, tehát $A$
valóban zárt, lineáris (de nem korlátos, így nem is folytonos, ezt
láttuk korábban).

</div>

<div class="tetel">

Tétel (zárt gráf tétel):\
Legyenek $X$, $Y$ Banach terek, $\left. A:X\rightarrow Y \right.$ zárt,
lineáris operátor (tehát $D_{A} = X$). Ekkor $A$ folytonos (korlátos).

</div>

<div class="bizonyitas">

Bizonyítás:\
$G_{A}: = \left\{ {\left( {x,Ax} \right):x \in D_{A} = X} \right\} \subset X \times Y$
(utóbbi Banach-tér), ugyanis $G_{A}$ zárt halmaz $X \times Y$-ban, az
$X \times Y$ vektortenérnek altere:
$\left( {x_{1},Ax_{1}} \right) + \left( {x_{2},Ax_{2}} \right) = \left( {x_{1} + x_{2},A\left( {x_{1} + x_{2}} \right)} \right) \in G_{A}$,
$\lambda\left( {x,Ax} \right) = \left( {\lambda x,A\left( {\lambda x} \right)} \right) \in G_{A}$.
$G_{A}$ az $X \times Y$ Banach tér zárt lineáris altere
$\left. \Rightarrow G_{A} \right.$ Banach-tér. Tekintsük a következő két
operátort: $U\left( {x,Ax} \right): = x$,
$V\left( {x,Ax} \right): = Ax$, ahol $\left( {x,Ax} \right) \in G_{A}$.
Ekkor $\left. U:G_{A}\rightarrow X \right.$, $R_{U} = X$,
$\left. V:G_{A}\rightarrow Y \right.$. Most $U$-ra alkalmazható a Banach
tétel (az inverz operátor korlátosságáról): $D_{U} = G_{A}$,
$R_{U} = X$, $U$ korlátos és injektív
$\left. \Rightarrow U^{- 1}:X\rightarrow G_{A} \right.$ korlátos
(folytonos), $A = VU^{- 1}$, mert $U^{- 1}x = \left( {x,Ax} \right)$,
$V\left( {U^{- 1}\left( x \right)} \right) = V\left( {x,Ax} \right) = Ax$.
$\left. V:G_{A}\rightarrow Y \right.$ korlátos
$\left. \Rightarrow A = VU^{- 1} \right.$ is korlátos.

</div>

Sajátérték, reguláris érték, spektrum
-------------------------------------

Legyenek $X$, $Y$ normált terek, $\left. A:M\rightarrow Y \right.$
lineáris operátor, $M \subset X$, $b \in Y$ adott elem.

1.  Elsőfajú egyenlet: melyik az a $x \in M = D_{A}:Ax = b$?
2.  Másodfajú egyenlet: legyen $Y = X$. Melyik az a $x \in X$, melyre
    $\left( {\lambda I - A} \right)x = b$, ahol
    $\lambda \in {\mathbb{K}}$, $I$ az identitás. Ha
    $\left( {\lambda I - A} \right)$ nem injektív, azaz nem létezik az
    inverzre, akkor $\lambda$-t az $A$ operátor sajátértékének nevezzük.
    Ez azt jelenti, hogy
    $\left. \exists x_{0} \neq 0:\left( {\lambda I - A} \right)x_{0} = 0\Leftrightarrow Ax_{0} = \lambda x_{0} \right.$.

<div class="def">

Definíció:\
Ha $\exists\left( {\lambda I - A} \right)^{- 1}$, ez korlátos és
$R_{\lambda I - A}$ értelmezési tartománya sűrű halmaz $X$-ben, akkor
$\lambda$-t reguláris értéknek nevezzük.

</div>

<div class="allitas">

Állítás:\
Ha $A$ zárt operátor, akkor reguláris érték esetén
$D_{{({\lambda I - A})}^{- 1}} = X$, azaz $R_{\lambda I - A} = X$.

</div>

<div class="megj">

Megjegyzés:\
Ekkor reguláris értéke esetén $\left( {\lambda I - A} \right)x = b$
egyenletnek $\forall b \in X$-hez $\exists!x$ megoldás, és $x$
folytonosan függ $b$-től, azaz
$x = {\underbrace {\left( {\lambda I - A} \right)}_{{\text{folytonos}}}^{ - 1}}b$.

</div>

<div class="def">

Definíció:\
Az $A$ operátor spektruma a reguláris értékek halmazának a komplementere
az alaptestben. A sajátértékek halmaza része a spektrumnak.

</div>

### Korlátos lineáris operátorok reguláris értékei

<div class="tetel">

Tétel:\
Legyen $X$ Banach tér! Legyen $\left. A:X\rightarrow X \right.$ korlátos
lineáris operátor. Ekkor
$r_{\sigma}\left( A \right): = \lim\limits_{k\rightarrow\infty}\left\| A^{k} \right\|^{1/k}$,
ez létezik és véges. Ha $\lambda \in {\mathbb{K}}$ számra teljesül, hogy
$\left| \lambda \right| > r_{\sigma}\left( A \right)$, akkor $\lambda$
reguláris érték ($A$-ra nézve).

</div>

<div class="def">

Definíció:\
$r_{\sigma}\left( A \right)$ számot az $A$ korlátos lineáris operátor
spektrálsugarának nevezzük.

</div>

<div class="megj">

Megjegyzések:

-   $A,B \in L\left( {X,X} \right)$ esetén
    $\left\| {AB} \right\| \leq \left\| A \right\|\left\| B \right\|$,
    ugyanis
    $\left\| {\left( {AB} \right)x} \right\| = \left\| {A\left( {Bx} \right)} \right\| \leq \left\| A \right\| \cdot \left\| {Bx} \right\| \leq \left\| A \right\| \cdot \left\| B \right\| \cdot \left\| x \right\|$
    minden $x$-re,
    $\left. \Rightarrow\left\| {AB} \right\| \leq \left\| A \right\|\left\| B \right\| \right.$
-   $\left\| A^{k} \right\| \leq \left\| A \right\|^{k}$.
    $\left. \left\| A^{k} \right\|^{1/k} \leq \left( \left\| A \right\|^{k} \right)^{1/k} = \left\| A \right\|\Rightarrow r_{\sigma}\left( A \right) \leq \left\| A \right\| \right.$.
    Következmény: ha
    $\left. \left| \lambda \right| > \left\| A \right\|\Rightarrow\lambda \right.$
    reguláris érték.

</div>

<div class="tetel">

Tétel (lemma 1):\
Legyen $Z$ Banach-tér, $z_{k} \in Z$. Ha
$\left. {\sum\limits_{k = 1}^{\infty}{\left\| z_{k} \right\| < \infty}}\Rightarrow{\sum\limits_{k = 1}^{\infty}z_{k}} \right.$
konvergens $Z$ Banach-téren.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $s_{j}: = {\sum\limits_{k = 1}^{j}z_{k}}$ részlet összeg!
$\left\| {s_{j} - s_{l}} \right\| = \left\| {\sum\limits_{k = l + 1}^{j}z_{k}} \right\| \leq {\sum\limits_{k = l + 1}^{j}\left\| z_{k} \right\|} < \varepsilon$,
ha $l,j > j_{0}$, tehát teljesül a Cauchy kritérium. Mivel $Z$
Banach-tér, azaz teljes normált tér, ezért minden Cauchy-sorozatnak van
határértéke $Z$-ben.

</div>

<div class="tetel">

Tétel (lemma 2, bizonyítás nélkül):\
Tfh $B_{k} \in L\left( {X,X} \right)$,
$\sum\limits_{k = 1}^{\infty}B_{k}$ konvergens
$L\left( {X,X} \right)$-en. Ekkor $\forall C \in L\left( {X,X} \right)$
operátorra
$C{\sum\limits_{k = 1}^{\infty}B_{k}} = {\sum\limits_{k = 1}^{\infty}{CB_{k}}}$.
A bizonyítás egyszerű a részletösszegek segítségével.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="tetel">

Tétel:\
Legyen $X$ Banach-tér, $\left. A:X\rightarrow X \right.$ korlátos,
lineáris operátor. Ekkor létezik és véges:
$r_{\sigma}\left( A \right): = \lim\limits_{k\rightarrow\infty}\left\| A^{k} \right\|^{1/k}$.
Továbbá
$\left. \left| \lambda \right| > r_{\sigma}\left( A \right)\Rightarrow\lambda \right.$
reguláris érték,
$\left( {\lambda I - A} \right)^{- 1} = \frac{1}{\lambda}\left( {I - \frac{1}{\lambda}A} \right)^{- 1} = \frac{1}{\lambda}{\sum\limits_{k = 0}^{\infty}{\frac{1}{\lambda^{k}}A^{k}}} = {\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}A^{k}}}$.
Ez a sor -- a Neumann-sor -- $L\left( {X,X} \right)$ normában
konvergens.

</div>

<div class="bizonyitas">

Bizonyítás:

1.  Jelöljük:
    $r: = \inf\left\{ {\left\| A^{k} \right\|^{1/k}:k \in {\mathbb{N}}} \right\} \geq 0$,
    ez véges. Belátjuk, hogy
    $$r_{\sigma}\left( A \right) = \lim\limits_{k\rightarrow\infty}\left\| A^{k} \right\|^{1/k} = r = \inf\left\{ {\left\| A^{k} \right\|^{1/k}:k \in {\mathbb{N}}} \right\} \geq 0.$$
    Legyen $\varepsilon > 0$ tetszőleges, ekkor az alsó határ
    definíciójából következik, hogy
    $\exists m \in {\mathbb{N}}:r \leq \left\| A^{m} \right\|^{1/m} < r + \varepsilon$.
    Ezen $m$ mellett válasszunk egy $k > m$ számot, melyre $k = pm + q$,
    ahol $p \in {\mathbb{N}}$ és $0 \leq q < m$ (ez $k$-nak $m$-vel vett
    maradékos osztása, $q$ a maradéktag). Ekkor
    $A^{k} = A^{pm + q} = \left( A^{p} \right)^{m} \cdot A^{q}$, így
    $$\left. \left\| A^{k} \right\| \leq \left\| A^{m} \right\|^{p} \cdot \left\| A \right\|^{q}\Rightarrow\left\| A^{k} \right\|^{1/k} \leq \left\| A^{m} \right\|^{p/k} \cdot \left\| A \right\|^{q/k} \leq \left( {r + \varepsilon} \right)^{mp/k}\left\| A \right\|^{q/k}. \right.$$
    Vegyük észre, hogy
    $\lim\limits_{k\rightarrow\infty}\frac{mp}{k} = 1$, mert
    $\lim\limits_{k\rightarrow\infty}\frac{q}{k} = 0$, így a fenti
    egyenlőtlenség jobb oldala
    $\left. \rightarrow r + \varepsilon \right.$. Ebből következik, hogy
    $$\left. \exists k_{0}:k > k_{0}\Rightarrow r \leq \left\| A^{k} \right\|^{1/k} \leq r + 2\varepsilon\Rightarrow\lim\limits_{k\rightarrow\infty}\left\| A^{k} \right\|^{1/k} = r. \right.$$
2.  Belátjuk, hogy a Neumann-sor $L\left( {X,X} \right)$-ben konvergens.
    Az 1. lemma szerint ehhez elég bizonyítani, hogy a sor tagjainak
    normáiból alkotott sor konvergens, azaz
    ${\sum\limits_{k = 0}^{\infty}\left\| {\lambda^{- k - 1}A^{k}} \right\|} < \infty$.
    Válasszunk egy olyan $r_{1}$ számot, melyre
    $\left| \lambda \right| > r_{1} > r_{\sigma}\left( A \right)$! Mivel
    $r_{\sigma}\left( A \right) = \lim\limits_{k\rightarrow\infty}\left\| A^{k} \right\|^{1/k}$
    és $r_{1} > r_{\sigma}\left( A \right)$, ezért
    $\left. \exists k_{1} \in {\mathbb{N}}:k > k_{1}\Rightarrow r_{1} > \left\| A^{k} \right\|^{1/k} \right.$,
    így
    $\left\| {\lambda^{- k - 1}A^{k}} \right\| = \frac{1}{\left| \lambda \right|^{k + 1}}\left\| A^{k} \right\| < \frac{1}{\left| \lambda \right|^{k + 1}}r_{1}^{k} = \frac{1}{\left| \lambda \right|}\left( \frac{r_{1}}{\left| \lambda \right|} \right)^{k}$.
    Ezeket összegezve $k$ szerint egy mértani sort kapunk, melynek
    kvóciense $0 < \frac{r_{1}}{\left| \lambda \right|} < 1$, így a sor
    konvergens, azaz
    ${\sum\limits_{k = 1}^{\infty}{\frac{1}{\left| \lambda \right|}\left( \frac{r_{k}}{\left| \lambda \right|} \right)^{k}}} < \infty$.
3.  Jelöljük
    $B: = {\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}A^{k}}} \in L\left( {X,X} \right)$.
    Előbb láttuk, hogy ez konvergens. Ebből következni fog, hogy
    $\left( {\lambda I - A} \right)^{- 1}$ létezik és egyenlő $B$-vel.
    A 2. lemmát felhasználva:
    $\left( {\lambda I - A} \right)B = \lambda B - AB = \lambda{\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}A^{k}}} - A{\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}A^{k}}} = {\sum\limits_{k = 0}^{\infty}{\lambda^{- k}A^{k}}} - {\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}A^{k + 1}}} = I$.
    Hasonlóképpen, $B\left( {\lambda I - A} \right) = I$.
    Következtetésképpen $\left( {\lambda I - A} \right)^{- 1}$ létezik
    és egyenlő $B$-vel.

</div>

**Következmény**: $\left| \lambda \right| > r_{\sigma}\left( A \right)$
esetén a $\left( {\lambda I - A} \right)x = b$ másodfajú egyenletnek
létezik egyetlen $x$ megoldása, mégpedig
$$x = \left( {\lambda I - A} \right)^{- 1}b = \left( {{\sum\limits_{k = 0}^{\infty}\lambda^{- k - 1}}A^{k}} \right)b = {\sum\limits_{k = 0}^{\infty}{\left( {\lambda^{- k - 1}A^{k}} \right)b}} = {\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}\left( {A^{k}b} \right)}},$$
ez a sor pedig $X$ normában konvergens. A sor összege így is írható:
$\frac{1}{\lambda}b + {\sum\limits_{k = 1}^{\infty}{\lambda^{- k - 1}A^{k}b}}$.
A fentiek még inkább érvényesek, ha
$\left| \lambda \right| > \left\| A \right\|$.

<div class="allitas">

Állítás:\
$r_{\sigma}\left( A \right) = \sup\left\{ {\left| \lambda \right|:\lambda \in A_{\text{spektrum}}} \right\}$.

</div>

### Példák, alkalmazások

#### A négyzetesen integrálható magú integráloperátorok.

Legyen $M \subset {\mathbb{R}}^{n}$ egy Lebesgue szerint mérhető halmaz,
$X: = L^{2}\left( M \right)$, ez ugye Hilbert tér. Legyen
$\mathcal{K} \in L^{2}\left( {M \times M} \right)$ az úgynevezett
magfüggvény, s $\phi \in L^{2}\left( M \right)$. Definiáljuk:
$\psi\left( x \right): = {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}}$.

<div class="allitas">

Állítás:\
$\psi \in L^{2}\left( M \right)$, továbbá a
$K\left( \phi \right): = \psi$ képlettel értelmezett
$\left. K:L^{2}\left( M \right)\rightarrow L^{2}\left( M \right) \right.$
operátor lineáris, korlátos. A $K$ operátort négyzetesen integrálató
magú integráloperátornak nevezzük.

</div>

<div class="bizonyitas">

Bizonyítás:\
A Cauchy-Schwarz egyenlőtlenség szerint majdnem minden $x$-re
$$\left| {\psi\left( x \right)} \right| \leq {\int_{M}{\left| {\mathcal{K}\left( {x,y} \right)} \right| \cdot \left| {\phi\left( y \right)} \right|dy \leq \left\{ {\int_{M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dy}} \right\}^{1/2} \cdot \left\{ {\int_{M}{\left| {\phi\left( y \right)} \right|^{2}dy}} \right\}^{1/2}}}.$$
Mivel
$\left. \mathcal{K} \in L^{2}\left( {M \times M} \right)\Rightarrow{\int_{M \times M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dxdy < \infty}} \right.$.
Fubini-tételt használva
$\int_M {\underbrace {\int_M {{{\left| {\mathcal{K}\left( {x,y} \right)} \right|}^2}dy} }_{{\text{véges m.m. }}x{\text{-re}}} dx} < \infty$,
így
$$\left| {\psi\left( x \right)} \right|^{2} \leq {\int_{M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dy}} \cdot \left\lbrack {\int_{M}{\left| {\phi\left( y \right)} \right|^{2}dy}} \right\rbrack < \infty.$$Integrálva:
$$\left. {\int_{M}{\left| {\psi\left( x \right)} \right|^{2}dx}} \leq \left\lbrack {\int_{M}{{\int_{M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dy}}dx}} \right\rbrack \cdot \left\lbrack {\int_{M}{\left| {\phi\left( y \right)} \right|^{2}dy}} \right\rbrack < \infty\Rightarrow\psi \in L^{2}\left( M \right). \right.$$$K$
linearitása triviális. $K$ korlátos, ugyanis
$$\left\| {K\phi} \right\|^{2}{}_{L^{2}{(M)}} = \left\| \psi \right\|^{2}{}_{L^{2}{(M)}} \leq \left\{ {\int_{M \times M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dxdy}} \right\} \cdot \left\| \phi \right\|^{2},$$
sőt:
$\left\| K \right\| \leq \left\{ {\int_{M \times M}{\left| {\mathcal{K}\left( {x,y} \right)} \right|^{2}dxdy}} \right\}^{1/2} = \left\| \mathcal{K} \right\|_{L^{2}{({M \times M})}}$.

</div>

**Következmény**:
$\left| \lambda \right| > \left\| \mathcal{K} \right\|_{L^{2}{({M \times M})}}$
esetén $\lambda$ reguláris érték. Tudjuk, hogy
$\left| \lambda \right| > r_{\sigma}\left( K \right)$ esetén $\lambda$
reguláris érték és
$\left( {\lambda I - K} \right)^{- 1} = {\sum\limits_{k = 0}^{\infty}{\lambda^{- 1 - k}K^{k}}}$.

**Kérdés**: $K$ integrál operátor hatványai hogyan számolhatók?

<div class="allitas">

Állítás:\
Legyen $\mathcal{K},\mathcal{L} \in L^{2}\left( {M \times M} \right)$ és
$K,L$ a megfelelő integráloperátorok. Ekkor $P: = KL$ szintén
négyzetesen integrálható magú operátor, amelynek magfüggvénye
$\mathcal{P}\left( {x,y} \right): = {\int_{M}{\mathcal{K}\left( {x,t} \right)\mathcal{L}\left( {t,y} \right)dt}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\phi \in L^{2}\left( M \right)$ esetén $$\begin{aligned}
  \left( {P\phi } \right)\left( x \right) = \left[ {K\left( {L\phi } \right)} \right]\left( x \right) &  = \int_M {\mathcal{K}\left( {x,t} \right)\left[ {\int_M {\mathcal{L}\left( {t,y} \right)\phi \left( y \right)dy} } \right]dt}  \\ 
   &  = \int_M {\underbrace {\left[ {\int_M {\mathcal{K}\left( {x,t} \right)\mathcal{L}\left( {t,y} \right)dt} } \right]}_{\mathcal{P}\left( {x,y} \right)}\phi \left( y \right)dy} , \\ 
\end{aligned} $$ ahol a Fubini-tételt ismét alkalmaztuk.
$\mathcal{P} \in L^{2}\left( {M \times M} \right)$, merthogy
$\left| {\mathcal{P}\left( {x,y} \right)} \right| \leq \left\{ {\int_{M}{\left| {\mathcal{K}\left( {x,t} \right)} \right|^{2}dt}} \right\}^{1/2}\left\{ {\int_{M}{\left| {\mathcal{L}\left( {t,y} \right)} \right|^{2}dy}} \right\}^{1/2}$,
így integrálva:
$$\int_{M \times M} {{{\left| {\mathcal{P}\left( {x,y} \right)} \right|}^2}dxdy}  \leqslant \underbrace {\int_M {\left[ {\int_M {{{\left| {\mathcal{K}\left( {x,t} \right)} \right|}^2}dt} } \right]dx} }_{ < \infty } \cdot \underbrace {\int_M {\left[ {\int_M {{{\left| {\mathcal{L}\left( {x,t} \right)} \right|}^2}dt} } \right]dy} }_{ < \infty } < \infty .$$

</div>

**Következmény**:
$\left( {K^{j}\phi} \right)\left( x \right) = {\int_{M}{\mathcal{K}_{j}\left( {x,y} \right)\phi\left( y \right)dy}}$,
$j = 1,2,...$, ahol $$\begin{aligned}
  {\mathcal{K}_1}\left( {x,y} \right) & : = \mathcal{K}\left( {x,y} \right) \\ 
  {\mathcal{K}_2}\left( {x,y} \right) & : = \int_M {\mathcal{K}\left( {x,t} \right){\mathcal{K}_1}\left( {t,y} \right)dt}  \\ 
  {\mathcal{K}_j}\left( {x,y} \right) & : = \int_M {\mathcal{K}\left( {x,t} \right){\mathcal{K}_{j - 1}}\left( {t,y} \right)dt} . \\ 
\end{aligned} $$ Ebből következik, hogy
$\left( {\lambda I - K} \right)^{- 1}b = {\sum\limits_{j = 0}^{\infty}{\lambda^{- j - 1}K^{j}b}}$.
$$\begin{aligned}
  \left[ {{{\left( {\lambda I - K} \right)}^{ - 1}}b} \right]\left( x \right) &  = \left[ {\mathop \sum \limits_{j = 0}^\infty  {\lambda ^{ - j - 1}}{K^j}b} \right]\left( x \right) \\ 
   &  = \mathop \sum \limits_{j = 0}^\infty  {\lambda ^{ - j - 1}}\left( {{K^j}b} \right)\left( x \right) \\ 
   &  = \frac{{b\left( x \right)}}{\lambda } + \mathop \sum \limits_{j = 1}^\infty  {\lambda ^{ - j - 1}}\int_M {{\mathcal{K}_j}\left( {x,y} \right)b\left( y \right)dy}  \\ 
   & \mathop  = \limits^? \frac{{b\left( x \right)}}{\lambda } + \int_M {\underbrace {\left[ {\mathop \sum \limits_{j = 1}^\infty  {\lambda ^{ - j - 1}}{\mathcal{K}_j}\left( {x,y} \right)} \right]}_{ \in {L^2}\left( {M \times M} \right)}b\left( y \right)dy} . \\ 
\end{aligned} $$ A sor $L^{2}\left( M \right)$ normában konvergál. Az
utolsó egyenlőséget a következő órán látjuk be.

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

A korábbiak szerint $\left( {\lambda I - A} \right)x = b$ egyenletnek
van egyértelmű megoldása $x$-re és
$x = {\sum\limits_{k = 0}^{\infty}{\lambda^{- k - 1}\left( {A^{k}b} \right)}}$,
ha $\lambda$ reguláris érték, ugyanis ekkor a jobb oldal konvergens
$X \ni x$-ben.

Az előző példában $X: = L^{2}\left( M \right)$ volt, (ahol
$M \subset {\mathbb{R}}^{n}$ mérhető halmaz,) illetve
$\mathcal{K} \in L^{2}\left( {M \times M} \right)$ , és
$$\psi\left( x \right): = \left( {K\phi} \right)\left( x \right) = {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}},$$
ahol
$\left. K:L^{2}\left( M \right)\rightarrow L^{2}\left( M \right) \right.$
korlátos lineáris operátor és
$r_{\sigma}\left( K \right) \leq \left\| K \right\| \leq \left\| \mathcal{K} \right\|_{L^{2}{({M \times M})}}$.

$\left( {\lambda I - K} \right)\phi = b$, $b \in L^{2}\left( M \right)$
adott esetén mi a megoldás $\phi \in L^{2}\left( M \right)$-re? Az
egyenlet ekvivalens:
$\lambda\phi\left( x \right) - {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}} = b\left( x \right)$
majdnem minden $x \in M$-re. Ha
$\left. \left| \lambda \right| > r_{\sigma}\left( K \right)\Rightarrow\phi = {\sum\limits_{j = 0}^{\infty}{\lambda^{- j - 1}K^{j}b}} = \frac{b}{\lambda} + {\sum\limits_{j = 1}^{\infty}{\lambda^{- j - 1}K^{j}b}} \right.$.
$\left( {K^{j}b} \right)\left( x \right) = {\int_{M}{\mathcal{K}_{j}\left( {x,y} \right)b\left( y \right)dy}}$,
$\mathcal{K}_{j}\left( {x,y} \right) = {\int_{M}{\mathcal{K}_{j - 1}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt}}$
és $\mathcal{K}_{1} = \mathcal{K}$. Így
$$\phi \left( x \right) = \frac{{b\left( x \right)}}{x} + \mathop \sum \limits_{j = 1}^\infty  {\lambda ^{ - j - 1}}\mathop \smallint \limits_M {\mathcal{K}_j}\left( {x,y} \right)b\left( y \right)dy = \frac{{b\left( x \right)}}{\lambda } + \int_M {\underbrace {\left[ {\mathop \sum \limits_{j = 1}^\infty  {\lambda ^{ - j - 1}}{\mathcal{K}_j}\left( {x,y} \right)} \right]}_{\substack{{R_\lambda }\left( {x,y} \right) \in {L^2}\left( {M \times M} \right) \\ {\text{ rezolv. op. magfgve}}}}b\left( y \right)dy} .$$
A sor $L^{2}\left( {M \times M} \right)$-ben konvergens, ha
$\left| \lambda \right| > r_{\sigma}\left( \mathcal{K} \right)$.

A bizonyítás alapja:
$\left. \mathcal{K}_{j}\left( {x,y} \right) = {\int_{M}{\mathcal{K}_{j - 1}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt}}\Rightarrow K^{j - 1} \right.$
operátor alkalmazva
$\left. t\mapsto\mathcal{K}\left( {t,y} \right) \right.$ függvényre ($y$
rögzített): $$\begin{gathered}
  {\left\{ {\int_M {{{\left| {{\mathcal{K}_j}\left( {x,y} \right)} \right|}^2}dx} } \right\}^{1/2}} \leqslant \left\| {{\mathcal{K}^{j - 1}}} \right\|{\left\{ {\int_M {{{\left| {\mathcal{K}\left( {t,y} \right)} \right|}^2}dt} } \right\}^{1/2}} \\ 
   \Downarrow  \\ 
  \int_M {{{\left| {{\mathcal{K}_j}\left( {x,y} \right)} \right|}^2}dx}  \leqslant {\left\| {{K^{j - 1}}} \right\|^2}\int_M {{{\left| {\mathcal{K}\left( {t,y} \right)} \right|}^2}dt} . \\ 
\end{gathered} $$ Integrálva $y$ szerint:
$${\int_{M \times M}{\left| {\mathcal{K}_{j}\left( {x,y} \right)} \right|^{2}dxdy}} \leq \left\| K^{j - 1} \right\|^{2}{\int_{M \times M}{\left| {\mathcal{K}\left( {t,y} \right)} \right|^{2}dtdy}}.$$
Nézzük:
$$\int_{M \times M} {\frac{1}{{{{\left| \lambda  \right|}^{2\left( {j + 1} \right)}}}}{{\left| {{K_j}\left( {x,y} \right)} \right|}^2}dxdy}  \leqslant \underbrace {\frac{1}{{\left| {{\lambda ^{2\left( {j + 1} \right)}}} \right|}}{{\left\| {{K^{j - 1}}} \right\|}^2}}_{\sum\limits_{j = 1}^\infty  {{\text{ sor konv}}{\text{. ha }}\left| \lambda  \right| > {r_\sigma }\left( K \right)} } \cdot \left\| K \right\|_{{L^2}\left( {M \times M} \right)}^2,$$így
a bal oldalból képzett számsor (ami $\geq 0$) is konvergens.

#### Folytonos magú integráloperátorok.

Legyen $\Omega \subset {\mathbb{R}}^{n}$ korlátos tartomány (azaz nyílt
és összefüggő), $X: = C\left( \overline{\Omega} \right)$,
$\left. \overline{\Omega}\rightarrow{\mathbb{K}} \right.$ folytonos
függvények (a felülvonás a lezárást jelenti), tehát
$C\left( \overline{\Omega} \right)$ az $\Omega$ korlátos tartomány
lezárásán értelmezett folytonos függvények tere a
$\left\| \phi \right\| = \sup\limits_{\Omega}\left| \phi \right|$
normával. Legyen
$\mathcal{K} \in C\left( {\overline{\Omega} \times \overline{\Omega}} \right)$,
$\psi\left( x \right): = \left( {K\phi} \right)\left( x \right): = {\int_{\overline{\Omega}}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)}}dy$.

<div class="allitas">

Állítás:\
$\left. K:C\left( \overline{\Omega} \right)\rightarrow C\left( \overline{\Omega} \right) \right.$
korlátos, lineáris operátor.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\left| {\psi\left( x \right)} \right| = \left| {\int_{\overline{\Omega}}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}} \right| \leq {\int_{\overline{\Omega}}{\left| {\mathcal{K}\left( {x,y} \right)} \right| \cdot \left| {\phi\left( y \right)} \right|dy}} \leq \left\| \phi \right\|{\int_{\overline{\Omega}}{\left| {\mathcal{K}\left( {x,y} \right)} \right|dy}} \leq \left\| \phi \right\|\sup\limits_{x \in \overline{\Omega}}{\int_{\overline{\Omega}}{\left| {\mathcal{K}\left( {x,y} \right)} \right|dy}}$.
Itt is igaz:
$\left( {K^{j}\phi} \right)\left( x \right) = {\int_{\overline{\Omega}}{\mathcal{K}_{j}\left( {x,y} \right)\phi\left( y \right)dy}}$.
$\mathcal{K}_{j}\left( {x,y} \right) = {\int_{\overline{\Omega}}{\mathcal{K}_{j - 1}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt}}$,
$K_{j}$ folytonos.

</div>

#### Egy speciális eset

Az előbbi spec esete:
$\overline{\Omega} = \left\lbrack {a,b} \right\rbrack \subset {\mathbb{R}}$,
ekkor
$\mathcal{K} \in C\left( {\left\lbrack {a,b} \right\rbrack \times \left\lbrack {a,b} \right\rbrack} \right)$,
továbbá $\mathcal{K}\left( {x,y} \right) = 0$, ha $y > x$.
$\left( {K\phi} \right)\left( x \right): = {\int\limits_{a}^{b}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}} = {\int\limits_{a}^{x}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}}$
Voltera típusú operátor. Erre is igaz, hogy
$\left. \mathcal{K}:C\left\lbrack {a,b} \right\rbrack\rightarrow C\left\lbrack {a,b} \right\rbrack \right.$
folytonos lineáris operátor.

<div class="allitas">

Állítás:\
$r_{\sigma}\left( K \right) = 0$, így $\lambda \neq 0$ esetén $\lambda$
reguláris érték, azaz létezik egyértelmű megoldása a
$\lambda\phi\left( x \right) - {\int\limits_{a}^{x}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}} = b\left( x \right)$
másodfajú egyenletlnek bármely folytonos $b\left( x \right)$ esetén.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\mathcal{K}_{j}\left( {x,y} \right) = {\int\limits_{a}^{b}{\mathcal{K}_{j - 1}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt}}$,
speciálisan
$${\mathcal{K}_2}\left( {x,y} \right) = \int\limits_a^b {\underbrace {\mathcal{K}\left( {x,t} \right)}_{0{\text{\;ha\;}}t > x}\underbrace {\mathcal{K}\left( {t,y} \right)}_{0{\text{\;ha\;}}y > t}dt}  = \int\limits_y^x {\mathcal{K}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt},$$
mert csak $y \leq t \leq x$ esetén nem 0 az integrandus. Így
$\mathcal{K}_{2}\left( {x,y} \right) = 0$, ha $y > x$.
$\mathcal{K}_{3}\left( {x,y} \right) = {\int\limits_{y}^{x}{\mathcal{K}_{2}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt}} = 0$
ha $y > x$. Ekkor
$\left\| K \right\| \leq \sup\limits_{x \in {\lbrack{a,b}\rbrack}}{\int\limits_{a}^{b}{\left| {\mathcal{K}\left( {x,y} \right)} \right|dy}} \leq \alpha\left( {b - a} \right)$,
ugyanis
$\left. \mathcal{K} \in C\left( {\left\lbrack {a,b} \right\rbrack \times \left\lbrack {a,b} \right\rbrack} \right)\Rightarrow\mathcal{K} \right.$
korlátos és így
$\left| {\mathcal{K}\left( {x,y} \right)} \right| \leq \alpha,\quad\forall x,y \in \left\lbrack {a,b} \right\rbrack$.

</div>

$\left\| K^{2} \right\| \leq \sup\limits_{x \in {\lbrack{a,b}\rbrack}}{\int\limits_{a}^{b}{\left| {\mathcal{K}_{2}\left( {x,y} \right)} \right|dy}} = \sup\limits_{x \in {\lbrack{a,b}\rbrack}}{\int\limits_{a}^{x}{\left| {\mathcal{K}_{2}\left( {x,y} \right)} \right|dy}}$.
Az integrandusra
$$\left| {{\mathcal{K}_2}\left( {x,y} \right)} \right| = \left| {\int\limits_y^x {\mathcal{K}\left( {x,t} \right)\mathcal{K}\left( {t,y} \right)dt} } \right| \leqslant \int\limits_y^x {\underbrace {\left| {\mathcal{K}\left( {x,t} \right)} \right|}_{ < \alpha }\underbrace {\left| {\mathcal{K}\left( {t,y} \right)} \right|}_{ \leqslant \alpha }dt}  \leqslant {\alpha ^2}\left( {x - y} \right),$$
ha $x > y$. Így $$\begin{aligned}
  \left\| {{K^2}} \right\| &  \leqslant \mathop {\sup }\limits_{x \in \left[ {a,b} \right]} \int\limits_a^x {\left| {{\mathcal{K}_2}\left( {x,y} \right)} \right|dy}  \\ 
   &  \leqslant \mathop {\sup }\limits_{x \in \left[ {a,b} \right]} \int\limits_a^x {{\alpha ^2}\left( {x - y} \right)dy}  \\ 
   &  = {\alpha ^2}\mathop {\sup }\limits_{x \in \left[ {a,b} \right]} \left[ { - \frac{{{{\left( {x - y} \right)}^2}}}{2}} \right]_{y = a}^x \\ 
   &  = {\alpha ^2}\mathop {\sup }\limits_{x \in \left[ {a,b} \right]} \frac{{{{\left( {x - a} \right)}^2}}}{2} = {\alpha ^2}\frac{{{{\left( {b - a} \right)}^2}}}{2}. \\ 
\end{aligned} $$

$\left\| K^{3} \right\|$-re hasonló módon járunk el. Ekkor
$$\left| {{\mathcal{K}_3}\left( {x,y} \right)} \right| = \left| {\int\limits_y^x {\mathcal{K}\left( {x,t} \right){\mathcal{K}_2}\left( {t,y} \right)dt} } \right| \leqslant \int\limits_y^x {\underbrace {\left| {\mathcal{K}\left( {x,t} \right)} \right|}_{ \leqslant \alpha }\underbrace {\left| {{\mathcal{K}_2}\left( {t,y} \right)} \right|}_{ \leqslant {\alpha ^2}\left( {t - y} \right)}dt}  \leqslant {\alpha ^3}\frac{{{{\left( {x - y} \right)}^2}}}{2}.$$
Így
$\left\| K^{3} \right\| \leq \sup\limits_{x \in {\lbrack{a,b}\rbrack}}{\int\limits_{a}^{x}{\left| {\mathcal{K}_{3}\left( {x,y} \right)} \right|dy}} \leq \sup\limits_{x \in {\lbrack{a,b}\rbrack}}{\int\limits_{a}^{x}{\alpha^{3}\frac{\left( {x - y} \right)^{2}}{2}dy}} = \alpha^{3}\sup\limits_{x \in {\lbrack{a,b}\rbrack}}\frac{\left( {x - a} \right)^{3}}{3!} \leq \alpha^{3}\frac{\left( {b - a} \right)^{3}}{3!}$.
Teljes indukcióval bizonyítható, hogy
$\left. \left\| K^{j} \right\| \leq \alpha^{j}\frac{\left( {b - a} \right)^{j}}{j!}\Rightarrow\left\| K^{j} \right\|^{1/j} = \alpha\frac{b - a}{\left( {j!} \right)^{1/j}}\rightarrow 0 \right.$,
ha $\left. j\rightarrow\infty \right.$.

Hilbert tér operátorai
======================

Az adjungált operátor
---------------------

Legyen $X$ Hilbert tér, $\left. A:D_{A}\rightarrow X \right.$ lineáris
operátor, ahol $D_{A}$ az $A$-nak az értelmezési tartománya,
$D_{A} \subset X$, $y \in X$ elem.

**Kérdés**: létezik-e illetve hány $y^{*} \in X$ létezik, melyre
$\left\langle {Ax,y} \right\rangle = \left\langle {x,y^{*}} \right\rangle$,
$\forall x \in D_{A}$ esetén? Mi az egyértelműség feltétele?

<div class="allitas">

Állítás:\
Legfeljebb egy $y^{*}$ létezik
$\left. \Leftrightarrow\overline{D_{A}} = X \right.$, vagyis ha az
értelmezési tartomány sűrű $X$-ben.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legfeljebb egy $y^{*}$ létezik $\Leftrightarrow$ hogy ha
$\left\langle {x,y^{*}} \right\rangle = \left\langle {x,\widetilde{y}} \right\rangle$,
$\forall x \in D_{A}$-ból következik, hogy $y^{*} = \widetilde{y}$.
$\left\langle {x,y^{*}} \right\rangle = \left\langle {x,\widetilde{y}} \right\rangle$,
$\forall x \in D_{A}$ pontosan azt jelenti, hogy
$\left\langle {x,y^{*} - \widetilde{y}} \right\rangle = 0$,
$\forall x \in D_{A}$. Ebből következik:
$\left. y^{*} = \widetilde{y}\Leftrightarrow\overline{D_{A}} = X \right.$.
(Felhasználjuk, hogy a skalárszorzat folytonosan függ a tényezőktől.)

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, $\left. A:D_{A}\rightarrow X \right.$ lineáris
operátor, $\overline{D_{A}} = X$. Ekkor $A$ operátor adjungáltját,
$A^{*}$ operátort így értelmezzük:
$$D_{A^{*}}: = \left\{ {y \in X:\exists y^{*} \in X:\left\langle {Ax,y} \right\rangle = \left\langle {x,y^{*}} \right\rangle\ \forall x \in D_{A}} \right\}$$
és $A^{*}\left( y \right): = y^{*}$.

</div>

<div class="megj">

Megjegyzés:\
$0 \in D_{A^{*}}$, ugyanis
$\left\langle {Ax,0} \right\rangle = \left\langle {x,0} \right\rangle = 0$,
$\forall x \in D_{A}$.

</div>

<div class="allitas">

Állítás:\
$A^{*}$ lineáris operátor.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $y_{1},y_{2} \in D_{A^{*}}$! Ekkor
$\left\langle {Ax,y_{1}} \right\rangle = \left\langle {x,A^{*}\left( y_{1} \right)} \right\rangle$,
$\forall x \in D_{A}$ és
$\left\langle {Ax,y_{2}} \right\rangle = \left\langle {x,A^{*}\left( y_{2} \right)} \right\rangle$,
$\forall x \in D_{A}$. Így
$\left\langle {Ax,y_{1}} \right\rangle + \left\langle {Ax,y_{2}} \right\rangle = \left\langle {x,A^{*}\left( y_{1} \right)} \right\rangle + \left\langle {x,A^{*}\left( y_{2} \right)} \right\rangle$.
$\left\langle {Ax,y_{1} + y_{2}} \right\rangle = \left\langle {x,A^{*}\left( y_{1} \right) + A^{*}\left( y_{2} \right)} \right\rangle$,
$\forall x \in D_{A}$. Ebből következik, hogy
$A^{*}\left( {y_{1} + y_{2}} \right) = A^{*}\left( y_{1} \right) + A^{*}\left( y_{2} \right)$.
Hasonlóan igazolható
$A^{*}\left( {\lambda g} \right) = \lambda A^{*}\left( g \right)$.

</div>

<div class="tetel">

Tétel:\
Legyen $\left. A:X\rightarrow X \right.$ korlátos lineáris operátor.
Ekkor $\left. A^{*}:X\rightarrow X \right.$ korlátos lineáris operátor
és $\left\| A^{*} \right\| = \left\| A \right\|$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tekintsünk tetszőleges, rögzített $y \in X$ elemet! Ekkor
$f\left( x \right): = \left\langle {Ax,y} \right\rangle$, $f$ lineáris
funkcionál korlátos is:
$\left| {f\left( x \right)} \right| = \left| \left\langle {Ax,y} \right\rangle \right| \leq \left\| {Ax} \right\| \cdot \left\| y \right\| \leq \left\| A \right\| \cdot \left\| x \right\| \cdot \left\| y \right\| = \left( {\left\| A \right\|\left\| y \right\|} \right) \cdot \left\| x \right\|$,
így
$\left\| f \right\| \leq \left\| A \right\| \cdot \left\| y \right\|$. A
Riesz-tételből most következik, hogy
$\exists!y^{*} \in X:f\left( x \right) = \left\langle {x,y^{*}} \right\rangle$,
azaz
$\left\langle {Ax,y} \right\rangle = \left\langle {x,y^{*}} \right\rangle$,
$\forall x \in X$-re. Így $D_{A^{*}} = X$, $A^{*}y = y^{*}$. Továbbá
$\left\| {A^{*}y} \right\| = \left\| y^{*} \right\| = \left\| f \right\| \leq \left\| A \right\| \cdot \left\| y \right\|$,
ezért $A^{*}$ korlátos és
$\left\| A^{*} \right\| \leq \left\| A \right\|$. Az egyenlőség abból
fog következni, hogy
$\left. \left( A^{*} \right)^{*} = A\Rightarrow\left\| A \right\| = \left\| \left( A^{*} \right)^{*} \right\| \leq \left\| A^{*} \right\| \right.$.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Legyen $\left. A:X\rightarrow X \right.$ korlátos lineáris operátor!
Láttuk már, hogy $\left. A^{*}:X\rightarrow X \right.$ operátor korlátos
és lineáris, és $\left\| A^{*} \right\| \leq \left\| A \right\|$.

<div class="tetel">

Tétel:\
Legyenek $\left. A,B:X\rightarrow X \right.$ korlátos lineáris operátor!
Ekkor

1.  $\left( {A + B} \right)^{*} = A^{*} + B^{*}$
2.  $\left( {\lambda A} \right)^{*} = \overline{\lambda}A^{*}$
3.  $\left( A^{*} \right)^{*} = A$
4.  $I = I^{*}$, $0^{*} = 0$
5.  $\left( {AB} \right)^{*} = B^{*}A^{*}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyenek $x,y \in X$ !

1.  $\left\langle {\left( {A + B} \right)x,y} \right\rangle = \left\langle {Ax + Bx,y} \right\rangle = \left\langle {Ax,y} \right\rangle + \left\langle {Bx,y} \right\rangle = \left\langle {x,A^{*}y} \right\rangle + \left\langle {x,B^{*}y} \right\rangle =$
    $= \left\langle {x,A^{*}y + B^{*}y} \right\rangle = \left\langle {x,\left( {A^{*} + B^{*}} \right)y} \right\rangle$
2.  $\left\langle {Ax,y} \right\rangle = \left\langle {x,A^{*}y} \right\rangle = \overline{\left\langle {A^{*}y,x} \right\rangle} = \overline{\left\langle {y,\left( A^{*} \right)^{*}x} \right\rangle} = \left\langle {\left( A^{*} \right)^{*}x,y} \right\rangle$,tehát
    $Ax = \left( A^{*} \right)^{*}x$,
    $\left. \forall x \in X\Rightarrow A = \left( A^{*} \right)^{*} \right.$,így
    $\left\| A^{*} \right\| \leq \left\| \left( A^{*} \right)^{*} \right\| = \left\| A \right\|$,így
    az előző tétellel együtt:
    $\left\| A \right\| = \left\| A^{*} \right\|$.
3.  $\left\langle {x,\left( {AB} \right)^{*}y} \right\rangle = \left\langle {ABx,y} \right\rangle = \left\langle {Bx,A^{*}y} \right\rangle = \left\langle {x,B^{*}A^{*}y} \right\rangle$

</div>

<div class="megj">

Megjegyzés:\
Mi a helyezet a lineáris operátorok esetén (ha nem korlátos)?
$D_{A},D_{B} \subset X$, $\overline{D_{A}} = \overline{D_{B}} = X$.

</div>

Jelölés: ha $A^{*}x = Ax$, $\forall x \in D_{A}$,
$D_{A} \subset D_{A^{*}}$, akkor $A^{*}$ kiterjesztése $A$-nak s ezt így
jelöljük: $A \subset A^{*}$. Ezzel a jelöléssel:
$\left( {A + B} \right)^{*} \supset A^{*} + B^{*}$ és
$D_{A^{*} + B^{*}} = D_{A^{*}} \cap D_{B^{*}}$. Ugyanis
$\forall y \in \left( {D_{A^{*}} \cap D_{B^{*}}} \right)$ esetén
$\left\langle {\left( {A + B} \right)x,y} \right\rangle = \left\langle {x,\left( {A^{*} + B^{*}} \right)y} \right\rangle$,
$\forall x \in \left( {D_{A} \cap D_{B}} \right)$.\
Továbbá $\left( {\lambda A} \right)^{*} = \overline{\lambda}A^{*}$,
$\left( {AB} \right)^{*} \supset B^{*}A^{*}$,
$\left( A^{*} \right)^{*} \supset A$ és 1
$\left. A \subset B\Rightarrow A^{*} \supset B^{*} \right.$.

<div class="pelda">

Példák:\
$X: = {\mathbb{K}}^{n}$. Tudjuk, hogy ekkor minden lineáris operátor
korlátos. $\left. A:{\mathbb{K}}^{n}\rightarrow{\mathbb{K}}^{n} \right.$
lineáris korlátos operátor. Tudjuk, hogy $A$ reprezentálható egy
$\mathcal{A}$ (valós vagy komplex elemekből alkotott), $n \times n$-es
mátrixszal úgy, hogy $\mathcal{A}x = Ax$. Ekkor
$\left. A^{*}:{\mathbb{K}}^{n}\rightarrow{\mathbb{K}}^{n} \right.$
korlátos lineáris operátor. Kérdés: mi a lesz ennek a mátrixa?
$$\mathcal{A} = \left( \begin{array}{lll}
a_{11} & \cdots & a_{1n} \\
 \vdots & \ddots & \vdots \\
a_{n1} & \cdots & a_{nn} \\
\end{array} \right)\text{,\quad}a_{jk} \in {\mathbb{K}}$$ Ekkor
$x,y \in {\mathbb{K}}^{n}$ esetén
$\left\langle {\mathcal{A}x,y} \right\rangle = {\sum\limits_{j = 1}^{n}{\left\lbrack {\sum\limits_{k = 1}^{n}{a_{jk}x_{k}}} \right\rbrack\overline{y_{j}}}} = {\sum\limits_{k = 1}^{n}x_{k}}\left\lbrack {\sum\limits_{j = 1}^{n}{a_{jk}\overline{y_{j}}}} \right\rbrack = {\sum\limits_{k = 1}^{n}{x_{k}\overline{\left\lbrack {\underset{j=1}{\overset{n}{\sum}}{\overline{a_{jk}}y_{j}}} \right\rbrack}}} = {\sum\limits_{k = 1}^{n}{x_{k}\overline{\left\lbrack {\underset{j=1}{\overset{n}{\sum}}{a_{kj}^{*}y_{j}}} \right\rbrack} = \left\langle {x,\mathcal{A}^{*}y} \right\rangle}}$,
vagyis $a_{kj}^{*} = \overline{a_{jk}}$, vagyis
$\mathcal{A}^{*} = \left( \begin{array}{lll}
a_{11}^{*} & \cdots & a_{1n}^{*} \\
 \vdots & \ddots & \vdots \\
a_{n1}^{*} & \cdots & a_{nn}^{*} \\
\end{array} \right) = \left( \begin{array}{lll}
\overline{a_{11}} & \cdots & \overline{a_{n1}} \\
 \vdots & \ddots & \vdots \\
\overline{a_{1n}} & \cdots & \overline{a_{nn}} \\
\end{array} \right)$.

</div>

### **Négyzetesen integrálható magú integrál operátorok valós vagy komplex függvényeken**

Legyen $X: = L^{2}\left( M \right),M \subset {\mathbb{R}}^{n}$ mérhető
halmaz és
$$\mathcal{K} \in L^{2}\left( {M \times M} \right),\quad\left( {K\phi} \right)\left( x \right): = {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}}.$$
Tudjuk, hogy
$\left. K:L^{2}\left( M \right)\rightarrow L^{2}\left( M \right) \right.$
lineáris operátor, node mi $K^{*}$? Legyen
$\phi,\psi \in L^{2}\left( M \right)$, ekkor $$\begin{aligned}
  \left\langle {K\phi ,\psi } \right\rangle  &  = \int_M {\left( {K\phi } \right)\left( x \right)\overline {\psi \left( x \right)} dx}  \\ 
   &  = \int_M {\left[ {\int_M {\mathcal{K}\left( {x,y} \right)\phi \left( y \right)dy} } \right]\overline {\psi \left( x \right)} dx}  \\ 
  {\text{(Fubini) }} &  = \int_M {\phi \left( y \right)\left[ {\int_M {\mathcal{K}\left( {x,y} \right)\overline {\psi \left( x \right)} dx} } \right]dy}  \\ 
   &  = \int_M {\phi \left( y \right)\overline {\left[ {\int_M {\overline {\mathcal{K}\left( {x,y} \right)} \psi \left( x \right)dx} } \right]} dy}  \\ 
  {\text{(}}x \leftrightarrow y{\text{ csere) }} &  = \int_M {\phi \left( x \right)\left[ {\overline {\int_M {\underbrace {\overline {\mathcal{K}\left( {y,x} \right)} }_{: = {\mathcal{K}^*}\left( {x,y} \right)}\psi \left( y \right)dy} } } \right]dx}  \\ 
   &  = \int_M {\phi \left( x \right)\left[ {\overline {\int_M {{\mathcal{K}^*}\left( {x,y} \right)\psi \left( y \right)dx} } } \right]dy} . \\ 
\end{aligned} $$ A bevezetett jelöléssel összhangban
$\left( {K^{*}\psi} \right)\left( x \right): = {\int_{M}{\mathcal{K}^{*}\left( {x,y} \right)\psi\left( y \right)dy}}$,
így az korábbiakkal együtt:
$\left\langle {K\phi,\psi} \right\rangle = {\int_{M}{\phi\left( x \right)\overline{\left( {K^{*}\psi} \right)\left( x \right)}dx}} = \left\langle {\phi,K^{*}\psi} \right\rangle$.

<div class="allitas">

Állítás:\
Tetszőleges $A$ lineáris operátor esetén (melyre $D_{A} \subset X$,
$\overline{D_{A}} = X$) $A^{*}$ zárt operátor.

</div>

<div class="bizonyitas">

Bizonyítás:\
Azt kellene belátni, hogy ha $y_{j} \in D_{A^{*}}$,
$\left. \left( y_{j} \right)_{j \in {\mathbb{N}}}\rightarrow y \right.$
$X$-ben, továbbá
$\left. \left( {A^{*}y_{j}} \right)\rightarrow z \right.$ $X$-ben
$\left. \Rightarrow y \in D_{A^{*}} \right.$ és $A^{*}y = z$. Tudtuk,
hogy
$\left\langle {Ax,y_{j}} \right\rangle = \left\langle {x,A^{*}y_{j}} \right\rangle$,
$\forall x \in D_{A},\forall j$, így $\left. j\rightarrow\infty \right.$
esetén
$\left\langle {Ax,y} \right\rangle = \left\langle {x,z} \right\rangle$,
$\forall x \in D_{A}$. Ez azt jelenti, hogy $y \in D_{A^{*}}$ és
$z = A^{*}y$.

</div>

<div class="tetel">

Tétel:\
Legyen $X$ Hilbert tér, $\left. A:X\rightarrow X \right.$ korlátos
lineáris operátor és $\lambda \in {\mathbb{K}}$. Ekkor
${\overline{R_{({\lambda I-A})}}}^{\bot} = S_{\overline{\lambda}}\left( A^{*} \right): = \left\{ {x \in X:\left( {\overline{\lambda}I - A^{*}} \right)x = 0} \right\}$,
ahol $R$ az értékkészletet jelöli.

</div>

<div class="bizonyitas">

Bizonyítás:\
Világos, hogy $R_{({\lambda I - A})}$ lineáris altér, ezért
$\overline{R_{({\lambda I-A})}}$ zárt altér. Másrészt
$S_{\overline{\lambda}}\left( A^{*} \right)$ is zárt altér. Az
$S_{\overline{\lambda}}\left( A^{*} \right)$ halmaz azért zárt, mert
$A^{*}$ folytonos lineáris operátor.

-   Először tfh $y \in {\overline{R_{\lambda I-A}}}^{\bot}$, ekkor
    $0 = \left\langle {\underbrace {\left( {\lambda I - A} \right)x}_{ \in {R_{\lambda I - A}} \subset \overline {{R_{\lambda I - A}}} },y} \right\rangle = \left\langle {x,{{\left( {\lambda I - A} \right)}^ * }y} \right\rangle$,
    ez igaz
    $\forall x \in X \Rightarrow \underbrace {{{\left( {\lambda I - A} \right)}^ * }}_{ = \bar \lambda I - {A^ * }}y = 0$,
    vagyis $y \in S_{\overline{\lambda}}\left( A^{*} \right)$.
-   tfh $y \in S_{\overline{\lambda}}\left( A^{*} \right)$,azaz
    $\left( {\overline{\lambda}I - A^{*}} \right)y = 0$,
    $\forall x \in X$,így
    $\left\langle {\left( {\lambda I - A} \right)x,y} \right\rangle = \left\langle {x,\left( {\lambda I - A} \right)^{*}y} \right\rangle = 0$,vagyis
    $y\bot R_{\lambda I - A}$ minden elemére
    $\left. \Rightarrow y\bot\overline{R_{\lambda I-A}} \right.$ minden
    elemére.

</div>

<div class="megj">

Megjegyzés:\
Spec eset, mikor $R_{\lambda I - A}$ zárt halmaz, azaz
$R_{\lambda I - A} = \overline{R_{\lambda I-A}}$. Ekkor a fenti tételből
következik: $\left( {\lambda I - A} \right)x = b$ másodfajú egyenletnek
létezik $x \in X$ megoldása pontosan akkor, ha
$b \in R_{\lambda I - A} = S_{\overline{\lambda}}\left( A^{*} \right)^{\bot}$,
azaz $\left\langle {b,y} \right\rangle = 0$ a
$\left( {\lambda I - A} \right)^{*}y = 0$ egyenlet $\forall y \in X$
megoldására. Később látni fogjuk, hogy ha $A$ ún. kompakt lineáris
operátor, akkor $\lambda \neq 0$ esetén az $R_{\lambda I - A}$ zárt
halmaz.

</div>

### Szimmetrikus és önadjungált operátorok

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, $D_{A} \subset X$ és $\overline{D_{A}} = X$ és
$\left. A:D_{A}\rightarrow X \right.$ lineáris operátor. Ekkor $A$-t
önadjungáltnak nevezzük, ha $A^{*} = A$ (ekkor ugyanott vannak
értelmezve, $D_{A^{*}} = D_{A}$).

</div>

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér, $D_{A} \subset X$ és $\overline{D_{A}} = X$ és
$\left. A:D_{A}\rightarrow X \right.$ lineáris operátor. Ekkor $A$-t
szimmetrikusnak nevezzük, ha $A \subset A^{*}$. Tehát minden önadjungált
operátor egyúttal szimmetrikus is.

</div>

<div class="megj">

Megjegyzés:\
Ekvivalens definíció: $A$ szimmetrikus, ha
$\left\langle {Ax,y} \right\rangle = \left\langle {x,Ay} \right\rangle$,
$\forall x,y \in D_{A}$.

</div>

<div class="pelda">

Példa:\
Ha $X = {\mathbb{K}}^{n}$, akkor
$\left. A:{\mathbb{K}}^{n}\rightarrow{\mathbb{K}}^{n} \right.$-nak
megfelel egy $\mathcal{A}$ mátrix. Tudjuk, hogy $A^{*}$ mátrixa
$\mathcal{A}^{*}$, melynek elemei $a_{jk}^{*} = \overline{a_{kj}}$.
Ekkor $A$ önadjungált
$\left. \Leftrightarrow a_{jk}^{*} = a_{jk} \right.$, azaz
$a_{jk} = \overline{a_{kj}}$.

</div>

<div class="pelda">

Példa:\
Legyen $X: = L^{2}\left( M \right)$, $M \subset {\mathbb{R}}^{n}$
mérhető halmaz,
$\left( {K\phi} \right)\left( x \right): = {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}}$
korlátos operátor, ahol
$\mathcal{K} \in L^{2}\left( {M \times M} \right)$. Ekkor
$\left( {K^{*}\phi} \right)\left( x \right) = {\int_{M}{\mathcal{K}^{*}\left( {x,y} \right)\phi\left( y \right)dy}}$,
vagyis
$\mathcal{K}^{*}\left( {x,y} \right) = \overline{\mathcal{K}\left( {y,x} \right)}$.
$K$ önadjugnált pontosan akkor, ha
$\mathcal{K}\left( {x,y} \right) = \overline{\mathcal{K}\left( {y,x} \right)}$
majdnem minden $x,y \in M$.

</div>

<div class="pelda">

Példa:\
Legyen $X: = L^{2}\left( 0,1 \right)$,
$\left( {A\phi} \right)\left( t \right): = \phi^{''}\left( t \right)$,
midőn $t \in \left\lbrack 0,1 \right\rbrack$, vagyis legyen $A$ a
második derivált operátor (ami lineáris)!
$D_{A}: = \left\{ {\phi \in C^{2}\left\lbrack 0,1 \right\rbrack:\phi\left( 0 \right) = 0,\phi\left( 1 \right) = 0} \right\}$,
erre belátható, hogy $\overline{D_{A}} = L^{2}\left( 0,1 \right)$.

</div>

<div class="allitas">

Állítás:\
$A$ szimmetrikus operátor (de nem önadjungált). Ennek igazolásához
tekintsünk $\phi,\psi \in D_{A}$ tetszőleges függvényeket, ekkor
parciális integrálással: $$\begin{aligned}
  \left\langle {A\phi ,\psi } \right\rangle  &  = \int\limits_0^1 {\left( {A\phi \left( t \right)} \right)\psi \left( t \right)dt}  \\ 
   &  = \int\limits_0^1 {\phi ''\left( t \right)\psi \left( t \right)dt}  \\ 
   &  = \left[ {\phi '\left( t \right)\psi \left( t \right)} \right]_0^1 - \int\limits_0^1 {\phi '\left( t \right)\psi '\left( t \right)dt}  \\ 
   &  =  - \left[ {\phi \left( y \right)\psi '\left( t \right)} \right]_0^1 + \int\limits_0^1 {\phi \left( t \right)\psi ''\left( t \right)dt}  \\ 
   &  = \left\langle {\phi ,A\psi } \right\rangle . \\ 
\end{aligned} $$

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="allitas">

Állítás:\
Legyen $X$ komplex Hilbert tér! Ha $D_{A} \subset X$,
$\left. A:D_{A}\rightarrow X \right.$ szimmetrikus operátor, akkor
$\left\langle {Ax,x} \right\rangle$ értéke valós
$\forall x \in {\mathbb{D}}_{A}$ esetén.

</div>

<div class="bizonyitas">

Bizonyítás:\
Mivel $A$ szimmetrikus, ezért
$\left\langle {Ax,x} \right\rangle = \left\langle {x,Ax} \right\rangle$,
$\forall x \in D_{A}$, másrészt a skaláris szorzat tulajdonságából
következően:
$\left. \left\langle {Ax,x} \right\rangle = \overline{\left\langle {x,Ax} \right\rangle}\Rightarrow\left\langle {x,Ax} \right\rangle = \overline{\left\langle {x,Ax} \right\rangle}\Rightarrow\left\langle {x,Ax} \right\rangle \right.$
valós, így $\left\langle {Ax,x} \right\rangle$ is valós.

</div>

<div class="megj">

Megjegyzés:\
Bebizonyítható, hogy ha $X$ komplex Hilbert tér és
$\left\langle {Ax,x} \right\rangle$ valós
$\left. \forall x \in D_{A}\Rightarrow A \right.$ szimmetrikus.

</div>

<div class="tetel">

Tétel:\
Legyen $X$ Hilbert tér (lehet valós is). Ha $D_{A} \subset X$,
$\left. A:D_{A}\rightarrow X \right.$ szimmetrikus operátor, akkor $A$
minden sajátértéke valós és a különböző sajátértékekhez tartozó
sajátelemek ortogonálisak.

</div>

<div class="bizonyitas">

Bizonyítás:

-   Tfh $Ax = \lambda x$ valamely $0 \neq x \in D_{A}$ elemre,
    $\lambda \in {\mathbb{K}}$. Ekkor
    $\underbrace {\left\langle {Ax,x} \right\rangle }_{{\text{valós}}} = \left\langle {\lambda x,x} \right\rangle = \lambda {\left\| x \right\|^2}$.
    A norma értéke valós, így a sajátérték is az, mert szorzatuk valós.
-   Tfh $$\begin{array}{l}
    {Ax_{1} = \lambda_{1}x_{1}} \\
    {Ax_{2} = \lambda_{2}x_{2}} \\
    \end{array}$$ és $\lambda_{1} \neq \lambda_{2}$ valós sajátértékek.
    Szorozzuk skalárisan jobbról előbbit $x_{2}$-vel!
    $$\left\langle {Ax_{1},x_{2}} \right\rangle = \left\langle {\lambda_{1}x_{1},x_{2}} \right\rangle = \lambda_{1}\left\langle {x_{1},x_{2}} \right\rangle$$illetve
    $$\left\langle {Ax_{1},x_{2}} \right\rangle = \left\langle {x_{1},Ax_{2}} \right\rangle = \left\langle {x_{1},\lambda_{2}x_{2}} \right\rangle = \lambda_{2}\left\langle {x_{1},x_{2}} \right\rangle,$$így
    $${\lambda _1}\left\langle {{x_1},{x_2}} \right\rangle  = {\lambda _2}\left\langle {{x_1},{x_2}} \right\rangle  \Leftrightarrow \underbrace {\left( {{\lambda _1} - {\lambda _2}} \right)}_{ \ne 0 \Leftarrow {\lambda _1} \ne {\lambda _2}}\left\langle {{x_1},{x_2}} \right\rangle  = 0 \Rightarrow \left\langle {{x_1},{x_2}} \right\rangle  = 0.$$

</div>

<div class="tetel">

Tétel:\
Legyen $X$ Hilbert tér, $\left. A:X\rightarrow X \right.$ korlátos
önadjungált operátor. Ekkor
$\left\| A \right\| = \sup\left\{ {\left| \left\langle {Ax,x} \right\rangle \right|:x \in X,\left\| x \right\| = 1} \right\}$.

</div>

<div class="bizonyitas">

Bizonyítás:

Az operátor norma definíciója szerint
$\left\| A \right\| = \sup\left\{ {\left\| {Ax} \right\|:x \in X,\left\| x \right\| = 1} \right\}$
. Ezért egyrészt a Cauchy-Schwarz egyenlőtlenségből
$\left| \left\langle {Ax,x} \right\rangle \right| \leq \left\| {Ax} \right\| \cdot \left\| x \right\| \leq \left\| A \right\| \cdot \left\| x \right\|^{2} = \left\| A \right\|$
, ha $\left\| x \right\| = 1$ . Jelöljük:
$\alpha: = \sup\left\{ {\left| \left\langle {Ax,x} \right\rangle \right|:x \in X,\left\| x \right\| = 1} \right\}$
. Az előbbiek szerint $\alpha \leq \left\| A \right\|$ . Belátjuk a
fordított egyenlőtlenséget. Tetszőleges $x,y \in X$ elemekre
$$\begin{aligned}
    \left\langle {A\left( {x + y} \right),x + y} \right\rangle  &  = \left\langle {Ax + Ay,x + y} \right\rangle  \\ 
    &  = \left\langle {Ax,x} \right\rangle  + \underbrace {\left\langle {Ay,x} \right\rangle }_{ = \langle y,Ax\rangle  = \overline {\langle Ax,y\rangle } } + \left\langle {Ax,y} \right\rangle  + \left\langle {Ay,y} \right\rangle  \\ 
    &  = \left\langle {Ax,x} \right\rangle  + \left\langle {Ay,y} \right\rangle  + 2\Re \left\langle {Ax,y} \right\rangle . \\ 
    \end{aligned} $$

Hasonlóképpen:
$$\left\langle {A\left( {x - y} \right),x - y} \right\rangle = \left\langle {Ax,x} \right\rangle + \left\langle {Ay,y} \right\rangle - 2\Re\left\langle {Ax,y} \right\rangle.$$
A kapott 1. egyenlőségből a 2-at kivonva: $$\begin{aligned}
  4\Re \left\langle {Ax,y} \right\rangle  &  = \left\langle {A\left( {x + y} \right),x + y} \right\rangle  - \left\langle {A\left( {x - y} \right),x - y} \right\rangle  \\ 
   &  \leqslant \left| {\left\langle {A\left( {x + y} \right),x + y} \right\rangle } \right| + \left| {\left\langle {A\left( {x - y} \right),x - y} \right\rangle } \right| \\ 
   &  \leqslant \alpha {\left\| {x + y} \right\|^2} + \alpha {\left\| {x - y} \right\|^2} \\ 
   &  = \alpha \left( {{{\left\| x \right\|}^2} + 2{{\left\langle {x,y} \right\rangle }^2} + {{\left\| y \right\|}^2} + {{\left\| x \right\|}^2} - 2{{\left\langle {x,y} \right\rangle }^2} + {{\left\| y \right\|}^2}} \right) \\ 
   &  = 2\alpha \left( {{{\left\| x \right\|}^2} + {{\left\| y \right\|}^2}} \right) \\ 
   \Downarrow  \\ 
  \Re \left\langle {Ax,y} \right\rangle  &  \leqslant \frac{\alpha }{2}\left( {{{\left\| x \right\|}^2} + {{\left\| y \right\|}^2}} \right). \\ 
\end{aligned} $$

Tetszőleges $\lambda > 0$ számra: $$\begin{aligned}
  \underbrace {{{\left\| {Ax} \right\|}^2}}_{ \in \mathbb{R}_0^ + } &  = \left\langle {Ax,Ax} \right\rangle  \\ 
   &  = \left\langle {A\underbrace {\left( {\lambda x} \right)}_{: = f},\underbrace {Ax/\lambda }_{: = g}} \right\rangle  \\ 
   &  = \underbrace {\left\langle {Af,g} \right\rangle }_{ \geqslant 0} \\ 
   &  = \Re \left\langle {Af,g} \right\rangle  \\ 
   &  \leqslant \frac{\alpha }{2}\left[ {{{\left\| f \right\|}^2} + {{\left\| g \right\|}^2}} \right] \\ 
   &  = \frac{\alpha }{2}\left[ {{{\left\| {\lambda x} \right\|}^2} + {{\left\| {\frac{{Ax}}{\lambda }} \right\|}^2}} \right]. \\ 
   &  = \frac{\alpha }{2}\left[ {{\lambda ^2}{{\left\| x \right\|}^2} + \frac{{{{\left\| {Ax} \right\|}^2}}}{{{\lambda ^2}}}} \right] \\ 
\end{aligned} $$ Válasszuk:
$\lambda^{2}: = \frac{\left\| {Ax} \right\|}{\left\| x \right\|}$ ,
ekkor $\lambda > 0$ teljesül (feltéve, hogy $Ax \neq 0$ ), és
$$\begin{aligned}
  {\left\| {Ax} \right\|^2} &  \leqslant \frac{\alpha }{2}\left[ {\frac{{\left\| {Ax} \right\|}}{{\left\| x \right\|}}{{\left\| x \right\|}^2} + \frac{{\left\| x \right\|}}{{\left\| {Ax} \right\|}}{{\left\| {Ax} \right\|}^2}} \right] \\ 
   &  = \frac{\alpha }{2}\left[ {\left\| {Ax} \right\| \cdot \left\| x \right\| + \left\| x \right\| \cdot \left\| {Ax} \right\|} \right] \\ 
   &  = \alpha \left\| {Ax} \right\| \cdot \left\| x \right\| .\\ 
\end{aligned} $$ $\left\| {Ax} \right\| = 0$ triviális esetet kivéve
osztva $\left\| {Ax} \right\| > 0$ -val:
$\left\| {Ax} \right\| \leq \alpha \cdot \left\| x \right\|$ . Ez igaz
$\left\| {Ax} \right\| = 0$ esetén is persze. Tehát
$\left\| A \right\| \leq \alpha$ . Előbb azt kaptuk, hogy
$\alpha \leq \left\| A \right\|$ , így a mostanival együtt:
$\left\| A \right\| = \alpha$ .

</div>

<div class="allitas">

Állítás:\
Vezessük be $$\begin{aligned}
  M: =  & \sup \left\{ {\left\langle {Ax,x} \right\rangle :x \in X,\left\| x \right\| = 1} \right\} \\ 
  m: =  & \inf \left\{ {\left\langle {Ax,x} \right\rangle :x \in X,\left\| x \right\| = 1} \right\} \\ 
\end{aligned} $$ jelöléseket! (Ekkor a fentiek miatt
$\left\lbrack {m,M} \right\rbrack \subset \left\lbrack {- \left\| A \right\|,\left\| A \right\|} \right\rbrack$,
és $\max\left\{ {\left| m \right|,M} \right\} = \left\| A \right\|$). Az
$A$ önadjungált korlátos operátor spektruma
$\subset \left\lbrack {m,M} \right\rbrack$, más szóval, ha
$\lambda \in {\mathbb{K}}$-ra
$\left. \lambda \notin \left\lbrack {m,M} \right\rbrack\Rightarrow\lambda \right.$
reguláris érték $A$-ra.

</div>

<div class="megj">

Megjegyzés:\
Azt eddig is tudtuk, hogy $\left| \lambda \right| > \left\| A \right\|$
esetén $\lambda$ reguláris érték (ha $A$ korlátos). Azt is tudtuk, hogy
ha $A$ szimmetrikus és
$\left. \Im\lambda \neq 0\Rightarrow\lambda \right.$ nem lehet
sajátérték.

</div>

<div class="def">

Definíció:\
Legyen $\left. A:D_{A}\rightarrow X \right.$ lineáris operátor,
$D_{A} \subset X$, $\overline{{\mathbb{D}}_{A}} = X$. Ha
$\left\langle {Ax,x} \right\rangle \geq 0$, $\forall x \in D_{A}$, akkor
$A$-t pozitív operátornak nevezzük (konzekvensen pozitív szemidefinitnek
kéne nevezni).

</div>

<div class="allitas">

Állítás:\
Ha $A$ pozitív, akkor $A$ minden sajátértéke $\geq 0$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\left. Ax = \lambda x\Rightarrow 0 \leq \left\langle {Ax,x} \right\rangle = \left\langle {\lambda x,x} \right\rangle = \lambda\left\| x \right\|^{2}\Rightarrow\lambda \geq 0 \right.$,
ha $\left\| x \right\|^{2} \neq 0$.

</div>

### Izometrikus és unitér operátorok

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér! Az $\left. A:X\rightarrow X \right.$ operátort
izometrikusnak nevezzük, ha
$\left\| {Ax} \right\| = \left\| x \right\|$, $\forall x \in X$. Ekkor
látható, hogy $A$ korlátos és $\left\| A \right\| = 1$.

</div>

<div class="allitas">

Állítás:\
Ha $A$ izometrikus, akkor távolság és skalárszorzattartó (szögtartó).

</div>

<div class="bizonyitas">

Bizonyítás:

-   $\left\| {Ax - Ay} \right\| = \left\| {A\left( {x - y} \right)} \right\| = \left\| {x - y} \right\|$.
-   Belátjuk a skalárszorzattartást valós $X$ Hilbert tér esetén.
    $$\begin{aligned}
      I:\quad  & {\left\| {x + y} \right\|^2} = {\left\| x \right\|^2} + 2\left\langle {x,y} \right\rangle  + {\left\| y \right\|^2} \\ 
      II:\quad  & {\left\| {x - y} \right\|^2} = {\left\| x \right\|^2} - 2\left\langle {x,y} \right\rangle  + {\left\| y \right\|^2} \\ 
      I - II:\quad  & {\left\| {x + y} \right\|^2} - {\left\| {x - y} \right\|^2} = 4\left\langle {x,y} \right\rangle  \Rightarrow \left\langle {x,y} \right\rangle  = \frac{{{{\left\| {x + y} \right\|}^2} - {{\left\| {x - y} \right\|}^2}}}{4} \\ 
    \end{aligned} $$ Így $$\begin{aligned}
      \left\langle {Ax,Ay} \right\rangle  &  = \frac{1}{4}\left( {{{\left\| {Ax + Ay} \right\|}^2} - {{\left\| {Ax - Ay} \right\|}^2}} \right) \\ 
       &  = \frac{1}{4}\left( {{{\left\| {A\left( {x + y} \right)} \right\|}^2} - {{\left\| {A\left( {x - y} \right)} \right\|}^2}} \right) \\ 
       &  = \frac{1}{4}\left( {{{\left\| {x + y} \right\|}^2} - {{\left\| {x - y} \right\|}^2}} \right) \Rightarrow \left\langle {x,y} \right\rangle  = \left\langle {Ax,Ay} \right\rangle . \\ 
    \end{aligned} $$
-   Komplex esetben
    $\left\langle {x,y} \right\rangle = \frac{1}{4}\left\lbrack {\left\| {x + y} \right\|^{2} - \left\| {x - y} \right\|^{2} + i\left\| {x + iy} \right\|^{2} - i\left\| {x - iy} \right\|^{2}} \right\rbrack$,
    így kicsit hosszabb a bizonyítás.

</div>

**Következemény**: ha $\left. A:X\rightarrow X \right.$ izometrikus
operátor és $\left( {x_{1},x_{2},...} \right)$ ortonormált rendszer,
akkor $\left( {Ax_{1},Ax_{2},...} \right)$ is ortonormált rendszer.

**Kérdés**: ha $\left( {x_{1},x_{2},...} \right)$ teljes ortonormált
rendszer, akkor ebből következik-e, hogy
$\left( {Ax_{1},Ax_{2},...} \right)$ is teljes ortonormált rendszer?
Általában sajnos nem.

<div class="pelda">

Példa:\
Legyen $X$ végtelen dimenziós, szeparábilis Hilbert tér és
$\left( {x_{1},x_{2},...,x_{k},...} \right)$ teljes ortonormált
rendszer. Értelmezzük $A$-t! Egy $x \in X$ elemet fejtsük Fourier-sorba!
$x = {\sum\limits_{k = 1}^{\infty}{c_{k}x_{k}}} = c_{1}x_{1} + c_{2}x_{2} + ...$,
$Ax: = {\sum\limits_{k = 1}^{\infty}{c_{k}x_{k + 1}}} = c_{1}x_{2} + c_{2}x_{3} + ...$.
Ez egy jól definiált lineáris operátor. Tudjuk, hogy
$\left\| {Ax} \right\|^{2} = {\sum\limits_{k = 1}^{\infty}\left| c_{k} \right|^{2}} = \left\| x \right\|^{2}$,
tehát $A$ izometrikus. Láthatjuk, hogy így
$\left( {Ax_{1} = x_{2},Ax_{2} = x_{3},...} \right)$ nem teljes. Az is
kiolvasható $A$ definíciójából, hogy
$R_{A} = \overline{\mathcal{L}\left( {x_{2},x_{3},...} \right)}$ az
$X$-nek valódi altere, így $R_{A} \neq X$.

</div>

<div class="def">

Definíció:\
$\left. A:X\rightarrow X \right.$ izometrikus operátort unitérnek
nevezzük, ha $R_{A} = X$.

</div>

<div class="tetel">

Tétel:\
Egy $\left. A:X\rightarrow X \right.$ korlátos operátor unitér
$\left. \Leftrightarrow\exists A^{- 1} = A^{*} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:

-   $\Rightarrow$ irányban: tfh $A$ unitér. Ekkor $A$ korlátossága lévén
    $A^{*}$ értelmezve van $X$-n, továbbá
    $\left\| {Ax} \right\| = \left\| x \right\|$,
    $\left. \forall x \in X\Rightarrow A \right.$ injektív
    $\left. \Rightarrow A^{- 1} \right.$ is létezik. Belátjuk, hogy
    $A^{*} = A^{- 1}$. Egyrészt $D_{A^{- 1}} = R_{A} = X$, mivel $A$
    unitér. Ekkor $\forall x,y \in X$ elemre
    $\left. \left\langle {x,y} \right\rangle = \left\langle {Ax,Ay} \right\rangle = \left\langle {x,A^{*}Ay} \right\rangle\Rightarrow y = A^{*}Ay \right.$,
    $\left. \forall y \in X\Rightarrow A^{*}A = I\Rightarrow A^{*}AA^{- 1} = A^{- 1}\Rightarrow A^{*} = A^{- 1} \right.$
-   $\Leftarrow$ irányban: tfh $A^{*} = A^{- 1}$. Ekkor mivel
    $\left. D_{A^{*}} = X\Rightarrow R_{A} = D_{A^{- 1}} = X \right.$,
    továbbá
    $\left\| {Ax} \right\|^{2} = \left\langle {Ax,Ax} \right\rangle = \left\langle {x,A^{*}Ax} \right\rangle = \left\langle {x,Ix} \right\rangle = \left\| x \right\|^{2}$,
    tehát $A$ izometrikus is.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="allitas">

Állítás:\
Ha $A$ unitér, akkor teljes ortonormált rendszer képe szintén teljes
ortonormált rendszer.

</div>

<div class="pelda">

Példák unitér operátorokra:

1.  Triviális példa az identitás.
2.  $X: = {\mathbb{K}}^{n}$. Tudjuk, hogy egy
    $\left. A:{\mathbb{K}}^{n}\rightarrow{\mathbb{K}}^{n} \right.$
    lineáris korlátos operátor megadható egy $\mathcal{A}$ négyzetes
    mátrixszal, $$\begin{aligned}
      {\mathcal{A}} =  & \left( {\begin{array}{*{20}{c}}
      {{a_{11}}}& \cdots &{{a_{1n}}} \\ 
       \vdots & \ddots & \vdots  \\ 
      {{a_{n1}}}& \cdots &{{a_{nn}}} 
    \end{array}} \right) = \left( {\begin{array}{*{20}{c}}
      {{{\mathbf{a}}_1}} \\ 
       \vdots  \\ 
      {{{\mathbf{a}}_n}} 
    \end{array}} \right), \\ 
      {{\mathcal{A}}^*} =  & \left( {{\mathbf{\bar a}}_1^T,{\mathbf{\bar a}}_2^T,...,{\mathbf{\bar a}}_n^T} \right). \\ 
    \end{aligned}$$ A leképzés pontosan akkor unitér, ha
    $${A^*} = {A^{ - 1}} \Leftrightarrow A{A^*} = I = {A^*}A \Leftrightarrow \mathcal{A}{\mathcal{A}^*} = \mathcal{I} = {\mathcal{A}^*}\mathcal{A}.$$
    $\mathcal{A}\mathcal{A}^{*}$ elemei:
    $\mathbf{a}_{j}\mathbf{\overline{a}}_{k}^{T} = \left\langle {a_{j},a_{k}} \right\rangle_{{\mathbb{K}}^{n}} = \delta_{jk} = \left\{ \begin{array}{l}
    {1\text{~ha~}j = k} \\
    {0\text{~ha~}j \neq k} \\
    \end{array} \right.$\
    A sorvektorok tehát ortonormáltak, belátható az
    $\mathcal{A}^{*}\mathcal{A} = \mathcal{I}$ egyenletből, hogy az
    oszlopvektorok is. Az ilyen -- unitér operátorokat megadó --
    mátrixokat ortogonális mátrixoknak is nevezzük.
3.  Fourier-operátor (Fourier-transzformáció):
    $X: = L^{2}\left( {\mathbb{R}} \right)$ Hilbert tér! Az
    $\mathcal{F}$ fourier operátort így értelmezzük az
    $\phi \in L^{2}\left( {\mathbb{R}} \right) \cap L^{1}\left( {\mathbb{R}} \right) \subset L^{2}\left( {\mathbb{R}} \right)$
    függvényeken:
    $\left\lbrack {\mathcal{F}\left( \phi \right)} \right\rbrack\left( x \right): = \frac{1}{\sqrt{2\pi}}{\int\limits_{- \infty}^{\infty}{e^{- ixy}\phi\left( y \right)dy}}$.
    Látható, hogy ennek csak akkor van értelme, ha
    $\phi\left( y \right)$ integrálható. Tudjuk, hogy
    $\left| {e^{- ixy}\phi\left( y \right)} \right| = \left| {\phi\left( y \right)} \right|$,
    mert $\left| e^{- ixy} \right| = 1$.
    $\phi \in L^{2}\left( {\mathbb{R}} \right)$ esetén
    $\left\lbrack {\mathcal{F}\left( \phi \right)} \right\rbrack\left( x \right) = \lim\limits_{N\rightarrow\infty}\frac{1}{\sqrt{2\pi}}{\int\limits_{- N}^{N}{e^{- ixy}\phi\left( y \right)dy}}$
    az $L^{2}\left( {\mathbb{R}} \right)$ normával.

</div>

<div class="tetel">

Tétel:\
Az
$\left. \mathcal{F}:L^{2}\left( {\mathbb{R}} \right)\rightarrow L^{2}\left( {\mathbb{R}} \right) \right.$
operátor unitér, $\mathcal{F}^{- 1} = \mathcal{F}^{*}$ a következő
képlettel adható meg:
$\left\lbrack {\mathcal{F}^{- 1}\left( \psi \right)} \right\rbrack\left( y \right) = \lim\limits_{N\rightarrow\infty}\frac{1}{\sqrt{2\pi}}{\int\limits_{- N}^{N}{e^{ixy}\psi\left( x \right)dx}}$,
ahol a limesz $L^{2}\left( {\mathbb{R}} \right)$ norma szerinti.

</div>

<div class="bizonyitas">

Bizonyítás (vázlatos):

1.  Először értelmezzük $\mathcal{F}$-et a következő spec. alakú lépcsős
    függvényeken: $\phi_{\alpha}\left( x \right): = \begin{cases}
    1 & {\text{~ha~}x\ 0\text{~és~}\alpha\text{~között~van}} \\
    0 & \text{egyébként} \\
    \end{cases}$.\
    Egyszerű számolással
    $\left( {\mathcal{F}\phi_{\alpha}} \right)\left( x \right) = \frac{1}{\sqrt{2\pi}}\frac{1 - e^{- i\alpha x}}{ix}$.
    Bevezetjük a $\mathcal{G}$ operátort
    $\phi \in L^{2}\left( {\mathbb{R}} \right) \cap L\left( {\mathbb{R}} \right)$
    függvényekre:
    $\left( {\mathcal{G}\phi} \right)\left( x \right): = \frac{1}{\sqrt{2\pi}}{\int\limits_{- \infty}^{\infty}{e^{ixy}\phi\left( y \right)dy}}$.
    Hasonlóan adódik:
    $\left( {\mathcal{G}\phi_{\alpha}} \right)\left( x \right) = \frac{1}{\sqrt{2\pi}}\frac{e^{i\alpha x} - 1}{x}$.
    Állítás: tetszőleges $\phi_{\alpha},\phi_{\beta}$ esetén
    $\left\langle {\mathcal{F}\phi_{\alpha},\mathcal{F}\phi_{\beta}} \right\rangle = \left\langle {\phi_{\alpha},\phi_{\beta}} \right\rangle$,
    $\left\langle {\mathcal{G}\phi_{\alpha},\mathcal{G}\phi_{\beta}} \right\rangle = \left\langle {\phi_{\alpha},\phi_{\beta}} \right\rangle$
    és
    $\left\langle {\mathcal{F}\phi_{\alpha},\phi_{\beta}} \right\rangle = \left\langle {\phi_{\alpha},\mathcal{G}\phi_{\beta}} \right\rangle$
    is igaz.
2.  Kiterjesztjük az állítást lépcsős függvényekre, amik láthatóan ilyen
    függvények lineárkombinációi.
3.  A lépcsős függvények sűrűn vannak
    $L^{2}\left( {\mathbb{R}} \right)$-ben. Hasonló állítást kapok ezen
    lépcsős függvényekre. $\mathcal{F}$ és $\mathcal{G}$-t a linearitás
    és korlátosság megtartásával egyértelműen kiterjeszthetjük
    $L^{2}\left( {\mathbb{R}} \right)$-re.
4.  $\mathcal{F}$ és $\mathcal{G}$ képlete
    $L^{2}\left( {\mathbb{R}} \right)$-en megadandó.

</div>

<div class="megj">

Megjegyzés:\
$\mathcal{F}$ operátor ${\mathbb{R}}^{n}$-ben:
$\left( {\mathcal{F}\phi} \right)\left( x \right) = \frac{1}{\left( \sqrt{2\pi} \right)^{n}}{\int_{{\mathbb{R}}^{n}}{e^{- i{\langle{x,y}\rangle}}\phi\left( y \right)dy}}$,
ha
$\phi \in L^{2}\left( {\mathbb{R}}^{n} \right) \cap L^{1}\left( {\mathbb{R}} \right)$,
ekkor $\mathcal{F}$ unitér.

</div>

### Véges rendű operátorok

<div class="def">

Definíció:\
Legyen $X$ Hilbert tér! Egy $\left. A:X\rightarrow X \right.$ korlátos
operátort véges rendűnek nevezünk, ha $R_{A}$ véges dimenziós.

</div>

<div class="pelda">

Példa:\
Legyenek $\phi_{1},...,\phi_{m}$ lineárisan függetlenek, akárcsak
$\psi_{1},\psi_{2},...,\psi_{m}$, mind $X$-beli elemek! Az $A$ operátort
így értelmezzük: $\left. A:X\rightarrow X \right.$,
$A\left( f \right): = {\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\phi_{j}}}$.
Látható, hogy ez véges rendű. Világos, hogy $A$ operátor lineáris,
$R_{A} = \mathcal{L}\left( {\phi_{1},\phi_{2},...,\phi_{m}} \right)$
véges dimenziós. A korlátos is:
$\left\| {Af} \right\|_{X} \leq {\sum\limits_{j = 1}^{m}\left\| {\left\langle {f,\psi_{j}} \right\rangle\phi_{j}} \right\|} = {\sum\limits_{j = 1}^{m}{\left| \left\langle {f,\psi_{j}} \right\rangle \right| \cdot \left\| \phi_{j} \right\|}}$,
melyre a Cauchy-Schwarz szerint
$\leq {\sum\limits_{j = 1}^{m}{\left\| f \right\|_{X} \cdot \left\| \psi_{j} \right\|_{X} \cdot \left\| \phi_{j} \right\|_{X}}} = \left\| f \right\| \cdot {\sum\limits_{j = 1}^{m}{\left\| \psi_{j} \right\|_{X} \cdot \left\| \phi_{j} \right\|_{X}}}$.

</div>

<div class="allitas">

Állítás:\
Legyen $X$ Hilbert tér, $\left. A:X\rightarrow X \right.$ véges rendű
operátor. Ekkor $\exists\phi_{1},\phi_{2},...,\phi_{m} \in X$ lineárisan
függetlenek és $\exists\psi_{1},\psi_{2},...,\psi_{m} \in X$ lineárisan
függetlenek a fentiek szerint, és $A$ a fenti alakú.

</div>

<div class="bizonyitas">

Bizonyítás:\
$R_{A}$ véges, $m$ dimenziós lineáris altér. Legyenek
$\phi_{1},\phi_{2},...,\phi_{m}$ lineárisan független elemek,
$\mathcal{L}\left( {\phi_{1},\phi_{2},...,\phi_{m}} \right) = R_{A}$.
Ezek választhatók úgy, hogy ortonormáltak legyenek (a Schmidt
eljárással). Ekkor, ha $f \in X$,
$Af = {\sum\limits_{j = 1}^{m}{c_{j}\left( f \right)\phi_{j}}}$.Ebben a
$c_{j}$ együtthatók egyértelműek,
$c_{j}\left( f \right) = \left\langle {Af,\phi_{j}} \right\rangle$.
Látjuk, hogy $c_{j}$ lineáris funkcionál, továbbá korlátos is, és
$\left| {c_{j}\left( f \right)} \right| = \left| \left\langle {Af,\phi_{j}} \right\rangle \right| \leq \left\| {Af} \right\| \cdot \underset{= 1}{\underset{\}\ }{\left\| \phi_{j} \right\|}} \leq \left\| A \right\| \cdot \left\| f \right\|$.
Riesz-tétel segítségével
$\left. \exists!\psi_{j} \in X:c_{j}\left( f \right) = \left\langle {f,\psi_{j}} \right\rangle\Rightarrow Af = {\sum\limits_{j = 1}^{m}{c_{j}\left( f \right)\phi_{j}}} = {\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\phi_{j}}} \right.$.
Nem nehéz belátni, hogy $\psi_{1},\psi_{2},...,\psi_{m}$ is lineárisan
függetlenek.

</div>

A másodfajú egyenlet véges rendű operátorokra
---------------------------------------------

Legyen $X$ Hilbert tér (véges vagy végtelen dimenziós),
$\left. A:X\rightarrow X \right.$ véges rendű operátor. Tekintsük az $A$
operátornak a másodfajú egyenletét:
$\left( {\lambda I - A} \right)f = b$, ahol $b \in X$ adott és $f \in X$
keresett. Ezt az előbbiek szerint így írhatjuk:
$\lambda f - {\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\phi_{j}}} = b$.
Belátjuk, hogy $\lambda \neq 0$ esetén ez az egyenlet ekvivalens egy
lineáris algebrai egyenletrendszerrel.

Az előző egyenletet jobbról $\psi_{k}$-val skalárisan szorozva:
$\lambda\left\langle {f,\psi_{k}} \right\rangle - {\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\left\langle {\phi_{j},\psi_{k}} \right\rangle}} = \left\langle {b,\psi_{k}} \right\rangle$,
$k \in \left\{ {1,2,...,m} \right\}$. Keressük
$\xi_{j}: = \left\langle {f,\psi_{j}} \right\rangle$-t, adottak
$a_{kj}: = \left\langle {\phi_{j},\psi_{k}} \right\rangle$,
$\beta_{k}: = \left\langle {b,\psi_{k}} \right\rangle$. Ezzel a
jelöléssel:
$\lambda\xi_{k} - {\sum\limits_{j = 1}^{m}{a_{kj}\xi_{j}}} = \beta_{k}$,
$k \in \left\{ {1,2,...,m} \right\}$. Ez egy lineáris egyenletrendszer
$\xi_{k}$ együtthatókra. $\xi: = \left( \begin{array}{l}
\xi_{1} \\
 \vdots \\
\xi_{m} \\
\end{array} \right)$, $\beta: = \left( \begin{array}{l}
\beta_{1} \\
 \vdots \\
\beta_{m} \\
\end{array} \right)$, $\mathcal{A}: = \left( \begin{array}{lll}
a_{11} & \cdots & a_{1m} \\
 \vdots & \ddots & \vdots \\
a_{m1} & \cdots & a_{mm} \\
\end{array} \right)$, így
$\left( {\lambda\mathcal{I} - \mathcal{A}} \right)\xi = \beta$. Ha $f$
kielégíti a másodfajú egyenletet $\left. \Rightarrow\xi \right.$
kielégíti a kapott lineáris algebrai egyenletrendszert $\lambda = 0$
esetén is!

<div class="allitas">

Állítás:\
Legyen $\lambda \neq 0$ és tfh $\xi$ kielégíti a lineáris algebrai
egyenletrendszert! Ekkor
$f: = \frac{1}{\lambda}b + \frac{1}{\lambda}{\sum\limits_{j = 1}^{m}{\xi_{j}\phi_{j}}}$
kielégíti a véges rendű operátorra vonatkozó másodafajú egyenletet.

</div>

<div class="bizonyitas">

Bizonyítás:\
Behelyettesítünk a másodfajú egyenletbe, s kihasználjuk, hogy $\xi$
kielégíti a lineáris algebrai egyenletrendszert.

</div>

<div class="tetel">

Tétel:\
Egy $f \in X$ elem kielégíti a véges rendű opertárra vonatkozó másodfajú
egyenletet $\lambda \neq 0$ esetén
$\left. \Leftrightarrow\xi_{j} = \left\langle {f,\psi_{j}} \right\rangle \right.$
képlettel értelmezett koordinátákból álló $\xi$ kielégíti a fenti
lineáris algebrai egyenletrendszert.

</div>

Ennek alapján a véges rendű operátorokra vonatkozó másodfajú egyenlet
megoldhatóságának elmélete következik a lineáris algebrai
egyenletrendszerek megoldhatóságának elméletéből. Két eset lehetséges:

1.  Ha $\lambda \neq 0$ szám az $\mathcal{A}$ mátrixnak nem sajátértéke
    $\left. \Leftrightarrow\det\left| {\lambda\mathcal{I} - \mathcal{A}} \right| \neq 0 \right.$,
    ekkor $\left( {\lambda\mathcal{I} - \mathcal{A}} \right)\xi = \beta$
    egyenletben $\forall\beta \in {\mathbb{K}}^{n}\exists!\xi$ megoldás
    $\left. \Rightarrow\exists!f \right.$ megoldás a
    $\left( {\lambda I - A} \right)f = b$ egyenletre. Nem nehéz belátni,
    hogy $f$ folytonosan függ $b$-től. Ekkor $\lambda \neq 0$ reguláris
    érték $A$-ra.
2.  Ha $\lambda \neq 0$ az $\mathcal{A}$ mátrixnak sajátértéke
    $\left. \Rightarrow\lambda \right.$ az $A$ sajátéréke, s a kétféle
    rang egyenlő. $\lambda = 0$ végtelen rangú sajátértéke $A$-nak (ha
    $X$ végtelen dimenziós).

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="allitas">

Állítás:\
Ha $X$ végtelen dimenziós vektortér, akkor $\lambda = 0$ végtelen rangú
sajátértéke az operátornak.
$A\phi: = {\sum\limits_{j = 1}^{m}{\left\langle {\phi,\psi_{j}} \right\rangle\phi_{j}}}$.
$\lambda = 0$ sajátérték azt jelenti, hogy $A\phi = 0\phi = 0$ biztosan
teljesül. Mivel $\phi_{j}$-k lineárisan függetlenek,
$\left\langle {\phi,\psi_{j}} \right\rangle = 0$,
$\left. \forall j \in \left\{ {1,2,...,m} \right\}\Leftrightarrow\phi\bot\mathcal{L}\left( {\psi_{1},\psi_{2},...,\psi_{m}} \right) \right.$.

</div>

Összefoglalva: legyen $X$ végtelen dimenziós szeparábilis Hilbert tér!
Ekkor egy $A$ véges rendű operátor spektruma csak sajátértékekből áll,
mégpedig a 0-tól különböző (véges sok) sajátérték véges rangú (ezek
megegyeznek az $\mathcal{A}$ mátrix sajátértékeivel, s ranguk is
megegyezik), a 0 pedig végtelen rangú sajátérték. Minden más $\lambda$
reguláris érték.

<div class="pelda">

Példa véges rangú operátorokra (elfajult magú integrálegyenletek):

$X: = L^{2}\left( M \right)$, ahol $M$ mérhető halmaz.
$\mathcal{K}\left( {x,y} \right) = {\sum\limits_{j = 1}^{m}{\phi_{j}\left( x \right)\psi_{j}\left( y \right)}}$,
ahol
$\left. \phi_{j},\psi_{j} \in L^{2}\left( M \right)\Rightarrow\mathcal{K} \in L^{2}\left( {M \times M} \right) \right.$.
$$\begin{aligned}
  \left( {K\phi } \right)\left( x \right) &  = \int_M {{\mathcal{K}}\left( {x,y} \right)\phi \left( y \right)dy}  \\ 
   &  = \int_M {\left[ {\mathop \sum \limits_{j = 1}^m {\phi _j}\left( x \right){\psi _j}\left( y \right)} \right]\phi \left( y \right)dy}  \\ 
   &  = \mathop \sum \limits_{j = 1}^m {\phi _j}\left( x \right)\int_M {{\psi _j}\left( y \right)\phi \left( y \right)dy} . \\ 
\end{aligned} $$ Röviden:
$K\phi = {\sum\limits_{j = 1}^{m}{\phi_{j}\left\langle {\phi,\psi_{j}} \right\rangle}}$.

</div>

Az előbbiek alapján egy elfajult magú (elsőfajú) integrálegyenlet
megoldása kiszámolható egy lineáirs algebrai egyenletrendszer
megoldásával.

### Kompakt (teljesen folytonos) operátorok

<div class="def">

Definíció:\
Egy $M \subset Y$ halmazt feltételesen (vagy relatíve) sorozatkompaktnak
nevezünk, ha lezárása sorozatkompakt.

</div>

<div class="megj">

Megjegyzés:\
$M$ feltételesen sorozatkompakt, ha tetszőleges $M$-beli sorozatból
kiválasztható konvergens részsorozat. ${\mathbb{R}}^{n}$-ben a
feltételesen sorozatkompakt halmazok a korlátos halmazok.

</div>

<div class="def">

Definíció:\
Legyenek $X,Y$ Banach terek! Egy $\left. A:X\rightarrow Y \right.$
lineáris operátort teljesen folytonosnak, avagy kompaktnak nevezünk, ha
$X$ tetszőleges korlátos halmazát feltételesen (avagy relatíve)
sorozatkompakt halmazba képezi.

</div>

<div class="megj">

Megjegyzés:\
Ekkor $A$ korlátos is, továbbá két kompakt operátor összege és
számszorosa is kompakt.

</div>

<div class="allitas">

Állítás:\
Egy $\left. A:X\rightarrow Y \right.$ operátor pontosan akkor kompakt,
ha $\forall\left( x_{k} \right)_{k \in {\mathbb{N}}},x_{k} \in X$
korlátos sorozatra $\left( {Ax_{k}} \right)_{k \in {\mathbb{N}}}$-ból
kiválasztható konvergens részsorozat.

</div>

<div class="allitas">

Állítás:\
Legyen $X$ Hilbert tér, $\left. A:X\rightarrow X \right.$ véges rendű
operátor. Ekkor $A$ kompakt.

</div>

<div class="tetel">

Tétel:\
Legyenek $X$, $Y$ Banach terek, $A_{j} \in L\left( {X,Y} \right)$
operátorok kompaktak, és
$\left. \exists A \in L\left( {X,Y} \right):\lim\limits_{j\rightarrow\infty}A_{j} = A\Rightarrow A \right.$
is kompakt operátor.

</div>

<div class="bizonyitas">

Bizonyítás:

Legyen $\left( x_{k} \right)_{k \in {\mathbb{N}}}$ egy $X$ -beli
korlátos sorozat. Bizonyítani akarjuk, hogy
$\left( {Ax_{k}} \right)_{k \in {\mathbb{N}}}$ -nek van konvergens
részsorozata $Y$ -ban. Tudjuk, hogy $A \in L\left( {X,Y} \right)$ .
Mivel $A_{1}$ kompakt, ezért az
$\left( {A_{1}x_{k}} \right)_{k \in {\mathbb{N}}}$ sorozatból
kiválasztható $Y$ -ban konvergens részsorozat, legyen ez
$\left( {A_{1}x_{k1}} \right)_{k \in {\mathbb{N}}}$ !
$\left( {A_{2}x_{k1}} \right)_{k \in {\mathbb{N}}}$ -ből kiválasztható
konvergens részsorozat, legyen ez
$\left( {A_{2}x_{k2}} \right)_{k \in {\mathbb{N}}}$ .
$\left( {A_{3}x_{k2}} \right)_{k \in {\mathbb{N}}}$ -ből megint
kiválasztható\... $$\begin{array}{lllllll}
 & x_{1} & x_{2} & \cdots & x_{k} & \cdots & \\
A_{1} & x_{11} & x_{21} & \cdots & x_{k1} & \cdots & {\text{részsorozatra~}\left( {A_{1}x_{k1}} \right)_{k \in {\mathbb{N}}}\text{~konvergens}} \\
A_{2} & x_{12} & x_{22} & \cdots & x_{k2} & \cdots & {\text{részsorozatra~}\left( {A_{2}x_{k2}} \right)_{k \in {\mathbb{N}}}\text{~konvergens}} \\
 \vdots & \vdots & \vdots & \ddots & \vdots & \vdots & \vdots \\
A_{j} & x_{1j} & x_{2j} & \cdots & x_{kj} & \cdots & {\text{részsorozatra~}\left( {A_{j}x_{kj}} \right)_{k \in {\mathbb{N}}}\text{~konvergens}} \\
 \vdots & \vdots & \vdots & & \vdots & \vdots & \vdots \\
\end{array}$$\
Tekintsük az $\left( x_{kk} \right)_{k \in {\mathbb{N}}}$ átlós
sorozatot. Belátjuk, hogy
$\left( {Ax_{kk}} \right)_{k \in {\mathbb{N}}}$ konvergens $Y$ -ban.
$\left( x_{kk} \right)_{k \in {\mathbb{N}}}$ az eredeti
$\left( x_{k} \right)_{k \in {\mathbb{N}}}$ sorozatnak olyan
részsorozata, amely bármelyik sorban levő részsorozatnak a részsorozata,
bizonyos indextől kezdve.

$$\begin{aligned}
  {\left\| {A{x_{kk}} - A{x_{mm}}} \right\|_Y} =  & {\left\| {\left[ {A{x_{kk}} - {A_j}{x_{kk}}} \right] + \left[ {{A_j}{x_{kk}} - {A_j}{x_{mm}}} \right] + \left[ {{A_j}{x_{mm}} - A{x_{mm}}} \right]} \right\|_Y} \\ 
   \leqslant  & {\left\| {\left( {A - {A_j}} \right){x_{kk}}} \right\|_Y} + {\left\| {{A_j}{x_{kk}} - {A_j}{x_{mm}}} \right\|_Y} + {\left\| {\left( {{A_j} - A} \right){x_{mm}}} \right\|_Y} \\ 
   \leqslant  & {\left\| {A - {A_j}} \right\|_{L\left( {X,Y} \right)}} \cdot {\left\| {{x_{kk}}} \right\|_X} +  \\ 
   & \quad  + {\left\| {{A_j}{x_{kk}} - {A_j}{x_{mm}}} \right\|_Y} + {\left\| {{A_j} - A} \right\|_{L\left( {X,Y} \right)}} \cdot {\left\| {{x_{mm}}} \right\|_X} \\ 
\end{aligned} $$

$\left( x_{kk} \right)_{k \in {\mathbb{N}}}$ korlátos sorozat, ehhez
$\exists c > 0:\left\| x_{kk} \right\| \leq c$ . Legyen
$\varepsilon > 0$ tetszőleges. Mivel
$\lim\limits_{j\rightarrow\infty}\left\| {A_{j} - A} \right\| = 0$ ,
ezért
$\left. \exists j_{0}:j \geq j_{0}\Rightarrow\left\| {A_{j} - A} \right\| \leq \varepsilon \right.$
. Válasszuk pl: $j = j_{0}$ . Mivel
$\left( {A_{j_{0}}x_{kk}} \right)_{k \in {\mathbb{N}}}$ konvergens,
ezért
$\left. \exists k_{0}:k,l \geq k_{0}\Rightarrow\left\| {A_{j_{0}}x_{kk} - A_{j_{0}}x_{ll}} \right\| \leq \varepsilon \right.$
. Tehát $k,l \geq k_{0}$ esetén
$\left. \left\| {Ax_{kk} - Ax_{ll}} \right\|_{Y} \leq c\varepsilon + \varepsilon + c\varepsilon = \left( {2c + 1} \right)\varepsilon\Rightarrow\left( {Ax_{kk}} \right) \right.$
Cauchy sorozat.

</div>

**Következmény**: kompakt operátorok alteret képeznek
$L\left( {X,Y} \right)$-ban.

<div class="tetel">

Tétel (bizonyítás nélkül):\
Legyen $X$ szeparábilis Hilbert tér. Ha
$\left. A:X\rightarrow X \right.$ kompakt operátor, akkor
$\left. \exists A_{j}:X\rightarrow X \right.$ véges rendű operátorok,
hogy
$\lim\limits_{j\rightarrow\infty}\left\| {A_{j} - A} \right\|_{L{({X,X})}} = 0$.

</div>

Összefoglalva: ha $X$ szeparábilis Hilbert tér, akkor az
$\left. A:X\rightarrow X \right.$ korlátos operátor kompakt
$\Leftrightarrow$ előáll véges rendű operátorok sorozatának norma
szerinti limeszeként.

<div class="pelda">

Példa:\
Legyen $X = L^{2}\left( M \right)$ Hilbert tér,
$\left. K:L^{2}\left( M \right)\rightarrow L^{2}\left( M \right) \right.$
négyzetesen integrálható magú integráloperátor,
$\left( {K\phi} \right)\left( x \right): = {\int_{M}{\mathcal{K}\left( {x,y} \right)\phi\left( y \right)dy}}$.
Ez a $K$ operátor kompakt. Ennek igazolásának alapgondolata: tudjuk,
hogy $L^{2}\left( M \right)$ szeparábilis Hilbert tér (végtelen
dimenziós). Legyenek ebben teljes ortonormált rendszerek
$\psi_{1},\psi_{2},...$ illetve $\phi_{1},\phi_{2},...$. Ekkor
$\mathcal{K}\left( {x,y} \right) = {\sum\limits_{m = 1}^{\infty}\left( {\sum\limits_{j,k \leq m}{c_{jk}\phi_{j}\left( x \right)\psi_{k}\left( y \right)}} \right)}$,
$\mathcal{K}_{N}\left( {x,y} \right) = {\sum\limits_{m = 1}^{N}{\sum\limits_{j,k \leq m}{c_{jk}\phi_{j}\left( x \right)\psi_{k}\left( y \right)}}}$,
$\lim\limits_{N\rightarrow\infty}\left\| {\mathcal{K}_{N} - \mathcal{K}} \right\|_{L^{2}{({M \times M})}} = 0$.
$\mathcal{K}_{N}$-nek véges rendű operátorok felelnek meg.
$\left. \left\| {K_{N} - K} \right\|_{L{({L^{2}{(M)},L^{2}{(M)}})}}\rightarrow 0 \right.$,
ha $\left. N\rightarrow\infty \right.$.

</div>

### Másodfajú egyenlet kompakt operátorokra

Legyen $X$ szeparábilis Hilbert tér, és benne egy
$\left. A:X\rightarrow X \right.$ kompakt operátor. Tekintsük a
$\left( {\lambda I - A} \right)f = b$ másodfajú egyenletet, melyben
$\lambda \neq 0$ rögzített. Tudjuk, hogy $A$ kompakt operátor
tetszőleges előírt pontossággal megközelíthatő egy $B$ véges rendű
operátorral. $\left. \exists A_{0}:X\rightarrow X \right.$ véges rendű
operátor, hogy $\left\| {A - A_{0}} \right\| < \left| \lambda \right|$.
$\left. B_{0}: = A - A_{0}\Leftrightarrow A = A_{0} + B_{0} \right.$,
ahol $A_{0}$ véges rendű, és
$\left\| B_{0} \right\| < \left| \lambda \right|$ . Tehát a másodfajú
egyenlet így írható:

$$\left[ {\lambda I - \left( {{A_0} + {B_0}} \right)} \right]f = b \Leftrightarrow \left( {\lambda I - {B_0}} \right)f = b + {A_0}f.$$

$\left. \left| \lambda \right| > \left\| B_{0} \right\|\Rightarrow\left| \lambda \right| > B_{0} \right.$
korlátos operátor spektrálsugara $\left. \Rightarrow\lambda \right.$
reguláris érték $B_{0}$ operátorra nézve $\Rightarrow$ a legutóbbi
egyenlet ekvivalens:
$$f = {\left( {\lambda I - {B_0}} \right)^{ - 1}}\left( {b + {A_0}f} \right) = \underbrace {{{\left( {\lambda I - {B_0}} \right)}^{ - 1}}b}_{{\text{adott}}} + {\left( {\lambda I - {B_0}} \right)^{ - 1}}{A_0}f.$$
$\lambda$-val beszorozva, átrendezve:
$$\lambda f - \underbrace {\lambda {{\left( {\lambda I - {B_0}} \right)}^{ - 1}}{A_0}}_{: = B: = {B_\lambda }}f = \underbrace {\lambda {{\left( {\lambda I - {B_0}} \right)}^{ - 1}}}_{: = g}.$$
A bevezetett jelöléssel $\left( {\lambda I - B_{\lambda}} \right)f = g$
.

Észrevétel: $B_{\lambda}$ véges rendű operátor, mert $A_{0}$ véges rendű
operátor. Legyen $\delta > 0$ rögtített szám, és válasszuk $A_{0}$-t
úgy, hogy $\left\| {A - A_{0}} \right\| < \delta$ legyen. Ekkor az
előbbi gondolatmenet érvényes $\forall\lambda$-ra, $A_{0}$ nem függ
$\lambda$-tól, ha $\lambda \geq \delta$ (de $\delta$-tól igen). $A_{0}$
véges rendű operátor $\lambda \geq \delta$ esetén, és
$A_{0}f = {\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\phi_{j}}}$
alakban írható.
$Bf = B_{\lambda}f = \lambda\left( {\lambda I - B_{0}} \right)^{- 1}{\sum\limits_{j = 1}^{m}{\left\langle {f,\psi_{j}} \right\rangle\phi_{j}}} = {\sum\limits_{j = 1}^{m}{\lambda\left\langle {f,\psi_{j}} \right\rangle\left( {\lambda I - B_{0}} \right)^{- 1}\phi_{j}}}$.
A másodfajú egyenlet:
$\lambda f - {\sum\limits_{j = 1}^{m}{\lambda\left\langle {f,\psi_{j}} \right\rangle\left( {\lambda I - B_{0}} \right)^{- 1}\phi_{j}}} = g = g_{\lambda}$.

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Tehát kaptuk, hogy
$\lambda f - {\sum\limits_{j = 1}^{m}{\lambda\left\langle {f,\psi_{j}} \right\rangle\left( {\lambda I - B_{0}} \right)^{- 1}\phi_{j}}} = g = g_{\lambda}$.
Ez megfelel egy lineáris algebrai egyenletrendszernek:
$\lambda\mathcal{I}\xi - \mathcal{B}_{\lambda}\xi = \beta_{\lambda}$.
Ekkor
$\det\left( {\lambda\mathcal{I} - \mathcal{B}_{\lambda}} \right) = 0$
egyenlet gyökei a sajátértékek. A mátrix ($\mathcal{B}_{\lambda}$) és az
operátor ($B_{\lambda}$) sajátértékei azonosak az eredeti operátor ($A$)
sajátértékeivel, és rangjuk is azonos. Belátható, hogy a mátrix elemei a
$\lambda$ változónak holomorf függvényei! Így a determináns is holomorf
függvénye $\lambda$-nak. Tudjuk, hogy egy holomorf függvény gyökei nem
torlódhatnak egy véges pontban, hacsak nem az azonosan 0 függvény. Mivel
$\lambda < \left\| A \right\|$, ezért csak véges sok gyök van. Tehát
tetszőleges rögzített $\delta$ esetén $A$ operátornak véges sok
$\delta$-nál nagyobb abszolút értékű sajátértéke van, s ezek véges
rangúak.

<div class="tetel">

Tétel:\
Ha $A$ kompakt operátor, akkor $A$-nak legfeljebb megszámlálhatóan
végtelen sok sajátértéke van, a 0-tól különböző sajátértékek véges
rangúak, s a sajátértékek csak a 0-ban torlódhatnak. (Gondoljunk csak a
$\delta: = 1/k$, $k \in {\mathbb{N}}$ esetre!)

</div>

<div class="tetel">

Tétel (biz. nélkül):\
minden $\lambda \neq 0$, ami nem sajátérték, az reguláris érték $A$
(kompakt operátorra) nézve.

</div>

Következmény: ha $\lambda \neq 0$ nem sajátérték,
$\left( {\lambda I - A} \right)f = b$ másodfajú egyenletnek
$\forall b$-re létezik egyetlen $f$ megoldás, és ez folytonosan függ
$b$-től.

Mi a helyzet, ha $\lambda$ sajátérték?

Emlékeztető: tetszőleges korlátos lineáris operátor esetén
$$\left. {\overline{R_{\lambda I-A}}}^{\bot} = S_{\overline{\lambda}}\left( A^{*} \right)\Leftrightarrow\overline{R_{\lambda I-A}} = S_{\overline{\lambda}}\left( A^{*} \right)^{\bot}. \right.$$Ha
$R_{\lambda I - A}$ zárt altér, akkor
$R_{\lambda I - A} = \overline{R_{\lambda I-A}} = S_{\overline{\lambda}}\left( A^{*} \right)^{\bot}$.

<div class="tetel">

Tétel:\
Ha $A$ kompakt operátor, akkor $\lambda \neq 0$ esetén
$R_{\lambda I - A}$ zárt altér.

</div>

<div class="bizonyitas">

Bizonyítás:\
Látható, hogy $R_{\lambda I - A}$ lineáris altér. Azt kell bizonyítani,
hogy $R_{\lambda I - A}$ zárt halmaz. Legyen tetszőleges
$\psi_{j} \in R_{\lambda I - A}$ és $\exists\lim\psi_{j} = \psi$, ekkor
$\psi \in R_{\lambda I - A}$? Mivel
$\left. \psi_{j} \in R_{\lambda I - A}\Rightarrow\exists\phi_{j} \in X:\left( {\lambda I - A} \right)\phi_{j} = \psi_{j} \right.$.
Jelöljük:
$$S_{\lambda}\left( A \right): = \left\{ {\phi \in X:\left( {\lambda I - A} \right) = 0} \right\}.$$
Ekkor $S_{\lambda}\left( A \right)$ zárt lineáris altér ($A$ folytonos).
A Riesz-tétel következtében
$$\left. X: = S_{\lambda}\left( A \right) \oplus S_{\lambda}\left( A \right)^{\bot}\Leftrightarrow\forall x \in X\exists!x_{1},x_{2}:x_{1} \in S_{\lambda}\left( A \right),x_{2} \in S_{\lambda}\left( A \right)^{\bot}, \right.$$
ahol $x = x_{1} + x_{2}$. Ennek megfelelően
$X \ni \phi_{j} = f_{j} + g_{j}$, ahol
$f_{j} \in S_{\lambda}\left( A \right)$.
$g_{j} \in S_{\lambda}\left( A \right)^{\bot}$,
$${\psi _j} = \left( {\lambda I - A} \right){\phi _j} = \underbrace {\left( {\lambda I - A} \right){f_j}}_0 + \left( {\lambda I - A} \right){g_j} \Rightarrow \left( {\lambda I - A} \right){g_j} = {\psi _j}.$$

<div class="allitas">

Kis állítás (a bizonyításon belül)::\
$\left( g_{j} \right)_{j \in {\mathbb{N}}}$ korlátos sorozat $X$-ben.

</div>

<div class="bizonyitas">

Bizonyítás (a kis állításé):\
Indirekt feltesszük, hogy
$\exists\left( g_{j_{k}} \right)_{k \in {\mathbb{N}}}$ részsorozat, hogy
$\lim\limits_{k\rightarrow\infty}\left\| g_{j_{k}} \right\|_{X} = \infty$.
Legyen $h_{j_{k}} = \frac{g_{j_{k}}}{\left\| g_{j_{k}} \right\|_{X}}$,
ekkor $\left\| h_{j_{k}} \right\|_{X} = 1$.
$\left( {\lambda I - A} \right)g_{j_{k}} = \psi_{j_{k}}$ egyenletet
osztva $\left\| g_{j_{k}} \right\|$-val:
$\left. \left( {\lambda I - A} \right)h_{j_{k}} = \frac{\psi_{j_{k}}}{\left\| g_{j_{k}} \right\|_{X}}\rightarrow 0_{X} \right.$,
ugyanis $\psi_{j}$ konvergens $\Rightarrow$ korlátos.
$\lim\limits_{k\rightarrow\infty}\left( {\lambda h_{j_{k}} - Ah_{j_{k}}} \right) = 0_{X}$.
$\left( h_{j_{k}} \right)$ korlátos sorozat (mert
$\left\| h_{j_{k}} \right\| = 1$), $A$ kompakt operátor, ezért
$\exists\left( {\widetilde{h}}_{j_{k}} \right)$ részsorozat, amelyre
$\left( {A{\widetilde{h}}_{j_{k}}} \right)$ konvergens
$\left. \Leftrightarrow\left( {\lambda{\widetilde{h}}_{j_{k}}} \right)_{k \in {\mathbb{N}}} \right.$
is konvergens.
$\left. \lambda \neq 0\Rightarrow\left( {\widetilde{h}}_{j_{k}} \right) \right.$
konvergens,
$\left. \left( {\widetilde{h}}_{j_{k}} \right)_{k \in {\mathbb{N}}}\rightarrow h_{0}\Rightarrow\left( {\lambda I - A} \right){\widetilde{h}}_{j_{k}}\rightarrow 0\Rightarrow\left( {\lambda I - A} \right)h_{0} = 0 \right.$.
Ebből következik, hogy $h_{0} \in S_{\lambda}\left( A \right)$. Másrészt
$h_{j_{k}} = \frac{g_{jk}}{\left\| g_{jk} \right\|}$,
$\left. g_{j_{k}} \in S_{\lambda}\left( A \right)^{\bot}\Rightarrow h_{j_{k}} \in S_{\lambda}\left( A \right)^{\bot}\Rightarrow \right.$
limeszben $h_{0} \in S_{\lambda}\left( A \right)^{\bot}$. Másrészt
$h_{0} \in S_{\lambda}\left( A \right)$, így $h_{0} = 0$, de ez meg nem
lehet, mert
$\left. \left\| {\widetilde{h}}_{j_{k}} \right\| = 1\Rightarrow\left\| h_{0} \right\| = 1 \right.$
kéne lennie.

</div>

Tehát $\left( {\lambda I - A} \right)g_{j} = \psi_{j}$,
$\lim\left( \psi_{j} \right) = \psi$, $\left\| g_{j} \right\|_{X}$
korlátos. Mivel $A$ kompakt és $g_{j}$ korlátos
$\left. \Rightarrow\exists{\widetilde{g}}_{j_{k}} \right.$ részsorozat,
hogy $A{\widetilde{g}}_{j_{k}}$ konvergens. $\psi_{j_{k}}$ is konvergens
$\left. \Rightarrow\lambda g_{j_{k}} \right.$ is konvergens,
$\left. \lambda \neq 0\Rightarrow\left( g_{j_{k}} \right) \right.$
konvergens. $\left. g_{j_{k}}\rightarrow g_{0} \right.$ $X$-ben,
$g_{0} \in X$.
$\left. \left( {\lambda I - A} \right)g_{0} = \psi\Rightarrow\psi \in R_{\lambda I - A} \right.$.

</div>

<div class="tetel">

Tétel\
(bizonyítás nélkül): legyen $\left. A:X\rightarrow X \right.$ kompakt
operátor. Ekkor $A^{*}$ is kompakt. Továbbá $\lambda \neq 0$ az $A$-nak
sajátértéke $\left. \Leftrightarrow\overline{\lambda} \right.$
sajátértéke $A^{*}$-nak, és ekkor a rangok egyenlők.

</div>

Összefoglalás (Fredholm alternatíva): legyen
$\left. A:X\rightarrow X \right.$ kompakt operátor, $\lambda \neq 0$
tetszőleges szám s $\left( {\lambda I - A} \right)f = b$ másodfajú
egyenlet. Ekkor két eset lehetséges:

1.  Ha $\lambda \neq 0$ az $A$-nak nem sajátértéke (legfeljebb
    megszámlálhatóan végtelen sok, véges rangú, 0-ban torlódó
    sajátértékek), akkor a másodfajú egyenletnek $\forall b \in X$
    esetén $\exists!f$ megoldása és ez folytonosan függ $b$-től
    ($\left( {\lambda I - A} \right)^{- 1}$ folytonos)
2.  Ha $\lambda \neq 0$ sajátérték, akkor a másodfajú egyenletnek a
    megoldása nem egyértelmű, a homogén egyenletnek véges sok lineárisan
    független megoldása van. A megoldás pontosan létezik, ha
    $b\bot S_{\overline{\lambda}}\left( A^{*} \right)$ minden elemére.
    Ez annyi db ortogonalitási feltétel, amennyi a $\lambda$ sajátérték
    rangja.

### Önadjungált kompakt operátorok

<div class="tetel">

Tétel:\
Legyen $X$ szeparábilis Hilbert tér, $\left. A:X\rightarrow X \right.$
kompakt és önadjungált operátor, $A \neq 0$. Ekkor $\exists\lambda_{1}$
sajátérték:
$\left| \lambda_{1} \right| = \left\| A \right\| = \sup\left\{ {\left| \left\langle {Ax,x} \right\rangle \right|:\left\| x \right\|_{X} = 1} \right\}$.

</div>

<div class="megj">

Megjegyzés:\
Ha $\lambda_{1}$ az $A$ operátor olyan sajátértéke, amelyre
$\left| \lambda_{1} \right| = \left\| A \right\|$ és $x_{1}$ olyan
sajátelem, hogy $\left\| x_{1} \right\| = 1$, azaz
$Ax_{1} = \lambda_{1}x_{1}$, $\left\| x_{1} \right\| = 1$, akkor
$\left| \left\langle {Ax_{1},x_{1}} \right\rangle \right| = \left| \left\langle {\lambda_{1}x_{1},x_{1}} \right\rangle \right| = \left| {\lambda_{1}\left\langle {x_{1},x_{1}} \right\rangle} \right| = \left| \lambda_{1} \right| = \left\| A \right\| = \sup\left\{ \left| {\left\langle {Ax,x} \right\rangle:\left\| x \right\|_{X} = 1} \right| \right\}$.
Más szóval, az
$\left. x\mapsto\left| \left\langle {Ax,x} \right\rangle \right| \right.$,
ahol $\left\| x \right\| = 1$, ez a függvény felveszi a suprémumot az
$x = x_{1}$ sajátelemen, a maximum (ami most a suprémum is) értéke
$= \left| \lambda_{1} \right|$. Fordítva: ha $x^{*}$ olyan, hogy
$\left\| x^{*} \right\| = 1$, és arra
$\left| \left\langle {Ax,x} \right\rangle \right|$ maximális, akkor ez
sajátelem és a maximum egyenlő a sajátérték abszolút értékével. Ugyanis
$\left| \left\langle {Ax^{*},x^{*}} \right\rangle \right| \leq \left\| {Ax^{*}} \right\| \cdot \left\| x^{*} \right\| \leq \left\| A \right\| \cdot \left\| x^{*} \right\|^{2} = \left\| A \right\|$,
a Cauchy-Schwarz egyenlőtlenségben egyenlőség pontosan akkor áll fenn,
amikor $Ax^{*} \parallel x^{*}$, azaz $Ax^{*} = const \cdot x^{*}$.

</div>

További sajátértékek, sajátelemek keresése.

Legyen $X_{1}: = \left\{ {x \in X:x\bot x_{1}} \right\}$, ahol
$A_{1}: = \left. A \right|_{X_{1}}$, a leszűkítés, és
$Ax_{1} = \lambda_{1}x_{1}$.

<div class="allitas">

Állítás:\
$X_{1}$ invariáns altér, azaz
$\left. x \in X_{1}\Rightarrow Ax \in X_{1} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tfh $x \in X_{1}$!
$\left\langle {Ax,x_{1}} \right\rangle = \left\langle {x,Ax_{1}} \right\rangle = \left\langle {x,\lambda_{1}x_{1}} \right\rangle = \lambda_{1}\left\langle {x,x_{1}} \right\rangle = 0$,
tehát $Ax \in X_{1}$. Az előbbi tételt alkalmazhatjuk az $A_{1}$
operátorra $X_{1}$ Hilbert térben. Ekkor $\exists\lambda_{2}$
sajátérték, hogy
$\left| \lambda_{2} \right| = \left\| A_{1} \right\| = \sup\left\{ {\left\langle {A_{1}x,x} \right\rangle:\left\| x \right\|_{X} = 1,x \in X_{1}} \right\}$.
A maximum helye $x_{2}$ sajátelem helyén van,
$\lambda_{2}x_{2} = Ax_{2}$, $x_{2}\bot x_{1}$. Így egymás után
megkaphatjuk az $A$ operátor sajátértékeit és sajátelemeit,
$\left| \lambda_{1} \right| \geq \left| \lambda_{2} \right| \geq ...$.
Ha $A$ véges rendű, akkor az eljárás véges sok lépés után befejeződik.

</div>

<div class="tetel">

Tétel:\
Legyenek az $A$ önadjungált operátor sajátértékei $\lambda_{1}$,
$\lambda_{2}$,... és sajátelemei $x_{1}$, $x_{2}$,... A sajátelemekről
feltehető, hogy ortonormált rendszert alkotnak. Ekkor $\forall x \in X$
elemre
$Ax = {\sum\limits_{k}{\lambda_{k}\left\langle {x,x_{k}} \right\rangle x_{k}}}$.
Az $\left( x_{k} \right)$ ortonormált rendszert kibővítve a
$\lambda = 0$-hoz tartozó sajátelemek ortonormált rendszerével, akkor
ezek egy teljes ortonormált rendszert alkotnak.

</div>

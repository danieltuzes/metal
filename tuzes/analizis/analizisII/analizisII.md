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
  
title: Analízis II
subtitle: Előadásjegyzet fizikusoknak matematikusoktól
institute: ELTE
---

Ajánlott irodalom: [Szőkefalvi Nagy Béla: Valós függvények és
függvénysorok](http://www.typotex.hu/konyv/valos_fuggvenyek_es_fuggvenysorok)

**Binomiális sor**
==================

Emlékeztető:
$\left( {1 + x} \right)^{n} = {\sum\limits_{k = 0}^{n}{\begin{pmatrix}
n \\
k \\
\end{pmatrix}x^{k}}}$, ahol $n \in {\mathbb{N}}$ (binomiális tétel
alapján). Legyen
$f\left( x \right): = \left( {1 + x} \right)^{\alpha},\alpha \in {\mathbb{R}},x > - 1$!
Írjuk fel ennek az $f$ függvénynek a 0 körüli Taylor-sorát!

$$\begin{array}{ll}
{f\left( x \right) = \left( {1 + x} \right)^{\alpha}} & {f\left( 0 \right) = 1} \\
{f^{\prime}\left( x \right) = \alpha\left( {1 + x} \right)^{\alpha - 1}} & {f^{\prime}\left( 0 \right) = \alpha} \\
{f^{''}\left( x \right) = \alpha\left( {\alpha - 1} \right)\left( {1 + x} \right)^{\alpha - 2}} & {f^{''}\left( 0 \right) = \alpha\left( {\alpha - 1} \right)} \\
 \vdots & \vdots \\
{f^{(j)}\left( x \right) = \alpha\left( {\alpha - 1} \right) \cdot \ldots \cdot \left( {\alpha - j + 1} \right)\left( {1 + x} \right)^{\alpha - j}} & {f^{(j)}\left( 0 \right) = \alpha\left( {\alpha - 1} \right) \cdot \ldots \cdot \left( {\alpha - j + 1} \right)} \\
\end{array}$$

Ekkor $f$ függvény Taylor sora 0 körül:
$$\mathop \sum \limits_{j = 0}^\infty  \frac{{{f^{\left( j \right)}}\left( 0 \right)}}{{j!}}{x^j} = \mathop \sum \limits_{j = 0}^\infty  \frac{{\alpha \left( {\alpha  - 1} \right) \cdot  \ldots  \cdot \left( {\alpha  - j + 1} \right)}}{{j!}}{x^j}.$$
Jelölés: tetszőleges valós $\alpha$ esetén $\begin{pmatrix}
\alpha \\
j \\
\end{pmatrix}: = \frac{\alpha\left( {\alpha - 1} \right) \cdot \ldots \cdot \left( {\alpha - j + 1} \right)}{j!}$,
ezt használva
${\sum\limits_{j = 0}^{\infty}\frac{f^{(j)}\left( 0 \right)}{j!}}x^{j} = {\sum\limits_{j = 0}^{\infty}{\begin{pmatrix}
\alpha \\
j \\
\end{pmatrix}x^{j}}}$. Most belátjuk, hogy a kapott sor konvergencia
sugara 1. Ehhez célszerű használni a hányados kritériumot.
$a_{j}: = \begin{pmatrix}
\alpha \\
j \\
\end{pmatrix}x^{j}$, ekkor
$$\frac{{{a_{j + 1}}}}{{{a_j}}} = \frac{{\frac{{\alpha (\alpha  - 1)\cdot \ldots \cdot(\alpha  - j)}}{{(j + 1)!}}}}{{\frac{{\alpha (\alpha  - 1)\cdot \ldots \cdot(\alpha  - j + 1)}}{{j!}}}}\frac{{{x^{j + 1}}}}{{{x^j}}} = \frac{{\alpha  - j}}{{j + 1}}x \Rightarrow \left| {\frac{{{a_{j + 1}}}}{{{a_j}}}} \right| = \underbrace {\left| {\frac{{\alpha  - j}}{{j + 1}}} \right|}_{ \to 1{\text{ha}}j \to \infty }\cdot\left| x \right|,$$
ezért $\left| x \right| < 1$ esetén az abszolút értékekből álló sorra
valóban teljesül a hányados kritérium, így a sor konvergens, mert
abszolút konvergens is.

<div class="allitas">

Állítás:\
$\left| x \right| < 1$ esetén a Taylor sor előállítja $f$-et, vagyis
$\left( {1 + x} \right)^{\alpha} = {\sum\limits_{j = 0}^{\infty}{\begin{pmatrix}
\alpha \\
j \\
\end{pmatrix}x^{j}}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $f\left( x \right): = \left( {1 + x} \right)^{\alpha}$, illetve
$g\left( x \right): = {\sum\limits_{j = 0}^{\infty}{\begin{pmatrix}
\alpha \\
j \\
\end{pmatrix}x^{j}}}$, így
$f^{\prime}\left( x \right) = \frac{\alpha}{1 + x}f\left( x \right)$,
sőt, mivel $g$ hatványsorról előbb láttuk be, hogy konvergens
$\left| x \right| < 1$ esetén, így hatványsorról lévén szó, a sor és a
tagonkénti deriválással nyert sor egyenletesen konvergens minden 1-nél
kisebb sugarú intervallumban, tehát a deriválást és az összegzést
felcserélhetjük, vagyis
$g^{\prime}\left( x \right) = \frac{\alpha}{1 + x}g\left( x \right)$.
Látjuk, hogy $f\left( 0 \right) = 1$ és $g\left( 0 \right) = 1$, ebből
további átalakításokkal és tételek felhasználásával következik, hogy
$f\left( x \right) = g\left( x \right)$ :
$\frac{d}{dx}\left\lbrack {\ln g\left( x \right)} \right\rbrack = \frac{g'\left( x \right)}{g\left( x \right)} = \frac{\alpha}{1 + x} = \frac{d}{dx}\left\lbrack {\ln\left( {1 + x} \right)^{\alpha}} \right\rbrack$,
melyből következik, hogy
$\ln g\left( x \right) = \ln\left( {1 + x} \right)^{\alpha} + c$.
$c = 0$, mivel az egyenlőség $x = 1$ esetén is fenn kell állnia. Ezekből
már következik, hogy
$g\left( x \right) = \left( {1 + x} \right)^{\alpha}$.

</div>

<div class="pelda">

Alkalmazás:

-   $\sqrt{1 + x} = \left( {1 + x} \right)^{1/2} = {\sum\limits_{j = 0}^{\infty}{\begin{pmatrix}
    {1/2} \\
    j \\
    \end{pmatrix}x^{j}}}$
-   $\arcsin^{\prime}\left( x \right) = \frac{1}{\sqrt{1 - x^{2}}} = \left( {1 - x^{2}} \right)^{- 1/2} = {\sum\limits_{j = 0}^{\infty}{\begin{pmatrix}
    {- 1/2} \\
    j \\
    \end{pmatrix}\left( {- x^{2}} \right)^{j}}}$
-   $g\left( x \right) = \ln\left( {1 + x} \right)$ sorfejtése 0 körül:
    $g^{\prime}\left( x \right) = \frac{1}{1 + x} = {\sum\limits_{j = 0}^{\infty}{\left( {- 1} \right)^{j}x^{j}}}$.
    Mivel a hatványsor mindig egyenletesen konvergens a
    konvergencia-intervallumnál kisebb intervallumon, ezért
    integrálhajuk minkét oldalt 0-tól $\xi$-ig, vagyis
    $\left| \xi \right| < 1$ esetén $$\begin{gathered}
      \mathop \smallint \limits_0^\xi  g'\left( x \right)dx = \mathop \smallint \limits_0^\xi  \mathop \sum \limits_{j = 0}^\infty  {\left( { - 1} \right)^j}{x^j}dx = \mathop \sum \limits_{j = 0}^\infty  {\left( { - 1} \right)^j}\mathop \smallint \limits_0^\xi  {x^j}dx \\ 
       \Downarrow  \\ 
      \ln \left( {1 + \xi } \right) = \mathop \sum \limits_{j = 0}^\infty  {\left( { - 1} \right)^j}\frac{{{\xi ^{j + 1}}}}{{j + 1}}. \\ 
    \end{gathered} $$

</div>

Taylor formula többváltozós függvényekre
----------------------------------------

Legyen $X$ normált tér $\left. f:X\rightarrow{\mathbb{R}} \right.$ és
$k$+1-szer differenciálható az $a \in X$ egy $\rho$ sugarú
környezetében. Ekkor egy $h \in X,\left\| h \right\| < \rho$ esetén
szeretnénk kifejezni az $a$+$h$ helyen a függvényértéket az $a$ helyen
felvettel: $f\left( {a + h} \right) = f\left( a \right) + \ldots$. Mi
kerül \... helyére?

Legyen $\delta > 0,t \in \left( {- \delta,1 + \delta} \right)$,
$\left. g:{\mathbb{R}}\rightarrow X,g\left( t \right) = a + t \cdot h \right.$,
valamint legyen olyan
$\left. \phi:{\mathbb{R}}\rightarrow{\mathbb{R}}\operatorname{,\ hogy}\phi\left( t \right) = \left( {f \circ g} \right)\left( t \right) = f\left( {a + th} \right) \right.$
és $\phi$ függvény $k$+1-szer differenciálható
$\left( {- \delta,\delta + 1} \right)$ intervallumon elég kis
$\delta > 0$ esetén. Megjegyezzük, hogy ekkor
$g'\left( t \right) \in \underbrace {L\left( {\mathbb{R},X} \right)}_{t \mapsto th{\text{ leképezés}}} \Leftrightarrow h \in X$,
sőt, ezt az azonosítást elhagyva: $g^{\prime}\left( t \right): = h$.

Alkalmazzuk a Taylor formulát $\phi$-re:
$$\phi\left( 1 \right) = \phi\left( 0 \right) + \frac{\phi^{\prime}\left( 0 \right)}{1!}1 + \frac{\phi^{''}\left( 0 \right)}{2!}1^{2} + ... + \frac{\phi^{(k)}\left( 0 \right)}{k!}1^{k} + \frac{\phi^{({k + 1})}\left( \tau \right)}{\left( {k + 1} \right)!}1^{k + 1,}$$
ahol $0 < \tau < 1$.

Ennek első tagjáról tudjuk, hogy
$\phi\left( 0 \right) = f\left( a \right)$. Mi a többi?
$\phi\left( t \right) = f\left( {a + th} \right)$, illetve
$\phi = f \circ g$. Ekkor a deriváltja:
$\phi '\left( t \right) = \underbrace {f'\left( {g\left( t \right)} \right)}_{ \in L\left( {X,\mathbb{R}} \right)}\underbrace {g'\left( t \right)}_{ \in L\left( {\mathbb{R},X} \right)} \in L\left( {\mathbb{R},\mathbb{R}} \right)$,
$g^{\prime}\left( t \right) = h$, így
$$\phi '\left( t \right) = f'\left( {g\left( t \right)} \right)g'\left( t \right) = \underbrace {f'\left( {a + th} \right)}_{ \in L\left( {X,\mathbb{R}} \right)}\underbrace h_{ \in X} \in \mathbb{R},$$
ezért
$\phi^{\prime}\left( 0 \right) = f^{\prime}\left( a \right)h \in {\mathbb{R}}$.

Továbbá
$$\phi ''\left( t \right) = \underbrace {\left[ {f''\left( {a + th} \right)h} \right]}_{ \in L\left( {X,\mathbb{R}} \right)}h = f''\left( {a + th} \right)\left( {h,h} \right),$$
így
$\phi ''\left( 0 \right) = f''\left( a \right)\underbrace {\left( {h,h} \right)}_{ \in X \times X} \in \mathbb{R}$
.

Tovább folytatva:
$${\phi ^{\left( k \right)}}\left( t \right) = {f^{\left( k \right)}}\left( {a + th} \right)\left( {h,h,...,h} \right) \in \mathbb{R},$$ezért
$\phi^{(k)}\left( 0 \right) = f^{(k)}\left( 0 \right)\left( {h,h,...,h} \right)$.
$$\begin{array}{*{20}{c}}
  {\phi \left( 1 \right) = \phi \left( 0 \right) + \frac{{\phi '\left( 0 \right)}}{{1!}}1 + \frac{{\phi ''\left( 0 \right)}}{{2!}}{1^2} + ... + \frac{{{\phi ^{\left( k \right)}}\left( 0 \right)}}{{k!}}{1^k} + \frac{{{\phi ^{\left( {k + 1} \right)}}\left( \tau  \right)}}{{\left( {k + 1} \right)!}}{1^{k + 1,}}} \\ 
   \Downarrow  \\ 
  \begin{aligned}
  f\left( {a + h} \right) =  & f\left( a \right) \\ 
   &  + \frac{{f'\left( a \right)}}{{1!}}h \\ 
   &  + \frac{{f''\left( a \right)\left( {h,h} \right)}}{{2!}} \\ 
   &  + ... \\ 
   &  + \frac{{{f^{\left( k \right)}}\left( a \right)\left( {h,h,...,h} \right)}}{{k!}} \\ 
   &  + \frac{{{f^{\left( {k + 1} \right)}}\left( {a + \tau h} \right)\left( {h,h,...,h} \right)}}{{\left( {k + 1} \right)}}, \\ 
\end{aligned}  
\end{array}$$ahol $0 < \tau < 1$.

Speciális eset, mikor $k = 1$, $X = {\mathbb{R}}^{n}$,
$\left. f:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$. Ekkor a
deriváltak: $$\begin{array}{l}
{f^{\prime}\left( a \right) = \left( {\left( {\partial_{1}f} \right)\left( a \right),\left( {\partial_{2}f} \right)\left( a \right),...,\left( {\partial_{n}f} \right)\left( a \right)} \right)} \\
{f^{''}\left( a \right) = \left( \begin{array}{llll}
{\left( {\partial_{1}^{2}f} \right)\left( a \right)} & {\left( {\partial_{2}\partial_{1}f} \right)\left( a \right)} & ... & {\left( {\partial_{n}\partial_{1}f} \right)\left( a \right)} \\
{\left( {\partial_{1}\partial_{2}f} \right)\left( a \right)} & {\left( {\partial_{2}^{2}f} \right)\left( a \right)} & ... & {\left( {\partial_{n}\partial_{2}f} \right)\left( a \right)} \\
\end{array} \right),} \\
\end{array}$$\
így a függvény sorfejtése első rendig, a másodrendű maradéktaggal:
$f\left( {a + h} \right) = f\left( a \right) + \frac{1}{1!}{\sum\limits_{j = 1}^{n}{\left( {\partial_{j}f} \right)\left( a \right)h_{j}}} + \frac{1}{2!}{\sum\limits_{j,k = 1}^{n}{\left( {\partial_{j}\partial_{k}f} \right)\left( {a + \tau h} \right)h_{j}}}h_{k}$,
ahol $h = \left( {h_{1},h_{2},...,h_{n}} \right) \in {\mathbb{R}}^{n}$.

<div class="megj">

Megjegyzés:\
Legyenek $X$, $Y$ normált terek! Bebizonyítható, hogy ha
$\left. f:X\rightarrow Y \right.$ és $k$-szor differenciálható
$B_{\delta}\left( a \right)$-n, akkor a Taylor formula
$\left\| h \right\| < \delta$ esetén:
$f\left( {a + h} \right) = f\left( a \right) + \frac{f^{\prime}\left( a \right)}{1!}h + ... + \frac{f^{(k)}\left( a \right)\left( {h,h,...,h} \right)}{k!} + R_{k}$,
ahol $R_{k}$ a maradéktag, amelyre
$\left\| R_{k} \right\| \leq \frac{\left\| h \right\|^{k}}{k!} \cdot \sup\limits_{\xi \in B_{\delta}{(a)}}\left\| {f^{(k)}\left( \xi \right) - f^{(k)}\left( a \right)} \right\|$.

</div>

Többváltozós függvények lokális szélsőértéke
--------------------------------------------

<div class="def">

Definíció:\
Legyen $X$ normált tér, $\left. f:X\rightarrow{\mathbb{R}} \right.$, és
értelmezve van az $a \in X$ pont egy környezetében. Azt mondjuk, hogy
$f$-nek $a$-ban lokális minimuma van, ha
$\left. \exists\delta > 0:x \in B_{\delta}\left( a \right)\Rightarrow f\left( x \right) \geq f\left( a \right) \right.$.
Ha
$\left. x \in B_{\delta}\left( a \right)\backslash\left\{ a \right\}\Rightarrow f\left( x \right) > f\left( a \right) \right.$,
akkor szigorú lokális minimumról beszélünk.

</div>

<div class="tetel">

Tétel:\
Tfh $f$ differenciálható az $a$-ban és $f$-nek $a$-ban lokális
szélsőértéke van (minimuma vagy maximuma),
$\left. \Rightarrow f^{\prime}\left( a \right) = 0 \right.$ (ahol
$f^{\prime}\left( a \right) \in L\left( {X,{\mathbb{R}}} \right)$).

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $h \in X$ tetszőleges rögzített pont. Belátjuk, hogy
$\underbrace {f'\left( a \right)}_{ \in L\left( {X,\mathbb{R}} \right)}h = 0 \in \mathbb{R}$.
Mivel $f$ differenciálható $a$-ban, ezért elég kicsi $t$ esetén
$f\left( {a + th} \right) - f\left( a \right) = f^{\prime}\left( a \right)\left( {t \cdot h} \right) + \eta\left( {t \cdot h} \right)$,
ahol
$\lim\limits_{t\rightarrow 0}\frac{\left| {\eta\left( {th} \right)} \right|}{\left\| {th} \right\|} = 0 = \lim\limits_{t\rightarrow 0}\frac{\left| {\eta\left( {th} \right)} \right|}{\left| t \right| \cdot \left\| h \right\|}$,
ahol $\left\| h \right\| \neq 0$, ezért
$\lim\limits_{t\rightarrow 0}\frac{\left| {\eta\left( {th} \right)} \right|}{\left| t \right|} = 0$.
Ha $f^{\prime}\left( a \right)h \neq 0$ lenne, pl.
$f^{\prime}\left( a \right)h > 0$ ($h$ rögzített), akkor
$\lim\limits_{t\rightarrow 0}\frac{f\left( {a + th} \right) - f\left( a \right)}{t} = f^{\prime}\left( a \right)h > 0$.
Ekkor
$\left. \exists\delta_{1} > 0,0 < t < \delta_{1}\Rightarrow f\left( {a + th} \right) - f\left( a \right) > 0 \right.$,
illetve
$\left. \exists\delta_{2} > 0, - \delta_{2} < t < 0\Rightarrow f\left( {a + th} \right) - f\left( a \right) < 0 \right.$,
ez utóbbi kettő pedig ellentmondás, merthogy szélsőérték esetén
$f\left( {a + th} \right) - f\left( a \right)$ előjele ugyanaz kell,
hogy legyen.

</div>

<div class="def">

Definíció:\
Legyen $X$ normált tér,
$\left. g:X \times X\rightarrow{\mathbb{R}} \right.$, (folytonos)
bilineáris leképezés. Azt mondjuk, hogy

-   $g$ pozitív definit, ha
    $g\left( {h,h} \right) > 0,\forall h \in X\text{\textbackslash}\left\{ 0 \right\}$,
-   negatív definit, ha
    $g\left( {h,h} \right) < 0,\forall h \in X\text{\textbackslash}\left\{ 0 \right\}$,
-   pozitív szemidefinit, ha
    $g\left( {h,h} \right) \geq 0,\forall h \in X$,
-   negatív szemidefinit, ha
    $g\left( {h,h} \right) \leq 0,\forall h \in X$,
-   szigorúan pozitív definit, ha $\exists c > 0$ állandó, hogy
    $g\left( {h,h} \right) \geq c\left\| h \right\|^{2},\forall h \in X$.

</div>

<div class="megj">

Megjegyzés:\
Ha $X = {\mathbb{R}}^{n}$, ekkor abból, hogy $g$ pozitív definit,
következik, hogy szigorúan pozitív definit. Végtelen dimenziós
vektorterekben általában ez nem igaz. Előbbi igazolása: legyen
$X = {\mathbb{R}}^{n}$, ekkor tekintsük az
$S_{1}: = \left\{ {x \in {\mathbb{R}}^{n}:\left| x \right| = 1} \right\}$
halmazt, ekkor ez sorozatkompakt (mert korlátos és zárt). Legyen
$G\left( h \right): = g\left( {h,h} \right)$! Ekkor $G$ függvény
folytonos. $h \in S_{1}$, így
$\left. G:S_{1}\rightarrow{\mathbb{R}} \right.$ folytonos, $S_{1}$
sorozatkompakt, ezért $G$ felveszi az infinimumát (minimumát), vagyis
$\exists h_{0} \in S_{1}:G\left( h \right) \geq G\left( h_{0} \right),h \in S_{1}$.
Mivel $g$ pozitív definit, $c: = G\left( h_{0} \right) > 0$, ahol
$h_{0} \neq 0$. Ekkor $x \in X\text{\textbackslash}\left\{ 0 \right\}$
esetén
$$g\left( {x,x} \right) = g\left( {\frac{x}{{\left\| x \right\|}}\left\| x \right\|,\frac{x}{{\left\| x \right\|}}\left\| x \right\|} \right) = {\left\| x \right\|^2}\underbrace {g\left( {\frac{x}{{\left\| x \right\|}},\frac{x}{{\left\| x \right\|}}} \right)}_{ \geqslant c > 0} \geqslant c{\left\| x \right\|^2}.$$

</div>

<div class="megj">

Megjegyzés:\
$X = {\mathbb{R}}^{n}$ esetén egy
$\left. {\mathbb{R}}^{n} \times {\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
bilineáris leképezés egy négyzetes mátrixszal adható meg,
$A: = \begin{pmatrix}
a_{11} & a_{12} & \cdots & a_{1n} \\
a_{21} & a_{22} & \cdots & a_{2n} \\
 \vdots & \vdots & \ddots & \vdots \\
a_{n1} & a_{n2} & \cdots & a_{nn} \\
\end{pmatrix}$. Ha $a_{jk} = a_{kj}$ -- vagyis ha a mátrix szimmetrikus
--, akkor ha $A$ összes sajátértéke nagyobb mint 0, akkor $A$ pozitív
definit, sőt, szigorúan pozitív definit.

</div>

<div class="tetel">

Tétel:\
Tfh $f$ kétszer differenciálható az $a \in X$ egy környezetében ($X$
normált tér) és $f^{''} \in C\left( a \right)$.

1.  Ha $f$-nek $a$-ban lokális minimuma van
    $\left. \Rightarrow f^{\prime}\left( a \right) = 0 \right.$, és
    $f^{''}\left( a \right)$ pozitív szemidefinit.
2.  Ha $f^{\prime}\left( a \right) = 0$ és $f^{''}\left( a \right)$
    szigorú pozitív definit, akkor $f$-nek $a$-ban szigorú lokális
    minimuma van.

</div>

<div class="bizonyitas">

Bizonyítás:\
Alkalmazzuk a Taylor formulát az
$\left. f:X\rightarrow{\mathbb{R}} \right.$ függvényre a 2. deriváltig.
Legyen $h \in X,t \in {\mathbb{R}},\left| t \right|$ elég kicsi, ekkor
$f\left( {a + th} \right) = f\left( a \right) + \frac{f^{\prime}\left( a \right)}{1!}th + \frac{f^{''}\left( {a + \tau th} \right)}{2!}\left( {th,th} \right)$,
ahol $\tau$ alkalmasan választott, valamilyen $0 < \tau < 1$ szám.

1.  Tfh $f$-nek $a$-ban lokális minimuma van. Tudjuk, hogy ekkor
    $f^{\prime}\left( a \right) = 0$, így $$\begin{aligned}
      0 \leqslant  & \frac{{f\left( {a + th} \right) - f\left( a \right)}}{{{t^2}}} \\ 
       =  & \frac{{f''\left( {a + \tau th} \right)}}{{2!}}\left( {h,h} \right) \\ 
       =  & \frac{{f''\left( a \right)}}{{2!}}\left( {h,h} \right) + \underbrace {\left[ {\frac{{f''\left( {a + \tau th} \right)}}{{2!}} - \frac{{f''\left( a \right)}}{{2!}}} \right]\left( {h,h} \right)}_{{\text{bizbe:\;}} \to 0{\text{\;ha\;}}t \to 0} \to \frac{{f''\left( a \right)}}{{2!}}\left( {h,h} \right), \\ 
    \end{aligned} $$ ugyanis ekkor $\left. t\rightarrow 0 \right.$
    esetén $\left. a + \tau th\rightarrow a \right.$,
    $f^{''} \in C\left( a \right)$, és $$\begin{gathered}
      \left| {\frac{1}{2}\left[ {f''\left( {a + \tau th} \right) - f''\left( a \right)} \right]\left( {h,h} \right)} \right| \leqslant \frac{1}{2}\underbrace {\left\| {f''\left( {a + \tau th} \right) - f''\left( a \right)} \right\|}_{ \to 0{\text{\;ha\;}}t \to 0{\text{\;mert\;}}f'' \in C\left( a \right)} \cdot \underbrace {\left\| {h,h} \right\|}_{{\text{rögz}}} \\ 
       \Downarrow  \\ 
      \frac{{f''\left( a \right)}}{{2!}}\left( {h,h} \right) \geqslant 0. \\ 
    \end{gathered} $$
2.  Felhasználva, hogy $f^{\prime}\left( a \right) = 0$,
    $$\begin{aligned}
      \frac{{f\left( {a + th} \right) - f\left( a \right)}}{{{t^2}}} =  & \frac{1}{2}f''\left( {a + \tau th} \right)\left( {h,h} \right) \\ 
       =  & \frac{1}{2}f''\left( a \right)\left( {h,h} \right) + \frac{1}{2}\left[ {f''\left( {a + \tau th} \right) - f''\left( a \right)} \right]\left( {h,h} \right) .\\ 
    \end{aligned} $$ Legyen $h \in X,\left\| h \right\|: = c_{1} > 0$!
    Egyrészt
    $f^{''}\left( a \right)\left( {h,h} \right) \geq c_{2}\left\| h \right\|^{2} = c_{1}{}^{2}c_{2} > 0,\forall h \in X$
    mert $f^{''}$ szigorú pozitív definit, másrészt
    $$\left| {\left[ {f''\left( {a + \tau th} \right) - f''\left( a \right)} \right]\left( {h,h} \right)} \right| \leqslant \underbrace {\left\| {f''\left( {a + \tau th} \right) - f''\left( a \right)} \right\|}_{ \to 0{\text{\;ha\;}}t \to 0,{\text{\;mert\;}}f'' \in C\left( a \right)} \cdot \underbrace {{{\left\| h \right\|}^2}}_{{\text{rögz}}},$$
    ami tart 0-hoz ha $t$ tart 0-hoz, így
    $$\frac{f\left( {a + th} \right) - f\left( a \right)}{t^{2}} = \frac{1}{2}f^{''}\left( a \right)\left( {h,h} \right) + \frac{1}{2}\left\lbrack {f^{''}\left( {a + \tau th} \right) - f^{''}\left( a \right)} \right\rbrack\left( {h,h} \right) > 0,$$
    ha $t$ elég kicsi.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Implicit függvénytétel
----------------------

Probléma: adott egy
$\left. \Phi:{\mathbb{R}}^{2}\rightarrow{\mathbb{R}} \right.$ függvény.
Egy $\Phi\left( {x,y} \right) = 0$ egyenlet milyen feltételek mellet
határoz meg egy $y = f\left( x \right)$ függvényt? Tekintsük a következő
példákat!

-   $\Phi\left( {x,y} \right): = x^{2} + y^{2} - 1 = 0$, ennek egy kör
    pontjai felelnek meg. Plusz feltétel lehet, hogy a megoldás
    valamelyik pont egy környezetében legyen, de még ekkor is lehet 2
    megoldás ($\left( 1,0 \right)$ és $\left( {- 1,0} \right)$
    környezetében).
-   $\Phi\left( {x,y} \right): = x^{2} + y^{2} + 1 = 0$, ennek viszont
    nincs megoldása.
-   $\Phi\left( {x,y} \right): = y^{2} - x^{2} = 0$, ennek két egyenes
    tesz eleget. Ha még le is szűkítjük az értelmezési tartományt úgy,
    hogy csak az egyik egyenes egy része legyen megoldás, akkor ugyan
    lokálisan függvényünk lesz (vagyis egyértelmű lesz $y$), de ilyet
    nem tudnánk csinálni az origó környezetében, mert ott metszik
    egymást az egyenesek. Ez azzal függ össze, hogy
    $\left. \partial_{2}\Phi\left( {x,y} \right) = 2y\Rightarrow\partial_{2}\Phi\left( 0,0 \right) = 0 \right.$.

<div class="tetel">

Tétel:\
Legyen
$\left. \Phi:{\mathbb{R}}^{n} \times {\mathbb{R}}\rightarrow{\mathbb{R}} \right.$-be
képező függvény, amely értelmezve van és folytonos valamilyen
$\left( {a,b} \right) \in {\mathbb{R}}^{n} \times {\mathbb{R}}$ pont egy
környezetében és $\Phi\left( {a,b} \right) = 0$, továbbá
$\exists\partial_{n + 1}\Phi$ és folytonos is $\left( {a,b} \right)$ egy
környezetében, és $\partial_{n + 1}\Phi\left( {a,b} \right) \neq 0$.
Ekkor létezik az $a$ pontnak olyan $B_{r}\left( a \right)$, az $b$
pontnak olyan $\left( {b - d,b + d} \right)$ környezete és
$\left. f:B_{r}\left( a \right)\rightarrow{\mathbb{R}} \right.$
folytonos függvény, hogy
$\left\{ {\left( {x,y} \right):\Phi\left( {x,y} \right) = 0,x \in B_{r}\left( a \right),y \in \left( {b - d,b + d} \right)} \right\} = \left\{ {\left( {x,f\left( x \right)} \right):x \in B_{r}\left( a \right)} \right\}$.

</div>

<div class="bizonyitas">

Bizonyítás:

-   Tekintsük az $n = 1$ esetet (könnyebb szemléletesen látni)! Pl tfh
    $\partial_{n + 1}\Phi\left( {a,b} \right) > 0$! Mivel
    $\partial_{n + 1}\Phi$ folytonos
    $\left. \Rightarrow\left( {a,b} \right) \right.$-nek van olyan
    környezete, ahol
    $\left. \partial_{n + 1}\Phi\left( {x,y} \right) > 0\Rightarrow\forall x \in B_{r_{1}}\left( a \right) \right.$
    rögzített $x$ esetén
    $\left. y\mapsto\Phi\left( {x,y} \right) \right.$ szigorú monoton
    nő.
    $\left. \Phi\left( {a,b} \right) = 0,y\mapsto\Phi\left( {x,y} \right) \right.$
    szigorúan monoton nő
    $\left. \Rightarrow\Phi\left( {a,b - d} \right) < 0 < \Phi\left( {a,b + d} \right) \right.$.
    Mivel $\Phi$ folytonos $\left( {a,b + d} \right)$ és
    $\left( {a,b - d} \right)$ pontok között
    $\left. \Rightarrow\exists r:0 < r \leq r_{1} \right.$, hogy
    $x \in B_{r}\left( a \right)$ esetén és
    $\Phi\left( {x,b - d} \right) < 0 < \Phi\left( {x,b + d} \right)$.\
    Alkalmazzuk a Bolzano-tételt rögzített $x \in B_{r}\left( a \right)$
    esetén $\left. y\mapsto\Phi\left( {x,y} \right) \right.$ függvényre!
    A tétel szerint ekkor $\exists f\left( x \right)$, hogy
    $b - d < f\left( x \right) < b + d$ esetén
    $\Phi\left( {x,f\left( x \right)} \right) = 0$. Mivel
    $\left. y\mapsto\Phi\left( {x,y} \right) \right.$ szigorú monoton
    nő, $f\left( x \right)$ egyértelmű.
-   Be kell látnunk még, hogy $f$ folytonos $B_{r}\left( a \right)$-n.
    Legyen $x_{0} \in B_{r}\left( a \right)$, és $\left( {a,b} \right)$
    helyett tekintsük az $\left( {x_{0},f\left( x_{0} \right)} \right)$
    pontot! Ekkor $b - d < f\left( x_{0} \right) < b + d$. Azt
    szeretnénk belátni, hogy $f$ folytonos $x_{0}$-ban. Legyen
    $\varepsilon > 0$ tetszőleges szám! Az előző állítás miatt
    $\exists\varepsilon':0 < \varepsilon' < \varepsilon$, hogy
    $\varepsilon'$ számot elég kicsire választva
    $b - d \leq f\left( x_{0} \right) - \varepsilon' < f\left( x_{0} \right) + \varepsilon' \leq b + d$.
    Ez utóbbit másképp felírva:
    $\left\lbrack {f\left( x_{0} \right) - \varepsilon',f\left( x_{0} \right) + \varepsilon'} \right\rbrack \subset \left\lbrack {b - d,b + d} \right\rbrack$.
    $\Phi\left( {x_{0},f\left( x_{0} \right)} \right) = 0$, ezért mivel
    $\Phi$ folytonos, $\exists\rho:x \in B_{\rho}\left( x_{0} \right)$
    esetén
    $\Phi\left( {x,f\left( x_{0} \right) - \varepsilon'} \right) < 0 < \Phi\left( {x,f\left( x_{0} \right) + \varepsilon'} \right)$.
    Ekkor a Bolzano tétel segítségével
    $\exists!y:\Phi\left( {x,y} \right) = 0,f\left( x_{0} \right) - \varepsilon' < y < f\left( x_{0} \right) + \varepsilon'$,
    node $y = f\left( x \right)$ és $\varepsilon' < \varepsilon$ miatt,
    minden $x \in B_{\rho}\left( x_{0} \right)$ pontra
    $f\left( x_{0} \right) - \varepsilon < f\left( x \right) < f\left( x_{0} \right) + \varepsilon$,
    tehát $f$ folytonos $x_{0}$ -ban.

</div>

### A tétel általánosítása $\left. \Phi:{\mathbb{R}}^{n} \times {\mathbb{R}}^{m}\rightarrow{\mathbb{R}}^{m} \right.$ függvényekre:

<div class="tetel">

Tétel:\
Tfh
$\left. \Phi:{\mathbb{R}}^{n} \times {\mathbb{R}}^{m}\rightarrow{\mathbb{R}}^{m} \right.$,
$\Phi\left( {a,b} \right) = 0$, értelmezve van $\left( {a,b} \right)$
pont egy környezetében és itt folytonos is, továbbá
$\left. y\mapsto\Phi\left( {x,y} \right) \right.$ folytonosan
differenciálható $\left( {a,b} \right)$ valamilyen környezetében.
Továbbá legyen
$\Phi: = \left( {\Phi_{1},\Phi_{2},...,\Phi_{m}} \right)$.
$\begin{pmatrix}
{\partial_{y_{1}}\Phi_{1}} & {\partial_{y_{2}}\Phi_{1}} & \cdots & {\partial_{y_{m}}\Phi_{1}} \\
{\partial_{y_{1}}\Phi_{2}} & {\partial_{y_{2}}\Phi_{2}} & \cdots & {\partial_{y_{m}}\Phi_{2}} \\
 \vdots & \vdots & \ddots & \vdots \\
{\partial_{y_{1}}\Phi_{m}} & {\partial_{y_{2}}\Phi_{m}} & \cdots & {\partial_{y_{m}}\Phi_{m}} \\
\end{pmatrix} = :F$, és tegyük fel, hogy
$\det\left( {F\left( {a,b} \right)} \right) \neq 0$. Ekkor
$\exists\left( {a,b} \right)$-nek olyan
$B_{r}\left( a \right) \times B_{\rho}\left( b \right)$ környezete, és
$\left. f:B_{r}\left( a \right)\rightarrow B_{\rho}\left( b \right) \subset {\mathbb{R}}^{m} \right.$
folytonos függvény, hogy
$\left\{ {\left( {x,y} \right) \in B_{r}\left( a \right) \times B_{\rho}\left( b \right):\Phi\left( {x,y} \right) = 0} \right\} = \left\{ {\left( {x,f\left( x \right)} \right):x \in B_{r}\left( a \right)} \right\}$.

</div>

<div class="tetel">

Tétel:\
Tfh teljesülnek az előbbi tétel feltételei és
$\left. x\mapsto\Phi\left( {x,y} \right) \right.$ függvény is
folytonosan differenciálható az $a$ környezetében, akkor
$\left. f:B_{r}\left( a \right)\rightarrow{\mathbb{R}}^{m} \right.$
differenciálható.

</div>

<div class="megj">

Megjegyzés:\
Ha tudjuk, hogy $f$ differencálható, akkor $f$ deriváltja kiszámolható.
$\Phi\left( {x,f\left( x \right)} \right) = 0$-t
$x \in B_{r}\left( a \right)$ szerint deriválva $$\begin{gathered}
  0 = {\partial _x}\Phi \left( {x,f\left( x \right)} \right) + {\partial _y}\Phi \left( {x,f\left( x \right)} \right)f'\left( x \right) \\ 
   \Downarrow  \\ 
  f'\left( x \right) =  - {\left[ {{\partial _y}\Phi \left( {x,f\left( x \right)} \right)} \right]^{ - 1}}\left[ {{\partial _x}\Phi \left( {x,f\left( x \right)} \right)} \right]. \\ 
\end{gathered} $$

</div>

### Inverz függvény tétel

<div class="tetel">

Tétel:\
Legyen $\left. g:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}}^{n} \right.$,
mely értelmezve van és folytonosan differenciálható a
$b \in {\mathbb{R}}^{n}$ egy környezetében, továbbá az alábbi mátrix
determinánsa nem 0 a $b$-ben.
$g: = \left( {g_{1},g_{2},...,g_{n}} \right),g^{\prime} = \begin{pmatrix}
{\partial_{1}g_{1}} & {\partial_{2}g_{1}} & \cdots & {\partial_{n}g_{1}} \\
{\partial_{1}g_{2}} & {\partial_{2}g_{2}} & \cdots & {\partial_{n}g_{2}} \\
 \vdots & \vdots & \ddots & \vdots \\
{\partial_{1}g_{n}} & {\partial_{2}g_{n}} & \cdots & {\partial_{n}g_{n}} \\
\end{pmatrix}$. Legyen $a: = g\left( b \right)$. Ekkor
$\left. \exists B_{r}\left( a \right),B_{r}\left( b \right),g^{- 1}:B_{r}\left( b \right)\rightarrow B_{r}\left( a \right) \right.$,
folytonosan differenciálható függvény, hogy
$\left\{ {\left( {x,y} \right) \in B_{r}\left( a \right) \times B_{r}\left( b \right):x = g\left( y \right)} \right\} = \left\{ {\left( {x,g^{- 1}\left( x \right)} \right):x \in B_{r}\left( a \right)} \right\}$.

</div>

<div class="megj">

Megjegyzés:\
A tétel szerint a $g$ függvénynek létezik lokális inverze, azaz $g$
függvényt a $b$ egy elég kis környezetére leszűkítve, létezik az inverz.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $\Phi\left( {x,y} \right): = x - g\left( y \right)$, ekkor
$\Phi\left( {a,b} \right) = a - g\left( b \right) = 0$,
$\partial_{y}\Phi\left( {x,y} \right) = - g^{\prime}\left( y \right)$ és
$\det\left( {g^{\prime}\left( b \right)} \right) \neq 0$. Az előbbi
képlet szerint
$\left\lbrack g^{- 1} \right\rbrack^{\prime}\left( x \right) = \left\lbrack {g^{\prime}\left( {g^{- 1}\left( x \right)} \right)} \right\rbrack^{- 1}$
(mátrix inverz).

</div>

Feltételes szélsőérték
----------------------

<div class="def">

Definíció:\
Legyen
$\left. F:{\mathbb{R}}^{n} \times {\mathbb{R}}^{m}\rightarrow{\mathbb{R}} \right.$-be
képező függvény,
$\left. \Phi:{\mathbb{R}}^{n} \times {\mathbb{R}}^{m}\rightarrow{\mathbb{R}}^{m} \right.$
és $\Phi\left( {a,b} \right): = 0$. Azt mondjuk, hogy az $F$ függvénynek
a $\Phi\left( {x,y} \right): = 0$ feltétel mellett lokális minimuma van
az $\left( {a,b} \right)$ pontban, ha
$\exists\delta > 0:x \in B_{\delta}\left( a \right),y \in B_{\delta}\left( b \right),\Phi\left( {x,y} \right) = 0$
esetén $F\left( {x,y} \right) \geq F\left( {a,b} \right)$.

</div>

Kérdés: milyen szükséges feltétel adható a feltételes szélsőérték
létezéséhez? Az implicit függvénytétel segítségével a feltételes
szélsőérték visszavezethető egy szokásos szélsőértékre (feltétel
nélkülire). Feltesszük, hogy implicit függvény differenciálhatóságáról
szóló tétel feltételei teljesülnek. A tétel feltételei: $\Phi$
folytonosan differenciálható $\left( {a,b} \right)$ egy környezetében és
$\det\left( {\partial_{y}\Phi\left( {a,b} \right)} \right) \neq 0$. Tfh
$\left( {a,b} \right)$-n $F$-nek feltételes szélsőértéke van. Tudjuk (az
implicit függvénytételből), hogy ekkor
$$\exists\delta_{1} > 0:\left\{ {\left( {x,y} \right) \in B_{\delta_{1}}\left( a \right) \times B_{\delta_{1}}\left( b \right):\Phi\left( {x,y} \right) = 0} \right\} = {\left\{ {\left( {x,f\left( x \right)} \right) \in B_{\delta_{1}}\left( a \right)} \right\},}$$
ahol
$\left. f:B_{\delta_{1}}\left( a \right)\rightarrow B_{\delta_{1}}\left( b \right) \right.$
folytonosan differenciálható,
$\delta_{2}: = \min\left\{ {\delta,\delta_{1}} \right\}$ jelöléssel
$x \in B_{\delta_{2}}\left( a \right)$ esetén
$F\left( {x,f\left( x \right)} \right) \geq F\left( {a,f\left( a \right)} \right)$,
tehát az $\left. x\mapsto F\left( {x,f\left( x \right)} \right) \right.$
függvénynek $a$-ben lokális minimuma van.\
$g\left( x \right) = F\left( {x,f\left( x \right)} \right)$,
$g^{\prime}\left( x \right) = \partial_{x}F\left( {x,f\left( x \right)} \right) + \partial_{y}F\left( {x,f\left( x \right)} \right) \cdot f^{\prime}\left( x \right)$,
a lokális minimumból következik, hogy
$0 = g^{\prime}\left( a \right) = \partial_{x}F\left( {a,b} \right) + \partial_{y}F\left( {a,b} \right)f^{\prime}\left( a \right)$
$f^{\prime}\left( a \right) = - \left\lbrack {\partial_{y}\Phi\left( {a,b} \right)} \right\rbrack^{- 1} \cdot \left\lbrack {\partial_{x}\Phi\left( {a,b} \right)} \right\rbrack$,
ezt az előzőbe visszahelyettesítve
$$g'\left( a \right) = {\partial _x}F\left( {a,b} \right)\underbrace { - {\partial _y}F\left( {a,b} \right){{\left[ {{\partial _y}\Phi \left( {a,b} \right)} \right]}^{ - 1}}}_{: = \lambda }\left[ {{\partial _x}\Phi \left( {a,b} \right)} \right] = 0$$
Jelölés:
$G\left( {x,y} \right) = F\left( {x,y} \right) + \lambda\Phi\left( {x,y} \right)$

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Észrevétel: egyrészt
$0 = g^{\prime}\left( a \right) = \partial_{x}F\left( {a,b} \right) + \lambda\partial_{x}\Phi\left( {a,b} \right) = \partial_{x}G\left( {a,b} \right)$,
másrészt
$\lambda = - \left\lbrack {\partial_{y}F\left( {a,b} \right)} \right\rbrack\left\lbrack {\partial_{y}\Phi\left( {a,b} \right)} \right\rbrack^{- 1}$
így írható:
$\partial_{y}G\left( {a,b} \right) = \lambda\left\lbrack {\partial_{y}\Phi\left( {a,b} \right)} \right\rbrack + \left\lbrack {\partial_{y}F\left( {a,b} \right)} \right\rbrack = 0$.
Ezen kívül tudjuk, hogy $\Phi\left( {a,b} \right) = 0$.

<div class="tetel">

Tétel:\
Tfh $F$ és $\Phi$ folytonosan differenciálható $\left( {a,b} \right)$
egy környezetében, továbbá
$\Phi\left( {a,b} \right) = 0,\,\partial_{y}\Phi\left( {a,b} \right)$
mátrix determinánsa nem 0. Ha
$\left. F:{\mathbb{R}}^{n} \times {\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
függvénynek $\left( {a,b} \right)$ -ben lokális szélsőértéke van a
$\Phi\left( {x,y} \right) = 0$ feltétel mellett, akkor a
$G\left( {x,y} \right) = F\left( {x,y} \right) + \lambda\Phi\left( {x,y} \right)$
függvényre
$0 = \partial_{x}G\left( {a,b} \right) = \partial_{x}F\left( {a,b} \right) + \lambda\partial_{x}\Phi\left( {a,b} \right)$
és
$0 = \partial_{y}G\left( {a,b} \right) = \partial_{y}F\left( {a,b} \right) + \lambda\partial_{y}\Phi\left( {a,b} \right)$.
Itt
$\lambda = \left( {\lambda_{1},\lambda_{2},...,\lambda_{m}} \right)$.

</div>

<div class="megj">

Megjegyzés:\
A fentiek szerint az $a \in {\mathbb{R}}^{n}$, $b \in {\mathbb{R}}^{m}$
és $\lambda \in {\mathbb{R}}^{m}$ ismeretlenekre $n + 2m$ egyenletet
nyertünk. Ennek egyértelmű megoldására van esély.

</div>

Vonalintegrál
=============

Rövid összefoglalás a Reimann-integrálról.\
Legyen
$\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
korlátos függvény! Tekintsük $\left\lbrack {a,b} \right\rbrack$ egy
véges felosztását!
$a: = x_{0} < x_{1} < x_{2} < ... < x_{k - 1} < x_{k} < ... < x_{n}: = b$.
Legyen $x_{k - 1} < \xi_{k} < x_{k}$, ekkor definiáljuk:
$t\left( \tau \right): = {\sum\limits_{k = 1}^{n}{f\left( \xi_{k} \right)}}\left( {x_{k} - x_{k - 1}} \right)$
(ahol $\tau$ jelöli a felosztást). Az $f$ függvényt Reimann szerint
integrálhatónak nevezzük, ha
$\left. t\left( \tau \right)\rightarrow I \right.$, ha a felosztást
minden határon túl finomítjuk. Ez azt jelenti, hogy
$\forall\varepsilon > \exists\delta > 0$, hogy ha a felosztás
$\delta$-nál finomabb (minden részintervallum $< \delta$), akkor
$\left| {t\left( \tau \right) - I} \right| < \varepsilon$. Cél: röviden
bizonyítjuk, hogy ha $f$ folytonos, akkor $f$ Reimann integrálható.\
Felső összeg:
$S\left( \tau \right): = {\sum\limits_{k = 1}^{n}{M_{k}\left( {x_{k} - x_{k - 1}} \right)}}$,
ahol $M_{k}: = \sup\limits_{\lbrack{x_{k - 1},x_{k}}\rbrack}f$, alsó
összeg:
$s\left( \tau \right): = {\sum\limits_{k = 1}^{n}{m_{k}\left( {x_{k} - x_{k - 1}} \right)}}$,
ahol $m_{k}: = \inf\limits_{\lbrack{x_{k - 1},x_{k}}\rbrack}f$.

<div class="allitas">

Állítás:\
Bármilyen $\tau$ felosztáshoz tartozó $s\left( \tau \right)$ alsó összeg
$\leq$ bármely $\tau'$ felosztáshoz tartozó $S\left( {\tau'} \right)$
felső összeg.

</div>

Következmény: a felső összegek halmaza alulról korlátos, az alsó
összegek halmaza felülről korlátos. Ebből következik, hogy
$\exists\inf\limits_{\tau}S\left( \tau \right) \geq \sup\limits_{\tau}s\left( \tau \right)$.

<div class="megj">

Megjegyzés:\
$\left. m_{k} \leq f\left( \xi_{k} \right) \leq M_{k}\Rightarrow s\left( \tau \right) \leq t\left( \tau \right) \leq S\left( \tau \right) \right.$.

</div>

<div class="def">

Definíció:\
Oszcillációs összeg:
$O\left( \tau \right): = S\left( \tau \right) - s\left( \tau \right)$.

</div>

<div class="tetel">

Tétel:\
Tfh
$\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonos függvény. Ekkor az $O\left( \tau \right)$ oszcillációs összeg
tart 0-hoz, ha a felosztást minden határon túl finomítjuk, azaz
$\forall\varepsilon > 0\exists\delta > 0$, hogy ha a felosztást
$\delta$-nál finomabb, akkor
$0 \leq O\left( \tau \right) \leq \varepsilon$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Az egyenletes folytonosság tétele (Heine) szerint
($\left\lbrack {a,b} \right\rbrack$ korlátos és zárt, tehát
sorozatkompakt) $f$ egyenletesen folytonos. Ez pontosan azt jelenti,
hogy
$\left. \forall\varepsilon > 0\exists\delta > 0:\left| {x_{1} - x_{2}} \right| \leq \delta\Rightarrow\left| {f\left( x_{1} \right) - f\left( x_{2} \right)} \right| \leq \varepsilon \right.$.
Ezért $\delta$-nál finomabb felosztást választva $$\begin{aligned}
  O\left( \tau  \right) = S\left( \tau  \right) - s\left( \tau  \right) &  = \mathop \sum \limits_{k = 1}^n \underbrace {\left( {{M_k} - {m_k}} \right)}_{ \leqslant \varepsilon }\left( {{x_k} - {x_{k - 1}}} \right) \\ 
   &  \leqslant \varepsilon \mathop \sum \limits_{k = 1}^n \left( {{x_k} - {x_{k - 1}}} \right) = \varepsilon  \cdot \left( {b - a} \right).\\ 
\end{aligned} $$

</div>

Következmény: ha
$\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
folytonos, akkor Reimann integrálható, azaz ekkor
$\left. t\left( \tau \right)\rightarrow I \right.$, ha a felosztást
finomítjuk. Ugyanis a tétel szerint tetszőleges $\varepsilon > 0$
számhoz $\exists\delta > 0$, hogy ha a felosztást $\delta$-nál finomabb,
akkor
$$\left. 0 \leq S\left( \tau \right) - s\left( \tau \right) < \varepsilon\Rightarrow\inf\limits_{t}S\left( \tau \right) = \sup\limits_{\tau}s\left( \tau \right): = I. \right.$$
Ekkor
$s\left( \tau \right) \leq t\left( \tau \right) \leq S\left( \tau \right)$,
$\left| {t\left( \tau \right) - I} \right| < \varepsilon$, ha $\tau$
felosztás $\delta$-nál finomabb.

<div class="megj">

Megjegyzés:\
$S\left( \tau \right)$ és $s\left( \tau \right)$ is tart $I$-hez.

</div>

Folytonosan differenciálható út, illetve görbe, ívhossz kiszámítása
-------------------------------------------------------------------

Legyen egy
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonosan differenciálható! Ekkor azt mondjuk, hogy $\phi$ egy
folytonosan differenciálható $L$ utat határoz meg az ${\mathbb{R}}^{n}$
térben.
$t \in \left\lbrack {\alpha,\beta} \right\rbrack,\phi\left( t \right) \in {\mathbb{R}}^{n}$,
a mozgó pont a $t$ időben a $\phi\left( t \right)$ helyen van.

<div class="allitas">

Állítás:\
A fönt értelmezett út hossza:
$\int\limits_{\alpha}^{\beta}{\left| {\overset{.}{\phi}\left( t \right)} \right|dt}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
A legyen
$\alpha = t_{0} < t_{1} < t_{2} < ... < t_{k - 1} < t_{k} < ... < t_{m} = \beta$!
Az ívhossz definíció szerint a felosztáshoz tartozó törött vonal
hosszának limesze, miközben a felosztást finomítjuk. A törött vonal
hossza
${\sum\limits_{k = 1}^{m}\left| {\phi\left( t_{k} \right) - \phi\left( t_{k - 1} \right)} \right|} = {\sum\limits_{k = 1}^{m}\left| \frac{\phi\left( t_{k} \right) - \phi\left( t_{k - 1} \right)}{t_{k} - t_{k - 1}} \right|}\left( {t_{k} - t_{k - 1}} \right) = {\sum\limits_{k = 1}^{m}\sqrt{\sum\limits_{j = 1}^{n}\left\lbrack \frac{\phi_{j}\left( t_{k} \right) - \phi_{j}\left( t_{k - 1} \right)}{t_{k} - t_{k - 1}} \right\rbrack^{2}}}\left( {t_{k} - t_{k - 1}} \right)$,
mely a Lagrange-féle középértéktétellel
$= {\sum\limits_{k = 1}^{m}{\sqrt{\sum\limits_{j = 1}^{n}\left( {{\overset{.}{\phi}}_{j}\left( \tau_{jk} \right)} \right)^{2}}\left( {t_{k} - t_{k - 1}} \right)}}$,
ahol $t_{k - 1} \leq \tau_{jk} \leq t_{k}$. Jó lenne, ha e helyett ilyen
alakú összeg lenne:
${\sum\limits_{k = 1}^{m}\sqrt{\sum\limits_{j = 1}^{n}{{\overset{.}{\phi}}_{j}\left( \tau_{k} \right)^{2}}}}\left( {t_{k} - t_{k - 1}} \right) = {\sum\limits_{k = 1}^{m}{\left| {\overset{.}{\phi}\left( \tau_{k} \right)} \right|\left( {t_{k} - t_{k - 1}} \right)}}$,
ez nem mást, mint
$\left. t\mapsto\left| {\overset{.}{\phi}\left( t \right)} \right| \right.$
integrál közelítő összege. Mivel ez a függvény folytonos, az integrál
közelítő összeg tart az integrálhoz. Belátható, hogy a kétféle összeg
különbsége tart 0-hoz, ha a felosztást minden határon túl finomítjuk.

</div>

<div class="def">

Definíció:\
Legyen
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonosan differenciálható, $\phi$ injektív,
$\overset{.}{\phi}\left( t \right) \neq 0,\forall t \in \left\lbrack {\alpha,\beta} \right\rbrack$.
Ekkor azt mondjuk, hogy $\phi$ egyszerű, folytonosan differenciálható
$L$ utat határoz meg. Ekkor
$\Gamma: = R_{\phi} \subset {\mathbb{R}}^{n}$ halmazt egyszerű,
folytonosan differenciálható görbének nevezzük.

</div>

<div class="tetel">

Tétel:\
Ha $\phi$ és $\widetilde{\phi}$ olyan
$\left. \left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
függvények, melyek egyszerű folytonosan differenciálható utat határoznak
meg és $R_{\phi} = R_{\widetilde{\phi}}$, továbbá
$\phi\left( \alpha \right) = \widetilde{\phi}\left( \alpha \right)$ és
$\phi\left( \beta \right) = \widetilde{\phi}\left( \beta \right)$, akkor
${\int\limits_{\alpha}^{\beta}{\left| {\overset{.}{\phi}\left( t \right)} \right|dt}} = {\int\limits_{\alpha}^{\beta}{\left| {\overset{.}{\widetilde{\phi}}\left( \widetilde{t} \right)} \right|d\widetilde{t}}}$.
Ezt nevezzük $\Gamma = R_{\phi}$ egyszerű folytonosan differenciálható
görbe ívhosszának.

</div>

<div class="megj">

Megjegyzés:\
Ha $\phi\left( \alpha \right) = \phi\left( \beta \right)$, akkor
egyszerű zárt folytonosan differenciálható útról (illetve görbéről)
beszélünk.

</div>

<div class="def">

Definíció:\
Legyen
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonosan differenciálható! Ez meghatároz egy $L$ folytonosan
differenciálható utat. Legyen $\Gamma: = R_{\phi}$ és
$\left. f:\Gamma\rightarrow{\mathbb{R}} \right.$ folytonos függvény.
Értelmezni akarjuk az $f$ függvénynek az $x_{k}$ változó szerinti
vonalintegrálját. Tekintsük a következő közelítő összeget:
$\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right)\left\lbrack {\phi_{j}\left( t_{k} \right) - \phi_{j}\left( t_{k - 1} \right)} \right\rbrack}$,
ahol
$\tau \in \left\lbrack {t_{k - 1},t_{k}} \right\rbrack \subset \left\lbrack {\alpha,\beta} \right\rbrack$.
Ha ez tart valamely $I$ véges számhoz, miközben a felosztást finomítjuk,
akkor ezt nevezzük $f$-nek $x_{j}$ szerinti vonalintegráljának, s így
jelöljük: $\int_{L}{f\left( x \right)dx_{j}}$. Számoljuk ki a limeszt!
${\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right)\left\lbrack {\phi_{j}\left( t_{k} \right) - \phi_{j}\left( t_{k - 1} \right)} \right\rbrack}} = {\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right)\frac{\phi_{j}\left( t_{k} \right) - \phi_{j}\left( t_{k - 1} \right)}{t_{k} - t_{k - 1}}\left( {t_{k} - t_{k - 1}} \right)}}$,
mely a Lagrange-féle középértéktétel segítségével
$= {\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right){\overset{.}{\phi}}_{j}\left( \tau_{k}^{\ast} \right)}}\left( {t_{k} - t_{k - 1}} \right)$,
ahol $t_{k - 1} < \tau_{k}^{\ast} < t$. Ha e helyett a következő összeg
lenne, az nagyon jó volna:
$$\mathop \sum \limits_{k = 1}^m f\left( {\phi \left( {{\tau _k}} \right)} \right){\dot \phi _j}\left( {{\tau _k}} \right)\left( {{t_k} - {t_{k - 1}}} \right) \to \underbrace {\mathop \smallint \limits_\alpha ^\beta  f\left( {\phi \left( t \right)} \right){{\dot \phi }_j}\left( t \right)dt}_{\mathop \smallint \limits_\alpha ^\beta  \left( {f \circ \phi } \right) \cdot {{\dot \phi }_j}}: = \mathop \smallint \limits_L f\left( x \right)d{x_j}.$$Belátható,
hogy a két összeg különbsége 0-hoz tart, ha a felosztást minden határon
túl finomítjuk.

</div>

<div class="allitas">

Állítás:\
Ha $\Gamma$ egyszerű folytonosan differenciálható görbe, amelyet egy
valamely $L$ egyszerű folytonosan differenciálható úttal járunk be,
akkor a vonalintegrál értéke független a $\phi$ paraméterezés
megválasztásától, ha rögzítettek a kezdő és végpontok (a bejárás iránya
is adott).

</div>

<div class="def">

Definíció:\
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonosan differenciálható, $L$ folytonosan differenciálható út,
$\Gamma = R_{\phi}$,
$\left. g:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$ folytonos.
Tekintsük
$\left. {\sum\limits_{k = 1}^{m}\left\langle {g\left( {\phi\left( \tau_{k} \right)} \right),\phi\left( t_{k} \right) - \phi\left( t_{k - 1} \right)} \right\rangle}\rightarrow? \right.$
Ha a limesz létezik, akkor ezt így jelöljük: $\int_{L}{gdx}$.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonosan differenciálható, ekkor ez egy $L$ folytonosan
differenciálható utat határoz meg.
$\Gamma: = R_{\phi} \subset {\mathbb{R}}^{n}$. Ha $\phi$ injektív és
$\overset{.}{\phi}\left( t \right) \neq 0$ minden $t$-re, akkor egyszerű
folytonosan differenciálható utat határoz meg, $\Gamma$ -t egyszerű
folytonosan differenciálható görbének nevezzük. (Ekkor a fenti integrált
a $\Gamma$ görbén vett integrálnak nevezzük.)

1.  Legyen $\left. f:\Gamma\rightarrow{\mathbb{R}} \right.$ folytonosan
    differenciálható függvény. Ekkor nevezzük a
    $$\lim\limits_{\Delta t\rightarrow 0}{\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right)\left\lbrack {\phi_{j}\left( t_{k} \right) - \phi_{j}\left( t_{k - 1} \right)} \right\rbrack}}: = {\int_{L}{f\left( x \right)dx_{j}}}$$
    mennyiséget $f$-nek $j$-edik változója szerinti vonalintegráljának.
    A felosztást finomítva a fenti közelítő összeg tart
    ${\int\limits_{\alpha}^{\beta}{f\left( {\phi\left( t \right)} \right){\overset{.}{\phi}}_{j}\left( t \right)dt}} = {\int\limits_{\alpha}^{\beta}{\left( {f \circ \phi} \right){\overset{.}{\phi}}_{j}}}$
    integrálhoz.
2.  Legyen $\left. g:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$
    folytonos függvény. Tekintsük a következő mennyiséget:
    $$\sum\limits_{k = 1}^{m}{\left\langle {g\left( {\phi\left( \tau_{k} \right)} \right),\phi\left( t_{k} \right) - \phi\left( t_{k - 1} \right)} \right\rangle.}$$Kérdés:
    ennek van-e limesze, miközben a felosztást finomítjuk? A vizsgált
    mennyiséget átírva:
    $$\mathop \sum \limits_{k = 1}^m \left[ {\mathop \sum \limits_{j = 1}^n {g_j}\left( {\phi \left( {{\tau _k}} \right)} \right)\left( {{\phi _j}\left( {{t_k}} \right) - {\phi _j}{t_{k - 1}}} \right)} \right] = \mathop \sum \limits_{j = 1}^n \underbrace {\left[ {\mathop \sum \limits_{k = 1}^m {g_j}\left( {\phi \left( {{\tau _k}} \right)} \right)\left( {{\phi _j}\left( {{t_k}} \right) - {\phi _j}\left( {{t_{k - 1}}} \right)} \right)} \right]}_{ \to \mathop \smallint \limits_L {g_j}\left( x \right)d{x_j} = \mathop \smallint \limits_a^b \left( {{g_j} \circ \phi } \right){{\dot \phi }_j}},$$
    ahol $g = \left( {g_{1},g_{2},...,g_{n}} \right)$. Felcserélve az
    összegzést az integrálással, a vizsgált mennyiség hatáértéke
    ${\int\limits_{\alpha}^{\beta}{\sum\limits_{j = 1}^{n}{\left( {g_{j} \circ \phi} \right){\overset{.}{\phi}}_{j}}}} = {\int\limits_{\alpha}^{\beta}{\left\langle {g\left( {\phi\left( t \right)} \right),\overset{.}{\phi}\left( t \right)} \right\rangle dt = :{\int_{L}{g\left( x \right)dx}}}}$.
    Ez mennyiség elég fontos fizikai alkalmazásokban, ezért mi is sokat
    fogunk vele foglalkozni. Szemléletes jelentést társíthatunk hozzá,
    ha $g\left( x \right)$ az $x$ pontban ható erő. Ekkor az integrál
    értéke a görbén végigmozogva az erőtér által végzett munka.
3.  Ívhossz szerinti vonalintegrál. Az előzőhöz képest csak
    $\left. f:\Gamma\rightarrow{\mathbb{R}} \right.$ a változás. Ekkor
    tekintsük a következő összeget:
    $\sum\limits_{k = 1}^{m}{f\left( {\phi\left( \tau_{k} \right)} \right)\left| {\phi\left( t_{k} \right) - \phi\left( t_{k - 1} \right)} \right|}$.
    Ez mihez tart? $$\begin{aligned}
       & \sum\limits_{k = 1}^m {f\left( {\phi \left( {{\tau _k}} \right)} \right)\left| {\phi \left( {{t_k}} \right) - \phi \left( {{t_{k - 1}}} \right)} \right|}  =  \\ 
       =  & \sum\limits_{k = 1}^m {f\left( {\phi \left( {{\tau _k}} \right)} \right)\underbrace {\left| {\frac{{\phi \left( {{t_k}} \right) - \phi \left( {{t_{k - 1}}} \right)}}{{{t_k} - {t_{k - 1}}}}} \right|}_{{\text{Lagrange: }} = \dot \phi \left( {\tau _k^ * } \right)}} \left( {{t_k} - {t_{k - 1}}} \right) \to \int\limits_\alpha ^\beta  {f\left( {\phi \left( t \right)} \right)\left| {\dot \phi \left( t \right)} \right|dt} : = \int_L {fds}  \\ 
    \end{aligned}$$

<div class="megj">

Megjegyzések:\
Mind a 3 esetben ha $\Gamma$ egyszerű folytonosan differenciálható
görbe, akkor a $\Gamma$ -n vett integrál a paraméterezéstől függetlenül
mindig ugyanaz, ha rögzítjük a kezdő és végpontokat (vagyis a bejárás
irányát is megtartjuk). Célszerű értelmezni a szakaszonként folytonosan
differenciálható utat (egyszerű szakaszonként folytonosan
differenciálható görbét).

</div>

<div class="def">

Definíció:\
Legyen
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
folytonos és $\overset{.}{\phi}$ szakaszonként folytonos függvény, azaz
legyen olyan
$\alpha < \alpha_{1} < ... < \alpha_{l} < \alpha_{l + 1} < ... < \alpha_{r} = \beta$
felosztás, hogy létezzen
$\left. \overset{.}{\phi} \right|_{({\alpha_{k - 1},\alpha_{k}})}$ és
folytonos is $\forall k \in \left\{ {1,2,...,r} \right\}$ -ra, és a
végpontokban létezzen egyoldali határértéke. Ekkor azt mondjuk, hogy
$\phi$ szakaszonként folytonosan differenciálható utat határoz meg.
Értelmezhető az egyszerű szakaszonként folytonosan differenciálható út.
A fenti 3 definíció és állítások átvihetők erre az esetre. Legyen
$\Gamma: = R_{\phi}$ és
$\left. g:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$ folytonos függvény.
$\int_L {g\left( x \right)dx} = \mathop \smallint \limits_\alpha ^\beta \underbrace {\left\langle {g\left( {\phi \left( t \right)} \right),\dot \phi \left( t \right)} \right\rangle }_{{\text{szakaszonként folytonos}}}dt$.

</div>

A vonalintegrál alaptulajdonságai
---------------------------------

1.  Legyen
    $\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
    (szakaszonként) folytonosan differenciálható függvény,
    $\Gamma: = R_{\phi}$ és
    $\left. g,h:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$ folytonos
    függvények. Ekkor $\lambda,\mu \in {\mathbb{R}}$ esetén
    $${\int_{L}{\left( {\lambda g + \mu h} \right)\left( x \right)dx}} = \lambda{\int_{L}{g\left( x \right)dx}} + \mu{\int_{L}{h\left( x \right)dx.}}$$
2.  Legyenek
    $\left. \phi_{1}:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
    és
    $\left. \phi_{2}:\left\lbrack {\beta,\gamma} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
    szakaszonként folytonosan differenciálható függvények, és legyen
    $\phi_{1}\left( \beta \right) = \phi_{2}\left( \beta \right)$. Ekkor
    legyen $$\phi\left( t \right): = \left\{ {\begin{matrix}
    {\phi_{1}\left( t \right)} & {t \in \left\lbrack {\alpha,\beta} \right\rbrack} \\
    {\phi_{2}\left( t \right)} & {t \in \left\lbrack {\beta,\gamma} \right\rbrack} \\
    \end{matrix},} \right.$$ vagyis
    $\left. \phi:\left\lbrack {\alpha,\gamma} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$.
    Ekkor $\phi$ is szakaszonként folytonosan differenciálható függvény
    lesz. $\Gamma: = R_{\phi}$ illetve legyen
    $\left. g:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$ függvény
    folytonos! Ekkor
    ${\int_{L}{g\left( x \right)dx}} = {\int_{L_{1}}{g\left( x \right)dx}} + {\int_{L_{2}}{g\left( x \right)dx}}$
3.  Legyen
    $\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$
    (szakaszonként) folytonosan differenciálható függvény, ez meghatároz
    egy $L$ szakaszonként folytonosan differenciálható utat,
    $\Gamma: = R_{\phi} \subset {\mathbb{R}}^{n}$,
    $\left. g:\Gamma\rightarrow{\mathbb{R}}^{n} \right.$. Ekkor
    $$\begin{aligned}
      \left| {\int_L {g\left( x \right)dx} } \right| &  = \left| {\int_L {\left\langle {g\left( {\phi \left( t \right)} \right),\dot \phi \left( t \right)} \right\rangle dt} } \right| \\ 
       &  \leqslant \mathop \smallint \limits_\alpha ^\beta  \left| {\left\langle {g\left( {\phi \left( t \right)} \right),\dot \phi \left( t \right)} \right\rangle } \right|dt \leqslant \mathop \smallint \limits_\alpha ^\beta  \underbrace {\left| {g\left( {\phi \left( t \right)} \right)} \right|}_{ \leqslant \mathop {\sup }\limits_\Gamma  \left| g \right|} \cdot \left| {\dot \phi \left( t \right)} \right|dt, \\ 
    \end{aligned} $$ azaz
    $\left| {\int_{L}{g\left( x \right)dx}} \right| \leq \sup\limits_{\Gamma}\left| g \right| \cdot {\int\limits_{\alpha}^{\beta}{\left| {\overset{.}{\phi}\left( t \right)} \right|dt}} = \sup\limits_{\Gamma}\left| g \right| \cdot \left\lbrack {L\text{~ívhossza}} \right\rbrack$.

A vonalintegrál úttól való függetlensége
----------------------------------------

Adott valamilyen $\Omega \subset {\mathbb{R}}^{n}$ tartomány (nyílt és
összefüggő). Legyen $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$
folytonos függvény.

Kérdés: milyen feltételek mellet lesz igaz, hogy az $\Omega$ két
tetszőleges pontját összekötő szakaszonként folytonosan differenciálható
út mentén vett $\int_{L}{f\left( x \right)dx}$ integrálja $f$-nek nem
függ az úttól egészében, csak annak végpontjaitól?

<div class="tetel">

Tétel:\
Tfh $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonos
függvény és $\int_{L}{f\left( x \right)dx}$ értéke csak a kezdő és
végpontoktól függ bármely $\Omega$-ban haladó $L$ út esetén. Legyen
$a \in \Omega$ és $\xi \in \Omega$ tetszőleges pontok, $a$ rögzített.
Tekintsünk egy tetszőleges, olyan $\Omega$-ban haladó szakaszonként
folytonosan differenciálható utat, amely $a$-t összeköti $\xi$-vel. (Mi
az, hogy összeköti? Azt jelenti ez, hogy
$\left. \exists\phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{n} \right.$,
mely szakaszonként folytonosan differenciálható és
$\phi\left( t \right) \in \Omega,\forall t \in \left\lbrack {\alpha,\beta} \right\rbrack$,
$\phi\left( \alpha \right) = a$ és $\phi\left( \beta \right) = \xi$.)
Legyen
$F\left( \xi \right): = {\int_{L}{f\left( x \right)dx}} = {\int\limits_{a}^{\xi}{f\left( x \right)dx}}$.
Ekkor $\partial_{j}F\left( \xi \right) = f_{j}\left( \xi \right)$, azaz
$F^{\prime}\left( \xi \right) = f\left( \xi \right)$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $h \in {\mathbb{R}}\text{\textbackslash}\left\{ 0 \right\}$,
$h^{(j)}: = \left( {0,0,...h,0,...,0} \right) \in {\mathbb{R}}^{n}$ (a
$j$-edik komponense a $h$). Az $a$-tól a $\xi + h^{(j)}$-ig terjedő utat
definiálja a következő függvény.
$$\psi \left( t \right): = \left\{ {\begin{array}{*{20}{c}}
  {\phi \left( t \right)}&{\alpha  \leqslant t \leqslant \beta } \\ 
  {\left( {{\xi _1},...,{\xi _j} + t - \beta ,...,{\xi _n}} \right)}&{\beta  \leqslant t \leqslant \beta  + h} 
\end{array}} \right.$$ Ekkor $\beta \leq t \leq \beta + h$ esetén
$\overset{.}{\psi}\left( t \right) = \left( 0,...,1,...,0 \right)$.
Ekkor $$\begin{aligned}
  \frac{{F\left( {\xi  + {h^{\left( j \right)}}} \right) - F\left( \xi  \right)}}{h} &  = \frac{1}{h}\left[ {\mathop \smallint \limits_a^{\xi  + {h^{\left( j \right)}}} f\left( x \right)dx - \mathop \smallint \limits_a^\xi  f\left( x \right)dx} \right] \\ 
   &  = \frac{1}{h}\mathop \smallint \limits_\xi ^{\xi  + {h^{\left( j \right)}}} f\left( x \right)dx \\ 
   &  = \frac{1}{h}\mathop \smallint \limits_\beta ^{\beta  + h} \left\langle {f\left( {\psi \left( t \right)} \right),\dot \psi \left( t \right)} \right\rangle dt \\ 
   &  = \frac{1}{h}\mathop \smallint \limits_\beta ^{\beta  + h} {f_j}\left( {{\xi _1},...,{\xi _j} + t - \beta ,...,{\xi _n}} \right)dt \\ 
   &  = {f_j}\left( {{\xi _1},...,{\xi _j} + \tau  - \beta ,...,{\xi _n}} \right) \to {f_j}\left( {{\xi _1},...,{\xi _j},...,{\xi _n}} \right), \\ 
\end{aligned} $$ ahol $\tau$ valamilyen alkalmasan választott
$\beta < \tau < \beta + h$ szám (az egyenlőség az integrálszámítás
középérték tételéből következik).

</div>

<div class="def">

Definíció:\
Legyen $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ (egyszerűség
kedvéért) folytonos, $\Omega \subset {\mathbb{R}}^{n}$ tartomány. Ha
$\left. \Phi:\Omega\rightarrow{\mathbb{R}} \right.$ függvényre
$\Phi^{\prime} = f$, akkor $\Phi$-t $f$ primitív függvényének nevezzük.

</div>

<div class="megj">

Megjegyzés:

1.  Ha $f$ folytonos, akkor $\Phi^{\prime} = f$ az $\Omega$-n azzal
    ekvivalens, hogy $\partial_{j}\Phi = f_{j},\forall j$. Az állítás
    fordítottja is igaz, mert ha $\partial_{j}\Phi$ létezik és folytonos
    $\Omega$-n $\left. \Rightarrow\Phi \right.$ differenciálható
    $\Omega$-n,
    $f = \left\lbrack {\partial_{1}\Phi,...,\partial_{n}\Phi} \right\rbrack$.
    (Ha $\partial_{j}\Phi$ létezik $\Omega$-n $\Rightarrow\Phi$
    diffható, csak ha folytonos is $\partial_{j}\Phi,\forall j$)
2.  A fenti tétel úgy is fogalmazható, hogy ha
    $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonos
    függvényre $\int_{L}{f\left( x \right)dx}$ csak $L$ kezdő és
    végpontjától függ, akkor $f$-nek létezik primitív függvénye,
    mégpedig $F$, amelyre
    $F\left( \xi \right) = {\int\limits_{a}^{\xi}{f\left( x \right)dx}}$.
3.  Ha $\Phi$ függvény $f$-nek primitív függvénye
    $\left. \Rightarrow\Phi + c \right.$ is primitív függvénye, ahol
    $c \in {\mathbb{R}}$.

</div>

<div class="tetel">

Tétel:\
Tfh $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonos és
$\Phi^{\prime} = f$ (vagyis $f$-nek létezik primitív függvénye). Ekkor
$\int_{L}{f\left( x \right)dx}$ értéke csak $L$ kezdő és végpontjától
függ, minden $\Omega$-n haladó szakaszonként folytonosan
differenciálható $L$ út esetén.

</div>

<div class="bizonyitas">

Bizonyítás:\
Egyszerűség kedvéért először tfh $L$ folytonosan differenciálható,
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow\Omega \right.$
folytonosan differenciálható, $\phi\left( \alpha \right) = a$ és
$\phi\left( \beta \right) = b$. $$\begin{aligned}
  \int_L {f\left( x \right)dx}  &  = \mathop \smallint \limits_\alpha ^\beta  \left\langle {f\left( {\phi \left( t \right)} \right),\dot \phi \left( t \right)} \right\rangle dt \\ 
   &  = \int\limits_\alpha ^\beta  {\sum\limits_{j = 1}^n {{f_j}\left( {\phi \left( t \right)} \right){{\dot \phi }_j}\left( t \right)} dt}  \\ 
   &  = \int\limits_\alpha ^\beta  {\sum\limits_{j = 1}^n {{\partial _j}\Phi \left( {\phi \left( t \right)} \right){{\dot \phi }_j}\left( t \right)dt} }  = \int\limits_\alpha ^\beta  {\frac{{d\Phi \left( {\phi \left( t \right)} \right)}}{{dt}}dt},  \\ 
\end{aligned} $$ mely a Newton-Leibniz formula felhasználásával
$= \Phi\left( {\phi\left( \beta \right)} \right) - \Phi\left( {\phi\left( \alpha \right)} \right) = \Phi\left( b \right) - \Phi\left( a \right)$.

</div>

<div class="tetel">

Tétel:\
[]{#zartgorbe} legyen $\Omega \subset {\mathbb{R}}^{n}$ tetszőleges
tartomány, $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$
folytonos függvény. Ekkor $\int_{L}{f\left( x \right)dx}$ értéke csak
$L$-nek kezdő és végpontjától függ bármely $\Omega$-ban haladó,
szakaszonként folytonosan differenciálható $L$ út esetén
$\left. \Leftrightarrow f \right.$-nek létezik primitív függvénye.

</div>

<div class="megj">

Megjegyzés:\
$\int_{L}{f\left( x \right)dx}$ értéke csak a kezdő és végpontoktól függ
$\Leftrightarrow$ bármely szakaszonként folytonosan differenciálható
zárt út mentén az integrál értéke 0.

</div>

<div class="allitas">

Állítás:\
Legyen $\Phi$ az $f$ folytonos függvény primitív függvénye és
$F\left( \xi \right): = {\int\limits_{a}^{\xi}{f\left( x \right)dx}}$.
Ekkor $\Phi - F = {all}$ az $\Omega$-n.

</div>

<div class="bizonyitas">

Bizonyítás:\
Az előbbi bizonyítás szerint $\Phi^{\prime} = f$ esetén ha
$\phi\left( \beta \right) = \xi$, $\phi\left( \alpha \right) = a$,
$F\left( \xi \right) = {\int\limits_{a}^{\xi}{f\left( x \right)dx}} = {\int\limits_{\alpha}^{\beta}{\frac{d\Phi\left( {\phi\left( t \right)} \right)}{dt}dt = \Phi\left( \xi \right) - \Phi\left( a \right)}}$,
vagyis
$\Phi\left( \xi \right) - F\left( \xi \right) = \Phi\left( a \right)$
konstans.

</div>

Kérdés: milyen jól használható feltételt tudunk mondani a primitív
függvény létezésére? Tfh
$\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonosan
differenciálható (vagyis $\partial_{k}f_{j}$ folytonos minden $k,j$-re).
Ekkor $\exists\Phi$, hogy $\Phi^{\prime} = f$, azaz
$\left. f_{j} = \partial_{j}\Phi\Rightarrow\partial_{k}f_{j} = \partial_{k}\left( {\partial_{j}\Phi} \right) \right.$,
mely a Young tétel szerint
$= \partial_{j}\left( {\partial_{k}\Phi} \right) = \partial_{j}f_{k}$.

<div class="tetel">

Tétel:\
Tfh $\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonosan
differenciálható függvény. Ha $f$-nek létezik primitív függvénye
$\left. \Rightarrow\partial_{k}f_{j} = \partial_{j}f_{k} \right.$ az
$\Omega$-n.

</div>

Kérdés: a feltétel elegendő-e, azaz ha
$\partial_{k}f_{j} = \partial_{j}f_{k}$, abból következik-e, hogy
létezik $f$-nek primitív függvénye? Általában nem. Tekintsük a következő
példát:
$\Omega: = \left\{ {\left( {x_{1},x_{2}} \right) \in {\mathbb{R}}^{2}:0 < \left| x \right| < 2} \right\}$.
Legyen $f: = \left( {f_{1},f_{2}} \right)$,
$f_{1}\left( {x_{1},x_{2}} \right): = \frac{- x_{2}}{x_{1}^{2} + x_{2}^{2}}$
és
$f_{2}\left( {x_{1},x_{2}} \right) = \frac{x_{1}}{x_{1}^{2} + x_{2}^{2}}$.
Belátjuk, hogy $\partial_{2}f_{1} = \partial_{1}f_{2}$, ugyanis
$\partial_{2}f_{1}\left( {x_{1},x_{2}} \right) = \frac{- \left( {x_{1}^{2} + x_{2}^{2}} \right) + 2x_{2}^{2}}{\left( {x_{1}^{2} + x_{2}^{2}} \right)^{2}} = \frac{x_{2}^{2} - x_{1}^{2}}{\left( {x_{1}^{2} + x_{2}^{2}} \right)^{2}}$.
$\partial_{1}f_{2}\left( {x_{1},x_{2}} \right) = \frac{x_{1}^{2} + x_{2}^{2} - 2x_{1}^{2}}{\left( {x_{1}^{2} + x_{2}^{2}} \right)^{2}} = \frac{x_{2}^{2} - x_{1}^{2}}{\left( {x_{1}^{2} + x_{2}^{2}} \right)^{2}}$,
de ${\int_{S_{1}}{f\left( x \right)dx}} \neq 0$, ahol $S_{1}$ az
egységkör, ami egy
$\left. \left\lbrack {0,2\pi} \right)\rightarrow{\mathbb{R}}^{2},t\mapsto\left( {\cos t,\sin t} \right) \right.$
függvény által meghatározott út.

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Előző óráról:
${\int_{L}{f\left( x \right)dx}} = {\int\limits_{\alpha}^{\beta}{\left\langle {f\left( {\phi\left( t \right)} \right),\overset{.}{\phi}\left( t \right)} \right\rangle dt}}$.
Azt vizsgáltuk, hogy mi volt a feltétele, hogy az integrál értéke csak a
kezdő és végpontoktól függjön, azaz $a = \phi\left( \alpha \right)$ és
$b = \phi\left( \beta \right)$ értékektől. Azt tudtuk mondani, hogy
akkor függ csak a kezdő és végpontoktól, hogyha
$\left. \exists\Phi^{\prime} = f\Leftrightarrow\partial_{j}\Phi = f_{j} \right.$
és $\partial_{j}\Phi$ folytonos (minden $j$-re).

<div class="tetel">

Tétel:\
Tfh $\left. f:\Omega\rightarrow{\& reals;}^{n} \right.$ folytonosan
differenciálható függvény. Ha $f$-nek létezik primitív függvénye
$\left. \Rightarrow\partial_{k}f_{j} = \partial_{j}f_{k} \right.$ az
$\Omega$ -n.

</div>

Kérdés: abból, hogy $\partial_{j}f_{k} = \partial_{k}f_{j}$ az
$\Omega$-n, következik-e, hogy $f$-nek van primitív függvénye (azaz az
integráljának értéke csak a kezdő és végpontoktól függ)? Általában nem.
Példa: legyen
$\Omega: = \left\{ {x \in {\mathbb{R}}^{2}:0 < x < 2} \right\}$,
$f_{1}\left( {x_{1},x_{2}} \right): = \frac{- x_{2}}{x_{1}^{2} + x_{2}^{2}}$,
$f_{2}: = \frac{x_{1}}{x_{1}^{2} + x_{2}^{2}}$. Láttuk már, hogy
$\partial_{2}f_{1} = \partial_{1}f_{2}$. Most belátjuk, hogy az
egységkörvonalon az integrál értéke nem 0 (ami ellentmond annak, hogy az
integrál értéke csak a kezdő és végpontokból függ, ami azt jelentené,
hogy létezik $f$-nek primitív függvénye).
$\phi = \left( {\phi_{1},\phi_{2}} \right)$,
$\phi_{1}\left( t \right): = \cos t,t \in \left\lbrack {0,2\pi} \right)$,
$\phi_{2}\left( t \right): = \sin t,t \in \left\lbrack {0,2\pi} \right)$.
Ekkor ${\overset{.}{\phi}}_{1}\left( t \right) = - \sin t$ és
${\overset{.}{\phi}}_{2}\left( t \right) = \cos t$.
${\int_{S_{1}}{f\left( x \right)dx}} = {\int\limits_{0}^{2\pi}{\left\langle {f\left( {\phi\left( t \right)} \right),\overset{.}{\phi}\left( t \right)} \right\rangle dt}} = {\int\limits_{0}^{2\pi}{\left\lbrack {\frac{- \sin t}{\cos^{2}t + \sin^{2}t}\left( {- \sin t} \right) + \frac{\cos t}{\cos^{2}t + \sin^{2}t}\cos t} \right\rbrack dt}} = 2\pi \neq 0$.

Kvázi definíció: egy $\Omega \subset {\mathbb{R}}^{2}$ tartományt
egyszeresen összefüggőnek nevezünk, ha tetszőleges, a tartományban levő
egyszerű zárt (szakaszosan) folytonos differenciálható görbét folytonos
mozgatással ponttá lehet húzni úgy, hogy végig a tartományban maradjunk.

<div class="def">

Definíció:\
Egy $\Omega \subset {\mathbb{R}}^{n}$ tartományt csillagszerűnek
nevezzük, ha $\exists a \in \Omega$, hogy $\forall x \in \Omega$ esetén
az $a$-t $x$-szel összekötő egyenes szakasz végig benne van
$\Omega$-ban. (Egyenes szakasz $a$ és $x$ pontok között:
$L_{a,x} = \left\{ {a + t\left( {x - a} \right):t \in \left\lbrack 0,1 \right\rbrack} \right\}$)

</div>

<div class="tetel">

Tétel:\
Legyen $\Omega \subset {\mathbb{R}}^{n}$ csillagszerű tartomány,
$\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonosan
differenciálható. Ha
$\left. \partial_{j}f_{k} = \partial_{k}f_{j},\forall j,k\Rightarrow f \right.$-nek
létezik primitív függvénye.

</div>

<div class="megj">

Megjegyzés:\
A tétel kiterjeszthető egyszeresen összefüggő tartományokra is.

</div>

Paraméteres integrálok
----------------------

<div class="def">

Definíció:\
Tfh
$\left. f:\left\lbrack {a,b} \right\rbrack \times \left\lbrack {c,d} \right\rbrack\rightarrow{\mathbb{R}} \right.$
adott legalább folytonos függvény. Értelmezzük a $g$ függvényt:
$g\left( x \right): = {\int\limits_{c}^{d}{f\left( {x,y} \right)dy}}$.
Ezt nevezzük $f$ paraméteres integráljának. Miket tud ez?

</div>

<div class="tetel">

Tétel:\
Ha
$\left. f \in C\left( {\left\lbrack {a,b} \right\rbrack \times \left\lbrack {c,d} \right\rbrack} \right)\Rightarrow g \in C\left\lbrack {a,b} \right\rbrack \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $x_{0} \in \left\lbrack {a,b} \right\rbrack$ tetszőleges
rögzített! $$\begin{aligned}
  \left| {g\left( x \right) - g\left( {{x_0}} \right)} \right| &  = \left| {\mathop \smallint \limits_c^d f\left( {x,y} \right)dy - \mathop \smallint \limits_c^d f\left( {{x_0},y} \right)dy} \right| \\ 
   &  = \left| {\mathop \smallint \limits_c^d \left( {f\left( {x,y} \right) - f\left( {{x_0},y} \right)} \right)dy} \right| \leqslant \mathop \smallint \limits_c^d \left| {f\left( {x,y} \right) - f\left( {{x_0},y} \right)} \right|dy \\ 
\end{aligned} $$ Mivel $f$ folytonos,
$D_{f} = \left\lbrack {a,b} \right\rbrack \times \left\lbrack {c,d} \right\rbrack$
korlátos és zárt halmaz (ezért sorozatkompakt is), ezért $f$
egyenletesen folytonos (Heine tétel). Véve egy tetszőleges
$\varepsilon > 0$ számot, ehhez
$\left. \exists\delta > 0:\left| {\left( {x,y} \right) - \left( {x^{\ast},y^{\ast}} \right)} \right| < \delta\Rightarrow\left| {f\left( {x,y} \right) - f\left( {x^{\ast},y^{\ast}} \right)} \right| < \varepsilon \right.$.
Speciel $x^{\ast} = x_{0}$, $y^{\ast} = y$. Tehát
$$\left. \left| {x - x_{0}} \right| < \delta\Rightarrow\left| {f\left( {x,y} \right) - f\left( {x_{0},y} \right)} \right| < \varepsilon,\forall y \in \left\lbrack {c,d} \right\rbrack\Rightarrow\left| {g\left( x \right) - g\left( x_{0} \right)} \right| \leq \varepsilon\left( {d - c} \right) \right.$$.

</div>

<div class="tetel">

Tétel:\
Ha $f$ folytonos
$\left\lbrack {a,b} \right\rbrack \times \left\lbrack {c,d} \right\rbrack$-n
és $\exists\partial_{1}f$ az
$\left( {a,b} \right) \times \left( {c,d} \right)$-n és létezik
folytonos kiterjesztése
$\left\lbrack {a,b} \right\rbrack \times \left\lbrack {c,d} \right\rbrack$-re,
akkor $g$ függvény folytonosan differenciálható
$\left\lbrack {a,b} \right\rbrack$-n, és
$g^{\prime}\left( x \right) = {\int\limits_{c}^{d}{\partial_{1}f\left( {x,y} \right)dy}}$
(vagyis felcserélhetjük a deriválást és az integrálást).

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $x_{0} \in \left( {a,b} \right) \ni x \neq x_{0}$!
$\frac{g\left( x \right) - g\left( x_{0} \right)}{x - x_{0}} = {\int\limits_{c}^{d}{\frac{f\left( {x,y} \right) - f\left( {x_{0},y} \right)}{x - x_{0}}dy}} =$
a Lagrange-féle középérték-tétel felhasználásával
$= {\int\limits_{c}^{d}{\partial_{1}f\left( {\xi_{y},y} \right)dy}}$,
ahol $\xi_{y}$ $x$ és $x_{0}$ között van. $$\begin{aligned}
  \left| {\frac{{g\left( x \right) - g\left( {{x_0}} \right)}}{{x - {x_0}}} - \mathop \smallint \limits_c^d {\partial _1}f\left( {{x_0},y} \right)dy} \right| &  = \left| {\mathop \smallint \limits_c^d \left( {{\partial _1}f\left( {{\xi _y},y} \right) - {\partial _1}f\left( {{x_0},y} \right)} \right)dy} \right| \\ 
   &  \leqslant \mathop \smallint \limits_c^d \left| {{\partial _1}f\left( {{\xi _y},y} \right) - {\partial _1}f\left( {{x_0},y} \right)} \right|dy \to 0, \\ 
\end{aligned} $$ mert $\partial_{1}f$ egyenletesen folytonos.

</div>

### A vonalintegrálról szóló tétel bizonyítása

Tfh $\Omega \subset {\mathbb{R}}^{n}$ csillagszerű tartomány,
$\left. f:\Omega\rightarrow{\mathbb{R}}^{n} \right.$ folytonosan
differenciálható, továbbá
$\partial_{j}f_{k} = \partial_{k}f_{j},\forall j,k$-ra az $\Omega$-n.
Belátjuk, hogy $f$-nek van primitív függvénye. Célszerű feltétel, hogy
legyen $a = 0$, válasszunk egy $x \in \Omega$-t, ekkor
$L_{a,x} = \left\{ {t \cdot x:t \in \left\lbrack 0,1 \right\rbrack} \right\}$.
Az $a$-t $x$-szel összekötő, folytonosan differenciálható utat a
következő $\left. \phi:{\mathbb{R}}\rightarrow{\mathbb{R}}^{n} \right.$
függvény határozhatja meg:
$\phi\left( t \right): = t \cdot x,t \in \left\lbrack 0,1 \right\rbrack,x \in \Omega \subset {\mathbb{R}}^{n}$.
Legyen
$F\left( x \right): = {\int_{L_{0,x}}{f\left( \xi \right)d\xi}} = {\int\limits_{0}^{1}{\left\langle {f\left( {\phi\left( t \right)} \right),\overset{.}{\phi}\left( t \right)} \right\rangle dt}} = {\int\limits_{0}^{1}{\left( {\sum\limits_{k = 1}^{n}{f_{k}\left( {\phi\left( t \right)} \right) \cdot x_{k}}} \right)dt}} = {\int\limits_{0}^{1}{\left( {\sum\limits_{k = 1}^{n}{f_{k}\left( {t \cdot x} \right) \cdot x_{k}}} \right)dt}}$.
Belátjuk, hogy $\partial_{j}F\left( x \right) = f_{j}\left( x \right)$.
Most $F\left( x \right)$-et differenciáljuk $x_{j}$ paraméter szerint.
$F\left( x \right) = {\sum\limits_{k = 1}^{n}{\int\limits_{0}^{1}{f_{k}\left( {t \cdot x} \right)x_{k}dt}}}$.\
$j \neq k$ esetén
$\partial_{j}{\int\limits_{0}^{1}{f_{k}\left( {t \cdot x} \right)x_{k}dt}} = {\int\limits_{0}^{1}{\partial_{j}f_{k}\left( {t \cdot x} \right)t \cdot x_{k}dt}}$,\
$j = k$ esetén
$\partial_{k}{\int\limits_{0}^{1}{f_{k}\left( {t \cdot x} \right)x_{k}dt}} = {\int\limits_{0}^{1}{\left\lbrack {\partial_{k}f_{k}\left( {t \cdot x} \right)t \cdot x_{k} + f_{k}\left( {t \cdot x} \right)} \right\rbrack dt}}$\
Ezért $$\begin{aligned}
  {\partial _j}F\left( x \right) &  = \mathop \smallint \limits_0^1 \left[ {\mathop \sum \limits_{k = 1}^n {\partial _j}{f_k}\left( {t \cdot x} \right)t \cdot {x_k} + {f_j}\left( {t \cdot x} \right)} \right]dt \\ 
   &  = \mathop \smallint \limits_0^1 \left[ {\mathop \sum \limits_{k = 1}^n {\partial _k}{f_j}\left( {t \cdot x} \right)t \cdot {x_k} + {f_j}\left( {t \cdot x} \right)} \right]dt. \\ 
\end{aligned} $$ Legyen
$g_{j}\left( t \right): = f_{j}\left( {t \cdot x} \right)t$, ekkor
${\overset{.}{g}}_{j}\left( t \right) = {\sum\limits_{k = 1}^{n}{\partial_{k}f_{j}\left( {t \cdot x} \right)x_{k} \cdot t}} + f_{j}\left( {t \cdot x} \right)$,
így
$\partial_{j}F\left( x \right) = {\int\limits_{0}^{1}{{\overset{.}{g}}_{j}\left( t \right)dt}} = g_{j}\left( 1 \right) - g_{j}\left( 0 \right) = f_{j}\left( x \right) - 0 = f_{j}\left( x \right)$.

Komplex függvénytan
===================

<div class="def">

Definíció:\
Tfh $\left. f:{\mathbb{C}}\rightarrow{\mathbb{C}} \right.$ értelmezve
van egy $z_{0} \in {\mathbb{C}}$ pont egy környezetében. Azt monjduk,
hogy $f$ differenciálható $z_{0}$-ban, ha
$\exists\lim\limits_{z\rightarrow z_{0}}\frac{f\left( z \right) - f\left( z_{0} \right)}{z - z_{0}}$
és véges. A limeszt a valós függvények deriváláshoz hasonlóan így
jelöljük: $f^{\prime}\left( z_{0} \right)$. A komplex
differenciálhatóságnak van geometriai szemléletes jelentése is.
$f^{\prime}\left( z_{0} \right) \in {\mathbb{C}}$, és a komplex számok
trigonometrikus jelölésével legyen ez
$f^{\prime}\left( z_{0} \right): = r\left( {\cos\phi + i\sin\phi} \right)$.
Tfh ez nem 0.
$\lim\limits_{z\rightarrow z_{0}}\frac{f\left( z \right) - f\left( z_{0} \right)}{z - z_{0}} = r\left( {\cos\phi + i\sin\phi} \right)$,
így $z_{0}$ környezetében
$\left| \frac{f\left( z \right) - f\left( z_{0} \right)}{z - z_{0}} \right| \approx r$,
másképp:
$\left| {f\left( z \right) - f\left( z_{0} \right)} \right| \approx r\left| {z - z_{0}} \right|$.
Erre azt mondjuk, hogy $f$ leképezés limeszben körtartó. Másrészt
$\arg\frac{f\left( z \right) - f\left( z_{0} \right)}{z - z_{0}} \approx \phi$,
$\arg\left\lbrack {f\left( z \right) - f\left( z_{0} \right)} \right\rbrack - \arg\left( {z - z_{0}} \right) \approx \phi$,
$\arg\left\lbrack {f\left( z \right) - f\left( z_{0} \right)} \right\rbrack \approx \phi + \arg\left( {z - z_{0}} \right)$,
ez egy $z_{0}$ körüli $\phi$ szögű forgatás.

</div>

A komplex differenciálhatóság szükséges feltétele
-------------------------------------------------

Nézzük meg, hogy mit jelent az, hogy $g$ komplex változós függvény
differenciálható egy $z \in {\mathbb{C}}$ pontban! Így definiáltuk:
$\lim\limits_{h\rightarrow 0}\frac{g\left( {z + h} \right) - g\left( z \right)}{h} = g^{\prime}\left( z \right)$.
Két esetet vizsgálunk,
$h: = h_{1} \in {\mathbb{R}}\text{\textbackslash}\left\{ 0 \right\}$ az
első esetben illetve
$h: = ih_{2},h_{2} \in {\mathbb{R}}\text{\textbackslash}\left\{ 0 \right\}$
a második esetben. Tehát
$\lim\limits_{h_{1}\rightarrow 0}\frac{g\left( {z + h_{1}} \right) - g\left( z \right)}{h_{1}} = \lim\limits_{h_{2}\rightarrow 0}\frac{g\left( {z + ih_{2}} \right) - g\left( z \right)}{ih_{2}}$.
Tudunk $\mathbb{C}$ és ${\mathbb{R}}^{2}$ között egy bijekciót
létesíteni:
$\left. J:{\mathbb{C}}\rightarrow{\mathbb{R}}^{2},x + iy\mapsto\left( {x,y} \right) \right.$
ahol $x,y \in {\mathbb{R}}$. Bizonyítható, hogy $J$ lineáris bijekció.
Mint definiáltuk,
$\left. g:{\mathbb{C}}\rightarrow{\mathbb{C}} \right.$, és legyen
$z: = x_{1} + ix_{2}$ ahol $x_{1}$ és $x_{2} \in {\mathbb{R}}$, továbbá
$g\left( {x_{1} + ix_{2}} \right): = g_{1}\left( {x_{1} + ix_{2}} \right) + ig_{2}\left( {x_{1} + ix_{2}} \right)$,
ahol $\left. g_{1}:{\mathbb{C}}\rightarrow{\mathbb{R}} \right.$ és
$\left. g_{2}:{\mathbb{C}}\rightarrow{\mathbb{R}} \right.$. A korábbi
$J$ bijekció alapján legyen
${\widetilde{g}}_{1}\left( {x_{1},x_{2}} \right): = g_{1}\left( {x_{1} + ix_{2}} \right)$
és
${\widetilde{g}}_{2}\left( {x_{1},x_{2}} \right): = g_{2}\left( {x_{1} + ix_{2}} \right)$,
így
$\left. {\widetilde{g}}_{1}:{\mathbb{R}}^{2}\rightarrow{\mathbb{R}} \right.$
és
$\left. {\widetilde{g}}_{2}:{\mathbb{R}}^{2}\rightarrow{\mathbb{R}} \right.$.
$$\frac{{g(z + {h_1}) - g(z)}}{{{h_1}}} = \underbrace {\frac{{{{\tilde g}_1}({x_1} + {h_1},{x_2}) - {{\tilde g}_1}({x_1},{x_2})}}{{{h_1}}}}_{ \to {\partial _1}{{\tilde g}_1}({x_1},{x_2})} + \underbrace {i\frac{{{{\tilde g}_2}({x_1} + {h_1},{x_2}) - {{\tilde g}_2}({x_1},{x_2})}}{{{h_1}}}}_{i{\partial _1}{{\tilde g}_2}({x_1},{x_2})}$$
$$\frac{{g(z + i{h_2}) - g(z)}}{{i{h_2}}} = \underbrace {\frac{{{{\tilde g}_1}({x_1},{x_2} + {h_2}) - {{\tilde g}_1}({x_1},{x_2})}}{{i{h_2}}}}_{ - i{\partial _2}{{\tilde g}_1}({x_1},{x_2})} + \underbrace {i\frac{{{{\tilde g}_2}({x_1},{x_2} + {h_2}) - {{\tilde g}_2}({x_1},{x_2})}}{{i{h_2}}}}_{{\partial _2}{{\tilde g}_2}({x_1},{x_2})}$$
Ezért kell, hogy
$\partial_{1}{\widetilde{g}}_{1} = \partial_{2}{\widetilde{g}}_{2}, - \partial_{2}{\widetilde{g}}_{1} = \partial_{1}{\widetilde{g}}_{2}$
legyen. Ezek a Cauchy-Riemann (parciális differenciál) egyenletek.

<div class="tetel">

Cauchy-alaptétel:\
Tfh $\Omega \subset {\mathbb{C}}$ egyszeresen összefüggő és
$\left. g:\Omega\rightarrow{\mathbb{C}} \right.$ differenciálható
$\Omega$-n. Ekkor $g$ integrálja bármely szakaszonként folytonosan
differenciálható, $\Omega$-ban haladó egyszerű zárt görbén 0.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{C}} \right.$
szakaszonként folytonosan differenciálható függvény, mely egy egyszerű
szakaszonként folytonosan differenciálható zárt $\Gamma$ görbét határoz
meg, $\phi\left( \alpha \right) = \phi\left( \beta \right)$,
$\phi\left( t \right) \in \Omega,\forall t \in \left\lbrack {\alpha,\beta} \right\rbrack$.
Definíció szerint
${\int_{\Gamma}{g\left( z \right)dz}}: = {\int\limits_{\alpha}^{\beta}{g\left( {\phi\left( t \right)} \right)\overset{.}{\phi}\left( t \right)dt}}$
(itt az integrandus komplex értékű).
$\phi\left( t \right) = \phi_{1}\left( t \right) + i\phi_{2}\left( t \right)$
(ahol $\phi_{1},\,\phi_{2}$ valós-valós függvények),
$g\left( {x_{1} + ix_{2}} \right) = g_{1}\left( {x_{1} + ix_{2}} \right) + ig_{2}\left( {x_{1} + ix_{2}} \right)$.
Ezek alapján $$\begin{aligned}
   & \mathop \smallint \limits_\alpha ^\beta  g\left( {\phi \left( t \right)} \right)\dot \phi \left( t \right)dt =  \\ 
   =  & \mathop \smallint \limits_\alpha ^\beta  \left[ {{g_1}\left( {{\phi _1}\left( t \right) + i{\phi _2}\left( t \right)} \right) + i{g_2}\left( {{\phi _1}\left( t \right) + i{\phi _2}\left( t \right)} \right)} \right] \cdot \left[ {{{\dot \phi }_1}\left( t \right) + i{{\dot \phi }_2}\left( t \right)} \right]dt .\\ 
\end{aligned} $$ . Definiáljuk $\psi$ függvényt:
$\left. \psi:{\mathbb{R}}\rightarrow{\mathbb{R}}^{2},\quad t\mapsto\left( {\phi_{1}\left( t \right),\phi_{2}\left( t \right)} \right) \right.$,
így az előző integrálban a szorzást elvégezve $$\begin{aligned}
  \int_\Gamma  {g\left( z \right)dz}  =  & \mathop \smallint \limits_\alpha ^\beta  \left[ {{g_1}\left( {\phi \left( t \right)} \right){{\dot \phi }_1}\left( t \right) - {g_2}\left( {\phi \left( t \right)} \right){{\dot \phi }_2}\left( t \right)} \right]dt +  \\ 
   &  + i\mathop \smallint \limits_\alpha ^\beta  \left[ {{g_1}\left( {\phi \left( t \right)} \right){{\dot \phi }_2}\left( t \right) + {g_2}\left( {\phi \left( t \right)} \right){{\dot \phi }_1}\left( t \right)} \right]dt \\ 
   =  & \mathop \smallint \limits_\alpha ^\beta  \left[ {{{\tilde g}_1}\left( {\psi \left( t \right)} \right){{\dot \phi }_1}\left( t \right) - {{\tilde g}_2}\left( {\psi \left( t \right)} \right){{\dot \phi }_2}\left( t \right)} \right]dt \\ 
   &  + i\mathop \smallint \limits_\alpha ^\beta  \left[ {{{\tilde g}_1}\left( {\psi \left( t \right)} \right){{\dot \phi }_2}\left( t \right) + {{\tilde g}_2}\left( {\psi \left( t \right)} \right){{\dot \phi }_1}\left( t \right)} \right]dt. \\ 
\end{aligned} $$ (Ebben ${\widetilde{g}}_{1}$ és ${\widetilde{g}}_{2}$
már $\left. {\mathbb{R}}^{2}\rightarrow{\mathbb{R}} \right.$
függvények.) Belátjuk, hogy mindkét tag 0.

-   $\left. f: = \left( {f_{1},f_{2}} \right):{\mathbb{R}}^{2}\rightarrow{\mathbb{R}}^{2} \right.$.
    Először legyen $f_{1}: = {\widetilde{g}}_{1}$,
    $f_{2}: = - {\widetilde{g}}_{2}$. Ekkor
    $\partial_{2}f_{1} = \partial_{2}{\widetilde{g}}_{1}$ és
    $\partial_{1}f_{2} = - \partial_{1}{\widetilde{g}}_{2}$, (a
    Cauchy-Riemann egyenletekből pedig)
    $\partial_{2}{\widetilde{g}}_{1} = - \partial_{1}{\widetilde{g}}_{2}$,
    azaz $\partial_{2}f_{1} = \partial_{1}f_{2}$. Így a valós
    vonalintegrálokról szóló tétel szerint
    $0 = {\int_{L}{f\left( x \right)dx}} = {\int\limits_{\alpha}^{\beta}{\left\lbrack {f_{1}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{1}\left( t \right) + f_{2}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{2}\left( t \right)} \right\rbrack dt}} = {\int\limits_{\alpha}^{\beta}{\left\lbrack {{\widetilde{g}}_{1}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{1}\left( t \right) - {\widetilde{g}}_{2}\left( {\psi\left( t \right)} \right)} \right\rbrack{\overset{.}{\phi}}_{2}dt}}$.
-   Másodszor $f_{1}: = {\widetilde{g}}_{2}$,
    $f_{2}: = {\widetilde{g}}_{1}$, ebből kapjuk, hogy a második
    integrál is 0. A Cauchy-Riemann egyenletekből most
    $\partial_{1}{\widetilde{g}}_{1} = \partial_{2}{\widetilde{g}}_{2}$
    illetve
    $- \partial_{2}{\widetilde{g}}_{1} = \partial_{1}{\widetilde{g}}_{2}$.
    Ekkor $\partial_{1}f_{2} = \partial_{2}f_{1}$, így
    $0 = {\int_{L}{f\left( x \right)dx}} = {\int\limits_{\alpha}^{\beta}{\left\lbrack {f_{1}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{1}\left( t \right) + f_{2}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{2}} \right\rbrack dt}} = {\int\limits_{\alpha}^{\beta}{\left\lbrack {{\widetilde{g}}_{2}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{1}\left( t \right) + {\widetilde{g}}_{1}\left( {\psi\left( t \right)} \right){\overset{.}{\phi}}_{2}} \right\rbrack dt}}$.

</div>

<div class="megj">

Megjegyzés:\
A bizonyításokban felhasználtuk, hogy $g$ folytonosan differenciálható,
így felhasználtuk a [valós vonalintegrálról szóló tételt és
megjegyzését.](#zartgorbe)

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

A Cauchy alaptétel közvetlen következményei
-------------------------------------------

Tfh
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{C}} \right.$
szakaszonként folytonosan differenciálható függvény egyszerű zárt utat
határoz meg, $\Gamma: = R_{\phi}$ egy egyszerű zárt szakaszonként
folytonosan differencálható görbe $\mathbb{C}$-n.

<div class="tetel">

Tétel:\
Egy ${\mathbb{C}}\text{\textbackslash}\Gamma$ nyílt halmaz két
összefüggő komponensből (részből) áll, a két komponens közül az egyik
korlátos, a másik nem. A korlátos komponenst nevezzük $\Gamma$
belsejének, a nem korlátos komponenst $\Gamma$ külsejének.

</div>

<div class="megj">

Megjegyzés:\
A tétel állítása triviálisnak tűnhet, bizonyítása mégsem könnyű.

</div>

<div class="tetel">

Tétel:\
Legyen $\Gamma,\Gamma_{1} \subset {\mathbb{C}}$ egyszerű zárt
szakaszonként folytonosan differenciálható görbe, legyen $\Gamma_{1}$ a
$\Gamma$ görbe belsejében. Tfh
$\Omega \supset \left( {\Gamma \cup \Gamma_{1} \cup \left( {{belseje}\left( \Gamma \right)\text{\textbackslash}\left( {\Gamma_{1} \cup {belseje}\left( \Gamma_{1} \right)} \right)} \right)} \right)$,
vagyis hogy $\Omega$ tartalmazza $\Gamma,\Gamma_{1}$-t és a kettejük
közötti tartományt. Legyen
$\left. g:\Omega\rightarrow{\mathbb{C}} \right.$ differenciálható
függvény. Ekkor
${\int_{\Gamma}{f\left( z \right)dz}} = {\int_{\Gamma_{1}}{f\left( z \right)dz}}$.

</div>

<div>

Ábra: ide kell betenni a gorbek\_gamma.eps filet.

</div>

<div class="bizonyitas">

Bizonyítás:\
A Cauchy alaptételt alkalmazva a
$\Gamma,\Gamma_{2}, - \Gamma_{1},\Gamma_{3}$ utakból álló szakaszonként
folytonosan differenciálható zárt görbére:
$0 = {\int_{\Gamma}{f\left( z \right)dz}} + {\int_{\Gamma_{2}}{f\left( z \right)dz}} - {\int_{\Gamma_{1}}{f\left( z \right)dz}} + {\int_{\Gamma_{3}}{f\left( z \right)dz}}$,
mely limeszben $\left. \Gamma_{2}\rightarrow\Gamma_{3} \right.$)
$0 = {\int_{\Gamma}{f\left( z \right)dz}} - {\int_{\Gamma_{1}}{f\left( z \right)dz}}$.
(Az ábrán a körüljárást láthatjuk, $\Gamma,\Gamma_{1}$ irányítása
azonos, óramutató járásával ellentétes irányú. Ez a bizonyítás csupán
vázlatos, szemléletes.)

</div>

<div class="tetel">

Tétel:\
Legyenek $\Gamma,\Gamma_{1},\Gamma_{2},...,\Gamma_{k}$ egyszerű zárt
szakaszonként folytonosan differenciálható görbék,
$\Gamma_{j} \subset {belseje}\left( \Gamma \right)$ és
$\Gamma_{l} \subset kulseje\left( \Gamma_{j} \right)$ ha $l \neq j$,
$\forall j,l \in \left\{ {0,1,...,k} \right\}$. Legyen $g$ függvény
differenciálható egy olyan tartományban, mely tartalmazza
$\Gamma,\Gamma_{1},\Gamma_{2},...,\Gamma_{k}$-t és
${belseje}\left( \Gamma \right)\text{\textbackslash}\left( {\underset{j = 1}{\overset{k}{\cup}}{{belseje}\left( \Gamma_{j} \right)}} \right)$-t
is. Ekkor
${\int_{\Gamma}{f\left( z \right)dz}} = {\sum\limits_{j = 1}^{k}{\int_{\Gamma_{j}}{f\left( z \right)dz}}}$.

</div>

### Cauchy-féle integrálformula

<div class="tetel">

Tétel:\
Legyen $\Omega \subset {\mathbb{C}}$ egyszeresen összefüggő tartomány és
$\Gamma \subset \Omega$ egyszerű zárt szakaszonként folytonosan
differenciálható görbe (ekkor
${belseje}\left( \Gamma \right) \subset \Omega$) és $g$ diffható
$\Omega$ -n. Ekkor $\Gamma$ belsejében fekvő bármely $z$ esetén
$g\left( z \right) = \frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen
$K_{\rho}: = \left\{ {\zeta \in {\mathbb{R}}:\left| {\zeta - z} \right| = \rho} \right\}$
a $z$ középpontú, $\rho$ sugarú körvonal. $\rho$-t olyan kicsinek
választjuk, hogy $K_{\rho} \subset \Gamma$ belseje lesz már. Ekkor a
Cauchy alaptétel közvetlen következménye szerint
${\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}} = {\int_{K_{\rho}}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}}$,
másrészt ${\int_{K_{\rho}}{\frac{1}{\zeta - z}d\zeta}} = 2\pi i$,
ugyanis
$\zeta = z + \rho\cos\left( t \right) + i\rho\sin\left( t \right)$
paraméterezés mellett
$\zeta - z = \rho\cos\left( t \right) + i\rho\sin\left( t \right)$--
erre valóban teljesül a
$K_{\rho} = \left\{ {\zeta \in {\mathbb{R}}:\left| {\zeta - z} \right| = \rho} \right\}$
kitétel --, így $K_{\rho}$ előáll a
$\left. \phi:\left\lbrack {0,2\pi} \right\rbrack\rightarrow{\mathbb{C}} \right.$,
$\phi\left( t \right) = z + \rho\cos\left( t \right) + i\rho\sin\left( t \right)$
függvény segítségével (ekkor
$\phi^{\prime}\left( t \right) = - \rho\sin\left( t \right) + i\rho\cos\left( t \right)$):
$K_{\rho} = R_{\phi}$, továbbá
$${\int_{K_{\rho}}{\frac{1}{\zeta - z}d\zeta}} = \int\limits_{0}^{2\pi}\frac{1}{\rho\cos\left( t \right) + i\rho\sin\left( t \right)}\left\lbrack {- \rho\sin\left( t \right) + i\rho\cos\left\lbrack t \right\rbrack} \right\rbrack dt = \int\limits_{0}^{2\pi}idt = 2\pi i.$$Ezek
szerint
$g\left( z \right) = \frac{1}{2\pi i}g\left( z \right)2\pi i = \frac{1}{2\pi i}g\left( z \right){\int_{K_{\rho}}{\frac{1}{\zeta - z}d\zeta}} = \frac{1}{2\pi i}{\int_{K_{\rho}}{\frac{g\left( z \right)}{\zeta - z}d\zeta}}$.
Vizsgáljuk a következő mennyiséget:
$\left| {\frac{1}{2\pi i}{\int_{K_{\rho}}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}} - g\left( z \right)} \right| \leq \frac{1}{2\pi}\left| {{\int_{K_{\rho}}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}} - {\int_{K_{\rho}}{\frac{g\left( z \right)}{\zeta - z}d\zeta}}} \right| = \frac{1}{2\pi}\left| {\int_{K_{\rho}}{\frac{g\left( \zeta \right) - g\left( z \right)}{\zeta - z}d\zeta}} \right| \leq$
$$\begin{aligned}
  \left| {\frac{1}{{2\pi i}}\int_{{K_\rho }} {\frac{{g\left( \zeta  \right)}}{{\zeta  - z}}d\zeta }  - g\left( z \right)} \right| &  \leqslant \frac{1}{{2\pi }}\left| {\int_{{K_\rho }} {\frac{{g\left( \zeta  \right)}}{{\zeta  - z}}d\zeta }  - \int_{{K_\rho }} {\frac{{g\left( z \right)}}{{\zeta  - z}}d\zeta } } \right| \\ 
   &  = \frac{1}{{2\pi }}\left| {\int_{{K_\rho }} {\frac{{g\left( \zeta  \right) - g\left( z \right)}}{{\zeta  - z}}d\zeta } d\zeta } \right| \\ 
   &  \leqslant \frac{1}{{2\pi }}{\text{kerület}}\left( {{K_\rho }} \right) \cdot \mathop {\sup }\limits_{\zeta  \in {K_\rho }} \left| {\frac{{g\left( \zeta  \right) - g\left( z \right)}}{{\zeta  - z}}} \right| < \varepsilon,  \\ 
\end{aligned} $$ ugyanis
$\left| {g\left( \zeta \right) - g\left( z \right)} \right| < \varepsilon$
ha $\rho < \rho_{0}$,
$\left| {\zeta - z} \right| = \rho = \text{állandó}$, $\begin{matrix}
{\left| {\zeta - z} \right| = \rho = \text{állandó}} \\
{\text{kerület}\left( K_{\rho} \right) = 2\pi\rho} \\
\end{matrix}$, tehát
$\left. \left| {\frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}} - g\left( z \right)} \right| < \varepsilon,\forall\varepsilon > 0\Rightarrow\frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}} = g\left( z \right) \right.$.

</div>

### Cauchy-típusú integrál

<div class="def">

Definíció:\
Legyen $\Gamma$ egyszerű (nem feltételen zárt) szakaszonként folytonosan
differenciálható görbe. Legyen
$\left. g:\Gamma\rightarrow{\mathbb{C}} \right.$ folytonos függvény!
Legyen
$G(z): = \frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}}$,
ezt nevezzük Cauchy-típusú integrálnak, ha
$z \in {\mathbb{C}}\text{\textbackslash}\Gamma$.

</div>

<div class="tetel">

Tétel:\
$G$ függvény a ${\mathbb{C}}\text{\textbackslash}\Gamma$ nyílt halmazon
akárhányszor differenciálható és
$G^{(k)}\left( z \right) = \frac{k!}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\left( {\zeta - z} \right)^{k + 1}}d\zeta}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Csak a $k = 1$ esetet látjuk be, teljes indukcióval a tétel igazolható.
Tehát ezt szeretnénk igazolni:
$G^{\prime}\left( z \right) = \frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\left( {\zeta - z} \right)^{2}}d\zeta}}$.
$$\begin{aligned}
  \frac{{G\left( {z + h} \right) - G\left( z \right)}}{h} &  = \frac{1}{h}\frac{1}{{2\pi i}}\left[ {\int_\Gamma  {\frac{{g\left( \zeta  \right)}}{{\zeta  - z - h}}d\zeta }  - \int_\Gamma  {\frac{{g\left( \zeta  \right)}}{{\zeta  - z}}d\zeta } } \right] \\ 
   &  = \frac{1}{{2\pi i}}\int_\Gamma  {\frac{1}{h}\left[ {\frac{{g\left( \zeta  \right)}}{{\zeta  - z - h}} - \frac{{g\left( \zeta  \right)}}{{\zeta  - z}}} \right]d\zeta }  \\ 
   &  = \frac{1}{{2\pi i}}\int_\Gamma  {g\left( \zeta  \right)\frac{{\left( {\zeta  - z} \right) - \left( {\zeta  - z - h} \right)}}{{h\left( {\zeta  - z - h} \right)\left( {\zeta  - z} \right)}}d\zeta }  \\ 
   &  = \frac{1}{{2\pi i}}\int_\Gamma  {\frac{{g\left( \zeta  \right)}}{{\left( {\zeta  - z - h} \right)\left( {\zeta  - z} \right)}}}  \\ 
\end{aligned} $$ Vizsgáljuk: $$\begin{aligned}
  I &  = \left| {\frac{{G\left( {z + h} \right) - G\left( z \right)}}{h} - \frac{1}{{2\pi i}}\int_\Gamma  {\frac{{g\left( \zeta  \right)}}{{{{\left( {\zeta  - z} \right)}^2}}}d\zeta } } \right| \\ 
   &  = \frac{1}{{2\pi }}\left| {\int_\gamma  {g\left( \zeta  \right)\left[ {\frac{1}{{\left( {\zeta  - z - h} \right)\left( {\zeta  - z} \right)}} - \frac{1}{{{{\left( {\zeta  - z} \right)}^2}}}} \right]d\zeta } } \right| \\ 
   &  = \frac{1}{{2\pi }}\left| {\mathop \smallint \limits_\Gamma  g\left( \zeta  \right)\frac{{\left( {\zeta  - z} \right) - \left( {\zeta  - z - h} \right)}}{{\left( {\zeta  - z - h} \right){{\left( {\zeta  - z} \right)}^2}}}d\zeta } \right| \\ 
   &  = \frac{{\left| h \right|}}{{2\pi }}\left| {\mathop \smallint \limits_\Gamma  \frac{{g\left( \zeta  \right)}}{{\left( {\zeta  - z - h} \right){{\left( {\zeta  - z} \right)}^2}}}d\zeta } \right| \\ 
   &  \leqslant \frac{{\left| h \right|}}{{2\pi }} \cdot {\text{\'i vhossz}}\left( \Gamma  \right) \cdot \mathop {\sup }\limits_{\zeta  \in \Gamma } \frac{1}{{\left| {\zeta  - z - h} \right| \cdot {{\left| {\zeta  - z} \right|}^2}}} .\\ 
\end{aligned} $$ $\Gamma \subset {\mathbb{C}}$ korlátos és zárt, ezért
sorozatkompakt is, így a
$\left. \zeta\mapsto\left| {\zeta - z} \right|,\zeta \in \Gamma \right.$
folytonos függvényhez
$\exists {\zeta _0} \in \Gamma :0 < \underbrace {\left| {{\zeta _0} - z} \right|}_{: = 2d} = \mathop {\inf }\limits_{\zeta \in \Gamma } \left| {\zeta - z} \right| \Rightarrow \left| {\zeta - z} \right| \geqslant 2d,$
ha $\zeta \in \Gamma$. Ha
$\left. \left| h \right| \leq d\Rightarrow\left| {\zeta - z - h} \right| \geq d \right.$,
ugyanis $$\begin{gathered}
  \zeta  - z = \left( {\zeta  - z - h} \right) + h \\ 
   \Downarrow  \\ 
  \left| {\zeta  - z} \right| \leqslant \left| {\zeta  - z - h} \right| + \left| h \right| \\ 
   \Downarrow  \\ 
  \left| {\zeta  - z - h} \right| \geqslant \left| {\zeta  - z} \right| - \left| h \right| = d .\\ 
\end{gathered} $$
$I \leqslant \frac{{\left| h \right|}}{{2\pi }} \cdot \text{ívhossz} \left( \Gamma \right)\frac{1}{{d\left( {2{d^2}} \right)}} \to 0,$
ha $\left. h\rightarrow 0 \right.$. Tehát
$$\left. \frac{G\left( {z + h} \right) - G\left( z \right)}{h}\rightarrow\frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\left( {\zeta - z} \right)^{2}}d\zeta}} = G^{\prime}{\left( z \right).} \right.$$

</div>

Spec eset: $\Gamma \subset {\mathbb{C}}$ egyszerű zárt szakaszonként
folytonosan differenciálható görbe,
$z \in \text{belseje}\left( \Gamma \right)$, $g$ differenciálható egy
$\Gamma$-t tartalmazó egyszeresen összefüggő tartományon. Ekkor
$g\left( z \right) = \frac{1}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\zeta - z}d\zeta}}$,
az utóbbi tétel szerint pedig
$\exists g^{(k)}\left( z \right) = \frac{k!}{2\pi i}{\int_{\Gamma}{\frac{g\left( \zeta \right)}{\left( {\zeta - z} \right)^{k + 1}}d\zeta}}$.
Eszerint ha egy komplex függvény egyszer differenciálható, akkor
akárhányszor differenciálható.

A primitív függvény és a vonalintegrál kapcsolata
-------------------------------------------------

<div class="tetel">

Tétel:\
Tfh $g$ folytonos egy $\Omega \subset {\mathbb{C}}$ tartományon, továbbá
$\int_{\Gamma}{g\left( z \right)dz}$ vonalintegrál értéke tetszőleges
$\Omega$-ban haladó egyszerű szakaszonként folytonosan differenciálható
görbe esetén annak csak a kezdő és végpontjaitól függ. Legyen
$a \in \Omega$ rögzített, $z \in \Omega$ változó pont,
$\Phi\left( z \right): = {\int\limits_{a}^{z}{g\left( \zeta \right)d\zeta}}$.
Ekkor $\Phi^{\prime}\left( z \right) = g\left( z \right)$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\frac{\Phi\left( {z + h} \right) - \Phi\left( z \right)}{h} = \frac{1}{h}\left\lbrack {{\int\limits_{a}^{z + h}{g\left( \zeta \right)d\zeta}} - {\int\limits_{a}^{z}{g\left( \zeta \right)d\zeta}}} \right\rbrack = \frac{1}{h}{\int\limits_{z}^{z + h}{g\left( \zeta \right)d\zeta}}$.
Vegyük észre, hogy $$\begin{aligned}
  \left| {\frac{{\Phi (z + h) - \Phi (z)}}{h} - g(z)} \right| &  = \left| {\frac{1}{h}\mathop \smallint \limits_z^{z + h} g\left( \zeta  \right)d\zeta  - \frac{1}{h}\mathop \smallint \limits_z^{z + h} g\left( z \right)d\zeta } \right| \\ 
   &  = \frac{1}{{\left| h \right|}}\left| {\mathop \smallint \limits_z^{z + h} \left( {g\left( \zeta  \right) - g\left( z \right)} \right)d\zeta } \right| \\ 
   &  \leqslant \frac{1}{{\left| h \right|}}\left| h \right|\mathop {\sup }\limits_{\zeta  \in L\left( {z,z + h} \right)} \left| {g\left( \zeta  \right) - g\left( z \right)} \right|, \\ 
\end{aligned} $$ mely 0-hoz tart, ha $\left| h \right|$ is.

</div>

<div class="tetel">

Következmény (Morera tétele):\
Tfh $g$ egy $\Omega$ tartományon értelmezett folytonos függvény,
amelynek az $\Omega$-ban haladó egyszerű szakaszonként folytonosan
differenciálható görbéken vett integrálja csak a kezdő és végpontoktól
függ. Ekkor $g$ differenciálható $\Omega$-n (vagyis akárhányszor
differenciálható). Ugyanis előbbi tétel szerint a
$\Phi\left( z \right) = {\int\limits_{a}^{z}{g\left( \zeta \right)d\zeta}}$
függvényre $\Phi$ differenciálható és
$\Phi^{\prime}\left( z \right) = g\left( z \right)$,tehát $\Phi$ egyszer
differenciálható, ezért akárhányszor, így $g$ is akárhányszor.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="def">

Definíció:\
Ha $f$ az $\Omega \subset {\mathbb{C}}$ tartomány minden pontjában
differenciálható, akkor $f$-et holomorfnak nevezzük $\Omega$ -n.

</div>

Taylor-sorfejtés komplex függvényeken
-------------------------------------

<div class="allitas">

Lemma:\
Legyen $\Gamma \subset {\mathbb{C}}$ egyszerű, szakaszonként folytonosan
differenciálható görbe, s legyenek
$\left. f_{k}:\Gamma\rightarrow{\mathbb{C}} \right.$ folytonos
függvények, $k \in {\mathbb{N}}$. Tfh a
${\sum\limits_{k = 1}^{\infty}f_{k}} = f$ sor egyenletesen konvergens.
Ekkor $f$ is folytonos (valósban bizonyítottuk, de állítás, hogy
komplexben is így van). Ekkor
${\int{f\left( z \right)dz}} = {\sum\limits_{k = 1}^{\infty}{\int{f_{k}\left( z \right)dz}}}$,
vagyis az integrálás és az összegzés felcserélhető.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen
$\left. \phi:\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{C}} \right.$,
$R_{\phi} = \Gamma$, $\phi$ szakaszonként folytonosan differenciálható.
Ekkor
${\int_{\Gamma}{f\left( z \right)dz}} = {\int\limits_{\alpha}^{\beta}{f\left( {\phi\left( t \right)} \right)\overset{.}{\phi}\left( t \right)}}$
és
${\int_{\Gamma}{f_{k}\left( z \right)dz}} = {\int\limits_{\alpha}^{\beta}{f_{k}\left( {\phi\left( t \right)} \right)\overset{.}{\phi}\left( t \right)}}$,
így $$\begin{aligned}
  \int_\Gamma  {f\left( z \right)dz}  &  = \mathop \smallint \limits_\alpha ^\beta  \left[ {f\left( {\phi \left( t \right)} \right)} \right]\dot \phi \left( t \right)dt \\ 
   &  = \mathop \smallint \limits_\alpha ^\beta  \underbrace {\left[ {\mathop \sum \limits_{k = 1}^\infty  {f_k}\left( {\phi \left( t \right)} \right)\dot \phi \left( t \right)} \right]}_{{\text{szakaszonk\'e nt folytonos}}}dt \\ 
   &  = \mathop \sum \limits_{k = 1}^\infty  \mathop \smallint \limits_\alpha ^\beta  {f_k}\left( {\phi \left( t \right)} \right)\dot \phi \left( t \right)dt \\ 
   &  = \mathop \sum \limits_{k = 1}^\infty  \int_\Gamma  {{f_k}\left( z \right)dz} . \\ 
\end{aligned} $$

</div>

Egyenletes konvergencia
-----------------------

### Weierstrass-tétele komplex függvényekre

<div class="def">

Definíció:\
Legyen
$\left. f_{k}:\Omega\rightarrow{\mathbb{C}},f_{k} \in C\left( D_{f_{k}} \right),\Omega \subset {\mathbb{C}} \right.$
tartomány. Azt mondjuk, hogy a ${\sum\limits_{k = 1}^{\infty}f_{k}} = f$
az $\Omega$ belsejében egyenletesen konvergens, ha
$\forall K \subset \Omega$ sorozatkompakt halmaz esetén a sor $K$-n
egyenletesen konvergens.

</div>

<div class="tetel">

Weierstrass tétele:\
Legyen $\Omega \subset {\mathbb{C}}$ tartomány,
$\left. f_{k}:\Omega\rightarrow{\mathbb{C}} \right.$ függvények
holomorfak, továbbá $\sum\limits_{k = 1}^{\infty}f_{k}$ sor a $\Omega$
belsejében egyenletesen konvergens. Ekkor

1.  $f: = {\sum\limits_{k = 1}^{\infty}f_{k}}$ is holomorf
2.  $f^{\prime} = {\sum\limits_{k = 1}^{\infty}{f_{k}{}^{\prime}}}$
3.  az utóbbi sor is egyenletesen konvergens $\Omega$ belsejében

</div>

Következmény: $f^{(j)} = {\sum\limits_{k = 1}^{\infty}f_{k}^{(j)}}$ is
egyenletesen konvergens $\Omega$ belsejében.

<div class="bizonyitas">

Bizonyítás:

1.  Egyrészt tudjuk, hogy $f = {\sum\limits_{k = 1}^{\infty}f_{k}}$
    folytonos $\Omega$-n (hiszen a sor $\Omega$ belsejében egyenletesen
    konvergens). Legyen $z_{0} \in \Omega$ rögzített pontja. Belátjuk,
    hogy $f$ differenciálható $z_{0}$ egy kis
    $K_{r}\left( z_{0} \right)$ környezetében. Vegyünk egy
    $K_{r}\left( z_{0} \right)$-ban haladó, egyszerű szakaszonként
    folytonosan differenciálható zárt $\Gamma$ görbét. Belátjuk, hogy
    $\left. {\int_{\Gamma}{f\left( z \right)dz}} = 0\Rightarrow f \right.$
    holomorf $K_{r}\left( z_{0} \right)$-n (Morera tétele miatt). Az
    előbbi lemma alapján
    $$\int_\Gamma  {f\left( z \right)dz}  = \int_\Gamma  {\underbrace {\mathop \sum \limits_{k = 1}^\infty  {f_k}\left( z \right)}_{\Gamma {\text{ - n\;egyenl}}{\text{.\;konv}}{\text{.}}}dz}  = \mathop \sum \limits_{k = 1}^\infty  \int_\Gamma  {{f_k}\left( z \right)dz}  = 0. $$
2.  A Cauchy-féle integrálformula szerint ha $z$ a
    $K_{r}\left( z_{0} \right): = \left\{ {z:\left| {z - z_{0}} \right| = r} \right\}$
    körvonal belsejében van, akkor
    $f\left( z \right) = \frac{1}{2\pi}{\int_{K_{r}{(z_{0})}}{\frac{f\left( \zeta \right)}{\zeta - z}d\zeta}}$.
    Ekkor
    $f^{\prime}\left( z \right) = \frac{1}{2\pi i}{\int_{K_{r}{(z_{0})}}{\frac{f\left( \zeta \right)}{\left( {\zeta - z} \right)^{2}}d\zeta}} = \frac{1}{2\pi i}{\int_{K_{r}{(z_{0})}}{\frac{\sum\limits_{k = 1}^{\infty}{f_{k}\left( \zeta \right)}}{\left( {\zeta - z} \right)^{2}}d\zeta}} = {\sum\limits_{k = 1}^{\infty}{\frac{1}{2\pi i}{\int_{K_{r}{(z_{0})}}{\frac{f_{k}\left( \zeta \right)}{\left( {\zeta - z} \right)^{2}}d\zeta}}}} = {\sum\limits_{k = 1}^{\infty}{f_{k}{}^{\prime}}}\left( z \right)$
    (itt is felhasználtuk a sor egyenletes konvergenciáját
    $K_{r}\left( z_{0} \right)$-n).

</div>

További következmény: tekintsük a
$\sum\limits_{k = 0}^{\infty}{c_{k}\left( {z - z_{0}} \right)^{k}}$
hatványsort! Tfh ennek konvergencia sugara $R > 0$. Tudjuk, hogy
$\left| {z - z_{0}} \right| < R$ esetén a sor konvergens, ill minden
$R$-nél kisebb sugarú, $z_{0}$ középpontú körben a hatványsor
egyenletesen konvergens. Mivel
$f_{k}\left( z \right) = c_{k}\left( {z - z_{0}} \right)^{k}$ holomorf
függvény, és az $f_{k}$ függvényekből álló sor a konvergencia sugár
belsejében egyenletesen konvergens, így a Weierstrass tételből
következően a sor összege is holomorf, és a sor tagonként akárhányszor
deriválható. Továbbá
$f\left( z \right): = {\sum\limits_{k = 0}^{\infty}{c_{k}\left( {z - z_{0}} \right)^{k}}}$,
mivel a sor most is (komplex értelemben) tagonként differenciálható,
ezért egyszerű számolással kapjuk:
$c_{k} = \frac{f^{(k)}\left( z_{0} \right)}{k!}$.

<div class="def">

Definíció:\
Tfh $f$ holomorf függvény $z_{0}$ egy környezetében. Ekkor az $f$
függvény Taylor sorát így értelmezzük:
$\sum\limits_{k = 1}^{\infty}{\frac{f^{(k)}\left( z_{0} \right)}{k!}\left( {z - z_{0}} \right)^{k}}$.

</div>

<div class="tetel">

Tétel:\
Legyen $\Omega \subset {\mathbb{C}}$ tartomány, tfh $f$ holomorf
$\Omega$-n, $z_{0} \in \Omega$. Tekintsük az $f$ függvény Taylor-sorát
$z_{0}$ körül! Ekkor
$f\left( z \right) = {\sum\limits_{k = 0}^{\infty}{\frac{f^{(k)}\left( z_{0} \right)}{k!}\left( {z - z_{0}} \right)^{k}}}$,
ahol $z \in B_{R}\left( z_{0} \right)$,
$B_{R}\left( z_{0} \right): = \left\{ {z:\left| {z - z_{0}} \right| < R} \right\}$
az a maximális sugarú $z_{0}$ középpontú kör, amely
$B_{R}\left( z_{0} \right) \subset \Omega$.

</div>

<div class="pelda">

Példa:\
Legyen $f\left( z \right): = \frac{1}{1 - z}$, ekkor $f$ holomorf az
${\mathbb{C}}\backslash\left\{ 1 \right\}$ tartományon. Fejtsük
Taylor-sorba $f$-t a $z_{0} = 0$ körül! Ekkor
$\frac{1}{1 - z} = {\sum\limits_{k = 1}^{\infty}z^{k}}$. A sor
$\left| z \right| < 1$ esetén konvergens, $\left| z \right| \geq 1$
esetén divergens, tehát csak akkor igaz az előbbi egyenlőség, ha
$\left| z \right| < 1$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $z \in B_{R}\left( z_{0} \right)$, ekkor $r$-t úgy választjuk,
hogy $\left| {z - z_{0}} \right| < r < R$. Jelöljük:
$K_{r}\left( z_{0} \right): = \left\{ {z:\left| {z - z_{0}} \right| = r} \right\}$.
Alkalmazzuk a Cauchy- féle integrálformulát
$K_{r}\left( z_{0} \right)$-ra és $z$-re:
$f\left( z \right) = \frac{1}{2\pi i}{\int_{K_{r}{(z_{0})}}{\frac{f\left( \zeta \right)}{\zeta - z}d\zeta}}$.
A nevező:
$\frac{1}{\zeta - z} = \frac{1}{\left( {\zeta - z_{0}} \right) - \left( {z - z_{0}} \right)} = \frac{1}{\zeta - z_{0}}\frac{1}{1 - \frac{z - z_{0}}{\zeta - z_{0}}}$
(ez azért jó, mert $\left| \frac{z - z_{0}}{\zeta - z_{0}} \right| < 1$,
ugyanis
$\left| {z - z_{0}} \right| < r = \left| {\zeta - z_{0}} \right|$).
Tehát
$\frac{1}{\zeta - z} = \frac{1}{\zeta - z_{0}}{\sum\limits_{k = 0}^{\infty}\left( \frac{z - z_{0}}{\zeta - z_{0}} \right)^{k}} = {\sum\limits_{k = 0}^{\infty}\frac{\left( {z - z_{0}} \right)^{k}}{\left( {\zeta - z_{0}} \right)^{k + 1}}}$.
A sor egyenletesen konvergens, ha $\zeta \in K_{r}\left( z_{0} \right)$
a Weierstrass kritérium szerint. Így $$\begin{aligned}
  f\left( z \right) &  = \frac{1}{{2\pi i}}\int_{{K_r}({z_0})} {f\left( \zeta  \right)\sum\limits_{k = 0}^\infty  {\frac{{{{\left( {z - {z_0}} \right)}^k}}}{{{{\left( {\zeta  - {z_0}} \right)}^{k + 1}}}}} d\zeta }  \\ 
   &  = \sum\limits_{k = 0}^\infty  {{{\left( {z - {z_0}} \right)}^k}\underbrace {\frac{1}{{2\pi i}}\int_{{K_r}({z_0})} {\frac{{f\left( \zeta  \right)}}{{{{\left( {\zeta  - {z_0}} \right)}^{k + 1}}}}d\zeta } }_{: = {c_k}}}  \\ 
   &  = \sum\limits_{k = 0}^\infty  {{c_k}{{\left( {z - {z_0}} \right)}^k}}.  \\ 
\end{aligned} $$ Ugyanis tudjuk, hogy
$\left. f^{(k)}\left( z_{0} \right) = \frac{k!}{2\pi i}{\int_{K_{r}{(z_{0})}}{\frac{f\left( \zeta \right)}{\left( {\zeta - z_{0}} \right)^{k + 1}}d\zeta}}\Rightarrow c_{k} = \frac{f^{(k)}\left( z_{0} \right)}{k!} \right.$.

</div>

Következmény: tfh $f$, $g$ holomorf függvények
$\Omega \subset {\mathbb{C}}$ tartományon és
$\exists z_{j},j \in {\mathbb{Z}}^{+},z_{j} \in \Omega\text{\textbackslash}\left\{ z_{0} \right\}:f\left( z_{j} \right) = g\left( z_{j} \right)$,
ahol $\lim z_{j} = z_{0} \in \Omega$. Ekkor
$f\left( z \right) = g\left( z \right),\forall z \in \Omega$.

<div class="bizonyitas">

Bizonyítás:

1.  Először belátjuk, hogy
    $f\left( z \right) = g\left( z \right),z \in B_{R}\left( z_{0} \right) \subset \Omega$.
    Fejtsük Taylor-sorba mindkét függvény, $f$-t és $g$-t is $z_{0}$
    körül.
    $f\left( z \right) = {\sum\limits_{k = 1}^{\infty}{c_{k}\left( {z - z_{0}} \right)^{k}}},g\left( z \right) = {\sum\limits_{k = 0}^{\infty}{d_{k}\left( {z - z_{0}} \right)^{k}}}$,
    $f\left( z_{j} \right) = g\left( z_{j} \right)$, így
    $$\begin{aligned}
      f\left( {{z_j}} \right) &  = {c_0} + \underbrace {{c_1}\left( {{z_j} - {z_0}} \right) + {c_2}{{\left( {{z_j} - {z_0}} \right)}^2} + ...}_{ \to 0{\text{\;ha\;}}{z_j} \to {{\text{z}}_0}{\text{,\;mivel\;a\;}}f \in C\left( {{z_0}} \right)} \\ 
       &  = {d_0} + \underbrace {{d_1}\left( {{z_j} - {z_0}} \right) + {d_2}{{\left( {{z_j} - {z_0}} \right)}^2} + ...}_{ \to 0} \\ 
       &  = g\left( {{z_j}} \right) \Rightarrow {c_0} = {d_0}, \\ 
    \end{aligned} $$ így
    $c_{1}\left( {z_{j} - z_{0}} \right) + c_{2}\left( {z_{j} - z_{0}} \right)^{2} + .., = d_{1}\left( {z_{j} - z_{0}} \right) + d_{2}\left( {z_{j} - z_{0}} \right)^{2} + ...$
    Mivel $z_{j} \neq z_{0}$, ezért oszthatunk $z_{j} - z_{0}$-lal:
    ${c_1} + \underbrace {{c_2}\left( {{z_j} - {z_0}} \right) + ...}_{{\text{folytonos}}{\text{,\;}} \to {\text{0}}} = {d_1} + \underbrace {{d_2}\left( {{z_j} - {z_0}} \right) + ...}_{{\text{folytonos}}{\text{,\;}} \to 0} \Rightarrow {c_1} = {d_1}$,
    és így tovább, tehát
    $\left. c_{k} = d_{k},\forall k \in {\mathbb{N}}\Rightarrow f\left( z \right) = g\left( z \right),\forall z \in B_{R}\left( z_{0} \right) \right.$.
2.  Legyen $z \in \Omega$ tetszőleges! Kössük össze $z_{0}$-t és $z$-t
    egy véges sok egyenes szakaszból álló $\Gamma$ törött vonallal.
    $\inf\left\{ {\rho\left( {\zeta,\partial\Omega} \right):\zeta \in \Gamma} \right\}: = \beta > 0$.
    Most $z$-t és $z_{0}$-t összekötjük egy $\beta$ sugarú körökből álló
    körlánccal, ezeken $f\left( z \right) = g\left( z \right)$, az
    egymás utáni körökön. Spec eset: $g\left( z \right) \equiv 0$,
    $\left. f\left( z_{j} \right) = 0,z_{j} \in \Omega\backslash\left\{ z_{0} \right\},j \in {\mathbb{Z}}^{+},\lim z_{j} = z_{0} \in \Omega\Rightarrow f\left( z \right) = 0,\forall z \right.$.

</div>

<div class="def">

Definíció:\
Legyen $f$ holomorf függvény $\Omega$ tartományon, $z_{0} \in \Omega$
Azt mondjuk, hogy $z_{0}$ az $f$ függvénynek $n$-szeres gyöke, ha
$f\left( z_{0} \right) = f^{\prime}\left( z_{0} \right) = ... = f^{({n - 1})}\left( z_{0} \right) = 0,f^{(n)}\left( z_{0} \right) \neq 0$.

</div>

<div class="allitas">

Állítás:\
$z_{0}$ az $f$-nek $n$-szeres gyöke
$\left. \Leftrightarrow f\left( z \right) = \left( {z - z_{0}} \right)^{n}g\left( z \right) \right.$,
ahol $g$ holomorf $z_{0}$ egy környezetében és
$g\left( z_{0} \right) \neq 0$.

</div>

<div class="bizonyitas">

Bizonyítás:

-   $\Rightarrow$ irányban: tfh
    $f\left( z_{0} \right) = f^{\prime}\left( z_{0} \right) = ... = f^{({n - 1})}\left( z_{0} \right) = 0,f^{(n)}\left( z_{0} \right) \neq 0$.
    Fejtsük Taylor-sorba $z_{0}$ körül: $$\begin{aligned}
      f\left( z \right) &  = \mathop \sum \limits_{k = 1}^\infty  \frac{{{f^{\left( k \right)}}\left( {{z_0}} \right)}}{{k!}}{\left( {z - {z_0}} \right)^k} \\ 
       &  = \mathop \sum \limits_{k = n}^\infty  \frac{{{f^{\left( k \right)}}\left( {{z_0}} \right)}}{{k!}}{\left( {z - {z_0}} \right)^k} \\ 
       &  = {\left( {z - {z_0}} \right)^n}\underbrace {\mathop \sum \limits_{k = n}^\infty  \frac{{{f^{\left( k \right)}}\left( {{z_0}} \right)}}{{k!}}{{\left( {z - {z_0}} \right)}^{k - n}}}_{g\left( z \right)}. \\ 
    \end{aligned} $$$g$ holomorf $z_{0}$ környezetében:
    $g\left( z_{0} \right) = \frac{f^{(n)}\left( z_{0} \right)}{n!} \neq 0$.
-   $\Leftarrow$ irányban:
    $f\left( z \right) = \left( {z - z_{0}} \right)^{n}g\left( z \right)$,
    $g$ holomorf és $g\left( z_{0} \right) \neq 0$. $g$-t sorba fejtjük
    $z_{0}$ körül: $$\begin{gathered}
      g(z) = \sum\limits_{l = 0}^\infty  {{c_l}{{(z - {z_0})}^l}} ,{c_0} \ne 0 \\ 
       \Downarrow  \\ 
      f(z) = {(z - {z_0})^n}g(z) = \sum\limits_{l = 0}^\infty  {{c_l}{{(z - {z_0})}^{l + n}}}  = {c_0}{(z - {z_0})^n} + {c_1}{(z - {z_0})^{n + 1}} + ... \\ 
    \end{gathered} $$ Leolvashatjuk, hogy $f$ Taylor sorfejtésénél az
    első $n$ db együttható 0.
    $\left. \Rightarrow f\left( z_{0} \right) = 0,f^{\prime}\left( z_{0} \right) = 0,...,f^{({n - 1})}\left( z_{0} \right) = 0 \right.$,
    $f^{(n)}\left( z_{0} \right) \neq 0$, mivel $c_{0} \neq 0$.

</div>

### Egész függvények, Liouville tétele

<div class="def">

Definíció:\
Ha $f$ függvény holmorf $\mathbb{C}$-n, akkor $f$-t egész függvénynek
nevezzük.

</div>

<div class="tetel">

Liouville tétele:\
Ha $f$ egész függvény korlátos $\left. \Rightarrow f \right.$ állandó.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tudjuk, hogy $f$ holomorf $\mathbb{C}$-n. Fejtsük Taylor-sorba
$z_{0} = 0$ körül! Legyen
$K_{r}: = \left\{ {z \in {\mathbb{C}}:\left| z \right| = r} \right\},M_{r}: = \sup\left\{ {\left| {f\left( \zeta \right)} \right|,\left| \zeta \right| = r} \right\}$,
ekkor $\forall z \in {\mathbb{C}}$-re
$f\left( z \right) = {\sum\limits_{k = 0}^{\infty}{c_{k}z^{k}}}$,
$\left. c_{k} = \frac{f^{(k)}\left( 0 \right)}{k!} = \frac{1}{2\pi i}{\int_{K_{r}}{\frac{f\left( \zeta \right)}{\zeta^{k + 1}}d\zeta}}\Rightarrow\left| c_{k} \right| = \frac{1}{2\pi}\left| {\int_{K_{r}}{\frac{f\left( \zeta \right)}{z^{k + 1}}d\zeta}} \right| \leq \frac{1}{2\pi}2\pi r\frac{M_{r}}{r^{k + 1}} = \frac{M_{r}}{r^{k}} \right.$.
Ha speciel $f$ korlátos, $M_{r} \leq M$ ($r$-től függetlenül), így
$\left. \left| c_{k} \right| \leq \frac{M}{r^{k}},\forall r\Rightarrow k \geq 1 \right.$
esetén $c_{k} = 0$, $f\left( z \right) = c_{0}$.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Az algebra alaptétele
---------------------

<div class="tetel">

Tétel:\
Legyen $P$ egy legalább elsőfokú, komplex együtthatós polinom! Ekkor
mindig $\exists z_{0} \in {\mathbb{C}}:P\left( z_{0} \right) = 0$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Indirekt feltesszük, hogy
$P\left( z \right) \neq 0,\forall z \in {\mathbb{C}}$. Ekkor
$\frac{1}{P}$ holomorf függvény. Belátjuk, hogy korlátos is.
$P\left( z \right) = a_{n}z^{n} + a_{n - 1}z^{n - 1} + ... + a_{1}z + a_{0},n \geq 1,a_{n} \neq 0$.
$\left| {\frac{1}{{P\left( z \right)}}} \right| = \frac{1}{{\left| {P\left( z \right)} \right|}} = \frac{1}{{{z^n}\underbrace {\left| {{a_n} + {a_{n - 1}}{z^{ - 1}} + ... + {a_1}{z^{ - n + 1}} + {a_0}{z^{ - n}}} \right|}_{ \to \left| {{a_n}} \right|{\text{\;ha\;}}z \to \infty }}},$
így $\exists r$, hogy
$\left| {a_{n} + \frac{a_{n - 1}}{z} + ... + \frac{a_{1}}{z^{n - 1}} + \frac{a_{0}}{z^{n}}} \right| \geq \frac{\left| a_{n} \right|}{2}$
ha $\left| z \right| \geq r$, tehát
$\left. \exists\rho > 0:\left| z \right| > \rho\Rightarrow\frac{1}{\left| {P\left( z \right)} \right|} \leq 1 \right.$.
$\left| z \right| \leq \rho$ esetén
$\left| \frac{1}{P\left( z \right)} \right|$ korlátos a
Weierstrass-tétel miatt, hiszen $\left| \frac{1}{P} \right|$ folytonos,
a $\rho$ sugarú kör sorozatkompakt. $\frac{1}{P}$ korlátos, másrészt
holomorf $\Rightarrow$ (Liouvielle-tétel)
$\left. \frac{1}{P} = {all.}\Rightarrow P = {all.} \right.$, de ez meg
ellentmond annak, hogy $n \geq 1$.

</div>

### Az exponenciális, a szinusz és koszinusz függvények komplex változókon

(Kalkuluson szó volt az exponenciális, a szinusz és koszinusz
hatványsoráról a valósban. Ezeket kaptuk:
$e^{x} = {\sum\limits_{k = 0}^{\infty}{\frac{x^{k}}{k!},\forall x \in {\mathbb{R}}}}$,
a konvergencia sugár végtelen.
$\sin x = x - \frac{x^{3}}{3!} + \frac{x^{5}}{5!} - ... + , -$ illetve
$\cos x = 1 - \frac{x^{2}}{2!} + \frac{x^{4}}{4!} - ... + , -$ Akkoriban
lehetett volna így is definiálni a függvényeket, és az akkori
definíciókat meg igazolni. Ha így tettük volna, a komplexes
általánosítás könnyebb volna.)

Legyen definíció szerint
$e^{z}: = {\sum\limits_{k = 0}^{\infty}{\frac{z^{k}}{k!},\forall z \in {\mathbb{C}}}}$,
a konvergencia sugár ugyanaz, mint valósban, valamint
$\sin z: = z - \frac{z^{3}}{3!} + \frac{z^{5}}{5!} - ... + , -$ továbbá
$\cos z: = 1 - \frac{z^{2}}{2!} + \frac{z^{4}}{4!} - ... + , -$. A
hatványsoros definíciós segítségével belátható, hogy
$e^{z_{1} + z_{2}} = e^{z_{1}}e^{z_{2}} = {\sum\limits_{k = 0}^{\infty}\frac{z_{1}^{k}}{k!}} \cdot {\sum\limits_{l = 0}^{\infty}\frac{z_{2}^{l}}{l!}}$.
A sor abszolút konvergens, így szabadon cserélgethetők a
szorzótényezők:.
$e^{z_{1} + z_{2}} = {\sum\limits_{n = 0}^{\infty}\frac{\left( {z_{1} + z_{2}} \right)^{n}}{n!}} = {\sum\limits_{n = 0}^{\infty}{\frac{1}{n!}{\sum\limits_{k = 0}^{n}\left\lbrack {\begin{pmatrix}
n \\
k \\
\end{pmatrix}z_{1}^{k}z_{2}^{n - k}} \right\rbrack}}} = {\sum\limits_{n = 0}^{\infty}\left\lbrack {\sum\limits_{k = 0}^{n}{\frac{z_{1}^{k}}{k!}\frac{z_{2}^{n - k}}{\left( {n - k} \right)!}}} \right\rbrack}$,
ahol felhasználtuk a binomiális tételt.

Következmény: legyen
$z \in {\mathbb{C}},\left( {x,y} \right) \in {\mathbb{R}}^{2},z: = x + iy$.
Ekkor $e^{z} = e^{x + iy} = e^{x}e^{iy}$,
$e^{iy} = 1 + \frac{iy}{1!} + \frac{\left( {iy} \right)^{2}}{2!} + \frac{\left( {iy} \right)^{3}}{3!} + ... = \left( {1 - \frac{y^{2}}{2!} + \frac{y^{4}}{4!} - ... + , -} \right) + i\left( {\frac{y}{1!} - \frac{y^{3}}{3!} + \frac{y^{5}}{5!} - ... + , -} \right) = \cos y + i\sin y$,
így $e^{z} = e^{x}\left( {\cos y + i\sin y} \right)$, valamint
$\left| e^{z} \right| = e^{x} = e^{\Re{(z)}}$,
$\arg e^{z} = y = \Im\left( z \right)$,
$e^{iz} = \left( {1 - \frac{z^{2}}{2!} + \frac{z^{4}}{4!} - ... + , -} \right) + i\left( {\frac{z}{1!} - \frac{z^{3}}{3!} + \frac{z^{5}}{5!} - ... + , -} \right)$,
$e^{- iz} = \left( {1 - \frac{z^{2}}{2!} + \frac{z^{4}}{4!} - ... + , -} \right) + i\left( {- \frac{z}{1!} + \frac{z^{3}}{3!} - \frac{z^{5}}{5!} + ... - , +} \right)$,
így
$\frac{e^{iz} + e^{- iz}}{2} = 1 - \frac{z^{2}}{2!} + \frac{z^{4}}{4!} - ... + , - = \cos z$,
valamint
$\frac{e^{iz} - e^{- iz}}{2i} = \frac{z}{1!} - \frac{z^{3}}{3!} + \frac{z^{5}}{5!} - ... + , - = \sin z$.
Ezek igazak $\forall z \in {\mathbb{C}}$. Komplexben is igaz, hogy
$\sin^{2}z + \cos^{2}z = 1$, merthogy
$\sin^{2}z + \cos^{2}z = \left\lbrack \frac{e^{iz} + e^{- iz}}{2} \right\rbrack^{2} + \left\lbrack \frac{e^{iz} - e^{- iz}}{2i} \right\rbrack^{2} = \frac{e^{2iz} + e^{- 2iz} + 2}{4} + \frac{e^{2iz} + e^{- 2iz} - 2}{- 4} = \frac{2 + 2}{4} = 1$,
valamint az összes többi formula, ami valósban is igaz volt
(periodicitás, paritás). $e^{z}$ periodikus $2\pi i$ szerint, ugyanis
$e^{z + 2\pi i} = e^{z}e^{2\pi i} = e^{z}\left( {\cos\left( {2\pi} \right) + i\sin\left( {2\pi} \right)} \right) = e^{z}$.
Ami másképp van: valósban
$\left| {\sin x} \right| \leq 1 \geq \left| {\cos x} \right|$, mert
$\sin^{2}x + \cos^{2}x = 1$ és $\sin^{2}x \geq 0$, $\cos^{2}x \geq 0$,
de komplexben ez így nem igaz. Megemlítendő, hogy
$e^{z} \neq 0,\forall z \in {\mathbb{C}}$, mert
${e^z} = \underbrace {{e^x}}_{ > 0}\underbrace {\left( {\cos \left( y \right) + i\sin \left( y \right)} \right)}_{{\text{abszolút értéke 1}}}$.

Izolált szinguláris pontok, Laurent-sorfejtés
---------------------------------------------

<div class="def">

Definíció:\
Ha $\Omega \subset {\mathbb{C}}$ tartomány,
$\left. f:\Omega\rightarrow{\mathbb{C}} \right.$ holomorf egy
$z_{0} \in \Omega$ pont kivételével, akkor $z_{0} - t$ izolált
szinguláris pontnak nevezzük. Cél: $f$-et szeretnénk valamilyen sorba
fejteni $z_{0}$ körül.

</div>

Tfh $z_{0}$ egy izolált szinguláris pont, $f$ holomorf a
$\Omega: = \left\{ {z \in {\mathbb{C}}:0 < \left| {z_{0} - z} \right| < R} \right\}$
tartományon, ahol $0 < R \leq \infty$. Válasszuk $r_{1},r_{2}$ számokat:
$0 < r_{1} < r_{2} < R$. $z \in \Omega$ esetén $r_{1},r_{2}$
megválasztható úgy, hogy
$0 < r_{1} < \left| {z - z_{0}} \right| < r_{2} < R$. Nem nehéz belátni,
hogy a Cauchy-féle integrálformula szerint
$f\left( z \right) = \frac{1}{2\pi i}{\int_{S_{r_{2}}}{\frac{f\left( \zeta \right)}{\zeta - z}d\zeta}} - \frac{1}{2\pi i}{\int_{S_{r_{1}}}{\frac{f\left( \zeta \right)}{\zeta - z}d\zeta}}$.
$\zeta \in S_{r_{2}}$ esetén
$\frac{1}{\zeta - z} = \frac{1}{\left( {\zeta - z_{0}} \right) - \left( {z - z_{0}} \right)} = \frac{1}{\zeta - z_{0}}\frac{1}{1 - \frac{z - z_{0}}{\zeta - z_{0}}} = \frac{1}{\zeta - z_{0}}{\sum\limits_{n = 0}^{\infty}\left( \frac{z - z_{0}}{\zeta - z_{0}} \right)^{n}} = {\sum\limits_{n = 0}^{\infty}\frac{\left( {z - z_{0}} \right)^{n}}{\left( {\zeta - z_{0}} \right)^{n + 1}}}$,
a sor egyenletesen konvergens $\zeta \in S_{r_{2}}$ esetén. Ha
$\zeta \in S_{r_{1}}$,
$\frac{1}{\zeta - z} = \frac{1}{\left( {\zeta - z_{0}} \right) - \left( {z - z_{0}} \right)} = - \frac{1}{z - z_{0}}\frac{1}{1 - \frac{\zeta - z_{0}}{z - z_{0}}} = - \frac{1}{z - z_{0}}{\sum\limits_{m = 0}^{\infty}{\left( \frac{\zeta - z_{0}}{z - z_{0}} \right)^{m} = - {\sum\limits_{m = 0}^{\infty}\frac{\left( {\zeta - z_{0}} \right)^{m}}{\left( {z - z_{0}} \right)^{m + 1}}}}}$.
Vezessük be az
$\left. m + 1 = : - n\Leftrightarrow m = : - n - 1 \right.$ új
indexváltozót, így
$\frac{1}{\zeta - z} = - {\sum\limits_{n = - 1}^{- \infty}\frac{\left( {z - z_{0}} \right)^{n}}{\left( {\zeta - z_{0}} \right)^{n + 1}}}$.
Ekkor $$\begin{aligned}
  f\left( z \right) &  = \frac{1}{{2\pi i}}\int_{{S_{{r_2}}}} {f\left( \zeta  \right)\mathop \sum \limits_{n = 0}^\infty  \frac{{{{\left( {z - {z_0}} \right)}^n}}}{{{{\left( {\zeta  - {z_0}} \right)}^{n + 1}}}}d\zeta }  + \frac{1}{{2\pi i}}\int_{{S_{{r_1}}}} {f\left( \zeta  \right)\mathop \sum \limits_{n =  - 1}^{ - \infty } \frac{{{{\left( {z - {z_0}} \right)}^n}}}{{{{\left( {\zeta  - {z_0}} \right)}^{n + 1}}}}d\zeta }  \\ 
   &  = \mathop \sum \limits_{n = 0}^\infty  {\left( {z - {z_0}} \right)^n}\frac{1}{{2\pi i}}\int_{{S_{{r_2}}}} {\frac{{f\left( \zeta  \right)}}{{{{\left( {\zeta  - {z_0}} \right)}^{n + 1}}}}d\zeta }  + \mathop \sum \limits_{n =  - 1}^{ - \infty } {\left( {z - {z_0}} \right)^n}\frac{1}{{2\pi i}}\int_{{S_{{r_1}}}} {\frac{{f\left( \zeta  \right)}}{{{{\left( {\zeta  - {z_0}} \right)}^{n + 1}}}}d\zeta }  \\ 
   &  = \mathop \sum \limits_{n =  - \infty }^\infty  {\left( {z - {z_0}} \right)^n}\frac{1}{{2\pi i}}\int_{{S_r}} {\frac{{f\left( \zeta  \right)}}{{{{\left( {\zeta  - {z_0}} \right)}^{n + 1}}}}d\zeta }  \\ 
   &  = :\mathop \sum \limits_{n =  - \infty }^\infty  {c_n}{\left( {z - {z_0}} \right)^n} ,\\ 
\end{aligned} $$ ahol
$c_{n}: = \frac{1}{2\pi i}{\int_{S_{r}}{\frac{f\left( \zeta \right)}{\left( {\zeta - z_{0}} \right)^{n + 1}}d\zeta}},0 < r < R$.
(A Cauchy-alaptétel következménye miatt vehetünk $S_{r_{1}}$,
$S_{r_{2}}$ helyett $S_{r}$-et.)

<div class="tetel">

Tétel:\
Tfh $f$ holomorf az
$\Omega: = \left\{ {z \in {\mathbb{C}}:0 < \left| {z - z_{0}} \right| < R} \right\}$
tartományon, $0 < R \leq \infty$). Ekkor $\forall z \in \Omega$ esetén
$f\left( z \right) = {\sum\limits_{n = - \infty}^{\infty}{c_{n}\left( {z - z_{0}} \right)^{n}}}$,
ahol
$c_{n} = \frac{1}{2\pi i}{\int_{S_{r}}{\frac{f\left( \zeta \right)}{\left( {\zeta - z_{0}} \right)^{n + 1}}d\zeta}}$.
Ezt nevezzük $f$ Laurent sorfejtésének.

</div>

<div class="megj">

Megjegyzés:\
A Laurent sorfejtés egyértelmű. Ugyanis nem nehéz belátni, hogy ha
$$\left. f\left( z \right) = {\sum\limits_{n = - \infty}^{\infty}{c_{n}\left( {z - z_{0}} \right)^{n}}} = {\sum\limits_{n = - \infty}^{\infty}{d_{n}\left( {z - z_{0}} \right)^{n}}}\Rightarrow d_{n} = c_{n}. \right.$$A
Laurent sorfejtés egyenletesen konvergens
$\text{belseje}\left( \Omega \right)$-n, azaz minden $\Omega$-ban fekvő
sorozatkompakt halmazon.

</div>

### Az izolált szinguláris pontok osztályozása

$$f\left( z \right) = \mathop \sum \limits_{n =  - \infty }^\infty  {c_n}{\left( {z - {z_0}} \right)^n} = \underbrace {\sum\limits_{n =  - \infty }^{ - 1} {{c_n}{{\left( {z - {z_0}} \right)}^n}} }_{{\text{főrész}}} + \underbrace {\sum\limits_{n = 0}^\infty  {{c_n}{{\left( {z - {z_0}} \right)}^n}} }_{{\text{reguláris rész}}}$$

1.  Ha $c_{n} = 0,\forall n \in {\mathbb{Z}}^{-}$ esetén, akkor $z_{0}$
    megszüntethető szingularitás,
    $f\left( z_{0} \right): = c_{0} < \infty$.
2.  Ha véges sok negatív indexű együttható nem 0, akkor $z_{0}$-t
    pólusnak nevezzük (az ilyen együtthatók száma a pólus rendje).
3.  Ha végtelen sok negatív indexre az együttható nem 0, akkor $z_{0}$-t
    lényeges szingularitásnak nevezzük.

<div class="def">

Definíció:\
A Laurent sorfejtésben a $c_{- 1}$ együtthatót a függvény $z_{0}$-beli
reziduumának nevezzük.
$\text{Rez}_{z_{0}}f: = c_{- 1} = \frac{1}{2\pi i}{\int_{S_{r}}{f\left( \zeta \right)d\zeta}}$

</div>

<div class="megj">

Megjegyzés:\
${\int_{S_{r}}{f\left( \zeta \right)d\zeta}} = 2\pi i \cdot \text{Rez}_{z_{0}}f$.

</div>

<div class="tetel">

Reziduum-tétel:\
Tfh $f$ holomorf az $\Omega$ tartományon a $z_{1},z_{2},...,z_{k}$
izolált szinguláris pontok kivételével. Ekkor véve olyan egyszerű zárt
szakaszonként folytonosan differenciálható $\Gamma$ görbét, amely
$\Omega$-ban van a belsejével együtt,
$$\left. z_{1},z_{2},...,z_{k} \in \text{belseje}\left( \Gamma \right)\Rightarrow{\int_{\Gamma}{f\left( \zeta \right)d\zeta}} = \frac{1}{2\pi i}\sum\limits_{j = 1}^{k}\text{Rez}_{z_{j}}f. \right.$$

</div>

<div class="bizonyitas">

Bizonyítás:\
${\int_{\Gamma}{f\left( \zeta \right)d\zeta}} = \sum\limits_{j = 1}^{k}{\int_{S_{j}}{f\left( \zeta \right)d\zeta}} = \sum\limits_{j = 1}^{k}2\pi i\text{Rez}_{z_{j}}f$.

</div>

### Reziduum kiszámítása pólus esetén

Tfh $f$ függvénynek $z_{0}$-ban $m$-edrendű pólusa van:
$$\begin{aligned}
  f\left( z \right) =  & \frac{{{c_{ - m}}}}{{{{\left( {z - {z_0}} \right)}^m}}} + \frac{{{c_{ - m + 1}}}}{{{{\left( {z - {z_0}} \right)}^{m - 1}}}} + ... + \frac{{{c_{ - 1}}}}{{z - {z_0}}} + {c_0} + {c_1}\left( {z - {z_0}} \right) + ... \\ 
   \Downarrow  &  \\ 
  f\left( z \right){\left( {z - {z_0}} \right)^m} =  & {c_{ - m}} + {c_{ - m + 1}}\left( {z - {z_0}} \right) + ... \\ 
   &  + {c_{ - 1}}{\left( {z - {z_0}} \right)^{m - 1}} + {c_0}{\left( {z - {z_0}} \right)^m} + {c_1}{\left( {z - {z_0}} \right)^{m + 1}} + ... \\ 
\end{aligned} $$ Ez már hatványsor. $$\begin{gathered}
  {\left[ {\frac{{{d^{m - 1}}}}{{d{z^{m - 1}}}}\left( {f\left( z \right){{\left( {z - {z_0}} \right)}^m}} \right)} \right]_{z = {z_0}}} = {c_{ - 1}}\left( {m - 1} \right)! \\ 
   \Downarrow  \\ 
  {\text{Rez}}
  {{\text{Rez}}_{{z_0}}}f = {c_{ - 1}} = \frac{1}{{\left( {m - 1} \right)!}}{\left[ {\frac{{{d^{m - 1}}}}{{d{z^{m - 1}}}}\left( {f\left( z \right){{\left( {z - {z_0}} \right)}^m}} \right)} \right]_{z = {z_0}}} .\\ 
\end{gathered} $$

<div class="allitas">

Állítás:\
Az $f$ függvénynek $z_{0}$-ban $m$-edrendű pólusa van
$\left. \Leftrightarrow g\left( z \right): = f\left( z \right)\left( {z - z_{0}} \right)^{m} \right.$
holomorf és $g\left( z_{0} \right) \neq 0$. Ugyanis
$f\left( z \right){\left( {z - {z_0}} \right)^m} = \underbrace {{c_{ - m}}}_{ \ne 0} + {c_{ - m + 1}}\left( {z - {z_0}} \right) + ...$

</div>

<div class="allitas">

Állítás:\
Ha $h$ holomorf függvény $z_{0}$-ban és $h$-nak $z_{0}$-ban $m$-szeres
gyöke van, akkor az $f = \frac{1}{h}$ függvénynek a $z_{0}$-ban
$m$-edrendű pólusa van.

</div>

<div class="bizonyitas">

Bizonyítás:\
$h\left( z \right) = \left( {z - z_{0}} \right)^{m}h_{1}\left( z \right)$,
$h_{1}\left( z_{0} \right) \neq 0$, $h_{1}$ holomorf.
$f\left( z \right) = \frac{1}{h\left( z \right)} = \frac{1}{\left( {z - z_{0}} \right)^{m}h_{1}\left( z \right)}$,
$g\left( z \right): = f\left( z \right)\left( {z - z_{0}} \right)^{m} = \frac{1}{h_{1}\left( z \right)}$
holomorf,
$g\left( z_{0} \right) = \frac{1}{h_{1}\left( z_{0} \right)} \neq 0$.

</div>

A reziduum kiszámításának két egyszerű esete:

1.  Tfh $h$-nak $z_{0}$-ban egyszeres gyöke van, vagyis
    $h\left( z \right) = \left( {z - z_{0}} \right)h_{1}\left( z \right),h_{1}\left( z_{0} \right) \neq 0$.
    $f = \frac{1}{h}$-nak $z_{0}$-ban elsőrendű pólusa van. $m = 1$
    esetre $$\begin{aligned}
      {{\text{Rez}}_{{z_0}}}\left( f \right) &  = {\left[ {f\left( z \right)\left( {z - {z_0}} \right)} \right]_{z = {z_0}}} = {\left[ {\frac{{z - {z_0}}}{{h\left( z \right)}}} \right]_{z = {z_0}}} \\ 
       &  = \mathop {\lim }\limits_{z \to {z_0}} \frac{{z - {z_0}}}{{h\left( z \right)}} = \mathop {\lim }\limits_{z \to {z_0}} \frac{{z - {z_0}}}{{h\left( z \right) - \underbrace {h\left( {{z_0}} \right)}_0}} = \mathop {\lim }\limits_{z \to {z_0}} \frac{1}{{\frac{{h\left( z \right) - h\left( {{z_0}} \right)}}{{z - {z_0}}}}} = \frac{1}{{\underbrace {h'\left( {{z_0}} \right)}_{ \ne 0}}}. \\ 
    \end{aligned} $$
2.  Tfh $f = \phi\psi$, ahol $\phi$ holomorf $z_{0}$-ban, viszont $\psi$
    -nek elsőrendű pólusa van itt. $\text{Rez}_{z_{0}}f = ?$
    $\phi\left( z \right) = c_{0} + c_{1}\left( {z - z_{0}} \right) + c_{2}\left( {z - z_{0}} \right)^{2} + ...$,
    $\psi = \frac{d_{- 1}}{z - z_{0}} + d_{0} + d_{1}\left( {z - z_{0}} \right) + d_{2}\left( {z - z_{0}} \right)^{2} + ...$,
    így
    $f(z) = \phi(z) \cdot \psi(z) = \frac{c_{0}d_{- 1}}{z - z_{0}} + (c_{0}d_{0} + c_{1}d_{- 1}) + (c_{2}d_{- 1} + c_{1}d_{0} + c_{0}d_{1})(z - z_{0}) + ...$,
    $\text{Rez}_{z_{0}}f = c_{0}d_{- 1} = \phi(z_{0}) \cdot \text{Rez}_{z_{0}}\psi$.

<div>

Ábra: ide kell betenni a cauchy\_gamma\_r\_s\_r.eps filet.

</div>

<div class="pelda">

Alkalmazás:\
A reziduum tétel alkalmazása a (valós) improprius integrálok
kiszámítására.
${\int\limits_{- \infty}^{\infty}{\frac{\cos x}{1 + x^{2}}dx}} = {\int\limits_{- \infty}^{\infty}{\frac{\cos x + i\sin x}{1 + x^{2}}dx}} = {\int\limits_{- \infty}^{\infty}{\frac{e^{ix}}{1 + x^{2}}dx}}$.
$\left. z\mapsto\frac{e^{iz}}{1 + z^{2}} \right.$ izolált szingularitás
$z = \pm i$ -ben, máshol holomorf.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

${\int\limits_{- \infty}^{\infty}{\frac{e^{ix}}{1 + x^{2}}dx}} = \lim\limits_{R\rightarrow\infty}{\int\limits_{- R}^{R}{\frac{e^{ix}}{1 + x^{2}}dx}}$.
Legyen $\Gamma_{R}$ az $S_{R}$ -rel jelölt félkörvonal és a
$\left\lbrack {- R,R} \right\rbrack$ intervallum egymásutánja, ekkor
$$\begin{gathered}
  \int_{{\Gamma _R}} {\frac{{{e^{iz}}}}{{1 + {z^2}}}dz}  = \mathop \smallint \limits_{ - R}^R \frac{{{e^{iz}}}}{{1 + {z^2}}}dz + \int_{{S_R}} {\frac{{{e^{iz}}}}{{1 + {z^2}}}dz}  \\ 
   \Downarrow  \\ 
  \mathop {\lim }\limits_{R \to \infty } \mathop \smallint \limits_{ - R}^R \frac{{{e^{ix}}}}{{1 + {x^2}}}dx = \mathop {\lim }\limits_{R \to \infty } \left( {\int_{{\Gamma _R}} {\frac{{{e^{iz}}}}{{1 + {z^2}}}dz}  - \int_{{S_R}} {\frac{{{e^{iz}}}}{{1 + {z^2}}}dz} } \right). \\ 
\end{gathered} $$ A reziduum tétel alapján
${\int_{\Gamma_{R}}{\frac{e^{iz}}{1 + z^{2}}dz}} = 2\pi i \cdot \text{Rez}_{i}\left( z\mapsto\frac{e^{iz}}{1 + z^{2}} \right)$.
A reziduum kiszámításához vegyük észre, hogy
$$\underbrace {\frac{{{e^{iz}}}}{{1 + {z^2}}}}_f = \underbrace {{e^{iz}}}_\phi  \cdot \underbrace {\frac{1}{{1 + {z^2}}}}_\psi  \Rightarrow {\text{Rez}}_i\left( {\phi  \cdot \psi } \right) = \phi \left( i \right) \cdot {{\text{Rez}}_i}\left( \psi  \right) = \phi \left( i \right).\frac{1}{{h'\left( i \right)}},$$
ahol $h\left( z \right) = 1 + z^{2}$, így
$${{\text{Rez}}_i}\left( f \right) = {e^{ - 1}}\frac{1}{{2i}} \Rightarrow \int_{{\Gamma _R}} {\frac{{{e^{iz}}}}{{1 + {z^2}}}dz}  = 2\pi i\frac{1}{{e \cdot 2i}} = \frac{\pi }{e}.$$
Most belátjuk, hogy
$\lim\limits_{R\rightarrow\infty}{\int_{S_{R}}\frac{e^{iz}}{1 + z^{2}}} = 0$.
A számítás során felhasználjuk, hogy
$\left| e^{iz} \right| = e^{\Re{({iz})}} \leq 1$, és hogy
$\left| {1 + z^{2}} \right| \geq \left| z^{2} \right| - 1 = \left| z \right|^{2} - 1$.
$$\left. \left| {\int_{S_{R}}{\frac{e^{iz}}{1 + z^{2}}dz}} \right| \leq \pi R \cdot \sup\limits_{z \in S_{R}}\left| \frac{e^{iz}}{1 + z^{2}} \right| \leq \pi R\frac{1}{\left| z \right|^{2} - 1} = \pi R\frac{1}{R^{2} - 1}\rightarrow 0, \right.$$
ha $\left. R\rightarrow\infty \right.$, így
${\int\limits_{- \infty}^{\infty}{\frac{e^{ix}}{1 + x^{2}}dx}} = \lim\limits_{R\rightarrow\infty}{\int\limits_{- R}^{R}{\frac{e^{iz}}{1 + z^{2}}dz}} = \frac{\pi}{e}$.

### Komplex függvények inverze

Először az ún. lokális inverz létezését vizsgáljuk.

<div class="allitas">

Állítás:\
Tfh $f$ holomorf a $z_{0}$ pont egy környezetében.

-   Ha $f'\left( z_{0} \right) = 0$, akkor $f$ -nek nincs lokális
    inverze, semmilyen kis környezetében.
-   Ha $f'\left( z_{0} \right) \neq 0$, akkor $f$-t a $z_{0}$ pont elég
    kis környezetére leszűkítve, $f$-nek létezik inverze, az inverz
    függvény értelmezve és holomorf a $w_{0} = f\left( z_{0} \right)$
    pont egy környezetében.

</div>

<div class="megj">

Megjegyzés:\
Abból, hogy
$\exists f'\left( z \right) \neq 0,\forall z \in \Omega\Rightarrow f$
injektív. Például nézzük az $f\left( z \right) = e^{z}$ függvényt, mely
$2\pi i$ szerint periodikus, vagyis
$f\left( {z + 2\pi i} \right) = f\left( z \right)$. Ez a függvény tehát
nem injektív, pedig
$f'\left( z \right) = \left( e^{z} \right)' = e^{z} \neq 0,\forall z \in {\mathbb{C}}$.

</div>

<div class="allitas">

Állítás:\
Az $f\left( z \right) = e^{z}$ függvény injektív az
$\Omega: = \left\{ {{\mathbb{C}} \ni z = x + iy:x \in {\mathbb{R}},0 \leq y < 2\pi} \right\}$
-n és
$R_{f} = {\mathbb{C}}\text{\textbackslash}\left\{ \text{0} \right\}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $w \in {\mathbb{C}}\text{\textbackslash}\left\{ 0 \right\}$ és
$e^{z} = w$.
$\left. z = x + iy\Rightarrow e^{z} = e^{x + iy} = e^{x}\left( {\cos\left( y \right) + i\sin\left( y \right)} \right) \right.$,
valamint
$w = r \cdot e^{i\phi} = r \cdot \left( {\cos\left( \phi \right) + i\sin\left( \phi \right)} \right)$,
ahol $r = \left| w \right|$,
$\left\lbrack {0,2\pi} \right) \ni \phi = \arg\left( w \right)$.
$\left. e^{x} = r = \left| w \right|\Leftrightarrow x = \ln\left| w \right| \right.$,
$y = \phi = \arg\left( w \right)$, tehát
$$\left. e^{z} = w\Leftrightarrow z = x + iy = \ln\left| w \right| + i\arg\left( w \right). \right.$$

</div>

Az előbbiek alapján szeretnénk definiálni a természetes alapú
logaritmust a komplex számokon.

<div class="def">

Definíció:\
$w \in {\mathbb{C}}\text{\textbackslash}\left\{ 0 \right\}$ esetén
legyen $\log w: = \ln\left| w \right| + i\arg w$. (A logaritmus függvény
értelmezhető minden olyan tartományon, ahol az argumentum egyértelműen
értelmezhető. Mivel $\log\left( z \right) = \ln z$, ha $z$ tisztán
valós, olykor $\log z$ helyett $\ln z$ jelölést használjuk, még ha $z$
nem is tisztán valós.)

</div>

Konform leképezések
-------------------

<div class="def">

Definíció:\
Legyen $\Omega \subset {\mathbb{C}}$ tartomány. Ha
$\left. f:\Omega\rightarrow{\mathbb{C}} \right.$ holomorf és
$f'\left( z \right) \neq 0,\forall z \in \Omega$, akkor $f$-t konform
leképezésnek nevezzük.

</div>

<div class="tetel">

Konform leképezések alaptétele:\
Legyen $\Omega \subset {\mathbb{C}}$ egyszeresen összefüggő tartomány,
melynek legalább 2 határpontja van. Ekkor létezik egyetlen $f$ konform
leképezés, amely $\Omega$ -t a $\mathbb{C}$ egységkörére képezi injektív
módon úgy, hogy egy adott $z_{0} \in \Omega$ pontra
$f\left( z_{0} \right) = 0$, $\arg f'\left( z_{0} \right) = \phi$ adott.

</div>

<div class="pelda">

Példa:\
Félsík konform leképezése az egységkörre.
$\Omega: = \left\{ {z \in {\mathbb{C}}:\Im\left( z \right) > 0} \right\}$,
$K_{1}: = \left\{ {w \in {\mathbb{C}}:\left| w \right| < 1} \right\}$.
$f\left( z \right): = \frac{z - z_{0}}{z - \overline{z_{0}}}e^{i\phi}$,
ahol a felülvonás a komplex konjugálás. Láthatjuk, hogy $f$ holomorf
$\Omega$ -n, és $\Im\left( z \right) > 0$ miatt
$\left. \frac{\left| {z - z_{0}} \right|}{\left| {z - \overline{z_{0}}} \right|} < 1\Leftrightarrow\frac{z - z_{0}}{z - \overline{z_{0}}} \in K_{1}\Rightarrow w \in K_{1} \right.$.
Ha $\Im\left( z \right) = 0$, akkor
$\left| \frac{z - z_{0}}{z - \overline{z_{0}}} \right| = 1$, ha
$\left. \Im\left( z \right) < 0\Rightarrow\left| \frac{z - z_{0}}{z - \overline{z_{0}}} \right| > 1 \right.$,
vagyis ekkor $w$ a $K_{1}$ -en kívül van.

</div>

### Alkalmazás áramlástani feladatokra

Síkbeli az áramlás, ha az áramlás sebessége egy
$\left( {x,y} \right) \in {\mathbb{R}}^{2}$ pontban
$$ \tilde w\left( {x,y} \right): = \left( {\tilde u\left( {x,y} \right),\tilde v\left( {x,y} \right)} \right),$$
ahol az alábbi jelölések érvényesek: $$\begin{aligned}
  \tilde u\left( {x,y} \right): =  & u\left( {x + iy} \right) \\ 
  \tilde v\left( {x,y} \right): =  & v\left( {x + iy} \right) \\ 
  w\left( {x + iy} \right): =  & u\left( {x + iy} \right) + iv\left( {x + iy} \right) \\ 
  \bar w\left( {x + iy} \right) =  & u\left( {x + iy} \right) - i \cdot v\left( {x + iy} \right). \\ 
\end{aligned} $$

Bizonyos fizikai feltételek teljesülése esetén az áramlás divergencia-
és rotációmentes, vagyis
$0 = {\text{div}}\left( {\tilde w} \right): = \frac{{\partial \tilde u}}{{\partial x}} + \frac{{\partial \tilde v}}{{dy}}$
és
$0 = {\text{rot}}\left( {\tilde w} \right) = \frac{{\partial \tilde v}}{{\partial x}} - \frac{{\partial \tilde u}}{{\partial y}}.$
A $\overline{w}$ függvényre teljesülnek a Cauchy-Reimann parciális
differenciálegyenletek $\left. \Rightarrow\overline{w} \right.$ holomorf
függvény $\widetilde{u}$ és $\widetilde{v}$ folytonosan
differenciálható). A $\overline{w}$ függvénynek létezik primitív
függvénye, $f'\left( z \right): = \overline{w}$, $F: = f + ig$. Ekkor
$$\left. {\begin{array}{*{20}{l}}
  {F' = \bar w = u - iv} \\ 
  {F' = \frac{{\partial f}}{{\partial x}} + i\frac{{\partial g}}{{\partial x}}} 
\end{array}} \right\}u = \frac{{\partial f}}{{\partial x}},v =  - \frac{{\partial g}}{{\partial x}}.$$
Mivel $F$ holomorf, ezért $F$-re is teljesülnek a C-R egyenletek:
$\frac{\partial f}{\partial x} = \frac{\partial g}{\partial y}$,
$\frac{\partial f}{\partial y} = - \frac{\partial g}{\partial x}$
$\left. \Rightarrow u = \frac{\partial f}{\partial x} = \frac{\partial g}{\partial y},\, v = - \frac{\partial g}{\partial x} = \frac{\partial f}{\partial y} \right.$.
A fizikában $f$-et a sebesség potenciáljaként definiáljuk. Belátjuk,
hogy $g$ az áramvonalak mentén állandó. Áramvonal: olyan
$\left. \left( {\phi,\psi} \right):\left\lbrack {\alpha,\beta} \right\rbrack\rightarrow{\mathbb{R}}^{2} \right.$
folytonosan differenciálható görbe, melynél
$$\left( {\overset{.}{\phi}\left( t \right),\overset{.}{\psi}\left( t \right)} \right) \parallel \left( {\widetilde{u}\left( {\phi\left( t \right),\psi\left( t \right)} \right),\widetilde{v}\left( {\phi\left( t \right),\psi\left( t \right)} \right)} \right),\, t \in {\left\lbrack {\alpha,\beta} \right\rbrack,}$$vagyis
melynél a görbe érintővektora párhuzamos a helyi sebességvektorral.
Ekkor $$\begin{array}{l}
\begin{array}{l}
\begin{array}{ll}
{\widetilde{u}\left( {\phi\left( t \right),\psi\left( t \right)} \right) = \lambda\left( t \right) \cdot \overset{.}{\phi}\left( t \right)} & {/ \cdot \overset{.}{\psi}\left( t \right)} \\
{\widetilde{v}\left( {\phi\left( t \right),\psi\left( t \right)} \right) = \lambda\left( t \right) \cdot \overset{.}{\psi}\left( t \right)} & {/ \cdot \overset{.}{\phi}\left( t \right)} \\
\end{array} \\
\end{array} \\
{\widetilde{u}\left( {\phi\left( t \right),\psi\left( t \right)} \right)\overset{.}{\psi}\left( t \right) - \widetilde{v}\left( {\phi\left( t \right),\psi\left( t \right)} \right)\overset{.}{\phi}\left( t \right) = 0.} \\
\end{array}$$ A C-R egyenletekből következőket felhasználva, majd a
közvetett függvény deriválására vonatkozó összefüggésből
$$\left. \frac{\partial\widetilde{g}}{\partial y}\left( {\phi\left( t \right),\psi\left( t \right)} \right)\overset{.}{\psi}\left( t \right) + \frac{\partial\widetilde{g}}{\partial x}\left( {\phi\left( t \right),\psi\left( t \right)} \right)\overset{.}{\phi}\left( t \right) = 0\Leftrightarrow\frac{d}{dt}\left\lbrack {\widetilde{g}\left( {\phi\left( t \right),\psi\left( t \right)} \right)} \right\rbrack = 0, \right.$$
tehát a
$\left. t\mapsto\widetilde{g}\left( {\phi\left( t \right),\psi\left( t \right)} \right) \right.$
függvény állandó.

<div>

Ábra: ide kell betenni a konform.eps filet.

</div>

Lebesgue-integrál
=================

A Reimann integrál hátrányai:

-   Csak véges intervallumon és korlátos függvények esetén értelmezhető
    közvetlenül.
-   Az integrál és a limesz felcserélhetősége csak egyenletes
    konvergencia esetén lehetséges.
-   Nevezetes függvényterek nem vezethetők be.

<div class="def">

Definíció:\
Legyen $I$ valamilyen ${\mathbb{R}}^{n}$ -beli intervallum, azaz
$I: = I_{1} \times I_{2} \times ... \times I_{n}$, ahol
$I_{j} = \left\lbrack {a_{j},b_{j}} \right\rbrack \in {\mathbb{R}}$
egydimenziós intervallumok. Ekkor az $I$ Lebesgue mértéke:
$\lambda\left( I \right): = \lambda\left( I_{1} \right) \cdot \lambda\left( I_{2} \right) \cdot ... \cdot \lambda\left( I_{n} \right)$,
ahol $\lambda\left( I_{j} \right) = b_{j} - a_{j}$.

</div>

<div class="def">

Definíció:\
Egy $A \subset {\mathbb{R}}^{n}$ halmazt nullmértékűnek nevezünk, ha
$\forall\varepsilon > 0$ szám esetén az $A$ halmaz lefedhető
megszámlálhatóan (véges vagy végtelen) sok intervallummal úgy, hogy azok
mértékének összege $\leq \varepsilon$, vagyis
$A \subset {\bigcup\limits_{k = 1}^{\infty}I^{k}},\, I^{k} \subset {\mathbb{R}}^{n}$,
${\sum\limits_{k = 1}^{\infty}{\lambda\left( I^{k} \right)}} \leq \varepsilon$.

</div>

<div class="pelda">

Példák:

1.  Minden megszámlálhatóan (véges vagy végtelen) sok pontból álló
    halmaz ${\mathbb{R}}^{n}$ -ben nullmértékű. Legyen $\varepsilon > 0$
    tetszőleges. Az $i$-edik pontot lefedjük egy $I_{i}$ kis
    intervallummal úgy, hogy mértéke $\frac{\varepsilon}{2^{i}}$ legyen,
    tehát az első pontot például egy $\frac{\varepsilon}{2}$ mértékű
    intervallummal. Mivel
    $\sum\limits_{k = 1}^{\infty}{\frac{\varepsilon}{2^{k}} = \varepsilon}$,
    így az említett halmaz valóban nullmértékű
2.  ${\mathbb{R}}^{2}$ -ben egy egyenes szakasz nullmértékű, ugyanis
    lefedhető tetszőlegesen kis magasságú téglalappal
3.  ${\mathbb{R}}^{2}$ -ben minden egyenes is nullmértékű.
    <div>

    Ábra: ide kell betenni a lebesgue\_A1\_A2\_A3\_A4\_A5.eps filet.

    </div>

    Ehhez belátjuk, hogy megszámlálhatóan végtelen sok nullmértékű
    halmaz uniója is nullmértékű:
    $A: = {\bigcup\limits_{j = 1}^{\infty}A_{j}}$, ekkor az első ponthoz
    hasonlóan $A_{j}$ -t befedjük egy legfeljebb
    $\frac{\varepsilon}{2^{j}}$ mértékűvel, vagyis $A_{1}$ -t egy
    legfeljebb $\frac{\varepsilon}{2}$ -vel, $A_{2}$ -t egy legfeljebb
    $\frac{\varepsilon}{2^{2}}$ -tel\... Így felhasználva ismét a
    $\sum\limits_{k = 1}^{\infty}{\frac{\varepsilon}{2^{k}} = \varepsilon}$
    összefüggést, láthatjuk, hogy az említett halmaz valóban
    nullmértékű.

</div>

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

Tehát láttuk, hogy ${\mathbb{R}}^{2}$ -ben megszámlálhatóan sok
nullmértékű halmaz unója is nullmértékű. De ez nem csak
${\mathbb{R}}^{2}$ -ben igaz, az érvelés hasonló általános esetben.
Legyen $A_{j}$ nullmértékű, belátjuk, hogy
$\bigcup\limits_{j = 1}^{\infty}A_{j}$ nullmértékű.
$$\begin{array}{*{20}{c}}
  {{A_1} \subset \bigcup\limits_{k = 1}^\infty  {{I_{1,k}}} ,\,\mathop \sum \limits_{k = 1}^\infty  \lambda \left( {{I_{1,k}}} \right) \leqslant \frac{\varepsilon }{2}} \\ 
  {{A_2} \subset \bigcup\limits_{k = 1}^\infty  {{I_{2,k}}} ,\,\mathop \sum \limits_{k = 1}^\infty  \lambda \left( {{I_{2,k}}} \right) \leqslant \frac{\varepsilon }{{{2^2}}}} \\ 
   \vdots  \\ 
  {{A_j} \subset \bigcup\limits_{k = 1}^\infty  {{I_{j,k}}} ,\,\mathop \sum \limits_{k = 1}^\infty  \lambda \left( {{I_{j,k}}} \right) \leqslant \frac{\varepsilon }{{{2^j}}}} \\ 
   \vdots  
\end{array}$$ Ezek az $I_{j',k}$ intervallumok megszámlálhatóan végtelen
sokan vannak, mert sorba rendezhetjük őket.\
(Táblázatba rendezve őket, az átlók mentén a sorrend:
$I_{1,1},\, I_{1,2},\, I_{2,1},\, I_{1,3},\, I_{2,2},\, I_{3,1}\ldots$)
Ekkor pedig
$\sum\limits_{j' = 1}^{\infty}{\frac{\varepsilon}{2^{j'}} = \varepsilon}$
miatt az unió is nullmértékű.

Előző órán láttuk, hogy ${\mathbb{R}}^{2}$ -ben egy egyenes nullmértékű,
ugyanis megszámlálhatóan végtelen sok nullmértékű halmaz uniója.
Hasonlóan, ${\mathbb{R}}^{3}$ -ben egy sík nullmértékű\...

Lépcsős függvények integrálja
-----------------------------

<div class="def">

Definíció:\
Legyen $\left. f:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$ olyan
függvény, hogy véges sok intervallumban nem 0 állandó, máshol 0. Ekkor
$f$-t lépcsős függvénynek nevezzük.

</div>

<div class="def">

Definíció:\
Legyen $f$ lépcsős függvény, mely az $I_{k}$ intervallumon $c_{k}$ -val
egyenlő. Ekkor
${\int f}: = {\sum\limits_{k = 1}^{\infty}{c_{k}\lambda\left( I_{k} \right)}}$.
Belátható, hogy a definíció egyértelmű.

</div>

<div class="tetel">

A lemma:\
Legyen $\left( f_{j} \right)$ lépcsős függvények monoton csökkenő
sorozata, amelyre
$\lim\limits_{j\rightarrow\infty}f_{j}\left( x \right) = 0,\forall x \in \left\{ {{\mathbb{R}}\backslash A} \right\}$,
ahol $A$ nullmértékű halmaz. Ezt úgy mondjuk, hogy a limesz majdnem
$x$-re vagy majdnem mindenütt 0. Ekkor az integrálok
$\lim\limits_{j\rightarrow\infty}{\int f_{j}} = 0$ sorozata .
(Bizonyítás nélkül.)

</div>

<div class="tetel">

B lemma:\
Legyen $\left( f_{j} \right)$ lépcsős függvények egy monoton növő
sorozata, amelyre az integrálok sorozata $\int f_{j}$ felülről korlátos,
${\int f_{j}} \leq C \in {\mathbb{R}},\forall j$
$\left. \Leftrightarrow\lim{\int f_{j}} \right.$ véges. Ekkor majdnem
minden $x \in {\mathbb{R}}^{n}$ pontra
$\lim\limits_{j\rightarrow\infty}f_{j}\left( x \right)$ is véges.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen
$M_{0}: = \left\{ {x \in {\mathbb{R}}^{n}:\lim\limits_{j\rightarrow\infty}f_{j}\left( x \right) = \infty} \right\}$!
Ekkor belátandó, hogy $M_{0}$ nullmértékű. Tetszőleges rögzített
$\varepsilon > 0$ esetén legyen
$M_{\varepsilon,j}: = \left\{ {x \in {\mathbb{R}}^{n}:f_{j}\left( x \right) > \frac{C}{\varepsilon}} \right\}$!
Mivel $\left( f_{j} \right)$ monoton növő, ezért
$\left. M_{\varepsilon,1} \subset M_{\varepsilon,2} \subset M_{\varepsilon,3} \subset \ldots\Rightarrow M_{\varepsilon,N} = {\bigcup\limits_{j = 1}^{N}M_{\varepsilon,j}} \right.$.
Jelöljük:
$$M_{\varepsilon}: = {\left\{ {x \in {\mathbb{R}}^{n}:\exists j \in {\mathbb{N}}:f_{j}\left( x \right) > \frac{C}{\varepsilon}} \right\}.}$$
Ekkor
$M_{\varepsilon} = {\bigcup\limits_{j = 1}^{\infty}M_{\varepsilon,j}}$,
$M_{0} \subset M_{\varepsilon},\forall\varepsilon > 0$.
$M_{\varepsilon,j}$ véges sok diszjunkt intervallum egyesítése, melyek
mértékének összege $\leq \varepsilon,\forall j$, mert ha nem így lenne,
akkor az ${\int{f_{j} > \varepsilon\frac{C}{\varepsilon}}} = C$
ellentmondásra vezetne. Tehát
$M_{\varepsilon} = {\bigcup\limits_{j = 1}^{\infty}M_{\varepsilon,j}}$
megszámlálhatóan végtelen sok intervallum uniója, $$\begin{gathered}
  {M_{\varepsilon ,1}} \subset {M_{\varepsilon ,2}} \subset ... \\ 
   \Downarrow  \\ 
  \lambda \left( {{M_{\varepsilon ,1}}} \right) \leqslant \lambda \left( {{M_{\varepsilon ,2}}} \right) \leqslant ... \leqslant \varepsilon  \\ 
   \Downarrow  \\ 
  \lambda \left( {{M_\varepsilon }} \right) = \lambda \left( {\bigcup\limits_{j = 1}^\infty  {{M_{\varepsilon ,j}}} } \right) \leqslant \varepsilon . \\ 
\end{gathered} $$ Tehát
$\left. M_{0} \subset M_{\varepsilon},\forall\varepsilon > 0\Rightarrow M_{0} \right.$
nullmértékű.

</div>

<div class="def">

Definíció:\
Jelölje $C_{1}$ az olyan
$\left. f:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$ függvények
összességét, amelyekhez léteznek lépcsős függvények monoton növekedő
olyan $\left( f_{j} \right)$ sorozata, hogy
$f\left( x \right) = \lim\limits_{j\rightarrow\infty}f_{j}\left( x \right)$
majdnem minden $x$-re és $\left( {\int f_{j}} \right)$ sorozat felülről
korlátos
$\left. \Leftrightarrow\exists\lim{\int f_{j}} < \infty \right.$.

</div>

<div class="megj">

Megjegyzés:\
Tfh $f \in C_{1}$. Ekkor az $\int f$ -t így szeretnénk értelmezni:
${\int f}: = \lim\limits_{j\rightarrow\infty}{\int f_{j}}$.

</div>

Kérdés:

1.  Egy ilyen definíció egyértelmű lenne-e, vagyis függ-e az
    $\left( f_{j} \right)$ sorozat megválasztásától?
2.  Ha spec. $f$ lépcsős függvény, akkor a régi és az új definíció
    azonos-e?

<div class="tetel">

Tétel:\
Legyenek $f,g \in C_{1}$, $f \leq g$, $\left( f_{j} \right)$ és
$\left( g_{j} \right)$ lépcsős függvények monoton sorozata úgy, hogy
$\lim\left( f_{j} \right) = f$, $\lim\left( g_{j} \right) = g$, továbbá
$\int f_{j}$ és $\int g_{j}$ korlátos. Ekkor
$\lim{\int f_{j}} \leq \lim{\int g_{j}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Jelöljük egy $\left. h:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
függvény pozitív illetve negatív részét az alábbiak szerint.
$$h^{+}\left( x \right): = \left\{ \begin{matrix}
{h\left( x \right)} & {\text{ha~}h\left( x \right) > 0} \\
0 & {\text{ha~}h\left( x \right) \leq 0} \\
\end{matrix} \right.$$ $$h^{-}\left( x \right): = \left\{ \begin{matrix}
{h\left( x \right)} & {\text{ha~}h\left( x \right) < 0} \\
0 & {\text{ha~}h\left( x \right) \geq 0} \\
\end{matrix} \right.$$ Tekintsük rögzített $j \in {\mathbb{N}}$ esetén a
következő függvénysorozatot:
$\left( {f_{j} - g_{k}} \right)_{k \in {\mathbb{N}}}$. Mivel
$\left( g_{k} \right)$ monoton növő,
$\left( {f_{j} - g_{k}} \right)_{k \in {\mathbb{N}}}$ monoton csökkentő
függvénysorozat.
$\lim\limits_{k\rightarrow\infty}\left( {f_{j} - g_{k}} \right) = f_{j} - g$
majdnem mindenütt. Mivel $\left( f_{j} \right)$ monoton növő és
$\lim\left( f_{j} \right) = f$ majdnem mindenütt
$\left. \Rightarrow f_{j} \leq f \leq g \right.$
$\left. \Rightarrow f_{j} \leq g \right.$, vagyis $f_{j} - g \leq 0$
majdnem mindenütt.
$\lim\limits_{k\rightarrow\infty}\left( {f_{j} - g_{k}} \right) = f_{j} - g \leq 0$.
Tekintsük $\left( {f_{j} - g_{k}} \right)_{k \in {\mathbb{N}}}^{+}$ -t,
ez is lépcsős függvénysorozat, ez is monoton csökkenő,
$\lim\limits_{k\rightarrow\infty}\left( {f_{j} - g_{k}} \right)^{+} = \left( {f_{j} - g} \right)^{+} = 0$
majdnem mindenütt. Alkalmazzuk az $A$ lemmát az
$\left( {f_{j} - g_{k}} \right)_{k \in {\mathbb{N}}}^{+}$ sorozatra
$\left. \Rightarrow\lim\limits_{k\rightarrow\infty}{\int\left( {f_{j} - g_{k}} \right)^{+}} = 0 \right.$.
Nyilván $$\begin{gathered}
  {h^ - } \leqslant h \leqslant {h^ + } \\ 
   \Downarrow  \\ 
  {f_j} - {g_k} \leqslant {\left( {{f_j} - {g_k}} \right)^ + } \\ 
   \Downarrow  \\ 
  \int {\left( {{f_j} - {g_k}} \right)}  \leqslant \int {{{\left( {{f_j} - {g_k}} \right)}^ + }}  \\ 
   \Downarrow  \\ 
  \int {{f_j}}  - \int {{g_k}}  \leqslant \int {{{\left( {{f_j} - {g_k}} \right)}^ + }}.  \\ 
\end{gathered} $$Ekkor $\left. k\rightarrow\infty \right.$ esetre
$$\begin{gathered}
  \int {{f_j}}  - \mathop {\lim }\limits_{k \to 0} \int {{g_k}}  \leqslant 0 \Rightarrow \int {{f_j}}  \leqslant \mathop {\lim }\limits_{k \to \infty } \int {{g_k}} ,\forall j \\ 
   \Downarrow  \\ 
  \mathop {\lim }\limits_{j \to \infty } \int {{f_j}}  \leqslant \mathop {\lim }\limits_{k \to \infty } \int {{g_k}}.  \\ 
\end{gathered} $$

</div>

**Következmények**:

1.  Ha $f = g \in C_{1}$ és $\left( f_{j} \right)$ és
    $\left( g_{j} \right)$ lépcsős függvények monoton növekedő sorozata,
    amelyekre $\lim\left( f_{j} \right) = f$ majdnem mindenütt és
    $\lim\left( g_{j} \right) = g$ majdnem mindenütt, akkor
    $\left. \Rightarrow\lim{\int f_{j}} = \lim{\int g_{j}} \right.$.
    Most már lehet definiálni: ${\int f}: = \lim{\int f_{j}}$, ahol
    $f \in C_{1}$.
2.  Ha $f$ spec. lépcsős függvény, akkor a régi és az új integrál
    definíciója azonos, ugyanis választható $f_{j} = f$-nek.
3.  $f,g \in C_{1}$ és
    $\left. f \leq g\Rightarrow{\int f} \leq {\int g} \right.$.

### Az integrál tulajdonságai $C_{1}$ -ben

1.  Ha
    $\left. f,g \in C_{1}\Rightarrow\left( {f + g} \right) \in C_{1} \right.$
    és ${\int\left( {f + g} \right)} = {\int f} + {\int g}$.
2.  Tfh $f \in C_{1},\lambda \geq 0$ állandó $\lambda \cdot f \in C_{1}$
    és ${\int{\lambda f}} = \lambda{\int f}$.
3.  Ha
    $\left. f \in C_{1}\Rightarrow f^{+} \in C_{1},f^{-} \in C_{1} \right.$.

<div class="bizonyitas">

Bizonyítás:

1.  Definíció szerint $\exists\left( f_{j} \right)$ és
    $\exists\left( g_{j} \right)$ monoton növekedő lépcsős
    függvénysorozatok, melyekre $\lim\left( f_{j} \right) = f$ majdnem
    mindenütt, $\lim\left( g_{j} \right) = g$ majdnem mindenütt és
    ${\int f} = \lim{\int f_{j}}$ valamint
    ${\int g} = \lim{\int g_{j}}$. $\left( {f_{j} + g_{j}} \right)$
    lépcsős függvények monoton növő sorozata,
    $\lim\left( {f_{j} + g_{j}} \right) = f + g$. $$\begin{gathered}
      \lim \int {\left( {{f_j} + {g_j}} \right)}  = \lim \left( {\int {{f_j}}  + \int {{g_j}} } \right) = \lim \int {{f_j}}  + \lim \int {{g_j}}  \\ 
       \Downarrow  \\ 
      \int {\left( {f + g} \right)}  = \lim \int {{f_j}}  + \lim \int {{g_j}}  = \int f  + \int g  \\ 
    \end{gathered} $$
2.  $\left. f \in C_{1}\Rightarrow\exists\left( f_{j} \right) \right.$
    lépcsős függvények monoton növő sorozata, hogy
    $\lim\left( f_{j} \right) = f$ majdnem mindenütt. Ekkor
    $\left. \lim{\int f_{j}} = {\int f}\Rightarrow\left( {\lambda f_{j}} \right) \right.$
    lépcsős függvények monoton sorozata,
    $\left. \lim{\int{\lambda f_{j}}} = \lambda\lim{\int f_{j}} = \lambda{\int f}\Rightarrow{\int{\lambda f}} = \lambda{\int f} \right.$.
3.  $\left. \left( f_{j} \right)\rightarrow f \right.$ monoton növekvő,
    $\left. \left( f_{j}^{+} \right)\rightarrow f^{+} \right.$ monoton
    növekvő, és
    $\left. \left( f_{j}^{-} \right)\rightarrow f^{-} \right.$ szintén

</div>

<div class="def">

Definíció:\
$\left( {f \cup g} \right)\left( x \right): = \max\left\{ {f\left( x \right),g\left( x \right)} \right\}$,
$\left( {f \cap g} \right)\left( x \right): = \min\left\{ {f\left( x \right),g\left( x \right)} \right\}$.

</div>

<div class="allitas">

Állítás:\
Ha
$\left. f,g \in C_{1}\Rightarrow\left( {f \cup g} \right) \in C_{1},\left( {f \cap g} \right) \in C_{1} \right.$.

</div>

Integrálás a $C_{2}$ osztályában
--------------------------------

<div class="def">

Definíció:\
Ha $f = f_{1} - f_{2}$, ahol $f_{1},f_{2} \in C_{1}$, akkor
$f \in C_{2}$. Ekkor legyen ${\int f}: = {\int f_{1}} - {\int f_{2}}$.

</div>

<div class="allitas">

Állítás:\
Az integrál definíciója egyértelmű.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $f = f_{1} - f_{2} = g_{1} - g_{2}$, ahol
$f_{1},f_{2},g_{1},g_{2} \in C_{1}$.
${\int f_{1}} - {\int f_{2}} = {\int g_{1}} - {\int g_{2}}$ ugyanis
${\int f_{1}} + {\int g_{2}} = {\int g_{1}} + {\int f_{2}}$, mert
$\left. f_{1} + g_{2} = g_{1} + f_{2}\Rightarrow{\int f_{1}} + {\int g_{2}} = {\int g_{1}} + {\int f_{2}} \right.$.

</div>

### A $C_{2}$ -beli integrál tulajdonságai:

1.  Ha $\left. f,g \in C_{2}\Rightarrow f + g \in C_{2} \right.$ és
    ${\int{f + g}} = {\int f} + {\int g}$.
2.  $\left. f \in C_{2},\lambda \in {\mathbb{R}}\Rightarrow\lambda \cdot f \in C_{2} \right.$
    és ${\int{\lambda f}} = \lambda{\int f}$
3.  $f,g \in C_{2}$,
    $\left. f \leq g\Rightarrow{\int f} \leq {\int g} \right.$
4.  Ha $f \in C_{2}$, akkor egy nullmértékű halmazon megváltoztatva
    szintén továbbra is $\in C_{2}$ marad, és az integrál értéke nem
    változik.
5.  Ha
    $\left. f \in C_{2}\Rightarrow f^{+},f^{-},\left| f \right| \in C_{2} \right.$.
6.  Ha
    $\left. f \in C_{2}\Rightarrow\left| {\int f} \right| \leq {\int\left| f \right|} \right.$.
7.  Legyen $f \in C_{2}$, ekkor $\exists\left( f_{j} \right)$ lépcső
    függvényekből álló sorozat (nem feltétlen monoton), hogy
    $\left. \left( f_{j} \right)\rightarrow f \right.$ majdnem mindenhol
    és $\left. {\int f_{j}}\rightarrow{\int f} \right.$

<div class="bizonyitas">

Bizonyítás:

1.  $f = f_{1} - f_{2}$, $g = g_{1} - g_{2}$, ahol
    $${f_1},{f_2},{g_1},{g_2} \in {C_1} \Rightarrow f + g = \underbrace {\left( {{f_1} + {g_1}} \right)}_{ \in {C_1}} - \underbrace {\left( {{f_2} + {g_2}} \right)}_{ \in {C_1}},$$
    így ekkor $$\begin{aligned}
      \int {\left( {f + g} \right)}  &  = \int {\left( {{f_1} + {g_1}} \right)}  - \int {\left( {{f_2} + {g_2}} \right)}  \\ 
       &  = \left[ {\int {\left( {{f_1}} \right)}  + \int {\left( {{g_1}} \right)} } \right] - \left[ {\int {\left( {{f_2}} \right)}  + \int {\left( {{g_2}} \right)} } \right] \\ 
       &  = \left( {\int {{f_1}}  - \int {{f_2}} } \right) + \left( {\int {{g_1}}  - \int {{g_2}} } \right) \\ 
       &  = \int f  + \int g . \\ 
    \end{aligned} $$
2.  $f = f_{1} - f_{2},f_{1} \in C_{1}$, ekkor
    $\lambda f = \lambda f_{1} - \lambda f_{2}$. Ha $\lambda \geq 0$,
    akkor ${\underbrace {\lambda {f_1}}_{ \in {C_1}}}$. Ha
    $\lambda <0 \Rightarrow \lambda f = \underbrace {\left( { - \lambda } \right)}_{ > 0}{f_2} - \underbrace {\left( { - \lambda } \right)}_{ > 0}{f_1}$
    .
3.  $\left. f \leq g\Rightarrow g - f \geq 0 \right.$. Azt kellene
    igazolni, hogy ekkor
    $\int {\underbrace {\left( {g - f} \right)}_{ = h}} \geqslant 0$.
    $h \geq 0$, $h: = h_{1} - h_{2}$,
    $$\left. h_{j} \in C_{1}\Rightarrow h_{1} \geq h_{2}\Rightarrow{\int h_{1}} \geq {\int h_{2}}\Rightarrow{\int h_{1}} - {\int h_{2}} \geq 0\Rightarrow{\int h} \geq 0 \right.$$.
4.  Házi feladat.
5.  $f = f_{1} - f_{2},f_{j} \in C_{1}$.
    $\left| f \right| = \underbrace {\left( {{f_1} \cup {f_2}} \right)}_{ \in {C_1}} - \underbrace {\left( {{f_1} \cap {f_2}} \right)}_{ \in {C_1}}$.
    $f^{+} = \left( {f_{1} \cup f_{2}} \right) - f_{2}$,
    ${f^ - } = \underbrace {\left( {{f_1} \cup {f_2}} \right)}_{ \in {C_1}} - \underbrace {{f_1}}_{ \in {C_1}}.$
6.  $\left. - \left| f \right| \leq f \leq \left| f \right|\Rightarrow - {\int{\left| f \right| \leq {\int f}}} \leq {\int\left| f \right|} \right.$.
7.  $\left. f \in C_{2}\Rightarrow\exists g,h:f = g - h \right.$, ahol
    $\left. g,h \in C_{1}\Rightarrow\exists\left( g_{j} \right) \right.$
    (monoton növő) lépcsős függvénysorozat, hogy
    $\left. \left( g_{j} \right)\rightarrow g \right.$ majdnem mindenütt
    és $\lim{\int g_{j}} = {\int g}$ továbbá
    $\exists\left( h_{j} \right)$ (monoton növő) lépcsős
    függvénysorozat, hogy
    $\left. \left( h_{j} \right)\rightarrow h \right.$ majdnem mindenütt
    és
    $\left. \lim{\int h_{j}} = {\int h}\Rightarrow\lim\left( {g_{j} - h_{j}} \right): = \lim\left( f_{j} \right) = g - h = f \right.$
    majdnem mindenütt,
    ${\int{\lim\left( {g_{j} - h_{j}} \right)}} = {\int\left( {\lim g_{j} - \lim h_{j}} \right)} = \lim{\int g_{j}} - \lim{\int h_{j}} = {\int g} - {\int h} = {\int f}$.

</div>

<div class="allitas">

Állítás:\
Ha
$\left. f,g \in C_{2}\Rightarrow\left( {f \cup g} \right) \in C_{2},\left( {f \cap g} \right) \in C_{2} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$f \cup g = \underbrace {{{\left( {f - g} \right)}^ + }}_{ \in {C_2}} + \underbrace g_{ \in {C_2}}$,
$f \cap g = \underbrace f_{ \in {C_2}} - \underbrace {{{\left( {f - g} \right)}^ + }}_{ \in {C_2}}$.

</div>

<div class="tetel">

Beppo Levi tétele (monoton sorozatokból, illetve nemnegatív tagú
sorokról):

1.  Tfh $f_{j} \in C_{2}$ (integrálható), $\left( f_{j} \right)$ monoton
    nő és $\lim{\int f_{j}}$ véges
    $\left. \Leftrightarrow{\int f_{j}} \right.$ felülről korlátos).
    Ekkor
    $f\left( x \right): = \lim\left( {f_{j}\left( x \right)} \right)$
    véges majdnem minden $x$-re, továbbá $f$ is integrálható,
    ${\int f} = \lim{\int f_{j}}$.
2.  Sorokra: tfh $g_{j} \in C_{2}$, $g_{j} \geq 0$ és
    ${\sum\limits_{j = 1}^{\infty}{\int g_{j}}} < \infty$. Ekkor majdnem
    minden $x$-re
    $C_{2} \ni f\left( x \right): = {\sum\limits_{j = 1}^{\infty}{g_{j}\left( x \right)}} < \infty$
    (a sor konvergens) és
    ${\int f} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}}}$.

</div>

A két állítás egymással ekvivalens, ugyanis legyen
$f_{k}: = {\sum\limits_{k = 1}^{k}g_{j}}$. Az $f_{k}$ monoton nő
$\left. \Leftrightarrow g_{j} \geq 0 \right.$,
$\lim{\int f_{k}} = \lim{\int{\sum\limits_{j = 1}^{k}g_{j}}} = \lim{\sum\limits_{j = 1}^{k}{\int g_{j}}}$.
A sorokra vonatkozó formáját fogjuk bizonyítani.

<div class="ajanlo">

<div class="ajanlofig">

[![Fun image](wikipedian_protester.png){width="500"
height="271"}](https://xkcd.com)

</div>

Text

</div>

<div class="bizonyitas">

Beppo Levi tételének bizonyítása

Két részre bontjuk a bizonyítást, első részben $g_{j} \in C_{1}$.\
Ez azt jelenti, hogy
$\exists h_{j_{k}}:\lim\limits_{k\rightarrow\infty}\left( h_{j_{k}} \right) = g_{j}$
majdnem mindenütt, ahol $h_{j_{k}}$ lépcsős függvények, monoton nőnek,
továbbá
${\int{g_{j} =}}\lim\limits_{k\rightarrow\infty}{\int h_{j_{k}}}$. Mivel
$g_{j} \geq 0$, ezért feltehető, hogy $h_{j_{k}} \geq 0$, ugyanis
$h_{j_{k}}$ helyett választhatnánk a $h_{{}_{j_{k}}}^{+}$ függvényeket
is. 5let: jelöljük $H_{k}: = {\sum\limits_{j = 1}^{k}h_{j_{k}}}$, ekkor
$H_{k}$ is lépcsős függvény és $\left( H_{k} \right)$ monoton növő
sorozat, ugyanis
$H_{k + 1} = {\sum\limits_{j = 1}^{k + 1}h_{j_{k + 1}}} \geq {\sum\limits_{j = 1}^{k}h_{j_{k + 1}}} \geq {\sum\limits_{j = 1}^{k}h_{j_{k}}} = H_{k}$,
továbbá $h_{j_{k}} \leq g_{j}$, mert
$\left( h_{j_{k}} \right)_{k \in {\mathbb{N}}}$ monoton növőleg tart
$g_{j}$ -hez.
$${H_k} = \sum\limits_{j = 1}^k {{h_{{j_k}}}}  \leqslant {G_k}: = \sum\limits_{j = 1}^k {{g_j}}  \Rightarrow \int {{H_k}}  \leqslant \int {{G_k}}  = \int {\sum\limits_{j = 1}^k {{g_j}} }  = \sum\limits_{j = 1}^k {\int {{g_j}} }  \leqslant \sum\limits_{j = 1}^\infty  {\int {{g_j}} }  < \infty $$
Alkalmazzuk a B lemmát a $\left( H_{k} \right)$ sorozatra. Eszerint
$\left. \exists H:\lim\left( H_{k} \right) = H\Rightarrow H \in C_{1} \right.$
majdnem mindenütt, és ${\int H} = \lim{\int H_{k}}$. Legyen $m > k$,
ekkor
$H_{m} = {\sum\limits_{j = 1}^{m}h_{j_{m}}} \geq {\sum\limits_{j = 1}^{k}h_{j_{m}}}$.
Ha most $\left. m\rightarrow\infty \right.$, akkor
$\left. H_{m}\rightarrow H,h_{j_{m}}\rightarrow g_{j} \right.$ majdnem
mindenütt, így $H \geq {\sum\limits_{j = 1}^{k}g_{j}} = G_{k}$. Tehát
$H_{k} \leq G_{k} \leq H$. Ha most $\left. k\rightarrow\infty \right.$,
akkor $\left. H_{k}\rightarrow H \right.$, így
$\left. G_{k}\rightarrow H \right.$.
$\lim\limits_{k\rightarrow\infty}{\sum\limits_{j = 1}^{k}{g_{j}\left( x \right)}} = H\left( x \right) = :f\left( x \right)$,
vagyis
$\sum\limits_{j = 1}^{\infty}{g_{j}\left( x \right) = f\left( x \right)}$.
$\left. H \in C_{1}\Leftrightarrow f \in C_{1} \right.$.
$\left. H_{k} \leq G_{k} \leq H\Rightarrow{\int H_{k}} \leq {\int G_{k}} \leq {\int H} \right.$,
ahol $\left. {\int H_{k}}\rightarrow{\int H} \right.$, így
$\left. {\int G_{k}}\rightarrow{\int H} = {\int f} \right.$.
$\int{{\sum\limits_{j = 1}^{k}g_{j}} = {\sum\limits_{j = 1}^{k}{\int\left. g_{j}\rightarrow{\int f} \right.}}}$.

**Most a második része a bizonyításnak:** általános estben vizsgálódunk,
mikor $g_{j} \in C_{2}$. Észrevétel:
$\forall\varepsilon > 0\forall\phi \in C_{2}\exists\phi_{1},\phi_{2} \in C_{1}:\phi = \phi_{1} - \phi_{2},\phi_{2} \geq 0,{\int{\phi_{2} \leq \varepsilon}}$.
Ugyanis tetszőleges $\phi \in C_{2}$ esetén $\phi$ előállítható
$\phi = \phi_{1} - \phi_{2}$ formában, ahol
$\phi_{1},\phi_{2} \in C_{1}$. Mivel $\phi_{2} \in C_{1}$, ezért
$\exists\left( \psi_{k} \right)$ monoton növő lépcsős függvény sorozat,
amelyre $\lim\left( \psi_{k} \right) = \phi_{2}$ majdnem mindenütt ,
$\lim{\int{\left( \psi_{k} \right) = {\int\phi_{2}}}}$.
$\left. \phi_{2} \geq \psi_{k}\Rightarrow\phi_{2} - \psi_{k} \geq 0,\forall k \right.$.
$\forall\varepsilon > 0\exists k_{0}:{\int\left( {\phi_{2} - \psi_{k_{0}}} \right)} \leq \varepsilon$.
Így
$\phi = \underbrace {\left( {{\phi _1} - {\psi _{{k_0}}}} \right)}_{ \in {C_1}} - \underbrace {\left( {{\phi _2} - {\psi _{{k_0}}}} \right)}_{ \geqslant 0, \in {C_1},\smallint \left( {{\phi _2} - {\psi _{{k_0}}}} \right) \leqslant \varepsilon }$.

Alkalmazzuk tehát az észrevételt $g_{j} \in C_{2}$ függvényekre:
$g_{j} = g_{j,1} - g_{j,2}$, ahol $g_{j,1},g_{j,2} \in C_{1}$ és
$g_{j,2} \geq 0$, ${\int g_{j,2}} \leq \frac{1}{2^{j}}$. Tehát
$g_{j,2} \geq 0$, $g_{j,2} \in C_{1}$,
$\sum\limits_{j = 1}^{\infty}{{\int{g_{j,2} \leq {\sum\limits_{j = 1}^{\infty}\frac{1}{2^{j}}}}} < \infty}$.
A $g_{j,2}$ tagokból álló sorra alkalmazható a bizonyítás első része,
így
${\sum\limits_{j = 1}^{\infty}{g_{j,2}\left( x \right)}}: = g_{2}^{*}\left( x \right)$
konvergens majdnem minden $x$-re, $g_{2}^{*} \in C_{1}$,
${\int g_{2}^{*}} = \sum\limits_{j = 1}^{\infty}{\int g_{j,2}}$.
Másrészt $g_{j,1} = g_{j} + g_{j,2} \geq 0$, $g_{j,1} \in C_{1}$.
$\int{g_{j,1} = {\int g_{j}} + {\int g_{j,2}}}$, így
${\sum\limits_{j = 1}^{\infty}{{\int g_{j,1}} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}}}}} + {\sum\limits_{j = 1}^{\infty}{\int g_{j,2}}}$,
ezért a $g_{j,1}$ tagokból álló sorra is alkalmazható a bizonyítás első
része
$\left. \Rightarrow\sum\limits_{j = 1}^{\infty}g_{j,1}\left( x \right): = g_{1}^{*}\left( x \right) \right.$
konvergens majdnem minden $x$-re, $g_{1}^{*} \in C_{1}$,
${\int g_{1}^{*}} = \sum\limits_{j = 1}^{\infty}{\int g_{j,1}}$, így
$\sum\limits_{j = 1}^{\infty}g_{j} = \sum\limits_{j = 1}^{\infty}\left( {g_{j,1} - g_{j,2}} \right) = g_{1}^{*} - g_{2}^{*} = :f$
konvergens majdnem minden $x$-re és $f \in C_{2}$, mert
$g_{1}^{*} \in C_{1}$ és $g_{2}^{*} \in C_{1}$; továbbá
${\int f} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}}}$.

</div>

**Következmények** (a vizsgán a tételek következményei legalább oly
fontosak, mint a bizonyítások):

1.  Tfh $f_{j} \in C_{2}$, $\left( f_{j} \right)$ monoton nő,
    $\lim\left( f_{j} \right) = f$ majdnem mindenütt, ahol
    $f \in C_{2}$, ekkor ${\int f} = \lim{\int f_{j}}$. Ugyanis a
    feltevésekből következik, hogy
    $\left. f_{j} \leq f\Rightarrow{\int{f_{j} \leq {\int f}}} \right.$,
    így a Beppo-Levi tétel miatt ${\int f} = \lim{\int f_{j}}$.
2.  Tfh $g_{j} \in C_{2}$, $g_{j} \geq 0$,
    ${\sum\limits_{j = 1}^{\infty}g_{j}} = f$ majdnem mindenütt, vagyis
    konvergens, ahol $f \in C_{2}$. Ekkor
    ${\int f} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}}}$. (A
    részletösszegekre alkalmazzuk az 1-t.)
3.  Ha $g_{j} \in C_{2}$, de nem teszem fel róluk, hogy nemnegatívak, de
    $\left. {\sum\limits_{j = 1}^{\infty}{\int\left| g_{j} \right|}} < \infty\Rightarrow \right.$
    majdnem minden $x$-re
    ${\sum\limits_{j = 1}^{\infty}{g_{j}\left( x \right)}} = f\left( x \right)$,
    vagyis a sor majdnem mindenütt konvergens, ahol $f \in C_{2}$,
    ${\int f} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}}}$.
    <div class="bizonyitas">

    Bizonyítás: $$
       - \left| {{g_j}} \right| \leqslant g_j^ -  \leqslant {g_j} \leqslant g_j^ +  \leqslant \left| {{g_j}} \right| \Rightarrow  \int {g_j^ + }  \leqslant \int {\left| {{g_j}} \right|}  \Rightarrow \mathop \sum \limits_{j = 1}^\infty  \int {g_j^ + }  < \infty  $$
    $$ - g_j^ -  \leqslant \left| {{g_j}} \right| \Rightarrow  \int {\left( { - g_j^ - } \right)}  \leqslant \int {\left| {{g_j}} \right|}  \Rightarrow \mathop \sum \limits_{j = 1}^\infty  \int {\left( { - g_j^ - } \right)}  \leqslant \mathop \sum \limits_{j = 1}^\infty  \int {\left| {{g_j}} \right|}  < \infty $$
    A Beppo Levi tétel alkalmazható $g_{j}^{+}$, illetve a
    $\left( {- g_{j}^{-}} \right)$ tagokból álló sorra. Tehát
    $\exists\lim\limits_{k\rightarrow\infty}{\sum\limits_{j = 1}^{k}\left( {- g_{j}^{-}} \right)}: = - f_{-}$
    és
    $\exists\lim\limits_{k\rightarrow\infty}{\sum\limits_{j = 1}^{k}g_{j}^{+}}: = f_{+}$,
    így
    $$\left. g_{j} = g_{j}^{+} + g_{j}^{-}\Rightarrow{\sum\limits_{j = 1}^{\infty}g_{j}} = {\sum\limits_{j = 1}^{\infty}\left( {g_{j}^{+} + g_{j}^{-}} \right)} = {\sum\limits_{j = 1}^{\infty}g_{j}^{+}} + {\sum\limits_{j = 1}^{\infty}g_{j}^{-}} = f_{+} + f_{-}: = f \right.$$,
    valamint
    ${\int f} = {\int\left( {f_{-} + f_{+}} \right)} = {\int\left( {{\sum\limits_{j = 1}^{\infty}g_{j}^{-}} + {\sum\limits_{j = 1}^{\infty}g_{j}^{+}}} \right)} = {\sum\limits_{j = 1}^{\infty}{\int g_{j}^{-}}} + {\sum\limits_{j = 1}^{\infty}{\int g_{j}^{+}}}$.

    </div>

4.  Ha $f \in C_{2}$, $f \geq 0$,
    $\left. {\int f} = 0\Rightarrow f = 0 \right.$ majdnem mindenütt.
    <div class="bizonyitas">

    Bizonyítás:\
    Alkalmazzuk a Beppo Levi tételt $g_{j}: = f$ $\forall j$ -re:
    $g_{j} \geq 0$, $g_{j} \in C_{2}$,
    $$\int {{g_j}}  = \int f  = 0 \Rightarrow \mathop \sum \limits_{j = 1}^\infty  \int {{g_j}}  = 0 \Rightarrow \mathop \sum \limits_{j = 1}^\infty  \underbrace {{g_j}\left( x \right)}_{f\left( x \right)}$$
    konvergens majdnem minden $x$-re
    $\left. \Rightarrow f\left( x \right) = 0 \right.$ majdnem minden
    $x$-re.

    </div>

### Lebesgue tétel

Kérdés: ha $f_{j} \in C_{2}$, $\lim\left( f_{j} \right) = f$ majdnem
mindenütt, akkor igaz-e, hogy $\left. \Rightarrow f \in C_{2} \right.$,
${\int f} = \lim{\int f_{j}}$.\
Válasz: általában nem, de más megszorítást alkalmazva már igen.

<div class="pelda">

Példák:

1.  $f_{j}\left( t \right) = \left( {j + 1} \right)t^{j},t \in \left\lbrack 0,1 \right\rbrack,j \in {\mathbb{N}}$.
    Ekkor
    $\lim\limits_{j\rightarrow\infty}f_{j}\left( t \right) = \left\{ \begin{matrix}
    0 & {\text{ha~}t \in \left\lbrack 0,1 \right)} \\
    \infty & {\text{ha~}t = 1} \\
    \end{matrix} \right.$, vagyis $\lim f_{j} = 0$ majdnem mindenütt a
    $\left\lbrack 0,1 \right\rbrack$ intervallumon.
    $\lim\limits_{j\rightarrow\infty}{\int\limits_{0}^{1}{f_{j}\left( t \right)}} = \left\lbrack t^{j + 1} \right\rbrack_{0}^{1} = 1 \neq {\int\limits_{0}^{1}{\lim\limits_{j\rightarrow\infty}f_{j}\left( t \right)}} = 0$.
2.  $f_{j}\left( t \right) = \left( {j + 1} \right)^{2}t^{j},t \in \left\lbrack 0,1 \right\rbrack,j \in {\mathbb{N}}$,
    ekkor megint $\lim f_{j} = 0$ majdnem mindenütt, de
    $\left. {\int\limits_{0}^{1}{f_{j}\left( t \right)}} = \left( {j + 1} \right)\rightarrow\infty \right.$.

</div>

<div class="tetel">

Tétel (Lebesgue tétel):\
Tfh $f_{j} \in C_{2}$, $\lim f_{j} = f$ majdnem mindenütt,
$\exists g \in C_{2}:\left| {f_{j}\left( x \right)} \right| \leq g\left( x \right)$
majdnem minden $x$-re, $\forall j$. Ekkor $f \in C_{2}$ és
${\int f} = \lim{\int f_{j}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Jelöljük:
$h_{j}\left( x \right): = \sup\left\{ {f_{j}\left( x \right),f_{j + 1}\left( x \right),...} \right\} = {\bigcup\limits_{k = j}^{\infty}{f_{k}\left( x \right)}}$.
Mivel
$\lim\limits_{j\rightarrow\infty}f_{j}\left( x \right) = f\left( x \right)$
majdnem mindenütt, ezért
$\lim\limits_{j\rightarrow\infty}h_{j}\left( x \right) = f\left( x \right)$
majdnem minden $x$-re, $\left( h_{j} \right)$ monoton csökkenő sorozat.
Belátandó először, hogy $h_{j} \in C_{2},\forall j$. Pl.:
$h_{1}\left( x \right) = \sup\left\{ {f_{1}\left( x \right),f_{2}\left( x \right),...} \right\}$,
$h_{1,k}: = \sup\left\{ {f_{1}\left( x \right),f_{2}\left( x \right),\ldots,f_{k}\left( x \right)} \right\} = {\bigcup\limits_{j = 1}^{k}f_{j}}$.
$h_{1,k} \in C_{2}$, $\left( h_{1,k} \right)$ növő,
$\left. {\int h_{1,k}} \leq {\int g}\Rightarrow\lim\limits_{k\rightarrow\infty}h_{1,k} \right.$
véges majdnem mindenütt (Beppo Levi monoton (növő) sorozatokra), így
$\left. h_{1} = \lim\limits_{k\rightarrow\infty}h_{1,k}\Rightarrow h_{1} \in C_{2} \right.$.
$\left( h_{j} \right) \in C_{2}$, monoton csökkenő sorozat,
$\left. {\int{h_{j} \geq - {\int g}}}\Rightarrow\lim h_{j} = f \right.$
integrálható (Beppo Levi monoton (csökkenő) sorozatokra), továbbá
${\int f} = \lim{\int h_{j}}$. Észrevétel:
$\left. f_{j} \leq h_{j}\Rightarrow{\int f_{j}} \leq {\int h_{j}} \right.$.
Most fordítva:
$\phi_{j}\left( x \right): = \inf\left\{ {f_{j}\left( x \right),f_{j + 1}\left( x \right),...} \right\}$.
Ekkor $\lim\phi_{j} = f$ majdnem mindenütt, $\left( \phi_{j} \right)$
monoton növő. Ekkor az előbbiekhez hasonló módon belátható, hogy
$\phi_{j} \in C_{2},\forall j$.
$\left. \phi_{j} \leq f_{j} \leq g\Rightarrow{\int{\phi_{j} \leq {\int g}}} \right.$.
Ekkor a Beppo Levi tételét alkalmazva monoton (növő) sorozatokra,
$\lim\left( \phi_{j} \right) = f$ integrálható,
${\int f} = \lim{\int\phi_{j}}$, $\phi_{j} \leq f_{j} \leq h_{j}$
$\left. \Rightarrow{\int\phi_{j}} \leq {\int f_{j}} \leq {\int h_{j}}\Rightarrow\lim{\int f_{j}} = f \right.$.

</div>

<div class="tetel">

Spec eset (kis Lebesgue tétel):\
Tfh $\left. \left( f_{j} \right)\rightarrow f \right.$ majdnem
mindenütt, $\exists a > 0:\left| x \right| > a$ esetén
$f_{j}\left( x \right) = 0$ és $\exists K > 0:\left| x \right| \leq a$
esetén $\left| {f_{j}\left( x \right)} \right| \leq K$, $\forall j$.
Ekkor $f \in C_{2}$ és ${\int f} = \lim{\int f_{j}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
A $g\left( x \right): = \left\{ \begin{matrix}
K & {\text{ha~}\left| x_{k} \right| \leq a,\forall k} \\
0 & \text{egyébként} \\
\end{matrix} \right.$ függvényt bevezetve az állítást visszavezettük az
előző tételre.

</div>

<div class="tetel">

Tétel (Fatou lemma):\
Tfh $f_{j} \in C_{2}$, $\lim\left( f_{j} \right) = f$ majdnem mindenütt,
továbbá $0 \leq f_{j}$ majdnem mindenütt, $\int f_{j}$ viszont felülről
korlátos. Ekkor $f \in C_{2}$, ${\int f} \leq \liminf{\int f_{j}}$.
(Bizonyítás lehetséges a Lebesgue tétel bizonyításának
gondolatmenetével.)

</div>

<div class="tetel">

Tétel:\
Tfh $f_{j} \in C_{2}$, $\lim\left( f_{j} \right) = f$ majdnem mindenütt
és $\exists g \in C_{2}:\left| f \right| < g$. Ekkor $f \in C_{2}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Visszavezetjük a Lebesgue tételre.
$$g_{j}\left( x \right): = \left\{ \begin{matrix}
{f_{j}\left( x \right)} & {\text{ha~}\left| {f_{j}\left( x \right)} \right| \leq g\left( x \right)} \\
{g\left( x \right)} & {\text{ha~}f_{j}\left( x \right) > g\left( x \right)} \\
{- g\left( x \right)} & {\text{ha~}f_{j}\left( x \right) < - g\left( x \right)} \\
\end{matrix} \right.$$ Ekkor $\left| g_{j} \right| \leq g \in C_{2}$.
Mivel $\left| f \right| \leq g$ és $\lim\left( f_{j} \right) = f$
majdnem mindenütt
$\left. \Rightarrow\lim\left( g_{j} \right) = f \right.$ majdnem
mindenütt a definícióból következően. Alkalmazzuk a
$\left( g_{j} \right)$ sorozatra a Lebesgue tételt, melyből következik,
hogy $f \in C_{2}$.

</div>

Mérhető függvények
------------------

<div class="def">

Definíció:\
Egy $\left. f:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$ függvényt
(Lebesgue szerint) mérhetőnek nevezünk, ha előállítható lépcsős
függvények konvergens sorozatának határértékeként majdnem mindenütt.

</div>

<div class="allitas">

Állítás:\
Ha $\left. f \in C_{2}\Rightarrow f \right.$ mérhető. Ezt láttuk
korábbról már. $C_{2}$ osztály tárgyalása során.)

</div>

<div class="allitas">

Állítás:\
Ha $f$ mérhető és
$\left. \exists g \in C_{2}:\left| f \right| \leq g\Rightarrow f \in C_{2} \right.$.
Ez következik az előző tételből.

</div>

<div class="pelda">

Példa:\
Egy mérhető, de nem integrálható függvény az alábbi:
$f\left( x \right) = 1,\forall x \in {\mathbb{R}}^{n}$,
$f_{j}\left( x \right) = \left\{ \begin{matrix}
1 & {\text{ha~}\left| x_{k} \right| \leq j,\forall k = 1,2,...,n} \\
0 & \text{egyébként} \\
\end{matrix} \right.$. Ekkor $f_{j} \in C_{2}$ lépcsős függvény,
$\left. \lim f_{j}\left( x \right) = f\left( x \right),\forall x\Rightarrow f \right.$
mérhető, de $\left. {\int f_{j}}\rightarrow\infty \right.$, vagyis $f$
nem integrálható, ugyanis $\left( f_{j} \right)$ monoton nő, ezért ha
$f$ integrálható lenne, akkor Beppo Levi miatt
${\int f} = \lim{\int f_{j}} = \infty$ lenne.

</div>

<div class="allitas">

Állítás:\
Ha $f$, $g$ mérhetőek, akkor

1.  $f + g$ is mérhető,
2.  $f \cdot g$ is mérhető,
3.  $\frac{f}{g}$ is mérhető, ha $g \neq 0$ majdnem mindenütt.

</div>

<div class="bizonyitas">

Bizonyítás:

1.  $f = \lim\left( f_{j} \right)$ majdnem mindenütt, $f_{j}$ lépcsős
    függvény, $g = \lim\left( g_{j} \right)$ majdnem mindenütt, $g_{j}$
    lépcsős függvény, $f + g = \lim\left( {f_{j} + g_{j}} \right)$
    majdnem mindenütt, $f_{j} + g_{j}$ is lépcsős függvény.
2.  $\frac{1}{g}$ -re látjuk be, mellyel a 3. állítás 2-ból igazolható:
    $g = \lim\left( g_{j} \right)$ majdnem mindenütt,
    $h_{j}: = \left\{ \begin{matrix}
    \frac{1}{g\left( x \right)} & {\text{ha~}g_{j}\left( x \right) \neq 0} \\
    0 & {\text{ha~}g_{j}\left( x \right) = 0} \\
    \end{matrix} \right.$, melyből következik, hogy
    $\lim\left( h_{j} \right) = \frac{1}{g}$ majdnem mindenütt.

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
Tfh $f_{j}$ mérhető, $\lim\left( f_{j} \right) = f$ majdnem mindenütt
$\left. \Rightarrow f \right.$ mérhető.

</div>

<div class="bizonyitas">

Bizonyítás:\
Legyen $\left. g:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$ olyan
függvény, hogy $g\left( x \right) > 0,\forall x$ és $g \in C_{2}$.
Értelmezzük a $h_{j}$ függvényeket az alábbiak szerint:
$h_{j}: = \frac{f_{j}g}{\left| f_{j} \right| + g}$, $h_{j}$ mérhető és
$\left. \left| h_{j} \right| \leq g\Rightarrow h_{j} \in C_{2} \right.$.
$\lim\left( h_{j} \right) = \frac{fg}{\left| f \right| + g}: = h$
majdnem mindenütt. Alkalmazzuk a Lebesgue tételt a
$\left( h_{j} \right)$ sorozatra!
$h = \frac{fg}{\left| f \right| + g} \in C_{2}$, így a fenti összefüggés
szerint
$\left. \frac{fg}{\left| f \right| + g} = h\Rightarrow fg - \left| f \right|h = gh\Leftrightarrow fg - f\left| h \right| = gh \right.$
mert ${sgn}h = {sgn}f$, így $f = \frac{gh}{g - \left| h \right|}$, ez
pedig mérhető, mert a számláló mérhető, ugyanis $g$ és $h$ is mérhetők,
és mert a nevező is mérhető, továbbá $g - \left| h \right| > 0$, ugyanis
$\left| h \right| = \frac{\left| f \right|g}{\left| f \right| + g} < g$.

</div>

<div class="tetel">

Tétel:\
Tfh
$\left. f_{1},f_{2},...,f_{r}:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
mérhető, $\left. g:{\mathbb{R}}^{r}\rightarrow{\mathbb{R}} \right.$
folytonos! Ekkor mérhető a
$\left. h: = g \circ \left( {f_{1},f_{2},...,f_{r}} \right):{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$f_{k}$ mérhető
$\left. \Rightarrow\exists\left( \phi_{k,j} \right)_{j \in {\mathbb{N}}} \right.$
lépcsős függvénysorozat, hogy
$\left. \left( \phi_{k,j} \right)_{j \in {\mathbb{N}}}\rightarrow f_{k} \right.$
majdnem mindenütt.
$h_{j}: = g \circ \left( {\phi_{1,j},\phi_{2,j},...,\phi_{r,j}} \right)$
véges sok intervallumon állandó. $g\left( 0,0,...,0 \right) \neq 0$
esetén $h_{j}$ helyett vesszük a
$h_{j}^{\ast}\left( x \right) = \left\{ \begin{matrix}
{h_{j}\left( x \right)} & {\text{ha~}\left| x \right| \leq j} \\
0 & {\text{ha~}\left| x \right| > j} \\
\end{matrix} \right.$ függvényt. Mivel
$\left. h_{j}\left( x \right)\rightarrow h\left( x \right) \right.$
minden $x$-re
$\left. \Rightarrow h_{j}^{\ast}\left( x \right)\rightarrow h\left( x \right) \right.$
majdnem minden $x$-re, $h_{j}^{*}$ lépcsős függvény.

</div>

Mérhető halmazok, mérték
------------------------

<div class="def">

Definíció:\
Legyen $A \subset {\mathbb{R}}^{n}$ halmaz. Az $A$ halmaz
karakterisztikus függvényének nevezzük:
$\chi_{A}\left( x \right): = \left\{ \begin{matrix}
1 & {x \in A} \\
0 & {x \in {\mathbb{R}}^{n}\backslash A} \\
\end{matrix} \right.$. Látható, hogy ekkor
$\chi_{A}\left( x \right) \geq 0$.

</div>

<div class="def">

Definíció:\
Egy $A \subset {\mathbb{R}}^{n}$ halmazt mérhetőnek nevezünk, ha
$\chi_{A}\left( x \right)$ mérhető függvény. Ekkor az $A$ halmaz
mértékét így értelmezzük:
$\lambda\left( A \right): = \left\{ \begin{matrix}
{\int_{{\mathbb{R}}^{n}}\chi_{A}} & {\chi_{A} \in C_{2}} \\
\infty & {\chi_{A} \notin C_{2}} \\
\end{matrix} \right.$ (korábban lehagytuk, hogy milyen halmazon
integrálunk, mert egyértelmű volt). Láthatjuk, hogy
$\lambda\left( A \right) \geq 0$.

</div>

<div class="allitas">

Állítás:\
Két mérhető halmaz különbsége, véges és megszámlálhatóan végtelen sok
mérhető halmaz uniója és metszete is mérhető.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\chi_{A\backslash B} = \chi_{A} - \chi_{A}\chi_{B}$ mérhető függvény.
$\chi_{\underset{j = 1}{\overset{k}{\cup}}A_{j}} = {\bigcup\limits_{j = 1}^{k}\chi_{A_{j}}}$,
ahol $\chi_{A_{j}}$ mérhető függvények (felső burkoló).
$\chi_{\underset{j = 1}{\overset{\infty}{\cup}}A_{j}} = \lim\limits_{k\rightarrow\infty}{\bigcup\limits_{j = 1}^{k}\chi_{A_{j}}}$

</div>

<div class="allitas">

Állítás:\
Egy $A \subset {\mathbb{R}}^{n}$ nullmértékű
$\left. \Leftrightarrow\lambda\left( A \right) = 0 \right.$, azaz
${\int_{{\mathbb{R}}^{n}}\chi_{A}} = 0$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\Rightarrow$ irányba: ha $A$ nullmértékű,
$\lambda\left( A \right) = {\int_{{\mathbb{R}}^{n}}\chi_{A}} = 0$ mert
$\chi_{A} = 0$ majdnem mindenütt, ha $A$ nullmértékű.\
$\Leftarrow$ irányba: ha
$\lambda\left( A \right) = {\int_{{\mathbb{R}}^{n}}\chi_{A}} = 0$,
$\left. \chi_{A} \geq 0\Rightarrow\chi_{A} = 0 \right.$ majdnem
mindenütt $\left. \Rightarrow A \right.$ nullmértékű.

</div>

<div class="tetel">

Tétel:\
Ha $A = {\bigcup\limits_{j = 1}^{k}A_{j}}$ és $A_{j}$ mérhetők,
páronként diszjunktak, akkor
$\lambda\left( A \right) = \lambda\left( {\underset{j = 1}{\overset{k}{\cup}}A_{j}} \right) = {\sum\limits_{j = 1}^{k}{\lambda\left( A_{j} \right)}}$.
Ezt úgy mondjuk, hogy a mérték additív halmazfüggvény.

</div>

<div class="bizonyitas">

Bizonyítás:\
Ugyanis ha a fentiek teljesülnek, akkor
$${\chi _A} = {\chi _{\bigcup\limits_{j = 1}^k {{A_j}} }} = \sum\limits_{j = 1}^k {{\chi _{{A_j}}}}  \Rightarrow \underbrace {\int_{{\mathbb{R}^n}} {{\chi _A}} }_{\lambda \left( A \right)} = \sum\limits_{j = 1}^k {\underbrace {\int_{{\mathbb{R}^n}} {{\chi _{{A_j}}}} }_{\lambda \left( {{A_j}} \right)}}. $$

</div>

<div class="tetel">

Tétel:\
Ha $A = {\bigcup\limits_{j = 1}^{\infty}A_{j}}$, $A_{j}$ mérhetők,
páronként diszjunktak, akkor
$\lambda\left( A \right) = \lambda\left( {\underset{j = 1}{\overset{k}{\cup}}A_{j}} \right) = {\sum\limits_{j = 1}^{\infty}{\lambda\left( A_{j} \right)}}$.
Ezt úgy mondjuk, hogy a mérték $\sigma$ additív.

</div>

<div class="bizonyitas">

Bizonyítás:\
Csak vázolva:
$\chi_{\underset{j = 1}{\overset{\infty}{\cup}}A_{j}} = {\sum\limits_{j = 1}^{\infty}\chi_{A_{j}}}$,
most pedig a Beppo Levi tételt alkalmazzuk.

</div>

### Integrálás mérhető halmazokon

Eddig $\left. f:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
függvények (Lebesgue) integrálját értelmeztük.

<div class="def">

Definíció:\
Legyen $A \subset {\mathbb{R}}^{n}$ mérhető halmaz,
$\left. f:A\rightarrow{\mathbb{R}} \right.$ függvény. Legyen
$$\widetilde{f}\left( x \right): = \left\{ \begin{matrix}
{f\left( x \right)} & {x \in A} \\
0 & {x \in {\mathbb{R}}^{n}\backslash A.} \\
\end{matrix} \right.$$ Ha
$\left. \widetilde{f}:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
függvény integrálható, akkor azt mondjuk, hogy az
$\left. f:A\rightarrow{\mathbb{R}} \right.$ függvény integrálható és
${\int_{A}f} = {\int_{{\mathbb{R}}^{n}}\widetilde{f}}$.

</div>

<div class="megj">

Megjegyzés:

-   Ha $\left. g:{\mathbb{R}}^{n}\rightarrow{\mathbb{R}} \right.$
    függvény integrálható és $A \subset {\mathbb{R}}^{n}$ mérhető, akkor
    a
    $\left. h: = \left. g \right|_{A}:A\rightarrow{\mathbb{R}} \right.$
    integrálható, ugyanis $$\widetilde{h}: = \left\{ \begin{matrix}
    {h\left( x \right)} & {x \in A} \\
    0 & {x \in {\mathbb{R}}^{n}\backslash A,} \\
    \end{matrix} \right.$$ ekkor $\widetilde{h}: = g \cdot \chi_{A}$
    mérhető, továbbá
    $\left| \widetilde{h} \right| \leq \left| g \right|$ integrálható
    $\left. \Rightarrow\widetilde{h} \right.$ is integrálható.
-   Ha $\left. f:A\rightarrow{\mathbb{R}}^{n} \right.$ integrálható, $B$
    mérhető, $\left. B \subset A\Rightarrow\left. f \right|_{B} \right.$
    is integrálható.

</div>

#### A Lebesgue és Riemann integrál kapcsolata

Legyen
$\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
korlátos függvény.

<div class="tetel">

Tétel:\
Ha $f$ egy Lebesgue szerint nullmértékű halmaz kivételével folytonos,
akkor $f$ függvény Riemann és Lebesgue szerint is integrálható, és a
kétféle integrál egyenlő.

<div>

Ábra: ide kell betenni a a\_d\_b1\_b2.eps filet.

</div>

</div>

<div class="bizonyitas">

Bizonyítás:\
Először belátjuk, hogy az $f$ Lebesgue integrálható (sőt,
$f \in C_{1}$).

$$\phi_{1}: = \left\{ \begin{matrix}
{\inf\left\{ {f\left( x \right):a \leq x \leq \frac{a + b}{2}} \right\}} & {\text{ha~}x \in \left\lbrack {a,\frac{a + b}{2}} \right\rbrack} \\
{\inf\left\{ {f\left( x \right):\frac{a + b}{2} \leq x \leq b} \right\}} & {\text{ha~}x \in \left( {\frac{a + b}{2},b} \right\rbrack} \\
\end{matrix} \right.$$ $$\phi_{2}: = \begin{cases}
{\inf\left\{ {f\left( x \right):a \leq x \leq d_{1}} \right\}} & {\text{ha~}x \in \left\lbrack {a,d_{1}} \right\rbrack} \\
{\inf\left\{ {f\left( x \right):d_{1} < x \leq c_{1}} \right\}} & {\text{ha~}x \in \left( {d_{1},c_{1}} \right\rbrack} \\
 \vdots & \vdots \\
{\inf\left\{ {f\left( x \right):d_{2} < x \leq b} \right\}} & {\text{ha~}x \in \left( {d_{2},b} \right\rbrack} \\
\end{cases}$$\
\... és így tovább (vagyis az egyes intervallumokat mindig felezzük),
valamint $\phi_{k}\left( x \right): = 0$ ha
$x \notin \left\lbrack {a,b} \right\rbrack,\forall k$. Ekkor $\phi_{k}$
-k lépcsős függvények, $\left( \phi_{k} \right)$ monoton növő. Mivel $f$
folytonos egy nullmértékű halmaz kivételével, ezért
$\left. \phi_{k}\left( x \right)\rightarrow f\left( x \right) \right.$
majdnem mindenütt (ahol $f$ folytonos).
${\int_{\text{L}}\phi_{k}} \leq \left( {b - a} \right)M$, ahol $M$ olyan
szám, amelyre $\left| {f\left( x \right)} \right| \leq M$, ezért
$f \in C_{1}$, ${\int_{\text{L}}f} = \lim{\int_{\text{L}}\phi_{k}}$
(Lebesgue integrál).

Az $f$ függvény egy Riemann féle felső összege $\int_{L}\psi_{k}$, ahol
$$\psi_{1}\left( x \right): = \left\{ \begin{matrix}
{\sup\left\{ {f\left( x \right):a \leq x \leq \frac{a + b}{2}} \right\}} & {\text{ha}~x \in \left\lbrack {a,\frac{a + b}{2}} \right\rbrack} \\
{\sup\left\{ {f\left( x \right):\frac{a + b}{2} < x \leq b} \right\}} & {\text{ha}~x \in {\left( {\frac{a + b}{2},b} \right\rbrack.}} \\
\end{matrix} \right.$$\
$\psi_{k}$ -k lépcsős függvények, monoton csökkenők,
$\left. \left( \psi_{k} \right)\rightarrow f \right.$ majdnem mindenütt.
$\left. {\int_{\text{R}}\psi_{k}} \geq - \left( {b - a} \right)M\Rightarrow - f \in C_{1} \right.$,
${\int_{\text{L}}f} = \lim{\int_{\text{R}}\psi_{k}}$ (ahol előbbi a
Lebesgue integrál, utóbbi a Riemann féle integrál felső összege),
$\lim{\int_{\text{L}}\phi_{k}} = {\int_{\text{L}}f}$,
$\left. \lim{\int_{\text{R}}\psi_{k}} = {\int_{\text{R}}f}\Rightarrow f \right.$
Reimann és Lebesgue integrálható, és az integrálok értéke megegyezik.

</div>

<div class="tetel">

Tétel:\
Ha
$\left. f:\left\lbrack {a,b} \right\rbrack\rightarrow{\mathbb{R}} \right.$
korlátos függvény Riemann szerint integrálható
$\left. \Rightarrow f \right.$ folytonos majdnem mindenütt. (bizonyítás
nélkül)

</div>

<div class="megj">

Megjegyzés:\
Ha egy $f$ függvény Riemann szerint improprius integrálja konvergens
$\Rightarrow f$ Lebesgue integrálható.

</div>

<div class="pelda">

Példa:\
A $\left\lbrack {0,\infty} \right)$ intervallumon értelmezzük az $f$
függvényt: $f\left( x \right): = \left( {- 1} \right)^{j}\frac{1}{j}$ ha
$j - 1 \leq x < j$, $j \in {\mathbb{N}}$.
$\int\limits_{0}^{\infty}{f\left( x \right)dx}$ improprius integrálja
konvergens, mert
$\sum\limits_{j = 1}^{\infty}{\left( {- 1} \right)^{j}\frac{1}{j}}$
konvergens.
$\int\limits_{0}^{\infty}{\left| {f\left( x \right)} \right|dx}$
divergál, mert $\sum\limits_{j = 1}^{\infty}\frac{1}{j}$ divergál. Ha
$f$ Lebesgue szerint integrálható
$\left. \Rightarrow\left| f \right| \right.$ is integrálható Lebesgue
szerint. Tehát a fenti $f$ függvény improprius integrálja konvergens, de
nem Lebesgue-integrálható.

**Másik példa**: $f\left( x \right): = \left\{ \begin{matrix}
1 & {x \in {\mathbb{R}}\backslash{\mathbb{Q}}} \\
0 & {x \in {\mathbb{Q}}} \\
\end{matrix} \right.$. Ekkor $f$ Lebesgue szerint integrálható
$\mathbb{Q}$ egy nullmértékű halmaz), de Riemann szerint nem
integrálható.

</div>

<div class="tetel">

Tétel (Fubini tétel) (bizonyítás nélkül):\
Tfh $\left. f:{\mathbb{R}}^{2}\rightarrow{\mathbb{R}} \right.$ képező,
integrálható függvény. Ekkor majdnem minden $x \in {\mathbb{R}}$ esetén
$\left. y\mapsto f\left( {x,y} \right) \right.$ integrálható
$\mathbb{R}$ -en, továbbá
$\left. x\mapsto{\int{f\left( {x,y} \right)dy}} \right.$ is integrálható
$\mathbb{R}$ -en és
${\int_{{\mathbb{R}}^{2}}f} = {\int_{\mathbb{R}}{\left\lbrack {\int_{\mathbb{R}}{f\left( {x,y} \right)dy}} \right\rbrack dx}} = {\int_{\mathbb{R}}{\left\lbrack {\int_{\mathbb{R}}{f\left( {x,y} \right)dx}} \right\rbrack dy}}$.
Ha $f$ nemnegatív és mérhető, akkor a Fubini tétel mindig érvényes
(ilyenkor az integrál $\infty$ is lehet).

</div>

### Az $L^{2}\left( M \right)$ függvénytér

Jelöljük: legyen $M \subset {\mathbb{R}}^{n}$ -beli mérhető halmaz,
ekkor $L^{2}\left( M \right)$ jelölje az
$\left. f:M\rightarrow{\mathbb{R}} \right.$ olyan mérhető függvények
összességét, melyekre a függvénynek az abszolútérték négyzete
integrálható (ez a témakör nagyon fontos a fizikában is).

<div class="allitas">

Állítás:\
Ez az $L^{2}\left( M \right)$ vektortér a szokásos műveletekkel.

</div>

<div class="bizonyitas">

Bizonyítás:\
Tfh $\left. f,g \in L^{2}\left( M \right)\Rightarrow f,g \right.$
mérhető!

-   $\left. \Rightarrow f + g \in L^{2}\left( M \right) \right.$, azaz
    az összeadás nem visz ki a halmazból. Láttuk már, hogy ekkor $f + g$
    is mérhető, ha $f$ és $g$ mérhetőek. Továbbá
    $\underbrace {{{\left| {f + g} \right|}^2}}_{{\text{mérhető}}} \leqslant {\left( {\left| f \right| + \left| g \right|} \right)^2} \leqslant 2\left( {{{\left| f \right|}^2} + {{\left| g \right|}^2}} \right)$.
    Ez viszont integrálható, így $\left| {f + g} \right|^{2}$ is
    integrálható.
-   Skalárral való szorzás:
    $\left. f \in L^{2}\left( M \right)\Rightarrow\lambda f \right.$
    mérhető, továbbá
    $\left| {\lambda f} \right|^{2} = \left| \lambda \right|^{2}\left| f \right|^{2}$
    integrálható, így $\lambda f \in L^{2}\left( M \right)$.

</div>

<div class="allitas">

Állítás:\
$f,g \in L^{2}\left( M \right)$ integrálható.

</div>

<div class="bizonyitas">

Bizonyítás:\
$f \cdot g$ mérhető (mérhető függvények szorzata mérhető, korábbról
láttuk),
$\left| {f \cdot g} \right| = \left| f \right| \cdot \left| g \right| \leqslant \frac{1}{2}\underbrace {\left( {{{\left| f \right|}^2} + {{\left| g \right|}^2}} \right)}_{{\text{integrálható}}}$.

</div>

<div class="def">

Definíció:\
Legyen $f,g \in L^{2}\left( M \right)$! Értelmezzük a két függvényen az
alábbi művelet:
$\left\langle {f,g} \right\rangle: = {\int_{M}{f \cdot g}}$.

</div>

<div class="allitas">

Állítás\
$L^{2}\left( M \right)$ a fenti művelettel valós euklideszi tér, ahol a
skalárszorzat a fent jelölt művelet.

</div>

<div class="bizonyitas">

Bizonyítás:\
$L^{2}\left( M \right)$ valós vektortér, a fent jelölt szorzás művelet
skalárszorzás, ugyanis teljesíti:

-   $\left\langle {f_{1} + f_{2},g} \right\rangle = \left\langle {f_{1},g} \right\rangle + \left\langle {f_{2},g} \right\rangle$
-   $\left\langle {f,g} \right\rangle = \left\langle {g,f} \right\rangle$
-   $\left\langle {\lambda f,g} \right\rangle = \lambda\left\langle {f,g} \right\rangle$
-   $\left\langle {f,f} \right\rangle = {\int_{M}\left| f \right|^{2}} \geq 0$
    és
    $\left. \left\langle {f,f} \right\rangle = 0\Leftrightarrow f = 0 \right.$
    majdnem mindenütt.

</div>

Az $L^{2}\left( M \right)$ térben a norma:
$\left\| f \right\| = \sqrt{\left\langle {f,f} \right\rangle} = \sqrt{\int_{M}\left| f \right|^{2}}$.

<div class="megj">

Megjegyzés:\
Itt is igaz a Cauchy-Schwarz egyenlőtlenség, vagyis
$\left| {\int_{M}{f \cdot g}} \right| = \left| \left\langle {f,g} \right\rangle \right| \leq \left\| f \right\| \cdot \left\| g \right\| = \sqrt{\int_{M}\left| f^{2} \right|} \cdot \sqrt{\int_{M}\left| g^{2} \right|}$.

</div>

<div class="def">

Definíció:\
Hilbert térnek a teljes euklideszi teret nevezzük.

</div>

<div class="tetel">

Riesz-Fischer-tétel (bizonyítás nélkül):\
Az $L^{2}\left( M \right)$ tér teljes, vagyis $L^{2}\left( M \right)$
tér Hilbert tér.

</div>

### Az $L^{p}\left( M \right)$ függvénytér

Jelölés: legyen $1 \leq p < \infty$, $M \subset {\mathbb{R}}^{n}$
mérhető halmaz. Jelölje $L^{p}\left( M \right)$ az olyan
$\left. f:M\rightarrow{\mathbb{R}} \right.$ mérhető függvények
összességét, amelyekre $\left| f \right|^{p}$ integrálható $M$-n.

<div class="allitas">

Állítás:\
Az $L^{p}\left( M \right)$ vektortér a szokásos műveletekkel.

</div>

<div class="bizonyitas">

Bizonyítás:\
$\left. f,g \in L^{p}\left( M \right)\Rightarrow f + g \right.$ is
mérhető, az abszolút érték $p$-dik hatványa is mérhető (a folytonos
p-edik hatványfüggvény és mérhető függvény kompozíciója).
$\left| {f + g} \right|^{p} \leq \left( {\left| f \right| + \left| g \right|} \right)^{p} \leq 2^{p - 1}\left( {\left| f \right|^{p} + \left| g \right|^{p}} \right)$
integrálható, tehát $f + g \in L^{p}\left( M \right)$. Ha
$\left. f \in L^{p}\left( M \right)\Rightarrow\lambda f \in L^{p}\left( M \right) \right.$
nyilvánvaló.

</div>

<div class="def">

Definíció:\
Vezessük be az $L^{p}\left( M \right)$ vektortérben a következő normát:
$\left\| f \right\|: = \left\{ {\int_{M}\left| f \right|^{p}} \right\}^{1/p}$.

</div>

<div class="allitas">

Állítás:\
Az $L^{p}\left( M \right)$ tér a fenti művelettel, mint normával,
normált tér.

</div>

<div class="bizonyitas">

Bizonyítás:

-   $\left\| f \right\| \geq 0$,
    $\left. \left\| f \right\| = 0\Leftrightarrow f = 0 \right.$ majdnem
    mindenütt.
-   $\left\| {\lambda f} \right\| = \left| \lambda \right| \cdot \left\| f \right\|$.
-   A háromszög egyenlőtlenség bizonyításához szükséges a Hölder
    egyenlőtlenség és a Young egyenlőtlenség.

</div>

<div class="allitas">

Állítás (Young):\
Legyen $1 < p < \infty$, $\frac{1}{p} + \frac{1}{q} = 1$
$q = \frac{p}{p - 1}$). Ekkor $\forall a,b \geq 0$ számokra:
$ab \leq \frac{a^{p}}{p} + \frac{b^{q}}{q}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
A bizonyítandó egyenlőtlenség ekvivalens:
$ab^{1 - q} \leq \frac{a^{p}b^{- q}}{p} + \frac{1}{q}$, feltéve, hogy
$b \neq 0$. (A $b = 0$ eset triviális.) $c: = ab^{1 - q}$ jelöléssel
$c^{p} = a^{p}b^{{({1 - q})}p} = a^{p}b^{- q}$. Vagyis az állítás:
$c \leq \frac{c^{p}}{p} + \frac{1}{q}$.
$g\left( c \right): = \frac{c^{p}}{p} - c + \frac{1}{q}$,
$g\left( 1 \right) = 0$, $g'\left( c \right) = c^{p - 1} - 1$. Ez kisebb
0-nál, ha $c < 1$, és nagyobb nullánál, ha $c > 1$ (tehát $c = 1$ -ben
minimuma van), tehát $g\left( c \right) \geq 0$.

</div>

<div class="tetel">

Tétel (Hölder-egyenlőtlenség):\
Tfh $f \in L^{p}\left( M \right),g \in L^{q}\left( M \right)$,
$1 < p < \infty$, $1 < q < \infty$,
$\left. \frac{1}{p} + \frac{1}{q} = 1\Rightarrow f \cdot g \right.$
integrálható, és
$\left| {\int_{M}{f \cdot g}} \right| \leq {\int_{M}{\left| f \right| \cdot \left| g \right|}} \leq \left\| f \right\|_{L^{p}{(M)}} \cdot \left\| g \right\|_{L^{q}{(M)}}$.

</div>

<div class="bizonyitas">

Bizonyítás:\
Alkalmazzuk a Young egyenlőséget:
$a: = \frac{\left| {f\left( x \right)} \right|}{\left\| f \right\|}$,
$b: = \frac{\left| {g\left( x \right)} \right|}{\left\| g \right\|}$.
$\frac{\left| {f\left( x \right)} \right|}{\left\| f \right\|_{L^{p}{(M)}}} \cdot \frac{\left| {g\left( x \right)} \right|}{\left\| g \right\|_{L^{q}{(M)}}} \leq \frac{1}{p}\frac{\left| {f\left( x \right)} \right|^{p}}{\left\| f \right\|^{p}} + \frac{1}{q}\frac{\left| {g\left( x \right)} \right|^{q}}{\left\| g \right\|^{q}}$.
Integrálva mindekét oldalt $M$-re:
$\frac{\int_{M}{\left| f \right| \cdot \left| g \right|}}{\left\| f \right\| \cdot \left\| g \right\|} \leq \frac{1}{p}1 + \frac{1}{q}1 = 1$.

</div>

<div class="tetel">

Tétel (Minkowski-egyenlőtlenség):\
Ha
$\left. f,g \in L^{p}\left( M \right)\Rightarrow\left\| {f + g} \right\|_{L^{p}{(M)}} \leq \left\| f \right\|_{L^{p}{(M)}} + \left\| g \right\|_{L^{p}{(M)}} \right.$.

</div>

<div class="bizonyitas">

Bizonyítás:\
$p = 1$ esetére triviális.

$p > 1$ esetén: $$\begin{aligned}
  {\left\| {f + g} \right\|^p} =  & \int_M {{{\left| {f + g} \right|}^p}}  \\ 
   =  & \int_M {{{\left| {f + g} \right|}^{p - 1}}}  \cdot \left| {f + g} \right| \\ 
   \leqslant  & \int_M {{{\left| {f + g} \right|}^{p - 1}}}  \cdot \left| f \right| + \int_M {{{\left| {f + g} \right|}^{p - 1}}}  \cdot \left| g \right| \\ 
  {\text{Hölder}}\quad  \leqslant  & {\left\{ {\int_M {{{\left| {f + g} \right|}^{\left( {p - 1} \right)q}}} } \right\}^{1/q}} \cdot {\left\{ {\int_M {{{\left| f \right|}^p}} } \right\}^{1/p}} +  \\ 
   &  + {\left\{ {\int_M {{{\left| {f + g} \right|}^{\left( {p - 1} \right)q}}} } \right\}^{1/q}} \cdot {\left\{ {\int_M {{{\left| g \right|}^p}} } \right\}^{1/p}} \\ 
   =  & {\left( {{{\left\| {f + g} \right\|}_{_{{L^p}\left( M \right)}}}} \right)^{p/q}} \cdot \left[ {{{\left\| f \right\|}_{{L^p}\left( M \right)}} + {{\left\| g \right\|}_{{L^p}\left( M \right)}}} \right], \\ 
\end{aligned} $$ amelyben
$p - \frac{p}{q} = p\left( {1 - \frac{1}{q}} \right) = p\frac{1}{p} = 1$.
Így az előbbi egyenlőtlenségből
$\left\| {f + g} \right\|_{L^{p}{(M)}} = \left\| {f + g} \right\|_{L^{p}{(M)}}^{p - p/q} \leq \left\| f \right\|_{L^{p}{(M)}} + \left\| g \right\|_{L^{p}{(M)}}$.
Tehát $L^{p}\left( M \right)$ tér normáltságának utolsó feltételét is
igazoltuk, azaz
$\left\| {f + g} \right\| \leq \left\| f \right\| + \left\| g \right\|$,
tehát $L^{p}\left( M \right)$ normált tér.

</div>

<div class="tetel">

Tétel (bizonyítás nélkül):\
$L^{p}\left( M \right)$ teljes normált tér, azaz Banach
$1 \leq p < \infty$).

</div>

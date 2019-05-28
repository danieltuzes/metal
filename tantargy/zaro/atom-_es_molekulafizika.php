<?php
$password  = md5("nyaral2009");
$adminpass = md5("falpass");

if($authorized = (isset($_COOKIE['pass']) && $_COOKIE['pass'] == $password) || (isset($_POST['pass']) && md5($_POST['pass']) == $password)){
	setcookie("pass", $password, time()+60*60);
}

if ($adminmode = (isset($_COOKIE['adminpass']) && ($_COOKIE['adminpass'] == $adminpass)) || (isset($_POST['adminpass']) && (md5($_POST['adminpass']) == $adminpass))) {
	setcookie("adminpass", $adminpass, time()+20*60);
}

if ($authorized && isset($_POST['logout'])) {
	$authorized = false;
	setcookie("pass", "0", time()+60*60*24*30);
	if ($adminmode) setcookie("adminpass", "0", 0);
}

$scriptname = end(explode("/", $_SERVER['SCRIPT_NAME']));
$error = 0;
$my_newmessage = false;
if (isset($_POST['message']) && ($_POST['message'] != "" || $error = 1)) {
	if ($_POST['author'] == "") $error = 2; else setcookie("author", $_POST['author'], time()+60*60*24*30);
	if ($_POST['email'] == "" || preg_match("/[a-z0-9-_\.]+@[a-z0-9-_\.]+/", $_POST['email']) == 0) $error = 3; else setcookie("email", $_POST['email'], time()+60*60*24*30);
	
	if (!$error){
		$file = fopen("forum/conversation.dat", "a");
		if ($file && flock($file, LOCK_EX)) {
		    fwrite($file, "<id>" . sprintf("%x", crc32(mktime())) . "<author>" . $_POST['author'] . "<mail>" . $_POST['email'] . "<date>" . date("Y. M. d. H:i:s") . "<moddate><message>" . preg_replace("/\r?\n/", "\\n", $_POST['message']) . "</message>\n");
			fclose($file);
			$my_newmessage = true;
		} else {
			die("Nem tudom elmenteni az üzenetet!");
		}
	}
}

// =========== DB READ ===========

preg_match_all("/<id>([^<]+)<author>([^<]+)<mail>([^<]+)<date>([^<]+)<moddate>([^<]*)<message>(.+)<\/message>/i", file_get_contents("forum/conversation.dat"), $text, PREG_SET_ORDER);
$msg_count = count($text);

// ===============================

$newmessage = ($lastseenmsg = (isset($_COOKIE['lastseen']) ? $_COOKIE['lastseen'] : "")) != "" && !$my_newmessage ? true : false;
setcookie("lastseen", $text[$msg_count-1][1], time()+60*60*24*30);

?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="forum/style.css">
<title>Záróvizsgatételek: Atom- és Molekulafizikai modul</title>
<style type="text/css">
table.oltable {
	counter-reset: rowns;
}
table.oltable td:first-child:after {
	content: counter(rowns) ".";
}
table.oltable td:first-child {
	counter-increment:rowns;
	vertical-align: top;
	text-align:right;
}
table.oltable tr:nth-of-type(even) {
	background-color:#EAF0F4;
}
table.tetelsorwidth td:nth-of-type(3) {
	width:18%;
}
table.tetelsorwidth td:nth-of-type(4) {
	width:25%;
}
</style>
</head>

<body>
<?php if ($error) {
	echo "<a id=\"error\" href=\"#send\">";
	switch ($error){
		case 1: echo "Nem írtál üzenetet."; break;
		case 2: echo "Nem írtál nevet."; break;
		case 3: echo "Nem adtál meg e-mail címet.";
	}
	echo "</a>\n";
} ?>

<?php if (!$adminmode) { ?>
<div id="adminlogin">
	A funkció használatához adminisztrátori jogkör szükséges.
	<form action="<?php echo $scriptname; ?>" method="post">
		<input type="password" name="adminpass" style="width: 80px; text-align: center;">
		<input type="submit" value="OK" style="width: 30px;">
		<input type="button" id="adminlogin_cancel" value="Mégse" style="width: 50px;">
		<input type="hidden" name="msgid" id="msgid" value="">
	</form>
</div><?php } else { ?>
<div id="adminmode">Admin mód</div>
<?php }
// =========== CONTROLPANEL ===========
$autorefresh = (isset($_POST['artimequery']) && $_POST['artimequery'] > 0); ?>
<div id="controlpanel">
	<div id="autorefresh">
		<img id="arimage" src="forum/ar_stop.png"><input type="checkbox" id="archeck"<?php echo ($autorefresh ? " checked=\"true\"" : ""); ?>>
		<label for="archeck"> Automatikus frissítés</label>
		<input type="text" id="arinput" value="<?php echo ($autorefresh ? $_POST['artimequery'] : "30"); ?>"> sec.
	</div>
	<form action="<?php echo $scriptname; ?>" method="post" name="cpanel">
		<input class="button" name="refresh" type="submit" value="Frissítés">
		<input class="button" name="logout" type="submit" value="Kilépés">
		<input type="hidden" name="artimequery" id="artimequery" value="-1">
	</form>
</div>
<div id="version">v1.2<br>2008.07.11.</div>

<h1>Fizikus MSc Atom- és Molekulafizikai modul záróvizsgatételek</h1>
<p> <strong>Vizsgabizottság</strong>: </p>
<ul>
  <li>Kürti Jenő, egyetemi tanár, elnök</li>
  <li>Csordás András, egyetemi docens </li>
  <li> Geszti Tamás, egyetemi tanár</li>
  <li> Surján Péter, egyetemi tanár</li>
  <li> László István, egyetemi docens<br /></li>
</ul>
<h2>A tételsor</h2>
<table border="0" class="oltable tetelsorwidth">
  <tr>
    <td>&nbsp;</td>
    <td>A   kvantummechanikai többtest-probléma alapjai (közelítő módszerek:   variációs elv és variációs módszerek, perturbációszámítás; azonos   részecskék, Pauli-elv, Slater-determináns, spinfüggvények, Coulomb- és   kicserélődési integrál)<br /></td>
    <td>CsA: Atom.mol</td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf">órai  diák</a> (1-43, 100-105),<br />
    <a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_jegyzet.pdf">tanári jegyzet </a>(1-10, 18-22)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Hartree–Fock-közelítés   és elektronkorreláció (átlagtér, zárt és nyílt héjú rendszerek,   <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&amp;file=Pes_xps02v.doc">Koopmans-tétel: ionizáció</a> és elektronaffinitás, Roothan-módszer <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=ertekezes.pdf">[1. (14.oldal)]</a> <a href="http://www.staff.u-szeged.hu/~bogar/5.pdf">[2]</a>;   elektronkorreláció, konfigurációs kölcsönhatás, elektronpár módszerek)</td>
    <td>Kürti: Molfiz<br />
    CsA: Atom.mol</td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=Molekulafizika/&amp;file=molekulafiz_gabor.pdf">Molfiz jegyzet</a> (19-21)<a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf"><br />
    Atom.mol diák</a> (108-118)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Többelektronos   atomok (He, leárnyékolás, periódusos rendszer, spin-pálya kölcsönhatás,   Hund-szabályok, multiplettek és konfigurációk, durva-, finom- és   hiperfinom szerkezet, Grotrian-diagram)</td>
    <td>Kürti: Molfiz<br />
    CsA: Atom.mol</td>
    <td><p><a href="http://fizweb.elte.hu/index.php?dir=Molekulafizika/&amp;file=molekulafiz_gabor.pdf">Molfiz jegyzet</a> (10-16)<br />
      <a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf">Atom.mol diák</a> (43-73, 119-130)<br>
      <a href="http://fizweb.elte.hu/index.php?dir=konyvek/&file=Szilárdtestfizika I, Sólyom Jenő_29-61.pdf">Szilfiz</a> (35-37)</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Molekulák   elméleti leírásának alapjai (Born–Oppenheimer-közelítés,   mag-potenciálgörbék: kötés, rezgés, disszociáció, predisszociáció,   viriáltétel, Hellmann–Feynman-tétel; H2+, H2, VB-módszer (Heitler-London), MO-módszer)</td>
    <td>Kürti: Molfiz<br>
    CsA: Atom.mol</td>
    <td><p><a href="http://fizweb.elte.hu/index.php?dir=Molekulafizika/&amp;file=molekulafiz_gabor.pdf">Molfiz jegyzet</a> (25-41)<br>
    <a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf">Atom.mol diák</a> (131-154)</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Két-   és többatomos molekulák (azonos, illetve különböző magú kétatomos   molekulák, szimmetriák, konfigurációk, kötésszám, paramágnesség, O2, korrelációs diagram, nemkeresztezés szabálya; többatomos molekulák: szimmetriák, H2O, CO2, lokalizált és delokalizált molekulapályák, hibridizáció, magányos pár, planáris molekulák: s- és p-kötések, benzol)</td>
    <td>Kürti: Molfiz<br>
      CsA: Atom.mol</td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=Molekulafizika/&amp;file=molekulafiz_gabor.pdf">Molfiz jegyzet</a> (41-53)<br>
    <a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf">Atom.mol diák</a> (154-167)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Atomok,   molekulák kölcsönhatása egymással, illetve külső elektromos és mágneses   mezővel (Lennard–Jones-, Van der Waals-, dipólus-kölcsönhatás,   hidrogénkötés, a víz szerkezete; Stark-effektus, normális és anomális   Zeeman-effektus, elektromos polarizáció, mágneses szuszceptibilitás,   diamágneses árnyékolás, g-faktor, mágneses rezonancia)</td>
    <td>CsA: atom.mol<br>
    Tichy: Kondenzált anyagfiz<br>
    Csikor: Kvantumfiz   <br>
    Modfizlab: Zeeman-effektus, ESR <br></td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=!MSc/![Szakmai_törzsanyag]/atom-_es_molekulafizika/ea/&amp;file=tanari_diavetites.pdf">Atom.mol diák</a> (74-83, 170-174)<br>
      <a href="http://fizweb.elte.hu/anyagfizika-kondenzalt_anyagok_fizikaja/eloadas/kondenzalt_tetelkidolgozas2008.pdf">Kondenzált anyagfiz tételkidolg </a>(5-ös tétel)<br>
      <a href="http://fizweb.elte.hu/index.php?dir=atom-kvantum,magfiz/kvantum_Csikor+gyak/eloadas/&file=kvantum_tetelkidolgozas.pdf">Kvantumfizika tételkidolg </a>(20-as, 25-ös tétel) <br>
      <a href="http://wigner.elte.hu/koltai/labor/parts/5jegyzet.pdf">ESR labor leírás </a><br>
      <a href="http://wigner.elte.hu/koltai/labor/parts/6jegyzet.pdf">Zeeman-effektus labor leírás </a><br>
    <a href="http://wigner.elte.hu/koltai/labor/parts/F1jegyzet.pdf">Kiegészítő labor leírás</a><br>
    <a href="http://kemia.elte.hu/tananyag/Szerves spektroszkopia/nmr.pdf">NMR kémiai laborleírás</a><br></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Atomok   és molekulák spektroszkópiájának alapjai (elektronátmenetek atomokban,   molekulákban, szimmetriák, kiválasztási szabályok,   UV-VIS-spektroszkópia <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=UV-látható spektroszkópia.pdf">[1]</a>, töltésátvitel, kromofór, ORD-CD <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=VCD.pdf">[1]</a><a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=ECD.pdf">[2]</a>, fluoreszcencia,   foszforeszcencia, Franck–Condon-elv, fotoelektron spektroszkópia)</td>
    <td>&nbsp;</td>
    <td><a href="http://wigner.elte.hu/koltai/labor/parts/F1jegyzet.pdf">Kiegészítő labor leírás</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Atomok   és molekulák szerkezetének kísérleti vizsgálata (UV, VIS, IR és   mikrohullámú spektroszkópia <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=Infravörös spektroszkópia.pdf">[1]</a>, Raman- és rezonancia Raman-spektroszkópia,   ORD-CD, NMR, ESR, Mössbauer-spektroszkópia <a href="http://www.chem.elte.hu/departments/magkem/hun/oktatas/magkemlab/leirasok_pdf/mossbauer.pdf">[1]</a>, tömegspektroszkópia <a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=MS_2011.pdf">[1]</a><a href="http://fizweb.elte.hu/index.php?dir=!MSc/zarovizsga/source/&file=MS+minta.pdf">[2]</a>,   fotoelektron spektroszkópia, röntgen, elektronmikroszkópia, STM, AFM)</td>
    <td>&nbsp;</td>
    <td><a href="http://wigner.elte.hu/koltai/labor/parts/F1jegyzet.pdf">Kiegészítő labor leírás</a></td>
  </tr>
</table>
<h2>B tételsor</h2>
<table border="0" class="oltable tetelsorwidth">
  <tr>
    <td>&nbsp;</td>
    <td>Atomok   és molekulák elektronszerkezetének számítása (hagyományos kvantumkémia,   sűrűségfunkcionál elmélet; ab initio, ill. szemiempirikus módszerek;   betöltési szám reprezentáció, egy- és többrészecske operátorok)</td>
    <td>Surján: Kvantumkémia I</td>
    <td><a href="http://fizweb.elte.hu/!MSc/Kvantumkemia/KvantumkémiaI_dolg.pdf">Kvantumkémia I tételkidolgozás<br></a><a href="http://fizweb.elte.hu/index.php?dir=%21MSc/Kvantumkemia/&file=kvantumk%C3%A9mia%20I%20hosszabb.pdf">
      Kvantumkémia I jegyzet
    </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Makromolekulák   (hajlékony láncú polimerek szerkezete és statisztikus tulajdonságai,   polimeroldatok; konjugált szénláncú polimerek, lineáris lánc:   egydimenziós instabilitások, dópolás hatása az elektromos, mágneses és   optikai tulajdonságokra; biológiai óriásmolekulák: nem információs (pl.   poliszaharid) és információs (pl. fehérje) makromolekulák, másodlagos és   harmadlagos térszerkezet, DNS, genetikai kód)</td>
    <td>Kürti: Makromoleukák</td>
    <td><a href="http://virag.elte.hu/kurti/makroeloadasok_11_osz.html">Órai jegyzetek<br>
      Tanári diák
    </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Komplex   molekulák (atomszínképek elmélete, spin-pálya kölcsönhatás, hiperfinom   kölcsönhatás, kristálytér-elmélet, ligandumtér-elmélet, vibronikus   kölcsönhatások, Jahn–Teller-instabilitás)</td>
    <td><font style="opacity:0.3">nem volt</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Szén nanoszerkezetek (C60   felfedezése, történeti áttekintés, izolált kalickaszerű molekulák,   fullerének folyadék-, illetve szilárd fázisban, dópolt fullerének,   fulleritek, transzporttulajdonságok, optikai tulajdonságok, polimerek,   endohedrális vegyületek, szén nanocsövek)</td>
    <td>Kürti: Szén nanoszerkezetek</td>
    <td><p><a href="http://virag.elte.hu/kurti/fuller_10_tavasz.html">Tanári diák<br></a><a href="http://fizweb.elte.hu/index.php?dir=!MSc/Szen_nanocsovek/">
      Órai jegyzet
    </a></p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Szemiklasszikus   dinamika (WKB közelítés, Bohr–Sommerfeld-féle kvantálási szabályok,   Maslov-index, Berry–Tabor-formula, Gutzwiller-féle trace-formula,   Poisson- és Wigner-szintstatisztika)</td>
    <td><font style="opacity:0.3">nem volt, Kaufmann: Szemiklasszikus dinamika </font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Mezoszkopikus   rendszerek alapjai (2D elektrongáz, nyitott és zárt csatornák, mágneses   tér szerepe, Landauer–Büttiker-formula, az S-mátrix és a Green-függvény   kapcsolata, Aharonov–Bohm-effektus, gyenge lokalizáció, univerzális   vezetőképesség-fluktuáció)</td>
    <td>Cserti: Nemegyensúlyi transzport nanorendszerekben</td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=!MSc/&file=Mezoszkopikus_Rendszerek_1_jegyzet.pdf">Órai jegyzet</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Soktestprobléma   zérus hőmérsékleten (Green-függvények. Fizikai mennyiségek kifejezése   Green-függvényekkel. Feynman-diagramok. Elemi gerjesztések.   Alkalmazások. A kanonikus transzformációs módszer alkalmazása Bose-gázra   és szupravezetőkre)</td>
    <td>Szirmai: Soktestprobléma I</td>
    <td><a href="http://www.complex.elte.hu/~szirmai/SP.pdf">Soktestprobléma I tanári jegyzet<br>
    </a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Soktestprobléma   véges hőmérsékleten (Green-függvények. A termodinamikai potenciál   kifejezése a Green-fügvénnyel. Matsubara-frekvenciák. Feynman-diagramok.   Alkalmazások.)</td>
    <td>Szirmai: Soktestprobléma I,<br>
    Szirmai, Csordás: Soktestrpobléma II</td>
    <td><a href="http://www.complex.elte.hu/~szirmai/SP.pdf">Soktestprobléma I tanári jegyzet</a><br>
    <a href="http://metal.elte.hu/~tuzes/tantargy/soktestII/elso_negyedev.pdf">Soktestprobléma II első feléről diák jegyzet</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Új kísérletek a kvantummechanikában (neutron-interferencia, ion- és atomcsapdák, mikromézer, atomoptika, kétfoton-interferencia)</td>
    <td><font style="opacity:0.3">nem volt, Geszti: Új kísérletek a kvantummechanikában</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kvantumjelenségek elmélete (dekoherencia, kvantumugrások, kvantum-Zenon-effektus, quantum non-demolition, Berry-fázisok)</td>
    <td><font style="opacity:0.3">nem volt</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Statisztikus   kvantumoptika (az elektromágneses tér kvantumelmélete,   kvázivalószínűség-eloszlás függvények, a fény nemklasszikus állapotai,   fotonstatisztika, optikai parametrikus folyamatok, a csillapodás   kvantumelmélete: Langevin-egyenlet, atom-tér kölcsönhatás:   Jaynes–Cummings-modell. A kvantuminformáció-átvitel módszerei: diszkrét   és folytonos teleportáció)</td>
    <td><font style="opacity:0.3">nem volt</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Csapdába   zárt atomrendszerek (nem kölcsönható bozonok harmonikus potenciálban,   véges méret effektusok nem kölcsönható rendszerben,   Gross–Pitajevszkij-egyenlet, kollapszus bozonokra vonzó kölcsönhatás   esetén, Thomas–Fermi-közelítés bozonokra, elemi gerjesztések,   Bogoljubov-egyenletek, hidrodinamikai közelítés, fermionok csapdában,   BCS-BEC átmenet)</td>
    <td>Csordás: Kvantumgázok I-II</td>
    <td><a href="http://fizweb.elte.hu/index.php?dir=!MSc/Kvantumgazok/&file=kvantumgázokI-II_tömörítve.pdf">Órai jegyzet</a></td>
  </tr>
</table>
<h3>Rövidítések</h3>
<dl>
  <dt>CsA</dt>
  <dd>Csordás András</dd>
  <dt>Atom.mol</dt>
  <dd>Atomok és molekulák fizikája (Héjfizika régen)</dd>
  <dt>Molfiz</dt>
  <dd>Molekulafizika</dd>
  <dt>Szilfiz</dt>
  <dd>Sólyom Jenő: Szilárdtestfizika I</dd>
</dl>
<p>&nbsp; </p>
<dl>
<dt>&nbsp;</dt>
</dl>

<?php
// =========== MSG LIST ===========

function msgescape($msg, $mode = 0){
		return preg_replace_callback("/\\\\(.)/", create_function('$m', 'return (($m[1] != "n") ? "' . ($mode ? "\\\\" : "") . '&#" . ord($m[1]) . ";" : "<br/>");'), $msg);
}

if ($adminmode && isset($_POST['msgid']) && isset($_POST['newmessage'])) {
	$_POST['newmessage'] = preg_replace("/\r?\n/", "\\n", $_POST['newmessage']);
	$file = fopen("forum/conversation.dat", "w");
	if ($file)
		for ($i = 0; $i < $msg_count; $i++){
			if ($text[$i][1] === $_POST['msgid']){
				$text[$i][6] = (!isset($_POST['msgdelete']) ? $_POST['newmessage'] : "");
				$text[$i][5] = date("Y. M. d. H:i:s");
			}
			if ($text[$i][6] !== "" ) 
				fwrite($file, "<id>" . $text[$i][1] . "<author>" . $text[$i][2] . "<mail>" . $text[$i][3] . "<date>" . $text[$i][4] . "<moddate>" . $text[$i][5] . "<message>" . $text[$i][6] . "</message>\n");
			else {
				for ($j = $i; $j < $msg_count - 1; $j++){
					for ($k = 0; $k <= 6; $k++) $text[$j][$k] = $text[$j+1][$k];
				}
				unset($text[$j]);
				$msg_count--;
				$i--;
			}
		}
	else
		die("Nem tudom menteni a módosításokat!");
	fclose($file);
	$newmessage = false;
}

$text = array_reverse($text);
$alter_correction = (fmod($msg_count, 2) ? 0 : 1);

$msgid = ($adminmode && isset($_POST['msgid']) && (!isset($_POST['msgsave']) && !isset($_POST['msgdelete']))) ? $_POST['msgid'] : false;

echo $adminmode ? "<form id=\"msgcontainer\" action=\"" . $scriptname . "\" method=\"post\">\n" : "<div id=\"msgcontainer\">\n";
for ($i = 0; $i < $msg_count; $i++){
	if ($my_newmessage && ($_POST['author'] == $text[$i][2])){
		echo "<div class=\"msg\" style=\"background-color: #D3EBD3;\">\n";
		$my_newmessage = false;
	} else
		if ($newmessage && (($text[$i][1] != $lastseenmsg) || $newmessage = false))
			echo "<div class=\"msg\" style=\"background-color: #B9D3DA;\">\n";
		else
			echo "<div class=\"msg\"" . ((fmod($i ,2) - $alter_correction) ? " style=\"background-color: #EBEBEB;\"" : "") . ">\n";
	echo "\t<div class=\"header\">" . ($msg_count - $i) . ".<img src=\"forum/author.png\"><b>" . $text[$i][2] . "</b><a href=\"mailto:" . $text[$i][3] . "\"><img src=\"forum/email.png\">" . $text[$i][3] . "</a><img src=\"forum/date.png\">" . $text[$i][4] . (($text[$i][5] != "") ? " (" . $text[$i][5] . ")" : "") . "</div>\n";
	if (!$msgid) echo "\t<input class=\"adminedit\" value=\"" . $text[$i][1] . "\" type=\"image\" src=\"forum/edit.png\" onclick=\"admin(this)\">\n";
	
	if ($adminmode && $msgid === $text[$i][1]){
		echo "\t<textarea name=\"newmessage\" class=\"text\">" . msgescape(str_replace("\\n", "\n", $text[$i][6]), 1) . "</textarea>\n";
		echo "\t<input class=\"msgstore\" type=\"submit\" name=\"msgsave\" value=\"Mentés\">\n";
		echo "\t<input class=\"msgstore\" type=\"submit\" name=\"msgdelete\" value=\"Törlés\">\n";
		echo "\t<input type=\"hidden\" name=\"msgid\" value=\"" . $msgid . "\">\n";
	} else 
		echo "\t<div class=\"text\">" . msgescape($text[$i][6]) . "</div>\n";
	echo "</div>\n";
}
echo ($adminmode ? (!$msgid ? "<input type=\"hidden\" id=\"msgid\" name=\"msgid\" value=\"\">\n" : "" ) . "</form>" : "</div>");
?>
<a name="send"></a>
<div id="msgsend">
	<form class="msgsend" action="<?php echo $scriptname; ?>" method="post">
		Név:<input class="msgform" type="text" name="author" value="<?php echo ($error || $my_newmessage ? $_POST['author'] : (isset($_COOKIE['author']) ? $_COOKIE['author'] : "")); ?>" style="<?php echo ($error == 2 ? "outline: 1px solid red;" : ""); ?>">
		E-mail:<input class="msgform" type="text" name="email" value="<?php echo ($error || $my_newmessage ? $_POST['email'] : (isset($_COOKIE['email']) ? $_COOKIE['email'] : "")); ?>" style="<?php echo ($error == 3 ? "outline: 1px solid red;" : ""); ?>">
		Üzenet:
		<div id="msgtextformat">
			<input type="button" id="textbold" value="Kiemelt" style="font-weight: bold;" onclick="msgstyle('bold')">
			<input type="button" id="textitalic" value="Dölt" style="font-style: italic;" onclick="msgstyle('italic')">
			<input type="button" id="textunderline" value="Aláhúzott" style="text-decoration: underline;" onclick="msgstyle('underline')">
			Jelöld ki a formázandó szövegrészt!
		</div>
		<textarea class="msgform" id="msgtea" name="message" <?php echo ($error == 1 ? "style=\"outline: 1px solid red;\"" : ""); ?>><?php echo ($error ? $_POST['message'] : "");?></textarea>
		<input class="msgform" type="submit" value="Küldés" style="left: 350px; width: 60px; height: 20px;">
	</form>
</div>

<script type="text/javascript">
	var browser = (navigator.appName != "Microsoft Internet Explorer") ? 1 : 0;
	var ar_check = document.getElementById("archeck");
	var artime_input = document.getElementById("arinput");
	var arimage_img = { obj: document.getElementById("arimage"), state: 0 };
	var msgtextarea = document.getElementById("msgtea");
	var timer = 0;
	var t = artime_input.value;
	var deftime = t;
	
	function countback(){
		if (arimage_img.state == 0){
			arimage_img.obj.src = "forum/ar_play.png";
			arimage_img.state = 1;
		}
		artime_input.value = t--;
		if (t == -1){
			document.getElementById("artimequery").value = deftime;
			document.forms["cpanel"].submit();
		}
		else timer = setTimeout("countback()", 1000);
	}
	
	function autorefresh_toggle(){
		switch (ar_check.checked){
			case false:
				clearTimeout(timer);
				arimage_img.obj.src = "forum/ar_stop.png";
				arimage_img.state = 0;
				break;
			case true:
				t = artime_input.value;
				deftime = t;
				countback();
		}
	}
	
	function autorefresh_escape(){
		clearTimeout(timer);
		if (arimage_img.state == 1) {
			arimage_img.obj.src = "forum/ar_stop.png";
			arimage_img.state = 0;
		}
		ar_check.checked = false;
	}
	
	ar_check.onclick = autorefresh_toggle;
	msgtextarea.onfocus = autorefresh_escape;
	
	<?php echo ($autorefresh ? "countback();\n" : "");
	
	if (!$adminmode) { ?>
	/* admin login */
	var adminlogin_div = document.getElementById("adminlogin");
	var adminlogin_msgid = document.getElementById("msgid");
	function admin(obj){
		adminlogin_div.style.visibility = "visible";
		adminlogin_msgid.value = obj.value;
		adminlogin_div.style.top = obj.offsetParent.offsetTop + 80;
	}
	function closeadminlogin(){
		adminlogin_div.style.visibility = "hidden";
	}
	document.getElementById("adminlogin_cancel").onclick = closeadminlogin;
	<?php } else { ?>
	/* szerkesztendő üzenet megadása */
	function admin(obj){
		document.getElementById("msgid").value = obj.value;
		document.getElementById("msgcontainer").submit();
	}
	<?php } ?>
	/* üzenet formázása */
	function msgstyle(style){
		var sel = {start: msgtextarea.value.length, end: msgtextarea.value.length};
		switch (browser){
			case 0: // IE-ben
				var range = document.selection.createRange();
				if (range.compareEndPoints("StartToEnd", range) == 0) break;
				var dummyrange = range.duplicate();
				dummyrange.moveToElementText(msgtextarea);
				if (!dummyrange.inRange(range)) break;
				dummyrange.setEndPoint("EndToStart", range);
				sel = {start: dummyrange.text.length, end: dummyrange.text.length + range.text.length};
				break;
			case 1: // Minden másban.
				sel = {start: msgtextarea.selectionStart, end: msgtextarea.selectionEnd };
		}
		var begin = msgtextarea.value.substr(0, sel.start);
		var end   = msgtextarea.value.substr(sel.end);
		var selected = msgtextarea.value.substr(sel.start, sel.end - sel.start);
		switch (style){
			case "bold":      var ftag = {pre: "<b>", post: "</b>"}; break;
			case "italic":    var ftag = {pre: "<i>", post: "</i>"}; break;
			case "underline": var ftag = {pre: "<u>", post: "</u>"};
		}
		msgtextarea.value = begin + ftag.pre + selected + ftag.post + end;
		msgtextarea.focus();
	}
</script>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fiznum</title>
<style type="text/css">
<!--
.style1 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
<center>
<style type="text/css">
<!--
.style1 {color: #990000}
fieldset {
	text-align:left;
}
-->
</style>
</head>
<body style="font-size:80%; font-family:Arial, Helvetica, sans-serif"><div style="width:50%; border:1px solid #666666; padding:20px; background-color:#E3E9F0">
  <div align="center">
    <p align="left">Tüzes Dániel fizika numerikus módszerei beadandó feladatok.</p>
    <p>Egyszerre csak az egyik programot tudod használni!<br />
    Ügyelj arra, hogy <strong>ne legyen üres sor</strong> a dokumentum végén!</p>
  </div>
  <form action="product.php" method="post" enctype="multipart/form-data" name="beolvas">
<fieldset><legend><strong>Mátrix szorzás</strong></legend><p>Add meg a bemeneti fileokat! Először a mátrixot, utána a vektort. Az adatok struktúrája legyen olyan, mint amilyen a honlapon is!</p>
<p>
  <input name="prm" type="file" id="prm" /> 
  Mátrix<br />
    <input name="prv" type="file" id="prv" /> 
  Vektor</p>
<p>
  <input type="submit" name="button2" id="button3" value="Mehet!" />
</p>
</fieldset><br /></form>
<form action="gauss.php" method="post" enctype="multipart/form-data" name="beolvas">

<fieldset>
<legend><strong>Lineáris egyenletmegoldás</strong></legend>
<p>Add meg a bemeneti fileokat! Először a mátrixot, utána a vektort. Az adatok struktúrája legyen olyan, mint amilyen a honlapon is!</p>
<p>
  <input name="linm" type="file" id="linm" /> 
  Mátrix<br />
    <input name="linv" type="file" id="linv" /> 
  Vektor</p>
<p>
  <input type="submit" name="button" id="button2" value="Mehet!" />
</p>
</fieldset><br /></form>
<form action="fit.php" method="post" enctype="multipart/form-data" name="beolvas">

<fieldset>
<legend><strong>N dimenziós függvényillesztés</strong></legend>
<p>Add meg a bementi filet! Lehetőség van első és másodrendű függvény illesztésére is. A függvény dimenzióját a program kitalálja. <span class="style1">Ne legyen üres sor az adatok végén!</span></p>
<p><label>
  <input type="file" name="data" id="data" />
  Mérési eredmények
  </label>
  <br />
  <label>
  <input name="meddig" type="text" id="meddig" value="0" />
  Az első hány adatot vegye figyelembe? (0: az összeset)
  </label>
  <br />
  <label>
    <select name="hanyad" id="hanyad">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    </label>
  Hanyadrendűt illesszen?</p>
<p>
  <input type="submit" name="Submit" id="button" value="Mehet!" />
</p>
</fieldset><br />
  </form>
</div></body>
</body>
</html>

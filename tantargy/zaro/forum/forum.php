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
/*
if (!$authorized){ ?>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="login.css">
<!-- <body> --><body>
	<div id="login">
		Ez egy privát fórum.<br>A megtekintéséhez add meg a jelszót!
		<form action="<?php echo $scriptname; ?>" method="post">
			<input type="password" name="pass" style="width: 80px; text-align: center;">
			<input type="submit" value="OK" style="width: 30px;">
		</form>
	</div>
	<div id="version">v1.2<br>2008.07.11.</div>

</body>
</html>
<?php die();
} */
// =========== MSG EDIT ===========
$error = 0;
$my_newmessage = false;
if (isset($_POST['message']) && ($_POST['message'] != "" || $error = 1)) {
	if ($_POST['author'] == "") $error = 2; else setcookie("author", $_POST['author'], time()+60*60*24*30);
	if ($_POST['email'] == "" || preg_match("/[a-z0-9-_\.]+@[a-z0-9-_\.]+/", $_POST['email']) == 0) $error = 3; else setcookie("email", $_POST['email'], time()+60*60*24*30);
	
	if (!$error){
		$file = fopen("conversation.dat", "a");
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

preg_match_all("/<id>([^<]+)<author>([^<]+)<mail>([^<]+)<date>([^<]+)<moddate>([^<]*)<message>(.+)<\/message>/i", file_get_contents("conversation.dat"), $text, PREG_SET_ORDER);
$msg_count = count($text);

// ===============================

$newmessage = ($lastseenmsg = (isset($_COOKIE['lastseen']) ? $_COOKIE['lastseen'] : "")) != "" && !$my_newmessage ? true : false;
setcookie("lastseen", $text[$msg_count-1][1], time()+60*60*24*30);

?>

<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<!-- <body> --><body>
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
		<img id="arimage" src="ar_stop.png"><input type="checkbox" id="archeck"<?php echo ($autorefresh ? " checked=\"true\"" : ""); ?>><label for="archeck"> Autómatikus frissítés</label>
		<input type="text" id="arinput" value="<?php echo ($autorefresh ? $_POST['artimequery'] : "30"); ?>"> sec.
	</div>
	<form action="<?php echo $scriptname; ?>" method="post" name="cpanel">
		<input class="button" name="refresh" type="submit" value="Frissítés">
		<input class="button" name="logout" type="submit" value="Kilépés">
		<input type="hidden" name="artimequery" id="artimequery" value="-1">
	</form>
</div>
<div id="version">v1.2<br>2008.07.11.</div>

<?php
// =========== MSG LIST ===========

function msgescape($msg, $mode = 0){
		return preg_replace_callback("/\\\\(.)/", create_function('$m', 'return (($m[1] != "n") ? "' . ($mode ? "\\\\" : "") . '&#" . ord($m[1]) . ";" : "<br/>");'), $msg);
}

if ($adminmode && isset($_POST['msgid']) && isset($_POST['newmessage'])) {
	$_POST['newmessage'] = preg_replace("/\r?\n/", "\\n", $_POST['newmessage']);
	$file = fopen("conversation.dat", "w");
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
	echo "\t<div class=\"header\">" . ($msg_count - $i) . ".<img src=\"author.png\"><b>" . $text[$i][2] . "</b><a href=\"mailto:" . $text[$i][3] . "\"><img src=\"email.png\">" . $text[$i][3] . "</a><img src=\"date.png\">" . $text[$i][4] . (($text[$i][5] != "") ? " (" . $text[$i][5] . ")" : "") . "</div>\n";
	if (!$msgid) echo "\t<input class=\"adminedit\" value=\"" . $text[$i][1] . "\" type=\"image\" src=\"edit.png\" onclick=\"admin(this)\">\n";
	
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
			arimage_img.obj.src = "ar_play.png";
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
				arimage_img.obj.src = "ar_stop.png";
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
			arimage_img.obj.src = "ar_stop.png";
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

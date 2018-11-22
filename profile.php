<?php
if (!isset($_GET['name'])) 
{
  $name = "";
} 
else 
{
	$name = htmlspecialchars($_GET['name']);		//Prevent Cross Site Scripting (XSS) 
	// remove double encoding
	$name = urldecode($name);
  }
if (!isset($_GET['croco_id'])) 
{
  $croco_id = "";
} 
else 
{
  $croco_id = htmlspecialchars($_GET['croco_id']);		//Prevent Cross Site Scripting (XSS) 
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'>
    <title>WiFON (<? echo $name?>)</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="content" class="animation">

	<nav>
		<div class="menu_container">
			<div id="domov_link" class="menu_item"><a href="https://wifon.sk">Domov</a></div>
			<div id="wifon_link" class="menu_item"><a href="https://wifon.sk?page=wifon">Wifon</a></div>
			<div id="faq_link" class="menu_item"><a href="https://wifon.sk?page=faq">FAQ</a></div>
			<div id="wiki_link" class="menu_item"><a href="https://github.com/croconaut/wifon/wiki">Wiki</a></div>
			<div id="kontakt_link" class="menu_item"><a href="https://wifon.sk?page=kontakt">Kontakt</a></div>
		</div>
    </nav>
		

        <section id="profiles_link">
			<br>
			<br>
			<br>
			<div id="profiles_title">Četuj aj bez Internetu</div>
			<div id="profiles_text">
				<p><strong><? echo $name?></strong> si Ťa pridal ako priateľa. Ak chceš jeho žiadosť o priateľstvo potvrdiť,
				musíš otvoriť tento link vo <a href="https://wifon.sk">WiFON</a> appke, messengeri, v ktorom vieš komunikovať aj bez Internetu. Ak nemáš <a href="https://wifon.sk">WiFON</a> ešte nainštalovaný, klikni na ikonu nižšie.</p>                
				<p></p>
			</div>
            <a href="https://play.google.com/store/apps/details?id=com.croconaut.ratemebuddy"><img id="profiles_google_badge" src="../images/badge.png"/></a>
        </section>
	</div>

	<script type="text/javascript" src="js/plugins/CSSPlugin.min.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script src="js/_main.js"></script>
</body>
</html>

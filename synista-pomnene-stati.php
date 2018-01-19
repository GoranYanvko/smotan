<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Полезни съвети за запомняне на сънищата</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="сън, спомен, събувдане, разшалчне меюта, приомняне, спомен" />
            <meta name="description" content="Полезни съвети за запомняне на сънищата. Преди да си легнете, си кажете наум: "Ще запомня съня си, когато се събудя". Това всъщност е доказан и ефектен начин за преразказване на сънищата. Ако имате ..." />
	<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="center">
	<div id="header">
	<h1>Testovebg.com</h1>
	<h2>... Истината за живота</h2>
		<a href="http://testovebg.com"><img id="logo" src="images/logo.jpg" alt="logo test" border="0" /></a>
		<div id="navtop">
<?

if (!(file_exists("kategori.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("kategori.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
		</div>
		<img id="headerimage" src="images/headerimage.jpg" alt="sadpeople" />
	</div>
	<div id="content">
	<div id="leftside">
		<div id="navlist">

<?

if (!(file_exists("kategori-strani.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("kategori-strani.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
			
		</div>
		<div id="members">
			<span>Вход</span>
			<form action="login.php" method="post" enctype="application/x-www-form-urlencoded" name="login">
			<span class="info">E-mail</span>
			<input class="intext" name="email" type="text" />
			<span class="info">Парола</span>
			<input class="intext" name="password" type="password" />
			<input id="submit" name="login" type="submit" value="Вход" />
			</form>
			<a href="login.php">Регестрирай се!</a>
			<a href="login.php">Забравена парола</a>

		</div>
	</div>
	
	<div id="rightside">
<?

if (!(file_exists("posledno_novo.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("posledno_novo.dat","r");
   $fo=fread($fp,25000);
echo "$fo";

}

?>

	</div>
	
	<div id="middle">
<?

if (!(file_exists("reklama.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>
<h5>Полезни съвети за запомняне на сънищата</h5>

<img src="magiq/magiq-6.jpg" width="180" height="200" alt="dream" border="0" />

1. Преди да си легнете, си кажете наум: "Ще запомня съня си, когато се събудя". Това всъщност е доказан и ефектен начин за преразказване на сънищата. Ако имате много мисли на главата си може да ви разконцентрират и да не можете да запомните съня. 
<br /><br />
2. Придържайте се към редовни часове на лягане и ставане. Направете това рутинно и ще ви помогне да запомните съня си по-лесно. 
<br /><br />
3. Избягвайте консумацията на алкохол и употребата на лекарства преди да си легнете. Тези неща могат да ви попречат да запомните съня си. Ако ядете храни богати на мазнини малко преди лягане, също може да отклони силите на тялото от мозъка и да не можете да запомните съня си. 
<br /><br />
4. Дръжте химикал и тетрадка или диктофон близо до леглото си за да може да ги грабнете веднага след като се събудите. Трябва да направите записването на сънищата си приятно занимание. Ако имате малка нощна лампа до леглото си също ще бъде от полза ако се събудите по сред нощ и искате да запишете съня. 
<br /><br />
5. След събуждането си от сън, полежете малко в леглото си със затворени очи. Събудете се бавно и релаксирайте. Опитайте се да задържите чувствата, които сте почувствали в съня си преди да се събудите. Как се чувствахте? Разочаровани? Ужасени? Щастливи? 
<br /><br />
6. Запишете съня си веднага. Направете го като навик това да е първото нещо, което правите след като се събудите. Обсъждайки съня си с приятели или във форуми и чатове също ще ви помогне да си го припомните.
<br /><br />
<?

if (!(file_exists("reklama2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama2.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>
		
		<div id="line"></div>
		<div id="middleleft">

<?

if (!(file_exists("statiq1.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("statiq1.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
			
		</div>
		
		<div id="middleright">

<?php 

$statiq2 = "news/statiq2.txt"; 

$fp = file($statiq2); 
srand((double)microtime()*1000000); 
$rl = $fp[array_rand($fp)]; 
echo $rl; 

?> 
		
		</div>
	</div>
	<div id="cleaner"></div>
	<div id="footer">
		<?

if (!(file_exists("link_dolu.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("link_dolu.dat","r");
   $fo=fread($fp,1200);
echo "$fo";

}

?>
	</div>
	</div>
	
</div>
</body>
</html>
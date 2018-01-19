<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Древните Вампири</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Древните Вампири, Вампири, vampiri, chudovista, drevnosta" />
            <meta name="description" content="Според древни легенди, историята на вампирите се причислява към 4-тото хилядолетие пр.Хр. Всичко започва в Египет или Кемет, както тогава са го наричали. Легендата " />
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
<h5>Древните Вампири</h5>

<img src="magiq/magiq-10.jpg" width="180" height="200" alt="vudu" border="0" />

Според древни легенди, историята на вампирите се причислява към 4-тото хилядолетие пр.Хр. Всичко започва в Египет или Кемет, както тогава са го наричали. Легендата на Близначките гласи, че Кралят и Кралицата на Кемет, мислейки да изкоренят канибализма, взели в плен две вещици от територията на Палестина, от племе, живеещо в подножието на планината Кармел, с цел да разберат техните тайни. Обяснението на вещиците не удовлетворило управниците и те жестого се погаврили със сестрите. Но зъл дух, желаещ да отмъсти на поругателите, се вселява в кралицата на Кемет. В резултат от сливането на материалното тяло на Кралицата и нематериялния дух се получава една нова форма на живот пиеща кръв и размножаваща се чрез предаване на тази кръв на човек, намиращ се на границата между живота и смъртта. Кралицата направила и краля вампир. 
Сестрите магьосници, превърнати във вампири от човек на краля, настроен приятелски, който им вярвал и когато им е било най-тежко ги е подкрепял, но впоследствие се оказва извършител на тяхното срамно наказание(това е преди духът да се всели в тялото на Акаша)[впоследствие тези тримата са известни като Първата Група] направили опит за възстание, завършило с жестоко наказание за сестрите. Дадената легенда изглежда най-правдоподобна, в сравнение с последвалите, по-голямата част обосновани върху култа към Озирис. Достовeрното в случая е това, че всяко покушение над Кралицата неизменно завършвало или с гибел, или с тежки последствия за всички останали вампири. 


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
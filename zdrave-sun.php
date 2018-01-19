<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Здрав сън успешна седмица</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="безсъние, умора, сън, проблем, заспиване, будене" />
            <meta name="description" content="Имате проблем със заспиването, будите се нощно време и се будите изморени. Ето няколко начина де се преборите с безсънието " />
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
<h5>Здрав сън успешна седмица</h5>

<img src="stati/sun.jpg" width="180" height="200" alt="сън" border="0" />

Човешкото тяло е устроено да спи около 8-9ч. на ден. Това е и препоръчителната доза сън от лекарите, но защо здравословният сън е толкова важен за нашето тяло ?
<br />
Отговорът е много прост ! Мозъкът и Мускулите са най-натоварените органи в нашето тяло. Мускулната сила се възстановява сравнително бързо в случаите когато не сме се претоварили от физически упражнения, но мозъка е тази част от човешкото тяло, която капризниче. Нервите са тези клетки, които след образуването си умират чак, когато житейския път на човека свърши.
<br />
Има различни методи, които спомагат за по-здрави сън. Един от тези начини е здравословната храна и приятният секс, които действа така релаксиращо и отпускащо. В днешните дни обаче тези две неща може и да не ни стигнат. Стреса под, който е подложен всеки човек е прекомерно голям – от най-малките неща “къде ще паркирам” до наистина важни неща “глобална криза”, “войни” и прочие. Голяма част от хората за да достигнат блажения 8ч. сън прибягват до различни лекарствени средства. Ние ви съветваме, ако решите да използвате някой да се посъветвате с вашия лекуващ лекар.  Три са най-разпространените лекарствени средства
<br /><br />
<b>Домашно приготвени  отвари</b> – като отпускащия чай от липа, чаша топло мляко или чай от магарешки бодил.
<br /><br />
<b>Билкови таблетки</b> - те обикновено съдържат хмел, валериан и други успокояващи билки и могат да се пият продължително време и не водят до пристрастяване. 
<br /><br />
<b>Сънотворни</b> - това са класическите хапчета за сън, които се продават с рецепта. Имат висока ефективност, но с времето човек трябва да увеличава дозата, защото организмът привиква.
<br /><br />
И не забравяте здравия сън е предпоставка за успешна работа и седмица.
ЛЕКА НОЩ !

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
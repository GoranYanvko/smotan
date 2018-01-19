<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Магазин за жените и мъжете</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Жени, мъже, жените, мъжете, дракане, каране, спор, магазин" />
            <meta name="description" content="Неотдавна бил открит магазин, в който жените можели да си изберат и да си купят мъж. На входа висяла табела с правилата на работа на магазина със следното съдържание ..." />
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
<h5>Магазин</h5>

<img src="stati/razni-magazin-jeni.jpg" width="180" height="200" alt="цветя" border="0" />

Неотдавна бил открит магазин, в който жените можели да си изберат и да си купят мъж. На входа висяла табела с правилата на работа на магазина
със следното съдържание:<br /><br />
1. Вие можете да посетите този магазин САМО ВЕДНЪЖ.<br />
2. В магазина има 6 етажа, като качеството на мъжете се повишава с увеличаването на броя на етажите.<br />
3. Можете да си избирате мъж, от който и да е етаж и да се качвате на по-горен етаж.<br />
4. Не се разрешава връщането на по-долен етаж.<br /><br />
Една жена решила да посети същият този „Магазин за мъже”, за да си намери половинка.
След като прочела на входа на първия етаж табелата: „Мъже, които имат работа” - тя веднага се качила на втория етаж. <br />
Табелата на втория етаж гласяла: „Мъже, които имат работа и обичат децата”. <br />
Жената отишла на третия. Там имало надпис: „Мъже с работа, обичащи деца и необикновенно красиви”. „Божичко!” - зарадвала се жената, но все пак се качила на четвъртия етаж. <br />
Там висляла табела: „Мъже с работа, които обичат деца, ослепително красиви и помагащи вкъщи”.<br />
- Невероятно! - възкликнала жената - Много ми е трудно да устоя! 
Но, произнасяйки това, тя все пак се качила на петия етаж. <br />
Надписът там бил: „Мъже, имащи работа, обичащи децата, с ослепителна красота, помагащи вкъщи и много романтични”.<br />
На жената много и се приискало да остане на този етаж и да си избере половинка, но все пак, се преборила с чувствата си си и се качила на
последния етаж. <br />
И на този етаж прочела надпис със следното съдържание:
„Вие сте посетителка № 31 456 012, тук няма мъже. Благодарим ви, че посетихте нашия магазин!”<br /><br />

А точно срещу този магазин бил открит” Магазин за жени”. На първия етаж се предлагали жени, които обичат да правят секс. На втория - богати
жени, обичащи да правят секс. А от третия до шестия етаж ДОСЕГА НИКОЙ, НИКОГА НЕ СЕ Е КАЧВАЛ !!!
<br />



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
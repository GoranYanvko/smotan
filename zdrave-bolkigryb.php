<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Болки в гърбът</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Гръб, болка, заболяване, болежки, гърбът" />
            <meta name="description" content="В нашето съвремие по-голяма част от хората страдат от болки в гърба. Основна причина е заседналия начин на живот, които съвременния човек има. Малко осъзнаван от човека, но този проблем взема все повече жертви. Гръбначния ..." />
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

<h5>Болки в гърбът</h5>

<img src="stati/vertebrae.jpg" width="180" height="200" alt="bolest" border="0" />

В нашето съвремие по-голяма част от хората(около 70%) страдат от болки в гърба.
Основна причина е заседналия начин на живот, които съвременния човек има. Малко осъзнаван от човека, но този проблем взема все повече жертви. Гръбначния стълб представлява двойна с образен костен стълб, основната функция, на който е да поема сътресението при физическо натоварване и така ако той бъде оставен да “мързелува” дълго време отслабва.
<br/>Голяма част от населението са изгубили способността си за правилно сядане дори и на стол. В резултат на това едни мускули се натоварват повече а други не. В тези случай болките в кръста са неизбежни. Не случайно при учениците се набляга на правилния седеж на чина.
<br/>Ето няколко съвета от нас от нас за превантивни мерки срещу болки в гърба:
<br/><br/>
Разхождай те се през свободното време, ако имате възможност ходете пеша до работа, а ако нямате, забравете за асансьора  препоръчваме ви да слизате пеша до първия етаж, а на прибиране да се качвате пеша.
<br/><br/>
При повдигане или вземане неща от земята не се навеждайте, а приклякайте  .
<br/><br/>
Правете упражнения дори да не може да си позволите да ходите на фитнес, в домашни условия има добри упражнения, които да раздвижват гръбначния стълб. За упражненията в някоя др. статия.
<br/><br/>
Това са прости правила за предпазване от болките в гърба.

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
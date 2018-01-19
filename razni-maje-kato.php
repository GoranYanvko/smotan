<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Мъжете са като</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Жени, мъже, жените, мъжете, дракане, каране, спор, магазин" />
            <meta name="description" content="Мъжете са като... Плочки за пода - ако ги поставиш правилно първия път, можеш да се разхождаш върху тях с години..." />
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
<h5>Мъжете са като</h5>

<img src="stati/maje-kato.jpg" width="180" height="200" alt="цветя" border="0" />

Мъжете са като... Плочки за пода - ако ги поставиш правилно първия път, можеш да се разхождаш върху тях с години.<br /><br />
Мъжете са като... Банкова сметка - без много пари не събират много интерес.<br /><br />
Мъжете са като... Миксер - трябва ти, но не си съвсем сигурна защо.<br /><br />
Мъжете са като... Шоколад - сладък, приятен и обикновено се лепят право за задните ти части.<br /><br />
Мъжете са като... Кафе - най-хубавите са богати (на вкус), топли и могат да те държат будна цяла нощ.<br /><br />
Мъжете са като... Рекламите - не можеш да вярваш на нито една дума, която казват.<br /><br />
Мъжете са като... Компютрите - трудни за разбиране и никога нямат достатъчно памет.<br /><br />
Мъжете са като... Хладилна чанта - зареди ги с с бира и можеш да ги заведеш където и да е.<br /><br />
Мъжете са като... Копирни машини - трябват ти за размножаване, и май това е всичко.<br /><br />
Мъжете са като... Държавни ценни книжа - трябва им дълго време да стигнат до състояние на зрелост.<br /><br />
Мъжете са като... Място за паркинг - хубавите вече са заети, а тези, които са останали са или (за) инвалиди или са прекалено малки.<br /><br />
Мъжете са като... Пуканки - удовлетворяват те, но само за малко.<br /><br />
Мъжете са като... Снежна буря - никога не знаеш кога ще дойде, колко сантиментра ще е и колко време ще продължи (издържи).<br /><br />
Мъжете са като... Банан - колкото по-стар става, толкова по-малко твърд е.<br />


<script type='text/javascript'>
svejo_url='http://testovebg.com/razni-maje-kato.php';
svejo_bgcolor='FFFFFF';
svejo_skin='compact';
svejo_theme='green';
</script>
<script src='http://svejo.net/javascripts/svejo_button.js' type='text/javascript'></script>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Мъжът Везни  везни - любопитни дани</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, дани, любопитно, везни , мъж, жена, овца, телец, telez, telec " />
            <meta name="description" content="Мъжът везни, всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Мъжът Везни</h5>

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

Мъжете са обятелни и умни. Можете да разчитате на него за всякакви съвети - само не искайте бързи решения - там няма да се получи - трябва да почакате блюдата да се успокоят, да са огледани всички “за” и “против”. Понякога ще ви дразни тази негова мудност, оглеждане на нещата от всички страни, дори дистанцираност (о, ужас!). Всъщност той е съдник, съдия - няма как да прецени правилно ако не се отдръпне лекичко. Може и да е влудяващо - спор няма - от две седмици гледам една Везна дето с часове клати чинийките над елементарно-очевидни неща, че в скоро време смятам да я застрелям да не се мъчи повече. На всичко отгоре жена - колебливост на квадрат. 
<br /><br />Мъжете Везни може и да са непостоянни към жените обаче, нали трябва да опитат от много неща, усещания и преживявания. Понякога бъркат приятелство и любов (или се колебаят по средата), но винаги са щедри и почти винаги усмихнати. Всъщност направо са си прахосници - обичат да харчат за красиви и удобни неща и вещи или пък за приятни преживявания. Но като купуват търсят отново онзи баланс между цена и качество - ако има разумен прахосник на този свят пак трябва да я някоя Везна. 
<br /><br />
Везни не понасят хаоса - той няма нищо общо с хармонията, разхвърлени неща по пода или неподредени мисли еднакво успешно му влияят зле. Добре е да готвите прилично ако ще впечатлявате някой кавалер Везни. 
<br /><br />

<a href="jena-vezni.php">Жената Везни </a><br />
<a href="vezni.php">Зодия Везни</a>


<?

if (!(file_exists("reklama2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>
		
		<div id="line"></div>
		<div id="middleleft">
		
<?

if (!(file_exists("horoskop1.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("horoskop1.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
			
		</div>
		
		<div id="middleright">

<?

if (!(file_exists("horoskop2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("horoskop2.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

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
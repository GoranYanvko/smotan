<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Лнюбовни Пожелания за 14.02</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="пожелания, св. валентин, Валентин, SMS, поздрав, пожелание, SMS пожелания, смс поздрав, смс, готини пожелания " />
            <meta name="description" content="Пожелания за Св. Валентин, Пожелания за рожден ден,Любовни пожелания,Пожелания за абитуриенти, Love SMS, Забавни sms" />
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
<h5>Пожелания за Св. Валентин</h5>
<p>
Животът е един пъзел и ти си парченцето, което ми липсва. 
</p>
<p>
В любовта е като на война: лесно започва, трудно свършва, невъзможно е да я забравиш! 
</p>
<p>
Без теб не мога, разбери! Без теб, сърцето ме боли! Без теб е тъжна моята младост! Без теб за мен няма радост! 
</p>
<p>
Без теб не мога, разбери! Без теб, сърцето ме боли! Без теб е тъжна моята младост! Без теб за мен няма радост! 
</p>
<p>
Искам те! Желая те! Копнея за теб! 
</p>
<p>
Казват, че любовта идва само веднъж, но това не е вярно, защото се влюбвам в теб всеки път щом те видя. 
</p>
<p>
Ще дам име на всяка твоя целувка и ще ги извиквам насън всяка нощ 
</p>
<p>
Вярваш ли в любовта от пръв поглед или да мина отново? 

</p>

<a href="pojelaniq-valentin-2.php"><-- Обратно</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="pojelaniq-valentin.php">1</a> 
<a href="pojelaniq-valentin-2.php">2</a>
<a href="pojelaniq-valentin-3.php">3</a>
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="pojelaniq.php">Следващи --></a>

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
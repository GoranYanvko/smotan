<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<title>Тестове, Ежедневен хороскоп , Развлечение и забавление </title>
            
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="test , testove , TEST , тест тестове , любов , love , teen , хороскоп нумерлогия тестове развлечение игри зодии , съновник " />
            <meta name="description" content="TEST - Тестове на различни теми , ежедневен хороскоп и нумерология , гадание , развлечение, игри и още ... " />
	<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="center">
	<div id="header">
	<h1>Хороскоп</h1>
	<h2>... за всеки ден за всяка зодия</h2>
		<a href="http://testovebg.com"><img id="logo" src="images/logo.jpg" alt="хороскоп" border="0" /></a>
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
			<h5>Хороскоп за 27.11.10</h5>
<a href="http://www.testovebg.com/horoskop-oven1.php">
<img src="http://testove-kartinki.hit.bg/oven.gif" alt="овен" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-telec1.php">
<img src="http://testove-kartinki.hit.bg/telez.gif" alt="телец" width="110" border="0" />
</a>

<a href="http://www.testovebg.com/horoskop-bliznaci1.php">

<img src="http://testove-kartinki.hit.bg/bliznaci.gif" alt="Близнаци" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-rak1.php">

<img src="http://testove-kartinki.hit.bg/rak.gif" alt="рак" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-lyv1.php">

<img src="http://testove-kartinki.hit.bg/lyv.gif" alt="лъв" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-deva1.php">

<img src="http://testove-kartinki.hit.bg/deva.gif" alt="deva" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-vezni1.php">

<img src="http://testove-kartinki.hit.bg/wezni.gif" alt="aacie" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-skorpion1.php">
<img src="http://testove-kartinki.hit.bg/skorpion.gif" alt="скорпион" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-strelec1.php">

<img src="http://testove-kartinki.hit.bg/strelez.gif" alt="стрелец" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-kozirog1.php">
<img src="http://testove-kartinki.hit.bg/kozirog.gif" alt="козирог" width="110" border="0" />

</a>

<a href="http://www.testovebg.com/horoskop-vodolei1.php">

<img src="http://testove-kartinki.hit.bg/vodolei.gif" alt="водолей" width="110" border="0" />

</a>

<a  href="http://www.testovebg.com/horoskop-ribi1.php">

<img alt="ribi" src="http://testove-kartinki.hit.bg/ribi.gif" alt="риби" width="110" border="0" />

</a>


                


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

<h3>Смешни зодии</h3>
<a href="fun-oven.php">
<img src="http://testovebg.com/zodiq/oven1.jpg" alt="oven" width="70" border="0" /></a>

<a href="fun-telec.php">

<img src="http://testovebg.com/zodiq/telec1.jpg" alt="telec" width="70" border="0" /></a>

<a href="fun-bliznaci.php">
<img src="http://testovebg.com/zodiq/bliznaci1.jpg" alt="bliznaci" width="70" border="0" /></a>

<a href="fun-rak.php">
<img src="http://testovebg.com/zodiq/rak1.jpg" alt="rak" width="70" border="0" /></a>

<a href="fun-luv.php">
<img src="http://testovebg.com/zodiq/luv1.jpg" alt="luv" width="71" border="0" /></a>

<a href="fun-deva.php">

<img src="http://testovebg.com/zodiq/deva1.jpg" alt="jena" width="71" border="0" /></a>

<a href="fun-vezni.php">
<img src="http://testovebg.com/zodiq/vezni1.jpg" alt="vezna" width="70" border="0" .></a> 

<a href="fun-scorpion.php">
<img src="http://testovebg.com/zodiq/skorpion1.jpg" alt="skoprion" width="70" border="0"></a> 

<a href="fun-strelec.php">
<img src="http://testovebg.com/zodiq/strelec1.jpg" alt="strelec" width="70" border="0" /></a>

<a href="fun-kozirog.php">
<img src="http://testovebg.com/zodiq/kozirog1.jpg" alt="kosirog" width="68" border="0" /></a>
<a href="fun-vodolei.php">
<img src="http://testovebg.com/zodiq/vodolei1.jpg" alt="woda" width="70" border="0" /></a>

<a href="fun-ribi.php">
<img src="http://testovebg.com/zodiq/ribi1.jpg" alt="ribi" width="70" border="0" /></a>



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
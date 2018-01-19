<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тренировка за Бицепса</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="фитнес, бицепс, мускул, спорт, натоварване, тренировка" />
            <meta name="description" content="Примерна" />
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
<h5>Тренировката за Бицепса</h5>

<img src="stati/biceps.jpg" width="180" height="200" alt="мускули бицепс" border="0" />

Бицепса ( m. biceps ) brachiiе двуглав мускул на пред мишницата, той е от предната група и осъществява сгъване на ръката в лакътната става. Към тази група са още мишичния мускул ( m. brachialis ) и клюномишичния мускул ( m. coracobrachialis );
<br />
Днешната презентация на тренировка ще бъде за най-повърхностният от тези мускули, а имено бицепса.
<br /><br /><br />
Програма "А" за бицепс:<br />
Упражнение &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -   &nbsp;&nbsp;&nbsp;         Серии     &nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;  Повторения
<br />

Сгъване с щанга от стоеж --  4/5  --      6-8<br />
Сгъване с щанга(скотово)  --  4/5    --    10-12<br />
Концентрирано(с дъмбел) --   4/5    --    10-12<br />
*Забележка:<br />
Изпълняването на тренировка "А" се прави като гигантска серия-изпълнява се по една серия от всяко упражние като следвате последователността от таблицата в един цикъл.Без почивка м/у упражненията!Почивайте от 2-4 минути след приключване на гигантската серия!
<br /><br />
Програма "Б" за бицепс:<br />
Упражнение &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -   &nbsp;&nbsp;&nbsp;         Серии     &nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;  Повторения
<br />
Сгъване с щанга от стоеж   - 5   6-8<br />
Сгъване с щанга (скотово)  - 4   12<br />
Концентрирано   - 3  12-15<br />
Сгъване с дъмбели от   - 3  10-12<br />
*Забележка:
Програмите се сменят всяка седмица!

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
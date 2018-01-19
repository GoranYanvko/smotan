<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Борба с Алергии</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Алергии,  борба, обрив, лекарства, помощ" />
            <meta name="description" content="Алергиите се изразяват по различен начин при различните хора и често в зависимост от причинителя на алергията. Дойде ли пролетта започва едно кихане при едни хора, досадно зачервяване на очите при ..." />
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
<h5>Борба с Алергии</h5>

<img src="stati/gradina.jpg" width="180" height="200" alt="цветя" border="0" />

Алергиите се изразяват по различен начин при различните хора и често в зависимост от причинителя на алергията. Дойде ли пролетта започва едно кихане при едни хора, досадно зачервяване на очите при други, а при трети една не спираща хрема. Това са леки прояви на алергии. В по-тежки случай алергиите протичат с образуването на петна на отделни места по тялото или цялостен обрив. Други признаци могат да бъдат главоболи, пукане в ушите и др.
<br />
Причинител на алергиите и то най-вече на пролетните е полена от цъфтящите растения.   Тези микроскопични агенти пролетно време са буквално навсякъде около нас принасяни от топлия пролетен ветрец. 
<br />
Какво може да направим за да ограничим тяхното въздействие ?!? Ето и няколко съвета:
<br /><br />
Взимайте душ вечер, за да отмиете полени, останали в косата и по кожата ви – по този начин ще ограничите навлизането на полена във вашия дом и най-вече в леглото.
<br /><br />
Перете по често дрехите си.
<br /><br />
Когато сте си вкъщи, затваряйте вратите и прозорците – това е предпоставка за предотвратяване на навлизането на полен в домът ви.
<br /><br />
Не излизайте по възможност рано сутринта – тогава концентрацията на полена във въздуха е най-голяма.
<br /><br />
Разбира се за борба с алергените и причиняваните от тях алергични реакции може да се води и с лекарствени медикаменти, за тях може да се обърнете към лекуващият Ви лекар, които може да ви предпише най-подходящото лекарствено средство съобразено с вашата възраст, пол, килограми и пр.

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
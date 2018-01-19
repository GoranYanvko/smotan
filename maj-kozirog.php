<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Мъжът Козирог  - любопитни дани</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, дани, любопитно, Зодия Козирог, Зодия, Козирог,  мъж, жена, овца, телец, telez, telec " />
            <meta name="description" content="Мъжът Козирог, всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Мъжът Козирог</h5>

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

В спалнята са директни и прями. Мъжът Козирог не е най-романтичният любим, но затова пък е силен и издръжлив любовник. Всъщност при Козирог количеството любов е по-важно от качестото. Първото може да се измери, а второто - не. Козирог се грижи внимателно за партньорката си - и в леглото и извън него. Той е джентълмен, а ако сте влязла под кожата му даже ще открие своята най-скрита душевност за вас и ще видите, че нито е лишен от въображение, нито от страст, но трябва да се потрудите доста за да го убедите да ги извади от избата. Съпругът Козирог винаги ще печели добре за своето семейство, а таткото Козирог винаги ще играе с хлапетата през уикенда, ще ги води на мач, за захарен памук или в зоологическата градина. 
<br /><br />

<a href="kozirog.php">Зодия Козирог</a><br />
<a href="jena-kozirog.php">Жената Козирог</a>



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
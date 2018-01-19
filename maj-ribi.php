<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Мъжът Риби - любопитни дани</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, дани, любопитно, Зодия Риби , Зодия, Риби, мъж, жена, овца, телец, telez, telec " />
            <meta name="description" content="Мъжът Риби, всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Мъжът Риби</h5>

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

Мъжът Риби се чувства прекрасно с комат хляб и чаша вино във вашата компания, особено ако се запалили камината и сте свалили всички дрехи от себе си. Но няма да се чувства кардинално по-зле с комат хляб, чаша вино и шепа приятели, с които обсъждат поредната си ергенска мания и бройкайки с поглед мацката на съседната маса. 
<br /><br />Риби не прави сцени на ревност (поне не би трябвало) - по-скоро го интересува след като сте съгрешила как ще докажете бъдещата си вярност. Всъщност навярно вие ще имате повече поводи за ревност - той е интересен мъж, а и поддържа с приятелите си и от двата пола много топли отношения - демек съвсем не намира за нередно да утеши някоя стара приятелка в три след полунощ в прегръдките си. По дяволите, какво искате да кажете - та тя е изглеждала толкова отчаяно. Нали вече казахме, че Риби са адски състрадателни. Той не може да не бъде такъв. Ако сте властна жена и искате птичка в клетка - потърсете някъде другаде. Къш! 
<br /><br />
Разправят, че Риби е мил съпруг и любим - забавен и грижовен с децата - само дето трябва да го вадите от моментите му на меланхолия. Получава се на кафе с много усмивки, кино, театър, или пък вицове. Спомнете си, че той ще отразява вашето настроение. Ако му се цупите и мръщите ще ви се върне същото. Добре е да не потъпквате мечтите му - оставете го да плува в океана, не го затваряйте в домашния аквариум - той винаги ще знае как да намери пътя към къщи. Секването на поривите му ще го съсипе. А пък ако ви стиска да поплувате с него - още по-добре - давайте, водата е приятна!
<br /><br />

<a href="ribi.php">Зодия Риби</a><br />
<a href="jena-ribi.php">Жените Риби</a>



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
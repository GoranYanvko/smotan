<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Жената Близнаци</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, дани, жената, мъжът, любопитно, близнаци , мъж, жена, овца, телец, telez, telec " />
            <meta name="description" content="Жена Зодия близнаци, всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Жената Близнаци</h5>

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
Жената Близнаци е цяла колекция от жени в една опаковка. Ако не можете да си позволите харем, можете да си потърсите мацка Близнаци. Само дупе да ви е яко! Само си помислете една типична жена с всичките и променливи настроения и емоции умножена по две, три или петнадесет… 
<br /><br />Със сигурност това е жена с въображение и фантазии (да - и в леглото също). Жизнерадостна и духовита е и с нея е забавно и весело. Когато едната у нея се умори все се намира друга, която да ви впечатли и омагьоса. Със сигурност няма как да ви омръзне освен едно - цялата тази лудница от идентичности вътре в нея. Тя копнее да е лудо влюбена, но не знае как, за сметка на това е отчаяно любопитна и никога не се уморява да опитва. 
<br /><br />
Ако твърди, че е влюбена във вас уверете се, че не се заблуждава сама - не е изключено. Но ако си пада по някой друг докато уж е луда по вас това също е съвсем нормално за нея. Не я оставяйте и да ви забрави - случва и се непрекъснато. Промяната е в нейната природа. Разправят, че ако се ожените за Близнаци сте имали няколко съпруги едновременно - не знам сигурно е вярно. Аз лично бих се объркал напълно. :-) 
<br /><br />

<a href="maj-bliznaci.php">Мъж Близнаци</a><br />
<a href="bliznaci.php">Зодия Близнаци </a>


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
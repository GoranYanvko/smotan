<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Жената Телец</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, Жената Телец, дани, любопитно, телец , мъж, жена, овца, телец, telez, telec " />
            <meta name="description" content="Жената Телец, всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Жената Телец</h5>

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

Жените Телец са привлекателни и земни дами, с особен зрял сексапил. Трудно е да пренебрегнете мнението им и да не забелязвате желанията им. Те имат прекрасна визия какво искат от живота си и ако вие не смятате да потвърдите тези им намерения, нямате много шансове наоколо. Не тръгвайте на среща с момиче Телец, ако не смятате, че можете да си позволите качествени питиета, качествени разговори, на качествени теми. Не, че тя ще ви зареже ако и поръчате водка Savoy, (както навярно би направила величествената Лъвица), но със сигурност е добре за общото ви бъдеще да предпочетете Finlandia, Jim Beam или поне малко Johnny с лед. Тя просто обича хубавите неща, меките завивки, чистите чаршафи, закуската в леглото, декларираното внимание. Не се вързвайте ако ви твърди обратното! В замяна ще ви отговори с много нежност и ще създава около вас омагьосващ уют. 
Майчинските и инстинкти са изключително силни и децата ви много ще обичат понякога строгата си, но много любвеобилна и грижовна майка. Тези жени са в състояние да не мигнат с дни, само защото хлапето има лека температура. 
<br /><br />
В леглото си не очаквайте да е драматична актриса като Везни или различна като Близнаци. Но все пак това е страстта на Бик! Макар и дама преди това, в леглото може да се превърне в тигрица. Любовта и е пряма, честна и топла. Тя не си играе игрички (или ако го прави няма как да я хванете). Рядко е екстравагантна, облича се практично и удобно, като разчита на сексапила под дрехите, а не на този от тях. 
<br /><br />

<a href="telec.php">Зодия телец</a><br />
<a href="maj-telec.php">Мъжът Телец </a>



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
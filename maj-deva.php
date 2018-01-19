<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Мъжът Дева</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="зоди, дева, дани, любопитно , мъж, жена, deva, dewa" />
            <meta name="description" content="Мъжът Дева , всиюко за зодиакалния знак - научете кой е подходящата ви зодиакална половинка и още любопитни неща " />
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
		<h5>Мъжът Дева</h5>

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
Мъжът Дева е готин, фин, изтънчен и умен господин, който предпочита момичетата да го преследват, отколкото той да гони някоя ефирна госпожица. Понякога е нервен и критичен, но в общия случай с любопитство оглежда света наоколо и се опитва да го подреди по свой вкус. За него връзката и семеството е дълг и отговорност. Чудесен приятел е, но за романтиката ще трябва да се понапънете лекичко. И да бъдете точна на първата среща, за да има и следваща. 
<br /><br />Провокирайте го, но без да го вадите от равновесие - не винаги е лесно, но няма лесни неща на този свят. Трябва да положите някакви усилия… 
<br /><br />
Сещам се за един свой приятел Дева - докато неговата бъдеща съпруга (тогава още само колежка) въздишаше по него - той дори не загряваше, че момичето (също Дева) има сериозни чувства към него. Занимаваше се с учене, с участия в рок-групи, дори се зазяпваше в други момичета, докато тя тихо и предано присъстваше около него. Трябваше да минат две-три години за да стопли човека, че не гледа в посоката, в която е нужно, после още една за да си напаснат протокола на общуване и да се огледат един в друг и след това след още година се ожениха. Сега вероятно вече са с усещането, че са родени един за друг - любовта им е стабилна, нормална и истинска - каквато само две Деви могат да сътворят. 
<br /><br />



<a href="deva.php">Зодия Дева</a><br />
<a href="jena-deva.php">Жена Дева</a>



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
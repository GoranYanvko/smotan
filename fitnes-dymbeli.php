<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тренировката с дъмбели за раменния пояс</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="фитнес, дъмбели, рамо, тренировка, предимство, форма, тежести, трениран, мускул" />
            <meta name="description" content="предимства при тренировка с дъмбели  за раменния пояс . 1.тренировката с дъмбели дава възможност да се използва по-ефективно гравитацията, тъй като дъмбелите се спускат право надолу, перпендикулярно на рамената ..." />
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
<h5>Тренировката с дъмбели за раменния пояс</h5>

<img src="stati/muskuli.jpg" width="180" height="200" alt="мускули" border="0" />

Ето и пет предимства при тренировка с дъмбели  за раменния пояс .<br /><br />

1. Тренировката с дъмбели дава възможност да се използва по-ефективно гравитацията, тъй като дъмбелите се спускат право надолу, перпендикулярно на рамената. Когато се използва щанга, тя се изнася пред рамената, за да не се удари главата.
<br /><br />
2. Движението на дъмбелите право по посока на земното притегляне активизира силно средната глава и допринася за цялостното развитие на рамената.
<br /><br />
3. Използването на дъмбели въздейства по-силно върху делтовидния мускул, защото без щанга се намалява стабилността, която насочва акцента върху тръбните мускули, и по-точно трапецовидния и ромбоидните мускули.
<br /><br />
4. Дъмбелите позволяват да се движим естествено, поради вече споменатата посока на гравитационните сили. Щангата ни принуждава да накланяме главата си назад, за да и дадем възможност да мине пред лицето ни. При това има опасност да се наведем твърде много назад. Това извиване на гърба натоварва поясната област и може да блокира междупрешленните стави.
<br /><br />
5. Тренировката с дъмбели дава възможност и за по-голяма амплитуда на движение, тъй като те се събират един до друг в горната точка. Това води до стягане на делтовидните мускули.

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
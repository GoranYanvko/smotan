<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Testove , Efedmebem unpnqjno , P`gbkewemhe h g`a`bkemhe - TESTOVEBG.COM</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="test , testove , TEST , reqr reqrnbe , k~anb , love , teen , unpnqjno mslepknch reqrnbe p`gbkewemhe hcph gndhh , qzmnbmhj" />
            <meta name="description" content="TEST - Reqrnbe m` p`gkhwmh relh , efedmebem unpnqjno h mslepnknch , c`d`mhe , p`gbkewemhe, hcph h nye ..." />
	<link href="style.css" rel="stylesheet" type="text/css" />

<script language="javascript">

var win = null;

function NewWindow(mypage,myname,w,h,scroll){

LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;

TopPosition = (screen.height) ? (screen.height-h)/2 : 0;

settings =

'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'

win = window.open(mypage,myname,settings)

}



</script>

</head>
<body>
<div id="center">
	<div id="header">
	<h1>Testovebg.com</h1>
	<h2>... Hqrhm`r` g` fhbnr`</h2>
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
			<span>Bund</span>
			<form action="login.php" method="post" enctype="application/x-www-form-urlencoded" name="login">
			<span class="info">E-mail</span>
			<input class="intext" name="email" type="text" />
			<span class="info">O`pnk`</span>
			<input class="intext" name="password" type="password" />
			<input id="submit" name="login" type="submit" value="Bund" />
			</form>
			<a href="login.php">Peceqrphp`i qe!</a>
			<a href="login.php">G`ap`bem` o`pnk`</a>

		</div>

	</div>
	
	<div id="rightside">
		
<?

if (!(file_exists("posledno_novo.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("posledno_novo.dat","r");
   $fo=fread($fp,2500);
echo "$fo";

}

?>

	</div>
	
	<div id="middle">
		<h5>Bzgmhjm` cpexj` Me qre/ME lnfe d` qe pechqrphp`re</h5><br />


		
		<div id="line"></div>
		<div id="middleleft">
		<p>
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
<p>
<?

if (!(file_exists("statiq2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("statiq2.dat","r");
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
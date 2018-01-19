<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Пожелания</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="пожелания, ПОЖЕЛАНИЯ, рожден ден, имен ден, коледа, нова година, ден, смс, любовни" />
            <meta name="description" content="Пожелания за всеки повод, пожелания за рожден ден, имен ден, коледа, нова година, любовни смс и други" />
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
<center>
<table border="0" >
<tr>

      <td>
                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" >

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-rd.php">

                                         <img src="pojelaniq/rd.png" width="120" height="120" alt="Рожден ден" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-rd.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Пожелания за Рожден ден

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>
      </td>
      <td>

                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-imenden.php">

                                         <img src="pojelaniq/imenden.jpg" width="120" height="120" alt="Имен ден" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-imenden.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Пожелания за Имен ден 

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>

     </td>
     <td>

                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-valentin.php">

                                         <img src="http://teen-best-jpg.hit.bg/stati-love.jpg" width="120" height="120" alt="vudo" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-valentin.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Валентинки

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>

    </td>


</tr>
<tr>
    <td>
                   <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-koleda.php">

                                         <img src="pojelaniq/koleda.jpg" width="120" height="120" alt="photo magic" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-koleda.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Коледа

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>

      </td>
      <td>
                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-ng.php">

                                         <img src="pojelaniq/ng.jpg" width="120" height="120" alt="kabala" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-ng.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Нова година

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>
       </td>
       <td> 
                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="pojelaniq-8.php">

                                         <img src="pojelaniq/8-mi.jpg" width="120" height="120" alt="magic dream" border="0" />

                                      </a><br /><center>

                                       <a href="pojelaniq-8.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    8-ми Март

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       </tr>

                </table>
       </td>
   </tr>
   
</table>
</center>

		
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
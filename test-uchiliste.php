<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тестове по предметите в училище</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="тест, училище, биология, български език, география, България, немски, физика, език" />
            <meta name="description" content="Тестове по предметите в училище, които ще ви помогнат да повишите познанията си в дадена област както и да прецените колко добре сте овладели материала" />
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
<td>&nbsp;</td>
      <th>
          Български език     
    </th>
   </tr>

<tr>
   <td>
  <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bg-1.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-bg-1.jpg" width="120" height="120" alt="сърце" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bg-1.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Тропи и фигури 10 клас
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>

   </td>
  <td>
              <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bg-2.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-bg-2.jpg" width="120" height="120" alt="u4iliste" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bg-2.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Кои са правилно изписаните думи
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
  <td>
                <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bg-3.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-bg-3.jpg" width="120" height="120" alt="uchen" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bg-3.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Тест за кандидат-гимназисти
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
</tr>
</tr>
  <td>
                <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bg-4.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-bg-4.jpg" width="120" height="120" alt="сърце" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bg-4.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Тест по Българско език 
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
</tr>
<tr>
  <th>&nbsp;</th>
  <th>Биология</th>
</tr>
<tr>
  <td>
                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bio-1.php">
                                         <img src="http://web.jjay.cuny.edu/~acarpi/NSC/images/cell.gif" width="120" height="120" alt="сърце" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bio-1.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Основни познания за клетката 
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
   </td>
   <td>
               <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">
                            <td>
                                <div style="padding:5px ">
                                      <a href="test-predmet-bio-2.php">
                                         <img src="http://www.tchaikapharma.com/mambo/images/tch/ss/ss-sistema_clip_image011.jpg" width="120" height="120" alt="cell" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bio-2.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Сърце
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
   </td>
   <td>
              <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bio-3.php">
                                         <img src="test/bio-9.jpg" width="120" height="120" alt="biologia" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bio-3.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Обща биология 9 клас
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
   </td>
</tr>
<tr>
   <td>
            <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-bio-4.php">
                                         <img src="test/bio-9.jpg" width="120" height="120" alt="biologiq" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-bio-4.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Обща биология 9 клас 2
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
 </td> 
</tr>
<tr>
  <td>&nbsp;</td><th>География</th>
</tr>
<tr>
  <td>               <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-geo-1.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-geo.jpg" width="120" height="120" alt="zemqta" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-geo-1.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Земята като небесно тяло. 
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
  <td>
                <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-geo-2.php">
                                         <img src="http://testove-kartinki.hit.bg/test-predmet-geo-2.jpg" width="120" height="120" alt="nebe" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-geo-2.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Климат на Земята
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
  <td>
     <table border="3" bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-predmet-geo-3.php">
                                        <img src="http://www.ayanev.com/wp-content/uploads/2006/11/Bulgaria-Sightseeing-Map-Locations.jpg" width="120" height="120" alt="nebe" border="0">
                                      </a><br /><center>
                                       <a href="test-predmet-geo-3.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    География на България
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
  </td>
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
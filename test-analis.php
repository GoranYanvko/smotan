<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тестове за самоанализ и оценка</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="тест, личност, анализ, аналис, анализи, тестове, самоанализ" />
            <meta name="description" content="Тестове за самооценка за да разберете какво се крие вътре във ваз, това което неможе да си признаете на глас" />
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
                 <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-sebe-1.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-1.jpg" width="120" height="120" alt="nindja" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-1.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Можете ли да се забавлявате
                                                </font>
                                          </a><br />
                                      </center>  
                               </div>
                            </td>
                       <tr>
                </table>
      <td>

                  <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-sebe-2.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-2.gif" width="120" height="120" alt="nindja" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-2.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Избухливи ли сте ?
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
                                      <a href="test-sebe-3.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-3.gif" width="120" height="120" alt="nindja" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-3.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Човек на риска ли сте ?
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
                <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">
                      <tr valign="top">
                            <td>
                                 <div style="padding:5px ">
                                      <a href="test-sebe-4.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-4.jpg" width="120" height="120" alt="кола car" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-4.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Коя кола е най-подходяща за вас
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
                                      <a href="test-sebe-5.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-5.gif" width="120" height="120" alt="hitrec" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-5.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Хитрец ли сте
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
                                      <a href="test-sebe-6.php">
                                         <img src="http://testove-kartinki.hit.bg/test-sebe-6.gif" width="120" height="120" alt="кола car" border="0">
                                      </a><br /><center>
                                       <a href="test-sebe-6.php">
                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">
                                                    Имате ли шесто чувство
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
        <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="test-sebe-7.php">

                                         <img src="http://testove-kartinki.hit.bg/test-sebe-7.jpg" width="120" height="120" alt="nindja" border="0">

                                      </a><br /><center>

                                       <a href="test-sebe-7.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Умеете ли да спорите

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

                                      <a href="test-sebe-8.php">

                                         <img src="http://testove-kartinki.hit.bg/test-sebe-8.jpg" width="120" height="120" alt="nindja" border="0">

                                      </a><br /><center>

                                       <a href="test-sebe-8.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Какъв характер сте ?

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

                                      <a href="test-sebe-9.php">

                                         <img src="http://testove-kartinki.hit.bg/test-sebe-9.jpg" width="120" height="120" alt="nindja" border="0">

                                      </a><br /><center>

                                       <a href="test-sebe-9.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Имате ли чувство за хумор ?

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
                <table border="3"bordercolor="#000000" cellpadding="0" cellspacing="0" bgcolor="#ffffff" width="120" height="200">

                      <tr valign="top">

                            <td>

                                 <div style="padding:5px ">

                                      <a href="test-sebe-10.php">

                                         <img src="http://www.blog.newsweek.com/photos/tipsheettest/images/138638/600x379.aspx" width="120" height="120" alt="кола car" border="0">

                                      </a><br /><center>

                                       <a href="test-sebe-10.php">

                                                <font color="#000000" size="1" onMouseOver="this.style.textDecoration ='underline'" onMouseOut="this.style.textDecoration=''">

                                                    Ще успеете ли в живота ?

                                                </font>

                                          </a><br />

                                      </center>  

                               </div>

                            </td>

                       <tr>

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
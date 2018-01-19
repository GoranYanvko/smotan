<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тест за Тропи и Фигури по Български език</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="тропи фигури български език тест познания училище 10 клас десети студент кандидат" />
            <meta name="description" content="Тест по Български език на тема Тропи и Фигори от изочавания материал в 10 клас" />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<5) {text="Слаби резултати.";}
		if ((count>4)&&(count<6)) {text="Добри познания, но не достатачни.";}
		if (count>5) {text="Отлични познания.";}

  myWin= open("", "displayWindow", 
    "width=500,height=200,scrollbars=yes,menubar=no");
  myWin.document.open();
  myWin.document.write("<html><head><title>Резултат от теста");
  myWin.document.write("</title></head><body bgColor=F2E1C4>");
  myWin.document.write("<center><small>");
  myWin.document.write(text);
  myWin.document.write("<br />______________________________________<br />");
  myWin.document.write("</small></center>");
  myWin.document.write("</body></html>");
  myWin.document.close();  }
-->
    </SCRIPT>

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

<h5>Тест върху тропи и фигури 10 клас</h5>
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0">
  <TBODY>
  <TR>
    <TD>
           <b>1. Тропите са:</b>
      <FORM>
           <INPUT onclick=r1=0 type=radio value=V1 name=R1> 
                          <tt>Елементи на мисълта, които се реализират позиционно;</tt>
<br />                     
           <INPUT onclick=r1=1 type=radio value=V2 name=R1> 
                         <tt>Резултат от сравнение на процеси и явления, като се изтъква общото между тях;</tt>
<br />
           <INPUT onclick=r1=0 type=radio value=V3 name=R1> 
                         <tt>Части на речта</tt>

      </FORM>

       <b>  2. Метафора е:</b>

      <FORM>
           <INPUT onclick=r2=0 type=radio value=V1 name=R2> 
                        <tt>Обозначаване на предмети чрез замяната му с друг;</tt>
                  <br />
           <INPUT onclick=r2=1 type=radio value=V2 name=R2> 
                          <tt>Пренасяне на свойства от един предмет на друг, въз основа на някакво сходство; </tt>
<br />
           <INPUT onclick=r2=0 type=radio value=V3 name=R2> 
                          <tt>Характерно за басните изразно средство;</tt>

     </FORM>


         <b> 3. Алитерацията е: </b>
     <FORM>
            <INPUT onclick=r3=0 type=radio value=V1 name=R3> 
                 <tt>Струпване на съгласни</tt>
                <br />
           <INPUT onclick=r3=0 type=radio value=V2 name=R3> 
                  <tt>струпване на едни и същи гласни със стилистичен ефект</tt>
                <br />
           <INPUT onclick=r3=1 type=radio value=V3 name=R3> 
                  <tt>Повторението на съгласни със стилистичен ефект</tt>


      </FORM>

         <b> 4. Анаколут е:</b>

      <FORM>
                <INPUT onclick=r4=0 type=radio value=V1 name=R4> 
                      <tt>Пренасяне на част от думата или израза от един стих на друг</tt>
                     <br />
                <INPUT onclick=r4=0 type=radio value=V2 name=R4> 
                    <tt>Игрословие</tt>
                     <br />
                <INPUT onclick=r4=1 type=radio value=V3 name=R4> 
                     <tt>Недоизказване, замълчаване, многоточия в текста</tt>

      </FORM>
 
        <b> 5. Хиперболата е: </b>

      <FORM>
                <INPUT onclick=r5=1 type=radio value=V1 name=R5> 
                       <tt>Преувеличение</tt>
                     <br />
                <INPUT onclick=r5=0 type=radio value=V2 name=R5> 
                       <tt>Разместване на думи</tt>
                     <br />
                <INPUT onclick=r5=0 type=radio value=V3 name=R5> 
                     <tt>Преносно значение</tt>
     </FORM>

         <b>6. "Чета Ботева" е:</b>
 
      <FORM>
             <INPUT onclick=r6=0 type=radio value=V1 name=R6> 
                       <tt>Метафора</tt>
                  <br />
             <INPUT onclick=r6=1 type=radio value=V2 name=R6> 
                       <tt>Метонимия</tt>
                  <br />
             <INPUT onclick=r6=0 type=radio value=V3 name=R6>  
                        <tt>Постоянен епитет</tt>
      </FORM>
      <FORM>

                 <P align=center><INPUT onclick=CountRez() type=button value=Изчисли name=B1> 
              </P>
              <P align=center><?

if (!(file_exists("reklama2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>
              </P>


           





     </FORM></TD>

    </TR></TBODY></TABLE>

		
		<div id="line"></div>
		<div id="middleleft">

<?

if (!(file_exists("test-link1.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("test-link1.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
			
		</div>
		
		<div id="middleright">

<?

if (!(file_exists("test-link2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("test-link2.dat","r");
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
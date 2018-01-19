<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Човек на риска ли сте</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="риск, хазарт, комар, тест, покер" />
            <meta name="description" content="Проверете с този тест дали сте човек на риска, дали обичате високото ниво на адреналин в кръвта си и още много тестове за себе анализ..." />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<10) {text="Да заложите всичко на една карта - Да това е вашата съдба - човек на риска, който просто не може да понася нивото на ниския адреналин в себе си. Полудяващ от монотоноста на ежедневието, имащ нужда от непрекъснато нови и нови изживявания.";}
		if ((count>9)&&(count<17)) {text="Вие сте човек на умереният риск знаете докъде може да стигнете така че да не изгубите всичко. Вие сте човек, който може да улов късмета си в точния момент и да направя велики неща с него. Екстремните преживявания са част от вас и вие не можете и не искате да избягате от тях.";}
		if (count>16) {text="Вие се чувствате спокойни във вашата кожа. Никой не може да ви накара да направите нещо не обмислено. Живота е пред вас и вие мислете да го изживеете до спокойни старини, без да има сътресения по него. По скоро предпочитате една спокойна почивка на морето да гледате вълните и летящите птички, отколкото да скачате с парашут или бънджи.";}

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

<h5>Човек на риска ли сте ?</h5>
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0">
  <TBODY>
  <TR>
    <TD>
         <b> 1. Обичате ли изгледите сред природата?</b>
      <FORM>
           <INPUT onclick=r1=4 type=radio value=V1 name=R1> 
                        <tt>  Да, обожавам ги.</tt>
                     <BR>
           <INPUT onclick=r1=2 type=radio value=V2 name=R1> 
                       <tt>   Нямам нищо против.</tt>
                     <BR>
           <INPUT onclick=r1=0 type=radio value=V3 name=R1> 
                        <tt> НЕ, много са досадни.</tt>
      </FORM>

       <b>  2. Кое животно от посочените ви харесва най-много ?</b>

      <FORM>
           <INPUT onclick=r2=4 type=radio value=V1 name=R2> 
                           <tt>Петел.</tt>
                  <BR>
           <INPUT onclick=r2=2 type=radio value=V2 name=R2> 
                           <tt> Вълк.</tt>
                  <BR>
           <INPUT onclick=r2=1 type=radio value=V3 name=R2> 
                         <tt>  Леопард.</tt>
                  <BR>
           <INPUT onclick=r2=0 type=radio value=V3 name=R2>
                       <tt>    Лъв.</tt>
     </FORM>

       <b>   3. Можете ли да карате сърф/скеит/ролери?</b>

     <FORM>
            <INPUT onclick=r3=4 type=radio value=V1 name=R3> 
                  <tt>Не мога изобщо</tt>
                <BR>
           <INPUT onclick=r3=2 type=radio value=V2 name=R3> 
                  <tt> Не много добре</tt>
               <BR>
           <INPUT onclick=r3=0 type=radio value=V3 name=R3> 
                <tt>  ДА.</tt>
      </FORM>

        <b>  4. Бихте ли изтеглили кредит, за да си купите кола?</b>

      <FORM>
                <INPUT onclick=r4=4 type=radio value=V1 name=R4> 
                   <tt>   НЕ.</tt>
                     <BR>
                <INPUT onclick=r4=0 type=radio value=V3 name=R4> 
                    <tt>  ДА.</tt>
      </FORM>
 
         <b>5. Бихте ли се доверили на късмета си. </b>

      <FORM>
                <INPUT onclick=r5=3 type=radio value=V1 name=R5> 
                      <tt>  НЕ</tt>
                     <BR>
                <INPUT onclick=r5=2 type=radio value=V2 name=R5> 
                      <tt>  По скоро да аз имам добър късмет.</tt>
                     <BR>
                <INPUT onclick=r5=1 type=radio value=V2 name=R5> 
                      <tt>  По скоро не, в живота не ми върви много.</tt>
                     <BR>
                <INPUT onclick=r5=0 type=radio value=V3 name=R5> 
                     <tt>  Да, аз имам добър късмет.</tt>
     </FORM>

        <b> 6. Ако ви предложат безплатен скок с парашут:</b>
 
      <FORM>
             <INPUT onclick=r6=4 type=radio value=V1 name=R6> 
                        <tt>  Отхвърлям категорично.</tt>
                  <BR>
             <INPUT onclick=r6=2 type=radio value=V2 name=R6> 
                        <tt>Ще обмисля предложението.</tt>
                  <BR>
             <INPUT onclick=r6=0 type=radio value=V3 name=R6>  
                      <tt> Приемам без да мисля.</tt>
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
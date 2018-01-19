<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Ще успеете ли в живота ?</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="успех, живот, личен, постижения" />
            <meta name="description" content="Проверете дали ще ви провърви в живота, дали ще преуспеете или ще затъните - ТЕСТ" />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<10) {text="Бъдещето за вас не изглежда розово ! С досегашните ви интереси и приоритети звездната пътека изпълнена с мъгла. Ако искате да успеете в живота огледайте се и вижте какво може да промените.";}
		if ((count>9)&&(count<17)) {text="За да имате успешно бъдеще ще трябва много да се трудите, нищо няма да ви идва на готово. В семейния живот ще имате трудности но с любов ще успявате да ги преодолеете В работата ще се заблъсквате с карериаристи които с лекото ще ви задминават. Ако искате да успеете ще трябва да си поставяте точни цели.";}
		if (count>16) {text="Дали ще успеете ? Определено Да. Вашето бъдеще е огряно от безброй светли лъчи, ще успявате да жънете всичко с лекота. Ще съградите дом изпълнен с любов и детски смях. Добра заплата и професионално развитие ще бъдат част от вашите светли дни. ";}

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

<h5>Ще успеете ли в живота ?</h5><br />
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0">

  <TBODY>

  <TR>

    <TD>
         <b> 1. Обичате ли да се забавлявате ?</b>
      <FORM>

           <INPUT onclick=r1=4 type=radio value=V1 name=R1> 

                        <tt> ДА</tt>

                     <br />

           <INPUT onclick=r1=0 type=radio value=V2 name=R1> 

                       <tt>НЕ</tt>

                     <br />

           <INPUT onclick=r1=2 type=radio value=V3 name=R1> 

                        <tt>Не много</tt>

      </FORM>



       <b>  2. В училище</b>



      <FORM>

           <INPUT onclick=r2=4 type=radio value=V1 name=R2> 

                           <tt>Аз съм зубъра</tt>

                  <br />

           <INPUT onclick=r2=2 type=radio value=V2 name=R2> 

                           <tt>Преписвача</tt>

                  <br />

           <INPUT onclick=r2=0 type=radio value=V3 name=R2> 

                         <tt>Нормалния</tt>

     </FORM>



       <b>   3. Ако спечелите много пари от тото ще ги:</b>



     <FORM>

            <INPUT onclick=r3=0 type=radio value=V1 name=R3> 

                  <tt>Похарча за кола и дрехи</tt>

                <br />

           <INPUT onclick=r3=4 type=radio value=V2 name=R3> 

                  <tt>Ще ги инвестирам</tt>

               <br />

           <INPUT onclick=r3=2 type=radio value=V3 name=R3> 

                <tt>Ще си купя апартамент</tt>

      </FORM>



        <b>  4. Колко деца искате да имате ?</b>



      <FORM>

                <INPUT onclick=r4=0 type=radio value=V1 name=R4> 

                   <tt> Не искам деца</tt>

                     <br />

                <INPUT onclick=r4=4 type=radio value=V3 name=R4> 

                    <tt>Минимум 2</tt><br />

                <INPUT onclick=r4=2 type=radio value=V3 name=R4> 

                    <tt>Едно ми стига</tt>

      </FORM>

 

         <b>5. Склони ли сте към измами:</b>



      <FORM>

                <INPUT onclick=r5=2 type=radio value=V1 name=R5> 

                      <tt>Зависи от измамата</tt>

                     <br />

                <INPUT onclick=r5=0 type=radio value=V2 name=R5> 

                      <tt>НЕ</tt>

                     <br />

                <INPUT onclick=r5=4 type=radio value=V2 name=R5> 

                      <tt>Определено да</tt>



     </FORM>



        <b> 6. През свободното си време вие:</b>

 

      <FORM>

             <INPUT onclick=r6=4 type=radio value=V1 name=R6> 

                        <tt>Предпочитам да разпускам с приятели</tt>

                  <br />

             <INPUT onclick=r6=0 type=radio value=V2 name=R6> 

                        <tt>Да гледам телевизия</tt>

                  <br />

             <INPUT onclick=r6=2 type=radio value=V3 name=R6>  

                      <tt>Да уча</tt>

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
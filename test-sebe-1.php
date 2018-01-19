<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Можете ли да се забавлявате</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content=" Можете ,ли да се, забавлявате, test, fun, smeshno" />
            <meta name="description" content="Тест - Можете ли да се забавлявате. Себеанализ на това дали наистина вие можете да се забавлявате." />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<10) {text=" Определено имате лек проблем с купоните. Нужни са ви в много по глеми количества, за да може да се отпуснете и да се забавлявате истински. В компанията вашето мнение не се чува, а вие се съобразявате с това, което налагат лидерите. Страдате може би от ниско самочувствие. Трябва да поработите над себеотвръждавантео си. ";}
		if ((count>9)&&(count<17)) {text="Определено вие сте човек, който може да се забавлява и го правите от сърце. Винаги сте канени на купона, а за вас той продължава докато се изморите. Не се съобразявате много много с менението на другите и си правите вашето шоу.";}
		if (count>16) {text="Купонджия от класа - това е определение точно за вас. вашата щуротия(в добрия смисал) няма край. Вие винаги сте центъра на купона и без вас той ще пропадне. Когато стани дума за купон вие ще първия човек, който ще поканят. ";}

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

<h5>Можете ли да се забавлявате ? </h5>
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0">
  <TBODY>
  <TR>
    <TD>
           <b>1. Компанията ви е от:</b>
      <FORM>
           <INPUT onclick=r1=4 type=radio value=V1 name=R1> 
                          повече от 15 човека.
                     <BR>
           <INPUT onclick=r1=2 type=radio value=V2 name=R1> 
                         Между 10 и 15 човека.
                     <BR>
           <INPUT onclick=r1=0 type=radio value=V3 name=R1> 
                         по-малко от 10 човека.
      </FORM>

         <b>2. Колко често ходите по купони?</b>

      <FORM>
           <INPUT onclick=r2=4 type=radio value=V1 name=R2> 
                           В месеца минимум на 2.
                  <BR>
           <INPUT onclick=r2=2 type=radio value=V2 name=R2> 
                            Когато има купон съм там.
                  <BR>
           <INPUT onclick=r2=0 type=radio value=V3 name=R2> 
                           Вече не си спомням от кога не съм ходил.
     </FORM>

         <b> 3. Може ли купон без алкохол?</b>

     <FORM>
            <INPUT onclick=r3=4 type=radio value=V1 name=R3> 
                   Щом си в яка компания може и без.
                <BR>
           <INPUT onclick=r3=2 type=radio value=V2 name=R3> 
                    Трябва да има алкохол, но и яки хора и музика.
               <BR>
           <INPUT onclick=r3=0 type=radio value=V3 name=R3> 
                    За да бъде весело трябва много алкохол.
      </FORM>

        <b>  4. Музиката на която се кефите по дискотеки/купони:</b>

      <FORM>
                <INPUT onclick=r4=4 type=radio value=V1 name=R4> 
                       Слушам всякаква музика.
                     <BR>
                <INPUT onclick=r4=2 type=radio value=V2 name=R4> 
                       Харесвам повечето стилове, но най-дивея на моя стил.
                     <BR>
                <INPUT onclick=r4=0 type=radio value=V3 name=R4> 
                      Трябва да пускат песни от моя стил за да се кефя.
      </FORM>
 
        <b> 5. Танцувате ли: </b>

      <FORM>
                <INPUT onclick=r5=4 type=radio value=V1 name=R5> 
                        Разбивам се от танци по дискотеките.
                     <BR>
                <INPUT onclick=r5=2 type=radio value=V2 name=R5> 
                        Мога да танцувам, когато ми се иска.
                     <BR>
                <INPUT onclick=r5=0 type=radio value=V3 name=R5> 
                       Танцувам като пергел.
     </FORM>

        <b> 6. Мислите ли, какво ще кажат околните за начина, по който дивеете? </b>
 
      <FORM>
             <INPUT onclick=r6=4 type=radio value=V1 name=R6> 
                         Няма да си провалям забавата заради някой завистник.
                  <BR>
             <INPUT onclick=r6=2 type=radio value=V2 name=R6> 
                        По-скоро не ми пука.
                  <BR>
             <INPUT onclick=r6=0 type=radio value=V3 name=R6>  
                         Мнението на другите е много важно за мен.
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
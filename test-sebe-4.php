<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Подходящата кола за вас - Опел , Мерцедес , Пежо </title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Подходящата, кола, за вас, - Опел , Мерцедес , Пежо " />
            <meta name="description" content="Проверете с този тест дали сте човек на риска, дали обичате високото ниво на адреналин в кръвта си и още много тестове за себе анализ..." />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<10) {text="Най-подходяща кола за вас е Опел.";}
		if ((count>9)&&(count<17)) {text="Подходящата кола за вас е Пежо.";}
		if (count>16) {text=" Най-подходяща кола за вас е Мерцедес";}

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

<h5>Подходящата кола за вас - Опел , Мерцедес , Пежо </h5><br />
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0">
  <TBODY>
  <TR>
    <TD>
         <b> 1. В колата вие обичате:</b>
      <FORM>
           <INPUT onclick=r1=4 type=radio value=V1 name=R1> 
                        <tt>  Елегантността</tt>
                     <br />
           <INPUT onclick=r1=2 type=radio value=V2 name=R1> 
                       <tt>  Скоростта </tt>
                     <br />
           <INPUT onclick=r1=0 type=radio value=V3 name=R1> 
                        <tt> Традициите</tt>
      </FORM>

       <b>  2. При покупка на кола ще гледате:</b>

      <FORM>
           <INPUT onclick=r2=4 type=radio value=V1 name=R2> 
                           <tt>По висока кола - критерии за качество.</tt>
                  <br />
           <INPUT onclick=r2=2 type=radio value=V2 name=R2> 
                           <tt> Кола на средна цена с добро качество.</tt>
                  <br />
           <INPUT onclick=r2=1 type=radio value=V3 name=R2> 
                         <tt>  Скромна цена без значение за качеството.</tt>
     </FORM>

       <b>   3. Екс трите в колата:</b>

     <FORM>
            <INPUT onclick=r3=4 type=radio value=V1 name=R3> 
                  <tt>Те са много важни</tt>
                <br />
           <INPUT onclick=r3=2 type=radio value=V2 name=R3> 
                  <tt>Абе каквото има</tt>
               <br />
           <INPUT onclick=r3=0 type=radio value=V3 name=R3> 
                <tt> Стига да има волан, друго не ми трябва.</tt>
      </FORM>

        <b>  4. Предпочитания цвят за кола?</b>

      <FORM>
                <INPUT onclick=r4=4 type=radio value=V1 name=R4> 
                   <tt>  Бял</tt>
                     <br />
                <INPUT onclick=r4=2 type=radio value=V3 name=R4> 
                    <tt> Черен</tt><br />
                <INPUT onclick=r4=0 type=radio value=V3 name=R4> 
                    <tt> Син</tt>
      </FORM>
 
         <b>5. Тунинг по моята кола:</b>

      <FORM>
                <INPUT onclick=r5=3 type=radio value=V1 name=R5> 
                      <tt>  Нещо, което ще си направя със сигурност</tt>
                     <br />
                <INPUT onclick=r5=2 type=radio value=V2 name=R5> 
                      <tt>  По скоро яко</tt>
                     <br />
                <INPUT onclick=r5=1 type=radio value=V2 name=R5> 
                      <tt>  По скоро не е яко</tt>
                     <br />
                <INPUT onclick=r5=0 type=radio value=V3 name=R5> 
                     <tt>  Абсурд</tt>
     </FORM>

        <b> 6. Ако имахте 200 000лв щяхте:</b>
 
      <FORM>
             <INPUT onclick=r6=4 type=radio value=V1 name=R6> 
                        <tt> Да си купя колата на моите мечти.</tt>
                  <br />
             <INPUT onclick=r6=2 type=radio value=V2 name=R6> 
                        <tt>Ще си купя някоя кола от средната класа.</tt>
                  <br />
             <INPUT onclick=r6=0 type=radio value=V3 name=R6>  
                      <tt> Нещо евтино за малак човек.</tt>
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
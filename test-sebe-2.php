<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Лесно ли ви вдигат кръвното - избухливи ли сте</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Лесно, ли ви, вдигат, кръвното, -, избухливи," />
            <meta name="description" content="Проверете с тест дали вашето кръвно се вдига лесно. В състояние ли е някой да ви изнерви. Можете ли да се контролирате? Проверете с този прост тест..." />
	<link href="style.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JAVASCRIPT">
<!--
var r1=4, r2=4, r3=4, r4=4, r5=4, r6=4, r7=4, r8=4
var text=""
	function CountRez() {
		var count=0;
		count=(r1+r2+r3+r4+r5+r6);

		if (count<10) {text=" Вулкан е вашето второ име. Избухлив и нервен нрав ви преследва през целия би живот. Там кадете сте вие небето става мрачно и мълни яростно трещят. ";}
		if ((count>9)&&(count<17)) {text="Вие сте уравновесен човек с идеалния баланс между избухливост и спокойствие. Не избухвате без причина, но си и мълчите когато трябва.";}
		if (count>16) {text="Вие сте един изключително спокоен човек. Мога да пожелая само успех на този, който реши да ви изкара извън релси, защото по скоро ще накара слънцето да залези от колкото вас да избухнете .";}

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
          <b> 1. Как ще реагирате, ако кондуктора в градския транспорт се здъвчи с някой от пътниците? </b>
      <FORM>
           <INPUT onclick=r1=4 type=radio value=V1 name=R1> 
                         <tt> Не вземам участие</tt>
                     <br />
           <INPUT onclick=r1=2 type=radio value=V2 name=R1> 
                        <tt> Опитвам се да защитите този, който считам за прав</tt>
                     <br />
           <INPUT onclick=r1=0 type=radio value=V3 name=R1> 
                        <tt> Изкарвам си яда </tt>
      </FORM>

        <b> 2. Критикувате ли често хората над вас ? </b>

      <FORM>
           <INPUT onclick=r2=4 type=radio value=V1 name=R2> 
                            <tt> Никога</tt>
                  <br />
           <INPUT onclick=r2=2 type=radio value=V2 name=R2> 
                         <tt> Понякога</tt>
                  <br />
           <INPUT onclick=r2=0 type=radio value=V3 name=R2> 
                           <tt>Винаги</tt>
     </FORM>

         <b> 3. Често ли се карате с приятели? </b>

     <FORM>
            <INPUT onclick=r3=4 type=radio value=V1 name=R3> 
                  <tt> Никога не се карам с приятели</tt>
                <br />
           <INPUT onclick=r3=2 type=radio value=V2 name=R3> 
                   <tt> Само по принципни въпроси</tt>
               <br />
           <INPUT onclick=r3=0 type=radio value=V3 name=R3> 
                   <tt> Споровете са моята стихия</tt> 
      </FORM>

          <b>4. Какво ще направите, ако някой  качил се след вас в автобуса седне на свободното място преди вас? </b>

      <FORM>
                <INPUT onclick=r4=4 type=radio value=V1 name=R4> 
                       <tt>Ще го превъзмогна</tt>
                     <br />
                <INPUT onclick=r4=2 type=radio value=V2 name=R4> 
                       <tt>Правя забележка</tt>
                     <br />
                <INPUT onclick=r4=0 type=radio value=V3 name=R4> 
                       <tt>Вдигам луд скандал </tt>
      </FORM>
 
        <b> 5. Ако Ви поднесът в кафене вместо късо кафе дълго Вие: </b>

      <FORM>
                <INPUT onclick=r5=4 type=radio value=V1 name=R5> 
                        <tt>Не бих направил нищо</tt>
                     <br />
                <INPUT onclick=r5=2 type=radio value=V2 name=R5> 
                       <tt> Мълчаливо вземам кафето</tt>
                     <br />
                <INPUT onclick=r5=0 type=radio value=V3 name=R5> 
                       <tt>Правя забележка и моля да ми бъде подменено</tt>
     </FORM>

         <b>6. Ако в претъпкано заведение Ви залеят случайно, Вие:</b>
 
      <FORM>
             <INPUT onclick=r6=4 type=radio value=V1 name=R6> 
                          <tt>Възмущавам се мълчаливо</tt>
                  <br />
             <INPUT onclick=r6=2 type=radio value=V2 name=R6> 
                         <tt> Сухо правя забележка</tt>
                  <br />
             <INPUT onclick=r6=0 type=radio value=V3 name=R6>  
                         <tt>"Наказвам" виновника </tt>
      </FORM>
 
         <b> 7. Ако Ви подарят вещ, която не харесате, Вие: </b>

      <FORM>
             <INPUT onclick=r7=4 type=radio value=V1 name=R7> 
                      <tt> Приемам я мълчаливо</tt><br />
             <INPUT onclick=r7=2 type=radio value=V2 name=R7> 
                       <tt>Правя тактичен коментар</tt><br />
             <INPUT onclick=r7=0 type=radio value=V3 name=R7> 
                       <tt>Демонстрирате чувствата си </tt>
      </FORM>
 
       <b>  8. Как приемате неуспешните моменти в живота? </b>

      <FORM>
             <INPUT onclick=r8=4 type=radio value=V1 name=R8> 
                       <tt>Равнодушно, ще има и по добре</tt><br />
             <INPUT onclick=r8=2 type=radio value=V2  name=R8> 
                      <tt> Надявам се следващия път да успея</tt><br />
             <INPUT onclick=r8=0 type=radio value=V3 name=R8> 
                      <tt> Гръм и мълнии вилнеят в главата ми</tt>
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
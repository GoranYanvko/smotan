<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Тест по Български език за 7 клас</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="Български език тест 7 клас тестове testove test BG ezik, български, език, тест, тестове" />
            <meta name="description" content="Тест по Български език за кандидат-гимназисти" />
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

<h5>ОТГОВОРЕТЕ НА ВЪПРОСИТЕ</h5>
<TABLE cellSpacing="0" cellPadding="30" width="500" border="0"> 
  <TBODY> 
  <TR> 
    <TD>
           <b>1. В кой ред подчертаните думи имат различно речниково значение?</b>
      <FORM> 
           <INPUT onclick=r1=0 type=radio value=V1 name=R1>  
                          <tt>бодра <u>песен</u> - <u>Песента</u> ехти из полето.</tt> 
<br />                      
           <INPUT onclick=r1=0 type=radio value=V2 name=R1>  
                         <tt>тъмна <u>нощ</u> - Пътувахме през <u>нощта</u></tt> 
<br /> 
           <INPUT onclick=r1=1 type=radio value=V3 name=R1>  
                         <tt>рохкава <u>пръст</u> - Днес си порязах <u>пръста</u>.</tt> 
<br /> 
           <INPUT onclick=r1=0 type=radio value=V4 name=R1>  
                         <tt>китна <u>пролет</u> - През <u>пролетта</u> птиците вият гнезда</tt> 
      </FORM> 
 
       <b>  2. Кой израз се различава по смисъл от останалите?</b> 
 
      <FORM> 
           <INPUT onclick=r2=0 type=radio value=V1 name=R2>  
                        <tt>измислици </tt> 
                  <br /> 
           <INPUT onclick=r2=1 type=radio value=V2 name=R2>  
                          <tt>противоречия </tt> 
<br /> 
           <INPUT onclick=r2=0 type=radio value=V3 name=R2>  
                          <tt>празни приказки</tt> 
<br /> 
           <INPUT onclick=r2=0 type=radio value=V4 name=R2>  
                         <tt>бабини деветини</tt> 
 
 
     </FORM> 
 
 
         <b> 3. В кой ред думите са синоними? </b> 
     <FORM> 
            <INPUT onclick=r3=1 type=radio value=V1 name=R3>  
                 <tt>ценен - неоценим</tt> 
                <br /> 
           <INPUT onclick=r3=0 type=radio value=V2 name=R3>  
                  <tt>достигнат - недостижим</tt> 
                <br /> 
           <INPUT onclick=r3=0 type=radio value=V3 name=R3>  
                  <tt>необходим - ненужен</tt> 
                <br /> 
           <INPUT onclick=r3=0 type=radio value=V4 name=R3>  
                  <tt>неразбран - неразделен</tt> 
 
      </FORM> 
 
         <b> 4. В коя от поговорките има антоними?</b> 
 
      <FORM> 
                <INPUT onclick=r4=0 type=radio value=V1 name=R4>  
                      <tt>Когото са били, той знае боли ли.</tt> 
                     <br /> 
                <INPUT onclick=r4=0 type=radio value=V2 name=R4>  
                    <tt>Който завижда, нищо не вижда</tt> 
                     <br /> 
                <INPUT onclick=r4=0 type=radio value=V3 name=R4>  
                     <tt>Сила без разум сама се съсипва</tt> 
                <br /> 
           <INPUT onclick=r4=1 type=radio value=V4 name=R4>  
                  <tt>Сит на гладния не вярва</tt> 
 
      </FORM> 
  
        <b> 5. Кое от изреченията е сложно? </b> 
 
      <FORM> 
                <INPUT onclick=r5=0 type=radio value=V1 name=R5>  
                       <tt>Изплашиха се двете птички. </tt> 
                     <br /> 
                <INPUT onclick=r5=0 type=radio value=V2 name=R5>  
                       <tt>Започнаха да се крият.</tt> 
                     <br /> 
                <INPUT onclick=r5=0 type=radio value=V3 name=R5>  
                     <tt>Мъжкият престана да пее.</tt> 
                     <br /> 
                <INPUT onclick=r5=1 type=radio value=V4 name=R5>  
                       <tt>Женската легна да мъти.</tt> 
     </FORM> 
 
         <b>6. В кое от изреченията се изразява повтарящо се минало действие?</b> 
  
      <FORM> 
             <INPUT onclick=r6=1 type=radio value=V1 name=R6>  
                       <tt>През седмицата четяхме до късно в библиотеката</tt> 
                  <br /> 
    
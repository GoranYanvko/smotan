<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Sanovnik</title>
            <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
            <meta http-equiv="Content-Language" content="bg" />
            <meta name="Resource-Type" content="Document" /> 
            <meta name="revisit-after" content="2 weeks" />
            <meta name="distribution" content="global" />
            <meta name="robots" content="all" />
            <meta name="rating" content="general" />
            <meta name="keywords" content="sanovnik, san, sanista " />
            <meta name="description" content="Съновник тълкуване на сънищата. Обяснение на факти от вашия сън, за да разберете какво ви очаква и да знаете дали е на хубаво или лошо и как да се предпазите !  " />
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
		<h5>Съновнкик - тълкуване и гадаене на сънища</h5>
                <h6>Изберете бувката, с която започва сънят ви</h6>

<font size = "4" ><b>
<a href="sanovnik-a.php">А</a>
<a href="sanovnik-b.php">Б</a>
<a href="sanovnik-v.php">В</a>
<a href="sanovnik-g.php">Г</a>
<a href="sanovnik-d.php">Д</a>
<a href="sanovnik-e.php">Е</a>
<a href="sanovnik-j.php">Ж</a>
<a href="sanovnik-z.php">З</a>
<a href="sanovnik-i.php">И</a>
<a href="sanovnik-ii.php">Й</a>
<a href="sanovnik-k.php">К</a>
<a href="sanovnik-l.php">Л</a>
<a href="sanovnik-m.php">М</a>
<a href="sanovnik-n.php">Н</a>
<a href="sanovnik-o.php">О</a>
<a href="sanovnik-p.php">П</a>
<a href="sanovnik-r.php">Р</a>
<a href="sanovnik-s.php">С</a>
<a href="sanovnik-t.php">Т</a>
<a href="sanovnik-u.php">У</a>
<a href="sanovnik-f.php">Ф</a>
<a href="sanovnik-h.php">Х</a>
<a href="sanovnik-c.php">Ц</a>
<a href="sanovnik-4.php">Ч</a>
<a href="sanovnik-sh.php">Ш</a>
<a href="sanovnik-st.php">Щ</a>
<a href="sanovnik-y.php">Ъ</a>
<a href="sanovnik-iu.php">Ю</a>
<a href="sanovnik-ia.php">Я</a>

</b></font>

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

<img src="img/o.gif" align="left" alt="буква"><br />
<font fac="arial" size = "3">

<b>Обици</b><br /><tt>

  - носиш | тайна работа ще чуеш. <br />
- загубиш | досада и неприятности ще имаш.<br /> 
- намериш | щастие и сполука в женитбата ще имаш. 


 
 

</tt><br />
<br />

<b>Облаци</b><br /><tt>

- тъмни | нужди ще имаш. <br />
- светли | приятно бъдеше те чака. <br />
- движещи се бързо | безполезни грижи си създаваш. <br />
- изобилни с дъжз | печалба и изобилие във всичко ще имаш.

</tt><br />
<br /><br /> 

<b>Обувки  </b><br /><tt>

- обуваш | ще бъдеш любим и в къщи и навън. <br />
- тесни | жестоко ще бъдеш огнетен от някого. <br />
- нови | ще се ожениш за добър мъж и щастливо ще живееш.<br /> 
- кърпиш | в лошо положение ще изпаднеш. <br />
- копуваш | ще предприемеш едно пътешествие. <br />
- чистиш | ще те уважават хората. <br />
- кални | ще ти излезе лоша приказка. 



</tt><br />
<br /><br />

<b>Обядваш </b><br /><tt>

- сам | скъпия и сиромашия ще претърпиш. <br />
- с някого | щастие и богатство. <br />
- с домашните си | ще се освободиш от грижи за прехрана. 

</tt>
<br /><br />

<b>Овце</b><br /><tt>

- в кошара | бъди търпелив ще достигнеш целите си. <br />
- на пасището | здраве и щастие. <br />
- доят | ще спечелиш от лотарията или комар.<br /> 
- стрижат | изобилие навсякъде


 </tt>
<br /><br /> 

<b>Огледало </b><br /><tt>

- оглеждаш се в него | ще се ожениш. <br />
- копуваш | неблагоприятна случка или среща ще имаш.<br /> 
- счупиш | слабост в отншенията си ще покажеш. 
 


</tt>
<br /><br />

<b>Небе </b><br /><tt>

- облачно | несигурно бъдеще <br />
- ясно синьо | родстни дни ти предстоят<br /> 
- тъмно | траурни дни ти предстоят. <br />
- звездно | ще се спасиш от голяма опастност. <br />
- много ясно | ще се ожениш по любов <br />
- кървавочервено | безпокойни времена ще прекараш. <br />
- мрачно | досада и неприятности ще имаш от прекият ти началник. 


</tt>
<br /><br />



<b>Огън
</b><br /><tt>

- палиш | ще те залюбят без ти сама да знаеш. <br />
- гасиш | ще бъдеш принуден да се откажеш от намиренията си. <br />
- гори с ясна светлина | непомрачена радост. <br />
- паднеш в него | вреда и помрачение на ума. <br />
- с гъст задушлив дим | нещастие,несъгласие,недоразумение.<br /> 
- блуждаеш | съблазан,изкушение и лъжа. 
 



</tt>
<br /><br />

<b>Орел  </b><br /><tt>

- хвърчи на високо | напредък в работите си. <br />
- хвърка бързо | скоро ще ти се изпълнят надеждите. <br />
- пред теб каца | добро бъдеще. <br />
- грачи | досада и неприятности. <br />
- чер с плячката си | ще умре твой приятел.<br /> 
- бял | голямо наследство ще получиш. <br />
- бял с плячката си | на женените лотарийна печалба,а на неженените скорощна сватба. 


</tt>
<br /><br />

<b>Оръжие </b><br /><tt>

- носиш и стреляш | лошо ще изпатиш поради една твоя лудория,лъжа и завист. <br />
- отиваш с него налов | неверността ти ще излезе на яве. <br />
- носиш в себе си тайно | избий от главата си лошите помисли и бъди куражлия.<br /> 
- красиво | ще се влюбиш. 

 

 
 </tt><br /><br />

<b>Очи</b><br /><tt>

- сини имаш | предстои ти гореща любов. <br />
- слепи | радостна новина ще чуеш. <br />
- късогледи | недостиг от пари ше имаш.<br /> 
- разногледи | сам себе си ще унижиш. <br />
- гноясали течаши | лошо бъдеще. <br />
- извадени,избодени | надеждите ти няма да се сбъднат,ще изгубеш добър приятел,неприятности в любовта си ще срещнеш. <br />
- слаби,болнави | разни загуби ти предстоят.<br /> 
- гледаш надолу | скритата ти вътрешна любов скоро ще излезе на яве. 

</tt><br /><br />

<b>Охлюви</b><br /><tt>

- бавен успех. <br />
- ядеш | добри новини ще чуеш. 


 
</tt><br /><br />

<b>Отрова </b><br /><tt>

- пиеш | неблагодарност за услугите си ще получиш. <br />
- на друг даваш | лош съсед си. <br />


</tt>

</font>
<font size = "4" ><b>
<a href="sanovnik-a.php">А</a>
<a href="sanovnik-b.php">Б</a>
<a href="sanovnik-v.php">В</a>
<a href="sanovnik-g.php">Г</a>
<a href="sanovnik-d.php">Д</a>
<a href="sanovnik-e.php">Е</a>
<a href="sanovnik-j.php">Ж</a>
<a href="sanovnik-z.php">З</a>
<a href="sanovnik-i.php">И</a>
<a href="sanovnik-ii.php">Й</a>
<a href="sanovnik-k.php">К</a>
<a href="sanovnik-l.php">Л</a>
<a href="sanovnik-m.php">М</a>
<a href="sanovnik-n.php">Н</a>
<a href="sanovnik-o.php">О</a>
<a href="sanovnik-p.php">П</a>
<a href="sanovnik-r.php">Р</a>
<a href="sanovnik-s.php">С</a>
<a href="sanovnik-t.php">Т</a>
<a href="sanovnik-u.php">У</a>
<a href="sanovnik-f.php">Ф</a>
<a href="sanovnik-h.php">Х</a>
<a href="sanovnik-c.php">Ц</a>
<a href="sanovnik-4.php">Ч</a>
<a href="sanovnik-sh.php">Ш</a>
<a href="sanovnik-st.php">Щ</a>
<a href="sanovnik-y.php">Ъ</a>
<a href="sanovnik-iu.php">Ю</a>
<a href="sanovnik-ia.php">Я</a>

</b></font>

<?

if (!(file_exists("reklama2.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>

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
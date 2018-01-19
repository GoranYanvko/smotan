<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Horoscope</title>
</head>
			


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
<?php

include('horoskopi/horoskopi-link.php');

?>
<?php

include('horoskopi/strelec.php');

?>
<br />
<?

if (!(file_exists("reklama3.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama3.dat","r");
   $fo=fread($fp,10000);
echo "$fo";

}

?>
<br />
<center>
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
</center>		

</body>
</html>
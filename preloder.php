<?

if (!(file_exists("posledno_novo.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("reklama.dat","r");
   $fo=fread($fp,25000);
}
?>

<?

if (!(file_exists("posledno_novo.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("posledno_novo.dat","r");
   $text=fread($fp,25000);
}
?>

<?php
echo "<div id=\"div1\">Molq is4akaite 10 sekundi </br> $fo</div>";
reloaddiv("div1", GORAN, 5);
function reloaddiv($divname, $text, $seconds)
{
?>
<script type="text/javascript">
function reloaddiv()
{
document.getElementById('<?php echo $divname; ?>').innerHTML = '<?php echo $text; ?>';
}
window.onload = function()
{
setTimeout("reloaddiv()", <?php echo $seconds; ?>*1000);
}
</script>
<?php
}
?> 
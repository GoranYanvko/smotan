<?
/*
* The complete path to PHP Invoice. You can type 'pwd' in shell prompt where config.php reside in
* Do not include trailing slash at the end.
*/
$scriptdir = "/path/to/phpinvoice";

/*
* The complete url to PHP Invoice. If you install under directory /members/ then it will be 
* http://www.yourdomain.com/members. Do not include trailing slash at the end. You can also use https
* if you install under secure directory
*/
$url = "http://www.testovebg.com/members";
$support_url = "$url/support";

/*
* The default language for guest or user that not logged in.
*/
$Language = "english";

/*
* The default theme for guest or user that not logged in.
*/
$Themes = "orange";

/*
* The PHP Invoice license holder or purchaser name. You can use your name or company name.
*/
$LicenseName = "";

/*
* This is MySQL settings to connect to PHP Invoice database. Make sure this info is correct.
*/
$dbuser = "user";
$dbpasswd = "password";
$dbhost = "localhost";
$dbname = "members";

/*
* PLEASE DO NOT EDIT THIS LINE
* Some webhost do not allow persistent connection to MySQL server. If this is the case you can use default settings.
* $cnx = @mysql_pconnect($dbhost,$dbuser,$dbpasswd) or die ("Can't connect to mysql. Please check database username and password in config.php");
*/
$cnx = @mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Can't connect to mysql. Please check database username and password in config.php");
mysql_select_db("$dbname") or die ("Error while trying to use database $dbname. Maybe the database is does not exists or no privilages");

// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL ^ E_NOTICE);

?>
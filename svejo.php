<?PHP
/*******************************
*	Facebook Status Updater version 0.1
*	Peter Nikolow
*	http://peter.nikolow.me
*	March 22, 2013
*******************************/

  function random_string( )
  {
    $character_set_array = array( );
    $character_set_array[ ] = array( 'count' => 7, 'characters' => 'abcdefghijklmnopqrstuvwxyz' );
    $character_set_array[ ] = array( 'count' => 1, 'characters' => '0123456789' );
    $temp_array = array( );
    foreach ( $character_set_array as $character_set )
    {
      for ( $i = 0; $i < $character_set[ 'count' ]; $i++ )
      {
        $temp_array[ ] = $character_set[ 'characters' ][ rand( 0, strlen( $character_set[ 'characters' ] ) - 1 ) ];
      }
    }
    shuffle( $temp_array );
    return implode( '', $temp_array );
  }

$status = random_string(10);
$login_email = 'type-here-your-mail';
$login_pass = 'type-here-your-pass';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/login.php?refsrc=http%3A%2F%2Fwww.facebook.com%2Flogin.php&amp;refid=9');
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_COOKIEJAR, "my_cookies.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "my_cookies.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; Linux 2.6.22) NetFront/3.4 Kindle/2.0 (screen 600x800)");
$loginpage = curl_exec($ch);

curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_URL, 'http://m.facebook.com/home.php');
$page = curl_exec($ch);

curl_setopt($ch, CURLOPT_POST, 1);
preg_match("/input type=\"hidden\" name=\"fb_dtsg\" value=\"(.*?)\"/", $page, $form_id);
preg_match("/form method=\"post\" id=\"composer_form\" action=\"(.*?)\"/", $page, $form_num);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'fb_dtsg=' . $form_id[1] . '&privacy=&charset_test=%E2%82%AC%2C%C2%B4%2C%E2%82%AC%2C%C2%B4%2C%E6%B0%B4%2C%D0%94%2C%D0%84&target=&status=' . urlencode($status) . '&update=' . urlencode("Share"));

curl_setopt($ch, CURLOPT_URL, 'http://m.facebook.com' . $form_num[1]);
$page2 = curl_exec($ch);

curl_close($ch);
?>
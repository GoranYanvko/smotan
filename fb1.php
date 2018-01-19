

<?php
$url = 'http://superotslabvane.com/';
   $request_url ="https://graph.facebook.com/comments/?ids=" . $url;
    $requests = file_get_contents($request_url);
    print "<PRE>";
    print_r($requests);
    print "</PRE>";
?>

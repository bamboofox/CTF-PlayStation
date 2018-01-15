<?php
$url = $_POST['url'];

//echo "<h1>Orig: $url</h1>"

if (strcmp(substr($url, 0, 4), 'http')!== 0) {
    $url = 'http://' . $url;
}

//echo "<h1>Af http: $url</h1>";

$blacklist = array(
    'localhost',
    '127.',
    '0.0.0.0',
    '::1',
    '2130706433',
    '//0',
    '[::]',
    '0000::1'
);

foreach($blacklist as &$find) {
    if(strpos($url, $find) != False) {
        echo "<h3>You can't access localhost</h3>";
        exit();
    }
}

//echo "<h1>Af lo: $url</h1>";

$host = $_SERVER['SERVER_ADDR'];
$flag = long2ip(ip2long($host) + 1);
//echo "<h1>$host, $flag</h1>";

if(strpos($url, 'http://172.17') !== False) {
    if(strpos($url, 'http://'.$host) === False AND strpos($url, 'http://'.$flag) === False) {
        echo "<br/><b>Warning</b>:  file_get_contents(http://): failed to open stream: operation failed in <b>/var/www/html/redirect.php</b> on line <b>22</b><br/>";
        exit();
    }
}

//echo "<h1>Af docker: $url</h1>";
echo file_get_contents($url);
?>

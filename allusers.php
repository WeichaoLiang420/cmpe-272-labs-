<?php
require "head.php"
?>
<?php

$ch = curl_init("http://ruiyang90.info/users.php/");
$fp = fopen("yangrui.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
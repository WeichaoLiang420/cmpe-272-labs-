<?php
require "head.php"
?>

<main>
    <h1>
     Beauty your hair with our products!
    </h1>
</main>
<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='Hair';
if (!empty($_COOKIE['SHOP']['history'])){
    $history = explode(',', $_COOKIE['SHOP']['history']);
    array_unshift($history, $id); 
    $history = array_unique($history);
    while (count($history) > 5){
        array_pop($history);
    }
    setcookie('SHOP[history]', implode(',', $history));
 
}else{
    setcookie('SHOP[history]', $id);
}
  

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title></title>
</head>
<style>
body{text-align:center}
</style>
<body>
<div><img src="hair0.jpg" width="200" height="200" /></div>
<h2>
<p style="font-size:80%">online only</p><br>
KÉRASTASE<br>
Resistance Blow-Dry Primer for Damaged Hair Mini
<br>
<br>
</h2>
<img src="hair1.jpg" width="200" height="200"/>
<h2>
LIVING PROOF<br>
Perfect Hair Day Dry Shampoo Mini
</h2>
</body>
</html>
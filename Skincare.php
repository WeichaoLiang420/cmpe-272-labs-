<?php
require "head.php"
?>
<main>
    <h1>
     treat your skin is a best way to start a morning<br>
    </h1>
</main>
<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='Skincare';
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
<div><img src="skincare0.jpg" width="200" height="200" /></div>
<h2>
DR. DENNIS GROSS SKINCARE<br>
Vitamin C+ Collagen Deep Cream<br>
<br>
<a href ="test.html">
<input type = 'button'value = 'view comments'>
</a>
<br>
</h2>
<!-- <img src="skincare1.jpg" width="200" height="200"/>
<h2>
DR. DENNIS GROSS SKINCARE<br>
Alpha Beta® Pore Perfecting Cleansing Gel Mini<br>
<p><front size =2>Luminous Silk Foundation</front><br></p>
</h2> -->
</body>
</html>
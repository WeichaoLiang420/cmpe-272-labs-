<?php
require "head.php"
?>

<main>
    <h1>
     Products for men<br>
     <br>
     <br>
     <br>
    </h1>
</main>
<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='Men';
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
<div><img src="men0.jpg" width="200" height="200" /></div>
<h2>
<p style="font-size:80%"></p><br>
LAB SERIES FOR MEN<br>
Multi-Action Face Wash
<br>
<br>
</h2>
<img src="men1.jpg" width="200" height="200"/>
<h2>
LAB SERIES FOR MEN<br>
Age Rescue Face Lotion
</h2>
</body>
</html>
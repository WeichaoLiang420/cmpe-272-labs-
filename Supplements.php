<?php
require "head.php"
?>

<main>
    <h1>
     We also have products help your health
    </h1>
</main>
<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='Supplement';
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
<div><img src="supplements0.jpg" width="200" height="200" /></div>
<h2>
<p style="font-size:80%">online only</p><br>
OUAI<br>
Hair Supplement for Thinning Hair
<br>
<!-- review comment -->
<a href ="test.html">
<input type = 'button'value = 'view comments'>
</a>
<br>
</h2>
<!-- <img src="supplements1.jpg" width="200" height="200"/>
<h2>
MURAD<br>
Pure Skin® Clarifying Dietary Supplement
</h2> -->
</body>
</html>
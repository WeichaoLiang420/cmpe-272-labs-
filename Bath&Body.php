<?php
require "head.php"
?>

<main>
    <h1>
     Let our products give you a real relief after all day work<br>
     <br>
     <br>
     <br>
    </h1>
</main>

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
<div><img src="bath1.jpg" width="200" height="200" /></div>
<h2>
<p style="font-size:80%"></p><br>
online only<br>
VIKTOR&ROLF<br>
Flowerbomb Bath and Body Collection
<br>
<?php
$productId = $_GET['id'];
$domain = $_GET['domain'];
$post = [
 'productId' => $productId,
];

$ch = curl_init('http://www.feiyucai.info/thewayshop/incview.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

echo "<p><a href=\"reviewform.php?id=". $productId ."&domain=". $domain ."\" class=\"btn btn-black py-3 px-5\">Add Reviews</a></p>";
?>
<!-- <br>
</h2>
<img src="bath0.jpg" width="200" height="200"/>
<h2>
LAURA MERCIER<br>
Almond Coconut Honey Bat
</h2>
</body>
</html> -->
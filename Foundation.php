<?php
require "head.php"
?>

<main>
    <h1>
     See glowing you eveyday, choose the color that fit you 100%<br>
     
    </h1>
</main>

<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='Foundation';
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
<div><img src="foundation0.jpg" width="200" height="200" /></div>
<h2>
MAKE UP FOR EVER<br>
Ultra HD Invisible Cover Foundation<br>
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
<br>
</h2>
<!-- <img src="foundation1.jpg" width="200" height="200"/> -->
<!-- <h2>
ARMANI BEAUTY<br>
<p><front size =2>Luminous Silk Foundation</front><br></p>
</h2> -->
</body>
</html>
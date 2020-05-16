<?php
require "head.php"
?>

<main>
    <h1>
     Premier help your make up all day long perfectly.<br>
     Below shows our products.
    </h1>
</main>

<?php
 $history = "latest";
 $SHOP = "your";
 $id  ='premier';
//如是COOKIE 里面不为空，则往里面增加一个商品ID
if (!empty($_COOKIE['SHOP']['history'])){
     
    //取得COOKIE里面的值，并用逗号把它切割成一个数组
    $history = explode(',', $_COOKIE['SHOP']['history']);
     
    //在这个数组的开头插入当前正在浏览的商品ID
    array_unshift($history, $id);
     
    //去除数组里重复的值
    $history = array_unique($history);
    // $arr = array (1,2,3,1,3);
    // $arr = array (1,1,2,3,3);
    // $arr = array (1,2,3);
     
    //当数组的长度大于5里循环执行里面的代码
    while (count($history) > 5){
        //将数组最后一个单元弹出，直到它的长度小于等于5为止
        array_pop($history);
    }
 
 
    //把这个数组用逗号连成一个字符串写入COOKIE，并设置其过期时间为30天
    setcookie('SHOP[history]', implode(',', $history));
 
}else{
    //如果COOKIE里面为空，则把当前浏览的商品ID写入COOKIE ，这个只在第一次浏览该网站时发生
    setcookie('SHOP[history]', $id);
}
 
 
//$history =isset ($_COOKIE['SHOP']['history']) ? $_COOKIE['SHOP']['history'] : 0;


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
<div><img src="premier.jpg" width="200" height="200" /></div>
<h2>
<p style="font-size:80%">online only</p><br>
SHISEIDO<br>
Future Solution LX Intensive Firming Contour Serum<br>
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
<!-- <img src="premier1.jpg" width="200" height="200"/>
<h2>
ARTIS<br>
Premier Brush Cleansing Pad<br>
</h2> -->
</body>
</html>
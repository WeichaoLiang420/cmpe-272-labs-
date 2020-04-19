<?php
require "head.php"
?>

       
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://ruiyang90.info/users.php");
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_HEADER, 0);
curl_exec($curl);
// 3. 执行一个cURL会话并且获取相关回复
//$response = curl_exec($ch);

// if ($response  === FALSE) {
// //   echo "cURL 具体出错信息: " . curl_error($ch);
// // }

// // curl_exec($ch);
// $curl_info= curl_getinfo($ch);
// echo "all users from ruiyang {$curl_info}";
// // 4. 释放cURL句柄,关闭一个cURL会话
// curl_close($ch)



?>
      
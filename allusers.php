<?php
require "head.php"
?>
<section class="main-section alabaster" id="users">
	<div class="container fullsize">
    <table  >
        <tr>
            
            <td class="tableheader"><strong>First Name</strong></td>
            <td class="tableheader"><strong>Last Name</strong></td>
            <td class="tableheader"><strong>Email</strong></td>
            <td class="tableheader"><strong>Home Address</strong></td>
            <td class="tableheader"><strong>Home Phone</strong></td>
            <td class="tableheader"><strong>Cell Phone</strong></td>
            
        </tr>
       
<?php
// 1. 初始化一个cURL会话
$ch = curl_init();

// 2. 设置请求选项, 包括具体的url
curl_setopt($ch, CURLOPT_URL, "http://ruiyang90.info/users.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3. 执行一个cURL会话并且获取相关回复
$response = curl_exec($ch);

// if ($response  === FALSE) {
//   echo "cURL 具体出错信息: " . curl_error($ch);
// }

// curl_exec($ch);
$curl_info= curl_getinfo($ch);
// 4. 释放cURL句柄,关闭一个cURL会话
curl_close($ch)



?>
      </table>
    <br/>
    <br/>
    
        </div>
</section>
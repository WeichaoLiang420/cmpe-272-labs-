<?php
require "head.php"
?>

       
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://ruiyang90.info/users.php');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$output = curl_exec ( $curl );

// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_HEADER, 0);
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

//  //right wing - up to ages 22 - potential range of 84 to 99 
// $ch = curl_init("https://sofifa.com/players? 
//aeh=22&ptl=84&pth=99&pn=27&pn=25&pn=23");// This will do
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
// $output = curl_exec($ch);
// echo $output;
// curl_close($ch); 
// 


// declare(strict_types = 1);
// $ch = curl_init ( "https://sofifa.com/players?aeh=22&ptl=84&pth=99&pn=27&pn=25&pn=23" );
// curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
// $output = curl_exec ( $ch );
// curl_close ( $ch );
// $domd = @DOMDocument::loadHTML ( $output );
// foreach ( $domd->getElementsByTagName ( "tbody" )->item ( 0 )->getElementsByTagName ( "tr" ) as $tr ) {
//     $tds = $tr->getElementsByTagName ( "td" );
//     $player = array (
//             'name' => trim ( $tds->item ( 1 )->textContent ),
//             'age' => trim ( $tds->item ( 2 )->textContent ),
//             'rating' => trim ( $tds->item ( 3 )->textContent ),
//             'potential' => trim ( $tds->item ( 4 )->textContent ) 
//     );
//     print_r ( $player );
// }
?>
      
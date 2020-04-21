<?php
require "head.php"
?>

       
<?php
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
     require('mm.php');   
     $sql = "SELECT * FROM GuestInfo";
        $result = $mysqli->query($sql);      
    while($row = $result -> fetch_assoc()){
        echo "<tr>";
            echo "<td>";
                echo $row["first_name"];
            echo "</td>";
            echo "<td>";
                echo $row["last_name"];
            echo "</td>";
            echo "<td>";
                echo $row["email"];
            echo "</td>";
            echo "<td>";
                echo $row["home_address"];
            echo "</td>";
            echo "<td>";
                echo $row["home_phone"];
            echo "</td>";
            echo "<td>";
                echo $row["cell_phone"];
            echo "</td>";
        echo "</tr>";
    }
?>
        </table>
<br/>
<br/>

    </div>
</section>





$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'http://ruiyang90.info/users.php');

//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$fp = fopen("yangrui.txt", "w");
$output = curl_exec ( $curl );


$output=str_ireplace('<header>','',$output);
$output=str_ireplace('</header>','',$output);
//$output_1 = strip_tags($output,'<head><meta>');
//$output_1 = $out = preg_replace("/(?<=^|>).*?(?=<|$)/s", "", $output);
echo $output;
fwrite($fp , $output);
fclose($fp);


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
      
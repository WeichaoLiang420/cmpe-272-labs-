<?php
require "head.php"
?>

<section class="main-section alabaster" id="allusers">
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
<h2>
    Below are the users from this own company's database ruiyang90.info
</h2>
<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'http://ruiyang90.info/users.php');

//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$fp = fopen("yangrui.txt", "w");
$output = curl_exec ( $curl );


// $output=str_ireplace('<header>','',$output);
// $output=str_ireplace('</header>','',$output);
$output_1 = strip_tags($output,'<body><h1><table><tr><td>');
$yummy   = array("Document", "Athena","Home","About","Services","News","Contacts","Users","All","Users","Login");
$bodytag = str_replace($yummy," ", $output_1);
//$output_1 = $out = preg_replace("/(?<=^|>).*?(?=<|$)/s", "", $output);
echo $bodytag;
fwrite($fp , $bodytag);
fclose($fp);
?>
        </table>
<br/>
<br/>

    </div>
</section>

      
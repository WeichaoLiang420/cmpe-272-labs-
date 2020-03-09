<?php
require "head.php"
?>
<?php
header('content-type:text/html;charset=utf-8');
$table="<table border='0' cellpadding='0' cellspacing='0' width='80%'>";
for($i=1;$i<=3;$i++){
$table.="<tr>";
for($j=0;$j<2;$j++){
$table.="<td>l</td>";
}
$table.="</tr>";
}
$table.="</table>";
echo $table;
?>
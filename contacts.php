<?php
require "header.php"
?>



<main>
    <?php
$contacts = file('contacts.txt');

echo '<table>';
for ($i = 0; $i < count($contacts); $i++) {
    echo '<tr>';
    echo "<td>{$contacts[$i]}</td>";
    // echo "<td>{$var['category'][$i]}</td>";
    echo '</tr>';
}
echo '</table>'
?>
</main>

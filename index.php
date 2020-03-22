<?php
require "head.php"
?>

<main>

    <?php
if (isset($_SESSION['user_ID'])) {
    echo '<p class = "login-status">Here is our secretive infomation!</p>';
} else {

    echo '<p class = "login-status"> Welcome to Weichao Liang website</p>';
}
?>
</main>

<?php
// require "footer.php"
?>
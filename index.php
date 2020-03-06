<?php
require "head.php"
?>


<main>

    <?php
if (isset($_SESSION['user_Name'])) {
    echo '<p class = "login-status"> You are logging!</p>';
} else {

    echo '<p class = "login-status"> Welcome to Weichao Liang website</p>';
}
?>
</main>

<?php
// require "footer.php"
?>
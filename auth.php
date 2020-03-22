

<?php
require "head.php"
?>
<?php


  session_start();

  if (isset($_SESSION['authorized'])) {
    header('Location: /php-login');
  }
  require 'cdb.php';

  if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
    $records = $conn->prepare('SELECT username, pwd FROM Myguests WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['pwd'], $results['pwd'])) {
      $_SESSION['admin'] = $results['username'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>
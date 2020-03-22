
<?php
require "head.php"
?>
<?php

$user = 'root';
$password = '';
$db = 'myDB';
$host = 'localhost';
$port = 80;
$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

?>
<main>
<?php
    if(isset($_POST['authorized'])){ 
      $username = $_POST["admin"];
      $pwd = $_POST['pwd'];
      $sql = mysqli_query($success,"SELECT * FROM login WHERE username = '$username' and pwd = '".md5($pwd)."'");
      $row = mysqli_num_rows($sql);
      echo $sql;
      if ($row['username'] == $username && $row ['pwd'] == $pwd){
        if(!isset($_SESSION)) {
          session_start();
      }
      $_SESSION[user_ID] = $username;
      header('Location:index.php');
        
        
       /* 
        // 1)get the object of file
          $path = ("admin.txt");
        // 2) load the content of file
          $content = file_get_contents($path);
        // 3)split the string into array
          $array1 = explode(":", $content);

        // 4)check if user input match the admin.txt file 
        
        $uname = $_POST["admin"]; 
        $pwd = $_POST["psw"];
         

         if ($uname == $array1[0]&& $pwd ==$array1[1]){
             if(!isset($_SESSION)) {
                 session_start();
             }
             $_SESSION[user_ID] = $array1[0];
             header('Location:index.php');

         }
*/
        
        }
      }


         

    

?>
</main>

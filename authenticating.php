
<?php
require "head.php"
?>

<main>
<?php
    if(isset($_POST['authorized'])){
       
        
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

        



         

    }

?>
</main>

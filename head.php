<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="frame.css?rnd=132">
</head>

<body>
    <header>
        <nav>
            <ul class="topnav">
            <?php


    echo '
                    <li class="topnav-left"><a href="homepage.php"> Home</a></li>
                    <li class="topnav-left"><a href="about.php"> About</a></li>
                    <li class="topnav-left"><a href="service.php"> Services</a></li>
                    <li class="topnav-left"><a href="news.php"> News</a></li>
                    <li class="topnav-left"><a href="contacts.php"> Contacts</a></li>
                    <li class="topnav-left"><a href="users.php"> Users</a></li>
                    <li class="topnav-left"><a href="allusers.php"> Allusers</a></li>
                    <li class="topnav-right"><a href="registry.php"> Regist</a></li>
                    <li class="topnav-right"><a href="search.php"> Search</a></li>
                    <li class="topnav-right"><a href="signout.php"> 
                        Sign out</a></li>
                    <li class="topnav-right"><a href="signin.php"> 
                        Sign in</a></li>'
    ;
?>


            </ul>
        </nav>
    </header>
    <text>
    </text>



</body>

</html>
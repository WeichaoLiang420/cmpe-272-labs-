<?php
require "head.php"
?>

<!-- <!doctype html>
<i class="fas fa-star"></i>
<html>
  <head>
    <meta charset="utf-8">
    <title> Please rate out production</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="rating">
      <input type="radio" name="star" id="star1"><lable for="star1">
      </lable>
      <input type="radio" name="star" id="star2"><lable for="star2">
      </lable>
      <input type="radio" name="star" id="star3"><lable for="star3">
      </lable>
      <input type="radio" name="star" id="star4"><lable for="star4">
      </lable>
      <input type="radio" name="star" id="star5"><lable for="star5">
      </lable>
    </div>
  </body>
</html> -->
<?php
$rate = 0;
?>

<!DOCTYPE html>
<html>
  <head>
    <h1 style="text-align:center">Please rate our product and leave comment</h1>
    <meta charset="utf-8">
    <title>stars review</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
    <div class="box" >
      <a class="ion-android-star b1"></a>
      <a class="ion-android-star b2"></a>
      <a class="ion-android-star b3"></a>
      <a class="ion-android-star b4"></a>
      <a class="ion-android-star b5"></a>

    </div>
    
    <div class="comment">
      <title>comment</title>
      <form></form>
      summary:
      <textarea rows="1" cols="20"></textarea>
      <br>
      <br>
      message:
       <textarea rows="4" cols="50"></textarea>
       <br>
       <br>
       <input type="reset" value="clear">
       <input type="submit" value= "submit">
    </div>
  </body>
</html>

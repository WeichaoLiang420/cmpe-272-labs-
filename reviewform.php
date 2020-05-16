
<?php
// if(!isset($_COOKIE[$cookie_name])) {
//   echo "<script>alert('Please Log in first');</script>"; 
// } else if ($_GET['id'] == "" ){
//   echo "<script>alert('system error, please locate reviewing product');</script>"; 
// } else if ($_GET['domain'] == "" ){
//   echo "<script>alert('system error, please locate reviewing product');</script>"; 
// }
// else {
//   $productId = $_GET['id'];
//   $domain = $_GET['domain'];
//   $userId = $_COOKIE['userId'];
// }

  $productId = $_GET['id'];
  $domain = $_GET['domain'];
  $userId = '1';

?>
<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) {
    $ProductId = $_POST['productId'];
    $UserId = $_POST['userId'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $domain = $_POST['domain'];

    // echo $ProductId;
    // echo $UserId;
    // echo $rating;
    // echo $comment;

    $post = [
      'productId' => $ProductId,
      'userId' => $UserId,
      'domain' => $domain,
      'rating' => $rating,
      'comment' => $comment,
    ];
  
  $ch = curl_init('http://www.feiyucai.info/thewayshop/addreview.php');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  
  // execute!
  $response = curl_exec($ch);
  
  // close the connection, release resources used
  curl_close($ch);
  
  // do anything you want with your response
  echo var_dump($response);

  header("Location: http://www.feiyucai.info/thewayshop/index.html");
  }
?>

<form action="reviewform.php" method="POST">
  <label for="rating">Rating:</label>
  </br>
  <select id="rating" name="rating">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  </br>
  <input type="hidden" id="productId" name="productId" value="<?php echo $productId; ?>">
  <input type="hidden" id="userId" name="userId" value="<?php echo $userId; ?>">
  <input type="hidden" id="domain" name="domain" value="<?php echo $domain; ?>">
  <label for="comment">Comment:</label>
  </br>
  <textarea type="text" id="comment" name="comment" rows="7" cols="73" ></textarea>
  </br>
  <input type="submit" id="submit" name="submit"  value="Submit">
</form>
</html>



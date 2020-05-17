<?php
  if(!isset($_COOKIE['authenticate'])) {
    echo "<script>alert('Please Log in first');window.location.href='http:/ruiyang90.info/login.html';</script>"; 
  } else if ($_GET['id'] == "" ){
    echo "<script>alert('system error, please locate reviewing product');window.location.href='http://www.ruiyang90.info/';</script>"; 
  } else if ($_GET['domain'] == "" ){
    echo "<script>alert('system error, please locate reviewing product');window.location.href='http://www.www.ruiyang90.info/';</script>"; 
  }
  else {
    $productId = $_GET['id'];
    $domain = $_GET['domain'];
    $userId = $_COOKIE['authenticate'];
  }
?>

<?php
if (isset($_POST['submit'])) {
  $ProductId = $_POST['PID'];
  $UserId = $_POST['UID'];
  $rating = $_POST['rating'];
  $comment = $_POST['comment'];
  $domain = $_POST['D'];

  $post = [
    'productId' => $ProductId,
    'userId' => $UserId,
    'domain' => $domain,
    'rating' => $rating,
    'comment' => $comment,
  ];

$ch = curl_init('http://ruiyang90.info/addreview.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
echo var_dump($response);

$target_url = "http://ruiyang90.info/viewcomments.php?id=".$ProductId."&domain=".$domain;
echo $target_url;
header("Location: ".$target_url);
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
  <input type="hidden" id="PID" name="PID" value="<?php echo $productId; ?>">
  <input type="hidden" id="UID" name="UID" value="<?php echo $userId; ?>">
  <input type="hidden" id="D" name="D" value="<?php echo $domain; ?>">
  <label for="comment">Comment:</label>
  </br>
  <textarea type="text" id="comment" name="comment" rows="7" cols="73" ></textarea>
  </br>
  <input type="submit" id="submit" name="submit"  value="Submit">
</form>



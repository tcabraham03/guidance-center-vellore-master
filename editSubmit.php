<?php
  $name=$_GET['name'];
  $address=$_GET['address'];
  $home_parish=$_GET['home_parish'];
  $present_parish=$_GET['present_parish'];
  $phone=$_GET['phone'];
  $email=$_GET['email'];
  $id=$_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "velloremtcguidance";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql="UPDATE `members` SET `address`='$address',`home_parish` = '$home_parish', `present_parish` = '$present_parish', `phone` = $phone, `email` = '$email' WHERE `members`.`regno` = $id AND `members`.`name` = '$name';";
  if($conn->query($sql)===TRUE){
    Redirect('edit.php?message=Success');
  }
  else{
    Redirect('edit.php?message=Error');
    echo 'Error';
  }

  function Redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
  }
?>

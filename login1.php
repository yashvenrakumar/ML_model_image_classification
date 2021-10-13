<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>signin php</title>
</head>
<body>
<?php

extract($_POST);
if(isset($logIn))
{  $link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
  $qry="select * from signup where Email='$email' and Password='$password'";
  $resultset=mysqli_query($link,$qry);
  $count=mysqli_num_rows($resultset);
  if($count!=0)
  {
    $_SESSION['uname']='$name';
    header("location:post_prop.php");
  }
  else
     ?>
    <p style="color: red;position: absolute;top: 0px; left: 480px;font-size: 30px ">Invalid password or ID</p>
<?php
}
?>
</body>
</html>
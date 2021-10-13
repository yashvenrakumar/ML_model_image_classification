<html>
<head></head>
<body>
<form method="post">

<?php

extract($_POST);
 $mail= $_REQUEST['email'];
$link=mysqli_connect('localhost','roomszte_anand','anand9828395106','roomszte_roomscom');
 $qry="select * from stu_info where P_email='$mail'";
 $resultset=mysqli_query($link,$qry);
 
 ?>
 <table border="2px" width="400px" cellspacing="5px" cellpadding="20px" >
 <tr><td>StudentImage</td><td>Name</td><td>Email</td><td>Phone</td><td>father mob</td><td>Room No.</td><td>Fees</td></tr>
 
 <?php 
 while($r=mysqli_fetch_assoc($resultset))
 {echo "<tr><td><img src=$r[Images] width='100px'></td><td>$r[Name]</td><td>$r[Email]</td><td>
  $r[Phone]</td><td>$r[Mobile]</td><td>$r[Room_no]</td><td>$r[Fees]</td><td><a href='formedit.php?rn=$r[Room_no]&sn=$r[Fees]&phone=$r[Phone]&mail=$r[Email]'>Edit Record</a></td>
  <td><a href='form_del.php?mail=$r[Email]'>Delete Record</a></td></tr>";
  
    
 }
 



?>
</table>
</form>
</body>
</html>





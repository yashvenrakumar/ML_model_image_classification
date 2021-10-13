<html>
<head></head>
<body>
<form name="myform" method="post" >
<hr color='orange' size='10'/>
<h1 align='center'>Edit Record</h1>
<hr color='green' size='10'/>
<table>
<tr><td>RoomNo</td><td><input type="number" name="room" value="<?php echo $_REQUEST['rn']?>"/></td></tr>
<tr><td>Fees</td><td><input type="text" name="nm" value="<?php echo $_REQUEST['sn']?>"/></td></tr>
<tr><td>Mobile No.</td><td><input type="number" name="mobile" value="<?php echo $_REQUEST['phone']?>"/></td></tr>
<tr><td colspan="2" align ="center"><input type="submit" value="update" name="updateBtn"/></td></tr>  
</table>
</form>
<?php $mail= $_REQUEST['mail']; ?>

</body>
</html>

<?php
extract($_POST);
if(isset($updateBtn))
{
  $link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
  $qry="update stu_info set Room_No='$room',Fees='$nm',phone='$mobile' where Email='$mail'";
  $r=mysqli_query($link,$qry);
  if($r)
  {
    echo "Record are updated sucessfully";
  } 
  else
  {
    echo "Record are not updated sucessfully";
  }  
}

?>

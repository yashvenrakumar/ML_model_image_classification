
<?php
$mail= $_REQUEST['mail'];
$link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
$qry="delete from stu_info where Email= '$mail'";
$res=mysqli_query($link,$qry);
if($res)
{
    echo "Record deleted from table";
}
else 
{
  echo "delete process failed";  
}
?>

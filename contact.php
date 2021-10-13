
<?php

$con=mysqli_connect("localhost","root","","roomscom");//to connect database
if(!$con)
{
    echo " not connected to server";
}
if(!mysqli_select_db($con,'roomscom'))
{
    echo "database not selected";
}
$f=$_POST['fullname'];
$e=$_POST['email'];
$p=$_POST['phone'];
$m=$_POST['message'];

//$file=$_FILES["file"];
$sql="select * from contact where email='$e' and phone='$p'";//database connection//select query
$r=mysqli_query($con,$sql);//database //execute the sql query
//no of rows selected by sql
$count=mysqli_num_rows($r);
if($count==1){
    echo"username already taken";
   
        }
else
{
$reg="insert into contact(fullname,email,phone,message)values('$f','$e','$p','$m')";
if( mysqli_query($con,$reg))
{
 echo "Your has been Received";
 }
 else 
     {
     echo " registration not suceesful";
 }
}
?>
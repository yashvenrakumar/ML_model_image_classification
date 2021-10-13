<!DOCTYPE html>
<html>
<head>
  <title>signup php</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration form Design</title>
  <link rel="stylesheet" type="text/css" href="houseowners.css">
</head>
<body style="background-image: url(images/houseowners_login.jpg);height: 100%;width:100%;">
<div class="login-page">

<div class="form">

  <form class="register-form"  method="post" enctype="multipart/form-data" onsubmit="return myfun()">
   <input type="email" name="email" id="emale"  placeholder="email-id" required="email">
    <span id="emal" style="color: red;"></span>
    <input type="password" name="pwd" id="pass" placeholder="password" required="password">
 <input type="password" name="cpwd" id="cpass"   placeholder="confirm your password">
  <span id="pas" style="color: red;"></span>
  <input type="file" name="img" required id="fileUpload" placeholder="Upload your photo"> 
    <span id="lblError" style="color: red;"></span>
    <button type="submit" name="signUp">Create</button>
    <p class="message">Already Registerd ? <a href="#">Login</a></p>
  </form>
  <form class="login-form"  method="post">
     <div class="div3">
      <img src="images/person_3.jpg" style="height: 150px;width: 150px; border-radius: 50%">
    </div>
  <input type="email" name="email" placeholder="email-id">  
    <input type="password" name="pass" placeholder="password">
    <button type="submit" name="logIn">Login</button>
    <p class="message">Not Registerd ? <a href="#">Register</a></p>
</div>

<script src=" https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script>
  $('.message a').click(function(){
  $('form').animate({height:"toggle",opacity:"toggle"},"slow");
  });
</script>
<script >
function myfun()
{
          
 var as=document.getElementById("pass").value;
 var cs=document.getElementById("cpass").value;

 if(as.length<5)
 {
  document.getElementById("pas").innerHTML="** password length must be greater than 5 character;";
  return false;
 }
 if(as.length>25)
 {
  document.getElementById("pas").innerHTML="** password length must be less than 25 character;";
  return false;
 }
if(as!=cs)
  {
    document.getElementById("pas").innerHTML="** password are not same ";
  return false;
  }
var emaLe=document.getElementById("emale").value;
if(emaLe.indexOf('@')<=0)
{
  document.getElementById("emal").innerHTML="** invalid @ position";
  return false;
}
if((emaLe.charAt(emaLe.length-4)!='.') && (emaLe.charAt(emaLe.length-3)!="."))
 {
   document.getElementById("emal").innerHTML="** invalid . position ";
  return false;
 }  
 var allowedFiles = [".jpg", ".jpeg", ".png"];
            var fileUpload = document.getElementById("fileUpload");
            var lblError = document.getElementById("lblError");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.value.toLowerCase())) {
                lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                return false;
            }
            lblError.innerHTML = "";
            return true; 


}




</script>
</body>

</html>

<?php 
extract($_POST);
if(isset($signUp))
{   $link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
  
   
  $check1 = "select * from employee_signup where Email='$email' ";
  $resultcheck = mysqli_query($link,$check1);  

   $row = mysqli_num_rows($resultcheck);
      if($row == 1){?>
                
                <div style="position: absolute;top:0px;left: 380px;width: 700px;color: green;font-size: 41px;font-style:" >You have registred already so login only</div>
               
                  
              
      <?php 
          } 
               else{
   
           $filename=$_FILES['img']['name'];
          $tempname=$_FILES['img']['tmp_name'];
          $folder="Owner_images/".$filename;
          move_uploaded_file($tempname,$folder);


        $q = "insert into employee_signup(Email,Password,Images) values ('$email','$pwd','$folder')"  ;

        $result = mysqli_query($link,$q);
                if($result)
                { ?>
                  
             <div style="position: absolute;top:600px;left: 570px;color: green;font-size: 41px;"> Registered successfully
             </div>
                  
                  
                
<?php 
                   
                }

      }

}


?>
<?php

extract($_POST);
if(isset($logIn))
{ $link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
  $qry="select * from employee_signup where  Email='$email' and Password='$pass'";
  $resultset=mysqli_query($link,$qry);
  $count=mysqli_num_rows($resultset);
  if($count!=0)
  {
    
    header("location:house_owner.php?mail=$email");
  }
  else
     ?>
    <p style="color: red;position: absolute;top: 70px; left: 630px;font-size: 30px ">Invalid password or ID</p>
<?php
}
?>




</body>
</html>
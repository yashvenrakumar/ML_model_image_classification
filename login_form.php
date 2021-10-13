
<!DOCTYPE html>
<html>
<head>
  <title>signup php</title>
</head>
<body>
<?php 
extract($_POST);
if(isset($signUp))
{   $link=mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
  //$username = $_POST['user'];
  //$password = $_POST['pass'];
  

  // echo $username;
  // echo $password;
   
  $check1 = "select * from signup where Email='$email' ";
  $resultcheck = mysqli_query($link,$check1);  

   $row = mysqli_num_rows($resultcheck);
      if($row == 1){?>
                
                <div style="position: absolute;top:0px;left: 380px;width: 700px;color: green;font-size: 41px;font-style:" >You have registred already so login only</div>
               
                  
              
      <?php 
          } 
                   else{

        $q = "insert into signup(Name,Email,Mobile,Password) values ('$name','$email','$number','$password')"  ;

        $result = mysqli_query($link,$q);
                if($result)
                { ?>
                  
                 <div style="position: absolute;top:0px;left: 380px;width: 700px;color: green;font-size: 41px;font-style:" >Registered Successfully </div> 
                  
                  
                
<?php 
                   
                }

      }

}


?>
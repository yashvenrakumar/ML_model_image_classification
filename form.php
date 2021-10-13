<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
		
	.main
	{
		position: absolute;
		left: 330px;
		top: 10px;
		width: 800px;
		height: 550px;
		border-radius: 50px;
		
		background-color: white;
		
    }
        
	.f1
	{  
		position:relative;
		width: 300px;
		height: 50px;
		left:25px;
		top: 150px;
		font-size: 10px;
	    
	    border-radius:50px; 
 }
        
	.f2
	{   position:relative;
		width: 300px;
		height: 50px;
		left:450px;
		top: 100px;
		

	}
	.f3
	{   position:relative;
		width: 300px;
		height: 50px;
		left:25px;
		top: 130px;
		

	}
	
		

	.f4
	{   position:relative;
		width: 300px;
		height: 50px;
		left:450px;
		top: 80px;
                
        }
	.f5
       {   position:relative;
		 width: 730px;
		 height: 50px;
    	 left:25px;
		 top: 115px;
                 
    }
    .f6 {
        position: fixed;
        top:10px;
        left:40px;
        text-align:justify;
        padding: 2px;
        width: 160px;
    }
   .f7
  {   position:relative;
    width: 300px;
    height: 50px;
    left:450px;
    top: 10px;
                
  } 
  .f8
       {   position:relative;
     width: 730px;
     height: 50px;
       left:25px;
     top: 30px;
                 
    }
    .f9
  {   position:relative;
    width: 300px;
    height: 50px;
    left:450px;
    top: 2px;
   
            
  }  
.f10{
    position: absolute;top:450px;left: 330px;width: 100px;height: 40px;
}
  input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
} 
    
    input{
    	border: 2px solid #aaa;
    	border-radius: 4px;
    	margin: 8px;
    	outline: none;
    	box-sizing: border-box;
    }
    input:focus{
    	border-color: dodgerBlue;
    	box-shadow: 0 0 8px 0 dodgerBlue;
    }
    select{  border: 2px solid #aaa;
    	border-radius: 4px;
    	margin: 8px;
    	outline: none;
    	box-sizing: border-box;

    }
    select:focus{ border-color: dodgerBlue;
    	box-shadow: 0 0 8px 0 dodgerBlue;

    }
    .glyphicon-user{ position: absolute;
                     top: 30px;
                     
                     left: 270px;
                     color: blue; 
                     font-size: 18px;

                   }
     .glyphicon-phone{ position: absolute;
                     top: 30px;color: blue; 
                     font-size: 18px;
                     
                     left: 270px;}
   
     .glyphicon-envelope{ position: absolute;
                        top: 30px;
                        color: blue; 
                        left: 270px;
                    font-size: 18px;}
      .glyphicon-heart{ position: absolute;
                        top: 30px;color: blue; 
                        left: 270px;font-size: 18px;

      }
     
     .glyphicon-upload{   position: absolute;
                        top: 17px;color: blue; 
                        left: 250px;font-size: 22px;


       }

      
     .glyphicon-pencil{position: absolute;
                        top: 30px;color: blue; 
                        left: 270px;

                        width: 30px;
                        height: 30px;font-size: 18px;


      }
      .glyphicon-home{ position: absolute;
      	               color: black;
                       left: 540px;
                       font-size: 21px;
                       top: 37px;
      }
      button {  position: relative;
      	        top: 170px; 
                 left: 242px;
                 width: 300px;


      }
      #sBtn:hover
{
background-image:none;
background-color:green;
}
@media screen and (max-width:1326px){
    .main{
        position:absolute;
        left:300px;
    }
    .f1
    {
          position:relative;
	        left:40px;
		top: 100px;
                }
                .f2
    {
          position:relative;
	        left:400px;
		top: 50px;
                }
      .f3
    {
          position:relative;
	        left:40px;
		top: 80px;
                }
        .f4
    {
          position:relative;
	        left:400px;
		top: 30px;
                } 
        .f5
    {
          position:relative;
	        left:40px;
		top: 65px;
                }
         button{
     position:relative;
        left:200px; 
        top:140px;
                
}
@media screen and (max-width:810px){
    .main{
        position:absolute;
        left:40px;
        width:750px;
    }
     .f5
    {
          position:relative;
	        left:40px;
		top: 65px;
                }
}
@media screen and (max-width:510px){
    .main{
        position:relative;
        left: 0px;
        top:0px;
        width:360px;
        height:700px;
    }
    .f1
    {
          position:relative;
	        left:40px;
		top: 70px;
                }
   .f2  
    {
          position:relative;
	        left:40px;
		top: 90px;
                }
      .f3 
    {
        position:relative;
		left:40px;
		top: 110px;
                }
     .f4
    {
          position:relative;
		left:40px;
		top: 130px;
    }
     .f5
    {
          position:relative;
		left:40px;
		top: 150px;
                width:100px;
    }
      .f7
    {
          position:relative;
		left:40px;
		top: 170px;
        width:100px;
    }
      .f8
    {
          position:relative;
		left:40px;
		top: 170px;
        width:300px;
    }
      .f9
    {
          position:relative;
		left:40px;
		top: 200px;
        width:100px;
    }
          .f10
    {
          position:relative;
		left:80px;
		top: 220px;
        width:300px;
    }
      
     
  
    


	</style>
	
</head>
<body>
     <form  method="post" enctype="multipart/form-data" onsubmit="return myfun()" >
    <div class="main" style="background-image: url(images/room.jpg); opacity:.72 ;" >
       <div class="f6" >
                       <h2 style="position: absolute;left:580px;font-weight:bolder; width: 400px;top:10px;">ADD NEW CLIENT</h2>
                       <i class="glyphicon glyphicon-home"></i>
                   </div> 
        <div class="f1">       
           <input type="text" name="num" placeholder=" Enter the name" id="usernum" style="position:absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;" >
	<i class="glyphicon glyphicon-user"></i>
    <span id="message" style="color: red; position: absolute;top:-14px;font-size: 18px;"></span>
                </div>
		<div class="f2" >      
            <input type="number" name="phone" placeholder=" Enter phone no." id="mobi" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
			<i class="glyphicon glyphicon-phone"></i>
       <span id="mobile" style="color: red; position: absolute;left: 0px;top:-15px;font-size: 16px;"></span>
                </div>
        
		<div class="f3">
            <input type="email" name="mail" placeholder=" Enter the email" id="emale" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
			<i class="glyphicon glyphicon-envelope"></i>
        <span id="emal" style="color: red;font-size: 18px;position:relative;top:-14px;left: 8px;"></span>
                </div>
		<div class="f4">
    <input type="number" name="Pa_Mob" placeholder=" Enter Father phone no." id="mobie" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
      <i class="glyphicon glyphicon-phone"></i>
       <span id="mobil" style="color: red; position: absolute;left: 0px;top:-15px;font-size: 16px;"></span>      
	</div>
	        <div class="f5"> <input type="text" placeholder="Permanent address" name="u_location" required  style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;"> 
                      <i class="glyphicon glyphicon-pencil"></i>
                </div>
         <div class="f7"> 
         <input type="number" placeholder=" Enter the fees" name="aadhr" id="adhr" required  style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;"> 
                      <i class="glyphicon glyphicon-pencil"></i>
                        <span id="aadha" style="color: red; position: absolute;top:-14px;font-size: 18px;"></span>
                </div> 
          <div class="f8"> 
             <label class="custom-file-upload" style="position: absolute;border-radius: 50px;width: 300px; padding: 14px;margin: 10px;height: 50px;background-color: white;top:16px;font-size: 20px;">
           <input name="img" type="file" multiple required id="fileUpload" style="position: absolute;width: 300px;height: 50px;border-radius:50px;"> 
           Upload Images
            <i class="glyphicon glyphicon-upload " ></i> 
         </label>
         <span id="lblError" style="color: red;"></span>
                      
                </div>
        <div class="f9">
       <input type="number" name="room" placeholder=" Enter the Room No." id="mobi" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
      <i class="glyphicon glyphicon-pencil"></i>
      <span id="mobile" style="color: red; position: absolute;left: 0px;top:-15px;font-size: 16px;"></span>
    </div>           
        

              <div class="f10">     
        <input type="submit" id="sBtn" name="suBmit" value="Submit" style="width:200px;height:40px;" />
        </div>
                </div>
                
 
                  
</form>
 <?php
 extract($_POST);
 $mail= $_REQUEST['email'];
if(isset($suBmit))
{   
    $tmppath=$_FILES['img']['tmp_name'];
    $finalpath=$_SERVER['DOCUMENT_ROOT']."/student_images/".$_FILES['img']['name'];
    $img="student_images/".$_FILES['img']['name']; 
    move_uploaded_file($tmppath,$finalpath);

   
    $link = mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
   $q = "insert into stu_info(P_email,Name,Phone,Email,Mobile,Adrr,Fees,Room_no,Images) values ('$mail','$num','$phone','$mail','$Pa_Mob','$u_location','$aadhr','$room','$img')"  ;
  $result = mysqli_query($link,$q);
  if($result)
  { ?>
                  
   <div style="position: absolute;top:0px;left: 0px;width: 700px;color: green;font-size: 35px;font-style:" >Registered Successfully </div> 
                  
                  
                
<?php
                   
    }

}




?>

   <script>
      function myfun()
      {   
        var correct_way= /^[A-Za-z_-  ]+$/;
        var a= document.getElementById("usernum").value;
        if(a.length<3){
          document.getElementById("message").innerHTML="** usename must be 3 character";
          return false;
        }
        if(a.length>20){
          document.getElementById("message").innerHTML="** usename must be less than 20 character";
          return false;
        }
        if(a.match(correct_way))
         true;
          else{
            document.getElementById("message").innerHTML="** only alhphabet are allowed";
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
 var mob=document.getElementById("mobi").value;
 if(isNaN(mob))
 {
  document.getElementById("mobile").innerHTML="** Enter only numeric value";
  return false; 
 }
 if(mob.length<10)
 {
  document.getElementById("mobile").innerHTML="** Mobile number must be 10 digit";
  return false;
 }
 if(mob.length>10)
 {
  document.getElementById("mobile").innerHTML="** mobile number must be 10 digit";
  return false;
 }
 if((mob.charAt(0)!=9) && (mob.charAt(0)!=8) && (mob.charAt(0)!=7) && (mob.charAt(0)!=6)) 
 {
  document.getElementById("mobile").innerHTML="** mobile number must start with 9,8,7,6";
  return false;
 }
var mob=document.getElementById("mobie").value;
 if(isNaN(mob))
 {
  document.getElementById("mobil").innerHTML="** Enter only numeric value";
  return false; 
 }
 if(mob.length<10)
 {
  document.getElementById("mobil").innerHTML="** Mobile number must be 10 digit";
  return false;
 }
 if(mob.length>10)
 {
  document.getElementById("mobil").innerHTML="** mobile number must be 10 digit";
  return false;
 }
 if((mob.charAt(0)!=9) && (mob.charAt(0)!=8) && (mob.charAt(0)!=7) && (mob.charAt(0)!=6)) 
 {
  document.getElementById("mobil").innerHTML="** mobile number must start with 9,8,7,6";
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

























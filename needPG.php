<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/jpg" href="images/logo.jpeg"> 
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background:url(room.jpg);
			
            

			
		   }
	.main
	{
		position: absolute;
		left: 330px;
		top: 20px;
		width: 800px;
		height: 590px;
		border-radius: 50px;
		
		background-color: white;
		

	}
	.f1
	{  
		position:relative;
		width: 300px;
		height: 50px;
		left:30px;
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
		top: 150px;
		

	}
	.f4
	{   position:relative;
		width: 300px;
		height: 50px;
		left:450px;
		top: 100px;

		

	}
	.f5
	{   position:relative;
		width: 300px;
		height: 50px;
		left:30px;
		top: 150px;
		

	}
    .f6
       {   position:relative;
		 width: 300px;
		 height: 50px;
    	 left:450px;
		 top: 100px;
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
      .glyphicon-home{ position: absolute;
                        top: 30px;color: blue; 
                        left: 6400px;font-size: 18px;

      }
      .glyphicon-heart{ position: absolute;
                        top: 30px;color: blue; 
                        left: 270px;font-size: 18px;

      }
      .glyphicon-map-marker{position: absolute;
                        top: 30px;color: blue; 
                        left: 270px;

                        width: 30px;
                        height: 30px;font-size: 18px;


      }
       .glyphicon-home{ position: absolute;
      	               color: black;
                       left: 240px;
                       font-size: 21px;
                       top: 27px;}
      button {  position: relative;
      	        top: 130px; 
                 left: 242px;
                 width: 300px;


      }
      input[type="submit"]{
    position: absolute;
    top:470px;
    left: 300px;
    width: 200px;
    height: 40px;
}
      .button:hover
{
background-image:none;
background-color:green;
}
@media screen and (max-width:510px){

    .f1
    {
          position:relative;
	        left:30px;
		top: 70px;
                }
   .f2  
    {
          position:relative;
	        left:30px;
		top: 90px;
                }
      .f3 
    {
        position:relative;
		left:30px;
		top: 110px;
                }
     .f4
    {
          position:relative;
		left:30px;
		top: 130px;
    }
     .f5
    {
          position:relative;
		left:30px;
		top: 150px;
                width:100px;
    }
     .f6
    {
          position:relative;
		left:30px;
		top: 170px;
                width:100px;
    }
    
    .main {
        width:360px;
        height:560px;
        position:absolute;
        left:0px;
        top:0px;
    }
     
input[type="submit"]{
    position: absolute;
    top:500px;
    left: 80px;
    width: 200px;
    height: 40px;
}

	</style>
	
</head>
<body>
	  <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
       <div class="wrapper wrapper--w780">
	<div class="main"  style="background-image: url(images/h.jpg); opacity:.72 ;"  >
		
		<div class="f1">
			 <form method="post" onsubmit="return myfun()">

			<input type="text" name="num" placeholder="Enter your name" id="usernum"  style="position: absolute;width: 300px;height: 50px;border-radius: 50px; font-size: 20px;" >
			<i class="glyphicon glyphicon-user"></i>
             <span id="message" style="color: red; position: absolute;top:-10px;font-size: 18px;"></span>
		

		</div>
		<div class="f2" ><input type="number" name="phone" placeholder="Enter your number" id="mobi" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
			<i class="glyphicon glyphicon-phone"></i></div>
		 <span id="mobile" style="color: red; position: absolute;left: 450px;top:140px;font-size: 18px;"></span>	
		<div class="f3"><input type="email" name="mail" placeholder="Enter your email" id="emale" style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
			<i class="glyphicon glyphicon-envelope"></i></div>
		 <span id="emal" style="color: red;font-size: 18px;position:relative;top:80px;left: 8px;"></span>	
		<div class="f4"><select  class="" name="u_city" required  style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
    <option selected="selected"  value="" class="">Select City</option>
    <option value="Noida" >Noida</option>
    <option value="Delhi" >Delhi</option>
    <option value="Lucknow" >Lucknow</option></select>
    <i class="glyphicon glyphicon-home glyphicon-lg"></i>
	</div>
	<div class="f5"><select  class="" name="group" required  style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
    <option selected="selected"  value="" class="">Select home,flat,PG for</option>
    <option value="Boys" >Boys</option>
    <option value="Girls" >Girls</option>
    <option value="Family" >Family</option>
    <option value="Corporate" >Corporate</option>
   <option value="group" >Group</option></select>
    <i class="glyphicon glyphicon-heart"></i>
    </div>
	
	
<div class="f6"><input type="text" placeholder="Enter Location like Sector15.." name="u_location" required  style="position: absolute;width: 300px;height: 50px;border-radius: 50px;font-size: 20px;">
<i class="glyphicon glyphicon-map-marker"></i></div>
 <input type="submit"  name="suBmit" value="Submit" class="button" ></div></div>
</form>
 
  <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
     <script>
	  	function myfun()
	  	{   
	  		var correct_way= /^[A-Za-z_- ]+$/;
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
  		

}
 </script>
 <?php
 extract($_POST);
if(isset($suBmit))
{   
    
    $link = mysqli_connect("localhost","roomszte_anand","anand9828395106","roomszte_roomscom");
   $q = "insert into needpg(Name,Email,Mobile,City,Who_want,Location) values ('$num','$mail','$phone','$u_city','$group','$u_location')";  
  $result = mysqli_query($link,$q);
  if($result)
  { ?>
                  
 <div style="position: absolute;top:0px;left: 0px;color: green;font-size: 41px;"> Registered successfully
 </div> 
                  
                  
                
<?php
                   
    }

}




?>



</body>
</html>







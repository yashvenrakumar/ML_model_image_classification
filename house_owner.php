
<!DOCTYPE html>
<html>
<head>
	<title propriter info></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
		.main{
				position: absolute;
		left: 330px;
		top: 70px;
		width: 800px;
		height: 550px;
		border-radius: 50px;
	
		background-color: white;
		
		}
		.f1{
 
       position: absolute;	
		
		left:150px;
		top: 100px;
		font-size: 22px;
	    color: black;
	    
		}
		.f2{ position:absolute;
		
	
		left:150px;
		top: 140px;
        font-size: 22px;
        color: black;
		}
		.f3{
			 position:absolute;
		color: black;
		font-size: 22px;
		left:150px;
		top: 180px;
		}
		.f4{
			 position:absolute;
		left:150px;
		top: 220px;
        font-size: 22px; 
        color: black;      
		}
		.f5{
			 position:absolute;
    	 left:150px;
		 top: 260px;
		 font-size: 22px;
		 color: black;
		}
		.user{
		    position:absolute;
		    left: 120px;width: 180px;height: 240px; top:120px;border:2px solid black;border-radius: 30px; padding: 5px;
		}
		.show-records{
		    font-size: 22px; color: blue;position: absolute;left: 400px;top:500px;font-weight: bold;
		}
		.add-clients{
		    font-size: 22px;color: blue;position: absolute;left: 800px;top:500px;font-weight: bold;
		}
		.heading{
		    position: absolute;left: 580px;color:green;top:0px;
		}
		@media screen and (max-width:510px){
		    h1{
		       position:absolute;
		       left:10px;
		    }
		    .user{
		        position:absolute;
		        left:90px;
		        top:70px;
		       z-index:1;
		    }
		    .main{
		        position:absolute;
		       width:360px;
		       left:0px;
		       top:0px;
		    }
		    .f1{
		        position:absolute;
		        top:350px;
		        left:10px;
		    }
		    .f2{
		        position:relative;
		        top:380px;
		        left:5px;
		    }
		    .f3{
		        position:relative;
		        top:380px;
		        left:5px;
		    }
		    .f4{
		        position:relative;
		        top:380px;
		        left:5px;
		    }
		    .f5{
		        position:relative;
		        top:385px;
		        left:5px;
		    }
		    .show-records{
		        position:relative;
		        top:580px;
		        left:10px;
		       
		    }
		    
		   .add-clients{
		       position:relative;
		       top:560px;
		       left:10px;
		   } 
		..heading {
		    position:absolute;
		    right:300px;
		    top:200px;
		}    
		}
	</style>
</head>
<body>
<table>	

<?php  
 extract($_POST);
 $mail= $_REQUEST['mail'];
$link=mysqli_connect('localhost','roomszte_anand','anand9828395106','roomszte_roomscom');
 $qry="select Images from employee_signup where Email='$mail' ";
 $resultset=mysqli_query($link,$qry);
 $r=mysqli_fetch_assoc($resultset);
 if($resultset)
 {
  ?>
     <div class="user" >
     <img src= <?php echo "$r[Images] width=160px; height=220px" ?> >
</div>
<?php
} 

$qry1="select Name,Mobile,Adhar,Prop_type,Prop_adr from post_prop where Email='$mail' ";
$result=mysqli_query($link,$qry1);
 while($row=mysqli_fetch_assoc($result))
 { ?>
 <div class="heading">
     	<h1>Proprietor Details</h1>
     	</div>
  <div class="main" style="background-image: url(images/img_4.jpg); opacity:.72 ;">
  	<div class="f1">Name <span style="position: absolute;left: 240px;"><?php echo "$row[Name]";?></span></div>
  	<div class="f2"> Mobile number <span style="position: absolute;left: 240px"> <?php echo "$row[Mobile]";?></span></div>
    <div class="f3">Adhar no.<span style="position: absolute;left: 240px">  <?php echo "$row[Adhar]";?></span></div>
    <div class="f4">Property type <span style="position: absolute;left: 240px"> <?php echo "$row[Prop_type]";?></span></div>
    <div class="f5">Property address <span style="position: absolute;left: 240px"> <?php echo "$row[Prop_adr]";?></span></div>
  </div>

  <?php
}

?>
<div class="show-records">
<a href="form2.php?email=<?php echo "$mail"?>">SHOW ALL RECORDS</a>
</div>
</br>
</br>
<div class="add-clients">
<a href="form.php?email=<?php echo "$mail"?> " >ADD NEW CLIENTS</a> 
</div>



</table> 
</body>
</html>

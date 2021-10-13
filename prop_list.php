<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RoomSCom Services Private Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--sabse important yahi hai-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">     <!--jo slider chl rha uske liye hai-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    <link rel="icon" type="image/jpg" href="images/logo.jpeg">
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
 <link rel="stylesheet" href="css/style.css">
   
    
    <link rel="stylesheet" href="rana.css">
    
    <link href="main.css" rel="stylesheet" >
     <link rel="stylesheet" href="search.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
     </head>
  <body>  

      
      
  <div class="wrapper">

  <div class="top_navbar">

    <div class="top_menu">

      <div class="logo">
          <img class="fluid" src="images/logo.jpeg" height="60px" width="50px">
         <span>RoomSCom</span>
      </div>

      <ul>
         <li><a href="login_form.html">
          <i class="fas fa-user"></i>
          </a></li>
		  <a href="login_form.html">Login/Register</a>
      </ul>
    </div>
		        	 <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
	  <div class="sidebar">
    <header> <img class="fluid" src="images/logo.jpeg" height="60px" width="50px">
        RoomSCom</header>
  <ul>
      <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
    <li><a href="login_form.html"><i class="fas fa-user"></i>Login/Register</a></li>
    <li><a href="needPG.php"><i class="fas fa-stream"></i>Book Now</a></li>
    <li><a href="post_prop.php"><i class="fas fa-calendar-week"></i>List Your Property</a></li>
    <li><a href="houseowners_signup.php"><i class="fas fa-link"></i> For House Owners</a></li>
    <li><a href="contact1.php"><i class="fas fa-envelope"></i>Contact Us</a></li>
    <li><a href="About.html"><i class="far fa-question-circle"></i>About Us</a></li>
    
  </ul>
</div>
  </div>
  </div>
     
    <form  method="post">
        <img class="fluid" src="images/search.png" height="625px" width="100%" >
       
         
          <div class="div2">
           <select  class="" name="u_city" required  >
    <option selected="selected"  value="" class="">Select amount type</option>
    <option value="Low (3k to 10k) " >Low</option>
    <option value="median(above 10k to 50k)" >median</option>
    <option value="high(above 50k)" >High</option></select>
    <i class="fa fa-rupee" style="position: absolute;color: blue; left: 170px;top:18px;font-size: 22px;"></i>
          </div>
       <div class="div3">
        <select  class="" name="group" required  >
     <option selected="selected"  value="" class="">Select home,flat,PG for</option>
    <option value="Boys" >Boys</option>
    <option value="Girls" >Girls</option>
    <option value="Family" >Family</option></select>
    <i class="fa fa-heart" style="position: absolute;color: blue; left: 170px;top:18px; font-size: 22px;"></i>
    
        </div>
       <div class="div4">
    <select  class="" name="ucity" required >
    <option selected="selected"  value="" class="">Select property type</option>
    <option value="PG" >PG</option>
    <option value="flat" >flat</option>
    <option value="Building" >Building</option></select>
    <i class="fa fa-building" style="position: absolute;left:167px; color: blue;top:20px;font-size: 22px;"></i>
    </div>
       <div class="div5">
         <input type="submit" id="searchBtn" value=" " />
         <i class="fa fa-search" style="position: absolute;font-size: 35px; left: 100px;top: 20px;color: blue;"></i>
    </div>
       
        <div class="div6" > 
      <input type="text" placeholder="What you are looking for ?" required >
       <i class="fa fa-map-marker" style="position: absolute;color: blue;left: 188px; font-size: 22px;top:20px;"></i>
     </div>
      </form>
    
   


<?php
extract($_POST);

$link=mysqli_connect('localhost','roomszte_anand','anand9828395106','roomszte_roomscom');
 $qry="select * from rooms";
 $resultset=mysqli_query($link,$qry);
?>
      
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
         
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Top Properties</h2>
          </div>
        </div>
        <div class="row">
          <?php
          while($r=mysqli_fetch_array($resultset)) {
          ?>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-4 thumbnail"><img src='<?php echo "$r[images]";?>'alt="Image" class="img-fluid"></a>
             <h5><img src="images/location.png" style="height:30px;width:30px;"><?php echo " $r[location] ";?></h5>
	<p class="pop_text">Starting price <i class="fa fa-inr"><?php echo "$r[price]";?></i> </p>
	<p class="pop_price">31 houses</p>
	<a href='property1.php?Id=<?php echo "$r[id]"?>'>Explore Home </a>
            </div>
          </div>
          <?php
           }
          ?>
         </div>
        </div>
      </div>
    
      
      
              <div class="row mt-5" >
          <div class="col-md-12 text-center">
            <div class="site-block-27" >
                <ul >
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>

  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>shortstay </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--sabse important yahi hai-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">     <!--jo slider chl rha uske liye hai-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
 <link rel="stylesheet" href="css/style.css">
   
    
    <link rel="stylesheet" href="rana.css">
    
    <link href="main.css" rel="stylesheet" >
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
extract($_POST);

$link=mysqli_connect('localhost','roomszte_anand','anand9828395106','roomszte_roomscom');
 $qry="select * from rooms where Pro_type='BUILDING'";
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
    
      
</body>
</html>
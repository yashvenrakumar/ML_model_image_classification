<!Doctype html>
<html>
    <head>
        <title>Search bar</title>
        <link rel="stylesheet" href="css/style.css"/>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
        
         #searchBtn{ position: absolute;
           right:480px; 
            margin-top: 292px;
           width: 140px;
           height: 50px;
         }  
         .div2    {   position:relative;
       
        height: 50px;
        left:0px;
        top: 0px;
       }
    
        .div1
       {   position:absolute;
         width: 740px;
         height: 50px;
         left:500px;
         top: 300px;
        background-color: red;
        border-style: solid;
       border-width: 10px;
       border-color: #808080;
      }
       .div3    {   position:relative;
        width: 20px;
        height: 0px;
        left:200px;
        top: -50px;
       }
       .div4    {   position:absolute;
        
        
        left:400px;
        top: 0px;
        
       }
        .fa-search { position: absolute;
                     top: 310px;color: blue; 
                     font-size: 22px;
                     
                     left: 150px;
                   }
    #searchBtn:hover {
      background-color:green;
    }
    input {
       border-style: solid;
       border-width: 10px;
       border-color: #808080;
       padding: 24px;
       top:-8px;

    }


        </style>
    </head>
    <body>
      <form  method="post">
           <img class="fluid" src="images/search.png" height="625 px" width="100%">
          <div clss="div1">
          <div class="div6" >
       <input type="text" placeholder="What you are looking for ?" style="position:absolute;width: 200px;top:-540px; left:-400px; padding: 17px;">
        <i class="fa fa-map-marker" style="position: absolute;color: blue;left: -27px; font-size: 22px;top:15px;"></i>
     </div>
          <div class="div2">
           <select  class="" name="u_city" required  style="position: absolute;width: 200px;height: 50px;">
    <option selected="selected"  value="" class="">Select amount type</option>
    <option value="Low (3k to 10k) " >Low</option>
    <option value="median(above 10k to 50k)" >median</option>
    <option value="high(above 50k)" >High</option></select>
    <i class="fa fa-rupee" style="position: absolute;color: blue; left: 170px;top:18px;font-size: 22px;"></i>
          </div>
       <div class="div3">
        <select  class="" name="group" required  style="position: absolute;width: 200px;height: 50px;">
     <option selected="selected"  value="" class="">Select home,flat,PG for</option>
    <option value="Boys" >Boys</option>
    <option value="Girls" >Girls</option>
    <option value="Family" >Family</option></select>
    <i class="fa fa-heart" style="position: absolute;color: blue; left: 163px;top:18px; font-size: 22px;"></i>
    
        </div>
       <div class="div4">
    <select  class="" name="ucity" required  style="position: absolute;width: 200px;height: 50px;">
    <option selected="selected"  value="" class="">Select property type</option>
    <option value="PG" >PG</option>
    <option value="flat" >flat</option>
    <option value="Building" >Building</option></select>
    <i class="fa fa-building" style="position: absolute;left:167px; color: blue;top:20px;font-size: 22px;"></i>
    </div>
    <div class="div5" style="position: relative; top: -342px; left: 480px;">
         <input type="submit" id="searchBtn" value=" " />
          <i class="fa fa-search" style="position: absolute;font-size: 30px; left: 175px;top: 302px;"></i>
    </div>
          </div>
       
      </form>




    </body>  

    </html>
     
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width:28%;
  position: absolute;
  right:100px;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  /*transition: 0.3s;*/ 
  font-size: 17px;
  maximum-width:300px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}


/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border-top: none;
  position: absolute;
  right:160px;
}
.tabcontentsecond {
  display: none;
  padding: 6px 12px;
  border-top: none;
  position: absolute;
  right:100px;
}
.tabcontent img{
    padding-top: 70px;
}
.tabcontentsecond img{
    padding-top: 70px;
}
.tabcontent button{
    border-radius:8px;
    background-color: black;
    color:white;
    height:50px;
    cursor:pointer;
    width:250px;
}
.tabcontentsecond button{
    border-radius:8px;
    background-color: black;
    color:white;
    height:50px;
    cursor:pointer;
    width:250px;
}
</style>
</head>
<body>


<h2>Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">FREE VISIT</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">BOOK NOW&PAY NOW</button>
  
</div>

<div id="London" class="tabcontent">
    <img src="https://www.roomsoom.com/images/others/visit-house.png">
       <h3>London</h3>
  <p>London is the capital city of England.</p>
   <button class="btn-bookpay" >Schedule Free Visit</button>
</div>

<div id="Paris" class="tabcontentsecond">
      <img src="https://www.roomsoom.com/images/others/paytobook.png">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
  <button class="btn-bookpay" >PAY HERE</button>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 

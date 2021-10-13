<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
   <?php
      $id=$_REQUEST['Id'];
      $link=mysqli_connect('localhost','roomszte_anand','anand9828395106','roomszte_roomscom');
      $qry="select location,price,Pro_type,Home_For from rooms where id='$id'";
      $resultset=mysqli_query($link,$qry);
      $r=mysqli_fetch_assoc($resultset);
      if($resultset)
      $pro=$r[price];
      $loc=$r[location];
      $pro_ty=$r[Pro_type];
      $homeFOR=$r[Home_For];
  ?>
   
   
   
	<h1 style="position:absolute;left:510px;">Merchant Check Out Page</h1>
	<pre>
	</pre>
	<div style="position:absolute;left:500px;top:100px;">
	<form method="post" action="pgRedirect.php">
		<table border="1" width="400px" cellpadding="10px">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
		<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" .rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2"  name="CUST_ID" autocomplete="off" readonly value="CUST001"</td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" readonly value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" readonly value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Location ::*</label></td>
					<td><input id="loc" tabindex="4" 
						 name="Locat" autocomplete="off" readonly value="<?php echo "$loc" ?>">
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td><label>PROP_TYPE ::*</label></td>
					<td><input id="prop" tabindex="4" maxlength="12"
						size="12" name="Prop" autocomplete="off" readonly value="<?php echo "$pro_ty" ?>">
					</td>
				</tr>
				<tr>
					<td>7</td>
					<td><label>HOME_FOR ::*</label></td>
					<td><input id="home" tabindex="4" maxlength="12"
						size="12" name="Home" autocomplete="off" readonly value="<?php echo "$homeFOR" ?>">
					</td>
				</tr>
				<tr>
					<td>8</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT" readonly
						value="<?php echo "$pro" ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
	
</body>
</html>
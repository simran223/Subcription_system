<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Card Information</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-xl" style="margin-top: 10%; ">
   <div class="row">
      <div class="col-6 my-5 mx-5">
	<div>
		<h2>Complete Payment</h2>
		<p>Enter your Debit or Credit Card details below</p>
		<input type="text" name="cardno" id="cardno" required="cardno" placeholder="Card Number" style="width:200px; padding: 10px;">
		<input type="text" name="date" id="date" required="date" placeholder="MM/YY" style="width:80px; padding: 10px;">
		<input type="text" name="cvc" id="cvc" required="cvc" placeholder="CVC" style="width:60px; padding: 10px"><br><br>
		<button>Confirm Payment</button>
</div>
		 </div>
      <div class="col-4	 pt-5" style="background-color: lightgrey;">
      	<h2>Order Summary</h2>
      	<style type="text/css">
      		td{
      			float: right;
      			margin-left: 150px;
      		}
      	</style>
      	<table>
      		<tr>
      			<th>Plan Name</th>
      			<td>Basic</td>
      		</tr>

      		<tr>
      			<th>Biling Cycle</th>
      			<td>Monthly</td>
      		</tr>

      		<tr>
      			<th>Plan Price</th>
      			<td>₹200/mo</td>
      		</tr>
      	</table>
	</div>
	
   </div>
</div>

</body>
</html>
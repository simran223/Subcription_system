<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monthly Plans</title>
	<link rel="stylesheet" href="style.css">

	<style type="text/css">
		
		h1 {
        color: green;
    }
           
    /* toggle in label designing */
    .toggle {
        position : relative ;
        display : inline-block;
        width : 120px;
        height : 52px;
        background-color: midnightblue;
        border-radius: 30px;
        border: 2px solid gray;
    }
           
    /* After slide changes */
    .toggle:after {
        content: '';
        position: absolute;
        width: 60px;
        height: 50px;
        border-radius: 50%;
        background-color: white;
        opacity: 95%;
        top: 1px;
        left: 1px;
        transition:  all 0.5s;
    }
           
    /* Toggle text */
    p {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
           
    /* Checkbox checked effect */
    .checkbox:checked + .toggle::after {
        left : 53%;
    }
           
    /* Checkbox checked toggle label bg color */
    .checkbox:checked + .toggle {
        background-color: midnightblue;
    }
           
    /* Checkbox vanished */
    .checkbox {
        display : none;
    }
	</style>
</head>
<body style="background-color: white;">
<center style="margin-top: 70px;">
	<h1 style="color:black;">Yearly Pack</h1>
	<table style="align-content: center;">
		<tr>
			<th><input type="checkbox" id="switch"
                    class="checkbox" checked />
        <label for="switch" class="toggle">
             
 
<p style="color: white;"><a href="monthly.php" style="color:white;">Monthly</a>    Yearly</p>
</label></th>
		
		<th class="box active">Mobile</th>
		<th class="box">Basic</th>
		<th class="box">Standard</th>
		<th class="box">Premium</th>
		</tr>

		<tr>
		<th>Monthly price</th>
		<td class="change">₹1000</td>
		<td>₹2000</td>
		<td>₹5000</td>
		<td>₹7000</td>
		</tr>

		<tr>
		<th>Video quality</th>
		<td class="change">Good</td>
		<td>Good</td>
		<td>Better</td>
		<td>Best</td>
		</tr>

		<tr>
		<th>Resolution</th>
		<td class="change">480p</td>
		<td>480p</td>
		<td>1080p</td>
		<td>4k +HDR</td>
		</tr>

		<tr>
		<th>Device you can use to watch</th>
		<td class="change">Phone<br><br>Tablet</td>
		<td>Phone<br><br>Tablet<br><br>Computer<br><br>TV</td>
		<td>Phone<br><br>Tablet<br><br>Computer<br><br>TV</td>
		<td>Phone<br><br>Tablet<br><br>Computer<br><br>TV</td>
		</tr>
		
	</table>

	<a href="active.php"><button style="background-color: midnightblue; color: white; height: fit-content; width: 250px; padding: 10px;">Next</button></a>
</center>
</body>
</html>
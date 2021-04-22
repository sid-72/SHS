<?php
  require('d.php');
?>
<html lang="en">
<head>
	<title>Airport Information</title> 
	<?php include "./head.html" ?>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
	<?php include "./header.html" ?>
	
	<h2 style="text-align:center;">Airport records</h2>
	<div style="margin-top:0px;margin-left:1280px;">
			<b>See here for the reference</b>
			<select style="width:198px;height:40px;">
				<option value="India">India</option>
				<option value="United States">United States</option>
				<option value="Germany">Germany</option>
				<option value="Kerala">Kerala</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Goa">Goa</option>
				<option value="Texas">Texas</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Hesse">Hesse</option>
				<option value="Delhi">Delhi</option>
				<option value="New York">New York</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kentucky">Kentucky</option>
				<option value="West Bengal">West Bengal</option>
				<option value="California">California</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Florida">Florida</option>
			</select><br>
			<input type="text" id="myInput" placeholder="Type country,state,city">
	</div>
	<table width="80%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr style="background-color:#FF0000">
			<th style="text-align:center;"><strong>Airport Name</strong></th>
			<th style="text-align:center;"><strong>STATE</strong></th>
			<th style="text-align:center;"><strong>COUNTRY</strong></th>
			<th style="text-align:center;"><strong>CITY</strong></th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php
			$sel_query="SELECT * FROM airport";
			$result = mysqli_query($con,$sel_query);
			while($row = mysqli_fetch_assoc($result)) 
		{ ?>

			<tr style="background-color:pink">
				<td style="text-align:center;"><?php echo $row["AP_NAME"]; ?></td>
				<td style="text-align:center;"><?php echo $row["STATE"]; ?></td>
				<td style="text-align:center;"><?php echo $row["COUNTRY"]; ?></td>
				<td style="text-align:center;"><?php echo $row["CITY"]; ?></td>
			</tr>
			<?php  } ?>
	</tbody>
	</table>
	
	<br><br>
<?php include "./footer.html" ?>	
</body>
</html>

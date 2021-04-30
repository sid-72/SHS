<?php
	require('d.php');
?>
	<html lang="en">

	<head>
		<title>Tickets Prices</title>
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
		<h2 style="text-align:left;color:red;margin-left:50px;"><u><b>Ticket prices</b></u></h2>
			<div style="margin-top:20px;margin-left:1050px;">
				<b>See cities for reference</b>
					<select  style="width:198px;height:40px;">
						<option value="Calicut">Calicut</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chennai">Chennai</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Goa">Goa</option>
						<option value="Fort Worth">Fort Worth</option>
						<option value="Indore">Indore</option>
						<option value="Frankfurt">Frankfurt</option>
						<option value="Houston">Houston</option>
						<option value="Delhi">Delhi</option>
						<option value="New York City">New York City</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Louisville">Louisville</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Pune">Pune</option>
						<option value="San Francisco">San Francisco</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
						<option value="Tampa">Tampa</option>
						<option value="Calicut">Calicut</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chennai">Chennai</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Goa">Goa</option>
						<option value="Fort Worth">Fort Worth</option>
						<option value="Indore">Indore</option>
						<option value="Frankfurt">Frankfurt</option>
						<option value="Houston">Houston</option>
						<option value="Delhi">Delhi</option>
						<option value="New York City">New York City</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Varanasi">Varanasi</option>
						<option value="Louisville">Louisville</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Pune">Pune</option>
						<option value="San Francisco">San Francisco</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
						<option value="Tampa">Tampa</option>
					</select>
					<br>
					<input type="text" id="myInput" placeholder="type city,class for search">
			</div><br><br>
			<table class="table table-striped table-bordered  table-dark">
				<thead>
					<tr>
						<th scope="col" style="text-align:center;"><strong>SOURCE</strong></th>
						<th scope="col" style="text-align:center;"><strong>DESTINATION</strong></th>
						<th scope="col" style="text-align:center;"><strong>CLASS</strong></th>
						<th scope="col" style="text-align:center;"><strong>PRICE</strong></th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php
		           $sel_query="Select * from ticket1";
		           $result = mysqli_query($con,$sel_query);
		           while($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td scope="row" align="center">
								<?php echo $row["SOURCE"]; ?>
							</td>
							<td align="center">
								<?php echo $row["DESTINATION"]; ?>
							</td>
							<td align="center">
								<?php echo $row["CLASS"]; ?>
							</td>
							<td align="center">
								<?php echo $row["PRICE"]; ?>
							</td>
						</tr>
						<?php  } ?>
				</tbody>
			</table>
			<br><br>
		<?php include "./footer.html" ?>	
	</body>
	</html>
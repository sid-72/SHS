<?php
include('a.php');
require('d.php');
?>
	<html lang="en">

	<head>
		<title>Profile</title>
		<?php include "./head.html" ?>
	</head>

	<body>
		<?php include "./header.html" ?>
		
			<?php
            $username=$_SESSION['username'];
            $query2="SELECT * FROM users NATURAL JOIN images WHERE username='$username'";
            $result2=mysqli_query($con,$query2) or die(mysql_error());
            $row2=mysqli_fetch_assoc($result2);
        ?>
		<div class="card" style="width: 38rem;margin-left:520px;">
        <img src="<?php echo $row2['Pic']?>" height="337" width="120" class="card-img-top">
        <div class="card-body">
         <ul class="list-group list-group-flush">
         <li class="list-group-item">Name:- <?php echo $row2['Name']?></li>
          <li class="list-group-item">Email:- <?php echo $row2['email']?></li>
         <li class="list-group-item">Passport Number:- <?php echo $row2['PASSPORTNO']?></li>
         <li class="list-group-item">Age: <?php echo $row2['AGE']?></li>
	      <li class="list-group-item">Gender: <?php echo $row2['SEX']?></li>
		  <li class="list-group-item">City: <?php echo $row2['CITY']?></li>
		  <li class="list-group-item">State: <?php echo $row2['STATE']?></li>
		  <li class="list-group-item">Country: <?php echo $row2['COUNTRY']?></li>
         </ul>
         </div>
		 </div>
		 
		 <br><br>
		 <h3 style="margin-left:100px;color:red;">Booking History</h3><br><br>
		 <div class="container">
		 <div class="row">
		 <?php
		 $user = $_SESSION['username'];
		 $query3 = "SELECT * FROM ticket WHERE username='$user'";
         $result3 = mysqli_query($con,$query3) or die(mysql_error());	
        
         while($row3=mysqli_fetch_assoc($result3))		 
			{
		 ?>
		 <div class="col-sm-4">
		 <div class="card" style="width: 25rem;">
		 <div class="card-body">
		 <ul class="list-group list-group-flush">
		 <li class="list-group-item">Name: <?php echo $row3['Name']?></li>
         <li class="list-group-item">Flightcode:- <?php echo $row3['FLIGHTCODE']?></li>
         <li class="list-group-item">Source:- <?php echo $row3['SOURCE']?></li>
         <li class="list-group-item">Destination: <?php echo $row3['DESTINATION']?></li>
	     <li class="list-group-item">Traveldate: <?php echo $row3['TRAVELDATE']?></li>
		 <li class="list-group-item">Class: <?php echo $row3['CLASS']?></li>
         </ul>
         </div>
		 </div>
		 </div>
			<?php 
			}
		
		 ?>
		 </div>
		 </div>

		<br><br>		
    <?php include "./footer.html" ?>
	</body>
	</html>
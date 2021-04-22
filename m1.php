<?php
include('a.php');
require('d.php');
?>
<html lang="en">
<head>
<title>Home</title>
<?php include "./head.html" ?>
</head>
<body>
<?php include "./header.html" ?>

<?php
 if(isset($_POST['submit']))
 {
   $username=$_SESSION['username'];
   $apname=$_POST['apname'];
   $bdate = date("y-m-d");
   $name =$_POST['name'];
   $source = $_POST["source"];
   $dest=$_POST["destination"];
   $tdate=$_POST["date"];
   $class= $_POST["class"];
   $age=$_POST["age"];
   $sex=$_POST["sex"];
   $cookie_name="place";
   $cookie_value=$dest;
   setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/");
   $q1="SELECT * FROM flight WHERE SOURCE='$source' and DESTINATION='$dest'";
   $r1=mysqli_query($con,$q1) or die(mysql_error());
   $ro1=mysqli_fetch_assoc($r1);
   $c=mysqli_num_rows($r1);
   
   if($c==0)
   {
	 echo"<b style='color:Tomato;margin-left:20px;'>No Flights found For This route Please Check the route Via Mumbai or Delhi or check the details again</b>";
   }
   else
   {
     $fcode=$ro1["FLIGHTCODE"];
	 $arr=$ro1["ARRIVAL"];
	 $dep=$ro1["DEPARTURE"];
     $ins_query="INSERT INTO ticket(username,AP_NAME,FLIGHTCODE,SOURCE,DESTINATION,BOOKINGDATE,TRAVELDATE,CLASS,Name,Age,Sex)values
      ('$username','$apname','$fcode','$source','$dest','$bdate','$tdate','$class','$name','$age','$sex')";
    if(mysqli_query($con,$ins_query))
    {
	
     $query1="SELECT * FROM users WHERE username='$username'";
     $result1=mysqli_query($con,$query1) or die(mysql_error());
     $row1=mysqli_fetch_assoc($result1);
     $semail ="u18co109@coed.svnit.ac.in";
     $email=$row1["email"];
     $headers = "From: <" . $semail . ">\n" ;
     $headers .= "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=utf-8\n";
     $headers .= "Return-Path: " . $semail . "\n";
     $headers .= "X-Mailer: PHP/" . phpversion();
     $subject = "Mail for Flight ticket";
	 $status="Confirmed";
     $message = "Your ticket has been confirmed";
     if (mail($email, $subject, $message, $headers)) 
	 {
	  echo"<b style='color:red;'>Ticket has been booked for you will get the mail soon.Thanks for Using Our Services,Happy journey!</b>";
      echo"<br><br>";
     ?>
	 <div class="container" style="margin-left:80px;">
     <div class="card" style="width: 40rem;margin-left:80px;">
     <img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="337" width="120" class="card-img-top">
     <div class="card-body">
     <h2 class="card-title" style="margin-left:65px;">Ticket</h2>
     </div>
     <ul class="list-group list-group-flush">
     <li class="list-group-item">Airport:- <?php echo $apname; ?></li>
	   <li class="list-group-item">Ticket Status:- <?php echo "<b style='color:red;'>".$status."</b>"; ?></li>
     <li class="list-group-item">Flightcode:- <?php echo $fcode; ?></li>
     <li class="list-group-item">Name:- <?php echo $name; ?></li>
     <li class="list-group-item">Source:- <?php echo $source; ?></li>
	   <li class="list-group-item">Destination:- <?php echo $dest;?></li>
	   <li class="list-group-item">Class:- <?php echo $class;?></li>
	   <li class="list-group-item">Age:- <?php echo $age;?></li>
	   <li class="list-group-item">Gender:- <?php echo $sex;?></li>
	   <li class="list-group-item">Arrival time:- <?php echo $arr;?></li>
	   <li class="list-group-item">Departure time:- <?php echo $dep;?></li>
     </ul>
     </div>
     </div>
	 <?php
     }
	}
     else
	 {
	  echo"<b style='color:red;margin-left:20px;'>You can't book multiple tickets for same passenger on a particular day</b>";
     }
    }
 
    }
?>

<br><br>
<?php include "./footer.html" ?>
</body>
</html>

<?php
include('a.php');
require('d.php');
?>
<html lang="en">
<head>
	<title>SHS flight booking</title>
	<?php include "./head.html" ?>
  <script>
      $(document).ready(function() {  
	    $("#sg").fadeIn();
        $("#div1").fadeIn();
        $("#b1").click(function(){
		$("#div1").fadeOut();
		$("#sg").fadeOut();
    });
	});
      
  </script>
  <script>
    $(document).ready(function(){
  $("#p1").mouseenter(function(){
    $("#cl").fadeIn();
  });
});
 
  </script>

</head>
<body>

	<?php include "./header.html" ?>
	<div id="chain" style="background-color:#ffbf00;height:48px;width:auto;">
	<p id="salutation" style="color:white;font-size:24px;padding-top:13px;padding-left:10px;"></p>
	<script>
	var g;
	var time=new Date().getHours();
	if(time<12){
		g="Good Morning";
	}
	else if(time<17)
	{
		g="Good afternoon";
	}
	else
	{
		g="Good evening";
	}
	document.getElementById("salutation").innerHTML=g;
	</script>&nbsp;&nbsp;
	
	<?php
		if(isset($_SESSION['username'])){
		$usernam = $_SESSION['username'];
		$qu = "SELECT Name FROM users WHERE username='$usernam'";
        $re = mysqli_query($con,$qu) or die(mysql_error());	 
	    $row5 = mysqli_fetch_assoc($re);
	    $nam = "<h3>".$row5['Name']."</h3>";
		echo $nam;
		}
	?>
    </div>
  
	 <br><br>
	 <h3 style="color:red;margin-left:10px;" id="sg">Suggestions for flights</h3><br>
	<?php 
	$user = $_SESSION["username"];
	$query1="SELECT * FROM ticket WHERE username='$user' ORDER BY TRAVELDATE DESC LIMIT 3";
	$result1=mysqli_query($con,$query1);
	$c = mysqli_num_rows($result1)
	?>
	<div class="card bg-info" id="div1" style="width: 35rem;margin-left:10px;">
	<div class="card-body">
	<ul class="list-group list-group-flush">
	<?php
	if($c!=0){
	while($row1=mysqli_fetch_assoc($result1)){?>
    <li class="list-group-item"><?php echo "<b>".$row1['SOURCE']."</b>"?><?php echo "<b style='margin-left:35px;;'>".$row1['DESTINATION']."</b>"?></li>
	<?php }
	?>
	</ul>
	<?php 
	}
	else{?>
	
		<?php echo "<b style='color:red;margin-left:-10px;'>We will show the results here</b>";?>
	<?php
	}
	?>
	<button id="b1" class="btn btn-primary" style="height:30px;width:70px;margin-left:225px;margin-bottom:-10px;">Close</button>
	</div>
	</div>
	<br><br><br>

	<button style="margin-left:10px;text-align:center;height:30px;width:200px;" class="btn btn-info" id="p1">&nbsp;Places you may like</button><br><br>
    &nbsp;
    <div class="container" style="margin-left:10px;display:none;" id="cl">
    <div class="row">
    <?php
	 $username = $_SESSION['username'];
     $query = "SELECT CITY FROM users WHERE username='$username'";
     $result = mysqli_query($con,$query) or die(mysql_error());	 
	 $row = mysqli_fetch_assoc($result);
	 $city = $row["CITY"];
	 $q1 = "SELECT DESTINATION FROM flight WHERE SOURCE='$city' LIMIT 8";
	 $r1 = mysqli_query($con,$q1) or die(mysql_error());
	 while($ro = mysqli_fetch_assoc($r1)){?>

   <div class="col-sm-3">
   <div class="card" style="width: 27rem;margin-left:0px;">
   <a href='https://en.wikipedia.org/wiki/<?php echo $ro["DESTINATION"];?>' target="_blank">
   <img src="images/<?php echo $ro["DESTINATION"];?>.jpg" height="240" width="120" class="card-img-top"></a>
   <div class="card-body">
   <h2 class="card-title" style="margin-left:50px;"><?php echo $ro["DESTINATION"];?></h2>
   </div>
   </div><br>
   </div>
   <?php } ?>
   </div>
   </div>
   <br><br><!--
<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
	  <li data-target="#myCarousel" data-slide-to="6"></li>
	  <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/mq1.jpg" style="width:130%;height:70%;">
      </div>

      <div class="item">
        <img src="Pics/mq2.jpg" style="width:130%;height:70%;">
      </div>
    
      <div class="item">
        <img src="Pics/mq3.jpg" style="width:130%;height:70%;">
      </div>
	  
	  <div class="item">
        <img src="Pics/mq4.jpg" style="width:130%;height:70%;">
      </div>
	  
	  <div class="item">
        <img src="Pics/mq5.jpg" style="width:130%;height:70%;">
      </div>
	  
	  <div class="item">
        <img src="Pics/mq6.jpg" style="width:130%;height:70%;">
      </div>
	  
	  <div class="item">
        <img src="Pics/mq7.jpg" style="width:130%;height:70%;">
      </div>
	  
	  <div class="item">
        <img src="Pics/mq8.jpg" style="width:130%;height:70%;">
      </div>
	  
    </div>
	
	
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br><br><br>-->


	<h2 style="margin-left:460px;color:red;">Most Searched Destinations</h2>
<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/mumbai.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
        </div>
      </div>

      <div class="item">
        <img src="Pics/delhi.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="Pics/goa.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Goa</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Chand.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chandigarh</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Kerala.jpeg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Kerala</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
      </div>
	  
    </div>
	
	

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	
	<br><br>
	<div style="margin-left:100px;padding-right:40px;">
		<h2 style="color:red;padding-left:40px;">Why SHS?</h2>
		<p style="color:red;padding-left:40px;padding-right:40px;">SHS is a prominent market player in the Indian Online travel sector and is the most popular air ticket booking platform that helps you save money on any flight bookings. In addition to providing the best online flight tickets deals, SHS enables customers to save money on fares every time they book tickets. You might visit our website or download the SHS mobile app for booking your tickets on the go. Exclusive coupons and attractive discounts available. The secure payment channel and user-friendly interface helps user to enjoy a seamless flight ticket booking experience.</p>
	</div>

<?php include "./footer.html" ?>
</body>
</html>
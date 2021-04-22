<?php
require('d.php');
?>
<html lang="en">
<head>
<title>Popular Routes</title>
<?php include "./head.html" ?>
</head>
<body>
<?php include "./header.html" ?>
<?php
if(isset($_POST['btn']))
{
$result= $_POST['search'];
if (strcmp($result,"ChennaiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Chennai' AND DESTINATION='Mumbai'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/chennai.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chennai</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/mumbai.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
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
  </div>
  </div><br>

<?php  } 

if (strcmp($result, "DelhiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='Mumbai' ";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/delhi.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/mumbai.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Mumbai</h3>
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
  </div>
  </div><br>

<?php  }
if (strcmp($result, "GoaDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Goa' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/goa.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Goa</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/delhi.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
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
  </div>
  </div><br>

<?php  }
if (strcmp($result, "FrankfurtDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Frankfurt' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/delhi.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
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
  </div>
  </div><br>

<?php  }

  if (strcmp($result, "CalicutSanFrancisco") == "true")
  {
	$query2="SELECT * FROM flight WHERE SOURCE='Calicut' AND DESTINATION='San Francisco'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/calicut.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Calicut</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/sanfrans.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">San Fransisco</h3>
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
  </div>
  </div><br>
	

<?php  }

if(strcmp($result, "DelhiNewYorkCity") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='New York City'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
	<table width="65%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr style="background-color:#FF0000">
    <th><strong>FLIGHTCODE</strong></th>
    <th><strong>SOURCE</strong></th>
    <th><strong>DESTINATION</strong></th>
    <th><strong>ARRIVAL TIME</strong></th>
    <th><strong>DEPARTURE TIME</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr style="background-color:pink">
    <td align="center"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="center"><?php echo $row2["SOURCE"]; ?></td>
    <td align="center"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="center"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="center"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div class="container" style="margin-left:100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pics/delhi.jpeg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Delhi</h3>
        </div>
	  </div>

      <div class="item">
        <img src="Pics/newyork.jpg" style="width:130%;height:50%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">NewYorkCity</h3>
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
  </div>
  </div><br><br><br><br>


<?php
   }
}
else{
?>
<h2 style="margin-left:560px;color:red;">Popular trips</h2>
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
        <img src="Pics/chennai.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Chennai</h3>
        </div>
      </div>

      <div class="item">
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
        <img src="Pics/Frankfurt.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Frankfurt</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/calicut.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">Calicut</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/sanfrans.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">San Fransisco</h3>
        </div>
      </div>
	  
	  <div class="item">
        <img src="Pics/newyork.jpg" style="width:130%;height:70%;">
		<div class="carousel-caption d-none d-md-block">
        <h3 style="color:red;">NewYorkCity</h3>
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
	

<form action="" method="post" style="margin-top:177px;margin-left:25px;">
<select name="search" style="width:198px;height:40px;">
<option value="ChennaiMumbai">Chennai Mumbai</option>
<option value="DelhiMumbai">Delhi Mumbai</option>
<option value="GoaDelhi">Goa Delhi</option>
<option value="FrankfurtDelhi">Frankfurt Delhi</option>
<option value="CalicutSanFrancisco">Calicut SanFrancisco</option>
<option value="DelhiNewYorkCity">Delhi NewYorkCity</option>
</select><br>
<input type="submit" name="btn" value="Search"/>
</form>
<?php }?>
<br>
<?php include "./footer.html" ?>
</body>	
</html>





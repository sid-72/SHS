<?php
error_reporting(0);
require('d.php');
?>
<html lang="en">
<head>
<title>Sign up</title>
<?php include "./head.html" ?>
</head>
<body>
    <?php include "./header.html" ?>
	
<?php
    
	if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$filename= $_FILES['uploadfile']['name'];
	$tempname= $_FILES['uploadfile']['tmp_name'];
	$folder= "Pics/".$filename;
	move_uploaded_file($tempname,$folder);
	$sql="INSERT INTO images(username,Pic) VALUES('$username','$folder')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	  	echo "<div class='form'>
		<h3>You have registered successfully.</h3>
		<br/>Click here to <a href='l.php' class='pa'>Login</a></div>";
	}
 	else{
		 echo"Image exists Please use new one";
 	}
 }
 else {?>
 
<form action="" method="post" enctype="multipart/form-data">
   <input type="text" name="username" placeholder="Enter username" required /><br><br>
   <input type="file" name="uploadfile" value=""/>Photo<br><br>
   <input type="submit" name="submit" value="Submit"/>
 </form>
 <?php }?>
 
 <br><br><br>
 <?php include "./footer.html" ?>
 </body>
 </html>

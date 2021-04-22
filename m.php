<?php
include('a.php');
?>
<html lang="en">
<head>
<title>Home</title>
<?php include "./head.html" ?>
</head>
<body>
    <?php include "./header.html" ?>
	
<?php
require('d.php');
$name=$_SESSION['username'];
$email = $_SESSION['email'];
$headers = "From: <" . $email . ">\n" ;
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "Return-Path: " . $email . "\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$subject = "Recovery of Password";
$query="SELECT password FROM users where username='$name'";
$result = mysqli_query($con,$query) or die(mysql_error());
$row = mysqli_fetch_assoc($result);
$message = $row['password'];
if (mail($email, $subject, $message, $headers)) {
    	echo"<div class='form'>
<h3 style='color:red;'>Password sent Successfully check your mails</h3>
<br/>Click here to <a class='pa' href='l.php'>Login</a></div>";
}
?>
<br><br>	
<?php include "./footer.html" ?>
</body>
</html>


<html lang="en">

<head>
	<title>Password recovery</title>
	<?php include "./head.html" ?>
</head>

<body>
	<?php include "./header.html" ?>
	
		<?php
        session_start();
        require('d.php');
        if (isset($_POST['submit'])){
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con,$username);
            $email=$_POST['email'];
            $query = "SELECT * FROM users WHERE username='$username' and email='$email'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
              if($rows==1){
	              $_SESSION['username']=$username;
	              $_SESSION['email']=$email;
                  header("Location: m.php");
                 }
			  else
			     {
                  echo"<b style='color:red'>You are not a Registered Person</b>";
                 }
         } else
           {?>
			<div class="form">
				<h1 style="color:green;">For Password</h1>
				<form action="" method="post">
					<input type="text" name="username" placeholder="Enter username" required />
					<br>
					<input type="email" name="email" placeholder="Enter email" required />
					<br>
					<input name="submit" type="submit" value="Send Mail" /> </form>
			</div>
		    <?php } ?>
			
			
			<br><br>
				

<?php include "./footer.html" ?>
</body>
</html>
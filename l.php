<html lang="en">
<head>
<title>Login page</title>
<?php include "./head.html" ?>
</head>
<body class="example">

<?php include "./header.html" ?>
	

<?php
require('d.php');
session_start();
if (isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
if(isset($_POST["rememberme"]))
{
setcookie ("username", $username, time()+ (86400 * 30));
setcookie ("userpass", $password, time()+ (86400 * 30));
} 
else {
setcookie("username", "");
setcookie("userpass", "");
}
$query = "SELECT * FROM users WHERE username='$username'
and password='$password'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1){
$_SESSION['username'] = $username;
header("Location: H.php");
}
else{
	echo "<b style='color:red;margin-left:10px;'>Wrong password</b>";?>
    <br><br><a href='pass.php' style="text-decoration:none;margin-left:10px;"><b>Forgot Password?</b></a>
<?php
}   
}
else{
?>
<div class="form" style="margin-top:-70px;">
<form action="" method="post" name="login">
<!--
<div class="imgcontainer">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRMMvktNrU0p6IMp3Jq79ebNeedXbdJQQQbA&usqp=CAU" class="avatar" style="height:100px;width:100px;">
</div>-->
<input type="text" name="username" placeholder="Enter username" value='<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>' onkeyup="validateuser(this.value)" required />
<p style="color:red;"><span id="username"></span></p>
<div class="container" style="margin-left:-15px;">
<input type="password" name="password" id="password" value='<?php if(isset($_COOKIE["userpass"])) { echo $_COOKIE["userpass"]; } ?>'  placeholder="Enter password" required />
<i class="far fa-eye" id="togglePassword"></i>
</div><br>
<input type="checkbox" name="rememberme" /> <b style="color:red;">&nbsp;Remember me</b>
<br>
<input name="submit" type="submit" value="Login" />
</form>
<script>
            function validateuser(str) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("username").innerHTML = this.responseText;
                 }
               };
               xmlhttp.open("POST", "validatepass.php?q=" + str, true);
               xmlhttp.send();
            }
			
            
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
             const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
             password.setAttribute('type', type);
             // toggle the eye slash icon
             this.classList.toggle('fa-eye-slash');
});


</script>
<p>New User? <a href='r.php' style="text-decoration:none;"> <b>Sign up</b></a></p>
<a href='pass.php' style="text-decoration:none;"><b>Forgot Password?</b></a>
</div><br><br><br>
<?php } ?>
<?php include "./footer.html" ?>
</body>
</html>
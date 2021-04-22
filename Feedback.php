<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<title>Feedback</title>
<?php include "./head.html" ?>
<script>
$(document).ready(function(){
  $(".i").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $(".i").blur(function(){
    $(this).css("background-color", "white");
  });
});
</script>
</head>
<body>
<?php include "./header.html" ?>    

<?php 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$source=$_POST['source'];
	$dest=$_POST['dest'];
	$q=$_POST['query'];
	$t=$_POST['tarea'];
	$query="INSERT INTO feedback(Name,email,SOURCE,DESTINATION,QUERY,Feed) VALUES('$name','$email','$source','$dest','$q','$t')";
	$result = mysqli_query($con,$query);
	if($result){
     header("Location: H.php");		
	}
}
else{
?>
<div style="margin-left:80px;">
<img src="https://www.happyfares.in/Content/Images/Feedback.jpg" height="360" width="1300"/></div><br>
<div class="card" style="width: 33rem;margin-left:80px;">
  <div class="card-body">
    <h2 class="card-title" style="margin-left:60px;">Feedback</h2>
  </div>
  <ul class="list-group list-group-flush">
   <form action="" method="POST">
    <li class="list-group-item">
	<input type="text" name="name" class="i" placeholder="Name*" required />
	</li>
    <li class="list-group-item">
	<input type="email" name="email" class="i" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="rahul1234@gmail.com" placeholder="Email*" required />
	</li>
    <li class="list-group-item">
	<input type="text" name="source" class="i" autocomplete="on" placeholder="Source*" required />
	</li>
	<li class="list-group-item">
	<input type="text" name="dest" class="i" autocoplete="on" placeholder="Destination*" required />
	</li>
	<li class="list-group-item">
	<select style="width:223px;height:40px;" name="query">
    <option selected disabled>What is the nature of your query?</option>
    <option value="Appreciation">Appreciation</option>
    <option value="Suggestion">Suggestion</option>
    <option value="Complaint">Complaint</option>
    <option value="Request">Request</option>
    <option value="Enquiry">Enquiry</option>
    </select>
	</li>
    <li class="list-group-item">
	<textarea rows="5" cols="40" name="tarea" required>Write your feedback here...</textarea>
	</li>
	<li class="list-group-item">
	<input type="submit" name="submit"  value="Submit" />
	</li>
  </ul>
</div>
<?php } ?>
<br><br>
<?php include "./footer.html" ?>
</body>
</html>
 

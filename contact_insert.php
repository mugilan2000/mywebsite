<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
	<link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<?php
require('db.php');
date_default_timezone_set('Asia/Calcutta');
$name=$_REQUEST['your_name'];
$email=$_REQUEST['your_email'];
$number=$_REQUEST['your_phone'];
$message=$_REQUEST['comments'];
$create_datetime = date("Y-m-d H:i:s");
$sql= "Insert into `contact` (name, email, mobileNumber, message, create_datetime) values ('$name','$email','$number','$message','$create_datetime')";
if(mysqli_query($con,$sql)){
	echo "<div class='form'>
    <h4>Hi, " ,$_REQUEST['your_name']; echo "!</h4>
                  <h3>Your message is sent successfully</h3><br/>
                  <p class='link'>Click here to <a href='home.php'>Home</a></p>
                  </div>";
}
else{
	echo "ERROR: Hush! Sorry $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
</body>
</html>
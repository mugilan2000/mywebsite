<?php
require('db.php');
$id=$_GET['id'];
$deletequery = "DELETE from upload where id=$id";
$query_run=mysqli_query($con, $deletequery);
?>
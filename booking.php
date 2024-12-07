<?php

$con=mysqli_connect('localhost','root','','travels_tourism');

$firstname=$_POST['ffirst'];
$lastname=$_POST['flast'];
$email=$_POST['femail'];
$city=$_POST['city'];
$phone=$_POST['fphone'];
$destination=$_POST['fdesti'];
$fromdate=$_POST['ffdate'];
$todate=$_POST['ftdate'];


$sql="INSERT INTO `booking`(`id`,`ffirst`,`flast`,`femail`,`city`,`fphone`,`fdesti`,`ffdate`,`ftdate`) VALUES (0,'$firstname','$lastname','$email','$city','$phone','$destination','$fromdate','$todate')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:booking.html');
}


?>
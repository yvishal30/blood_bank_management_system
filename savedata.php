<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$date=$_POST['date'];
$camp_location=$_POST['camp_loc'];

$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address,date,camp_location) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}','{$date}','{$camp_location}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost/Blood-Bank-And-Donation-Management-System-master/home.php");
// header("Location: http://localhost/Blood-Bank-And-Donation-Management-System-master/welcome.php");

mysqli_close($conn);
 ?>

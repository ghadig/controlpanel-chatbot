<?php
$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3']; 
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];


$conn= new mysqli("localhost","root","","slider");

if(isset($_POST['save'])) 
{ 
$stmt=$conn->prepare("insert into angle(motor1,motor2,motor3,motor4,motor5,motor6)
values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')");
$stmt->execute();
  
  echo "The data is inserted correctly..";
}
elseif(isset($_POST['run']))
{
$stmt=$conn->prepare("insert into run (start) values ('1')");
$stmt->execute();
	echo "The data is inserted correctly..";
}
else { echo "try again";}
 ///////////////////////////////////////////////////////////////////////////////////////////
 
?>

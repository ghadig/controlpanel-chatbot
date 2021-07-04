<?php
$conn= new mysqli("localhost","root","","slider");
if(isset($_POST['rhight'])){
	 $stmt=$conn->prepare("insert into direction(direction) values('r')");
	 $stmt->execute();
	 echo "RIGHT";
 }
 elseif(isset($_POST['left'])){
	 	 $stmt=$conn->prepare("insert into direction(direction) values('l')");
	 $stmt->execute();
	 echo"LEFT";
 }
 elseif(isset($_POST['top'])){
	 	 $stmt=$conn->prepare("insert into direction(direction) values('t')");
	 $stmt->execute();
     echo"TOP";
 }
 elseif (isset($_POST['bottom'])){
	 	 $stmt=$conn->prepare("insert into direction(direction) values('b')");
	 $stmt->execute();
     echo "BOTTOM";
 }
 elseif(isset($_POST['stop'])){
	 	 $stmt=$conn->prepare("insert into direction(direction) values('s')");
	 $stmt->execute();
	 echo "STOP";
 }
 else{ echo" try again";}
?>
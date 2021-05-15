<?php
include "dbcon.php";
if(isset($_POST['submit'])){
	 $a=$_POST ['username'];
	 $b=$_POST ['mobile_no'];
	 $c=$_POST ['email'];
	 $d=$_POST ['password'];
	 $e=$_POST ['password1'];
	 $f=$_POST ['gender'];
	 if($d==$e){
	 $data ="INSERT INTO user(username,mobile_no,email,password,gender)values('$a','$b','$c','$d','$f')";
 	$result=mysqli_query($con,$data);
 	if($result){
	header("Location:login.php");

}
}
else{
		echo"<script> alert('password does not match') </script>";
		header("Location:signup.php");
	}
}
?>
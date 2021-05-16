<?php include "header.php" ?>
<div class="container">
	<h1 class="promoted_text">Add <span style="border-bottom: 5px solid #f75959;">ADS</span></h1>
	<form method="post">
		<br>
		 <div class="form-group">
		 	 <h3>Title</h3>
		 	 <input type="text" name="name" placeholder="enter title" class="form-control">
		 </div>

		  <div class="form-group">
		 	 <h3>Description</h3>
		 	 <input type="text" name="description" placeholder="enter title" class="form-control">
		 </div>

		  <div class="form-group">
		 	 <h3>Image</h3>
		 	 <input type="file" name="image">
		 </div>

		  <div class="form-group">
		 	 <h3>Price</h3>
		 	 <input type="text" name="price" placeholder="enter price" class="form-control">
		 </div>

		 <div>
		 	<h3>condition</h3>
		 	<input type="radio" name="p_condition" value="new">new
		 	<input type="radio" name="p_condition" value="old">old
		 </div>

		 <div>
		 	<h3>Name of publisher</h3>
		 	<input type="text" name="p_name" placeholder="enter publishers name" class="form-control">
		 </div>

		  <div class="form-group">
		 	 <h3>publishers mobile number</h3>
		 	 <input type="text" name="p_number" placeholder="enter number" class="form-control">
		 </div>

		  <div class="form-group">
		 	 <h3>address</h3>
		 	 <input type="text" name="address" placeholder="enter address" class="form-control">
		 </div>

		  <div class="form-group">
		 	 <input type="submit" name="submit" class="btn btn-danger">
		 </div>
		 <br>

	</form>
</div>
<?php include "footer.php" ?>


<?php
include "dbcon.php";
if(isset($_POST['submit'])){
	 $a=$_POST ['title'];
	 $b=$_POST ['description'];
	 $c=$_POST ['image'];
	 $d=$_POST ['price'];
	 $e=$_POST ['p_condition'];
	 $f=$_POST ['p_name'];
	 $g=$_POST ['p_number'];
	 $h=$_POST ['address'];
	 
	 $data ="INSERT INTO advertisement(title,description,image,price,p_condition,p_name,p_number,address)values('$a','$b','$c','$d','$e','$f','$g','$h')";
 	$result=mysqli_query($con,$data);
 	if($result){
	header("Location:add-ads.php");

}

else{
		echo"<script> alert('please check your fields') </script>";
		header("Location:add-ads.php");
	}
}
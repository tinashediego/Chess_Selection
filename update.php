<?php
include 'conn.php';
$id = $_GET['id'];
$sel = "SELECT * FROM chess_players WHERE id='$id'";
$query = mysqli_query($con,$sel);
$check = mysqli_fetch_array($query);

if(isset($_POST['done'])){
	//$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['uname'];
	$age = $_POST['age'];

	$edit = "UPDATE chess_players SET fname='$fname',lname='$lname',username='$username',age='$age' WHERE id='$id'";
	$que = mysqli_query($con,$edit);

	if($que){
		header('location:index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		
		FIRST NAME:<input type="text" name="fname" value="<?php echo $check['fname']; ?> "><br>
	LAST NAME:<input type="text" name="lname" value="<?php echo $check['lname']; ?> "><br>
	USERNAME:<input type="text" name="uname" value="<?php echo $check['username']; ?> "><br>
	AGE:<input type="text" name="age" value="<?php echo $check['age']; ?> "><br>
	
	<input type="submit" name="done" value="Edit"><br>
	</form>
	</body>
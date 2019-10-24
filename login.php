<?php
include 'conn.php';

if(isset($_POST['done'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['uname'];
	$age = $_POST['age'];

	$insert = "INSERT INTO chess_players (fname,lname,username,age) VALUES ('$fname','$lname','$username','$age')";
	$que = mysqli_query($con,$insert);

	if($que){
		echo "inserted";
	}
}
			
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="index.php">
		FIRST NAME:<input type="text" name="fname"><br>
	LAST NAME:<input type="text" name="lname"><br>
	USERNAME:<input type="text" name="uname"><br>
	AGE:<input type="text" name="age"><br>
	
	<input type="submit" name="done" value="INSERT"><br>
	</form>
	<table>
		<thead>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Age</th>
			<th>Update</th>
			<th>Delete</th>
		</thead>
<tbody>
	<?php
$query = "SELECT * FROM chess_players";
		$q = mysqli_query($con,$query);

		while ($res = mysqli_fetch_array($q)) {
			?>

	
	<tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['fname']; ?></td>
		<td><?php echo $res['lname']; ?></td>
		<td><?php echo $res['username']; ?></td>
		<td><?php echo $res['age']; ?></td>
		<td><button><a href="update.php?id= <?php echo$res['id'];?>">Update</a></button></td>
		<td><button><a href="delete.php?id= <?php echo$res['id']; ?>">Delete</a></button></td>
		<?php
}
		?>
	</tr>
	
</tbody>



	</table>
</body>
</html>

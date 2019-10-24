<?php
include 'conn.php';
$id = $_GET['id'];

$del = "DELETE FROM chess_players WHERE id=$id ";
mysqli_query($con,$del);

header('location:index.php');

?>
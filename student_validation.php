<?php
session_start();
error_reporting(0);
include 'connection.php';

if (isset($_POST['send'])) {

$studentId = $_POST['studentId'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM students where studentId = '$studentId' and password = '$password' limit 1");

$rows = mysqli_num_rows($query);

$_SESSION['UserSession'] = $studentId;

if ($rows == 1) {
	header('location:student_dashboard.php');
	echo "<script>alert('Welcome')</script>";
}
else{
	echo "<p class='text-danger'><b>Incorrect Credentials</b></p>";
}




}
?>
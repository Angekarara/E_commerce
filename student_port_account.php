<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
		.container{
			margin-top: 90px;
		}
	</style>
	<title></title>
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-header bg-info">
						<div class="card-title">
							<h3 class="text-light text-center">Student Portal</h3>
						</div>
					</div>

					<div class="card-body">
						<?php  
include 'connection.php';



if (isset($_POST['send'])) {
echo "<br>";
$studentId = $studentId;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$select = mysqli_query($conn,"SELECT email FROM students where email='$email'");

$row = mysqli_num_rows($select);

while ($data = mysqli_fetch_array($select)) {
	$db_email = $data['email'];
}

if ($email == $db_email) {
	die("<div class='alert alert-danger'>Try another E-mail this has been used, <a href='lecturer_port_account.php'><b>Try Again!</></a></div>");
}
else{
	$query = mysqli_query($conn,"INSERT INTO students VALUES($studentId, '$fname', '$lname', '$email', '$password')");

	if ($query == true) {

	echo"<div class='alert alert-success'>Student's Account Created, <a href='student_port_login.php'><b>Login Now!</></a></div>";
	
	}

	else{
	
	echo"<div class='alert alert-danger'>Student's Account Not Created, <a href='student_port_login.php'><b>Try Again!</></a></div>";

	}

}


}
?>
						<form action="student_port_account1.php" method="POST">
							<!-- FirstName -->
							<div class="input-group mb-2">
								<input type="text" name="studentId" placeholder="StudentId" class="form-control">
							</div>

							<div class="input-group mb-2">
								<input type="text" name="fname" placeholder="First Name" class="form-control">
							</div>

							<!-- LastName -->
							<div class="input-group mb-2">
								<input type="text" name="lname" placeholder="Last Name" class="form-control">
							</div>

							<!-- Email -->
							<div class="input-group mb-2">
								<input type="email" name="email" placeholder="E-Mail" class="form-control">
							</div>

							<!-- Password -->
							<div class="input-group mb-2">
								<input type="password" name="password" placeholder="*********" class="form-control">
							</div>

							<div>
								<button class="btn btn-info btn-block" name="send">Create Account</button>
								
							</div>

						</form>
					</div>

					<div class="card-footer">
						<div class='text-center'>
							<a href="login_student.php">Login</a>
						</div>

					</div>

				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
</html>




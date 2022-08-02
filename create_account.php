<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Portal</title>

    <!-- Custom fonts for this template-->
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Crete Account</h2>
        </div>
        <br>
        <?php 

            if (isset($_POST['create_account'])) {
                
                $studentId = $_POST['studentId']; 
                $firstname = $_POST['firstname']; 
                $lastname = $_POST['lastname']; 
                $email = $_POST['email']; 
                $department = $_POST['department']; 
                $faculty = $_POST['faculty']; 
                $password = $_POST['password']; 

                $query = mysqli_query($connection, "INSERT INTO students VALUES ($studentId, '$firstname', '$lastname', '$email', 'department', '$faculty', '$password')");
                if ($query = true) {
                    
                    die("Student account is created successfuly <a href='login.php'><b>now Login</b></a>");
                    #echo "Student account is created successfuly <a href='login.php'><b>now Login</b></a>";
                    #header("Location: login.php");
                    #echo "<script>alert('Student account is created')</script>";
                }else{
                    die("NOT CREATED". mysqli_error($connection));
                }
            }


             ?>
        <div class="row mt-1">

           <div class="row">
             <div class="col-md-12"></div>
             <div class="col-md-12">
               <form action="" method="POST">
                  

            <div class="input-group mb-2">
                <input type="text" required name="studentId" placeholder="studentId" class="form-control">
            </div>

               <div class="input-group mb-2">
                <input type="text" required name="firstname" placeholder="firstname" class="form-control">
            </div>
            <div class="input-group mb-2">
                <input type="text" required name="lastname" placeholder="lastname" class="form-control">
            </div>
            <div class="input-group mb-2">
                <input type="email" required name="email" placeholder="email" class="form-control">
            </div>
            <div class="input-group mb-2">
                <input type="text" required name="department" placeholder="department" class="form-control">
            </div>
            <div class="input-group mb-2">
                <input type="text" required name="faculty" placeholder="faculty" class="form-control">
            </div>
            <div class="input-group mb-2">
                <input type="password" required name="password" placeholder="******" class="form-control">
            </div>
<center><br>
                <input type="submit" name="create_account" style="width: 200px;" class="btn btn-block btn-primary" value="Create account">
                        <br>
                        <a href="login.php">Already has an account</a>
        </center>      
               </form>



             </div>
           </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Bootstrap core JavaScript-->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="dashboard/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>
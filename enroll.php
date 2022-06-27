<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server,$username,$password, $database);
if (isset ($_POST["submitbutton"]))
{
    $fullname= $_POST["fullname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];
    


    $insertData =mysqli_query($conn, "INSERT INTO enrollment(fullname,  phonenumber, email, gender, course)
    VALUES('$fullname', '$phonenumber', '$email', '$gender','$course')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <!--Navbar starts here-->
       <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Zalego academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menus">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-link active">Home</a>
                        <a href="Aboutus.html" class="nav-link">About Us</a>
                        <a href="enroll.php" class="btn btn-primary">Register now</a>
                    </div>
                </div>
            </div>
    
        </nav> 
    
        <!--Navbar ends-->
        <main class="p-5 bg-light mb-4 ">
            <h1>JULY SOFTWARE ENGENEERING BOOTCAMP</h1>
            <i class="fa fa-calendar"></i> 20th July 2022

        </main>
        <p>Looking for a place to kickstart your career in Technology?
            Whether you're a local, new in town or just cruizing through we've got 
            loads of great tips and events for you.  
        </p>
        <h2>Sign up today ?</h2>
                <form action="enroll.php" method="post">
                  <div class="card">
                    <div class="card-body">

                       <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="fullname" class="form-lebel">Full Name</label>
                             <input type="text" class="form-control" name="fullname" placeholder="Enter Your Full Name">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="phonenumber" class="form-lebel">Phone Number</label>
                             <input type="tel" class="form-control" name="phonenumber" placeholder="+2547...">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="email" class="form-lebel">Email Address</label>
                             <input type="text" class="form-control" name="email" placeholder="Please enter your email">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="gender" class="form-lebel">What's your gender</label>
                             <select name="gender" class="form-select" aria-label="default select example">
                                <option selected>--select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                             </select>
                            
                        </div>
                             <p>In order to complete your registration to the bootcamp, you are required to select one course you will be 
                            undertaking. please Note that this will be your learning track during the 2-week immersion.
                             </p>
                        <div class="mb-3 col-lg-6 ">
                            <select name="course" class="form-control multiplchose_questiontypes" id="selector">
                                <option value="" disable selected>--choose your course--</option>
                                <option value="web design">web design</option>
                                <option value="cyber security">cyber security</option>
                                <option value="Android development">Android development</option>

                            </select>
                        </div>
                        <p>You agree by providing your information you understand all our data privacy protection policy 
                            outlined in our Terms & conditions and the prvacy policy statements
                        </p>
                        <h4>Agree terms and condition.</h4>
                        <button type="submit" name="submitbutton" class="btn btn-primary">submit application</button>

                       <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                        </div>
                    </div>
                  </div>
                        
                </form>
                <div class="mb-3 col-lg-6 col-md-6">
                             <button type="submit" name="submitbutton" class="btn btn-primary">Subscribe</button>
                        </div>
            </div>
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js.map"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
       <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
    
</body>
</html>
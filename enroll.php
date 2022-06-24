<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Aboutus.html">
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
                <form action="Aboutus.php" method="post">
                  <div class="card">
                    <div class="card-body">

                       <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="fullname" class="form-lebel">Full Name</label>
                             <input type="text" class="form-control" placeholder="Enter Your Full Name">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="phonenumber" class="form-lebel">Phone Number</label>
                             <input type="tel" class="form-control" placeholder="+2547...">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="email" class="form-lebel">Email Address</label>
                             <input type="text" class="form-control" placeholder="Please enter your email">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12 ">
                             <label for="gender" class="form-lebel">What's your gender</label>
                             <input type="text" class="form-control" placeholder="--select your gender?--">
                        </div>
                             <p>In order to complete your registration to the bootcamp, you are required to select one course you will be 
                            undertaking. please Note that this will be your learning track during the 2-week immersion.
                             </p>
                        <div class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             select your course
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                             <li><a class="dropdown-item" href="#">Web Design</a></li>
                             <li><a class="dropdown-item" href="#">Cyber Security </a></li>
                             <li><a class="dropdown-item" href="#">Database</a></li>
                           </ul>
                            
                        </div>
                        <p>You agree by providing your information you understand all our data privacy protection policy 
                            outlined in our Terms & conditions and the prvacy policy statements
                        </p>
                        <h4>Agree terms and condition.</h4>
                        <button type="submit" class="btn btn-primary">submit application</button>

                       <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                        </div>
                    </div>
                  </div>
                        <div class="mb-3 col-lg-6 col-md-6">
                             <button type="submit" name="submitbutton" class="btn btn-primary">Subscribe</button>
                        </div>
                       </div>
                    
                </form>
            </div>
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js.map"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
       <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
    
</body>
</html>
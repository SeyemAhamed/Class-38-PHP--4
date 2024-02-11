
<?php
include 'config.php';

if(isset($_POST['submit'])){
  $name =   $_POST['name'];
  $email =  $_POST['email'];
  $phone =  $_POST['phone'];
  $roll =   $_POST['roll'];
  $class =  $_POST['class'];
  $address= $_POST['address'];
  
  $query ="INSERT INTO students(name,roll,phone,email,address,class)VALUES('$name','$roll','$phone','$email','$address','$class')";
  
  $success = mysqli_query($connection,$query);
  
  if($success){
    header('location:index.php');
}

else{
    echo 'Failed to insert. Try again';
}


}



?>




<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP CRUD</title>
  </head>
  <body>
   <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Student Read</a>
        

          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Create Student</a>
        
        
        </ul>
      </form>
    </div>
  </div>
</nav>
  <!-- Table -->
  
  <section class="mt-5">
  <div class="container mt-5">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" value="" class="form-control" id="fullName" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" value="" class="form-control" id="email" placeholder="name@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" value="" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>

                <div class="mb-3">
                    <label for="roll" class="form-label">Roll</label>
                    <input type="number" name="roll" value="" class="form-control" id="roll" placeholder="Enter your roll number" required>
                </div>

                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input type="number" name="class" class="form-control" id="class" placeholder="Enter your class" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" placeholder="Enter your address" required></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
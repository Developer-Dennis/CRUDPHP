<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT into crud (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data inserted Successfully";                               
    } else {
        die (mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
     <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"
                 placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Number</label>
                <input type="text" class="form-control" 
                placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" 
                placeholder="Enter Your Password" name="password" autocomplete="off">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</>
        </form>
     </div>
  </body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $con = mysqli_connect("localhost:3306","root","","Restaurant");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $email = $_POST['email'];
    $name  = $_POST['name'];
    $sql = "insert into user_info (Name,Email_id) values ('$name','$email')";

    if (mysqli_query($con, $sql)) {
        #echo "New record created successfully";
    } 
       # echo "Error: " . $sql . "<br>" . mysqli_error($con);
     
     #}
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bootstrap theme </title>
</head>
<body>
<!--NAVBAR-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="main-nav">
        <div class="container">
            <img src="img/b76d1659-8b33-4fba-a84c-265834d193d7_200x200.png" class="img-fluid">
            <a href="index.html" class="navbar-brand">Restaurant Finder</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
  
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                   <a href="index.html" class="nav-link">Home</a>
               </li> 
               <li class="nav-item">
                  <a href="Search.php" class="nav-link">Search</a>
               </li> 
               <li class="nav-item">
                  <a href="Book.php" class="nav-link">Book</a>
               </li> 
              <li class="nav-item">
                  <a href="About.html" class="nav-link">About</a>
              </li> 
               <li class="nav-item">
                  <a href="Help1.php" class="nav-link">Help</a>
               </li> 
            </ul>
        </div>
        </div>
      </nav>

<!--CONTACT FORM-->
<form action="Help1.php" method="POST">
<section id="contact" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-4">
                            <div class="card-body">
                                <h4>Get in Touch</h4>
                                <p>For Further queries or suggestions to improve the working of our website, contact the below given email-id. For help, fill out the form. An email will be sent at the earliest to avoid any inconvience.</p>

                                <h4>Email</h4>
                                <p>sonalshet11@gmail.com
                                shenoychaitra2000@gmail.com
                                </p>
                                
                            </div>
                        </div>
                    </div>
              <div class="col-md-8">
                        <div class="card p-4">
                            <div class="card-body">
                                <h3 class="text-center">Please fill the form given below</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">User Name:</label>
                                            <input type="name" class="form-control" id="name" name="name"/>
                                            </div>
                                    </div>

                                    <div class="col-md-12">
                                            <div class="form-group">
                                           <label for="email">Email address:</label>
                                            <input type="email" class="form-control" id="email" name="email"/>
                                        </div>
                                     </div>
                                      <div class="container">
                                        <button type="Submit" class="btn btn-primary" name='submit'>Submit</button>
                                      </div>
                                      </div>
</section>
</form>



 <!--FOOTER-->
 <footer id="main-footer" class="text-center p-4 fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Copyright &copy; <span id="year"></span> Restaurant Finder</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script> 
    <script>
    //get the current year for the copyright

    $('#year').text(new Date().getFullYear());
    </script>
<script>
    $(document).ready(function ()
{
    function click()
    {
        $('#dialog').dialog({
            autoOpen: false,
            width: 250,
            height: 180,
            modal : true
        });
    }
});
  </script>
</body>
</html>
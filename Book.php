<?php
    $con = mysqli_connect("localhost:3306","root","","Restaurant");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if(isset($_POST['Submit1']))
    {

  $resn=$_POST['search'];
  $type=$_POST['choose'];
  $name=$_POST['name'];
  $cn=$_POST['number'];
  $time=$_POST['time'];
  $date=$_POST['date'];
  $sql="UPDATE TABLE_INFO SET TABLE_INFO.TABLES_BOOKED=TABLE_INFO.TABLES_BOOKED+1 WHERE RNAME='$resn' 
   and TABLE_NAME='$type' ";
  $sql1="insert into customer_info (CNAME,CNUMBER,CTIME,CDATE,RNAME) values ('$name','$cn','$time','$date','$resn')";
  if( mysqli_query($con,$sql) && mysqli_query($con,$sql1))
  {
    header("Location:Booking.html");
    exit();
  }
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

<!--BOOKINGS-->
<div class="container">
<div class="container">
<form action="Book.php" method="POST">

<div class="container">
  <div class="form-group row">
    <div class="col-xs-4">
      <label for="name" class="mt-3">Name:</label>
      <input type="text" class="form-control" id="name" name="name"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label for="username">Contact No:</label>
    <input type="text" class="form-control" id="number" name="number"/>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label for="time">Enter time:</label>
    <input type="text" class="form-control" id="time" name="time"/>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label for="username">Enter date:</label>
    <input type="text" class="form-control" id="date" name="date"/>
    <p><strong>Note: Enter the date in yy/mm/dd format</strong></p>
  </div>
  </div>
</div>

<h1 class="lead mt-3">Choose the RESTAURANT from the dropbox</h1>
<select class="mt-2" NAME="search">
  <optgroup label="MANGALORE"></optgroup>
  <option value="SAVOURY">SAVOURY</option>
  <option value="BRIO CAFE">BRIO CAFE</option>

  <optgroup label="MANIPAL"></optgroup>
  <option value="CHARCOAL BBQ">CHARCOAL BBQ</option>
  <option value="EGG FACTORY">EGG FACTORY</option>

  <optgroup label="UDUPI"></optgroup>
  <option value="WOODLANDS RESTAURANT">WOODLANDS RESTAURANT</option>
  <option value="SAFFRON VEG CUISINE">SAFFRON VEG CUISINE</option>

  <optgroup label="BANGALORE"></optgroup>
  <option value="EDO JAPANESE RESTRO">EDO JAPANESE RESTRO</option>
  <option value="BLACK PEARL">BLACK PEARL</option>

</select>
<h1 class="lead mt-3">Choose the Type of Table from the dropbox</h1>
<select class="mt-2" NAME="choose">
  <option value="AC">AC</option>
  <option value="NAC">NON-AC</option>
</select>
</h1>
<form action="Booking.html" method="post" target="_blank">
    <button type="Submit" name="Submit1" class="btn btn-primary">Book</button>
</form>
</div>

<br>
</form>
</div>
</div>

 <!--FOOTER-->
 <footer id="main-footer" class="text-center p-4 mt-3 fixed-bottom">
    <div class="container fixed-bottom">
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    //get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    </script>

</body>
</html>
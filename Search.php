<?php
    $con = mysqli_connect("localhost:3306","root","root","Restaurant");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
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

<!--SEARCH BAR-->
<div class="container">
<div class="container">
<form action="Search.php" method="POST">
<h1 class="lead mt-5">Choose the city from the dropbox</h1>
<select class="mt-2" NAME="city">
  <option value="MANGALORE">MANGALORE</option>
  <option value="BANGALORE">BANGALORE</option>
  <option value="UDUPI">UDUPI</option>
  <option value="MANIPAL">MANIPAL</option>
</select>
</div>

<div class="container">
<h1 class="lead mt-5">Choose the cuisine from the dropbox</h1>
<select class="mt-2" name="cuisine">
  <option value="INDIAN">INDIAN</option>
  <option value="ITALIAN">ITALIAN</option>
  <option value="JAPANESE">JAPANESE</option>
  <option value="CONTINENTAL">CONTINENTAL</option>
</select>
</div>

<div class="container">
<h1 class="lead mt-5">Choose Vegetarian Or Non-Vegetarian</h1>
<select class="mt-2" name="vorn">
  <option value="VEG">VEGETARIAN</option>
  <option value="NONVEG">NON-VEGETARIAN</option>
</select>
</div>

<div class="container mt-5">
<input type="Submit" name="Submit"/>
</div>

</form>

<!--OUTPUT ON SEARCH-->
<div class="container pb-5">
<button type="button" class="btn btn-info mt-3" data-toggle="collapse" data-target="#demo">Restaurant Info</button>
  <div id="demo" class="collapse">
    <div class="container mt-5 mb-3">
  <div class="container">
<table id="table">
  <tr id="th">
    <th>RESTAURANT NAME</th>
    <th>AMBIENCE</th>
    <th>CUISINE</th>
    <th>VEG/NON-VEG</th>
    <th>LOCATION</th>
    <th>RATINGS</th>

  </tr>
  <?php
  if(isset($_POST['Submit']))
  {
    $city1 = $_POST['city'];
    $cuisine = $_POST['cuisine'];
    $veg =$_POST['vorn'];

  $sql="SELECT RNAME,AMBIENCE,LOCATION,RATINGS,CUISINE,VORN FROM RES_INFO R INNER JOIN FEATURES F ON R.RID=F.RID WHERE
        F.CUISINE='$cuisine' AND F.VORN='$veg' AND LOCATION LIKE '%$city1' ";
  $result=$con-> query($sql);

  if(!empty($result) && $result -> num_rows >0)
  {
    while($row = $result-> fetch_assoc())
    {
      echo "<tr><td width=20%>".$row["RNAME"]."</td><td width=10%>".$row["AMBIENCE"]."</td><td width=10%>".$row["CUISINE"]."</td><td width=15%>".$row["VORN"]."</td><td width=20%>".$row["LOCATION"]."</td><td width=10%>".$row["RATINGS"]."</td></tr>";
      echo "\n";
      echo "\n";
    }
    echo "</table>";
  }
}
?>
</table>
</div>
</div>
  </div>
</div>


   

 <!--FOOTER-->
 <footer id="main-footer" class="text-center p-4 fixed-bottom">
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
<?php
include('./core/init.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="assets\css\main.css">
    <title>My Dairy</title>
  </head>
  <body>
    <main>
   <nav style="background-color:#669AD4;" class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">MyDiary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form action="include/login.php" method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="emailorphone" placeholder="Username">
      <input class="form-control mr-sm-2" type="text" placeholder="password" name="password">
      <input class="btn  my-2 my-sm-0"  name="login" type="submit"/>
    </form>
  </div>
</nav>

<section>
<div class="container">
<div class="row">
  <div class="col-12 col-sm-8 col-md-6 col-lg-8">
   <h2>See What People Express</h2>
  <div class="row">
  <?php  
  $public_content = $getFromD->select_days_public("public");
  foreach($public_content as $content){  
    ?>
    <div  class="col-12 col-sm-6 col-lg-4 frontline">
      <p><?php echo $content->HowsYourday;  ?></p>
    </div>
    <?php
  }
  ?>    
  </div>
  </div>
  <div class="col-12 col-sm-4 col-md-6 col-lg-4">
  <h2>New Here,? Sign Up, Its Free And Secure</h2>
    <form action="./include/registration.php" method="POST">
    <div class="row">
      <div class="col">
        <input name="firstname" type="text" require  class="form-control"  placeholder="First name">
      </div>
      <div class="col">
        <input type="text" name="lastname" require class="form-control" placeholder="Last name">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <input type="text" name="emailorphone" class="form-control" placeholder="Email/phone">
      </div>
    </div>
    <br>
        <div class="row">
      <div class="col">
      <label for="dob">Select DOB</label>
        <input type="date" name="dob" class="form-control" placeholder="Email/phone">
      </div>
    </div>
     <br>
    <div class="row">
      <div class="col">
        <input type="password" name="password" class="form-control" placeholder="Confirm Password">
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col">
        <input type="submit" name="register" value="Sign Up...." class="btn" style="background-color:#FFF44E">
      </div>
    </div>
  </form>

  </div>
</div>
</div>
</section>

    </main>

    <footer>
    <div   style="background-color:#669AD4;" class="fixed-bottom p-3">
    this is footer
    </div>
    
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
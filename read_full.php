<?php include('core/init.php'); ?>
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

    <title>View All Days</title>
  </head>
  <body>
   <nav  style="background-color:#669AD4;" class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="view_all_days.php">View all Days</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<?php
 
if(isset($_GET['id'])){
  $selected_day = $_GET['id'];
  if(empty($selected_day)){
    header("Location:view_all_days.php");
  }  
  $result = $getFromD->find_day_by_id($selected_day);
}else{
  header("Location:view_all_days.php");
}
?>
<section class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2> <?php echo $result->created_at ?> </h2>
                <br>
                <p class="lead"><?php echo $result->HowsYourday ?></p>
            </div>
            
            <div class="col-md-4 border">
            <h2> Recently Added Memorys </h2>

         <ul class="list-group list-group-flush">
            <?php
            $results = $getFromD->view_all_days($_SESSION['id']);
            foreach($results as $result){
            ?>
            <li class="list-group-item"> <a href="read_full.php?id=<?php echo $result->id ; ?>"><?php echo $result->HowsYourday; ?></a></li>
            <?php } ?>
        </ul>
            </div>
        </div>
    </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
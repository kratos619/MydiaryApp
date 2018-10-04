<?php include('core/init.php');
if($_SESSION['id'] == null){
header('Location:index.php');
}
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

    <title>Hello, world!</title>
  </head>
<body>
    <main>
   <nav  style="background-color:#669AD4;" class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">Welcome User</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_all_days.php">View all Days</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Settings</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="include/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<section>
<header>
<div class="container">
    <div class="row ">
    <br>
    <?php echo $_SESSION['id']; ?>
    <div class="col-md-4 ml-md-auto border ">
    <div class="d-flex justify-content-start">
         <p class="lead"><?php echo date('D') ?></p>
    </div>
    <div class="d-flex justify-content-end">
     <h2 ><?php echo date('jS') ?></h2>
    </div>
    <div class="d-flex justify-content-start">
         <h3 class="lead font-weight-bold"><?php echo date('F') ?></h3>
    </div>
    </div>
    </div>
</div>

</header>
</section>

<section class="m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
      <?php
      if(isset($_POST['create_day'])){
        $day = $_POST['data'];
        if(empty($day)){
         echo $message = "Fields Can Cot Be Empty";
        }else{
          $getFromD->checkUserInput($day);
        $result = $getFromD->create_day($_SESSION['id'],$day);
        if(!$result){
          echo "Your Memory Save";
        }else{
          echo "you have error";
        }

        }
       
      }
      ?>
                <form action="home.php" method="POST">
                     <div class="form-group">
                        <textarea name="data" placeholder="Hows Your Day Start Writing Here..." class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <input type="submit" name="create_day" value="Submit Your Day" class="btn btn-success"/>
                </form>
            </div>
            <div class="col-md-4">
               <p class="lead">
                   Post Status : Private
               </p>
               <br>
               <small>Note You Can Make Your Day Or Thought Public In In View all Days Section </small>
            </div>
        </div>
    </div>
</section>
    </main>
</body>
</html>

<?php include ('core/init.php'); ?>
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

<section class="p-4">
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day/Date</th>
      <th scope="col">View</th>
      <th scope="col ">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$days = $getFromD->view_all_days($_SESSION['id']);
foreach($days as $day){
  //var_dump($day);

?>
    <tr>
      <th scope="row">#</th>
      <td><?php echo $day->created_at; ?></td>
      <td><a href="<?php echo $day->id; ?>" data-toggle="modal" data-target="#<?php echo $day->id; ?>exampleModal">Read</a></td>
      <td>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger">Delete Memory</a></li>
        <li class="list-inline-item"><a href="edit_days.php?edit_day_id=<?php echo $day->id; ?>" class="btn btn-sm btn-danger">Edit Memory</a></li>
      </ul>
      </td>
    </tr>
    <!-- Modal -->
<div class="modal fade" id="<?php echo $day->id; ?>exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <article><?php echo $day->HowsYourday; ?></article>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="read_full.php?id=<?php echo $day->id;  ?>" class="btn btn-primary">Read Full</a>
      </div>
    </div>
  </div>
</div>
    <?php
}
    ?>
  </tbody>
</table>
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
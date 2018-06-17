<?php
require_once './app.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet" >

  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">signup</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          </ul>
        </div>
      </div>
    </nav>


    <div class="container-fluid text-center">    
      <div class="row  content">
        <div class="col-sm-2  sidenav">

        </div>
        <div class="col-sm-8 jumbotron text-left"> 
<?php if (isset($_GET['sm'])) : ?>
              <div class="alert alert-success">your detalis been saved</div>
<?php endif; ?>
          <h2 class="text-center">keep in touch</h2>
          <form action="app.php" method="POST" id="gobeForm">
            <div class="form-group">
              <label for="name">Name </label>
              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" name="name">

            </div>  
            <div class="form-group ">
              <label for="birthdate">Birthdate </label>
              <input type="datetime-local" class="form-control" id="birthdate" aria-describedby="birthdate"  name="birthdate">

            </div> 


            <div class="form-group">
              <label for="phone">Phone </label>
              <input type="number" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter phone" name="phone">

            </div>  
            <div class="form-group input-group mb-3">
              <label for="gender error">Gender</label><br>
              <div class="form-check form-check-inline ">
                <label class="form-check-label" class="error" for="inlineRadio1">Male</label>
                <input class="form-check-input" type="radio" name="Radio" id="inlineRadio1" value="male">


              </div>
              <div class="form-check form-check-inline ">
                <label class="form-check-label" for="inlineRadio2">Female</label>
                <input class="form-check-input" type="radio" name="Radio" id="inlineRadio2" value="female">

              </div>
              <div class="form-check form-check-inline ">
                <label class="form-check-label " for="inlineRadio3">Other</label>
                <input class="form-check-input" type="radio" name="Radio" id="inlineRadio3" value="other">

              </div>
            </div>
            <div class="form-group">
              <input type="hidden" name="ID" id="ID" >
            </div>
            <div class="form-check input-group mb-3">
              <label class="form-check-label error" for="agree" style="color:black" required>Agree to terms</label>
              <input type="checkbox" class="form-check-input" id="agree[]" name="agree[]">



            </div>
            <input name="submit" type="submit" class="btn btn-primary">
          </form>
          <hr>
          <h3>Test</h3>
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">

        </div>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>





  </body>
</html>

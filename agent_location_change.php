<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Agent Location</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="agent.php">Home <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> </li>
          <li class="nav-item dropdown">
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Something else here</a> 
    </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
</form>
      </div>
      <span class="nav-item active"><a class="nav-link" href="logout.php">Logout<span class="sr-only"></span></a></span></nav>
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">To change your location details, fill up the form below</h1>
              <p class="text-center">&nbsp;</p>
              <p>&nbsp;</p>
              <p class="text-center">&nbsp; </p>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
  <div class="row">
        <div class="col-12 col-md-8 mx-auto">
          <div class="jumbotron">
            <div class="row text-center">
              <div class="text-center col-12">
                <h2>Update Agent Location</h2>
              </div>
              <div class="text-center col-12">
                <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
                <form id="feedbackForm" action = "reset_agent_location_change.php" method = "POST" class="text-center">
                  <div class="form-group">
                    <label for="new_agent_latitude">New Agent Latitude</label>
                    <input type="text" class="form-control" id="new_agent_latitude" name="new_agent_latitude" placeholder="New Agent Latitude">
                    <span  class="form-text text-muted" style="display: none;">Please enter a valid latitude</span>
                  </div>
                  <div class="form-group">
                    <label for="new_agent_longitude">New Agent Longitude</label>
                    <input type="text" class="form-control" id="new_agent_longitude" name="new_agent_longitude" placeholder="New Agent Longitude">
                    <span id="emailHelp" class="form-text text-muted" style="display: none;">Please enter a valid longitude </span>
                  </div>
<button type="submit" id="feedbackSubmit" onclick="myFunction()" class="btn btn-primary btn-lg">Update</button>
					<script>
						function myFunction() {
  							alert("Location Changed Successfully");
						}
					</script>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © RYAN KIBET. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.3.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>
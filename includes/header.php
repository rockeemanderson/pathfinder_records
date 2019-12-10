<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Youth Ministries Records Database  - <?php echo $title?> </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  

</head>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Youth Ministry Records Database</a>
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="resources.php">Resources</a>
          <a class="nav-link" href="addrecord.php">Add Record</a>
          <a class="nav-link" href="viewrecords.php">View Members</a>
          <a class="nav-link" href="edituser.php">Edit Member</a>

             
          <?php
            if(!isset($_SESSION['id'])){
              ?>
              <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            <?php }else{ ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $SESSION['username'] ?>!</span><span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>

            <?php };   ?>
          
            
          
      <!--<a class="btn btn-primary" href="#">Log In</a> -->


    </div>
  </nav>

  <header class="masthead text-white text-center"><div class="overlay"></div><div class="container"><div class="row"><div class="col-xl-9 mx-auto">
          <h1 class="mb-5"><?php echo $banner?></h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <!--<form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>-->
        </div>
      </div>
    </div>
  </header>
  <br>
<br>
<br>
<body>

         


<br/>
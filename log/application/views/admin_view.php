<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('Admin');?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Admin');?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin');?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Admin');?>">Home</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a class="nav-link" href="<?php echo site_url('Login/logout');?>">Log out</a>
    </span>
  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-4">Hello, <?php echo $this->session->userdata('username');?>!</h1>
  <p class="lead">You are logged in as an <?php echo $this->session->userdata('fname');?> <?php echo $this->session->userdata('lname');?></p>
  <hr class="my-4">
  <p></p>
  
  <a class="btn btn-primary btn-lg" href="<?php echo site_url('Profile');?>" role="button">Profile</a>
  <a class="btn btn-primary btn-lg" href="<?php echo site_url('Tasks');?>" role="button">Tasks</a>
</div>
</body>
</html>
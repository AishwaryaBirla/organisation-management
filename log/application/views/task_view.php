<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
        <a class="nav-link" href="<?php echo site_url('Admin');?>">Home <span class="sr-only">(current)</span></a>
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
  <p class="lead">You are logged in as an <?php echo $this->session->userdata('fname');?>  <?php echo $this->session->userdata('lname');?></p>

  <br><br>
  <h2>Tasks TO DO</h2>
<div class="container" style="border: 0.8px solid"> 
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Assigned By</th>
        <th>Task</th>
        <th>Start date</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Remark</th>
    </thead>

    </tr>
      <?php 
  foreach ($fetch_info->result() as $row ) {
        if($this->session->userdata('username')==$row->ass_to){
          ?>
               
    <tbody>
      <a class="nav-link" href="#"> <tr>
        <td><?php echo $row->ass_by;?></td>
        <td><?php echo $row->task;?></td>
        <td><?php echo $row->start;?></td>
        <td><?php echo $row->deadline;?></td>
        <td><?php echo $row->status;?></td>
        <td><?php echo $row->remark;?></td>
        
      </tr>
      <?php }}?>

    </tbody>
  </a>
  </table>
  
  </table>
</div>
<br><br>

<?php if($this->session->userdata('level')<3)
      { ?>

<h2>Tasks Assigned</h2>
<div class="container" style="border: 0.8px solid"> 
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Assigned To</th>
        <th>Task</th>
        <th>Start date</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Remark</th>
    </thead>

    </tr>
      <?php
      
  foreach ($fetch_info->result() as $row ) {
        if($this->session->userdata('username')==$row->ass_by){
          ?>      
    <tbody>
      <tr>
        <td><?php echo $row->ass_to;?></td>
        <td><?php echo $row->task;?></td>
        <td><?php echo $row->start;?></td>
        <td><?php echo $row->deadline;?></td>
        <td><?php echo $row->status;?></td>
        <td><?php echo $row->remark;?></td>
        
      </tr>
      <?php }}?>

    </tbody>
  </table>
  
  </table>
</div>
<br>

<div  style="text-align:center; ">
<a class="btn btn-primary btn-lg" href="<?php echo site_url('Add');?>" role="button">Add</a>
</div>
<?php }?>
</div>
</body>
</html>


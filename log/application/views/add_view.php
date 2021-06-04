<!DOCTYPE html>
<html>
<head>
  <title>Add tasks</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <br>
    <br>
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-md-offset-4">
        <form action="<?php echo base_url(); ?>index.php/Add/index" method="post">
<?php
  if($this->uri->segment(2)=="inserted")
  {
    echo ' <p class = "text-suceess">Data insterted</p>';
  }
?>
  <div class="form-group">
    <label for="assigned to">Assigned to</label>
    
    <select class="form-control" name="ass_to">
     <?php
     

      foreach ($fetch_data->result() as $row ) 
      {
      if($row->username!=$this->session->userdata('username'))
      {?>
        <option><?php echo $row->username;?></option>
      <?php
     }}
     ?>   
      
    </select>
  </div>
  <div class="form-group">
    <label for="deadline">deadline</label>
    <input type="date" name="deadline">
    
  </div>
  <div class="form-group">
    <label for="start">start date</label>
    <input type="date" name="start">
    
  </div>
  <div class="form-group">
    <label for="task">Task</label>
    <textarea class="form-control" name="task" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="remark">Remarks</label>
    <textarea class="form-control" name="remark" rows="2"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="add" value="add">Add</button>
</form>
        </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $id=$_GET['id'];
    $link=mysqli_connect("localhost","root","","final_crud");
    $sql="SELECT * FROM head_section";

    $query=mysqli_query($link,$sql);
    $rows=mysqli_fetch_assoc($query);

    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form role="form" action="head_update.php?id=<?php echo $rows['id'];?>" method="post">
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputCallUs">Call Us</label>
          <input type="sell" class="form-control" name="call_us" value="<?php echo $rows['call_us'];?>" placeholder="Enter Phone number">
        </div>
        <div class="form-group">
          <label for="exampleInputCompanyName">Company Name</label>
          <input type="text" class="form-control" name="company_name" value="<?php echo $rows['company_name'];?>" placeholder="Enter Company name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $rows['email'];?>" placeholder="Enter Email">
        </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
</body>
</html>
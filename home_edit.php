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
    $sql="SELECT * FROM home_section WHERE id=$id";
    $query=mysqli_query($link,$sql);
    $rows=mysqli_fetch_assoc($query);
    
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form role="form" action="home_update.php" method="post">
      <div class="card-body">
    </div>
    <div class="form-group">
      <label for="exampleInputCompanyName">Title</label>
      <input type="text" class="form-control" name="title" value=<?php echo $rows['title'];?> placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="exampleInputCompanyName">Sub Title</label>
      <input type="text" class="form-control" name="subtitle" value=<?php echo $rows['subtitle'];?> placeholder="Enter Sub Title">
    </div>
    <div class="form-group">
      <label for="exampleInputCompanyName">Pragraph</label>
      <input type="text" class="form-control" name="pragraph" value=<?php echo $rows['pragraph'];?> placeholder="Enter Pragraph">
    </div>
    <div class="form-group">
      <label for="exampleInputCompanyName">About Us</label>
      <input type="text" class="form-control" name="aboutus" value=<?php echo $rows['aboutus'];?> placeholder="Enter About Us">
    </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" value=<?php echo $rows['image'];?>>
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
</body>
</html>
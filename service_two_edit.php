<?php

    $id=$_GET['id'];
    $link=mysqli_connect("localhost","root","","final_crud");
    $sql="SELECT * FROM service_two WHERE id=$id";
    $query=mysqli_query($link,$sql);
    $rows=mysqli_fetch_assoc($query);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <form role="form" action="service_two_update.php?id=<?php echo $rows['id'];?>" method="post">
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputCompanyName">Title One</label>
            <input type="text" class="form-control" name="title" value=<?php echo $rows['title'];?> placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputCompanyName">Pragraph One</label>
            <input type="text" class="form-control" name="pragraph" value=<?php echo $rows['pragraph'];?> placeholder="Enter Pragraph">
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
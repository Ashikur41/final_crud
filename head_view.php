<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <table>
        <thead>
            <ul>
              <tr>
                <td>Phone Number</td>
                <td>Company Name</td>
                <td>Email Address</td>
                <td>Action</td>
              </tr> 
            </ul>
        </thead>
    </table>
            <?php
            
            $link=mysqli_connect("localhost","root","","final_crud");
            $query="SELECT * FROM head_section" ;

            $sql=mysqli_query($link,$query);
            while($rows=mysqli_fetch_assoc($sql)){

            
            
            ?>
    <tbody>
        <ul>
            <tr>
                <td><?php echo $rows['call_us'];?></td>
                <td><?php echo $rows['company_name'];?></td>
                <td><?php echo $rows['email']?></td>
                <td><a href="head_edit.php?id= <?php echo $rows['id'];?>"> Edit</a></td>
                <td><a href="head_delete.php?id= <?php echo $rows['id'];?>"> Delete</a></td>
            </tr>
        </ul>
        <?php
        
    }
        ?>
    <tbody>
</body>
</html>
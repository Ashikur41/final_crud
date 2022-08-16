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
                    <td>Title</td>
                    <td>Sub Title</td>
                    <td>Pragraph</td>
                    <td>About Us</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </ul>
        </thead>
    </table>
            <?php
            
            $link=mysqli_connect("localhost","root","","final_crud");
            $sql="SELECT * FROM home_section";

            $query=mysqli_query($link,$sql);
            while($rows=mysqli_fetch_assoc($query)){

           

            
            
            ?>
    <tbody>
        <ul>
            <tr>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['subtitle'];?></td>
                <td><?php echo $rows['pragraph'];?></td>
                <td><?php echo $rows['aboutus'];?></td>
                <td><img src="<?php echo $rows['image'];?>" alt=""></td>
                <td><a href="home_edit.php?id=<?php echo $rows['id'];?>">Edit</a></td>
                <td><a href="home_delete.php?id=<?php echo $rows['id'];?>">Delete</a></td>
            </tr>
        </ul>
        <?php
        
    }
        ?>
    </tbody>
</body>
</html>
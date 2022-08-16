<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <ul>
                <tr>
                    <td>Title</td>
                    <td>pragraph</td>
                    <td>Action</td>
                </tr>
            </ul>
        </thead>
    </table>
            <?php
            
                $link=mysqli_connect("localhost","root","","final_crud");
                $sql="SELECT * FROM service_two";

                $query=mysqli_query($link,$sql);
                while($rows=mysqli_fetch_assoc($query)){

               

            ?>
    <tbody>
        <ul>
            <tr>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['pragraph'];?></td>
                <td><a href="service_two_edit.php?id=<?php echo $rows['id'];?>">Edit</a></td>
                <td><a href="service_two_delete.php?id=<?php echo $rows['id'];?>">Delete</a></td>
            </tr>
        </ul>
        <?php
         }
        ?>
    </tbody>
</body>
</html>
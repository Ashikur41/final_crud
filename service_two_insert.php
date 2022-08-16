<?php

   $title=$_POST['title'];
   $pragraph=$_POST['pragraph'];


    $link=mysqli_connect("localhost","root","","final_crud");
    $sql="INSERT INTO service_two(title,pragraph) VALUES ('$title','$pragraph')";

    $query=mysqli_query($link,$sql);

    if($query){
        header("location:service_two_view.php");
    }
    else{
        
    }


?>
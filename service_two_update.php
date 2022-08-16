<?php

    $id=$_GET['id'];
    $title=$_POST['title'];
    $pragraph=$_POST['pragraph'];

    $link=mysqli_connect("localhost","root","","final_crud");
    $sql="UPDATE service_two SET title='$title',pragraph='$pragraph' WHERE id='$id'";

    $query=mysqli_query($link,$sql);
   
    if($query){
        header("location:service_two_view.php");
    }
    else{
        header("location:service_two_view.php");
    }

?>
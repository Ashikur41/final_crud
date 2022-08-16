<?php

$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$pragraph=$_POST['pragraph'];
$aboutus=$_POST['aboutus'];
$image=$_POST['image'];

$link=mysqli_connect("localhost","root","","final_crud");

$sql="INSERT INTO home_section(title,subtitle,pragraph,aboutus,image) VALUES ('$title','$subtitle','$pragraph','$aboutus','$image')";
$query=mysqli_query($link,$sql);

if($query){
    header("location:home_view.php");
}
else{
    
}

?>
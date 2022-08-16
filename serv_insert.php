<?php

$sectionname=$_POST['sectionname'];
$titlename=$_POST['titlename'];

$link=mysqli_connect("localhost","root","","final_crud");
$sql="INSERT INTO service_one(sectionname,titlename)VALUES('$sectionname','$titlename')";

$query=mysqli_query($link,$sql);

if($query){
    header("location:serv_view.php");

}
else{

}
?>
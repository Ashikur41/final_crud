<?php

$sectionname=$_POST['sectionname'];
$titlename=$_POST['titlename'];
$subtitle=$_POST['subtitle'];
$tagname=$_POST['tagname'];
$discripstion=$_POST['discripstion'];
$pragraph=$_POST['pragraph'];
$button=$_POST['button'];

$link=mysqli_connect("localhost","root","","final_crud");
$sql="INSERT INTO about_section(sectionname,titlename,subtitle,tagname,discripstion,pragraph,
button) VALUES('$sectionname','$titlename','$subtitle','$tagname','$discripstion',
'$pragraph','$button')";

$query=mysqli_query($link,$sql);

if($query){
    header("location:abo_view.php");
}
else {
  
}

?>
<?php
$id=$_GET['id'];
$call_us=$_POST['call_us'];
$company_name=$_POST['company_name'];
$email=$_POST['email'];

$link=mysqli_connect("localhost","root","","final_crud");
$query="UPDATE head_section SET call_us='$call_us',company_name='$company_name',email='$email' WHERE id=$id";

$query_run=mysqli_query($link,$query);
if ($query_run) {
    header("Location:head_view.php");
}
else{
    header("Location:head_view.php");
}

?>
<?php

   $call_us=$_POST['call_us'];
   $company_name=$_POST['company_name'];
   $email=$_POST['email'];

   $link=mysqli_connect("localhost","root","","final_crud");
   $sql=" INSERT INTO head_section(call_us,company_name,email) VALUES ('$call_us','$company_name','$email')";

   $query=mysqli_query($link,$sql);

   if($query){
       header("location:head_view.php");
   }
   else{

   }


?>
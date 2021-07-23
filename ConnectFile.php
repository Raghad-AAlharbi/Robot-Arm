<?php

$conn = mysqli_connect("localhost","root","","robot");

   $slide1 = $_POST['slide1'];  
   $slide2 = $_POST['slide2'];  
   $slide3 = $_POST['slide3'];  
   $slide4 = $_POST['slide4'];  
   $slide5 = $_POST['slide5'];  
   $slide6 = $_POST['slide6']; 
   $onoff  = $_POST['onoff'];

   if($conn->connect_error){
      die('connection failed :'.$conn -> connect_error);
   }else{
      $data = "INSERT INTO control(motor1,motor2,motor3,motor4,motor5,motor6,onoff) values('$slide1','$slide2','$slide3','$slide4','$slide5 ','$slide6','$onoff') ";
      mysqli_query($conn,$data);
      echo "data saved successfully..";
   }
?>
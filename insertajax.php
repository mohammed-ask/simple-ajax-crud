<?php
$conn = mysqli_connect('localhost',"root","","ajax_tutorial") or die('failed');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "INSERT INTO ajax (name,email,password) Value ('$name','$email',$password)";
if(mysqli_query($conn,$query)){
  echo '1';
}else{
  echo '0';
}



?>
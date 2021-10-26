<?php
$conn = mysqli_connect('localhost',"root","","ajax_tutorial") or die('failed');
$name = $_POST['name1'];
$email = $_POST['email1'];
$password = $_POST['password1'];
$id = $_POST['id1'];
$query = "UPDATE ajax SET name = '$name',email = '$email',password = $password WHERE id = '$id'";
if(mysqli_query($conn,$query)){
    echo 1;
}else{
    echo 0;
}

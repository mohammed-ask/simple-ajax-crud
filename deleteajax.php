<?php
$conn = mysqli_connect('localhost',"root","","ajax_tutorial") or die('failed');
$id = $_POST['id'];
$query = "DELETE from ajax where id = '$id'";


if(mysqli_query($conn,$query)){
    echo 1;
}else{
    echo 0;
};

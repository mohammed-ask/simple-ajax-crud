<?php
//  header('Content-type: application/json');
$conn = mysqli_connect('localhost',"root","","ajax_tutorial") or die('failed');
$query = "select * from ajax";
$exec = mysqli_query($conn,$query);


$response = "<table style=''><tr> <th style='width:10%'>dname</th><th>email</th><th>password</th></tr>";
while($fetch = mysqli_fetch_assoc($exec)){
    $response .= "<tr><td>$fetch[name]</td><td>$fetch[email]</td><td>$fetch[password]</td><td><button  class='btn-sm btn-primary edit'  data-id='$fetch[id]'  data-toggle='modal' data-target='#exampleModal1'>Edit</button> <button  data-id='$fetch[id]'  class='btn-sm btn-danger delete'>Delete</button></td></tr>";
}
 echo $response  .= "</table>";
$arr = [
    'one' => ["moon" => 'oneday',"loon" => 'oneday'],
    'two' => ["moon" => 'oneday',"loon" => 'oneday'],
    'three' => ["moon" => 'oneday',"loon" => 'oneday'],
    ];
// echo  json_encode($response);

?>
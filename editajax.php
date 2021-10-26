<?php
$conn = mysqli_connect('localhost',"root","","ajax_tutorial") or die('failed');
$id = $_POST['id'];
$query = "select * from ajax where id = '$id'";
$exec = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($exec) ){
echo "<form class='form-group'>
        <div class='form-group'>
            <label for='name'>Name Here</label>
            <input type='text' class='form-control' id='name1' aria-describedby='name' placeholder='Enter Name' value='$row[name]'>
            <input type='text' id='id1' hidden value='$row[id]'>
        </div>
        <div class='form-group myform'>
            <label for='exampleInputEmail1'>Email address Here</label>
            <input  type='email' class='form-control' id='email1' aria-describedby='emailhelp' placeholder='enter mail' value='$row[email]'>
           
        </div>
        <div class='form-group'>
            <label for='exampleInputPassword1'>Password Here</label>
            <input type='password' class='form-control' id='password1' placeholder='password' value='$row[password]'>
        </div>
      
            <button type='submit' class='btn btn-primary submit1'>Submit</button>
            </div>
            </div>  
      
</form>";
}
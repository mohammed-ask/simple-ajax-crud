<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="bootstrap-simple-admin-template/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="bootstrap-simple-admin-template/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="bootstrap-simple-admin-template/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link href="bootstrap-simple-admin-template/assets/css/master.css" rel="stylesheet">
    <link href="bootstrap-simple-admin-template/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
<style>
.modal-body1{
    padding:20px;
}
</style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="bootstrap-simple-admin-template/assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
             
                    </ul>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                   
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="message" style="">
             
            </div>
           
            <!-- end of navbar navigation -->
            <div class="model-user" style="margin-left:45%">
            
            <button type="button" style="float:right" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
                Add User
            </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body1">
        <form class="form-group">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
          
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input  type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
      
            <button type="submit" class="btn btn-primary submit">Submit</button>
            </div>
            </div>  
      
</form>
      </div>
      
    </div>

 

<!-- Modal 2 -->

  </div>
  <div class="resp" style="background-color:lightgreen;text-align:center;padding:20px;width:70%;margin:auto">

</div>


<!-- Modal 2 -->

  <div class="model-user mymodal" style="margin-left:70%">
 <div class="modal fade" id="exampleModal1"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        
      </div>
      
    </div>

 



  </div>
</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.6.0.js"
 ></script>
<script>
    // SHOW DATA THROUGH AJAX
        
        $(document).ready(function () {
            function loadajax(){
                // var name = $(#name).val();
                // var email = $(#email).val();
                // var password = $(#password).val();
                $.ajax({
                    type: "post",
                    url: "loadajax.php",
                   success: function (response) {
                         $('.resp').html(response) ;  
                    }
                });
            }    
            loadajax();
      // INSERT DATA THROUGH AJAX      
            $('.submit').click(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                $.ajax({
                    type: "post",
                    url: "insertajax.php",
                    data: {name:name,email:email,password:password},
                    
                    success: function (response) {
                        if(response == 1){
                                 function fun() {
                                     setTimeout(function() {
                                        $('.message').fadeOut('slow');
                                        }, 3000);
                                          $('.message').html("<div style='padding:20px;background-color:lightblue'>Data Inserted Successfully</div>"); 
                                  }
                                  fun();
                            $('.form-group').trigger('reset');
                            loadajax();
                        }
                        else{
                                alert('try again')
                            }
                    }
                });
            })

         // EDIT DATA THROUGH AJAX   
            $(document).on('click','.edit',function () {
               var id = $(this).data('id');
                $.ajax({
                    type: "post",
                    url: "editajax.php",
                    data: {id:id},
                    success: function (response) {
                        $('.modal-body').html(response);
                    }
                });
              });

              $(document).on('click','.submit1',function (e) {
                e.preventDefault();
                var name1 = $('#name1').val();
                var email1 = $('#email1').val();
                var password1 = $('#password1').val();
                var id1 = $('#id1').val();
                console.log(id1);
               
                $.ajax({
                    type: "post",
                    url: "save_edit_ajax.php",
                    data: {name1:name1,email1:email1,password1:password1,id1:id1},
                   
                    success: function (response) {
                        if(response == 1){
                            $(".close").click(); 
                                 function fun() {
                                     setTimeout(function() {
                                        $('.message').fadeOut('slow');
                                        }, 3000);
                                          $('.message').html("<div style='padding:20px;background-color:lightblue'>Data Updated Successfully</div>"); 
                                  }
                                  fun();
                            $('.myform').trigger('reset');
                            loadajax();
                        }
                        else{
                                alert('try again')
                            }
                    }
                });
             })
         // DELETE DATA THROUGH AJAX
         
        
             $(document).on('click','.delete',function() {
               var id = $(this).data('id');
                $.ajax({
                    type: "post",
                    url: "deleteajax.php",
                    data: {id:id},
                    success: function (response) {
                       if(response==1){
                            alert('deeted');
                            loadajax();
                        }else{
                            alert('error occured');
                        }
                    }
                }); 
              });

            var func = (i,...p) => {
                console.log(`arrow function ${i}`);
                console.log(p);
                p.forEach(function myFunction(item, index) {
                      console.log(`${index} = ${item} <br>`); 
});
            };
            func('working fine',4,10,15,36);
            
            
              
        });




    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="bootstrap-simple-admin-template/assets/vendor/jquery/jquery.min.js"></script> 
    <script src="bootstrap-simple-admin-template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-simple-admin-template/assets/js/script.js"></script>
    
</body>

</html>

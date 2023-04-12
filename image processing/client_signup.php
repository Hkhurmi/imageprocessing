		<?php require_once 'inc/uheader.php'; 
require_once 'inc/connection.php'; ?>				
				
						<!--//timer-->
				

<!-- /contact -->
	<div class="map-w3ls" style="width:100%; float:left; margin-top:100px;">
				 <div class="wthree_title_agile">
						        <h3 style="margin-bottom:0px !important;"> User <span>Signup</span>  </h3>
				</div>
						 <p class="sub_para">It’s time to report Skin issue</p>
		<div class="col-md-12" id="Login" style="margin:0 auto;">
		
		<?php
                        if(isset($_POST['submit2']))
                        {
							
                              $fname=$_POST['fname'];
                        
						   $lname=$_POST['lname'];
						   
						   $username=$_POST['username'];
						    $pass=$_POST['pass'];
							$rpass=$_POST['rpass'];
                          $email=$_POST['email'];
						  
						  $gender=$_POST['gender'];
						   $mobile=$_POST['mobile'];
						   $address=$_POST['address'];
						    if($pass==$rpass)
                            {
                               $query=mysqli_query($connect,"insert into ip_user(fname,lname,username,pass,gender,email,mobile,address) values('$fname','$lname','$username','$pass','$gender','$email','$mobile','$address')");
                                    if(mysqli_affected_rows($connect))
                                    {
                                        echo '<div class="alert alert-success">User is added Successfully. You can Login Now</div>';
                                    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger">Error Occured.</div>';
                                    }
                                }
                                else
                                {
                                    echo '<div class="alert alert-warning">Password and Re-type Password Should be Match</div>';
                                }
                            }
                            
                        
                      ?>
		
		<div class="contact-middle1" style="float:none;width:100%; margin:0 auto;">
					
					    <div class="login well well-small" style="max-width: 550px; !important">
        <div class="center">
          <i class="fa fa-users"></i> 
        </div>
		<form class="login-form" action="client_signup.php" method="post">
	
      <div class="login-wrap">
    <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="First Name" name="fname" autofocus required>
        </div>
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Last Name" name="lname" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
        </div>
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input type="password" class="form-control" placeholder="Retype Password" name="rpass" required>
        </div>
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <select name="gender" class="form-control selectpicker" required>
                                                <option >Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                               
                                            </select> </div>
		
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
          <input type="number" class="form-control" placeholder="(+1) Mobile Number" name="mobile" required>
        </div>
		<div class="input-group">
          <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
          <input type="text" class="form-control" placeholder="Address" name="address" required>
        </div>
        <!-- <label class="checkbox"> -->
                <!-- <input type="checkbox" value="remember-me"> Remember me -->
                <!-- <span class="pull-right"> <a href="#"> Forgot Password?</a></span> -->
            <!-- </label> -->
        <button class="btn btn-primary btn-lg btn-block" style="background-image: linear-gradient(to right,#ff0000,#164069); " type="submit" name="submit2">Signup</button>
      </div>
	  </form>
	      
       </div><!--/.login-->	</div>
				
				
		</div>
		</div>
				</div>
<!-- //contact -->
<?php require_once 'inc/footer.php'; ?>
		<?php require_once 'inc/uheader.php'; 
		require_once 'inc/connection.php'; ?>				
				
						<!--//timer-->
		 <?php 
                         if(isset($_POST['submit']))
                        {
							
                            $user_login=$_POST['username'];
                            $pass_login=md5($_POST['pass']);
                          $query_login=mysqli_query($connect, "select * from ip_admin where username='$user_login' and password='$pass_login'");
                            if(mysqli_num_rows($query_login)>0)
                             {
								  while($row_login=mysqli_fetch_array($query_login))
                                    {
                                $_SESSION['admin_id']=$row_login['id'];  
                                 
                                echo '<script>
                                
                                window.location.href="admin/index.php";
                                </script>';                                 
                                //$url=$_SERVER['REQUEST_URI'];
                                header("refresh:1;Location: admin/index.php"); 
			                    }
                            }
                             else
                             {
                                 echo '<script>
                                 alert("username and password mismatch.");
                                 </script>';
                            }
						}							
							
                        ?>
						

<!-- /contact -->
	<div class="map-w3ls" style="width:100%; float:left; margin-top:100px;">
				 <div class="wthree_title_agile">
						        <h3 style="margin-bottom:0px !important;"> Admin <span>Login</span>  </h3>
				</div>
						 <p class="sub_para">It’s time to Diagnose </p>
		<div class="col-md-12" id="Login" style="margin:0 auto;">
		<div class="contact-middle1" style="float:none;width:100%; margin:0 auto;">
					
					    <div class="login well well-small">
        <div class="center">
          <i class="fa fa-lock "></i> 
        </div>
		<form class="login-form" action="admin.php" method="post">
	
      <div class="login-wrap">
    
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="pass" required>
        </div>
        <!-- <label class="checkbox"> -->
                <!-- <input type="checkbox" value="remember-me"> Remember me -->
                <!-- <span class="pull-right"> <a href="#"> Forgot Password?</a></span> -->
            <!-- </label> -->
        <button class="btn btn-primary btn-lg btn-block" style="background-image: linear-gradient(to right,#ff0000,#164069); " type="submit" name="submit">Login</button>
      </div>
	  </form>
       </div><!--/.login-->	</div>
				
				
		</div>
		</div>
				</div>
<?php require_once 'inc/footer.php'; 
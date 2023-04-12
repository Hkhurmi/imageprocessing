<?php ob_start();
include('include/header.php');
include('include/sidebar.php');
include('include/connection.php');
?>
   <!--main content start-->
    <section id="main-content">
	
	                     
	
      <section class="wrapper">
        <!--overview start-->
         <div class="row">
          <div class="col-lg-12">
		  
		   <?php
                        if(isset($_POST['submit2']))
                        {
							$id=$_POST['id'];
							$fname=$_POST['fname'];
                        
						   $lname=$_POST['lname'];
						   
						   $username=$_POST['username'];
						   
                          $email=$_POST['email'];
						  $gender=$_POST['gender'];
						   $mobile=$_POST['mobile'];
						   $address=$_POST['address'];
                            if(!empty($fname))
                            {
                               $query=mysqli_query($connect,"update ip_user set fname='$fname',lname='$lname',username='$username',email='$email',gender='$gender',mobile='$mobile' ,address='$address' where id='$id'");
                                    if(mysqli_affected_rows($connect))
                                    {
                                        echo '<div class="alert alert-success">User is updated Successfully.</div>';
                                    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger">Error Occured.</div>';
                                    }
                                }
                                else
                                {
                                    echo '<div class="alert alert-warning">Enter User Name First</div>';
                                }
                            }
                            
                        
                      ?>
		  
            <section class="panel">
              <header class="panel-heading">
                Update User Details
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="">
                    <div class="form-group ">
                      <label for="sid" class="control-label col-lg-2">User ID <span class="required">*</span></label>
                      <div class="col-lg-10">
					     <?php
                                   if(isset($_GET['cid']))
                          {
                            
                                    $id=$_GET['cid'];
                                    $query1=mysqli_query($connect,"select * from ip_user where id='$id'");
                                    if(mysqli_num_rows($query1)>0)
                                    {
                                        $row1=mysqli_fetch_array($query1);
                                        $id=$row1['id'];
										$fname=$row1['fname'];
                         
						   $lname=$row1['lname'];
						   
						   $username=$row1['username'];
						   
                          $email=$row1['email'];
						    $gender=$row1['gender'];
						   $mobile=$row1['mobile'];
						   $address=$row1['address'];
										
                                        
                                    }
                                  }
                                  
                                   ?>
					    <input class=" form-control" id="id" value="<?php echo $id; ?>" name="id" type="text" readonly />
                      </div>
                    </div>
					
					
					<div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">First name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fname" value="<?php echo $fname ?>" name="fname" type="text" />
                      </div>
                    </div>
					
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Last name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="lname" value="<?php echo $lname ?>" name="lname" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="username" name="username" value="<?php echo $username;?>" type="text" />
                      </div>
                    </div>
                    
                    
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" value="<?php echo $email; ?>" name="email" type="email" />
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="gender" class="control-label col-lg-2">Gender <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select name="gender" class="form-control selectpicker" required>
                                                <option value="<?php echo $gender; ?>" Selected><?php echo $gender; ?></option>
                                                <option value="Male" >Male</option>
                                                <option value="Female">Female</option>
                                               
                                            </select>
                      </div>
                    </div>
					
                    <div class="form-group ">
                      <label for="mobile" class="control-label col-lg-2">Mobile <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="mobile" value="<?php echo $mobile; ?>" name="mobile" type="text" required>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" value="<?php echo $address; ?>" name="address" type="text" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-4">
					  <button class="btn btn-primary" style="background-color: #0064d2 !important;color: #FFF;" name="submit2" type="submit">Updates</button>
               
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
       
        <!-- statics end -->



      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
	
	
	
	
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
 
	
	
	
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
  
 
  
  var table = $('#example').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table

  
  $('#example tbody').on( 'click', 'tr', function () {
   
    alert(table.row( this ).data()[0]);

} );
});
</script>
</body>

</html>
 
 
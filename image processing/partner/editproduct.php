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
                            $vid=$_POST['vid'];
                     
						   $fullname=$_POST['fullname'];
						   
						   $username=$_POST['username'];
						    
                          $email=$_POST['email'];
						   $mobile=$_POST['mobile'];
						   $address=$_POST['address'];
						    $specialisation=$_POST['specialisation'];
                            if(!empty($fullname))
                            {
                               $query=mysqli_query($connect,"update ip_doctor set fullname='$fullname',username='$username',email='$email',mobile='$mobile' ,address='$address',specialisation='$specialisation' where id='$id'");
                                    if(mysqli_affected_rows($connect))
                                    {
                                        echo '<div class="alert alert-success">Doctor detail is updated Successfully.</div>';
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
                Update Product Details
              </header>
              <div class="panel-body">
               <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data" id="register_form" method="post" action="editproduct.php">
                    <div class="form-group ">
                      <label for="vid" class="control-label col-lg-2">Product ID <span class="required">*</span></label>
                      <div class="col-lg-10">
					 <?php
                                   if(isset($_GET['vid']))
                          {
                            
                                    $id=$_GET['vid'];
                                    $query1=mysqli_query($connect,"select * from ip_product where id='$id'");
                                    if(mysqli_num_rows($query1)>0)
                                    {
                                        $row1=mysqli_fetch_array($query1);
                                        $id=$row1['id'];
										$pcategory=$row1['pcategory'];
               
						   $pname=$row1['pname'];
						   
						   $pdescription=$row1['pdescription'];
						   
                          $pprice=$row1['pprice'];
						   $pimage=$row1['pimage'];

										
                                        
                                    }
                                  }
                                  
                                   ?>
					  
                        <input class=" form-control" id="pid" value="<?php echo $id; ?>" name="pid" type="text" readonly />
                      </div>
                    </div>
					
				<div class="form-group ">
                      <label for="pcategory" class="control-label col-lg-2">Select Category <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select name="pcategory" class="form-control selectpicker" required>
                                                 <option value="<?php echo $pcategory; ?>" selected><?php echo $pcategory; ?></option>
                                                <option value="Acne" >Acne</option>
                                                <option value="Actinic Keratosis">Actinic Keratosis</option>
                                                <option value="Rosacea">Rosacea</option>
												<option value="Eczemaa">Eczemaa</option>
                                            
                                             
                                            </select>
                      </div>
                    </div>
<div class="form-group ">
                      <label for="pname" class="control-label col-lg-2">Product Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="pname" value="<?php echo $pname; ?>" name="pname" type="text" />
                      </div>
                    </div>
								<div class="form-group ">
                      <label for="pdescription" class="control-label col-lg-2">Product Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="pdescription" value="<?php echo $pdescription; ?>" name="pdescription" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="pprice" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="pprice"  value="<?php echo $pprice; ?>"  name="pprice" type="text" required>
                      </div>
                    </div>	
 <div class="form-group ">
                      <label for="pimage" class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="file"  value="<?php echo $pimage; ?>" name="prdimage" required/>
                      </div>
                    </div>						
					<div class="form-group">
                      <div class="col-lg-offset-2 col-lg-6">
					  <button class="btn btn-primary" style="background-color: #0064d2 !important;color: #FFF;" name="submit2" type="submit">Save</button>
               
                        
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
 
 
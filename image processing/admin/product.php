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
					
                            
$pid=$_POST['pid'];

$pcategory=$_POST['pcategory'];
$pname=$_POST['pname'];
$pdescription=$_POST['pdescription'];
$pprice=$_POST['pprice'];
			
if(isset($_FILES['prdimage']))
	{
		$name=strtolower($_FILES['prdimage']['name']);
		$tmp_name=$_FILES['prdimage']['tmp_name'];
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		$compare=array('gif','jpeg','jpg','png');
		if(isset($name))
		{
			if(!empty($name))
			{
				if(in_array($ext,$compare))
				{
					$location='product/';
					if(file_exists($location.$name))
					{
						$l=3;
						$c='abcdefghijklmnopqrstuvwxyz';
						$name='';
						for($i=0;$i<=$l;$i++)
						{
							$name.=$c[rand(0,strlen($c))];
							}
							$name=$name.'.'.$ext;
					}
					if(move_uploaded_file($tmp_name,$location.$name))
					{
						$loc_file=$location.$name;
						$query="INSERT INTO ip_product (`pcategory`, `pname`, `pdescription`, `pprice`, `pimage`) VALUES ('$pcategory', '$pname', '$pdescription', '$pprice', '$loc_file')";
						 if(mysqli_query($connect,$query))
        {
			                  
            echo '<div class="alert alert-success">Product detail has been Added successfully.</div>';
			
        }
        else
        {
            echo '<div class="alert alert-danger">Problem Occured.</div>';
        }
					}
				}
				else
				{
					echo '<div class="alert alert-danger">Enter a valid image';
				}
			}
			else
				{
					echo '<div class="alert alert-danger">Select Image';
				}
		}
	}
	else{
	
           echo $_FILES['prdimage'];	
	}		   }
                      ?>
		  
            <section class="panel">
              <header class="panel-heading">
               Add Product
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data" id="register_form" method="post" action="product.php">
                    <div class="form-group ">
                      <label for="vid" class="control-label col-lg-2">Product ID <span class="required">*</span></label>
                      <div class="col-lg-10">
					    <?php

$Reg_Result = mysqli_query($connect,"select * from ip_product ORDER BY id desc");
$Reg_Row = @mysqli_fetch_array($Reg_Result,MYSQLI_ASSOC);
?>
					  
                        <input class=" form-control" id="pid" value="<?php echo $Reg_Row['id']+1; ?>" name="pid" type="text" readonly />
                      </div>
                    </div>
					
				<div class="form-group ">
                      <label for="pcategory" class="control-label col-lg-2">Select Category <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select name="pcategory" class="form-control selectpicker" required>
                                                 <option >-- Select --</option>
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
                        <input class=" form-control" id="pname" name="pname" type="text" />
                      </div>
                    </div>
								<div class="form-group ">
                      <label for="pdescription" class="control-label col-lg-2">Product Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="pdescription" name="pdescription" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="pprice" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="pprice"  name="pprice" type="text" required>
                      </div>
                    </div>	
 <div class="form-group ">
                      <label for="pimage" class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="file" name="prdimage" required/>
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
 
 
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
                          if(isset($_GET['vid']))
                          {
                            
                            $query_delete=mysqli_query($connect,"delete from ip_doctor where id='".$_GET['vid']."'");
                            if(mysqli_affected_rows($connect)>0)
                            {
                                echo '<script>
                                alert("Doctor detail has been deleted Successfully.");
                              var windowlocation = window.location.href.split("?")[0];
                               window.location.href =windowlocation;
                                </script>';
                            }
                          }
                           ?>
		  
            <section class="panel">
              <header class="panel-heading">
                Manage Doctor Users
              </header>
              <div class="panel-body table-responsive">
                <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th>ID</th>
                <th>Doctor User ID</th>
          
                <th>Doctor Name</th>
                

				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Specialised</th>
				<th>Action</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
			 <th>Doctor User ID</th>
          
                <th>Doctor Name</th>
                

				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Specialised</th>
				<th>Action</th>
            </tr>
        </tfoot>
 
        <tbody>
            <?php
                                      $query=mysqli_query($connect,"select * from ip_doctor ORDER BY uid desc");
                                      if(mysqli_num_rows($query)>0)
                                      {
                                           while($row=mysqli_fetch_array($query))
                                           {
                                                ?>
                                              <tr>
											  <td><?php echo $row['id']; ?></td>
                                                  <td><?php echo $row['uid']; ?></td>
                                                    <td><?php echo $row['fullname']; ?></td>
                                                  
                                                
												  <td><?php echo $row['username']; ?></td>
                                                      <td><?php echo $row['pass']; ?></td>
                                                  <td><?php echo $row['email']; ?></td>
                                                  <td><?php echo $row['mobile']; ?></td>
												  <td><?php echo $row['address']; ?></td>
												   <td><?php echo $row['specialisation']; ?></td>
												  <td>
												   <div class="btn-group">
												  <a class="btn btn-success white" href="editdoctor.php?vid=<?php echo $row['id'] ?>">Edit</a>
                        <a class="btn btn-danger white" href="managedoctor.php?vid=<?php echo $row['id'] ?>">Delete</a>
						</div>
						</td>
                                                  
                                              </tr>
                                                
                                                <?php
                                           }   
                                      } 
                                      ?>
			 </tbody>
    </table>
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
   
    //alert(table.row( this ).data()[0]);

} );
});
</script>
</body>

</html>
 
 
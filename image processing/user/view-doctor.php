<?php 
include('inc/header.php'); 
include('inc/connection.php');
?>
<style>
.table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }

</style>
<script>
$(document).ready(function() {

   
   // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
   $('.table-responsive-stack').each(function (i) {
      var id = $(this).attr('id');
      //alert(id);
      $(this).find("th").each(function(i) {
         $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
         $('.table-responsive-stack-thead').hide();
         
      });
      

      
   });

   
   
   
   
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
   
   
   
   
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });
      
    
   // window is less than 768px   
   } else {
      
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
      
      

   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
   
   
   
   

  
// document ready  
});




</script>
  <!-- ======= Hero Section ======= -->
   <main id="main">

    <section id="chefs" class="chefs body-content">
	
      <div class="container recipe-menu">

        <div class="section-title col-md-12">
          <h2>View <span>Diagnose </span> Status</h2>
         </div>
		
        <div class="row ">

          
		  <div class="col-md-12">
		  <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
    <thead >
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
    </thead>
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
												 
                                                  <td><a href="share-detail.php" />Share Detail</a>
                                              </tr>
       <?php
                                           }   
                                      } 
                                      ?>
    </tbody>
  </table>

		</div>  
      </div>
	  </div>
    	
	</section><!-- End Chefs Section -->
	<nav class="cart">
		<h3>List of orders: <span>36$</span></h3>
		<ol id="listOfOrders">
			</ol>
		<a class="btnStyle btnStyle3 finishOrder">Finish Order</a>
	</nav>
	
	

 </main><!-- End #main -->

  <script src="assets/js/custom.js"></script>
 <?php 
include('inc/footer.php');
ob_flush(); ?>

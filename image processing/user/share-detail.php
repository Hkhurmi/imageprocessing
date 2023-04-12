<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Share Detail</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Share Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>User Details </h2>
  </div>
<?php 
 if(isset($_SESSION['client_id']))
                          {
							  
                          $query = "update ip_user set consult='1' where id='".$_SESSION['client_id']."'";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          } 
						  ?>
  <div class="row">
      <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Detail has been shared with doctor</h4>
     </div>
  </div>
						  
</div>
	  
	  
       
      </div>
    </section>

  </main><!-- End #main -->
 <?php 
include('inc/footer.php');
ob_flush(); ?>